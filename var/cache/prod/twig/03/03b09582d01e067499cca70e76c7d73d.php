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

/* marketplace/auth/login.html.twig */
class __TwigTemplate_69f7159a468cfa413a501c74ee0723c9 extends Template
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
        // line 18
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 19
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 20
                yield "                        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show rounded-3\" role=\"alert\">
                            <i class=\"fas fa-";
                // line 21
                if (($context["label"] == "success")) {
                    yield "check-circle";
                } elseif (($context["label"] == "danger")) {
                    yield "exclamation-circle";
                } elseif (($context["label"] == "warning")) {
                    yield "exclamation-triangle";
                } else {
                    yield "info-circle";
                }
                yield " me-2\"></i>
                            ";
                // line 22
                yield $context["message"];
                yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
                ";
        // line 29
        yield "                ";
        if ((($tmp = ($context["error"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "                    <div class=\"alert alert-danger rounded-3\">
                        <i class=\"fas fa-exclamation-circle me-2\"></i>
                        ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 32), CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 32), "security"), "html", null, true);
            yield "
                    </div>
                ";
        }
        // line 35
        yield "
                ";
        // line 37
        yield "                ";
        if ((($context["error"] ?? null) && CoreExtension::inFilter("activer", Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 37))))) {
            // line 38
            yield "                    <div class=\"alert alert-warning rounded-3\">
                        <i class=\"fas fa-envelope me-2\"></i>
                        <strong>Compte non activé :</strong> Vérifiez votre email ou 
                        <a href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_resend_verification", ["email" => ($context["last_username"] ?? null)]), "html", null, true);
            yield "\" class=\"alert-link fw-bold\">
                            renvoyer l'email de vérification
                        </a>
                    </div>
                ";
        }
        // line 46
        yield "
                <form method=\"post\" action=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_login");
        yield "\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                    <div class=\"mb-3\">
                        <label class=\"form-label fw-semibold\">Email</label>
                        <input type=\"email\" 
                               name=\"email\" 
                               class=\"form-control form-control-lg\" 
                               value=\"";
        // line 55
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
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_forgot_password");
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
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_register");
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
        return "marketplace/auth/login.html.twig";
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
        return array (  218 => 90,  203 => 78,  177 => 55,  167 => 48,  163 => 47,  160 => 46,  152 => 41,  147 => 38,  144 => 37,  141 => 35,  135 => 32,  131 => 30,  128 => 29,  125 => 27,  119 => 26,  109 => 22,  97 => 21,  92 => 20,  87 => 19,  82 => 18,  70 => 7,  63 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketplace/auth/login.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\auth\\login.html.twig");
    }
}
