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

/* base_simple.html.twig */
class __TwigTemplate_efc3b162211e3ae7646bba25cb55159d extends Template
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
    
    <!-- Bootstrap 5 CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Bootstrap Icons -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    
    <style>
        :root {
            --primary: #0463f1;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --info: #3b82f6;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f7fb;
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }
        
        .simple-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }
        
        .simple-card {
            background: white;
            border-radius: 1rem;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.02);
            overflow: hidden;
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .simple-header {
            background: white;
            padding: 1.5rem;
            text-align: center;
            border-bottom: 1px solid #e5e7eb;
        }
        
        .simple-header h1 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--primary);
        }
        
        .simple-header p {
            margin: 0.5rem 0 0;
            color: #6c757d;
            font-size: 0.85rem;
        }
        
        .simple-body {
            padding: 2rem;
        }
        
        .simple-footer {
            background: #f8f9fa;
            padding: 1rem;
            text-align: center;
            font-size: 0.75rem;
            color: #6c757d;
            border-top: 1px solid #e5e7eb;
        }
        
        @media (max-width: 768px) {
            .simple-container {
                padding: 1rem;
            }
            .simple-body {
                padding: 1.5rem;
            }
        }
    </style>
    
    ";
        // line 96
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 97
        yield "</head>
<body>
    <div class=\"simple-container\">
        <div class=\"simple-card\">
            <div class=\"simple-header\">
                <h1>
                    <i class=\"fas fa-file-invoice-dollar me-2\"></i>
                    HMA Market
                </h1>
                <p>Espace fournisseur</p>
            </div>
            
            <div class=\"simple-body\">
                ";
        // line 110
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 111
        yield "            </div>
            
            <div class=\"simple-footer\">
                &copy; ";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " HMA Market - Tous droits réservés
            </div>
        </div>
    </div>
    
    <!-- Scripts -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    ";
        // line 121
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 122
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
        yield "HMA Market";
        yield from [];
    }

    // line 96
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 110
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 121
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
        return "base_simple.html.twig";
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
        return array (  218 => 121,  208 => 110,  198 => 96,  187 => 7,  181 => 122,  179 => 121,  169 => 114,  164 => 111,  162 => 110,  147 => 97,  145 => 96,  53 => 7,  46 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base_simple.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\base_simple.html.twig");
    }
}
