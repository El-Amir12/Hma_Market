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

/* admin/purchase_item/show.html.twig */
class __TwigTemplate_547b6ecad46dafe32ccd7f773c9792fb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase_item/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase_item/show.html.twig"));

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

        yield "PurchaseItem";
        
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
        yield "    <h1>PurchaseItem</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase_item"]) || array_key_exists("purchase_item", $context) ? $context["purchase_item"] : (function () { throw new RuntimeError('Variable "purchase_item" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Stock_batch_id</th>
                <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase_item"]) || array_key_exists("purchase_item", $context) ? $context["purchase_item"] : (function () { throw new RuntimeError('Variable "purchase_item" does not exist.', 16, $this->source); })()), "stockBatchId", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Batch_number</th>
                <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase_item"]) || array_key_exists("purchase_item", $context) ? $context["purchase_item"] : (function () { throw new RuntimeError('Variable "purchase_item" does not exist.', 20, $this->source); })()), "batchNumber", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase_item"]) || array_key_exists("purchase_item", $context) ? $context["purchase_item"] : (function () { throw new RuntimeError('Variable "purchase_item" does not exist.', 24, $this->source); })()), "quantity", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Unit_price</th>
                <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase_item"]) || array_key_exists("purchase_item", $context) ? $context["purchase_item"] : (function () { throw new RuntimeError('Variable "purchase_item" does not exist.', 28, $this->source); })()), "unitPrice", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Total_price</th>
                <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase_item"]) || array_key_exists("purchase_item", $context) ? $context["purchase_item"] : (function () { throw new RuntimeError('Variable "purchase_item" does not exist.', 32, $this->source); })()), "totalPrice", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Expiry_date</th>
                <td>";
        // line 36
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase_item"]) || array_key_exists("purchase_item", $context) ? $context["purchase_item"] : (function () { throw new RuntimeError('Variable "purchase_item" does not exist.', 36, $this->source); })()), "expiryDate", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase_item"]) || array_key_exists("purchase_item", $context) ? $context["purchase_item"] : (function () { throw new RuntimeError('Variable "purchase_item" does not exist.', 36, $this->source); })()), "expiryDate", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>Manufacturing_date</th>
                <td>";
        // line 40
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase_item"]) || array_key_exists("purchase_item", $context) ? $context["purchase_item"] : (function () { throw new RuntimeError('Variable "purchase_item" does not exist.', 40, $this->source); })()), "manufacturingDate", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase_item"]) || array_key_exists("purchase_item", $context) ? $context["purchase_item"] : (function () { throw new RuntimeError('Variable "purchase_item" does not exist.', 40, $this->source); })()), "manufacturingDate", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>";
        // line 44
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase_item"]) || array_key_exists("purchase_item", $context) ? $context["purchase_item"] : (function () { throw new RuntimeError('Variable "purchase_item" does not exist.', 44, $this->source); })()), "createdAt", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase_item"]) || array_key_exists("purchase_item", $context) ? $context["purchase_item"] : (function () { throw new RuntimeError('Variable "purchase_item" does not exist.', 44, $this->source); })()), "createdAt", [], "any", false, false, false, 44), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_purchase_item_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_purchase_item_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase_item"]) || array_key_exists("purchase_item", $context) ? $context["purchase_item"] : (function () { throw new RuntimeError('Variable "purchase_item" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 53
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/purchase_item/_delete_form.html.twig");
        yield "
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
        return "admin/purchase_item/show.html.twig";
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
        return array (  182 => 53,  177 => 51,  172 => 49,  164 => 44,  157 => 40,  150 => 36,  143 => 32,  136 => 28,  129 => 24,  122 => 20,  115 => 16,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PurchaseItem{% endblock %}

{% block body %}
    <h1>PurchaseItem</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ purchase_item.id }}</td>
            </tr>
            <tr>
                <th>Stock_batch_id</th>
                <td>{{ purchase_item.stockBatchId }}</td>
            </tr>
            <tr>
                <th>Batch_number</th>
                <td>{{ purchase_item.batchNumber }}</td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td>{{ purchase_item.quantity }}</td>
            </tr>
            <tr>
                <th>Unit_price</th>
                <td>{{ purchase_item.unitPrice }}</td>
            </tr>
            <tr>
                <th>Total_price</th>
                <td>{{ purchase_item.totalPrice }}</td>
            </tr>
            <tr>
                <th>Expiry_date</th>
                <td>{{ purchase_item.expiryDate ? purchase_item.expiryDate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Manufacturing_date</th>
                <td>{{ purchase_item.manufacturingDate ? purchase_item.manufacturingDate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>{{ purchase_item.createdAt ? purchase_item.createdAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_admin_purchase_item_index') }}\">back to list</a>

    <a href=\"{{ path('app_admin_purchase_item_edit', {'id': purchase_item.id}) }}\">edit</a>

    {{ include('admin/purchase_item/_delete_form.html.twig') }}
{% endblock %}
", "admin/purchase_item/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\purchase_item\\show.html.twig");
    }
}
