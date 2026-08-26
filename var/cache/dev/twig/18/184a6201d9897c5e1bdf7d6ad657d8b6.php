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
class __TwigTemplate_9b8b35b746e458b9599d922f9f15f17b extends Template
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

<!-- En-tête moderne -->
<div class=\"row mb-3 mb-md-4\">
    <div class=\"col-12\">
        <div class=\"modern-header position-relative overflow-hidden rounded-4 shadow-lg p-3 p-md-5 text-white\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\">
            <div class=\"floating-bg\">
                <div class=\"shape shape-1\"></div>
                <div class=\"shape shape-2\"></div>
            </div>
            <div class=\"position-relative z-1\">
                <div class=\"d-flex align-items-center gap-2 gap-md-4\">
                    <div class=\"icon-wrapper bg-white bg-opacity-20 rounded-4 p-2 p-md-4\">
                        <i class=\"bi bi-tags display-6 display-md-4\"></i>
                    </div>
                    <div>
                        <h1 class=\"display-6 display-md-5 fw-bold mb-1 mb-md-2\">
                            ";
        // line 18
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "id", [], "any", true, true, false, 18) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)))) {
            // line 19
            yield "                                Modifier le plan d'abonnement
                            ";
        } else {
            // line 21
            yield "                                Nouveau plan d'abonnement
                            ";
        }
        // line 23
        yield "                        </h1>
                        <p class=\"text-white-50 mb-0 small d-none d-sm-block\">
                            <i class=\"bi bi-info-circle me-1\"></i>
                            ";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "id", [], "any", true, true, false, 26) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)))) {
            // line 27
            yield "                                Modifiez les informations du plan <strong class=\"text-white\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 27, $this->source); })()), "displayName", [], "any", false, false, false, 27), "html", null, true);
            yield "</strong>
                            ";
        } else {
            // line 29
            yield "                                Créez un nouveau plan d'abonnement pour vos entreprises
                            ";
        }
        // line 31
        yield "                        </p>
                        <p class=\"text-white-50 mb-0 small d-block d-sm-none\">
                            ";
        // line 33
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "id", [], "any", true, true, false, 33) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)))) {
            // line 34
            yield "                                Modification plan
                            ";
        } else {
            // line 36
            yield "                                Nouveau plan
                            ";
        }
        // line 38
        yield "                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section : Informations générales -->
<div class=\"card shadow-lg border-0 mb-3 mb-md-4 rounded-4\">
    <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\">
            <i class=\"bi bi-info-circle-fill me-2\"></i>Informations générales
        </h5>
    </div>
    <div class=\"card-body p-2 p-md-4\">
        <div class=\"row g-2 g-md-4\">
            <div class=\"col-12 col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "name", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Nom technique", "style" => "font-size:0.85rem;"]]);
        yield "
                    ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "name", [], "any", false, false, false, 58), 'label');
        yield "
                    ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "name", [], "any", false, false, false, 59), 'errors');
        yield "
                </div>
            </div>
            <div class=\"col-12 col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "displayName", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Nom affiché", "style" => "font-size:0.85rem;"]]);
        yield "
                    ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "displayName", [], "any", false, false, false, 65), 'label');
        yield "
                    ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "displayName", [], "any", false, false, false, 66), 'errors');
        yield "
                </div>
            </div>
            <div class=\"col-12\">
                <div class=\"form-floating\">
                    ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "description", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Description", "style" => "height: 80px; font-size:0.85rem;"]]);
        yield "
                    ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "description", [], "any", false, false, false, 72), 'label');
        yield "
                    ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "description", [], "any", false, false, false, 73), 'errors');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section : Tarifs -->
<div class=\"card shadow-lg border-0 mb-3 mb-md-4 rounded-4\">
    <div class=\"card-header bg-gradient-success text-white py-2 py-md-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\">
            <i class=\"bi bi-currency-exchange me-2\"></i>Tarifs
        </h5>
    </div>
    <div class=\"card-body p-2 p-md-4\">
        <div class=\"row g-2 g-md-4\">
            <div class=\"col-12 col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "priceMonthly", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Prix mensuel", "style" => "font-size:0.85rem;"]]);
        yield "
                    ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "priceMonthly", [], "any", false, false, false, 92), 'label');
        yield "
                    ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "priceMonthly", [], "any", false, false, false, 93), 'errors');
        yield "
                </div>
            </div>
            <div class=\"col-12 col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "priceYearly", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Prix annuel", "style" => "font-size:0.85rem;"]]);
        yield "
                    ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "priceYearly", [], "any", false, false, false, 99), 'label');
        yield "
                    ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "priceYearly", [], "any", false, false, false, 100), 'errors');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section : Limites d'utilisation - Commerce -->
