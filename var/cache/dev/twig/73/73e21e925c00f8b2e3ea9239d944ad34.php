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

/* reset_password/email.html.twig */
class __TwigTemplate_c3bb101c3619d20b2c8fe999152e0c9e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/email.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Réinitialisation de mot de passe - HMA Market</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(135deg, #007bff, #6610f2);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
        }
        .content {
            padding: 40px;
        }
        .button {
            display: inline-block;
            background: linear-gradient(135deg, #007bff, #6610f2);
            color: white !important;
            text-decoration: none;
            padding: 15px 30px;
            border-radius: 50px;
            font-weight: bold;
            font-size: 16px;
            margin: 20px 0;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,123,255,0.3);
            transition: all 0.3s ease;
        }
        .button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0,123,255,0.4);
        }
        .info-box {
            background-color: #f8f9fa;
            border-left: 4px solid #007bff;
            padding: 15px;
            margin: 20px 0;
            border-radius: 0 5px 5px 0;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #f8f9fa;
            color: #666;
            font-size: 12px;
            border-top: 1px solid #dee2e6;
        }
        .expiry {
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
            text-align: center;
        }
        .token-display {
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
            word-break: break-all;
            font-family: monospace;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <!-- En-tête -->
        <div class=\"header\">
            <h1>🔄 HMA Market</h1>
            <p style=\"margin: 10px 0 0 0; opacity: 0.9;\">Réinitialisation de votre mot de passe</p>
        </div>
        
        <!-- Contenu principal -->
        <div class=\"content\">
            <h2 style=\"color: #333; margin-top: 0;\">Bonjour ";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 99, $this->source); })()), "fullName", [], "any", false, false, false, 99), "html", null, true);
        yield ",</h2>
            
            <p>Vous avez demandé la réinitialisation de votre mot de passe pour votre compte HMA Market.</p>
            
            <div class=\"expiry\">
                <strong>⚠️ IMPORTANT : Ce lien expire dans 1 heure</strong>
                <p style=\"margin: 5px 0 0 0; font-size: 14px;\">
                    Expire le : ";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["expiration_date"]) || array_key_exists("expiration_date", $context) ? $context["expiration_date"] : (function () { throw new RuntimeError('Variable "expiration_date" does not exist.', 106, $this->source); })()), "d/m/Y à H:i"), "html", null, true);
        yield "
                </p>
            </div>
            
            <p>Cliquez sur le bouton ci-dessous pour créer un nouveau mot de passe :</p>
            
            <div style=\"text-align: center; margin: 30px 0;\">
                <a href=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["resetUrl"]) || array_key_exists("resetUrl", $context) ? $context["resetUrl"] : (function () { throw new RuntimeError('Variable "resetUrl" does not exist.', 113, $this->source); })()), "html", null, true);
        yield "\" class=\"button\">
                    🔑 Réinitialiser mon mot de passe
                </a>
            </div>
            
            <p>Si le bouton ne fonctionne pas, copiez-collez ce lien dans votre navigateur :</p>
            
            <div class=\"token-display\">
                ";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["resetUrl"]) || array_key_exists("resetUrl", $context) ? $context["resetUrl"] : (function () { throw new RuntimeError('Variable "resetUrl" does not exist.', 121, $this->source); })()), "html", null, true);
        yield "
            </div>
            
            <div class=\"info-box\">
                <strong>💡 Conseil de sécurité :</strong>
                <ul style=\"margin: 10px 0 0 0; padding-left: 20px;\">
                    <li>Créez un mot de passe unique que vous n'utilisez nulle part ailleurs</li>
                    <li>Utilisez au moins 8 caractères avec des lettres, chiffres et symboles</li>
                    <li>Ne partagez jamais votre mot de passe</li>
                </ul>
            </div>
            
            <p style=\"margin-top: 30px;\">
                <strong>Si vous n'avez pas demandé cette réinitialisation :</strong><br>
                Ignorez simplement cet email. Votre mot de passe actuel reste valide.
            </p>
            
            <p style=\"color: #666; font-size: 14px; margin-top: 40px;\">
                Besoin d'aide ? Contactez notre support :<br>
                📧 <a href=\"mailto:support@hmamarket.com\" style=\"color: #007bff;\">support@hmamarket.com</a><br>
                📞 +229 01 56 13 92 00
            </p>
        </div>
        
        <!-- Pied de page -->
        <div class=\"footer\">
            <p>
                <strong>HMA Market</strong><br>
                La solution complète pour la gestion de votre entreprise
            </p>
            <p style=\"font-size: 11px; margin-top: 10px;\">
                Cet email a été envoyé automatiquement. Merci de ne pas y répondre.<br>
                © ";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " HMA Market. Tous droits réservés.
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
        return "reset_password/email.html.twig";
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
        return array (  214 => 153,  179 => 121,  168 => 113,  158 => 106,  148 => 99,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Réinitialisation de mot de passe - HMA Market</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(135deg, #007bff, #6610f2);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
        }
        .content {
            padding: 40px;
        }
        .button {
            display: inline-block;
            background: linear-gradient(135deg, #007bff, #6610f2);
            color: white !important;
            text-decoration: none;
            padding: 15px 30px;
            border-radius: 50px;
            font-weight: bold;
            font-size: 16px;
            margin: 20px 0;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,123,255,0.3);
            transition: all 0.3s ease;
        }
        .button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0,123,255,0.4);
        }
        .info-box {
            background-color: #f8f9fa;
            border-left: 4px solid #007bff;
            padding: 15px;
            margin: 20px 0;
            border-radius: 0 5px 5px 0;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #f8f9fa;
            color: #666;
            font-size: 12px;
            border-top: 1px solid #dee2e6;
        }
        .expiry {
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
            text-align: center;
        }
        .token-display {
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
            word-break: break-all;
            font-family: monospace;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <!-- En-tête -->
        <div class=\"header\">
            <h1>🔄 HMA Market</h1>
            <p style=\"margin: 10px 0 0 0; opacity: 0.9;\">Réinitialisation de votre mot de passe</p>
        </div>
        
        <!-- Contenu principal -->
        <div class=\"content\">
            <h2 style=\"color: #333; margin-top: 0;\">Bonjour {{ user.fullName }},</h2>
            
            <p>Vous avez demandé la réinitialisation de votre mot de passe pour votre compte HMA Market.</p>
            
            <div class=\"expiry\">
                <strong>⚠️ IMPORTANT : Ce lien expire dans 1 heure</strong>
                <p style=\"margin: 5px 0 0 0; font-size: 14px;\">
                    Expire le : {{ expiration_date|date('d/m/Y à H:i') }}
                </p>
            </div>
            
            <p>Cliquez sur le bouton ci-dessous pour créer un nouveau mot de passe :</p>
            
            <div style=\"text-align: center; margin: 30px 0;\">
                <a href=\"{{ resetUrl }}\" class=\"button\">
                    🔑 Réinitialiser mon mot de passe
                </a>
            </div>
            
            <p>Si le bouton ne fonctionne pas, copiez-collez ce lien dans votre navigateur :</p>
            
            <div class=\"token-display\">
                {{ resetUrl }}
            </div>
            
            <div class=\"info-box\">
                <strong>💡 Conseil de sécurité :</strong>
                <ul style=\"margin: 10px 0 0 0; padding-left: 20px;\">
                    <li>Créez un mot de passe unique que vous n'utilisez nulle part ailleurs</li>
                    <li>Utilisez au moins 8 caractères avec des lettres, chiffres et symboles</li>
                    <li>Ne partagez jamais votre mot de passe</li>
                </ul>
            </div>
            
            <p style=\"margin-top: 30px;\">
                <strong>Si vous n'avez pas demandé cette réinitialisation :</strong><br>
                Ignorez simplement cet email. Votre mot de passe actuel reste valide.
            </p>
            
            <p style=\"color: #666; font-size: 14px; margin-top: 40px;\">
                Besoin d'aide ? Contactez notre support :<br>
                📧 <a href=\"mailto:support@hmamarket.com\" style=\"color: #007bff;\">support@hmamarket.com</a><br>
                📞 +229 01 56 13 92 00
            </p>
        </div>
        
        <!-- Pied de page -->
        <div class=\"footer\">
            <p>
                <strong>HMA Market</strong><br>
                La solution complète pour la gestion de votre entreprise
            </p>
            <p style=\"font-size: 11px; margin-top: 10px;\">
                Cet email a été envoyé automatiquement. Merci de ne pas y répondre.<br>
                © {{ \"now\"|date(\"Y\") }} HMA Market. Tous droits réservés.
            </p>
        </div>
    </div>
</body>
</html>", "reset_password/email.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\reset_password\\email.html.twig");
    }
}
