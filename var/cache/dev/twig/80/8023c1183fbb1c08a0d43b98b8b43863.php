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

/* emails/owner_credentials.html.twig */
class __TwigTemplate_b3ca23f5d42d758c95d88e71cbbc2af5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/owner_credentials.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/owner_credentials.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Votre compte propriétaire HMA Market</title>
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
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
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
        .important-box {
            background: linear-gradient(135deg, rgba(245, 158, 11, 0.1) 0%, rgba(217, 119, 6, 0.05) 100%);
            border-radius: 10px;
            padding: 25px;
            margin: 25px 0;
            border-left: 4px solid #f59e0b;
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
        .subscription-box {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.1) 0%, rgba(5, 150, 105, 0.05) 100%);
            border: 2px solid #10b981;
            border-radius: 10px;
            padding: 25px;
            margin: 25px 0;
            text-align: center;
        }
        .subscription-number {
            font-family: 'Courier New', monospace;
            font-size: 28px;
            font-weight: bold;
            color: #10b981;
            letter-spacing: 2px;
            margin: 15px 0;
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
        .info-card {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }
        .feature-list {
            list-style: none;
            padding-left: 0;
        }
        .feature-list li {
            margin-bottom: 10px;
            padding-left: 25px;
            position: relative;
        }
        .feature-list li:before {
            content: \"✓\";
            position: absolute;
            left: 0;
            color: #10b981;
            font-weight: bold;
        }
        .footer {
            text-align: center;
            padding: 30px;
            background: #f8f9fa;
            color: #6c757d;
            font-size: 14px;
            border-top: 1px solid #e9ecef;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <h1>✅ Compte activé avec succès !</h1>
            <p style=\"opacity: 0.9; margin-top: 10px;\">Votre compte propriétaire HMA Market est prêt</p>
        </div>
        
        <div class=\"content\">
            <p>Bonjour <strong>";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 129, $this->source); })()), "companyName", [], "any", false, false, false, 129), "html", null, true);
        yield "</strong>,</p>
            
            <p>Votre compte entreprise a été activé avec succès lors de votre première connexion. Pour des raisons de sécurité, un compte utilisateur propriétaire a été créé pour vous.</p>
            
            <div class=\"important-box\">
                <h4 style=\"margin-top: 0; color: #d97706;\">⚠️ Action requise</h4>
                <p><strong>Vous devez maintenant :</strong></p>
                <ol>
                    <li><strong>Vous déconnecter</strong> de votre session actuelle</li>
                    <li><strong>Vous reconnecter</strong> avec vos <strong>nouveaux identifiants</strong> ci-dessous</li>
                    <li><strong>Changer votre mot de passe</strong> après connexion</li>
                </ol>
            </div>
            
            <div class=\"subscription-box\">
                <h3 style=\"margin-top: 0; color: #059669;\">🎫 Votre numéro d'abonnement</h3>
                <p style=\"color: #666;\">Ce numéro est unique et vous identifiera dans notre système :</p>
                <div class=\"subscription-number\">";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscription_number"]) || array_key_exists("subscription_number", $context) ? $context["subscription_number"] : (function () { throw new RuntimeError('Variable "subscription_number" does not exist.', 146, $this->source); })()), "html", null, true);
        yield "</div>
                <p style=\"color: #666; font-size: 14px;\">
                    <strong>Conservez-le précieusement !</strong> Il vous sera demandé pour toute assistance.
                </p>
            </div>
            
            <h3>🔐 Vos nouveaux identifiants propriétaire</h3>
            
            <div class=\"credentials-box\">
                <p><strong>Pour vous connecter à votre compte propriétaire :</strong></p>
                <p style=\"margin-bottom: 5px;\"><strong>Email :</strong> ";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 156, $this->source); })()), "email", [], "any", false, false, false, 156), "html", null, true);
        yield "</p>
                <p><strong>Nouveau mot de passe :</strong></p>
                <div class=\"password\">";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["password"]) || array_key_exists("password", $context) ? $context["password"] : (function () { throw new RuntimeError('Variable "password" does not exist.', 158, $this->source); })()), "html", null, true);
        yield "</div>
                <p style=\"font-size: 14px; color: #666; margin-top: 10px;\">
                    <i>Ce mot de passe remplace l'ancien. Utilisez-le pour toutes vos futures connexions.</i>
                </p>
            </div>
            
            <div style=\"text-align: center; margin: 30px 0;\">
                <a href=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["login_url"]) || array_key_exists("login_url", $context) ? $context["login_url"] : (function () { throw new RuntimeError('Variable "login_url" does not exist.', 165, $this->source); })()), "html", null, true);
        yield "\" class=\"btn-primary\">🔗 Se connecter avec mes nouveaux identifiants</a>
            </div>
            
            <div class=\"info-card\">
                <h4 style=\"color: #667eea; margin-top: 0;\">👑 Compte propriétaire - Vos privilèges</h4>
                <p>Avec votre compte propriétaire, vous avez accès à :</p>
                <ul class=\"feature-list\">
                    <li><strong>Administration complète</strong> de votre entreprise</li>
                    <li>Gestion des <strong>utilisateurs et permissions</strong></li>
                    <li>Configuration des <strong>paramètres généraux</strong></li>
                    <li>Accès à tous les <strong>rapports et statistiques</strong></li>
                    <li>Gestion des <strong>abonnements et facturation</strong></li>
                </ul>
            </div>
            
            <div class=\"info-card\">
                <h4 style=\"color: #10b981; margin-top: 0;\">📊 Votre période d'essai</h4>
                <p><strong>Période d'essai gratuit :</strong> Jusqu'au ";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 182, $this->source); })()), "trialEndsAt", [], "any", false, false, false, 182), "d/m/Y"), "html", null, true);
        yield "</p>
                <p>Profitez de cette période pour découvrir toutes les fonctionnalités de HMA Market.</p>
                <p><strong>Fonctionnalités disponibles :</strong></p>
                <ul style=\"columns: 2; column-gap: 40px;\">
                    <li>Gestion des stocks</li>
                    <li>Point de vente</li>
                    <li>Facturation</li>
                    <li>Rapports</li>
                    <li>Gestion d'équipe</li>
                    <li>Application mobile</li>
                </ul>
            </div>
            
            <div style=\"background: #e8f4ff; padding: 20px; border-radius: 8px; margin: 25px 0;\">
                <h4 style=\"color: #0366d6; margin-top: 0;\">💡 Conseils pour bien démarrer</h4>
                <ol>
                    <li><strong>Changez votre mot de passe</strong> après votre première connexion</li>
                    <li><strong>Notez votre numéro d'abonnement</strong> dans un endroit sûr</li>
                    <li><strong>Ajoutez vos premiers produits</strong> dans la section Catalogue</li>
                    <li><strong>Configurez votre point de vente</strong> si vous avez une boutique physique</li>
                    <li><strong>Invitez vos collaborateurs</strong> depuis la gestion des utilisateurs</li>
                </ol>
            </div>
            
            <p>Besoin d'aide pour configurer votre compte ?</p>
            <ul>
                <li>📖 <a href=\"https://aide.hmamarket.com/premiers-pas\" style=\"color: #667eea;\">Guide des premiers pas</a></li>
                <li>🎬 <a href=\"https://aide.hmamarket.com/videos\" style=\"color: #667eea;\">Tutoriels vidéos</a></li>
                <li>📧 <a href=\"mailto:support@hmamarket.com\" style=\"color: #667eea;\">support@hmamarket.com</a></li>
            </ul>
            
            <p style=\"margin-top: 30px;\">
                Bienvenue dans la communauté HMA Market !<br>
                <span style=\"font-weight: 600;\">L'équipe HMA Market</span>
            </p>
        </div>
        
        <div class=\"footer\">
            <p style=\"margin-bottom: 5px;\">
                <strong>HMA Market</strong><br>
                Votre partenaire pour la croissance de votre entreprise
            </p>
            <p style=\"margin: 10px 0;\">
                📧 support@hmamarket.com<br>
                📞 +229 01 56 13 92 00<br>
                🌍 www.hmamarket.com
            </p>
            <p style=\"font-size: 12px; margin-top: 15px; color: #868e96;\">
                Cet email contient des informations sensibles. Ne le transférez pas.<br>
                © ";
        // line 231
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
        return "emails/owner_credentials.html.twig";
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
        return array (  297 => 231,  245 => 182,  225 => 165,  215 => 158,  210 => 156,  197 => 146,  177 => 129,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/emails/owner_credentials.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Votre compte propriétaire HMA Market</title>
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
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
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
        .important-box {
            background: linear-gradient(135deg, rgba(245, 158, 11, 0.1) 0%, rgba(217, 119, 6, 0.05) 100%);
            border-radius: 10px;
            padding: 25px;
            margin: 25px 0;
            border-left: 4px solid #f59e0b;
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
        .subscription-box {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.1) 0%, rgba(5, 150, 105, 0.05) 100%);
            border: 2px solid #10b981;
            border-radius: 10px;
            padding: 25px;
            margin: 25px 0;
            text-align: center;
        }
        .subscription-number {
            font-family: 'Courier New', monospace;
            font-size: 28px;
            font-weight: bold;
            color: #10b981;
            letter-spacing: 2px;
            margin: 15px 0;
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
        .info-card {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }
        .feature-list {
            list-style: none;
            padding-left: 0;
        }
        .feature-list li {
            margin-bottom: 10px;
            padding-left: 25px;
            position: relative;
        }
        .feature-list li:before {
            content: \"✓\";
            position: absolute;
            left: 0;
            color: #10b981;
            font-weight: bold;
        }
        .footer {
            text-align: center;
            padding: 30px;
            background: #f8f9fa;
            color: #6c757d;
            font-size: 14px;
            border-top: 1px solid #e9ecef;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <h1>✅ Compte activé avec succès !</h1>
            <p style=\"opacity: 0.9; margin-top: 10px;\">Votre compte propriétaire HMA Market est prêt</p>
        </div>
        
        <div class=\"content\">
            <p>Bonjour <strong>{{ company.companyName }}</strong>,</p>
            
            <p>Votre compte entreprise a été activé avec succès lors de votre première connexion. Pour des raisons de sécurité, un compte utilisateur propriétaire a été créé pour vous.</p>
            
            <div class=\"important-box\">
                <h4 style=\"margin-top: 0; color: #d97706;\">⚠️ Action requise</h4>
                <p><strong>Vous devez maintenant :</strong></p>
                <ol>
                    <li><strong>Vous déconnecter</strong> de votre session actuelle</li>
                    <li><strong>Vous reconnecter</strong> avec vos <strong>nouveaux identifiants</strong> ci-dessous</li>
                    <li><strong>Changer votre mot de passe</strong> après connexion</li>
                </ol>
            </div>
            
            <div class=\"subscription-box\">
                <h3 style=\"margin-top: 0; color: #059669;\">🎫 Votre numéro d'abonnement</h3>
                <p style=\"color: #666;\">Ce numéro est unique et vous identifiera dans notre système :</p>
                <div class=\"subscription-number\">{{ subscription_number }}</div>
                <p style=\"color: #666; font-size: 14px;\">
                    <strong>Conservez-le précieusement !</strong> Il vous sera demandé pour toute assistance.
                </p>
            </div>
            
            <h3>🔐 Vos nouveaux identifiants propriétaire</h3>
            
            <div class=\"credentials-box\">
                <p><strong>Pour vous connecter à votre compte propriétaire :</strong></p>
                <p style=\"margin-bottom: 5px;\"><strong>Email :</strong> {{ company.email }}</p>
                <p><strong>Nouveau mot de passe :</strong></p>
                <div class=\"password\">{{ password }}</div>
                <p style=\"font-size: 14px; color: #666; margin-top: 10px;\">
                    <i>Ce mot de passe remplace l'ancien. Utilisez-le pour toutes vos futures connexions.</i>
                </p>
            </div>
            
            <div style=\"text-align: center; margin: 30px 0;\">
                <a href=\"{{ login_url }}\" class=\"btn-primary\">🔗 Se connecter avec mes nouveaux identifiants</a>
            </div>
            
            <div class=\"info-card\">
                <h4 style=\"color: #667eea; margin-top: 0;\">👑 Compte propriétaire - Vos privilèges</h4>
                <p>Avec votre compte propriétaire, vous avez accès à :</p>
                <ul class=\"feature-list\">
                    <li><strong>Administration complète</strong> de votre entreprise</li>
                    <li>Gestion des <strong>utilisateurs et permissions</strong></li>
                    <li>Configuration des <strong>paramètres généraux</strong></li>
                    <li>Accès à tous les <strong>rapports et statistiques</strong></li>
                    <li>Gestion des <strong>abonnements et facturation</strong></li>
                </ul>
            </div>
            
            <div class=\"info-card\">
                <h4 style=\"color: #10b981; margin-top: 0;\">📊 Votre période d'essai</h4>
                <p><strong>Période d'essai gratuit :</strong> Jusqu'au {{ company.trialEndsAt|date('d/m/Y') }}</p>
                <p>Profitez de cette période pour découvrir toutes les fonctionnalités de HMA Market.</p>
                <p><strong>Fonctionnalités disponibles :</strong></p>
                <ul style=\"columns: 2; column-gap: 40px;\">
                    <li>Gestion des stocks</li>
                    <li>Point de vente</li>
                    <li>Facturation</li>
                    <li>Rapports</li>
                    <li>Gestion d'équipe</li>
                    <li>Application mobile</li>
                </ul>
            </div>
            
            <div style=\"background: #e8f4ff; padding: 20px; border-radius: 8px; margin: 25px 0;\">
                <h4 style=\"color: #0366d6; margin-top: 0;\">💡 Conseils pour bien démarrer</h4>
                <ol>
                    <li><strong>Changez votre mot de passe</strong> après votre première connexion</li>
                    <li><strong>Notez votre numéro d'abonnement</strong> dans un endroit sûr</li>
                    <li><strong>Ajoutez vos premiers produits</strong> dans la section Catalogue</li>
                    <li><strong>Configurez votre point de vente</strong> si vous avez une boutique physique</li>
                    <li><strong>Invitez vos collaborateurs</strong> depuis la gestion des utilisateurs</li>
                </ol>
            </div>
            
            <p>Besoin d'aide pour configurer votre compte ?</p>
            <ul>
                <li>📖 <a href=\"https://aide.hmamarket.com/premiers-pas\" style=\"color: #667eea;\">Guide des premiers pas</a></li>
                <li>🎬 <a href=\"https://aide.hmamarket.com/videos\" style=\"color: #667eea;\">Tutoriels vidéos</a></li>
                <li>📧 <a href=\"mailto:support@hmamarket.com\" style=\"color: #667eea;\">support@hmamarket.com</a></li>
            </ul>
            
            <p style=\"margin-top: 30px;\">
                Bienvenue dans la communauté HMA Market !<br>
                <span style=\"font-weight: 600;\">L'équipe HMA Market</span>
            </p>
        </div>
        
        <div class=\"footer\">
            <p style=\"margin-bottom: 5px;\">
                <strong>HMA Market</strong><br>
                Votre partenaire pour la croissance de votre entreprise
            </p>
            <p style=\"margin: 10px 0;\">
                📧 support@hmamarket.com<br>
                📞 +229 01 56 13 92 00<br>
                🌍 www.hmamarket.com
            </p>
            <p style=\"font-size: 12px; margin-top: 15px; color: #868e96;\">
                Cet email contient des informations sensibles. Ne le transférez pas.<br>
                © {{ \"now\"|date(\"Y\") }} HMA Market. Tous droits réservés.
            </p>
        </div>
    </div>
</body>
</html>", "emails/owner_credentials.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\owner_credentials.html.twig");
    }
}
