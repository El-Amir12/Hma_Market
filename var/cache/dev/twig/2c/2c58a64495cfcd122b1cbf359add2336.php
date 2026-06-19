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
class __TwigTemplate_ee4c0b8593a482d0613b4f37b8b13bbb extends Template
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
    <title>Rapport des lots - ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["exportDate"]) || array_key_exists("exportDate", $context) ? $context["exportDate"] : (function () { throw new RuntimeError('Variable "exportDate" does not exist.', 6, $this->source); })()), "d/m/Y H:i"), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["exportDate"]) || array_key_exists("exportDate", $context) ? $context["exportDate"] : (function () { throw new RuntimeError('Variable "exportDate" does not exist.', 38, $this->source); })()), "d/m/Y H:i:s"), "html", null, true);
        yield "</p>
        <p><strong>Entreprise :</strong> ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 39, $this->source); })()), "companyName", [], "any", false, false, false, 39), "html", null, true);
        yield "</p>
        <p><strong>Devise :</strong> ";
        // line 40
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 40, $this->source); })()), "country", [], "any", false, false, false, 40) == "CM")) ? ("XAF") : ("FCFA"));
        yield "</p>
    </div>
    <div class=\"user-info\">
        <p><strong>Exporté par :</strong> ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 43, $this->source); })()), "html", null, true);
        yield "</p>
        <p><strong>Email :</strong> ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userEmail"]) || array_key_exists("userEmail", $context) ? $context["userEmail"] : (function () { throw new RuntimeError('Variable "userEmail" does not exist.', 44, $this->source); })()), "html", null, true);
        yield "</p>
        <p><strong>Rôle :</strong> ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["userRoles"]) || array_key_exists("userRoles", $context) ? $context["userRoles"] : (function () { throw new RuntimeError('Variable "userRoles" does not exist.', 45, $this->source); })()), ", "), "html", null, true);
        yield "</p>
    </div>
    <div class=\"filters\">
        <div class=\"filters-title\">FILTRES APPLIQUÉS :</div>
        <div class=\"filter-row\">
            <div class=\"filter-item\"><span class=\"filter-label\">Recherche :</span> ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 50, $this->source); })()), "search", [], "any", false, false, false, 50), "Aucun")) : ("Aucun")), "html", null, true);
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Produit :</span> ";
        // line 51
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 51, $this->source); })()), "product_id", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 51, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 51) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 51, $this->source); })()), "product_id", [], "any", false, false, false, 51))) {
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
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 52, $this->source); })()), "status", [], "any", false, false, false, 52) == "active")) {
            yield "Actifs";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 52, $this->source); })()), "status", [], "any", false, false, false, 52) == "inactive")) {
            yield "Inactifs";
        } else {
            yield "Tous";
        }
        yield "</div>
        </div>
        <div class=\"filter-row\">
            <div class=\"filter-item\"><span class=\"filter-label\">Expiration :</span> ";
        // line 55
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 55, $this->source); })()), "expiry_status", [], "any", false, false, false, 55) == "expired")) {
            yield "Expirés";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 55, $this->source); })()), "expiry_status", [], "any", false, false, false, 55) == "expiring_soon")) {
            yield "Expire bientôt";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 55, $this->source); })()), "expiry_status", [], "any", false, false, false, 55) == "not_expiring")) {
            yield "Non expirés";
        } else {
            yield "Tous";
        }
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Stock faible :</span> ";
        // line 56
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 56, $this->source); })()), "low_stock", [], "any", false, false, false, 56) == "yes")) ? ("Oui (≤10 unités)") : ("Non"));
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Emplacement :</span> ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "location", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 57, $this->source); })()), "location", [], "any", false, false, false, 57), "Tous")) : ("Tous")), "html", null, true);
        yield "</div>
        </div>
        <div class=\"filter-row\">
            <div class=\"filter-item\"><span class=\"filter-label\">Avoir :</span> ";
        // line 60
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 60, $this->source); })()), "has_issue", [], "any", false, false, false, 60) == "yes")) {
            yield "Avec avoir";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 60, $this->source); })()), "has_issue", [], "any", false, false, false, 60) == "no")) {
            yield "Sans avoir";
        } else {
            yield "Tous";
        }
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Statut avoir :</span> ";
        // line 61
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 61, $this->source); })()), "issue_status", [], "any", false, false, false, 61) == "pending")) {
            yield "En attente";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 61, $this->source); })()), "issue_status", [], "any", false, false, false, 61) == "acknowledged")) {
            yield "Accusé réception";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 61, $this->source); })()), "issue_status", [], "any", false, false, false, 61) == "under_review")) {
            yield "En analyse";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 61, $this->source); })()), "issue_status", [], "any", false, false, false, 61) == "recovered")) {
            yield "Récupéré";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 61, $this->source); })()), "issue_status", [], "any", false, false, false, 61) == "lost")) {
            yield "Perdu";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 61, $this->source); })()), "issue_status", [], "any", false, false, false, 61) == "closed")) {
            yield "Clôturé";
        } else {
            yield "Tous";
        }
        yield "</div>
        </div>
        <div class=\"filter-row\">
            <div class=\"filter-item\"><span class=\"filter-label\">Date expiration du :</span> ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 64)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 64, $this->source); })()), "date_from", [], "any", false, false, false, 64), "Non spécifiée")) : ("Non spécifiée")), "html", null, true);
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Date expiration au :</span> ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 65)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 65, $this->source); })()), "date_to", [], "any", false, false, false, 65), "Non spécifiée")) : ("Non spécifiée")), "html", null, true);
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Tri :</span> ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 66)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 66, $this->source); })()), "sort", [], "any", false, false, false, 66), "expiry_date")) : ("expiry_date")), "html", null, true);
        yield " (";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 66, $this->source); })()), "direction", [], "any", false, false, false, 66) == "asc")) ? ("Croissant") : ("Décroissant"));
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["batches"]) || array_key_exists("batches", $context) ? $context["batches"] : (function () { throw new RuntimeError('Variable "batches" does not exist.', 74, $this->source); })()));
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
            if ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 78, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "expired";
            } elseif ((($tmp = (isset($context["isExpiringSoon"]) || array_key_exists("isExpiringSoon", $context) ? $context["isExpiringSoon"] : (function () { throw new RuntimeError('Variable "isExpiringSoon" does not exist.', 78, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["locationDisplay"]) || array_key_exists("locationDisplay", $context) ? $context["locationDisplay"] : (function () { throw new RuntimeError('Variable "locationDisplay" does not exist.', 82, $this->source); })()), "html", null, true);
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
                if ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 86, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<br><span class=\"badge badge-expired\">Expiré</span>";
                } elseif ((($tmp = (isset($context["isExpiringSoon"]) || array_key_exists("isExpiringSoon", $context) ? $context["isExpiringSoon"] : (function () { throw new RuntimeError('Variable "isExpiringSoon" does not exist.', 86, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["batches"]) || array_key_exists("batches", $context) ? $context["batches"] : (function () { throw new RuntimeError('Variable "batches" does not exist.', 99, $this->source); })())), "html", null, true);
        yield "<br>
        Quantité totale en stock : ";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new RuntimeError('Variable "totalQuantity" does not exist.', 100, $this->source); })()), "html", null, true);
        yield " unités<br>
        Valeur totale du stock : ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((isset($context["totalValue"]) || array_key_exists("totalValue", $context) ? $context["totalValue"] : (function () { throw new RuntimeError('Variable "totalValue" does not exist.', 101, $this->source); })()), (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 101, $this->source); })())), "html", null, true);
        yield "<br>
        Avoirs ouverts : ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("openIssues", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["openIssues"]) || array_key_exists("openIssues", $context) ? $context["openIssues"] : (function () { throw new RuntimeError('Variable "openIssues" does not exist.', 102, $this->source); })()), 0)) : (0)), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((array_key_exists("totalIssueAmount", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["totalIssueAmount"]) || array_key_exists("totalIssueAmount", $context) ? $context["totalIssueAmount"] : (function () { throw new RuntimeError('Variable "totalIssueAmount" does not exist.', 102, $this->source); })()), 0)) : (0)), (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 102, $this->source); })())), "html", null, true);
        yield ")
    </div>
    <div class=\"footer\">Document généré par HMA Market - ";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["exportDate"]) || array_key_exists("exportDate", $context) ? $context["exportDate"] : (function () { throw new RuntimeError('Variable "exportDate" does not exist.', 104, $this->source); })()), "d/m/Y H:i"), "html", null, true);
        yield "</div>
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
        return array (  372 => 104,  365 => 102,  361 => 101,  357 => 100,  353 => 99,  347 => 95,  340 => 93,  338 => 92,  331 => 90,  323 => 89,  310 => 88,  302 => 87,  289 => 86,  285 => 85,  281 => 84,  271 => 83,  267 => 82,  263 => 81,  259 => 80,  250 => 79,  239 => 78,  236 => 77,  233 => 76,  230 => 75,  225 => 74,  212 => 66,  208 => 65,  204 => 64,  184 => 61,  174 => 60,  168 => 57,  164 => 56,  152 => 55,  140 => 52,  123 => 51,  119 => 50,  111 => 45,  107 => 44,  103 => 43,  97 => 40,  93 => 39,  89 => 38,  54 => 6,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/stock_batch/export_pdf.html.twig #}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Rapport des lots - {{ exportDate|date('d/m/Y H:i') }}</title>
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
        <p><strong>Date d'export :</strong> {{ exportDate|date('d/m/Y H:i:s') }}</p>
        <p><strong>Entreprise :</strong> {{ hmaService.companyName }}</p>
        <p><strong>Devise :</strong> {{ hmaService.country == 'CM' ? 'XAF' : 'FCFA' }}</p>
    </div>
    <div class=\"user-info\">
        <p><strong>Exporté par :</strong> {{ userName }}</p>
        <p><strong>Email :</strong> {{ userEmail }}</p>
        <p><strong>Rôle :</strong> {{ userRoles|join(', ') }}</p>
    </div>
    <div class=\"filters\">
        <div class=\"filters-title\">FILTRES APPLIQUÉS :</div>
        <div class=\"filter-row\">
            <div class=\"filter-item\"><span class=\"filter-label\">Recherche :</span> {{ filters.search|default('Aucun') }}</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Produit :</span> {% if filters.product_id %}{% for p in products %}{% if p.id == filters.product_id %}{{ p.name }}{% endif %}{% endfor %}{% else %}Tous les produits{% endif %}</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Statut :</span> {% if filters.status == 'active' %}Actifs{% elseif filters.status == 'inactive' %}Inactifs{% else %}Tous{% endif %}</div>
        </div>
        <div class=\"filter-row\">
            <div class=\"filter-item\"><span class=\"filter-label\">Expiration :</span> {% if filters.expiry_status == 'expired' %}Expirés{% elseif filters.expiry_status == 'expiring_soon' %}Expire bientôt{% elseif filters.expiry_status == 'not_expiring' %}Non expirés{% else %}Tous{% endif %}</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Stock faible :</span> {{ filters.low_stock == 'yes' ? 'Oui (≤10 unités)' : 'Non' }}</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Emplacement :</span> {{ filters.location|default('Tous') }}</div>
        </div>
        <div class=\"filter-row\">
            <div class=\"filter-item\"><span class=\"filter-label\">Avoir :</span> {% if filters.has_issue == 'yes' %}Avec avoir{% elseif filters.has_issue == 'no' %}Sans avoir{% else %}Tous{% endif %}</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Statut avoir :</span> {% if filters.issue_status == 'pending' %}En attente{% elseif filters.issue_status == 'acknowledged' %}Accusé réception{% elseif filters.issue_status == 'under_review' %}En analyse{% elseif filters.issue_status == 'recovered' %}Récupéré{% elseif filters.issue_status == 'lost' %}Perdu{% elseif filters.issue_status == 'closed' %}Clôturé{% else %}Tous{% endif %}</div>
        </div>
        <div class=\"filter-row\">
            <div class=\"filter-item\"><span class=\"filter-label\">Date expiration du :</span> {{ filters.date_from|default('Non spécifiée') }}</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Date expiration au :</span> {{ filters.date_to|default('Non spécifiée') }}</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Tri :</span> {{ filters.sort|default('expiry_date') }} ({{ filters.direction == 'asc' ? 'Croissant' : 'Décroissant' }})</div>
        </div>
    </div>
    <table>
        <thead>
            <tr><th>N° Lot</th><th>Produit</th><th>Code-barres</th><th>Emplacement</th><th>Qté</th><th>Prix unit.</th><th>Valeur</th><th>Expiration</th><th>Avoir</th><th>Statut avoir</th><th>Montant déclaré</th><th>Statut lot</th></tr>
        </thead>
        <tbody>
            {% for batch in batches %}
            {% set isExpired = batch.expiryDate and batch.expiryDate < date() %}
            {% set isExpiringSoon = batch.expiryDate and batch.expiryDate >= date() and batch.expiryDate < date('+30 days') %}
            {% set locationDisplay = batch.locationEntity ? batch.locationEntity.displayName : (batch.location ?: '—') %}
            <tr class=\"{% if isExpired %}expired{% elseif isExpiringSoon %}expiring-soon{% elseif batch.hasIssue %}has-issue{% endif %}\">
                <td>{{ batch.batchNumber }}{% if batch.purchaseItem %}<br><small>({{ batch.purchaseItem.purchase.purchaseNumber }})</small>{% endif %}</td>
                <td>{{ batch.product.name }}</td>
                <td>{{ batch.product.barcode }}</td>
                <td>{{ locationDisplay }}</td>
                <td>{{ batch.currentQuantity }} / {{ batch.initialQuantity }}<br>{% if batch.currentQuantity <= 10 %}<span class=\"badge badge-warning\">Stock faible</span>{% endif %}</td>
                <td>{{ batch.unitPrice|price_with_currency(batch.hmaService) }}</td>
                <td>{{ (batch.currentQuantity * batch.unitPrice)|price_with_currency(batch.hmaService) }}</td>
                <td>{% if batch.expiryDate %}{{ batch.expiryDate|date('d/m/Y') }}{% if isExpired %}<br><span class=\"badge badge-expired\">Expiré</span>{% elseif isExpiringSoon %}<br><span class=\"badge badge-warning\">Expire bientôt</span>{% endif %}{% else %}—{% endif %}</td>
                <td>{% if batch.hasIssue %}Oui{% else %}Non{% endif %}</td>
                <td>{% if batch.hasIssue %}<span class=\"badge badge-pending\">{{ batch.issueStatusLabel }}</span>{% if batch.issuePriority == 'critical' %}<span class=\"badge badge-expired\">Critique</span>{% endif %}{% else %}—{% endif %}</td>
                <td>{% if batch.hasIssue %}{{ batch.issueDeclaredAmount|price_with_currency(batch.hmaService) }}{% else %}—{% endif %}</td>
                <td><span class=\"badge badge-pending\">{{ batch.isActive ? 'Actif' : 'Inactif' }}</span></td>
            </tr>
            {% else %}
                <tr><td colspan=\"12\" style=\"text-align:center;\">Aucun lot trouvé</td></tr>
            {% endfor %}
        </tbody>
    </table>
    <div class=\"stats\">
        <strong>RÉCAPITULATIF :</strong><br>
        Nombre total de lots : {{ batches|length }}<br>
        Quantité totale en stock : {{ totalQuantity }} unités<br>
        Valeur totale du stock : {{ totalValue|price_with_currency(hmaService) }}<br>
        Avoirs ouverts : {{ openIssues|default(0) }} ({{ totalIssueAmount|default(0)|price_with_currency(hmaService) }})
    </div>
    <div class=\"footer\">Document généré par HMA Market - {{ exportDate|date('d/m/Y H:i') }}</div>
</body>
</html>", "admin/stock_batch/export_pdf.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_batch\\export_pdf.html.twig");
    }
}
