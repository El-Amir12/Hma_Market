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
class __TwigTemplate_01ec9ef31bdd3e8a652ab34cfa7f7765 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/_form.html.twig"));

        // line 2
        yield "
";
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), ["bootstrap_5_layout.html.twig",         // line 5
$this->getTemplateName()], true);
        // line 7
        yield "
<div class=\"card-body p-3 p-md-5\">
    ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        yield "
    
    <div class=\"row g-3 g-md-4\">
        <!-- Photo de profil -->
        <div class=\"col-12 mb-3 mb-md-4\">
            <div class=\"text-center\">
                <div class=\"photo-upload-container\" id=\"photoPreviewContainer\">
                    <div class=\"photo-preview-wrapper\">
                        ";
        // line 17
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["edited_user"]) || array_key_exists("edited_user", $context) ? $context["edited_user"] : (function () { throw new RuntimeError('Variable "edited_user" does not exist.', 17, $this->source); })()), "photo", [], "any", false, false, false, 17) &&  !(isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 17, $this->source); })()))) {
            // line 18
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["edited_user"]) || array_key_exists("edited_user", $context) ? $context["edited_user"] : (function () { throw new RuntimeError('Variable "edited_user" does not exist.', 18, $this->source); })()), "photo", [], "any", false, false, false, 18))), "html", null, true);
            yield "\" 
                                 alt=\"Photo de profil de ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edited_user"]) || array_key_exists("edited_user", $context) ? $context["edited_user"] : (function () { throw new RuntimeError('Variable "edited_user" does not exist.', 19, $this->source); })()), "fullName", [], "any", false, false, false, 19), "html", null, true);
            yield "\" 
                                 class=\"photo-preview rounded-circle shadow\"
                                 id=\"photoPreview\">
                        ";
        } else {
            // line 23
            yield "                            <div class=\"photo-placeholder rounded-circle bg-gradient-primary text-white d-flex align-items-center justify-content-center shadow\"
                                 id=\"photoPlaceholder\">
                                <i class=\"bi bi-camera fs-1\"></i>
                            </div>
                        ";
        }
        // line 28
        yield "                        
                        <label for=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "photo", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "html", null, true);
        yield "\" class=\"photo-upload-label\">
                            <i class=\"bi bi-pencil-fill\"></i>
                        </label>
                    </div>
                    
                    ";
        // line 34
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["edited_user"]) || array_key_exists("edited_user", $context) ? $context["edited_user"] : (function () { throw new RuntimeError('Variable "edited_user" does not exist.', 34, $this->source); })()), "photo", [], "any", false, false, false, 34) &&  !(isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 34, $this->source); })()))) {
            // line 35
            yield "                        <button type=\"button\" 
                                class=\"btn btn-sm btn-outline-danger mt-2 mt-md-3\" 
                                data-bs-toggle=\"modal\" 
                                data-bs-target=\"#deletePhotoModal\">
                            <i class=\"bi bi-trash me-1\"></i>Supprimer la photo
                        </button>
                    ";
        }
        // line 42
        yield "                    
                    <div class=\"mt-2 mt-md-3 text-muted small\">
                        <i class=\"bi bi-info-circle me-1\"></i>
                        <span class=\"d-none d-sm-inline\">Format: JPG, PNG, GIF, WebP </span>
                        (max. 2 Mo)
                    </div>
                </div>
                
                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "photo", [], "any", false, false, false, 50), 'widget');
        yield "
                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "photo", [], "any", false, false, false, 51), 'errors');
        yield "
            </div>
        </div>

        <!-- Informations personnelles -->
        <div class=\"col-12 col-lg-6\">
            <div class=\"form-section p-3 p-md-4\">
                <h5 class=\"section-title mb-3 mb-md-4 fs-6 fs-md-5\">
                    <i class=\"bi bi-person-badge me-2 text-primary\"></i>
                    Informations personnelles
                </h5>
                
                <div class=\"mb-3 mb-md-4\">
                    <label class=\"form-label fw-semibold small\">
                        ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "full_name", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "label", [], "any", false, false, false, 65), "html", null, true);
        yield " <span class=\"text-danger\">*</span>
                    </label>
                    <div class=\"input-wrapper\">
                        <i class=\"bi bi-person input-icon\"></i>
                        ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "full_name", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control form-control-lg ps-5", "placeholder" => "Nom et prénom"]]);
        // line 74
        yield "
                    </div>
                    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "full_name", [], "any", false, false, false, 76), 'errors');
        yield "
                </div>

                <div class=\"mb-3 mb-md-4\">
                    <label class=\"form-label fw-semibold small\">
                        ";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "email", [], "any", false, false, false, 81), "vars", [], "any", false, false, false, 81), "label", [], "any", false, false, false, 81), "html", null, true);
        yield " <span class=\"text-danger\">*</span>
                    </label>
                    <div class=\"input-wrapper\">
                        <i class=\"bi bi-envelope input-icon\"></i>
                        ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "email", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => ("form-control form-control-lg ps-5" . (((($tmp =  !        // line 87
(isset($context["can_edit_email"]) || array_key_exists("can_edit_email", $context) ? $context["can_edit_email"] : (function () { throw new RuntimeError('Variable "can_edit_email" does not exist.', 87, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" bg-light") : (""))), "placeholder" => "exemple@email.com", "readonly" =>  !        // line 89
(isset($context["can_edit_email"]) || array_key_exists("can_edit_email", $context) ? $context["can_edit_email"] : (function () { throw new RuntimeError('Variable "can_edit_email" does not exist.', 89, $this->source); })())]]);
        // line 91
        yield "
                    </div>
                    ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "email", [], "any", false, false, false, 93), 'errors');
        yield "
                    ";
        // line 94
        if ((($tmp =  !(isset($context["can_edit_email"]) || array_key_exists("can_edit_email", $context) ? $context["can_edit_email"] : (function () { throw new RuntimeError('Variable "can_edit_email" does not exist.', 94, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 95
            yield "                        <small class=\"text-muted d-block mt-1\">
                            <i class=\"bi bi-info-circle me-1\"></i>
                            L'email ne peut pas être modifié
                        </small>
                    ";
        }
        // line 100
        yield "                </div>

                <div class=\"mb-3 mb-md-4\">
                    <label class=\"form-label fw-semibold small\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "phone", [], "any", false, false, false, 103), "vars", [], "any", false, false, false, 103), "label", [], "any", false, false, false, 103), "html", null, true);
        yield "</label>
                    <div class=\"input-wrapper\">
                        <i class=\"bi bi-telephone input-icon\"></i>
                        ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "phone", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-control form-control-lg ps-5", "placeholder" => "+229 01 XX XX XX XX"]]);
        // line 111
        yield "
                    </div>
                    ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "phone", [], "any", false, false, false, 113), 'errors');
        yield "
                </div>

                <div class=\"mb-3 mb-md-4\">
                    <label class=\"form-label fw-semibold small\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "employment_date", [], "any", false, false, false, 117), "vars", [], "any", false, false, false, 117), "label", [], "any", false, false, false, 117), "html", null, true);
        yield "</label>
                    <div class=\"input-wrapper\">
                        <i class=\"bi bi-calendar input-icon\"></i>
                        ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "employment_date", [], "any", false, false, false, 120), 'widget', ["attr" => ["class" => "form-control form-control-lg ps-5", "placeholder" => "Date d'embauche"]]);
        // line 125
        yield "
                    </div>
                    ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "employment_date", [], "any", false, false, false, 127), 'errors');
        yield "
                </div>
            </div>
        </div>

        <!-- Informations du compte -->
        <div class=\"col-12 col-lg-6\">
            <div class=\"form-section p-3 p-md-4\">
                <h5 class=\"section-title mb-3 mb-md-4 fs-6 fs-md-5\">
                    <i class=\"bi bi-shield-lock me-2 text-primary\"></i>
                    Informations du compte
                </h5>

                <div class=\"mb-3 mb-md-4\">
                    <label class=\"form-label fw-semibold small\">";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "roles", [], "any", false, false, false, 141), "vars", [], "any", false, false, false, 141), "label", [], "any", false, false, false, 141), "html", null, true);
        yield "</label>
                    <div class=\"role-select-wrapper\">
                        <i class=\"bi bi-person-badge input-icon\"></i>
                        ";
        // line 144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "roles", [], "any", false, false, false, 144), 'widget', ["attr" => ["class" => ("form-select form-select-lg ps-5" . (((($tmp =  !        // line 146
