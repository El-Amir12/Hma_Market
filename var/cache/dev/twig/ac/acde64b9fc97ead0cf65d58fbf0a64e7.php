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
class __TwigTemplate_d7f648c64b1011dfbab3fe6fb56cb1d9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "supplier_credit_note/export_pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "supplier_credit_note/export_pdf.html.twig"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 230, $this->source); })()), "companyName", [], "any", false, false, false, 230), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["exportDate"]) || array_key_exists("exportDate", $context) ? $context["exportDate"] : (function () { throw new RuntimeError('Variable "exportDate" does not exist.', 230, $this->source); })()), "d/m/Y H:i:s"), "html", null, true);
        yield "</div>
    </div>

    <!-- Informations générales -->
    <div class=\"info-section\">
        <div class=\"info-row\">
            <div class=\"info-label\">Entreprise :</div>
            <div class=\"info-value\">";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 237, $this->source); })()), "companyName", [], "any", false, false, false, 237), "html", null, true);
        yield "</div>
        </div>
        <div class=\"info-row\">
            <div class=\"info-label\">Exporté par :</div>
            <div class=\"info-value\">";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 241, $this->source); })()), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userEmail"]) || array_key_exists("userEmail", $context) ? $context["userEmail"] : (function () { throw new RuntimeError('Variable "userEmail" does not exist.', 241, $this->source); })()), "html", null, true);
        yield ")</div>
        </div>
        <div class=\"info-row\">
            <div class=\"info-label\">Rôle(s) :</div>
            <div class=\"info-value\">";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["userRoles"]) || array_key_exists("userRoles", $context) ? $context["userRoles"] : (function () { throw new RuntimeError('Variable "userRoles" does not exist.', 245, $this->source); })()), ", "), "html", null, true);
        yield "</div>
        </div>
        <div class=\"info-row\">
            <div class=\"info-label\">Date d'export :</div>
            <div class=\"info-value\">";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["exportDate"]) || array_key_exists("exportDate", $context) ? $context["exportDate"] : (function () { throw new RuntimeError('Variable "exportDate" does not exist.', 249, $this->source); })()), "d/m/Y H:i:s"), "html", null, true);
        yield "</div>
        </div>
    </div>

    <!-- Filtres appliqués -->
    <div class=\"filters-section\">
        <div class=\"filters-title\">📋 FILTRES APPLIQUÉS</div>
        <div class=\"filters-grid\">
            <div class=\"filter-item\"><span class=\"filter-label\">Recherche :</span> ";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 257)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 257, $this->source); })()), "search", [], "any", false, false, false, 257), "Aucun")) : ("Aucun")), "html", null, true);
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Statut :</span> ";
        // line 258
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 258, $this->source); })()), "status", [], "any", false, false, false, 258)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["statusList"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 258, $this->source); })()), "status", [], "any", false, false, false, 258), [], "array", true, true, false, 258)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusList"]) || array_key_exists("statusList", $context) ? $context["statusList"] : (function () { throw new RuntimeError('Variable "statusList" does not exist.', 258, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 258, $this->source); })()), "status", [], "any", false, false, false, 258), [], "array", false, false, false, 258), CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 258, $this->source); })()), "status", [], "any", false, false, false, 258))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 258, $this->source); })()), "status", [], "any", false, false, false, 258))), "html", null, true)) : ("Tous"));
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Priorité :</span> ";
        // line 259
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 259, $this->source); })()), "priority", [], "any", false, false, false, 259)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["priorityList"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 259, $this->source); })()), "priority", [], "any", false, false, false, 259), [], "array", true, true, false, 259)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["priorityList"]) || array_key_exists("priorityList", $context) ? $context["priorityList"] : (function () { throw new RuntimeError('Variable "priorityList" does not exist.', 259, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 259, $this->source); })()), "priority", [], "any", false, false, false, 259), [], "array", false, false, false, 259), CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 259, $this->source); })()), "priority", [], "any", false, false, false, 259))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 259, $this->source); })()), "priority", [], "any", false, false, false, 259))), "html", null, true)) : ("Toutes"));
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Type :</span> ";
        // line 260
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 260, $this->source); })()), "issue_type", [], "any", false, false, false, 260)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["issueTypeList"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 260, $this->source); })()), "issue_type", [], "any", false, false, false, 260), [], "array", true, true, false, 260)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["issueTypeList"]) || array_key_exists("issueTypeList", $context) ? $context["issueTypeList"] : (function () { throw new RuntimeError('Variable "issueTypeList" does not exist.', 260, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 260, $this->source); })()), "issue_type", [], "any", false, false, false, 260), [], "array", false, false, false, 260), CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 260, $this->source); })()), "issue_type", [], "any", false, false, false, 260))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 260, $this->source); })()), "issue_type", [], "any", false, false, false, 260))), "html", null, true)) : ("Tous"));
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Fournisseur :</span> ";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("supplierName", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["supplierName"]) || array_key_exists("supplierName", $context) ? $context["supplierName"] : (function () { throw new RuntimeError('Variable "supplierName" does not exist.', 261, $this->source); })()), "Tous")) : ("Tous")), "html", null, true);
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Date du :</span> ";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 262)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 262, $this->source); })()), "date_from", [], "any", false, false, false, 262), "Non spécifiée")) : ("Non spécifiée")), "html", null, true);
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Date au :</span> ";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 263)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 263, $this->source); })()), "date_to", [], "any", false, false, false, 263), "Non spécifiée")) : ("Non spécifiée")), "html", null, true);
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Tri :</span> ";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 264)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 264, $this->source); })()), "sort", [], "any", false, false, false, 264), "created_at")) : ("created_at")), "html", null, true);
        yield " (";
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 264)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 264, $this->source); })()), "direction", [], "any", false, false, false, 264), "desc")) : ("desc")) == "desc")) ? ("Décroissant") : ("Croissant"));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["creditNotes"]) || array_key_exists("creditNotes", $context) ? $context["creditNotes"] : (function () { throw new RuntimeError('Variable "creditNotes" does not exist.', 273, $this->source); })())), "html", null, true);
        yield "</div>
                <div class=\"stat-label\">Total avoirs</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("pendingCount", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["pendingCount"]) || array_key_exists("pendingCount", $context) ? $context["pendingCount"] : (function () { throw new RuntimeError('Variable "pendingCount" does not exist.', 277, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</div>
                <div class=\"stat-label\">En attente</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("recoveredCount", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["recoveredCount"]) || array_key_exists("recoveredCount", $context) ? $context["recoveredCount"] : (function () { throw new RuntimeError('Variable "recoveredCount" does not exist.', 281, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</div>
                <div class=\"stat-label\">Récupérés</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("lostCount", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["lostCount"]) || array_key_exists("lostCount", $context) ? $context["lostCount"] : (function () { throw new RuntimeError('Variable "lostCount" does not exist.', 285, $this->source); })()), 0)) : (0)), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["creditNotes"]) || array_key_exists("creditNotes", $context) ? $context["creditNotes"] : (function () { throw new RuntimeError('Variable "creditNotes" does not exist.', 311, $this->source); })()));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((isset($context["totalDeclaredAmount"]) || array_key_exists("totalDeclaredAmount", $context) ? $context["totalDeclaredAmount"] : (function () { throw new RuntimeError('Variable "totalDeclaredAmount" does not exist.', 367, $this->source); })()), (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 367, $this->source); })())), "html", null, true);
        yield "</div>
            </div>
            <div class=\"total-item\">
                <div class=\"total-label\">Montant total récupéré</div>
                <div class=\"total-value\">";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((isset($context["totalRecoveredAmount"]) || array_key_exists("totalRecoveredAmount", $context) ? $context["totalRecoveredAmount"] : (function () { throw new RuntimeError('Variable "totalRecoveredAmount" does not exist.', 371, $this->source); })()), (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 371, $this->source); })())), "html", null, true);
        yield "</div>
            </div>
            <div class=\"total-item\">
                <div class=\"total-label\">Montant total perdu</div>
                <div class=\"total-value\">";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((isset($context["totalLostAmount"]) || array_key_exists("totalLostAmount", $context) ? $context["totalLostAmount"] : (function () { throw new RuntimeError('Variable "totalLostAmount" does not exist.', 375, $this->source); })()), (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 375, $this->source); })())), "html", null, true);
        yield "</div>
            </div>
            <div class=\"total-item\">
                <div class=\"total-label\">Taux de récupération</div>
                <div class=\"total-value\">";
        // line 379
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("recoveryRate", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["recoveryRate"]) || array_key_exists("recoveryRate", $context) ? $context["recoveryRate"] : (function () { throw new RuntimeError('Variable "recoveryRate" does not exist.', 379, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "%</div>
            </div>
        </div>
    </div>

    <!-- Pied de page -->
    <div class=\"footer\">
        Document généré par HMA Market - ";
        // line 386
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["exportDate"]) || array_key_exists("exportDate", $context) ? $context["exportDate"] : (function () { throw new RuntimeError('Variable "exportDate" does not exist.', 386, $this->source); })()), "d/m/Y H:i:s"), "html", null, true);
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
        return array (  600 => 386,  590 => 379,  583 => 375,  576 => 371,  569 => 367,  558 => 358,  549 => 354,  547 => 353,  541 => 351,  537 => 349,  531 => 347,  529 => 346,  524 => 344,  520 => 343,  516 => 342,  512 => 341,  506 => 338,  501 => 337,  496 => 336,  492 => 335,  488 => 334,  484 => 333,  476 => 328,  471 => 327,  466 => 326,  462 => 325,  456 => 322,  452 => 321,  448 => 320,  444 => 319,  440 => 318,  437 => 317,  432 => 315,  428 => 314,  424 => 313,  421 => 312,  416 => 311,  387 => 285,  380 => 281,  373 => 277,  366 => 273,  352 => 264,  348 => 263,  344 => 262,  340 => 261,  336 => 260,  332 => 259,  328 => 258,  324 => 257,  313 => 249,  306 => 245,  297 => 241,  290 => 237,  278 => 230,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/supplier_credit_note/export_pdf.html.twig #}
<!DOCTYPE html>
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
        <div class=\"subtitle\">{{ hmaService.companyName }} - {{ exportDate|date('d/m/Y H:i:s') }}</div>
    </div>

    <!-- Informations générales -->
    <div class=\"info-section\">
        <div class=\"info-row\">
            <div class=\"info-label\">Entreprise :</div>
            <div class=\"info-value\">{{ hmaService.companyName }}</div>
        </div>
        <div class=\"info-row\">
            <div class=\"info-label\">Exporté par :</div>
            <div class=\"info-value\">{{ userName }} ({{ userEmail }})</div>
        </div>
        <div class=\"info-row\">
            <div class=\"info-label\">Rôle(s) :</div>
            <div class=\"info-value\">{{ userRoles|join(', ') }}</div>
        </div>
        <div class=\"info-row\">
            <div class=\"info-label\">Date d'export :</div>
            <div class=\"info-value\">{{ exportDate|date('d/m/Y H:i:s') }}</div>
        </div>
    </div>

    <!-- Filtres appliqués -->
    <div class=\"filters-section\">
        <div class=\"filters-title\">📋 FILTRES APPLIQUÉS</div>
        <div class=\"filters-grid\">
            <div class=\"filter-item\"><span class=\"filter-label\">Recherche :</span> {{ filters.search|default('Aucun') }}</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Statut :</span> {{ filters.status ? statusList[filters.status]|default(filters.status) : 'Tous' }}</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Priorité :</span> {{ filters.priority ? priorityList[filters.priority]|default(filters.priority) : 'Toutes' }}</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Type :</span> {{ filters.issue_type ? issueTypeList[filters.issue_type]|default(filters.issue_type) : 'Tous' }}</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Fournisseur :</span> {{ supplierName|default('Tous') }}</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Date du :</span> {{ filters.date_from|default('Non spécifiée') }}</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Date au :</span> {{ filters.date_to|default('Non spécifiée') }}</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Tri :</span> {{ filters.sort|default('created_at') }} ({{ filters.direction|default('desc') == 'desc' ? 'Décroissant' : 'Croissant' }})</div>
        </div>
    </div>

    <!-- Statistiques -->
    <div class=\"stats-section\">
        <div class=\"filters-title\">📊 STATISTIQUES</div>
        <div class=\"stats-grid\">
            <div class=\"stat-card\">
                <div class=\"stat-value\">{{ creditNotes|length }}</div>
                <div class=\"stat-label\">Total avoirs</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">{{ pendingCount|default(0) }}</div>
                <div class=\"stat-label\">En attente</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">{{ recoveredCount|default(0) }}</div>
                <div class=\"stat-label\">Récupérés</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">{{ lostCount|default(0) }}</div>
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
                {% for creditNote in creditNotes %}
                <tr class=\"
                    {% if creditNote.status == 'pending' %}status-pending
                    {% elseif creditNote.status == 'recovered' %}status-recovered
                    {% elseif creditNote.status == 'lost' %}status-lost
                    {% endif %}
                \">
                    <td><strong>{{ creditNote.creditNoteNumber }}</strong></td>
                    <td>{{ creditNote.supplier.name|u.truncate(25) }}</td>
                    <td>{{ creditNote.stockBatch.batchNumber }}</td>
                    <td>{{ creditNote.stockBatch.product.name|u.truncate(30) }}</td>
                    <td>{{ creditNote.issueTypeLabel }}</td>
                    <td>
                        <span class=\"badge 
                            {% if creditNote.priority == 'critical' %}badge-pending
                            {% elseif creditNote.priority == 'high' %}badge-pending
                            {% else %}badge-closed{% endif %}\">
                            {{ creditNote.priorityLabel }}
                        </span>
                    </td>
                    <td>
                        <span class=\"badge 
                            {% if creditNote.status == 'pending' %}badge-pending
                            {% elseif creditNote.status == 'recovered' %}badge-recovered
                            {% elseif creditNote.status == 'lost' %}badge-lost
                            {% elseif creditNote.status == 'under_review' %}badge-review
                            {% else %}badge-closed{% endif %}\">
                            {{ creditNote.statusLabel }}
                        </span>
                    </td>
                    <td class=\"amount\">{{ creditNote.declaredAmount|price_with_currency(creditNote.hmaService) }}</td>
                    <td class=\"amount\">{{ (creditNote.recoveredAmount ?: 0)|price_with_currency(creditNote.hmaService) }}</td>
                    <td class=\"amount\">{{ (creditNote.lostAmount ?: 0)|price_with_currency(creditNote.hmaService) }}</td>
                    <td>{{ creditNote.reportedAt|date('d/m/Y') }}</td>
                    <td>
                        {% if creditNote.supplierResponse %}
                            <span title=\"{{ creditNote.supplierResponse|e }}\">✓ Répondu</span>
                        {% else %}
                            <span class=\"text-muted\">—</span>
                        {% endif %}
                    </td>
                </tr>
                {% else %}
                <tr>
                    <td colspan=\"12\" style=\"text-align: center;\">Aucun avoir trouvé</td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    <!-- Totaux -->
    <div class=\"totals-section\">
        <div class=\"totals-row\">
            <div class=\"total-item\">
                <div class=\"total-label\">Montant total déclaré</div>
                <div class=\"total-value\">{{ totalDeclaredAmount|price_with_currency(hmaService) }}</div>
            </div>
            <div class=\"total-item\">
                <div class=\"total-label\">Montant total récupéré</div>
                <div class=\"total-value\">{{ totalRecoveredAmount|price_with_currency(hmaService) }}</div>
            </div>
            <div class=\"total-item\">
                <div class=\"total-label\">Montant total perdu</div>
                <div class=\"total-value\">{{ totalLostAmount|price_with_currency(hmaService) }}</div>
            </div>
            <div class=\"total-item\">
                <div class=\"total-label\">Taux de récupération</div>
                <div class=\"total-value\">{{ recoveryRate|default(0) }}%</div>
            </div>
        </div>
    </div>

    <!-- Pied de page -->
    <div class=\"footer\">
        Document généré par HMA Market - {{ exportDate|date('d/m/Y H:i:s') }}
    </div>
</body>
</html>", "supplier_credit_note/export_pdf.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\supplier_credit_note\\export_pdf.html.twig");
    }
}
