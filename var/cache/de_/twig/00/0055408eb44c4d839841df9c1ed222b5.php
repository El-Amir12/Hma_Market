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
class __TwigTemplate_96ab67800e39853fa7375255379f7086 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/hma_service/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/hma_service/_form.html.twig"));

        // line 2
        yield "
";
        // line 3
        $context["is_new"] = (null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "value", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3));
        // line 4
        yield "
<div class=\"container-fluid px-2 px-md-4 py-2 py-md-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-lg-10\">
            <!-- Carte principale -->
            <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                <!-- En-tête avec dégradé -->
                <div class=\"card-header bg-gradient-primary text-white p-3 p-md-5\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\">
                    <div class=\"d-flex align-items-center gap-3 gap-md-4\">
                        <div class=\"rounded-circle bg-white bg-opacity-25 p-3 p-md-4\">
                            <i class=\"bi bi-";
        // line 14
        yield (((($tmp = (isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 14, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("building-add") : ("pencil-square"));
        yield " fs-2 fs-md-1 text-white\"></i>
                        </div>
                        <div>
                            <h1 class=\"h4 h-md-3 h-lg-2 fw-bold mb-1 mb-md-2\">";
        // line 17
        yield (((($tmp = (isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 17, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Nouvelle entreprise") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Modifier " . Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "vars", [], "any", false, false, false, 17), "value", [], "any", false, false, false, 17), "companyName", [], "any", false, false, false, 17), 0, 20)), "html", null, true)));
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "vars", [], "any", false, false, false, 17), "value", [], "any", false, false, false, 17), "companyName", [], "any", false, false, false, 17)) > 20)) {
            yield "...";
        }
        yield "</h1>
                            <p class=\"lead mb-0 text-white-50 small d-none d-sm-block\">
                                <i class=\"bi bi-info-circle me-2\"></i>
                                ";
        // line 20
        yield (((($tmp = (isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 20, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Créez un compte entreprise en quelques clics") : ("Modifiez les informations de l'entreprise"));
        yield "
                            </p>
                            <p class=\"lead mb-0 text-white-50 small d-block d-sm-none\">
                                ";
        // line 23
        yield (((($tmp = (isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 23, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Création entreprise") : ("Modification entreprise"));
        yield "
                            </p>
                        </div>
                    </div>
                </div>

                ";
        // line 29
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate", "enctype" => "multipart/form-data"]]);
        yield "

                <!-- Progress Steps (uniquement pour création) -->
                ";
        // line 32
        if ((($tmp = (isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 32, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "                <div class=\"px-3 px-md-5 pt-3 pt-md-5\">
                    <div class=\"steps\">
                        <div class=\"step active\">
                            <div class=\"step-icon\">1</div>
                            <div class=\"step-label d-none d-sm-block\">Informations</div>
                            <div class=\"step-label d-block d-sm-none\">Info</div>
                        </div>
                        <div class=\"step\">
                            <div class=\"step-icon\">2</div>
                            <div class=\"step-label d-none d-sm-block\">Configuration</div>
                            <div class=\"step-label d-block d-sm-none\">Config</div>
                        </div>
                        <div class=\"step\">
                            <div class=\"step-icon\">3</div>
                            <div class=\"step-label d-none d-sm-block\">Activation</div>
                            <div class=\"step-label d-block d-sm-none\">Activer</div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 53
        yield "
                <div class=\"card-body p-3 p-md-5\">
                    <!-- SECTION 1: INFORMATIONS GÉNÉRALES -->
                    <div class=\"form-section mb-3 mb-md-5\">
                        <div class=\"section-header mb-3 mb-md-4\">
                            <div class=\"d-flex align-items-center gap-2 gap-md-3\">
                                <div class=\"section-icon p-2 p-md-3\">
                                    <i class=\"bi bi-building fs-4 fs-md-2 text-primary\"></i>
                                </div>
                                <div class=\"ms-1 ms-md-3\">
                                    <h3 class=\"fw-bold mb-1 fs-5 fs-md-4\">Informations générales</h3>
                                    <p class=\"text-muted mb-0 small d-none d-sm-block\">Identité et type de l'entreprise</p>
                                    <p class=\"text-muted mb-0 small d-block d-sm-none\">Identité et type</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"row g-2 g-md-4\">
                            <div class=\"col-12 col-md-6\">
                                <div class=\"form-floating\">
                                    ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "companyName", [], "any", false, false, false, 73), 'widget', ["attr" => ["style" => "font-size:0.85rem;"]]);
        yield "
                                    ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "companyName", [], "any", false, false, false, 74), 'label', ["label_attr" => ["class" => "fw-semibold", "style" => "font-size:0.85rem;"]]);
        yield "
                                    <div class=\"invalid-feedback\">";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "companyName", [], "any", false, false, false, 75), 'errors');
        yield "</div>
                                </div>
                            </div>
                            
                            <div class=\"col-12 col-md-6\">
                                <div class=\"form-floating\">
                                    ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "companyType", [], "any", false, false, false, 81), 'widget', ["attr" => ["style" => "font-size:0.85rem;"]]);
        yield "
                                    ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "companyType", [], "any", false, false, false, 82), 'label', ["label_attr" => ["class" => "fw-semibold", "style" => "font-size:0.85rem;"]]);
        yield "
                                    <div class=\"invalid-feedback\">";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "companyType", [], "any", false, false, false, 83), 'errors');
        yield "</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 2: CONTACT -->
                    <div class=\"form-section mb-3 mb-md-5\">
                        <div class=\"section-header mb-3 mb-md-4\">
                            <div class=\"d-flex align-items-center gap-2 gap-md-3\">
                                <div class=\"section-icon p-2 p-md-3\">
                                    <i class=\"bi bi-envelope fs-4 fs-md-2 text-primary\"></i>
                                </div>
                                <div class=\"ms-1 ms-md-3\">
                                    <h3 class=\"fw-bold mb-1 fs-5 fs-md-4\">Contact</h3>
                                    <p class=\"text-muted mb-0 small d-none d-sm-block\">Coordonnées de l'entreprise</p>
                                    <p class=\"text-muted mb-0 small d-block d-sm-none\">Coordonnées</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"row g-2 g-md-4\">
                            <div class=\"col-12 col-md-6\">
                                <div class=\"form-floating\">
                                    ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "email", [], "any", false, false, false, 107), 'widget', ["attr" => ["style" => "font-size:0.85rem;"]]);
        yield "
                                    ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "email", [], "any", false, false, false, 108), 'label', ["label_attr" => ["class" => "fw-semibold", "style" => "font-size:0.85rem;"]]);
        yield "
                                    <div class=\"invalid-feedback\">";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "email", [], "any", false, false, false, 109), 'errors');
        yield "</div>
                                    <small class=\"text-muted mt-1 d-block\" style=\"font-size:0.6rem;\">
                                        <i class=\"bi bi-info-circle me-1\"></i>
                                        Email de connexion
                                    </small>
                                </div>
                            </div>
                            
                            <div class=\"col-12 col-md-6\">
                                <div class=\"form-floating\">
                                    ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "phone", [], "any", false, false, false, 119), 'widget', ["attr" => ["style" => "font-size:0.85rem;"]]);
        yield "
                                    ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "phone", [], "any", false, false, false, 120), 'label', ["label_attr" => ["class" => "fw-semibold", "style" => "font-size:0.85rem;"]]);
        yield "
                                    <div class=\"invalid-feedback\">";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "phone", [], "any", false, false, false, 121), 'errors');
        yield "</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 3: ADRESSE -->
                    <div class=\"form-section mb-3 mb-md-5\">
                        <div class=\"section-header mb-3 mb-md-4\">
                            <div class=\"d-flex align-items-center gap-2 gap-md-3\">
                                <div class=\"section-icon p-2 p-md-3\">
                                    <i class=\"bi bi-geo-alt fs-4 fs-md-2 text-primary\"></i>
                                </div>
                                <div class=\"ms-1 ms-md-3\">
                                    <h3 class=\"fw-bold mb-1 fs-5 fs-md-4\">Adresse</h3>
                                    <p class=\"text-muted mb-0 small d-none d-sm-block\">Localisation de l'entreprise</p>
                                    <p class=\"text-muted mb-0 small d-block d-sm-none\">Localisation</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"row g-2 g-md-4\">
                            <div class=\"col-12\">
                                <div class=\"form-floating\">
                                    ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "address", [], "any", false, false, false, 145), 'widget', ["attr" => ["style" => "height: 80px; font-size:0.85rem;"]]);
        yield "
                                    ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "address", [], "any", false, false, false, 146), 'label', ["label_attr" => ["class" => "fw-semibold", "style" => "font-size:0.85rem;"]]);
        yield "
                                    <div class=\"invalid-feedback\">";
        // line 147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "address", [], "any", false, false, false, 147), 'errors');
        yield "</div>
                                </div>
                            </div>
                            
                            <div class=\"col-6 col-md-4\">
                                <div class=\"form-floating\">
                                    ";
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "city", [], "any", false, false, false, 153), 'widget', ["attr" => ["style" => "font-size:0.85rem;"]]);
        yield "
                                    ";
        // line 154
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "city", [], "any", false, false, false, 154), 'label', ["label_attr" => ["class" => "fw-semibold", "style" => "font-size:0.85rem;"]]);
        yield "
                                    <div class=\"invalid-feedback\">";
        // line 155
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "city", [], "any", false, false, false, 155), 'errors');
        yield "</div>
                                </div>
                            </div>
                            
                            <div class=\"col-6 col-md-4\">
                                <div class=\"form-floating\">
                                    ";
        // line 161
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "country", [], "any", false, false, false, 161), 'widget', ["attr" => ["style" => "font-size:0.85rem;"]]);
        yield "
                                    ";
        // line 162
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "country", [], "any", false, false, false, 162), 'label', ["label_attr" => ["class" => "fw-semibold", "style" => "font-size:0.85rem;"]]);
        yield "
                                    <div class=\"invalid-feedback\">";
        // line 163
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "country", [], "any", false, false, false, 163), 'errors');
        yield "</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 4: LOGO -->
                    <div class=\"form-section mb-3 mb-md-5\">
                        <div class=\"section-header mb-3 mb-md-4\">
                            <div class=\"d-flex align-items-center gap-2 gap-md-3\">
                                <div class=\"section-icon p-2 p-md-3\">
                                    <i class=\"bi bi-image fs-4 fs-md-2 text-primary\"></i>
                                </div>
                                <div class=\"ms-1 ms-md-3\">
                                    <h3 class=\"fw-bold mb-1 fs-5 fs-md-4\">Logo</h3>
                                    <p class=\"text-muted mb-0 small d-none d-sm-block\">Image de profil de l'entreprise</p>
                                    <p class=\"text-muted mb-0 small d-block d-sm-none\">Image de profil</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"card border-2 border-dashed bg-light rounded-4 p-3 p-md-4\">
                                    <div class=\"row align-items-center g-3 g-md-4\">
                                        <div class=\"col-12 col-md-8\">
                                            <label class=\"form-label fw-bold text-primary mb-2 mb-md-3 small\">
                                                <i class=\"bi bi-cloud-upload me-2\"></i>
                                                ";
        // line 191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "logoFile", [], "any", false, false, false, 191), 'label');
        yield "
                                            </label>
                                            ";
        // line 193
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "logoFile", [], "any", false, false, false, 193), 'widget', ["attr" => ["style" => "font-size:0.7rem;"]]);
        yield "
                                            <div class=\"invalid-feedback\">";
        // line 194
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "logoFile", [], "any", false, false, false, 194), 'errors');
        yield "</div>
                                            <div class=\"mt-2 mt-md-3\">
                                                <div class=\"d-flex flex-wrap gap-2 gap-md-3 text-muted small\" style=\"font-size:0.55rem;\">
                                                    <span><i class=\"bi bi-check-circle text-success me-1\"></i> JPG, PNG, GIF, WebP</span>
                                                    <span><i class=\"bi bi-check-circle text-success me-1\"></i> Max 2 Mo</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-md-4 text-center\">
                                            ";
        // line 203
        if (( !(isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 203, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "vars", [], "any", false, false, false, 203), "value", [], "any", false, false, false, 203), "logo", [], "any", false, false, false, 203))) {
            // line 204
            yield "                                                <div class=\"position-relative\">
                                                    <div class=\"logo-preview-wrapper d-inline-block p-2\">
                                                        <img src=\"";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "vars", [], "any", false, false, false, 206), "value", [], "any", false, false, false, 206), "logo", [], "any", false, false, false, 206))), "html", null, true);
            yield "\" 
                                                             alt=\"Logo actuel\"
                                                             class=\"img-fluid rounded-3 shadow\"
                                                             style=\"max-height: 80px; max-width: 100%;\">
                                                    </div>
                                                    <span class=\"badge bg-success mt-1 d-block\" style=\"font-size:0.5rem;\">Logo actuel</span>
                                                </div>
                                            ";
        } else {
            // line 214
            yield "                                                <div class=\"text-muted\">
                                                    <i class=\"bi bi-image fs-1\"></i>
                                                    <p class=\"mb-0 small\" style=\"font-size:0.55rem;\">Aucun logo</p>
                                                </div>
                                            ";
        }
        // line 219
        yield "                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION CONFIGURATION - UNIQUEMENT POUR CRÉATION -->
                    ";
        // line 227
        if ((($tmp = (isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 227, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 228
            yield "                    <div class=\"form-section mb-3 mb-md-5\">
                        <div class=\"section-header mb-3 mb-md-4\">
                            <div class=\"d-flex align-items-center gap-2 gap-md-3\">
                                <div class=\"section-icon p-2 p-md-3\">
                                    <i class=\"bi bi-gear fs-4 fs-md-2 text-primary\"></i>
                                </div>
                                <div class=\"ms-1 ms-md-3\">
                                    <h3 class=\"fw-bold mb-1 fs-5 fs-md-4\">Configuration initiale</h3>
                                    <p class=\"text-muted mb-0 small d-none d-sm-block\">Paramètres de lancement</p>
                                    <p class=\"text-muted mb-0 small d-block d-sm-none\">Paramètres</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-12 col-md-8 mx-auto\">
                                <div class=\"card bg-gradient-soft border-0 rounded-4 p-3 p-md-4\">
                                    <!-- Champ mot de passe -->
                                    <div class=\"mb-3 mb-md-4\">
                                        <label class=\"form-label fw-semibold small\">";
            // line 247
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), "plainPassword", [], "any", false, false, false, 247), 'label');
            yield "</label>
                                        ";
            // line 248
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 248, $this->source); })()), "plainPassword", [], "any", false, false, false, 248), 'widget', ["attr" => ["style" => "font-size:0.8rem;"]]);
            yield "
                                        <small class=\"text-muted d-block mt-1\" style=\"font-size:0.6rem;\">
                                            <i class=\"bi bi-info-circle me-1\"></i>
                                            Laissez vide pour générer automatiquement
                                        </small>
                                    </div>

                                    <!-- Checkbox envoi email -->
                                    <div class=\"form-check form-switch mb-2\">
                                        ";
            // line 257
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 257, $this->source); })()), "sendActivationEmail", [], "any", false, false, false, 257), 'widget');
            yield "
                                        <label class=\"form-check-label fw-bold small\" for=\"";
            // line 258
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 258, $this->source); })()), "sendActivationEmail", [], "any", false, false, false, 258), "vars", [], "any", false, false, false, 258), "id", [], "any", false, false, false, 258), "html", null, true);
            yield "\" style=\"font-size:0.8rem;\">
                                            ";
            // line 259
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 259, $this->source); })()), "sendActivationEmail", [], "any", false, false, false, 259), 'label');
            yield "
                                        </label>
                                    </div>
                                    
                                    <div class=\"alert alert-info bg-opacity-10 border-0 rounded-3 mt-3 p-2 p-md-3\">
                                        <div class=\"d-flex gap-2 gap-md-3\">
                                            <i class=\"bi bi-info-circle-fill fs-4 me-2\"></i>
                                            <div>
                                                <strong class=\"small\" style=\"font-size:0.7rem;\">Informations :</strong>
                                                <ul class=\"mb-0 mt-1 small\" style=\"font-size:0.6rem; padding-left:1rem;\">
                                                    <li>Mot de passe généré automatiquement si vide</li>
                                                    <li>Email avec identifiants de connexion</li>
                                                    <li>Mode TRIAL (14 jours d'essai)</li>
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
        // line 281
        yield "
                    <!-- SECTION PARAMÈTRES -->
                    <div class=\"form-section mb-3 mb-md-4\">
                        <div class=\"section-header mb-3 mb-md-4\">
                            <div class=\"d-flex align-items-center gap-2 gap-md-3\">
                                <div class=\"section-icon p-2 p-md-3\">
                                    <i class=\"bi bi-sliders fs-4 fs-md-2 text-primary\"></i>
                                </div>
                                <div class=\"ms-1 ms-md-3\">
                                    <h3 class=\"fw-bold mb-1 fs-5 fs-md-4\">Paramètres</h3>
                                    <p class=\"text-muted mb-0 small d-none d-sm-block\">Options de l'entreprise</p>
                                    <p class=\"text-muted mb-0 small d-block d-sm-none\">Options</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"card border-0 bg-light rounded-4 p-3 p-md-4\">
                                    <div class=\"form-check form-switch mb-2\">
                                        ";
        // line 301
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 301, $this->source); })()), "hmaActive", [], "any", false, false, false, 301), 'widget');
        yield "
                                        <label class=\"form-check-label fw-bold small\" for=\"";
        // line 302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 302, $this->source); })()), "hmaActive", [], "any", false, false, false, 302), "vars", [], "any", false, false, false, 302), "id", [], "any", false, false, false, 302), "html", null, true);
        yield "\" style=\"font-size:0.8rem;\">
                                            ";
        // line 303
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 303, $this->source); })()), "hmaActive", [], "any", false, false, false, 303), 'label');
        yield "
                                        </label>
                                    </div>
                                    <div class=\"small text-muted\" style=\"font-size:0.55rem;\">
                                        <i class=\"bi bi-info-circle me-1\"></i>
                                        Si désactivé, tous les utilisateurs seront bloqués
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ALERTE INFORMATIVE POUR L'ÉDITION -->
                    ";
        // line 316
        if ((($tmp =  !(isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 316, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 317
            yield "                        <div class=\"alert alert-info bg-light border-0 rounded-4 p-3 p-md-4 mt-3 mt-md-4\">
                            <div class=\"d-flex flex-column flex-sm-row gap-3 gap-md-4\">
                                <div class=\"text-center text-sm-start\">
                                    <i class=\"bi bi-info-circle-fill fs-1 text-primary\"></i>
                                </div>
                                <div>
                                    <h4 class=\"alert-heading mb-3 fs-5 fs-md-4\">Informations</h4>
                                    <div class=\"row g-2 g-md-3\">
                                        <div class=\"col-12 col-md-6\">
                                            <div class=\"d-flex align-items-center gap-2\">
                                                <div class=\"bg-success bg-opacity-10 p-2 rounded-circle\">
                                                    <i class=\"bi bi-lock-fill text-success\"></i>
                                                </div>
                                                <div>
                                                    <strong class=\"small\">Mot de passe</strong>
                                                    <p class=\"mb-0 small text-muted\" style=\"font-size:0.6rem;\">Non modifiable - \"Mot de passe oublié\"</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-md-6\">
                                            <div class=\"d-flex align-items-center gap-2\">
                                                <div class=\"bg-primary bg-opacity-10 p-2 rounded-circle\">
                                                    <i class=\"bi bi-image-fill text-primary\"></i>
                                                </div>
                                                <div>
                                                    <strong class=\"small\">Logo</strong>
                                                    <p class=\"mb-0 small text-muted\" style=\"font-size:0.6rem;\">Sélectionnez un fichier pour changer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 352
        yield "                </div>

                <!-- FOOTER AVEC BOUTONS D'ACTION -->
                <div class=\"card-footer bg-light p-3 p-md-4 border-0\">
                    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2 gap-md-3\">
                        <a href=\"";
        // line 357
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_index");
        yield "\" class=\"btn btn-outline-secondary w-100 w-sm-auto rounded-pill px-3 px-md-5\" style=\"font-size:0.7rem; padding:0.25rem 0.5rem;\">
                            <i class=\"bi bi-arrow-left me-1\"></i>
                            ";
        // line 359
        yield (((($tmp = (isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 359, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Annuler") : ("Retour"));
        yield "
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary w-100 w-sm-auto rounded-pill px-3 px-md-5\" style=\"background: linear-gradient(135deg, #667eea, #764ba2); border: none; font-size:0.7rem; padding:0.25rem 0.5rem;\">
                            <i class=\"bi bi-";
        // line 362
        yield (((($tmp = (isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 362, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("check-circle") : ("check-circle"));
        yield " me-1\"></i>
                            ";
        // line 363
        yield (((($tmp = (isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 363, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Créer") : ("Enregistrer"));
        yield "
                        </button>
                    </div>
                </div>

                ";
        // line 368
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 368, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>

<!-- Script pour la prévisualisation du logo -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const logoInput = document.getElementById('";
        // line 377
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 377, $this->source); })()), "logoFile", [], "any", false, false, false, 377), "vars", [], "any", false, false, false, 377), "id", [], "any", false, false, false, 377), "html", null, true);
        yield "');
    if (logoInput) {
        const previewContainer = document.createElement('div');
        previewContainer.className = 'mt-2 mt-md-3 text-center';
        previewContainer.id = 'logoPreview';
        logoInput.parentNode.appendChild(previewContainer);
        
        logoInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                if (file.size > 2 * 1024 * 1024) {
                    alert('Le fichier est trop volumineux. Maximum 2Mo.');
                    this.value = '';
                    return;
                }
                if (!file.type.startsWith('image/')) {
                    alert('Veuillez sélectionner une image valide.');
                    this.value = '';
                    return;
                }
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewContainer.innerHTML = `
                        <div class=\"position-relative d-inline-block\">
                            <img src=\"\${e.target.result}\" alt=\"Prévisualisation\" class=\"img-thumbnail rounded-3\" style=\"max-height: 100px;\">
                            <button type=\"button\" class=\"btn btn-sm btn-danger position-absolute top-0 end-0\" onclick=\"this.parentElement.remove(); logoInput.value = '';\" style=\"font-size:0.5rem; padding:0.1rem 0.2rem;\">
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
    border-radius: 16px;
    padding: 1rem;
    box-shadow: 0 5px 20px rgba(0,0,0,0.02);
    border: 1px solid rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.form-section:hover {
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.1);
    border-color: rgba(102, 126, 234, 0.2);
}

.section-icon {
    width: 45px;
    height: 45px;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #667eea;
}

/* Progress Steps */
.steps {
    display: flex;
    justify-content: space-between;
    margin-bottom: 1.5rem;
    position: relative;
}

.steps::before {
    content: '';
    position: absolute;
    top: 20px;
    left: 0;
    right: 0;
    height: 2px;
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
    width: 40px;
    height: 40px;
    background: white;
    border: 3px solid #e9ecef;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 5px;
    font-weight: bold;
    font-size: 1rem;
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
    font-size: 0.75rem;
    color: #6c757d;
    font-weight: 500;
}

/* Form Floating Labels */
.form-floating > label {
    padding-left: 1.5rem;
    font-weight: 500;
    font-size: 0.85rem;
}

.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-select ~ label {
    transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
    color: #667eea;
}

.form-floating > .form-control,
.form-floating > .form-select {
    height: calc(3rem + 2px);
    padding: 0.75rem 0.75rem 0.5rem 1.5rem;
    border-radius: 8px;
    border: 2px solid #e2e8f0;
    font-size: 0.85rem;
}

.form-floating > .form-control:focus,
.form-floating > .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
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

/* Logo preview */
.logo-preview-wrapper {
    display: inline-block;
    padding: 5px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

/* ========================================
   RESPONSIVE
======================================== */

@media (max-width: 576px) {
    .container-fluid {
        padding-left: 4px !important;
        padding-right: 4px !important;
    }
    
    .card {
        border-radius: 0.75rem !important;
    }
    .card-header {
        padding: 0.75rem !important;
    }
    .card-body {
        padding: 0.5rem 0.75rem !important;
    }
    .card-footer {
        padding: 0.5rem 0.75rem !important;
    }
    
    .form-section {
        padding: 0.75rem !important;
        border-radius: 12px !important;
    }
    
    .section-icon {
        width: 35px !important;
        height: 35px !important;
        border-radius: 8px !important;
    }
    .section-icon i {
        font-size: 1.2rem !important;
    }
    
    .steps {
        margin-bottom: 1rem !important;
    }
    .steps::before {
        top: 15px !important;
    }
    .step-icon {
        width: 30px !important;
        height: 30px !important;
        font-size: 0.7rem !important;
        border-width: 2px !important;
    }
    .step-label {
        font-size: 0.5rem !important;
    }
    
    .form-floating > label {
        font-size: 0.7rem !important;
        padding-left: 1rem !important;
    }
    .form-floating > .form-control,
    .form-floating > .form-select {
        height: calc(2.5rem + 2px) !important;
        padding: 0.5rem 0.5rem 0.35rem 1rem !important;
        font-size: 0.7rem !important;
        border-radius: 6px !important;
        border-width: 1.5px !important;
    }
    .form-floating > .form-control:focus ~ label,
    .form-floating > .form-control:not(:placeholder-shown) ~ label,
    .form-floating > .form-select ~ label {
        transform: scale(0.8) translateY(-0.4rem) translateX(0.1rem) !important;
    }
    
    .form-check.form-switch .form-check-input {
        width: 2.5em !important;
        height: 1.2em !important;
    }
    .form-check-label {
        font-size: 0.7rem !important;
    }
    
    .alert {
        padding: 0.5rem !important;
        border-radius: 8px !important;
    }
    .alert h4 {
        font-size: 0.85rem !important;
    }
    .alert .small {
        font-size: 0.55rem !important;
    }
    
    .btn {
        font-size: 0.6rem !important;
        padding: 0.2rem 0.4rem !important;
        border-radius: 2rem !important;
    }
    .btn i {
        font-size: 0.6rem !important;
    }
    .btn-outline-secondary, .btn-primary {
        padding: 0.2rem 0.8rem !important;
    }
    
    .row.g-2 {
        --bs-gutter-y: 0.5rem !important;
    }
    .row.g-3 {
        --bs-gutter-y: 0.5rem !important;
    }
    .row.g-4 {
        --bs-gutter-y: 0.5rem !important;
    }
    
    .bg-light.rounded-4.p-4 {
        padding: 0.75rem !important;
    }
    .rounded-4 {
        border-radius: 0.75rem !important;
    }
    
    .logo-preview-wrapper img {
        max-height: 60px !important;
    }
    
    .d-flex.gap-3 {
        gap: 0.5rem !important;
    }
    .d-flex.gap-4 {
        gap: 0.5rem !important;
    }
    
    /* Désactiver hover */
    .form-section:hover {
        box-shadow: none !important;
        border-color: rgba(0,0,0,0.05) !important;
    }
    .btn-primary:hover {
        transform: none !important;
        box-shadow: none !important;
    }
    .btn-outline-secondary:hover {
        transform: none !important;
        box-shadow: none !important;
    }
}

/* Tablette */
@media (min-width: 577px) and (max-width: 768px) {
    .card-header {
        padding: 1.5rem !important;
    }
    .card-body {
        padding: 1.5rem !important;
    }
    .card-footer {
        padding: 1rem !important;
    }
    
    .form-section {
        padding: 1.5rem !important;
    }
    
    .form-floating > label {
        font-size: 0.8rem !important;
    }
    .form-floating > .form-control,
    .form-floating > .form-select {
        font-size: 0.8rem !important;
    }
    
    .btn {
        font-size: 0.7rem !important;
        padding: 0.25rem 0.5rem !important;
    }
    
    .section-icon {
        width: 40px !important;
        height: 40px !important;
    }
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
        return array (  582 => 377,  570 => 368,  562 => 363,  558 => 362,  552 => 359,  547 => 357,  540 => 352,  503 => 317,  501 => 316,  485 => 303,  481 => 302,  477 => 301,  455 => 281,  430 => 259,  426 => 258,  422 => 257,  410 => 248,  406 => 247,  385 => 228,  383 => 227,  373 => 219,  366 => 214,  355 => 206,  351 => 204,  349 => 203,  337 => 194,  333 => 193,  328 => 191,  297 => 163,  293 => 162,  289 => 161,  280 => 155,  276 => 154,  272 => 153,  263 => 147,  259 => 146,  255 => 145,  228 => 121,  224 => 120,  220 => 119,  207 => 109,  203 => 108,  199 => 107,  172 => 83,  168 => 82,  164 => 81,  155 => 75,  151 => 74,  147 => 73,  125 => 53,  103 => 33,  101 => 32,  95 => 29,  86 => 23,  80 => 20,  71 => 17,  65 => 14,  53 => 4,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/super_admin/hma_service/_form.html.twig #}

{% set is_new = form.vars.value.id is null %}

<div class=\"container-fluid px-2 px-md-4 py-2 py-md-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-lg-10\">
            <!-- Carte principale -->
            <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                <!-- En-tête avec dégradé -->
                <div class=\"card-header bg-gradient-primary text-white p-3 p-md-5\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\">
                    <div class=\"d-flex align-items-center gap-3 gap-md-4\">
                        <div class=\"rounded-circle bg-white bg-opacity-25 p-3 p-md-4\">
                            <i class=\"bi bi-{{ is_new ? 'building-add' : 'pencil-square' }} fs-2 fs-md-1 text-white\"></i>
                        </div>
                        <div>
                            <h1 class=\"h4 h-md-3 h-lg-2 fw-bold mb-1 mb-md-2\">{{ is_new ? 'Nouvelle entreprise' : 'Modifier ' ~ form.vars.value.companyName|slice(0, 20) }}{% if form.vars.value.companyName|length > 20 %}...{% endif %}</h1>
                            <p class=\"lead mb-0 text-white-50 small d-none d-sm-block\">
                                <i class=\"bi bi-info-circle me-2\"></i>
                                {{ is_new ? 'Créez un compte entreprise en quelques clics' : 'Modifiez les informations de l\\'entreprise' }}
                            </p>
                            <p class=\"lead mb-0 text-white-50 small d-block d-sm-none\">
                                {{ is_new ? 'Création entreprise' : 'Modification entreprise' }}
                            </p>
                        </div>
                    </div>
                </div>

                {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate', 'enctype': 'multipart/form-data'}}) }}

                <!-- Progress Steps (uniquement pour création) -->
                {% if is_new %}
                <div class=\"px-3 px-md-5 pt-3 pt-md-5\">
                    <div class=\"steps\">
                        <div class=\"step active\">
                            <div class=\"step-icon\">1</div>
                            <div class=\"step-label d-none d-sm-block\">Informations</div>
                            <div class=\"step-label d-block d-sm-none\">Info</div>
                        </div>
                        <div class=\"step\">
                            <div class=\"step-icon\">2</div>
                            <div class=\"step-label d-none d-sm-block\">Configuration</div>
                            <div class=\"step-label d-block d-sm-none\">Config</div>
                        </div>
                        <div class=\"step\">
                            <div class=\"step-icon\">3</div>
                            <div class=\"step-label d-none d-sm-block\">Activation</div>
                            <div class=\"step-label d-block d-sm-none\">Activer</div>
                        </div>
                    </div>
                </div>
                {% endif %}

                <div class=\"card-body p-3 p-md-5\">
                    <!-- SECTION 1: INFORMATIONS GÉNÉRALES -->
                    <div class=\"form-section mb-3 mb-md-5\">
                        <div class=\"section-header mb-3 mb-md-4\">
                            <div class=\"d-flex align-items-center gap-2 gap-md-3\">
                                <div class=\"section-icon p-2 p-md-3\">
                                    <i class=\"bi bi-building fs-4 fs-md-2 text-primary\"></i>
                                </div>
                                <div class=\"ms-1 ms-md-3\">
                                    <h3 class=\"fw-bold mb-1 fs-5 fs-md-4\">Informations générales</h3>
                                    <p class=\"text-muted mb-0 small d-none d-sm-block\">Identité et type de l'entreprise</p>
                                    <p class=\"text-muted mb-0 small d-block d-sm-none\">Identité et type</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"row g-2 g-md-4\">
                            <div class=\"col-12 col-md-6\">
                                <div class=\"form-floating\">
                                    {{ form_widget(form.companyName, {'attr': {'style': 'font-size:0.85rem;'}}) }}
                                    {{ form_label(form.companyName, null, {'label_attr': {'class': 'fw-semibold', 'style': 'font-size:0.85rem;'}}) }}
                                    <div class=\"invalid-feedback\">{{ form_errors(form.companyName) }}</div>
                                </div>
                            </div>
                            
                            <div class=\"col-12 col-md-6\">
                                <div class=\"form-floating\">
                                    {{ form_widget(form.companyType, {'attr': {'style': 'font-size:0.85rem;'}}) }}
                                    {{ form_label(form.companyType, null, {'label_attr': {'class': 'fw-semibold', 'style': 'font-size:0.85rem;'}}) }}
                                    <div class=\"invalid-feedback\">{{ form_errors(form.companyType) }}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 2: CONTACT -->
                    <div class=\"form-section mb-3 mb-md-5\">
                        <div class=\"section-header mb-3 mb-md-4\">
                            <div class=\"d-flex align-items-center gap-2 gap-md-3\">
                                <div class=\"section-icon p-2 p-md-3\">
                                    <i class=\"bi bi-envelope fs-4 fs-md-2 text-primary\"></i>
                                </div>
                                <div class=\"ms-1 ms-md-3\">
                                    <h3 class=\"fw-bold mb-1 fs-5 fs-md-4\">Contact</h3>
                                    <p class=\"text-muted mb-0 small d-none d-sm-block\">Coordonnées de l'entreprise</p>
                                    <p class=\"text-muted mb-0 small d-block d-sm-none\">Coordonnées</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"row g-2 g-md-4\">
                            <div class=\"col-12 col-md-6\">
                                <div class=\"form-floating\">
                                    {{ form_widget(form.email, {'attr': {'style': 'font-size:0.85rem;'}}) }}
                                    {{ form_label(form.email, null, {'label_attr': {'class': 'fw-semibold', 'style': 'font-size:0.85rem;'}}) }}
                                    <div class=\"invalid-feedback\">{{ form_errors(form.email) }}</div>
                                    <small class=\"text-muted mt-1 d-block\" style=\"font-size:0.6rem;\">
                                        <i class=\"bi bi-info-circle me-1\"></i>
                                        Email de connexion
                                    </small>
                                </div>
                            </div>
                            
                            <div class=\"col-12 col-md-6\">
                                <div class=\"form-floating\">
                                    {{ form_widget(form.phone, {'attr': {'style': 'font-size:0.85rem;'}}) }}
                                    {{ form_label(form.phone, null, {'label_attr': {'class': 'fw-semibold', 'style': 'font-size:0.85rem;'}}) }}
                                    <div class=\"invalid-feedback\">{{ form_errors(form.phone) }}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 3: ADRESSE -->
                    <div class=\"form-section mb-3 mb-md-5\">
                        <div class=\"section-header mb-3 mb-md-4\">
                            <div class=\"d-flex align-items-center gap-2 gap-md-3\">
                                <div class=\"section-icon p-2 p-md-3\">
                                    <i class=\"bi bi-geo-alt fs-4 fs-md-2 text-primary\"></i>
                                </div>
                                <div class=\"ms-1 ms-md-3\">
                                    <h3 class=\"fw-bold mb-1 fs-5 fs-md-4\">Adresse</h3>
                                    <p class=\"text-muted mb-0 small d-none d-sm-block\">Localisation de l'entreprise</p>
                                    <p class=\"text-muted mb-0 small d-block d-sm-none\">Localisation</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"row g-2 g-md-4\">
                            <div class=\"col-12\">
                                <div class=\"form-floating\">
                                    {{ form_widget(form.address, {'attr': {'style': 'height: 80px; font-size:0.85rem;'}}) }}
                                    {{ form_label(form.address, null, {'label_attr': {'class': 'fw-semibold', 'style': 'font-size:0.85rem;'}}) }}
                                    <div class=\"invalid-feedback\">{{ form_errors(form.address) }}</div>
                                </div>
                            </div>
                            
                            <div class=\"col-6 col-md-4\">
                                <div class=\"form-floating\">
                                    {{ form_widget(form.city, {'attr': {'style': 'font-size:0.85rem;'}}) }}
                                    {{ form_label(form.city, null, {'label_attr': {'class': 'fw-semibold', 'style': 'font-size:0.85rem;'}}) }}
                                    <div class=\"invalid-feedback\">{{ form_errors(form.city) }}</div>
                                </div>
                            </div>
                            
                            <div class=\"col-6 col-md-4\">
                                <div class=\"form-floating\">
                                    {{ form_widget(form.country, {'attr': {'style': 'font-size:0.85rem;'}}) }}
                                    {{ form_label(form.country, null, {'label_attr': {'class': 'fw-semibold', 'style': 'font-size:0.85rem;'}}) }}
                                    <div class=\"invalid-feedback\">{{ form_errors(form.country) }}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 4: LOGO -->
                    <div class=\"form-section mb-3 mb-md-5\">
                        <div class=\"section-header mb-3 mb-md-4\">
                            <div class=\"d-flex align-items-center gap-2 gap-md-3\">
                                <div class=\"section-icon p-2 p-md-3\">
                                    <i class=\"bi bi-image fs-4 fs-md-2 text-primary\"></i>
                                </div>
                                <div class=\"ms-1 ms-md-3\">
                                    <h3 class=\"fw-bold mb-1 fs-5 fs-md-4\">Logo</h3>
                                    <p class=\"text-muted mb-0 small d-none d-sm-block\">Image de profil de l'entreprise</p>
                                    <p class=\"text-muted mb-0 small d-block d-sm-none\">Image de profil</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"card border-2 border-dashed bg-light rounded-4 p-3 p-md-4\">
                                    <div class=\"row align-items-center g-3 g-md-4\">
                                        <div class=\"col-12 col-md-8\">
                                            <label class=\"form-label fw-bold text-primary mb-2 mb-md-3 small\">
                                                <i class=\"bi bi-cloud-upload me-2\"></i>
                                                {{ form_label(form.logoFile) }}
                                            </label>
                                            {{ form_widget(form.logoFile, {'attr': {'style': 'font-size:0.7rem;'}}) }}
                                            <div class=\"invalid-feedback\">{{ form_errors(form.logoFile) }}</div>
                                            <div class=\"mt-2 mt-md-3\">
                                                <div class=\"d-flex flex-wrap gap-2 gap-md-3 text-muted small\" style=\"font-size:0.55rem;\">
                                                    <span><i class=\"bi bi-check-circle text-success me-1\"></i> JPG, PNG, GIF, WebP</span>
                                                    <span><i class=\"bi bi-check-circle text-success me-1\"></i> Max 2 Mo</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-md-4 text-center\">
                                            {% if not is_new and form.vars.value.logo %}
                                                <div class=\"position-relative\">
                                                    <div class=\"logo-preview-wrapper d-inline-block p-2\">
                                                        <img src=\"{{ asset('uploads/logos/' ~ form.vars.value.logo) }}\" 
                                                             alt=\"Logo actuel\"
                                                             class=\"img-fluid rounded-3 shadow\"
                                                             style=\"max-height: 80px; max-width: 100%;\">
                                                    </div>
                                                    <span class=\"badge bg-success mt-1 d-block\" style=\"font-size:0.5rem;\">Logo actuel</span>
                                                </div>
                                            {% else %}
                                                <div class=\"text-muted\">
                                                    <i class=\"bi bi-image fs-1\"></i>
                                                    <p class=\"mb-0 small\" style=\"font-size:0.55rem;\">Aucun logo</p>
                                                </div>
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION CONFIGURATION - UNIQUEMENT POUR CRÉATION -->
                    {% if is_new %}
                    <div class=\"form-section mb-3 mb-md-5\">
                        <div class=\"section-header mb-3 mb-md-4\">
                            <div class=\"d-flex align-items-center gap-2 gap-md-3\">
                                <div class=\"section-icon p-2 p-md-3\">
                                    <i class=\"bi bi-gear fs-4 fs-md-2 text-primary\"></i>
                                </div>
                                <div class=\"ms-1 ms-md-3\">
                                    <h3 class=\"fw-bold mb-1 fs-5 fs-md-4\">Configuration initiale</h3>
                                    <p class=\"text-muted mb-0 small d-none d-sm-block\">Paramètres de lancement</p>
                                    <p class=\"text-muted mb-0 small d-block d-sm-none\">Paramètres</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-12 col-md-8 mx-auto\">
                                <div class=\"card bg-gradient-soft border-0 rounded-4 p-3 p-md-4\">
                                    <!-- Champ mot de passe -->
                                    <div class=\"mb-3 mb-md-4\">
                                        <label class=\"form-label fw-semibold small\">{{ form_label(form.plainPassword) }}</label>
                                        {{ form_widget(form.plainPassword, {'attr': {'style': 'font-size:0.8rem;'}}) }}
                                        <small class=\"text-muted d-block mt-1\" style=\"font-size:0.6rem;\">
                                            <i class=\"bi bi-info-circle me-1\"></i>
                                            Laissez vide pour générer automatiquement
                                        </small>
                                    </div>

                                    <!-- Checkbox envoi email -->
                                    <div class=\"form-check form-switch mb-2\">
                                        {{ form_widget(form.sendActivationEmail) }}
                                        <label class=\"form-check-label fw-bold small\" for=\"{{ form.sendActivationEmail.vars.id }}\" style=\"font-size:0.8rem;\">
                                            {{ form_label(form.sendActivationEmail) }}
                                        </label>
                                    </div>
                                    
                                    <div class=\"alert alert-info bg-opacity-10 border-0 rounded-3 mt-3 p-2 p-md-3\">
                                        <div class=\"d-flex gap-2 gap-md-3\">
                                            <i class=\"bi bi-info-circle-fill fs-4 me-2\"></i>
                                            <div>
                                                <strong class=\"small\" style=\"font-size:0.7rem;\">Informations :</strong>
                                                <ul class=\"mb-0 mt-1 small\" style=\"font-size:0.6rem; padding-left:1rem;\">
                                                    <li>Mot de passe généré automatiquement si vide</li>
                                                    <li>Email avec identifiants de connexion</li>
                                                    <li>Mode TRIAL (14 jours d'essai)</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% endif %}

                    <!-- SECTION PARAMÈTRES -->
                    <div class=\"form-section mb-3 mb-md-4\">
                        <div class=\"section-header mb-3 mb-md-4\">
                            <div class=\"d-flex align-items-center gap-2 gap-md-3\">
                                <div class=\"section-icon p-2 p-md-3\">
                                    <i class=\"bi bi-sliders fs-4 fs-md-2 text-primary\"></i>
                                </div>
                                <div class=\"ms-1 ms-md-3\">
                                    <h3 class=\"fw-bold mb-1 fs-5 fs-md-4\">Paramètres</h3>
                                    <p class=\"text-muted mb-0 small d-none d-sm-block\">Options de l'entreprise</p>
                                    <p class=\"text-muted mb-0 small d-block d-sm-none\">Options</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"card border-0 bg-light rounded-4 p-3 p-md-4\">
                                    <div class=\"form-check form-switch mb-2\">
                                        {{ form_widget(form.hmaActive) }}
                                        <label class=\"form-check-label fw-bold small\" for=\"{{ form.hmaActive.vars.id }}\" style=\"font-size:0.8rem;\">
                                            {{ form_label(form.hmaActive) }}
                                        </label>
                                    </div>
                                    <div class=\"small text-muted\" style=\"font-size:0.55rem;\">
                                        <i class=\"bi bi-info-circle me-1\"></i>
                                        Si désactivé, tous les utilisateurs seront bloqués
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ALERTE INFORMATIVE POUR L'ÉDITION -->
                    {% if not is_new %}
                        <div class=\"alert alert-info bg-light border-0 rounded-4 p-3 p-md-4 mt-3 mt-md-4\">
                            <div class=\"d-flex flex-column flex-sm-row gap-3 gap-md-4\">
                                <div class=\"text-center text-sm-start\">
                                    <i class=\"bi bi-info-circle-fill fs-1 text-primary\"></i>
                                </div>
                                <div>
                                    <h4 class=\"alert-heading mb-3 fs-5 fs-md-4\">Informations</h4>
                                    <div class=\"row g-2 g-md-3\">
                                        <div class=\"col-12 col-md-6\">
                                            <div class=\"d-flex align-items-center gap-2\">
                                                <div class=\"bg-success bg-opacity-10 p-2 rounded-circle\">
                                                    <i class=\"bi bi-lock-fill text-success\"></i>
                                                </div>
                                                <div>
                                                    <strong class=\"small\">Mot de passe</strong>
                                                    <p class=\"mb-0 small text-muted\" style=\"font-size:0.6rem;\">Non modifiable - \"Mot de passe oublié\"</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-md-6\">
                                            <div class=\"d-flex align-items-center gap-2\">
                                                <div class=\"bg-primary bg-opacity-10 p-2 rounded-circle\">
                                                    <i class=\"bi bi-image-fill text-primary\"></i>
                                                </div>
                                                <div>
                                                    <strong class=\"small\">Logo</strong>
                                                    <p class=\"mb-0 small text-muted\" style=\"font-size:0.6rem;\">Sélectionnez un fichier pour changer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endif %}
                </div>

                <!-- FOOTER AVEC BOUTONS D'ACTION -->
                <div class=\"card-footer bg-light p-3 p-md-4 border-0\">
                    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2 gap-md-3\">
                        <a href=\"{{ path('app_super_admin_hma_service_index') }}\" class=\"btn btn-outline-secondary w-100 w-sm-auto rounded-pill px-3 px-md-5\" style=\"font-size:0.7rem; padding:0.25rem 0.5rem;\">
                            <i class=\"bi bi-arrow-left me-1\"></i>
                            {{ is_new ? 'Annuler' : 'Retour' }}
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary w-100 w-sm-auto rounded-pill px-3 px-md-5\" style=\"background: linear-gradient(135deg, #667eea, #764ba2); border: none; font-size:0.7rem; padding:0.25rem 0.5rem;\">
                            <i class=\"bi bi-{{ is_new ? 'check-circle' : 'check-circle' }} me-1\"></i>
                            {{ is_new ? 'Créer' : 'Enregistrer' }}
                        </button>
                    </div>
                </div>

                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>

<!-- Script pour la prévisualisation du logo -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const logoInput = document.getElementById('{{ form.logoFile.vars.id }}');
    if (logoInput) {
        const previewContainer = document.createElement('div');
        previewContainer.className = 'mt-2 mt-md-3 text-center';
        previewContainer.id = 'logoPreview';
        logoInput.parentNode.appendChild(previewContainer);
        
        logoInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                if (file.size > 2 * 1024 * 1024) {
                    alert('Le fichier est trop volumineux. Maximum 2Mo.');
                    this.value = '';
                    return;
                }
                if (!file.type.startsWith('image/')) {
                    alert('Veuillez sélectionner une image valide.');
                    this.value = '';
                    return;
                }
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewContainer.innerHTML = `
                        <div class=\"position-relative d-inline-block\">
                            <img src=\"\${e.target.result}\" alt=\"Prévisualisation\" class=\"img-thumbnail rounded-3\" style=\"max-height: 100px;\">
                            <button type=\"button\" class=\"btn btn-sm btn-danger position-absolute top-0 end-0\" onclick=\"this.parentElement.remove(); logoInput.value = '';\" style=\"font-size:0.5rem; padding:0.1rem 0.2rem;\">
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
    border-radius: 16px;
    padding: 1rem;
    box-shadow: 0 5px 20px rgba(0,0,0,0.02);
    border: 1px solid rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.form-section:hover {
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.1);
    border-color: rgba(102, 126, 234, 0.2);
}

.section-icon {
    width: 45px;
    height: 45px;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #667eea;
}

/* Progress Steps */
.steps {
    display: flex;
    justify-content: space-between;
    margin-bottom: 1.5rem;
    position: relative;
}

.steps::before {
    content: '';
    position: absolute;
    top: 20px;
    left: 0;
    right: 0;
    height: 2px;
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
    width: 40px;
    height: 40px;
    background: white;
    border: 3px solid #e9ecef;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 5px;
    font-weight: bold;
    font-size: 1rem;
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
    font-size: 0.75rem;
    color: #6c757d;
    font-weight: 500;
}

/* Form Floating Labels */
.form-floating > label {
    padding-left: 1.5rem;
    font-weight: 500;
    font-size: 0.85rem;
}

.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-select ~ label {
    transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
    color: #667eea;
}

.form-floating > .form-control,
.form-floating > .form-select {
    height: calc(3rem + 2px);
    padding: 0.75rem 0.75rem 0.5rem 1.5rem;
    border-radius: 8px;
    border: 2px solid #e2e8f0;
    font-size: 0.85rem;
}

.form-floating > .form-control:focus,
.form-floating > .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
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

/* Logo preview */
.logo-preview-wrapper {
    display: inline-block;
    padding: 5px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

/* ========================================
   RESPONSIVE
======================================== */

@media (max-width: 576px) {
    .container-fluid {
        padding-left: 4px !important;
        padding-right: 4px !important;
    }
    
    .card {
        border-radius: 0.75rem !important;
    }
    .card-header {
        padding: 0.75rem !important;
    }
    .card-body {
        padding: 0.5rem 0.75rem !important;
    }
    .card-footer {
        padding: 0.5rem 0.75rem !important;
    }
    
    .form-section {
        padding: 0.75rem !important;
        border-radius: 12px !important;
    }
    
    .section-icon {
        width: 35px !important;
        height: 35px !important;
        border-radius: 8px !important;
    }
    .section-icon i {
        font-size: 1.2rem !important;
    }
    
    .steps {
        margin-bottom: 1rem !important;
    }
    .steps::before {
        top: 15px !important;
    }
    .step-icon {
        width: 30px !important;
        height: 30px !important;
        font-size: 0.7rem !important;
        border-width: 2px !important;
    }
    .step-label {
        font-size: 0.5rem !important;
    }
    
    .form-floating > label {
        font-size: 0.7rem !important;
        padding-left: 1rem !important;
    }
    .form-floating > .form-control,
    .form-floating > .form-select {
        height: calc(2.5rem + 2px) !important;
        padding: 0.5rem 0.5rem 0.35rem 1rem !important;
        font-size: 0.7rem !important;
        border-radius: 6px !important;
        border-width: 1.5px !important;
    }
    .form-floating > .form-control:focus ~ label,
    .form-floating > .form-control:not(:placeholder-shown) ~ label,
    .form-floating > .form-select ~ label {
        transform: scale(0.8) translateY(-0.4rem) translateX(0.1rem) !important;
    }
    
    .form-check.form-switch .form-check-input {
        width: 2.5em !important;
        height: 1.2em !important;
    }
    .form-check-label {
        font-size: 0.7rem !important;
    }
    
    .alert {
        padding: 0.5rem !important;
        border-radius: 8px !important;
    }
    .alert h4 {
        font-size: 0.85rem !important;
    }
    .alert .small {
        font-size: 0.55rem !important;
    }
    
    .btn {
        font-size: 0.6rem !important;
        padding: 0.2rem 0.4rem !important;
        border-radius: 2rem !important;
    }
    .btn i {
        font-size: 0.6rem !important;
    }
    .btn-outline-secondary, .btn-primary {
        padding: 0.2rem 0.8rem !important;
    }
    
    .row.g-2 {
        --bs-gutter-y: 0.5rem !important;
    }
    .row.g-3 {
        --bs-gutter-y: 0.5rem !important;
    }
    .row.g-4 {
        --bs-gutter-y: 0.5rem !important;
    }
    
    .bg-light.rounded-4.p-4 {
        padding: 0.75rem !important;
    }
    .rounded-4 {
        border-radius: 0.75rem !important;
    }
    
    .logo-preview-wrapper img {
        max-height: 60px !important;
    }
    
    .d-flex.gap-3 {
        gap: 0.5rem !important;
    }
    .d-flex.gap-4 {
        gap: 0.5rem !important;
    }
    
    /* Désactiver hover */
    .form-section:hover {
        box-shadow: none !important;
        border-color: rgba(0,0,0,0.05) !important;
    }
    .btn-primary:hover {
        transform: none !important;
        box-shadow: none !important;
    }
    .btn-outline-secondary:hover {
        transform: none !important;
        box-shadow: none !important;
    }
}

/* Tablette */
@media (min-width: 577px) and (max-width: 768px) {
    .card-header {
        padding: 1.5rem !important;
    }
    .card-body {
        padding: 1.5rem !important;
    }
    .card-footer {
        padding: 1rem !important;
    }
    
    .form-section {
        padding: 1.5rem !important;
    }
    
    .form-floating > label {
        font-size: 0.8rem !important;
    }
    .form-floating > .form-control,
    .form-floating > .form-select {
        font-size: 0.8rem !important;
    }
    
    .btn {
        font-size: 0.7rem !important;
        padding: 0.25rem 0.5rem !important;
    }
    
    .section-icon {
        width: 40px !important;
        height: 40px !important;
    }
}
</style>", "super_admin/hma_service/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\hma_service\\_form.html.twig");
    }
}
