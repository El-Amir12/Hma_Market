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
class __TwigTemplate_8c8d2431ddcd21bd55085d4a4889b438 extends Template
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
    <title>Rapport des lots - ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["exportDate"] ?? null), "d/m/Y H:i"), "html", null, true);
        yield "</title>
    <style>
        body { font-family: 'Arial', sans-serif; margin: 20px; font-size: 12px; }
        h1 { color: #2E86C1; text-align: center; font-size: 18px; margin-bottom: 20px; }
        .header-info { margin-bottom: 20px; border-bottom: 1px solid #ddd; padding-bottom: 10px; }
        .header-info p { margin: 5px 0; }
        .filters { background: #f5f5f5; padding: 12px; margin-bottom: 20px; border-radius: 5px; border-left: 4px solid #2E86C1; }
        .filters-title { font-weight: bold; margin-bottom: 8px; color: #2E86C1; }
        .filter-row { display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 5px; }
        .filter-item { background: white; padding: 4px 10px; border-radius: 4px; font-size: 11px; }
        .filter-label { font-weight: bold; color: #555; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th { background: #2E86C1; color: white; padding: 10px 8px; text-align: left; font-size: 11px; }
        td { border: 1px solid #ddd; padding: 8px; font-size: 11px; }
        .footer { margin-top: 25px; text-align: center; font-size: 10px; color: #666; border-top: 1px solid #ddd; padding-top: 10px; }
        .expired { background: #ffcccc; }
        .expiring-soon { background: #ffffcc; }
        .low-stock { background: #e6f3ff; }
        .has-issue { background: #ffe0b2; }
        .stats { margin-top: 15px; padding: 10px; background: #f8f9fa; border-radius: 5px; }
        .badge { display: inline-block; padding: 2px 6px; border-radius: 3px; font-size: 10px; }
        .badge-expired { background: #dc3545; color: white; }
        .badge-warning { background: #ffc107; color: #333; }
        .badge-pending { background: #ffc107; color: #333; }
        .badge-recovered { background: #28a745; color: white; }
        .badge-lost { background: #dc3545; color: white; }
        .user-info { background: #e8f4fd; padding: 8px 12px; border-radius: 5px; margin-bottom: 15px; border-left: 4px solid #2E86C1; }
    </style>
</head>
<body>
    <h1>RAPPORT DE GESTION DES LOTS</h1>
    <div class=\"header-info\">
        <p><strong>Date d'export :</strong> ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["exportDate"] ?? null), "d/m/Y H:i:s"), "html", null, true);
        yield "</p>
        <p><strong>Entreprise :</strong> ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "companyName", [], "any", false, false, false, 39), "html", null, true);
        yield "</p>
        <p><strong>Devise :</strong> ";
        // line 40
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "country", [], "any", false, false, false, 40) == "CM")) ? ("XAF") : ("FCFA"));
        yield "</p>
    </div>
    <div class=\"user-info\">
        <p><strong>Exporté par :</strong> ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["userName"] ?? null), "html", null, true);
        yield "</p>
        <p><strong>Email :</strong> ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["userEmail"] ?? null), "html", null, true);
        yield "</p>
        <p><strong>Rôle :</strong> ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(($context["userRoles"] ?? null), ", "), "html", null, true);
        yield "</p>
    </div>
    <div class=\"filters\">
        <div class=\"filters-title\">FILTRES APPLIQUÉS :</div>
        <div class=\"filter-row\">
            <div class=\"filter-item\"><span class=\"filter-label\">Recherche :</span> ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", false, false, false, 50), "Aucun")) : ("Aucun")), "html", null, true);
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Produit :</span> ";
        // line 51
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "product_id", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 51) == CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "product_id", [], "any", false, false, false, 51))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 51), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield "Tous les produits";
        }
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Statut :</span> ";
        // line 52
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 52) == "active")) {
            yield "Actifs";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 52) == "inactive")) {
            yield "Inactifs";
        } else {
            yield "Tous";
        }
        yield "</div>
        </div>
        <div class=\"filter-row\">
            <div class=\"filter-item\"><span class=\"filter-label\">Expiration :</span> ";
        // line 55
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", false, false, false, 55) == "expired")) {
            yield "Expirés";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", false, false, false, 55) == "expiring_soon")) {
            yield "Expire bientôt";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", false, false, false, 55) == "not_expiring")) {
            yield "Non expirés";
        } else {
            yield "Tous";
        }
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Stock faible :</span> ";
        // line 56
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "low_stock", [], "any", false, false, false, 56) == "yes")) ? ("Oui (≤10 unités)") : ("Non"));
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Emplacement :</span> ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "location", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "location", [], "any", false, false, false, 57), "Tous")) : ("Tous")), "html", null, true);
        yield "</div>
        </div>
        <div class=\"filter-row\">
            <div class=\"filter-item\"><span class=\"filter-label\">Avoir :</span> ";
        // line 60
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", false, false, false, 60) == "yes")) {
            yield "Avec avoir";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "has_issue", [], "any", false, false, false, 60) == "no")) {
            yield "Sans avoir";
        } else {
            yield "Tous";
        }
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Statut avoir :</span> ";
        // line 61
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "issue_status", [], "any", false, false, false, 61) == "pending")) {
            yield "En attente";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "issue_status", [], "any", false, false, false, 61) == "acknowledged")) {
            yield "Accusé réception";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "issue_status", [], "any", false, false, false, 61) == "under_review")) {
            yield "En analyse";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "issue_status", [], "any", false, false, false, 61) == "recovered")) {
            yield "Récupéré";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "issue_status", [], "any", false, false, false, 61) == "lost")) {
            yield "Perdu";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "issue_status", [], "any", false, false, false, 61) == "closed")) {
            yield "Clôturé";
        } else {
            yield "Tous";
        }
        yield "</div>
        </div>
        <div class=\"filter-row\">
            <div class=\"filter-item\"><span class=\"filter-label\">Date expiration du :</span> ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 64)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 64), "Non spécifiée")) : ("Non spécifiée")), "html", null, true);
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Date expiration au :</span> ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 65)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 65), "Non spécifiée")) : ("Non spécifiée")), "html", null, true);
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Tri :</span> ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 66)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 66), "expiry_date")) : ("expiry_date")), "html", null, true);
        yield " (";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", false, false, false, 66) == "asc")) ? ("Croissant") : ("Décroissant"));
        yield ")</div>
        </div>
    </div>
    <table>
        <thead>
            <tr><th>N° Lot</th><th>Produit</th><th>Code-barres</th><th>Emplacement</th><th>Qté</th><th>Prix unit.</th><th>Valeur</th><th>Expiration</th><th>Avoir</th><th>Statut avoir</th><th>Montant déclaré</th><th>Statut lot</th></tr>
        </thead>
        <tbody>
            ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["batches"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
            // line 75
            yield "            ";
            $context["isExpired"] = (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 75) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 75) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()));
            // line 76
            yield "            ";
            $context["isExpiringSoon"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 76) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 76) >= $this->extensions['Twig\Extension\CoreExtension']->convertDate())) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 76) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")));
            // line 77
            yield "            ";
            $context["locationDisplay"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "locationEntity", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "locationEntity", [], "any", false, false, false, 77), "displayName", [], "any", false, false, false, 77)) : (((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 77)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 77)) : ("—"))));
            // line 78
            yield "            <tr class=\"";
            if ((($tmp = ($context["isExpired"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "expired";
            } elseif ((($tmp = ($context["isExpiringSoon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "expiring-soon";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hasIssue", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "has-issue";
            }
            yield "\">
                <td>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 79), "html", null, true);
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItem", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<br><small>(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItem", [], "any", false, false, false, 79), "purchase", [], "any", false, false, false, 79), "purchaseNumber", [], "any", false, false, false, 79), "html", null, true);
                yield ")</small>";
            }
            yield "</td>
                <td>";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 80), "name", [], "any", false, false, false, 80), "html", null, true);
            yield "</td>
                <td>";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 81), "barcode", [], "any", false, false, false, 81), "html", null, true);
            yield "</td>
                <td>";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["locationDisplay"] ?? null), "html", null, true);
            yield "</td>
                <td>";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 83), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 83), "html", null, true);
            yield "<br>";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 83) <= 10)) {
                yield "<span class=\"badge badge-warning\">Stock faible</span>";
            }
            yield "</td>
                <td>";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "unitPrice", [], "any", false, false, false, 84), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 84)), "html", null, true);
            yield "</td>
                <td>";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 85) * CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "unitPrice", [], "any", false, false, false, 85)), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 85)), "html", null, true);
            yield "</td>
                <td>";
            // line 86
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 86), "d/m/Y"), "html", null, true);
                if ((($tmp = ($context["isExpired"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<br><span class=\"badge badge-expired\">Expiré</span>";
                } elseif ((($tmp = ($context["isExpiringSoon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<br><span class=\"badge badge-warning\">Expire bientôt</span>";
                }
            } else {
                yield "—";
            }
            yield "</td>
                <td>";
            // line 87
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hasIssue", [], "any", false, false, false, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Oui";
            } else {
                yield "Non";
            }
            yield "</td>
                <td>";
            // line 88
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hasIssue", [], "any", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"badge badge-pending\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueStatusLabel", [], "any", false, false, false, 88), "html", null, true);
                yield "</span>";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issuePriority", [], "any", false, false, false, 88) == "critical")) {
                    yield "<span class=\"badge badge-expired\">Critique</span>";
                }
            } else {
                yield "—";
            }
            yield "</td>
                <td>";
            // line 89
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hasIssue", [], "any", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "issueDeclaredAmount", [], "any", false, false, false, 89), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 89)), "html", null, true);
            } else {
                yield "—";
            }
            yield "</td>
                <td><span class=\"badge badge-pending\">";
            // line 90
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "</span></td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 92
        if (!$context['_iterated']) {
            // line 93
            yield "                <tr><td colspan=\"12\" style=\"text-align:center;\">Aucun lot trouvé</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        yield "        </tbody>
    </table>
    <div class=\"stats\">
        <strong>RÉCAPITULATIF :</strong><br>
        Nombre total de lots : ";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["batches"] ?? null)), "html", null, true);
        yield "<br>
        Quantité totale en stock : ";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalQuantity"] ?? null), "html", null, true);
        yield " unités<br>
        Valeur totale du stock : ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(($context["totalValue"] ?? null), ($context["hmaService"] ?? null)), "html", null, true);
        yield "<br>
        Avoirs ouverts : ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("openIssues", $context)) ? (Twig\Extension\CoreExtension::default(($context["openIssues"] ?? null), 0)) : (0)), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((array_key_exists("totalIssueAmount", $context)) ? (Twig\Extension\CoreExtension::default(($context["totalIssueAmount"] ?? null), 0)) : (0)), ($context["hmaService"] ?? null)), "html", null, true);
        yield ")
    </div>
    <div class=\"footer\">Document généré par HMA Market - ";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["exportDate"] ?? null), "d/m/Y H:i"), "html", null, true);
        yield "</div>
</body>
</html>";
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
        return array (  366 => 104,  359 => 102,  355 => 101,  351 => 100,  347 => 99,  341 => 95,  334 => 93,  332 => 92,  325 => 90,  317 => 89,  304 => 88,  296 => 87,  283 => 86,  279 => 85,  275 => 84,  265 => 83,  261 => 82,  257 => 81,  253 => 80,  244 => 79,  233 => 78,  230 => 77,  227 => 76,  224 => 75,  219 => 74,  206 => 66,  202 => 65,  198 => 64,  178 => 61,  168 => 60,  162 => 57,  158 => 56,  146 => 55,  134 => 52,  117 => 51,  113 => 50,  105 => 45,  101 => 44,  97 => 43,  91 => 40,  87 => 39,  83 => 38,  48 => 6,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/stock_batch/export_pdf.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_batch\\export_pdf.html.twig");
    }
}
