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

/* payment/success.html.twig */
class __TwigTemplate_0a3c7d3462dd9c761672813b43c17d0d extends Template
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
        return "base-auth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base-auth.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Paiement confirmé - HMA Market";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8 col-lg-6\">
            <div class=\"card border-0 shadow-lg text-center\">
                <div class=\"card-body p-5\">
                    <div class=\"mb-4\">
                        <div class=\"mx-auto bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center\" style=\"width: 80px; height: 80px;\">
                            <i class=\"fas fa-check-circle fa-4x text-success\"></i>
                        </div>
                    </div>
                    <h2 class=\"h3 mb-3 fw-bold\">Paiement confirmé !</h2>
                    <p class=\"text-muted mb-4\">
                        Votre paiement a été reçu avec succès. Votre analyse sera disponible sous 5 à 7 jours ouvrés.
                    </p>
                    ";
        // line 21
        if ((($tmp = ($context["analysis"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "                        <div class=\"alert alert-info\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            Analyse N° <strong>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "requestNumber", [], "any", false, false, false, 24), "html", null, true);
            yield "</strong>
                        </div>
                        <a href=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "id", [], "any", false, false, false, 26)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                            <i class=\"fas fa-eye me-2\"></i> Suivre mon analyse
                        </a>
                    ";
        } else {
            // line 30
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_index");
            yield "\" class=\"btn btn-primary\">
                            <i class=\"fas fa-chart-line me-2\"></i> Voir mes analyses
                        </a>
                    ";
        }
        // line 34
        yield "                    <div class=\"mt-4\">
                        <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-home me-1\"></i> Retour à l'accueil
                        </a>
                    </div>
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
        return "payment/success.html.twig";
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
        return array (  115 => 35,  112 => 34,  104 => 30,  97 => 26,  92 => 24,  88 => 22,  86 => 21,  70 => 7,  63 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "payment/success.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\payment\\success.html.twig");
    }
}
