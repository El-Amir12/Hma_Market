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

/* admin/restaurant/promotion/_form.html.twig */
class __TwigTemplate_b5c6b90d3cbcea04030faea562486090 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/restaurant/promotion/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/restaurant/promotion/_form.html.twig"));

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
        <!-- Carte Image -->
        <div class=\"col-lg-4\">
            <div class=\"card shadow-lg border-0 h-100 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-image me-2\"></i>Image de la promotion
                    </h5>
                </div>
                <div class=\"card-body text-center d-flex flex-column\">
                    <div class=\"promo-image-preview mb-4 flex-grow-1 d-flex flex-column justify-content-center\">
                        ";
        // line 19
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 19, $this->source); })()), "image", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "                            <div class=\"position-relative mx-auto\" style=\"width: 200px; height: 200px;\">
                                <img src=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/promotions/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 21, $this->source); })()), "image", [], "any", false, false, false, 21))), "html", null, true);
            yield "\"
                                     alt=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
            yield "\"
                                     class=\"img-fluid rounded shadow-lg promo-preview\"
                                     style=\"width: 100%; height: 100%; object-fit: cover; border: 5px solid #f8f9fa;\">
                                ";
            // line 25
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", true, true, false, 25) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)))) {
                // line 26
                yield "                                    <button type=\"button\"
                                            class=\"btn btn-danger btn-sm position-absolute rounded-circle shadow\"
                                            style=\"bottom: 10px; right: 10px; width: 36px; height: 36px;\"
                                            data-bs-toggle=\"modal\"
                                            data-bs-target=\"#deleteImageModal\"
                                            title=\"Supprimer l'image\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                ";
            }
            // line 35
            yield "                            </div>
                        ";
        } else {
            // line 37
            yield "                            <div class=\"promo-placeholder rounded d-flex align-items-center justify-content-center mx-auto bg-gradient-primary text-white shadow-lg\"
                                 style=\"width: 200px; height: 200px; border: 5px solid #f8f9fa;\">
                                <i class=\"fas fa-tag fa-5x\"></i>
                            </div>
                        ";
        }
        // line 42
        yield "                    </div>

                    <div class=\"mt-auto\">
                        <div class=\"file-upload-wrapper\">
                            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "image", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "onchange" => "previewPromoImage(this)", "accept" => "image/*"]]);
        // line 50
        yield "
                            <div class=\"form-text mt-2\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Formats acceptés : JPG, PNG, GIF, WebP. Taille max : 5M
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "image", [], "any", false, false, false, 56), 'errors');
        yield "
                            </div>
                        </div>

                        <div class=\"mt-3\">
                            <label for=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "image", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
        yield "\" class=\"btn btn-outline-primary w-100\">
                                <i class=\"fas fa-cloud-upload-alt me-2\"></i>
                                ";
        // line 63
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 63, $this->source); })()), "image", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Changer l'image") : ("Choisir une image"));
        yield "
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carte Informations de la promotion -->
        <div class=\"col-lg-8\">
            <div class=\"card shadow-lg border-0 h-100 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-percent me-2\"></i>
                        ";
        // line 77
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", true, true, false, 77) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77)))) {
            // line 78
            yield "                            Modifier la promotion
                        ";
        } else {
            // line 80
            yield "                            Nouvelle promotion
                        ";
        }
        // line 82
        yield "                    </h5>
                </div>
                <div class=\"card-body\">
                    <!-- Informations de base -->
                    <div class=\"row g-3\">
                        <div class=\"col-md-12\">
                            <div class=\"form-floating\">
                                ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "name", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 93
        yield "
                                <label for=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "name", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-tag me-1\"></i> Nom de la promotion *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "name", [], "any", false, false, false, 98), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-3 mt-3\">
                        <div class=\"col-md-12\">
                            <div class=\"form-floating\">
                                ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "description", [], "any", false, false, false, 107), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "style" => "height: 120px"]]);
        // line 111
        yield "
                                <label for=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "description", [], "any", false, false, false, 112), "vars", [], "any", false, false, false, 112), "id", [], "any", false, false, false, 112), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-align-left me-1\"></i> Description
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "description", [], "any", false, false, false, 116), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-3 mt-3\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "typePromotion", [], "any", false, false, false, 125), 'widget', ["attr" => ["class" => "form-select", "placeholder" => " "]]);
        // line 128
        yield "
                                <label for=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "typePromotion", [], "any", false, false, false, 129), "vars", [], "any", false, false, false, 129), "id", [], "any", false, false, false, 129), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-layer-group me-1\"></i> Type de promotion *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "typePromotion", [], "any", false, false, false, 133), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "value", [], "any", false, false, false, 139), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 143
        yield "
                                <label for=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "value", [], "any", false, false, false, 144), "vars", [], "any", false, false, false, 144), "id", [], "any", false, false, false, 144), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-calculator me-1\"></i> Valeur de réduction *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "value", [], "any", false, false, false, 148), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-3 mt-3\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 157
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "startDate", [], "any", false, false, false, 157), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " "]]);
        // line 160
        yield "
                                <label for=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "startDate", [], "any", false, false, false, 161), "vars", [], "any", false, false, false, 161), "id", [], "any", false, false, false, 161), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-calendar-alt me-1\"></i> Date de début *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 165
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "startDate", [], "any", false, false, false, 165), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 171
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "endDate", [], "any", false, false, false, 171), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " "]]);
        // line 174
        yield "
                                <label for=\"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "endDate", [], "any", false, false, false, 175), "vars", [], "any", false, false, false, 175), "id", [], "any", false, false, false, 175), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-calendar-check me-1\"></i> Date de fin
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 179
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "endDate", [], "any", false, false, false, 179), 'errors');
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
                                    <span class=\"fw-bold\">Statut de la promotion</span>
                                </div>
                                <span class=\"badge ";
        // line 195
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "is_active", [], "any", false, false, false, 195), "vars", [], "any", false, false, false, 195), "data", [], "any", false, false, false, 195)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\" id=\"status-badge\">
                                    ";
        // line 196
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "is_active", [], "any", false, false, false, 196), "vars", [], "any", false, false, false, 196), "data", [], "any", false, false, false, 196)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIVE") : ("INACTIVE"));
        yield "
                                </span>
                            </div>
                            <div class=\"form-check form-switch\">
                                ";
        // line 200
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "is_active", [], "any", false, false, false, 200), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 203
        yield "
                                <label class=\"form-check-label\" for=\"";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), "is_active", [], "any", false, false, false, 204), "vars", [], "any", false, false, false, 204), "id", [], "any", false, false, false, 204), "html", null, true);
        yield "\" id=\"status-label\">
                                    ";
        // line 205
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "is_active", [], "any", false, false, false, 205), "vars", [], "any", false, false, false, 205), "data", [], "any", false, false, false, 205)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Promotion active") : ("Promotion inactive"));
        yield "
                                </label>
                            </div>
                            <small class=\"text-muted mt-1 d-block\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Les promotions inactives ne seront pas appliquées
                            </small>
                        </div>
                    </div>

                    <!-- ========================================== -->
                    <!-- SECTION EXPLICATION PERMANENTE -->
                    <!-- ========================================== -->
                    <div class=\"card border-0 bg-info bg-opacity-10 mt-4\">
                        <div class=\"card-body p-4\">
                            <div class=\"d-flex\">
                                <div class=\"flex-shrink-0\">
                                    <div class=\"rounded-circle bg-white bg-opacity-25 p-3 d-flex align-items-center justify-content-center\" style=\"width: 50px; height: 50px;\">
                                        <i class=\"fas fa-info-circle fa-xl text-white\"></i>
                                    </div>
                                </div>
                                <div class=\"flex-grow-1 ms-3\">
                                    <h6 class=\"fw-bold mb-3 text-white\">
                                        <i class=\"fas fa-question-circle text-white me-2\"></i>Comment s'applique cette promotion ?
                                    </h6>
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <ul class=\"mb-0 small\" style=\"list-style: none; padding-left: 0;\">
                                                <li class=\"mb-2\">
                                                    <span class=\"badge bg-secondary me-2 px-2 py-1\">Cas 1</span>
                                                    <span class=\"text-white\">Aucune sélection → <strong class=\"text-white fw-bold\">TOUS les ";
        // line 235
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 235, $this->source); })()) == "restaurant")) {
            yield "plats";
        } else {
            yield "produits";
        }
        yield "</strong></span>
                                                </li>
                                                <li class=\"mb-2\">
                                                    <span class=\"badge bg-success me-2 px-2 py-1\">Cas 2</span>
                                                    <span class=\"text-white\">Catégories uniquement → <strong class=\"text-white fw-bold\">tous les ";
        // line 239
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 239, $this->source); })()) == "restaurant")) {
            yield "plats";
        } else {
            yield "produits";
        }
        yield "</strong> des catégories sélectionnées</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <ul class=\"mb-0 small\" style=\"list-style: none; padding-left: 0;\">
                                                <li class=\"mb-2\">
                                                    <span class=\"badge bg-primary me-2 px-2 py-1\">Cas 3</span>
                                                    <span class=\"text-white\">";
        // line 247
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 247, $this->source); })()) == "restaurant")) {
            yield "Plats";
        } else {
            yield "Produits";
        }
        yield " uniquement → <strong class=\"text-white fw-bold\">ces ";
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 247, $this->source); })()) == "restaurant")) {
            yield "plats";
        } else {
            yield "produits";
        }
        yield " uniquement</strong></span>
                                                </li>
                                                <li class=\"mb-2\">
                                                    <span class=\"badge bg-warning text-dark me-2 px-2 py-1\">Cas 4</span>
                                                    <span class=\"text-white\">Catégories + ";
        // line 251
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 251, $this->source); })()) == "restaurant")) {
            yield "Plats";
        } else {
            yield "Produits";
        }
        yield " → <strong class=\"text-white fw-bold\">l'ensemble</strong> (union des deux)</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"mt-3 pt-2 border-top border-white border-opacity-25\">
                                        <div class=\"d-flex align-items-start\">
                                            <i class=\"fas fa-lightbulb text-warning me-2 mt-1\"></i>
                                            <span class=\"small text-white\">
                                                <strong class=\"text-warning\">Astuce :</strong> 
                                                Si un ";
        // line 261
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 261, $this->source); })()) == "restaurant")) {
            yield "plat";
        } else {
            yield "produit";
        }
        yield " est déjà inclus via une catégorie, 
                                                <strong class=\"text-white fw-bold\">il n'est pas dupliqué</strong>. La promotion s'applique une seule fois.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ========================================== -->
                    <!-- SECTIONS DES ASSOCIATIONS AVEC COLLECTIONTYPE -->
                    <!-- ========================================== -->
                    ";
        // line 274
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 274, $this->source); })()) == "restaurant")) {
            // line 275
            yield "                        <!-- SECTION CATÉGORIES DE PLATS -->
                        <div class=\"card border-0 bg-light mt-4\">
                            <div class=\"card-header bg-white border-0\">
                                <h5 class=\"mb-0\">
                                    <i class=\"fas fa-utensils me-2 text-primary\"></i>Catégories de plats concernées
                                </h5>
                                <p class=\"text-muted small mb-0\">Sélectionnez les catégories de plats concernées par cette promotion (optionnel)</p>
                            </div>
                            <div class=\"card-body\">
                                <div id=\"promotion-category-recipes-collection\" 
                                     class=\"collection-wrapper\"
                                     data-prototype=\"";
            // line 286
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 286, $this->source); })()), "promotionCategoryRecipes", [], "any", false, false, false, 286), "vars", [], "any", false, false, false, 286), "prototype", [], "any", false, false, false, 286), 'widget'), "html_attr");
            yield "\"
                                     data-index=\"";
            // line 287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 287, $this->source); })()), "promotionCategoryRecipes", [], "any", false, false, false, 287)), "html", null, true);
            yield "\">
                                    ";
            // line 288
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 288, $this->source); })()), "promotionCategoryRecipes", [], "any", false, false, false, 288));
            foreach ($context['_seq'] as $context["_key"] => $context["promoCategoryRecipe"]) {
                // line 289
                yield "                                        <div class=\"collection-item row g-2 mb-2\">
                                            <div class=\"col-md-10\">
                                                ";
                // line 291
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["promoCategoryRecipe"], "categoryRecipe", [], "any", false, false, false, 291), 'widget', ["attr" => ["class" => "form-select select2-category-recipe"]]);
                yield "
                                            </div>
                                            <div class=\"col-md-2\">
                                                <button type=\"button\" class=\"btn btn-danger remove-collection-item w-100\">
                                                    <i class=\"fas fa-trash\"></i>
                                                </button>
                                            </div>
                                            ";
                // line 298
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["promoCategoryRecipe"], 'rest');
                yield "
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promoCategoryRecipe'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 301
            yield "                                </div>
                                <button type=\"button\" class=\"btn btn-primary mt-2 add-collection-item\" data-collection=\"promotion-category-recipes-collection\">
                                    <i class=\"fas fa-plus-circle me-2\"></i>Ajouter une catégorie
                                </button>
                            </div>
                        </div>

                        <!-- SECTION PLATS -->
                        <div class=\"card border-0 bg-light mt-4\">
                            <div class=\"card-header bg-white border-0\">
                                <h5 class=\"mb-0\">
                                    <i class=\"fas fa-hamburger me-2 text-primary\"></i>Plats concernés
                                </h5>
                                <p class=\"text-muted small mb-0\">Sélectionnez les plats spécifiques concernés par cette promotion (optionnel)</p>
                            </div>
                            <div class=\"card-body\">
                                <div id=\"promotion-recipes-collection\" 
                                     class=\"collection-wrapper\"
                                     data-prototype=\"";
            // line 319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 319, $this->source); })()), "promotionRecipes", [], "any", false, false, false, 319), "vars", [], "any", false, false, false, 319), "prototype", [], "any", false, false, false, 319), 'widget'), "html_attr");
            yield "\"
                                     data-index=\"";
            // line 320
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 320, $this->source); })()), "promotionRecipes", [], "any", false, false, false, 320)), "html", null, true);
            yield "\">
                                    ";
            // line 321
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 321, $this->source); })()), "promotionRecipes", [], "any", false, false, false, 321));
            foreach ($context['_seq'] as $context["_key"] => $context["promoRecipe"]) {
                // line 322
                yield "                                        <div class=\"collection-item row g-2 mb-2\">
                                            <div class=\"col-md-10\">
                                                ";
                // line 324
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["promoRecipe"], "recipe", [], "any", false, false, false, 324), 'widget', ["attr" => ["class" => "form-select select2-recipe"]]);
                yield "
                                            </div>
                                            <div class=\"col-md-2\">
                                                <button type=\"button\" class=\"btn btn-danger remove-collection-item w-100\">
                                                    <i class=\"fas fa-trash\"></i>
                                                </button>
                                            </div>
                                            ";
                // line 331
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["promoRecipe"], 'rest');
                yield "
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promoRecipe'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 334
            yield "                                </div>
                                <button type=\"button\" class=\"btn btn-primary mt-2 add-collection-item\" data-collection=\"promotion-recipes-collection\">
                                    <i class=\"fas fa-plus-circle me-2\"></i>Ajouter un plat
                                </button>
                            </div>
                        </div>
                    ";
        } else {
            // line 341
            yield "                        <!-- SECTION CATÉGORIES (MARKET/PHARMACY) -->
                        <div class=\"card border-0 bg-light mt-4\">
                            <div class=\"card-header bg-white border-0\">
                                <h5 class=\"mb-0\">
                                    <i class=\"fas fa-folder-tree me-2 text-primary\"></i>Catégories concernées
                                </h5>
                                <p class=\"text-muted small mb-0\">Sélectionnez les catégories de produits concernées par cette promotion (optionnel)</p>
                            </div>
                            <div class=\"card-body\">
                                <div id=\"promotion-categories-collection\" 
                                     class=\"collection-wrapper\"
                                     data-prototype=\"";
            // line 352
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 352, $this->source); })()), "promotionCategories", [], "any", false, false, false, 352), "vars", [], "any", false, false, false, 352), "prototype", [], "any", false, false, false, 352), 'widget'), "html_attr");
            yield "\"
                                     data-index=\"";
            // line 353
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 353, $this->source); })()), "promotionCategories", [], "any", false, false, false, 353)), "html", null, true);
            yield "\">
                                    ";
            // line 354
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 354, $this->source); })()), "promotionCategories", [], "any", false, false, false, 354));
            foreach ($context['_seq'] as $context["_key"] => $context["promoCategory"]) {
                // line 355
                yield "                                        <div class=\"collection-item row g-2 mb-2\">
                                            <div class=\"col-md-10\">
                                                ";
                // line 357
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["promoCategory"], "category", [], "any", false, false, false, 357), 'widget', ["attr" => ["class" => "form-select select2-category"]]);
                yield "
                                            </div>
                                            <div class=\"col-md-2\">
                                                <button type=\"button\" class=\"btn btn-danger remove-collection-item w-100\">
                                                    <i class=\"fas fa-trash\"></i>
                                                </button>
                                            </div>
                                            ";
                // line 364
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["promoCategory"], 'rest');
                yield "
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promoCategory'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 367
            yield "                                </div>
                                <button type=\"button\" class=\"btn btn-primary mt-2 add-collection-item\" data-collection=\"promotion-categories-collection\">
                                    <i class=\"fas fa-plus-circle me-2\"></i>Ajouter une catégorie
                                </button>
                            </div>
                        </div>

                        <!-- SECTION PRODUITS (MARKET/PHARMACY) -->
                        <div class=\"card border-0 bg-light mt-4\">
                            <div class=\"card-header bg-white border-0\">
                                <h5 class=\"mb-0\">
                                    <i class=\"fas fa-boxes me-2 text-primary\"></i>Produits concernés
                                </h5>
                                <p class=\"text-muted small mb-0\">Sélectionnez les produits spécifiques concernés par cette promotion (optionnel)</p>
                            </div>
                            <div class=\"card-body\">
                                <div id=\"promotion-products-collection\" 
                                     class=\"collection-wrapper\"
                                     data-prototype=\"";
            // line 385
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 385, $this->source); })()), "promotionProducts", [], "any", false, false, false, 385), "vars", [], "any", false, false, false, 385), "prototype", [], "any", false, false, false, 385), 'widget'), "html_attr");
            yield "\"
                                     data-index=\"";
            // line 386
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 386, $this->source); })()), "promotionProducts", [], "any", false, false, false, 386)), "html", null, true);
            yield "\">
                                    ";
            // line 387
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 387, $this->source); })()), "promotionProducts", [], "any", false, false, false, 387));
            foreach ($context['_seq'] as $context["_key"] => $context["promoProduct"]) {
                // line 388
                yield "                                        <div class=\"collection-item row g-2 mb-2\">
                                            <div class=\"col-md-10\">
                                                ";
                // line 390
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["promoProduct"], "product", [], "any", false, false, false, 390), 'widget', ["attr" => ["class" => "form-select select2-product"]]);
                yield "
                                            </div>
                                            <div class=\"col-md-2\">
                                                <button type=\"button\" class=\"btn btn-danger remove-collection-item w-100\">
                                                    <i class=\"fas fa-trash\"></i>
                                                </button>
                                            </div>
                                            ";
                // line 397
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["promoProduct"], 'rest');
                yield "
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promoProduct'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 400
            yield "                                </div>
                                <button type=\"button\" class=\"btn btn-primary mt-2 add-collection-item\" data-collection=\"promotion-products-collection\">
                                    <i class=\"fas fa-plus-circle me-2\"></i>Ajouter un produit
                                </button>
                            </div>
                        </div>
                    ";
        }
        // line 407
        yield "                </div>

                <!-- Footer avec boutons d'action -->
                <div class=\"card-footer bg-light py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a href=\"";
        // line 412
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_index");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-times me-2\"></i> Annuler
                        </a>
                        <div class=\"btn-group\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                                <i class=\"fas fa-save me-2\"></i>
                                ";
        // line 418
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 418, $this->source); })()), "Enregistrer la promotion")) : ("Enregistrer la promotion")), "html", null, true);
        yield "
                            </button>
                            ";
        // line 420
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", true, true, false, 420) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 420, $this->source); })()), "id", [], "any", false, false, false, 420)))) {
            // line 421
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 421, $this->source); })()), "id", [], "any", false, false, false, 421)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-lg\">
                                    <i class=\"fas fa-eye me-2\"></i> Voir
                                </a>
                            ";
        }
        // line 425
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 432
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 432, $this->source); })()), 'form_end');
        yield "
