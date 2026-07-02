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

/* admin/Location/_form.html.twig */
class __TwigTemplate_1573d414e2ecdaeb1cd8fea6ab0a40aa extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/Location/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/Location/_form.html.twig"));

        // line 2
        yield "
";
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), ["bootstrap_5_layout.html.twig"], true);
        // line 4
        yield "
<div class=\"container-fluid px-4\">
    ";
        // line 6
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "

    <div class=\"row g-4\">
        <!-- Carte Informations de l'emplacement -->
        <div class=\"col-lg-12\">
            <div class=\"card shadow-lg border-0 h-100 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-map-marker-alt me-2\"></i>
                        ";
        // line 15
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "id", [], "any", true, true, false, 15) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)))) {
            // line 16
            yield "                            Modifier l'emplacement
                        ";
        } else {
            // line 18
            yield "                            Nouvel emplacement
                        ";
        }
        // line 20
        yield "                    </h5>
                </div>
                <div class=\"card-body\">
                    <!-- Informations de base -->
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "code", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 31
        yield "
                                <label for=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "code", [], "any", false, false, false, 32), "vars", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-qrcode me-1\"></i> Code
                                </label>
                                <div class=\"form-text\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Code court pour identifier rapidement l'emplacement (ex: A01, R02, F03)
                                </div>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "code", [], "any", false, false, false, 40), 'errors');
        yield "
                                </div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 51
        yield "
                                <label for=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-tag me-1\"></i> Nom de l'emplacement *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "name", [], "any", false, false, false, 56), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-3 mt-3\">
                        <div class=\"col-md-12\">
                            <div class=\"form-floating\">
                                ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "description", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "style" => "height: 120px"]]);
        // line 69
        yield "
                                <label for=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "description", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-align-left me-1\"></i> Description
                                </label>
                                <div class=\"form-text\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Description détaillée de l'emplacement (optionnel)
                                </div>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "description", [], "any", false, false, false, 78), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class=\"my-4\">

                    <!-- Statut -->
                    <div class=\"card border-0 bg-light\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center justify-content-between mb-2\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"fas fa-toggle-on me-2 text-primary\"></i>
                                    <span class=\"fw-bold\">Statut de l'emplacement</span>
                                </div>
                                <span class=\"badge ";
        // line 94
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "is_active", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "data", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\" id=\"status-badge\">
                                    ";
        // line 95
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "is_active", [], "any", false, false, false, 95), "vars", [], "any", false, false, false, 95), "data", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
        yield "
                                </span>
                            </div>
                            <div class=\"form-check form-switch\">
                                ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "is_active", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 102
        yield "
                                <label class=\"form-check-label\" for=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "is_active", [], "any", false, false, false, 103), "vars", [], "any", false, false, false, 103), "id", [], "any", false, false, false, 103), "html", null, true);
        yield "\" id=\"status-label\">
                                    ";
        // line 104
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "is_active", [], "any", false, false, false, 104), "vars", [], "any", false, false, false, 104), "data", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Emplacement actif") : ("Emplacement inactif"));
        yield "
                                </label>
                            </div>
                            <small class=\"text-muted mt-1 d-block\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Les emplacements inactifs ne seront pas proposés lors de la sélection.
                            </small>
                        </div>
                    </div>

                    <!-- Informations système (uniquement en édition) -->
                    ";
        // line 115
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "id", [], "any", true, true, false, 115) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 115, $this->source); })()), "id", [], "any", false, false, false, 115)))) {
            // line 116
            yield "                    <hr class=\"my-4\">
                    <div class=\"card border-0 bg-secondary bg-opacity-25\">
                        <div class=\"card-body\">
                            <h6 class=\"card-subtitle mb-2 text-white\">
                                <i class=\"fas fa-history me-1\"></i> Informations système
                            </h6>
                            <div class=\"small\">
                                <div class=\"d-flex justify-content-between mb-1\">
                                    <span class=\"text-white-50\">Créé le :</span>
                                    <span class=\"text-white\">";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 125, $this->source); })()), "createdAt", [], "any", false, false, false, 125), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                                </div>
                                <div class=\"d-flex justify-content-between\">
                                    <span class=\"text-white-50\">Lots associés :</span>
                                    <span class=\"badge bg-primary\">";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 129, $this->source); })()), "stockBatches", [], "any", false, false, false, 129)), "html", null, true);
            yield " lot(s)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 135
        yield "                </div>

                <!-- Footer avec boutons d'action -->
                <div class=\"card-footer bg-light py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a href=\"";
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_index");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-times me-2\"></i> Annuler
                        </a>
                        <div class=\"btn-group\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                                <i class=\"fas fa-save me-2\"></i>
                                ";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 146, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
                            </button>
                            ";
        // line 148
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "id", [], "any", true, true, false, 148) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 148, $this->source); })()), "id", [], "any", false, false, false, 148)))) {
            // line 149
            yield "                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_index");
            yield "\" class=\"btn btn-info btn-lg\">
                                    <i class=\"fas fa-arrow-left me-2\"></i> Retour
                                </a>
                            ";
        }
        // line 153
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 160
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), 'form_end');
        yield "
