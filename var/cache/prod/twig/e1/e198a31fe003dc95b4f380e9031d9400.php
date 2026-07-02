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

/* super_admin/hma_service/_form.html.twig */
class __TwigTemplate_102bb03cbcd8da9d23995a66cd1a729c extends Template
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
        $context["is_new"] = (null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 3), "value", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3));
        // line 4
        yield "
<div class=\"container-fluid py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10\">
            <!-- Carte principale -->
            <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden animate__animated animate__fadeInUp\">
                <!-- En-tête avec dégradé -->
                <div class=\"card-header bg-gradient-primary text-white p-5\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"rounded-circle bg-white bg-opacity-25 p-4 me-4\">
                            <i class=\"bi bi-";
        // line 14
        yield (((($tmp = ($context["is_new"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("building-add") : ("pencil-square"));
        yield " fs-1 text-white\"></i>
                        </div>
                        <div>
                            <h1 class=\"display-5 fw-bold mb-2\">";
        // line 17
        yield (((($tmp = ($context["is_new"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Nouvelle entreprise") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Modifier " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 17), "value", [], "any", false, false, false, 17), "companyName", [], "any", false, false, false, 17)), "html", null, true)));
        yield "</h1>
                            <p class=\"lead mb-0 text-white-50\">
                                <i class=\"bi bi-info-circle me-2\"></i>
                                ";
        // line 20
        yield (((($tmp = ($context["is_new"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Créez un compte entreprise en quelques clics") : ("Modifiez les informations de l'entreprise"));
        yield "
                            </p>
                        </div>
                    </div>
                </div>

                ";
        // line 26
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate", "enctype" => "multipart/form-data"]]);
        yield "

                <!-- Progress Steps (uniquement pour création) -->
                ";
        // line 29
        if ((($tmp = ($context["is_new"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "                <div class=\"px-5 pt-5\">
                    <div class=\"steps\">
                        <div class=\"step active\">
                            <div class=\"step-icon\">1</div>
                            <div class=\"step-label\">Informations</div>
                        </div>
                        <div class=\"step\">
                            <div class=\"step-icon\">2</div>
                            <div class=\"step-label\">Configuration</div>
                        </div>
                        <div class=\"step\">
                            <div class=\"step-icon\">3</div>
                            <div class=\"step-label\">Activation</div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 47
        yield "
                <div class=\"card-body p-5\">
                    <!-- SECTION 1: INFORMATIONS GÉNÉRALES -->
                    <div class=\"form-section mb-5\">
                        <div class=\"section-header mb-4\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"section-icon\">
                                    <i class=\"bi bi-building fs-2 text-primary\"></i>
                                </div>
                                <div class=\"ms-3\">
                                    <h3 class=\"fw-bold mb-1\">Informations générales</h3>
                                    <p class=\"text-muted mb-0\">Identité et type de l'entreprise</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"row g-4\">
                            <div class=\"col-md-6\">
                                <div class=\"form-floating\">
                                    ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "companyName", [], "any", false, false, false, 66), 'widget');
        yield "
                                    ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "companyName", [], "any", false, false, false, 67), 'label', ["label_attr" => ["class" => "fw-semibold"]]);
        yield "
                                    <div class=\"invalid-feedback\">";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "companyName", [], "any", false, false, false, 68), 'errors');
        yield "</div>
                                </div>
                            </div>
                            
                            <div class=\"col-md-6\">
                                <div class=\"form-floating\">
                                    ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "companyType", [], "any", false, false, false, 74), 'widget');
        yield "
                                    ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "companyType", [], "any", false, false, false, 75), 'label', ["label_attr" => ["class" => "fw-semibold"]]);
        yield "
                                    <div class=\"invalid-feedback\">";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "companyType", [], "any", false, false, false, 76), 'errors');
        yield "</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 2: CONTACT -->
                    <div class=\"form-section mb-5\">
                        <div class=\"section-header mb-4\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"section-icon\">
                                    <i class=\"bi bi-envelope fs-2 text-primary\"></i>
                                </div>
                                <div class=\"ms-3\">
                                    <h3 class=\"fw-bold mb-1\">Contact</h3>
                                    <p class=\"text-muted mb-0\">Coordonnées de l'entreprise</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"row g-4\">
                            <div class=\"col-md-6\">
                                <div class=\"form-floating\">
                                    ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 99), 'widget');
        yield "
                                    ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 100), 'label', ["label_attr" => ["class" => "fw-semibold"]]);
        yield "
                                    <div class=\"invalid-feedback\">";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 101), 'errors');
        yield "</div>
                                    <small class=\"text-muted mt-2 d-block\">
                                        <i class=\"bi bi-info-circle me-1\"></i>
                                        Ce sera l'email de connexion
                                    </small>
                                </div>
                            </div>
                            
                            <div class=\"col-md-6\">
                                <div class=\"form-floating\">
                                    ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 111), 'widget');
        yield "
                                    ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 112), 'label', ["label_attr" => ["class" => "fw-semibold"]]);
        yield "
                                    <div class=\"invalid-feedback\">";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 113), 'errors');
        yield "</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 3: ADRESSE -->
                    <div class=\"form-section mb-5\">
                        <div class=\"section-header mb-4\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"section-icon\">
                                    <i class=\"bi bi-geo-alt fs-2 text-primary\"></i>
                                </div>
                                <div class=\"ms-3\">
                                    <h3 class=\"fw-bold mb-1\">Adresse</h3>
                                    <p class=\"text-muted mb-0\">Localisation de l'entreprise</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"row g-4\">
                            <div class=\"col-12\">
                                <div class=\"form-floating\">
                                    ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 136), 'widget', ["attr" => ["style" => "height: 100px"]]);
        yield "
                                    ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 137), 'label', ["label_attr" => ["class" => "fw-semibold"]]);
        yield "
                                    <div class=\"invalid-feedback\">";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 138), 'errors');
        yield "</div>
                                </div>
                            </div>
                            
                            <div class=\"col-md-4\">
                                <div class=\"form-floating\">
                                    ";
        // line 144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", false, false, false, 144), 'widget');
        yield "
                                    ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", false, false, false, 145), 'label', ["label_attr" => ["class" => "fw-semibold"]]);
        yield "
                                    <div class=\"invalid-feedback\">";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", false, false, false, 146), 'errors');
        yield "</div>
                                </div>
                            </div>
                            
                            <div class=\"col-md-4\">
                                <div class=\"form-floating\">
                                    ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "country", [], "any", false, false, false, 152), 'widget');
        yield "
                                    ";
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "country", [], "any", false, false, false, 153), 'label', ["label_attr" => ["class" => "fw-semibold"]]);
        yield "
                                    <div class=\"invalid-feedback\">";
        // line 154
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "country", [], "any", false, false, false, 154), 'errors');
        yield "</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 4: LOGO -->
                    <div class=\"form-section mb-5\">
                        <div class=\"section-header mb-4\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"section-icon\">
                                    <i class=\"bi bi-image fs-2 text-primary\"></i>
                                </div>
                                <div class=\"ms-3\">
                                    <h3 class=\"fw-bold mb-1\">Logo</h3>
                                    <p class=\"text-muted mb-0\">Image de profil de l'entreprise</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"card border-2 border-dashed bg-light rounded-4 p-4\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-md-8\">
                                            <label class=\"form-label fw-bold text-primary mb-3\">
                                                <i class=\"bi bi-cloud-upload me-2\"></i>
                                                ";
        // line 181
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "logoFile", [], "any", false, false, false, 181), 'label');
        yield "
                                            </label>
                                            ";
        // line 183
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "logoFile", [], "any", false, false, false, 183), 'widget');
        yield "
                                            <div class=\"invalid-feedback\">";
        // line 184
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "logoFile", [], "any", false, false, false, 184), 'errors');
        yield "</div>
                                            <div class=\"mt-3\">
                                                <div class=\"d-flex gap-3 text-muted small\">
                                                    <span><i class=\"bi bi-check-circle text-success me-1\"></i> JPG, PNG, GIF, WebP</span>
                                                    <span><i class=\"bi bi-check-circle text-success me-1\"></i> Max 2 Mo</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4 text-center\">
                                            ";
        // line 193
        if (( !($context["is_new"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 193), "value", [], "any", false, false, false, 193), "logo", [], "any", false, false, false, 193))) {
            // line 194
            yield "                                                <div class=\"position-relative\">
                                                    <div class=\"logo-preview-wrapper\">
                                                        <img src=\"";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 196), "value", [], "any", false, false, false, 196), "logo", [], "any", false, false, false, 196))), "html", null, true);
            yield "\" 
                                                             alt=\"Logo actuel\"
                                                             class=\"img-fluid rounded-3 shadow\"
                                                             style=\"max-height: 100px;\">
                                                    </div>
                                                    <span class=\"badge bg-success mt-2\">Logo actuel</span>
                                                </div>
                                            ";
        } else {
            // line 204
            yield "                                                <div class=\"text-muted\">
                                                    <i class=\"bi bi-image fs-1\"></i>
                                                    <p class=\"mb-0 small\">Aucun logo</p>
                                                </div>
                                            ";
        }
        // line 209
        yield "                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION CONFIGURATION - UNIQUEMENT POUR CRÉATION -->
                    ";
        // line 217
        if ((($tmp = ($context["is_new"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 218
            yield "                    <div class=\"form-section mb-5\">
                        <div class=\"section-header mb-4\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"section-icon\">
                                    <i class=\"bi bi-gear fs-2 text-primary\"></i>
                                </div>
                                <div class=\"ms-3\">
                                    <h3 class=\"fw-bold mb-1\">Configuration initiale</h3>
                                    <p class=\"text-muted mb-0\">Paramètres de lancement</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-8 mx-auto\">
                                <div class=\"card bg-gradient-soft border-0 rounded-4 p-4\">
                                    <!-- Champ mot de passe -->
                                    <div class=\"mb-4\">
                                        <label class=\"form-label fw-semibold\">";
            // line 236
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 236), 'label');
            yield "</label>
                                        ";
            // line 237
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 237), 'widget');
            yield "
                                        <small class=\"text-muted d-block mt-2\">
                                            <i class=\"bi bi-info-circle me-1\"></i>
                                            Laissez vide pour générer automatiquement
                                        </small>
                                    </div>

                                    <!-- Checkbox envoi email -->
                                    <div class=\"form-check form-switch mb-3\">
                                        ";
            // line 246
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "sendActivationEmail", [], "any", false, false, false, 246), 'widget');
            yield "
                                        <label class=\"form-check-label fw-bold fs-5\" for=\"";
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "sendActivationEmail", [], "any", false, false, false, 247), "vars", [], "any", false, false, false, 247), "id", [], "any", false, false, false, 247), "html", null, true);
            yield "\">
                                            ";
            // line 248
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "sendActivationEmail", [], "any", false, false, false, 248), 'label');
            yield "
                                        </label>
                                    </div>
                                    
                                    <div class=\"alert alert-info bg-opacity-10 border-0 rounded-3 mt-3\">
                                        <div class=\"d-flex\">
                                            <i class=\"bi bi-info-circle-fill fs-4 me-3\"></i>
                                            <div>
                                                <strong>Informations importantes :</strong>
                                                <ul class=\"mb-0 mt-2\">
                                                    <li>Le mot de passe sera généré automatiquement si vous laissez vide</li>
                                                    <li>L'email contiendra les identifiants de connexion</li>
                                                    <li>L'entreprise sera en mode TRIAL (14 jours d'essai)</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 270
        yield "
                    <!-- SECTION PARAMÈTRES -->
                    <div class=\"form-section mb-4\">
                        <div class=\"section-header mb-4\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"section-icon\">
                                    <i class=\"bi bi-sliders fs-2 text-primary\"></i>
                                </div>
                                <div class=\"ms-3\">
                                    <h3 class=\"fw-bold mb-1\">Paramètres</h3>
                                    <p class=\"text-muted mb-0\">Options de l'entreprise</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"card border-0 bg-light rounded-4 p-4\">
                                    <div class=\"form-check form-switch mb-3\">
                                        ";
        // line 289
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hmaActive", [], "any", false, false, false, 289), 'widget');
        yield "
                                        <label class=\"form-check-label fw-bold fs-5\" for=\"";
        // line 290
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hmaActive", [], "any", false, false, false, 290), "vars", [], "any", false, false, false, 290), "id", [], "any", false, false, false, 290), "html", null, true);
        yield "\">
                                            ";
        // line 291
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hmaActive", [], "any", false, false, false, 291), 'label');
        yield "
                                        </label>
                                    </div>
                                    <div class=\"small text-muted\">
                                        <i class=\"bi bi-info-circle me-1\"></i>
                                        Si désactivé, tous les utilisateurs seront bloqués
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ALERTE INFORMATIVE POUR L'ÉDITION -->
                    ";
        // line 304
        if ((($tmp =  !($context["is_new"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 305
            yield "                        <div class=\"alert alert-info bg-light border-0 rounded-4 p-4 mt-4\">
                            <div class=\"d-flex\">
                                <div class=\"me-4\">
                                    <i class=\"bi bi-info-circle-fill fs-1 text-primary\"></i>
                                </div>
                                <div>
                                    <h4 class=\"alert-heading mb-3\">Informations importantes</h4>
                                    <div class=\"row g-3\">
                                        <div class=\"col-md-6\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"bg-success bg-opacity-10 p-2 rounded-circle me-3\">
                                                    <i class=\"bi bi-lock-fill text-success\"></i>
                                                </div>
                                                <div>
                                                    <strong>Mot de passe</strong>
                                                    <p class=\"mb-0 small text-muted\">Non modifiable - l'utilisateur peut utiliser \"Mot de passe oublié\"</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"bg-primary bg-opacity-10 p-2 rounded-circle me-3\">
                                                    <i class=\"bi bi-image-fill text-primary\"></i>
                                                </div>
                                                <div>
                                                    <strong>Logo</strong>
                                                    <p class=\"mb-0 small text-muted\">Sélectionnez un fichier pour changer le logo</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 340
        yield "                </div>

                <!-- FOOTER AVEC BOUTONS D'ACTION -->
                <div class=\"card-footer bg-light p-4 border-0\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a href=\"";
        // line 345
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_index");
        yield "\" class=\"btn btn-outline-secondary btn-lg rounded-pill px-5\">
                            <i class=\"bi bi-arrow-left me-2\"></i>
                            ";
        // line 347
        yield (((($tmp = ($context["is_new"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Annuler") : ("Retour"));
        yield "
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary btn-lg rounded-pill px-5\" style=\"background: linear-gradient(135deg, #667eea, #764ba2); border: none;\">
                            <i class=\"bi bi-";
        // line 350
        yield (((($tmp = ($context["is_new"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("check-circle") : ("check-circle"));
        yield " me-2\"></i>
                            ";
        // line 351
        yield (((($tmp = ($context["is_new"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Créer l'entreprise") : ("Enregistrer les modifications"));
        yield "
                        </button>
                    </div>
                </div>

                ";
        // line 356
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>

<!-- Script pour la prévisualisation du logo -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const logoInput = document.getElementById('";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "logoFile", [], "any", false, false, false, 365), "vars", [], "any", false, false, false, 365), "id", [], "any", false, false, false, 365), "html", null, true);
        yield "');
    if (logoInput) {
        // Créer un élément pour la prévisualisation
        const previewContainer = document.createElement('div');
        previewContainer.className = 'mt-3 text-center';
        previewContainer.id = 'logoPreview';
        
        logoInput.parentNode.appendChild(previewContainer);
        
        logoInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                // Vérifier la taille
                if (file.size > 2 * 1024 * 1024) {
                    alert('Le fichier est trop volumineux. Maximum 2Mo.');
                    this.value = '';
                    return;
                }
                
                // Vérifier le type
                if (!file.type.startsWith('image/')) {
                    alert('Veuillez sélectionner une image valide.');
                    this.value = '';
                    return;
                }
                
                // Afficher la prévisualisation
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewContainer.innerHTML = `
                        <div class=\"position-relative d-inline-block\">
                            <img src=\"\${e.target.result}\" alt=\"Prévisualisation\" class=\"img-thumbnail rounded-3\" style=\"max-height: 150px;\">
                            <button type=\"button\" class=\"btn btn-sm btn-danger position-absolute top-0 end-0\" onclick=\"this.parentElement.remove(); logoInput.value = '';\">
                                <i class=\"bi bi-x\"></i>
                            </button>
                        </div>
                    `;
                }
                reader.readAsDataURL(file);
            }
        });
    }
});
</script>

<style>
/* Style général */
.form-section {
    background: white;
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 5px 20px rgba(0,0,0,0.02);
    border: 1px solid rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.form-section:hover {
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.1);
    border-color: rgba(102, 126, 234, 0.2);
}

.section-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #667eea;
}

/* Progress Steps */
.steps {
    display: flex;
    justify-content: space-between;
    margin-bottom: 3rem;
    position: relative;
}

.steps::before {
    content: '';
    position: absolute;
    top: 25px;
    left: 0;
    right: 0;
    height: 3px;
    background: #e9ecef;
    z-index: 1;
}

.step {
    position: relative;
    z-index: 2;
    text-align: center;
    flex: 1;
}

.step-icon {
    width: 50px;
    height: 50px;
    background: white;
    border: 3px solid #e9ecef;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 10px;
    font-weight: bold;
    font-size: 1.2rem;
    color: #6c757d;
    transition: all 0.3s ease;
}

.step.active .step-icon {
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-color: #667eea;
    color: white;
    transform: scale(1.1);
    box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
}

.step.active .step-label {
    color: #667eea;
    font-weight: 600;
}

.step-label {
    font-size: 0.9rem;
    color: #6c757d;
    font-weight: 500;
}

/* Form Floating Labels */
.form-floating > label {
    padding-left: 1.75rem;
    font-weight: 500;
}

.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-select ~ label {
    transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
    color: #667eea;
}

/* Border dashed */
.border-dashed {
    border-style: dashed !important;
}

/* Boutons */
.btn-primary {
    transition: all 0.3s ease;
    font-weight: 600;
    letter-spacing: 0.5px;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
}

.btn-outline-secondary {
    transition: all 0.3s ease;
    font-weight: 500;
}

.btn-outline-secondary:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(108, 117, 125, 0.2);
    background: white;
}

/* Animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate__fadeInUp {
    animation: fadeInUp 0.6s ease-out;
}

/* Logo preview */
.logo-preview-wrapper {
    display: inline-block;
    padding: 10px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

/* Responsive */
@media (max-width: 768px) {
    .form-section {
        padding: 1.5rem;
    }
    
    .steps {
        margin-bottom: 2rem;
    }
    
    .step-icon {
        width: 40px;
        height: 40px;
        font-size: 1rem;
    }
    
    .section-icon {
        width: 50px;
        height: 50px;
        font-size: 1.5rem;
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
        return "super_admin/hma_service/_form.html.twig";
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
        return array (  558 => 365,  546 => 356,  538 => 351,  534 => 350,  528 => 347,  523 => 345,  516 => 340,  479 => 305,  477 => 304,  461 => 291,  457 => 290,  453 => 289,  432 => 270,  407 => 248,  403 => 247,  399 => 246,  387 => 237,  383 => 236,  363 => 218,  361 => 217,  351 => 209,  344 => 204,  333 => 196,  329 => 194,  327 => 193,  315 => 184,  311 => 183,  306 => 181,  276 => 154,  272 => 153,  268 => 152,  259 => 146,  255 => 145,  251 => 144,  242 => 138,  238 => 137,  234 => 136,  208 => 113,  204 => 112,  200 => 111,  187 => 101,  183 => 100,  179 => 99,  153 => 76,  149 => 75,  145 => 74,  136 => 68,  132 => 67,  128 => 66,  107 => 47,  88 => 30,  86 => 29,  80 => 26,  71 => 20,  65 => 17,  59 => 14,  47 => 4,  45 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "super_admin/hma_service/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\hma_service\\_form.html.twig");
    }
}
