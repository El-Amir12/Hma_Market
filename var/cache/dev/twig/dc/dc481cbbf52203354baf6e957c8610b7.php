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

/* emails/welcome_employee.html.twig */
class __TwigTemplate_6264bd3e1d73ececdc0b3151a63c4d16 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/welcome_employee.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/welcome_employee.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Bienvenue sur HMA Market</title>
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #f5f7fb;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #333333;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
            padding: 40px 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            color: #ffffff;
            font-size: 28px;
            font-weight: 600;
            letter-spacing: -0.5px;
        }
        .header p {
            margin: 10px 0 0;
            color: rgba(255, 255, 255, 0.9);
            font-size: 16px;
        }
        .content {
            padding: 40px 30px;
        }
        .content h2 {
            color: #0463f1;
            font-size: 24px;
            font-weight: 600;
            margin-top: 0;
            margin-bottom: 20px;
        }
        .welcome-box {
            background-color: #f0f9ff;
            border-left: 4px solid #0463f1;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }
        .credentials-box {
            background-color: #f8f9fa;
            border-radius: 12px;
            padding: 25px;
            margin: 30px 0;
            border: 1px solid #e9ecef;
        }
        .credential-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px dashed #dee2e6;
        }
        .credential-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        .credential-label {
            width: 120px;
            font-weight: 600;
            color: #6c757d;
        }
        .credential-value {
            flex: 1;
            font-family: 'Courier New', monospace;
            background-color: #ffffff;
            padding: 10px 15px;
            border-radius: 8px;
            border: 1px solid #e9ecef;
            font-size: 16px;
            color: #0463f1;
            font-weight: 500;
        }
        .password-warning {
            background-color: #fff3cd;
            border: 1px solid #ffeeba;
            color: #856404;
            padding: 15px;
            border-radius: 8px;
            margin: 25px 0;
            display: flex;
            align-items: center;
        }
        .password-warning i {
            font-size: 24px;
            margin-right: 15px;
        }
        .button {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
            color: #ffffff;
            text-decoration: none;
            padding: 14px 30px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            margin: 20px 0 10px;
            box-shadow: 0 4px 15px rgba(4, 99, 241, 0.3);
            transition: all 0.3s ease;
        }
        .button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(4, 99, 241, 0.4);
        }
        .footer {
            background-color: #f8f9fa;
            padding: 30px;
            text-align: center;
            color: #6c757d;
            font-size: 14px;
            border-top: 1px solid #e9ecef;
        }
        .footer a {
            color: #0463f1;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .logo {
            margin-bottom: 20px;
        }
        .logo img {
            max-height: 50px;
        }
        @media only screen and (max-width: 600px) {
            .container {
                margin: 10px;
                border-radius: 12px;
            }
            .header {
                padding: 30px 20px;
            }
            .content {
                padding: 30px 20px;
            }
            .credential-item {
                flex-direction: column;
                align-items: flex-start;
            }
            .credential-label {
                width: 100%;
                margin-bottom: 5px;
            }
            .credential-value {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <div class=\"logo\">
                <!-- Si vous avez un logo, mettez-le ici -->
                <h1 style=\"color: white; margin: 0;\">HMA MARKET</h1>
            </div>
            <h1>Bienvenue chez ";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["company_name"]) || array_key_exists("company_name", $context) ? $context["company_name"] : (function () { throw new RuntimeError('Variable "company_name" does not exist.', 177, $this->source); })()), "html", null, true);
        yield " !</h1>
            <p>Votre compte a été créé avec succès</p>
        </div>
        
        <div class=\"content\">
            <div class=\"welcome-box\">
                <h2 style=\"margin-top: 0; color: #0463f1;\">Bonjour ";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 183, $this->source); })()), "fullName", [], "any", false, false, false, 183), "html", null, true);
        yield ",</h2>
                <p style=\"margin-bottom: 0; font-size: 16px;\">
                    L'administrateur de votre entreprise vous a créé un compte sur la plateforme HMA Market pour 
                    <strong>";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["company_name"]) || array_key_exists("company_name", $context) ? $context["company_name"] : (function () { throw new RuntimeError('Variable "company_name" does not exist.', 186, $this->source); })()), "html", null, true);
        yield "</strong>. Vous trouverez ci-dessous vos identifiants 
                    de connexion temporaires.
                </p>
            </div>

            <div class=\"credentials-box\">
                <h3 style=\"margin-top: 0; margin-bottom: 20px; color: #0463f1;\">🔐 Vos identifiants de connexion</h3>
                
                <div class=\"credential-item\">
                    <div class=\"credential-label\">Email</div>
                    <div class=\"credential-value\">";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 196, $this->source); })()), "email", [], "any", false, false, false, 196), "html", null, true);
        yield "</div>
                </div>
                
                <div class=\"credential-item\">
                    <div class=\"credential-label\">Mot de passe</div>
                    <div class=\"credential-value\">";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["temporary_password"]) || array_key_exists("temporary_password", $context) ? $context["temporary_password"] : (function () { throw new RuntimeError('Variable "temporary_password" does not exist.', 201, $this->source); })()), "html", null, true);
        yield "</div>
                </div>
            </div>

            <div class=\"password-warning\">
                <i>⚠️</i>
                <div>
                    <strong>Important :</strong> Ce mot de passe est temporaire. À votre première connexion, 
                    vous serez invité à le changer pour des raisons de sécurité.
                </div>
            </div>

            <div style=\"text-align: center;\">
                <a href=\"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["login_url"]) || array_key_exists("login_url", $context) ? $context["login_url"] : (function () { throw new RuntimeError('Variable "login_url" does not exist.', 214, $this->source); })()), "html", null, true);
        yield "\" class=\"button\">
                    🔑 Se connecter à HMA Market
                </a>
                <p style=\"margin-top: 15px; color: #6c757d; font-size: 14px;\">
                    ou copiez ce lien dans votre navigateur :<br>
                    <a href=\"";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["login_url"]) || array_key_exists("login_url", $context) ? $context["login_url"] : (function () { throw new RuntimeError('Variable "login_url" does not exist.', 219, $this->source); })()), "html", null, true);
        yield "\" style=\"color: #0463f1; word-break: break-all;\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["login_url"]) || array_key_exists("login_url", $context) ? $context["login_url"] : (function () { throw new RuntimeError('Variable "login_url" does not exist.', 219, $this->source); })()), "html", null, true);
        yield "</a>
                </p>
            </div>

            <hr style=\"margin: 30px 0; border: none; border-top: 1px solid #e9ecef;\">

            <div style=\"background-color: #e8f4fd; padding: 15px; border-radius: 8px;\">
                <h4 style=\"margin-top: 0; margin-bottom: 10px; color: #0463f1;\">📋 Prochaines étapes</h4>
                <ol style=\"margin: 0; padding-left: 20px; color: #495057;\">
                    <li>Connectez-vous avec l'email et le mot de passe temporaire ci-dessus</li>
                    <li>Changez immédiatement votre mot de passe</li>
                    <li>Complétez votre profil (photo, informations)</li>
                    <li>Commencez à utiliser HMA Market !</li>
                </ol>
            </div>
        </div>

        <div class=\"footer\">
            <p>© ";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " HMA Market. Tous droits réservés.</p>
            <p>
                <a href=\"#\">Conditions d'utilisation</a> | 
                <a href=\"#\">Politique de confidentialité</a> | 
                <a href=\"#\">Support</a>
            </p>
            <p style=\"margin-top: 20px; font-size: 12px;\">
                Cet email a été envoyé automatiquement, merci de ne pas y répondre.
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
        return "emails/welcome_employee.html.twig";
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
        return array (  309 => 237,  286 => 219,  278 => 214,  262 => 201,  254 => 196,  241 => 186,  235 => 183,  226 => 177,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Bienvenue sur HMA Market</title>
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #f5f7fb;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #333333;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
            padding: 40px 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            color: #ffffff;
            font-size: 28px;
            font-weight: 600;
            letter-spacing: -0.5px;
        }
        .header p {
            margin: 10px 0 0;
            color: rgba(255, 255, 255, 0.9);
            font-size: 16px;
        }
        .content {
            padding: 40px 30px;
        }
        .content h2 {
            color: #0463f1;
            font-size: 24px;
            font-weight: 600;
            margin-top: 0;
            margin-bottom: 20px;
        }
        .welcome-box {
            background-color: #f0f9ff;
            border-left: 4px solid #0463f1;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }
        .credentials-box {
            background-color: #f8f9fa;
            border-radius: 12px;
            padding: 25px;
            margin: 30px 0;
            border: 1px solid #e9ecef;
        }
        .credential-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px dashed #dee2e6;
        }
        .credential-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        .credential-label {
            width: 120px;
            font-weight: 600;
            color: #6c757d;
        }
        .credential-value {
            flex: 1;
            font-family: 'Courier New', monospace;
            background-color: #ffffff;
            padding: 10px 15px;
            border-radius: 8px;
            border: 1px solid #e9ecef;
            font-size: 16px;
            color: #0463f1;
            font-weight: 500;
        }
        .password-warning {
            background-color: #fff3cd;
            border: 1px solid #ffeeba;
            color: #856404;
            padding: 15px;
            border-radius: 8px;
            margin: 25px 0;
            display: flex;
            align-items: center;
        }
        .password-warning i {
            font-size: 24px;
            margin-right: 15px;
        }
        .button {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
            color: #ffffff;
            text-decoration: none;
            padding: 14px 30px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            margin: 20px 0 10px;
            box-shadow: 0 4px 15px rgba(4, 99, 241, 0.3);
            transition: all 0.3s ease;
        }
        .button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(4, 99, 241, 0.4);
        }
        .footer {
            background-color: #f8f9fa;
            padding: 30px;
            text-align: center;
            color: #6c757d;
            font-size: 14px;
            border-top: 1px solid #e9ecef;
        }
        .footer a {
            color: #0463f1;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .logo {
            margin-bottom: 20px;
        }
        .logo img {
            max-height: 50px;
        }
        @media only screen and (max-width: 600px) {
            .container {
                margin: 10px;
                border-radius: 12px;
            }
            .header {
                padding: 30px 20px;
            }
            .content {
                padding: 30px 20px;
            }
            .credential-item {
                flex-direction: column;
                align-items: flex-start;
            }
            .credential-label {
                width: 100%;
                margin-bottom: 5px;
            }
            .credential-value {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <div class=\"logo\">
                <!-- Si vous avez un logo, mettez-le ici -->
                <h1 style=\"color: white; margin: 0;\">HMA MARKET</h1>
            </div>
            <h1>Bienvenue chez {{ company_name }} !</h1>
            <p>Votre compte a été créé avec succès</p>
        </div>
        
        <div class=\"content\">
            <div class=\"welcome-box\">
                <h2 style=\"margin-top: 0; color: #0463f1;\">Bonjour {{ user.fullName }},</h2>
                <p style=\"margin-bottom: 0; font-size: 16px;\">
                    L'administrateur de votre entreprise vous a créé un compte sur la plateforme HMA Market pour 
                    <strong>{{ company_name }}</strong>. Vous trouverez ci-dessous vos identifiants 
                    de connexion temporaires.
                </p>
            </div>

            <div class=\"credentials-box\">
                <h3 style=\"margin-top: 0; margin-bottom: 20px; color: #0463f1;\">🔐 Vos identifiants de connexion</h3>
                
                <div class=\"credential-item\">
                    <div class=\"credential-label\">Email</div>
                    <div class=\"credential-value\">{{ user.email }}</div>
                </div>
                
                <div class=\"credential-item\">
                    <div class=\"credential-label\">Mot de passe</div>
                    <div class=\"credential-value\">{{ temporary_password }}</div>
                </div>
            </div>

            <div class=\"password-warning\">
                <i>⚠️</i>
                <div>
                    <strong>Important :</strong> Ce mot de passe est temporaire. À votre première connexion, 
                    vous serez invité à le changer pour des raisons de sécurité.
                </div>
            </div>

            <div style=\"text-align: center;\">
                <a href=\"{{ login_url }}\" class=\"button\">
                    🔑 Se connecter à HMA Market
                </a>
                <p style=\"margin-top: 15px; color: #6c757d; font-size: 14px;\">
                    ou copiez ce lien dans votre navigateur :<br>
                    <a href=\"{{ login_url }}\" style=\"color: #0463f1; word-break: break-all;\">{{ login_url }}</a>
                </p>
            </div>

            <hr style=\"margin: 30px 0; border: none; border-top: 1px solid #e9ecef;\">

            <div style=\"background-color: #e8f4fd; padding: 15px; border-radius: 8px;\">
                <h4 style=\"margin-top: 0; margin-bottom: 10px; color: #0463f1;\">📋 Prochaines étapes</h4>
                <ol style=\"margin: 0; padding-left: 20px; color: #495057;\">
                    <li>Connectez-vous avec l'email et le mot de passe temporaire ci-dessus</li>
                    <li>Changez immédiatement votre mot de passe</li>
                    <li>Complétez votre profil (photo, informations)</li>
                    <li>Commencez à utiliser HMA Market !</li>
                </ol>
            </div>
        </div>

        <div class=\"footer\">
            <p>© {{ \"now\"|date(\"Y\") }} HMA Market. Tous droits réservés.</p>
            <p>
                <a href=\"#\">Conditions d'utilisation</a> | 
                <a href=\"#\">Politique de confidentialité</a> | 
                <a href=\"#\">Support</a>
            </p>
            <p style=\"margin-top: 20px; font-size: 12px;\">
                Cet email a été envoyé automatiquement, merci de ne pas y répondre.
            </p>
        </div>
    </div>
</body>
</html>", "emails/welcome_employee.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\welcome_employee.html.twig");
    }
}
