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
class __TwigTemplate_666f8f5836c8da61f5aec034dd06feaf extends Template
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
        // line 2
        yield "
";
        // line 3
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "
<div class=\"row g-3 g-md-4\">
    <!-- Carte Image -->
    <div class=\"col-12 col-lg-4\">
        <div class=\"card shadow-lg border-0 h-100 card-hover\">
            <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                    <i class=\"fas fa-image me-2\"></i>Image de la catégorie
                </h5>
            </div>
            <div class=\"card-body text-center d-flex flex-column p-3 p-md-4\">
                <!-- Preview de l'image -->
                <div class=\"category-image-preview mb-3 mb-md-4 flex-grow-1 d-flex flex-column justify-content-center\">
                    ";
        // line 16
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "                        <div class=\"position-relative mx-auto\" style=\"width: 150px; height: 150px;\">
                            <img src=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories_plats/" . CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 18))), "html", null, true);
            yield "\" 
                                 alt=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 19), "html", null, true);
            yield "\" 
                                 class=\"img-fluid rounded shadow-lg profile-preview\"
                                 style=\"width: 100%; height: 100%; object-fit: cover; border: 4px solid #f8f9fa;\">
                            ";
            // line 22
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", true, true, false, 22) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 22)))) {
                // line 23
                yield "                                <button type=\"button\" 
                                        class=\"btn btn-danger btn-sm position-absolute rounded-circle shadow\"
                                        style=\"bottom: 5px; right: 5px; width: 30px; height: 30px;\"
                                        data-bs-toggle=\"modal\" 
                                        data-bs-target=\"#deleteImageModal\"
                                        title=\"Supprimer l'image\">
                                    <i class=\"fas fa-trash\" style=\"font-size: 0.7rem;\"></i>
                                </button>
                            ";
            }
            // line 32
            yield "                        </div>
                    ";
        } else {
            // line 34
            yield "                        <div class=\"category-placeholder rounded d-flex align-items-center justify-content-center mx-auto bg-gradient-primary text-white shadow-lg\"
                             style=\"width: 150px; height: 150px; border: 4px solid #f8f9fa;\">
                            <i class=\"fas fa-utensils fa-4x\"></i>
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control form-control-sm", "onchange" => "previewCategoryImage(this)", "accept" => "image/*"]]);
        // line 48
        yield "
                        <div class=\"form-text mt-1 small\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            JPG, PNG, GIF, WebP. Max 2MB
                        </div>
                        <div class=\"invalid-feedback d-block\">
                            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 54), 'errors');
        yield "
                        </div>
                    </div>
                    
                    <!-- Bouton de sélection stylé -->
                    <div class=\"mt-2\">
                        <label for=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60), "html", null, true);
        yield "\" class=\"btn btn-outline-primary w-100 btn-sm\">
                            <i class=\"fas fa-cloud-upload-alt me-2\"></i>
                            ";
        // line 62
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Changer") : ("Choisir"));
        yield "
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Carte Informations de la catégorie -->
    <div class=\"col-12 col-lg-8\">
        <div class=\"card shadow-lg border-0 h-100 card-hover\">
            <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                    <i class=\"fas fa-utensils me-2\"></i>
                    ";
        // line 76
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", true, true, false, 76) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 76)))) {
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
            <div class=\"card-body p-3 p-md-4\">
                <!-- Informations de base -->
                <div class=\"row g-2 g-md-3\">
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                            ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 92
        yield "
                            <label for=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93), "html", null, true);
        yield "\">
                                <i class=\"fas fa-tag me-1\"></i> Nom de la catégorie
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 97), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                            ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "style" => "height: 100px"]]);
        // line 110
        yield "
                            <label for=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 111), "vars", [], "any", false, false, false, 111), "id", [], "any", false, false, false, 111), "html", null, true);
        yield "\">
                                <i class=\"fas fa-align-left me-1\"></i> Description
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 115), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                            ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 124), 'widget', ["attr" => ["id" => "category_recipe_parent_select", "class" => "form-control select2-category", "placeholder" => " "]]);
        // line 128
        yield "
                            <label for=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 129), "vars", [], "any", false, false, false, 129), "id", [], "any", false, false, false, 129), "html", null, true);
        yield "\">
                                <i class=\"fas fa-sitemap me-1\"></i> Catégorie parente
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 133), 'errors');
        yield "
                            </div>
                        </div>
                        <div class=\"form-text mt-1 small\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Laissez vide pour créer une catégorie principale
                        </div>
                    </div>
                </div>
                
                <hr class=\"my-3 my-md-4\">
                
                <!-- Statut -->
                <div class=\"card border-0 bg-light mb-3 mb-md-4\">
                    <div class=\"card-body p-3 p-md-4\">
                        <h6 class=\"card-title text-primary mb-3 fs-6 fs-md-5\">
                            <i class=\"fas fa-toggle-on me-2\"></i> Statut de la catégorie
                        </h6>
                        <div class=\"d-flex flex-wrap align-items-center gap-2 gap-md-3\">
                            <div class=\"form-check form-switch\">
                                ";
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 153), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 156
        yield "
                                <label class=\"form-check-label small\" for=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 157), "vars", [], "any", false, false, false, 157), "id", [], "any", false, false, false, 157), "html", null, true);
        yield "\">
                                    ";
        // line 158
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "isActive", [], "any", false, false, false, 158)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Catégorie active") : ("Catégorie inactive"));
        yield "
                                </label>
                            </div>
                            <span class=\"badge ";
        // line 161
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "isActive", [], "any", false, false, false, 161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\">
                                ";
        // line 162
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "isActive", [], "any", false, false, false, 162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIVE") : ("INACTIVE"));
        yield "
                            </span>
                        </div>
                        <small class=\"text-muted mt-2 d-block small\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Les catégories inactives ne seront pas visibles dans le menu.
                        </small>
                    </div>
                </div>
            </div>
            
            <!-- Footer avec boutons d'action -->
            <div class=\"card-footer bg-light py-2 py-md-3\">
                <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2 gap-sm-3\">
                    <a href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_index");
        yield "\" class=\"btn btn-outline-secondary w-100 w-sm-auto order-2 order-sm-1 btn-sm\">
                        <i class=\"fas fa-times me-2\"></i> Annuler
                    </a>
                    
                    <div class=\"d-flex gap-2 w-100 w-sm-auto order-1 order-sm-2\">
                        <button type=\"submit\" class=\"btn btn-primary flex-fill flex-sm-grow-0 btn-sm\">
                            <i class=\"fas fa-save me-2\"></i> 
                            ";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
                        </button>
                        
                        ";
        // line 186
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", true, true, false, 186) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 186)))) {
            // line 187
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 187)]), "html", null, true);
            yield "\" class=\"btn btn-info flex-fill flex-sm-grow-0 btn-sm\">
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "

<!-- Modal pour supprimer l'image -->
";
        // line 200
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", true, true, false, 200) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 200))) && CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 200))) {
            // line 201
            yield "<div class=\"modal fade\" id=\"deleteImageModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0\">
                <h5 class=\"modal-title text-danger fs-6\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer l'image
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <div class=\"mb-3 mb-md-4\">
                    <i class=\"fas fa-trash-alt fa-3x fa-md-4 text-danger mb-3\"></i>
                    <h5 class=\"fs-6\">Êtes-vous sûr de vouloir supprimer cette image ?</h5>
                    <p class=\"text-muted small\">Cette action ne peut pas être annulée.</p>
                </div>
                <div class=\"mb-3\">
                    <img src=\"";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories_plats/" . CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 217))), "html", null, true);
            yield "\" 
                         alt=\"";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 218), "html", null, true);
            yield "\" 
                         class=\"rounded shadow-lg\"
                         style=\"width: 100px; height: 100px; object-fit: cover;\">
                </div>
            </div>
            <div class=\"modal-footer border-0 py-2\">
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <form action=\"";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_delete_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 227)]), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-image" . CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 228))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                        <i class=\"fas fa-trash me-2\"></i> Supprimer
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
            if (preview && preview.classList.contains('category-placeholder')) {
                // Remplacer le placeholder par une image
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-fluid rounded shadow-lg profile-preview';
                img.style = 'width: 150px; height: 150px; object-fit: cover; border: 4px solid #f8f9fa;';
                preview.parentNode.replaceChild(img, preview);
            } else if (preview) {
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
            dropdownAutoWidth: true,
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
    border-radius: 12px;
    overflow: hidden;
}
.card-hover:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.12) !important;
}
.bg-gradient-primary {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
}
.form-floating > label {
    padding-left: 2.5rem;
    font-size: 0.85rem;
}
.form-floating > .form-control,
.form-floating > .form-select {
    height: calc(3.2rem + 2px);
    line-height: 1.25;
    padding: 0.8rem 0.75rem 0.4rem 2.5rem;
    font-size: 0.9rem;
}
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-select:focus ~ label,
.form-floating > .form-select:not([value=\"\"]):not(:placeholder-shown) ~ label {
    transform: scale(.85) translateY(-0.7rem) translateX(0.15rem);
    color: #667eea;
    font-size: 0.75rem;
}
.form-floating > .form-control,
.form-floating > .form-select {
    border-radius: 8px;
    border: 2px solid #e0e0e0;
}
.form-floating > .form-control:focus,
.form-floating > .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.2);
}
.select2-container--bootstrap-5 .select2-selection {
    border: 2px solid #e0e0e0;
    border-radius: 8px !important;
    min-height: calc(3.2rem + 2px);
    padding: 0.8rem 0.75rem 0.4rem 2.5rem;
}
.select2-container--bootstrap-5 .select2-selection:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.2);
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
    line-height: 1.5;
    padding-left: 0;
    font-size: 0.9rem;
}
.form-check-input:checked {
    background-color: #667eea;
    border-color: #667eea;
}
.form-switch .form-check-input {
    width: 2.8em;
    height: 1.5em;
    margin-top: 0.2rem;
}
.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
    border: none;
    transition: all 0.3s ease;
}
.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
}
.btn-info {
    background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
    border: none;
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
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
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
    font-size: 0.85rem;
}
.modal-content {
    border-radius: 12px;
    border: none;
}
.badge {
    font-size: 0.75rem;
    font-weight: 500;
    letter-spacing: 0.3px;
}

/* ✅ RESPONSIVE */
@media (max-width: 576px) {
    .container-fluid {
        padding-left: 0.5rem !important;
        padding-right: 0.5rem !important;
    }
    
    .card-body {
        padding: 0.75rem !important;
    }
    
    .card-header {
        padding: 0.5rem 0.75rem !important;
    }
    
    .form-floating > .form-control,
    .form-floating > .form-select {
        height: calc(3rem + 2px);
        padding: 0.6rem 0.5rem 0.3rem 2rem;
        font-size: 0.85rem;
    }
    
    .form-floating > label {
        padding-left: 2rem;
        font-size: 0.8rem;
    }
    
    .form-floating > .form-control:focus ~ label,
    .form-floating > .form-control:not(:placeholder-shown) ~ label,
    .form-floating > .form-select:focus ~ label,
    .form-floating > .form-select:not([value=\"\"]):not(:placeholder-shown) ~ label {
        transform: scale(.85) translateY(-0.6rem) translateX(0.1rem);
        font-size: 0.7rem;
    }
    
    .select2-container--bootstrap-5 .select2-selection {
        min-height: calc(3rem + 2px);
        padding: 0.6rem 0.5rem 0.3rem 2rem;
    }
    
    .select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
        font-size: 0.85rem;
    }
    
    .btn-sm {
        font-size: 0.75rem;
        padding: 0.25rem 0.5rem;
    }
    
    .profile-preview,
    .category-placeholder {
        width: 120px !important;
        height: 120px !important;
    }
    
    .category-placeholder i {
        font-size: 3rem !important;
    }
    
    .badge {
        font-size: 0.6rem;
        padding: 0.15rem 0.3rem;
    }
    
    .small {
        font-size: 0.7rem !important;
    }
    
    .modal .modal-body {
        padding: 0.75rem !important;
    }
    
    .modal .modal-footer {
        padding: 0.5rem !important;
    }
    
    .modal .modal-header {
        padding: 0.5rem 0.75rem !important;
    }
}

@media (min-width: 577px) and (max-width: 768px) {
    .card-body {
        padding: 1rem !important;
    }
    
    .profile-preview,
    .category-placeholder {
        width: 140px !important;
        height: 140px !important;
    }
}

/* Désactiver hover sur mobile */
@media (max-width: 768px) {
    .card-hover:hover {
        transform: none !important;
    }
    .btn-primary:hover {
        transform: none !important;
    }
    .profile-preview:hover {
        transform: none !important;
    }
}
</style>";
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
        return array (  379 => 238,  366 => 228,  362 => 227,  350 => 218,  346 => 217,  328 => 201,  326 => 200,  320 => 197,  312 => 191,  304 => 187,  302 => 186,  296 => 183,  286 => 176,  269 => 162,  265 => 161,  259 => 158,  255 => 157,  252 => 156,  250 => 153,  227 => 133,  220 => 129,  217 => 128,  215 => 124,  203 => 115,  196 => 111,  193 => 110,  191 => 106,  179 => 97,  172 => 93,  169 => 92,  167 => 88,  158 => 81,  154 => 79,  150 => 77,  148 => 76,  131 => 62,  126 => 60,  117 => 54,  109 => 48,  107 => 44,  100 => 39,  93 => 34,  89 => 32,  78 => 23,  76 => 22,  70 => 19,  66 => 18,  63 => 17,  61 => 16,  45 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/category_recipe/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\category_recipe\\_form.html.twig");
    }
}