</div>

<!-- Modal de confirmation pour suppression d'élément de collection -->
<div class=\"modal fade\" id=\"confirmRemoveModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0\">
                <h5 class=\"modal-title text-danger\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmer la suppression
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                <h5>Êtes-vous sûr de vouloir supprimer cet élément ?</h5>
                <p class=\"text-muted\">Cette action est irréversible.</p>
                <div class=\"alert alert-warning mt-2\" id=\"itemToRemoveInfo\">
                    <span id=\"itemToRemoveName\"></span>
                </div>
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"confirmRemoveItemBtn\">Supprimer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour supprimer l'image -->
";
        // line 462
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", true, true, false, 462) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 462, $this->source); })()), "id", [], "any", false, false, false, 462))) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 462, $this->source); })()), "image", [], "any", false, false, false, 462))) {
            // line 463
            yield "<div class=\"modal fade\" id=\"deleteImageModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0\">
                <h5 class=\"modal-title text-danger\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer l'image
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                    <h5>Êtes-vous sûr de vouloir supprimer cette image ?</h5>
                    <p class=\"text-muted\">Cette action ne peut pas être annulée.</p>
                </div>
                <div class=\"mb-3\">
                    <img src=\"";
            // line 479
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/promotions/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 479, $this->source); })()), "image", [], "any", false, false, false, 479))), "html", null, true);
            yield "\"
                         alt=\"";
            // line 480
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 480, $this->source); })()), "name", [], "any", false, false, false, 480), "html", null, true);
            yield "\"
                         class=\"rounded shadow-lg\"
                         style=\"width: 150px; height: 150px; object-fit: cover;\">
                </div>
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <form action=\"";
            // line 489
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_delete_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 489, $this->source); })()), "id", [], "any", false, false, false, 489)]), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 490
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-image" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 490, $this->source); })()), "id", [], "any", false, false, false, 490))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fas fa-trash me-2\"></i> Supprimer l'image
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        }
        // line 500
        yield "