<div class=\"card shadow-lg border-0 mb-3 mb-md-4 rounded-4\">
    <div class=\"card-header bg-gradient-warning text-white py-2 py-md-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\">
            <i class=\"bi bi-bar-chart-fill me-2\"></i>Limites - Commerce
        </h5>
        <small class=\"text-white-50\" style=\"font-size:0.6rem;\">Laissez vide pour illimité</small>
    </div>
    <div class=\"card-body p-2 p-md-4\">
        <div class=\"row g-2 g-md-4\">
            <div class=\"col-12 col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "maxUsersPerRole", [], "any", false, false, false, 119), 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Max utilisateurs par rôle", "style" => "font-size:0.85rem;"]]);
        yield "
                    ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "maxUsersPerRole", [], "any", false, false, false, 120), 'label');
        yield "
                    ";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "maxUsersPerRole", [], "any", false, false, false, 121), 'errors');
        yield "
                </div>
            </div>
            <div class=\"col-12 col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "maxProducts", [], "any", false, false, false, 126), 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Max produits", "style" => "font-size:0.85rem;"]]);
        yield "
                    ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "maxProducts", [], "any", false, false, false, 127), 'label');
        yield "
                    ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "maxProducts", [], "any", false, false, false, 128), 'errors');
        yield "
                </div>
            </div>
            <div class=\"col-12 col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "maxOrdersPerMonth", [], "any", false, false, false, 133), 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Max commandes / mois", "style" => "font-size:0.85rem;"]]);
        yield "
                    ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "maxOrdersPerMonth", [], "any", false, false, false, 134), 'label');
        yield "
                    ";
        // line 135
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "maxOrdersPerMonth", [], "any", false, false, false, 135), 'errors');
        yield "
                </div>
            </div>
            <div class=\"col-12 col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "maxCategories", [], "any", false, false, false, 140), 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Max catégories", "style" => "font-size:0.85rem;"]]);
        yield "
                    ";
        // line 141
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "maxCategories", [], "any", false, false, false, 141), 'label');
        yield "
                    ";
        // line 142
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "maxCategories", [], "any", false, false, false, 142), 'errors');
        yield "
                </div>
            </div>
            <div class=\"col-12 col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "maxSuppliers", [], "any", false, false, false, 147), 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Max fournisseurs", "style" => "font-size:0.85rem;"]]);
        yield "
                    ";
        // line 148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "maxSuppliers", [], "any", false, false, false, 148), 'label');
        yield "
                    ";
        // line 149
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "maxSuppliers", [], "any", false, false, false, 149), 'errors');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section : Limites d'utilisation - Restaurant -->
<div class=\"card shadow-lg border-0 mb-3 mb-md-4 rounded-4\">
    <div class=\"card-header bg-gradient-restaurant text-white py-2 py-md-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\">
            <i class=\"bi bi-egg-fried me-2\"></i>Limites - Restaurant
        </h5>
        <small class=\"text-white-50\" style=\"font-size:0.6rem;\">Laissez vide pour illimité</small>
    </div>
    <div class=\"card-body p-2 p-md-4\">
        <div class=\"row g-2 g-md-4\">
            <div class=\"col-12 col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 168
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "maxRecipes", [], "any", false, false, false, 168), 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Max recettes", "style" => "font-size:0.85rem;"]]);
        yield "
                    ";
        // line 169
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "maxRecipes", [], "any", false, false, false, 169), 'label');
        yield "
                    ";
        // line 170
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "maxRecipes", [], "any", false, false, false, 170), 'errors');
        yield "
                </div>
            </div>
            <div class=\"col-12 col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 175
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "maxRecipeCategories", [], "any", false, false, false, 175), 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Max catégories de recettes", "style" => "font-size:0.85rem;"]]);
        yield "
                    ";
        // line 176
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "maxRecipeCategories", [], "any", false, false, false, 176), 'label');
        yield "
                    ";
        // line 177
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "maxRecipeCategories", [], "any", false, false, false, 177), 'errors');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section : Fonctionnalités -->
<div class=\"card shadow-lg border-0 mb-3 mb-md-4 rounded-4\">
    <div class=\"card-header bg-gradient-info text-white py-2 py-md-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\">
            <i class=\"bi bi-star-fill me-2\"></i>Fonctionnalités
        </h5>
    </div>
    <div class=\"card-body p-2 p-md-4\">
        <div class=\"features-collection\" data-prototype=\"";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "features", [], "any", false, false, false, 192), "vars", [], "any", false, false, false, 192), "prototype", [], "any", false, false, false, 192), 'widget'), "html_attr");
        yield "\" style=\"max-height: 300px; overflow-y: auto; border: 1px solid #e2e8f0; border-radius: 12px; padding: 0.5rem 0.75rem; background: #f8fafc;\">
            ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "features", [], "any", false, false, false, 193));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 194
            yield "                <div class=\"input-group mb-2\">
                    ";
            // line 195
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["feature"], 'widget', ["attr" => ["class" => "form-control rounded-3", "placeholder" => "Ex: Gestion des stocks...", "style" => "font-size:0.75rem;"]]);
            yield "
                    <button type=\"button\" class=\"btn btn-outline-danger remove-feature rounded-3\" style=\"font-size:0.7rem; padding:0.2rem 0.4rem;\">
                        <i class=\"bi bi-trash\"></i>
                    </button>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 200
        if (!$context['_iterated']) {
            // line 201
            yield "                <div class=\"text-center text-muted py-2 py-md-3 small\">
                    <i class=\"bi bi-info-circle me-2\"></i>Aucune fonctionnalité ajoutée.
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        yield "        </div>
        
        <button type=\"button\" class=\"btn btn-outline-primary btn-sm mt-2 mt-md-3 add-feature rounded-pill\" style=\"font-size:0.7rem; padding:0.2rem 0.6rem;\">
            <i class=\"bi bi-plus-circle me-1 me-md-2\"></i>Ajouter une fonctionnalité
        </button>
        ";
        // line 210
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "features", [], "any", false, false, false, 210), 'errors');
        yield "
    </div>
