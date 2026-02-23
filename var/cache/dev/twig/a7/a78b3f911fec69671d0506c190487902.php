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

/* reset_password/change_password.html.twig */
class __TwigTemplate_1c6bf0c083a321216b661a38aa6a2b74 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/change_password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/change_password.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Changer mon mot de passe - HMA Market";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container-fluid py-4\">
    <!-- Header avec design amélioré -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"page-title-box d-flex align-items-center justify-content-between bg-white p-4 rounded-3 shadow-sm\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"flex-shrink-0 me-3\">
                        <div class=\"avatar-md rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center\" style=\"width: 60px; height: 60px;\">
                            <i class=\"fas fa-key fa-2x text-primary\"></i>
                        </div>
                    </div>
                    <div>
                        <h4 class=\"page-title fw-bold mb-1\">
                            Changer mon mot de passe
                        </h4>
                        <p class=\"text-muted mb-0\">
                            <i class=\"fas fa-shield-alt me-1\"></i>Renforcez la sécurité de votre compte
                        </p>
                    </div>
                </div>
                <div class=\"page-title-right\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb m-0 bg-transparent\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                                    <i class=\"fas fa-home me-1\"></i>Dashboard
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Mot de passe</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Content -->
    <div class=\"row justify-content-center\">
        <div class=\"col-xl-7 col-lg-8\">
            <div class=\"card border-0 shadow-lg\">
                <div class=\"card-body p-5\">
                    <!-- En-tête avec icône animée -->
                    <div class=\"text-center mb-5\">
                        <div class=\"position-relative d-inline-block\">
                            <div class=\"avatar-xl rounded-circle bg-gradient-primary p-4 mx-auto mb-3 d-flex align-items-center justify-content-center\" 
                                 style=\"width: 100px; height: 100px; background: linear-gradient(145deg, #4154f1, #5969f3);\">
                                <i class=\"fas fa-user-shield fa-4x text-white\"></i>
                            </div>
                            <div class=\"position-absolute bottom-0 end-0 bg-success rounded-circle p-2 border border-3 border-white\">
                                <i class=\"fas fa-check fa-sm text-white\"></i>
                            </div>
                        </div>
                        <h3 class=\"fw-bold mb-2\">Mise à jour de sécurité</h3>
                        <p class=\"text-muted mb-0 px-4\">
                            Choisissez un mot de passe fort et unique pour protéger votre compte contre les accès non autorisés.
                        </p>
                    </div>
                    
                    <!-- Messages flash améliorés -->
                    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "flashes", ["success"], "method", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 66
            yield "                        <div class=\"alert alert-success alert-dismissible fade show border-0 border-start border-success border-4 rounded-3 shadow-sm\" role=\"alert\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"flex-shrink-0 me-3\">
                                    <i class=\"fas fa-check-circle fa-2x\"></i>
                                </div>
                                <div class=\"flex-grow-1\">
                                    <h6 class=\"alert-heading mb-1\">Succès !</h6>
                                    <p class=\"mb-0 small\">";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</p>
                                </div>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "                    
                    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "flashes", ["error"], "method", false, false, false, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 81
            yield "                        <div class=\"alert alert-danger alert-dismissible fade show border-0 border-start border-danger border-4 rounded-3 shadow-sm\" role=\"alert\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"flex-shrink-0 me-3\">
                                    <i class=\"fas fa-exclamation-circle fa-2x\"></i>
                                </div>
                                <div class=\"flex-grow-1\">
                                    <h6 class=\"alert-heading mb-1\">Erreur</h6>
                                    <p class=\"mb-0 small\">";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</p>
                                </div>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "                    
                    <!-- Formulaire -->
                    ";
        // line 96
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 96, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate", "id" => "change-password-form"]]);
        // line 102
        yield "
                    
                    <div class=\"mb-4\">
                        ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 105, $this->source); })()), "oldPassword", [], "any", false, false, false, 105), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Ancien mot de passe"]);
        // line 107
        yield "
                        <div class=\"input-group input-group-lg\">
                            <span class=\"input-group-text border-end-0 bg-light\">
                                <i class=\"fas fa-lock text-primary\"></i>
                            </span>
                            ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 112, $this->source); })()), "oldPassword", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-control border-start-0 ps-0", "placeholder" => "Entrez votre mot de passe actuel", "autocomplete" => "current-password"]]);
        // line 118
        yield "
                            <button class=\"btn btn-light border toggle-password\" type=\"button\">
                                <i class=\"fas fa-eye\"></i>
                            </button>
                        </div>
                        ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 123, $this->source); })()), "oldPassword", [], "any", false, false, false, 123), 'errors', ["attr" => ["class" => "text-danger small mt-1"]]);
        yield "
                    </div>
                    
                    <div class=\"mb-4\">
                        ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 127, $this->source); })()), "newPassword", [], "any", false, false, false, 127), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Nouveau mot de passe"]);
        // line 129
        yield "
                        <div class=\"input-group input-group-lg\">
                            <span class=\"input-group-text border-end-0 bg-light\">
                                <i class=\"fas fa-key text-primary\"></i>
                            </span>
                            ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 134, $this->source); })()), "newPassword", [], "any", false, false, false, 134), 'widget', ["attr" => ["class" => "form-control border-start-0 ps-0", "placeholder" => "8 caractères minimum", "autocomplete" => "new-password"]]);
        // line 140
        yield "
                            <button class=\"btn btn-light border toggle-password\" type=\"button\">
                                <i class=\"fas fa-eye\"></i>
                            </button>
                        </div>
                        ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 145, $this->source); })()), "newPassword", [], "any", false, false, false, 145), 'errors', ["attr" => ["class" => "text-danger small mt-1"]]);
        yield "
                    </div>
                    
                    <!-- Indicateur de force du mot de passe -->
                    <div class=\"mb-4\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <span class=\"small text-muted\">Force du mot de passe</span>
                            <span id=\"passwordStrengthText\" class=\"small fw-semibold\">Faible</span>
                        </div>
                        <div class=\"progress\" style=\"height: 8px;\">
                            <div id=\"passwordStrength\" class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 0%\"></div>
                        </div>
                    </div>
                    
                    <div class=\"mb-4\">
                        ";
        // line 160
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 160, $this->source); })()), "confirmPassword", [], "any", false, false, false, 160), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Confirmer le mot de passe"]);
        // line 162
        yield "
                        <div class=\"input-group input-group-lg\">
                            <span class=\"input-group-text border-end-0 bg-light\">
                                <i class=\"fas fa-check-circle text-primary\"></i>
                            </span>
                            ";
        // line 167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 167, $this->source); })()), "confirmPassword", [], "any", false, false, false, 167), 'widget', ["attr" => ["class" => "form-control border-start-0 ps-0", "placeholder" => "Retapez votre nouveau mot de passe", "autocomplete" => "new-password"]]);
        // line 173
        yield "
                            <button class=\"btn btn-light border toggle-password\" type=\"button\">
                                <i class=\"fas fa-eye\"></i>
                            </button>
                        </div>
                        ";
        // line 178
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 178, $this->source); })()), "confirmPassword", [], "any", false, false, false, 178), 'errors', ["attr" => ["class" => "text-danger small mt-1"]]);
        yield "
                        <div id=\"passwordMatchFeedback\" class=\"small mt-2\"></div>
                    </div>
                    
                    <!-- Règles de sécurité -->
                    <div class=\"bg-light p-4 rounded-3 mb-4\">
                        <h6 class=\"fw-semibold mb-3\">
                            <i class=\"fas fa-shield-alt text-primary me-2\"></i>
                            Votre mot de passe doit contenir :
                        </h6>
                        <div class=\"row g-2\">
                            <div class=\"col-sm-6\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"fas fa-circle text-primary-soft me-2 fa-xs\"></i>
                                    <span class=\"small\">Au moins 8 caractères</span>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"fas fa-circle text-primary-soft me-2 fa-xs\"></i>
                                    <span class=\"small\">Au moins 1 lettre majuscule</span>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"fas fa-circle text-primary-soft me-2 fa-xs\"></i>
                                    <span class=\"small\">Au moins 1 lettre minuscule</span>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"fas fa-circle text-primary-soft me-2 fa-xs\"></i>
                                    <span class=\"small\">Au moins 1 chiffre</span>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"fas fa-circle text-primary-soft me-2 fa-xs\"></i>
                                    <span class=\"small\">Au moins 1 caractère spécial</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Boutons -->
                    <div class=\"d-grid gap-3\">
                        <button type=\"submit\" id=\"submitBtn\" class=\"btn btn-primary btn-lg py-3 fw-semibold\">
                            <i class=\"fas fa-save me-2\"></i>
                            Enregistrer le nouveau mot de passe
                        </button>
                        <a href=\"";
        // line 228
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"btn btn-outline-secondary btn-lg py-3\">
                            <i class=\"fas fa-times me-2\"></i>
                            Annuler
                        </a>
                    </div>
                    
                    ";
        // line 234
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 234, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Styles personnalisés */
.avatar-xl {
    width: 100px;
    height: 100px;
}

