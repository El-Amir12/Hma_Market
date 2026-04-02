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

/* emails/quota_deactivation.html.twig */
class __TwigTemplate_217a731413c2aae409de22fdace2324e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/quota_deactivation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/quota_deactivation.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Compte désactivé - ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["app_name"]) || array_key_exists("app_name", $context) ? $context["app_name"] : (function () { throw new RuntimeError('Variable "app_name" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "</title>
</head>
<body>
    <h1>Compte désactivé</h1>
    <p>Bonjour ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "fullName", [], "any", false, false, false, 10), "html", null, true);
        yield ",</p>
    <p>Votre compte a été désactivé car votre entreprise a atteint la limite d'utilisateurs autorisés par votre plan d'abonnement actuel.</p>
    <p>Pour rétablir votre accès, veuillez contacter l'administrateur de votre entreprise ou envisager une mise à niveau de l'abonnement.</p>
    <p>Si vous pensez qu'il s'agit d'une erreur, veuillez contacter notre support à <a href=\"mailto:";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["support_email"]) || array_key_exists("support_email", $context) ? $context["support_email"] : (function () { throw new RuntimeError('Variable "support_email" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["support_email"]) || array_key_exists("support_email", $context) ? $context["support_email"] : (function () { throw new RuntimeError('Variable "support_email" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "</a>.</p>
    <br>
    <p>Cordialement,<br>L'équipe ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["app_name"]) || array_key_exists("app_name", $context) ? $context["app_name"] : (function () { throw new RuntimeError('Variable "app_name" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "</p>
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
        return "emails/quota_deactivation.html.twig";
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
        return array (  74 => 15,  67 => 13,  61 => 10,  54 => 6,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/emails/quota_deactivation.html.twig #}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Compte désactivé - {{ app_name }}</title>
</head>
<body>
    <h1>Compte désactivé</h1>
    <p>Bonjour {{ user.fullName }},</p>
    <p>Votre compte a été désactivé car votre entreprise a atteint la limite d'utilisateurs autorisés par votre plan d'abonnement actuel.</p>
    <p>Pour rétablir votre accès, veuillez contacter l'administrateur de votre entreprise ou envisager une mise à niveau de l'abonnement.</p>
    <p>Si vous pensez qu'il s'agit d'une erreur, veuillez contacter notre support à <a href=\"mailto:{{ support_email }}\">{{ support_email }}</a>.</p>
    <br>
    <p>Cordialement,<br>L'équipe {{ app_name }}</p>
</body>
</html>", "emails/quota_deactivation.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\quota_deactivation.html.twig");
    }
}
