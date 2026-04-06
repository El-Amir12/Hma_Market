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

/* admin/type_promotion/_form.html.twig */
class __TwigTemplate_90ad072cc5204497133ef3f3d5b816e0 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/type_promotion/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/type_promotion/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "
<div class=\"row g-4\">
    <div class=\"col-lg-12\">
        <div class=\"card shadow-lg border-0 card-hover\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-percent me-2\"></i>
                    ";
        // line 8
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["type"] ?? null), "id", [], "any", true, true, false, 8) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)))) {
            // line 9
            yield "                        Modifier le type de promotion
                    ";
        } else {
            // line 11
            yield "                        Nouveau type de promotion
                    ";
        }
        // line 13
        yield "                </h5>
            </div>
            <div class=\"card-body\">
                <div class=\"row g-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        yield "
                            <label for=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20), "html", null, true);
        yield "\">
                                <i class=\"fas fa-tag me-1\"></i> Nom *
                            </label>
                            <div class=\"invalid-feedback d-block\">";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), 'errors');
        yield "</div>
                        </div>
                    </div>
                </div>
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "style" => "height: 100px"]]);
        yield "
                            <label for=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31), "html", null, true);
        yield "\">
                                <i class=\"fas fa-align-left me-1\"></i> Description
                            </label>
                            <div class=\"invalid-feedback d-block\">";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), 'errors');
        yield "</div>
                        </div>
                    </div>
                </div>
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center justify-content-between mb-2\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-toggle-on me-2 text-primary\"></i>
                                        <span class=\"fw-bold\">Statut</span>
                                    </div>
                                    <span class=\"badge ";
        // line 47
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "is_active", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "data", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\" id=\"status-badge\">
                                        ";
        // line 48
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "is_active", [], "any", false, false, false, 48), "vars", [], "any", false, false, false, 48), "data", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
        yield "
                                    </span>
                                </div>
                                <div class=\"form-check form-switch\">
                                    ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "is_active", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        yield "
                                    <label class=\"form-check-label\" for=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "is_active", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53), "html", null, true);
        yield "\" id=\"status-label\">
                                        ";
        // line 54
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "is_active", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "data", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Type actif") : ("Type inactif"));
        yield "
                                    </label>
                                </div>
                                <small class=\"text-muted mt-1 d-block\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Les types inactifs ne seront pas disponibles pour les promotions.
                                </small>
                                <div class=\"invalid-feedback d-block\">";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "is_active", [], "any", false, false, false, 61), 'errors');
        yield "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"card-footer bg-light py-3\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_index");
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-times me-2\"></i> Annuler
                    </a>
                    <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                        <i class=\"fas fa-save me-2\"></i> 
                        ";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 74, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 81
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
        yield "

