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

/* base_print.html.twig */
class __TwigTemplate_e128efda15b229b8c47395499f969ed1 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <!-- Bootstrap 5 -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css\">

    <style>
        body {
            background: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #1e293b;
        }
        .print-header {
            text-align: center;
            border-bottom: 2px solid #0463f1;
            padding-bottom: 1rem;
            margin-bottom: 1.5rem;
        }
        .print-header h1 {
            font-size: 1.5rem;
            font-weight: 800;
            color: #0463f1;
            margin: 0;
        }
        .print-header p {
            margin: 0.25rem 0 0;
            color: #64748b;
            font-size: 0.85rem;
        }
        .print-footer {
            margin-top: 2rem;
            padding-top: 1rem;
            border-top: 1px solid #e2e8f0;
            text-align: center;
            font-size: 0.75rem;
            color: #94a3b8;
        }
        @media print {
            .no-print { display: none !important; }
            body { font-size: 11px; }
        }
    </style>

    ";
        // line 51
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 52
        yield "</head>
<body>
    <div class=\"container py-3\">
        ";
        // line 55
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 56
        yield "    </div>

    ";
        // line 58
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 59
        yield "</body>
</html>";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Impression - HMA Market";
        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base_print.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  152 => 58,  142 => 55,  132 => 51,  121 => 7,  115 => 59,  113 => 58,  109 => 56,  107 => 55,  102 => 52,  100 => 51,  53 => 7,  46 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base_print.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\base_print.html.twig");
    }
}
