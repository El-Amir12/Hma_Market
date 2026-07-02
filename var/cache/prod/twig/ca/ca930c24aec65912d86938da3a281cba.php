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

/* base_email.html.twig */
class __TwigTemplate_ea4ea1d0eeb8c087473e4ec2c548a643 extends Template
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
            'body' => [$this, 'block_body'],
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
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(135deg, #0463f1 0%, #1e3a5f 100%);
            padding: 30px 20px;
            text-align: center;
            color: white;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 30px 25px;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #6c757d;
            border-top: 1px solid #e9ecef;
        }
        .button {
            display: inline-block;
            background-color: #0463f1;
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 50px;
            margin: 15px 0;
            font-weight: bold;
        }
        .alert {
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
        }
        .alert-warning {
            background-color: #fff3cd;
            border-left: 4px solid #ffc107;
            color: #856404;
        }
        .alert-danger {
            background-color: #f8d7da;
            border-left: 4px solid #dc3545;
            color: #721c24;
        }
        .alert-success {
            background-color: #d4edda;
            border-left: 4px solid #28a745;
            color: #155724;
        }
        .alert-info {
            background-color: #d1ecf1;
            border-left: 4px solid #17a2b8;
            color: #0c5460;
        }
        @media (max-width: 600px) {
            .content {
                padding: 20px 15px;
            }
            .header h1 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body style=\"margin: 0; padding: 20px; background-color: #f4f6f9;\">
    <div class=\"container\" style=\"max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1);\">
        <div class=\"header\" style=\"background: linear-gradient(135deg, #0463f1 0%, #1e3a5f 100%); padding: 30px 20px; text-align: center; color: white;\">
            <h1 style=\"margin: 0; font-size: 24px;\">";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("app_name", $context)) ? (Twig\Extension\CoreExtension::default(($context["app_name"] ?? null), "HMA Market")) : ("HMA Market")), "html", null, true);
        yield "</h1>
            <p style=\"margin: 10px 0 0; opacity: 0.9;\">Gestion des avoirs fournisseurs</p>
        </div>
        
        <div class=\"content\" style=\"padding: 30px 25px;\">
            ";
        // line 97
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 98
        yield "        </div>
        
        <div class=\"footer\" style=\"background-color: #f8f9fa; padding: 20px; text-align: center; font-size: 12px; color: #6c757d; border-top: 1px solid #e9ecef;\">
            <p>&copy; ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " HMA Market. Tous droits réservés.</p>
            <p>
                Cet email a été envoyé automatiquement, merci de ne pas y répondre directement.<br>
                Pour toute question, contactez-nous à <a href=\"mailto:";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("support_email", $context)) ? (Twig\Extension\CoreExtension::default(($context["support_email"] ?? null), "support@hma-market.com")) : ("support@hma-market.com")), "html", null, true);
        yield "\" style=\"color: #0463f1;\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("support_email", $context)) ? (Twig\Extension\CoreExtension::default(($context["support_email"] ?? null), "support@hma-market.com")) : ("support@hma-market.com")), "html", null, true);
        yield "</a>
            </p>
        </div>
    </div>
</body>
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
        yield from [];
    }

    // line 97
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base_email.html.twig";
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
        return array (  183 => 97,  173 => 7,  160 => 104,  154 => 101,  149 => 98,  147 => 97,  139 => 92,  51 => 7,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base_email.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\base_email.html.twig");
    }
}
