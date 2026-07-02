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
class __TwigTemplate_1cf73dedac678a2a07141d1d0134ded6 extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["exportDate"] ?? null), "d/m/Y H:i:s"), "html", null, true);
        yield "</p>
        <p><strong>Entreprise :</strong> ";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "companyName", [], "any", false, false, false, 119), "html", null, true);
        yield "</p>
    </div>

    <div class=\"user-info\">
        <p><strong>Exporté par :</strong> ";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["userName"] ?? null), "html", null, true);
        yield "</p>
        <p><strong>Email :</strong> ";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["userEmail"] ?? null), "html", null, true);
        yield "</p>
        <p><strong>Rôle(s) :</strong> 
            ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["userRoles"] ?? null));
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
        yield ((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 137)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", false, false, false, 137), "Aucun")) : ("Aucun"))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 137)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", false, false, false, 137), "Aucun")) : ("Aucun")), "html", null, true)) : ("Aucun"));
        yield "</div>
            <div class=\"filter-item\"><span class=\"filter-label\">Statut :</span> 
                ";
        // line 139
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 139) == "all") ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 139))) {
            // line 140
            yield "                    Tous les statuts
                ";
        } else {
            // line 142
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["statusLabels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 142), [], "array", true, true, false, 142)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["statusLabels"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 142)] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 142))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 142))), "html", null, true);
            yield "
                ";
        }
        // line 144
        yield "            </div>
            <div class=\"filter-item\"><span class=\"filter-label\">Enregistré par :</span> 
                ";
        // line 146
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "user_id", [], "any", false, false, false, 146) && ($context["filterUserName"] ?? null))) {
            // line 147
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filterUserName"] ?? null), "html", null, true);
            yield "
                ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 148
($context["filters"] ?? null), "user_id", [], "any", false, false, false, 148)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 149
            yield "                    ID: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "user_id", [], "any", false, false, false, 149), "html", null, true);
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 158) && (CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 158) != ""))) {
            // line 159
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 159), "html", null, true);
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 166) && (CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 166) != ""))) {
            // line 167
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 167), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["returns"] ?? null));
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reasons"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 199), [], "array", true, true, false, 199)) ? (Twig\Extension\CoreExtension::default((($_v1 = ($context["reasons"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 199)] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 199))) : (CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 199))), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalReturns"] ?? null), "html", null, true);
        yield "<br>
        Montant total rembourse : ";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["totalRefunded"] ?? null), 0, ",", " "), "html", null, true);
        yield " FCFA
    </div>

    <div class=\"footer\">
        Document genere par HMA Market - ";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["exportDate"] ?? null), "d/m/Y H:i"), "html", null, true);
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
        return array (  405 => 226,  398 => 222,  394 => 221,  387 => 216,  378 => 212,  376 => 211,  369 => 208,  364 => 206,  360 => 205,  356 => 204,  352 => 203,  348 => 202,  343 => 200,  339 => 199,  335 => 198,  331 => 197,  326 => 195,  322 => 194,  317 => 192,  313 => 191,  310 => 190,  305 => 189,  285 => 171,  281 => 169,  275 => 167,  273 => 166,  268 => 163,  264 => 161,  258 => 159,  256 => 158,  249 => 153,  245 => 151,  239 => 149,  237 => 148,  232 => 147,  230 => 146,  226 => 144,  220 => 142,  216 => 140,  214 => 139,  209 => 137,  201 => 131,  194 => 129,  192 => 128,  185 => 127,  180 => 126,  175 => 124,  171 => 123,  164 => 119,  160 => 118,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "return/export_pdf.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\return\\export_pdf.html.twig");
    }
}
