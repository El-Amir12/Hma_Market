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
class __TwigTemplate_0004d278c935428e4de5404e11270098 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "
<div class=\"row g-4\">
    <!-- Carte Photo de profil -->
    <div class=\"col-lg-4\">
        <div class=\"card shadow-lg border-0 h-100\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-image me-2\"></i>Photo de profil
                </h5>
            </div>
            <div class=\"card-body text-center d-flex flex-column\">
                <!-- Preview de la photo -->
                <div class=\"profile-photo-preview mb-4 flex-grow-1 d-flex flex-column justify-content-center\">
                    ";
        // line 14
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "photo", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "                        <div class=\"position-relative mx-auto\" style=\"width: 200px; height: 200px;\">
                            <img src=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "photo", [], "any", false, false, false, 16))), "html", null, true);
            yield "\" 
                                 alt=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "fullName", [], "any", false, false, false, 17), "html", null, true);
            yield "\" 
                                 class=\"img-fluid rounded-circle shadow profile-preview\"
                                 style=\"width: 100%; height: 100%; object-fit: cover; border: 5px solid #f8f9fa;\">
                            ";
            // line 20
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "vars", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20) != "new")) {
                // line 21
                yield "                                <button type=\"button\" 
                                        class=\"btn btn-danger btn-sm position-absolute rounded-circle shadow\"
                                        style=\"bottom: 10px; right: 10px; width: 36px; height: 36px;\"
                                        data-bs-toggle=\"modal\" 
                                        data-bs-target=\"#deletePhotoModal\"
                                        title=\"Supprimer la photo\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            ";
            }
            // line 30
            yield "                        </div>
                    ";
        } else {
            // line 32
            yield "                        <div class=\"profile-placeholder rounded-circle d-flex align-items-center justify-content-center mx-auto bg-gradient-primary text-white shadow-lg\"
                             style=\"width: 200px; height: 200px; border: 5px solid #f8f9fa;\">
                            <i class=\"fas fa-user fa-5x\"></i>
                        </div>
                    ";
        }
        // line 37
        yield "                </div>
                
                <!-- Champ de téléchargement de photo -->
                <div class=\"mt-auto\">
                    <div class=\"file-upload-wrapper\">
                        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "photo", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control", "onchange" => "previewPhoto(this)", "accept" => "image/*"]]);
        // line 46
        yield "
                        <div class=\"form-text mt-2\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Formats acceptés : JPG, PNG, GIF, WebP. Taille max : 2MB
                        </div>
                        <div class=\"invalid-feedback d-block\">
                            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "photo", [], "any", false, false, false, 52), 'errors');
        yield "
                        </div>
                    </div>
                    
                    <!-- Bouton de sélection stylé -->
                    <div class=\"mt-3\">
                        <label for=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "photo", [], "any", false, false, false, 58), "vars", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58), "html", null, true);
        yield "\" class=\"btn btn-outline-primary w-100\">
                            <i class=\"fas fa-cloud-upload-alt me-2\"></i>
                            ";
        // line 60
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "photo", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Changer la photo") : ("Choisir une photo"));
        yield "
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Carte Informations personnelles -->
    <div class=\"col-lg-8\">
        <div class=\"card shadow-lg border-0 h-100\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-user-edit me-2\"></i>
                    ";
        // line 74
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "vars", [], "any", false, false, false, 74), "name", [], "any", false, false, false, 74) == "new")) ? ("Nouvel utilisateur") : ("Modifier l'utilisateur"));
        yield "
                </h5>
            </div>
            <div class=\"card-body\">
                <!-- Informations de base -->
                <div class=\"row g-3\">
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "full_name", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "name"]]);
        // line 86
        yield "
                            <label for=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "full_name", [], "any", false, false, false, 87), "vars", [], "any", false, false, false, 87), "id", [], "any", false, false, false, 87), "html", null, true);
        yield "\">
                                <i class=\"fas fa-user me-1\"></i> Nom complet
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "full_name", [], "any", false, false, false, 91), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "email", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "email"]]);
        // line 102
        yield "
                            <label for=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "email", [], "any", false, false, false, 103), "vars", [], "any", false, false, false, 103), "id", [], "any", false, false, false, 103), "html", null, true);
        yield "\">
                                <i class=\"fas fa-envelope me-1\"></i> Adresse email
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "email", [], "any", false, false, false, 107), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"row g-3 mt-2\">
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "phone", [], "any", false, false, false, 116), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "tel"]]);
        // line 120
        yield "
                            <label for=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "phone", [], "any", false, false, false, 121), "vars", [], "any", false, false, false, 121), "id", [], "any", false, false, false, 121), "html", null, true);
        yield "\">
                                <i class=\"fas fa-phone me-1\"></i> Numéro de téléphone
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "phone", [], "any", false, false, false, 125), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "roles", [], "any", false, false, false, 132), 'widget', ["attr" => ["class" => "form-select", "placeholder" => " "]]);
        // line 135
        yield "
                            <label for=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "roles", [], "any", false, false, false, 136), "vars", [], "any", false, false, false, 136), "id", [], "any", false, false, false, 136), "html", null, true);
        yield "\">
                                <i class=\"fas fa-user-tag me-1\"></i> Rôle
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "roles", [], "any", false, false, false, 140), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                
                <hr class=\"my-4\">
                
                <!-- Mot de passe -->
                <div class=\"card border-0 bg-light mb-4\">
                    <div class=\"card-body\">
                        <h6 class=\"card-title text-primary mb-3\">
                            <i class=\"fas fa-key me-2\"></i>
                            ";
        // line 153
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "vars", [], "any", false, false, false, 153), "name", [], "any", false, false, false, 153) == "new")) ? ("Définir le mot de passe") : ("Changer le mot de passe"));
        yield "
                        </h6>
                        
                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                <div class=\"form-floating\">
                                    ";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "plainPassword", [], "any", false, false, false, 159), "first", [], "any", false, false, false, 159), 'widget', ["attr" => ["class" => "form-control password-toggle", "placeholder" => " ", "autocomplete" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 162
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "vars", [], "any", false, false, false, 162), "name", [], "any", false, false, false, 162) == "new")) ? ("new-password") : ("off"))]]);
        // line 163
        yield "
                                    <label for=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "plainPassword", [], "any", false, false, false, 164), "first", [], "any", false, false, false, 164), "vars", [], "any", false, false, false, 164), "id", [], "any", false, false, false, 164), "html", null, true);
        yield "\">
                                        <i class=\"fas fa-lock me-1\"></i>
                                        ";
        // line 166
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "vars", [], "any", false, false, false, 166), "name", [], "any", false, false, false, 166) == "new")) ? ("Mot de passe") : ("Nouveau mot de passe"));
        yield "
                                    </label>
                                    <div class=\"invalid-feedback d-block\">
                                        ";
        // line 169
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "plainPassword", [], "any", false, false, false, 169), "first", [], "any", false, false, false, 169), 'errors');
        yield "
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"col-md-6\">
                                <div class=\"form-floating\">
                                    ";
        // line 176
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "plainPassword", [], "any", false, false, false, 176), "second", [], "any", false, false, false, 176), 'widget', ["attr" => ["class" => "form-control password-toggle", "placeholder" => " ", "autocomplete" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 179
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "vars", [], "any", false, false, false, 179), "name", [], "any", false, false, false, 179) == "new")) ? ("new-password") : ("off"))]]);
        // line 180
        yield "
                                    <label for=\"";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "plainPassword", [], "any", false, false, false, 181), "second", [], "any", false, false, false, 181), "vars", [], "any", false, false, false, 181), "id", [], "any", false, false, false, 181), "html", null, true);
        yield "\">
                                        <i class=\"fas fa-lock me-1\"></i>
                                        ";
        // line 183
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "vars", [], "any", false, false, false, 183), "name", [], "any", false, false, false, 183) == "new")) ? ("Confirmation") : ("Confirmer le nouveau mot de passe"));
        yield "
                                    </label>
                                    <div class=\"invalid-feedback d-block\">
                                        ";
        // line 186
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "plainPassword", [], "any", false, false, false, 186), "second", [], "any", false, false, false, 186), 'errors');
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Indicateur de force du mot de passe -->
                        <div class=\"mt-3\">
                            <div class=\"password-strength d-none\">
                                <div class=\"progress\" style=\"height: 5px;\">
                                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%\"></div>
                                </div>
                                <small class=\"text-muted d-block mt-1\" id=\"passwordStrengthText\">
                                    La force du mot de passe apparaîtra ici
                                </small>
                            </div>
                            
                            <!-- Option pour afficher/masquer le mot de passe -->
                            <div class=\"form-check form-switch mt-3\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"showPassword\">
                                <label class=\"form-check-label\" for=\"showPassword\">
                                    <i class=\"fas fa-eye me-1\"></i> Afficher le mot de passe
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Statut (uniquement pour l'édition) -->
                ";
        // line 215
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "vars", [], "any", false, false, false, 215), "name", [], "any", false, false, false, 215) != "new")) {
            // line 216
            yield "                <div class=\"card border-0 bg-light mb-4\">
                    <div class=\"card-body\">
                        <h6 class=\"card-title text-primary mb-3\">
                            <i class=\"fas fa-toggle-on me-2\"></i> Statut de l'utilisateur
                        </h6>
                        <div class=\"d-flex align-items-center\">
                            <div class=\"form-check form-switch me-3\">
                                ";
            // line 223
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), "is_active", [], "any", false, false, false, 223), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
            // line 226
            yield "
                                <label class=\"form-check-label\" for=\"";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 227, $this->source); })()), "is_active", [], "any", false, false, false, 227), "vars", [], "any", false, false, false, 227), "id", [], "any", false, false, false, 227), "html", null, true);
            yield "\">
                                    ";
            // line 228
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 228, $this->source); })()), "isActive", [], "any", false, false, false, 228)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Utilisateur actif") : ("Utilisateur inactif"));
            yield "
                                </label>
                            </div>
                            <span class=\"badge ";
            // line 231
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 231, $this->source); })()), "isActive", [], "any", false, false, false, 231)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
            yield "\">
                                ";
            // line 232
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 232, $this->source); })()), "isActive", [], "any", false, false, false, 232)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
            yield "
                            </span>
                        </div>
                        <small class=\"text-muted mt-2 d-block\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Les utilisateurs inactifs ne peuvent pas se connecter au système.
                        </small>
                    </div>
                </div>
                ";
        }
        // line 242
        yield "            </div>
            
            <!-- Footer avec boutons d'action -->
            <div class=\"card-footer bg-light py-3\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <a href=\"";
        // line 247
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-times me-2\"></i> Annuler
                    </a>
                    
                    <div class=\"btn-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                            <i class=\"fas fa-save me-2\"></i> 
                            ";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 254, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
                        </button>
                        
                        ";
        // line 257
        if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 257, $this->source); })()), "vars", [], "any", false, false, false, 257), "name", [], "any", false, false, false, 257) != "new") && CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", true, true, false, 257)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 257, $this->source); })()), "id", [], "any", false, false, false, 257)))) {
            // line 258
            yield "    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 258, $this->source); })()), "id", [], "any", false, false, false, 258)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-lg\">
        <i class=\"fas fa-eye me-2\"></i> Voir
    </a>
";
        }
        // line 262
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 268
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 268, $this->source); })()), 'form_end');
        yield "

<!-- Modal pour supprimer la photo -->
";
        // line 271
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "vars", [], "any", false, false, false, 271), "name", [], "any", false, false, false, 271) != "new") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 271, $this->source); })()), "photo", [], "any", false, false, false, 271))) {
            // line 272
            yield "<div class=\"modal fade\" id=\"deletePhotoModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0\">
                <h5 class=\"modal-title text-danger\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer la photo
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                    <h5>Êtes-vous sûr de vouloir supprimer cette photo ?</h5>
                    <p class=\"text-muted\">Cette action ne peut pas être annulée.</p>
                </div>
                <div class=\"mb-3\">
                    <img src=\"";
            // line 288
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 288, $this->source); })()), "photo", [], "any", false, false, false, 288))), "html", null, true);
            yield "\" 
                         alt=\"";
            // line 289
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 289, $this->source); })()), "fullName", [], "any", false, false, false, 289), "html", null, true);
            yield "\" 
                         class=\"rounded-circle shadow\"
                         style=\"width: 100px; height: 100px; object-fit: cover;\">
                </div>
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <form action=\"";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete_photo", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 298, $this->source); })()), "id", [], "any", false, false, false, 298)]), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-photo" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 299, $this->source); })()), "id", [], "any", false, false, false, 299))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fas fa-trash me-2\"></i> Supprimer la photo
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        }
        // line 309
        yield "
";
        // line 310
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 409
        yield "
";
        // line 410
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 310
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

        // line 311
        yield "<script>
function previewPhoto(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        const preview = document.querySelector('.profile-preview') || 
                       document.querySelector('.profile-placeholder');
        
        reader.onload = function(e) {
            if (preview.classList.contains('profile-placeholder')) {
                // Remplacer le placeholder par une image
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-fluid rounded-circle shadow profile-preview';
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

// Afficher/Masquer le mot de passe
document.addEventListener('DOMContentLoaded', function() {
    const showPasswordCheckbox = document.getElementById('showPassword');
    if (showPasswordCheckbox) {
        showPasswordCheckbox.addEventListener('change', function() {
            const passwordFields = document.querySelectorAll('.password-toggle');
            const eyeIcon = this.parentNode.querySelector('i');
            
            passwordFields.forEach(field => {
                field.type = this.checked ? 'text' : 'password';
            });
            
            // Changer l'icône
            if (eyeIcon) {
                eyeIcon.className = this.checked ? 'fas fa-eye-slash me-1' : 'fas fa-eye me-1';
            }
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
    
    // Force du mot de passe (optionnel)
    const passwordField = document.querySelector('input[name\$=\"[first]\"]');
    const passwordStrength = document.querySelector('.password-strength');
    const progressBar = passwordStrength?.querySelector('.progress-bar');
    const strengthText = document.getElementById('passwordStrengthText');
    
    if (passwordField && passwordStrength && progressBar && strengthText) {
        passwordField.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            
            if (password.length > 0) {
                passwordStrength.classList.remove('d-none');
                
                // Calcul basique de la force
                if (password.length >= 8) strength += 25;
                if (/[A-Z]/.test(password)) strength += 25;
                if (/[0-9]/.test(password)) strength += 25;
                if (/[^A-Za-z0-9]/.test(password)) strength += 25;
                
                // Mettre à jour la barre de progression
                progressBar.style.width = strength + '%';
                
                // Changer la couleur et le texte
                if (strength < 50) {
                    progressBar.className = 'progress-bar bg-danger';
                    strengthText.textContent = 'Mot de passe faible';
                } else if (strength < 75) {
                    progressBar.className = 'progress-bar bg-warning';
                    strengthText.textContent = 'Mot de passe moyen';
                } else {
                    progressBar.className = 'progress-bar bg-success';
                    strengthText.textContent = 'Mot de passe fort';
                }
            } else {
                passwordStrength.classList.add('d-none');
            }
        });
    }
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 410
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

        // line 411
        yield "<style>
.card {
    border-radius: 15px;
    overflow: hidden;
    transition: all 0.3s ease;
}

.card:hover {
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
        return array (  641 => 411,  628 => 410,  520 => 311,  507 => 310,  496 => 410,  493 => 409,  491 => 310,  488 => 309,  475 => 299,  471 => 298,  459 => 289,  455 => 288,  437 => 272,  435 => 271,  429 => 268,  421 => 262,  413 => 258,  411 => 257,  405 => 254,  395 => 247,  388 => 242,  375 => 232,  371 => 231,  365 => 228,  361 => 227,  358 => 226,  356 => 223,  347 => 216,  345 => 215,  313 => 186,  307 => 183,  302 => 181,  299 => 180,  297 => 179,  296 => 176,  286 => 169,  280 => 166,  275 => 164,  272 => 163,  270 => 162,  269 => 159,  260 => 153,  244 => 140,  237 => 136,  234 => 135,  232 => 132,  222 => 125,  215 => 121,  212 => 120,  210 => 116,  198 => 107,  191 => 103,  188 => 102,  186 => 98,  176 => 91,  169 => 87,  166 => 86,  164 => 82,  153 => 74,  136 => 60,  131 => 58,  122 => 52,  114 => 46,  112 => 42,  105 => 37,  98 => 32,  94 => 30,  83 => 21,  81 => 20,  75 => 17,  71 => 16,  68 => 15,  66 => 14,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': true}}) }}
<div class=\"row g-4\">
    <!-- Carte Photo de profil -->
    <div class=\"col-lg-4\">
        <div class=\"card shadow-lg border-0 h-100\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-image me-2\"></i>Photo de profil
                </h5>
            </div>
            <div class=\"card-body text-center d-flex flex-column\">
                <!-- Preview de la photo -->
                <div class=\"profile-photo-preview mb-4 flex-grow-1 d-flex flex-column justify-content-center\">
                    {% if user.photo %}
                        <div class=\"position-relative mx-auto\" style=\"width: 200px; height: 200px;\">
                            <img src=\"{{ asset('uploads/users/' ~ user.photo) }}\" 
                                 alt=\"{{ user.fullName }}\" 
                                 class=\"img-fluid rounded-circle shadow profile-preview\"
                                 style=\"width: 100%; height: 100%; object-fit: cover; border: 5px solid #f8f9fa;\">
                            {% if form.vars.name != 'new' %}
                                <button type=\"button\" 
                                        class=\"btn btn-danger btn-sm position-absolute rounded-circle shadow\"
                                        style=\"bottom: 10px; right: 10px; width: 36px; height: 36px;\"
                                        data-bs-toggle=\"modal\" 
                                        data-bs-target=\"#deletePhotoModal\"
                                        title=\"Supprimer la photo\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            {% endif %}
                        </div>
                    {% else %}
                        <div class=\"profile-placeholder rounded-circle d-flex align-items-center justify-content-center mx-auto bg-gradient-primary text-white shadow-lg\"
                             style=\"width: 200px; height: 200px; border: 5px solid #f8f9fa;\">
                            <i class=\"fas fa-user fa-5x\"></i>
                        </div>
                    {% endif %}
                </div>
                
                <!-- Champ de téléchargement de photo -->
                <div class=\"mt-auto\">
                    <div class=\"file-upload-wrapper\">
                        {{ form_widget(form.photo, {'attr': {
                            'class': 'form-control', 
                            'onchange': 'previewPhoto(this)',
                            'accept': 'image/*'
                        }}) }}
                        <div class=\"form-text mt-2\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Formats acceptés : JPG, PNG, GIF, WebP. Taille max : 2MB
                        </div>
                        <div class=\"invalid-feedback d-block\">
                            {{ form_errors(form.photo) }}
                        </div>
                    </div>
                    
                    <!-- Bouton de sélection stylé -->
                    <div class=\"mt-3\">
                        <label for=\"{{ form.photo.vars.id }}\" class=\"btn btn-outline-primary w-100\">
                            <i class=\"fas fa-cloud-upload-alt me-2\"></i>
                            {{ user.photo ? 'Changer la photo' : 'Choisir une photo' }}
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Carte Informations personnelles -->
    <div class=\"col-lg-8\">
        <div class=\"card shadow-lg border-0 h-100\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-user-edit me-2\"></i>
                    {{ form.vars.name == 'new' ? 'Nouvel utilisateur' : 'Modifier l\\'utilisateur' }}
                </h5>
            </div>
            <div class=\"card-body\">
                <!-- Informations de base -->
                <div class=\"row g-3\">
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.full_name, {'attr': {
                                'class': 'form-control',
                                'placeholder': ' ',
                                'autocomplete': 'name'
                            }}) }}
                            <label for=\"{{ form.full_name.vars.id }}\">
                                <i class=\"fas fa-user me-1\"></i> Nom complet
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.full_name) }}
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.email, {'attr': {
                                'class': 'form-control',
                                'placeholder': ' ',
                                'autocomplete': 'email'
                            }}) }}
                            <label for=\"{{ form.email.vars.id }}\">
                                <i class=\"fas fa-envelope me-1\"></i> Adresse email
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.email) }}
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"row g-3 mt-2\">
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.phone, {'attr': {
                                'class': 'form-control',
                                'placeholder': ' ',
                                'autocomplete': 'tel'
                            }}) }}
                            <label for=\"{{ form.phone.vars.id }}\">
                                <i class=\"fas fa-phone me-1\"></i> Numéro de téléphone
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.phone) }}
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.roles, {'attr': {
                                'class': 'form-select',
                                'placeholder': ' '
                            }}) }}
                            <label for=\"{{ form.roles.vars.id }}\">
                                <i class=\"fas fa-user-tag me-1\"></i> Rôle
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.roles) }}
                            </div>
                        </div>
                    </div>
                </div>
                
                <hr class=\"my-4\">
                
                <!-- Mot de passe -->
                <div class=\"card border-0 bg-light mb-4\">
                    <div class=\"card-body\">
                        <h6 class=\"card-title text-primary mb-3\">
                            <i class=\"fas fa-key me-2\"></i>
                            {{ form.vars.name == 'new' ? 'Définir le mot de passe' : 'Changer le mot de passe' }}
                        </h6>
                        
                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                <div class=\"form-floating\">
                                    {{ form_widget(form.plainPassword.first, {'attr': {
                                        'class': 'form-control password-toggle',
                                        'placeholder': ' ',
                                        'autocomplete': form.vars.name == 'new' ? 'new-password' : 'off'
                                    }}) }}
                                    <label for=\"{{ form.plainPassword.first.vars.id }}\">
                                        <i class=\"fas fa-lock me-1\"></i>
                                        {{ form.vars.name == 'new' ? 'Mot de passe' : 'Nouveau mot de passe' }}
                                    </label>
                                    <div class=\"invalid-feedback d-block\">
                                        {{ form_errors(form.plainPassword.first) }}
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"col-md-6\">
                                <div class=\"form-floating\">
                                    {{ form_widget(form.plainPassword.second, {'attr': {
                                        'class': 'form-control password-toggle',
                                        'placeholder': ' ',
                                        'autocomplete': form.vars.name == 'new' ? 'new-password' : 'off'
                                    }}) }}
                                    <label for=\"{{ form.plainPassword.second.vars.id }}\">
                                        <i class=\"fas fa-lock me-1\"></i>
                                        {{ form.vars.name == 'new' ? 'Confirmation' : 'Confirmer le nouveau mot de passe' }}
                                    </label>
                                    <div class=\"invalid-feedback d-block\">
                                        {{ form_errors(form.plainPassword.second) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Indicateur de force du mot de passe -->
                        <div class=\"mt-3\">
                            <div class=\"password-strength d-none\">
                                <div class=\"progress\" style=\"height: 5px;\">
                                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%\"></div>
                                </div>
                                <small class=\"text-muted d-block mt-1\" id=\"passwordStrengthText\">
                                    La force du mot de passe apparaîtra ici
                                </small>
                            </div>
                            
                            <!-- Option pour afficher/masquer le mot de passe -->
                            <div class=\"form-check form-switch mt-3\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"showPassword\">
                                <label class=\"form-check-label\" for=\"showPassword\">
                                    <i class=\"fas fa-eye me-1\"></i> Afficher le mot de passe
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Statut (uniquement pour l'édition) -->
                {% if form.vars.name != 'new' %}
                <div class=\"card border-0 bg-light mb-4\">
                    <div class=\"card-body\">
                        <h6 class=\"card-title text-primary mb-3\">
                            <i class=\"fas fa-toggle-on me-2\"></i> Statut de l'utilisateur
                        </h6>
                        <div class=\"d-flex align-items-center\">
                            <div class=\"form-check form-switch me-3\">
                                {{ form_widget(form.is_active, {'attr': {
                                    'class': 'form-check-input',
                                    'role': 'switch'
                                }}) }}
                                <label class=\"form-check-label\" for=\"{{ form.is_active.vars.id }}\">
                                    {{ user.isActive ? 'Utilisateur actif' : 'Utilisateur inactif' }}
                                </label>
                            </div>
                            <span class=\"badge {{ user.isActive ? 'bg-success' : 'bg-danger' }}\">
                                {{ user.isActive ? 'ACTIF' : 'INACTIF' }}
                            </span>
                        </div>
                        <small class=\"text-muted mt-2 d-block\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Les utilisateurs inactifs ne peuvent pas se connecter au système.
                        </small>
                    </div>
                </div>
                {% endif %}
            </div>
            
            <!-- Footer avec boutons d'action -->
            <div class=\"card-footer bg-light py-3\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-times me-2\"></i> Annuler
                    </a>
                    
                    <div class=\"btn-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                            <i class=\"fas fa-save me-2\"></i> 
                            {{ button_label|default('Enregistrer') }}
                        </button>
                        
                        {% if form.vars.name != 'new' and user.id is defined and user.id is not null %}
    <a href=\"{{ path('app_user_show', {'id': user.id}) }}\" class=\"btn btn-info btn-lg\">
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

<!-- Modal pour supprimer la photo -->
{% if form.vars.name != 'new' and user.photo %}
<div class=\"modal fade\" id=\"deletePhotoModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0\">
                <h5 class=\"modal-title text-danger\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer la photo
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                    <h5>Êtes-vous sûr de vouloir supprimer cette photo ?</h5>
                    <p class=\"text-muted\">Cette action ne peut pas être annulée.</p>
                </div>
                <div class=\"mb-3\">
                    <img src=\"{{ asset('uploads/users/' ~ user.photo) }}\" 
                         alt=\"{{ user.fullName }}\" 
                         class=\"rounded-circle shadow\"
                         style=\"width: 100px; height: 100px; object-fit: cover;\">
                </div>
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-2\"></i> Annuler
                </button>
                <form action=\"{{ path('app_user_delete_photo', {'id': user.id}) }}\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-photo' ~ user.id) }}\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fas fa-trash me-2\"></i> Supprimer la photo
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endif %}

{% block javascripts %}
<script>
function previewPhoto(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        const preview = document.querySelector('.profile-preview') || 
                       document.querySelector('.profile-placeholder');
        
        reader.onload = function(e) {
            if (preview.classList.contains('profile-placeholder')) {
                // Remplacer le placeholder par une image
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-fluid rounded-circle shadow profile-preview';
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

// Afficher/Masquer le mot de passe
document.addEventListener('DOMContentLoaded', function() {
    const showPasswordCheckbox = document.getElementById('showPassword');
    if (showPasswordCheckbox) {
        showPasswordCheckbox.addEventListener('change', function() {
            const passwordFields = document.querySelectorAll('.password-toggle');
            const eyeIcon = this.parentNode.querySelector('i');
            
            passwordFields.forEach(field => {
                field.type = this.checked ? 'text' : 'password';
            });
            
            // Changer l'icône
            if (eyeIcon) {
                eyeIcon.className = this.checked ? 'fas fa-eye-slash me-1' : 'fas fa-eye me-1';
            }
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
    
    // Force du mot de passe (optionnel)
    const passwordField = document.querySelector('input[name\$=\"[first]\"]');
    const passwordStrength = document.querySelector('.password-strength');
    const progressBar = passwordStrength?.querySelector('.progress-bar');
    const strengthText = document.getElementById('passwordStrengthText');
    
    if (passwordField && passwordStrength && progressBar && strengthText) {
        passwordField.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            
            if (password.length > 0) {
                passwordStrength.classList.remove('d-none');
                
                // Calcul basique de la force
                if (password.length >= 8) strength += 25;
                if (/[A-Z]/.test(password)) strength += 25;
                if (/[0-9]/.test(password)) strength += 25;
                if (/[^A-Za-z0-9]/.test(password)) strength += 25;
                
                // Mettre à jour la barre de progression
                progressBar.style.width = strength + '%';
                
                // Changer la couleur et le texte
                if (strength < 50) {
                    progressBar.className = 'progress-bar bg-danger';
                    strengthText.textContent = 'Mot de passe faible';
                } else if (strength < 75) {
                    progressBar.className = 'progress-bar bg-warning';
                    strengthText.textContent = 'Mot de passe moyen';
                } else {
                    progressBar.className = 'progress-bar bg-success';
                    strengthText.textContent = 'Mot de passe fort';
                }
            } else {
                passwordStrength.classList.add('d-none');
            }
        });
    }
});
</script>
{% endblock %}

{% block stylesheets %}
<style>
.card {
    border-radius: 15px;
    overflow: hidden;
    transition: all 0.3s ease;
}

.card:hover {
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
</style>
{% endblock %}", "admin/user/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\user\\_form.html.twig");
    }
}
