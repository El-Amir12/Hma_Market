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

/* profile/edit.html.twig */
class __TwigTemplate_eeb3cfb816b20aab5ab0dc44832a5cc4 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/edit.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Modifier mon profil - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "fullName", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container-fluid px-4\">
    <!-- Header moderne -->
    <div class=\"row mb-5\">
        <div class=\"col-12\">
            <div class=\"edit-header position-relative overflow-hidden rounded-4 shadow-lg\">
                <div class=\"floating-shapes-mini\">
                    <div class=\"shape-mini shape-1-mini\"></div>
                    <div class=\"shape-mini shape-2-mini\"></div>
                </div>
                
                <div class=\"position-relative p-5\" style=\"z-index: 2;\">
                    <div class=\"d-flex align-items-center gap-4\">
                        <div class=\"icon-wrapper bg-white bg-opacity-20 rounded-4 p-4\">
                            <i class=\"bi bi-pencil-square text-white display-4\"></i>
                        </div>
                        <div>
                            <h1 class=\"display-5 fw-bold text-white mb-2\">Modifier mon profil</h1>
                            <div class=\"d-flex align-items-center gap-3\">
                                <span class=\"badge bg-white text-primary px-4 py-2 rounded-pill fs-6\">
                                    <i class=\"bi bi-building me-2\"></i>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "companyDisplayName", [], "any", false, false, false, 25), "html", null, true);
        yield "
                                </span>
                                <span class=\"text-white-50\">
                                    <i class=\"bi bi-person me-1\"></i>
                                    ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "fullName", [], "any", false, false, false, 29), "html", null, true);
        yield "
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"wave-decoration-mini\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 80\" preserveAspectRatio=\"none\">
                        <path fill=\"#ffffff\" fill-opacity=\"1\" d=\"M0,32L80,37.3C160,43,320,53,480,48C640,43,800,21,960,16C1120,11,1280,21,1360,26.7L1440,32L1440,80L1360,80C1280,80,1120,80,960,80C800,80,640,80,480,80C320,80,160,80,80,80L0,80Z\"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>


    <!-- Affichage des erreurs de formulaire -->
    ";
        // line 47
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "vars", [], "any", false, false, false, 47), "errors", [], "any", false, false, false, 47)) > 0)) {
            // line 48
            yield "        <div class=\"row justify-content-center mb-4\">
            <div class=\"col-lg-8\">
                <div class=\"alert alert-danger alert-dismissible fade show rounded-4 shadow-sm\" role=\"alert\">
                    <div class=\"d-flex align-items-center\">
                        <i class=\"bi bi-exclamation-triangle-fill fs-4 me-3\"></i>
                        <div>
                            <strong>Des erreurs ont été détectées :</strong>
                            <ul class=\"mb-0 mt-2\">
                                ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "vars", [], "any", false, false, false, 56), "errors", [], "any", false, false, false, 56));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 57
                yield "                                    <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 57), "html", null, true);
                yield "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "                            </ul>
                        </div>
                    </div>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            </div>
        </div>
    ";
        }
        // line 67
        yield "
    <!-- Formulaire d'édition -->
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-lg\">
                <div class=\"card-header bg-white py-4 border-0\">
                    <ul class=\"nav nav-tabs card-header-tabs nav-fill\" role=\"tablist\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link active\" id=\"info-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#info\" type=\"button\" role=\"tab\">
                                <i class=\"bi bi-person-badge me-2\"></i>Informations
                            </button>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"photo-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#photo\" type=\"button\" role=\"tab\">
                                <i class=\"bi bi-camera me-2\"></i>Photo de profil
                            </button>
                        </li>
                    </ul>
                </div>
                
                <div class=\"card-body p-5\">
                    ";
        // line 88
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
                    
                    <div class=\"tab-content\">
                        <!-- Onglet Informations -->
                        <div class=\"tab-pane fade show active\" id=\"info\" role=\"tabpanel\">
                            <div class=\"row\">
                                <!-- AFFICHER L'EMAIL SÉPARÉMENT (HORS FORMULAIRE) -->
                                <div class=\"col-12 mb-4\">
                                    <label class=\"form-label fw-semibold\">
                                        <i class=\"bi bi-envelope-fill text-primary me-2\"></i>Email
                                    </label>
                                    <div class=\"input-wrapper\">
                                        <i class=\"bi bi-envelope input-icon\"></i>
                                        <input type=\"email\" 
                                               class=\"form-control form-control-lg ps-5 bg-light\" 
                                               value=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 103, $this->source); })()), "email", [], "any", false, false, false, 103), "html", null, true);
        yield "\" 
                                               readonly 
                                               disabled>
                                    </div>
                                    <small class=\"text-muted\">
                                        <i class=\"bi bi-info-circle me-1\"></i>
                                        L'email ne peut pas être modifié
                                    </small>
                                </div>

                                <div class=\"col-md-6 mb-4\">
                                    <label class=\"form-label fw-semibold\">
                                        <i class=\"bi bi-person-fill text-primary me-2\"></i>Nom complet
                                    </label>
                                    <div class=\"input-wrapper\">
                                        <i class=\"bi bi-person input-icon\"></i>
                                        ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "full_name", [], "any", false, false, false, 119), 'widget', ["attr" => ["class" => ("form-control form-control-lg ps-5" . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 121
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "full_name", [], "any", false, false, false, 121), "vars", [], "any", false, false, false, 121), "errors", [], "any", false, false, false, 121))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : (""))), "placeholder" => "Votre nom complet"]]);
        // line 124
        yield "
                                    </div>
                                    <div class=\"invalid-feedback d-block\">
                                        ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "full_name", [], "any", false, false, false, 127), 'errors');
        yield "
                                    </div>
                                </div>

                                <div class=\"col-md-6 mb-4\">
                                    <label class=\"form-label fw-semibold\">
                                        <i class=\"bi bi-telephone-fill text-success me-2\"></i>Téléphone
                                    </label>
                                    <div class=\"input-wrapper\">
                                        <i class=\"bi bi-telephone input-icon\"></i>
                                        ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "phone", [], "any", false, false, false, 137), 'widget', ["attr" => ["class" => ("form-control form-control-lg ps-5" . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 139
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "phone", [], "any", false, false, false, 139), "vars", [], "any", false, false, false, 139), "errors", [], "any", false, false, false, 139))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : (""))), "placeholder" => "+212 6XX XX XX XX"]]);
        // line 142
        yield "
                                    </div>
                                    <div class=\"invalid-feedback d-block\">
                                        ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "phone", [], "any", false, false, false, 145), 'errors');
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Onglet Photo SIMPLIFIÉ -->
                        <div class=\"tab-pane fade\" id=\"photo\" role=\"tabpanel\">
                            <div class=\"text-center\">
                                <!-- Photo de profil actuelle / placeholder -->
                                <div class=\"photo-container mb-4\" id=\"photoPreviewContainer\">
                                    <div class=\"position-relative d-inline-block\">
                                        ";
        // line 157
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 157, $this->source); })()), "photo", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 158
            yield "                                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 158, $this->source); })()), "photo", [], "any", false, false, false, 158))), "html", null, true);
            yield "?";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "timestamp", [], "any", false, false, false, 158), "html", null, true);
            yield "\" 
                                                 alt=\"Photo de profil\" 
                                                 class=\"rounded-circle shadow-lg\"
                                                 id=\"mainPhotoPreview\"
                                                 style=\"width: 200px; height: 200px; object-fit: cover; border: 5px solid #667eea;\">
                                        ";
        } else {
            // line 164
            yield "                                            <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto bg-gradient-primary text-white shadow-lg\"
                                                 id=\"mainPhotoPlaceholder\"
                                                 style=\"width: 200px; height: 200px; border: 5px solid #667eea;\">
                                                <span class=\"display-2 fw-bold\">";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 167, $this->source); })()), "fullName", [], "any", false, false, false, 167))), "html", null, true);
            yield "</span>
                                            </div>
                                        ";
        }
        // line 170
        yield "                                        
                                        <!-- Badge indiquant la présence d'une photo existante -->
                                        ";
        // line 172
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 172, $this->source); })()), "photo", [], "any", false, false, false, 172)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 173
            yield "                                            <span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success\">
                                                <i class=\"bi bi-check-circle-fill\"></i>
                                            </span>
                                        ";
        }
        // line 177
        yield "                                    </div>
                                </div>

                                <h5 class=\"mb-2\">Photo de profil</h5>
                                <p class=\"text-muted mb-4\">Formats acceptés : JPG, PNG, GIF, WebP • Max 2 Mo</p>
                                
                                <!-- Zone d'upload -->
                                <div class=\"upload-simple mb-4\">
                                    ";
        // line 186
        yield "                                    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "photo", [], "any", false, false, false, 186), 'widget', ["id" => "profile_photo_input", "attr" => ["accept" => "image/jpeg,image/png,image/gif,image/webp", "style" => "display: none;"]]);
        // line 192
        yield "
                                    
                                    <button type=\"button\" class=\"btn btn-primary btn-lg px-5\" id=\"selectPhotoBtn\">
                                        <i class=\"bi bi-cloud-upload me-2\"></i>Choisir une photo
                                    </button>
                                    
                                    <div class=\"mt-3 text-muted small\">
                                        <i class=\"bi bi-info-circle me-1\"></i>
                                        La nouvelle photo remplacera automatiquement l'ancienne
                                    </div>
                                </div>

                                <!-- Aperçu de la nouvelle photo (caché par défaut) -->
                                <div id=\"newPhotoPreviewContainer\" class=\"mt-4 p-4 bg-light rounded-4\" style=\"display: none;\">
                                    <h6 class=\"fw-semibold mb-3\">Aperçu de la nouvelle photo :</h6>
                                    <div class=\"d-flex align-items-center justify-content-center gap-4\">
                                        <img id=\"newPhotoPreview\" src=\"\" alt=\"Aperçu\" 
                                             class=\"rounded-circle shadow-sm\"
                                             style=\"width: 100px; height: 100px; object-fit: cover; border: 3px solid #667eea;\">
                                        <div class=\"text-start\">
                                            <p class=\"mb-1\">
                                                <i class=\"bi bi-check-circle-fill text-success me-2\"></i>
                                                <span id=\"fileName\"></span>
                                            </p>
                                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger mt-2\" id=\"cancelNewPhotoBtn\">
                                                <i class=\"bi bi-x me-1\"></i>Annuler
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- ✅ Bouton de suppression UNIQUEMENT si photo existe -->
                                ";
        // line 224
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 224, $this->source); })()), "photo", [], "any", false, false, false, 224)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 225
            yield "                                    <div class=\"mt-4\">
                                        <button type=\"button\" class=\"btn btn-outline-danger btn-lg\" data-bs-toggle=\"modal\" data-bs-target=\"#deletePhotoModal\">
                                            <i class=\"bi bi-trash me-2\"></i>Supprimer ma photo
                                        </button>
                                    </div>
                                ";
        }
        // line 231
        yield "                            </div>
                        </div>
                    </div>

                    <hr class=\"my-4\">

                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a href=\"";
        // line 238
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show");
        yield "\" class=\"btn btn-outline-secondary btn-lg px-5\">
                            <i class=\"bi bi-arrow-left me-2\"></i>Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\">
                            <i class=\"bi bi-check-circle-fill me-2\"></i>Enregistrer
                        </button>
                    </div>

                    ";
        // line 246
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 246, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ✅ Modal de confirmation suppression photo - UNIQUEMENT si photo existe -->
";
        // line 254
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 254, $this->source); })()), "photo", [], "any", false, false, false, 254)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 255
            yield "<div class=\"modal fade\" id=\"deletePhotoModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title\">
                    <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                    Supprimer la photo
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <img src=\"";
            // line 267
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 267, $this->source); })()), "photo", [], "any", false, false, false, 267))), "html", null, true);
            yield "?";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "timestamp", [], "any", false, false, false, 267), "html", null, true);
            yield "\" 
                         alt=\"";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 268, $this->source); })()), "fullName", [], "any", false, false, false, 268), "html", null, true);
            yield "\" 
                         class=\"rounded-circle shadow-lg\"
                         style=\"width: 100px; height: 100px; object-fit: cover;\">
                </div>
                <h5 class=\"mb-3\">Êtes-vous sûr de vouloir supprimer votre photo de profil ?</h5>
                <p class=\"text-muted mb-0\">Cette action est irréversible.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">
                    <i class=\"bi bi-x me-2\"></i>Annuler
                </button>
                <form action=\"";
            // line 279
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_delete_photo");
            yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-photo"), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn btn-danger px-4\">
                        <i class=\"bi bi-trash-fill me-2\"></i>Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        }
        // line 290
        yield "
