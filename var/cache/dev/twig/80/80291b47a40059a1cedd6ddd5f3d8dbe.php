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

/* print/base_ticket.html.twig */
class __TwigTemplate_afc65aff2def5004e40dc949dd6ab131 extends Template
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
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "print/base_ticket.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "print/base_ticket.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Ticket - ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 7, $this->source); })()), "orderNumber", [], "any", false, false, false, 7), "html", null, true);
        yield "</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html, body {
            height: auto;
            min-height: auto;
        }
        
        body {
            font-family: 'Courier New', 'Courier', monospace;
            font-size: ";
        // line 22
        yield ((((isset($context["ticket_type"]) || array_key_exists("ticket_type", $context) ? $context["ticket_type"] : (function () { throw new RuntimeError('Variable "ticket_type" does not exist.', 22, $this->source); })()) == "kitchen")) ? ("10px") : ("12px"));
        yield ";
            line-height: 1.3;
            padding: ";
        // line 24
        yield ((((isset($context["ticket_type"]) || array_key_exists("ticket_type", $context) ? $context["ticket_type"] : (function () { throw new RuntimeError('Variable "ticket_type" does not exist.', 24, $this->source); })()) == "kitchen")) ? ("5px") : ("10px"));
        yield ";
            width: ";
        // line 25
        yield ((((isset($context["ticket_type"]) || array_key_exists("ticket_type", $context) ? $context["ticket_type"] : (function () { throw new RuntimeError('Variable "ticket_type" does not exist.', 25, $this->source); })()) == "kitchen")) ? ("58mm") : ("80mm"));
        yield ";
            margin: 0 auto;
            page-break-after: avoid;
            page-break-inside: avoid;
        }
        
        .ticket {
            width: 100%;
            height: auto;
            page-break-after: avoid;
        }
        
        .header, .content, .footer, .kitchen-item {
            page-break-inside: avoid;
            break-inside: avoid;
        }
        
        .header {
            text-align: center;
            border-bottom: 1px solid #000;
            padding-bottom: 8px;
            margin-bottom: 8px;
        }
        
        .header h1 {
            font-size: ";
        // line 50
        yield ((((isset($context["ticket_type"]) || array_key_exists("ticket_type", $context) ? $context["ticket_type"] : (function () { throw new RuntimeError('Variable "ticket_type" does not exist.', 50, $this->source); })()) == "kitchen")) ? ("14px") : ("18px"));
        yield ";
            margin-bottom: 4px;
        }
        
        .header p {
            font-size: ";
        // line 55
        yield ((((isset($context["ticket_type"]) || array_key_exists("ticket_type", $context) ? $context["ticket_type"] : (function () { throw new RuntimeError('Variable "ticket_type" does not exist.', 55, $this->source); })()) == "kitchen")) ? ("8px") : ("10px"));
        yield ";
            margin: 2px 0;
        }
        
        .info-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 4px;
            font-size: ";
        // line 63
        yield ((((isset($context["ticket_type"]) || array_key_exists("ticket_type", $context) ? $context["ticket_type"] : (function () { throw new RuntimeError('Variable "ticket_type" does not exist.', 63, $this->source); })()) == "kitchen")) ? ("9px") : ("11px"));
        yield ";
        }
        
        .info-label {
            font-weight: bold;
        }
        
        .divider {
            border-top: 1px solid #000;
            margin: 8px 0;
        }
        
        .dotted-divider {
            border-top: 1px dotted #000;
            margin: 8px 0;
        }
        
        .items-table {
            width: 100%;
            margin: 8px 0;
        }
        
        .items-table th {
            text-align: left;
            font-size: ";
        // line 87
        yield ((((isset($context["ticket_type"]) || array_key_exists("ticket_type", $context) ? $context["ticket_type"] : (function () { throw new RuntimeError('Variable "ticket_type" does not exist.', 87, $this->source); })()) == "kitchen")) ? ("9px") : ("11px"));
        yield ";
            border-bottom: 1px solid #000;
            padding-bottom: 3px;
        }
        
        .items-table td {
            padding: 3px 0;
            font-size: ";
        // line 94
        yield ((((isset($context["ticket_type"]) || array_key_exists("ticket_type", $context) ? $context["ticket_type"] : (function () { throw new RuntimeError('Variable "ticket_type" does not exist.', 94, $this->source); })()) == "kitchen")) ? ("9px") : ("11px"));
        yield ";
        }
        
        .item-name {
            font-weight: bold;
        }
        
        .item-quantity {
            text-align: center;
            width: 40px;
        }
        
        .item-price {
            text-align: right;
            width: 60px;
        }
        
        .total-row {
            display: flex;
            justify-content: space-between;
            margin: 5px 0;
            font-weight: bold;
        }
        
        .footer {
            text-align: center;
            border-top: 1px solid #000;
            padding-top: 8px;
            margin-top: 8px;
            font-size: ";
        // line 123
        yield ((((isset($context["ticket_type"]) || array_key_exists("ticket_type", $context) ? $context["ticket_type"] : (function () { throw new RuntimeError('Variable "ticket_type" does not exist.', 123, $this->source); })()) == "kitchen")) ? ("8px") : ("10px"));
        yield ";
        }
        
        .notes {
            margin-top: 8px;
            padding: 5px;
            background: #f5f5f5;
            font-size: 9px;
        }
        
        .kitchen-item {
            margin-bottom: 12px;
            border-left: 3px solid #333;
            padding-left: 8px;
        }
        
        .kitchen-item-name {
            font-weight: bold;
            font-size: 12px;
        }
        
        .kitchen-item-quantity {
            font-size: 16px;
            font-weight: bold;
            margin-left: 8px;
        }
        
        .delivery-address {
            background: #f9f9f9;
            padding: 8px;
            margin: 10px 0;
            border-left: 3px solid #333;
        }
        
        .cash-summary {
            margin-top: 10px;
            padding-top: 8px;
        }
        
        @media print {
            html, body {
                height: auto;
                margin: 0;
                padding: 0;
            }
            body {
                margin: 0;
                padding: 0;
            }
            .no-print {
                display: none;
            }
            @page {
                margin: 0;
                size: auto;
            }
        }
    </style>
