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

/* customer/auth/check_email.html.twig */
class __TwigTemplate_4428f3e7c50dd2ecc5df46573f90f280 extends Template
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
        return "base_customer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base_customer.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Email envoyé - HMA Market";
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
                <div class=\"mb-4\">
                    <i class=\"fas fa-envelope fa-4x text-primary mb-3\"></i>
                    <h3 class=\"fw-bold\">Email envoyé !</h3>
                    <p class=\"text-muted\">
                        Un email de réinitialisation vous a été envoyé.<br>
                        Vérifiez votre boîte de réception et vos spams.
                    </p>
                </div>

                <div class=\"alert alert-info rounded-3\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Le lien de réinitialisation est valable pendant 1 heure.
                </div>

                <div class=\"mt-4\">
                    <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer_login");
        yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-arrow-left me-2\"></i>Retour à la connexion
                    </a>
                </div>

                <div class=\"mt-3\">
                    <p class=\"text-muted small\">
                        Vous n'avez pas reçu l'email ? 
                        <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer_forgot_password");
        yield "\" class=\"text-decoration-none\">
                            Renvoyer
                        </a>
                    </p>
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
        return "customer/auth/check_email.html.twig";
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
        return array (  102 => 34,  91 => 26,  70 => 7,  63 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "customer/auth/check_email.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\customer\\auth\\check_email.html.twig");
    }
}