";
        // line 501
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 742
        yield "
";
        // line 743
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 501
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

        // line 502
        yield "<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script>
function previewPromoImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        const preview = document.querySelector('.promo-preview') || 
                       document.querySelector('.promo-placeholder');
        
        reader.onload = function(e) {
            if (preview && preview.classList.contains('promo-placeholder')) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-fluid rounded shadow-lg promo-preview';
                img.style = 'width: 200px; height: 200px; object-fit: cover; border: 5px solid #f8f9fa;';
                preview.parentNode.replaceChild(img, preview);
            } else if (preview) {
                preview.src = e.target.result;
            }
        };
        reader.readAsDataURL(input.files[0]);
    }
}

// Variable globale pour stocker l'élément à supprimer
let pendingRemoveItem = null;

document.addEventListener('DOMContentLoaded', function() {
    // ========== INITIALISATION SELECT2 ==========
    if (typeof \$ !== 'undefined') {
        \$('.select2-category, .select2-product, .select2-category-recipe, .select2-recipe').each(function() {
            \$(this).select2({
                theme: 'bootstrap-5',
                placeholder: 'Rechercher...',
                allowClear: true,
                width: '100%',
                language: {
                    noResults: function() { return 'Aucun résultat trouvé'; }
                }
            });
        });
    }

    // ========== GESTION DU SWITCH DE STATUT ==========
    const activeSwitch = document.getElementById('";
        // line 546
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 546, $this->source); })()), "is_active", [], "any", false, false, false, 546), "vars", [], "any", false, false, false, 546), "id", [], "any", false, false, false, 546), "html", null, true);
        yield "');
    const statusBadge = document.getElementById('status-badge');
    const statusLabel = document.getElementById('status-label');
    
    if (activeSwitch && statusBadge && statusLabel) {
        activeSwitch.addEventListener('change', function() {
            const isActive = this.checked;
            statusBadge.textContent = isActive ? 'ACTIVE' : 'INACTIVE';
            statusBadge.className = isActive ? 'badge bg-success' : 'badge bg-danger';
            statusLabel.textContent = isActive ? 'Promotion active' : 'Promotion inactive';
        });
    }

    // ========== GESTION DYNAMIQUE DU CHAMP VALEUR ==========
    const typeSelect = document.getElementById('";
        // line 560
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 560, $this->source); })()), "typePromotion", [], "any", false, false, false, 560), "vars", [], "any", false, false, false, 560), "id", [], "any", false, false, false, 560), "html", null, true);
        yield "');
    const valueInput = document.getElementById('";
        // line 561
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 561, $this->source); })()), "value", [], "any", false, false, false, 561), "vars", [], "any", false, false, false, 561), "id", [], "any", false, false, false, 561), "html", null, true);
        yield "');
    const valueLabel = document.querySelector('label[for=\"";
        // line 562
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 562, $this->source); })()), "value", [], "any", false, false, false, 562), "vars", [], "any", false, false, false, 562), "id", [], "any", false, false, false, 562), "html", null, true);
        yield "\"]');

    if (typeSelect && valueInput && valueLabel) {
        function updateValuePlaceholder() {
            const selectedText = typeSelect.options[typeSelect.selectedIndex]?.text;
            const isPercentage = selectedText === 'Pourcentage';
            valueInput.placeholder = isPercentage ? 'Ex: 20' : 'Ex: 5000';
            const suffix = isPercentage ? '%' : ' (FCFA)';
            valueLabel.innerHTML = `<i class=\"fas fa-calculator me-1\"></i> Valeur de réduction * \${suffix}`;
        }
        typeSelect.addEventListener('change', updateValuePlaceholder);
        updateValuePlaceholder();
    }

    // ========== GESTION DES COLLECTIONS ==========
    
    // Fonction pour initialiser Select2 sur un élément
    function initSelect2OnElement(element) {
        if (typeof \$ !== 'undefined') {
            const select = element.querySelector('select');
            if (select && !\$(select).data('select2')) {
                \$(select).select2({
                    theme: 'bootstrap-5',
                    placeholder: 'Rechercher...',
                    allowClear: true,
                    width: '100%'
                });
            }
        }
    }
    
    // Fonction pour attacher l'événement de suppression à un bouton
    function attachRemoveEvent(button) {
        // Supprimer l'ancien événement pour éviter les doublons
        button.removeEventListener('click', handleRemoveClick);
        button.addEventListener('click', handleRemoveClick);
    }
    
    // Gestionnaire de clic pour suppression avec modal
    function handleRemoveClick(e) {
        e.preventDefault();
        e.stopPropagation();
        const button = e.currentTarget;
        const item = button.closest('.collection-item');
        
        if (item) {
            // Récupérer le nom de l'élément à supprimer (peut être vide)
            const select = item.querySelector('select');
            let itemName = '';
            if (select && select.options && select.options[select.selectedIndex]) {
                const selectedOption = select.options[select.selectedIndex];
                if (selectedOption.value && selectedOption.text) {
                    itemName = selectedOption.text;
                }
            }
            
            // Si aucun élément sélectionné, afficher un message générique
            if (!itemName) {
                itemName = 'ce bloc vide';
            }
            
            const itemToRemoveNameSpan = document.getElementById('itemToRemoveName');
            if (itemToRemoveNameSpan) {
                itemToRemoveNameSpan.innerHTML = `<strong>\${escapeHtml(itemName)}</strong> sera supprimé(e) de la liste.`;
            }
            
            pendingRemoveItem = item;
            const modal = new bootstrap.Modal(document.getElementById('confirmRemoveModal'));
            modal.show();
        }
    }
    
    // Fonction pour créer un nouvel élément de collection
    function createCollectionItem(prototype, index) {
        const div = document.createElement('div');
        div.className = 'collection-item row g-2 mb-2';
        let html = prototype.replace(/__name__/g, index);
        
        // Ajouter la structure HTML correcte
        // Chercher où placer le bouton supprimer
        if (html.includes('select')) {
            // Remplacer la structure existante
            html = html.replace(/<div class=\"col-md-10\">/, '<div class=\"col-md-10\">');
            html = html.replace(/<\\/div>\\s*\$/, '');
            html += '</div><div class=\"col-md-2\"><button type=\"button\" class=\"btn btn-danger remove-collection-item w-100\"><i class=\"fas fa-trash\"></i></button></div>';
        }
        
        div.innerHTML = html;
        return div;
    }
    
    // Fonction pour ajouter un élément à une collection
    function addCollectionItem(collectionId) {
        const collection = document.getElementById(collectionId);
        if (!collection) return;
        
        const prototype = collection.dataset.prototype;
        let index = parseInt(collection.dataset.index);
        
        // Créer le nouvel élément
        const newItem = createCollectionItem(prototype, index);
        
        // Ajouter à la collection
        collection.appendChild(newItem);
        collection.dataset.index = index + 1;
        
        // Initialiser Select2 sur le nouveau select
        initSelect2OnElement(newItem);
        
        // Attacher l'événement de suppression sur le nouveau bouton
        const removeBtn = newItem.querySelector('.remove-collection-item');
        if (removeBtn) {
            attachRemoveEvent(removeBtn);
        }
    }
    
    // Gestionnaire de clic pour ajout
    function handleAddCollection(e) {
        const button = e.currentTarget;
        const collectionId = button.dataset.collection;
        if (collectionId) {
            addCollectionItem(collectionId);
        }
    }
    
    // Attacher les événements d'ajout
    document.querySelectorAll('.add-collection-item').forEach(button => {
        button.removeEventListener('click', handleAddCollection);
        button.addEventListener('click', handleAddCollection);
    });
    
    // Attacher les événements de suppression sur les éléments existants (pour l'édition)
    document.querySelectorAll('.remove-collection-item').forEach(button => {
        attachRemoveEvent(button);
    });
    
    // Confirmation de suppression
    const confirmRemoveBtn = document.getElementById('confirmRemoveItemBtn');
    if (confirmRemoveBtn) {
        confirmRemoveBtn.removeEventListener('click', handleConfirmRemove);
        confirmRemoveBtn.addEventListener('click', handleConfirmRemove);
    }
    
    function handleConfirmRemove() {
        if (pendingRemoveItem) {
            pendingRemoveItem.remove();
            pendingRemoveItem = null;
            const modal = bootstrap.Modal.getInstance(document.getElementById('confirmRemoveModal'));
            if (modal) modal.hide();
        }
    }
    
    // Nettoyer pendingRemoveItem quand le modal est fermé
    const confirmModal = document.getElementById('confirmRemoveModal');
    if (confirmModal) {
        confirmModal.addEventListener('hidden.bs.modal', function() {
            pendingRemoveItem = null;
        });
    }

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
});

