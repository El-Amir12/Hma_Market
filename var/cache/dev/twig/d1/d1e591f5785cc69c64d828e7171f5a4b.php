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

/* admin/purchase/_purchase_item_form.html.twig */
class __TwigTemplate_6a4f9ae631919a8d7fe7eb2d9a6bf5cb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase/_purchase_item_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase/_purchase_item_form.html.twig"));

        // line 2
        yield "<div class=\"purchase-item card border-0 shadow-sm mb-3\" data-index=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("index", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 2, $this->source); })()), "__name__")) : ("__name__")), "html", null, true);
        yield "\">
    <div class=\"card-header bg-light py-3\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <div class=\"d-flex align-items-center\">
                <span class=\"badge bg-primary rounded-circle me-2\" style=\"width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;\">
                    ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((array_key_exists("index", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 7, $this->source); })()), 0)) : (0)) + 1), "html", null, true);
        yield "
                </span>
                <h6 class=\"mb-0\">Produit #<span class=\"item-number\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((array_key_exists("index", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 9, $this->source); })()), 0)) : (0)) + 1), "html", null, true);
        yield "</span></h6>
            </div>
            <button type=\"button\" class=\"btn btn-sm btn-outline-danger remove-item-btn\" 
                    data-bs-toggle=\"tooltip\" 
                    title=\"Supprimer ce produit\">
                <i class=\"fas fa-trash\"></i>
            </button>
        </div>
    </div>
    
    <div class=\"card-body\">
        <div class=\"row g-3\">
            <!-- Produit -->
            <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                    <label class=\"form-label fw-semibold d-flex align-items-center\">
                        <i class=\"fas fa-box me-2 text-primary\"></i> Produit *
                    </label>
                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "product", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control product-select", "placeholder" => "Rechercher un produit...", "required" => true]]);
        // line 31
        yield "
                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "product", [], "any", false, false, false, 32), 'errors');
        yield "
                </div>
            </div>
            
            <!-- Quantité -->
            <div class=\"col-lg-3\">
                <div class=\"mb-3\">
                    <label class=\"form-label fw-semibold d-flex align-items-center\">
                        <i class=\"fas fa-hashtag me-2 text-primary\"></i> Quantité *
                    </label>
                    <div class=\"input-group\">
                        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "quantity", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control quantity-input", "min" => 1, "max" => 9999, "step" => 1, "placeholder" => "Qté", "required" => true, "value" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 50
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "quantity", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "value", [], "any", false, false, false, 50)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "quantity", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "value", [], "any", false, false, false, 50)) : (1))]]);
        // line 51
        yield "
                        <span class=\"input-group-text\">unité(s)</span>
                    </div>
                    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "quantity", [], "any", false, false, false, 54), 'errors');
        yield "
                </div>
            </div>
            
            <!-- Prix unitaire -->
            <div class=\"col-lg-3\">
                <div class=\"mb-3\">
                    <label class=\"form-label fw-semibold d-flex align-items-center\">
                        <i class=\"fas fa-money-bill-wave me-2 text-primary\"></i> Prix unitaire *
                    </label>
                    <div class=\"input-group\">
                        ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "unit_price", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control price-input", "min" => 0, "step" => "0.01", "placeholder" => "Prix", "required" => true]]);
        // line 71
        yield "
                        <span class=\"input-group-text\">FCFA</span>
                    </div>
                    ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "unit_price", [], "any", false, false, false, 74), 'errors');
        yield "
                </div>
            </div>
            
            <!-- Numéro de lot -->
            <div class=\"col-md-4\">
                <div class=\"mb-3\">
                    <label class=\"form-label fw-semibold d-flex align-items-center\">
                        <i class=\"fas fa-barcode me-2 text-primary\"></i> N° Lot *
                    </label>
                    ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "batch_number", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control batch-input", "placeholder" => "LOT-YYYYMMDD-XXX", "required" => true]]);
        // line 88
        yield "
                    ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "batch_number", [], "any", false, false, false, 89), 'errors');
        yield "
                </div>
            </div>
            
            <!-- Date de fabrication -->
            <div class=\"col-md-4 manufacturing-date-container\" style=\"display: none;\">
                <div class=\"mb-3\">
                    <label class=\"form-label fw-semibold d-flex align-items-center\">
                        <i class=\"fas fa-calendar-plus me-2 text-primary\"></i> Date fabrication
                    </label>
                    ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "manufacturing_date", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "form-control manufacturing-date"]]);
        // line 101
        yield "
                    ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "manufacturing_date", [], "any", false, false, false, 102), 'errors');
        yield "
                </div>
            </div>
            
            <!-- Date d'expiration -->
            <div class=\"col-md-4 expiry-date-container\" style=\"display: none;\">
                <div class=\"mb-3\">
                    <label class=\"form-label fw-semibold d-flex align-items-center\">
                        <i class=\"fas fa-calendar-times me-2 text-primary\"></i> Date expiration
                    </label>
                    ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "expiry_date", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-control expiry-date"]]);
        // line 114
        yield "
                    ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "expiry_date", [], "any", false, false, false, 115), 'errors');
        yield "
                </div>
            </div>
            
            <!-- Total ligne -->
            <div class=\"col-12\">
                <div class=\"border-top pt-3\">
                    <div class=\"d-flex justify-content-end\">
                        <div class=\"text-end\">
                            <small class=\"text-muted d-block\">Total de la ligne</small>
                            <h4 class=\"mb-0 text-success line-total\">0 FCFA</h4>
                            <small class=\"text-muted\">
                                <span class=\"quantity-display\">0</span> × 
                                <span class=\"price-display\">0</span> FCFA
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/purchase/_purchase_item_form.html.twig";
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
        return array (  185 => 115,  182 => 114,  180 => 112,  167 => 102,  164 => 101,  162 => 99,  149 => 89,  146 => 88,  144 => 84,  131 => 74,  126 => 71,  124 => 65,  110 => 54,  105 => 51,  103 => 50,  102 => 43,  88 => 32,  85 => 31,  83 => 27,  62 => 9,  57 => 7,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/purchase/_purchase_item_form.html.twig - CORRIGÉ #}
<div class=\"purchase-item card border-0 shadow-sm mb-3\" data-index=\"{{ index|default('__name__') }}\">
    <div class=\"card-header bg-light py-3\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <div class=\"d-flex align-items-center\">
                <span class=\"badge bg-primary rounded-circle me-2\" style=\"width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;\">
                    {{ (index|default(0)) + 1 }}
                </span>
                <h6 class=\"mb-0\">Produit #<span class=\"item-number\">{{ (index|default(0)) + 1 }}</span></h6>
            </div>
            <button type=\"button\" class=\"btn btn-sm btn-outline-danger remove-item-btn\" 
                    data-bs-toggle=\"tooltip\" 
                    title=\"Supprimer ce produit\">
                <i class=\"fas fa-trash\"></i>
            </button>
        </div>
    </div>
    
    <div class=\"card-body\">
        <div class=\"row g-3\">
            <!-- Produit -->
            <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                    <label class=\"form-label fw-semibold d-flex align-items-center\">
                        <i class=\"fas fa-box me-2 text-primary\"></i> Produit *
                    </label>
                    {{ form_widget(form.product, {'attr': {
                        'class': 'form-control product-select',
                        'placeholder': 'Rechercher un produit...',
                        'required': true
                    }}) }}
                    {{ form_errors(form.product) }}
                </div>
            </div>
            
            <!-- Quantité -->
            <div class=\"col-lg-3\">
                <div class=\"mb-3\">
                    <label class=\"form-label fw-semibold d-flex align-items-center\">
                        <i class=\"fas fa-hashtag me-2 text-primary\"></i> Quantité *
                    </label>
                    <div class=\"input-group\">
                        {{ form_widget(form.quantity, {'attr': {
                            'class': 'form-control quantity-input',
                            'min': 1,
                            'max': 9999,
                            'step': 1,
                            'placeholder': 'Qté',
                            'required': true,
                            'value': form.quantity.vars.value ?: 1
                        }}) }}
                        <span class=\"input-group-text\">unité(s)</span>
                    </div>
                    {{ form_errors(form.quantity) }}
                </div>
            </div>
            
            <!-- Prix unitaire -->
            <div class=\"col-lg-3\">
                <div class=\"mb-3\">
                    <label class=\"form-label fw-semibold d-flex align-items-center\">
                        <i class=\"fas fa-money-bill-wave me-2 text-primary\"></i> Prix unitaire *
                    </label>
                    <div class=\"input-group\">
                        {{ form_widget(form.unit_price, {'attr': {
                            'class': 'form-control price-input',
                            'min': 0,
                            'step': '0.01',
                            'placeholder': 'Prix',
                            'required': true
                        }}) }}
                        <span class=\"input-group-text\">FCFA</span>
                    </div>
                    {{ form_errors(form.unit_price) }}
                </div>
            </div>
            
            <!-- Numéro de lot -->
            <div class=\"col-md-4\">
                <div class=\"mb-3\">
                    <label class=\"form-label fw-semibold d-flex align-items-center\">
                        <i class=\"fas fa-barcode me-2 text-primary\"></i> N° Lot *
                    </label>
                    {{ form_widget(form.batch_number, {'attr': {
                        'class': 'form-control batch-input',
                        'placeholder': 'LOT-YYYYMMDD-XXX',
                        'required': true
                    }}) }}
                    {{ form_errors(form.batch_number) }}
                </div>
            </div>
            
            <!-- Date de fabrication -->
            <div class=\"col-md-4 manufacturing-date-container\" style=\"display: none;\">
                <div class=\"mb-3\">
                    <label class=\"form-label fw-semibold d-flex align-items-center\">
                        <i class=\"fas fa-calendar-plus me-2 text-primary\"></i> Date fabrication
                    </label>
                    {{ form_widget(form.manufacturing_date, {'attr': {
                        'class': 'form-control manufacturing-date'
                    }}) }}
                    {{ form_errors(form.manufacturing_date) }}
                </div>
            </div>
            
            <!-- Date d'expiration -->
            <div class=\"col-md-4 expiry-date-container\" style=\"display: none;\">
                <div class=\"mb-3\">
                    <label class=\"form-label fw-semibold d-flex align-items-center\">
                        <i class=\"fas fa-calendar-times me-2 text-primary\"></i> Date expiration
                    </label>
                    {{ form_widget(form.expiry_date, {'attr': {
                        'class': 'form-control expiry-date'
                    }}) }}
                    {{ form_errors(form.expiry_date) }}
                </div>
            </div>
            
            <!-- Total ligne -->
            <div class=\"col-12\">
                <div class=\"border-top pt-3\">
                    <div class=\"d-flex justify-content-end\">
                        <div class=\"text-end\">
                            <small class=\"text-muted d-block\">Total de la ligne</small>
                            <h4 class=\"mb-0 text-success line-total\">0 FCFA</h4>
                            <small class=\"text-muted\">
                                <span class=\"quantity-display\">0</span> × 
                                <span class=\"price-display\">0</span> FCFA
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "admin/purchase/_purchase_item_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\purchase\\_purchase_item_form.html.twig");
    }
}
