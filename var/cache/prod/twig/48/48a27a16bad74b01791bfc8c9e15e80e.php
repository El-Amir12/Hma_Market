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

/* reset_password/reset_password.html.twig */
class __TwigTemplate_2794d98fed4cccd994b96b11d6a96d77 extends Template
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
        yield "Nouveau mot de passe - HMA Market";
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
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8 col-lg-6\">
            <div class=\"card shadow-lg\">
                <div class=\"card-header bg-primary text-white text-center py-4\">
                    <h3 class=\"mb-0\">
                        <i class=\"fas fa-lock me-2\"></i>Créer un nouveau mot de passe
                    </h3>
                    <p class=\"mb-0 mt-2 opacity-75\">Veuillez saisir votre nouveau mot de passe ci-dessous</p>
                </div>
                
                <div class=\"card-body p-4 p-md-5\">
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["reset_password_error"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 19
            yield "                        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                            <i class=\"fas fa-exclamation-triangle me-2\"></i>
                            ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "                    
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            yield "                        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                            <i class=\"fas fa-exclamation-circle me-2\"></i>
                            ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "                    
                    <div class=\"alert alert-info mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"me-3\">
                                <i class=\"fas fa-user-circle fa-2x\"></i>
                            </div>
                            <div>
                                <strong>Bonjour !</strong><br>
                                Vous allez maintenant définir votre nouveau mot de passe.
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 47
        yield "                    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["resetForm"] ?? null), 'form_start', ["attr" => ["id" => "password-reset-form"]]);
        yield "
                    
                    ";
        // line 50
        yield "                    <div class=\"mb-4\">
                        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["resetForm"] ?? null), "plainPassword", [], "any", false, false, false, 51), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Nouveau mot de passe *"]);
        // line 53
        yield "
                        <div class=\"input-group\">
                            <span class=\"input-group-text\">
                                <i class=\"fas fa-lock\"></i>
                            </span>
                            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["resetForm"] ?? null), "plainPassword", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Minimum 8 caractères", "autocomplete" => "new-password"]]);
        // line 64
        yield "
                            <button class=\"btn btn-outline-secondary toggle-password\" type=\"button\" data-target=\"password\">
                                <i class=\"fas fa-eye\"></i>
                            </button>
                        </div>
                        ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["resetForm"] ?? null), "plainPassword", [], "any", false, false, false, 69), 'errors');
        yield "
                        <div class=\"form-text\">
                            <small>
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Utilisez au moins 8 caractères avec des lettres, chiffres et symboles
                            </small>
                        </div>
                    </div>
                    
                    ";
        // line 79
        yield "                    <div class=\"mb-4\">
                        ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["resetForm"] ?? null), "confirmPassword", [], "any", false, false, false, 80), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Confirmer le mot de passe *"]);
        // line 82
        yield "
                        <div class=\"input-group\">
                            <span class=\"input-group-text\">
                                <i class=\"fas fa-lock\"></i>
                            </span>
                            ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["resetForm"] ?? null), "confirmPassword", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Retapez votre mot de passe", "autocomplete" => "new-password"]]);
        // line 93
        yield "
                            <button class=\"btn btn-outline-secondary toggle-password\" type=\"button\" data-target=\"confirm\">
                                <i class=\"fas fa-eye\"></i>
                            </button>
                        </div>
                        ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["resetForm"] ?? null), "confirmPassword", [], "any", false, false, false, 98), 'errors');
        yield "
                    </div>
                    
                    ";
        // line 102
        yield "                    <div class=\"mb-4\">
                        <div class=\"progress mb-2\" style=\"height: 8px;\">
                            <div id=\"password-strength-bar\" class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%\"></div>
                        </div>
                        <div id=\"password-strength-text\" class=\"form-text small text-center\"></div>
                    </div>
                    
                    <div class=\"d-grid gap-3\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg py-3 fw-semibold\">
                            <i class=\"fas fa-save me-2\"></i>Enregistrer le nouveau mot de passe
                        </button>
                        
                        <a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left me-2\"></i>Retour à la connexion
                        </a>
                    </div>
                    
                    ";
        // line 119
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["resetForm"] ?? null), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // ✅ Toggle password visibility
    document.querySelectorAll('.toggle-password').forEach(button => {
        button.addEventListener('click', function() {
            const input = this.closest('.input-group').querySelector('input');
            const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
            input.setAttribute('type', type);
            const icon = this.querySelector('i');
            icon.classList.toggle('fa-eye');
            icon.classList.toggle('fa-eye-slash');
        });
    });
    
    // ✅ IDs corrects pour les champs
    const passwordInput = document.getElementById('";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["resetForm"] ?? null), "plainPassword", [], "any", false, false, false, 141), "vars", [], "any", false, false, false, 141), "id", [], "any", false, false, false, 141), "html", null, true);
        yield "');
    const confirmInput = document.getElementById('";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["resetForm"] ?? null), "confirmPassword", [], "any", false, false, false, 142), "vars", [], "any", false, false, false, 142), "id", [], "any", false, false, false, 142), "html", null, true);
        yield "');
    const strengthBar = document.getElementById('password-strength-bar');
    const strengthText = document.getElementById('password-strength-text');
    
    // ✅ Force du mot de passe
    if (passwordInput) {
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            
            if (password.length >= 8) strength += 25;
            if (password.length >= 12) strength += 10;
            if (/[a-z]/.test(password)) strength += 15;
            if (/[A-Z]/.test(password)) strength += 15;
            if (/[0-9]/.test(password)) strength += 15;
            if (/[^A-Za-z0-9]/.test(password)) strength += 20;
            
            strength = Math.min(strength, 100);
            strengthBar.style.width = strength + '%';
            
            if (strength < 30) {
                strengthBar.className = 'progress-bar bg-danger';
                strengthText.textContent = 'Faible';
                strengthText.className = 'form-text small text-danger';
            } else if (strength < 70) {
                strengthBar.className = 'progress-bar bg-warning';
                strengthText.textContent = 'Moyen';
                strengthText.className = 'form-text small text-warning';
            } else {
                strengthBar.className = 'progress-bar bg-success';
                strengthText.textContent = 'Fort';
                strengthText.className = 'form-text small text-success';
            }
        });
    }
    
    // ✅ Validation des mots de passe
    const form = document.getElementById('password-reset-form');
    if (form) {
        form.addEventListener('submit', function(e) {
            if (passwordInput && confirmInput) {
                const password = passwordInput.value;
                const confirm = confirmInput.value;
                
                if (password !== confirm) {
                    e.preventDefault();
                    alert('❌ Les mots de passe ne correspondent pas !');
                }
            }
        });
    }
});
</script>

<style>
.card {
    border: none;
    border-radius: 15px;
}
.card-header {
    border-radius: 15px 15px 0 0 !important;
}
.progress {
    border-radius: 4px;
}
.progress-bar {
    transition: width 0.3s ease;
}
.input-group-text {
    background-color: #f8f9fa;
}
.btn-outline-secondary:hover {
    background-color: #6c757d;
    color: white;
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
        return "reset_password/reset_password.html.twig";
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
        return array (  255 => 142,  251 => 141,  226 => 119,  218 => 114,  204 => 102,  198 => 98,  191 => 93,  189 => 87,  182 => 82,  180 => 80,  177 => 79,  165 => 69,  158 => 64,  156 => 58,  149 => 53,  147 => 51,  144 => 50,  138 => 47,  123 => 33,  113 => 29,  109 => 27,  105 => 26,  102 => 25,  92 => 21,  88 => 19,  84 => 18,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reset_password/reset_password.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\reset_password\\reset_password.html.twig");
    }
}
