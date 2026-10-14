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

/* marketplace/auth/change_password.html.twig */
class __TwigTemplate_9d7187bf58168b59e9d2fe64d5b8f398 extends Template
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
        yield "Changer mon mot de passe - HMA Market";
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
                    <h3 class=\"fw-bold\">
                        ";
        // line 14
        if ((($tmp = ($context["mustChangePassword"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "                            🔒 Première connexion
                        ";
        } else {
            // line 17
            yield "                            Changer mon mot de passe
                        ";
        }
        // line 19
        yield "                    </h3>
                    <p class=\"text-muted\">
                        ";
        // line 21
        if ((($tmp = ($context["mustChangePassword"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "                            Vous devez définir un nouveau mot de passe pour sécuriser votre compte.
                        ";
        } else {
            // line 24
            yield "                            Sécurisez votre compte avec un nouveau mot de passe
                        ";
        }
        // line 26
        yield "                    </p>
                </div>

                ";
        // line 30
        yield "                ";
        if ((($tmp = ($context["mustChangePassword"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "                    <div class=\"alert alert-warning rounded-3 mb-4\" role=\"alert\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        <strong>🔒 Mot de passe temporaire :</strong>
                        <br>Vous utilisez un mot de passe temporaire. Veuillez en créer un nouveau.
                    </div>
                ";
        }
        // line 37
        yield "
                ";
        // line 39
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 40
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 41
                yield "                        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show rounded-3\" role=\"alert\">
                            <i class=\"fas fa-";
                // line 42
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
                // line 43
                yield $context["message"];
                yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "
                ";
        // line 49
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["changePasswordForm"] ?? null), 'form_start', ["attr" => ["class" => "mt-3"]]);
        yield "
                    ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["changePasswordForm"] ?? null), 'errors');
        yield "

                    ";
        // line 53
        yield "                    ";
        if ((($tmp =  !($context["mustChangePassword"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "                        <div class=\"mb-4\">
                            <label class=\"form-label fw-semibold\">
                                <i class=\"fas fa-lock me-1\"></i>Ancien mot de passe
                            </label>
                            ";
            // line 58
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["changePasswordForm"] ?? null), "oldPassword", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "••••••••"]]);
            // line 60
            yield "
                            ";
            // line 61
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["changePasswordForm"] ?? null), "oldPassword", [], "any", false, false, false, 61), 'errors');
            yield "
                        </div>
                    ";
        }
        // line 64
        yield "
                    ";
        // line 66
        yield "                    <div class=\"mb-4\">
                        <label class=\"form-label fw-semibold\">
                            <i class=\"fas fa-key me-1\"></i>Nouveau mot de passe
                        </label>
                        
                        ";
        // line 71
        if ((($tmp = ($context["mustChangePassword"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 72
            yield "                            ";
            // line 73
            yield "                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["changePasswordForm"] ?? null), "newPassword", [], "any", false, false, false, 73), "first", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Minimum 8 caractères"]]);
            // line 75
            yield "
                        ";
        } else {
            // line 77
            yield "                            ";
            // line 78
            yield "                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["changePasswordForm"] ?? null), "newPassword", [], "any", false, false, false, 78), "first", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Minimum 8 caractères"]]);
            // line 80
            yield "
                        ";
        }
        // line 82
        yield "                        
                        <div class=\"form-text text-muted small mt-1\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Minimum 8 caractères avec une majuscule, une minuscule et un chiffre
                        </div>
                        ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["changePasswordForm"] ?? null), "newPassword", [], "any", false, false, false, 87), "first", [], "any", false, false, false, 87), 'errors');
        yield "
                    </div>

                    ";
        // line 91
        yield "                    <div class=\"mb-4\">
                        <label class=\"form-label fw-semibold\">
                            <i class=\"fas fa-check-circle me-1\"></i>Confirmer le nouveau mot de passe
                        </label>
                        
                        ";
        // line 96
        if ((($tmp = ($context["mustChangePassword"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 97
            yield "                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["changePasswordForm"] ?? null), "newPassword", [], "any", false, false, false, 97), "second", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Confirmez votre nouveau mot de passe"]]);
            // line 99
            yield "
                        ";
        } else {
            // line 101
            yield "                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["changePasswordForm"] ?? null), "newPassword", [], "any", false, false, false, 101), "second", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Confirmez votre nouveau mot de passe"]]);
            // line 103
            yield "
                        ";
        }
        // line 105
        yield "                        
                        ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["changePasswordForm"] ?? null), "newPassword", [], "any", false, false, false, 106), "second", [], "any", false, false, false, 106), 'errors');
        yield "
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary w-100 btn-lg\">
                        <i class=\"fas fa-save me-2\"></i>
                        ";
        // line 111
        if ((($tmp = ($context["mustChangePassword"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 112
            yield "                            Définir mon mot de passe
                        ";
        } else {
            // line 114
            yield "                            Changer le mot de passe
                        ";
        }
        // line 116
        yield "                    </button>

                    <div class=\"text-center mt-3\">
                        <a href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_home");
        yield "\" class=\"text-decoration-none small\">
                            <i class=\"fas fa-arrow-left me-1\"></i>Retour à l'accueil
                        </a>
                    </div>
                ";
        // line 123
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["changePasswordForm"] ?? null), 'form_end');
        yield "

                <hr class=\"my-4\">

                <div class=\"text-center\">
                    <p class=\"small text-muted mb-0\">
                        <i class=\"fas fa-shield-alt me-1 text-success\"></i>
                        Votre mot de passe est sécurisé et chiffré
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .alert {
        border-left: 4px solid;
        margin-bottom: 1.5rem;
    }
    .alert-warning {
        border-left-color: #ffc107;
    }
    .alert-danger {
        border-left-color: #dc3545;
    }
    .alert-success {
        border-left-color: #28a745;
    }
    .alert-info {
        border-left-color: #17a2b8;
    }
    .btn-close:focus {
        box-shadow: none;
    }
    .mb-4 {
        margin-bottom: 1.5rem !important;
    }
    .form-control-lg {
        font-size: 1rem;
        padding: 0.75rem 1rem;
        border-radius: 0.5rem;
        border: 1px solid #dee2e6;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        background: #f8f9fa;
        width: 100%;
        display: block;
    }
    .form-control-lg:hover {
        background: #ffffff;
    }
    .form-control-lg:focus {
        background: #ffffff;
        border-color: #0463f1;
        box-shadow: 0 0 0 0.2rem rgba(4, 99, 241, 0.15);
    }
    .form-text {
        font-size: 0.8rem;
        color: #6c757d;
        margin-top: 0.25rem;
    }
    .form-label {
        font-size: 0.9rem;
        color: #2c3e50;
        margin-bottom: 0.5rem;
        display: block;
        font-weight: 600;
    }
    .btn-primary {
        background: #0463f1;
        border: none;
        transition: all 0.3s;
        border-radius: 0.5rem;
        padding: 0.75rem 1rem;
        font-size: 1rem;
    }
    .btn-primary:hover {
        background: #0352c9;
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(4, 99, 241, 0.25);
    }
    .card {
        background: #ffffff;
        border-radius: 1rem;
    }
    .card-body {
        padding: 2.5rem !important;
    }
    @media (max-width: 576px) {
        .card-body {
            padding: 1.5rem !important;
        }
    }
</style>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketplace/auth/change_password.html.twig";
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
        return array (  296 => 123,  289 => 119,  284 => 116,  280 => 114,  276 => 112,  274 => 111,  266 => 106,  263 => 105,  259 => 103,  256 => 101,  252 => 99,  249 => 97,  247 => 96,  240 => 91,  234 => 87,  227 => 82,  223 => 80,  220 => 78,  218 => 77,  214 => 75,  211 => 73,  209 => 72,  207 => 71,  200 => 66,  197 => 64,  191 => 61,  188 => 60,  186 => 58,  180 => 54,  177 => 53,  172 => 50,  168 => 49,  165 => 48,  159 => 47,  149 => 43,  137 => 42,  132 => 41,  127 => 40,  122 => 39,  119 => 37,  111 => 31,  108 => 30,  103 => 26,  99 => 24,  95 => 22,  93 => 21,  89 => 19,  85 => 17,  81 => 15,  79 => 14,  70 => 7,  63 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketplace/auth/change_password.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\auth\\change_password.html.twig");
    }
}
