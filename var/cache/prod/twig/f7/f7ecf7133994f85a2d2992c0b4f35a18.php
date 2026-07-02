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

/* subscription/success.html.twig */
class __TwigTemplate_dc7a55833f3f48be348cd2f4fe9b85a0 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Abonnement activé";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"container py-5\">
    <div class=\"text-center mb-5\">
        <div class=\"display-1 text-success mb-4\">
            <i class=\"bi bi-check-circle-fill\"></i>
        </div>
        <h1 class=\"display-4 fw-bold\">Félicitations !</h1>
        <p class=\"lead\">Votre abonnement a été activé avec succès.</p>
    </div>

    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow\">
                <div class=\"card-header bg-primary text-white\">
                    <h5 class=\"mb-0\">Détails de votre abonnement</h5>
                </div>
                <div class=\"card-body\">
                    <table class=\"table table-borderless\">
                        <tr>
                            <th>Plan :</th>
                            <td>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 25), "displayName", [], "any", false, false, false, 25), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th>Période :</th>
                            <td>";
        // line 29
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "billingPeriod", [], "any", false, false, false, 29) == "monthly")) ? ("Mensuel") : ("Annuel"));
        yield "</td>
                        </tr>
                        <tr>
                            <th>Montant :</th>
                            <td>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "subscriptionPlan", [], "any", false, false, false, 33), "priceMonthly", [], "any", false, false, false, 33), 0, ",", " "), "html", null, true);
        yield " FCFA / mois</td>
                        </tr>
                        <tr>
                            <th>Date de début :</th>
                            <td>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "startsAt", [], "any", false, false, false, 37), "d/m/Y"), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th>Date de fin :</th>
                            <td>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "endsAt", [], "any", false, false, false, 41), "d/m/Y"), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th>Numéro d'abonnement :</th>
                            <td><strong>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "hmaService", [], "any", false, false, false, 45), "subscriptionNumber", [], "any", false, false, false, 45), "html", null, true);
        yield "</strong></td>
                        </tr>
                    </table>
                </div>
                <div class=\"card-footer text-center\">
                    <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"btn btn-primary\">Accéder à mon tableau de bord</a>
                </div>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "subscription/success.html.twig";
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
        return array (  134 => 50,  126 => 45,  119 => 41,  112 => 37,  105 => 33,  98 => 29,  91 => 25,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "subscription/success.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\subscription\\success.html.twig");
    }
}
