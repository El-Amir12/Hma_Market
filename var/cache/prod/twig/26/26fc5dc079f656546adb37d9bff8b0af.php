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

/* supplier_credit_note/export_pdf.html.twig */
class __TwigTemplate_e821152fab52b90fb8d8c59a1ef5d7f9 extends Template
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
    <title>Rapport des avoirs fournisseurs - HMA Market</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'DejaVu Sans', 'Arial', 'Helvetica', sans-serif;
            font-size: 10pt;
            line-height: 1.4;
            color: #333;
            padding: 20px;
        }
        
        /* En-tête */
        .header {
            text-align: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid #2E86C1;
        }
        
        .header h1 {
            color: #2E86C1;
            font-size: 20pt;
            margin-bottom: 5px;
        }
        
        .header .subtitle {
            color: #666;
            font-size: 10pt;
        }
        
        /* Infos générales */
        .info-section {
            background: #f5f7fa;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 8px;
            border-left: 4px solid #2E86C1;
        }
        
        .info-row {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 8px;
        }
        
        .info-label {
            width: 150px;
            font-weight: bold;
            color: #555;
        }
        
        .info-value {
            flex: 1;
            color: #333;
        }
        
        /* Filtres */
        .filters-section {
            background: #f8f9fa;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 8px;
            border: 1px solid #e9ecef;
        }
        
        .filters-title {
            font-weight: bold;
            color: #2E86C1;
            margin-bottom: 10px;
            font-size: 11pt;
        }
        
        .filters-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        .filter-item {
            background: white;
            padding: 4px 10px;
            border-radius: 15px;
            font-size: 9pt;
            border: 1px solid #dee2e6;
        }
        
        .filter-label {
            font-weight: bold;
            color: #555;
        }
        
        /* Statistiques */
        .stats-section {
            margin-bottom: 20px;
        }
        
        .stats-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 10px;
        }
        
        .stat-card {
            flex: 1;
            min-width: 120px;
            background: #f8f9fa;
            padding: 10px;
            border-radius: 8px;
            text-align: center;
            border: 1px solid #e9ecef;
        }
        
        .stat-value {
            font-size: 18pt;
            font-weight: bold;
            color: #2E86C1;
        }
        
        .stat-label {
            font-size: 8pt;
            color: #666;
            margin-top: 5px;
        }
        
        /* Tableau */
        .table-container {
            margin-top: 20px;
            overflow-x: auto;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 8pt;
        }
        
        th {
            background: #2E86C1;
            color: white;
            padding: 10px 6px;
            text-align: left;
            font-weight: bold;
        }
        
        td {
            border: 1px solid #ddd;
            padding: 8px 6px;
            vertical-align: top;
        }
        
        tr:nth-child(even) {
            background: #f9f9f9;
        }
        
        .status-pending { background-color: #fff3cd; }
        .status-recovered { background-color: #d4edda; }
        .status-lost { background-color: #f8d7da; }
        
        .badge {
            display: inline-block;
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 7pt;
            font-weight: bold;
        }
        
        .badge-pending { background: #ffc107; color: #333; }
        .badge-recovered { background: #28a745; color: white; }
        .badge-lost { background: #dc3545; color: white; }
        .badge-review { background: #0d6efd; color: white; }
        .badge-closed { background: #6c757d; color: white; }
        
        /* Pied de page */
        .footer {
            margin-top: 25px;
            padding-top: 10px;
            text-align: center;
            font-size: 8pt;
            color: #666;
            border-top: 1px solid #ddd;
        }
        
        /* Totaux */
        .totals-section {
            margin-top: 20px;
            padding: 12px;
            background: #e8f4fd;
            border-radius: 8px;
        }
        
        .totals-row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        .total-item {
            flex: 1;
            text-align: center;
        }
        
        .total-label {
            font-size: 9pt;
            color: #555;
        }
        
        .total-value {
            font-size: 14pt;
            font-weight: bold;
            color: #2E86C1;
        }
    </style>
</head>
<body>
    <!-- En-tête -->
    <div class=\"header\">
        <h1>RAPPORT DES AVOIRS FOURNISSEURS</h1>
        <div class=\"subtitle\">";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "companyName", [], "any", false, false, false, 230), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["exportDate"] ?? null), "d/m/Y H:i:s"), "html", null, true);
        yield "</div>
    </div>

    <!-- Informations générales -->
    <div class=\"info-section\">
        <div class=\"info-row\">
            <div class=\"info-label\">Entreprise :</div>
            <div class=\"info-value\">";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "companyName", [], "any", false, false, false, 237), "html", null, true);
        yield "</div>
        </div>
        <div class=\"info-row\">
            <div class=\"info-label\">Exporté par :</div>
            <div class=\"info-value\">";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["userName"] ?? null), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["userEmail"] ?? null), "html", null, true);
        yield ")</div>
        </div>
        <div class=\"info-row\">
            <div class=\"info-label\">Rôle(s) :</div>
            <div class=\"info-value\">";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(($context["userRoles"] ?? null), ", "), "html", null, true);
        yield "</div>
        </div>
        <div class=\"info-row\">
            <div class=\"info-label\">Date d'export :</div>
            <div class=\"info-value\">";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["exportDate"] ?? null), "d/m/Y H:i:s"), "html", null, true);
        yield "</div>
        </div>
    </div>

    <!-- Filtres appliqués -->
    <div class=\"filters-section\">
        <div class=\"filters-title\">📋 FILTRES APPLIQUÉS</div>
        <div class=\"filters-grid\">
            <div class=\"filter-item\"><span class=\"filter-label\">Recherche :</span> ";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 257)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", false, false, false, 257), "Aucun")) : ("Aucun")), "html", null, true);
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Statut :</span> ";
        // line 258
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 258)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["statusList"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 258), [], "array", true, true, false, 258)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["statusList"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 258)] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 258))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 258))), "html", null, true)) : ("Tous"));
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Priorité :</span> ";
        // line 259
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "priority", [], "any", false, false, false, 259)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["priorityList"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "priority", [], "any", false, false, false, 259), [], "array", true, true, false, 259)) ? (Twig\Extension\CoreExtension::default((($_v1 = ($context["priorityList"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "priority", [], "any", false, false, false, 259)] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "priority", [], "any", false, false, false, 259))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "priority", [], "any", false, false, false, 259))), "html", null, true)) : ("Toutes"));
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Type :</span> ";
        // line 260
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "issue_type", [], "any", false, false, false, 260)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["issueTypeList"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "issue_type", [], "any", false, false, false, 260), [], "array", true, true, false, 260)) ? (Twig\Extension\CoreExtension::default((($_v2 = ($context["issueTypeList"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "issue_type", [], "any", false, false, false, 260)] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "issue_type", [], "any", false, false, false, 260))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "issue_type", [], "any", false, false, false, 260))), "html", null, true)) : ("Tous"));
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Fournisseur :</span> ";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("supplierName", $context)) ? (Twig\Extension\CoreExtension::default(($context["supplierName"] ?? null), "Tous")) : ("Tous")), "html", null, true);
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Date du :</span> ";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 262)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 262), "Non spécifiée")) : ("Non spécifiée")), "html", null, true);
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Date au :</span> ";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 263)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 263), "Non spécifiée")) : ("Non spécifiée")), "html", null, true);
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Tri :</span> ";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 264)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", false, false, false, 264), "created_at")) : ("created_at")), "html", null, true);
        yield " (";
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 264)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", false, false, false, 264), "desc")) : ("desc")) == "desc")) ? ("Décroissant") : ("Croissant"));
        yield ")</div>
        </div>
    </div>

    <!-- Statistiques -->
    <div class=\"stats-section\">
        <div class=\"filters-title\">📊 STATISTIQUES</div>
        <div class=\"stats-grid\">
            <div class=\"stat-card\">
                <div class=\"stat-value\">";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["creditNotes"] ?? null)), "html", null, true);
        yield "</div>
                <div class=\"stat-label\">Total avoirs</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("pendingCount", $context)) ? (Twig\Extension\CoreExtension::default(($context["pendingCount"] ?? null), 0)) : (0)), "html", null, true);
        yield "</div>
                <div class=\"stat-label\">En attente</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("recoveredCount", $context)) ? (Twig\Extension\CoreExtension::default(($context["recoveredCount"] ?? null), 0)) : (0)), "html", null, true);
        yield "</div>
                <div class=\"stat-label\">Récupérés</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("lostCount", $context)) ? (Twig\Extension\CoreExtension::default(($context["lostCount"] ?? null), 0)) : (0)), "html", null, true);
        yield "</div>
                <div class=\"stat-label\">Perdus</div>
            </div>
        </div>
    </div>

    <!-- Tableau des avoirs -->
    <div class=\"table-container\">
        <table>
            <thead>
                <tr>
                    <th>N° Avoir</th>
                    <th>Fournisseur</th>
                    <th>Lot</th>
                    <th>Produit</th>
                    <th>Type</th>
                    <th>Priorité</th>
                    <th>Statut</th>
                    <th>Montant déclaré</th>
                    <th>Récupéré</th>
                    <th>Perdu</th>
                    <th>Date signalement</th>
                    <th>Réponse fournisseur</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 311
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["creditNotes"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["creditNote"]) {
            // line 312
            yield "                <tr class=\"
                    ";
            // line 313
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "status", [], "any", false, false, false, 313) == "pending")) {
                yield "status-pending
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 314
$context["creditNote"], "status", [], "any", false, false, false, 314) == "recovered")) {
                yield "status-recovered
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 315
$context["creditNote"], "status", [], "any", false, false, false, 315) == "lost")) {
                yield "status-lost
                    ";
            }
            // line 317
            yield "                \">
                    <td><strong>";
            // line 318
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "creditNoteNumber", [], "any", false, false, false, 318), "html", null, true);
            yield "</strong></td>
                    <td>";
            // line 319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "supplier", [], "any", false, false, false, 319), "name", [], "any", false, false, false, 319)), "truncate", [25], "method", false, false, false, 319), "html", null, true);
            yield "</td>
                    <td>";
            // line 320
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "stockBatch", [], "any", false, false, false, 320), "batchNumber", [], "any", false, false, false, 320), "html", null, true);
            yield "</td>
                    <td>";
            // line 321
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "stockBatch", [], "any", false, false, false, 321), "product", [], "any", false, false, false, 321), "name", [], "any", false, false, false, 321)), "truncate", [30], "method", false, false, false, 321), "html", null, true);
            yield "</td>
                    <td>";
            // line 322
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "issueTypeLabel", [], "any", false, false, false, 322), "html", null, true);
            yield "</td>
                    <td>
                        <span class=\"badge 
                            ";
            // line 325
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "priority", [], "any", false, false, false, 325) == "critical")) {
                yield "badge-pending
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 326
$context["creditNote"], "priority", [], "any", false, false, false, 326) == "high")) {
                yield "badge-pending
                            ";
            } else {
                // line 327
                yield "badge-closed";
            }
            yield "\">
                            ";
            // line 328
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "priorityLabel", [], "any", false, false, false, 328), "html", null, true);
            yield "
                        </span>
                    </td>
                    <td>
                        <span class=\"badge 
                            ";
            // line 333
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "status", [], "any", false, false, false, 333) == "pending")) {
                yield "badge-pending
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 334
$context["creditNote"], "status", [], "any", false, false, false, 334) == "recovered")) {
                yield "badge-recovered
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 335
$context["creditNote"], "status", [], "any", false, false, false, 335) == "lost")) {
                yield "badge-lost
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 336
$context["creditNote"], "status", [], "any", false, false, false, 336) == "under_review")) {
                yield "badge-review
                            ";
            } else {
                // line 337
                yield "badge-closed";
            }
            yield "\">
                            ";
            // line 338
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "statusLabel", [], "any", false, false, false, 338), "html", null, true);
            yield "
                        </span>
                    </td>
                    <td class=\"amount\">";
            // line 341
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "declaredAmount", [], "any", false, false, false, 341), CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "hmaService", [], "any", false, false, false, 341)), "html", null, true);
            yield "</td>
                    <td class=\"amount\">";
            // line 342
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "recoveredAmount", [], "any", false, false, false, 342)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "recoveredAmount", [], "any", false, false, false, 342)) : (0)), CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "hmaService", [], "any", false, false, false, 342)), "html", null, true);
            yield "</td>
                    <td class=\"amount\">";
            // line 343
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "lostAmount", [], "any", false, false, false, 343)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "lostAmount", [], "any", false, false, false, 343)) : (0)), CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "hmaService", [], "any", false, false, false, 343)), "html", null, true);
            yield "</td>
                    <td>";
            // line 344
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "reportedAt", [], "any", false, false, false, 344), "d/m/Y"), "html", null, true);
            yield "</td>
                    <td>
                        ";
            // line 346
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "supplierResponse", [], "any", false, false, false, 346)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 347
                yield "                            <span title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "supplierResponse", [], "any", false, false, false, 347));
                yield "\">✓ Répondu</span>
                        ";
            } else {
                // line 349
                yield "                            <span class=\"text-muted\">—</span>
                        ";
            }
            // line 351
            yield "                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 353
        if (!$context['_iterated']) {
            // line 354
            yield "                <tr>
                    <td colspan=\"12\" style=\"text-align: center;\">Aucun avoir trouvé</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['creditNote'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 358
        yield "            </tbody>
        </table>
    </div>

    <!-- Totaux -->
    <div class=\"totals-section\">
        <div class=\"totals-row\">
            <div class=\"total-item\">
                <div class=\"total-label\">Montant total déclaré</div>
                <div class=\"total-value\">";
        // line 367
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(($context["totalDeclaredAmount"] ?? null), ($context["hmaService"] ?? null)), "html", null, true);
        yield "</div>
            </div>
            <div class=\"total-item\">
                <div class=\"total-label\">Montant total récupéré</div>
                <div class=\"total-value\">";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(($context["totalRecoveredAmount"] ?? null), ($context["hmaService"] ?? null)), "html", null, true);
        yield "</div>
            </div>
            <div class=\"total-item\">
                <div class=\"total-label\">Montant total perdu</div>
                <div class=\"total-value\">";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(($context["totalLostAmount"] ?? null), ($context["hmaService"] ?? null)), "html", null, true);
        yield "</div>
            </div>
            <div class=\"total-item\">
                <div class=\"total-label\">Taux de récupération</div>
                <div class=\"total-value\">";
        // line 379
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("recoveryRate", $context)) ? (Twig\Extension\CoreExtension::default(($context["recoveryRate"] ?? null), 0)) : (0)), "html", null, true);
        yield "%</div>
            </div>
        </div>
    </div>

    <!-- Pied de page -->
    <div class=\"footer\">
        Document généré par HMA Market - ";
        // line 386
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["exportDate"] ?? null), "d/m/Y H:i:s"), "html", null, true);
        yield "
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
        return "supplier_credit_note/export_pdf.html.twig";
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
        return array (  594 => 386,  584 => 379,  577 => 375,  570 => 371,  563 => 367,  552 => 358,  543 => 354,  541 => 353,  535 => 351,  531 => 349,  525 => 347,  523 => 346,  518 => 344,  514 => 343,  510 => 342,  506 => 341,  500 => 338,  495 => 337,  490 => 336,  486 => 335,  482 => 334,  478 => 333,  470 => 328,  465 => 327,  460 => 326,  456 => 325,  450 => 322,  446 => 321,  442 => 320,  438 => 319,  434 => 318,  431 => 317,  426 => 315,  422 => 314,  418 => 313,  415 => 312,  410 => 311,  381 => 285,  374 => 281,  367 => 277,  360 => 273,  346 => 264,  342 => 263,  338 => 262,  334 => 261,  330 => 260,  326 => 259,  322 => 258,  318 => 257,  307 => 249,  300 => 245,  291 => 241,  284 => 237,  272 => 230,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "supplier_credit_note/export_pdf.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\supplier_credit_note\\export_pdf.html.twig");
    }
}
