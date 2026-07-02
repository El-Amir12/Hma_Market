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

/* customer/auth/login.html.twig */
class __TwigTemplate_22564e53fbd7016f58bd7e99e7f02a13 extends Template
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
        yield "Connexion client - HMA Market";
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
                    <i class=\"fas fa-store fa-3x text-primary mb-3\"></i>
                    <h3 class=\"fw-bold\">Connexion</h3>
                    <p class=\"text-muted\">Connectez-vous pour accéder à votre compte</p>
                </div>

                ";
        // line 17
        if ((($tmp = ($context["error"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "                    <div class=\"alert alert-danger rounded-3\">
                        <i class=\"fas fa-exclamation-circle me-2\"></i>
                        ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 20), CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 20), "security"), "html", null, true);
            yield "
                    </div>
                ";
        }
        // line 23
        yield "
                <form method=\"post\" action=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer_login");
        yield "\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                    <div class=\"mb-3\">
                        <label class=\"form-label fw-semibold\">Email</label>
                        <input type=\"email\" 
                               name=\"email\" 
                               class=\"form-control form-control-lg\" 
                               value=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["last_username"] ?? null), "html", null, true);
        yield "\" 
                               placeholder=\"votre@email.com\"
                               required 
                               autofocus>
                    </div>

                    <div class=\"mb-3\">
                        <label class=\"form-label fw-semibold\">Mot de passe</label>
                        <input type=\"password\" 
                               name=\"password\" 
                               class=\"form-control form-control-lg\" 
                               placeholder=\"••••••••\"
                               required>
                    </div>

                    <div class=\"mb-3 d-flex justify-content-between align-items-center\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" 
                                   name=\"_remember_me\" 
                                   class=\"form-check-input\" 
                                   id=\"rememberMe\">
                            <label class=\"form-check-label\" for=\"rememberMe\">Se souvenir de moi</label>
                        </div>
                        <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer_forgot_password");
        yield "\" class=\"text-decoration-none small\">
                            Mot de passe oublié ?
                        </a>
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary w-100 btn-lg\">
                        <i class=\"fas fa-sign-in-alt me-2\"></i>Se connecter
                    </button>

                    <div class=\"text-center mt-3\">
                        <p class=\"text-muted small\">
                            Pas encore de compte ? 
                            <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer_register");
        yield "\" class=\"text-primary fw-semibold\">
                                Inscrivez-vous
                            </a>
                        </p>
                    </div>
                </form>
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
        return "customer/auth/login.html.twig";
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
        return array (  152 => 67,  137 => 55,  111 => 32,  101 => 25,  97 => 24,  94 => 23,  88 => 20,  84 => 18,  82 => 17,  70 => 7,  63 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "customer/auth/login.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\customer\\auth\\login.html.twig");
    }
}