</div>

<!-- Section : Statut -->
<div class=\"card shadow-lg border-0 mb-3 mb-md-4 rounded-4\">
    <div class=\"card-header bg-gradient-secondary text-white py-2 py-md-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\">
            <i class=\"bi bi-toggle-on me-2\"></i>Statut
        </h5>
    </div>
    <div class=\"card-body p-2 p-md-4\">
        <div class=\"form-check form-switch\">
            ";
        // line 223
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), "isActive", [], "any", false, false, false, 223), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
            ";
        // line 224
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 224, $this->source); })()), "isActive", [], "any", false, false, false, 224), 'label', ["label_attr" => ["class" => "form-check-label fw-semibold small"]]);
        yield "
            ";
        // line 225
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "isActive", [], "any", false, false, false, 225), 'errors');
        yield "
        </div>
    </div>
    <div class=\"card-footer bg-transparent border-0 py-2 py-md-4\">
        <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2\">
            <a href=\"";
        // line 230
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm w-100 w-sm-auto rounded-pill px-3 px-md-5\" style=\"font-size:0.7rem; padding:0.25rem 0.5rem;\">
                <i class=\"bi bi-arrow-left me-1\"></i>Annuler
            </a>
            <button type=\"submit\" class=\"btn btn-primary btn-sm w-100 w-sm-auto rounded-pill px-3 px-md-5 shadow-lg\" style=\"font-size:0.7rem; padding:0.25rem 0.5rem;\">
                <i class=\"bi bi-check-circle-fill me-1\"></i>";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 234, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
            </button>
        </div>
    </div>
</div>

";
        // line 240
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), 'form_end');
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
                    div.className = 'text-center text-muted py-2 py-md-3 empty-message small';
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
            div.innerHTML = newForm + '<button type=\"button\" class=\"btn btn-outline-danger remove-feature rounded-3\" style=\"font-size:0.7rem; padding:0.2rem 0.4rem;\"><i class=\"bi bi-trash\"></i></button>';
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
/* En-tête moderne */
.modern-header {
    min-height: 80px;
}
.floating-bg .shape {
    position: absolute;
    background: rgba(255,255,255,0.1);
    border-radius: 50%;
}
.shape-1 {
    width: 250px; height: 250px; top: -80px; right: -40px;
    animation: float 8s ease-in-out infinite;
}
.shape-2 {
    width: 150px; height: 150px; bottom: -40px; left: -20px;
    animation: float 12s ease-in-out infinite reverse;
}
@keyframes float {
    0%,100%{ transform: translateY(0) rotate(0deg); }
    50%{ transform: translateY(-20px) rotate(5deg); }
}
.icon-wrapper {
    transition: transform 0.3s;
}
.icon-wrapper:hover {
    transform: scale(1.05) rotate(5deg);
}

