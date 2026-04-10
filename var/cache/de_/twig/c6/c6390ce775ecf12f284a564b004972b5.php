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

/* admin/stock_batch/_form.html.twig */
class __TwigTemplate_a892ded8b2bcb0d24805b0e309dbc6e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_batch/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_batch/_form.html.twig"));

        // line 2
        yield "
";
        // line 3
        $context["isEdit"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "id", [], "any", true, true, false, 3) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)));
        // line 4
        $context["hasSales"] = (array_key_exists("hasSales", $context) && (isset($context["hasSales"]) || array_key_exists("hasSales", $context) ? $context["hasSales"] : (function () { throw new RuntimeError('Variable "hasSales" does not exist.', 4, $this->source); })()));
        // line 5
        yield "
";
        // line 6
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "

<div class=\"row g-4\">
    <!-- Carte Informations du lot -->
    <div class=\"col-lg-7\">
        <div class=\"card shadow-lg border-0 h-100 card-hover\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-boxes me-2\"></i>
                    ";
        // line 15
        if ((($tmp = (isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 15, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "                        Modifier le lot
                    ";
        } else {
            // line 18
            yield "                        Nouveau lot
                    ";
        }
        // line 20
        yield "                </h5>
            </div>
            <div class=\"card-body\">
                ";
        // line 23
        if ((($tmp = (isset($context["hasSales"]) || array_key_exists("hasSales", $context) ? $context["hasSales"] : (function () { throw new RuntimeError('Variable "hasSales" does not exist.', 23, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "                    <div class=\"alert alert-warning mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <i class=\"fas fa-exclamation-triangle fa-2x me-3\"></i>
                            <div>
                                <strong>Attention :</strong> Ce lot a déjà des ventes associées.<br>
                                <small>Seuls l'emplacement, la date d'expiration et le statut peuvent être modifiés.</small>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 34
        yield "
                <!-- Numéro de lot (auto-généré pour new, readonly pour edit) -->
                <div class=\"row g-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            ";
        // line 39
        if ((($tmp = (isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 39, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "batch_number", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control bg-light", "placeholder" => " ", "readonly" => true]]);
            // line 44
            yield "
                                <label for=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "batch_number", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45), "html", null, true);
            yield "\">
                                    <i class=\"fas fa-hashtag me-1\"></i> Numéro de lot
                                </label>
                                <small class=\"text-muted\">
                                    <i class=\"fas fa-lock me-1\"></i> Le numéro de lot ne peut pas être modifié
                                </small>
                            ";
        } else {
            // line 52
            yield "                                <div class=\"input-group\">
                                    ";
            // line 53
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "batch_number", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "id" => "batch_number_input"]]);
            // line 57
            yield "
                                    <button type=\"button\" 
                                            class=\"btn btn-outline-secondary\" 
                                            id=\"generate-batch-number\"
                                            title=\"Générer un numéro de lot automatique\">
                                        <i class=\"fas fa-sync-alt\"></i>
                                    </button>
                                </div>
                                <label for=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "batch_number", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65), "html", null, true);
            yield "\">
                                    <i class=\"fas fa-hashtag me-1\"></i> Numéro de lot *
                                </label>
                                <div class=\"form-text\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Laissez vide pour générer automatiquement
                                </div>
                            ";
        }
        // line 73
        yield "                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "batch_number", [], "any", false, false, false, 74), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Emplacement -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "location", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 88
        yield "
                            <label for=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "location", [], "any", false, false, false, 89), "vars", [], "any", false, false, false, 89), "id", [], "any", false, false, false, 89), "html", null, true);
        yield "\">
                                <i class=\"fas fa-map-marker-alt me-1\"></i> Emplacement
                            </label>
                            <div class=\"form-text\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Ex: A12, Étagère 3, Réfrigérateur 2, Zone B...
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "location", [], "any", false, false, false, 97), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quantités (readonly pour edit si a des ventes) -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 107
        if (((isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 107, $this->source); })()) && (isset($context["hasSales"]) || array_key_exists("hasSales", $context) ? $context["hasSales"] : (function () { throw new RuntimeError('Variable "hasSales" does not exist.', 107, $this->source); })()))) {
            // line 108
            yield "                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "initial_quantity", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "form-control bg-light", "placeholder" => " ", "readonly" => true]]);
            // line 112
            yield "
                            ";
        } else {
            // line 114
            yield "                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "initial_quantity", [], "any", false, false, false, 114), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "oninput" => "updateRemainingQuantity()"]]);
            // line 118
            yield "
                            ";
        }
        // line 120
        yield "                            <label for=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "initial_quantity", [], "any", false, false, false, 120), "vars", [], "any", false, false, false, 120), "id", [], "any", false, false, false, 120), "html", null, true);
        yield "\">
                                <i class=\"fas fa-box me-1\"></i> Quantité initiale *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "initial_quantity", [], "any", false, false, false, 124), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 130
        if (((isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 130, $this->source); })()) && (isset($context["hasSales"]) || array_key_exists("hasSales", $context) ? $context["hasSales"] : (function () { throw new RuntimeError('Variable "hasSales" does not exist.', 130, $this->source); })()))) {
            // line 131
            yield "                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "current_quantity", [], "any", false, false, false, 131), 'widget', ["attr" => ["class" => "form-control bg-light", "placeholder" => " ", "readonly" => true]]);
            // line 135
            yield "
                            ";
        } else {
            // line 137
            yield "                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "current_quantity", [], "any", false, false, false, 137), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "oninput" => "updateRemainingQuantity()"]]);
            // line 141
            yield "
                            ";
        }
        // line 143
        yield "                            <label for=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "current_quantity", [], "any", false, false, false, 143), "vars", [], "any", false, false, false, 143), "id", [], "any", false, false, false, 143), "html", null, true);
        yield "\">
                                <i class=\"fas fa-chart-line me-1\"></i> Quantité actuelle *
                            </label>
                            <div class=\"form-text\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Quantité disponible à la vente
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "current_quantity", [], "any", false, false, false, 151), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Indicateur de quantité consommée -->
                <div class=\"row g-3 mt-2\">
                    <div class=\"col-md-12\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body py-2\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <small class=\"text-muted\">
                                        <i class=\"fas fa-chart-simple me-1\"></i> Quantités
                                    </small>
                                    <div>
                                        <span class=\"badge bg-info text-dark\" id=\"consumed-quantity\">0</span>
                                        <span class=\"small text-muted ms-1\">consommée(s)</span>
                                    </div>
                                </div>
                                <div class=\"progress mt-2\" style=\"height: 8px;\">
                                    <div id=\"quantity-progress\" class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Prix unitaire -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            ";
        // line 183
        if (((isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 183, $this->source); })()) && (isset($context["hasSales"]) || array_key_exists("hasSales", $context) ? $context["hasSales"] : (function () { throw new RuntimeError('Variable "hasSales" does not exist.', 183, $this->source); })()))) {
            // line 184
            yield "                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "unit_price", [], "any", false, false, false, 184), 'widget', ["attr" => ["class" => "form-control bg-light", "placeholder" => " ", "readonly" => true]]);
            // line 188
            yield "
                            ";
        } else {
            // line 190
            yield "                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "unit_price", [], "any", false, false, false, 190), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "oninput" => "calculateTotalValue()"]]);
            // line 194
            yield "
                            ";
        }
        // line 196
        yield "                            <label for=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "unit_price", [], "any", false, false, false, 196), "vars", [], "any", false, false, false, 196), "id", [], "any", false, false, false, 196), "html", null, true);
        yield "\">
                                <i class=\"fas fa-tag me-1\"></i> Prix unitaire (FCFA) *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 200
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "unit_price", [], "any", false, false, false, 200), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Valeur totale calculée -->
                <div class=\"row g-3 mt-2\">
                    <div class=\"col-md-12\">
                        <div class=\"card border-0 bg-primary bg-opacity-10\">
                            <div class=\"card-body py-2\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <small class=\"text-muted\">
                                        <i class=\"fas fa-calculator me-1\"></i> Valeur totale du lot
                                    </small>
                                    <div>
                                        <span id=\"total-value\" class=\"fw-bold h5 mb-0 text-primary\">0 FCFA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Carte Dates et Statut -->
    <div class=\"col-lg-5\">
        <div class=\"card shadow-lg border-0 h-100 card-hover\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-calendar-alt me-2\"></i>
                    Dates et statut
                </h5>
            </div>
            <div class=\"card-body\">
                <!-- Date de fabrication -->
                <div class=\"row g-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            ";
        // line 241
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "manufacturing_date", [], "any", false, false, false, 241), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " "]]);
        // line 244
        yield "
                            <label for=\"";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 245, $this->source); })()), "manufacturing_date", [], "any", false, false, false, 245), "vars", [], "any", false, false, false, 245), "id", [], "any", false, false, false, 245), "html", null, true);
        yield "\">
                                <i class=\"fas fa-industry me-1\"></i> Date de fabrication
                            </label>
                            <div class=\"form-text\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Optionnelle - Date de production du lot
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 253
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 253, $this->source); })()), "manufacturing_date", [], "any", false, false, false, 253), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Date d'expiration -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            ";
        // line 263
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 263, $this->source); })()), "expiry_date", [], "any", false, false, false, 263), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "onchange" => "checkExpiryDate()"]]);
        // line 267
        yield "
                            <label for=\"";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 268, $this->source); })()), "expiry_date", [], "any", false, false, false, 268), "vars", [], "any", false, false, false, 268), "id", [], "any", false, false, false, 268), "html", null, true);
        yield "\">
                                <i class=\"fas fa-hourglass-end me-1\"></i> Date d'expiration
                            </label>
                            <div class=\"form-text\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                À renseigner pour les produits périssables
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 276
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 276, $this->source); })()), "expiry_date", [], "any", false, false, false, 276), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Alerte expiration -->
                <div id=\"expiry-warning\" class=\"alert alert-warning mt-3\" style=\"display: none;\">
                                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    <strong>Attention :</strong> Ce lot expire bientôt !
                </div>
                <div id=\"expiry-expired\" class=\"alert alert-danger mt-3\" style=\"display: none;\">
                                    <i class=\"fas fa-skull-crossbones me-2\"></i>
                    <strong>Expiré :</strong> Ce lot est déjà expiré !
                </div>

                <!-- Statut actif -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center justify-content-between mb-2\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-toggle-on me-2 text-primary\"></i>
                                        <span class=\"fw-bold\">Statut du lot</span>
                                    </div>
                                    <span class=\"badge ";
        // line 302
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 302, $this->source); })()), "is_active", [], "any", false, false, false, 302), "vars", [], "any", false, false, false, 302), "data", [], "any", false, false, false, 302)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\" id=\"status-badge\">
                                        ";
        // line 303
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 303, $this->source); })()), "is_active", [], "any", false, false, false, 303), "vars", [], "any", false, false, false, 303), "data", [], "any", false, false, false, 303)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
        yield "
                                    </span>
                                </div>
                                <div class=\"form-check form-switch\">
                                    ";
        // line 307
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 307, $this->source); })()), "is_active", [], "any", false, false, false, 307), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch", "onchange" => "updateStatusBadge()"]]);
        // line 311
        yield "
                                    <label class=\"form-check-label\" for=\"";
        // line 312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 312, $this->source); })()), "is_active", [], "any", false, false, false, 312), "vars", [], "any", false, false, false, 312), "id", [], "any", false, false, false, 312), "html", null, true);
        yield "\" id=\"status-label\">
                                        ";
        // line 313
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 313, $this->source); })()), "is_active", [], "any", false, false, false, 313), "vars", [], "any", false, false, false, 313), "data", [], "any", false, false, false, 313)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Lot actif (disponible à la vente)") : ("Lot inactif (indisponible)"));
        yield "
                                    </label>
                                </div>
                                <small class=\"text-muted mt-1 d-block\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Désactiver un lot le rend indisponible à la vente sans supprimer l'historique
                                </small>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 321
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 321, $this->source); })()), "is_active", [], "any", false, false, false, 321), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Informations supplémentaires (lecture seule) -->
                ";
        // line 329
        if ((($tmp = (isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 329, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 330
            yield "                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"card border-0 bg-secondary bg-opacity-10\">
                            <div class=\"card-body\">
                                <h6 class=\"card-subtitle mb-2 text-muted\">
                                    <i class=\"fas fa-history me-1\"></i> Informations système
                                </h6>
                                <div class=\"small\">
                                    <div class=\"d-flex justify-content-between mb-1\">
                                        <span class=\"text-muted\">Créé le :</span>
                                        <span>";
            // line 340
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 340, $this->source); })()), "createdAt", [], "any", false, false, false, 340), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                                    </div>
                                    ";
            // line 342
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 342, $this->source); })()), "updatedAt", [], "any", false, false, false, 342)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 343
                yield "                                    <div class=\"d-flex justify-content-between\">
                                        <span class=\"text-muted\">Modifié le :</span>
                                        <span>";
                // line 345
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 345, $this->source); })()), "updatedAt", [], "any", false, false, false, 345), "d/m/Y H:i"), "html", null, true);
                yield "</span>
                                    </div>
                                    ";
            }
            // line 348
            yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 354
        yield "            </div>

            <!-- Footer avec boutons d'action -->
            <div class=\"card-footer bg-light py-3\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <a href=\"";
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 359, $this->source); })()), "id", [], "any", false, false, false, 359)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-times me-2\"></i> Annuler
                    </a>
                    
                    <div class=\"btn-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                            <i class=\"fas fa-save me-2\"></i> 
                            ";
        // line 366
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 366, $this->source); })()), (((($tmp = (isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 366, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre à jour") : ("Créer le lot")))) : ((((($tmp = (isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 366, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre à jour") : ("Créer le lot")))), "html", null, true);
        yield "
                        </button>
                        
                        ";
        // line 369
        if ((($tmp = (isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 369, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 370
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 370, $this->source); })()), "id", [], "any", false, false, false, 370)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-lg\">
                                <i class=\"fas fa-eye me-2\"></i> Voir
                            </a>
                        ";
        }
        // line 374
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 381
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 381, $this->source); })()), 'form_end');
        yield "

