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

/* stock/transfer/print_multiple.html.twig */
class __TwigTemplate_8e04b8573222b2232e2f57f1706e8765 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base_print.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/transfer/print_multiple.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/transfer/print_multiple.html.twig"));

        $this->parent = $this->load("base_print.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Transferts sélectionnés - HMA Market";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "<div class=\"container py-3\">
    <div class=\"text-center mb-4\">
        <h2>Transferts de stock</h2>
        <p>Liste des transferts sélectionnés - ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i:s"), "html", null, true);
        yield "</p>
        <hr>
    </div>

    <table class=\"table table-bordered table-sm\">
        <thead>
            <tr>
                <th>#</th>
                <th>N° transfert</th>
                <th>Date</th>
                <th>Produit</th>
                <th>N° lot</th>
                <th class=\"text-end\">Quantité</th>
                <th>Source → Destination</th>
                <th>Statut</th>
                <th>Créé par</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transfers"]) || array_key_exists("transfers", $context) ? $context["transfers"] : (function () { throw new RuntimeError('Variable "transfers" does not exist.', 29, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["transfer"]) {
            // line 30
            yield "            <tr>
                <td class=\"text-center\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                <td><strong>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "transferNumber", [], "any", false, false, false, 32), "html", null, true);
            yield "</strong></td>
                <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "createdAt", [], "any", false, false, false, 33), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "stockBatch", [], "any", false, false, false, 34), "product", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                <td><code>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "stockBatch", [], "any", false, false, false, 35), "batchNumber", [], "any", false, false, false, 35), "html", null, true);
            yield "</code></td>
                <td class=\"text-end\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "quantity", [], "any", false, false, false, 36), 0, ",", " "), "html", null, true);
            yield "</td>
                <td>
                    ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "sourceLocation", [], "any", false, false, false, 38), "displayName", [], "any", false, false, false, 38), "html", null, true);
            yield "
                    <i class=\"fas fa-arrow-right\"></i>
                    ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "destinationLocation", [], "any", false, false, false, 40), "displayName", [], "any", false, false, false, 40), "html", null, true);
            yield "
                </td>
                <td>
                    <span class=\"badge ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "statusBadgeClass", [], "any", false, false, false, 43), "html", null, true);
            yield "\">
                        ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "statusLabel", [], "any", false, false, false, 44), "html", null, true);
            yield "
                    </span>
                </td>
                <td>";
            // line 47
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "createdBy", [], "any", false, false, false, 47), "fullName", [], "any", false, false, false, 47)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "createdBy", [], "any", false, false, false, 47), "fullName", [], "any", false, false, false, 47), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "createdBy", [], "any", false, false, false, 47), "email", [], "any", false, false, false, 47), "html", null, true)));
            yield "</td>
            </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['transfer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "        </tbody>
    </table>

    <div class=\"mt-4 text-center\">
        <small class=\"text-muted\">Document généré par HMA Market</small>
    </div>
</div>

<style media=\"print\">
    @page {
        size: landscape;
        margin: 1cm;
    }
    body {
        font-size: 10px;
    }
    .badge {
        border: 1px solid #ddd;
        background: none;
        color: #333;
    }
    .table td, .table th {
        padding: 4px;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "stock/transfer/print_multiple.html.twig";
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
        return array (  210 => 50,  193 => 47,  187 => 44,  183 => 43,  177 => 40,  172 => 38,  167 => 36,  163 => 35,  159 => 34,  155 => 33,  151 => 32,  147 => 31,  144 => 30,  127 => 29,  105 => 10,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/stock/transfer/print_multiple.html.twig #}
{% extends 'base_print.html.twig' %}

{% block title %}Transferts sélectionnés - HMA Market{% endblock %}

{% block body %}
<div class=\"container py-3\">
    <div class=\"text-center mb-4\">
        <h2>Transferts de stock</h2>
        <p>Liste des transferts sélectionnés - {{ \"now\"|date('d/m/Y H:i:s') }}</p>
        <hr>
    </div>

    <table class=\"table table-bordered table-sm\">
        <thead>
            <tr>
                <th>#</th>
                <th>N° transfert</th>
                <th>Date</th>
                <th>Produit</th>
                <th>N° lot</th>
                <th class=\"text-end\">Quantité</th>
                <th>Source → Destination</th>
                <th>Statut</th>
                <th>Créé par</th>
            </tr>
        </thead>
        <tbody>
            {% for transfer in transfers %}
            <tr>
                <td class=\"text-center\">{{ loop.index }}</td>
                <td><strong>{{ transfer.transferNumber }}</strong></td>
                <td>{{ transfer.createdAt|date('d/m/Y H:i') }}</td>
                <td>{{ transfer.stockBatch.product.name }}</td>
                <td><code>{{ transfer.stockBatch.batchNumber }}</code></td>
                <td class=\"text-end\">{{ transfer.quantity|number_format(0, ',', ' ') }}</td>
                <td>
                    {{ transfer.sourceLocation.displayName }}
                    <i class=\"fas fa-arrow-right\"></i>
                    {{ transfer.destinationLocation.displayName }}
                </td>
                <td>
                    <span class=\"badge {{ transfer.statusBadgeClass }}\">
                        {{ transfer.statusLabel }}
                    </span>
                </td>
                <td>{{ transfer.createdBy.fullName ?: transfer.createdBy.email }}</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>

    <div class=\"mt-4 text-center\">
        <small class=\"text-muted\">Document généré par HMA Market</small>
    </div>
</div>

<style media=\"print\">
    @page {
        size: landscape;
        margin: 1cm;
    }
    body {
        font-size: 10px;
    }
    .badge {
        border: 1px solid #ddd;
        background: none;
        color: #333;
    }
    .table td, .table th {
        padding: 4px;
    }
</style>
{% endblock %}", "stock/transfer/print_multiple.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\transfer\\print_multiple.html.twig");
    }
}
