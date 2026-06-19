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

/* return/export_pdf.html.twig */
class __TwigTemplate_9faf8083f7a7e1d976bad185e52995c9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "return/export_pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "return/export_pdf.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Export des retours</title>
    <style>
        body {
            font-family: 'DejaVu Sans', 'Arial', 'Helvetica', sans-serif;
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
        .status-pending { color: #d97706; font-weight: bold; }
        .status-approved { color: #2563eb; font-weight: bold; }
        .status-completed { color: #16a34a; font-weight: bold; }
        .status-rejected { color: #dc2626; font-weight: bold; }
        .stats {
            margin-top: 15px;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 5px;
        }
        .user-info {
            background: #e8f4fd;
            padding: 8px 12px;
            border-radius: 5px;
            margin-bottom: 15px;
            border-left: 4px solid #2E86C1;
        }
        .role-badge {
            display: inline-block;
            background: #2E86C1;
            color: white;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 10px;
            margin-right: 5px;
        }
        .text-muted {
            color: #666;
        }
        small {
            font-size: 10px;
        }
    </style>
</head>
<body>
    <h1>RAPPORT DES RETOURS & AVOIRS</h1>
    
    <div class=\"header-info\">
        <p><strong>Date d'export :</strong> ";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["exportDate"]) || array_key_exists("exportDate", $context) ? $context["exportDate"] : (function () { throw new RuntimeError('Variable "exportDate" does not exist.', 118, $this->source); })()), "d/m/Y H:i:s"), "html", null, true);
        yield "</p>
        <p><strong>Entreprise :</strong> ";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 119, $this->source); })()), "companyName", [], "any", false, false, false, 119), "html", null, true);
        yield "</p>
    </div>

    <div class=\"user-info\">
        <p><strong>Exporté par :</strong> ";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 123, $this->source); })()), "html", null, true);
        yield "</p>
        <p><strong>Email :</strong> ";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userEmail"]) || array_key_exists("userEmail", $context) ? $context["userEmail"] : (function () { throw new RuntimeError('Variable "userEmail" does not exist.', 124, $this->source); })()), "html", null, true);
        yield "</p>
        <p><strong>Rôle(s) :</strong> 
            ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["userRoles"]) || array_key_exists("userRoles", $context) ? $context["userRoles"] : (function () { throw new RuntimeError('Variable "userRoles" does not exist.', 126, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 127
            yield "                <span class=\"role-badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
            yield "</span>
            ";
            $context['_iterated'] = true;
        }
        // line 128
        if (!$context['_iterated']) {
            // line 129
            yield "                Utilisateur
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        yield "        </p>
    </div>

    <div class=\"filters\">
        <div class=\"filters-title\">FILTRES APPLIQUÉS :</div>
        <div class=\"filter-row\">
            <div class=\"filter-item\"><span class=\"filter-label\">Recherche :</span> ";
        // line 137
        yield ((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 137)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 137, $this->source); })()), "search", [], "any", false, false, false, 137), "Aucun")) : ("Aucun"))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 137)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 137, $this->source); })()), "search", [], "any", false, false, false, 137), "Aucun")) : ("Aucun")), "html", null, true)) : ("Aucun"));
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Statut :</span> 
                ";
        // line 139
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 139, $this->source); })()), "status", [], "any", false, false, false, 139) == "all") ||  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 139, $this->source); })()), "status", [], "any", false, false, false, 139))) {
            // line 140
            yield "                    Tous les statuts
                ";
        } else {
            // line 142
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["statusLabels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 142, $this->source); })()), "status", [], "any", false, false, false, 142), [], "array", true, true, false, 142)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusLabels"]) || array_key_exists("statusLabels", $context) ? $context["statusLabels"] : (function () { throw new RuntimeError('Variable "statusLabels" does not exist.', 142, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 142, $this->source); })()), "status", [], "any", false, false, false, 142), [], "array", false, false, false, 142), CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 142, $this->source); })()), "status", [], "any", false, false, false, 142))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 142, $this->source); })()), "status", [], "any", false, false, false, 142))), "html", null, true);
            yield "
                ";
        }
        // line 144
        yield "            </div>
            <div class=\"filter-item\"><span class=\"filter-label\">Enregistré par :</span> 
                ";
        // line 146
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 146, $this->source); })()), "user_id", [], "any", false, false, false, 146) && (isset($context["filterUserName"]) || array_key_exists("filterUserName", $context) ? $context["filterUserName"] : (function () { throw new RuntimeError('Variable "filterUserName" does not exist.', 146, $this->source); })()))) {
            // line 147
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filterUserName"]) || array_key_exists("filterUserName", $context) ? $context["filterUserName"] : (function () { throw new RuntimeError('Variable "filterUserName" does not exist.', 147, $this->source); })()), "html", null, true);
            yield "
                ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 148
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 148, $this->source); })()), "user_id", [], "any", false, false, false, 148)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 149
            yield "                    ID: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 149, $this->source); })()), "user_id", [], "any", false, false, false, 149), "html", null, true);
            yield "
                ";
        } else {
            // line 151
            yield "                    Tous les utilisateurs
                ";
        }
        // line 153
        yield "            </div>
        </div>
        <div class=\"filter-row\">
            <div class=\"filter-item\">
                <span class=\"filter-label\">Date du :</span> 
                ";
        // line 158
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 158, $this->source); })()), "date_from", [], "any", false, false, false, 158) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 158, $this->source); })()), "date_from", [], "any", false, false, false, 158) != ""))) {
            // line 159
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 159, $this->source); })()), "date_from", [], "any", false, false, false, 159), "html", null, true);
            yield "
                ";
        } else {
            // line 161
            yield "                    Non spécifiée
                ";
        }
        // line 163
        yield "            </div>
            <div class=\"filter-item\">
                <span class=\"filter-label\">Date au :</span> 
                ";
        // line 166
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 166, $this->source); })()), "date_to", [], "any", false, false, false, 166) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 166, $this->source); })()), "date_to", [], "any", false, false, false, 166) != ""))) {
            // line 167
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 167, $this->source); })()), "date_to", [], "any", false, false, false, 167), "html", null, true);
            yield "
                ";
        } else {
            // line 169
            yield "                    Non spécifiée
                ";
        }
        // line 171
        yield "            </div>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>N° Retour</th>
                <th>N° Commande</th>
                <th>Client</th>
                <th>Date</th>
                <th>Montant</th>
                <th>Motif</th>
                <th>Enregistré par</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["returns"]) || array_key_exists("returns", $context) ? $context["returns"] : (function () { throw new RuntimeError('Variable "returns" does not exist.', 189, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["return"]) {
            // line 190
            yield "                <tr>
                    <td><strong>";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnNumber", [], "any", false, false, false, 191), "html", null, true);
            yield "</strong></td>
                    <td>";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "orderNumber", [], "any", false, false, false, 192), "html", null, true);
            yield "</td>
                    <td>
                        <strong>";
            // line 194
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["return"], "customerName", [], "any", false, false, false, 194)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "customerName", [], "any", false, false, false, 194), "html", null, true)) : ("Non renseigné"));
            yield "</strong><br>
                        <small>";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "customerPhone", [], "any", false, false, false, 195), "html", null, true);
            yield "</small>
                    </td>
                    <td>";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "createdAt", [], "any", false, false, false, 197), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                    <td><strong>";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "totalRefundAmount", [], "any", false, false, false, 198), 0, ",", " "), "html", null, true);
            yield " FCFA</strong></td>
                    <td>";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reasons"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 199), [], "array", true, true, false, 199)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reasons"]) || array_key_exists("reasons", $context) ? $context["reasons"] : (function () { throw new RuntimeError('Variable "reasons" does not exist.', 199, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 199), [], "array", false, false, false, 199), CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 199))) : (CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 199))), "html", null, true);
            yield "</td>
                    <td>";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnedBy", [], "any", false, false, false, 200), "fullName", [], "any", false, false, false, 200), "html", null, true);
            yield "</td>
                    <td>
                        <span class=\"status-";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "status", [], "any", false, false, false, 202), "html", null, true);
            yield "\">
                            ";
            // line 203
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["return"], "status", [], "any", false, false, false, 203) == "pending")) {
                yield "En attente
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 204
$context["return"], "status", [], "any", false, false, false, 204) == "approved")) {
                yield "Approuvé
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 205
$context["return"], "status", [], "any", false, false, false, 205) == "completed")) {
                yield "Remboursé
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 206
$context["return"], "status", [], "any", false, false, false, 206) == "rejected")) {
                yield "Rejeté
                            ";
            }
            // line 208
            yield "                        </span>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 211
        if (!$context['_iterated']) {
            // line 212
            yield "                <tr>
                    <td colspan=\"8\" style=\"text-align: center;\">Aucun retour trouvé</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['return'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        yield "        </tbody>
    </table>

    <div class=\"stats\">
        <strong>RECAPITULATIF :</strong><br>
        Nombre total de retours : ";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalReturns"]) || array_key_exists("totalReturns", $context) ? $context["totalReturns"] : (function () { throw new RuntimeError('Variable "totalReturns" does not exist.', 221, $this->source); })()), "html", null, true);
        yield "<br>
        Montant total rembourse : ";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalRefunded"]) || array_key_exists("totalRefunded", $context) ? $context["totalRefunded"] : (function () { throw new RuntimeError('Variable "totalRefunded" does not exist.', 222, $this->source); })()), 0, ",", " "), "html", null, true);
        yield " FCFA
    </div>

    <div class=\"footer\">
        Document genere par HMA Market - ";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["exportDate"]) || array_key_exists("exportDate", $context) ? $context["exportDate"] : (function () { throw new RuntimeError('Variable "exportDate" does not exist.', 226, $this->source); })()), "d/m/Y H:i"), "html", null, true);
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
        return "return/export_pdf.html.twig";
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
        return array (  411 => 226,  404 => 222,  400 => 221,  393 => 216,  384 => 212,  382 => 211,  375 => 208,  370 => 206,  366 => 205,  362 => 204,  358 => 203,  354 => 202,  349 => 200,  345 => 199,  341 => 198,  337 => 197,  332 => 195,  328 => 194,  323 => 192,  319 => 191,  316 => 190,  311 => 189,  291 => 171,  287 => 169,  281 => 167,  279 => 166,  274 => 163,  270 => 161,  264 => 159,  262 => 158,  255 => 153,  251 => 151,  245 => 149,  243 => 148,  238 => 147,  236 => 146,  232 => 144,  226 => 142,  222 => 140,  220 => 139,  215 => 137,  207 => 131,  200 => 129,  198 => 128,  191 => 127,  186 => 126,  181 => 124,  177 => 123,  170 => 119,  166 => 118,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/return/export_pdf.html.twig #}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Export des retours</title>
    <style>
        body {
            font-family: 'DejaVu Sans', 'Arial', 'Helvetica', sans-serif;
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
        .status-pending { color: #d97706; font-weight: bold; }
        .status-approved { color: #2563eb; font-weight: bold; }
        .status-completed { color: #16a34a; font-weight: bold; }
        .status-rejected { color: #dc2626; font-weight: bold; }
        .stats {
            margin-top: 15px;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 5px;
        }
        .user-info {
            background: #e8f4fd;
            padding: 8px 12px;
            border-radius: 5px;
            margin-bottom: 15px;
            border-left: 4px solid #2E86C1;
        }
        .role-badge {
            display: inline-block;
            background: #2E86C1;
            color: white;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 10px;
            margin-right: 5px;
        }
        .text-muted {
            color: #666;
        }
        small {
            font-size: 10px;
        }
    </style>
</head>
<body>
    <h1>RAPPORT DES RETOURS & AVOIRS</h1>
    
    <div class=\"header-info\">
        <p><strong>Date d'export :</strong> {{ exportDate|date('d/m/Y H:i:s') }}</p>
        <p><strong>Entreprise :</strong> {{ hmaService.companyName }}</p>
    </div>

    <div class=\"user-info\">
        <p><strong>Exporté par :</strong> {{ userName }}</p>
        <p><strong>Email :</strong> {{ userEmail }}</p>
        <p><strong>Rôle(s) :</strong> 
            {% for role in userRoles %}
                <span class=\"role-badge\">{{ role }}</span>
            {% else %}
                Utilisateur
            {% endfor %}
        </p>
    </div>

    <div class=\"filters\">
        <div class=\"filters-title\">FILTRES APPLIQUÉS :</div>
        <div class=\"filter-row\">
            <div class=\"filter-item\"><span class=\"filter-label\">Recherche :</span> {{ filters.search|default('Aucun') ?: 'Aucun' }}</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Statut :</span> 
                {% if filters.status == 'all' or not filters.status %}
                    Tous les statuts
                {% else %}
                    {{ statusLabels[filters.status]|default(filters.status) }}
                {% endif %}
            </div>
            <div class=\"filter-item\"><span class=\"filter-label\">Enregistré par :</span> 
                {% if filters.user_id and filterUserName %}
                    {{ filterUserName }}
                {% elseif filters.user_id %}
                    ID: {{ filters.user_id }}
                {% else %}
                    Tous les utilisateurs
                {% endif %}
            </div>
        </div>
        <div class=\"filter-row\">
            <div class=\"filter-item\">
                <span class=\"filter-label\">Date du :</span> 
                {% if filters.date_from and filters.date_from != '' %}
                    {{ filters.date_from }}
                {% else %}
                    Non spécifiée
                {% endif %}
            </div>
            <div class=\"filter-item\">
                <span class=\"filter-label\">Date au :</span> 
                {% if filters.date_to and filters.date_to != '' %}
                    {{ filters.date_to }}
                {% else %}
                    Non spécifiée
                {% endif %}
            </div>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>N° Retour</th>
                <th>N° Commande</th>
                <th>Client</th>
                <th>Date</th>
                <th>Montant</th>
                <th>Motif</th>
                <th>Enregistré par</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            {% for return in returns %}
                <tr>
                    <td><strong>{{ return.returnNumber }}</strong></td>
                    <td>{{ return.orderNumber }}</td>
                    <td>
                        <strong>{{ return.customerName ?: 'Non renseigné' }}</strong><br>
                        <small>{{ return.customerPhone }}</small>
                    </td>
                    <td>{{ return.createdAt|date('d/m/Y H:i') }}</td>
                    <td><strong>{{ return.totalRefundAmount|number_format(0, ',', ' ') }} FCFA</strong></td>
                    <td>{{ reasons[return.reason]|default(return.reason) }}</td>
                    <td>{{ return.returnedBy.fullName }}</td>
                    <td>
                        <span class=\"status-{{ return.status }}\">
                            {% if return.status == 'pending' %}En attente
                            {% elseif return.status == 'approved' %}Approuvé
                            {% elseif return.status == 'completed' %}Remboursé
                            {% elseif return.status == 'rejected' %}Rejeté
                            {% endif %}
                        </span>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"8\" style=\"text-align: center;\">Aucun retour trouvé</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <div class=\"stats\">
        <strong>RECAPITULATIF :</strong><br>
        Nombre total de retours : {{ totalReturns }}<br>
        Montant total rembourse : {{ totalRefunded|number_format(0, ',', ' ') }} FCFA
    </div>

    <div class=\"footer\">
        Document genere par HMA Market - {{ exportDate|date('d/m/Y H:i') }}
    </div>
</body>
</html>", "return/export_pdf.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\return\\export_pdf.html.twig");
    }
}
