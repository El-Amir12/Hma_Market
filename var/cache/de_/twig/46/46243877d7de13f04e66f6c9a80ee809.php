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

/* super_admin/subscription_plan/_form.html.twig */
class __TwigTemplate_734b88edb8723666352691e9d49eed06 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/subscription_plan/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/subscription_plan/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

<!-- Section : Informations générales -->
<div class=\"card shadow-lg border-0 mb-4 rounded-4\">
    <div class=\"card-header bg-gradient-primary text-white py-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold\">
            <i class=\"bi bi-info-circle-fill me-2\"></i>Informations générales
        </h5>
    </div>
    <div class=\"card-body p-4\">
        <div class=\"row g-4\">
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Nom technique"]]);
        yield "
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), 'label');
        yield "
                    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'errors');
        yield "
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "displayName", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Nom affiché"]]);
        yield "
                    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "displayName", [], "any", false, false, false, 22), 'label');
        yield "
                    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "displayName", [], "any", false, false, false, 23), 'errors');
        yield "
                </div>
            </div>
            <div class=\"col-12\">
                <div class=\"form-floating\">
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Description", "style" => "height: 100px"]]);
        yield "
                    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), 'label');
        yield "
                    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), 'errors');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section : Tarifs -->
<div class=\"card shadow-lg border-0 mb-4 rounded-4\">
    <div class=\"card-header bg-gradient-success text-white py-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold\">
            <i class=\"bi bi-currency-exchange me-2\"></i>Tarifs
        </h5>
    </div>
    <div class=\"card-body p-4\">
        <div class=\"row g-4\">
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "priceMonthly", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Prix mensuel"]]);
        yield "
                    ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "priceMonthly", [], "any", false, false, false, 49), 'label');
        yield "
                    ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "priceMonthly", [], "any", false, false, false, 50), 'errors');
        yield "
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "priceYearly", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Prix annuel"]]);
        yield "
                    ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "priceYearly", [], "any", false, false, false, 56), 'label');
        yield "
                    ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "priceYearly", [], "any", false, false, false, 57), 'errors');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section : Limites d'utilisation -->
<div class=\"card shadow-lg border-0 mb-4 rounded-4\">
    <div class=\"card-header bg-gradient-warning text-white py-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold\">
            <i class=\"bi bi-bar-chart-fill me-2\"></i>Limites d'utilisation
        </h5>
        <small class=\"text-white-50\">Laissez vide pour illimité</small>
    </div>
    <div class=\"card-body p-4\">
        <div class=\"row g-4\">
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "maxUsersPerRole", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Max utilisateurs par rôle"]]);
        yield "
                    ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "maxUsersPerRole", [], "any", false, false, false, 77), 'label');
        yield "
                    ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "maxUsersPerRole", [], "any", false, false, false, 78), 'errors');
        yield "
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "maxProducts", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Max produits"]]);
        yield "
                    ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "maxProducts", [], "any", false, false, false, 84), 'label');
        yield "
                    ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "maxProducts", [], "any", false, false, false, 85), 'errors');
        yield "
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "maxOrdersPerMonth", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Max commandes / mois"]]);
        yield "
                    ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "maxOrdersPerMonth", [], "any", false, false, false, 91), 'label');
        yield "
                    ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "maxOrdersPerMonth", [], "any", false, false, false, 92), 'errors');
        yield "
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "maxCategories", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Max catégories"]]);
        yield "
                    ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "maxCategories", [], "any", false, false, false, 98), 'label');
        yield "
                    ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "maxCategories", [], "any", false, false, false, 99), 'errors');
        yield "
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "maxSuppliers", [], "any", false, false, false, 104), 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Max fournisseurs"]]);
        yield "
                    ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "maxSuppliers", [], "any", false, false, false, 105), 'label');
        yield "
                    ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "maxSuppliers", [], "any", false, false, false, 106), 'errors');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section : Fonctionnalités -->
