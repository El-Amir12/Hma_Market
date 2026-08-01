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

/* marketplace/auth/reset_password_email.html.twig */
class __TwigTemplate_8297882df762166459fe860a008cae8e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/auth/reset_password_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/auth/reset_password_email.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Réinitialisation de votre mot de passe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #0463f1, #0a7aff);
            padding: 30px 20px;
            text-align: center;
        }
        .header h1 {
            color: #ffffff;
            margin: 0;
            font-size: 24px;
        }
        .header p {
            color: rgba(255,255,255,0.8);
            margin: 5px 0 0;
        }
        .content {
            padding: 30px 30px 20px;
        }
        .content h2 {
            color: #2c3e50;
            margin-top: 0;
        }
        .content p {
            color: #555;
            line-height: 1.6;
        }
        .content .info {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin: 15px 0;
            border-left: 4px solid #0463f1;
        }
        .btn {
            display: inline-block;
            background: #0463f1;
            color: #ffffff;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            margin: 10px 0;
        }
        .btn:hover {
            background: #0352c9;
        }
        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            border-top: 1px solid #e9ecef;
        }
        .footer p {
            color: #999;
            font-size: 12px;
            margin: 5px 0;
        }
        .footer a {
            color: #0463f1;
            text-decoration: none;
        }
        .badge {
            display: inline-block;
            background: #28a745;
            color: #ffffff;
            padding: 2px 10px;
            border-radius: 20px;
            font-size: 12px;
        }
        .warning-box {
            background: #fff3cd;
            padding: 15px;
            border-radius: 8px;
            margin-top: 15px;
            border-left: 4px solid #ffc107;
        }
        .warning-box p {
            margin: 0;
            color: #856404;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <!-- En-tête -->
        <div class=\"header\">
            <h1>🔐 HMA Market</h1>
            <p>Réinitialisation de votre mot de passe</p>
        </div>

        <!-- Contenu -->
        <div class=\"content\">
            <h2>Bonjour ";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", [], "any", true, true, false, 115)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 115, $this->source); })()), "fullName", [], "any", false, false, false, 115), "Client")) : ("Client")), "html", null, true);
        yield " 👋</h2>
            
            <p>
                Vous avez demandé à réinitialiser votre mot de passe pour votre compte HMA Market.
                Cliquez sur le bouton ci-dessous pour créer un nouveau mot de passe :
            </p>

            <div class=\"info\" style=\"text-align: center;\">
                <p style=\"margin-bottom: 15px;\">
                    <strong>🔒 Ce lien est valable 1 heure</strong>
                </p>
                <a href=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["resetUrl"]) || array_key_exists("resetUrl", $context) ? $context["resetUrl"] : (function () { throw new RuntimeError('Variable "resetUrl" does not exist.', 126, $this->source); })()), "html", null, true);
        yield "\" class=\"btn\">
                    Réinitialiser mon mot de passe
                </a>
            </div>

            <p style=\"font-size: 14px; color: #888;\">
                Si vous n'avez pas demandé cette réinitialisation, ignorez simplement cet email.<br>
                Votre mot de passe restera inchangé.
            </p>

            <div class=\"warning-box\">
                <p>
                    <strong>⚠️ Sécurité :</strong> Ne partagez jamais ce lien avec personne.
                </p>
            </div>
        </div>

        <!-- Pied de page -->
        <div class=\"footer\">
            <p>
                <strong>HMA Market</strong> - La solution pour votre entreprise
            </p>
            <p>
                <a href=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("app_url", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["app_url"]) || array_key_exists("app_url", $context) ? $context["app_url"] : (function () { throw new RuntimeError('Variable "app_url" does not exist.', 149, $this->source); })()), "https://hma-market.com")) : ("https://hma-market.com")), "html", null, true);
        yield "\">hma-market.com</a>
                &nbsp;•&nbsp;
                <a href=\"mailto:support@hma-market.com\">support@hma-market.com</a>
            </p>
        </div>
    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketplace/auth/reset_password_email.html.twig";
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
        return array (  203 => 149,  177 => 126,  163 => 115,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/marketplace/auth/reset_password_email.html.twig #}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Réinitialisation de votre mot de passe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #0463f1, #0a7aff);
            padding: 30px 20px;
            text-align: center;
        }
        .header h1 {
            color: #ffffff;
            margin: 0;
            font-size: 24px;
        }
        .header p {
            color: rgba(255,255,255,0.8);
            margin: 5px 0 0;
        }
        .content {
            padding: 30px 30px 20px;
        }
        .content h2 {
            color: #2c3e50;
            margin-top: 0;
        }
        .content p {
            color: #555;
            line-height: 1.6;
        }
        .content .info {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin: 15px 0;
            border-left: 4px solid #0463f1;
        }
        .btn {
            display: inline-block;
            background: #0463f1;
            color: #ffffff;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            margin: 10px 0;
        }
        .btn:hover {
            background: #0352c9;
        }
        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            border-top: 1px solid #e9ecef;
        }
        .footer p {
            color: #999;
            font-size: 12px;
            margin: 5px 0;
        }
        .footer a {
            color: #0463f1;
            text-decoration: none;
        }
        .badge {
            display: inline-block;
            background: #28a745;
            color: #ffffff;
            padding: 2px 10px;
            border-radius: 20px;
            font-size: 12px;
        }
        .warning-box {
            background: #fff3cd;
            padding: 15px;
            border-radius: 8px;
            margin-top: 15px;
            border-left: 4px solid #ffc107;
        }
        .warning-box p {
            margin: 0;
            color: #856404;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <!-- En-tête -->
        <div class=\"header\">
            <h1>🔐 HMA Market</h1>
            <p>Réinitialisation de votre mot de passe</p>
        </div>

        <!-- Contenu -->
        <div class=\"content\">
            <h2>Bonjour {{ customer.fullName|default('Client') }} 👋</h2>
            
            <p>
                Vous avez demandé à réinitialiser votre mot de passe pour votre compte HMA Market.
                Cliquez sur le bouton ci-dessous pour créer un nouveau mot de passe :
            </p>

            <div class=\"info\" style=\"text-align: center;\">
                <p style=\"margin-bottom: 15px;\">
                    <strong>🔒 Ce lien est valable 1 heure</strong>
                </p>
                <a href=\"{{ resetUrl }}\" class=\"btn\">
                    Réinitialiser mon mot de passe
                </a>
            </div>

            <p style=\"font-size: 14px; color: #888;\">
                Si vous n'avez pas demandé cette réinitialisation, ignorez simplement cet email.<br>
                Votre mot de passe restera inchangé.
            </p>

            <div class=\"warning-box\">
                <p>
                    <strong>⚠️ Sécurité :</strong> Ne partagez jamais ce lien avec personne.
                </p>
            </div>
        </div>

        <!-- Pied de page -->
        <div class=\"footer\">
            <p>
                <strong>HMA Market</strong> - La solution pour votre entreprise
            </p>
            <p>
                <a href=\"{{ app_url|default('https://hma-market.com') }}\">hma-market.com</a>
                &nbsp;•&nbsp;
                <a href=\"mailto:support@hma-market.com\">support@hma-market.com</a>
            </p>
        </div>
    </div>
</body>
</html>", "marketplace/auth/reset_password_email.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\auth\\reset_password_email.html.twig");
    }
}
