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

/* admin/category/_form.html.twig */
class __TwigTemplate_a434f7b04ce993db379910ee5506ad53 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/_form.html.twig"));

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
                        <i class=\"fas fa-image me-2\"></i>Image de la catégorie
                    </h5>
                </div>
                <div class=\"card-body text-center d-flex flex-column\">
                    <!-- Preview de l'image -->
                    <div class=\"category-image-preview mb-4 flex-grow-1 d-flex flex-column justify-content-center\">
                        ";
        // line 20
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 20, $this->source); })()), "image", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "                            <div class=\"position-relative mx-auto\" style=\"width: 200px; height: 200px;\">
                                <img src=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 22, $this->source); })()), "image", [], "any", false, false, false, 22))), "html", null, true);
            yield "\"
                                     alt=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "html", null, true);
            yield "\"
                                     class=\"img-fluid rounded shadow-lg profile-preview\"
                                     style=\"width: 100%; height: 100%; object-fit: cover; border: 5px solid #f8f9fa;\">
                                ";
            // line 26
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", true, true, false, 26) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)))) {
                // line 27
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
            // line 36
            yield "                            </div>
                        ";
        } else {
            // line 38
            yield "                            <div class=\"category-placeholder rounded d-flex align-items-center justify-content-center mx-auto bg-gradient-primary text-white shadow-lg\"
                                 style=\"width: 200px; height: 200px; border: 5px solid #f8f9fa;\">
                                <i class=\"fas fa-folder fa-5x\"></i>
                            </div>
                        ";
        }
        // line 43
        yield "                    </div>

                    <!-- Champ de téléchargement d'image -->
                    <div class=\"mt-auto\">
                        <div class=\"file-upload-wrapper\">
                            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "image", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control", "onchange" => "previewCategoryImage(this)", "accept" => "image/*"]]);
        // line 52
        yield "
                            <div class=\"form-text mt-2\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Formats acceptés : JPG, PNG, GIF, WebP. Taille max : 2M
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "image", [], "any", false, false, false, 58), 'errors');
        yield "
                            </div>
                        </div>

                        <!-- Bouton de sélection stylé -->
                        <div class=\"mt-3\">
                            <label for=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "image", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64), "html", null, true);
        yield "\" class=\"btn btn-outline-primary w-100\">
                                <i class=\"fas fa-cloud-upload-alt me-2\"></i>
                                ";
        // line 66
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 66, $this->source); })()), "image", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Changer l'image") : ("Choisir une image"));
        yield "
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carte Informations de la catégorie -->
        <div class=\"col-lg-8\">
            <div class=\"card shadow-lg border-0 h-100 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-folder-edit me-2\"></i>
                        ";
        // line 80
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", true, true, false, 80) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80)))) {
            // line 81
            yield "                            Modifier la catégorie
                        ";
        } else {
            // line 83
            yield "                            Nouvelle catégorie
                        ";
        }
        // line 85
        yield "                    </h5>
                </div>
                <div class=\"card-body\">
                    <!-- Informations de base -->
                    <div class=\"row g-3\">
                        <div class=\"col-md-12\">
                            <div class=\"form-floating\">
                                ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "name", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 96
        yield "
                                <label for=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "name", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "id", [], "any", false, false, false, 97), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-tag me-1\"></i> Nom de la catégorie *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "name", [], "any", false, false, false, 101), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-3 mt-3\">
                        <div class=\"col-md-12\">
                            <div class=\"form-floating\">
                                ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "description", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "style" => "height: 120px"]]);
        // line 114
        yield "
                                <label for=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "description", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "id", [], "any", false, false, false, 115), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-align-left me-1\"></i> Description
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "description", [], "any", false, false, false, 119), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row g-3 mt-3\">
                        <div class=\"col-md-12\">
                            <div class=\"form-floating\">
                                ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "parent", [], "any", false, false, false, 128), 'widget', ["attr" => ["class" => "form-select select2-category", "placeholder" => " "]]);
        // line 131
        yield "
                                <label for=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "parent", [], "any", false, false, false, 132), "vars", [], "any", false, false, false, 132), "id", [], "any", false, false, false, 132), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-sitemap me-1\"></i> Catégorie parente
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "parent", [], "any", false, false, false, 136), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"form-text mt-2\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Laissez vide pour créer une catégorie principale
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
                                    <span class=\"fw-bold\">Statut de la catégorie</span>
                                </div>
                                <span class=\"badge ";
        // line 156
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "is_active", [], "any", false, false, false, 156), "vars", [], "any", false, false, false, 156), "data", [], "any", false, false, false, 156)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\" id=\"status-badge\">
                                    ";
        // line 157
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "is_active", [], "any", false, false, false, 157), "vars", [], "any", false, false, false, 157), "data", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIVE") : ("INACTIVE"));
        yield "
                                </span>
                            </div>
                            <div class=\"form-check form-switch\">
                                ";
        // line 161
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "is_active", [], "any", false, false, false, 161), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 164
        yield "
                                <label class=\"form-check-label\" for=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "is_active", [], "any", false, false, false, 165), "vars", [], "any", false, false, false, 165), "id", [], "any", false, false, false, 165), "html", null, true);
        yield "\" id=\"status-label\">
                                    ";
        // line 166
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "is_active", [], "any", false, false, false, 166), "vars", [], "any", false, false, false, 166), "data", [], "any", false, false, false, 166)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Catégorie active") : ("Catégorie inactive"));
        yield "
                                </label>
                            </div>
                            <small class=\"text-muted mt-1 d-block\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Les catégories inactives ne seront pas visibles dans le catalogue.
                            </small>
                        </div>
                    </div>
                </div>

                <!-- Footer avec boutons d'action -->
                <div class=\"card-footer bg-light py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a href=\"";
        // line 180
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-times me-2\"></i> Annuler
                        </a>
                        <div class=\"btn-group\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                                <i class=\"fas fa-save me-2\"></i>
                                ";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 186, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
                            </button>
                            ";
        // line 188
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", true, true, false, 188) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 188, $this->source); })()), "id", [], "any", false, false, false, 188)))) {
            // line 189
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 189, $this->source); })()), "id", [], "any", false, false, false, 189)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-lg\">
                                    <i class=\"fas fa-eye me-2\"></i> Voir
                                </a>
                            ";
        }
        // line 193
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 200
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), 'form_end');
        yield "
</div>

<!-- Modal pour supprimer l'image -->
";
        // line 204
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", true, true, false, 204) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 204, $this->source); })()), "id", [], "any", false, false, false, 204))) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 204, $this->source); })()), "image", [], "any", false, false, false, 204))) {
            // line 205
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
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 221, $this->source); })()), "image", [], "any", false, false, false, 221))), "html", null, true);
            yield "\"
                         alt=\"";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 222, $this->source); })()), "name", [], "any", false, false, false, 222), "html", null, true);
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
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_delete_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 231, $this->source); })()), "id", [], "any", false, false, false, 231)]), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-image" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 232, $this->source); })()), "id", [], "any", false, false, false, 232))), "html", null, true);
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
        // line 242
        yield "
";
        // line 243
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 310
        yield "
";
        // line 311
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 243
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

        // line 244
        yield "<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script>
function previewCategoryImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        const preview = document.querySelector('.profile-preview') || 
                       document.querySelector('.category-placeholder');
        
        reader.onload = function(e) {
            if (preview && preview.classList.contains('category-placeholder')) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-fluid rounded shadow-lg profile-preview';
                img.style = 'width: 200px; height: 200px; object-fit: cover; border: 5px solid #f8f9fa;';
                preview.parentNode.replaceChild(img, preview);
            } else if (preview) {
                preview.src = e.target.result;
            }
        };
        reader.readAsDataURL(input.files[0]);
    }
}

document.addEventListener('DOMContentLoaded', function() {
    // Initialiser Select2 pour la catégorie parente
    const categorySelect = document.querySelector('.select2-category');
    if (categorySelect && typeof \$ !== 'undefined') {
        \$(categorySelect).select2({
            theme: 'bootstrap-5',
            placeholder: 'Rechercher une catégorie parente...',
            allowClear: true,
            width: '100%',
            language: {
                noResults: function() { return 'Aucune catégorie trouvée'; }
            }
        });
    }

    // Gestion du statut (badge)
    const activeSwitch = document.getElementById('";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 284, $this->source); })()), "is_active", [], "any", false, false, false, 284), "vars", [], "any", false, false, false, 284), "id", [], "any", false, false, false, 284), "html", null, true);
        yield "');
    const statusBadge = document.getElementById('status-badge');
    const statusLabel = document.getElementById('status-label');
    if (activeSwitch && statusBadge && statusLabel) {
        activeSwitch.addEventListener('change', function() {
            const isActive = this.checked;
            statusBadge.textContent = isActive ? 'ACTIVE' : 'INACTIVE';
            statusBadge.className = isActive ? 'badge bg-success' : 'badge bg-danger';
            statusLabel.textContent = isActive ? 'Catégorie active' : 'Catégorie inactive';
        });
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 311
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

        // line 312
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
.profile-preview {
    transition: all 0.3s ease;
}
.profile-preview:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
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
        return "admin/category/_form.html.twig";
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
        return array (  519 => 312,  506 => 311,  469 => 284,  427 => 244,  414 => 243,  403 => 311,  400 => 310,  398 => 243,  395 => 242,  382 => 232,  378 => 231,  366 => 222,  362 => 221,  344 => 205,  342 => 204,  335 => 200,  326 => 193,  318 => 189,  316 => 188,  311 => 186,  302 => 180,  285 => 166,  281 => 165,  278 => 164,  276 => 161,  269 => 157,  265 => 156,  242 => 136,  235 => 132,  232 => 131,  230 => 128,  218 => 119,  211 => 115,  208 => 114,  206 => 110,  194 => 101,  187 => 97,  184 => 96,  182 => 92,  173 => 85,  169 => 83,  165 => 81,  163 => 80,  146 => 66,  141 => 64,  132 => 58,  124 => 52,  122 => 48,  115 => 43,  108 => 38,  104 => 36,  93 => 27,  91 => 26,  85 => 23,  81 => 22,  78 => 21,  76 => 20,  59 => 6,  55 => 4,  53 => 3,  50 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/category/_form.html.twig #}

{% form_theme form 'bootstrap_5_layout.html.twig' %}

<div class=\"container-fluid px-4\">
    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': true}}) }}

    <div class=\"row g-4\">
        <!-- Carte Image -->
        <div class=\"col-lg-4\">
            <div class=\"card shadow-lg border-0 h-100 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-image me-2\"></i>Image de la catégorie
                    </h5>
                </div>
                <div class=\"card-body text-center d-flex flex-column\">
                    <!-- Preview de l'image -->
                    <div class=\"category-image-preview mb-4 flex-grow-1 d-flex flex-column justify-content-center\">
                        {% if category.image %}
                            <div class=\"position-relative mx-auto\" style=\"width: 200px; height: 200px;\">
                                <img src=\"{{ asset('uploads/categories/' ~ category.image) }}\"
                                     alt=\"{{ category.name }}\"
                                     class=\"img-fluid rounded shadow-lg profile-preview\"
                                     style=\"width: 100%; height: 100%; object-fit: cover; border: 5px solid #f8f9fa;\">
                                {% if category.id is defined and category.id is not null %}
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
                            <div class=\"category-placeholder rounded d-flex align-items-center justify-content-center mx-auto bg-gradient-primary text-white shadow-lg\"
                                 style=\"width: 200px; height: 200px; border: 5px solid #f8f9fa;\">
                                <i class=\"fas fa-folder fa-5x\"></i>
                            </div>
                        {% endif %}
                    </div>

                    <!-- Champ de téléchargement d'image -->
                    <div class=\"mt-auto\">
                        <div class=\"file-upload-wrapper\">
                            {{ form_widget(form.image, {'attr': {
                                'class': 'form-control',
                                'onchange': 'previewCategoryImage(this)',
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
                                {{ category.image ? 'Changer l\\'image' : 'Choisir une image' }}
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carte Informations de la catégorie -->
        <div class=\"col-lg-8\">
            <div class=\"card shadow-lg border-0 h-100 card-hover\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-folder-edit me-2\"></i>
                        {% if category.id is defined and category.id is not null %}
                            Modifier la catégorie
                        {% else %}
                            Nouvelle catégorie
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
                                    <i class=\"fas fa-tag me-1\"></i> Nom de la catégorie *
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
                        <div class=\"col-md-12\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.parent, {'attr': {
                                    'class': 'form-select select2-category',
                                    'placeholder': ' '
                                }}) }}
                                <label for=\"{{ form.parent.vars.id }}\">
                                    <i class=\"fas fa-sitemap me-1\"></i> Catégorie parente
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.parent) }}
                                </div>
                            </div>
                            <div class=\"form-text mt-2\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Laissez vide pour créer une catégorie principale
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
                                    <span class=\"fw-bold\">Statut de la catégorie</span>
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
                                    {{ form.is_active.vars.data ? 'Catégorie active' : 'Catégorie inactive' }}
                                </label>
                            </div>
                            <small class=\"text-muted mt-1 d-block\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Les catégories inactives ne seront pas visibles dans le catalogue.
                            </small>
                        </div>
                    </div>
                </div>

                <!-- Footer avec boutons d'action -->
                <div class=\"card-footer bg-light py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a href=\"{{ path('app_admin_category_index') }}\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-times me-2\"></i> Annuler
                        </a>
                        <div class=\"btn-group\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                                <i class=\"fas fa-save me-2\"></i>
                                {{ button_label|default('Enregistrer') }}
                            </button>
                            {% if category.id is defined and category.id is not null %}
                                <a href=\"{{ path('app_admin_category_show', {'id': category.id}) }}\" class=\"btn btn-info btn-lg\">
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

<!-- Modal pour supprimer l'image -->
{% if category.id is defined and category.id is not null and category.image %}
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
                    <img src=\"{{ asset('uploads/categories/' ~ category.image) }}\"
                         alt=\"{{ category.name }}\"
                         class=\"rounded shadow-lg\"
                         style=\"width: 150px; height: 150px; object-fit: cover;\">
                </div>
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <form action=\"{{ path('app_admin_category_delete_image', {'id': category.id}) }}\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-image' ~ category.id) }}\">
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
function previewCategoryImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        const preview = document.querySelector('.profile-preview') || 
                       document.querySelector('.category-placeholder');
        
        reader.onload = function(e) {
            if (preview && preview.classList.contains('category-placeholder')) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-fluid rounded shadow-lg profile-preview';
                img.style = 'width: 200px; height: 200px; object-fit: cover; border: 5px solid #f8f9fa;';
                preview.parentNode.replaceChild(img, preview);
            } else if (preview) {
                preview.src = e.target.result;
            }
        };
        reader.readAsDataURL(input.files[0]);
    }
}

document.addEventListener('DOMContentLoaded', function() {
    // Initialiser Select2 pour la catégorie parente
    const categorySelect = document.querySelector('.select2-category');
    if (categorySelect && typeof \$ !== 'undefined') {
        \$(categorySelect).select2({
            theme: 'bootstrap-5',
            placeholder: 'Rechercher une catégorie parente...',
            allowClear: true,
            width: '100%',
            language: {
                noResults: function() { return 'Aucune catégorie trouvée'; }
            }
        });
    }

    // Gestion du statut (badge)
    const activeSwitch = document.getElementById('{{ form.is_active.vars.id }}');
    const statusBadge = document.getElementById('status-badge');
    const statusLabel = document.getElementById('status-label');
    if (activeSwitch && statusBadge && statusLabel) {
        activeSwitch.addEventListener('change', function() {
            const isActive = this.checked;
            statusBadge.textContent = isActive ? 'ACTIVE' : 'INACTIVE';
            statusBadge.className = isActive ? 'badge bg-success' : 'badge bg-danger';
            statusLabel.textContent = isActive ? 'Catégorie active' : 'Catégorie inactive';
        });
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
.profile-preview {
    transition: all 0.3s ease;
}
.profile-preview:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
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
{% endblock %}", "admin/category/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\category\\_form.html.twig");
    }
}