<div class=\"card shadow-lg border-0 mb-4 rounded-4\">
    <div class=\"card-header bg-gradient-info text-white py-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold\">
            <i class=\"bi bi-star-fill me-2\"></i>Fonctionnalités supplémentaires
        </h5>
    </div>
    <div class=\"card-body p-4\">
        <div class=\"mb-3\">
            <label class=\"form-label fw-semibold\">Liste des fonctionnalités</label>
            <div class=\"features-collection\" data-prototype=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "features", [], "any", false, false, false, 123), "vars", [], "any", false, false, false, 123), "prototype", [], "any", false, false, false, 123), 'widget'), "html_attr");
        yield "\">
                ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "features", [], "any", false, false, false, 124));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 125
            yield "                    <div class=\"input-group mb-2\">
                        ";
            // line 126
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["feature"], 'widget', ["attr" => ["class" => "form-control rounded-3"]]);
            yield "
                        <button type=\"button\" class=\"btn btn-outline-danger remove-feature rounded-3\">
                            <i class=\"bi bi-trash\"></i>
                        </button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        yield "            </div>
            <button type=\"button\" class=\"btn btn-outline-primary btn-sm mt-2 add-feature rounded-pill\">
                <i class=\"bi bi-plus-circle me-2\"></i>Ajouter une fonctionnalité
            </button>
            ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "features", [], "any", false, false, false, 136), 'errors');
        yield "
        </div>
    </div>
</div>

<!-- Section : Statut -->
<div class=\"card shadow-lg border-0 mb-4 rounded-4\">
    <div class=\"card-header bg-gradient-secondary text-white py-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold\">
            <i class=\"bi bi-toggle-on me-2\"></i>Statut
        </h5>
    </div>
    <div class=\"card-body p-4\">
        <div class=\"form-check form-switch\">
            ";
        // line 150
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "isActive", [], "any", false, false, false, 150), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
            ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "isActive", [], "any", false, false, false, 151), 'label', ["label_attr" => ["class" => "form-check-label fw-semibold"]]);
        yield "
            ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "isActive", [], "any", false, false, false, 152), 'errors');
        yield "
        </div>
    </div>
</div>

<!-- Boutons d'action -->
<div class=\"d-flex justify-content-between align-items-center mt-5\">
    <a href=\"";
        // line 159
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_index");
        yield "\" class=\"btn btn-outline-secondary btn-lg rounded-pill px-5\">
        <i class=\"bi bi-arrow-left me-2\"></i>Annuler
    </a>
    <button type=\"submit\" class=\"btn btn-primary btn-lg rounded-pill px-5 shadow-lg\">
        <i class=\"bi bi-check-circle-fill me-2\"></i>";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 163, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
    </button>
</div>

";
        // line 167
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), 'form_end');
        yield "

<!-- Script pour la gestion dynamique de la collection de fonctionnalités -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.features-collection');
    const addButton = document.querySelector('.add-feature');
    const prototype = container.dataset.prototype;

    addButton.addEventListener('click', function() {
        const index = container.children.length;
        const newForm = prototype.replace(/__name__/g, index);
        const div = document.createElement('div');
        div.className = 'input-group mb-2';
        div.innerHTML = newForm + '<button type=\"button\" class=\"btn btn-outline-danger remove-feature rounded-3\"><i class=\"bi bi-trash\"></i></button>';
        container.appendChild(div);
    });

    container.addEventListener('click', function(e) {
        if (e.target.closest('.remove-feature')) {
            e.target.closest('.input-group').remove();
        }
    });
});
</script>

<!-- Styles personnalisés pour le formulaire -->
<style>
/* Dégradés pour les entêtes de cartes */
.bg-gradient-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}
.bg-gradient-success {
    background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
}
.bg-gradient-warning {
    background: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);
}
.bg-gradient-info {
    background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
}
.bg-gradient-secondary {
    background: linear-gradient(135deg, #95a5a6 0%, #7f8c8d 100%);
}

/* Arrondis supplémentaires */
.rounded-top-4 {
    border-top-left-radius: 1rem !important;
    border-top-right-radius: 1rem !important;
}

/* Animation du bouton de soumission */
.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    transition: transform 0.3s, box-shadow 0.3s;
}
.btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 25px rgba(102,126,234,0.4);
}

/* Effet sur les cartes */
.card {
    transition: box-shadow 0.3s ease;
}
.card:hover {
    box-shadow: 0 25px 30px -12px rgba(0,0,0,0.2) !important;
}