<!-- Messages flash -->
";
        // line 292
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 292, $this->source); })()), "flashes", ["success"], "method", false, false, false, 292));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 293
            yield "    <div class=\"position-fixed bottom-0 end-0 p-3\" style=\"z-index: 9999\">
        <div class=\"toast show bg-success text-white\" role=\"alert\">
            <div class=\"toast-header bg-success text-white border-0\">
                <i class=\"bi bi-check-circle-fill me-2\"></i>
                <strong class=\"me-auto\">Succès</strong>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"toast\"></button>
            </div>
            <div class=\"toast-body\">
                ";
            // line 301
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 306
        yield "
";
        // line 307
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 307, $this->source); })()), "flashes", ["error"], "method", false, false, false, 307));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 308
            yield "    <div class=\"position-fixed bottom-0 end-0 p-3\" style=\"z-index: 9999\">
        <div class=\"toast show bg-danger text-white\" role=\"alert\">
            <div class=\"toast-header bg-danger text-white border-0\">
                <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                <strong class=\"me-auto\">Erreur</strong>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"toast\"></button>
            </div>
            <div class=\"toast-body\">
                ";
            // line 316
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 321
        yield "
<style>
:root {
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

/* Header */
.edit-header {
    background: var(--primary-gradient);
    position: relative;
    min-height: 160px;
}

.floating-shapes-mini {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    opacity: 0.3;
    z-index: 1;
}

.shape-mini {
    position: absolute;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
}

.shape-1-mini {
    width: 100px;
    height: 100px;
    top: -30px;
    right: -20px;
    animation: floatMini 8s ease-in-out infinite;
}

.shape-2-mini {
    width: 70px;
    height: 70px;
    bottom: -20px;
    left: -15px;
    animation: floatMini 12s ease-in-out infinite reverse;
}

@keyframes floatMini {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-10px) rotate(5deg); }
}