<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('Formulaire lot chargé');
    
    // ========== GÉNÉRATION NUMÉRO DE LOT ==========
    const generateBtn = document.getElementById('generate-batch-number');
    const batchNumberInput = document.getElementById('batch_number_input');
    
    if (generateBtn && batchNumberInput) {
        generateBtn.addEventListener('click', function() {
            const date = new Date();
            const year = date.getFullYear();
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const day = String(date.getDate()).padStart(2, '0');
            const random = Math.floor(Math.random() * 10000).toString().padStart(4, '0');
            const productId = ";
        // line 399
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 399, $this->source); })()), "id", [], "any", false, false, false, 399), "html", null, true);
        yield ";
            
            const batchNumber = `LOT-\${year}\${month}\${day}-\${productId}-\${random}`;
            batchNumberInput.value = batchNumber;
        });
    }
    
    // ========== CALCUL DES QUANTITÉS ==========
    const initialQtyInput = document.getElementById('";
        // line 407
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 407, $this->source); })()), "initial_quantity", [], "any", false, false, false, 407), "vars", [], "any", false, false, false, 407), "id", [], "any", false, false, false, 407), "html", null, true);
        yield "');
    const currentQtyInput = document.getElementById('";
        // line 408
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 408, $this->source); })()), "current_quantity", [], "any", false, false, false, 408), "vars", [], "any", false, false, false, 408), "id", [], "any", false, false, false, 408), "html", null, true);
        yield "');
    const consumedSpan = document.getElementById('consumed-quantity');
    const progressBar = document.getElementById('quantity-progress');
    
    function updateRemainingQuantity() {
        if (initialQtyInput && currentQtyInput) {
            const initial = parseFloat(initialQtyInput.value) || 0;
            const current = parseFloat(currentQtyInput.value) || 0;
            const consumed = initial - current;
            
            if (consumedSpan) {
                consumedSpan.textContent = Math.max(0, consumed);
            }
            
            if (progressBar && initial > 0) {
                const percentage = (current / initial) * 100;
                progressBar.style.width = Math.min(100, Math.max(0, percentage)) + '%';
                
                // Changer la couleur selon le stock restant
                if (percentage <= 10) {
                    progressBar.className = 'progress-bar bg-danger';
                } else if (percentage <= 30) {
                    progressBar.className = 'progress-bar bg-warning';
                } else {
                    progressBar.className = 'progress-bar bg-success';
                }
            } else if (progressBar) {
                progressBar.style.width = '0%';
            }
        }
    }
    
    // Exposer la fonction globalement
    window.updateRemainingQuantity = updateRemainingQuantity;
    
    // ========== CALCUL VALEUR TOTALE ==========
    const unitPriceInput = document.getElementById('";
        // line 444
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 444, $this->source); })()), "unit_price", [], "any", false, false, false, 444), "vars", [], "any", false, false, false, 444), "id", [], "any", false, false, false, 444), "html", null, true);
        yield "');
    const totalValueSpan = document.getElementById('total-value');
    
    function calculateTotalValue() {
        if (currentQtyInput && unitPriceInput && totalValueSpan) {
            const current = parseFloat(currentQtyInput.value) || 0;
            const price = parseFloat(unitPriceInput.value) || 0;
            const total = current * price;
            
            totalValueSpan.textContent = total.toLocaleString('fr-FR') + ' FCFA';
        }
    }
    
    window.calculateTotalValue = calculateTotalValue;
    
    // ========== VÉRIFICATION DATE D'EXPIRATION ==========
    const expiryDateInput = document.getElementById('";
        // line 460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 460, $this->source); })()), "expiry_date", [], "any", false, false, false, 460), "vars", [], "any", false, false, false, 460), "id", [], "any", false, false, false, 460), "html", null, true);
        yield "');
    const expiryWarning = document.getElementById('expiry-warning');
    const expiryExpired = document.getElementById('expiry-expired');
    
    function checkExpiryDate() {
        if (expiryDateInput && expiryDateInput.value) {
            const expiryDate = new Date(expiryDateInput.value);
            const today = new Date();
            const thirtyDaysFromNow = new Date();
            thirtyDaysFromNow.setDate(today.getDate() + 30);
            
            // Réinitialiser l'affichage
            if (expiryWarning) expiryWarning.style.display = 'none';
            if (expiryExpired) expiryExpired.style.display = 'none';
            
            if (expiryDate < today) {
                if (expiryExpired) expiryExpired.style.display = 'block';
                // Désactiver automatiquement le lot si expiré
                const activeSwitch = document.getElementById('";
        // line 478
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 478, $this->source); })()), "is_active", [], "any", false, false, false, 478), "vars", [], "any", false, false, false, 478), "id", [], "any", false, false, false, 478), "html", null, true);
        yield "');
                if (activeSwitch && activeSwitch.checked) {
                    activeSwitch.checked = false;
                    updateStatusBadge();
                }
            } else if (expiryDate < thirtyDaysFromNow) {
                if (expiryWarning) expiryWarning.style.display = 'block';
            }
        } else {
            if (expiryWarning) expiryWarning.style.display = 'none';
            if (expiryExpired) expiryExpired.style.display = 'none';
        }
    }
    
    window.checkExpiryDate = checkExpiryDate;
    
    // ========== MISE À JOUR DU BADGE STATUT ==========
    function updateStatusBadge() {
        const activeSwitch = document.getElementById('";
        // line 496
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 496, $this->source); })()), "is_active", [], "any", false, false, false, 496), "vars", [], "any", false, false, false, 496), "id", [], "any", false, false, false, 496), "html", null, true);
        yield "');
        const statusBadge = document.getElementById('status-badge');
        const statusLabel = document.getElementById('status-label');
        
        if (activeSwitch && statusBadge && statusLabel) {
            const isActive = activeSwitch.checked;
            
            if (isActive) {
                statusBadge.className = 'badge bg-success';
                statusBadge.textContent = 'ACTIF';
                statusLabel.textContent = 'Lot actif (disponible à la vente)';
            } else {
                statusBadge.className = 'badge bg-danger';
                statusBadge.textContent = 'INACTIF';
                statusLabel.textContent = 'Lot inactif (indisponible)';
            }
        }
    }
    
    window.updateStatusBadge = updateStatusBadge;
    
    // ========== INITIALISATION ==========
    updateRemainingQuantity();
    calculateTotalValue();
    checkExpiryDate();
    updateStatusBadge();
    
    // ========== ÉCOUTEURS D'ÉVÉNEMENTS ==========
    if (initialQtyInput) initialQtyInput.addEventListener('input', function() {
        updateRemainingQuantity();
        calculateTotalValue();
    });
    
    if (currentQtyInput) currentQtyInput.addEventListener('input', function() {
        updateRemainingQuantity();
        calculateTotalValue();
    });
    
    if (unitPriceInput) unitPriceInput.addEventListener('input', calculateTotalValue);
    if (expiryDateInput) expiryDateInput.addEventListener('change', checkExpiryDate);
    
    // ========== VALIDATION BOOTSTRAP ==========
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
    
    // ========== EMPÊCHER QUANTITÉ ACTUELLE > QUANTITÉ INITIALE ==========
    if (initialQtyInput && currentQtyInput) {
        currentQtyInput.addEventListener('change', function() {
            const initial = parseFloat(initialQtyInput.value) || 0;
            const current = parseFloat(currentQtyInput.value) || 0;
            
            if (current > initial) {
                currentQtyInput.setCustomValidity('La quantité actuelle ne peut pas dépasser la quantité initiale');
                currentQtyInput.reportValidity();
            } else {
                currentQtyInput.setCustomValidity('');
            }
        });
        
        initialQtyInput.addEventListener('change', function() {
            const initial = parseFloat(initialQtyInput.value) || 0;
            const current = parseFloat(currentQtyInput.value) || 0;
            
            if (current > initial) {
                currentQtyInput.value = initial;
                updateRemainingQuantity();
                calculateTotalValue();
                currentQtyInput.setCustomValidity('');
            }
        });
    }
});
</script>