function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 743
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

        // line 744
        yield "<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
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
.select2-container--bootstrap-5 .select2-selection {
    border: 2px solid #e0e0e0;
    border-radius: 10px !important;
    min-height: calc(3.5rem + 2px);
    padding: 1rem 0.75rem 0.5rem 2.5rem;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
    line-height: 1.5;
    padding-left: 0;
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
.promo-preview {
    transition: all 0.3s ease;
}
.promo-preview:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}
.collection-item {
    background: #f8f9fa;
    padding: 10px;
    border-radius: 8px;
    margin-bottom: 10px;
}
.bg-light {
    background-color: #f8f9fa !important;
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
        return "admin/restaurant/promotion/_form.html.twig";
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
        return array (  1116 => 744,  1103 => 743,  912 => 562,  908 => 561,  904 => 560,  887 => 546,  841 => 502,  828 => 501,  817 => 743,  814 => 742,  812 => 501,  809 => 500,  796 => 490,  792 => 489,  780 => 480,  776 => 479,  758 => 463,  756 => 462,  723 => 432,  714 => 425,  706 => 421,  704 => 420,  699 => 418,  690 => 412,  683 => 407,  674 => 400,  665 => 397,  655 => 390,  651 => 388,  647 => 387,  643 => 386,  639 => 385,  619 => 367,  610 => 364,  600 => 357,  596 => 355,  592 => 354,  588 => 353,  584 => 352,  571 => 341,  562 => 334,  553 => 331,  543 => 324,  539 => 322,  535 => 321,  531 => 320,  527 => 319,  507 => 301,  498 => 298,  488 => 291,  484 => 289,  480 => 288,  476 => 287,  472 => 286,  459 => 275,  457 => 274,  437 => 261,  420 => 251,  403 => 247,  388 => 239,  377 => 235,  344 => 205,  340 => 204,  337 => 203,  335 => 200,  328 => 196,  324 => 195,  305 => 179,  298 => 175,  295 => 174,  293 => 171,  284 => 165,  277 => 161,  274 => 160,  272 => 157,  260 => 148,  253 => 144,  250 => 143,  248 => 139,  239 => 133,  232 => 129,  229 => 128,  227 => 125,  215 => 116,  208 => 112,  205 => 111,  203 => 107,  191 => 98,  184 => 94,  181 => 93,  179 => 89,  170 => 82,  166 => 80,  162 => 78,  160 => 77,  143 => 63,  138 => 61,  130 => 56,  122 => 50,  120 => 46,  114 => 42,  107 => 37,  103 => 35,  92 => 26,  90 => 25,  84 => 22,  80 => 21,  77 => 20,  75 => 19,  59 => 6,  55 => 4,  53 => 3,  50 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/promotion/_form.html.twig #}

{% form_theme form 'bootstrap_5_layout.html.twig' %}

<div class=\"container-fluid px-4\">
    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': true}}) }}

    <div class=\"row g-4\">
        <!-- Carte Image -->
        <div class=\"col-lg-4\">
            <div class=\"card shadow-lg border-0 h-100 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-image me-2\"></i>Image de la promotion
                    </h5>
                </div>
                <div class=\"card-body text-center d-flex flex-column\">
                    <div class=\"promo-image-preview mb-4 flex-grow-1 d-flex flex-column justify-content-center\">
                        {% if promotion.image %}
                            <div class=\"position-relative mx-auto\" style=\"width: 200px; height: 200px;\">
                                <img src=\"{{ asset('uploads/promotions/' ~ promotion.image) }}\"
                                     alt=\"{{ promotion.name }}\"
                                     class=\"img-fluid rounded shadow-lg promo-preview\"
                                     style=\"width: 100%; height: 100%; object-fit: cover; border: 5px solid #f8f9fa;\">
                                {% if promotion.id is defined and promotion.id is not null %}
                                    <button type=\"button\"
                                            class=\"btn btn-danger btn-sm position-absolute rounded-circle shadow\"
                                            style=\"bottom: 10px; right: 10px; width: 36px; height: 36px;\"
                                            data-bs-toggle=\"modal\"
                                            data-bs-target=\"#deleteImageModal\"
                                            title=\"Supprimer l'image\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                {% endif %}
                            </div>
                        {% else %}
                            <div class=\"promo-placeholder rounded d-flex align-items-center justify-content-center mx-auto bg-gradient-primary text-white shadow-lg\"
                                 style=\"width: 200px; height: 200px; border: 5px solid #f8f9fa;\">
                                <i class=\"fas fa-tag fa-5x\"></i>
                            </div>
                        {% endif %}
                    </div>

                    <div class=\"mt-auto\">
                        <div class=\"file-upload-wrapper\">
                            {{ form_widget(form.image, {'attr': {
                                'class': 'form-control',
                                'onchange': 'previewPromoImage(this)',
                                'accept': 'image/*'
                            }}) }}
                            <div class=\"form-text mt-2\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Formats acceptés : JPG, PNG, GIF, WebP. Taille max : 5M
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.image) }}
                            </div>
                        </div>

                        <div class=\"mt-3\">
                            <label for=\"{{ form.image.vars.id }}\" class=\"btn btn-outline-primary w-100\">
                                <i class=\"fas fa-cloud-upload-alt me-2\"></i>
                                {{ promotion.image ? 'Changer l\\'image' : 'Choisir une image' }}
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carte Informations de la promotion -->
        <div class=\"col-lg-8\">
            <div class=\"card shadow-lg border-0 h-100 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-percent me-2\"></i>
                        {% if promotion.id is defined and promotion.id is not null %}
                            Modifier la promotion
                        {% else %}
                            Nouvelle promotion
                        {% endif %}
                    </h5>
                </div>
                <div class=\"card-body\">
                    <!-- Informations de base -->
                    <div class=\"row g-3\">
                        <div class=\"col-md-12\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.name, {'attr': {
                                    'class': 'form-control',
                                    'placeholder': ' ',
                                    'autocomplete': 'off'
                                }}) }}
                                <label for=\"{{ form.name.vars.id }}\">
                                    <i class=\"fas fa-tag me-1\"></i> Nom de la promotion *
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
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.description) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-3 mt-3\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.typePromotion, {'attr': {
                                    'class': 'form-select',
                                    'placeholder': ' '
                                }}) }}
                                <label for=\"{{ form.typePromotion.vars.id }}\">
                                    <i class=\"fas fa-layer-group me-1\"></i> Type de promotion *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.typePromotion) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.value, {'attr': {
                                    'class': 'form-control',
                                    'placeholder': ' ',
                                    'autocomplete': 'off'
                                }}) }}
                                <label for=\"{{ form.value.vars.id }}\">
                                    <i class=\"fas fa-calculator me-1\"></i> Valeur de réduction *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.value) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-3 mt-3\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.startDate, {'attr': {
                                    'class': 'form-control',
                                    'placeholder': ' '
                                }}) }}
                                <label for=\"{{ form.startDate.vars.id }}\">
                                    <i class=\"fas fa-calendar-alt me-1\"></i> Date de début *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.startDate) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.endDate, {'attr': {
                                    'class': 'form-control',
                                    'placeholder': ' '
                                }}) }}
                                <label for=\"{{ form.endDate.vars.id }}\">
                                    <i class=\"fas fa-calendar-check me-1\"></i> Date de fin
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.endDate) }}
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
                                    <span class=\"fw-bold\">Statut de la promotion</span>
                                </div>
                                <span class=\"badge {{ form.is_active.vars.data ? 'bg-success' : 'bg-danger' }}\" id=\"status-badge\">
                                    {{ form.is_active.vars.data ? 'ACTIVE' : 'INACTIVE' }}
                                </span>
                            </div>
                            <div class=\"form-check form-switch\">
                                {{ form_widget(form.is_active, {'attr': {
                                    'class': 'form-check-input',
                                    'role': 'switch'
                                }}) }}
                                <label class=\"form-check-label\" for=\"{{ form.is_active.vars.id }}\" id=\"status-label\">
                                    {{ form.is_active.vars.data ? 'Promotion active' : 'Promotion inactive' }}
                                </label>
                            </div>
                            <small class=\"text-muted mt-1 d-block\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Les promotions inactives ne seront pas appliquées
                            </small>
                        </div>
                    </div>

                    <!-- ========================================== -->
                    <!-- SECTION EXPLICATION PERMANENTE -->
                    <!-- ========================================== -->
                    <div class=\"card border-0 bg-info bg-opacity-10 mt-4\">
                        <div class=\"card-body p-4\">
                            <div class=\"d-flex\">
                                <div class=\"flex-shrink-0\">
                                    <div class=\"rounded-circle bg-white bg-opacity-25 p-3 d-flex align-items-center justify-content-center\" style=\"width: 50px; height: 50px;\">
                                        <i class=\"fas fa-info-circle fa-xl text-white\"></i>
                                    </div>
                                </div>
                                <div class=\"flex-grow-1 ms-3\">
                                    <h6 class=\"fw-bold mb-3 text-white\">
                                        <i class=\"fas fa-question-circle text-white me-2\"></i>Comment s'applique cette promotion ?
                                    </h6>
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <ul class=\"mb-0 small\" style=\"list-style: none; padding-left: 0;\">
                                                <li class=\"mb-2\">
                                                    <span class=\"badge bg-secondary me-2 px-2 py-1\">Cas 1</span>
                                                    <span class=\"text-white\">Aucune sélection → <strong class=\"text-white fw-bold\">TOUS les {% if companyType == 'restaurant' %}plats{% else %}produits{% endif %}</strong></span>
                                                </li>
                                                <li class=\"mb-2\">
                                                    <span class=\"badge bg-success me-2 px-2 py-1\">Cas 2</span>
                                                    <span class=\"text-white\">Catégories uniquement → <strong class=\"text-white fw-bold\">tous les {% if companyType == 'restaurant' %}plats{% else %}produits{% endif %}</strong> des catégories sélectionnées</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <ul class=\"mb-0 small\" style=\"list-style: none; padding-left: 0;\">
                                                <li class=\"mb-2\">
                                                    <span class=\"badge bg-primary me-2 px-2 py-1\">Cas 3</span>
                                                    <span class=\"text-white\">{% if companyType == 'restaurant' %}Plats{% else %}Produits{% endif %} uniquement → <strong class=\"text-white fw-bold\">ces {% if companyType == 'restaurant' %}plats{% else %}produits{% endif %} uniquement</strong></span>
                                                </li>
                                                <li class=\"mb-2\">
                                                    <span class=\"badge bg-warning text-dark me-2 px-2 py-1\">Cas 4</span>
                                                    <span class=\"text-white\">Catégories + {% if companyType == 'restaurant' %}Plats{% else %}Produits{% endif %} → <strong class=\"text-white fw-bold\">l'ensemble</strong> (union des deux)</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"mt-3 pt-2 border-top border-white border-opacity-25\">
                                        <div class=\"d-flex align-items-start\">
                                            <i class=\"fas fa-lightbulb text-warning me-2 mt-1\"></i>
                                            <span class=\"small text-white\">
                                                <strong class=\"text-warning\">Astuce :</strong> 
                                                Si un {% if companyType == 'restaurant' %}plat{% else %}produit{% endif %} est déjà inclus via une catégorie, 
                                                <strong class=\"text-white fw-bold\">il n'est pas dupliqué</strong>. La promotion s'applique une seule fois.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ========================================== -->
                    <!-- SECTIONS DES ASSOCIATIONS AVEC COLLECTIONTYPE -->
                    <!-- ========================================== -->
                    {% if companyType == 'restaurant' %}
                        <!-- SECTION CATÉGORIES DE PLATS -->
                        <div class=\"card border-0 bg-light mt-4\">
                            <div class=\"card-header bg-white border-0\">
                                <h5 class=\"mb-0\">
                                    <i class=\"fas fa-utensils me-2 text-primary\"></i>Catégories de plats concernées
                                </h5>
                                <p class=\"text-muted small mb-0\">Sélectionnez les catégories de plats concernées par cette promotion (optionnel)</p>
                            </div>
                            <div class=\"card-body\">
                                <div id=\"promotion-category-recipes-collection\" 
                                     class=\"collection-wrapper\"
                                     data-prototype=\"{{ form_widget(form.promotionCategoryRecipes.vars.prototype)|e('html_attr') }}\"
                                     data-index=\"{{ form.promotionCategoryRecipes|length }}\">
                                    {% for promoCategoryRecipe in form.promotionCategoryRecipes %}
                                        <div class=\"collection-item row g-2 mb-2\">
                                            <div class=\"col-md-10\">
                                                {{ form_widget(promoCategoryRecipe.categoryRecipe, {'attr': {'class': 'form-select select2-category-recipe'}}) }}
                                            </div>
                                            <div class=\"col-md-2\">
                                                <button type=\"button\" class=\"btn btn-danger remove-collection-item w-100\">
                                                    <i class=\"fas fa-trash\"></i>
                                                </button>
                                            </div>
                                            {{ form_rest(promoCategoryRecipe) }}
                                        </div>
                                    {% endfor %}
                                </div>
                                <button type=\"button\" class=\"btn btn-primary mt-2 add-collection-item\" data-collection=\"promotion-category-recipes-collection\">
                                    <i class=\"fas fa-plus-circle me-2\"></i>Ajouter une catégorie
                                </button>
                            </div>
                        </div>

                        <!-- SECTION PLATS -->
                        <div class=\"card border-0 bg-light mt-4\">
                            <div class=\"card-header bg-white border-0\">
                                <h5 class=\"mb-0\">
                                    <i class=\"fas fa-hamburger me-2 text-primary\"></i>Plats concernés
                                </h5>
                                <p class=\"text-muted small mb-0\">Sélectionnez les plats spécifiques concernés par cette promotion (optionnel)</p>
                            </div>
                            <div class=\"card-body\">
                                <div id=\"promotion-recipes-collection\" 
                                     class=\"collection-wrapper\"
                                     data-prototype=\"{{ form_widget(form.promotionRecipes.vars.prototype)|e('html_attr') }}\"
                                     data-index=\"{{ form.promotionRecipes|length }}\">
                                    {% for promoRecipe in form.promotionRecipes %}
                                        <div class=\"collection-item row g-2 mb-2\">
                                            <div class=\"col-md-10\">
                                                {{ form_widget(promoRecipe.recipe, {'attr': {'class': 'form-select select2-recipe'}}) }}
                                            </div>
                                            <div class=\"col-md-2\">
                                                <button type=\"button\" class=\"btn btn-danger remove-collection-item w-100\">
                                                    <i class=\"fas fa-trash\"></i>
                                                </button>
                                            </div>
                                            {{ form_rest(promoRecipe) }}
                                        </div>
                                    {% endfor %}
                                </div>
                                <button type=\"button\" class=\"btn btn-primary mt-2 add-collection-item\" data-collection=\"promotion-recipes-collection\">
                                    <i class=\"fas fa-plus-circle me-2\"></i>Ajouter un plat
                                </button>
                            </div>
                        </div>
                    {% else %}
                        <!-- SECTION CATÉGORIES (MARKET/PHARMACY) -->
                        <div class=\"card border-0 bg-light mt-4\">
                            <div class=\"card-header bg-white border-0\">
                                <h5 class=\"mb-0\">
                                    <i class=\"fas fa-folder-tree me-2 text-primary\"></i>Catégories concernées
                                </h5>
                                <p class=\"text-muted small mb-0\">Sélectionnez les catégories de produits concernées par cette promotion (optionnel)</p>
                            </div>
                            <div class=\"card-body\">
                                <div id=\"promotion-categories-collection\" 
                                     class=\"collection-wrapper\"
                                     data-prototype=\"{{ form_widget(form.promotionCategories.vars.prototype)|e('html_attr') }}\"
                                     data-index=\"{{ form.promotionCategories|length }}\">
                                    {% for promoCategory in form.promotionCategories %}
                                        <div class=\"collection-item row g-2 mb-2\">
                                            <div class=\"col-md-10\">
                                                {{ form_widget(promoCategory.category, {'attr': {'class': 'form-select select2-category'}}) }}
                                            </div>
                                            <div class=\"col-md-2\">
                                                <button type=\"button\" class=\"btn btn-danger remove-collection-item w-100\">
                                                    <i class=\"fas fa-trash\"></i>
                                                </button>
                                            </div>
                                            {{ form_rest(promoCategory) }}
                                        </div>
                                    {% endfor %}
                                </div>
                                <button type=\"button\" class=\"btn btn-primary mt-2 add-collection-item\" data-collection=\"promotion-categories-collection\">
                                    <i class=\"fas fa-plus-circle me-2\"></i>Ajouter une catégorie
                                </button>
                            </div>
                        </div>

                        <!-- SECTION PRODUITS (MARKET/PHARMACY) -->
                        <div class=\"card border-0 bg-light mt-4\">
                            <div class=\"card-header bg-white border-0\">
                                <h5 class=\"mb-0\">
                                    <i class=\"fas fa-boxes me-2 text-primary\"></i>Produits concernés
                                </h5>
                                <p class=\"text-muted small mb-0\">Sélectionnez les produits spécifiques concernés par cette promotion (optionnel)</p>
                            </div>
                            <div class=\"card-body\">
                                <div id=\"promotion-products-collection\" 
                                     class=\"collection-wrapper\"
                                     data-prototype=\"{{ form_widget(form.promotionProducts.vars.prototype)|e('html_attr') }}\"
                                     data-index=\"{{ form.promotionProducts|length }}\">
                                    {% for promoProduct in form.promotionProducts %}
                                        <div class=\"collection-item row g-2 mb-2\">
                                            <div class=\"col-md-10\">
                                                {{ form_widget(promoProduct.product, {'attr': {'class': 'form-select select2-product'}}) }}
                                            </div>
                                            <div class=\"col-md-2\">
                                                <button type=\"button\" class=\"btn btn-danger remove-collection-item w-100\">
                                                    <i class=\"fas fa-trash\"></i>
                                                </button>
                                            </div>
                                            {{ form_rest(promoProduct) }}
                                        </div>
                                    {% endfor %}
                                </div>
                                <button type=\"button\" class=\"btn btn-primary mt-2 add-collection-item\" data-collection=\"promotion-products-collection\">
                                    <i class=\"fas fa-plus-circle me-2\"></i>Ajouter un produit
                                </button>
                            </div>
                        </div>
                    {% endif %}
                </div>

                <!-- Footer avec boutons d'action -->
                <div class=\"card-footer bg-light py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a href=\"{{ path('app_admin_promotion_index') }}\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-times me-2\"></i> Annuler
                        </a>
                        <div class=\"btn-group\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                                <i class=\"fas fa-save me-2\"></i>
                                {{ button_label|default('Enregistrer la promotion') }}
                            </button>
                            {% if promotion.id is defined and promotion.id is not null %}
                                <a href=\"{{ path('app_admin_promotion_show', {'id': promotion.id}) }}\" class=\"btn btn-info btn-lg\">
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
</div>