/* Personnalisation des champs flottants */
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label {
    color: #667eea;
    opacity: 0.8;
    transform: scale(0.85) translateY(-0.75rem) translateX(0.15rem);
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
        return "super_admin/subscription_plan/_form.html.twig";
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
        return array (  341 => 167,  334 => 163,  327 => 159,  317 => 152,  313 => 151,  309 => 150,  292 => 136,  286 => 132,  274 => 126,  271 => 125,  267 => 124,  263 => 123,  243 => 106,  239 => 105,  235 => 104,  227 => 99,  223 => 98,  219 => 97,  211 => 92,  207 => 91,  203 => 90,  195 => 85,  191 => 84,  187 => 83,  179 => 78,  175 => 77,  171 => 76,  149 => 57,  145 => 56,  141 => 55,  133 => 50,  129 => 49,  125 => 48,  104 => 30,  100 => 29,  96 => 28,  88 => 23,  84 => 22,  80 => 21,  72 => 16,  68 => 15,  64 => 14,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}

<!-- Section : Informations générales -->
<div class=\"card shadow-lg border-0 mb-4 rounded-4\">
    <div class=\"card-header bg-gradient-primary text-white py-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold\">
            <i class=\"bi bi-info-circle-fill me-2\"></i>Informations générales
        </h5>
    </div>
    <div class=\"card-body p-4\">
        <div class=\"row g-4\">
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.name, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Nom technique'}}) }}
                    {{ form_label(form.name) }}
                    {{ form_errors(form.name) }}
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.displayName, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Nom affiché'}}) }}
                    {{ form_label(form.displayName) }}
                    {{ form_errors(form.displayName) }}
                </div>
            </div>
            <div class=\"col-12\">
                <div class=\"form-floating\">
                    {{ form_widget(form.description, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Description', 'style': 'height: 100px'}}) }}
                    {{ form_label(form.description) }}
                    {{ form_errors(form.description) }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section : Tarifs -->
<div class=\"card shadow-lg border-0 mb-4 rounded-4\">
    <div class=\"card-header bg-gradient-success text-white py-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold\">
            <i class=\"bi bi-currency-exchange me-2\"></i>Tarifs
        </h5>
    </div>
    <div class=\"card-body p-4\">
        <div class=\"row g-4\">
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.priceMonthly, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Prix mensuel'}}) }}
                    {{ form_label(form.priceMonthly) }}
                    {{ form_errors(form.priceMonthly) }}
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.priceYearly, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Prix annuel'}}) }}
                    {{ form_label(form.priceYearly) }}
                    {{ form_errors(form.priceYearly) }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section : Limites d'utilisation -->
<div class=\"card shadow-lg border-0 mb-4 rounded-4\">
    <div class=\"card-header bg-gradient-warning text-white py-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold\">
            <i class=\"bi bi-bar-chart-fill me-2\"></i>Limites d'utilisation
        </h5>
        <small class=\"text-white-50\">Laissez vide pour illimité</small>
    </div>
    <div class=\"card-body p-4\">
        <div class=\"row g-4\">
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.maxUsersPerRole, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Max utilisateurs par rôle'}}) }}
                    {{ form_label(form.maxUsersPerRole) }}
                    {{ form_errors(form.maxUsersPerRole) }}
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.maxProducts, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Max produits'}}) }}
                    {{ form_label(form.maxProducts) }}
                    {{ form_errors(form.maxProducts) }}
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.maxOrdersPerMonth, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Max commandes / mois'}}) }}
                    {{ form_label(form.maxOrdersPerMonth) }}
                    {{ form_errors(form.maxOrdersPerMonth) }}
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.maxCategories, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Max catégories'}}) }}
                    {{ form_label(form.maxCategories) }}
                    {{ form_errors(form.maxCategories) }}
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.maxSuppliers, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Max fournisseurs'}}) }}
                    {{ form_label(form.maxSuppliers) }}
                    {{ form_errors(form.maxSuppliers) }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section : Fonctionnalités -->
<div class=\"card shadow-lg border-0 mb-4 rounded-4\">
    <div class=\"card-header bg-gradient-info text-white py-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold\">
            <i class=\"bi bi-star-fill me-2\"></i>Fonctionnalités supplémentaires
        </h5>
    </div>
    <div class=\"card-body p-4\">
        <div class=\"mb-3\">
            <label class=\"form-label fw-semibold\">Liste des fonctionnalités</label>
            <div class=\"features-collection\" data-prototype=\"{{ form_widget(form.features.vars.prototype)|e('html_attr') }}\">
                {% for feature in form.features %}
                    <div class=\"input-group mb-2\">
                        {{ form_widget(feature, {'attr': {'class': 'form-control rounded-3'}}) }}
                        <button type=\"button\" class=\"btn btn-outline-danger remove-feature rounded-3\">
                            <i class=\"bi bi-trash\"></i>
                        </button>
                    </div>
                {% endfor %}
            </div>
            <button type=\"button\" class=\"btn btn-outline-primary btn-sm mt-2 add-feature rounded-pill\">
                <i class=\"bi bi-plus-circle me-2\"></i>Ajouter une fonctionnalité
            </button>
            {{ form_errors(form.features) }}
        </div>
    </div>
</div>

<!-- Section : Statut -->
<div class=\"card shadow-lg border-0 mb-4 rounded-4\">
    <div class=\"card-header bg-gradient-secondary text-white py-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold\">
            <i class=\"bi bi-toggle-on me-2\"></i>Statut
        </h5>
    </div>
    <div class=\"card-body p-4\">
        <div class=\"form-check form-switch\">
            {{ form_widget(form.isActive, {'attr': {'class': 'form-check-input'}}) }}
            {{ form_label(form.isActive, null, {'label_attr': {'class': 'form-check-label fw-semibold'}}) }}
            {{ form_errors(form.isActive) }}
        </div>
    </div>
</div>

<!-- Boutons d'action -->
<div class=\"d-flex justify-content-between align-items-center mt-5\">
    <a href=\"{{ path('app_super_admin_subscription_plan_index') }}\" class=\"btn btn-outline-secondary btn-lg rounded-pill px-5\">
        <i class=\"bi bi-arrow-left me-2\"></i>Annuler
    </a>
    <button type=\"submit\" class=\"btn btn-primary btn-lg rounded-pill px-5 shadow-lg\">
        <i class=\"bi bi-check-circle-fill me-2\"></i>{{ button_label|default('Enregistrer') }}
    </button>
</div>

{{ form_end(form) }}

<!-- Script pour la gestion dynamique de la collection de fonctionnalités -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.features-collection');
    const addButton = document.querySelector('.add-feature');
    const prototype = container.dataset.prototype;

    addButton.addEventListener('click', function() {
        const index = container.children.length;
        const newForm = prototype.replace(/__name__/g, index);
        const div = document.createElement('div');
        div.className = 'input-group mb-2';
        div.innerHTML = newForm + '<button type=\"button\" class=\"btn btn-outline-danger remove-feature rounded-3\"><i class=\"bi bi-trash\"></i></button>';
        container.appendChild(div);
    });

    container.addEventListener('click', function(e) {
        if (e.target.closest('.remove-feature')) {
            e.target.closest('.input-group').remove();
        }
    });
});
</script>

<!-- Styles personnalisés pour le formulaire -->
<style>
/* Dégradés pour les entêtes de cartes */
.bg-gradient-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}
.bg-gradient-success {
    background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
}
.bg-gradient-warning {
    background: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);
}
.bg-gradient-info {
    background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
}
.bg-gradient-secondary {
    background: linear-gradient(135deg, #95a5a6 0%, #7f8c8d 100%);
}

/* Arrondis supplémentaires */
.rounded-top-4 {
    border-top-left-radius: 1rem !important;
    border-top-right-radius: 1rem !important;
}

/* Animation du bouton de soumission */
.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    transition: transform 0.3s, box-shadow 0.3s;
}
.btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 25px rgba(102,126,234,0.4);
}

/* Effet sur les cartes */
.card {
    transition: box-shadow 0.3s ease;
}
.card:hover {
    box-shadow: 0 25px 30px -12px rgba(0,0,0,0.2) !important;
}

/* Personnalisation des champs flottants */
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label {
    color: #667eea;
    opacity: 0.8;
    transform: scale(0.85) translateY(-0.75rem) translateX(0.15rem);
}
</style>", "super_admin/subscription_plan/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\subscription_plan\\_form.html.twig");
    }
}
