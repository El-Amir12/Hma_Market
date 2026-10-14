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

/* emails/customer/verification.html.twig */
class __TwigTemplate_7b21e4820433b11759c36088674533ee extends Template
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
        yield "
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Vérification de votre compte</title>
    <style>
        body {
            font-family: 'Inter', Arial, sans-serif;
            background-color: #f8fafc;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.08);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #0463f1 0%, #8b5cf6 100%);
            padding: 40px 30px;
            text-align: center;
            color: white;
        }
        .header h1 {
            font-size: 28px;
            font-weight: 800;
            margin: 0;
        }
        .header p {
            opacity: 0.9;
            margin: 10px 0 0;
            font-size: 16px;
        }
        .body {
            padding: 40px 30px;
        }
        .body h2 {
            color: #1f2937;
            font-size: 20px;
            font-weight: 700;
            margin-top: 0;
        }
        .body p {
            color: #4b5563;
            line-height: 1.6;
            font-size: 16px;
        }
        .btn {
            display: inline-block;
            background: linear-gradient(135deg, #0463f1 0%, #8b5cf6 100%);
            color: white;
            padding: 14px 32px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            margin: 10px 0;
            transition: all 0.3s ease;
        }
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(4, 99, 241, 0.3);
        }
        .footer {
            padding: 30px;
            text-align: center;
            background: #f8fafc;
            border-top: 1px solid #e5e7eb;
            color: #9ca3af;
            font-size: 14px;
        }
        .footer a {
            color: #0463f1;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .warning {
            background: #fef3c7;
            border-left: 4px solid #f59e0b;
            padding: 12px 16px;
            border-radius: 4px;
            margin: 20px 0;
            color: #92400e;
            font-size: 14px;
        }
        .warning i {
            margin-right: 8px;
        }
        .info-box {
            background: #eff6ff;
            border-left: 4px solid #0463f1;
            padding: 16px;
            border-radius: 4px;
            margin: 20px 0;
            color: #1e40af;
            font-size: 14px;
        }
        .info-box i {
            margin-right: 8px;
        }
        @media (max-width: 480px) {
            .container { margin: 20px; }
            .header { padding: 30px 20px; }
            .body { padding: 30px 20px; }
            .btn { padding: 12px 24px; font-size: 15px; }
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <h1>🏪 HMA Market</h1>
            <p>Vérification de votre compte</p>
        </div>

        <div class=\"body\">
            <h2>Bonjour ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", [], "any", false, false, false, 125), "html", null, true);
        yield ",</h2>
            
            <p>Merci de vous être inscrit sur HMA Market ! Pour activer votre compte, veuillez cliquer sur le bouton ci-dessous :</p>

            <div style=\"text-align: center; margin: 30px 0;\">
                <a href=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["verificationUrl"] ?? null), "html", null, true);
        yield "\" class=\"btn\">
                    ✅ Vérifier mon email
                </a>
            </div>

            <div class=\"warning\">
                <i>⏰</i>
                <strong>Ce lien est valable 24 heures.</strong>
            </div>

            ";
        // line 141
        yield "            <div class=\"info-box\">
                <i>🔑</i>
                <strong>Rappel :</strong> Lors de votre inscription, vous avez choisi votre propre mot de passe. 
                Utilisez-le pour vous connecter une fois votre compte activé.
            </div>

            <p style=\"font-size: 14px; color: #6b7280; margin-top: 20px;\">
                <i>ℹ️</i>
                Si vous n'avez pas créé de compte sur HMA Market, ignorez simplement cet email.
            </p>

            <p style=\"margin-top: 20px;\">
                Cordialement,<br>
                <strong style=\"color: #0463f1;\">L'équipe HMA Market</strong>
            </p>
        </div>

        <div class=\"footer\">
            <p>
                © ";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " HMA Market. Tous droits réservés.<br>
                <a href=\"";
        // line 161
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("marketplace_home");
        yield "\">Accéder au site</a>
            </p>
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
        return "emails/customer/verification.html.twig";
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
        return array (  213 => 161,  209 => 160,  188 => 141,  175 => 130,  167 => 125,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emails/customer/verification.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\customer\\verification.html.twig");
    }
}