<!-- Modal de confirmation pour suppression d'élément de collection -->
<div class=\"modal fade\" id=\"confirmRemoveModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0\">
                <h5 class=\"modal-title text-danger\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmer la suppression
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                <h5>Êtes-vous sûr de vouloir supprimer cet élément ?</h5>
                <p class=\"text-muted\">Cette action est irréversible.</p>
                <div class=\"alert alert-warning mt-2\" id=\"itemToRemoveInfo\">
                    <span id=\"itemToRemoveName\"></span>
                </div>
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"confirmRemoveItemBtn\">Supprimer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour supprimer l'image -->
{% if promotion.id is defined and promotion.id is not null and promotion.image %}
<div class=\"modal fade\" id=\"deleteImageModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0\">
                <h5 class=\"modal-title text-danger\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer l'image
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                    <h5>Êtes-vous sûr de vouloir supprimer cette image ?</h5>
                    <p class=\"text-muted\">Cette action ne peut pas être annulée.</p>
                </div>
                <div class=\"mb-3\">
                    <img src=\"{{ asset('uploads/promotions/' ~ promotion.image) }}\"
                         alt=\"{{ promotion.name }}\"
                         class=\"rounded shadow-lg\"
                         style=\"width: 150px; height: 150px; object-fit: cover;\">
                </div>
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <form action=\"{{ path('app_admin_promotion_delete_image', {'id': promotion.id}) }}\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-image' ~ promotion.id) }}\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fas fa-trash me-2\"></i> Supprimer l'image
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endif %}

