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

/* admin/user/_form.html.twig */
class __TwigTemplate_ff3c7fb3b8431446e2aa6cfd510f1ea6 extends Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["bootstrap_5_layout.html.twig",         // line 5
$this->getTemplateName()], true);
        // line 7
        yield "
<div class=\"card-body p-5\">
    ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "
    
    <div class=\"row g-4\">
        <!-- Photo de profil -->
        <div class=\"col-12 mb-4\">
            <div class=\"text-center\">
                <div class=\"photo-upload-container\" id=\"photoPreviewContainer\">
                    <div class=\"photo-preview-wrapper\">
                        ";
        // line 18
        yield "                        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["edited_user"] ?? null), "photo", [], "any", false, false, false, 18) &&  !($context["is_new"] ?? null))) {
            // line 19
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, ($context["edited_user"] ?? null), "photo", [], "any", false, false, false, 19))), "html", null, true);
            yield "\" 
                                 alt=\"Photo de profil de ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["edited_user"] ?? null), "fullName", [], "any", false, false, false, 20), "html", null, true);
            yield "\" 
                                 class=\"photo-preview rounded-circle shadow\"
                                 id=\"photoPreview\">
                        ";
        } else {
            // line 24
            yield "                            <div class=\"photo-placeholder rounded-circle bg-gradient-primary text-white d-flex align-items-center justify-content-center shadow\"
                                 id=\"photoPlaceholder\">
                                <i class=\"bi bi-camera fs-1\"></i>
                            </div>
                        ";
        }
        // line 29
        yield "                        
                        <label for=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "photo", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30), "html", null, true);
        yield "\" class=\"photo-upload-label\">
                            <i class=\"bi bi-pencil-fill\"></i>
                        </label>
                    </div>
                    
                    ";
        // line 36
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["edited_user"] ?? null), "photo", [], "any", false, false, false, 36) &&  !($context["is_new"] ?? null))) {
            // line 37
            yield "                        <button type=\"button\" 
                                class=\"btn btn-sm btn-outline-danger mt-3\" 
                                data-bs-toggle=\"modal\" 
                                data-bs-target=\"#deletePhotoModal\">
                            <i class=\"bi bi-trash me-1\"></i>Supprimer la photo
                        </button>
                    ";
        }
        // line 44
        yield "                    
                    <div class=\"mt-3 text-muted small\">
                        <i class=\"bi bi-info-circle me-1\"></i>
                        Format: JPG, PNG, GIF, WebP (max. 2 Mo)
                    </div>
                </div>
                
                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "photo", [], "any", false, false, false, 51), 'widget');
        yield "
                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "photo", [], "any", false, false, false, 52), 'errors');
        yield "
            </div>
        </div>

        <!-- Informations personnelles -->
        <div class=\"col-md-6\">
            <div class=\"form-section\">
                <h5 class=\"section-title mb-4\">
                    <i class=\"bi bi-person-badge me-2 text-primary\"></i>
                    Informations personnelles
                </h5>
                
                <div class=\"mb-4\">
                    <label class=\"form-label fw-semibold\">
                        ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "full_name", [], "any", false, false, false, 66), "vars", [], "any", false, false, false, 66), "label", [], "any", false, false, false, 66), "html", null, true);
        yield " <span class=\"text-danger\">*</span>
                    </label>
                    <div class=\"input-wrapper\">
                        <i class=\"bi bi-person input-icon\"></i>
                        ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "full_name", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control form-control-lg ps-5", "placeholder" => "Nom et prénom"]]);
        // line 75
        yield "
                    </div>
                    ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "full_name", [], "any", false, false, false, 77), 'errors');
        yield "
                </div>

                <div class=\"mb-4\">
                    <label class=\"form-label fw-semibold\">
                        ";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 82), "vars", [], "any", false, false, false, 82), "label", [], "any", false, false, false, 82), "html", null, true);
        yield " <span class=\"text-danger\">*</span>
                    </label>
                    <div class=\"input-wrapper\">
                        <i class=\"bi bi-envelope input-icon\"></i>
                        ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => ("form-control form-control-lg ps-5" . (((($tmp =  !        // line 88
($context["can_edit_email"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" bg-light") : (""))), "placeholder" => "exemple@email.com", "readonly" =>  !        // line 90
($context["can_edit_email"] ?? null)]]);
        // line 92
        yield "
                    </div>
                    ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 94), 'errors');
        yield "
                    ";
        // line 95
        if ((($tmp =  !($context["can_edit_email"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 96
            yield "                        <small class=\"text-muted\">
                            <i class=\"bi bi-info-circle me-1\"></i>
                            L'email ne peut pas être modifié
                        </small>
                    ";
        }
        // line 101
        yield "                </div>

                <div class=\"mb-4\">
                    <label class=\"form-label fw-semibold\">";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 104), "vars", [], "any", false, false, false, 104), "label", [], "any", false, false, false, 104), "html", null, true);
        yield "</label>
                    <div class=\"input-wrapper\">
                        <i class=\"bi bi-telephone input-icon\"></i>
                        ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 107), 'widget', ["attr" => ["class" => "form-control form-control-lg ps-5", "placeholder" => "+212 6XX XX XX XX"]]);
        // line 112
        yield "
                    </div>
                    ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 114), 'errors');
        yield "
                </div>

                <div class=\"mb-4\">
                    <label class=\"form-label fw-semibold\">";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "employment_date", [], "any", false, false, false, 118), "vars", [], "any", false, false, false, 118), "label", [], "any", false, false, false, 118), "html", null, true);
        yield "</label>
                    <div class=\"input-wrapper\">
                        <i class=\"bi bi-calendar input-icon\"></i>
                        ";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "employment_date", [], "any", false, false, false, 121), 'widget', ["attr" => ["class" => "form-control form-control-lg ps-5", "placeholder" => "Date d'embauche"]]);
        // line 126
        yield "
                    </div>
                    ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "employment_date", [], "any", false, false, false, 128), 'errors');
        yield "
                </div>
            </div>
        </div>

        <!-- Informations du compte -->
        <div class=\"col-md-6\">
            <div class=\"form-section\">
                <h5 class=\"section-title mb-4\">
                    <i class=\"bi bi-shield-lock me-2 text-primary\"></i>
                    Informations du compte
                </h5>

                <div class=\"mb-4\">
                    <label class=\"form-label fw-semibold\">";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "roles", [], "any", false, false, false, 142), "vars", [], "any", false, false, false, 142), "label", [], "any", false, false, false, 142), "html", null, true);
        yield "</label>
                    <div class=\"role-select-wrapper\">
                        <i class=\"bi bi-person-badge input-icon\"></i>
                        ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "roles", [], "any", false, false, false, 145), 'widget', ["attr" => ["class" => ("form-select form-select-lg ps-5" . (((($tmp =  !        // line 147
($context["can_edit_role"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" bg-light") : (""))), "disabled" =>  !        // line 148
($context["can_edit_role"] ?? null)]]);
        // line 150
        yield "
                    </div>
                    ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "roles", [], "any", false, false, false, 152), 'errors');
        yield "
                    ";
        // line 153
        if ((($tmp =  !($context["can_edit_role"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 154
            yield "                        <small class=\"text-muted\">
                            <i class=\"bi bi-info-circle me-1\"></i>
                            Vous ne pouvez pas modifier votre propre rôle
                        </small>
                    ";
        }
        // line 159
        yield "                </div>

                ";
        // line 161
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", true, true, false, 161)) {
            // line 162
            yield "                    <div class=\"mb-4\">
                        <div class=\"form-check form-switch\">
                            ";
            // line 164
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 164), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch", "id" => "user_is_active"]]);
            // line 170
            yield "
                            <label class=\"form-check-label fw-semibold\" for=\"user_is_active\">
                                ";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 172), "vars", [], "any", false, false, false, 172), "label", [], "any", false, false, false, 172), "html", null, true);
            yield "
                            </label>
                        </div>
                        <small class=\"text-muted d-block mt-1\">
                            <i class=\"bi bi-info-circle me-1\"></i>
                            Désactiver pour bloquer temporairement l'accès
                        </small>
                    </div>
                ";
        }
        // line 181
        yield "
                <!-- SECTION INFORMATIVE SUR LE MOT DE PASSE -->
                <div class=\"password-info mt-4 p-3 bg-light rounded-3\">
                    <h6 class=\"mb-3 text-warning\">
                        <i class=\"bi bi-key me-2\"></i>
                        Mot de passe
                    </h6>

                    ";
        // line 189
        if ((($tmp = ($context["is_new"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 190
            yield "                        <div class=\"alert alert-info mb-0\">
                            <i class=\"bi bi-info-circle me-2\"></i>
                            Un mot de passe temporaire sera généré automatiquement et envoyé par email.
                        </div>
                    ";
        } else {
            // line 195
            yield "                        <div class=\"alert alert-warning mb-3\">
                            <i class=\"bi bi-shield-exclamation me-2\"></i>
                            Pour changer le mot de passe, utilisez l'option dédiée.
                        </div>
                        <div class=\"d-grid\">
                            ";
            // line 201
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_change_password", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["edited_user"] ?? null), "id", [], "any", false, false, false, 201)]), "html", null, true);
            yield "\" class=\"btn btn-outline-warning\">
                                <i class=\"bi bi-key me-2\"></i>
                                Changer le mot de passe
                            </a>
                        </div>
                    ";
        }
        // line 207
        yield "                </div>
            </div>
        </div>

        <!-- Boutons d'action -->
        <div class=\"col-12 mt-4\">
            <hr class=\"my-4\">
            <div class=\"d-flex gap-3 justify-content-end\">
                <a href=\"";
        // line 215
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-outline-secondary btn-lg px-5\">
                    <i class=\"bi bi-x me-2\"></i>Annuler
                </a>
                <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\">
                    <i class=\"bi bi-";
        // line 219
        yield (((($tmp = ($context["is_new"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("person-plus") : ("check-lg"));
        yield " me-2\"></i>
                    ";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), (((($tmp = ($context["is_new"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Créer l'utilisateur") : ("Mettre à jour")))) : ((((($tmp = ($context["is_new"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Créer l'utilisateur") : ("Mettre à jour")))), "html", null, true);
        yield "
                </button>
            </div>
        </div>
    </div>

    ";
        // line 226
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
</div>

<!-- Script pour la preview de l'image -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const photoInput = document.getElementById('";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "photo", [], "any", false, false, false, 232), "vars", [], "any", false, false, false, 232), "id", [], "any", false, false, false, 232), "html", null, true);
        yield "');
    const photoPreview = document.getElementById('photoPreview');
    const photoPlaceholder = document.getElementById('photoPlaceholder');
    
    if (photoInput) {
        photoInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    if (photoPreview) {
                        photoPreview.src = e.target.result;
                    } else if (photoPlaceholder) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'photo-preview rounded-circle shadow';
                        img.id = 'photoPreview';
                        photoPlaceholder.parentNode.replaceChild(img, photoPlaceholder);
                    }
                }
                reader.readAsDataURL(file);
            }
        });
    }
});
</script>

<style>
/* Votre CSS existant reste inchangé */
</style>

<style>
.photo-upload-container {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.photo-preview-wrapper {
    position: relative;
    display: inline-block;
}

.photo-preview, .photo-placeholder {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border: 4px solid #fff;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    transition: all 0.3s ease;
}

.photo-placeholder {
    background: linear-gradient(135deg, #667eea, #764ba2);
    font-size: 2rem;
}

.photo-preview:hover, .photo-placeholder:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
}

.photo-upload-label {
    position: absolute;
    bottom: 5px;
    right: 5px;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    border: 2px solid white;
    box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    transition: all 0.3s ease;
}

.photo-upload-label:hover {
    transform: scale(1.1);
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.5);
}

.form-section {
    background: #f8fafc;
    padding: 1.5rem;
    border-radius: 15px;
    height: 100%;
    transition: all 0.3s ease;
}

.form-section:hover {
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    transform: translateY(-2px);
}

.section-title {
    color: #2d3748;
    font-weight: 600;
    padding-bottom: 0.5rem;
    border-bottom: 2px solid #e2e8f0;
}

.input-wrapper {
    position: relative;
}

.input-icon {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #667eea;
    z-index: 10;
}

.form-control-lg, .form-select-lg {
    height: 55px;
    border-radius: 12px;
    border: 1px solid #e2e8f0;
    transition: all 0.3s ease;
}

.form-control-lg:focus, .form-select-lg:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

.role-select-wrapper {
    position: relative;
}

.form-check-input:checked {
    background-color: #48bb78;
    border-color: #48bb78;
}

.form-check-input:focus {
    border-color: #48bb78;
    box-shadow: 0 0 0 3px rgba(72, 187, 120, 0.1);
}

.password-info {
    background: #f8fafc;
    border-radius: 12px;
    border: 1px solid #e2e8f0;
}

.alert-info {
    background: linear-gradient(135deg, #e6f3ff 0%, #b8e1ff 100%);
    border: none;
    color: #1e4b8f;
    border-radius: 12px;
    padding: 1rem;
}

.alert-warning {
    background: #fff3cd;
    border: 1px solid #ffeeba;
    color: #856404;
    border-radius: 12px;
    padding: 1rem;
}

.btn-outline-warning {
    border: 2px solid #ffc107;
    color: #856404;
    font-weight: 500;
}

.btn-outline-warning:hover {
    background: linear-gradient(135deg, #ffc107, #e0a800);
    border-color: transparent;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(255, 193, 7, 0.3);
}

.btn {
    border-radius: 12px;
    transition: all 0.3s ease;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.btn-primary {
    background: linear-gradient(135deg, #667eea, #764ba2);
    border: none;
}

.btn-primary:hover {
    background: linear-gradient(135deg, #5a6fd6, #6a4391);
}

.btn-outline-secondary:hover {
    background: #6c757d;
    color: white;
}

@media (max-width: 768px) {
    .form-section {
        padding: 1rem;
    }
    
    .photo-preview, .photo-placeholder {
        width: 120px;
        height: 120px;
    }
    
    .btn-lg {
        padding: 0.5rem 1rem;
        font-size: 1rem;
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
        return "admin/user/_form.html.twig";
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
        return array (  370 => 232,  361 => 226,  352 => 220,  348 => 219,  341 => 215,  331 => 207,  321 => 201,  314 => 195,  307 => 190,  305 => 189,  295 => 181,  283 => 172,  279 => 170,  277 => 164,  273 => 162,  271 => 161,  267 => 159,  260 => 154,  258 => 153,  254 => 152,  250 => 150,  248 => 148,  247 => 147,  246 => 145,  240 => 142,  223 => 128,  219 => 126,  217 => 121,  211 => 118,  204 => 114,  200 => 112,  198 => 107,  192 => 104,  187 => 101,  180 => 96,  178 => 95,  174 => 94,  170 => 92,  168 => 90,  167 => 88,  166 => 86,  159 => 82,  151 => 77,  147 => 75,  145 => 70,  138 => 66,  121 => 52,  117 => 51,  108 => 44,  99 => 37,  96 => 36,  88 => 30,  85 => 29,  78 => 24,  71 => 20,  66 => 19,  63 => 18,  52 => 9,  48 => 7,  46 => 5,  45 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/user/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\user\\_form.html.twig");
    }
}
