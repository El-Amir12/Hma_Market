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

/* super_admin/subscription/index.html.twig */
class __TwigTemplate_067ec73a0718d336c3b2a637b1ac45ae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/subscription/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/subscription/index.html.twig"));

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

        yield "Subscription index";
        
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
        yield "    <h1>Subscription index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>BillingPeriod</th>
                <th>Status</th>
                <th>StartsAt</th>
                <th>EndsAt</th>
                <th>TrialEndsAt</th>
                <th>PaymentMethod</th>
                <th>TransactionId</th>
                <th>Notes</th>
                <th>CreatedAt</th>
                <th>UpdatedAt</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
            // line 27
            yield "            <tr>
                <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "id", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "billingPeriod", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                <td>";
            // line 31
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "startsAt", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "startsAt", [], "any", false, false, false, 31), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 32
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 32), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 33
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "trialEndsAt", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "trialEndsAt", [], "any", false, false, false, 33), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "paymentMethod", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "transactionId", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "notes", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                <td>";
            // line 37
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "createdAt", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "createdAt", [], "any", false, false, false, 37), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 38
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "updatedAt", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "updatedAt", [], "any", false, false, false, 38), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                <td>
                    <a href=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 44
        if (!$context['_iterated']) {
            // line 45
            yield "            <tr>
                <td colspan=\"12\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_new");
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
        return "super_admin/subscription/index.html.twig";
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
        return array (  203 => 52,  198 => 49,  189 => 45,  187 => 44,  179 => 41,  175 => 40,  170 => 38,  166 => 37,  162 => 36,  158 => 35,  154 => 34,  150 => 33,  146 => 32,  142 => 31,  138 => 30,  134 => 29,  130 => 28,  127 => 27,  122 => 26,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Subscription index{% endblock %}

{% block body %}
    <h1>Subscription index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>BillingPeriod</th>
                <th>Status</th>
                <th>StartsAt</th>
                <th>EndsAt</th>
                <th>TrialEndsAt</th>
                <th>PaymentMethod</th>
                <th>TransactionId</th>
                <th>Notes</th>
                <th>CreatedAt</th>
                <th>UpdatedAt</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for subscription in subscriptions %}
            <tr>
                <td>{{ subscription.id }}</td>
                <td>{{ subscription.billingPeriod }}</td>
                <td>{{ subscription.status }}</td>
                <td>{{ subscription.startsAt ? subscription.startsAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ subscription.endsAt ? subscription.endsAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ subscription.trialEndsAt ? subscription.trialEndsAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ subscription.paymentMethod }}</td>
                <td>{{ subscription.transactionId }}</td>
                <td>{{ subscription.notes }}</td>
                <td>{{ subscription.createdAt ? subscription.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ subscription.updatedAt ? subscription.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>
                    <a href=\"{{ path('app_super_admin_subscription_show', {'id': subscription.id}) }}\">show</a>
                    <a href=\"{{ path('app_super_admin_subscription_edit', {'id': subscription.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"12\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_super_admin_subscription_new') }}\">Create new</a>
{% endblock %}
", "super_admin/subscription/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\subscription\\index.html.twig");
    }
}
