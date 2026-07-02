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

/* admin/supplier/_form.html.twig */
class __TwigTemplate_e5d72759222de878e73ebb2491d4e46a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/supplier/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/supplier/_form.html.twig"));

        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "
<div class=\"row g-4\">
    <!-- Carte Informations fournisseur -->
    <div class=\"col-lg-12\">
        <div class=\"card shadow-lg border-0 h-100 card-hover\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-truck me-2\"></i>
                    ";
        // line 10
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["supplier"] ?? null), "id", [], "any", true, true, false, 10) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)))) {
            // line 11
            yield "                        Modifier le fournisseur
                    ";
        } else {
            // line 13
            yield "                        Nouveau fournisseur
                    ";
        }
        // line 15
        yield "                </h5>
            </div>
            <div class=\"card-body\">
                <!-- Informations de base -->
                <div class=\"row g-3\">
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 26
        yield "
                            <label for=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27), "html", null, true);
        yield "\">
                                <i class=\"fas fa-building me-1\"></i> Nom du fournisseur *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "contact_person", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Jean Dupont", "autocomplete" => "off"]]);
        // line 41
        yield "
                            <label for=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "contact_person", [], "any", false, false, false, 42), "vars", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "html", null, true);
        yield "\">
                                <i class=\"fas fa-user me-1\"></i> Personne de contact *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "contact_person", [], "any", false, false, false, 46), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "phone", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: +229 61 23 45 67", "autocomplete" => "off"]]);
        // line 56
        yield "
                            <label for=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "phone", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57), "html", null, true);
        yield "\">
                                <i class=\"fas fa-phone me-1\"></i> Téléphone *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "phone", [], "any", false, false, false, 61), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "email", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: contact@fournisseur.com", "autocomplete" => "off"]]);
        // line 71
        yield "
                            <label for=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "email", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72), "html", null, true);
        yield "\">
                                <i class=\"fas fa-envelope me-1\"></i> Email *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "email", [], "any", false, false, false, 76), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "adress", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "style" => "height: 100px"]]);
        // line 86
        yield "
                            <label for=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "adress", [], "any", false, false, false, 87), "vars", [], "any", false, false, false, 87), "id", [], "any", false, false, false, 87), "html", null, true);
        yield "\">
                                <i class=\"fas fa-map-marker-alt me-1\"></i> Adresse *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "adress", [], "any", false, false, false, 91), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>

                <hr class=\"my-4\">

                <!-- Statut -->
                <div class=\"card border-0 bg-light mb-4\">
                    <div class=\"card-body\">
                        <h6 class=\"card-title text-primary mb-3\">
                            <i class=\"fas fa-toggle-on me-2\"></i> Statut du fournisseur
                        </h6>
                        <div class=\"d-flex align-items-center\">
                            <div class=\"form-check form-switch me-3\">
                                ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "is_active", [], "any", false, false, false, 107), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 110
        yield "
                                <label class=\"form-check-label\" for=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "is_active", [], "any", false, false, false, 111), "vars", [], "any", false, false, false, 111), "id", [], "any", false, false, false, 111), "html", null, true);
        yield "\">
                                    ";
        // line 112
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 112, $this->source); })()), "isActive", [], "any", false, false, false, 112)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Fournisseur actif") : ("Fournisseur inactif"));
        yield "
                                </label>
                            </div>
                            <span class=\"badge ";
        // line 115
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 115, $this->source); })()), "isActive", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\">
                                ";
        // line 116
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 116, $this->source); })()), "isActive", [], "any", false, false, false, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
        yield "
                            </span>
                        </div>
                        <small class=\"text-muted mt-2 d-block\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Les fournisseurs inactifs ne seront pas disponibles pour les achats.
                        </small>
                    </div>
                </div>
            </div>

            <!-- Footer avec boutons d'action -->
            <div class=\"card-footer bg-light py-3\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <a href=\"";
        // line 130
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index");
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-times me-2\"></i> Annuler
                    </a>
                    <div class=\"btn-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                            <i class=\"fas fa-save me-2\"></i> 
                            ";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 136, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
                        </button>
                        ";
        // line 138
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["supplier"] ?? null), "id", [], "any", true, true, false, 138) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 138, $this->source); })()), "id", [], "any", false, false, false, 138)))) {
            // line 139
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 139, $this->source); })()), "id", [], "any", false, false, false, 139)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-lg\">
                                <i class=\"fas fa-eye me-2\"></i> Voir
                            </a>
                        ";
        }
        // line 143
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 149
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/supplier/_form.html.twig";
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
        return array (  261 => 149,  253 => 143,  245 => 139,  243 => 138,  238 => 136,  229 => 130,  212 => 116,  208 => 115,  202 => 112,  198 => 111,  195 => 110,  193 => 107,  174 => 91,  167 => 87,  164 => 86,  162 => 82,  153 => 76,  146 => 72,  143 => 71,  141 => 67,  132 => 61,  125 => 57,  122 => 56,  120 => 52,  111 => 46,  104 => 42,  101 => 41,  99 => 37,  90 => 31,  83 => 27,  80 => 26,  78 => 22,  69 => 15,  65 => 13,  61 => 11,  59 => 10,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/supplier/_form.html.twig #}
{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': true}}) }}
<div class=\"row g-4\">
    <!-- Carte Informations fournisseur -->
    <div class=\"col-lg-12\">
        <div class=\"card shadow-lg border-0 h-100 card-hover\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-truck me-2\"></i>
                    {% if supplier.id is defined and supplier.id is not null %}
                        Modifier le fournisseur
                    {% else %}
                        Nouveau fournisseur
                    {% endif %}
                </h5>
            </div>
            <div class=\"card-body\">
                <!-- Informations de base -->
                <div class=\"row g-3\">
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.name, {'attr': {
                                'class': 'form-control',
                                'placeholder': ' ',
                                'autocomplete': 'off'
                            }}) }}
                            <label for=\"{{ form.name.vars.id }}\">
                                <i class=\"fas fa-building me-1\"></i> Nom du fournisseur *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.name) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.contact_person, {'attr': {
                                'class': 'form-control',
                                'placeholder': 'Ex: Jean Dupont',
                                'autocomplete': 'off'
                            }}) }}
                            <label for=\"{{ form.contact_person.vars.id }}\">
                                <i class=\"fas fa-user me-1\"></i> Personne de contact *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.contact_person) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.phone, {'attr': {
                                'class': 'form-control',
                                'placeholder': 'Ex: +229 61 23 45 67',
                                'autocomplete': 'off'
                            }}) }}
                            <label for=\"{{ form.phone.vars.id }}\">
                                <i class=\"fas fa-phone me-1\"></i> Téléphone *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.phone) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.email, {'attr': {
                                'class': 'form-control',
                                'placeholder': 'Ex: contact@fournisseur.com',
                                'autocomplete': 'off'
                            }}) }}
                            <label for=\"{{ form.email.vars.id }}\">
                                <i class=\"fas fa-envelope me-1\"></i> Email *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.email) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.adress, {'attr': {
                                'class': 'form-control',
                                'placeholder': ' ',
                                'style': 'height: 100px'
                            }}) }}
                            <label for=\"{{ form.adress.vars.id }}\">
                                <i class=\"fas fa-map-marker-alt me-1\"></i> Adresse *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.adress) }}
                            </div>
                        </div>
                    </div>
                </div>

                <hr class=\"my-4\">

                <!-- Statut -->
                <div class=\"card border-0 bg-light mb-4\">
                    <div class=\"card-body\">
                        <h6 class=\"card-title text-primary mb-3\">
                            <i class=\"fas fa-toggle-on me-2\"></i> Statut du fournisseur
                        </h6>
                        <div class=\"d-flex align-items-center\">
                            <div class=\"form-check form-switch me-3\">
                                {{ form_widget(form.is_active, {'attr': {
                                    'class': 'form-check-input',
                                    'role': 'switch'
                                }}) }}
                                <label class=\"form-check-label\" for=\"{{ form.is_active.vars.id }}\">
                                    {{ supplier.isActive ? 'Fournisseur actif' : 'Fournisseur inactif' }}
                                </label>
                            </div>
                            <span class=\"badge {{ supplier.isActive ? 'bg-success' : 'bg-danger' }}\">
                                {{ supplier.isActive ? 'ACTIF' : 'INACTIF' }}
                            </span>
                        </div>
                        <small class=\"text-muted mt-2 d-block\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Les fournisseurs inactifs ne seront pas disponibles pour les achats.
                        </small>
                    </div>
                </div>
            </div>

            <!-- Footer avec boutons d'action -->
            <div class=\"card-footer bg-light py-3\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <a href=\"{{ path('app_admin_supplier_index') }}\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-times me-2\"></i> Annuler
                    </a>
                    <div class=\"btn-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                            <i class=\"fas fa-save me-2\"></i> 
                            {{ button_label|default('Enregistrer') }}
                        </button>
                        {% if supplier.id is defined and supplier.id is not null %}
                            <a href=\"{{ path('app_admin_supplier_show', {'id': supplier.id}) }}\" class=\"btn btn-info btn-lg\">
                                <i class=\"fas fa-eye me-2\"></i> Voir
                            </a>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{ form_end(form) }}", "admin/supplier/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\supplier\\_form.html.twig");
    }
}
