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

/* customer/auth/reset_password_email.html.twig */
class __TwigTemplate_054fc62b2a109eea7c62306b27c3a3ac extends Template
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
    <title>Réinitialisation du mot de passe - HMA Market</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8fafc;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            margin-top: 40px;
        }
        .header {
            text-align: center;
            padding: 20px 0;
            border-bottom: 2px solid #f1f5f9;
        }
        .header h1 {
            color: #0463f1;
            font-size: 24px;
            margin: 0;
        }
        .content {
            padding: 30px 20px;
        }
        .content p {
            color: #1e293b;
            line-height: 1.6;
            margin-bottom: 16px;
        }
        .btn {
            display: inline-block;
            background-color: #0463f1;
            color: #ffffff !important;
            padding: 12px 32px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            margin: 20px 0;
        }
        .btn:hover {
            background-color: #0350c4;
        }
        .footer {
            text-align: center;
            padding: 20px;
            border-top: 2px solid #f1f5f9;
            color: #94a3b8;
            font-size: 14px;
        }
        .expiry-note {
            background-color: #fef3c7;
            padding: 12px 16px;
            border-radius: 8px;
            color: #92400e;
            font-size: 14px;
            margin: 16px 0;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <h1>🛒 HMA Market</h1>
        </div>
        <div class=\"content\">
            <h2>Bonjour ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", [], "any", true, true, false, 78)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", [], "any", false, false, false, 78), CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "email", [], "any", false, false, false, 78))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "email", [], "any", false, false, false, 78))), "html", null, true);
        yield ",</h2>
            
            <p>Vous avez demandé la réinitialisation de votre mot de passe sur HMA Market.</p>
            
            <p>Cliquez sur le bouton ci-dessous pour choisir un nouveau mot de passe :</p>
            
            <div style=\"text-align: center;\">
                <a href=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["resetUrl"] ?? null), "html", null, true);
        yield "\" class=\"btn\">
                    🔐 Réinitialiser mon mot de passe
                </a>
            </div>
            
            <div class=\"expiry-note\">
                <i class=\"fas fa-clock\"></i>
                Ce lien est valable pendant 1 heure.
            </div>
            
            <p style=\"font-size: 14px; color: #64748b;\">
                Si vous n'avez pas demandé cette réinitialisation, ignorez simplement cet email.
                Votre mot de passe actuel reste valable.
            </p>
            
            <p style=\"font-size: 14px; color: #94a3b8; margin-top: 20px;\">
                Si le bouton ne fonctionne pas, copiez ce lien dans votre navigateur :<br>
                <a href=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["resetUrl"] ?? null), "html", null, true);
        yield "\" style=\"color: #0463f1; word-break: break-all;\">
                    ";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["resetUrl"] ?? null), "html", null, true);
        yield "
                </a>
            </p>
        </div>
        <div class=\"footer\">
            &copy; ";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " HMA Market. Tous droits réservés.
        </div>
    </div>
</body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "customer/auth/reset_password_email.html.twig";
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
        return array (  162 => 108,  154 => 103,  150 => 102,  130 => 85,  120 => 78,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "customer/auth/reset_password_email.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\customer\\auth\\reset_password_email.html.twig");
    }
}
