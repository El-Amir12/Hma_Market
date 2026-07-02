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

/* payment/error.html.twig */
class __TwigTemplate_c0a25e772fb4232c376c74b8456b2e58 extends Template
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
        yield "Erreur de paiement - HMA Market";
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
                        <div class=\"mx-auto bg-danger bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center\" style=\"width: 80px; height: 80px;\">
                            <i class=\"fas fa-times-circle fa-4x text-danger\"></i>
                        </div>
                    </div>
                    <h2 class=\"h3 mb-3 fw-bold\">Erreur de paiement</h2>
                    <p class=\"text-muted mb-4\">
                        Une erreur est survenue lors du traitement de votre paiement.
                    </p>
                    ";
        // line 21
        if ((($tmp = ($context["error"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "                        <div class=\"alert alert-danger\">
                            <i class=\"fas fa-exclamation-circle me-2\"></i>
                            ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error"] ?? null), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 27
        yield "                    <div class=\"d-flex gap-3 justify-content-center mt-3\">
                        <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_new");
        yield "\" class=\"btn btn-primary\">
                            <i class=\"fas fa-plus me-2\"></i> Nouvelle demande
                        </a>
                        <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_contact_super_admin");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-headset me-2\"></i> Contacter le support
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
        return "payment/error.html.twig";
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
        return array (  107 => 31,  101 => 28,  98 => 27,  92 => 24,  88 => 22,  86 => 21,  70 => 7,  63 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "payment/error.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\payment\\error.html.twig");
    }
}
