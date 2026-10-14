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

/* marketplace/auth/check_email.html.twig */
class __TwigTemplate_26ce1143c1aafea8065635f5abfc92e7 extends Template
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
        return "base_marketplace.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base_marketplace.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Vérifiez votre email - HMA Market";
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
        yield "<div class=\"row justify-content-center mt-5\">
    <div class=\"col-md-6 col-lg-5\">
        <div class=\"card shadow-lg border-0 rounded-4\">
            <div class=\"card-body p-5 text-center\">
                <i class=\"fas fa-envelope fa-4x text-success mb-4\"></i>
                
                <h3 class=\"fw-bold mb-3\">Email envoyé !</h3>
                
                <p class=\"text-muted mb-4\">
                    Un email de réinitialisation a été envoyé à votre adresse.<br>
                    Veuillez vérifier votre boîte de réception et suivre les instructions.
                </p>

                <div class=\"alert alert-info rounded-3\">
                    <i class=\"fas fa-lightbulb me-2\"></i>
                    <small>Si vous ne recevez pas l'email dans quelques minutes, vérifiez vos spams.</small>
                </div>

                <div class=\"d-grid gap-2\">
                    <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_login");
        yield "\" class=\"btn btn-primary py-3 fw-semibold\">
                        <i class=\"fas fa-sign-in-alt me-2\"></i>Retour à la connexion
                    </a>
                    <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_forgot_password");
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-redo me-2\"></i>Renvoyer l'email
                    </a>
                </div>

                <hr class=\"my-4\">

                <p class=\"small text-muted mb-0\">
                    <i class=\"fas fa-clock me-1\"></i>
                    Le lien de réinitialisation expire dans 1 heure
                </p>
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
        return "marketplace/auth/check_email.html.twig";
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
        return array (  97 => 29,  91 => 26,  70 => 7,  63 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketplace/auth/check_email.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\auth\\check_email.html.twig");
    }
}
