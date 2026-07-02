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
class __TwigTemplate_bf39a29fef7ce5318cf3086bda51e8a2 extends Template
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
        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "
<div class=\"row g-4\">
    <div class=\"col-lg-12\">
        <div class=\"card shadow-lg border-0 card-hover\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-percent me-2\"></i>
                    ";
        // line 9
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["type"] ?? null), "id", [], "any", true, true, false, 9) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["type"] ?? null), "id", [], "any", false, false, false, 9)))) {
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
            <div class=\"card-body\">
                <div class=\"row g-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        yield "
                            <label for=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 21), "vars", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21), "html", null, true);
        yield "\">
                                <i class=\"fas fa-tag me-1\"></i> Type de promotion *
                            </label>
                            <div class=\"invalid-feedback d-block\">";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 24), 'errors');
        yield "</div>
                            <small class=\"text-muted\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, true, false, 25), "vars", [], "any", false, true, false, 25), "help", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 25), "vars", [], "any", false, false, false, 25), "help", [], "any", false, false, false, 25), "")) : ("")), "html", null, true);
        yield "</small>
                        </div>
                    </div>
                </div>
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "style" => "height: 100px"]]);
        yield "
                            <label for=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 33), "vars", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33), "html", null, true);
        yield "\">
                                <i class=\"fas fa-align-left me-1\"></i> Description
                            </label>
                            <div class=\"invalid-feedback d-block\">";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 36), 'errors');
        yield "</div>
                            <small class=\"text-muted\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, true, false, 37), "vars", [], "any", false, true, false, 37), "help", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "help", [], "any", false, false, false, 37), "")) : ("")), "html", null, true);
        yield "</small>
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
        // line 50
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "data", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\" id=\"status-badge\">
                                        ";
        // line 51
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "data", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
        yield "
                                    </span>
                                </div>
                                <div class=\"form-check form-switch\">
                                    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        yield "
                                    <label class=\"form-check-label\" for=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 56), "vars", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56), "html", null, true);
        yield "\" id=\"status-label\">
                                        ";
        // line 57
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "data", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Type actif") : ("Type inactif"));
        yield "
                                    </label>
                                </div>
                                <small class=\"text-muted mt-1 d-block\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Les types inactifs ne seront pas disponibles pour les promotions.
                                </small>
                                <div class=\"invalid-feedback d-block\">";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 64), 'errors');
        yield "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"card-footer bg-light py-3\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_index");
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-times me-2\"></i> Annuler
                    </a>
                    <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                        <i class=\"fas fa-save me-2\"></i> 
                        ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 84
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion du switch actif/inactif
    const activeSwitch = document.getElementById('";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 89), "vars", [], "any", false, false, false, 89), "id", [], "any", false, false, false, 89), "html", null, true);
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
    
    // ✅ CORRECTION : Gestion de la description automatique
    const typeSelect = document.getElementById('type_promotion_name');
    const descriptionField = document.getElementById('type_promotion_description');
    
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
            // ✅ Récupérer la valeur sélectionnée (qui est maintenant le nom du type)
            const selectedValue = typeSelect.value;
            console.log('Valeur sélectionnée:', selectedValue); // Debug
            
            if (selectedValue && descriptions[selectedValue]) {
                descriptionField.value = descriptions[selectedValue];
            } else {
                descriptionField.value = '';
            }
        }
        
        typeSelect.addEventListener('change', updateDescription);
        updateDescription(); // Appel initial
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
        return array (  190 => 89,  182 => 84,  172 => 77,  164 => 72,  153 => 64,  143 => 57,  139 => 56,  135 => 55,  128 => 51,  124 => 50,  108 => 37,  104 => 36,  98 => 33,  94 => 32,  84 => 25,  80 => 24,  74 => 21,  70 => 20,  62 => 14,  58 => 12,  54 => 10,  52 => 9,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/type_promotion/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\type_promotion\\_form.html.twig");
    }
}
