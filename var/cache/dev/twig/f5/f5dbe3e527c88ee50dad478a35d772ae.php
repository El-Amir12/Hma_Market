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

/* emails/subscription_confirmation_user.html.twig */
class __TwigTemplate_fed7a402ca135e92ec7ed24f4f0eac69 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/subscription_confirmation_user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/subscription_confirmation_user.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Confirmation d'abonnement - ";
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #ffffff;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s;
            box-shadow: 0 4px 10px rgba(102, 126, 234, 0.4);
        }
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(102, 126, 234, 0.5);
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
            color: #667eea;
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
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["global_logo_url"]) || array_key_exists("global_logo_url", $context) ? $context["global_logo_url"] : (function () { throw new RuntimeError('Variable "global_logo_url" does not exist.', 114, $this->source); })()), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["app_name"]) || array_key_exists("app_name", $context) ? $context["app_name"] : (function () { throw new RuntimeError('Variable "app_name" does not exist.', 114, $this->source); })()), "html", null, true);
        yield "\">
            <h1>Confirmation d'abonnement</h1>
        </div>
        <div class=\"content\">
            <h2>Bonjour ";
        // line 118
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", true, true, false, 118) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 118, $this->source); })()), "fullName", [], "any", false, false, false, 118)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 118, $this->source); })()), "fullName", [], "any", false, false, false, 118), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 118, $this->source); })()), "email", [], "any", false, false, false, 118), "html", null, true)));
        yield ",</h2>

            <p>Votre entreprise <strong>";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 120, $this->source); })()), "companyName", [], "any", false, false, false, 120), "html", null, true);
        yield "</strong> vient de souscrire à un abonnement sur ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["app_name"]) || array_key_exists("app_name", $context) ? $context["app_name"] : (function () { throw new RuntimeError('Variable "app_name" does not exist.', 120, $this->source); })()), "html", null, true);
        yield ".</p>

            <div class=\"details\">
                <ul>
                    <li>
                        <strong>Plan :</strong>
                        <span>";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 126, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 126), "displayName", [], "any", false, false, false, 126), "html", null, true);
        yield "</span>
                    </li>
                    <li>
                        <strong>Période :</strong>
                        <span>";
        // line 130
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 130, $this->source); })()), "billingPeriod", [], "any", false, false, false, 130) == "monthly")) ? ("Mensuel") : ("Annuel"));
        yield "</span>
                    </li>
                    <li>
                        <strong>Date de début :</strong>
                        <span>";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 134, $this->source); })()), "startsAt", [], "any", false, false, false, 134), "d/m/Y"), "html", null, true);
        yield "</span>
                    </li>
                    <li>
                        <strong>Date de fin :</strong>
                        <span>";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 138, $this->source); })()), "endsAt", [], "any", false, false, false, 138), "d/m/Y"), "html", null, true);
        yield "</span>
                    </li>
                </ul>
            </div>

            <p>Vous pouvez dès maintenant accéder à toutes les fonctionnalités de votre abonnement via votre tableau de bord.</p>

            <p style=\"text-align: center; margin: 30px 0;\">
                <a href=\"";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dashboard_url"]) || array_key_exists("dashboard_url", $context) ? $context["dashboard_url"] : (function () { throw new RuntimeError('Variable "dashboard_url" does not exist.', 146, $this->source); })()), "html", null, true);
        yield "\" class=\"btn\">Accéder au tableau de bord</a>
            </p>

            <div class=\"support\">
                <p>Si vous avez des questions, n'hésitez pas à contacter notre support à <a href=\"mailto:";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["support_email"]) || array_key_exists("support_email", $context) ? $context["support_email"] : (function () { throw new RuntimeError('Variable "support_email" does not exist.', 150, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["support_email"]) || array_key_exists("support_email", $context) ? $context["support_email"] : (function () { throw new RuntimeError('Variable "support_email" does not exist.', 150, $this->source); })()), "html", null, true);
        yield "</a>.</p>
            </div>
        </div>
        <div class=\"footer\">
            &copy; ";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["app_name"]) || array_key_exists("app_name", $context) ? $context["app_name"] : (function () { throw new RuntimeError('Variable "app_name" does not exist.', 154, $this->source); })()), "html", null, true);
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
        return "emails/subscription_confirmation_user.html.twig";
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
        return array (  239 => 154,  230 => 150,  223 => 146,  212 => 138,  205 => 134,  198 => 130,  191 => 126,  180 => 120,  175 => 118,  166 => 114,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Confirmation d'abonnement - {{ app_name }}</title>
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #ffffff;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s;
            box-shadow: 0 4px 10px rgba(102, 126, 234, 0.4);
        }
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(102, 126, 234, 0.5);
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
            color: #667eea;
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
            <h1>Confirmation d'abonnement</h1>
        </div>
        <div class=\"content\">
            <h2>Bonjour {{ user.fullName ?? user.email }},</h2>

            <p>Votre entreprise <strong>{{ company.companyName }}</strong> vient de souscrire à un abonnement sur {{ app_name }}.</p>

            <div class=\"details\">
                <ul>
                    <li>
                        <strong>Plan :</strong>
                        <span>{{ subscription.subscriptionPlan.displayName }}</span>
                    </li>
                    <li>
                        <strong>Période :</strong>
                        <span>{{ subscription.billingPeriod == 'monthly' ? 'Mensuel' : 'Annuel' }}</span>
                    </li>
                    <li>
                        <strong>Date de début :</strong>
                        <span>{{ subscription.startsAt|date('d/m/Y') }}</span>
                    </li>
                    <li>
                        <strong>Date de fin :</strong>
                        <span>{{ subscription.endsAt|date('d/m/Y') }}</span>
                    </li>
                </ul>
            </div>

            <p>Vous pouvez dès maintenant accéder à toutes les fonctionnalités de votre abonnement via votre tableau de bord.</p>

            <p style=\"text-align: center; margin: 30px 0;\">
                <a href=\"{{ dashboard_url }}\" class=\"btn\">Accéder au tableau de bord</a>
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
</html>", "emails/subscription_confirmation_user.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\subscription_confirmation_user.html.twig");
    }
}
