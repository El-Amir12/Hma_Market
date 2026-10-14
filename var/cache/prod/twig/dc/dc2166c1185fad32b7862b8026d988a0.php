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
class __TwigTemplate_a50ea45f530e2d7508b299d48609cf49 extends Template
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
    <title>Votre compte est activé</title>
</head>
<body style=\"font-family: Arial, sans-serif; background: #f9fafb; padding: 30px;\">
    <div style=\"max-width: 600px; margin: 0 auto; background: white; border-radius: 8px; padding: 40px;\">
        <h1 style=\"color: #0463f1;\">🎉 Votre compte est activé !</h1>
        
        <p>Bonjour <strong>";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["owner"] ?? null), "fullName", [], "any", false, false, false, 11), "html", null, true);
        yield "</strong>,</p>
        
        <p>
            Nous avons le plaisir de vous informer que le compte de votre entreprise
            <strong>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyName", [], "any", false, false, false, 15), "html", null, true);
        yield "</strong> a été activé avec succès.
        </p>
        
        <div style=\"background: #f0f7ff; border-left: 4px solid #0463f1; padding: 20px; margin: 20px 0;\">
            <p style=\"margin: 0;\"><strong>Numéro d'abonnement :</strong> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscription_number"] ?? null), "html", null, true);
        yield "</p>
            <p style=\"margin: 10px 0 0 0;\"><strong>Plan actuel :</strong> ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "currentPlanLabel", [], "any", false, false, false, 20), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["dashboard_url"] ?? null), "html", null, true);
        yield "\" 
               style=\"background: #0463f1; color: white; padding: 12px 30px; text-decoration: none; border-radius: 6px; display: inline-block;\">
                Accéder au tableau de bord
            </a>
        </p>
        
        <p style=\"color: #666; font-size: 14px;\">
            Pour toute question, contactez notre support à 
            <a href=\"mailto:";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["support_email"] ?? null), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["support_email"] ?? null), "html", null, true);
        yield "</a>.
        </p>
        
        <hr style=\"border: none; border-top: 1px solid #eee; margin: 30px 0;\">
        
        <p style=\"color: #999; font-size: 12px; text-align: center;\">
            ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["app_name"] ?? null), "html", null, true);
        yield " - Tous droits réservés
        </p>
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
        return array (  109 => 43,  98 => 37,  87 => 29,  76 => 21,  72 => 20,  68 => 19,  61 => 15,  54 => 11,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emails/company_activated.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\company_activated.html.twig");
    }
}
