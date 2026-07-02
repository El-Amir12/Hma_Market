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

/* print/kitchen_ticket.html.twig */
class __TwigTemplate_4305568d7db6e296490869fc535b403b extends Template
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
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "print/base_ticket.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "print/kitchen_ticket.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "print/kitchen_ticket.html.twig"));

        $this->parent = $this->load("print/base_ticket.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 5
        yield "<div class=\"header\">
    <h1> ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 6, $this->source); })()), "companyName", [], "any", false, false, false, 6), "html", null, true);
        yield "</h1>
    <p>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "address", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 7, $this->source); })()), "address", [], "any", false, false, false, 7), "")) : ("")), "html", null, true);
        yield "</p>
    <p> ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "phone", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 8, $this->source); })()), "phone", [], "any", false, false, false, 8), "")) : ("")), "html", null, true);
        yield "</p>
    <div class=\"divider\"></div>
    <div class=\"info-row\">
        <span class=\"info-label\">Commande:</span>
        <span>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 12, $this->source); })()), "orderNumber", [], "any", false, false, false, 12), "html", null, true);
        yield "</span>
    </div>
    <div class=\"info-row\">
        <span class=\"info-label\">Table:</span>
        <span>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "tableNumber", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 16, $this->source); })()), "tableNumber", [], "any", false, false, false, 16), "Sur place")) : ("Sur place")), "html", null, true);
        yield "</span>
    </div>
    <div class=\"info-row\">
        <span class=\"info-label\">Heure:</span>
        <span>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 20, $this->source); })()), "createdAt", [], "any", false, false, false, 20), "H:i"), "html", null, true);
        yield "</span>
    </div>
    <div class=\"info-row\">
        <span class=\"info-label\">Caissier:</span>
        <span>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, true, false, 24), "fullName", [], "any", true, true, false, 24)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "fullName", [], "any", false, false, false, 24), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "email", [], "any", false, false, false, 24))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "email", [], "any", false, false, false, 24))), "html", null, true);
        yield "</span>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 30
        yield "<div class=\"kitchen-items\">
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 32
            yield "    <div class=\"kitchen-item\">
        <div class=\"info-row\">
            <span class=\"kitchen-item-name\"> ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 34), "html", null, true);
            yield "</span>
            <span class=\"kitchen-item-quantity\">×";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 35), "html", null, true);
            yield "</span>
        </div>
        ";
            // line 37
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "notes", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 38
                yield "        <div class=\"notes\"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "notes", [], "any", false, false, false, 38), "html", null, true);
                yield "</div>
        ";
            }
            // line 40
            yield "    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "</div>

";
        // line 44
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "include_drinks", [], "any", true, true, false, 44) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 44, $this->source); })()), "include_drinks", [], "any", false, false, false, 44))) {
            // line 45
            yield "<div class=\"divider\"></div>
<div class=\"info-row\">
    <span> Boissons à part</span>
</div>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 53
        yield "<div class=\"footer\">
    <p> Bon appétit !</p>
    <p>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["print_date"]) || array_key_exists("print_date", $context) ? $context["print_date"] : (function () { throw new RuntimeError('Variable "print_date" does not exist.', 55, $this->source); })()), "d/m/Y H:i:s"), "html", null, true);
        yield "</p>
</div>
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
        return "print/kitchen_ticket.html.twig";
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
        return array (  219 => 55,  215 => 53,  202 => 52,  186 => 45,  184 => 44,  180 => 42,  173 => 40,  167 => 38,  165 => 37,  160 => 35,  156 => 34,  152 => 32,  148 => 31,  145 => 30,  132 => 29,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  89 => 8,  85 => 7,  81 => 6,  78 => 5,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/print/kitchen_ticket.html.twig #}
{% extends 'print/base_ticket.html.twig' %}

{% block header %}
<div class=\"header\">
    <h1> {{ company.companyName }}</h1>
    <p>{{ company.address|default('') }}</p>
    <p> {{ company.phone|default('') }}</p>
    <div class=\"divider\"></div>
    <div class=\"info-row\">
        <span class=\"info-label\">Commande:</span>
        <span>{{ order.orderNumber }}</span>
    </div>
    <div class=\"info-row\">
        <span class=\"info-label\">Table:</span>
        <span>{{ order.tableNumber|default('Sur place') }}</span>
    </div>
    <div class=\"info-row\">
        <span class=\"info-label\">Heure:</span>
        <span>{{ order.createdAt|date('H:i') }}</span>
    </div>
    <div class=\"info-row\">
        <span class=\"info-label\">Caissier:</span>
        <span>{{ order.user.fullName|default(order.user.email) }}</span>
    </div>
</div>
{% endblock %}

{% block content %}
<div class=\"kitchen-items\">
    {% for item in items %}
    <div class=\"kitchen-item\">
        <div class=\"info-row\">
            <span class=\"kitchen-item-name\"> {{ item.productName }}</span>
            <span class=\"kitchen-item-quantity\">×{{ item.quantity }}</span>
        </div>
        {% if item.notes %}
        <div class=\"notes\"> {{ item.notes }}</div>
        {% endif %}
    </div>
    {% endfor %}
</div>

{% if options.include_drinks is defined and not options.include_drinks %}
<div class=\"divider\"></div>
<div class=\"info-row\">
    <span> Boissons à part</span>
</div>
{% endif %}
{% endblock %}

{% block footer %}
<div class=\"footer\">
    <p> Bon appétit !</p>
    <p>{{ print_date|date('d/m/Y H:i:s') }}</p>
</div>
{% endblock %}", "print/kitchen_ticket.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\print\\kitchen_ticket.html.twig");
    }
}
