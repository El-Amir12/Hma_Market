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

/* admin/purchase_item/index.html.twig */
class __TwigTemplate_863a6c19616b2a29ca2ec3a7a69ac29e extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase_item/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase_item/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "PurchaseItem index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <h1>PurchaseItem index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Stock_batch_id</th>
                <th>Batch_number</th>
                <th>Quantity</th>
                <th>Unit_price</th>
                <th>Total_price</th>
                <th>Expiry_date</th>
                <th>Manufacturing_date</th>
                <th>Created_at</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["purchase_items"]) || array_key_exists("purchase_items", $context) ? $context["purchase_items"] : (function () { throw new RuntimeError('Variable "purchase_items" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["purchase_item"]) {
            // line 25
            yield "            <tr>
                <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["purchase_item"], "id", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["purchase_item"], "stockBatchId", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["purchase_item"], "batchNumber", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["purchase_item"], "quantity", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["purchase_item"], "unitPrice", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["purchase_item"], "totalPrice", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                <td>";
            // line 32
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["purchase_item"], "expiryDate", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["purchase_item"], "expiryDate", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 33
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["purchase_item"], "manufacturingDate", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["purchase_item"], "manufacturingDate", [], "any", false, false, false, 33), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 34
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["purchase_item"], "createdAt", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["purchase_item"], "createdAt", [], "any", false, false, false, 34), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                <td>
                    <a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_purchase_item_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["purchase_item"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_purchase_item_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["purchase_item"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 40
        if (!$context['_iterated']) {
            // line 41
            yield "            <tr>
                <td colspan=\"10\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['purchase_item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_purchase_item_new");
        yield "\">Create new</a>
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
        return "admin/purchase_item/index.html.twig";
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
        return array (  193 => 48,  188 => 45,  179 => 41,  177 => 40,  169 => 37,  165 => 36,  160 => 34,  156 => 33,  152 => 32,  148 => 31,  144 => 30,  140 => 29,  136 => 28,  132 => 27,  128 => 26,  125 => 25,  120 => 24,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PurchaseItem index{% endblock %}

{% block body %}
    <h1>PurchaseItem index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Stock_batch_id</th>
                <th>Batch_number</th>
                <th>Quantity</th>
                <th>Unit_price</th>
                <th>Total_price</th>
                <th>Expiry_date</th>
                <th>Manufacturing_date</th>
                <th>Created_at</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for purchase_item in purchase_items %}
            <tr>
                <td>{{ purchase_item.id }}</td>
                <td>{{ purchase_item.stockBatchId }}</td>
                <td>{{ purchase_item.batchNumber }}</td>
                <td>{{ purchase_item.quantity }}</td>
                <td>{{ purchase_item.unitPrice }}</td>
                <td>{{ purchase_item.totalPrice }}</td>
                <td>{{ purchase_item.expiryDate ? purchase_item.expiryDate|date('Y-m-d') : '' }}</td>
                <td>{{ purchase_item.manufacturingDate ? purchase_item.manufacturingDate|date('Y-m-d') : '' }}</td>
                <td>{{ purchase_item.createdAt ? purchase_item.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>
                    <a href=\"{{ path('app_admin_purchase_item_show', {'id': purchase_item.id}) }}\">show</a>
                    <a href=\"{{ path('app_admin_purchase_item_edit', {'id': purchase_item.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"10\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_admin_purchase_item_new') }}\">Create new</a>
{% endblock %}
", "admin/purchase_item/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\purchase_item\\index.html.twig");
    }
}
