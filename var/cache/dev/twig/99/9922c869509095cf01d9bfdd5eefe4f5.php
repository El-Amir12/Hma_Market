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
class __TwigTemplate_37b4bc14b5f550ff1615852345555cf0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/auth/change_password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/auth/change_password.html.twig"));

        $this->parent = $this->load("base_marketplace.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

    // line 6
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

        // line 7
        yield "<div class=\"row justify-content-center mt-5\">
    <div class=\"col-md-6 col-lg-5\">
        <div class=\"card shadow-lg border-0 rounded-4\">
            <div class=\"card-body p-5\">
                <div class=\"text-center mb-4\">
                    <i class=\"fas fa-key fa-3x text-warning mb-3\"></i>
                    
                    ";
        // line 14
        if ((array_key_exists("mustChangePassword", $context) && (isset($context["mustChangePassword"]) || array_key_exists("mustChangePassword", $context) ? $context["mustChangePassword"] : (function () { throw new RuntimeError('Variable "mustChangePassword" does not exist.', 14, $this->source); })()))) {
            // line 15
            yield "                        <div class=\"alert alert-warning rounded-3\">
                            <i class=\"fas fa-exclamation-triangle me-2\"></i>
                            <strong>Changement obligatoire !</strong>
                            <p class=\"mb-0\">Vous devez changer votre mot de passe temporaire avant de continuer.</p>
                        </div>
                        <h3 class=\"fw-bold\">Définir votre mot de passe</h3>
                        <p class=\"text-muted\">Créez un nouveau mot de passe sécurisé</p>
                    ";
        } else {
            // line 23
            yield "                        <h3 class=\"fw-bold\">Changer mon mot de passe</h3>
                        <p class=\"text-muted\">Modifiez votre mot de passe en toute sécurité</p>
                    ";
        }
        // line 26
        yield "                </div>

                ";
        // line 29
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "flashes", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 30
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                yield "                        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show rounded-3\" role=\"alert\">
                            <i class=\"fas fa-";
                // line 32
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
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "
                ";
        // line 40
        yield "                ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 40, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

                ";
        // line 43
        yield "                ";
        if ((array_key_exists("mustChangePassword", $context) &&  !(isset($context["mustChangePassword"]) || array_key_exists("mustChangePassword", $context) ? $context["mustChangePassword"] : (function () { throw new RuntimeError('Variable "mustChangePassword" does not exist.', 43, $this->source); })()))) {
            // line 44
            yield "                    <div class=\"mb-3\">
                        ";
            // line 45
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 45, $this->source); })()), "oldPassword", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Ancien mot de passe *"]);
            yield "
                        ";
            // line 46
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 46, $this->source); })()), "oldPassword", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "••••••••"]]);
            yield "
                        ";
            // line 47
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 47, $this->source); })()), "oldPassword", [], "any", false, false, false, 47), 'errors');
            yield "
                    </div>
                ";
        }
        // line 50
        yield "
                ";
        // line 52
        yield "                ";
        if ((array_key_exists("mustChangePassword", $context) && (isset($context["mustChangePassword"]) || array_key_exists("mustChangePassword", $context) ? $context["mustChangePassword"] : (function () { throw new RuntimeError('Variable "mustChangePassword" does not exist.', 52, $this->source); })()))) {
            // line 53
            yield "                    ";
            // line 54
            yield "                    <div class=\"mb-3\">
                        ";
            // line 55
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 55, $this->source); })()), "newPassword", [], "any", false, false, false, 55), "first", [], "any", false, false, false, 55), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Nouveau mot de passe *"]);
            yield "
                        ";
            // line 56
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 56, $this->source); })()), "newPassword", [], "any", false, false, false, 56), "first", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Minimum 8 caractères"]]);
            yield "
                        <div class=\"password-strength mt-2\">
                            <div class=\"progress\" style=\"height: 4px;\">
                                <div class=\"progress-bar\" id=\"passwordStrength\" style=\"width: 0%;\"></div>
                            </div>
                        </div>
                        <div class=\"password-hint mt-1\">
                            <small class=\"text-muted\" id=\"passwordHint\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                8 caractères, une majuscule, une minuscule et un chiffre
                            </small>
                        </div>
                        ";
            // line 68
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 68, $this->source); })()), "newPassword", [], "any", false, false, false, 68), "first", [], "any", false, false, false, 68), 'errors');
            yield "
                    </div>

                    <div class=\"mb-3\">
                        ";
            // line 72
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 72, $this->source); })()), "newPassword", [], "any", false, false, false, 72), "second", [], "any", false, false, false, 72), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Confirmer le nouveau mot de passe *"]);
            yield "
                        ";
            // line 73
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 73, $this->source); })()), "newPassword", [], "any", false, false, false, 73), "second", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Confirmez votre nouveau mot de passe"]]);
            yield "
                        ";
            // line 74
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 74, $this->source); })()), "newPassword", [], "any", false, false, false, 74), "second", [], "any", false, false, false, 74), 'errors');
            yield "
                    </div>
                ";
        } else {
            // line 77
            yield "                    ";
            // line 78
            yield "                    <div class=\"mb-3\">
                        ";
            // line 79
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 79, $this->source); })()), "newPassword", [], "any", false, false, false, 79), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Nouveau mot de passe *"]);
            yield "
                        ";
            // line 80
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 80, $this->source); })()), "newPassword", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Minimum 8 caractères"]]);
            yield "
                        <div class=\"password-strength mt-2\">
                            <div class=\"progress\" style=\"height: 4px;\">
                                <div class=\"progress-bar\" id=\"passwordStrength\" style=\"width: 0%;\"></div>
                            </div>
                        </div>
                        <div class=\"password-hint mt-1\">
                            <small class=\"text-muted\" id=\"passwordHint\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                8 caractères, une majuscule, une minuscule et un chiffre
                            </small>
                        </div>
                        ";
            // line 92
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 92, $this->source); })()), "newPassword", [], "any", false, false, false, 92), 'errors');
            yield "
                    </div>

                    <div class=\"mb-3\">
                        ";
            // line 96
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 96, $this->source); })()), "confirmPassword", [], "any", false, false, false, 96), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Confirmer le nouveau mot de passe *"]);
            yield "
                        ";
            // line 97
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 97, $this->source); })()), "confirmPassword", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Confirmez votre nouveau mot de passe"]]);
            yield "
                        ";
            // line 98
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 98, $this->source); })()), "confirmPassword", [], "any", false, false, false, 98), 'errors');
            yield "
                    </div>
                ";
        }
        // line 101
        yield "
                <button type=\"submit\" class=\"btn btn-primary w-100 btn-lg\">
                    <i class=\"fas fa-save me-2\"></i>
                    ";
        // line 104
        if ((array_key_exists("mustChangePassword", $context) && (isset($context["mustChangePassword"]) || array_key_exists("mustChangePassword", $context) ? $context["mustChangePassword"] : (function () { throw new RuntimeError('Variable "mustChangePassword" does not exist.', 104, $this->source); })()))) {
            // line 105
            yield "                        Définir mon mot de passe
                    ";
        } else {
            // line 107
            yield "                        Changer le mot de passe
                    ";
        }
        // line 109
        yield "                </button>

                ";
        // line 111
        if ((array_key_exists("mustChangePassword", $context) &&  !(isset($context["mustChangePassword"]) || array_key_exists("mustChangePassword", $context) ? $context["mustChangePassword"] : (function () { throw new RuntimeError('Variable "mustChangePassword" does not exist.', 111, $this->source); })()))) {
            // line 112
            yield "                    <div class=\"text-center mt-3\">
                        <a href=\"";
            // line 113
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_profile");
            yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-arrow-left me-1\"></i>Retour au profil
                        </a>
                    </div>
                ";
        }
        // line 118
        yield "
                ";
        // line 119
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 119, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // ==================== PASSWORD STRENGTH ====================
    let passwordField = null;
    
    // ✅ Trouver le bon champ en fonction du type de formulaire
    ";
        // line 131
        if ((array_key_exists("mustChangePassword", $context) && (isset($context["mustChangePassword"]) || array_key_exists("mustChangePassword", $context) ? $context["mustChangePassword"] : (function () { throw new RuntimeError('Variable "mustChangePassword" does not exist.', 131, $this->source); })()))) {
            // line 132
            yield "        passwordField = document.querySelector('#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 132, $this->source); })()), "newPassword", [], "any", false, false, false, 132), "first", [], "any", false, false, false, 132), "vars", [], "any", false, false, false, 132), "id", [], "any", false, false, false, 132), "html", null, true);
            yield "');
    ";
        } else {
            // line 134
            yield "        passwordField = document.querySelector('#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 134, $this->source); })()), "newPassword", [], "any", false, false, false, 134), "vars", [], "any", false, false, false, 134), "id", [], "any", false, false, false, 134), "html", null, true);
            yield "');
    ";
        }
        // line 136
        yield "    
    const strengthBar = document.getElementById('passwordStrength');
    const passwordHint = document.getElementById('passwordHint');

    if (passwordField) {
        passwordField.addEventListener('input', function() {
            const password = this.value;
            let score = 0;
            
            if (password.length >= 8) score++;
            if (/[A-Z]/.test(password)) score++;
            if (/[a-z]/.test(password)) score++;
            if (/\\d/.test(password)) score++;
            
            const levels = [
                { class: 'bg-danger', label: 'Très faible', width: '10%' },
                { class: 'bg-danger', label: 'Faible', width: '30%' },
                { class: 'bg-warning', label: 'Moyen', width: '50%' },
                { class: 'bg-info', label: 'Fort', width: '75%' },
                { class: 'bg-success', label: 'Très fort', width: '100%' }
            ];
            
            const level = Math.min(score, 4);
            strengthBar.className = `progress-bar \${levels[level].class}`;
            strengthBar.style.width = levels[level].width;
            passwordHint.innerHTML = `<i class=\"fas fa-info-circle me-1\"></i>\${levels[level].label}`;
        });
    }

    // ==================== CONFIRM PASSWORD VALIDATION ====================
    let confirmField = null;
    
    ";
        // line 168
        if ((array_key_exists("mustChangePassword", $context) && (isset($context["mustChangePassword"]) || array_key_exists("mustChangePassword", $context) ? $context["mustChangePassword"] : (function () { throw new RuntimeError('Variable "mustChangePassword" does not exist.', 168, $this->source); })()))) {
            // line 169
            yield "        confirmField = document.querySelector('#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 169, $this->source); })()), "newPassword", [], "any", false, false, false, 169), "second", [], "any", false, false, false, 169), "vars", [], "any", false, false, false, 169), "id", [], "any", false, false, false, 169), "html", null, true);
            yield "');
    ";
        } else {
            // line 171
            yield "        confirmField = document.querySelector('#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["changePasswordForm"]) || array_key_exists("changePasswordForm", $context) ? $context["changePasswordForm"] : (function () { throw new RuntimeError('Variable "changePasswordForm" does not exist.', 171, $this->source); })()), "confirmPassword", [], "any", false, false, false, 171), "vars", [], "any", false, false, false, 171), "id", [], "any", false, false, false, 171), "html", null, true);
            yield "');
    ";
        }
        // line 173
        yield "    
    if (confirmField && passwordField) {
        confirmField.addEventListener('input', function() {
            if (this.value && this.value !== passwordField.value) {
                this.classList.add('is-invalid');
            } else {
                this.classList.remove('is-invalid');
            }
        });

        passwordField.addEventListener('input', function() {
            if (confirmField.value && confirmField.value !== this.value) {
                confirmField.classList.add('is-invalid');
            } else {
                confirmField.classList.remove('is-invalid');
            }
        });
    }
});
</script>

