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

/* emails/welcome.html.twig */
class __TwigTemplate_dd63e2326b085c2b62239919a9273d0d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/welcome.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/welcome.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Bienvenue sur HMA Market</title>
    <style>
        body {
            font-family: 'Inter', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9fafb;
        }
        .container {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
        }
        .content {
            padding: 40px 30px;
        }
        .credentials-box {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(4, 99, 241, 0.05) 100%);
            border-radius: 10px;
            padding: 25px;
            margin: 25px 0;
            border-left: 4px solid #667eea;
        }
        .password {
            font-family: 'Courier New', monospace;
            font-size: 18px;
            font-weight: bold;
            background: white;
            padding: 10px 15px;
            border-radius: 6px;
            display: inline-block;
            border: 2px dashed #667eea;
        }
        .btn-primary {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
            color: white;
            text-decoration: none;
            padding: 14px 28px;
            border-radius: 8px;
            font-weight: 600;
            margin: 20px 0;
            text-align: center;
        }
        .info-box {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
            border: 1px solid #e9ecef;
        }
        .step {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }
        .step-number {
            background: #667eea;
            color: white;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 15px;
            flex-shrink: 0;
        }
        .footer {
            text-align: center;
            padding: 30px;
            background: #f8f9fa;
            color: #6c757d;
            font-size: 14px;
            border-top: 1px solid #e9ecef;
        }
        .subscription-info {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.1) 0%, rgba(5, 150, 105, 0.05) 100%);
            border: 2px solid #10b981;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            margin: 20px 0;
        }
        .subscription-number {
            font-family: 'Courier New', monospace;
            font-size: 24px;
            font-weight: bold;
            color: #10b981;
            letter-spacing: 2px;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <h1>🎉 Bienvenue sur HMA Market !</h1>
            <p style=\"opacity: 0.9; margin-top: 10px;\">Votre compte entreprise a été créé avec succès</p>
        </div>
        
        <div class=\"content\">
            <p>Bonjour <strong>";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 124, $this->source); })()), "companyName", [], "any", false, false, false, 124), "html", null, true);
        yield "</strong>,</p>
            
            <p>Nous sommes ravis de vous accueillir sur HMA Market, la solution complète pour la gestion de votre entreprise.</p>
            
            <div class=\"info-box\">
                <h4 style=\"margin-top: 0; color: #667eea;\">📋 Récapitulatif de votre inscription</h4>
                <p><strong>Entreprise :</strong> ";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 130, $this->source); })()), "companyName", [], "any", false, false, false, 130), "html", null, true);
        yield "</p>
                <p><strong>Type :</strong> ";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 131, $this->source); })()), "companyType", [], "any", false, false, false, 131), "html", null, true);
        yield "</p>
                <p><strong>Email :</strong> ";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 132, $this->source); })()), "email", [], "any", false, false, false, 132), "html", null, true);
        yield "</p>
                <p><strong>Téléphone :</strong> ";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 133, $this->source); })()), "phone", [], "any", false, false, false, 133), "html", null, true);
        yield "</p>
                <p><strong>Période d'essai :</strong> Jusqu'au ";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 134, $this->source); })()), "trialEndsAt", [], "any", false, false, false, 134), "d/m/Y"), "html", null, true);
        yield "</p>
            </div>
            
            <h3>🔐 Vos identifiants de connexion</h3>
            
            <div class=\"credentials-box\">
                <p><strong>Pour vous connecter à votre compte :</strong></p>
                <p style=\"margin-bottom: 5px;\"><strong>Email :</strong> ";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 141, $this->source); })()), "email", [], "any", false, false, false, 141), "html", null, true);
        yield "</p>
                <p><strong>Mot de passe temporaire :</strong></p>
                <div class=\"password\">";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["password"]) || array_key_exists("password", $context) ? $context["password"] : (function () { throw new RuntimeError('Variable "password" does not exist.', 143, $this->source); })()), "html", null, true);
        yield "</div>
                <p style=\"font-size: 14px; color: #666; margin-top: 10px;\">
                    <i>Pour des raisons de sécurité, ce mot de passe sera utilisable une seule fois.</i>
                </p>
            </div>
            
            <div class=\"step\">
                <div class=\"step-number\">1</div>
                <div>
                    <strong>Cliquez sur le lien ci-dessous</strong><br>
                    <a href=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["login_url"]) || array_key_exists("login_url", $context) ? $context["login_url"] : (function () { throw new RuntimeError('Variable "login_url" does not exist.', 153, $this->source); })()), "html", null, true);
        yield "\" class=\"btn-primary\">Se connecter à HMA Market</a>
                </div>
            </div>
            
            <div class=\"step\">
                <div class=\"step-number\">2</div>
                <div>
                    <strong>Utilisez vos identifiants ci-dessus</strong><br>
                    Email et mot de passe temporaire
                </div>
            </div>
            
            <div class=\"step\">
                <div class=\"step-number\">3</div>
                <div>
                    <strong>Activez votre compte</strong><br>
                    Votre compte sera automatiquement activé lors de cette première connexion
                </div>
            </div>
            
            <div class=\"subscription-info\">
                <h4 style=\"color: #10b981; margin-top: 0;\">🎫 Votre numéro d'abonnement</h4>
                <p>Après activation de votre compte, vous recevrez votre numéro d'abonnement unique qui vous identifiera dans notre système.</p>
                <p><strong>Conservez-le précieusement !</strong></p>
            </div>
            
            <div style=\"background: #f1f8ff; padding: 20px; border-radius: 8px; margin: 25px 0;\">
                <h4 style=\"color: #0366d6; margin-top: 0;\">💡 Ce que vous pouvez faire pendant votre essai gratuit :</h4>
                <ul style=\"margin-bottom: 0;\">
                    <li>Gérer vos produits et stocks</li>
                    <li>Configurer votre point de vente</li>
                    <li>Ajouter des utilisateurs (jusqu'à 3)</li>
                    <li>Générer des rapports</li>
                    <li>Tester toutes les fonctionnalités</li>
                </ul>
            </div>
            
            <p>Besoin d'aide pour démarrer ? Consultez notre <a href=\"https://aide.hmamarket.com\" style=\"color: #667eea; text-decoration: none;\">centre d'aide</a> ou répondez à cet email.</p>
            
            <p>À très bientôt sur HMA Market !</p>
            
            <p style=\"font-weight: 600;\">
                L'équipe HMA Market<br>
                <span style=\"font-size: 14px; color: #666;\">Votre partenaire pour la gestion d'entreprise</span>
            </p>
        </div>
        
        <div class=\"footer\">
            <p style=\"margin-bottom: 5px;\">
                <strong>HMA Market</strong><br>
                Système de gestion d'entreprise intégré
            </p>
            <p style=\"margin: 10px 0;\">
                📧 contact@hmamarket.com<br>
                📞 +229 01 56 13 92 00<br>
                🌍 www.hmamarket.com
            </p>
            <p style=\"font-size: 12px; margin-top: 15px; color: #868e96;\">
                Cet email a été envoyé automatiquement. Merci de ne pas y répondre.<br>
                © ";
        // line 212
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
        return "emails/welcome.html.twig";
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
        return array (  287 => 212,  225 => 153,  212 => 143,  207 => 141,  197 => 134,  193 => 133,  189 => 132,  185 => 131,  181 => 130,  172 => 124,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/emails/welcome.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Bienvenue sur HMA Market</title>
    <style>
        body {
            font-family: 'Inter', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9fafb;
        }
        .container {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
        }
        .content {
            padding: 40px 30px;
        }
        .credentials-box {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(4, 99, 241, 0.05) 100%);
            border-radius: 10px;
            padding: 25px;
            margin: 25px 0;
            border-left: 4px solid #667eea;
        }
        .password {
            font-family: 'Courier New', monospace;
            font-size: 18px;
            font-weight: bold;
            background: white;
            padding: 10px 15px;
            border-radius: 6px;
            display: inline-block;
            border: 2px dashed #667eea;
        }
        .btn-primary {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
            color: white;
            text-decoration: none;
            padding: 14px 28px;
            border-radius: 8px;
            font-weight: 600;
            margin: 20px 0;
            text-align: center;
        }
        .info-box {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
            border: 1px solid #e9ecef;
        }
        .step {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }
        .step-number {
            background: #667eea;
            color: white;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 15px;
            flex-shrink: 0;
        }
        .footer {
            text-align: center;
            padding: 30px;
            background: #f8f9fa;
            color: #6c757d;
            font-size: 14px;
            border-top: 1px solid #e9ecef;
        }
        .subscription-info {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.1) 0%, rgba(5, 150, 105, 0.05) 100%);
            border: 2px solid #10b981;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            margin: 20px 0;
        }
        .subscription-number {
            font-family: 'Courier New', monospace;
            font-size: 24px;
            font-weight: bold;
            color: #10b981;
            letter-spacing: 2px;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <h1>🎉 Bienvenue sur HMA Market !</h1>
            <p style=\"opacity: 0.9; margin-top: 10px;\">Votre compte entreprise a été créé avec succès</p>
        </div>
        
        <div class=\"content\">
            <p>Bonjour <strong>{{ company.companyName }}</strong>,</p>
            
            <p>Nous sommes ravis de vous accueillir sur HMA Market, la solution complète pour la gestion de votre entreprise.</p>
            
            <div class=\"info-box\">
                <h4 style=\"margin-top: 0; color: #667eea;\">📋 Récapitulatif de votre inscription</h4>
                <p><strong>Entreprise :</strong> {{ company.companyName }}</p>
                <p><strong>Type :</strong> {{ company.companyType }}</p>
                <p><strong>Email :</strong> {{ company.email }}</p>
                <p><strong>Téléphone :</strong> {{ company.phone }}</p>
                <p><strong>Période d'essai :</strong> Jusqu'au {{ company.trialEndsAt|date('d/m/Y') }}</p>
            </div>
            
            <h3>🔐 Vos identifiants de connexion</h3>
            
            <div class=\"credentials-box\">
                <p><strong>Pour vous connecter à votre compte :</strong></p>
                <p style=\"margin-bottom: 5px;\"><strong>Email :</strong> {{ company.email }}</p>
                <p><strong>Mot de passe temporaire :</strong></p>
                <div class=\"password\">{{ password }}</div>
                <p style=\"font-size: 14px; color: #666; margin-top: 10px;\">
                    <i>Pour des raisons de sécurité, ce mot de passe sera utilisable une seule fois.</i>
                </p>
            </div>
            
            <div class=\"step\">
                <div class=\"step-number\">1</div>
                <div>
                    <strong>Cliquez sur le lien ci-dessous</strong><br>
                    <a href=\"{{ login_url }}\" class=\"btn-primary\">Se connecter à HMA Market</a>
                </div>
            </div>
            
            <div class=\"step\">
                <div class=\"step-number\">2</div>
                <div>
                    <strong>Utilisez vos identifiants ci-dessus</strong><br>
                    Email et mot de passe temporaire
                </div>
            </div>
            
            <div class=\"step\">
                <div class=\"step-number\">3</div>
                <div>
                    <strong>Activez votre compte</strong><br>
                    Votre compte sera automatiquement activé lors de cette première connexion
                </div>
            </div>
            
            <div class=\"subscription-info\">
                <h4 style=\"color: #10b981; margin-top: 0;\">🎫 Votre numéro d'abonnement</h4>
                <p>Après activation de votre compte, vous recevrez votre numéro d'abonnement unique qui vous identifiera dans notre système.</p>
                <p><strong>Conservez-le précieusement !</strong></p>
            </div>
            
            <div style=\"background: #f1f8ff; padding: 20px; border-radius: 8px; margin: 25px 0;\">
                <h4 style=\"color: #0366d6; margin-top: 0;\">💡 Ce que vous pouvez faire pendant votre essai gratuit :</h4>
                <ul style=\"margin-bottom: 0;\">
                    <li>Gérer vos produits et stocks</li>
                    <li>Configurer votre point de vente</li>
                    <li>Ajouter des utilisateurs (jusqu'à 3)</li>
                    <li>Générer des rapports</li>
                    <li>Tester toutes les fonctionnalités</li>
                </ul>
            </div>
            
            <p>Besoin d'aide pour démarrer ? Consultez notre <a href=\"https://aide.hmamarket.com\" style=\"color: #667eea; text-decoration: none;\">centre d'aide</a> ou répondez à cet email.</p>
            
            <p>À très bientôt sur HMA Market !</p>
            
            <p style=\"font-weight: 600;\">
                L'équipe HMA Market<br>
                <span style=\"font-size: 14px; color: #666;\">Votre partenaire pour la gestion d'entreprise</span>
            </p>
        </div>
        
        <div class=\"footer\">
            <p style=\"margin-bottom: 5px;\">
                <strong>HMA Market</strong><br>
                Système de gestion d'entreprise intégré
            </p>
            <p style=\"margin: 10px 0;\">
                📧 contact@hmamarket.com<br>
                📞 +229 01 56 13 92 00<br>
                🌍 www.hmamarket.com
            </p>
            <p style=\"font-size: 12px; margin-top: 15px; color: #868e96;\">
                Cet email a été envoyé automatiquement. Merci de ne pas y répondre.<br>
                © {{ \"now\"|date(\"Y\") }} HMA Market. Tous droits réservés.
            </p>
        </div>
    </div>
</body>
</html>", "emails/welcome.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\welcome.html.twig");
    }
}