{% block javascripts %}
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script>
function previewPromoImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        const preview = document.querySelector('.promo-preview') || 
                       document.querySelector('.promo-placeholder');
        
        reader.onload = function(e) {
            if (preview && preview.classList.contains('promo-placeholder')) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-fluid rounded shadow-lg promo-preview';
                img.style = 'width: 200px; height: 200px; object-fit: cover; border: 5px solid #f8f9fa;';
                preview.parentNode.replaceChild(img, preview);
            } else if (preview) {
                preview.src = e.target.result;
            }
        };
        reader.readAsDataURL(input.files[0]);
    }
}

// Variable globale pour stocker l'élément à supprimer
let pendingRemoveItem = null;

document.addEventListener('DOMContentLoaded', function() {
    // ========== INITIALISATION SELECT2 ==========
    if (typeof \$ !== 'undefined') {
        \$('.select2-category, .select2-product, .select2-category-recipe, .select2-recipe').each(function() {
            \$(this).select2({
                theme: 'bootstrap-5',
                placeholder: 'Rechercher...',
                allowClear: true,
                width: '100%',
                language: {
                    noResults: function() { return 'Aucun résultat trouvé'; }
                }
            });
        });
    }

    // ========== GESTION DU SWITCH DE STATUT ==========
    const activeSwitch = document.getElementById('{{ form.is_active.vars.id }}');
    const statusBadge = document.getElementById('status-badge');
    const statusLabel = document.getElementById('status-label');
    
    if (activeSwitch && statusBadge && statusLabel) {
        activeSwitch.addEventListener('change', function() {
            const isActive = this.checked;
            statusBadge.textContent = isActive ? 'ACTIVE' : 'INACTIVE';
            statusBadge.className = isActive ? 'badge bg-success' : 'badge bg-danger';
            statusLabel.textContent = isActive ? 'Promotion active' : 'Promotion inactive';
        });
    }

    // ========== GESTION DYNAMIQUE DU CHAMP VALEUR ==========
    const typeSelect = document.getElementById('{{ form.typePromotion.vars.id }}');
    const valueInput = document.getElementById('{{ form.value.vars.id }}');
    const valueLabel = document.querySelector('label[for=\"{{ form.value.vars.id }}\"]');

    if (typeSelect && valueInput && valueLabel) {
        function updateValuePlaceholder() {
            const selectedText = typeSelect.options[typeSelect.selectedIndex]?.text;
            const isPercentage = selectedText === 'Pourcentage';
            valueInput.placeholder = isPercentage ? 'Ex: 20' : 'Ex: 5000';
            const suffix = isPercentage ? '%' : ' (FCFA)';
            valueLabel.innerHTML = `<i class=\"fas fa-calculator me-1\"></i> Valeur de réduction * \${suffix}`;
        }
        typeSelect.addEventListener('change', updateValuePlaceholder);
        updateValuePlaceholder();
    }

    // ========== GESTION DES COLLECTIONS ==========
    
    // Fonction pour initialiser Select2 sur un élément
    function initSelect2OnElement(element) {
        if (typeof \$ !== 'undefined') {
            const select = element.querySelector('select');
            if (select && !\$(select).data('select2')) {
                \$(select).select2({
                    theme: 'bootstrap-5',
                    placeholder: 'Rechercher...',
                    allowClear: true,
                    width: '100%'
                });
            }
        }
    }
    
    // Fonction pour attacher l'événement de suppression à un bouton
    function attachRemoveEvent(button) {
        // Supprimer l'ancien événement pour éviter les doublons
        button.removeEventListener('click', handleRemoveClick);
        button.addEventListener('click', handleRemoveClick);
    }
    
    // Gestionnaire de clic pour suppression avec modal
    function handleRemoveClick(e) {
        e.preventDefault();
        e.stopPropagation();
        const button = e.currentTarget;
        const item = button.closest('.collection-item');
        
        if (item) {
            // Récupérer le nom de l'élément à supprimer (peut être vide)
            const select = item.querySelector('select');
            let itemName = '';
            if (select && select.options && select.options[select.selectedIndex]) {
                const selectedOption = select.options[select.selectedIndex];
                if (selectedOption.value && selectedOption.text) {
                    itemName = selectedOption.text;
                }
            }
            
            // Si aucun élément sélectionné, afficher un message générique
            if (!itemName) {
                itemName = 'ce bloc vide';
            }
            
            const itemToRemoveNameSpan = document.getElementById('itemToRemoveName');
            if (itemToRemoveNameSpan) {
                itemToRemoveNameSpan.innerHTML = `<strong>\${escapeHtml(itemName)}</strong> sera supprimé(e) de la liste.`;
            }
            
            pendingRemoveItem = item;
            const modal = new bootstrap.Modal(document.getElementById('confirmRemoveModal'));
            modal.show();
        }
    }
    
    // Fonction pour créer un nouvel élément de collection
    function createCollectionItem(prototype, index) {
        const div = document.createElement('div');
        div.className = 'collection-item row g-2 mb-2';
        let html = prototype.replace(/__name__/g, index);
        
        // Ajouter la structure HTML correcte
        // Chercher où placer le bouton supprimer
        if (html.includes('select')) {
            // Remplacer la structure existante
            html = html.replace(/<div class=\"col-md-10\">/, '<div class=\"col-md-10\">');
            html = html.replace(/<\\/div>\\s*\$/, '');
            html += '</div><div class=\"col-md-2\"><button type=\"button\" class=\"btn btn-danger remove-collection-item w-100\"><i class=\"fas fa-trash\"></i></button></div>';
        }
        
        div.innerHTML = html;
        return div;
    }
    
    // Fonction pour ajouter un élément à une collection
    function addCollectionItem(collectionId) {
        const collection = document.getElementById(collectionId);
        if (!collection) return;
        
        const prototype = collection.dataset.prototype;
        let index = parseInt(collection.dataset.index);
        
        // Créer le nouvel élément
        const newItem = createCollectionItem(prototype, index);
        
        // Ajouter à la collection
        collection.appendChild(newItem);
        collection.dataset.index = index + 1;
        
        // Initialiser Select2 sur le nouveau select
        initSelect2OnElement(newItem);
        
        // Attacher l'événement de suppression sur le nouveau bouton
        const removeBtn = newItem.querySelector('.remove-collection-item');
        if (removeBtn) {
            attachRemoveEvent(removeBtn);
        }
    }
    
    // Gestionnaire de clic pour ajout
    function handleAddCollection(e) {
        const button = e.currentTarget;
        const collectionId = button.dataset.collection;
        if (collectionId) {
            addCollectionItem(collectionId);
        }
    }
    
    // Attacher les événements d'ajout
    document.querySelectorAll('.add-collection-item').forEach(button => {
        button.removeEventListener('click', handleAddCollection);
        button.addEventListener('click', handleAddCollection);
    });
    
    // Attacher les événements de suppression sur les éléments existants (pour l'édition)
    document.querySelectorAll('.remove-collection-item').forEach(button => {
        attachRemoveEvent(button);
    });
    
    // Confirmation de suppression
    const confirmRemoveBtn = document.getElementById('confirmRemoveItemBtn');
    if (confirmRemoveBtn) {
        confirmRemoveBtn.removeEventListener('click', handleConfirmRemove);
        confirmRemoveBtn.addEventListener('click', handleConfirmRemove);
    }
    
    function handleConfirmRemove() {
        if (pendingRemoveItem) {
            pendingRemoveItem.remove();
            pendingRemoveItem = null;
            const modal = bootstrap.Modal.getInstance(document.getElementById('confirmRemoveModal'));
            if (modal) modal.hide();
        }
    }
    
    // Nettoyer pendingRemoveItem quand le modal est fermé
    const confirmModal = document.getElementById('confirmRemoveModal');
    if (confirmModal) {
        confirmModal.addEventListener('hidden.bs.modal', function() {
            pendingRemoveItem = null;
        });
    }

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
});

function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}
</script>
{% endblock %}

{% block stylesheets %}
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
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
.select2-container--bootstrap-5 .select2-selection {
    border: 2px solid #e0e0e0;
    border-radius: 10px !important;
    min-height: calc(3.5rem + 2px);
    padding: 1rem 0.75rem 0.5rem 2.5rem;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
    line-height: 1.5;
    padding-left: 0;
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
.promo-preview {
    transition: all 0.3s ease;
}
.promo-preview:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}
.collection-item {
    background: #f8f9fa;
    padding: 10px;
    border-radius: 8px;
    margin-bottom: 10px;
}
.bg-light {
    background-color: #f8f9fa !important;
}
@media (max-width: 768px) {
    .form-switch .form-check-input {
        width: 3em;
        height: 1.5em;
    }
}
</style>
{% endblock %}", "admin/restaurant/promotion/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\restaurant\\promotion\\_form.html.twig");
    }
}
