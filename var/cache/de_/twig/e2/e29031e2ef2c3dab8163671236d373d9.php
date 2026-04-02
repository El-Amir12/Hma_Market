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

/* emails/subscription_expiration_reminder.html.twig */
class __TwigTemplate_4a24aa44f3c5a8cef729d5d231f92757 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/subscription_expiration_reminder.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/subscription_expiration_reminder.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Rappel : Votre abonnement expire bientôt - ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["app_name"]) || array_key_exists("app_name", $context) ? $context["app_name"] : (function () { throw new RuntimeError('Variable "app_name" does not exist.', 5, $this->source); })()), "html", null, true);
        yield "</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        .header img {
            max-width: 150px;
            max-height: 80px;
            margin-bottom: 15px;
            background: white;
            padding: 10px;
            border-radius: 8px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 300;
        }
        .content {
            padding: 30px;
        }
        .content h2 {
            color: #333;
            margin-top: 0;
            font-size: 22px;
        }
        .alert {
            background-color: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
        }
        .details {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }
        .details ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .details li {
            padding: 10px 0;
            border-bottom: 1px solid #e9ecef;
            display: flex;
            align-items: center;
        }
        .details li:last-child {
            border-bottom: none;
        }
        .details li strong {
            width: 140px;
            color: #495057;
        }
        .details li span {
            color: #212529;
            font-weight: 500;
        }
        .btn {
            display: inline-block;
            padding: 14px 30px;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: #ffffff;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s;
            box-shadow: 0 4px 10px rgba(240, 147, 251, 0.4);
        }
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(240, 147, 251, 0.5);
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #f8f9fa;
            color: #6c757d;
            font-size: 14px;
            border-top: 1px solid #e9ecef;
        }
        .footer a {
            color: #f5576c;
            text-decoration: none;
        }
        .support {
            margin-top: 20px;
            font-size: 14px;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <img src=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["global_logo_url"]) || array_key_exists("global_logo_url", $context) ? $context["global_logo_url"] : (function () { throw new RuntimeError('Variable "global_logo_url" does not exist.', 121, $this->source); })()), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["app_name"]) || array_key_exists("app_name", $context) ? $context["app_name"] : (function () { throw new RuntimeError('Variable "app_name" does not exist.', 121, $this->source); })()), "html", null, true);
        yield "\">
            <h1>Rappel d'expiration</h1>
        </div>
        <div class=\"content\">
            <h2>Bonjour ";
        // line 125
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", true, true, false, 125) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 125, $this->source); })()), "fullName", [], "any", false, false, false, 125)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 125, $this->source); })()), "fullName", [], "any", false, false, false, 125), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 125, $this->source); })()), "email", [], "any", false, false, false, 125), "html", null, true)));
        yield ",</h2>

            <div class=\"alert\">
                <strong>⚠️ Votre abonnement arrive à expiration dans 3 jours.</strong>
            </div>

            <p>L'abonnement de votre entreprise <strong>";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 131, $this->source); })()), "companyName", [], "any", false, false, false, 131), "html", null, true);
        yield "</strong> expire le <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["expiration_date"]) || array_key_exists("expiration_date", $context) ? $context["expiration_date"] : (function () { throw new RuntimeError('Variable "expiration_date" does not exist.', 131, $this->source); })()), "d/m/Y"), "html", null, true);
        yield "</strong>.</p>

            <p>Passé cette date, votre compte basculera automatiquement en mode gratuit (Freemium) avec des fonctionnalités limitées. Pour continuer à bénéficier de tous les avantages de votre forfait actuel, nous vous invitons à renouveler votre abonnement dès maintenant.</p>

            <div class=\"details\">
                <ul>
                    <li>
                        <strong>Plan actuel :</strong>
                        <span>";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 139, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 139), "html", null, true);
        yield "</span>
                    </li>
                    <li>
                        <strong>Date d'expiration :</strong>
                        <span>";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["expiration_date"]) || array_key_exists("expiration_date", $context) ? $context["expiration_date"] : (function () { throw new RuntimeError('Variable "expiration_date" does not exist.', 143, $this->source); })()), "d/m/Y"), "html", null, true);
        yield "</span>
                    </li>
                </ul>
            </div>

            <p style=\"text-align: center; margin: 30px 0;\">
                <a href=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["renewal_url"]) || array_key_exists("renewal_url", $context) ? $context["renewal_url"] : (function () { throw new RuntimeError('Variable "renewal_url" does not exist.', 149, $this->source); })()), "html", null, true);
        yield "\" class=\"btn\">Renouveler mon abonnement</a>
            </p>

            <div class=\"support\">
                <p>Si vous avez des questions, n'hésitez pas à contacter notre support à <a href=\"mailto:";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["support_email"]) || array_key_exists("support_email", $context) ? $context["support_email"] : (function () { throw new RuntimeError('Variable "support_email" does not exist.', 153, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["support_email"]) || array_key_exists("support_email", $context) ? $context["support_email"] : (function () { throw new RuntimeError('Variable "support_email" does not exist.', 153, $this->source); })()), "html", null, true);
        yield "</a>.</p>
            </div>
        </div>
        <div class=\"footer\">
            &copy; ";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["app_name"]) || array_key_exists("app_name", $context) ? $context["app_name"] : (function () { throw new RuntimeError('Variable "app_name" does not exist.', 157, $this->source); })()), "html", null, true);
        yield ". Tous droits réservés.
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
        return "emails/subscription_expiration_reminder.html.twig";
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
        return array (  236 => 157,  227 => 153,  220 => 149,  211 => 143,  204 => 139,  191 => 131,  182 => 125,  173 => 121,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Rappel : Votre abonnement expire bientôt - {{ app_name }}</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        .header img {
            max-width: 150px;
            max-height: 80px;
            margin-bottom: 15px;
            background: white;
            padding: 10px;
            border-radius: 8px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 300;
        }
        .content {
            padding: 30px;
        }
        .content h2 {
            color: #333;
            margin-top: 0;
            font-size: 22px;
        }
        .alert {
            background-color: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
        }
        .details {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }
        .details ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .details li {
            padding: 10px 0;
            border-bottom: 1px solid #e9ecef;
            display: flex;
            align-items: center;
        }
        .details li:last-child {
            border-bottom: none;
        }
        .details li strong {
            width: 140px;
            color: #495057;
        }
        .details li span {
            color: #212529;
            font-weight: 500;
        }
        .btn {
            display: inline-block;
            padding: 14px 30px;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: #ffffff;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s;
            box-shadow: 0 4px 10px rgba(240, 147, 251, 0.4);
        }
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(240, 147, 251, 0.5);
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #f8f9fa;
            color: #6c757d;
            font-size: 14px;
            border-top: 1px solid #e9ecef;
        }
        .footer a {
            color: #f5576c;
            text-decoration: none;
        }
        .support {
            margin-top: 20px;
            font-size: 14px;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <img src=\"{{ global_logo_url }}\" alt=\"{{ app_name }}\">
            <h1>Rappel d'expiration</h1>
        </div>
        <div class=\"content\">
            <h2>Bonjour {{ user.fullName ?? user.email }},</h2>

            <div class=\"alert\">
                <strong>⚠️ Votre abonnement arrive à expiration dans 3 jours.</strong>
            </div>

            <p>L'abonnement de votre entreprise <strong>{{ company.companyName }}</strong> expire le <strong>{{ expiration_date|date('d/m/Y') }}</strong>.</p>

            <p>Passé cette date, votre compte basculera automatiquement en mode gratuit (Freemium) avec des fonctionnalités limitées. Pour continuer à bénéficier de tous les avantages de votre forfait actuel, nous vous invitons à renouveler votre abonnement dès maintenant.</p>

            <div class=\"details\">
                <ul>
                    <li>
                        <strong>Plan actuel :</strong>
                        <span>{{ company.currentPlanLabel }}</span>
                    </li>
                    <li>
                        <strong>Date d'expiration :</strong>
                        <span>{{ expiration_date|date('d/m/Y') }}</span>
                    </li>
                </ul>
            </div>

            <p style=\"text-align: center; margin: 30px 0;\">
                <a href=\"{{ renewal_url }}\" class=\"btn\">Renouveler mon abonnement</a>
            </p>

            <div class=\"support\">
                <p>Si vous avez des questions, n'hésitez pas à contacter notre support à <a href=\"mailto:{{ support_email }}\">{{ support_email }}</a>.</p>
            </div>
        </div>
        <div class=\"footer\">
            &copy; {{ \"now\"|date('Y') }} {{ app_name }}. Tous droits réservés.
        </div>
    </div>
</body>
</html>", "emails/subscription_expiration_reminder.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\subscription_expiration_reminder.html.twig");
    }
}