</div>

";
        // line 163
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 202
        yield "
";
        // line 203
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 163
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

        // line 164
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion du statut (badge)
    const activeSwitch = document.getElementById('";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "is_active", [], "any", false, false, false, 167), "vars", [], "any", false, false, false, 167), "id", [], "any", false, false, false, 167), "html", null, true);
        yield "');
    const statusBadge = document.getElementById('status-badge');
    const statusLabel = document.getElementById('status-label');

    if (activeSwitch && statusBadge && statusLabel) {
        activeSwitch.addEventListener('change', function() {
            const isActive = this.checked;
            statusBadge.textContent = isActive ? 'ACTIF' : 'INACTIF';
            statusBadge.className = isActive ? 'badge bg-success' : 'badge bg-danger';
            statusLabel.textContent = isActive ? 'Emplacement actif' : 'Emplacement inactif';
        });
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

    // Auto uppercase pour le code
    const codeInput = document.getElementById('";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "code", [], "any", false, false, false, 193), "vars", [], "any", false, false, false, 193), "id", [], "any", false, false, false, 193), "html", null, true);
        yield "');
    if (codeInput) {
        codeInput.addEventListener('input', function() {
            this.value = this.value.toUpperCase();
        });
    }
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 203
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 204
        yield "<style>
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
    line-height: 1.25;
    padding: 1rem 0.75rem 0.5rem 2.5rem;
}
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-select:focus ~ label,
.form-floating > .form-select:not([value=\"\"]):not(:placeholder-shown) ~ label {
    transform: scale(.85) translateY(-0.9rem) translateX(0.15rem);
    color: #667eea;
}
.form-floating > .form-control,
.form-floating > .form-select {
    border-radius: 10px;
    border: 2px solid #e0e0e0;
}
.form-floating > .form-control:focus,
.form-floating > .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
}
.form-check-input:checked {
    background-color: #198754;
    border-color: #198754;
}
.form-switch .form-check-input {
    width: 3.5em;
    height: 1.8em;
    cursor: pointer;
    margin-top: 0.25rem;
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
.btn-info {
    background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
    border: none;
}
.bg-light {
    background-color: #f8f9fa !important;
}
.form-text {
    font-size: 0.75rem;
    margin-top: 0.25rem;
}
@media (max-width: 768px) {
    .form-switch .form-check-input {
        width: 3em;
        height: 1.5em;
    }
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
        return "admin/Location/_form.html.twig";
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
        return array (  380 => 204,  367 => 203,  347 => 193,  318 => 167,  313 => 164,  300 => 163,  289 => 203,  286 => 202,  284 => 163,  278 => 160,  269 => 153,  261 => 149,  259 => 148,  254 => 146,  245 => 140,  238 => 135,  229 => 129,  222 => 125,  211 => 116,  209 => 115,  195 => 104,  191 => 103,  188 => 102,  186 => 99,  179 => 95,  175 => 94,  156 => 78,  145 => 70,  142 => 69,  140 => 65,  128 => 56,  121 => 52,  118 => 51,  116 => 47,  106 => 40,  95 => 32,  92 => 31,  90 => 27,  81 => 20,  77 => 18,  73 => 16,  71 => 15,  59 => 6,  55 => 4,  53 => 3,  50 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/location/_form.html.twig #}

{% form_theme form 'bootstrap_5_layout.html.twig' %}

<div class=\"container-fluid px-4\">
    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': true}}) }}

    <div class=\"row g-4\">
        <!-- Carte Informations de l'emplacement -->
        <div class=\"col-lg-12\">
            <div class=\"card shadow-lg border-0 h-100 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-map-marker-alt me-2\"></i>
                        {% if location.id is defined and location.id is not null %}
                            Modifier l'emplacement
                        {% else %}
                            Nouvel emplacement
                        {% endif %}
                    </h5>
                </div>
                <div class=\"card-body\">
                    <!-- Informations de base -->
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.code, {'attr': {
                                    'class': 'form-control',
                                    'placeholder': ' ',
                                    'autocomplete': 'off'
                                }}) }}
                                <label for=\"{{ form.code.vars.id }}\">
                                    <i class=\"fas fa-qrcode me-1\"></i> Code
                                </label>
                                <div class=\"form-text\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Code court pour identifier rapidement l'emplacement (ex: A01, R02, F03)
                                </div>
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.code) }}
                                </div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.name, {'attr': {
                                    'class': 'form-control',
                                    'placeholder': ' ',
                                    'autocomplete': 'off'
                                }}) }}
                                <label for=\"{{ form.name.vars.id }}\">
                                    <i class=\"fas fa-tag me-1\"></i> Nom de l'emplacement *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.name) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-3 mt-3\">
                        <div class=\"col-md-12\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.description, {'attr': {
                                    'class': 'form-control',
                                    'placeholder': ' ',
                                    'style': 'height: 120px'
                                }}) }}
                                <label for=\"{{ form.description.vars.id }}\">
                                    <i class=\"fas fa-align-left me-1\"></i> Description
                                </label>
                                <div class=\"form-text\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Description détaillée de l'emplacement (optionnel)
                                </div>
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.description) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class=\"my-4\">

                    <!-- Statut -->
                    <div class=\"card border-0 bg-light\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center justify-content-between mb-2\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"fas fa-toggle-on me-2 text-primary\"></i>
                                    <span class=\"fw-bold\">Statut de l'emplacement</span>
                                </div>
                                <span class=\"badge {{ form.is_active.vars.data ? 'bg-success' : 'bg-danger' }}\" id=\"status-badge\">
                                    {{ form.is_active.vars.data ? 'ACTIF' : 'INACTIF' }}
                                </span>
                            </div>
                            <div class=\"form-check form-switch\">
                                {{ form_widget(form.is_active, {'attr': {
                                    'class': 'form-check-input',
                                    'role': 'switch'
                                }}) }}
                                <label class=\"form-check-label\" for=\"{{ form.is_active.vars.id }}\" id=\"status-label\">
                                    {{ form.is_active.vars.data ? 'Emplacement actif' : 'Emplacement inactif' }}
                                </label>
                            </div>
                            <small class=\"text-muted mt-1 d-block\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Les emplacements inactifs ne seront pas proposés lors de la sélection.
                            </small>
                        </div>
                    </div>

                    <!-- Informations système (uniquement en édition) -->
                    {% if location.id is defined and location.id is not null %}
                    <hr class=\"my-4\">
                    <div class=\"card border-0 bg-secondary bg-opacity-25\">
                        <div class=\"card-body\">
                            <h6 class=\"card-subtitle mb-2 text-white\">
                                <i class=\"fas fa-history me-1\"></i> Informations système
                            </h6>
                            <div class=\"small\">
                                <div class=\"d-flex justify-content-between mb-1\">
                                    <span class=\"text-white-50\">Créé le :</span>
                                    <span class=\"text-white\">{{ location.createdAt|date('d/m/Y H:i') }}</span>
                                </div>
                                <div class=\"d-flex justify-content-between\">
                                    <span class=\"text-white-50\">Lots associés :</span>
                                    <span class=\"badge bg-primary\">{{ location.stockBatches|length }} lot(s)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endif %}
                </div>

                <!-- Footer avec boutons d'action -->
                <div class=\"card-footer bg-light py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a href=\"{{ path('app_admin_location_index') }}\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-times me-2\"></i> Annuler
                        </a>
                        <div class=\"btn-group\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                                <i class=\"fas fa-save me-2\"></i>
                                {{ button_label|default('Enregistrer') }}
                            </button>
                            {% if location.id is defined and location.id is not null %}
                                <a href=\"{{ path('app_admin_location_index') }}\" class=\"btn btn-info btn-lg\">
                                    <i class=\"fas fa-arrow-left me-2\"></i> Retour
                                </a>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{ form_end(form) }}