.wave-decoration-mini {
    position: absolute;
    bottom: -1px;
    left: 0;
    right: 0;
    line-height: 0;
    z-index: 2;
}

.wave-decoration-mini svg {
    width: 100%;
    height: 40px;
}

.icon-wrapper {
    transition: transform 0.3s ease;
}

.icon-wrapper:hover {
    transform: scale(1.05) rotate(5deg);
}

/* Tabs */
.nav-tabs {
    border-bottom: 2px solid #dee2e6;
}

.nav-tabs .nav-link {
    border: none;
    color: #6c757d;
    font-weight: 500;
    padding: 1rem;
    transition: all 0.3s ease;
}

.nav-tabs .nav-link:hover {
    color: #667eea;
    background: rgba(102, 126, 234, 0.05);
}

.nav-tabs .nav-link.active {
    color: #667eea;
    background: transparent;
    border-bottom: 3px solid #667eea;
}

/* Formulaire */
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

.form-control-lg {
    height: 55px;
    border-radius: 12px;
    border: 2px solid #e9ecef;
    transition: all 0.3s ease;
}

.form-control-lg:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
}

.form-control-lg.bg-light:disabled {
    background-color: #f8f9fa;
    cursor: not-allowed;
    opacity: 0.8;
}

/* Photo */
.photo-container {
    position: relative;
    display: inline-block;
}

