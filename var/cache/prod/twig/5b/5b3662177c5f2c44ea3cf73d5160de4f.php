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

/* reset_password/check_email.html.twig */
class __TwigTemplate_1f3dce0cfda1479d718797e459ee228e extends Template
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
        return "base-auth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base-auth.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Email envoyé - HMA Market";
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
        yield "<div class=\"row justify-content-center\">
    <div class=\"col-lg-6\">
        <div class=\"form-container text-center\">
            <div class=\"mb-4\">
                <div class=\"bg-success bg-opacity-10 rounded-circle d-inline-flex p-4 mb-3\">
                    <i class=\"fas fa-envelope-open-text text-success fa-3x\"></i>
                </div>
                <h2 class=\"fw-bold mb-3\">Email envoyé !</h2>
                <p class=\"text-muted mb-4\">
                    Si un compte existe avec cette adresse email, vous recevrez un lien pour réinitialiser votre mot de passe.
                </p>
                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Le lien expirera dans <strong>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["resetToken"] ?? null), "expirationMessageKey", [], "any", false, false, false, 19), CoreExtension::getAttribute($this->env, $this->source, ($context["resetToken"] ?? null), "expirationMessageData", [], "any", false, false, false, 19), "ResetPasswordBundle"), "html", null, true);
        yield "</strong>.
                </div>
                
            </div>
            
            <hr class=\"my-4\">
            
            <div class=\"text-center\">
                <p class=\"mb-3\">
                    <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-sign-in-alt me-2\"></i>Retour à la connexion
                    </a>
                </p>
                <p class=\"small text-muted mb-0\">
                    Vous n'avez pas reçu l'email ? 
                    <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\" class=\"text-decoration-none\">
                        Renvoyer
                    </a>
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
        return "reset_password/check_email.html.twig";
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
        return array (  106 => 34,  97 => 28,  85 => 19,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reset_password/check_email.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\reset_password\\check_email.html.twig");
    }
}
