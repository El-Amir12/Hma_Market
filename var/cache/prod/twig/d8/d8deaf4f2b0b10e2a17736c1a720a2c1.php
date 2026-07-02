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
class __TwigTemplate_8f0473c919b0fb730a045794b36eda6a extends Template
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
        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Confirmation d'abonnement - ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["app_name"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["global_logo_url"] ?? null), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["app_name"] ?? null), "html", null, true);
        yield "\">
            <h1>Confirmation d'abonnement</h1>
        </div>
        <div class=\"content\">
            <h2>Bonjour ";
        // line 118
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", true, true, false, 118) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", false, false, false, 118)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", false, false, false, 118), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 118), "html", null, true)));
        yield ",</h2>

            <p>Votre entreprise <strong>";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyName", [], "any", false, false, false, 120), "html", null, true);
        yield "</strong> vient de souscrire à un abonnement sur ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["app_name"] ?? null), "html", null, true);
        yield ".</p>

            <div class=\"details\">
                <ul>
                    <li>
                        <strong>Plan :</strong>
                        <span>";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 126), "displayName", [], "any", false, false, false, 126), "html", null, true);
        yield "</span>
                    </li>
                    <li>
                        <strong>Période :</strong>
                        <span>";
        // line 130
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "billingPeriod", [], "any", false, false, false, 130) == "monthly")) ? ("Mensuel") : ("Annuel"));
        yield "</span>
                    </li>
                    <li>
                        <strong>Date de début :</strong>
                        <span>";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "startsAt", [], "any", false, false, false, 134), "d/m/Y"), "html", null, true);
        yield "</span>
                    </li>
                    <li>
                        <strong>Date de fin :</strong>
                        <span>";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "endsAt", [], "any", false, false, false, 138), "d/m/Y"), "html", null, true);
        yield "</span>
                    </li>
                </ul>
            </div>

            <p>Vous pouvez dès maintenant accéder à toutes les fonctionnalités de votre abonnement via votre tableau de bord.</p>

            <p style=\"text-align: center; margin: 30px 0;\">
                <a href=\"";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["dashboard_url"] ?? null), "html", null, true);
        yield "\" class=\"btn\">Accéder au tableau de bord</a>
            </p>

            <div class=\"support\">
                <p>Si vous avez des questions, n'hésitez pas à contacter notre support à <a href=\"mailto:";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["support_email"] ?? null), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["support_email"] ?? null), "html", null, true);
        yield "</a>.</p>
            </div>
        </div>
        <div class=\"footer\">
            &copy; ";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["app_name"] ?? null), "html", null, true);
        yield ". Tous droits réservés.
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
        return array (  233 => 154,  224 => 150,  217 => 146,  206 => 138,  199 => 134,  192 => 130,  185 => 126,  174 => 120,  169 => 118,  160 => 114,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emails/subscription_confirmation_user.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\subscription_confirmation_user.html.twig");
    }
}