.bg-gradient-primary {
    background: linear-gradient(145deg, #4154f1, #5969f3);
}

.progress {
    border-radius: 10px;
    background-color: #e9ecef;
}

.progress-bar {
    border-radius: 10px;
    transition: width 0.3s ease;
}

.input-group-text {
    background-color: #f8f9fa;
    border-color: #dee2e6;
}

.form-control:focus {
    border-color: #4154f1;
    box-shadow: 0 0 0 0.2rem rgba(65, 84, 241, 0.1);
}

.btn-light {
    background-color: #f8f9fa;
    border-color: #dee2e6;
}

.btn-light:hover {
    background-color: #e9ecef;
}

/* Animation pour le bouton */
.btn-primary {
    transition: all 0.3s ease;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(65, 84, 241, 0.3);
}

/* Couleurs personnalisées */
.text-primary-soft {
    color: #8a9cff;
}

.bg-primary-soft {
    background-color: rgba(65, 84, 241, 0.1);
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 302
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 303
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Toggle password visibility
    document.querySelectorAll('.toggle-password').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const input = this.closest('.input-group').querySelector('input');
            const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
            input.setAttribute('type', type);
            const icon = this.querySelector('i');
            icon.classList.toggle('fa-eye');
            icon.classList.toggle('fa-eye-slash');
        });
    });
    
    // Password strength indicator amélioré
    const newPasswordInput = document.getElementById('";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 320, $this->source); })()), "newPassword", [], "any", false, false, false, 320), "vars", [], "any", false, false, false, 320), "id", [], "any", false, false, false, 320), "html", null, true);
        yield "');
    const confirmPasswordInput = document.getElementById('";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 321, $this->source); })()), "confirmPassword", [], "any", false, false, false, 321), "vars", [], "any", false, false, false, 321), "id", [], "any", false, false, false, 321), "html", null, true);
        yield "');
    const strengthBar = document.getElementById('passwordStrength');
    const strengthText = document.getElementById('passwordStrengthText');
    const matchFeedback = document.getElementById('passwordMatchFeedback');
    
    if (newPasswordInput) {
        newPasswordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            let feedback = [];
            
            // Check length
            if (password.length >= 8) {
                strength += 25;
                feedback.push('✅ 8+ caractères');
            } else {
                feedback.push('❌ 8+ caractères');
            }
            
            // Check lowercase
            if (/[a-z]/.test(password)) {
                strength += 15;
                feedback.push('✅ Minuscule');
            } else {
                feedback.push('❌ Minuscule');
            }
            
            // Check uppercase
            if (/[A-Z]/.test(password)) {
                strength += 15;
                feedback.push('✅ Majuscule');
            } else {
                feedback.push('❌ Majuscule');
            }
            
            // Check numbers
            if (/[0-9]/.test(password)) {
                strength += 15;
                feedback.push('✅ Chiffre');
            } else {
                feedback.push('❌ Chiffre');
            }
            
            // Check special characters
            if (/[^A-Za-z0-9]/.test(password)) {
                strength += 30;
                feedback.push('✅ Spécial');
            } else {
                feedback.push('❌ Spécial');
            }
            
            // Limit to 100
            strength = Math.min(strength, 100);
            
            // Update progress bar
            strengthBar.style.width = strength + '%';
            
            // Update colors and text
            if (strength < 30) {
                strengthBar.className = 'progress-bar bg-danger';
                strengthText.textContent = 'Faible';
                strengthText.className = 'small fw-semibold text-danger';
            } else if (strength < 70) {
                strengthBar.className = 'progress-bar bg-warning';
                strengthText.textContent = 'Moyen';
                strengthText.className = 'small fw-semibold text-warning';
            } else {
                strengthBar.className = 'progress-bar bg-success';
                strengthText.textContent = 'Fort';
                strengthText.className = 'small fw-semibold text-success';
            }
        });
    }
    
    // Vérification en temps réel de la correspondance des mots de passe
    if (newPasswordInput && confirmPasswordInput) {
        function checkPasswordMatch() {
            const password = newPasswordInput.value;
            const confirm = confirmPasswordInput.value;
            
            if (confirm.length > 0) {
                if (password === confirm) {
                    matchFeedback.innerHTML = '<span class=\"text-success\"><i class=\"fas fa-check-circle me-1\"></i>Les mots de passe correspondent</span>';
                    confirmPasswordInput.classList.add('is-valid');
                    confirmPasswordInput.classList.remove('is-invalid');
                } else {
                    matchFeedback.innerHTML = '<span class=\"text-danger\"><i class=\"fas fa-exclamation-circle me-1\"></i>Les mots de passe ne correspondent pas</span>';
                    confirmPasswordInput.classList.add('is-invalid');
                    confirmPasswordInput.classList.remove('is-valid');
                }
            } else {
                matchFeedback.innerHTML = '';
                confirmPasswordInput.classList.remove('is-valid', 'is-invalid');
            }
        }
        
        newPasswordInput.addEventListener('input', checkPasswordMatch);
        confirmPasswordInput.addEventListener('input', checkPasswordMatch);
    }
    
    // Validation du formulaire
    const form = document.getElementById('change-password-form');
    const submitBtn = document.getElementById('submitBtn');
    
    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            
            const newPassword = newPasswordInput.value;
            const confirmPassword = confirmPasswordInput.value;
            
            // Vérifier la correspondance
            if (newPassword !== confirmPassword) {
                alert('❌ Les mots de passe ne correspondent pas !');
                return;
            }
            
            // Vérifier la longueur minimum
            if (newPassword.length < 6) {
                alert('❌ Le mot de passe doit contenir au moins 6 caractères !');
                return;
            }
            
            // Désactiver le bouton
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\" role=\"status\" aria-hidden=\"true\"></span>Enregistrement...';
            }
            
            // Soumettre le formulaire
            form.submit();
        });
    }
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reset_password/change_password.html.twig";
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
        return array (  485 => 321,  481 => 320,  461 => 303,  448 => 302,  370 => 234,  361 => 228,  308 => 178,  301 => 173,  299 => 167,  292 => 162,  290 => 160,  272 => 145,  265 => 140,  263 => 134,  256 => 129,  254 => 127,  247 => 123,  240 => 118,  238 => 112,  231 => 107,  229 => 105,  224 => 102,  222 => 96,  218 => 94,  206 => 88,  197 => 81,  193 => 80,  190 => 79,  178 => 73,  169 => 66,  165 => 65,  127 => 30,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Changer mon mot de passe - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <!-- Header avec design amélioré -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"page-title-box d-flex align-items-center justify-content-between bg-white p-4 rounded-3 shadow-sm\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"flex-shrink-0 me-3\">
                        <div class=\"avatar-md rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center\" style=\"width: 60px; height: 60px;\">
                            <i class=\"fas fa-key fa-2x text-primary\"></i>
                        </div>
                    </div>
                    <div>
                        <h4 class=\"page-title fw-bold mb-1\">
                            Changer mon mot de passe
                        </h4>
                        <p class=\"text-muted mb-0\">
                            <i class=\"fas fa-shield-alt me-1\"></i>Renforcez la sécurité de votre compte
                        </p>
                    </div>
                </div>
                <div class=\"page-title-right\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb m-0 bg-transparent\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                                    <i class=\"fas fa-home me-1\"></i>Dashboard
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Mot de passe</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Content -->
    <div class=\"row justify-content-center\">
        <div class=\"col-xl-7 col-lg-8\">
            <div class=\"card border-0 shadow-lg\">
                <div class=\"card-body p-5\">
                    <!-- En-tête avec icône animée -->
                    <div class=\"text-center mb-5\">
                        <div class=\"position-relative d-inline-block\">
                            <div class=\"avatar-xl rounded-circle bg-gradient-primary p-4 mx-auto mb-3 d-flex align-items-center justify-content-center\" 
                                 style=\"width: 100px; height: 100px; background: linear-gradient(145deg, #4154f1, #5969f3);\">
                                <i class=\"fas fa-user-shield fa-4x text-white\"></i>
                            </div>
                            <div class=\"position-absolute bottom-0 end-0 bg-success rounded-circle p-2 border border-3 border-white\">
                                <i class=\"fas fa-check fa-sm text-white\"></i>
                            </div>
                        </div>
                        <h3 class=\"fw-bold mb-2\">Mise à jour de sécurité</h3>
                        <p class=\"text-muted mb-0 px-4\">
                            Choisissez un mot de passe fort et unique pour protéger votre compte contre les accès non autorisés.
                        </p>
                    </div>
                    
                    <!-- Messages flash améliorés -->
                    {% for message in app.flashes('success') %}
                        <div class=\"alert alert-success alert-dismissible fade show border-0 border-start border-success border-4 rounded-3 shadow-sm\" role=\"alert\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"flex-shrink-0 me-3\">
                                    <i class=\"fas fa-check-circle fa-2x\"></i>
                                </div>
                                <div class=\"flex-grow-1\">
                                    <h6 class=\"alert-heading mb-1\">Succès !</h6>
                                    <p class=\"mb-0 small\">{{ message }}</p>
                                </div>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                            </div>
                        </div>
                    {% endfor %}
                    
                    {% for message in app.flashes('error') %}
                        <div class=\"alert alert-danger alert-dismissible fade show border-0 border-start border-danger border-4 rounded-3 shadow-sm\" role=\"alert\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"flex-shrink-0 me-3\">
                                    <i class=\"fas fa-exclamation-circle fa-2x\"></i>
                                </div>
                                <div class=\"flex-grow-1\">
                                    <h6 class=\"alert-heading mb-1\">Erreur</h6>
                                    <p class=\"mb-0 small\">{{ message }}</p>
                                </div>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                            </div>
                        </div>
                    {% endfor %}
                    
                    <!-- Formulaire -->
                    {{ form_start(changePasswordForm, {
                        'attr': {
                            'class': 'needs-validation',
                            'novalidate': 'novalidate',
                            'id': 'change-password-form'
                        }
                    }) }}
                    
                    <div class=\"mb-4\">
                        {{ form_label(changePasswordForm.oldPassword, 'Ancien mot de passe', {
                            'label_attr': {'class': 'form-label fw-semibold'}
                        }) }}
                        <div class=\"input-group input-group-lg\">
                            <span class=\"input-group-text border-end-0 bg-light\">
                                <i class=\"fas fa-lock text-primary\"></i>
                            </span>
                            {{ form_widget(changePasswordForm.oldPassword, {
                                'attr': {
                                    'class': 'form-control border-start-0 ps-0',
                                    'placeholder': 'Entrez votre mot de passe actuel',
                                    'autocomplete': 'current-password'
                                }
                            }) }}
                            <button class=\"btn btn-light border toggle-password\" type=\"button\">
                                <i class=\"fas fa-eye\"></i>
                            </button>
                        </div>
                        {{ form_errors(changePasswordForm.oldPassword, {'attr': {'class': 'text-danger small mt-1'}}) }}
                    </div>
                    
                    <div class=\"mb-4\">
                        {{ form_label(changePasswordForm.newPassword, 'Nouveau mot de passe', {
                            'label_attr': {'class': 'form-label fw-semibold'}
                        }) }}
                        <div class=\"input-group input-group-lg\">
                            <span class=\"input-group-text border-end-0 bg-light\">
                                <i class=\"fas fa-key text-primary\"></i>
                            </span>
                            {{ form_widget(changePasswordForm.newPassword, {
                                'attr': {
                                    'class': 'form-control border-start-0 ps-0',
                                    'placeholder': '8 caractères minimum',
                                    'autocomplete': 'new-password'
                                }
                            }) }}
                            <button class=\"btn btn-light border toggle-password\" type=\"button\">
                                <i class=\"fas fa-eye\"></i>
                            </button>
                        </div>
                        {{ form_errors(changePasswordForm.newPassword, {'attr': {'class': 'text-danger small mt-1'}}) }}
                    </div>
                    
                    <!-- Indicateur de force du mot de passe -->
                    <div class=\"mb-4\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <span class=\"small text-muted\">Force du mot de passe</span>
                            <span id=\"passwordStrengthText\" class=\"small fw-semibold\">Faible</span>
                        </div>
                        <div class=\"progress\" style=\"height: 8px;\">
                            <div id=\"passwordStrength\" class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 0%\"></div>
                        </div>
                    </div>
                    
                    <div class=\"mb-4\">
                        {{ form_label(changePasswordForm.confirmPassword, 'Confirmer le mot de passe', {
                            'label_attr': {'class': 'form-label fw-semibold'}
                        }) }}
                        <div class=\"input-group input-group-lg\">
                            <span class=\"input-group-text border-end-0 bg-light\">
                                <i class=\"fas fa-check-circle text-primary\"></i>
                            </span>
                            {{ form_widget(changePasswordForm.confirmPassword, {
                                'attr': {
                                    'class': 'form-control border-start-0 ps-0',
                                    'placeholder': 'Retapez votre nouveau mot de passe',
                                    'autocomplete': 'new-password'
                                }
                            }) }}
                            <button class=\"btn btn-light border toggle-password\" type=\"button\">
                                <i class=\"fas fa-eye\"></i>
                            </button>
                        </div>
                        {{ form_errors(changePasswordForm.confirmPassword, {'attr': {'class': 'text-danger small mt-1'}}) }}
                        <div id=\"passwordMatchFeedback\" class=\"small mt-2\"></div>
                    </div>
                    
                    <!-- Règles de sécurité -->
                    <div class=\"bg-light p-4 rounded-3 mb-4\">
                        <h6 class=\"fw-semibold mb-3\">
                            <i class=\"fas fa-shield-alt text-primary me-2\"></i>
                            Votre mot de passe doit contenir :
                        </h6>
                        <div class=\"row g-2\">
                            <div class=\"col-sm-6\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"fas fa-circle text-primary-soft me-2 fa-xs\"></i>
                                    <span class=\"small\">Au moins 8 caractères</span>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"fas fa-circle text-primary-soft me-2 fa-xs\"></i>
                                    <span class=\"small\">Au moins 1 lettre majuscule</span>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"fas fa-circle text-primary-soft me-2 fa-xs\"></i>
                                    <span class=\"small\">Au moins 1 lettre minuscule</span>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"fas fa-circle text-primary-soft me-2 fa-xs\"></i>
                                    <span class=\"small\">Au moins 1 chiffre</span>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"fas fa-circle text-primary-soft me-2 fa-xs\"></i>
                                    <span class=\"small\">Au moins 1 caractère spécial</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Boutons -->
                    <div class=\"d-grid gap-3\">
                        <button type=\"submit\" id=\"submitBtn\" class=\"btn btn-primary btn-lg py-3 fw-semibold\">
                            <i class=\"fas fa-save me-2\"></i>
                            Enregistrer le nouveau mot de passe
                        </button>
                        <a href=\"{{ path('app_dashboard') }}\" class=\"btn btn-outline-secondary btn-lg py-3\">
                            <i class=\"fas fa-times me-2\"></i>
                            Annuler
                        </a>
                    </div>
                    
                    {{ form_end(changePasswordForm) }}
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Styles personnalisés */
.avatar-xl {
    width: 100px;
    height: 100px;
}

.bg-gradient-primary {
    background: linear-gradient(145deg, #4154f1, #5969f3);
}

.progress {
    border-radius: 10px;
    background-color: #e9ecef;
}

.progress-bar {
    border-radius: 10px;
    transition: width 0.3s ease;
}

.input-group-text {
    background-color: #f8f9fa;
    border-color: #dee2e6;
}

.form-control:focus {
    border-color: #4154f1;
    box-shadow: 0 0 0 0.2rem rgba(65, 84, 241, 0.1);
}

.btn-light {
    background-color: #f8f9fa;
    border-color: #dee2e6;
}

.btn-light:hover {
    background-color: #e9ecef;
}

/* Animation pour le bouton */
.btn-primary {
    transition: all 0.3s ease;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(65, 84, 241, 0.3);
}

/* Couleurs personnalisées */
.text-primary-soft {
    color: #8a9cff;
}

.bg-primary-soft {
    background-color: rgba(65, 84, 241, 0.1);
}
</style>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Toggle password visibility
    document.querySelectorAll('.toggle-password').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const input = this.closest('.input-group').querySelector('input');
            const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
            input.setAttribute('type', type);
            const icon = this.querySelector('i');
            icon.classList.toggle('fa-eye');
            icon.classList.toggle('fa-eye-slash');
        });
    });
    
    // Password strength indicator amélioré
    const newPasswordInput = document.getElementById('{{ changePasswordForm.newPassword.vars.id }}');
    const confirmPasswordInput = document.getElementById('{{ changePasswordForm.confirmPassword.vars.id }}');
    const strengthBar = document.getElementById('passwordStrength');
    const strengthText = document.getElementById('passwordStrengthText');
    const matchFeedback = document.getElementById('passwordMatchFeedback');
    
    if (newPasswordInput) {
        newPasswordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            let feedback = [];
            
            // Check length
            if (password.length >= 8) {
                strength += 25;
                feedback.push('✅ 8+ caractères');
            } else {
                feedback.push('❌ 8+ caractères');
            }
            
            // Check lowercase
            if (/[a-z]/.test(password)) {
                strength += 15;
                feedback.push('✅ Minuscule');
            } else {
                feedback.push('❌ Minuscule');
            }
            
            // Check uppercase
            if (/[A-Z]/.test(password)) {
                strength += 15;
                feedback.push('✅ Majuscule');
            } else {
                feedback.push('❌ Majuscule');
            }
            
            // Check numbers
            if (/[0-9]/.test(password)) {
                strength += 15;
                feedback.push('✅ Chiffre');
            } else {
                feedback.push('❌ Chiffre');
            }
            
            // Check special characters
            if (/[^A-Za-z0-9]/.test(password)) {
                strength += 30;
                feedback.push('✅ Spécial');
            } else {
                feedback.push('❌ Spécial');
            }
            
            // Limit to 100
            strength = Math.min(strength, 100);
            
            // Update progress bar
            strengthBar.style.width = strength + '%';
            
            // Update colors and text
            if (strength < 30) {
                strengthBar.className = 'progress-bar bg-danger';
                strengthText.textContent = 'Faible';
                strengthText.className = 'small fw-semibold text-danger';
            } else if (strength < 70) {
                strengthBar.className = 'progress-bar bg-warning';
                strengthText.textContent = 'Moyen';
                strengthText.className = 'small fw-semibold text-warning';
            } else {
                strengthBar.className = 'progress-bar bg-success';
                strengthText.textContent = 'Fort';
                strengthText.className = 'small fw-semibold text-success';
            }
        });
    }
    
    // Vérification en temps réel de la correspondance des mots de passe
    if (newPasswordInput && confirmPasswordInput) {
        function checkPasswordMatch() {
            const password = newPasswordInput.value;
            const confirm = confirmPasswordInput.value;
            
            if (confirm.length > 0) {
                if (password === confirm) {
                    matchFeedback.innerHTML = '<span class=\"text-success\"><i class=\"fas fa-check-circle me-1\"></i>Les mots de passe correspondent</span>';
                    confirmPasswordInput.classList.add('is-valid');
                    confirmPasswordInput.classList.remove('is-invalid');
                } else {
                    matchFeedback.innerHTML = '<span class=\"text-danger\"><i class=\"fas fa-exclamation-circle me-1\"></i>Les mots de passe ne correspondent pas</span>';
                    confirmPasswordInput.classList.add('is-invalid');
                    confirmPasswordInput.classList.remove('is-valid');
                }
            } else {
                matchFeedback.innerHTML = '';
                confirmPasswordInput.classList.remove('is-valid', 'is-invalid');
            }
        }
        
        newPasswordInput.addEventListener('input', checkPasswordMatch);
        confirmPasswordInput.addEventListener('input', checkPasswordMatch);
    }
    
    // Validation du formulaire
    const form = document.getElementById('change-password-form');
    const submitBtn = document.getElementById('submitBtn');
    
    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            
            const newPassword = newPasswordInput.value;
            const confirmPassword = confirmPasswordInput.value;
            
            // Vérifier la correspondance
            if (newPassword !== confirmPassword) {
                alert('❌ Les mots de passe ne correspondent pas !');
                return;
            }
            
            // Vérifier la longueur minimum
            if (newPassword.length < 6) {
                alert('❌ Le mot de passe doit contenir au moins 6 caractères !');
                return;
            }
            
            // Désactiver le bouton
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\" role=\"status\" aria-hidden=\"true\"></span>Enregistrement...';
            }
            
            // Soumettre le formulaire
            form.submit();
        });
    }
});
</script>
{% endblock %}", "reset_password/change_password.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\reset_password\\change_password.html.twig");
    }
}