/* Tous les styles existants */
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
    padding: 0.5rem 0.75rem;
    max-height: 300px;
    overflow-y: auto;
}

.features-collection .input-group {
    margin-bottom: 0.5rem !important;
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

/* ========================================
   RESPONSIVE - MOBILE
======================================== */
@media (max-width: 576px) {
    .container-fluid {
        padding-left: 6px !important;
        padding-right: 6px !important;
    }
    
    .modern-header {
        min-height: 60px !important;
        padding: 0.75rem !important;
        border-radius: 0.75rem !important;
    }
    .modern-header .display-6 {
        font-size: 1rem !important;
    }
    .modern-header .text-white-50 {
        font-size: 0.6rem !important;
    }
    .modern-header .icon-wrapper {
        padding: 0.5rem !important;
    }
    .modern-header .icon-wrapper i {
        font-size: 1.5rem !important;
    }
    .modern-header .d-flex.align-items-center.gap-2.gap-md-4 {
        gap: 0.5rem !important;
    }
    .shape-1 {
        width: 100px; height: 100px; top: -30px; right: -20px;
    }
    .shape-2 {
        width: 80px; height: 80px; bottom: -20px; left: -10px;
    }
    
    .card {
        border-radius: 0.75rem !important;
    }
    .card-header {
        padding: 0.4rem 0.6rem !important;
    }
    .card-header h5 {
        font-size: 0.75rem !important;
    }
    .card-header small {
        font-size: 0.5rem !important;
    }
    .card-body {
        padding: 0.5rem 0.6rem !important;
    }
    .card-footer {
        padding: 0.5rem 0.6rem !important;
    }
    
    .form-floating > label {
        font-size: 0.7rem !important;
        padding-left: 0.75rem !important;
    }
    .form-floating > .form-control,
    .form-floating > .form-select {
        height: calc(2.5rem + 2px) !important;
        padding: 0.5rem 0.75rem !important;
        font-size: 0.75rem !important;
        border-radius: 6px !important;
    }
    .form-floating > .form-control:focus ~ label,
    .form-floating > .form-control:not(:placeholder-shown) ~ label {
        transform: scale(0.8) translateY(-0.5rem) translateX(0.15rem) !important;
    }
    
    .form-check.form-switch .form-check-input {
        width: 2.5em !important;
        height: 1.2em !important;
    }
    .form-check-label {
        font-size: 0.7rem !important;
    }
    
    .btn {
        font-size: 0.65rem !important;
        padding: 0.2rem 0.4rem !important;
    }
    .btn i {
        font-size: 0.7rem !important;
    }
    
    .features-collection {
        padding: 0.3rem 0.4rem !important;
        max-height: 200px !important;
    }
    .features-collection .input-group {
        margin-bottom: 0.25rem !important;
    }
    .features-collection .form-control {
        font-size: 0.65rem !important;
        padding: 0.15rem 0.3rem !important;
    }
    .features-collection .btn {
        font-size: 0.55rem !important;
        padding: 0.1rem 0.2rem !important;
    }
    
    .gap-4 {
        gap: 0.5rem !important;
    }
    .row.g-4 {
        --bs-gutter-y: 0.5rem;
        --bs-gutter-x: 0.5rem;
    }
    .mb-3 {
        margin-bottom: 0.5rem !important;
    }
    .mb-4 {
        margin-bottom: 0.75rem !important;
    }
    
    .rounded-4 {
        border-radius: 0.75rem !important;
    }
    .rounded-3 {
        border-radius: 6px !important;
    }
    
    /* Désactiver hover sur mobile */
    .card:hover {
        box-shadow: none !important;
    }
    .btn-primary:hover {
        transform: none !important;
        box-shadow: none !important;
    }
    .icon-wrapper:hover {
        transform: none !important;
    }
}

/* ========================================
   RESPONSIVE - TABLETTE
======================================== */
@media (min-width: 577px) and (max-width: 768px) {
    .modern-header {
        min-height: 70px !important;
        padding: 1rem !important;
    }
    .modern-header .display-6 {
        font-size: 1.2rem !important;
    }
    .modern-header .icon-wrapper i {
        font-size: 2rem !important;
    }
    
    .card-body {
        padding: 1rem !important;
    }
    .card-header {
        padding: 0.6rem 0.8rem !important;
    }
    
    .form-floating > label {
        font-size: 0.8rem !important;
    }
    .form-floating > .form-control,
    .form-floating > .form-select {
        font-size: 0.8rem !important;
    }
    
    .btn {
        font-size: 0.7rem !important;
        padding: 0.25rem 0.5rem !important;
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
        return array (  461 => 240,  452 => 234,  445 => 230,  437 => 225,  433 => 224,  429 => 223,  413 => 210,  406 => 205,  397 => 201,  395 => 200,  385 => 195,  382 => 194,  377 => 193,  373 => 192,  355 => 177,  351 => 176,  347 => 175,  339 => 170,  335 => 169,  331 => 168,  309 => 149,  305 => 148,  301 => 147,  293 => 142,  289 => 141,  285 => 140,  277 => 135,  273 => 134,  269 => 133,  261 => 128,  257 => 127,  253 => 126,  245 => 121,  241 => 120,  237 => 119,  215 => 100,  211 => 99,  207 => 98,  199 => 93,  195 => 92,  191 => 91,  170 => 73,  166 => 72,  162 => 71,  154 => 66,  150 => 65,  146 => 64,  138 => 59,  134 => 58,  130 => 57,  109 => 38,  105 => 36,  101 => 34,  99 => 33,  95 => 31,  91 => 29,  85 => 27,  83 => 26,  78 => 23,  74 => 21,  70 => 19,  68 => 18,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}

<!-- En-tête moderne -->
<div class=\"row mb-3 mb-md-4\">
    <div class=\"col-12\">
        <div class=\"modern-header position-relative overflow-hidden rounded-4 shadow-lg p-3 p-md-5 text-white\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\">
            <div class=\"floating-bg\">
                <div class=\"shape shape-1\"></div>
                <div class=\"shape shape-2\"></div>
            </div>
            <div class=\"position-relative z-1\">
                <div class=\"d-flex align-items-center gap-2 gap-md-4\">
                    <div class=\"icon-wrapper bg-white bg-opacity-20 rounded-4 p-2 p-md-4\">
                        <i class=\"bi bi-tags display-6 display-md-4\"></i>
                    </div>
                    <div>
                        <h1 class=\"display-6 display-md-5 fw-bold mb-1 mb-md-2\">
                            {% if plan.id is defined and plan.id is not null %}
                                Modifier le plan d'abonnement
                            {% else %}
                                Nouveau plan d'abonnement
                            {% endif %}
                        </h1>
                        <p class=\"text-white-50 mb-0 small d-none d-sm-block\">
                            <i class=\"bi bi-info-circle me-1\"></i>
                            {% if plan.id is defined and plan.id is not null %}
                                Modifiez les informations du plan <strong class=\"text-white\">{{ plan.displayName }}</strong>
                            {% else %}
                                Créez un nouveau plan d'abonnement pour vos entreprises
                            {% endif %}
                        </p>
                        <p class=\"text-white-50 mb-0 small d-block d-sm-none\">
                            {% if plan.id is defined and plan.id is not null %}
                                Modification plan
                            {% else %}
                                Nouveau plan
                            {% endif %}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section : Informations générales -->
<div class=\"card shadow-lg border-0 mb-3 mb-md-4 rounded-4\">
    <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\">
            <i class=\"bi bi-info-circle-fill me-2\"></i>Informations générales
        </h5>
    </div>
    <div class=\"card-body p-2 p-md-4\">
        <div class=\"row g-2 g-md-4\">
            <div class=\"col-12 col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.name, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Nom technique', 'style': 'font-size:0.85rem;'}}) }}
                    {{ form_label(form.name) }}
                    {{ form_errors(form.name) }}
                </div>
            </div>
            <div class=\"col-12 col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.displayName, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Nom affiché', 'style': 'font-size:0.85rem;'}}) }}
                    {{ form_label(form.displayName) }}
                    {{ form_errors(form.displayName) }}
                </div>
            </div>
            <div class=\"col-12\">
                <div class=\"form-floating\">
                    {{ form_widget(form.description, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Description', 'style': 'height: 80px; font-size:0.85rem;'}}) }}
                    {{ form_label(form.description) }}
                    {{ form_errors(form.description) }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section : Tarifs -->
<div class=\"card shadow-lg border-0 mb-3 mb-md-4 rounded-4\">
    <div class=\"card-header bg-gradient-success text-white py-2 py-md-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\">
            <i class=\"bi bi-currency-exchange me-2\"></i>Tarifs
        </h5>
    </div>
    <div class=\"card-body p-2 p-md-4\">
        <div class=\"row g-2 g-md-4\">
            <div class=\"col-12 col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.priceMonthly, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Prix mensuel', 'style': 'font-size:0.85rem;'}}) }}
                    {{ form_label(form.priceMonthly) }}
                    {{ form_errors(form.priceMonthly) }}
                </div>
            </div>
            <div class=\"col-12 col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.priceYearly, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Prix annuel', 'style': 'font-size:0.85rem;'}}) }}
                    {{ form_label(form.priceYearly) }}
                    {{ form_errors(form.priceYearly) }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section : Limites d'utilisation - Commerce -->
<div class=\"card shadow-lg border-0 mb-3 mb-md-4 rounded-4\">
    <div class=\"card-header bg-gradient-warning text-white py-2 py-md-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\">
            <i class=\"bi bi-bar-chart-fill me-2\"></i>Limites - Commerce
        </h5>
        <small class=\"text-white-50\" style=\"font-size:0.6rem;\">Laissez vide pour illimité</small>
    </div>
    <div class=\"card-body p-2 p-md-4\">
        <div class=\"row g-2 g-md-4\">
            <div class=\"col-12 col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.maxUsersPerRole, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Max utilisateurs par rôle', 'style': 'font-size:0.85rem;'}}) }}
                    {{ form_label(form.maxUsersPerRole) }}
                    {{ form_errors(form.maxUsersPerRole) }}
                </div>
            </div>
            <div class=\"col-12 col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.maxProducts, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Max produits', 'style': 'font-size:0.85rem;'}}) }}
                    {{ form_label(form.maxProducts) }}
                    {{ form_errors(form.maxProducts) }}
                </div>
            </div>
            <div class=\"col-12 col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.maxOrdersPerMonth, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Max commandes / mois', 'style': 'font-size:0.85rem;'}}) }}
                    {{ form_label(form.maxOrdersPerMonth) }}
                    {{ form_errors(form.maxOrdersPerMonth) }}
                </div>
            </div>
            <div class=\"col-12 col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.maxCategories, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Max catégories', 'style': 'font-size:0.85rem;'}}) }}
                    {{ form_label(form.maxCategories) }}
                    {{ form_errors(form.maxCategories) }}
                </div>
            </div>
            <div class=\"col-12 col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.maxSuppliers, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Max fournisseurs', 'style': 'font-size:0.85rem;'}}) }}
                    {{ form_label(form.maxSuppliers) }}
                    {{ form_errors(form.maxSuppliers) }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section : Limites d'utilisation - Restaurant -->
<div class=\"card shadow-lg border-0 mb-3 mb-md-4 rounded-4\">
    <div class=\"card-header bg-gradient-restaurant text-white py-2 py-md-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\">
            <i class=\"bi bi-egg-fried me-2\"></i>Limites - Restaurant
        </h5>
        <small class=\"text-white-50\" style=\"font-size:0.6rem;\">Laissez vide pour illimité</small>
    </div>
    <div class=\"card-body p-2 p-md-4\">
        <div class=\"row g-2 g-md-4\">
            <div class=\"col-12 col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.maxRecipes, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Max recettes', 'style': 'font-size:0.85rem;'}}) }}
                    {{ form_label(form.maxRecipes) }}
                    {{ form_errors(form.maxRecipes) }}
                </div>
            </div>
            <div class=\"col-12 col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.maxRecipeCategories, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Max catégories de recettes', 'style': 'font-size:0.85rem;'}}) }}
                    {{ form_label(form.maxRecipeCategories) }}
                    {{ form_errors(form.maxRecipeCategories) }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section : Fonctionnalités -->
<div class=\"card shadow-lg border-0 mb-3 mb-md-4 rounded-4\">
    <div class=\"card-header bg-gradient-info text-white py-2 py-md-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\">
            <i class=\"bi bi-star-fill me-2\"></i>Fonctionnalités
        </h5>
    </div>
    <div class=\"card-body p-2 p-md-4\">
        <div class=\"features-collection\" data-prototype=\"{{ form_widget(form.features.vars.prototype)|e('html_attr') }}\" style=\"max-height: 300px; overflow-y: auto; border: 1px solid #e2e8f0; border-radius: 12px; padding: 0.5rem 0.75rem; background: #f8fafc;\">
            {% for feature in form.features %}
                <div class=\"input-group mb-2\">
                    {{ form_widget(feature, {'attr': {'class': 'form-control rounded-3', 'placeholder': 'Ex: Gestion des stocks...', 'style': 'font-size:0.75rem;'}}) }}
                    <button type=\"button\" class=\"btn btn-outline-danger remove-feature rounded-3\" style=\"font-size:0.7rem; padding:0.2rem 0.4rem;\">
                        <i class=\"bi bi-trash\"></i>
                    </button>
                </div>
            {% else %}
                <div class=\"text-center text-muted py-2 py-md-3 small\">
                    <i class=\"bi bi-info-circle me-2\"></i>Aucune fonctionnalité ajoutée.
                </div>
            {% endfor %}
        </div>
        
        <button type=\"button\" class=\"btn btn-outline-primary btn-sm mt-2 mt-md-3 add-feature rounded-pill\" style=\"font-size:0.7rem; padding:0.2rem 0.6rem;\">
            <i class=\"bi bi-plus-circle me-1 me-md-2\"></i>Ajouter une fonctionnalité
        </button>
        {{ form_errors(form.features) }}
    </div>
</div>

<!-- Section : Statut -->
<div class=\"card shadow-lg border-0 mb-3 mb-md-4 rounded-4\">
    <div class=\"card-header bg-gradient-secondary text-white py-2 py-md-3 rounded-top-4 border-0\">
        <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\">
            <i class=\"bi bi-toggle-on me-2\"></i>Statut
        </h5>
    </div>
    <div class=\"card-body p-2 p-md-4\">
        <div class=\"form-check form-switch\">
            {{ form_widget(form.isActive, {'attr': {'class': 'form-check-input'}}) }}
            {{ form_label(form.isActive, null, {'label_attr': {'class': 'form-check-label fw-semibold small'}}) }}
            {{ form_errors(form.isActive) }}
        </div>
    </div>
    <div class=\"card-footer bg-transparent border-0 py-2 py-md-4\">
        <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2\">
            <a href=\"{{ path('app_super_admin_subscription_plan_index') }}\" class=\"btn btn-outline-secondary btn-sm w-100 w-sm-auto rounded-pill px-3 px-md-5\" style=\"font-size:0.7rem; padding:0.25rem 0.5rem;\">
                <i class=\"bi bi-arrow-left me-1\"></i>Annuler
            </a>
            <button type=\"submit\" class=\"btn btn-primary btn-sm w-100 w-sm-auto rounded-pill px-3 px-md-5 shadow-lg\" style=\"font-size:0.7rem; padding:0.25rem 0.5rem;\">
                <i class=\"bi bi-check-circle-fill me-1\"></i>{{ button_label|default('Enregistrer') }}
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
                    div.className = 'text-center text-muted py-2 py-md-3 empty-message small';
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
            div.innerHTML = newForm + '<button type=\"button\" class=\"btn btn-outline-danger remove-feature rounded-3\" style=\"font-size:0.7rem; padding:0.2rem 0.4rem;\"><i class=\"bi bi-trash\"></i></button>';
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
/* En-tête moderne */
.modern-header {
    min-height: 80px;
}
.floating-bg .shape {
    position: absolute;
    background: rgba(255,255,255,0.1);
    border-radius: 50%;
}
.shape-1 {
    width: 250px; height: 250px; top: -80px; right: -40px;
    animation: float 8s ease-in-out infinite;
}
.shape-2 {
    width: 150px; height: 150px; bottom: -40px; left: -20px;
    animation: float 12s ease-in-out infinite reverse;
}
@keyframes float {
    0%,100%{ transform: translateY(0) rotate(0deg); }
    50%{ transform: translateY(-20px) rotate(5deg); }
}
.icon-wrapper {
    transition: transform 0.3s;
}
.icon-wrapper:hover {
    transform: scale(1.05) rotate(5deg);
}

/* Tous les styles existants */
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
    padding: 0.5rem 0.75rem;
    max-height: 300px;
    overflow-y: auto;
}

.features-collection .input-group {
    margin-bottom: 0.5rem !important;
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

/* ========================================
   RESPONSIVE - MOBILE
======================================== */
@media (max-width: 576px) {
    .container-fluid {
        padding-left: 6px !important;
        padding-right: 6px !important;
    }
    
    .modern-header {
        min-height: 60px !important;
        padding: 0.75rem !important;
        border-radius: 0.75rem !important;
    }
    .modern-header .display-6 {
        font-size: 1rem !important;
    }
    .modern-header .text-white-50 {
        font-size: 0.6rem !important;
    }
    .modern-header .icon-wrapper {
        padding: 0.5rem !important;
    }
    .modern-header .icon-wrapper i {
        font-size: 1.5rem !important;
    }
    .modern-header .d-flex.align-items-center.gap-2.gap-md-4 {
        gap: 0.5rem !important;
    }
    .shape-1 {
        width: 100px; height: 100px; top: -30px; right: -20px;
    }
    .shape-2 {
        width: 80px; height: 80px; bottom: -20px; left: -10px;
    }
    
    .card {
        border-radius: 0.75rem !important;
    }
    .card-header {
        padding: 0.4rem 0.6rem !important;
    }
    .card-header h5 {
        font-size: 0.75rem !important;
    }
    .card-header small {
        font-size: 0.5rem !important;
    }
    .card-body {
        padding: 0.5rem 0.6rem !important;
    }
    .card-footer {
        padding: 0.5rem 0.6rem !important;
    }
    
    .form-floating > label {
        font-size: 0.7rem !important;
        padding-left: 0.75rem !important;
    }
    .form-floating > .form-control,
    .form-floating > .form-select {
        height: calc(2.5rem + 2px) !important;
        padding: 0.5rem 0.75rem !important;
        font-size: 0.75rem !important;
        border-radius: 6px !important;
    }
    .form-floating > .form-control:focus ~ label,
    .form-floating > .form-control:not(:placeholder-shown) ~ label {
        transform: scale(0.8) translateY(-0.5rem) translateX(0.15rem) !important;
    }
    
    .form-check.form-switch .form-check-input {
        width: 2.5em !important;
        height: 1.2em !important;
    }
    .form-check-label {
        font-size: 0.7rem !important;
    }
    
    .btn {
        font-size: 0.65rem !important;
        padding: 0.2rem 0.4rem !important;
    }
    .btn i {
        font-size: 0.7rem !important;
    }
    
    .features-collection {
        padding: 0.3rem 0.4rem !important;
        max-height: 200px !important;
    }
    .features-collection .input-group {
        margin-bottom: 0.25rem !important;
    }
    .features-collection .form-control {
        font-size: 0.65rem !important;
        padding: 0.15rem 0.3rem !important;
    }
    .features-collection .btn {
        font-size: 0.55rem !important;
        padding: 0.1rem 0.2rem !important;
    }
    
    .gap-4 {
        gap: 0.5rem !important;
    }
    .row.g-4 {
        --bs-gutter-y: 0.5rem;
        --bs-gutter-x: 0.5rem;
    }
    .mb-3 {
        margin-bottom: 0.5rem !important;
    }
    .mb-4 {
        margin-bottom: 0.75rem !important;
    }
    
    .rounded-4 {
        border-radius: 0.75rem !important;
    }
    .rounded-3 {
        border-radius: 6px !important;
    }
    
    /* Désactiver hover sur mobile */
    .card:hover {
        box-shadow: none !important;
    }
    .btn-primary:hover {
        transform: none !important;
        box-shadow: none !important;
    }
    .icon-wrapper:hover {
        transform: none !important;
    }
}

/* ========================================
   RESPONSIVE - TABLETTE
======================================== */
@media (min-width: 577px) and (max-width: 768px) {
    .modern-header {
        min-height: 70px !important;
        padding: 1rem !important;
    }
    .modern-header .display-6 {
        font-size: 1.2rem !important;
    }
    .modern-header .icon-wrapper i {
        font-size: 2rem !important;
    }
    
    .card-body {
        padding: 1rem !important;
    }
    .card-header {
        padding: 0.6rem 0.8rem !important;
    }
    
    .form-floating > label {
        font-size: 0.8rem !important;
    }
    .form-floating > .form-control,
    .form-floating > .form-select {
        font-size: 0.8rem !important;
    }
    
    .btn {
        font-size: 0.7rem !important;
        padding: 0.25rem 0.5rem !important;
    }
}
</style>", "super_admin/subscription_plan/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\subscription_plan\\_form.html.twig");
    }
}
