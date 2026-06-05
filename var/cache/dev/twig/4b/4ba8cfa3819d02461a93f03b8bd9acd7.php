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

/* admin/stock_movement/export_pdf.html.twig */
class __TwigTemplate_f2f8e0887c17657f65ca88cbccedcaae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_movement/export_pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_movement/export_pdf.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Rapport des mouvements de stock</title>
    <style>
        body {
            font-family: 'DejaVu Sans', 'Helvetica', 'Arial', sans-serif;
            font-size: 10px;
            line-height: 1.4;
            margin: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #2E86C1;
            padding-bottom: 10px;
        }
        .header h1 {
            color: #2E86C1;
            margin: 0;
            font-size: 18px;
        }
        .header .company {
            font-size: 12px;
            color: #666;
            margin-top: 5px;
        }
        .section {
            margin-bottom: 20px;
        }
        .section-title {
            background-color: #E8F4FD;
            padding: 8px;
            font-weight: bold;
            font-size: 12px;
            margin-bottom: 10px;
            border-left: 4px solid #2E86C1;
        }
        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            margin-bottom: 15px;
        }
        .info-item {
            border-bottom: 1px solid #eee;
            padding: 4px 0;
        }
        .info-label {
            font-weight: bold;
            color: #666;
            font-size: 9px;
            text-transform: uppercase;
        }
        .info-value {
            font-size: 11px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 6px 4px;
            text-align: left;
            vertical-align: top;
        }
        th {
            background-color: #2E86C1;
            color: white;
            font-weight: bold;
            font-size: 9px;
        }
        .badge-in {
            background-color: #28a745;
            color: white;
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 8px;
            display: inline-block;
        }
        .badge-out {
            background-color: #dc3545;
            color: white;
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 8px;
            display: inline-block;
        }
        .text-success { color: #28a745; }
        .text-danger { color: #dc3545; }
        .text-end { text-align: right; }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 10px;
            border-top: 1px solid #ddd;
            font-size: 8px;
            color: #999;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>RAPPORT DES MOUVEMENTS DE STOCK</h1>
        <div class=\"company\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 109, $this->source); })()), "companyName", [], "any", false, false, false, 109), "html", null, true);
        yield "</div>
        <div>Généré le ";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["exportDate"]) || array_key_exists("exportDate", $context) ? $context["exportDate"] : (function () { throw new RuntimeError('Variable "exportDate" does not exist.', 110, $this->source); })()), "d/m/Y H:i:s"), "html", null, true);
        yield "</div>
    </div>

    <div class=\"section\">
        <div class=\"section-title\">INFORMATIONS GÉNÉRALES</div>
        <div class=\"info-grid\">
            <div class=\"info-item\">
                <div class=\"info-label\">Exporté par</div>
                <div class=\"info-value\">";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 118, $this->source); })()), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userEmail"]) || array_key_exists("userEmail", $context) ? $context["userEmail"] : (function () { throw new RuntimeError('Variable "userEmail" does not exist.', 118, $this->source); })()), "html", null, true);
        yield ")</div>
            </div>
            <div class=\"info-item\">
                <div class=\"info-label\">Période</div>
                <div class=\"info-value\">
                    Du ";
        // line 123
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 123, $this->source); })()), "date_from", [], "any", false, false, false, 123)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 123, $this->source); })()), "date_from", [], "any", false, false, false, 123), "html", null, true)) : ("Début"));
        yield " au ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 123, $this->source); })()), "date_to", [], "any", false, false, false, 123)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 123, $this->source); })()), "date_to", [], "any", false, false, false, 123), "html", null, true)) : ("Aujourd'hui"));
        yield "
                </div>
            </div>
            <div class=\"info-item\">
                <div class=\"info-label\">Type de mouvement</div>
                <div class=\"info-value\">";
        // line 128
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 128, $this->source); })()), "movement_type", [], "any", false, false, false, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movementTypes"]) || array_key_exists("movementTypes", $context) ? $context["movementTypes"] : (function () { throw new RuntimeError('Variable "movementTypes" does not exist.', 128, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 128, $this->source); })()), "movement_type", [], "any", false, false, false, 128), [], "array", false, false, false, 128), "html", null, true)) : ("Tous"));
        yield "</div>
            </div>
            <div class=\"info-item\">
                <div class=\"info-label\">Statistiques</div>
                <div class=\"info-value\">
                    Total: ";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["movements"]) || array_key_exists("movements", $context) ? $context["movements"] : (function () { throw new RuntimeError('Variable "movements" does not exist.', 133, $this->source); })())), "html", null, true);
        yield " mouvements |
                    Entrées: ";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalIn"]) || array_key_exists("totalIn", $context) ? $context["totalIn"] : (function () { throw new RuntimeError('Variable "totalIn" does not exist.', 134, $this->source); })()), "html", null, true);
        yield " |
                    Sorties: ";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalOut"]) || array_key_exists("totalOut", $context) ? $context["totalOut"] : (function () { throw new RuntimeError('Variable "totalOut" does not exist.', 135, $this->source); })()), "html", null, true);
        yield "
                </div>
            </div>
        </div>
    </div>

    <div class=\"section\">
        <div class=\"section-title\">LISTE DES MOUVEMENTS</div>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Type</th>
                    <th>Produit</th>
                    <th>N° lot</th>
                    <th class=\"text-end\">Qté</th>
                    <th>Anc. stock</th>
                    <th>Nouv. stock</th>
                    <th>Utilisateur</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["movements"]) || array_key_exists("movements", $context) ? $context["movements"] : (function () { throw new RuntimeError('Variable "movements" does not exist.', 157, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["movement"]) {
            // line 158
            yield "                    ";
            $context["isIn"] = CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 158), ["in", "purchase_in", "adjustment_in", "return_in"]);
            // line 159
            yield "                    <tr>
                        <td>";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "createdAt", [], "any", false, false, false, 160), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                        <td>
                            <span class=\"";
            // line 162
            yield (((($tmp = (isset($context["isIn"]) || array_key_exists("isIn", $context) ? $context["isIn"] : (function () { throw new RuntimeError('Variable "isIn" does not exist.', 162, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("badge-in") : ("badge-out"));
            yield "\">
                                ";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementTypeLabel", [], "any", false, false, false, 163), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td>";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "stockBatch", [], "any", false, false, false, 166), "product", [], "any", false, false, false, 166), "name", [], "any", false, false, false, 166)), "truncate", [35], "method", false, false, false, 166), "html", null, true);
            yield "</td>
                        <td>";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "stockBatch", [], "any", false, false, false, 167), "batchNumber", [], "any", false, false, false, 167), "html", null, true);
            yield "</td>
                        <td class=\"text-end ";
            // line 168
            yield (((($tmp = (isset($context["isIn"]) || array_key_exists("isIn", $context) ? $context["isIn"] : (function () { throw new RuntimeError('Variable "isIn" does not exist.', 168, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-success") : ("text-danger"));
            yield "\">
                            ";
            // line 169
            yield (((($tmp = (isset($context["isIn"]) || array_key_exists("isIn", $context) ? $context["isIn"] : (function () { throw new RuntimeError('Variable "isIn" does not exist.', 169, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("+") : ("-"));
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "quantity", [], "any", false, false, false, 169), 0, ",", " "), "html", null, true);
            yield "
                        </td>
                        <td>";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "oldQuantity", [], "any", false, false, false, 171), 0, ",", " "), "html", null, true);
            yield "</td>
                        <td>";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "newQuantity", [], "any", false, false, false, 172), 0, ",", " "), "html", null, true);
            yield "</td>
                        <td>";
            // line 173
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 173), "fullName", [], "any", false, false, false, 173)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 173), "fullName", [], "any", false, false, false, 173), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 173), "email", [], "any", false, false, false, 173), "html", null, true)));
            yield "</td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 175
        if (!$context['_iterated']) {
            // line 176
            yield "                    <tr>
                        <td colspan=\"8\" style=\"text-align: center;\">Aucun mouvement trouvé</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['movement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        yield "            </tbody>
        </table>
    </div>

    <div class=\"footer\">
        Document généré par HMA Market - ";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["exportDate"]) || array_key_exists("exportDate", $context) ? $context["exportDate"] : (function () { throw new RuntimeError('Variable "exportDate" does not exist.', 185, $this->source); })()), "d/m/Y H:i:s"), "html", null, true);
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
        return "admin/stock_movement/export_pdf.html.twig";
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
        return array (  310 => 185,  303 => 180,  294 => 176,  292 => 175,  285 => 173,  281 => 172,  277 => 171,  271 => 169,  267 => 168,  263 => 167,  259 => 166,  253 => 163,  249 => 162,  244 => 160,  241 => 159,  238 => 158,  233 => 157,  208 => 135,  204 => 134,  200 => 133,  192 => 128,  182 => 123,  172 => 118,  161 => 110,  157 => 109,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/stock_movement/export_pdf.html.twig #}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Rapport des mouvements de stock</title>
    <style>
        body {
            font-family: 'DejaVu Sans', 'Helvetica', 'Arial', sans-serif;
            font-size: 10px;
            line-height: 1.4;
            margin: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #2E86C1;
            padding-bottom: 10px;
        }
        .header h1 {
            color: #2E86C1;
            margin: 0;
            font-size: 18px;
        }
        .header .company {
            font-size: 12px;
            color: #666;
            margin-top: 5px;
        }
        .section {
            margin-bottom: 20px;
        }
        .section-title {
            background-color: #E8F4FD;
            padding: 8px;
            font-weight: bold;
            font-size: 12px;
            margin-bottom: 10px;
            border-left: 4px solid #2E86C1;
        }
        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            margin-bottom: 15px;
        }
        .info-item {
            border-bottom: 1px solid #eee;
            padding: 4px 0;
        }
        .info-label {
            font-weight: bold;
            color: #666;
            font-size: 9px;
            text-transform: uppercase;
        }
        .info-value {
            font-size: 11px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 6px 4px;
            text-align: left;
            vertical-align: top;
        }
        th {
            background-color: #2E86C1;
            color: white;
            font-weight: bold;
            font-size: 9px;
        }
        .badge-in {
            background-color: #28a745;
            color: white;
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 8px;
            display: inline-block;
        }
        .badge-out {
            background-color: #dc3545;
            color: white;
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 8px;
            display: inline-block;
        }
        .text-success { color: #28a745; }
        .text-danger { color: #dc3545; }
        .text-end { text-align: right; }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 10px;
            border-top: 1px solid #ddd;
            font-size: 8px;
            color: #999;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>RAPPORT DES MOUVEMENTS DE STOCK</h1>
        <div class=\"company\">{{ hmaService.companyName }}</div>
        <div>Généré le {{ exportDate|date('d/m/Y H:i:s') }}</div>
    </div>

    <div class=\"section\">
        <div class=\"section-title\">INFORMATIONS GÉNÉRALES</div>
        <div class=\"info-grid\">
            <div class=\"info-item\">
                <div class=\"info-label\">Exporté par</div>
                <div class=\"info-value\">{{ userName }} ({{ userEmail }})</div>
            </div>
            <div class=\"info-item\">
                <div class=\"info-label\">Période</div>
                <div class=\"info-value\">
                    Du {{ filters.date_from ?: 'Début' }} au {{ filters.date_to ?: 'Aujourd\\'hui' }}
                </div>
            </div>
            <div class=\"info-item\">
                <div class=\"info-label\">Type de mouvement</div>
                <div class=\"info-value\">{{ filters.movement_type ? movementTypes[filters.movement_type] : 'Tous' }}</div>
            </div>
            <div class=\"info-item\">
                <div class=\"info-label\">Statistiques</div>
                <div class=\"info-value\">
                    Total: {{ movements|length }} mouvements |
                    Entrées: {{ totalIn }} |
                    Sorties: {{ totalOut }}
                </div>
            </div>
        </div>
    </div>

    <div class=\"section\">
        <div class=\"section-title\">LISTE DES MOUVEMENTS</div>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Type</th>
                    <th>Produit</th>
                    <th>N° lot</th>
                    <th class=\"text-end\">Qté</th>
                    <th>Anc. stock</th>
                    <th>Nouv. stock</th>
                    <th>Utilisateur</th>
                </tr>
            </thead>
            <tbody>
                {% for movement in movements %}
                    {% set isIn = movement.movementType in ['in', 'purchase_in', 'adjustment_in', 'return_in'] %}
                    <tr>
                        <td>{{ movement.createdAt|date('d/m/Y H:i') }}</td>
                        <td>
                            <span class=\"{{ isIn ? 'badge-in' : 'badge-out' }}\">
                                {{ movement.movementTypeLabel }}
                            </span>
                        </td>
                        <td>{{ movement.stockBatch.product.name|u.truncate(35) }}</td>
                        <td>{{ movement.stockBatch.batchNumber }}</td>
                        <td class=\"text-end {{ isIn ? 'text-success' : 'text-danger' }}\">
                            {{ isIn ? '+' : '-' }}{{ movement.quantity|number_format(0, ',', ' ') }}
                        </td>
                        <td>{{ movement.oldQuantity|number_format(0, ',', ' ') }}</td>
                        <td>{{ movement.newQuantity|number_format(0, ',', ' ') }}</td>
                        <td>{{ movement.user.fullName ?: movement.user.email }}</td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"8\" style=\"text-align: center;\">Aucun mouvement trouvé</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    <div class=\"footer\">
        Document généré par HMA Market - {{ exportDate|date('d/m/Y H:i:s') }}
    </div>
</body>
</html>", "admin/stock_movement/export_pdf.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_movement\\export_pdf.html.twig");
    }
}