</head>
<body>
    <div class=\"ticket\">
        ";
        // line 184
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 185
        yield "        ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 186
        yield "        ";
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 187
        yield "    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 184
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 185
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 186
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "print/base_ticket.html.twig";
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
        return array (  330 => 186,  308 => 185,  286 => 184,  273 => 187,  270 => 186,  267 => 185,  265 => 184,  201 => 123,  169 => 94,  159 => 87,  132 => 63,  121 => 55,  113 => 50,  85 => 25,  81 => 24,  76 => 22,  58 => 7,  51 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/print/base_ticket.html.twig #}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Ticket - {{ order.orderNumber }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html, body {
            height: auto;
            min-height: auto;
        }
        
        body {
            font-family: 'Courier New', 'Courier', monospace;
            font-size: {{ ticket_type == 'kitchen' ? '10px' : '12px' }};
            line-height: 1.3;
            padding: {{ ticket_type == 'kitchen' ? '5px' : '10px' }};
            width: {{ ticket_type == 'kitchen' ? '58mm' : '80mm' }};
            margin: 0 auto;
            page-break-after: avoid;
            page-break-inside: avoid;
        }
        
        .ticket {
            width: 100%;
            height: auto;
            page-break-after: avoid;
        }
        
        .header, .content, .footer, .kitchen-item {
            page-break-inside: avoid;
            break-inside: avoid;
        }
        
        .header {
            text-align: center;
            border-bottom: 1px solid #000;
            padding-bottom: 8px;
            margin-bottom: 8px;
        }
        
        .header h1 {
            font-size: {{ ticket_type == 'kitchen' ? '14px' : '18px' }};
            margin-bottom: 4px;
        }
        
        .header p {
            font-size: {{ ticket_type == 'kitchen' ? '8px' : '10px' }};
            margin: 2px 0;
        }
        
        .info-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 4px;
            font-size: {{ ticket_type == 'kitchen' ? '9px' : '11px' }};
        }
        
        .info-label {
            font-weight: bold;
        }
        
        .divider {
            border-top: 1px solid #000;
            margin: 8px 0;
        }
        
        .dotted-divider {
            border-top: 1px dotted #000;
            margin: 8px 0;
        }
        
        .items-table {
            width: 100%;
            margin: 8px 0;
        }
        
        .items-table th {
            text-align: left;
            font-size: {{ ticket_type == 'kitchen' ? '9px' : '11px' }};
            border-bottom: 1px solid #000;
            padding-bottom: 3px;
        }
        
        .items-table td {
            padding: 3px 0;
            font-size: {{ ticket_type == 'kitchen' ? '9px' : '11px' }};
        }
        
        .item-name {
            font-weight: bold;
        }
        
        .item-quantity {
            text-align: center;
            width: 40px;
        }
        
        .item-price {
            text-align: right;
            width: 60px;
        }
        
        .total-row {
            display: flex;
            justify-content: space-between;
            margin: 5px 0;
            font-weight: bold;
        }
        
        .footer {
            text-align: center;
            border-top: 1px solid #000;
            padding-top: 8px;
            margin-top: 8px;
            font-size: {{ ticket_type == 'kitchen' ? '8px' : '10px' }};
        }
        
        .notes {
            margin-top: 8px;
            padding: 5px;
            background: #f5f5f5;
            font-size: 9px;
        }
        
        .kitchen-item {
            margin-bottom: 12px;
            border-left: 3px solid #333;
            padding-left: 8px;
        }
        
        .kitchen-item-name {
            font-weight: bold;
            font-size: 12px;
        }
        
        .kitchen-item-quantity {
            font-size: 16px;
            font-weight: bold;
            margin-left: 8px;
        }
        
        .delivery-address {
            background: #f9f9f9;
            padding: 8px;
            margin: 10px 0;
            border-left: 3px solid #333;
        }
        
        .cash-summary {
            margin-top: 10px;
            padding-top: 8px;
        }
        
        @media print {
            html, body {
                height: auto;
                margin: 0;
                padding: 0;
            }
            body {
                margin: 0;
                padding: 0;
            }
            .no-print {
                display: none;
            }
            @page {
                margin: 0;
                size: auto;
            }
        }
    </style>
</head>
<body>
    <div class=\"ticket\">
        {% block header %}{% endblock %}
        {% block content %}{% endblock %}
        {% block footer %}{% endblock %}
    </div>
</body>
</html>", "print/base_ticket.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\print\\base_ticket.html.twig");
    }
}