(isset($context["can_edit_role"]) || array_key_exists("can_edit_role", $context) ? $context["can_edit_role"] : (function () { throw new RuntimeError('Variable "can_edit_role" does not exist.', 146, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" bg-light") : (""))), "disabled" =>  !        // line 147
(isset($context["can_edit_role"]) || array_key_exists("can_edit_role", $context) ? $context["can_edit_role"] : (function () { throw new RuntimeError('Variable "can_edit_role" does not exist.', 147, $this->source); })())]]);
        // line 149
        yield "
                    </div>
                    ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "roles", [], "any", false, false, false, 151), 'errors');
        yield "
                    ";
        // line 152
        if ((($tmp =  !(isset($context["can_edit_role"]) || array_key_exists("can_edit_role", $context) ? $context["can_edit_role"] : (function () { throw new RuntimeError('Variable "can_edit_role" does not exist.', 152, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 153
            yield "                        <small class=\"text-muted d-block mt-1\">
                            <i class=\"bi bi-info-circle me-1\"></i>
                            Vous ne pouvez pas modifier votre propre rôle
                        </small>
                    ";
        }
        // line 158
        yield "                </div>

                ";
        // line 160
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", true, true, false, 160)) {
            // line 161
            yield "                    <div class=\"mb-3 mb-md-4\">
                        <div class=\"form-check form-switch\">
                            ";
            // line 163
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "is_active", [], "any", false, false, false, 163), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch", "id" => "user_is_active"]]);
            // line 169
            yield "
                            <label class=\"form-check-label fw-semibold small\" for=\"user_is_active\">
                                ";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "is_active", [], "any", false, false, false, 171), "vars", [], "any", false, false, false, 171), "label", [], "any", false, false, false, 171), "html", null, true);
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
        // line 180
        yield "
                <!-- SECTION INFORMATIVE SUR LE MOT DE PASSE -->
                <div class=\"password-info mt-3 mt-md-4 p-3 bg-light rounded-3\">
                    <h6 class=\"mb-2 mb-md-3 text-warning fs-6\">
                        <i class=\"bi bi-key me-2\"></i>
                        Mot de passe
                    </h6>

                    ";
        // line 188
        if ((($tmp = (isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 188, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 189
            yield "                        <div class=\"alert alert-info mb-0 small\">
                            <i class=\"bi bi-info-circle me-2\"></i>
                            <span class=\"d-none d-sm-inline\">Un mot de passe temporaire sera généré automatiquement et envoyé par email.</span>
                            <span class=\"d-inline d-sm-none\">Mot de passe temporaire envoyé par email.</span>
                        </div>
                    ";
        } else {
            // line 195
            yield "                        <div class=\"alert alert-warning mb-2 mb-md-3 small\">
                            <i class=\"bi bi-shield-exclamation me-2\"></i>
                            <span class=\"d-none d-sm-inline\">Pour changer le mot de passe, utilisez l'option dédiée.</span>
                            <span class=\"d-inline d-sm-none\">Changer le mot de passe via l'option dédiée.</span>
                        </div>
                        <div class=\"d-grid\">
                            <a href=\"";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_change_password", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["edited_user"]) || array_key_exists("edited_user", $context) ? $context["edited_user"] : (function () { throw new RuntimeError('Variable "edited_user" does not exist.', 201, $this->source); })()), "id", [], "any", false, false, false, 201)]), "html", null, true);
            yield "\" class=\"btn btn-outline-warning btn-sm btn-md\">
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
        <div class=\"col-12 mt-3 mt-md-4\">
            <hr class=\"my-3 my-md-4\">
            <div class=\"d-flex flex-column flex-sm-row gap-2 gap-md-3 justify-content-end\">
                <a href=\"";
        // line 215
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-outline-secondary btn-lg px-4 px-md-5 order-2 order-sm-1\">
                    <i class=\"bi bi-x me-2\"></i>Annuler
                </a>
                <button type=\"submit\" class=\"btn btn-primary btn-lg px-4 px-md-5 order-1 order-sm-2\">
                    <i class=\"bi bi-";
        // line 219
        yield (((($tmp = (isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 219, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("person-plus") : ("check-lg"));
        yield " me-2\"></i>
                    <span class=\"d-none d-sm-inline\">";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 220, $this->source); })()), (((($tmp = (isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 220, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Créer l'utilisateur") : ("Mettre à jour")))) : ((((($tmp = (isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 220, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Créer l'utilisateur") : ("Mettre à jour")))), "html", null, true);
        yield "</span>
                    <span class=\"d-inline d-sm-none\">";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 221, $this->source); })()), (((($tmp = (isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 221, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Créer") : ("Mettre à jour")))) : ((((($tmp = (isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 221, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Créer") : ("Mettre à jour")))), "html", null, true);
        yield "</span>
                </button>
            </div>
        </div>
    </div>

    ";
        // line 227
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 227, $this->source); })()), 'form_end');
        yield "
</div>

<!-- Script pour la preview de l'image -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const photoInput = document.getElementById('";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), "photo", [], "any", false, false, false, 233), "vars", [], "any", false, false, false, 233), "id", [], "any", false, false, false, 233), "html", null, true);
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
                        img.alt = 'Photo de profil';
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
/* Variables */
:root {
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --primary-light: #f0f0ff;
    --border-color: #e2e8f0;
    --shadow-sm: 0 2px 8px rgba(0,0,0,0.06);
    --shadow-md: 0 4px 20px rgba(0,0,0,0.08);
    --radius-sm: 10px;
    --radius-md: 15px;
    --radius-lg: 20px;
}

/* Photo upload */
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
    width: 130px;
    height: 130px;
    object-fit: cover;
    border: 4px solid #fff;
    box-shadow: var(--shadow-md);
    transition: all 0.3s ease;
}

@media (min-width: 768px) {
    .photo-preview, .photo-placeholder {
        width: 150px;
        height: 150px;
    }
}

.photo-placeholder {
    background: var(--primary-gradient);
    font-size: 2rem;
}

.photo-preview:hover, .photo-placeholder:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 30px rgba(102, 126, 234, 0.4);
}

.photo-upload-label {
    position: absolute;
    bottom: 5px;
    right: 5px;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: var(--primary-gradient);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    border: 2px solid white;
    box-shadow: var(--shadow-sm);
    transition: all 0.3s ease;
    font-size: 0.8rem;
}

@media (min-width: 768px) {
    .photo-upload-label {
        width: 40px;
        height: 40px;
        font-size: 1rem;
    }
}

.photo-upload-label:hover {
    transform: scale(1.1);
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.5);
}

/* Form sections */
.form-section {
    background: #f8fafc;
    padding: 1rem;
    border-radius: var(--radius-sm);
    height: 100%;
    transition: all 0.3s ease;
    border: 1px solid transparent;
}

@media (min-width: 768px) {
    .form-section {
        padding: 1.5rem;
        border-radius: var(--radius-md);
    }
}

.form-section:hover {
    box-shadow: var(--shadow-md);
    border-color: var(--border-color);
}

.section-title {
    color: #2d3748;
    font-weight: 600;
    padding-bottom: 0.5rem;
    border-bottom: 2px solid var(--border-color);
}

/* Inputs */
.input-wrapper {
    position: relative;
}

.input-icon {
    position: absolute;
    left: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: #667eea;
    z-index: 10;
    font-size: 0.9rem;
}

@media (min-width: 768px) {
    .input-icon {
        left: 15px;
        font-size: 1rem;
    }
}

.form-control-lg, .form-select-lg {
    height: 48px;
    border-radius: var(--radius-sm);
    border: 1px solid var(--border-color);
    transition: all 0.3s ease;
    font-size: 0.9rem;
    padding-left: 2.5rem;
}

@media (min-width: 768px) {
    .form-control-lg, .form-select-lg {
        height: 55px;
        border-radius: var(--radius-md);
        font-size: 1rem;
        padding-left: 3rem;
    }
}

.form-control-lg:focus, .form-select-lg:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

.form-control-lg.bg-light, .form-select-lg.bg-light {
    background-color: #f1f3f5 !important;
}

/* Switches */
.form-check-input:checked {
    background-color: #48bb78;
    border-color: #48bb78;
}

.form-check-input:focus {
    border-color: #48bb78;
    box-shadow: 0 0 0 3px rgba(72, 187, 120, 0.1);
}

/* Password info */
.password-info {
    background: #f8fafc;
    border-radius: var(--radius-sm);
    border: 1px solid var(--border-color);
}

@media (min-width: 768px) {
    .password-info {
        border-radius: var(--radius-md);
    }
}

.alert-info {
    background: linear-gradient(135deg, #e6f3ff 0%, #b8e1ff 100%);
    border: none;
    color: #1e4b8f;
    border-radius: var(--radius-sm);
    padding: 0.75rem;
}

@media (min-width: 768px) {
    .alert-info {
        padding: 1rem;
        border-radius: var(--radius-md);
    }
}

.alert-warning {
    background: #fff3cd;
    border: 1px solid #ffeeba;
    color: #856404;
    border-radius: var(--radius-sm);
    padding: 0.75rem;
}

@media (min-width: 768px) {
    .alert-warning {
        padding: 1rem;
        border-radius: var(--radius-md);
    }
}

/* Buttons */
.btn {
    border-radius: var(--radius-sm);
    transition: all 0.3s ease;
    font-weight: 500;
}

@media (min-width: 768px) {
    .btn {
        border-radius: var(--radius-md);
    }
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.btn-primary {
    background: var(--primary-gradient);
    border: none;
}

.btn-primary:hover {
    background: linear-gradient(135deg, #5a6fd6, #6a4391);
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

.btn-outline-secondary:hover {
    background: #6c757d;
    color: white;
}

/* Responsive adjustments */
@media (max-width: 576px) {
    .card-body {
        padding: 0.75rem !important;
    }
    
    .form-label {
        font-size: 0.85rem;
    }
    
    .form-control-lg, .form-select-lg {
        font-size: 0.85rem;
        padding: 0.35rem 0.75rem 0.35rem 2.2rem;
        height: 44px;
    }
    
    .input-icon {
        font-size: 0.8rem;
        left: 10px;
    }
    
    .btn-lg {
        padding: 0.4rem 1rem;
        font-size: 0.9rem;
    }
    
    .section-title {
        font-size: 0.95rem;
    }
    
    .photo-preview, .photo-placeholder {
        width: 110px;
        height: 110px;
    }
    
    .photo-upload-label {
        width: 32px;
        height: 32px;
        font-size: 0.7rem;
    }
}

@media (min-width: 577px) and (max-width: 768px) {
    .card-body {
        padding: 1.25rem !important;
    }
    
    .photo-preview, .photo-placeholder {
        width: 130px;
        height: 130px;
    }
}

/* Scrollbar */
.form-control::-webkit-scrollbar {
    width: 4px;
}

.form-control::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 10px;
}

.form-control::-webkit-scrollbar-thumb {
    background: #667eea;
    border-radius: 10px;
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
        return array (  380 => 233,  371 => 227,  362 => 221,  358 => 220,  354 => 219,  347 => 215,  337 => 207,  328 => 201,  320 => 195,  312 => 189,  310 => 188,  300 => 180,  288 => 171,  284 => 169,  282 => 163,  278 => 161,  276 => 160,  272 => 158,  265 => 153,  263 => 152,  259 => 151,  255 => 149,  253 => 147,  252 => 146,  251 => 144,  245 => 141,  228 => 127,  224 => 125,  222 => 120,  216 => 117,  209 => 113,  205 => 111,  203 => 106,  197 => 103,  192 => 100,  185 => 95,  183 => 94,  179 => 93,  175 => 91,  173 => 89,  172 => 87,  171 => 85,  164 => 81,  156 => 76,  152 => 74,  150 => 69,  143 => 65,  126 => 51,  122 => 50,  112 => 42,  103 => 35,  101 => 34,  93 => 29,  90 => 28,  83 => 23,  76 => 19,  71 => 18,  69 => 17,  58 => 9,  54 => 7,  52 => 5,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/user/_form.html.twig #}

{% form_theme form with [
    'bootstrap_5_layout.html.twig',
    _self
] %}

<div class=\"card-body p-3 p-md-5\">
    {{ form_start(form) }}
    
    <div class=\"row g-3 g-md-4\">
        <!-- Photo de profil -->
        <div class=\"col-12 mb-3 mb-md-4\">
            <div class=\"text-center\">
                <div class=\"photo-upload-container\" id=\"photoPreviewContainer\">
                    <div class=\"photo-preview-wrapper\">
                        {% if edited_user.photo and not is_new %}
                            <img src=\"{{ asset('uploads/users/' ~ edited_user.photo) }}\" 
                                 alt=\"Photo de profil de {{ edited_user.fullName }}\" 
                                 class=\"photo-preview rounded-circle shadow\"
                                 id=\"photoPreview\">
                        {% else %}
                            <div class=\"photo-placeholder rounded-circle bg-gradient-primary text-white d-flex align-items-center justify-content-center shadow\"
                                 id=\"photoPlaceholder\">
                                <i class=\"bi bi-camera fs-1\"></i>
                            </div>
                        {% endif %}
                        
                        <label for=\"{{ form.photo.vars.id }}\" class=\"photo-upload-label\">
                            <i class=\"bi bi-pencil-fill\"></i>
                        </label>
                    </div>
                    
                    {% if edited_user.photo and not is_new %}
                        <button type=\"button\" 
                                class=\"btn btn-sm btn-outline-danger mt-2 mt-md-3\" 
                                data-bs-toggle=\"modal\" 
                                data-bs-target=\"#deletePhotoModal\">
                            <i class=\"bi bi-trash me-1\"></i>Supprimer la photo
                        </button>
                    {% endif %}
                    
                    <div class=\"mt-2 mt-md-3 text-muted small\">
                        <i class=\"bi bi-info-circle me-1\"></i>
                        <span class=\"d-none d-sm-inline\">Format: JPG, PNG, GIF, WebP </span>
                        (max. 2 Mo)
                    </div>
                </div>
                
                {{ form_widget(form.photo) }}
                {{ form_errors(form.photo) }}
            </div>
        </div>

        <!-- Informations personnelles -->
        <div class=\"col-12 col-lg-6\">
            <div class=\"form-section p-3 p-md-4\">
                <h5 class=\"section-title mb-3 mb-md-4 fs-6 fs-md-5\">
                    <i class=\"bi bi-person-badge me-2 text-primary\"></i>
                    Informations personnelles
                </h5>
                
                <div class=\"mb-3 mb-md-4\">
                    <label class=\"form-label fw-semibold small\">
                        {{ form.full_name.vars.label }} <span class=\"text-danger\">*</span>
                    </label>
                    <div class=\"input-wrapper\">
                        <i class=\"bi bi-person input-icon\"></i>
                        {{ form_widget(form.full_name, {
                            'attr': {
                                'class': 'form-control form-control-lg ps-5',
                                'placeholder': 'Nom et prénom'
                            }
                        }) }}
                    </div>
                    {{ form_errors(form.full_name) }}
                </div>

                <div class=\"mb-3 mb-md-4\">
                    <label class=\"form-label fw-semibold small\">
                        {{ form.email.vars.label }} <span class=\"text-danger\">*</span>
                    </label>
                    <div class=\"input-wrapper\">
                        <i class=\"bi bi-envelope input-icon\"></i>
                        {{ form_widget(form.email, {
                            'attr': {
                                'class': 'form-control form-control-lg ps-5' ~ (not can_edit_email ? ' bg-light' : ''),
                                'placeholder': 'exemple@email.com',
                                'readonly': not can_edit_email
                            }
                        }) }}
                    </div>
                    {{ form_errors(form.email) }}
                    {% if not can_edit_email %}
                        <small class=\"text-muted d-block mt-1\">
                            <i class=\"bi bi-info-circle me-1\"></i>
                            L'email ne peut pas être modifié
                        </small>
                    {% endif %}
                </div>

                <div class=\"mb-3 mb-md-4\">
                    <label class=\"form-label fw-semibold small\">{{ form.phone.vars.label }}</label>
                    <div class=\"input-wrapper\">
                        <i class=\"bi bi-telephone input-icon\"></i>
                        {{ form_widget(form.phone, {
                            'attr': {
                                'class': 'form-control form-control-lg ps-5',
                                'placeholder': '+229 01 XX XX XX XX'
                            }
                        }) }}
                    </div>
                    {{ form_errors(form.phone) }}
                </div>

                <div class=\"mb-3 mb-md-4\">
                    <label class=\"form-label fw-semibold small\">{{ form.employment_date.vars.label }}</label>
                    <div class=\"input-wrapper\">
                        <i class=\"bi bi-calendar input-icon\"></i>
                        {{ form_widget(form.employment_date, {
                            'attr': {
                                'class': 'form-control form-control-lg ps-5',
                                'placeholder': \"Date d'embauche\"
                            }
                        }) }}
                    </div>
                    {{ form_errors(form.employment_date) }}
                </div>
            </div>
        </div>

        <!-- Informations du compte -->
        <div class=\"col-12 col-lg-6\">
            <div class=\"form-section p-3 p-md-4\">
                <h5 class=\"section-title mb-3 mb-md-4 fs-6 fs-md-5\">
                    <i class=\"bi bi-shield-lock me-2 text-primary\"></i>
                    Informations du compte
                </h5>

                <div class=\"mb-3 mb-md-4\">
                    <label class=\"form-label fw-semibold small\">{{ form.roles.vars.label }}</label>
                    <div class=\"role-select-wrapper\">
                        <i class=\"bi bi-person-badge input-icon\"></i>
                        {{ form_widget(form.roles, {
                            'attr': {
                                'class': 'form-select form-select-lg ps-5' ~ (not can_edit_role ? ' bg-light' : ''),
                                'disabled': not can_edit_role
                            }
                        }) }}
                    </div>
                    {{ form_errors(form.roles) }}
                    {% if not can_edit_role %}
                        <small class=\"text-muted d-block mt-1\">
                            <i class=\"bi bi-info-circle me-1\"></i>
                            Vous ne pouvez pas modifier votre propre rôle
                        </small>
                    {% endif %}
                </div>

                {% if form.is_active is defined %}
                    <div class=\"mb-3 mb-md-4\">
                        <div class=\"form-check form-switch\">
                            {{ form_widget(form.is_active, {
                                'attr': {
                                    'class': 'form-check-input',
                                    'role': 'switch',
                                    'id': 'user_is_active'
                                }
                            }) }}
                            <label class=\"form-check-label fw-semibold small\" for=\"user_is_active\">
                                {{ form.is_active.vars.label }}
                            </label>
                        </div>
                        <small class=\"text-muted d-block mt-1\">
                            <i class=\"bi bi-info-circle me-1\"></i>
                            Désactiver pour bloquer temporairement l'accès
                        </small>
                    </div>
                {% endif %}

                <!-- SECTION INFORMATIVE SUR LE MOT DE PASSE -->
                <div class=\"password-info mt-3 mt-md-4 p-3 bg-light rounded-3\">
                    <h6 class=\"mb-2 mb-md-3 text-warning fs-6\">
                        <i class=\"bi bi-key me-2\"></i>
                        Mot de passe
                    </h6>

                    {% if is_new %}
                        <div class=\"alert alert-info mb-0 small\">
                            <i class=\"bi bi-info-circle me-2\"></i>
                            <span class=\"d-none d-sm-inline\">Un mot de passe temporaire sera généré automatiquement et envoyé par email.</span>
                            <span class=\"d-inline d-sm-none\">Mot de passe temporaire envoyé par email.</span>
                        </div>
                    {% else %}
                        <div class=\"alert alert-warning mb-2 mb-md-3 small\">
                            <i class=\"bi bi-shield-exclamation me-2\"></i>
                            <span class=\"d-none d-sm-inline\">Pour changer le mot de passe, utilisez l'option dédiée.</span>
                            <span class=\"d-inline d-sm-none\">Changer le mot de passe via l'option dédiée.</span>
                        </div>
                        <div class=\"d-grid\">
                            <a href=\"{{ path('app_change_password', {'id': edited_user.id}) }}\" class=\"btn btn-outline-warning btn-sm btn-md\">
                                <i class=\"bi bi-key me-2\"></i>
                                Changer le mot de passe
                            </a>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>

        <!-- Boutons d'action -->
        <div class=\"col-12 mt-3 mt-md-4\">
            <hr class=\"my-3 my-md-4\">
            <div class=\"d-flex flex-column flex-sm-row gap-2 gap-md-3 justify-content-end\">
                <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-outline-secondary btn-lg px-4 px-md-5 order-2 order-sm-1\">
                    <i class=\"bi bi-x me-2\"></i>Annuler
                </a>
                <button type=\"submit\" class=\"btn btn-primary btn-lg px-4 px-md-5 order-1 order-sm-2\">
                    <i class=\"bi bi-{{ is_new ? 'person-plus' : 'check-lg' }} me-2\"></i>
                    <span class=\"d-none d-sm-inline\">{{ button_label|default(is_new ? 'Créer l\\'utilisateur' : 'Mettre à jour') }}</span>
                    <span class=\"d-inline d-sm-none\">{{ button_label|default(is_new ? 'Créer' : 'Mettre à jour') }}</span>
                </button>
            </div>
        </div>
    </div>

    {{ form_end(form) }}
</div>

<!-- Script pour la preview de l'image -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const photoInput = document.getElementById('{{ form.photo.vars.id }}');
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
                        img.alt = 'Photo de profil';
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
/* Variables */
:root {
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --primary-light: #f0f0ff;
    --border-color: #e2e8f0;
    --shadow-sm: 0 2px 8px rgba(0,0,0,0.06);
    --shadow-md: 0 4px 20px rgba(0,0,0,0.08);
    --radius-sm: 10px;
    --radius-md: 15px;
    --radius-lg: 20px;
}

/* Photo upload */
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
    width: 130px;
    height: 130px;
    object-fit: cover;
    border: 4px solid #fff;
    box-shadow: var(--shadow-md);
    transition: all 0.3s ease;
}

@media (min-width: 768px) {
    .photo-preview, .photo-placeholder {
        width: 150px;
        height: 150px;
    }
}

.photo-placeholder {
    background: var(--primary-gradient);
    font-size: 2rem;
}

.photo-preview:hover, .photo-placeholder:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 30px rgba(102, 126, 234, 0.4);
}

.photo-upload-label {
    position: absolute;
    bottom: 5px;
    right: 5px;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: var(--primary-gradient);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    border: 2px solid white;
    box-shadow: var(--shadow-sm);
    transition: all 0.3s ease;
    font-size: 0.8rem;
}

@media (min-width: 768px) {
    .photo-upload-label {
        width: 40px;
        height: 40px;
        font-size: 1rem;
    }
}

.photo-upload-label:hover {
    transform: scale(1.1);
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.5);
}

/* Form sections */
.form-section {
    background: #f8fafc;
    padding: 1rem;
    border-radius: var(--radius-sm);
    height: 100%;
    transition: all 0.3s ease;
    border: 1px solid transparent;
}

@media (min-width: 768px) {
    .form-section {
        padding: 1.5rem;
        border-radius: var(--radius-md);
    }
}

.form-section:hover {
    box-shadow: var(--shadow-md);
    border-color: var(--border-color);
}

.section-title {
    color: #2d3748;
    font-weight: 600;
    padding-bottom: 0.5rem;
    border-bottom: 2px solid var(--border-color);
}

/* Inputs */
.input-wrapper {
    position: relative;
}

.input-icon {
    position: absolute;
    left: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: #667eea;
    z-index: 10;
    font-size: 0.9rem;
}

@media (min-width: 768px) {
    .input-icon {
        left: 15px;
        font-size: 1rem;
    }
}

.form-control-lg, .form-select-lg {
    height: 48px;
    border-radius: var(--radius-sm);
    border: 1px solid var(--border-color);
    transition: all 0.3s ease;
    font-size: 0.9rem;
    padding-left: 2.5rem;
}

@media (min-width: 768px) {
    .form-control-lg, .form-select-lg {
        height: 55px;
        border-radius: var(--radius-md);
        font-size: 1rem;
        padding-left: 3rem;
    }
}

.form-control-lg:focus, .form-select-lg:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

.form-control-lg.bg-light, .form-select-lg.bg-light {
    background-color: #f1f3f5 !important;
}

/* Switches */
.form-check-input:checked {
    background-color: #48bb78;
    border-color: #48bb78;
}

.form-check-input:focus {
    border-color: #48bb78;
    box-shadow: 0 0 0 3px rgba(72, 187, 120, 0.1);
}

/* Password info */
.password-info {
    background: #f8fafc;
    border-radius: var(--radius-sm);
    border: 1px solid var(--border-color);
}

@media (min-width: 768px) {
    .password-info {
        border-radius: var(--radius-md);
    }
}

.alert-info {
    background: linear-gradient(135deg, #e6f3ff 0%, #b8e1ff 100%);
    border: none;
    color: #1e4b8f;
    border-radius: var(--radius-sm);
    padding: 0.75rem;
}

@media (min-width: 768px) {
    .alert-info {
        padding: 1rem;
        border-radius: var(--radius-md);
    }
}

.alert-warning {
    background: #fff3cd;
    border: 1px solid #ffeeba;
    color: #856404;
    border-radius: var(--radius-sm);
    padding: 0.75rem;
}

@media (min-width: 768px) {
    .alert-warning {
        padding: 1rem;
        border-radius: var(--radius-md);
    }
}

/* Buttons */
.btn {
    border-radius: var(--radius-sm);
    transition: all 0.3s ease;
    font-weight: 500;
}

@media (min-width: 768px) {
    .btn {
        border-radius: var(--radius-md);
    }
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.btn-primary {
    background: var(--primary-gradient);
    border: none;
}

.btn-primary:hover {
    background: linear-gradient(135deg, #5a6fd6, #6a4391);
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

.btn-outline-secondary:hover {
    background: #6c757d;
    color: white;
}

/* Responsive adjustments */
@media (max-width: 576px) {
    .card-body {
        padding: 0.75rem !important;
    }
    
    .form-label {
        font-size: 0.85rem;
    }
    
    .form-control-lg, .form-select-lg {
        font-size: 0.85rem;
        padding: 0.35rem 0.75rem 0.35rem 2.2rem;
        height: 44px;
    }
    
    .input-icon {
        font-size: 0.8rem;
        left: 10px;
    }
    
    .btn-lg {
        padding: 0.4rem 1rem;
        font-size: 0.9rem;
    }
    
    .section-title {
        font-size: 0.95rem;
    }
    
    .photo-preview, .photo-placeholder {
        width: 110px;
        height: 110px;
    }
    
    .photo-upload-label {
        width: 32px;
        height: 32px;
        font-size: 0.7rem;
    }
}

@media (min-width: 577px) and (max-width: 768px) {
    .card-body {
        padding: 1.25rem !important;
    }
    
    .photo-preview, .photo-placeholder {
        width: 130px;
        height: 130px;
    }
}

/* Scrollbar */
.form-control::-webkit-scrollbar {
    width: 4px;
}

.form-control::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 10px;
}

.form-control::-webkit-scrollbar-thumb {
    background: #667eea;
    border-radius: 10px;
}
</style>", "admin/user/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\user\\_form.html.twig");
    }
}