.photo-container .badge {
    font-size: 1rem;
    padding: 0.5rem;
}

/* Boutons */
.btn {
    border-radius: 12px;
    transition: all 0.3s ease;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.15);
}

.btn-primary {
    background: var(--primary-gradient);
    border: none;
}

.btn-outline-danger:hover {
    background: #dc3545;
    color: white;
}

/* Toast */
.toast {
    min-width: 300px;
    border-radius: 12px;
    border: none;
}

.toast-header {
    border-radius: 12px 12px 0 0;
}

/* Modal */
.modal-content {
    border-radius: 20px;
    overflow: hidden;
}

.modal-header.bg-danger {
    background: linear-gradient(135deg, #f87171 0%, #dc2626 100%) !important;
}

/* Animations */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.card {
    animation: fadeIn 0.5s ease-out;
}

/* Badge */
.badge.bg-white.bg-opacity-20 {
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.2);
}

/* Alert */
.alert-danger {
    background: linear-gradient(135deg, #fee 0%, #fdd 100%);
    border: none;
    border-left: 5px solid #dc3545;
}

/* Responsive */
@media (max-width: 768px) {
    .nav-tabs .nav-link {
        padding: 0.75rem 0.5rem;
        font-size: 0.9rem;
    }
    
    .btn-lg {
        padding: 0.5rem 1rem;
        font-size: 1rem;
    }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 541
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

        // line 542
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ✅ Récupérer l'ID du champ photo
    let photoInput = document.getElementById('profile_photo_input');
    
    const selectPhotoBtn = document.getElementById('selectPhotoBtn');
    const mainPhotoPreview = document.getElementById('mainPhotoPreview');
    const mainPhotoPlaceholder = document.getElementById('mainPhotoPlaceholder');
    const newPhotoPreviewContainer = document.getElementById('newPhotoPreviewContainer');
    const newPhotoPreview = document.getElementById('newPhotoPreview');
    const fileName = document.getElementById('fileName');
    const cancelNewPhotoBtn = document.getElementById('cancelNewPhotoBtn');
    
    console.log('PhotoInput trouvé:', photoInput);
    console.log('SelectPhotoBtn trouvé:', selectPhotoBtn);
    
    // ✅ Ouvrir le sélecteur de fichier
    if (photoInput && selectPhotoBtn) {
        selectPhotoBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            photoInput.click();
        });
        
        // ✅ Quand un fichier est sélectionné
        photoInput.addEventListener('change', function(e) {
            console.log('Fichier sélectionné:', this.files);
            if (this.files.length > 0) {
                handleNewPhoto(this.files[0]);
            }
        });
    } else {
        console.error('❌ Éléments photo non trouvés!');
    }
    
    // ✅ Annuler la nouvelle photo
    if (cancelNewPhotoBtn) {
        cancelNewPhotoBtn.addEventListener('click', function() {
            photoInput.value = '';
            newPhotoPreviewContainer.style.display = 'none';
            // Recharger la page pour revenir à la photo originale
            location.reload();
        });
    }
    
    function handleNewPhoto(file) {
        console.log('Traitement du fichier:', file.name);
        
        // Vérifier la taille
        if (file.size > 2 * 1024 * 1024) {
            Swal.fire({
                icon: 'error',
                title: 'Fichier trop volumineux',
                text: 'Le fichier ne doit pas dépasser 2 Mo',
                timer: 3000,
                showConfirmButton: false
            });
            photoInput.value = '';
            return;
        }
        
        // Vérifier le type
        if (!file.type.startsWith('image/')) {
            Swal.fire({
                icon: 'error',
                title: 'Format non supporté',
                text: 'Veuillez sélectionner une image valide (JPG, PNG, GIF, WebP)',
                timer: 3000,
                showConfirmButton: false
            });
            photoInput.value = '';
            return;
        }
        
        // Afficher le nom du fichier
        fileName.textContent = file.name;
        
        // Prévisualiser l'image
        const reader = new FileReader();
        reader.onload = function(e) {
            const imageData = e.target.result;
            
            // Afficher l'aperçu de la nouvelle photo
            newPhotoPreview.src = imageData;
            newPhotoPreviewContainer.style.display = 'block';
            
            // Mettre à jour la photo principale
            if (mainPhotoPreview) {
                mainPhotoPreview.src = imageData;
            } else if (mainPhotoPlaceholder) {
                const img = document.createElement('img');
                img.src = imageData;
                img.className = 'rounded-circle shadow-lg';
                img.id = 'mainPhotoPreview';
                img.style.width = '200px';
                img.style.height = '200px';
                img.style.objectFit = 'cover';
                img.style.border = '5px solid #667eea';
                
                const parentDiv = mainPhotoPlaceholder.parentNode;
                parentDiv.replaceChild(img, mainPhotoPlaceholder);
            }
            
            Swal.fire({
                icon: 'success',
                title: 'Photo chargée',
                text: 'N\\'oubliez pas d\\'enregistrer vos modifications',
                timer: 2000,
                showConfirmButton: false
            });
        };
        reader.readAsDataURL(file);
    }
    
    // ✅ GESTION DE LA SUPPRESSION DE PHOTO
    const deletePhotoForm = document.querySelector('form[action=\"";
        // line 659
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_delete_photo");
        yield "\"]');
    if (deletePhotoForm) {
        deletePhotoForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            Swal.fire({
                title: 'Supprimer la photo ?',
                text: \"Cette action est irréversible.\",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Oui, supprimer',
                cancelButtonText: 'Annuler'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            });
        });
    }
    
    // ✅ Initialisation des toasts
    const toastElList = [].slice.call(document.querySelectorAll('.toast'));
    toastElList.forEach(function(toastEl) {
        new bootstrap.Toast(toastEl, { autohide: true, delay: 3000 }).show();
    });
});
</script>
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
        return "profile/edit.html.twig";
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
        return array (  887 => 659,  767 => 542,  754 => 541,  525 => 321,  514 => 316,  504 => 308,  500 => 307,  497 => 306,  486 => 301,  476 => 293,  472 => 292,  468 => 290,  455 => 280,  451 => 279,  437 => 268,  431 => 267,  417 => 255,  415 => 254,  404 => 246,  393 => 238,  384 => 231,  376 => 225,  374 => 224,  340 => 192,  337 => 186,  327 => 177,  321 => 173,  319 => 172,  315 => 170,  309 => 167,  304 => 164,  292 => 158,  290 => 157,  275 => 145,  270 => 142,  268 => 139,  267 => 137,  254 => 127,  249 => 124,  247 => 121,  246 => 119,  227 => 103,  209 => 88,  186 => 67,  176 => 59,  167 => 57,  163 => 56,  153 => 48,  151 => 47,  130 => 29,  123 => 25,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier mon profil - {{ user.fullName }}{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- Header moderne -->
    <div class=\"row mb-5\">
        <div class=\"col-12\">
            <div class=\"edit-header position-relative overflow-hidden rounded-4 shadow-lg\">
                <div class=\"floating-shapes-mini\">
                    <div class=\"shape-mini shape-1-mini\"></div>
                    <div class=\"shape-mini shape-2-mini\"></div>
                </div>
                
                <div class=\"position-relative p-5\" style=\"z-index: 2;\">
                    <div class=\"d-flex align-items-center gap-4\">
                        <div class=\"icon-wrapper bg-white bg-opacity-20 rounded-4 p-4\">
                            <i class=\"bi bi-pencil-square text-white display-4\"></i>
                        </div>
                        <div>
                            <h1 class=\"display-5 fw-bold text-white mb-2\">Modifier mon profil</h1>
                            <div class=\"d-flex align-items-center gap-3\">
                                <span class=\"badge bg-white text-primary px-4 py-2 rounded-pill fs-6\">
                                    <i class=\"bi bi-building me-2\"></i>{{ user.companyDisplayName }}
                                </span>
                                <span class=\"text-white-50\">
                                    <i class=\"bi bi-person me-1\"></i>
                                    {{ user.fullName }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"wave-decoration-mini\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 80\" preserveAspectRatio=\"none\">
                        <path fill=\"#ffffff\" fill-opacity=\"1\" d=\"M0,32L80,37.3C160,43,320,53,480,48C640,43,800,21,960,16C1120,11,1280,21,1360,26.7L1440,32L1440,80L1360,80C1280,80,1120,80,960,80C800,80,640,80,480,80C320,80,160,80,80,80L0,80Z\"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>


    <!-- Affichage des erreurs de formulaire -->
    {% if form.vars.errors|length > 0 %}
        <div class=\"row justify-content-center mb-4\">
            <div class=\"col-lg-8\">
                <div class=\"alert alert-danger alert-dismissible fade show rounded-4 shadow-sm\" role=\"alert\">
                    <div class=\"d-flex align-items-center\">
                        <i class=\"bi bi-exclamation-triangle-fill fs-4 me-3\"></i>
                        <div>
                            <strong>Des erreurs ont été détectées :</strong>
                            <ul class=\"mb-0 mt-2\">
                                {% for error in form.vars.errors %}
                                    <li>{{ error.message }}</li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            </div>
        </div>
    {% endif %}

    <!-- Formulaire d'édition -->
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-lg\">
                <div class=\"card-header bg-white py-4 border-0\">
                    <ul class=\"nav nav-tabs card-header-tabs nav-fill\" role=\"tablist\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link active\" id=\"info-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#info\" type=\"button\" role=\"tab\">
                                <i class=\"bi bi-person-badge me-2\"></i>Informations
                            </button>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"photo-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#photo\" type=\"button\" role=\"tab\">
                                <i class=\"bi bi-camera me-2\"></i>Photo de profil
                            </button>
                        </li>
                    </ul>
                </div>
                
                <div class=\"card-body p-5\">
                    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
                    
                    <div class=\"tab-content\">
                        <!-- Onglet Informations -->
                        <div class=\"tab-pane fade show active\" id=\"info\" role=\"tabpanel\">
                            <div class=\"row\">
                                <!-- AFFICHER L'EMAIL SÉPARÉMENT (HORS FORMULAIRE) -->
                                <div class=\"col-12 mb-4\">
                                    <label class=\"form-label fw-semibold\">
                                        <i class=\"bi bi-envelope-fill text-primary me-2\"></i>Email
                                    </label>
                                    <div class=\"input-wrapper\">
                                        <i class=\"bi bi-envelope input-icon\"></i>
                                        <input type=\"email\" 
                                               class=\"form-control form-control-lg ps-5 bg-light\" 
                                               value=\"{{ user.email }}\" 
                                               readonly 
                                               disabled>
                                    </div>
                                    <small class=\"text-muted\">
                                        <i class=\"bi bi-info-circle me-1\"></i>
                                        L'email ne peut pas être modifié
                                    </small>
                                </div>

                                <div class=\"col-md-6 mb-4\">
                                    <label class=\"form-label fw-semibold\">
                                        <i class=\"bi bi-person-fill text-primary me-2\"></i>Nom complet
                                    </label>
                                    <div class=\"input-wrapper\">
                                        <i class=\"bi bi-person input-icon\"></i>
                                        {{ form_widget(form.full_name, {
                                            'attr': {
                                                'class': 'form-control form-control-lg ps-5' ~ (form.full_name.vars.errors|length ? ' is-invalid' : ''),
                                                'placeholder': 'Votre nom complet'
                                            }
                                        }) }}
                                    </div>
                                    <div class=\"invalid-feedback d-block\">
                                        {{ form_errors(form.full_name) }}
                                    </div>
                                </div>

                                <div class=\"col-md-6 mb-4\">
                                    <label class=\"form-label fw-semibold\">
                                        <i class=\"bi bi-telephone-fill text-success me-2\"></i>Téléphone
                                    </label>
                                    <div class=\"input-wrapper\">
                                        <i class=\"bi bi-telephone input-icon\"></i>
                                        {{ form_widget(form.phone, {
                                            'attr': {
                                                'class': 'form-control form-control-lg ps-5' ~ (form.phone.vars.errors|length ? ' is-invalid' : ''),
                                                'placeholder': '+212 6XX XX XX XX'
                                            }
                                        }) }}
                                    </div>
                                    <div class=\"invalid-feedback d-block\">
                                        {{ form_errors(form.phone) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Onglet Photo SIMPLIFIÉ -->
                        <div class=\"tab-pane fade\" id=\"photo\" role=\"tabpanel\">
                            <div class=\"text-center\">
                                <!-- Photo de profil actuelle / placeholder -->
                                <div class=\"photo-container mb-4\" id=\"photoPreviewContainer\">
                                    <div class=\"position-relative d-inline-block\">
                                        {% if user.photo %}
                                            <img src=\"{{ asset('uploads/users/' ~ user.photo) }}?{{ date().timestamp }}\" 
                                                 alt=\"Photo de profil\" 
                                                 class=\"rounded-circle shadow-lg\"
                                                 id=\"mainPhotoPreview\"
                                                 style=\"width: 200px; height: 200px; object-fit: cover; border: 5px solid #667eea;\">
                                        {% else %}
                                            <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto bg-gradient-primary text-white shadow-lg\"
                                                 id=\"mainPhotoPlaceholder\"
                                                 style=\"width: 200px; height: 200px; border: 5px solid #667eea;\">
                                                <span class=\"display-2 fw-bold\">{{ user.fullName|first|upper }}</span>
                                            </div>
                                        {% endif %}
                                        
                                        <!-- Badge indiquant la présence d'une photo existante -->
                                        {% if user.photo %}
                                            <span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success\">
                                                <i class=\"bi bi-check-circle-fill\"></i>
                                            </span>
                                        {% endif %}
                                    </div>
                                </div>

                                <h5 class=\"mb-2\">Photo de profil</h5>
                                <p class=\"text-muted mb-4\">Formats acceptés : JPG, PNG, GIF, WebP • Max 2 Mo</p>
                                
                                <!-- Zone d'upload -->
                                <div class=\"upload-simple mb-4\">
                                    {# Champ photo avec ID fixe #}
                                    {{ form_widget(form.photo, {
                                        'id': 'profile_photo_input',
                                        'attr': {
                                            'accept': 'image/jpeg,image/png,image/gif,image/webp',
                                            'style': 'display: none;'
                                        }
                                    }) }}
                                    
                                    <button type=\"button\" class=\"btn btn-primary btn-lg px-5\" id=\"selectPhotoBtn\">
                                        <i class=\"bi bi-cloud-upload me-2\"></i>Choisir une photo
                                    </button>
                                    
                                    <div class=\"mt-3 text-muted small\">
                                        <i class=\"bi bi-info-circle me-1\"></i>
                                        La nouvelle photo remplacera automatiquement l'ancienne
                                    </div>
                                </div>

                                <!-- Aperçu de la nouvelle photo (caché par défaut) -->
                                <div id=\"newPhotoPreviewContainer\" class=\"mt-4 p-4 bg-light rounded-4\" style=\"display: none;\">
                                    <h6 class=\"fw-semibold mb-3\">Aperçu de la nouvelle photo :</h6>
                                    <div class=\"d-flex align-items-center justify-content-center gap-4\">
                                        <img id=\"newPhotoPreview\" src=\"\" alt=\"Aperçu\" 
                                             class=\"rounded-circle shadow-sm\"
                                             style=\"width: 100px; height: 100px; object-fit: cover; border: 3px solid #667eea;\">
                                        <div class=\"text-start\">
                                            <p class=\"mb-1\">
                                                <i class=\"bi bi-check-circle-fill text-success me-2\"></i>
                                                <span id=\"fileName\"></span>
                                            </p>
                                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger mt-2\" id=\"cancelNewPhotoBtn\">
                                                <i class=\"bi bi-x me-1\"></i>Annuler
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- ✅ Bouton de suppression UNIQUEMENT si photo existe -->
                                {% if user.photo %}
                                    <div class=\"mt-4\">
                                        <button type=\"button\" class=\"btn btn-outline-danger btn-lg\" data-bs-toggle=\"modal\" data-bs-target=\"#deletePhotoModal\">
                                            <i class=\"bi bi-trash me-2\"></i>Supprimer ma photo
                                        </button>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>

                    <hr class=\"my-4\">

                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a href=\"{{ path('app_profile_show') }}\" class=\"btn btn-outline-secondary btn-lg px-5\">
                            <i class=\"bi bi-arrow-left me-2\"></i>Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\">
                            <i class=\"bi bi-check-circle-fill me-2\"></i>Enregistrer
                        </button>
                    </div>

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ✅ Modal de confirmation suppression photo - UNIQUEMENT si photo existe -->
{% if user.photo %}
<div class=\"modal fade\" id=\"deletePhotoModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title\">
                    <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                    Supprimer la photo
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <img src=\"{{ asset('uploads/users/' ~ user.photo) }}?{{ date().timestamp }}\" 
                         alt=\"{{ user.fullName }}\" 
                         class=\"rounded-circle shadow-lg\"
                         style=\"width: 100px; height: 100px; object-fit: cover;\">
                </div>
                <h5 class=\"mb-3\">Êtes-vous sûr de vouloir supprimer votre photo de profil ?</h5>
                <p class=\"text-muted mb-0\">Cette action est irréversible.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">
                    <i class=\"bi bi-x me-2\"></i>Annuler
                </button>
                <form action=\"{{ path('app_profile_delete_photo') }}\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-photo') }}\">
                    <button type=\"submit\" class=\"btn btn-danger px-4\">
                        <i class=\"bi bi-trash-fill me-2\"></i>Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endif %}

<!-- Messages flash -->
{% for message in app.flashes('success') %}
    <div class=\"position-fixed bottom-0 end-0 p-3\" style=\"z-index: 9999\">
        <div class=\"toast show bg-success text-white\" role=\"alert\">
            <div class=\"toast-header bg-success text-white border-0\">
                <i class=\"bi bi-check-circle-fill me-2\"></i>
                <strong class=\"me-auto\">Succès</strong>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"toast\"></button>
            </div>
            <div class=\"toast-body\">
                {{ message }}
            </div>
        </div>
    </div>
{% endfor %}

{% for message in app.flashes('error') %}
    <div class=\"position-fixed bottom-0 end-0 p-3\" style=\"z-index: 9999\">
        <div class=\"toast show bg-danger text-white\" role=\"alert\">
            <div class=\"toast-header bg-danger text-white border-0\">
                <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                <strong class=\"me-auto\">Erreur</strong>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"toast\"></button>
            </div>
            <div class=\"toast-body\">
                {{ message }}
            </div>
        </div>
    </div>
{% endfor %}

<style>
:root {
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

/* Header */
.edit-header {
    background: var(--primary-gradient);
    position: relative;
    min-height: 160px;
}

.floating-shapes-mini {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    opacity: 0.3;
    z-index: 1;
}

.shape-mini {
    position: absolute;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
}

.shape-1-mini {
    width: 100px;
    height: 100px;
    top: -30px;
    right: -20px;
    animation: floatMini 8s ease-in-out infinite;
}

.shape-2-mini {
    width: 70px;
    height: 70px;
    bottom: -20px;
    left: -15px;
    animation: floatMini 12s ease-in-out infinite reverse;
}

@keyframes floatMini {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-10px) rotate(5deg); }
}

.wave-decoration-mini {
    position: absolute;
    bottom: -1px;
    left: 0;
    right: 0;
    line-height: 0;
    z-index: 2;
}

.wave-decoration-mini svg {
    width: 100%;
    height: 40px;
}

.icon-wrapper {
    transition: transform 0.3s ease;
}

.icon-wrapper:hover {
    transform: scale(1.05) rotate(5deg);
}

/* Tabs */
.nav-tabs {
    border-bottom: 2px solid #dee2e6;
}

.nav-tabs .nav-link {
    border: none;
    color: #6c757d;
    font-weight: 500;
    padding: 1rem;
    transition: all 0.3s ease;
}

.nav-tabs .nav-link:hover {
    color: #667eea;
    background: rgba(102, 126, 234, 0.05);
}

.nav-tabs .nav-link.active {
    color: #667eea;
    background: transparent;
    border-bottom: 3px solid #667eea;
}

/* Formulaire */
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

.form-control-lg {
    height: 55px;
    border-radius: 12px;
    border: 2px solid #e9ecef;
    transition: all 0.3s ease;
}

.form-control-lg:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
}

.form-control-lg.bg-light:disabled {
    background-color: #f8f9fa;
    cursor: not-allowed;
    opacity: 0.8;
}

/* Photo */
.photo-container {
    position: relative;
    display: inline-block;
}

.photo-container .badge {
    font-size: 1rem;
    padding: 0.5rem;
}

/* Boutons */
.btn {
    border-radius: 12px;
    transition: all 0.3s ease;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.15);
}

.btn-primary {
    background: var(--primary-gradient);
    border: none;
}

.btn-outline-danger:hover {
    background: #dc3545;
    color: white;
}

/* Toast */
.toast {
    min-width: 300px;
    border-radius: 12px;
    border: none;
}

.toast-header {
    border-radius: 12px 12px 0 0;
}

/* Modal */
.modal-content {
    border-radius: 20px;
    overflow: hidden;
}

.modal-header.bg-danger {
    background: linear-gradient(135deg, #f87171 0%, #dc2626 100%) !important;
}

/* Animations */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.card {
    animation: fadeIn 0.5s ease-out;
}

/* Badge */
.badge.bg-white.bg-opacity-20 {
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.2);
}

/* Alert */
.alert-danger {
    background: linear-gradient(135deg, #fee 0%, #fdd 100%);
    border: none;
    border-left: 5px solid #dc3545;
}

/* Responsive */
@media (max-width: 768px) {
    .nav-tabs .nav-link {
        padding: 0.75rem 0.5rem;
        font-size: 0.9rem;
    }
    
    .btn-lg {
        padding: 0.5rem 1rem;
        font-size: 1rem;
    }
}
</style>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ✅ Récupérer l'ID du champ photo
    let photoInput = document.getElementById('profile_photo_input');
    
    const selectPhotoBtn = document.getElementById('selectPhotoBtn');
    const mainPhotoPreview = document.getElementById('mainPhotoPreview');
    const mainPhotoPlaceholder = document.getElementById('mainPhotoPlaceholder');
    const newPhotoPreviewContainer = document.getElementById('newPhotoPreviewContainer');
    const newPhotoPreview = document.getElementById('newPhotoPreview');
    const fileName = document.getElementById('fileName');
    const cancelNewPhotoBtn = document.getElementById('cancelNewPhotoBtn');
    
    console.log('PhotoInput trouvé:', photoInput);
    console.log('SelectPhotoBtn trouvé:', selectPhotoBtn);
    
    // ✅ Ouvrir le sélecteur de fichier
    if (photoInput && selectPhotoBtn) {
        selectPhotoBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            photoInput.click();
        });
        
        // ✅ Quand un fichier est sélectionné
        photoInput.addEventListener('change', function(e) {
            console.log('Fichier sélectionné:', this.files);
            if (this.files.length > 0) {
                handleNewPhoto(this.files[0]);
            }
        });
    } else {
        console.error('❌ Éléments photo non trouvés!');
    }
    
    // ✅ Annuler la nouvelle photo
    if (cancelNewPhotoBtn) {
        cancelNewPhotoBtn.addEventListener('click', function() {
            photoInput.value = '';
            newPhotoPreviewContainer.style.display = 'none';
            // Recharger la page pour revenir à la photo originale
            location.reload();
        });
    }
    
    function handleNewPhoto(file) {
        console.log('Traitement du fichier:', file.name);
        
        // Vérifier la taille
        if (file.size > 2 * 1024 * 1024) {
            Swal.fire({
                icon: 'error',
                title: 'Fichier trop volumineux',
                text: 'Le fichier ne doit pas dépasser 2 Mo',
                timer: 3000,
                showConfirmButton: false
            });
            photoInput.value = '';
            return;
        }
        
        // Vérifier le type
        if (!file.type.startsWith('image/')) {
            Swal.fire({
                icon: 'error',
                title: 'Format non supporté',
                text: 'Veuillez sélectionner une image valide (JPG, PNG, GIF, WebP)',
                timer: 3000,
                showConfirmButton: false
            });
            photoInput.value = '';
            return;
        }
        
        // Afficher le nom du fichier
        fileName.textContent = file.name;
        
        // Prévisualiser l'image
        const reader = new FileReader();
        reader.onload = function(e) {
            const imageData = e.target.result;
            
            // Afficher l'aperçu de la nouvelle photo
            newPhotoPreview.src = imageData;
            newPhotoPreviewContainer.style.display = 'block';
            
            // Mettre à jour la photo principale
            if (mainPhotoPreview) {
                mainPhotoPreview.src = imageData;
            } else if (mainPhotoPlaceholder) {
                const img = document.createElement('img');
                img.src = imageData;
                img.className = 'rounded-circle shadow-lg';
                img.id = 'mainPhotoPreview';
                img.style.width = '200px';
                img.style.height = '200px';
                img.style.objectFit = 'cover';
                img.style.border = '5px solid #667eea';
                
                const parentDiv = mainPhotoPlaceholder.parentNode;
                parentDiv.replaceChild(img, mainPhotoPlaceholder);
            }
            
            Swal.fire({
                icon: 'success',
                title: 'Photo chargée',
                text: 'N\\'oubliez pas d\\'enregistrer vos modifications',
                timer: 2000,
                showConfirmButton: false
            });
        };
        reader.readAsDataURL(file);
    }
    
    // ✅ GESTION DE LA SUPPRESSION DE PHOTO
    const deletePhotoForm = document.querySelector('form[action=\"{{ path('app_profile_delete_photo') }}\"]');
    if (deletePhotoForm) {
        deletePhotoForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            Swal.fire({
                title: 'Supprimer la photo ?',
                text: \"Cette action est irréversible.\",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Oui, supprimer',
                cancelButtonText: 'Annuler'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            });
        });
    }
    
    // ✅ Initialisation des toasts
    const toastElList = [].slice.call(document.querySelectorAll('.toast'));
    toastElList.forEach(function(toastEl) {
        new bootstrap.Toast(toastEl, { autohide: true, delay: 3000 }).show();
    });
});
</script>
{% endblock %}", "profile/edit.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\profile\\edit.html.twig");
    }
}
