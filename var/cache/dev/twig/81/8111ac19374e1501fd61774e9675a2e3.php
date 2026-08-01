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

/* admin/stock_batch/print_multiple_simple.html.twig */
class __TwigTemplate_ed50a4b60f4b3725dfc643a5ee68f02c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_batch/print_multiple_simple.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_batch/print_multiple_simple.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Étiquettes lots</title>
    <style>
        @media print {
            body {
                margin: 0;
                padding: 10px;
            }
            .page-break {
                page-break-after: always;
            }
            .no-print {
                display: none;
            }
        }
        
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        
        .labels-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        .sticker {
            width: 250px;
            border: 1px dashed #ccc;
            padding: 12px;
            border-radius: 8px;
            background: white;
            page-break-inside: avoid;
        }
        
        .sticker-header {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 5px;
            margin: -12px -12px 10px -12px;
            border-radius: 8px 8px 0 0;
            font-size: 10px;
            font-weight: bold;
        }
        
        .sticker-product {
            font-size: 13px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 8px;
        }
        
        .sticker-barcode {
            font-family: monospace;
            font-size: 16px;
            text-align: center;
            letter-spacing: 1px;
            background: #f8f9fa;
            padding: 5px;
            margin: 8px 0;
            border-radius: 4px;
        }
        
        .sticker-info {
            font-size: 11px;
            margin: 5px 0;
        }
        
        .sticker-info-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 3px;
        }
        
        .print-actions {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .print-actions button {
            padding: 8px 16px;
            margin: 0 5px;
            cursor: pointer;
        }
        
        @media print {
            .print-actions {
                display: none;
            }
            .sticker {
                border: none;
            }
        }
    </style>
</head>
<body>
    <div class=\"print-actions no-print\">
        <button onclick=\"window.print()\">🖨️ Imprimer</button>
        <button onclick=\"window.close()\">❌ Fermer</button>
    </div>
    
    <div class=\"labels-container\">
        ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["batches"]) || array_key_exists("batches", $context) ? $context["batches"] : (function () { throw new RuntimeError('Variable "batches" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
            // line 110
            yield "            <div class=\"sticker\">
                <div class=\"sticker-header\">LOT N°";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 111),  -6), "html", null, true);
            yield "</div>
                <div class=\"sticker-product\">";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 112), "name", [], "any", false, false, false, 112)), "truncate", [25], "method", false, false, false, 112), "html", null, true);
            yield "</div>
                <div class=\"sticker-barcode\">";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 113), "html", null, true);
            yield "</div>
                <div class=\"sticker-info\">
                    <div class=\"sticker-info-row\">
                        <span>📍 Emplacement:</span>
                        <strong>";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", true, true, false, 117)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 117), "—")) : ("—")), "html", null, true);
            yield "</strong>
                    </div>
                    <div class=\"sticker-info-row\">
                        <span>📦 Stock:</span>
                        <strong>";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 121), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 121), "html", null, true);
            yield "</strong>
                    </div>
                    <div class=\"sticker-info-row\">
                        <span>⏰ Expire:</span>
                        <strong>";
            // line 125
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 125)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 125), "d/m/Y"), "html", null, true)) : ("N/A"));
            yield "</strong>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        yield "    </div>
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
        return "admin/stock_batch/print_multiple_simple.html.twig";
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
        return array (  206 => 130,  195 => 125,  186 => 121,  179 => 117,  172 => 113,  168 => 112,  164 => 111,  161 => 110,  157 => 109,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/stock_batch/print_multiple_simple.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Étiquettes lots</title>
    <style>
        @media print {
            body {
                margin: 0;
                padding: 10px;
            }
            .page-break {
                page-break-after: always;
            }
            .no-print {
                display: none;
            }
        }
        
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        
        .labels-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        .sticker {
            width: 250px;
            border: 1px dashed #ccc;
            padding: 12px;
            border-radius: 8px;
            background: white;
            page-break-inside: avoid;
        }
        
        .sticker-header {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 5px;
            margin: -12px -12px 10px -12px;
            border-radius: 8px 8px 0 0;
            font-size: 10px;
            font-weight: bold;
        }
        
        .sticker-product {
            font-size: 13px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 8px;
        }
        
        .sticker-barcode {
            font-family: monospace;
            font-size: 16px;
            text-align: center;
            letter-spacing: 1px;
            background: #f8f9fa;
            padding: 5px;
            margin: 8px 0;
            border-radius: 4px;
        }
        
        .sticker-info {
            font-size: 11px;
            margin: 5px 0;
        }
        
        .sticker-info-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 3px;
        }
        
        .print-actions {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .print-actions button {
            padding: 8px 16px;
            margin: 0 5px;
            cursor: pointer;
        }
        
        @media print {
            .print-actions {
                display: none;
            }
            .sticker {
                border: none;
            }
        }
    </style>
</head>
<body>
    <div class=\"print-actions no-print\">
        <button onclick=\"window.print()\">🖨️ Imprimer</button>
        <button onclick=\"window.close()\">❌ Fermer</button>
    </div>
    
    <div class=\"labels-container\">
        {% for batch in batches %}
            <div class=\"sticker\">
                <div class=\"sticker-header\">LOT N°{{ batch.batchNumber|slice(-6) }}</div>
                <div class=\"sticker-product\">{{ batch.product.name|u.truncate(25) }}</div>
                <div class=\"sticker-barcode\">{{ batch.batchNumber }}</div>
                <div class=\"sticker-info\">
                    <div class=\"sticker-info-row\">
                        <span>📍 Emplacement:</span>
                        <strong>{{ batch.location|default('—') }}</strong>
                    </div>
                    <div class=\"sticker-info-row\">
                        <span>📦 Stock:</span>
                        <strong>{{ batch.currentQuantity }} / {{ batch.initialQuantity }}</strong>
                    </div>
                    <div class=\"sticker-info-row\">
                        <span>⏰ Expire:</span>
                        <strong>{{ batch.expiryDate ? batch.expiryDate|date('d/m/Y') : 'N/A' }}</strong>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
</body>
</html>", "admin/stock_batch/print_multiple_simple.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_batch\\print_multiple_simple.html.twig");
    }
}