<!-- CSS additionnel -->
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
.btn-info:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(23, 162, 184, 0.4);
}
.form-switch .form-check-input {
    width: 3.5em;
    height: 1.8em;
    cursor: pointer;
    margin-top: 0.25rem;
}
.form-check-input:checked {
    background-color: #198754;
    border-color: #198754;
}
.form-check-input:focus {
    box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}
.progress {
    border-radius: 10px;
    overflow: hidden;
    background-color: #e9ecef;
}
.progress-bar {
    transition: width 0.3s ease;
}
.bg-light {
    background-color: #f8f9fa !important;
}
.input-group .btn {
    border-radius: 0 10px 10px 0;
}
.input-group .form-control {
    border-right: none;
}
.input-group .form-control:focus {
    border-color: #667eea;
    box-shadow: none;
}
#total-value {
    transition: all 0.3s ease;
}
@media (max-width: 768px) {
    .form-switch .form-check-input {
        width: 3em;
        height: 1.5em;
    }
    .btn-group {
        flex-direction: column;
    }
    .btn-group .btn {
        border-radius: 8px !important;
        margin-bottom: 5px;
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
        return "admin/stock_batch/_form.html.twig";
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
        return array (  692 => 496,  671 => 478,  650 => 460,  631 => 444,  592 => 408,  588 => 407,  577 => 399,  556 => 381,  547 => 374,  539 => 370,  537 => 369,  531 => 366,  521 => 359,  514 => 354,  506 => 348,  500 => 345,  496 => 343,  494 => 342,  489 => 340,  477 => 330,  475 => 329,  464 => 321,  453 => 313,  449 => 312,  446 => 311,  444 => 307,  437 => 303,  433 => 302,  404 => 276,  393 => 268,  390 => 267,  388 => 263,  375 => 253,  364 => 245,  361 => 244,  359 => 241,  315 => 200,  307 => 196,  303 => 194,  300 => 190,  296 => 188,  293 => 184,  291 => 183,  256 => 151,  244 => 143,  240 => 141,  237 => 137,  233 => 135,  230 => 131,  228 => 130,  219 => 124,  211 => 120,  207 => 118,  204 => 114,  200 => 112,  197 => 108,  195 => 107,  182 => 97,  171 => 89,  168 => 88,  166 => 84,  153 => 74,  150 => 73,  139 => 65,  129 => 57,  127 => 53,  124 => 52,  114 => 45,  111 => 44,  108 => 40,  106 => 39,  99 => 34,  87 => 24,  85 => 23,  80 => 20,  76 => 18,  72 => 16,  70 => 15,  58 => 6,  55 => 5,  53 => 4,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/stock_batch/_form.html.twig #}

{% set isEdit = batch.id is defined and batch.id is not null %}
{% set hasSales = hasSales is defined and hasSales %}

{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': true}}) }}

<div class=\"row g-4\">
    <!-- Carte Informations du lot -->
    <div class=\"col-lg-7\">
        <div class=\"card shadow-lg border-0 h-100 card-hover\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-boxes me-2\"></i>
                    {% if isEdit %}
                        Modifier le lot
                    {% else %}
                        Nouveau lot
                    {% endif %}
                </h5>
            </div>
            <div class=\"card-body\">
                {% if hasSales %}
                    <div class=\"alert alert-warning mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <i class=\"fas fa-exclamation-triangle fa-2x me-3\"></i>
                            <div>
                                <strong>Attention :</strong> Ce lot a déjà des ventes associées.<br>
                                <small>Seuls l'emplacement, la date d'expiration et le statut peuvent être modifiés.</small>
                            </div>
                        </div>
                    </div>
                {% endif %}

                <!-- Numéro de lot (auto-généré pour new, readonly pour edit) -->
                <div class=\"row g-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            {% if isEdit %}
                                {{ form_widget(form.batch_number, {'attr': {
                                    'class': 'form-control bg-light',
                                    'placeholder': ' ',
                                    'readonly': true
                                }}) }}
                                <label for=\"{{ form.batch_number.vars.id }}\">
                                    <i class=\"fas fa-hashtag me-1\"></i> Numéro de lot
                                </label>
                                <small class=\"text-muted\">
                                    <i class=\"fas fa-lock me-1\"></i> Le numéro de lot ne peut pas être modifié
                                </small>
                            {% else %}
                                <div class=\"input-group\">
                                    {{ form_widget(form.batch_number, {'attr': {
                                        'class': 'form-control',
                                        'placeholder': ' ',
                                        'id': 'batch_number_input'
                                    }}) }}
                                    <button type=\"button\" 
                                            class=\"btn btn-outline-secondary\" 
                                            id=\"generate-batch-number\"
                                            title=\"Générer un numéro de lot automatique\">
                                        <i class=\"fas fa-sync-alt\"></i>
                                    </button>
                                </div>
                                <label for=\"{{ form.batch_number.vars.id }}\">
                                    <i class=\"fas fa-hashtag me-1\"></i> Numéro de lot *
                                </label>
                                <div class=\"form-text\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Laissez vide pour générer automatiquement
                                </div>
                            {% endif %}
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.batch_number) }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Emplacement -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.location, {'attr': {
                                'class': 'form-control',
                                'placeholder': ' ',
                                'autocomplete': 'off'
                            }}) }}
                            <label for=\"{{ form.location.vars.id }}\">
                                <i class=\"fas fa-map-marker-alt me-1\"></i> Emplacement
                            </label>
                            <div class=\"form-text\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Ex: A12, Étagère 3, Réfrigérateur 2, Zone B...
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.location) }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quantités (readonly pour edit si a des ventes) -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {% if isEdit and hasSales %}
                                {{ form_widget(form.initial_quantity, {'attr': {
                                    'class': 'form-control bg-light',
                                    'placeholder': ' ',
                                    'readonly': true
                                }}) }}
                            {% else %}
                                {{ form_widget(form.initial_quantity, {'attr': {
                                    'class': 'form-control',
                                    'placeholder': ' ',
                                    'oninput': 'updateRemainingQuantity()'
                                }}) }}
                            {% endif %}
                            <label for=\"{{ form.initial_quantity.vars.id }}\">
                                <i class=\"fas fa-box me-1\"></i> Quantité initiale *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.initial_quantity) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {% if isEdit and hasSales %}
                                {{ form_widget(form.current_quantity, {'attr': {
                                    'class': 'form-control bg-light',
                                    'placeholder': ' ',
                                    'readonly': true
                                }}) }}
                            {% else %}
                                {{ form_widget(form.current_quantity, {'attr': {
                                    'class': 'form-control',
                                    'placeholder': ' ',
                                    'oninput': 'updateRemainingQuantity()'
                                }}) }}
                            {% endif %}
                            <label for=\"{{ form.current_quantity.vars.id }}\">
                                <i class=\"fas fa-chart-line me-1\"></i> Quantité actuelle *
                            </label>
                            <div class=\"form-text\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Quantité disponible à la vente
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.current_quantity) }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Indicateur de quantité consommée -->
                <div class=\"row g-3 mt-2\">
                    <div class=\"col-md-12\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body py-2\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <small class=\"text-muted\">
                                        <i class=\"fas fa-chart-simple me-1\"></i> Quantités
                                    </small>
                                    <div>
                                        <span class=\"badge bg-info text-dark\" id=\"consumed-quantity\">0</span>
                                        <span class=\"small text-muted ms-1\">consommée(s)</span>
                                    </div>
                                </div>
                                <div class=\"progress mt-2\" style=\"height: 8px;\">
                                    <div id=\"quantity-progress\" class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Prix unitaire -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            {% if isEdit and hasSales %}
                                {{ form_widget(form.unit_price, {'attr': {
                                    'class': 'form-control bg-light',
                                    'placeholder': ' ',
                                    'readonly': true
                                }}) }}
                            {% else %}
                                {{ form_widget(form.unit_price, {'attr': {
                                    'class': 'form-control',
                                    'placeholder': ' ',
                                    'oninput': 'calculateTotalValue()'
                                }}) }}
                            {% endif %}
                            <label for=\"{{ form.unit_price.vars.id }}\">
                                <i class=\"fas fa-tag me-1\"></i> Prix unitaire (FCFA) *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.unit_price) }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Valeur totale calculée -->
                <div class=\"row g-3 mt-2\">
                    <div class=\"col-md-12\">
                        <div class=\"card border-0 bg-primary bg-opacity-10\">
                            <div class=\"card-body py-2\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <small class=\"text-muted\">
                                        <i class=\"fas fa-calculator me-1\"></i> Valeur totale du lot
                                    </small>
                                    <div>
                                        <span id=\"total-value\" class=\"fw-bold h5 mb-0 text-primary\">0 FCFA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Carte Dates et Statut -->
    <div class=\"col-lg-5\">
        <div class=\"card shadow-lg border-0 h-100 card-hover\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-calendar-alt me-2\"></i>
                    Dates et statut
                </h5>
            </div>
            <div class=\"card-body\">
                <!-- Date de fabrication -->
                <div class=\"row g-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.manufacturing_date, {'attr': {
                                'class': 'form-control',
                                'placeholder': ' '
                            }}) }}
                            <label for=\"{{ form.manufacturing_date.vars.id }}\">
                                <i class=\"fas fa-industry me-1\"></i> Date de fabrication
                            </label>
                            <div class=\"form-text\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Optionnelle - Date de production du lot
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.manufacturing_date) }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Date d'expiration -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.expiry_date, {'attr': {
                                'class': 'form-control',
                                'placeholder': ' ',
                                'onchange': 'checkExpiryDate()'
                            }}) }}
                            <label for=\"{{ form.expiry_date.vars.id }}\">
                                <i class=\"fas fa-hourglass-end me-1\"></i> Date d'expiration
                            </label>
                            <div class=\"form-text\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                À renseigner pour les produits périssables
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.expiry_date) }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Alerte expiration -->
                <div id=\"expiry-warning\" class=\"alert alert-warning mt-3\" style=\"display: none;\">
                                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    <strong>Attention :</strong> Ce lot expire bientôt !
                </div>
                <div id=\"expiry-expired\" class=\"alert alert-danger mt-3\" style=\"display: none;\">
                                    <i class=\"fas fa-skull-crossbones me-2\"></i>
                    <strong>Expiré :</strong> Ce lot est déjà expiré !
                </div>

                <!-- Statut actif -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center justify-content-between mb-2\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-toggle-on me-2 text-primary\"></i>
                                        <span class=\"fw-bold\">Statut du lot</span>
                                    </div>
                                    <span class=\"badge {{ form.is_active.vars.data ? 'bg-success' : 'bg-danger' }}\" id=\"status-badge\">
                                        {{ form.is_active.vars.data ? 'ACTIF' : 'INACTIF' }}
                                    </span>
                                </div>
                                <div class=\"form-check form-switch\">
                                    {{ form_widget(form.is_active, {'attr': {
                                        'class': 'form-check-input',
                                        'role': 'switch',
                                        'onchange': 'updateStatusBadge()'
                                    }}) }}
                                    <label class=\"form-check-label\" for=\"{{ form.is_active.vars.id }}\" id=\"status-label\">
                                        {{ form.is_active.vars.data ? 'Lot actif (disponible à la vente)' : 'Lot inactif (indisponible)' }}
                                    </label>
                                </div>
                                <small class=\"text-muted mt-1 d-block\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Désactiver un lot le rend indisponible à la vente sans supprimer l'historique
                                </small>
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.is_active) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Informations supplémentaires (lecture seule) -->
                {% if isEdit %}
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"card border-0 bg-secondary bg-opacity-10\">
                            <div class=\"card-body\">
                                <h6 class=\"card-subtitle mb-2 text-muted\">
                                    <i class=\"fas fa-history me-1\"></i> Informations système
                                </h6>
                                <div class=\"small\">
                                    <div class=\"d-flex justify-content-between mb-1\">
                                        <span class=\"text-muted\">Créé le :</span>
                                        <span>{{ batch.createdAt|date('d/m/Y H:i') }}</span>
                                    </div>
                                    {% if batch.updatedAt %}
                                    <div class=\"d-flex justify-content-between\">
                                        <span class=\"text-muted\">Modifié le :</span>
                                        <span>{{ batch.updatedAt|date('d/m/Y H:i') }}</span>
                                    </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% endif %}
            </div>

            <!-- Footer avec boutons d'action -->
            <div class=\"card-footer bg-light py-3\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id}) }}\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-times me-2\"></i> Annuler
                    </a>
                    
                    <div class=\"btn-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                            <i class=\"fas fa-save me-2\"></i> 
                            {{ button_label|default(isEdit ? 'Mettre à jour' : 'Créer le lot') }}
                        </button>
                        
                        {% if isEdit %}
                            <a href=\"{{ path('app_admin_stock_batch_show', {'id': batch.id}) }}\" class=\"btn btn-info btn-lg\">
                                <i class=\"fas fa-eye me-2\"></i> Voir
                            </a>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{ form_end(form) }}

