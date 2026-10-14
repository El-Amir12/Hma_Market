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
class __TwigTemplate_776be5919604001fa751d07c38d75572 extends Template
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

        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "
<div class=\"row g-2 g-md-4\">
    <div class=\"col-12 col-lg-12\">
        <div class=\"card shadow-lg border-0 card-hover\">
            <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                    <i class=\"fas fa-percent me-2\"></i>
                    ";
        // line 9
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["type"] ?? null), "id", [], "any", true, true, false, 9) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)))) {
            // line 10
            yield "                        Modifier le type de promotion
                    ";
        } else {
            // line 12
            yield "                        Nouveau type de promotion
                    ";
        }
        // line 14
        yield "                </h5>
            </div>
            <div class=\"card-body p-2 p-md-4\">
                <!-- Nom -->
                <div class=\"row g-2 g-md-3\">
                    <div class=\"col-12 col-md-12\">
                        <div class=\"form-floating\">
                            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        yield "
                            <label for=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22), "html", null, true);
        yield "\">
                                <i class=\"fas fa-tag me-1\"></i> Type de promotion *
                            </label>
                            <div class=\"invalid-feedback d-block\">";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), 'errors');
        yield "</div>
                            <small class=\"text-muted d-block mt-1\" style=\"font-size:0.7rem;\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, true, false, 26), "vars", [], "any", false, true, false, 26), "help", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "help", [], "any", false, false, false, 26), "")) : ("")), "html", null, true);
        yield "</small>
                        </div>
                    </div>
                </div>
                
                <!-- Description -->
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <div class=\"col-12 col-md-12\">
                        <div class=\"form-floating\">
                            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "style" => "height: 80px; min-height: 80px;"]]);
        yield "
                            <label for=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "description", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36), "html", null, true);
        yield "\">
                                <i class=\"fas fa-align-left me-1\"></i> Description
                            </label>
                            <div class=\"invalid-feedback d-block\">";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), 'errors');
        yield "</div>
                            <small class=\"text-muted d-block mt-1\" style=\"font-size:0.7rem;\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, true, false, 40), "vars", [], "any", false, true, false, 40), "help", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40), "vars", [], "any", false, false, false, 40), "help", [], "any", false, false, false, 40), "")) : ("")), "html", null, true);
        yield "</small>
                        </div>
                    </div>
                </div>
                
                <!-- Statut -->
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <div class=\"col-12 col-md-12\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body p-2 p-md-3\">
                                <div class=\"d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between mb-2 gap-2\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-toggle-on me-2 text-primary\"></i>
                                        <span class=\"fw-bold small\">Statut</span>
                                    </div>
                                    <span class=\"badge ";
        // line 55
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "is_active", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "data", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield " px-3 py-2\" id=\"status-badge\" style=\"font-size:0.7rem;\">
                                        ";
        // line 56
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "is_active", [], "any", false, false, false, 56), "vars", [], "any", false, false, false, 56), "data", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
        yield "
                                    </span>
                                </div>
                                <div class=\"form-check form-switch\">
                                    ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "is_active", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        yield "
                                    <label class=\"form-check-label small\" for=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "is_active", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
        yield "\" id=\"status-label\">
                                        ";
        // line 62
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "is_active", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "data", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Type actif") : ("Type inactif"));
        yield "
                                    </label>
                                </div>
                                <small class=\"text-muted mt-1 d-block\" style=\"font-size:0.65rem;\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Les types inactifs ne seront pas disponibles pour les promotions.
                                </small>
                                <div class=\"invalid-feedback d-block\">";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "is_active", [], "any", false, false, false, 69), 'errors');
        yield "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer -->
            <div class=\"card-footer bg-light py-2 py-md-3\">
                <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2\">
                    <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm w-100 w-sm-auto\">
                        <i class=\"fas fa-times me-1\"></i> <span class=\"d-none d-sm-inline\">Annuler</span>
                    </a>
                    <button type=\"submit\" class=\"btn btn-primary btn-sm w-100 w-sm-auto px-3 px-md-4\">
                        <i class=\"fas fa-save me-1\"></i> 
                        ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 84, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 91
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'form_end');
        yield "

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion du switch actif/inactif
    const activeSwitch = document.getElementById('";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "is_active", [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "id", [], "any", false, false, false, 96), "html", null, true);
        yield "');
    const statusBadge = document.getElementById('status-badge');
    const statusLabel = document.getElementById('status-label');
    
    if (activeSwitch && statusBadge && statusLabel) {
        function updateStatus() {
            if (activeSwitch.checked) {
                statusBadge.textContent = 'ACTIF';
                statusBadge.className = 'badge bg-success px-3 py-2';
                statusBadge.style.fontSize = '0.7rem';
                statusLabel.textContent = 'Type actif';
            } else {
                statusBadge.textContent = 'INACTIF';
                statusBadge.className = 'badge bg-danger px-3 py-2';
                statusBadge.style.fontSize = '0.7rem';
                statusLabel.textContent = 'Type inactif';
            }
        }
        activeSwitch.addEventListener('change', updateStatus);
        updateStatus();
    }
    
    // ✅ Gestion de la description automatique
    const typeSelect = document.getElementById('";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "name", [], "any", false, false, false, 119), "vars", [], "any", false, false, false, 119), "id", [], "any", false, false, false, 119), "html", null, true);
        yield "');
    const descriptionField = document.getElementById('";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "description", [], "any", false, false, false, 120), "vars", [], "any", false, false, false, 120), "id", [], "any", false, false, false, 120), "html", null, true);
        yield "');
    
    // Descriptions prédéfinies
    const descriptions = {
        'Pourcentage': 'Réduction en pourcentage sur le prix (ex: 10% de réduction)',
        'Montant fixe': 'Réduction d\\'un montant précis en devise locale (ex: 500 FCFA de réduction)',
        'Achat multiple': 'Réduction pour l\\'achat de plusieurs articles (ex: 2 achetés = 1 offert)',
        'Seuil minimum': 'Réduction basée sur un montant minimum d\\'achat (ex: -10% dès 10000 FCFA)',
        'Happy Hour': 'Réduction sur une plage horaire spécifique (ex: -20% entre 14h et 17h)'
    };
    
    if (typeSelect && descriptionField) {
        function updateDescription() {
            const selectedValue = typeSelect.value;
            if (selectedValue && descriptions[selectedValue]) {
                descriptionField.value = descriptions[selectedValue];
            } else {
                descriptionField.value = '';
            }
        }
        
        typeSelect.addEventListener('change', updateDescription);
        // Appel initial si une valeur est déjà sélectionnée
        if (typeSelect.value) {
            updateDescription();
        }
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
/* ========================================
   CARTE
======================================== */
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

/* ========================================
   FORMULAIRES - VERSION RESPONSIVE
======================================== */
.form-floating > label {
    padding-left: 2.5rem;
    font-size: 0.85rem;
}
.form-floating > .form-control,
.form-floating > .form-select {
    height: calc(3.5rem + 2px);
    padding: 1rem 0.75rem 0.5rem 2.5rem;
    border-radius: 10px;
    border: 2px solid #e0e0e0;
    font-size: 0.9rem;
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
.form-floating > .form-control:focus ~ label i,
.form-floating > .form-control:not(:placeholder-shown) ~ label i,
.form-floating > .form-select:focus ~ label i,
.form-floating > .form-select:not([value=\"\"]):not(:placeholder-shown) ~ label i {
    color: #667eea;
}

/* ========================================
   BOUTON
======================================== */
.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
    border: none;
    transition: all 0.3s ease;
}
.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
}

/* ========================================
   SWITCH
======================================== */
.form-switch .form-check-input {
    width: 3em;
    height: 1.6em;
    cursor: pointer;
}
@media (min-width: 768px) {
    .form-switch .form-check-input {
        width: 3.5em;
        height: 1.8em;
    }
}
.form-check-input:checked {
    background-color: #198754;
    border-color: #198754;
}
.form-check-label {
    font-size: 0.85rem;
}
@media (max-width: 576px) {
    .form-check-label {
        font-size: 0.75rem;
    }
}

/* ========================================
   RESPONSIVE - MOBILE (< 576px)
======================================== */
@media (max-width: 576px) {
    .card-hover {
        border-radius: 10px;
    }
    .card-hover:hover {
        transform: none !important;
    }
    
    .card-header {
        padding: 0.5rem 0.75rem !important;
    }
    .card-body {
        padding: 0.5rem 0.75rem !important;
    }
    .card-footer {
        padding: 0.5rem 0.75rem !important;
    }
    
    .form-floating > label {
        font-size: 0.7rem;
        padding-left: 2rem;
    }
    .form-floating > .form-control,
    .form-floating > .form-select {
        height: calc(3rem + 2px);
        padding: 0.75rem 0.5rem 0.35rem 2rem;
        font-size: 0.75rem;
        border-radius: 8px;
    }
    .form-floating > .form-control:focus ~ label,
    .form-floating > .form-control:not(:placeholder-shown) ~ label,
    .form-floating > .form-select:focus ~ label,
    .form-floating > .form-select:not([value=\"\"]):not(:placeholder-shown) ~ label {
        transform: scale(.8) translateY(-0.6rem) translateX(0.15rem);
    }
    
    .form-switch .form-check-input {
        width: 2.5em;
        height: 1.4em;
    }
    
    .btn {
        font-size: 0.7rem !important;
        padding: 0.25rem 0.5rem !important;
    }
    .btn i {
        font-size: 0.7rem !important;
    }
    
    .badge {
        font-size: 0.6rem !important;
        padding: 0.2rem 0.5rem !important;
    }
    
    .text-muted {
        font-size: 0.6rem !important;
    }
    
    .card-body .row.g-2 {
        --bs-gutter-y: 0.5rem !important;
    }
}

/* ========================================
   TABLETTE (576px - 768px)
======================================== */
@media (min-width: 577px) and (max-width: 768px) {
    .card-body {
        padding: 1rem !important;
    }
    .card-header {
        padding: 0.75rem 1rem !important;
    }
    .card-footer {
        padding: 0.75rem 1rem !important;
    }
    
    .form-floating > label {
        font-size: 0.8rem;
    }
    .form-floating > .form-control,
    .form-floating > .form-select {
        font-size: 0.85rem;
    }
    
    .btn {
        font-size: 0.75rem !important;
    }
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
        return array (  233 => 120,  229 => 119,  203 => 96,  195 => 91,  185 => 84,  177 => 79,  164 => 69,  154 => 62,  150 => 61,  146 => 60,  139 => 56,  135 => 55,  117 => 40,  113 => 39,  107 => 36,  103 => 35,  91 => 26,  87 => 25,  81 => 22,  77 => 21,  68 => 14,  64 => 12,  60 => 10,  58 => 9,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/type_promotion/_form.html.twig #}
{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': true}}) }}
<div class=\"row g-2 g-md-4\">
    <div class=\"col-12 col-lg-12\">
        <div class=\"card shadow-lg border-0 card-hover\">
            <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                    <i class=\"fas fa-percent me-2\"></i>
                    {% if type.id is defined and type.id is not null %}
                        Modifier le type de promotion
                    {% else %}
                        Nouveau type de promotion
                    {% endif %}
                </h5>
            </div>
            <div class=\"card-body p-2 p-md-4\">
                <!-- Nom -->
                <div class=\"row g-2 g-md-3\">
                    <div class=\"col-12 col-md-12\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.name, {'attr': {'class': 'form-control', 'placeholder': ' ', 'autocomplete': 'off'}}) }}
                            <label for=\"{{ form.name.vars.id }}\">
                                <i class=\"fas fa-tag me-1\"></i> Type de promotion *
                            </label>
                            <div class=\"invalid-feedback d-block\">{{ form_errors(form.name) }}</div>
                            <small class=\"text-muted d-block mt-1\" style=\"font-size:0.7rem;\">{{ form.name.vars.help|default('') }}</small>
                        </div>
                    </div>
                </div>
                
                <!-- Description -->
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <div class=\"col-12 col-md-12\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.description, {'attr': {'class': 'form-control', 'placeholder': ' ', 'style': 'height: 80px; min-height: 80px;'}}) }}
                            <label for=\"{{ form.description.vars.id }}\">
                                <i class=\"fas fa-align-left me-1\"></i> Description
                            </label>
                            <div class=\"invalid-feedback d-block\">{{ form_errors(form.description) }}</div>
                            <small class=\"text-muted d-block mt-1\" style=\"font-size:0.7rem;\">{{ form.description.vars.help|default('') }}</small>
                        </div>
                    </div>
                </div>
                
                <!-- Statut -->
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <div class=\"col-12 col-md-12\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body p-2 p-md-3\">
                                <div class=\"d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between mb-2 gap-2\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-toggle-on me-2 text-primary\"></i>
                                        <span class=\"fw-bold small\">Statut</span>
                                    </div>
                                    <span class=\"badge {{ form.is_active.vars.data ? 'bg-success' : 'bg-danger' }} px-3 py-2\" id=\"status-badge\" style=\"font-size:0.7rem;\">
                                        {{ form.is_active.vars.data ? 'ACTIF' : 'INACTIF' }}
                                    </span>
                                </div>
                                <div class=\"form-check form-switch\">
                                    {{ form_widget(form.is_active, {'attr': {'class': 'form-check-input', 'role': 'switch'}}) }}
                                    <label class=\"form-check-label small\" for=\"{{ form.is_active.vars.id }}\" id=\"status-label\">
                                        {{ form.is_active.vars.data ? 'Type actif' : 'Type inactif' }}
                                    </label>
                                </div>
                                <small class=\"text-muted mt-1 d-block\" style=\"font-size:0.65rem;\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Les types inactifs ne seront pas disponibles pour les promotions.
                                </small>
                                <div class=\"invalid-feedback d-block\">{{ form_errors(form.is_active) }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer -->
            <div class=\"card-footer bg-light py-2 py-md-3\">
                <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2\">
                    <a href=\"{{ path('app_admin_type_promotion_index') }}\" class=\"btn btn-outline-secondary btn-sm w-100 w-sm-auto\">
                        <i class=\"fas fa-times me-1\"></i> <span class=\"d-none d-sm-inline\">Annuler</span>
                    </a>
                    <button type=\"submit\" class=\"btn btn-primary btn-sm w-100 w-sm-auto px-3 px-md-4\">
                        <i class=\"fas fa-save me-1\"></i> 
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
    // Gestion du switch actif/inactif
    const activeSwitch = document.getElementById('{{ form.is_active.vars.id }}');
    const statusBadge = document.getElementById('status-badge');
    const statusLabel = document.getElementById('status-label');
    
    if (activeSwitch && statusBadge && statusLabel) {
        function updateStatus() {
            if (activeSwitch.checked) {
                statusBadge.textContent = 'ACTIF';
                statusBadge.className = 'badge bg-success px-3 py-2';
                statusBadge.style.fontSize = '0.7rem';
                statusLabel.textContent = 'Type actif';
            } else {
                statusBadge.textContent = 'INACTIF';
                statusBadge.className = 'badge bg-danger px-3 py-2';
                statusBadge.style.fontSize = '0.7rem';
                statusLabel.textContent = 'Type inactif';
            }
        }
        activeSwitch.addEventListener('change', updateStatus);
        updateStatus();
    }
    
    // ✅ Gestion de la description automatique
    const typeSelect = document.getElementById('{{ form.name.vars.id }}');
    const descriptionField = document.getElementById('{{ form.description.vars.id }}');
    
    // Descriptions prédéfinies
    const descriptions = {
        'Pourcentage': 'Réduction en pourcentage sur le prix (ex: 10% de réduction)',
        'Montant fixe': 'Réduction d\\'un montant précis en devise locale (ex: 500 FCFA de réduction)',
        'Achat multiple': 'Réduction pour l\\'achat de plusieurs articles (ex: 2 achetés = 1 offert)',
        'Seuil minimum': 'Réduction basée sur un montant minimum d\\'achat (ex: -10% dès 10000 FCFA)',
        'Happy Hour': 'Réduction sur une plage horaire spécifique (ex: -20% entre 14h et 17h)'
    };
    
    if (typeSelect && descriptionField) {
        function updateDescription() {
            const selectedValue = typeSelect.value;
            if (selectedValue && descriptions[selectedValue]) {
                descriptionField.value = descriptions[selectedValue];
            } else {
                descriptionField.value = '';
            }
        }
        
        typeSelect.addEventListener('change', updateDescription);
        // Appel initial si une valeur est déjà sélectionnée
        if (typeSelect.value) {
            updateDescription();
        }
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
/* ========================================
   CARTE
======================================== */
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

/* ========================================
   FORMULAIRES - VERSION RESPONSIVE
======================================== */
.form-floating > label {
    padding-left: 2.5rem;
    font-size: 0.85rem;
}
.form-floating > .form-control,
.form-floating > .form-select {
    height: calc(3.5rem + 2px);
    padding: 1rem 0.75rem 0.5rem 2.5rem;
    border-radius: 10px;
    border: 2px solid #e0e0e0;
    font-size: 0.9rem;
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
.form-floating > .form-control:focus ~ label i,
.form-floating > .form-control:not(:placeholder-shown) ~ label i,
.form-floating > .form-select:focus ~ label i,
.form-floating > .form-select:not([value=\"\"]):not(:placeholder-shown) ~ label i {
    color: #667eea;
}

/* ========================================
   BOUTON
======================================== */
.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
    border: none;
    transition: all 0.3s ease;
}
.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
}

/* ========================================
   SWITCH
======================================== */
.form-switch .form-check-input {
    width: 3em;
    height: 1.6em;
    cursor: pointer;
}
@media (min-width: 768px) {
    .form-switch .form-check-input {
        width: 3.5em;
        height: 1.8em;
    }
}
.form-check-input:checked {
    background-color: #198754;
    border-color: #198754;
}
.form-check-label {
    font-size: 0.85rem;
}
@media (max-width: 576px) {
    .form-check-label {
        font-size: 0.75rem;
    }
}

/* ========================================
   RESPONSIVE - MOBILE (< 576px)
======================================== */
@media (max-width: 576px) {
    .card-hover {
        border-radius: 10px;
    }
    .card-hover:hover {
        transform: none !important;
    }
    
    .card-header {
        padding: 0.5rem 0.75rem !important;
    }
    .card-body {
        padding: 0.5rem 0.75rem !important;
    }
    .card-footer {
        padding: 0.5rem 0.75rem !important;
    }
    
    .form-floating > label {
        font-size: 0.7rem;
        padding-left: 2rem;
    }
    .form-floating > .form-control,
    .form-floating > .form-select {
        height: calc(3rem + 2px);
        padding: 0.75rem 0.5rem 0.35rem 2rem;
        font-size: 0.75rem;
        border-radius: 8px;
    }
    .form-floating > .form-control:focus ~ label,
    .form-floating > .form-control:not(:placeholder-shown) ~ label,
    .form-floating > .form-select:focus ~ label,
    .form-floating > .form-select:not([value=\"\"]):not(:placeholder-shown) ~ label {
        transform: scale(.8) translateY(-0.6rem) translateX(0.15rem);
    }
    
    .form-switch .form-check-input {
        width: 2.5em;
        height: 1.4em;
    }
    
    .btn {
        font-size: 0.7rem !important;
        padding: 0.25rem 0.5rem !important;
    }
    .btn i {
        font-size: 0.7rem !important;
    }
    
    .badge {
        font-size: 0.6rem !important;
        padding: 0.2rem 0.5rem !important;
    }
    
    .text-muted {
        font-size: 0.6rem !important;
    }
    
    .card-body .row.g-2 {
        --bs-gutter-y: 0.5rem !important;
    }
}

/* ========================================
   TABLETTE (576px - 768px)
======================================== */
@media (min-width: 577px) and (max-width: 768px) {
    .card-body {
        padding: 1rem !important;
    }
    .card-header {
        padding: 0.75rem 1rem !important;
    }
    .card-footer {
        padding: 0.75rem 1rem !important;
    }
    
    .form-floating > label {
        font-size: 0.8rem;
    }
    .form-floating > .form-control,
    .form-floating > .form-select {
        font-size: 0.85rem;
    }
    
    .btn {
        font-size: 0.75rem !important;
    }
}
</style>", "admin/type_promotion/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\type_promotion\\_form.html.twig");
    }
}
