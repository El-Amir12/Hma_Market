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

/* admin/recipe/_form.html.twig */
class __TwigTemplate_64e6e4f0864b66be35f5d4a386f11dfa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/recipe/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/recipe/_form.html.twig"));

        // line 2
        yield "
";
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), ["bootstrap_5_layout.html.twig"], true);
        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), ["form/recipe_item.html.twig"], true);
        // line 5
        yield "
<div class=\"container-fluid px-4\">
    ";
        // line 7
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "

    <div class=\"row g-4\">
        <!-- Colonne image -->
        <div class=\"col-lg-4\">
            <div class=\"card shadow-lg border-0 h-100 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-image me-2\"></i>Image de l'article
                    </h5>
                </div>
                <div class=\"card-body text-center d-flex flex-column\">
                    <!-- Preview de l'image -->
                    <div class=\"recipe-image-preview mb-4 flex-grow-1 d-flex flex-column justify-content-center\">
                        ";
        // line 21
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 21, $this->source); })()), "image", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "                            <div class=\"position-relative mx-auto\" style=\"width: 200px; height: 200px;\">
                                <img src=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/plats/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 23, $this->source); })()), "image", [], "any", false, false, false, 23))), "html", null, true);
            yield "\"
                                     alt=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
            yield "\"
                                     class=\"img-fluid rounded shadow-lg recipe-preview\"
                                     style=\"width: 100%; height: 100%; object-fit: cover; border: 5px solid #f8f9fa;\">
                                ";
            // line 27
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "id", [], "any", true, true, false, 27) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)))) {
                // line 28
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
            // line 37
            yield "                            </div>
                        ";
        } else {
            // line 39
            yield "                            <div class=\"recipe-placeholder rounded d-flex align-items-center justify-content-center mx-auto bg-gradient-primary text-white shadow-lg\"
                                 style=\"width: 200px; height: 200px; border: 5px solid #f8f9fa;\">
                                <i class=\"fas fa-utensils fa-5x\"></i>
                            </div>
                        ";
        }
        // line 44
        yield "                    </div>

                    <!-- Champ de téléchargement d'image -->
                    <div class=\"mt-auto\">
                        <div class=\"file-upload-wrapper\">
                            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "image", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control", "onchange" => "previewRecipeImage(this)", "accept" => "image/*"]]);
        // line 53
        yield "
                            <div class=\"form-text mt-2\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Formats acceptés : JPG, PNG, GIF, WebP. Taille max : 2M
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "image", [], "any", false, false, false, 59), 'errors');
        yield "
                            </div>
                        </div>

                        <!-- Bouton de sélection stylé -->
                        <div class=\"mt-3\">
                            <label for=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "image", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65), "html", null, true);
        yield "\" class=\"btn btn-outline-primary w-100\">
                                <i class=\"fas fa-cloud-upload-alt me-2\"></i>
                                ";
        // line 67
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 67, $this->source); })()), "image", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Changer l'image") : ("Choisir une image"));
        yield "
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne informations -->
        <div class=\"col-lg-8\">
            <div class=\"card shadow-lg border-0 h-100 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-utensils me-2\"></i>
                        ";
        // line 81
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "id", [], "any", true, true, false, 81) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81)))) {
            // line 82
            yield "                            Modifier l'article
                        ";
        } else {
            // line 84
            yield "                            Nouvel article
                        ";
        }
        // line 86
        yield "                    </h5>
                </div>
                <div class=\"card-body\">
                    <!-- Nom, prix et type -->
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "name", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 97
        yield "
                                <label for=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "name", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "id", [], "any", false, false, false, 98), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-tag me-1\"></i> Nom *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "name", [], "any", false, false, false, 102), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-floating\">
                                ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "selling_price", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off", "oninput" => "calculateRecipeMargin()"]]);
        // line 113
        yield "
                                <label for=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "selling_price", [], "any", false, false, false, 114), "vars", [], "any", false, false, false, 114), "id", [], "any", false, false, false, 114), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-money-bill-wave me-1\"></i> Prix (FCFA) *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "selling_price", [], "any", false, false, false, 118), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                        
                        <!-- 🔥 Type d'article -->
                        <div class=\"col-md-3\">
                            <div class=\"form-floating\">
                                ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "type", [], "any", false, false, false, 126), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " "]]);
        // line 129
        yield "
                                <label for=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "type", [], "any", false, false, false, 130), "vars", [], "any", false, false, false, 130), "id", [], "any", false, false, false, 130), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-tag me-1\"></i> Type d'article *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "type", [], "any", false, false, false, 134), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Catégorie et statut -->
                    <div class=\"row g-3 mt-3\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "category", [], "any", false, false, false, 144), 'widget', ["attr" => ["class" => "form-select select2-category", "placeholder" => " "]]);
        // line 147
        yield "
                                <label for=\"";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "category", [], "any", false, false, false, 148), "vars", [], "any", false, false, false, 148), "id", [], "any", false, false, false, 148), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-folder me-1\"></i> Catégorie
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "category", [], "any", false, false, false, 152), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card border-0 bg-light h-100\">
                                <div class=\"card-body py-2\">
                                    <div class=\"d-flex align-items-center justify-content-between\">
                                        <div class=\"d-flex align-items-center\">
                                            <i class=\"fas fa-toggle-on me-2 text-primary\"></i>
                                            <span class=\"fw-bold\">Statut</span>
                                        </div>
                                        <span class=\"badge ";
        // line 164
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "is_active", [], "any", false, false, false, 164), "vars", [], "any", false, false, false, 164), "data", [], "any", false, false, false, 164)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\" id=\"recipe-status-badge\">
                                            ";
        // line 165
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "is_active", [], "any", false, false, false, 165), "vars", [], "any", false, false, false, 165), "data", [], "any", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
        yield "
                                        </span>
                                    </div>
                                    <div class=\"form-check form-switch mt-2\">
                                        ";
        // line 169
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "is_active", [], "any", false, false, false, 169), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 172
        yield "
                                        <label class=\"form-check-label\" for=\"";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "is_active", [], "any", false, false, false, 173), "vars", [], "any", false, false, false, 173), "id", [], "any", false, false, false, 173), "html", null, true);
        yield "\" id=\"recipe-status-label\">
                                            ";
        // line 174
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "is_active", [], "any", false, false, false, 174), "vars", [], "any", false, false, false, 174), "data", [], "any", false, false, false, 174)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
        yield "
                                        </label>
                                    </div>
                                    <small class=\"text-muted mt-1 d-block\">
                                        <i class=\"fas fa-info-circle me-1\"></i>
                                        Les articles inactifs ne seront pas visibles
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Description et instructions -->
                    <div class=\"row g-3 mt-3\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "description", [], "any", false, false, false, 190), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "style" => "height: 120px"]]);
        // line 194
        yield "
                                <label for=\"";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "description", [], "any", false, false, false, 195), "vars", [], "any", false, false, false, 195), "id", [], "any", false, false, false, 195), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-align-left me-1\"></i> Description
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 199
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "description", [], "any", false, false, false, 199), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 205
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "instructions", [], "any", false, false, false, 205), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "style" => "height: 120px"]]);
        // line 209
        yield "
                                <label for=\"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "instructions", [], "any", false, false, false, 210), "vars", [], "any", false, false, false, 210), "id", [], "any", false, false, false, 210), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-book-open me-1\"></i> Instructions
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 214
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "instructions", [], "any", false, false, false, 214), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ingrédients -->
                    <div class=\"card mt-4 border-0 shadow-sm\">
                        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"fas fa-cup-straw me-2 text-primary\"></i> Ingrédients
                            </h5>
                            <button type=\"button\" class=\"btn btn-sm btn-primary\" id=\"add-ingredient\">
                                <i class=\"fas fa-plus me-1\"></i> Ajouter un ingrédient
                            </button>
                        </div>
                        <div class=\"card-body\">
                            ";
        // line 231
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "recipeItems", [], "any", false, false, false, 231), 'row', ["attr" => ["class" => "recipe-items-collection"]]);
        yield "
                        </div>
                    </div>
                </div>

                <!-- Footer avec boutons -->
                <div class=\"card-footer bg-light py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a href=\"";
        // line 239
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_index");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-times me-2\"></i> Annuler
                        </a>
                        <div class=\"btn-group\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                                <i class=\"fas fa-save me-2\"></i>
                                ";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 245, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
                            </button>
                            ";
        // line 247
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "id", [], "any", true, true, false, 247) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 247, $this->source); })()), "id", [], "any", false, false, false, 247)))) {
            // line 248
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 248, $this->source); })()), "id", [], "any", false, false, false, 248)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-lg\">
                                    <i class=\"fas fa-eye me-2\"></i> Voir
                                </a>
                            ";
        }
        // line 252
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 259
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 259, $this->source); })()), 'form_end');
        yield "
</div>

<!-- Modal de suppression d'image -->
";
        // line 263
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "id", [], "any", true, true, false, 263) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 263, $this->source); })()), "id", [], "any", false, false, false, 263))) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 263, $this->source); })()), "image", [], "any", false, false, false, 263))) {
            // line 264
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
            // line 280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/plats/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 280, $this->source); })()), "image", [], "any", false, false, false, 280))), "html", null, true);
            yield "\"
                         alt=\"";
            // line 281
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 281, $this->source); })()), "name", [], "any", false, false, false, 281), "html", null, true);
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
            // line 290
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_delete_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 290, $this->source); })()), "id", [], "any", false, false, false, 290)]), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 291
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-image" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 291, $this->source); })()), "id", [], "any", false, false, false, 291))), "html", null, true);
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
        // line 301
        yield "
<!-- Modal de suppression d'ingrédient -->
<div class=\"modal fade\" id=\"deleteIngredientModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0\">
                <h5 class=\"modal-title text-danger\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation de suppression
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                <h5>Êtes-vous sûr de vouloir supprimer cet ingrédient ?</h5>
                <p class=\"text-muted\">Cette action est irréversible.</p>
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"confirmDeleteIngredient\">
                    <i class=\"fas fa-trash me-2\"></i> Supprimer
                </button>
            </div>
        </div>
    </div>
</div>

";
        // line 329
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 583
        yield "
";
        // line 584
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 329
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

        // line 330
        yield "<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script>
// Mapping des unités vers leur type
const unitTypes = {
    'kg': 'weight',
    'g': 'weight',
    'mg': 'weight',
    'L': 'volume',
    'ml': 'volume',
    'cl': 'volume',
    'pièce': 'piece',
    'piece': 'piece',
    'boîte': 'piece',
    'boite': 'piece',
    'carton': 'piece',
    'paquet': 'piece',
    'pack': 'piece'
};

document.addEventListener('DOMContentLoaded', function() {
    // Données des produits
    const availableProducts = ";
        // line 352
        yield json_encode((isset($context["availableProducts"]) || array_key_exists("availableProducts", $context) ? $context["availableProducts"] : (function () { throw new RuntimeError('Variable "availableProducts" does not exist.', 352, $this->source); })()));
        yield ";
    const productsMap = {};
    availableProducts.forEach(p => {
        productsMap[p.id] = p;
    });

    // ==================== PREVIEW IMAGE ====================
    window.previewRecipeImage = function(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            const preview = document.querySelector('.recipe-preview') || document.querySelector('.recipe-placeholder');
            reader.onload = function(e) {
                if (preview && preview.classList.contains('recipe-placeholder')) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'img-fluid rounded shadow-lg recipe-preview';
                    img.style = 'width: 200px; height: 200px; object-fit: cover; border: 5px solid #f8f9fa;';
                    preview.parentNode.replaceChild(img, preview);
                } else if (preview) {
                    preview.src = e.target.result;
                }
            };
            reader.readAsDataURL(input.files[0]);
        }
    };

    // ==================== CALCUL DE MARGE ====================
    window.calculateRecipeMargin = function() {
        const sellingPrice = parseFloat(document.getElementById('";
        // line 380
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 380, $this->source); })()), "selling_price", [], "any", false, false, false, 380), "vars", [], "any", false, false, false, 380), "id", [], "any", false, false, false, 380), "html", null, true);
        yield "').value) || 0;
        const marginAmount = sellingPrice;
        const badge = document.getElementById('margin-percentage');
        if (badge) badge.textContent = marginAmount.toLocaleString('fr-FR') + ' FCFA';
    };

    // ==================== SELECT2 ====================
    function initSelect2(selector) {
        if (typeof \$ !== 'undefined' && \$.fn.select2) {
            \$(selector).select2({
                theme: 'bootstrap-5',
                placeholder: 'Rechercher un produit...',
                allowClear: true,
                width: '100%',
                language: {
                    noResults: function() { return 'Aucun produit trouvé'; }
                }
            });
        }
    }

    // Sauvegarder les options originales des selects d'unité
    const unitSelects = document.querySelectorAll('.unit-input');
    const unitOptionsMap = new Map();
    unitSelects.forEach(select => {
        unitOptionsMap.set(select, Array.from(select.options));
    });

    function filterUnitsForSelect(select, productId) {
        const product = productsMap[productId];
        const originalOptions = unitOptionsMap.get(select);
        if (!originalOptions) return;

        if (!product || !product.unitType) {
            select.innerHTML = '';
            originalOptions.forEach(opt => select.appendChild(opt.cloneNode(true)));
            return;
        }

        const productType = product.unitType;
        const filteredOptions = originalOptions.filter(opt => {
            const unitValue = opt.value;
            if (!unitValue) return true;
            return unitTypes[unitValue] === productType;
        });

        select.innerHTML = '';
        filteredOptions.forEach(opt => select.appendChild(opt.cloneNode(true)));
    }

    function bindProductChange(select) {
        \$(select).on('change', function() {
            const productId = \$(this).val();
            const itemDiv = \$(this).closest('.recipe-item');
            const unitInput = itemDiv.find('.unit-input');

            if (unitInput.length) {
                filterUnitsForSelect(unitInput[0], productId);
                if (productId && productsMap[productId] && productsMap[productId].unit) {
                    const productUnit = productsMap[productId].unit;
                    const available = Array.from(unitInput[0].options).some(opt => opt.value === productUnit);
                    if (available) {
                        unitInput.val(productUnit);
                    } else {
                        unitInput.val('');
                    }
                } else {
                    unitInput.val('');
                }
            }
        });
    }

    // Initialiser les ingrédients existants
    document.querySelectorAll('.product-select').forEach(select => {
        initSelect2(select);
        bindProductChange(select);
        const productId = select.value;
        const itemDiv = select.closest('.recipe-item');
        const unitInput = itemDiv.querySelector('.unit-input');
        if (unitInput && productId) {
            filterUnitsForSelect(unitInput, productId);
        }
    });

    // ==================== AJOUT DYNAMIQUE D'INGRÉDIENT ====================
    let index = ";
        // line 466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 466, $this->source); })()), "recipeItems", [], "any", false, false, false, 466)), "html", null, true);
        yield ";
    const container = document.querySelector('.recipe-items-collection');
    const prototype = container.dataset.prototype;
    const addBtn = document.getElementById('add-ingredient');

    if (addBtn) {
        addBtn.addEventListener('click', function() {
            const newFormHtml = prototype.replace(/__name__/g, index);
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = newFormHtml;
            const newItem = tempDiv.firstElementChild;
            container.appendChild(newItem);

            const productSelect = newItem.querySelector('.product-select');
            if (productSelect) {
                initSelect2(productSelect);
                bindProductChange(productSelect);
            }

            const newUnitSelect = newItem.querySelector('.unit-input');
            if (newUnitSelect) {
                unitOptionsMap.set(newUnitSelect, Array.from(newUnitSelect.options));
            }

            const deleteBtn = newItem.querySelector('.delete-ingredient');
            if (deleteBtn) {
                deleteBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const modal = new bootstrap.Modal(document.getElementById('deleteIngredientModal'));
                    const confirmBtn = document.getElementById('confirmDeleteIngredient');
                    modal.show();
                    confirmBtn.onclick = function() {
                        newItem.remove();
                        modal.hide();
                        confirmBtn.onclick = null;
                    };
                });
            }
            index++;
        });
    }

    // ==================== SUPPRESSION INGRÉDIENT EXISTANT ====================
    let currentDeleteTarget = null;
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteIngredientModal'));
    const confirmBtn = document.getElementById('confirmDeleteIngredient');

    document.querySelectorAll('.delete-ingredient').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            currentDeleteTarget = btn.closest('.recipe-item');
            deleteModal.show();
        });
    });

    if (confirmBtn) {
        confirmBtn.addEventListener('click', function() {
            if (currentDeleteTarget) {
                currentDeleteTarget.remove();
                currentDeleteTarget = null;
                deleteModal.hide();
            }
        });
    }

    document.getElementById('deleteIngredientModal').addEventListener('hidden.bs.modal', function() {
        currentDeleteTarget = null;
    });

    // ==================== GESTION DU STATUT ====================
    const activeSwitch = document.getElementById('";
        // line 536
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 536, $this->source); })()), "is_active", [], "any", false, false, false, 536), "vars", [], "any", false, false, false, 536), "id", [], "any", false, false, false, 536), "html", null, true);
        yield "');
    const statusBadge = document.getElementById('recipe-status-badge');
    const statusLabel = document.getElementById('recipe-status-label');
    if (activeSwitch && statusBadge && statusLabel) {
        activeSwitch.addEventListener('change', function() {
            const isActive = this.checked;
            statusBadge.textContent = isActive ? 'ACTIF' : 'INACTIF';
            statusBadge.className = isActive ? 'badge bg-success' : 'badge bg-danger';
            statusLabel.textContent = isActive ? 'Actif' : 'Inactif';
        });
    }

    // ==================== SELECT2 POUR CATÉGORIE ====================
    const categorySelect = document.querySelector('.select2-category');
    if (categorySelect && typeof \$ !== 'undefined') {
        \$(categorySelect).select2({
            theme: 'bootstrap-5',
            placeholder: 'Sélectionnez une catégorie...',
            width: '100%',
            allowClear: false
        });
    }

    // ==================== GESTION DU TYPE D'ARTICLE ====================
    const typeSelect = document.getElementById('";
        // line 560
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 560, $this->source); })()), "type", [], "any", false, false, false, 560), "vars", [], "any", false, false, false, 560), "id", [], "any", false, false, false, 560), "html", null, true);
        yield "');
    if (typeSelect) {
        typeSelect.addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            const typeLabel = selectedOption ? selectedOption.text : '';
            console.log('Type sélectionné:', typeLabel);
        });
    }

    // ==================== VALIDATION BOOTSTRAP ====================
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 584
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

        // line 585
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
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
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
.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
.recipe-preview {
    transition: all 0.3s ease;
}
.recipe-preview:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
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
        return "admin/recipe/_form.html.twig";
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
        return array (  826 => 585,  813 => 584,  779 => 560,  752 => 536,  679 => 466,  590 => 380,  559 => 352,  535 => 330,  522 => 329,  511 => 584,  508 => 583,  506 => 329,  476 => 301,  463 => 291,  459 => 290,  447 => 281,  443 => 280,  425 => 264,  423 => 263,  416 => 259,  407 => 252,  399 => 248,  397 => 247,  392 => 245,  383 => 239,  372 => 231,  352 => 214,  345 => 210,  342 => 209,  340 => 205,  331 => 199,  324 => 195,  321 => 194,  319 => 190,  300 => 174,  296 => 173,  293 => 172,  291 => 169,  284 => 165,  280 => 164,  265 => 152,  258 => 148,  255 => 147,  253 => 144,  240 => 134,  233 => 130,  230 => 129,  228 => 126,  217 => 118,  210 => 114,  207 => 113,  205 => 108,  196 => 102,  189 => 98,  186 => 97,  184 => 93,  175 => 86,  171 => 84,  167 => 82,  165 => 81,  148 => 67,  143 => 65,  134 => 59,  126 => 53,  124 => 49,  117 => 44,  110 => 39,  106 => 37,  95 => 28,  93 => 27,  87 => 24,  83 => 23,  80 => 22,  78 => 21,  61 => 7,  57 => 5,  55 => 4,  53 => 3,  50 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/recipe/_form.html.twig #}

{% form_theme form 'bootstrap_5_layout.html.twig' %}
{% form_theme form 'form/recipe_item.html.twig' %}

<div class=\"container-fluid px-4\">
    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': true}}) }}

    <div class=\"row g-4\">
        <!-- Colonne image -->
        <div class=\"col-lg-4\">
            <div class=\"card shadow-lg border-0 h-100 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-image me-2\"></i>Image de l'article
                    </h5>
                </div>
                <div class=\"card-body text-center d-flex flex-column\">
                    <!-- Preview de l'image -->
                    <div class=\"recipe-image-preview mb-4 flex-grow-1 d-flex flex-column justify-content-center\">
                        {% if recipe.image %}
                            <div class=\"position-relative mx-auto\" style=\"width: 200px; height: 200px;\">
                                <img src=\"{{ asset('uploads/plats/' ~ recipe.image) }}\"
                                     alt=\"{{ recipe.name }}\"
                                     class=\"img-fluid rounded shadow-lg recipe-preview\"
                                     style=\"width: 100%; height: 100%; object-fit: cover; border: 5px solid #f8f9fa;\">
                                {% if recipe.id is defined and recipe.id is not null %}
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
                            <div class=\"recipe-placeholder rounded d-flex align-items-center justify-content-center mx-auto bg-gradient-primary text-white shadow-lg\"
                                 style=\"width: 200px; height: 200px; border: 5px solid #f8f9fa;\">
                                <i class=\"fas fa-utensils fa-5x\"></i>
                            </div>
                        {% endif %}
                    </div>

                    <!-- Champ de téléchargement d'image -->
                    <div class=\"mt-auto\">
                        <div class=\"file-upload-wrapper\">
                            {{ form_widget(form.image, {'attr': {
                                'class': 'form-control',
                                'onchange': 'previewRecipeImage(this)',
                                'accept': 'image/*'
                            }}) }}
                            <div class=\"form-text mt-2\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Formats acceptés : JPG, PNG, GIF, WebP. Taille max : 2M
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.image) }}
                            </div>
                        </div>

                        <!-- Bouton de sélection stylé -->
                        <div class=\"mt-3\">
                            <label for=\"{{ form.image.vars.id }}\" class=\"btn btn-outline-primary w-100\">
                                <i class=\"fas fa-cloud-upload-alt me-2\"></i>
                                {{ recipe.image ? 'Changer l\\'image' : 'Choisir une image' }}
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne informations -->
        <div class=\"col-lg-8\">
            <div class=\"card shadow-lg border-0 h-100 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-utensils me-2\"></i>
                        {% if recipe.id is defined and recipe.id is not null %}
                            Modifier l'article
                        {% else %}
                            Nouvel article
                        {% endif %}
                    </h5>
                </div>
                <div class=\"card-body\">
                    <!-- Nom, prix et type -->
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.name, {'attr': {
                                    'class': 'form-control',
                                    'placeholder': ' ',
                                    'autocomplete': 'off'
                                }}) }}
                                <label for=\"{{ form.name.vars.id }}\">
                                    <i class=\"fas fa-tag me-1\"></i> Nom *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.name) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.selling_price, {'attr': {
                                    'class': 'form-control',
                                    'placeholder': ' ',
                                    'autocomplete': 'off',
                                    'oninput': 'calculateRecipeMargin()'
                                }}) }}
                                <label for=\"{{ form.selling_price.vars.id }}\">
                                    <i class=\"fas fa-money-bill-wave me-1\"></i> Prix (FCFA) *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.selling_price) }}
                                </div>
                            </div>
                        </div>
                        
                        <!-- 🔥 Type d'article -->
                        <div class=\"col-md-3\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.type, {'attr': {
                                    'class': 'form-control',
                                    'placeholder': ' '
                                }}) }}
                                <label for=\"{{ form.type.vars.id }}\">
                                    <i class=\"fas fa-tag me-1\"></i> Type d'article *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.type) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Catégorie et statut -->
                    <div class=\"row g-3 mt-3\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.category, {'attr': {
                                    'class': 'form-select select2-category',
                                    'placeholder': ' '
                                }}) }}
                                <label for=\"{{ form.category.vars.id }}\">
                                    <i class=\"fas fa-folder me-1\"></i> Catégorie
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.category) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card border-0 bg-light h-100\">
                                <div class=\"card-body py-2\">
                                    <div class=\"d-flex align-items-center justify-content-between\">
                                        <div class=\"d-flex align-items-center\">
                                            <i class=\"fas fa-toggle-on me-2 text-primary\"></i>
                                            <span class=\"fw-bold\">Statut</span>
                                        </div>
                                        <span class=\"badge {{ form.is_active.vars.data ? 'bg-success' : 'bg-danger' }}\" id=\"recipe-status-badge\">
                                            {{ form.is_active.vars.data ? 'ACTIF' : 'INACTIF' }}
                                        </span>
                                    </div>
                                    <div class=\"form-check form-switch mt-2\">
                                        {{ form_widget(form.is_active, {'attr': {
                                            'class': 'form-check-input',
                                            'role': 'switch'
                                        }}) }}
                                        <label class=\"form-check-label\" for=\"{{ form.is_active.vars.id }}\" id=\"recipe-status-label\">
                                            {{ form.is_active.vars.data ? 'Actif' : 'Inactif' }}
                                        </label>
                                    </div>
                                    <small class=\"text-muted mt-1 d-block\">
                                        <i class=\"fas fa-info-circle me-1\"></i>
                                        Les articles inactifs ne seront pas visibles
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Description et instructions -->
                    <div class=\"row g-3 mt-3\">
                        <div class=\"col-md-6\">
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
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.instructions, {'attr': {
                                    'class': 'form-control',
                                    'placeholder': ' ',
                                    'style': 'height: 120px'
                                }}) }}
                                <label for=\"{{ form.instructions.vars.id }}\">
                                    <i class=\"fas fa-book-open me-1\"></i> Instructions
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.instructions) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ingrédients -->
                    <div class=\"card mt-4 border-0 shadow-sm\">
                        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"fas fa-cup-straw me-2 text-primary\"></i> Ingrédients
                            </h5>
                            <button type=\"button\" class=\"btn btn-sm btn-primary\" id=\"add-ingredient\">
                                <i class=\"fas fa-plus me-1\"></i> Ajouter un ingrédient
                            </button>
                        </div>
                        <div class=\"card-body\">
                            {{ form_row(form.recipeItems, {'attr': {'class': 'recipe-items-collection'}}) }}
                        </div>
                    </div>
                </div>

                <!-- Footer avec boutons -->
                <div class=\"card-footer bg-light py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a href=\"{{ path('app_admin_recipe_index') }}\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-times me-2\"></i> Annuler
                        </a>
                        <div class=\"btn-group\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                                <i class=\"fas fa-save me-2\"></i>
                                {{ button_label|default('Enregistrer') }}
                            </button>
                            {% if recipe.id is defined and recipe.id is not null %}
                                <a href=\"{{ path('app_admin_recipe_show', {'id': recipe.id}) }}\" class=\"btn btn-info btn-lg\">
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

<!-- Modal de suppression d'image -->
{% if recipe.id is defined and recipe.id is not null and recipe.image %}
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
                    <img src=\"{{ asset('uploads/plats/' ~ recipe.image) }}\"
                         alt=\"{{ recipe.name }}\"
                         class=\"rounded shadow-lg\"
                         style=\"width: 150px; height: 150px; object-fit: cover;\">
                </div>
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <form action=\"{{ path('app_admin_recipe_delete_image', {'id': recipe.id}) }}\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-image' ~ recipe.id) }}\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fas fa-trash me-2\"></i> Supprimer l'image
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endif %}

<!-- Modal de suppression d'ingrédient -->
<div class=\"modal fade\" id=\"deleteIngredientModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0\">
                <h5 class=\"modal-title text-danger\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation de suppression
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                <h5>Êtes-vous sûr de vouloir supprimer cet ingrédient ?</h5>
                <p class=\"text-muted\">Cette action est irréversible.</p>
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"confirmDeleteIngredient\">
                    <i class=\"fas fa-trash me-2\"></i> Supprimer
                </button>
            </div>
        </div>
    </div>
</div>

{% block javascripts %}
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script>
// Mapping des unités vers leur type
const unitTypes = {
    'kg': 'weight',
    'g': 'weight',
    'mg': 'weight',
    'L': 'volume',
    'ml': 'volume',
    'cl': 'volume',
    'pièce': 'piece',
    'piece': 'piece',
    'boîte': 'piece',
    'boite': 'piece',
    'carton': 'piece',
    'paquet': 'piece',
    'pack': 'piece'
};

document.addEventListener('DOMContentLoaded', function() {
    // Données des produits
    const availableProducts = {{ availableProducts|json_encode|raw }};
    const productsMap = {};
    availableProducts.forEach(p => {
        productsMap[p.id] = p;
    });

    // ==================== PREVIEW IMAGE ====================
    window.previewRecipeImage = function(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            const preview = document.querySelector('.recipe-preview') || document.querySelector('.recipe-placeholder');
            reader.onload = function(e) {
                if (preview && preview.classList.contains('recipe-placeholder')) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'img-fluid rounded shadow-lg recipe-preview';
                    img.style = 'width: 200px; height: 200px; object-fit: cover; border: 5px solid #f8f9fa;';
                    preview.parentNode.replaceChild(img, preview);
                } else if (preview) {
                    preview.src = e.target.result;
                }
            };
            reader.readAsDataURL(input.files[0]);
        }
    };

    // ==================== CALCUL DE MARGE ====================
    window.calculateRecipeMargin = function() {
        const sellingPrice = parseFloat(document.getElementById('{{ form.selling_price.vars.id }}').value) || 0;
        const marginAmount = sellingPrice;
        const badge = document.getElementById('margin-percentage');
        if (badge) badge.textContent = marginAmount.toLocaleString('fr-FR') + ' FCFA';
    };

    // ==================== SELECT2 ====================
    function initSelect2(selector) {
        if (typeof \$ !== 'undefined' && \$.fn.select2) {
            \$(selector).select2({
                theme: 'bootstrap-5',
                placeholder: 'Rechercher un produit...',
                allowClear: true,
                width: '100%',
                language: {
                    noResults: function() { return 'Aucun produit trouvé'; }
                }
            });
        }
    }

    // Sauvegarder les options originales des selects d'unité
    const unitSelects = document.querySelectorAll('.unit-input');
    const unitOptionsMap = new Map();
    unitSelects.forEach(select => {
        unitOptionsMap.set(select, Array.from(select.options));
    });

    function filterUnitsForSelect(select, productId) {
        const product = productsMap[productId];
        const originalOptions = unitOptionsMap.get(select);
        if (!originalOptions) return;

        if (!product || !product.unitType) {
            select.innerHTML = '';
            originalOptions.forEach(opt => select.appendChild(opt.cloneNode(true)));
            return;
        }

        const productType = product.unitType;
        const filteredOptions = originalOptions.filter(opt => {
            const unitValue = opt.value;
            if (!unitValue) return true;
            return unitTypes[unitValue] === productType;
        });

        select.innerHTML = '';
        filteredOptions.forEach(opt => select.appendChild(opt.cloneNode(true)));
    }

    function bindProductChange(select) {
        \$(select).on('change', function() {
            const productId = \$(this).val();
            const itemDiv = \$(this).closest('.recipe-item');
            const unitInput = itemDiv.find('.unit-input');

            if (unitInput.length) {
                filterUnitsForSelect(unitInput[0], productId);
                if (productId && productsMap[productId] && productsMap[productId].unit) {
                    const productUnit = productsMap[productId].unit;
                    const available = Array.from(unitInput[0].options).some(opt => opt.value === productUnit);
                    if (available) {
                        unitInput.val(productUnit);
                    } else {
                        unitInput.val('');
                    }
                } else {
                    unitInput.val('');
                }
            }
        });
    }

    // Initialiser les ingrédients existants
    document.querySelectorAll('.product-select').forEach(select => {
        initSelect2(select);
        bindProductChange(select);
        const productId = select.value;
        const itemDiv = select.closest('.recipe-item');
        const unitInput = itemDiv.querySelector('.unit-input');
        if (unitInput && productId) {
            filterUnitsForSelect(unitInput, productId);
        }
    });

    // ==================== AJOUT DYNAMIQUE D'INGRÉDIENT ====================
    let index = {{ form.recipeItems|length }};
    const container = document.querySelector('.recipe-items-collection');
    const prototype = container.dataset.prototype;
    const addBtn = document.getElementById('add-ingredient');

    if (addBtn) {
        addBtn.addEventListener('click', function() {
            const newFormHtml = prototype.replace(/__name__/g, index);
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = newFormHtml;
            const newItem = tempDiv.firstElementChild;
            container.appendChild(newItem);

            const productSelect = newItem.querySelector('.product-select');
            if (productSelect) {
                initSelect2(productSelect);
                bindProductChange(productSelect);
            }

            const newUnitSelect = newItem.querySelector('.unit-input');
            if (newUnitSelect) {
                unitOptionsMap.set(newUnitSelect, Array.from(newUnitSelect.options));
            }

            const deleteBtn = newItem.querySelector('.delete-ingredient');
            if (deleteBtn) {
                deleteBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const modal = new bootstrap.Modal(document.getElementById('deleteIngredientModal'));
                    const confirmBtn = document.getElementById('confirmDeleteIngredient');
                    modal.show();
                    confirmBtn.onclick = function() {
                        newItem.remove();
                        modal.hide();
                        confirmBtn.onclick = null;
                    };
                });
            }
            index++;
        });
    }

    // ==================== SUPPRESSION INGRÉDIENT EXISTANT ====================
    let currentDeleteTarget = null;
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteIngredientModal'));
    const confirmBtn = document.getElementById('confirmDeleteIngredient');

    document.querySelectorAll('.delete-ingredient').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            currentDeleteTarget = btn.closest('.recipe-item');
            deleteModal.show();
        });
    });

    if (confirmBtn) {
        confirmBtn.addEventListener('click', function() {
            if (currentDeleteTarget) {
                currentDeleteTarget.remove();
                currentDeleteTarget = null;
                deleteModal.hide();
            }
        });
    }

    document.getElementById('deleteIngredientModal').addEventListener('hidden.bs.modal', function() {
        currentDeleteTarget = null;
    });

    // ==================== GESTION DU STATUT ====================
    const activeSwitch = document.getElementById('{{ form.is_active.vars.id }}');
    const statusBadge = document.getElementById('recipe-status-badge');
    const statusLabel = document.getElementById('recipe-status-label');
    if (activeSwitch && statusBadge && statusLabel) {
        activeSwitch.addEventListener('change', function() {
            const isActive = this.checked;
            statusBadge.textContent = isActive ? 'ACTIF' : 'INACTIF';
            statusBadge.className = isActive ? 'badge bg-success' : 'badge bg-danger';
            statusLabel.textContent = isActive ? 'Actif' : 'Inactif';
        });
    }

    // ==================== SELECT2 POUR CATÉGORIE ====================
    const categorySelect = document.querySelector('.select2-category');
    if (categorySelect && typeof \$ !== 'undefined') {
        \$(categorySelect).select2({
            theme: 'bootstrap-5',
            placeholder: 'Sélectionnez une catégorie...',
            width: '100%',
            allowClear: false
        });
    }

    // ==================== GESTION DU TYPE D'ARTICLE ====================
    const typeSelect = document.getElementById('{{ form.type.vars.id }}');
    if (typeSelect) {
        typeSelect.addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            const typeLabel = selectedOption ? selectedOption.text : '';
            console.log('Type sélectionné:', typeLabel);
        });
    }

    // ==================== VALIDATION BOOTSTRAP ====================
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
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
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
.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
.recipe-preview {
    transition: all 0.3s ease;
}
.recipe-preview:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
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
{% endblock %}", "admin/recipe/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\recipe\\_form.html.twig");
    }
}