<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('Formulaire lot chargé');
    
    // ========== GÉNÉRATION NUMÉRO DE LOT ==========
    const generateBtn = document.getElementById('generate-batch-number');
    const batchNumberInput = document.getElementById('batch_number_input');
    
    if (generateBtn && batchNumberInput) {
        generateBtn.addEventListener('click', function() {
            const date = new Date();
            const year = date.getFullYear();
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const day = String(date.getDate()).padStart(2, '0');
            const random = Math.floor(Math.random() * 10000).toString().padStart(4, '0');
            const productId = {{ product.id }};
            
            const batchNumber = `LOT-\${year}\${month}\${day}-\${productId}-\${random}`;
            batchNumberInput.value = batchNumber;
        });
    }
    
    // ========== CALCUL DES QUANTITÉS ==========
    const initialQtyInput = document.getElementById('{{ form.initial_quantity.vars.id }}');
    const currentQtyInput = document.getElementById('{{ form.current_quantity.vars.id }}');
    const consumedSpan = document.getElementById('consumed-quantity');
    const progressBar = document.getElementById('quantity-progress');
    
    function updateRemainingQuantity() {
        if (initialQtyInput && currentQtyInput) {
            const initial = parseFloat(initialQtyInput.value) || 0;
            const current = parseFloat(currentQtyInput.value) || 0;
            const consumed = initial - current;
            
            if (consumedSpan) {
                consumedSpan.textContent = Math.max(0, consumed);
            }
            
            if (progressBar && initial > 0) {
                const percentage = (current / initial) * 100;
                progressBar.style.width = Math.min(100, Math.max(0, percentage)) + '%';
                
                // Changer la couleur selon le stock restant
                if (percentage <= 10) {
                    progressBar.className = 'progress-bar bg-danger';
                } else if (percentage <= 30) {
                    progressBar.className = 'progress-bar bg-warning';
                } else {
                    progressBar.className = 'progress-bar bg-success';
                }
            } else if (progressBar) {
                progressBar.style.width = '0%';
            }
        }
    }
    
    // Exposer la fonction globalement
    window.updateRemainingQuantity = updateRemainingQuantity;
    
    // ========== CALCUL VALEUR TOTALE ==========
    const unitPriceInput = document.getElementById('{{ form.unit_price.vars.id }}');
    const totalValueSpan = document.getElementById('total-value');
    
    function calculateTotalValue() {
        if (currentQtyInput && unitPriceInput && totalValueSpan) {
            const current = parseFloat(currentQtyInput.value) || 0;
            const price = parseFloat(unitPriceInput.value) || 0;
            const total = current * price;
            
            totalValueSpan.textContent = total.toLocaleString('fr-FR') + ' FCFA';
        }
    }
    
    window.calculateTotalValue = calculateTotalValue;
    
    // ========== VÉRIFICATION DATE D'EXPIRATION ==========
    const expiryDateInput = document.getElementById('{{ form.expiry_date.vars.id }}');
    const expiryWarning = document.getElementById('expiry-warning');
    const expiryExpired = document.getElementById('expiry-expired');
    
    function checkExpiryDate() {
        if (expiryDateInput && expiryDateInput.value) {
            const expiryDate = new Date(expiryDateInput.value);
            const today = new Date();
            const thirtyDaysFromNow = new Date();
            thirtyDaysFromNow.setDate(today.getDate() + 30);
            
            // Réinitialiser l'affichage
            if (expiryWarning) expiryWarning.style.display = 'none';
            if (expiryExpired) expiryExpired.style.display = 'none';
            
            if (expiryDate < today) {
                if (expiryExpired) expiryExpired.style.display = 'block';
                // Désactiver automatiquement le lot si expiré
                const activeSwitch = document.getElementById('{{ form.is_active.vars.id }}');
                if (activeSwitch && activeSwitch.checked) {
                    activeSwitch.checked = false;
                    updateStatusBadge();
                }
            } else if (expiryDate < thirtyDaysFromNow) {
                if (expiryWarning) expiryWarning.style.display = 'block';
            }
        } else {
            if (expiryWarning) expiryWarning.style.display = 'none';
            if (expiryExpired) expiryExpired.style.display = 'none';
        }
    }
    
    window.checkExpiryDate = checkExpiryDate;
    
    // ========== MISE À JOUR DU BADGE STATUT ==========
    function updateStatusBadge() {
        const activeSwitch = document.getElementById('{{ form.is_active.vars.id }}');
        const statusBadge = document.getElementById('status-badge');
        const statusLabel = document.getElementById('status-label');
        
        if (activeSwitch && statusBadge && statusLabel) {
            const isActive = activeSwitch.checked;
            
            if (isActive) {
                statusBadge.className = 'badge bg-success';
                statusBadge.textContent = 'ACTIF';
                statusLabel.textContent = 'Lot actif (disponible à la vente)';
            } else {
                statusBadge.className = 'badge bg-danger';
                statusBadge.textContent = 'INACTIF';
                statusLabel.textContent = 'Lot inactif (indisponible)';
            }
        }
    }
    
    window.updateStatusBadge = updateStatusBadge;
    
    // ========== INITIALISATION ==========
    updateRemainingQuantity();
    calculateTotalValue();
    checkExpiryDate();
    updateStatusBadge();
    
    // ========== ÉCOUTEURS D'ÉVÉNEMENTS ==========
    if (initialQtyInput) initialQtyInput.addEventListener('input', function() {
        updateRemainingQuantity();
        calculateTotalValue();
    });
    
    if (currentQtyInput) currentQtyInput.addEventListener('input', function() {
        updateRemainingQuantity();
        calculateTotalValue();
    });
    
    if (unitPriceInput) unitPriceInput.addEventListener('input', calculateTotalValue);
    if (expiryDateInput) expiryDateInput.addEventListener('change', checkExpiryDate);
    
    // ========== VALIDATION BOOTSTRAP ==========
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
    
    // ========== EMPÊCHER QUANTITÉ ACTUELLE > QUANTITÉ INITIALE ==========
    if (initialQtyInput && currentQtyInput) {
        currentQtyInput.addEventListener('change', function() {
            const initial = parseFloat(initialQtyInput.value) || 0;
            const current = parseFloat(currentQtyInput.value) || 0;
            
            if (current > initial) {
                currentQtyInput.setCustomValidity('La quantité actuelle ne peut pas dépasser la quantité initiale');
                currentQtyInput.reportValidity();
            } else {
                currentQtyInput.setCustomValidity('');
            }
        });
        
        initialQtyInput.addEventListener('change', function() {
            const initial = parseFloat(initialQtyInput.value) || 0;
            const current = parseFloat(currentQtyInput.value) || 0;
            
            if (current > initial) {
                currentQtyInput.value = initial;
                updateRemainingQuantity();
                calculateTotalValue();
                currentQtyInput.setCustomValidity('');
            }
        });
    }
});
</script>

<!-- CSS additionnel -->
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
.btn-info:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(23, 162, 184, 0.4);
}
.form-switch .form-check-input {
    width: 3.5em;
    height: 1.8em;
    cursor: pointer;
    margin-top: 0.25rem;
}
.form-check-input:checked {
    background-color: #198754;
    border-color: #198754;
}
.form-check-input:focus {
    box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}
.progress {
    border-radius: 10px;
    overflow: hidden;
    background-color: #e9ecef;
}
.progress-bar {
    transition: width 0.3s ease;
}
.bg-light {
    background-color: #f8f9fa !important;
}
.input-group .btn {
    border-radius: 0 10px 10px 0;
}
.input-group .form-control {
    border-right: none;
}
.input-group .form-control:focus {
    border-color: #667eea;
    box-shadow: none;
}
#total-value {
    transition: all 0.3s ease;
}
@media (max-width: 768px) {
    .form-switch .form-check-input {
        width: 3em;
        height: 1.5em;
    }
    .btn-group {
        flex-direction: column;
    }
    .btn-group .btn {
        border-radius: 8px !important;
        margin-bottom: 5px;
    }
}
</style>", "admin/stock_batch/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_batch\\_form.html.twig");
    }
}