<style>
.password-strength .progress {
    background-color: #e9ecef;
    border-radius: 2px;
    overflow: hidden;
}
.password-strength .progress-bar {
    transition: width 0.3s ease;
}
.password-hint {
    min-height: 24px;
}
</style>
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
        return array (  410 => 173,  404 => 171,  398 => 169,  396 => 168,  362 => 136,  356 => 134,  350 => 132,  348 => 131,  333 => 119,  330 => 118,  322 => 113,  319 => 112,  317 => 111,  313 => 109,  309 => 107,  305 => 105,  303 => 104,  298 => 101,  292 => 98,  288 => 97,  284 => 96,  277 => 92,  262 => 80,  258 => 79,  255 => 78,  253 => 77,  247 => 74,  243 => 73,  239 => 72,  232 => 68,  217 => 56,  213 => 55,  210 => 54,  208 => 53,  205 => 52,  202 => 50,  196 => 47,  192 => 46,  188 => 45,  185 => 44,  182 => 43,  176 => 40,  173 => 38,  167 => 37,  157 => 33,  145 => 32,  140 => 31,  135 => 30,  130 => 29,  126 => 26,  121 => 23,  111 => 15,  109 => 14,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/marketplace/auth/change_password.html.twig #}
{% extends 'base_marketplace.html.twig' %}

{% block title %}Changer mon mot de passe - HMA Market{% endblock %}

{% block body %}
<div class=\"row justify-content-center mt-5\">
    <div class=\"col-md-6 col-lg-5\">
        <div class=\"card shadow-lg border-0 rounded-4\">
            <div class=\"card-body p-5\">
                <div class=\"text-center mb-4\">
                    <i class=\"fas fa-key fa-3x text-warning mb-3\"></i>
                    
                    {% if mustChangePassword is defined and mustChangePassword %}
                        <div class=\"alert alert-warning rounded-3\">
                            <i class=\"fas fa-exclamation-triangle me-2\"></i>
                            <strong>Changement obligatoire !</strong>
                            <p class=\"mb-0\">Vous devez changer votre mot de passe temporaire avant de continuer.</p>
                        </div>
                        <h3 class=\"fw-bold\">Définir votre mot de passe</h3>
                        <p class=\"text-muted\">Créez un nouveau mot de passe sécurisé</p>
                    {% else %}
                        <h3 class=\"fw-bold\">Changer mon mot de passe</h3>
                        <p class=\"text-muted\">Modifiez votre mot de passe en toute sécurité</p>
                    {% endif %}
                </div>

                {# Flash messages #}
                {% for label, messages in app.flashes %}
                    {% for message in messages %}
                        <div class=\"alert alert-{{ label }} alert-dismissible fade show rounded-3\" role=\"alert\">
                            <i class=\"fas fa-{% if label == 'success' %}check-circle{% elseif label == 'danger' %}exclamation-circle{% elseif label == 'warning' %}exclamation-triangle{% else %}info-circle{% endif %} me-2\"></i>
                            {{ message }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                        </div>
                    {% endfor %}
                {% endfor %}

                {# ✅ Formulaire #}
                {{ form_start(changePasswordForm, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}

                {# ✅ Afficher l'ancien mot de passe UNIQUEMENT si ce n'est pas la première connexion #}
                {% if mustChangePassword is defined and not mustChangePassword %}
                    <div class=\"mb-3\">
                        {{ form_label(changePasswordForm.oldPassword, 'Ancien mot de passe *', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
                        {{ form_widget(changePasswordForm.oldPassword, {'attr': {'class': 'form-control form-control-lg', 'placeholder': '••••••••'}}) }}
                        {{ form_errors(changePasswordForm.oldPassword) }}
                    </div>
                {% endif %}

                {# ✅ Nouveau mot de passe - Gestion des deux types de formulaire #}
                {% if mustChangePassword is defined and mustChangePassword %}
                    {# ✅ Première connexion : formulaire avec RepeatedType (first et second) #}
                    <div class=\"mb-3\">
                        {{ form_label(changePasswordForm.newPassword.first, 'Nouveau mot de passe *', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
                        {{ form_widget(changePasswordForm.newPassword.first, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Minimum 8 caractères'}}) }}
                        <div class=\"password-strength mt-2\">
                            <div class=\"progress\" style=\"height: 4px;\">
                                <div class=\"progress-bar\" id=\"passwordStrength\" style=\"width: 0%;\"></div>
                            </div>
                        </div>
                        <div class=\"password-hint mt-1\">
                            <small class=\"text-muted\" id=\"passwordHint\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                8 caractères, une majuscule, une minuscule et un chiffre
                            </small>
                        </div>
                        {{ form_errors(changePasswordForm.newPassword.first) }}
                    </div>

                    <div class=\"mb-3\">
                        {{ form_label(changePasswordForm.newPassword.second, 'Confirmer le nouveau mot de passe *', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
                        {{ form_widget(changePasswordForm.newPassword.second, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Confirmez votre nouveau mot de passe'}}) }}
                        {{ form_errors(changePasswordForm.newPassword.second) }}
                    </div>
                {% else %}
                    {# ✅ Changement volontaire : formulaire avec newPassword (simple) #}
                    <div class=\"mb-3\">
                        {{ form_label(changePasswordForm.newPassword, 'Nouveau mot de passe *', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
                        {{ form_widget(changePasswordForm.newPassword, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Minimum 8 caractères'}}) }}
                        <div class=\"password-strength mt-2\">
                            <div class=\"progress\" style=\"height: 4px;\">
                                <div class=\"progress-bar\" id=\"passwordStrength\" style=\"width: 0%;\"></div>
                            </div>
                        </div>
                        <div class=\"password-hint mt-1\">
                            <small class=\"text-muted\" id=\"passwordHint\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                8 caractères, une majuscule, une minuscule et un chiffre
                            </small>
                        </div>
                        {{ form_errors(changePasswordForm.newPassword) }}
                    </div>

                    <div class=\"mb-3\">
                        {{ form_label(changePasswordForm.confirmPassword, 'Confirmer le nouveau mot de passe *', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
                        {{ form_widget(changePasswordForm.confirmPassword, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Confirmez votre nouveau mot de passe'}}) }}
                        {{ form_errors(changePasswordForm.confirmPassword) }}
                    </div>
                {% endif %}

                <button type=\"submit\" class=\"btn btn-primary w-100 btn-lg\">
                    <i class=\"fas fa-save me-2\"></i>
                    {% if mustChangePassword is defined and mustChangePassword %}
                        Définir mon mot de passe
                    {% else %}
                        Changer le mot de passe
                    {% endif %}
                </button>

                {% if mustChangePassword is defined and not mustChangePassword %}
                    <div class=\"text-center mt-3\">
                        <a href=\"{{ path('marketplace_profile') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-arrow-left me-1\"></i>Retour au profil
                        </a>
                    </div>
                {% endif %}

                {{ form_end(changePasswordForm) }}
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // ==================== PASSWORD STRENGTH ====================
    let passwordField = null;
    
    // ✅ Trouver le bon champ en fonction du type de formulaire
    {% if mustChangePassword is defined and mustChangePassword %}
        passwordField = document.querySelector('#{{ changePasswordForm.newPassword.first.vars.id }}');
    {% else %}
        passwordField = document.querySelector('#{{ changePasswordForm.newPassword.vars.id }}');
    {% endif %}
    
    const strengthBar = document.getElementById('passwordStrength');
    const passwordHint = document.getElementById('passwordHint');

    if (passwordField) {
        passwordField.addEventListener('input', function() {
            const password = this.value;
            let score = 0;
            
            if (password.length >= 8) score++;
            if (/[A-Z]/.test(password)) score++;
            if (/[a-z]/.test(password)) score++;
            if (/\\d/.test(password)) score++;
            
            const levels = [
                { class: 'bg-danger', label: 'Très faible', width: '10%' },
                { class: 'bg-danger', label: 'Faible', width: '30%' },
                { class: 'bg-warning', label: 'Moyen', width: '50%' },
                { class: 'bg-info', label: 'Fort', width: '75%' },
                { class: 'bg-success', label: 'Très fort', width: '100%' }
            ];
            
            const level = Math.min(score, 4);
            strengthBar.className = `progress-bar \${levels[level].class}`;
            strengthBar.style.width = levels[level].width;
            passwordHint.innerHTML = `<i class=\"fas fa-info-circle me-1\"></i>\${levels[level].label}`;
        });
    }

    // ==================== CONFIRM PASSWORD VALIDATION ====================
    let confirmField = null;
    
    {% if mustChangePassword is defined and mustChangePassword %}
        confirmField = document.querySelector('#{{ changePasswordForm.newPassword.second.vars.id }}');
    {% else %}
        confirmField = document.querySelector('#{{ changePasswordForm.confirmPassword.vars.id }}');
    {% endif %}
    
    if (confirmField && passwordField) {
        confirmField.addEventListener('input', function() {
            if (this.value && this.value !== passwordField.value) {
                this.classList.add('is-invalid');
            } else {
                this.classList.remove('is-invalid');
            }
        });

        passwordField.addEventListener('input', function() {
            if (confirmField.value && confirmField.value !== this.value) {
                confirmField.classList.add('is-invalid');
            } else {
                confirmField.classList.remove('is-invalid');
            }
        });
    }
});
</script>

<style>
.password-strength .progress {
    background-color: #e9ecef;
    border-radius: 2px;
    overflow: hidden;
}
.password-strength .progress-bar {
    transition: width 0.3s ease;
}
.password-hint {
    min-height: 24px;
}
</style>
{% endblock %}", "marketplace/auth/change_password.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\auth\\change_password.html.twig");
    }
}
