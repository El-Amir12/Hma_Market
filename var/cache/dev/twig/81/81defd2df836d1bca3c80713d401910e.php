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

/* admin/stock_batch/export_pdf.html.twig */
class __TwigTemplate_e07f5a917dd418c7db77b2e766d2faca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_batch/export_pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_batch/export_pdf.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Rapport des lots</title>
    <style>
        body {
            font-family: 'Arial', 'Helvetica', sans-serif;
            margin: 20px;
            font-size: 12px;
        }
        h1 {
            color: #2E86C1;
            text-align: center;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .header-info {
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        .header-info p {
            margin: 5px 0;
        }
        .filters {
            background: #f5f5f5;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 5px;
            border-left: 4px solid #2E86C1;
        }
        .filters-title {
            font-weight: bold;
            margin-bottom: 8px;
            color: #2E86C1;
        }
        .filter-row {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 5px;
        }
        .filter-item {
            background: white;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 11px;
        }
        .filter-label {
            font-weight: bold;
            color: #555;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th {
            background: #2E86C1;
            color: white;
            padding: 10px 8px;
            text-align: left;
            font-size: 11px;
        }
        td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 11px;
        }
        .footer {
            margin-top: 25px;
            text-align: center;
            font-size: 10px;
            color: #666;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
        .expired {
            background: #ffcccc;
        }
        .low-stock {
            background: #ffffcc;
        }
        .stats {
            margin-top: 15px;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 5px;
        }
        .badge {
            display: inline-block;
            padding: 2px 6px;
            border-radius: 3px;
            font-size: 10px;
        }
        .badge-expired {
            background: #dc3545;
            color: white;
        }
        .badge-warning {
            background: #ffc107;
            color: #333;
        }
        .user-info {
            background: #e8f4fd;
            padding: 8px 12px;
            border-radius: 5px;
            margin-bottom: 15px;
            border-left: 4px solid #2E86C1;
        }
    </style>
</head>
<body>
    <h1>RAPPORT DE GESTION DES LOTS</h1>
    
    <div class=\"header-info\">
        <p><strong>Date d'export :</strong> ";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["exportDate"]) || array_key_exists("exportDate", $context) ? $context["exportDate"] : (function () { throw new RuntimeError('Variable "exportDate" does not exist.', 119, $this->source); })()), "d/m/Y H:i:s"), "html", null, true);
        yield "</p>
        <p><strong>Entreprise :</strong> ";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 120, $this->source); })()), "companyName", [], "any", false, false, false, 120), "html", null, true);
        yield "</p>
    </div>

    <div class=\"user-info\">
        <p><strong>Exporté par :</strong> ";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 124, $this->source); })()), "html", null, true);
        yield "</p>
        <p><strong>Email :</strong> ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userEmail"]) || array_key_exists("userEmail", $context) ? $context["userEmail"] : (function () { throw new RuntimeError('Variable "userEmail" does not exist.', 125, $this->source); })()), "html", null, true);
        yield "</p>
        <p><strong>Rôle :</strong> ";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["userRoles"]) || array_key_exists("userRoles", $context) ? $context["userRoles"] : (function () { throw new RuntimeError('Variable "userRoles" does not exist.', 126, $this->source); })()), ", "), "html", null, true);
        yield "</p>
    </div>

    <div class=\"filters\">
        <div class=\"filters-title\">FILTRES APPLIQUES :</div>
        <div class=\"filter-row\">
            <div class=\"filter-item\"><span class=\"filter-label\">Recherche :</span> ";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 132)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 132, $this->source); })()), "search", [], "any", false, false, false, 132), "Aucun")) : ("Aucun")), "html", null, true);
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Produit :</span> 
                ";
        // line 134
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 134, $this->source); })()), "product_id", [], "any", false, false, false, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 135
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 135, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 136
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 136) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 136, $this->source); })()), "product_id", [], "any", false, false, false, 136))) {
                    // line 137
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 137), "html", null, true);
                    yield "
                        ";
                }
                // line 139
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            yield "                ";
        } else {
            // line 141
            yield "                    Tous les produits
                ";
        }
        // line 143
        yield "            </div>
            <div class=\"filter-item\"><span class=\"filter-label\">Statut :</span> 
                ";
        // line 145
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 145, $this->source); })()), "status", [], "any", false, false, false, 145) == "active")) {
            yield "Actifs
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 146
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 146, $this->source); })()), "status", [], "any", false, false, false, 146) == "inactive")) {
            yield "Inactifs
                ";
        } else {
            // line 147
            yield "Tous
                ";
        }
        // line 149
        yield "            </div>
        </div>
        <div class=\"filter-row\">
            <div class=\"filter-item\"><span class=\"filter-label\">Expiration :</span> 
                ";
        // line 153
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 153, $this->source); })()), "expiry_status", [], "any", false, false, false, 153) == "expired")) {
            yield "Expires
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 154
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 154, $this->source); })()), "expiry_status", [], "any", false, false, false, 154) == "expiring_soon")) {
            yield "Expire bientot
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 155
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 155, $this->source); })()), "expiry_status", [], "any", false, false, false, 155) == "not_expiring")) {
            yield "Non expires
                ";
        } else {
            // line 156
            yield "Tous
                ";
        }
        // line 158
        yield "            </div>
            <div class=\"filter-item\"><span class=\"filter-label\">Stock faible :</span> ";
        // line 159
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 159, $this->source); })()), "low_stock", [], "any", false, false, false, 159) == "yes")) ? ("Oui (≤10 unites)") : ("Non"));
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Emplacement :</span> ";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "location", [], "any", true, true, false, 160)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 160, $this->source); })()), "location", [], "any", false, false, false, 160), "Tous")) : ("Tous")), "html", null, true);
        yield "</div>
        </div>
        <div class=\"filter-row\">
            <div class=\"filter-item\"><span class=\"filter-label\">Date expiration du :</span> ";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 163)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 163, $this->source); })()), "date_from", [], "any", false, false, false, 163), "Non specifiee")) : ("Non specifiee")), "html", null, true);
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Date expiration au :</span> ";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 164)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 164, $this->source); })()), "date_to", [], "any", false, false, false, 164), "Non specifiee")) : ("Non specifiee")), "html", null, true);
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Tri :</span> ";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 165)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 165, $this->source); })()), "sort", [], "any", false, false, false, 165), "expiry_date")) : ("expiry_date")), "html", null, true);
        yield " (";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 165, $this->source); })()), "direction", [], "any", false, false, false, 165) == "asc")) ? ("Croissant") : ("Decroissant"));
        yield ")</div>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>N° Lot</th>
                <th>Produit</th>
                <th>Code-barres</th>
                <th>Emplacement</th>
                <th>Quantite</th>
                <th>Prix unitaire</th>
                <th>Valeur</th>
                <th>Expiration</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["batches"]) || array_key_exists("batches", $context) ? $context["batches"] : (function () { throw new RuntimeError('Variable "batches" does not exist.', 184, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
            // line 185
            yield "            ";
            $context["isExpired"] = (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 185) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 185) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()));
            // line 186
            yield "            ";
            $context["isExpiringSoon"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 186) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 186) >= $this->extensions['Twig\Extension\CoreExtension']->convertDate())) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 186) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")));
            // line 187
            yield "            ";
            $context["isLowStock"] = (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 187) <= 10);
            // line 188
            yield "            <tr class=\"";
            if ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 188, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "expired";
            } elseif ((($tmp = (isset($context["isLowStock"]) || array_key_exists("isLowStock", $context) ? $context["isLowStock"] : (function () { throw new RuntimeError('Variable "isLowStock" does not exist.', 188, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "low-stock";
            }
            yield "\">
                <td>";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 189), "html", null, true);
            yield " ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItem", [], "any", false, false, false, 189)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "(Achat #";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItem", [], "any", false, false, false, 189), "purchase", [], "any", false, false, false, 189), "id", [], "any", false, false, false, 189), "html", null, true);
                yield ")";
            }
            yield "</td>
                <td>";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 190), "name", [], "any", false, false, false, 190), "html", null, true);
            yield "</td>
                <td>";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 191), "barcode", [], "any", false, false, false, 191), "html", null, true);
            yield "</td>
                <td>";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", true, true, false, 192)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 192), "—")) : ("—")), "html", null, true);
            yield "</td>
                <td>";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 193), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 193), "html", null, true);
            yield "</td>
                <td>";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "unitPrice", [], "any", false, false, false, 194), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 194)), "html", null, true);
            yield "</td>
                <td>";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 195) * CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "unitPrice", [], "any", false, false, false, 195)), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 195)), "html", null, true);
            yield "</td>
                <td>
                    ";
            // line 197
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 197)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 198
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 198), "d/m/Y"), "html", null, true);
                yield "
                        ";
                // line 199
                if ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 199, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 200
                    yield "                            [EXPIRE]
                        ";
                } elseif ((($tmp =                 // line 201
(isset($context["isExpiringSoon"]) || array_key_exists("isExpiringSoon", $context) ? $context["isExpiringSoon"] : (function () { throw new RuntimeError('Variable "isExpiringSoon" does not exist.', 201, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 202
                    yield "                            [BIENTOT]
                        ";
                }
                // line 204
                yield "                    ";
            } else {
                // line 205
                yield "                        —
                    ";
            }
            // line 207
            yield "                </td>
                <td>
                    ";
            // line 209
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 209)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 212
        if (!$context['_iterated']) {
            // line 213
            yield "                <tr>
                    <td colspan=\"9\" style=\"text-align: center;\">Aucun lot trouve</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        yield "        </tbody>
    </table>

    <div class=\"stats\">
        <strong>RECAPITULATIF :</strong><br>
        Nombre total de lots : ";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["batches"]) || array_key_exists("batches", $context) ? $context["batches"] : (function () { throw new RuntimeError('Variable "batches" does not exist.', 222, $this->source); })())), "html", null, true);
        yield "<br>
        Quantite totale en stock : ";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new RuntimeError('Variable "totalQuantity" does not exist.', 223, $this->source); })()), "html", null, true);
        yield " unites<br>
        Valeur totale du stock : ";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((isset($context["totalValue"]) || array_key_exists("totalValue", $context) ? $context["totalValue"] : (function () { throw new RuntimeError('Variable "totalValue" does not exist.', 224, $this->source); })()), (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 224, $this->source); })())), "html", null, true);
        yield "
    </div>

    <div class=\"footer\">
        Document genere par HMA Market - ";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["exportDate"]) || array_key_exists("exportDate", $context) ? $context["exportDate"] : (function () { throw new RuntimeError('Variable "exportDate" does not exist.', 228, $this->source); })()), "d/m/Y H:i"), "html", null, true);
        yield "
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
        return "admin/stock_batch/export_pdf.html.twig";
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
        return array (  444 => 228,  437 => 224,  433 => 223,  429 => 222,  422 => 217,  413 => 213,  411 => 212,  403 => 209,  399 => 207,  395 => 205,  392 => 204,  388 => 202,  386 => 201,  383 => 200,  381 => 199,  376 => 198,  374 => 197,  369 => 195,  365 => 194,  359 => 193,  355 => 192,  351 => 191,  347 => 190,  337 => 189,  328 => 188,  325 => 187,  322 => 186,  319 => 185,  314 => 184,  290 => 165,  286 => 164,  282 => 163,  276 => 160,  272 => 159,  269 => 158,  265 => 156,  260 => 155,  256 => 154,  252 => 153,  246 => 149,  242 => 147,  237 => 146,  233 => 145,  229 => 143,  225 => 141,  222 => 140,  216 => 139,  210 => 137,  207 => 136,  202 => 135,  200 => 134,  195 => 132,  186 => 126,  182 => 125,  178 => 124,  171 => 120,  167 => 119,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/stock_batch/export_pdf.html.twig #}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Rapport des lots</title>
    <style>
        body {
            font-family: 'Arial', 'Helvetica', sans-serif;
            margin: 20px;
            font-size: 12px;
        }
        h1 {
            color: #2E86C1;
            text-align: center;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .header-info {
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        .header-info p {
            margin: 5px 0;
        }
        .filters {
            background: #f5f5f5;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 5px;
            border-left: 4px solid #2E86C1;
        }
        .filters-title {
            font-weight: bold;
            margin-bottom: 8px;
            color: #2E86C1;
        }
        .filter-row {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 5px;
        }
        .filter-item {
            background: white;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 11px;
        }
        .filter-label {
            font-weight: bold;
            color: #555;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th {
            background: #2E86C1;
            color: white;
            padding: 10px 8px;
            text-align: left;
            font-size: 11px;
        }
        td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 11px;
        }
        .footer {
            margin-top: 25px;
            text-align: center;
            font-size: 10px;
            color: #666;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
        .expired {
            background: #ffcccc;
        }
        .low-stock {
            background: #ffffcc;
        }
        .stats {
            margin-top: 15px;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 5px;
        }
        .badge {
            display: inline-block;
            padding: 2px 6px;
            border-radius: 3px;
            font-size: 10px;
        }
        .badge-expired {
            background: #dc3545;
            color: white;
        }
        .badge-warning {
            background: #ffc107;
            color: #333;
        }
        .user-info {
            background: #e8f4fd;
            padding: 8px 12px;
            border-radius: 5px;
            margin-bottom: 15px;
            border-left: 4px solid #2E86C1;
        }
    </style>
</head>
<body>
    <h1>RAPPORT DE GESTION DES LOTS</h1>
    
    <div class=\"header-info\">
        <p><strong>Date d'export :</strong> {{ exportDate|date('d/m/Y H:i:s') }}</p>
        <p><strong>Entreprise :</strong> {{ hmaService.companyName }}</p>
    </div>

    <div class=\"user-info\">
        <p><strong>Exporté par :</strong> {{ userName }}</p>
        <p><strong>Email :</strong> {{ userEmail }}</p>
        <p><strong>Rôle :</strong> {{ userRoles|join(', ') }}</p>
    </div>

    <div class=\"filters\">
        <div class=\"filters-title\">FILTRES APPLIQUES :</div>
        <div class=\"filter-row\">
            <div class=\"filter-item\"><span class=\"filter-label\">Recherche :</span> {{ filters.search|default('Aucun') }}</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Produit :</span> 
                {% if filters.product_id %}
                    {% for product in products %}
                        {% if product.id == filters.product_id %}
                            {{ product.name }}
                        {% endif %}
                    {% endfor %}
                {% else %}
                    Tous les produits
                {% endif %}
            </div>
            <div class=\"filter-item\"><span class=\"filter-label\">Statut :</span> 
                {% if filters.status == 'active' %}Actifs
                {% elseif filters.status == 'inactive' %}Inactifs
                {% else %}Tous
                {% endif %}
            </div>
        </div>
        <div class=\"filter-row\">
            <div class=\"filter-item\"><span class=\"filter-label\">Expiration :</span> 
                {% if filters.expiry_status == 'expired' %}Expires
                {% elseif filters.expiry_status == 'expiring_soon' %}Expire bientot
                {% elseif filters.expiry_status == 'not_expiring' %}Non expires
                {% else %}Tous
                {% endif %}
            </div>
            <div class=\"filter-item\"><span class=\"filter-label\">Stock faible :</span> {{ filters.low_stock == 'yes' ? 'Oui (≤10 unites)' : 'Non' }}</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Emplacement :</span> {{ filters.location|default('Tous') }}</div>
        </div>
        <div class=\"filter-row\">
            <div class=\"filter-item\"><span class=\"filter-label\">Date expiration du :</span> {{ filters.date_from|default('Non specifiee') }}</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Date expiration au :</span> {{ filters.date_to|default('Non specifiee') }}</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Tri :</span> {{ filters.sort|default('expiry_date') }} ({{ filters.direction == 'asc' ? 'Croissant' : 'Decroissant' }})</div>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>N° Lot</th>
                <th>Produit</th>
                <th>Code-barres</th>
                <th>Emplacement</th>
                <th>Quantite</th>
                <th>Prix unitaire</th>
                <th>Valeur</th>
                <th>Expiration</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            {% for batch in batches %}
            {% set isExpired = batch.expiryDate and batch.expiryDate < date() %}
            {% set isExpiringSoon = batch.expiryDate and batch.expiryDate >= date() and batch.expiryDate < date('+30 days') %}
            {% set isLowStock = batch.currentQuantity <= 10 %}
            <tr class=\"{% if isExpired %}expired{% elseif isLowStock %}low-stock{% endif %}\">
                <td>{{ batch.batchNumber }} {% if batch.purchaseItem %}(Achat #{{ batch.purchaseItem.purchase.id }}){% endif %}</td>
                <td>{{ batch.product.name }}</td>
                <td>{{ batch.product.barcode }}</td>
                <td>{{ batch.location|default('—') }}</td>
                <td>{{ batch.currentQuantity }} / {{ batch.initialQuantity }}</td>
                <td>{{ batch.unitPrice|price_with_currency(batch.hmaService) }}</td>
                <td>{{ (batch.currentQuantity * batch.unitPrice)|price_with_currency(batch.hmaService) }}</td>
                <td>
                    {% if batch.expiryDate %}
                        {{ batch.expiryDate|date('d/m/Y') }}
                        {% if isExpired %}
                            [EXPIRE]
                        {% elseif isExpiringSoon %}
                            [BIENTOT]
                        {% endif %}
                    {% else %}
                        —
                    {% endif %}
                </td>
                <td>
                    {{ batch.isActive ? 'Actif' : 'Inactif' }}
                </td>
            </tr>
            {% else %}
                <tr>
                    <td colspan=\"9\" style=\"text-align: center;\">Aucun lot trouve</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <div class=\"stats\">
        <strong>RECAPITULATIF :</strong><br>
        Nombre total de lots : {{ batches|length }}<br>
        Quantite totale en stock : {{ totalQuantity }} unites<br>
        Valeur totale du stock : {{ totalValue|price_with_currency(hmaService) }}
    </div>

    <div class=\"footer\">
        Document genere par HMA Market - {{ exportDate|date('d/m/Y H:i') }}
    </div>
</body>
</html>", "admin/stock_batch/export_pdf.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_batch\\export_pdf.html.twig");
    }
}
