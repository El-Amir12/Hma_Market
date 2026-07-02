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

/* customer/auth/forgot_password.html.twig */
class __TwigTemplate_0e5ef98d1e264245cc7b0834a56e0414 extends Template
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
        yield "Mot de passe oublié - HMA Market";
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
            <div class=\"card-body p-5\">
                <div class=\"text-center mb-4\">
                    <i class=\"fas fa-key fa-3x text-primary mb-3\"></i>
                    <h3 class=\"fw-bold\">Mot de passe oublié</h3>
                    <p class=\"text-muted\">Entrez votre email pour recevoir un lien de réinitialisation</p>
                </div>

                ";
        // line 17
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requestForm"] ?? null), 'form_start');
        yield "
                    <div class=\"mb-3\">
                        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["requestForm"] ?? null), "email", [], "any", false, false, false, 19), 'label');
        yield "
                        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["requestForm"] ?? null), "email", [], "any", false, false, false, 20), 'widget');
        yield "
                        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["requestForm"] ?? null), "email", [], "any", false, false, false, 21), 'errors');
        yield "
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary w-100 btn-lg\">
                        <i class=\"fas fa-paper-plane me-2\"></i>Envoyer le lien
                    </button>

                    <div class=\"text-center mt-3\">
                        <p class=\"text-muted small\">
                            <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer_login");
        yield "\" class=\"text-decoration-none\">
                                <i class=\"fas fa-arrow-left me-1\"></i>Retour à la connexion
                            </a>
                        </p>
                    </div>
                ";
        // line 35
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requestForm"] ?? null), 'form_end');
        yield "
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
        return "customer/auth/forgot_password.html.twig";
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
        return array (  115 => 35,  107 => 30,  95 => 21,  91 => 20,  87 => 19,  82 => 17,  70 => 7,  63 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "customer/auth/forgot_password.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\customer\\auth\\forgot_password.html.twig");
    }
}
