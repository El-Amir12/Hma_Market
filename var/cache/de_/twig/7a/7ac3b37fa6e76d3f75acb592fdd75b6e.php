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

/* emails/company_activated.html.twig */
class __TwigTemplate_75aff70b64c0df04259262f5a5139cfd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/company_activated.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/company_activated.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Votre compte est activé</title>
</head>
<body style=\"font-family: Arial, sans-serif; background: #f9fafb; padding: 30px;\">
    <div style=\"max-width: 600px; margin: 0 auto; background: white; border-radius: 8px; padding: 40px;\">
        <h1 style=\"color: #0463f1;\">🎉 Votre compte est activé !</h1>
        
        <p>Bonjour <strong>";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 11, $this->source); })()), "fullName", [], "any", false, false, false, 11), "html", null, true);
        yield "</strong>,</p>
        
        <p>
            Nous avons le plaisir de vous informer que le compte de votre entreprise
            <strong>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 15, $this->source); })()), "companyName", [], "any", false, false, false, 15), "html", null, true);
        yield "</strong> a été activé avec succès.
        </p>
        
        <div style=\"background: #f0f7ff; border-left: 4px solid #0463f1; padding: 20px; margin: 20px 0;\">
            <p style=\"margin: 0;\"><strong>Numéro d'abonnement :</strong> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscription_number"]) || array_key_exists("subscription_number", $context) ? $context["subscription_number"] : (function () { throw new RuntimeError('Variable "subscription_number" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "</p>
            <p style=\"margin: 10px 0 0 0;\"><strong>Plan actuel :</strong> ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 20, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 20), "html", null, true);
        yield "</p>
            <p style=\"margin: 10px 0 0 0;\"><strong>Date d'activation :</strong> ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
        yield "</p>
        </div>
        
        <p>
            Vous pouvez dès maintenant accéder à votre tableau de bord :
        </p>
        
        <p style=\"text-align: center; margin: 30px 0;\">
            <a href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dashboard_url"]) || array_key_exists("dashboard_url", $context) ? $context["dashboard_url"] : (function () { throw new RuntimeError('Variable "dashboard_url" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "\" 
               style=\"background: #0463f1; color: white; padding: 12px 30px; text-decoration: none; border-radius: 6px; display: inline-block;\">
                Accéder au tableau de bord
            </a>
        </p>
        
        <p style=\"color: #666; font-size: 14px;\">
            Pour toute question, contactez notre support à 
            <a href=\"mailto:";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["support_email"]) || array_key_exists("support_email", $context) ? $context["support_email"] : (function () { throw new RuntimeError('Variable "support_email" does not exist.', 37, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["support_email"]) || array_key_exists("support_email", $context) ? $context["support_email"] : (function () { throw new RuntimeError('Variable "support_email" does not exist.', 37, $this->source); })()), "html", null, true);
        yield "</a>.
        </p>
        
        <hr style=\"border: none; border-top: 1px solid #eee; margin: 30px 0;\">
        
        <p style=\"color: #999; font-size: 12px; text-align: center;\">
            ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["app_name"]) || array_key_exists("app_name", $context) ? $context["app_name"] : (function () { throw new RuntimeError('Variable "app_name" does not exist.', 43, $this->source); })()), "html", null, true);
        yield " - Tous droits réservés
        </p>
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
        return "emails/company_activated.html.twig";
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
        return array (  115 => 43,  104 => 37,  93 => 29,  82 => 21,  78 => 20,  74 => 19,  67 => 15,  60 => 11,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Votre compte est activé</title>
</head>
<body style=\"font-family: Arial, sans-serif; background: #f9fafb; padding: 30px;\">
    <div style=\"max-width: 600px; margin: 0 auto; background: white; border-radius: 8px; padding: 40px;\">
        <h1 style=\"color: #0463f1;\">🎉 Votre compte est activé !</h1>
        
        <p>Bonjour <strong>{{ owner.fullName }}</strong>,</p>
        
        <p>
            Nous avons le plaisir de vous informer que le compte de votre entreprise
            <strong>{{ company.companyName }}</strong> a été activé avec succès.
        </p>
        
        <div style=\"background: #f0f7ff; border-left: 4px solid #0463f1; padding: 20px; margin: 20px 0;\">
            <p style=\"margin: 0;\"><strong>Numéro d'abonnement :</strong> {{ subscription_number }}</p>
            <p style=\"margin: 10px 0 0 0;\"><strong>Plan actuel :</strong> {{ company.currentPlanLabel }}</p>
            <p style=\"margin: 10px 0 0 0;\"><strong>Date d'activation :</strong> {{ \"now\"|date(\"d/m/Y H:i\") }}</p>
        </div>
        
        <p>
            Vous pouvez dès maintenant accéder à votre tableau de bord :
        </p>
        
        <p style=\"text-align: center; margin: 30px 0;\">
            <a href=\"{{ dashboard_url }}\" 
               style=\"background: #0463f1; color: white; padding: 12px 30px; text-decoration: none; border-radius: 6px; display: inline-block;\">
                Accéder au tableau de bord
            </a>
        </p>
        
        <p style=\"color: #666; font-size: 14px;\">
            Pour toute question, contactez notre support à 
            <a href=\"mailto:{{ support_email }}\">{{ support_email }}</a>.
        </p>
        
        <hr style=\"border: none; border-top: 1px solid #eee; margin: 30px 0;\">
        
        <p style=\"color: #999; font-size: 12px; text-align: center;\">
            {{ app_name }} - Tous droits réservés
        </p>
    </div>
</body>
</html>", "emails/company_activated.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\company_activated.html.twig");
    }
}