</div>

{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion du statut (badge)
    const activeSwitch = document.getElementById('{{ form.is_active.vars.id }}');
    const statusBadge = document.getElementById('status-badge');
    const statusLabel = document.getElementById('status-label');

    if (activeSwitch && statusBadge && statusLabel) {
        activeSwitch.addEventListener('change', function() {
            const isActive = this.checked;
            statusBadge.textContent = isActive ? 'ACTIF' : 'INACTIF';
            statusBadge.className = isActive ? 'badge bg-success' : 'badge bg-danger';
            statusLabel.textContent = isActive ? 'Emplacement actif' : 'Emplacement inactif';
        });
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

    // Auto uppercase pour le code
    const codeInput = document.getElementById('{{ form.code.vars.id }}');
    if (codeInput) {
        codeInput.addEventListener('input', function() {
            this.value = this.value.toUpperCase();
        });
    }
});
</script>
{% endblock %}

{% block stylesheets %}
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
    line-height: 1.25;
    padding: 1rem 0.75rem 0.5rem 2.5rem;
}
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-select:focus ~ label,
.form-floating > .form-select:not([value=\"\"]):not(:placeholder-shown) ~ label {
    transform: scale(.85) translateY(-0.9rem) translateX(0.15rem);
    color: #667eea;
}
.form-floating > .form-control,
.form-floating > .form-select {
    border-radius: 10px;
    border: 2px solid #e0e0e0;
}
.form-floating > .form-control:focus,
.form-floating > .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
}
.form-check-input:checked {
    background-color: #198754;
    border-color: #198754;
}
.form-switch .form-check-input {
    width: 3.5em;
    height: 1.8em;
    cursor: pointer;
    margin-top: 0.25rem;
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
.btn-info {
    background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
    border: none;
}
.bg-light {
    background-color: #f8f9fa !important;
}
.form-text {
    font-size: 0.75rem;
    margin-top: 0.25rem;
}
@media (max-width: 768px) {
    .form-switch .form-check-input {
        width: 3em;
        height: 1.5em;
    }
}
</style>
{% endblock %}", "admin/Location/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\Location\\_form.html.twig");
    }
}
