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
class __TwigTemplate_540504571bae4995efb28d3b9b0b4d0a extends Template
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

<!-- Section : Limites d'utilisation - Commerce -->
<div class=\"card shadow-lg border-0 mb-4 rounded-4\">
    <div class=\"card-header bg-gradient-warning text-white py-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold\">
            <i class=\"bi bi-bar-chart-fill me-2\"></i>Limites d'utilisation - Commerce
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

<!-- Section : Limites d'utilisation - Restaurant -->
<div class=\"card shadow-lg border-0 mb-4 rounded-4\">
    <div class=\"card-header bg-gradient-restaurant text-white py-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold\">
            <i class=\"bi bi-egg-fried me-2\"></i>Limites d'utilisation - Restaurant
        </h5>
        <small class=\"text-white-50\">Laissez vide pour illimité</small>
    </div>
    <div class=\"card-body p-4\">
        <div class=\"row g-4\">
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "maxRecipes", [], "any", false, false, false, 125), 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Max recettes"]]);
        yield "
                    ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "maxRecipes", [], "any", false, false, false, 126), 'label');
        yield "
                    ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "maxRecipes", [], "any", false, false, false, 127), 'errors');
        yield "
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "maxRecipeCategories", [], "any", false, false, false, 132), 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Max catégories de recettes"]]);
        yield "
                    ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "maxRecipeCategories", [], "any", false, false, false, 133), 'label');
        yield "
                    ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "maxRecipeCategories", [], "any", false, false, false, 134), 'errors');
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
        <!-- Pas de label ici ! -->
        <div class=\"features-collection\" data-prototype=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "features", [], "any", false, false, false, 150), "vars", [], "any", false, false, false, 150), "prototype", [], "any", false, false, false, 150), 'widget'), "html_attr");
        yield "\" style=\"max-height: 300px; overflow-y: auto; border: 1px solid #e2e8f0; border-radius: 12px; padding: 1rem; background: #f8fafc;\">
            ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "features", [], "any", false, false, false, 151));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 152
            yield "                <div class=\"input-group mb-2\">
                    ";
            // line 153
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["feature"], 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Ex: Gestion des stocks, Export PDF, API..."]]);
            yield "
                    <button type=\"button\" class=\"btn btn-outline-danger remove-feature rounded-3\">
                        <i class=\"bi bi-trash\"></i>
                    </button>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 158
        if (!$context['_iterated']) {
            // line 159
            yield "                <div class=\"text-center text-muted py-3\">
                    <i class=\"bi bi-info-circle me-2\"></i>Aucune fonctionnalité ajoutée. Cliquez sur \"Ajouter une fonctionnalité\" ci-dessous.
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        yield "        </div>
        
        <button type=\"button\" class=\"btn btn-outline-primary btn-sm mt-3 add-feature rounded-pill\">
            <i class=\"bi bi-plus-circle me-2\"></i>Ajouter une fonctionnalité
        </button>
        ";
        // line 168
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "features", [], "any", false, false, false, 168), 'errors');
        yield "
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
        // line 181
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "isActive", [], "any", false, false, false, 181), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
            ";
        // line 182
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "isActive", [], "any", false, false, false, 182), 'label', ["label_attr" => ["class" => "form-check-label fw-semibold"]]);
        yield "
            ";
        // line 183
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "isActive", [], "any", false, false, false, 183), 'errors');
        yield "
        </div>
    </div>
    <div class=\"card-footer bg-transparent border-0 py-4\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <a href=\"";
        // line 188
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_index");
        yield "\" class=\"btn btn-outline-secondary btn-lg rounded-pill px-5\">
                <i class=\"bi bi-arrow-left me-2\"></i>Annuler
            </a>
            <button type=\"submit\" class=\"btn btn-primary btn-lg rounded-pill px-5 shadow-lg\">
                <i class=\"bi bi-check-circle-fill me-2\"></i>";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 192, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
            </button>
        </div>
    </div>
</div>

";
        // line 198
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), 'form_end');
        yield "

<script>
document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.features-collection');
    const addButton = document.querySelector('.add-feature');
    
    if (container && addButton) {
        const prototype = container.dataset.prototype;

        function updateEmptyMessage() {
            const items = container.querySelectorAll('.input-group');
            const emptyMessage = container.querySelector('.empty-message');
            
            if (items.length === 0) {
                if (!emptyMessage) {
                    const div = document.createElement('div');
                    div.className = 'text-center text-muted py-3 empty-message';
                    div.innerHTML = '<i class=\"bi bi-info-circle me-2\"></i>Aucune fonctionnalité ajoutée. Cliquez sur \"Ajouter une fonctionnalité\" ci-dessous.';
                    container.appendChild(div);
                }
            } else {
                if (emptyMessage) {
                    emptyMessage.remove();
                }
            }
        }

        addButton.addEventListener('click', function() {
            const index = container.children.length;
            const newForm = prototype.replace(/__name__/g, index);
            const div = document.createElement('div');
            div.className = 'input-group mb-2';
            div.innerHTML = newForm + '<button type=\"button\" class=\"btn btn-outline-danger remove-feature rounded-3\"><i class=\"bi bi-trash\"></i></button>';
            container.appendChild(div);
            updateEmptyMessage();
        });

        container.addEventListener('click', function(e) {
            if (e.target.closest('.remove-feature')) {
                e.target.closest('.input-group').remove();
                updateEmptyMessage();
            }
        });
        
        updateEmptyMessage();
    }
});
</script>

