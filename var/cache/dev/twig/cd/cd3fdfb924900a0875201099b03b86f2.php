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
class __TwigTemplate_26da3f9804e400a9cf49e3027e6b01ff extends Template
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
    <title>Bienvenue - Activez votre compte</title>
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
        .header h1 { margin: 0; font-size: 24px; font-weight: 700; }
        .content { padding: 40px 30px; }
        .btn-activate {
            display: inline-block;
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white !important;
            text-decoration: none;
            padding: 16px 40px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            text-align: center;
        }
        .activation-box {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.1) 0%, rgba(5, 150, 105, 0.05) 100%);
            border: 2px solid #10b981;
            border-radius: 10px;
            padding: 25px;
            margin: 25px 0;
            text-align: center;
        }
        .info-box {
            background: #fff8e1;
            border-left: 4px solid #f59e0b;
            padding: 15px 20px;
            margin: 20px 0;
            border-radius: 6px;
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
            <h1>🎉 Bienvenue sur ";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["app_name"]) || array_key_exists("app_name", $context) ? $context["app_name"] : (function () { throw new RuntimeError('Variable "app_name" does not exist.', 71, $this->source); })()), "html", null, true);
        yield " !</h1>
            <p style=\"opacity: 0.9; margin-top: 10px;\">
                Votre compte est prêt à être activé
            </p>
        </div>
        
        <div class=\"content\">
            <p>Bonjour <strong>";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 78, $this->source); })()), "fullName", [], "any", false, false, false, 78), "html", null, true);
        yield "</strong>,</p>
            
            <p>
                Merci de vous être inscrit sur <strong>";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["app_name"]) || array_key_exists("app_name", $context) ? $context["app_name"] : (function () { throw new RuntimeError('Variable "app_name" does not exist.', 81, $this->source); })()), "html", null, true);
        yield "</strong> 
                pour l'entreprise <strong>";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 82, $this->source); })()), "companyName", [], "any", false, false, false, 82), "html", null, true);
        yield "</strong>.
            </p>
            
            <div class=\"activation-box\">
                <h3 style=\"color: #10b981; margin-top: 0;\">
                    ⚡ Activez votre compte maintenant
                </h3>
                <p style=\"margin-bottom: 20px;\">
                    Cliquez sur le bouton ci-dessous pour activer votre compte.<br>
                    Vous recevrez votre <strong>numéro d'abonnement</strong> immédiatement après.
                </p>
                <a href=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activation_url"]) || array_key_exists("activation_url", $context) ? $context["activation_url"] : (function () { throw new RuntimeError('Variable "activation_url" does not exist.', 93, $this->source); })()), "html", null, true);
        yield "\" class=\"btn-activate\">
                    ✅ Activer mon compte
                </a>
            </div>
            
            <div class=\"info-box\">
                <p style=\"margin: 0; font-size: 14px;\">
                    <strong>⏱ Ce lien expire dans ";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["expires_in_hours"]) || array_key_exists("expires_in_hours", $context) ? $context["expires_in_hours"] : (function () { throw new RuntimeError('Variable "expires_in_hours" does not exist.', 100, $this->source); })()), "html", null, true);
        yield " heures.</strong><br>
                    <span style=\"font-size: 13px;\">
                        Si vous ne cliquez pas sur ce lien, vous ne pourrez pas vous connecter.
                    </span>
                </p>
            </div>
            
            <p style=\"font-size: 14px; color: #666;\">
                Si le bouton ne fonctionne pas, copiez-collez ce lien dans votre navigateur :
            </p>
            <p style=\"font-size: 12px; word-break: break-all; color: #0463f1;\">
                ";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activation_url"]) || array_key_exists("activation_url", $context) ? $context["activation_url"] : (function () { throw new RuntimeError('Variable "activation_url" does not exist.', 111, $this->source); })()), "html", null, true);
        yield "
            </p>
            
            <hr style=\"border: none; border-top: 1px solid #eee; margin: 30px 0;\">
            
            <p style=\"font-weight: 600;\">
                L'équipe ";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["app_name"]) || array_key_exists("app_name", $context) ? $context["app_name"] : (function () { throw new RuntimeError('Variable "app_name" does not exist.', 117, $this->source); })()), "html", null, true);
        yield "<br>
                <span style=\"font-size: 14px; color: #666;\">
                    Votre partenaire pour la gestion d'entreprise
                </span>
            </p>
        </div>
        
        <div class=\"footer\">
            <p style=\"margin-bottom: 5px;\">
                <strong>";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["app_name"]) || array_key_exists("app_name", $context) ? $context["app_name"] : (function () { throw new RuntimeError('Variable "app_name" does not exist.', 126, $this->source); })()), "html", null, true);
        yield "</strong>
            </p>
            <p style=\"font-size: 12px; color: #868e96; margin-top: 15px;\">
                Cet email a été envoyé automatiquement.<br>
                © ";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["app_name"]) || array_key_exists("app_name", $context) ? $context["app_name"] : (function () { throw new RuntimeError('Variable "app_name" does not exist.', 130, $this->source); })()), "html", null, true);
        yield ". Tous droits réservés.
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
        return array (  205 => 130,  198 => 126,  186 => 117,  177 => 111,  163 => 100,  153 => 93,  139 => 82,  135 => 81,  129 => 78,  119 => 71,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/emails/welcome.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Bienvenue - Activez votre compte</title>
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
        .header h1 { margin: 0; font-size: 24px; font-weight: 700; }
        .content { padding: 40px 30px; }
        .btn-activate {
            display: inline-block;
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white !important;
            text-decoration: none;
            padding: 16px 40px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            text-align: center;
        }
        .activation-box {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.1) 0%, rgba(5, 150, 105, 0.05) 100%);
            border: 2px solid #10b981;
            border-radius: 10px;
            padding: 25px;
            margin: 25px 0;
            text-align: center;
        }
        .info-box {
            background: #fff8e1;
            border-left: 4px solid #f59e0b;
            padding: 15px 20px;
            margin: 20px 0;
            border-radius: 6px;
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
            <h1>🎉 Bienvenue sur {{ app_name }} !</h1>
            <p style=\"opacity: 0.9; margin-top: 10px;\">
                Votre compte est prêt à être activé
            </p>
        </div>
        
        <div class=\"content\">
            <p>Bonjour <strong>{{ owner.fullName }}</strong>,</p>
            
            <p>
                Merci de vous être inscrit sur <strong>{{ app_name }}</strong> 
                pour l'entreprise <strong>{{ company.companyName }}</strong>.
            </p>
            
            <div class=\"activation-box\">
                <h3 style=\"color: #10b981; margin-top: 0;\">
                    ⚡ Activez votre compte maintenant
                </h3>
                <p style=\"margin-bottom: 20px;\">
                    Cliquez sur le bouton ci-dessous pour activer votre compte.<br>
                    Vous recevrez votre <strong>numéro d'abonnement</strong> immédiatement après.
                </p>
                <a href=\"{{ activation_url }}\" class=\"btn-activate\">
                    ✅ Activer mon compte
                </a>
            </div>
            
            <div class=\"info-box\">
                <p style=\"margin: 0; font-size: 14px;\">
                    <strong>⏱ Ce lien expire dans {{ expires_in_hours }} heures.</strong><br>
                    <span style=\"font-size: 13px;\">
                        Si vous ne cliquez pas sur ce lien, vous ne pourrez pas vous connecter.
                    </span>
                </p>
            </div>
            
            <p style=\"font-size: 14px; color: #666;\">
                Si le bouton ne fonctionne pas, copiez-collez ce lien dans votre navigateur :
            </p>
            <p style=\"font-size: 12px; word-break: break-all; color: #0463f1;\">
                {{ activation_url }}
            </p>
            
            <hr style=\"border: none; border-top: 1px solid #eee; margin: 30px 0;\">
            
            <p style=\"font-weight: 600;\">
                L'équipe {{ app_name }}<br>
                <span style=\"font-size: 14px; color: #666;\">
                    Votre partenaire pour la gestion d'entreprise
                </span>
            </p>
        </div>
        
        <div class=\"footer\">
            <p style=\"margin-bottom: 5px;\">
                <strong>{{ app_name }}</strong>
            </p>
            <p style=\"font-size: 12px; color: #868e96; margin-top: 15px;\">
                Cet email a été envoyé automatiquement.<br>
                © {{ \"now\"|date(\"Y\") }} {{ app_name }}. Tous droits réservés.
            </p>
        </div>
    </div>
</body>
</html>", "emails/welcome.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\welcome.html.twig");
    }
}
