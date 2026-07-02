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
class __TwigTemplate_40960da406972bd2350bfba1af0a8fe1 extends Template
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
        // line 2
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Ticket - ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "orderNumber", [], "any", false, false, false, 7), "html", null, true);
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
        yield (((($context["ticket_type"] ?? null) == "kitchen")) ? ("10px") : ("12px"));
        yield ";
            line-height: 1.3;
            padding: ";
        // line 24
        yield (((($context["ticket_type"] ?? null) == "kitchen")) ? ("5px") : ("10px"));
        yield ";
            width: ";
        // line 25
        yield (((($context["ticket_type"] ?? null) == "kitchen")) ? ("58mm") : ("80mm"));
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
        yield (((($context["ticket_type"] ?? null) == "kitchen")) ? ("14px") : ("18px"));
        yield ";
            margin-bottom: 4px;
        }
        
        .header p {
            font-size: ";
        // line 55
        yield (((($context["ticket_type"] ?? null) == "kitchen")) ? ("8px") : ("10px"));
        yield ";
            margin: 2px 0;
        }
        
        .info-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 4px;
            font-size: ";
        // line 63
        yield (((($context["ticket_type"] ?? null) == "kitchen")) ? ("9px") : ("11px"));
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
        yield (((($context["ticket_type"] ?? null) == "kitchen")) ? ("9px") : ("11px"));
        yield ";
            border-bottom: 1px solid #000;
            padding-bottom: 3px;
        }
        
        .items-table td {
            padding: 3px 0;
            font-size: ";
        // line 94
        yield (((($context["ticket_type"] ?? null) == "kitchen")) ? ("9px") : ("11px"));
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
        yield (((($context["ticket_type"] ?? null) == "kitchen")) ? ("8px") : ("10px"));
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
        yield from [];
    }

    // line 184
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 185
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 186
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        return array (  294 => 186,  284 => 185,  274 => 184,  267 => 187,  264 => 186,  261 => 185,  259 => 184,  195 => 123,  163 => 94,  153 => 87,  126 => 63,  115 => 55,  107 => 50,  79 => 25,  75 => 24,  70 => 22,  52 => 7,  45 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "print/base_ticket.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\print\\base_ticket.html.twig");
    }
}