<style>
/* Tous tes styles existants */
.bg-gradient-primary { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
.bg-gradient-success { background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%); }
.bg-gradient-warning { background: linear-gradient(135deg, #f39c12 0%, #e67e22 100%); }
.bg-gradient-info { background: linear-gradient(135deg, #3498db 0%, #2980b9 100%); }
.bg-gradient-secondary { background: linear-gradient(135deg, #95a5a6 0%, #7f8c8d 100%); }
.bg-gradient-restaurant { background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%); }

.rounded-top-4 {
    border-top-left-radius: 1rem !important;
    border-top-right-radius: 1rem !important;
}

.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    transition: transform 0.3s, box-shadow 0.3s;
}
.btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 25px rgba(102,126,234,0.4);
}

.card {
    transition: box-shadow 0.3s ease;
}
.card:hover {
    box-shadow: 0 25px 30px -12px rgba(0,0,0,0.2) !important;
}

.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label {
    color: #667eea;
    opacity: 0.8;
    transform: scale(0.85) translateY(-0.75rem) translateX(0.15rem);
}

.form-control.is-invalid {
    border-color: #dc3545;
    background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e\");
    background-repeat: no-repeat;
    background-position: right calc(0.375em + 0.1875rem) center;
    background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.features-collection {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 1rem;
    max-height: 300px;
    overflow-y: auto;
}

.features-collection .input-group {
    margin-bottom: 0.75rem !important;
}

.features-collection .input-group:last-child {
    margin-bottom: 0 !important;
}

.features-collection::-webkit-scrollbar {
    width: 6px;
}

.features-collection::-webkit-scrollbar-track {
    background: #e2e8f0;
    border-radius: 3px;
}

.features-collection::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 3px;
}

.features-collection::-webkit-scrollbar-thumb:hover {
    background: #94a3b8;
}

.card-footer {
    border-top: 1px solid rgba(0,0,0,0.05);
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
        return array (  396 => 198,  387 => 192,  380 => 188,  372 => 183,  368 => 182,  364 => 181,  348 => 168,  341 => 163,  332 => 159,  330 => 158,  320 => 153,  317 => 152,  312 => 151,  308 => 150,  289 => 134,  285 => 133,  281 => 132,  273 => 127,  269 => 126,  265 => 125,  243 => 106,  239 => 105,  235 => 104,  227 => 99,  223 => 98,  219 => 97,  211 => 92,  207 => 91,  203 => 90,  195 => 85,  191 => 84,  187 => 83,  179 => 78,  175 => 77,  171 => 76,  149 => 57,  145 => 56,  141 => 55,  133 => 50,  129 => 49,  125 => 48,  104 => 30,  100 => 29,  96 => 28,  88 => 23,  84 => 22,  80 => 21,  72 => 16,  68 => 15,  64 => 14,  48 => 1,);
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

<!-- Section : Limites d'utilisation - Commerce -->
<div class=\"card shadow-lg border-0 mb-4 rounded-4\">
    <div class=\"card-header bg-gradient-warning text-white py-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold\">
            <i class=\"bi bi-bar-chart-fill me-2\"></i>Limites d'utilisation - Commerce
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

<!-- Section : Limites d'utilisation - Restaurant -->
<div class=\"card shadow-lg border-0 mb-4 rounded-4\">
    <div class=\"card-header bg-gradient-restaurant text-white py-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold\">
            <i class=\"bi bi-egg-fried me-2\"></i>Limites d'utilisation - Restaurant
        </h5>
        <small class=\"text-white-50\">Laissez vide pour illimité</small>
    </div>
    <div class=\"card-body p-4\">
        <div class=\"row g-4\">
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.maxRecipes, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Max recettes'}}) }}
                    {{ form_label(form.maxRecipes) }}
                    {{ form_errors(form.maxRecipes) }}
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.maxRecipeCategories, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Max catégories de recettes'}}) }}
                    {{ form_label(form.maxRecipeCategories) }}
                    {{ form_errors(form.maxRecipeCategories) }}
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
        <!-- Pas de label ici ! -->
        <div class=\"features-collection\" data-prototype=\"{{ form_widget(form.features.vars.prototype)|e('html_attr') }}\" style=\"max-height: 300px; overflow-y: auto; border: 1px solid #e2e8f0; border-radius: 12px; padding: 1rem; background: #f8fafc;\">
            {% for feature in form.features %}
                <div class=\"input-group mb-2\">
                    {{ form_widget(feature, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Ex: Gestion des stocks, Export PDF, API...'}}) }}
                    <button type=\"button\" class=\"btn btn-outline-danger remove-feature rounded-3\">
                        <i class=\"bi bi-trash\"></i>
                    </button>
                </div>
            {% else %}
                <div class=\"text-center text-muted py-3\">
                    <i class=\"bi bi-info-circle me-2\"></i>Aucune fonctionnalité ajoutée. Cliquez sur \"Ajouter une fonctionnalité\" ci-dessous.
                </div>
            {% endfor %}
        </div>
        
        <button type=\"button\" class=\"btn btn-outline-primary btn-sm mt-3 add-feature rounded-pill\">
            <i class=\"bi bi-plus-circle me-2\"></i>Ajouter une fonctionnalité
        </button>
        {{ form_errors(form.features) }}
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
    <div class=\"card-footer bg-transparent border-0 py-4\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <a href=\"{{ path('app_super_admin_subscription_plan_index') }}\" class=\"btn btn-outline-secondary btn-lg rounded-pill px-5\">
                <i class=\"bi bi-arrow-left me-2\"></i>Annuler
            </a>
            <button type=\"submit\" class=\"btn btn-primary btn-lg rounded-pill px-5 shadow-lg\">
                <i class=\"bi bi-check-circle-fill me-2\"></i>{{ button_label|default('Enregistrer') }}
            </button>
        </div>
    </div>
</div>

{{ form_end(form) }}

<script>
document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.features-collection');
    const addButton = document.querySelector('.add-feature');
    
    if (container && addButton) {
        const prototype = container.dataset.prototype;

        function updateEmptyMessage() {
            const items = container.querySelectorAll('.input-group');
            const emptyMessage = container.querySelector('.empty-message');
            
            if (items.length === 0) {
                if (!emptyMessage) {
                    const div = document.createElement('div');
                    div.className = 'text-center text-muted py-3 empty-message';
                    div.innerHTML = '<i class=\"bi bi-info-circle me-2\"></i>Aucune fonctionnalité ajoutée. Cliquez sur \"Ajouter une fonctionnalité\" ci-dessous.';
                    container.appendChild(div);
                }
            } else {
                if (emptyMessage) {
                    emptyMessage.remove();
                }
            }
        }

        addButton.addEventListener('click', function() {
            const index = container.children.length;
            const newForm = prototype.replace(/__name__/g, index);
            const div = document.createElement('div');
            div.className = 'input-group mb-2';
            div.innerHTML = newForm + '<button type=\"button\" class=\"btn btn-outline-danger remove-feature rounded-3\"><i class=\"bi bi-trash\"></i></button>';
            container.appendChild(div);
            updateEmptyMessage();
        });

        container.addEventListener('click', function(e) {
            if (e.target.closest('.remove-feature')) {
                e.target.closest('.input-group').remove();
                updateEmptyMessage();
            }
        });
        
        updateEmptyMessage();
    }
});
</script>

<style>
/* Tous tes styles existants */
.bg-gradient-primary { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
.bg-gradient-success { background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%); }
.bg-gradient-warning { background: linear-gradient(135deg, #f39c12 0%, #e67e22 100%); }
.bg-gradient-info { background: linear-gradient(135deg, #3498db 0%, #2980b9 100%); }
.bg-gradient-secondary { background: linear-gradient(135deg, #95a5a6 0%, #7f8c8d 100%); }
.bg-gradient-restaurant { background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%); }

.rounded-top-4 {
    border-top-left-radius: 1rem !important;
    border-top-right-radius: 1rem !important;
}

.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    transition: transform 0.3s, box-shadow 0.3s;
}
.btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 25px rgba(102,126,234,0.4);
}

.card {
    transition: box-shadow 0.3s ease;
}
.card:hover {
    box-shadow: 0 25px 30px -12px rgba(0,0,0,0.2) !important;
}

.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label {
    color: #667eea;
    opacity: 0.8;
    transform: scale(0.85) translateY(-0.75rem) translateX(0.15rem);
}

.form-control.is-invalid {
    border-color: #dc3545;
    background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e\");
    background-repeat: no-repeat;
    background-position: right calc(0.375em + 0.1875rem) center;
    background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.features-collection {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 1rem;
    max-height: 300px;
    overflow-y: auto;
}

.features-collection .input-group {
    margin-bottom: 0.75rem !important;
}

.features-collection .input-group:last-child {
    margin-bottom: 0 !important;
}

.features-collection::-webkit-scrollbar {
    width: 6px;
}

.features-collection::-webkit-scrollbar-track {
    background: #e2e8f0;
    border-radius: 3px;
}

.features-collection::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 3px;
}

.features-collection::-webkit-scrollbar-thumb:hover {
    background: #94a3b8;
}

.card-footer {
    border-top: 1px solid rgba(0,0,0,0.05);
}
</style>", "super_admin/subscription_plan/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\subscription_plan\\_form.html.twig");
    }
}
