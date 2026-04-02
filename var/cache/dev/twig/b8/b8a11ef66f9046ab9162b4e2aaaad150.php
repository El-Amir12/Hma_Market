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

/* admin/category_recipe/_form.html.twig */
class __TwigTemplate_1f2ee5469af6844973dcd50bd66dc007 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category_recipe/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category_recipe/_form.html.twig"));

        // line 2
        yield "
";
        // line 3
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
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
        // line 16
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 16, $this->source); })()), "image", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "                        <div class=\"position-relative mx-auto\" style=\"width: 200px; height: 200px;\">
                            <img src=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories_plats/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 18, $this->source); })()), "image", [], "any", false, false, false, 18))), "html", null, true);
            yield "\" 
                                 alt=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
            yield "\" 
                                 class=\"img-fluid rounded shadow-lg profile-preview\"
                                 style=\"width: 100%; height: 100%; object-fit: cover; border: 5px solid #f8f9fa;\">
                            ";
            // line 22
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", true, true, false, 22) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)))) {
                // line 23
                yield "                                <button type=\"button\" 
                                        class=\"btn btn-danger btn-sm position-absolute rounded-circle shadow\"
                                        style=\"bottom: 10px; right: 10px; width: 36px; height: 36px;\"
                                        data-bs-toggle=\"modal\" 
                                        data-bs-target=\"#deleteImageModal\"
                                        title=\"Supprimer l'image\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            ";
            }
            // line 32
            yield "                        </div>
                    ";
        } else {
            // line 34
            yield "                        <div class=\"category-placeholder rounded d-flex align-items-center justify-content-center mx-auto bg-gradient-primary text-white shadow-lg\"
                             style=\"width: 200px; height: 200px; border: 5px solid #f8f9fa;\">
                            <i class=\"fas fa-utensils fa-5x\"></i>
                        </div>
                    ";
        }
        // line 39
        yield "                </div>
                
                <!-- Champ de téléchargement d'image -->
                <div class=\"mt-auto\">
                    <div class=\"file-upload-wrapper\">
                        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "image", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control", "onchange" => "previewCategoryImage(this)", "accept" => "image/*"]]);
        // line 48
        yield "
                        <div class=\"form-text mt-2\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Formats acceptés : JPG, PNG, GIF, WebP. Taille max : 2MB
                        </div>
                        <div class=\"invalid-feedback d-block\">
                            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "image", [], "any", false, false, false, 54), 'errors');
        yield "
                        </div>
                    </div>
                    
                    <!-- Bouton de sélection stylé -->
                    <div class=\"mt-3\">
                        <label for=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "image", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60), "html", null, true);
        yield "\" class=\"btn btn-outline-primary w-100\">
                            <i class=\"fas fa-cloud-upload-alt me-2\"></i>
                            ";
        // line 62
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 62, $this->source); })()), "image", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Changer l'image") : ("Choisir une image"));
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
                    <i class=\"fas fa-utensils me-2\"></i>
                    ";
        // line 76
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", true, true, false, 76) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76)))) {
            // line 77
            yield "                        Modifier la catégorie de plats
                    ";
        } else {
            // line 79
            yield "                        Nouvelle catégorie de plats
                    ";
        }
        // line 81
        yield "                </h5>
            </div>
            <div class=\"card-body\">
                <!-- Informations de base -->
                <div class=\"row g-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "name", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 92
        yield "
                            <label for=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "name", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93), "html", null, true);
        yield "\">
                                <i class=\"fas fa-tag me-1\"></i> Nom de la catégorie
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "name", [], "any", false, false, false, 97), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "description", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "style" => "height: 120px"]]);
        // line 110
        yield "
                            <label for=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "description", [], "any", false, false, false, 111), "vars", [], "any", false, false, false, 111), "id", [], "any", false, false, false, 111), "html", null, true);
        yield "\">
                                <i class=\"fas fa-align-left me-1\"></i> Description
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "description", [], "any", false, false, false, 115), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "parent", [], "any", false, false, false, 124), 'widget', ["attr" => ["id" => "category_recipe_parent_select", "class" => "form-control select2-category", "placeholder" => " "]]);
        // line 128
        yield "
                            <label for=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "parent", [], "any", false, false, false, 129), "vars", [], "any", false, false, false, 129), "id", [], "any", false, false, false, 129), "html", null, true);
        yield "\">
                                <i class=\"fas fa-sitemap me-1\"></i> Catégorie parente
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "parent", [], "any", false, false, false, 133), 'errors');
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
                <div class=\"card border-0 bg-light mb-4\">
                    <div class=\"card-body\">
                        <h6 class=\"card-title text-primary mb-3\">
                            <i class=\"fas fa-toggle-on me-2\"></i> Statut de la catégorie
                        </h6>
                        <div class=\"d-flex align-items-center\">
                            <div class=\"form-check form-switch me-3\">
                                ";
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "is_active", [], "any", false, false, false, 153), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 156
        yield "
                                <label class=\"form-check-label\" for=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "is_active", [], "any", false, false, false, 157), "vars", [], "any", false, false, false, 157), "id", [], "any", false, false, false, 157), "html", null, true);
        yield "\">
                                    ";
        // line 158
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 158, $this->source); })()), "isActive", [], "any", false, false, false, 158)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Catégorie active") : ("Catégorie inactive"));
        yield "
                                </label>
                            </div>
                            <span class=\"badge ";
        // line 161
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 161, $this->source); })()), "isActive", [], "any", false, false, false, 161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\">
                                ";
        // line 162
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 162, $this->source); })()), "isActive", [], "any", false, false, false, 162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIVE") : ("INACTIVE"));
        yield "
                            </span>
                        </div>
                        <small class=\"text-muted mt-2 d-block\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Les catégories inactives ne seront pas visibles dans le menu.
                        </small>
                    </div>
                </div>
            </div>
            
            <!-- Footer avec boutons d'action -->
            <div class=\"card-footer bg-light py-3\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <a href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_index");
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-times me-2\"></i> Annuler
                    </a>
                    
                    <div class=\"btn-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                            <i class=\"fas fa-save me-2\"></i> 
                            ";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 183, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
                        </button>
                        
                        ";
        // line 186
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", true, true, false, 186) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 186, $this->source); })()), "id", [], "any", false, false, false, 186)))) {
            // line 187
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 187, $this->source); })()), "id", [], "any", false, false, false, 187)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-lg\">
                                <i class=\"fas fa-eye me-2\"></i> Voir
                            </a>
                        ";
        }
        // line 191
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 197
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), 'form_end');
        yield "

<!-- Modal pour supprimer l'image -->
";
        // line 200
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", true, true, false, 200) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 200, $this->source); })()), "id", [], "any", false, false, false, 200))) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 200, $this->source); })()), "image", [], "any", false, false, false, 200))) {
            // line 201
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
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories_plats/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 217, $this->source); })()), "image", [], "any", false, false, false, 217))), "html", null, true);
            yield "\" 
                         alt=\"";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 218, $this->source); })()), "name", [], "any", false, false, false, 218), "html", null, true);
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
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_delete_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 227, $this->source); })()), "id", [], "any", false, false, false, 227)]), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-image" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 228, $this->source); })()), "id", [], "any", false, false, false, 228))), "html", null, true);
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
        // line 238
        yield "
<script>
function previewCategoryImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        const preview = document.querySelector('.profile-preview') || 
                       document.querySelector('.category-placeholder');
        
        reader.onload = function(e) {
            if (preview.classList.contains('category-placeholder')) {
                // Remplacer le placeholder par une image
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-fluid rounded shadow-lg profile-preview';
                img.style = 'width: 200px; height: 200px; object-fit: cover; border: 5px solid #f8f9fa;';
                preview.parentNode.replaceChild(img, preview);
            } else {
                // Mettre à jour l'image existante
                preview.src = e.target.result;
            }
        };
        
        reader.readAsDataURL(input.files[0]);
    }
}

// Initialiser Select2 pour les catégories parentes
document.addEventListener('DOMContentLoaded', function() {
    // Initialiser Select2
    const categorySelect = document.getElementById('category_recipe_parent_select');
    if (categorySelect && typeof \$ !== 'undefined') {
        // Détruire l'instance existante si elle existe
        if (\$(categorySelect).data('select2')) {
            \$(categorySelect).select2('destroy');
        }
        \$(categorySelect).select2({
            theme: \"bootstrap-5\",
            language: \"fr\",
            width: \"100%\",
            placeholder: \"Rechercher une catégorie parente...\",
            allowClear: true,
            minimumInputLength: 0,
            dropdownParent: \$('.card-body')
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
.form-floating > .form-control:not(:placeholder-shown) ~ label {
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
.select2-container--bootstrap-5 .select2-selection:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
}
.form-check-input:checked {
    background-color: #667eea;
    border-color: #667eea;
}
.form-switch .form-check-input {
    width: 3em;
    height: 1.5em;
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
.btn-outline-secondary:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}
.profile-preview {
    transition: all 0.3s ease;
}
.profile-preview:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}
.file-upload-wrapper {
    position: relative;
}
.file-upload-wrapper input[type=\"file\"] {
    opacity: 0;
    position: absolute;
    width: 100%;
    height: 100%;
    cursor: pointer;
}
.modal-content {
    border-radius: 15px;
    border: none;
}
.badge {
    font-size: 0.85em;
    font-weight: 500;
    letter-spacing: 0.5px;
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
        return "admin/category_recipe/_form.html.twig";
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
        return array (  385 => 238,  372 => 228,  368 => 227,  356 => 218,  352 => 217,  334 => 201,  332 => 200,  326 => 197,  318 => 191,  310 => 187,  308 => 186,  302 => 183,  292 => 176,  275 => 162,  271 => 161,  265 => 158,  261 => 157,  258 => 156,  256 => 153,  233 => 133,  226 => 129,  223 => 128,  221 => 124,  209 => 115,  202 => 111,  199 => 110,  197 => 106,  185 => 97,  178 => 93,  175 => 92,  173 => 88,  164 => 81,  160 => 79,  156 => 77,  154 => 76,  137 => 62,  132 => 60,  123 => 54,  115 => 48,  113 => 44,  106 => 39,  99 => 34,  95 => 32,  84 => 23,  82 => 22,  76 => 19,  72 => 18,  69 => 17,  67 => 16,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/category_recipe/_form.html.twig #}

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
                            <img src=\"{{ asset('uploads/categories_plats/' ~ category.image) }}\" 
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
                            <i class=\"fas fa-utensils fa-5x\"></i>
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
                            Formats acceptés : JPG, PNG, GIF, WebP. Taille max : 2MB
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
                    <i class=\"fas fa-utensils me-2\"></i>
                    {% if category.id is defined and category.id is not null %}
                        Modifier la catégorie de plats
                    {% else %}
                        Nouvelle catégorie de plats
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
                                <i class=\"fas fa-tag me-1\"></i> Nom de la catégorie
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
                                'id': 'category_recipe_parent_select',
                                'class': 'form-control select2-category',
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
                <div class=\"card border-0 bg-light mb-4\">
                    <div class=\"card-body\">
                        <h6 class=\"card-title text-primary mb-3\">
                            <i class=\"fas fa-toggle-on me-2\"></i> Statut de la catégorie
                        </h6>
                        <div class=\"d-flex align-items-center\">
                            <div class=\"form-check form-switch me-3\">
                                {{ form_widget(form.is_active, {'attr': {
                                    'class': 'form-check-input',
                                    'role': 'switch'
                                }}) }}
                                <label class=\"form-check-label\" for=\"{{ form.is_active.vars.id }}\">
                                    {{ category.isActive ? 'Catégorie active' : 'Catégorie inactive' }}
                                </label>
                            </div>
                            <span class=\"badge {{ category.isActive ? 'bg-success' : 'bg-danger' }}\">
                                {{ category.isActive ? 'ACTIVE' : 'INACTIVE' }}
                            </span>
                        </div>
                        <small class=\"text-muted mt-2 d-block\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Les catégories inactives ne seront pas visibles dans le menu.
                        </small>
                    </div>
                </div>
            </div>
            
            <!-- Footer avec boutons d'action -->
            <div class=\"card-footer bg-light py-3\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <a href=\"{{ path('app_admin_category_recipe_index') }}\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-times me-2\"></i> Annuler
                    </a>
                    
                    <div class=\"btn-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                            <i class=\"fas fa-save me-2\"></i> 
                            {{ button_label|default('Enregistrer') }}
                        </button>
                        
                        {% if category.id is defined and category.id is not null %}
                            <a href=\"{{ path('app_admin_category_recipe_show', {'id': category.id}) }}\" class=\"btn btn-info btn-lg\">
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
                    <img src=\"{{ asset('uploads/categories_plats/' ~ category.image) }}\" 
                         alt=\"{{ category.name }}\" 
                         class=\"rounded shadow-lg\"
                         style=\"width: 150px; height: 150px; object-fit: cover;\">
                </div>
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <form action=\"{{ path('app_admin_category_recipe_delete_image', {'id': category.id}) }}\" method=\"post\" class=\"d-inline\">
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

<script>
function previewCategoryImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        const preview = document.querySelector('.profile-preview') || 
                       document.querySelector('.category-placeholder');
        
        reader.onload = function(e) {
            if (preview.classList.contains('category-placeholder')) {
                // Remplacer le placeholder par une image
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-fluid rounded shadow-lg profile-preview';
                img.style = 'width: 200px; height: 200px; object-fit: cover; border: 5px solid #f8f9fa;';
                preview.parentNode.replaceChild(img, preview);
            } else {
                // Mettre à jour l'image existante
                preview.src = e.target.result;
            }
        };
        
        reader.readAsDataURL(input.files[0]);
    }
}

// Initialiser Select2 pour les catégories parentes
document.addEventListener('DOMContentLoaded', function() {
    // Initialiser Select2
    const categorySelect = document.getElementById('category_recipe_parent_select');
    if (categorySelect && typeof \$ !== 'undefined') {
        // Détruire l'instance existante si elle existe
        if (\$(categorySelect).data('select2')) {
            \$(categorySelect).select2('destroy');
        }
        \$(categorySelect).select2({
            theme: \"bootstrap-5\",
            language: \"fr\",
            width: \"100%\",
            placeholder: \"Rechercher une catégorie parente...\",
            allowClear: true,
            minimumInputLength: 0,
            dropdownParent: \$('.card-body')
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
.form-floating > .form-control:not(:placeholder-shown) ~ label {
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
.select2-container--bootstrap-5 .select2-selection:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
}
.form-check-input:checked {
    background-color: #667eea;
    border-color: #667eea;
}
.form-switch .form-check-input {
    width: 3em;
    height: 1.5em;
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
.btn-outline-secondary:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}
.profile-preview {
    transition: all 0.3s ease;
}
.profile-preview:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}
.file-upload-wrapper {
    position: relative;
}
.file-upload-wrapper input[type=\"file\"] {
    opacity: 0;
    position: absolute;
    width: 100%;
    height: 100%;
    cursor: pointer;
}
.modal-content {
    border-radius: 15px;
    border: none;
}
.badge {
    font-size: 0.85em;
    font-weight: 500;
    letter-spacing: 0.5px;
}
</style>", "admin/category_recipe/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\category_recipe\\_form.html.twig");
    }
}