<script>
document.addEventListener('DOMContentLoaded', function() {
    const activeSwitch = document.getElementById('";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "is_active", [], "any", false, false, false, 85), "vars", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85), "html", null, true);
        yield "');
    const statusBadge = document.getElementById('status-badge');
    const statusLabel = document.getElementById('status-label');
    
    if (activeSwitch && statusBadge && statusLabel) {
        function updateStatus() {
            if (activeSwitch.checked) {
                statusBadge.textContent = 'ACTIF';
                statusBadge.className = 'badge bg-success';
                statusLabel.textContent = 'Type actif';
            } else {
                statusBadge.textContent = 'INACTIF';
                statusBadge.className = 'badge bg-danger';
                statusLabel.textContent = 'Type inactif';
            }
        }
        activeSwitch.addEventListener('change', updateStatus);
        updateStatus();
    }
    
    // Validation Bootstrap
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
});
</script>

<style>
.card-hover {
    transition: all 0.3s ease;
    border-radius: 15px;
    overflow: hidden;
}
.card-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
}
.bg-gradient-primary {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
}
.form-floating > label {
    padding-left: 2.5rem;
}
.form-floating > .form-control,
.form-floating > .form-select {
    height: calc(3.5rem + 2px);
    padding: 1rem 0.75rem 0.5rem 2.5rem;
    border-radius: 10px;
    border: 2px solid #e0e0e0;
}
.form-floating > .form-control:focus,
.form-floating > .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
}
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-select:focus ~ label,
.form-floating > .form-select:not([value=\"\"]):not(:placeholder-shown) ~ label {
    transform: scale(.85) translateY(-0.9rem) translateX(0.15rem);
    color: #667eea;
}
.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
    border: none;
    transition: all 0.3s ease;
}
.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
}
.form-switch .form-check-input {
    width: 3.5em;
    height: 1.8em;
    cursor: pointer;
}
.form-check-input:checked {
    background-color: #198754;
    border-color: #198754;
}
</style>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/type_promotion/_form.html.twig";
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
        return array (  187 => 85,  180 => 81,  170 => 74,  162 => 69,  151 => 61,  141 => 54,  137 => 53,  133 => 52,  126 => 48,  122 => 47,  106 => 34,  100 => 31,  96 => 30,  86 => 23,  80 => 20,  76 => 19,  68 => 13,  64 => 11,  60 => 9,  58 => 8,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': true}}) }}
<div class=\"row g-4\">
    <div class=\"col-lg-12\">
        <div class=\"card shadow-lg border-0 card-hover\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-percent me-2\"></i>
                    {% if type.id is defined and type.id is not null %}
                        Modifier le type de promotion
                    {% else %}
                        Nouveau type de promotion
                    {% endif %}
                </h5>
            </div>
            <div class=\"card-body\">
                <div class=\"row g-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.name, {'attr': {'class': 'form-control', 'placeholder': ' ', 'autocomplete': 'off'}}) }}
                            <label for=\"{{ form.name.vars.id }}\">
                                <i class=\"fas fa-tag me-1\"></i> Nom *
                            </label>
                            <div class=\"invalid-feedback d-block\">{{ form_errors(form.name) }}</div>
                        </div>
                    </div>
                </div>
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.description, {'attr': {'class': 'form-control', 'placeholder': ' ', 'style': 'height: 100px'}}) }}
                            <label for=\"{{ form.description.vars.id }}\">
                                <i class=\"fas fa-align-left me-1\"></i> Description
                            </label>
                            <div class=\"invalid-feedback d-block\">{{ form_errors(form.description) }}</div>
                        </div>
                    </div>
                </div>
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center justify-content-between mb-2\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-toggle-on me-2 text-primary\"></i>
                                        <span class=\"fw-bold\">Statut</span>
                                    </div>
                                    <span class=\"badge {{ form.is_active.vars.data ? 'bg-success' : 'bg-danger' }}\" id=\"status-badge\">
                                        {{ form.is_active.vars.data ? 'ACTIF' : 'INACTIF' }}
                                    </span>
                                </div>
                                <div class=\"form-check form-switch\">
                                    {{ form_widget(form.is_active, {'attr': {'class': 'form-check-input', 'role': 'switch'}}) }}
                                    <label class=\"form-check-label\" for=\"{{ form.is_active.vars.id }}\" id=\"status-label\">
                                        {{ form.is_active.vars.data ? 'Type actif' : 'Type inactif' }}
                                    </label>
                                </div>
                                <small class=\"text-muted mt-1 d-block\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Les types inactifs ne seront pas disponibles pour les promotions.
                                </small>
                                <div class=\"invalid-feedback d-block\">{{ form_errors(form.is_active) }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"card-footer bg-light py-3\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <a href=\"{{ path('app_admin_type_promotion_index') }}\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-times me-2\"></i> Annuler
                    </a>
                    <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                        <i class=\"fas fa-save me-2\"></i> 
                        {{ button_label|default('Enregistrer') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
{{ form_end(form) }}

<script>
document.addEventListener('DOMContentLoaded', function() {
    const activeSwitch = document.getElementById('{{ form.is_active.vars.id }}');
    const statusBadge = document.getElementById('status-badge');
    const statusLabel = document.getElementById('status-label');
    
    if (activeSwitch && statusBadge && statusLabel) {
        function updateStatus() {
            if (activeSwitch.checked) {
                statusBadge.textContent = 'ACTIF';
                statusBadge.className = 'badge bg-success';
                statusLabel.textContent = 'Type actif';
            } else {
                statusBadge.textContent = 'INACTIF';
                statusBadge.className = 'badge bg-danger';
                statusLabel.textContent = 'Type inactif';
            }
        }
        activeSwitch.addEventListener('change', updateStatus);
        updateStatus();
    }
    
    // Validation Bootstrap
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
});
</script>

<style>
.card-hover {
    transition: all 0.3s ease;
    border-radius: 15px;
    overflow: hidden;
}
.card-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
}
.bg-gradient-primary {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
}
.form-floating > label {
    padding-left: 2.5rem;
}
.form-floating > .form-control,
.form-floating > .form-select {
    height: calc(3.5rem + 2px);
    padding: 1rem 0.75rem 0.5rem 2.5rem;
    border-radius: 10px;
    border: 2px solid #e0e0e0;
}
.form-floating > .form-control:focus,
.form-floating > .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
}
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-select:focus ~ label,
.form-floating > .form-select:not([value=\"\"]):not(:placeholder-shown) ~ label {
    transform: scale(.85) translateY(-0.9rem) translateX(0.15rem);
    color: #667eea;
}
.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
    border: none;
    transition: all 0.3s ease;
}
.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
}
.form-switch .form-check-input {
    width: 3.5em;
    height: 1.8em;
    cursor: pointer;
}
.form-check-input:checked {
    background-color: #198754;
    border-color: #198754;
}
</style>", "admin/type_promotion/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\type_promotion\\_form.html.twig");
    }
}
