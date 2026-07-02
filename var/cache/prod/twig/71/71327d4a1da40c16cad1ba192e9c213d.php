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
class __TwigTemplate_57ca92893288ef123273882a0131c568 extends Template
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
        // line 2
        yield "
";
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["bootstrap_5_layout.html.twig"], true);
        // line 4
        yield "
<div class=\"container-fluid px-4\">
    ";
        // line 6
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "                            <div class=\"position-relative mx-auto\" style=\"width: 200px; height: 200px;\">
                                <img src=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 22))), "html", null, true);
            yield "\"
                                     alt=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 23), "html", null, true);
            yield "\"
                                     class=\"img-fluid rounded shadow-lg profile-preview\"
                                     style=\"width: 100%; height: 100%; object-fit: cover; border: 5px solid #f8f9fa;\">
                                ";
            // line 26
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", true, true, false, 26) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 26)))) {
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control", "onchange" => "previewCategoryImage(this)", "accept" => "image/*"]]);
        // line 52
        yield "
                            <div class=\"form-text mt-2\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Formats acceptés : JPG, PNG, GIF, WebP. Taille max : 2M
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 58), 'errors');
        yield "
                            </div>
                        </div>

                        <!-- Bouton de sélection stylé -->
                        <div class=\"mt-3\">
                            <label for=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64), "html", null, true);
        yield "\" class=\"btn btn-outline-primary w-100\">
                                <i class=\"fas fa-cloud-upload-alt me-2\"></i>
                                ";
        // line 66
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Changer l'image") : ("Choisir une image"));
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", true, true, false, 80) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 80)))) {
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 96
        yield "
                                <label for=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "id", [], "any", false, false, false, 97), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-tag me-1\"></i> Nom de la catégorie *
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 101), 'errors');
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "style" => "height: 120px"]]);
        // line 114
        yield "
                                <label for=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "id", [], "any", false, false, false, 115), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-align-left me-1\"></i> Description
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 119), 'errors');
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 128), 'widget', ["attr" => ["class" => "form-select select2-category", "placeholder" => " "]]);
        // line 131
        yield "
                                <label for=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 132), "vars", [], "any", false, false, false, 132), "id", [], "any", false, false, false, 132), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-sitemap me-1\"></i> Catégorie parente
                                </label>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 136), 'errors');
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
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 156), "vars", [], "any", false, false, false, 156), "data", [], "any", false, false, false, 156)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\" id=\"status-badge\">
                                    ";
        // line 157
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 157), "vars", [], "any", false, false, false, 157), "data", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIVE") : ("INACTIVE"));
        yield "
                                </span>
                            </div>
                            <div class=\"form-check form-switch\">
                                ";
        // line 161
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 161), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 164
        yield "
                                <label class=\"form-check-label\" for=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 165), "vars", [], "any", false, false, false, 165), "id", [], "any", false, false, false, 165), "html", null, true);
        yield "\" id=\"status-label\">
                                    ";
        // line 166
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 166), "vars", [], "any", false, false, false, 166), "data", [], "any", false, false, false, 166)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Catégorie active") : ("Catégorie inactive"));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
                            </button>
                            ";
        // line 188
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", true, true, false, 188) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 188)))) {
            // line 189
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 189)]), "html", null, true);
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
</div>

<!-- Modal pour supprimer l'image -->
";
        // line 204
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", true, true, false, 204) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 204))) && CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 204))) {
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 221))), "html", null, true);
            yield "\"
                         alt=\"";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 222), "html", null, true);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_delete_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 231)]), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-image" . CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 232))), "html", null, true);
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
        yield from [];
    }

    // line 243
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 284), "vars", [], "any", false, false, false, 284), "id", [], "any", false, false, false, 284), "html", null, true);
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
        yield from [];
    }

    // line 311
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        return array (  489 => 312,  482 => 311,  451 => 284,  409 => 244,  402 => 243,  397 => 311,  394 => 310,  392 => 243,  389 => 242,  376 => 232,  372 => 231,  360 => 222,  356 => 221,  338 => 205,  336 => 204,  329 => 200,  320 => 193,  312 => 189,  310 => 188,  305 => 186,  296 => 180,  279 => 166,  275 => 165,  272 => 164,  270 => 161,  263 => 157,  259 => 156,  236 => 136,  229 => 132,  226 => 131,  224 => 128,  212 => 119,  205 => 115,  202 => 114,  200 => 110,  188 => 101,  181 => 97,  178 => 96,  176 => 92,  167 => 85,  163 => 83,  159 => 81,  157 => 80,  140 => 66,  135 => 64,  126 => 58,  118 => 52,  116 => 48,  109 => 43,  102 => 38,  98 => 36,  87 => 27,  85 => 26,  79 => 23,  75 => 22,  72 => 21,  70 => 20,  53 => 6,  49 => 4,  47 => 3,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/category/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\category\\_form.html.twig");
    }
}
