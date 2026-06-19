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

/* emails/supplier_resolution_notification.html.twig */
class __TwigTemplate_969c9914900f2aac171f3ad47dec84fd extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base_email.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/supplier_resolution_notification.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/supplier_resolution_notification.html.twig"));

        $this->parent = $this->load("base_email.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Résolution de l'avoir n°";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 4, $this->source); })()), "creditNoteNumber", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;\">
    <tr>
        <td style=\"padding: 20px;\">
            <div style=\"text-align: center; padding-bottom: 20px; border-bottom: 2px solid #e9ecef;\">
                <h1 style=\"color: #17a2b8; margin: 0;\">
                    <i class=\"fas fa-file-invoice-dollar\"></i> Avoir n°";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 12, $this->source); })()), "creditNoteNumber", [], "any", false, false, false, 12), "html", null, true);
        yield "
                </h1>
                <p style=\"color: #6c757d; margin: 10px 0 0;\">
                    Dossier résolu
                </p>
            </div>

            <div style=\"padding: 20px 0;\">
                <p style=\"font-size: 16px; line-height: 1.5;\">
                    Bonjour <strong>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        yield "</strong>,
                </p>
                <p style=\"font-size: 16px; line-height: 1.5;\">
                    Le dossier concernant l'avoir <strong>n°";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 24, $this->source); })()), "creditNoteNumber", [], "any", false, false, false, 24), "html", null, true);
        yield "</strong> 
                    a été résolu.
                </p>

                <div style=\"background-color: #d1ecf1; border-left: 4px solid #17a2b8; padding: 15px; margin: 20px 0; border-radius: 8px;\">
                    <h3 style=\"margin-top: 0; color: #0c5460;\">
                        <i class=\"fas fa-check-circle\"></i> Résolution finale
                    </h3>
                    <table width=\"100%\" style=\"font-size: 14px;\">
                        <tr>
                            <td style=\"padding: 5px 0;\"><strong>Montant récupéré :</strong></td>
                            <td style=\"padding: 5px 0; color: #28a745; font-weight: bold;\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 35, $this->source); })()), "recoveredAmount", [], "any", false, false, false, 35)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 35, $this->source); })()), "recoveredAmount", [], "any", false, false, false, 35)) : (0)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 35, $this->source); })()), "hmaService", [], "any", false, false, false, 35)), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <td style=\"padding: 5px 0;\"><strong>Montant perdu :</strong></td>
                            <td style=\"padding: 5px 0; color: #dc3545;\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 39, $this->source); })()), "lostAmount", [], "any", false, false, false, 39)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 39, $this->source); })()), "lostAmount", [], "any", false, false, false, 39)) : (0)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 39, $this->source); })()), "hmaService", [], "any", false, false, false, 39)), "html", null, true);
        yield "</td>
                        </tr>
                        ";
        // line 41
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 41, $this->source); })()), "resolutionNotes", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "                        <tr>
                            <td style=\"padding: 5px 0;\"><strong>Notes :</strong></td>
                            <td style=\"padding: 5px 0;\">";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 44, $this->source); })()), "resolutionNotes", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                        </tr>
                        ";
        }
        // line 47
        yield "                    </table>
                </div>

                <p style=\"font-size: 14px; color: #6c757d; text-align: center;\">
                    Merci pour votre collaboration.
                </p>
            </div>
        </td>
    </tr>
</table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/supplier_resolution_notification.html.twig";
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
        return array (  164 => 47,  158 => 44,  154 => 42,  152 => 41,  147 => 39,  140 => 35,  126 => 24,  120 => 21,  108 => 12,  101 => 7,  88 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/emails/supplier_resolution_notification.html.twig #}
{% extends 'base_email.html.twig' %}

{% block title %}Résolution de l'avoir n°{{ creditNote.creditNoteNumber }}{% endblock %}

{% block body %}
<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;\">
    <tr>
        <td style=\"padding: 20px;\">
            <div style=\"text-align: center; padding-bottom: 20px; border-bottom: 2px solid #e9ecef;\">
                <h1 style=\"color: #17a2b8; margin: 0;\">
                    <i class=\"fas fa-file-invoice-dollar\"></i> Avoir n°{{ creditNote.creditNoteNumber }}
                </h1>
                <p style=\"color: #6c757d; margin: 10px 0 0;\">
                    Dossier résolu
                </p>
            </div>

            <div style=\"padding: 20px 0;\">
                <p style=\"font-size: 16px; line-height: 1.5;\">
                    Bonjour <strong>{{ supplier.name }}</strong>,
                </p>
                <p style=\"font-size: 16px; line-height: 1.5;\">
                    Le dossier concernant l'avoir <strong>n°{{ creditNote.creditNoteNumber }}</strong> 
                    a été résolu.
                </p>

                <div style=\"background-color: #d1ecf1; border-left: 4px solid #17a2b8; padding: 15px; margin: 20px 0; border-radius: 8px;\">
                    <h3 style=\"margin-top: 0; color: #0c5460;\">
                        <i class=\"fas fa-check-circle\"></i> Résolution finale
                    </h3>
                    <table width=\"100%\" style=\"font-size: 14px;\">
                        <tr>
                            <td style=\"padding: 5px 0;\"><strong>Montant récupéré :</strong></td>
                            <td style=\"padding: 5px 0; color: #28a745; font-weight: bold;\">{{ (creditNote.recoveredAmount ?: 0)|price_with_currency(creditNote.hmaService) }}</td>
                        </tr>
                        <tr>
                            <td style=\"padding: 5px 0;\"><strong>Montant perdu :</strong></td>
                            <td style=\"padding: 5px 0; color: #dc3545;\">{{ (creditNote.lostAmount ?: 0)|price_with_currency(creditNote.hmaService) }}</td>
                        </tr>
                        {% if creditNote.resolutionNotes %}
                        <tr>
                            <td style=\"padding: 5px 0;\"><strong>Notes :</strong></td>
                            <td style=\"padding: 5px 0;\">{{ creditNote.resolutionNotes }}</td>
                        </tr>
                        {% endif %}
                    </table>
                </div>

                <p style=\"font-size: 14px; color: #6c757d; text-align: center;\">
                    Merci pour votre collaboration.
                </p>
            </div>
        </td>
    </tr>
</table>
{% endblock %}", "emails/supplier_resolution_notification.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\supplier_resolution_notification.html.twig");
    }
}
