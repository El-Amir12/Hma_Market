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

/* dashboard/hmaservice/edit.html.twig */
class __TwigTemplate_9127529cb64dae025eb460b72629dc45 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/hmaservice/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/hmaservice/edit.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Profil de l'entreprise";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<div class=\"container-fluid py-4\">
    <!-- Header -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <div>
                    <h1 class=\"h3 fw-bold text-dark mb-1\">
                        <i class=\"bi bi-building text-primary me-2\"></i>
                        Profil de l'entreprise
                    </h1>
                    <p class=\"text-muted mb-0\">Gérez les informations de votre entreprise</p>
                </div>
                <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"btn btn-outline-secondary\">
                    <i class=\"bi bi-arrow-left me-2\"></i>Retour au Dashboard
                </a>
            </div>
        </div>
    </div>

    <!-- Container horizontal en haut pour l'adresse -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm bg-light\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex align-items-center\">
                        <i class=\"bi bi-geo-alt-fill text-primary fs-4 me-3\"></i>
                        <div>
                            <h6 class=\"fw-bold mb-1\">Adresse de l'entreprise</h6>
                            <p class=\"mb-0\">
                                ";
        // line 36
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 36, $this->source); })()), "address", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 37, $this->source); })()), "address", [], "any", false, false, false, 37), "html", null, true);
            yield "
                                    ";
            // line 38
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 38, $this->source); })()), "city", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 38, $this->source); })()), "city", [], "any", false, false, false, 38), "html", null, true);
            }
            // line 39
            yield "                                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 39, $this->source); })()), "country", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 39, $this->source); })()), "country", [], "any", false, false, false, 39), "html", null, true);
            }
            // line 40
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 40, $this->source); })()), "latitude", [], "any", false, false, false, 40) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 40, $this->source); })()), "longitude", [], "any", false, false, false, 40))) {
                // line 41
                yield "                                        <span class=\"text-muted ms-2\">
                                            (GPS: ";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 42, $this->source); })()), "latitude", [], "any", false, false, false, 42), 6), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 42, $this->source); })()), "longitude", [], "any", false, false, false, 42), 6), "html", null, true);
                yield ")
                                        </span>
                                    ";
            }
            // line 45
            yield "                                ";
        } else {
            // line 46
            yield "                                    <span class=\"text-muted\">Adresse non renseignée</span>
                                ";
        }
        // line 48
        yield "                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Container principal avec photo à gauche et formulaire à droite -->
    <div class=\"row\">
        <!-- Côté gauche : Photo et informations basiques -->
        <div class=\"col-lg-4 mb-4\">
            <div class=\"card border-0 shadow-lg h-100\">
                <div class=\"card-body p-4\">
                    <!-- Logo -->
                    <div class=\"text-center mb-4\">
                        <div class=\"logo-container position-relative d-inline-block\">
                            ";
        // line 65
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 65, $this->source); })()), "logo", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 66, $this->source); })()), "logo", [], "any", false, false, false, 66))), "html", null, true);
            yield "\" 
                                     alt=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 67, $this->source); })()), "companyName", [], "any", false, false, false, 67), "html", null, true);
            yield "\" 
                                     class=\"img-fluid rounded-circle border border-4 border-light shadow-lg\"
                                     style=\"width: 180px; height: 180px; object-fit: cover;\"
                                     id=\"logo-preview\">
                                <button type=\"button\" 
                                        class=\"btn btn-danger btn-sm position-absolute rounded-circle shadow-sm\"
                                        style=\"bottom: 15px; right: 15px; width: 40px; height: 40px;\"
                                        data-bs-toggle=\"modal\" 
                                        data-bs-target=\"#deleteLogoModal\"
                                        title=\"Supprimer le logo\">
                                    <i class=\"bi bi-trash\"></i>
                                </button>
                            ";
        } else {
            // line 80
            yield "                                <div class=\"rounded-circle d-flex align-items-center justify-content-center bg-gradient-primary text-white border border-4 border-light shadow-lg\"
                                     style=\"width: 180px; height: 180px;\"
                                     id=\"logo-preview-placeholder\">
                                    <i class=\"bi bi-building\" style=\"font-size: 4rem;\"></i>
                                </div>
                            ";
        }
        // line 86
        yield "                        </div>
                        <h4 class=\"mt-4 mb-1 fw-bold\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 87, $this->source); })()), "companyName", [], "any", false, false, false, 87), "html", null, true);
        yield "</h4>
                        <div class=\"badge bg-primary-subtle text-primary rounded-pill px-3 py-2 mb-3\">
                            <i class=\"bi bi-award me-1\"></i>";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 89, $this->source); })()), "companyType", [], "any", false, false, false, 89)), "html", null, true);
        yield "
                        </div>
                    </div>

                    <!-- Informations basiques -->
                    <div class=\"border-top pt-4\">
                        <h6 class=\"fw-semibold mb-3\">
                            <i class=\"bi bi-info-circle me-2\"></i>Informations du compte
                        </h6>
                        <div class=\"list-group list-group-flush\">
                            <div class=\"list-group-item border-0 px-0 py-2\">
                                <div class=\"d-flex align-items-start\">
                                    <i class=\"bi bi-envelope text-muted me-2 mt-1\"></i>
                                    <div class=\"flex-grow-1\">
                                        <small class=\"text-muted d-block\">Email</small>
                                        <span class=\"fw-semibold text-break\">";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 104, $this->source); })()), "email", [], "any", false, false, false, 104), "html", null, true);
        yield "</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"list-group-item border-0 px-0 py-2\">
                                <div class=\"d-flex align-items-start\">
                                    <i class=\"bi bi-telephone text-muted me-2 mt-1\"></i>
                                    <div class=\"flex-grow-1\">
                                        <small class=\"text-muted d-block\">Téléphone</small>
                                        <span class=\"fw-semibold\">";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 113, $this->source); })()), "phone", [], "any", false, false, false, 113), "html", null, true);
        yield "</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"list-group-item border-0 px-0 py-2\">
                                <div class=\"d-flex align-items-start\">
                                    <i class=\"bi bi-tag text-muted me-2 mt-1\"></i>
                                    <div class=\"flex-grow-1\">
                                        <small class=\"text-muted d-block\">Abonnement</small>
                                        <span class=\"badge bg-success\">";
        // line 122
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "subscriptionNumber", [], "any", true, true, false, 122) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 122, $this->source); })()), "subscriptionNumber", [], "any", false, false, false, 122)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 122, $this->source); })()), "subscriptionNumber", [], "any", false, false, false, 122), "html", null, true)) : ("Non attribué"));
        yield "</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"list-group-item border-0 px-0 py-2\">
                                <div class=\"d-flex align-items-start\">
                                    <i class=\"bi bi-calendar text-muted me-2 mt-1\"></i>
                                    <div class=\"flex-grow-1\">
                                        <small class=\"text-muted d-block\">Créé le</small>
                                        <span>";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 131, $this->source); })()), "createdAt", [], "any", false, false, false, 131), "d/m/Y"), "html", null, true);
        yield "</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"list-group-item border-0 px-0 py-2\">
                                <div class=\"d-flex align-items-start\">
                                    <i class=\"bi bi-clock-history text-muted me-2 mt-1\"></i>
                                    <div class=\"flex-grow-1\">
                                        <small class=\"text-muted d-block\">Essai jusqu'au</small>
                                        <span class=\"fw-semibold ";
        // line 140
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 140, $this->source); })()), "trialEndsAt", [], "any", false, false, false, 140) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 140, $this->source); })()), "trialEndsAt", [], "any", false, false, false, 140) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+7 days")))) ? ("text-danger") : (""));
        yield "\">
                                            ";
        // line 141
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 141, $this->source); })()), "trialEndsAt", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 141, $this->source); })()), "trialEndsAt", [], "any", false, false, false, 141), "d/m/Y"), "html", null, true)) : ("Non défini"));
        yield "
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Côté droit : Formulaire de modification -->
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-lg h-100\">
                <div class=\"card-body p-4\">
                    <h5 class=\"card-title fw-bold mb-4\">
                        <i class=\"bi bi-pencil-square text-primary me-2\"></i>
                        Modifier les informations
                    </h5>
                    
                    ";
        // line 161
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true, "id" => "profile-form"]]);
        yield "

                    <!-- Upload logo -->
                    <div class=\"mb-4\">
                        <label class=\"form-label fw-semibold\">
                            <i class=\"bi bi-image me-1\"></i>Logo de l'entreprise
                        </label>
                        <div class=\"input-group\">
                            ";
        // line 169
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "logoFile", [], "any", false, false, false, 169), 'widget', ["attr" => ["class" => "form-control", "id" => "logo-file-input"]]);
        // line 174
        yield "
                            <button type=\"button\" class=\"btn btn-outline-secondary\" onclick=\"document.getElementById('logo-file-input').click()\">
                                <i class=\"bi bi-folder2-open\"></i>
                            </button>
                        </div>
                        <div class=\"form-text\">
                            <small>Formats acceptés : JPG, PNG, GIF, WebP, SVG • Max 2MB</small>
                        </div>
                        <div class=\"invalid-feedback\">
                            ";
        // line 183
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "logoFile", [], "any", false, false, false, 183), 'errors');
        yield "
                        </div>
                    </div>

                    <!-- Informations de base -->
                    <div class=\"row g-3 mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "companyName", [], "any", false, false, false, 191), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom de l'entreprise"]]);
        // line 196
        yield "
                                ";
        // line 197
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "companyName", [], "any", false, false, false, 197), 'label', ["label_attr" => ["class" => "form-label"]]);
        // line 201
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 203
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "companyName", [], "any", false, false, false, 203), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 209
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "companyType", [], "any", false, false, false, 209), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 213
        yield "
                                ";
        // line 214
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "companyType", [], "any", false, false, false, 214), 'label');
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 216
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "companyType", [], "any", false, false, false, 216), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Téléphone -->
                    <div class=\"mb-4\">
                        <div class=\"form-floating\">
                            ";
        // line 225
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "phone", [], "any", false, false, false, 225), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Téléphone"]]);
        // line 230
        yield "
                            ";
        // line 231
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "phone", [], "any", false, false, false, 231), 'label');
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 233
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), "phone", [], "any", false, false, false, 233), 'errors');
        yield "
                            </div>
                        </div>
                    </div>

                    <!-- Adresse -->
                    <div class=\"mb-4\">
                        <div class=\"form-floating\">
                            ";
        // line 241
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "address", [], "any", false, false, false, 241), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Adresse complète", "style" => "height: 100px"]]);
        // line 247
        yield "
                            ";
        // line 248
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 248, $this->source); })()), "address", [], "any", false, false, false, 248), 'label');
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 250
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "address", [], "any", false, false, false, 250), 'errors');
        yield "
                            </div>
                        </div>
                    </div>

                    <!-- Ville et Pays -->
                    <div class=\"row g-3 mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 259
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 259, $this->source); })()), "city", [], "any", false, false, false, 259), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ville"]]);
        // line 264
        yield "
                                ";
        // line 265
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 265, $this->source); })()), "city", [], "any", false, false, false, 265), 'label');
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 267
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 267, $this->source); })()), "city", [], "any", false, false, false, 267), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 273
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 273, $this->source); })()), "country", [], "any", false, false, false, 273), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 277
        yield "
                                ";
        // line 278
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 278, $this->source); })()), "country", [], "any", false, false, false, 278), 'label');
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 280
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 280, $this->source); })()), "country", [], "any", false, false, false, 280), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Coordonnées GPS -->
                    <div class=\"mb-5\">
                        <div class=\"card bg-light border-0\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center mb-3\">
                                    <div class=\"flex-grow-1\">
                                        <h6 class=\"mb-0 fw-semibold\">
                                            <i class=\"bi bi-geo-alt me-2 text-primary\"></i>
                                            Coordonnées GPS
                                        </h6>
                                        <small class=\"text-muted\">Optionnel - Pour la géolocalisation</small>
                                    </div>
                                    <button type=\"button\" class=\"btn btn-outline-primary btn-sm\" id=\"get-location-btn\">
                                        <i class=\"bi bi-geo me-1\"></i>Utiliser ma position
                                    </button>
                                </div>
                                <div class=\"row g-3\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-floating\">
                                            ";
        // line 305
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 305, $this->source); })()), "longitude", [], "any", false, false, false, 305), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Longitude", "id" => "longitude-input"]]);
        // line 311
        yield "
                                            ";
        // line 312
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 312, $this->source); })()), "longitude", [], "any", false, false, false, 312), 'label', ["label" => "Longitude"]);
        yield "
                                            <div class=\"invalid-feedback\">
                                                ";
        // line 314
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 314, $this->source); })()), "longitude", [], "any", false, false, false, 314), 'errors');
        yield "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-floating\">
                                            ";
        // line 320
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 320, $this->source); })()), "latitude", [], "any", false, false, false, 320), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Latitude", "id" => "latitude-input"]]);
        // line 326
        yield "
                                            ";
        // line 327
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 327, $this->source); })()), "latitude", [], "any", false, false, false, 327), 'label', ["label" => "Latitude"]);
        yield "
                                            <div class=\"invalid-feedback\">
                                                ";
        // line 329
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 329, $this->source); })()), "latitude", [], "any", false, false, false, 329), 'errors');
        yield "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Boutons d'action -->
                    <div class=\"d-flex justify-content-end gap-3 pt-4 border-top\">
                        <button type=\"button\" class=\"btn btn-outline-danger px-4\" data-bs-toggle=\"modal\" data-bs-target=\"#cancelModal\">
                            <i class=\"bi bi-x-circle me-2\"></i>Annuler
                        </button>
                        <button type=\"reset\" class=\"btn btn-light px-4\" id=\"reset-btn\">
                            <i class=\"bi bi-arrow-counterclockwise me-2\"></i>Réinitialiser
                        </button>
                        <button type=\"submit\" class=\"btn btn-primary px-4\" id=\"submit-btn\">
                            <i class=\"bi bi-save me-2\"></i>Enregistrer
                        </button>
                    </div>

                    ";
        // line 351
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 351, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour supprimer le logo -->
";
        // line 359
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 359, $this->source); })()), "logo", [], "any", false, false, false, 359)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 360
            yield "<div class=\"modal fade\" id=\"deleteLogoModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header border-0 pb-0\">
                <h5 class=\"modal-title text-danger\">
                    <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>Supprimer le logo
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <i class=\"bi bi-trash-fill text-danger\" style=\"font-size: 3rem;\"></i>
                </div>
                <h5 class=\"fw-bold mb-3\">Êtes-vous sûr ?</h5>
                <p class=\"text-muted\">Cette action supprimera définitivement le logo de votre entreprise.</p>
                <div class=\"my-3\">
                    <img src=\"";
            // line 376
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 376, $this->source); })()), "logo", [], "any", false, false, false, 376))), "html", null, true);
            yield "\" 
                         alt=\"";
            // line 377
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 377, $this->source); })()), "companyName", [], "any", false, false, false, 377), "html", null, true);
            yield "\" 
                         class=\"rounded-circle shadow\"
                         style=\"width: 100px; height: 100px; object-fit: cover;\">
                </div>
            </div>
            <div class=\"modal-footer border-0 pt-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    Annuler
                </button>
                <form action=\"";
            // line 386
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_hmaservice_delete_logo");
            yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 387
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-logo" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 387, $this->source); })()), "id", [], "any", false, false, false, 387))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"bi bi-trash me-1\"></i>Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        }
        // line 397
        yield "
<!-- Modal pour annuler les modifications -->
<div class=\"modal fade\" id=\"cancelModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header border-0 pb-0\">
                <h5 class=\"modal-title text-warning\">
                    <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>Annuler les modifications
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <i class=\"bi bi-question-circle-fill text-warning\" style=\"font-size: 3rem;\"></i>
                </div>
                <h5 class=\"fw-bold mb-3\">Annuler les modifications ?</h5>
                <p class=\"text-muted\">Toutes les modifications non enregistrées seront perdues. Voulez-vous vraiment quitter cette page ?</p>
            </div>
            <div class=\"modal-footer border-0 pt-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    Continuer l'édition
                </button>
                <a href=\"";
        // line 419
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"btn btn-warning\">
                    <i class=\"bi bi-x-circle me-1\"></i>Quitter sans enregistrer
                </a>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 429
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

        // line 430
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    'use strict';
    
    // ================================================
    // 1. RÉCUPÉRATION DES ÉLÉMENTS DU FORMULAIRE
    // ================================================
    
    // Champs du formulaire
    const form = document.getElementById('profile-form');
    const submitBtn = document.getElementById('submit-btn');
    const resetBtn = document.getElementById('reset-btn');
    
    // Champs GPS - ✅ CORRIGÉ : Utilisation des IDs Symfony
    const longitudeInput = document.getElementById('";
        // line 445
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 445, $this->source); })()), "longitude", [], "any", false, false, false, 445), "vars", [], "any", false, false, false, 445), "id", [], "any", false, false, false, 445), "html", null, true);
        yield "');
    const latitudeInput = document.getElementById('";
        // line 446
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 446, $this->source); })()), "latitude", [], "any", false, false, false, 446), "vars", [], "any", false, false, false, 446), "id", [], "any", false, false, false, 446), "html", null, true);
        yield "');
    const getLocationBtn = document.getElementById('get-location-btn');
    
    // Champs d'adresse
    const addressInput = document.getElementById('";
        // line 450
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 450, $this->source); })()), "address", [], "any", false, false, false, 450), "vars", [], "any", false, false, false, 450), "id", [], "any", false, false, false, 450), "html", null, true);
        yield "');
    const cityInput = document.getElementById('";
        // line 451
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 451, $this->source); })()), "city", [], "any", false, false, false, 451), "vars", [], "any", false, false, false, 451), "id", [], "any", false, false, false, 451), "html", null, true);
        yield "');
    const countrySelect = document.getElementById('";
        // line 452
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 452, $this->source); })()), "country", [], "any", false, false, false, 452), "vars", [], "any", false, false, false, 452), "id", [], "any", false, false, false, 452), "html", null, true);
        yield "');
    
    // Champs mot de passe
    const newPasswordInput = document.getElementById('";
        // line 455
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "newPassword", [], "any", false, true, false, 455), "vars", [], "any", false, true, false, 455), "id", [], "any", true, true, false, 455)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 455, $this->source); })()), "newPassword", [], "any", false, false, false, 455), "vars", [], "any", false, false, false, 455), "id", [], "any", false, false, false, 455), "html", null, true)) : (""));
        yield "');
    const confirmPasswordInput = document.getElementById('";
        // line 456
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "confirmPassword", [], "any", false, true, false, 456), "vars", [], "any", false, true, false, 456), "id", [], "any", true, true, false, 456)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 456, $this->source); })()), "confirmPassword", [], "any", false, false, false, 456), "vars", [], "any", false, false, false, 456), "id", [], "any", false, false, false, 456), "html", null, true)) : (""));
        yield "');
    
    // Logo
    const logoFileInput = document.getElementById('logo-file-input');
    
    // État du formulaire
    let formModified = false;
    
    // ================================================
    // 2. GÉOLOCALISATION - ✅ CORRIGÉ
    // ================================================
    
    if (getLocationBtn) {
        getLocationBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            // ✅ Vérification que les champs existent
            if (!longitudeInput || !latitudeInput) {
                showToast('❌ Champs de coordonnées non trouvés', 'danger');
                console.error('Champs GPS manquants:', { longitude: longitudeInput, latitude: latitudeInput });
                return;
            }
            
            if (!navigator.geolocation) {
                showToast('❌ La géolocalisation n\\'est pas supportée par votre navigateur.', 'danger');
                return;
            }

            // UI: Désactiver le bouton
            const btn = this;
            const originalText = btn.innerHTML;
            btn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\" role=\"status\" aria-hidden=\"true\"></span>Obtention de la position...';
            btn.disabled = true;

            // Options de géolocalisation
            const options = {
                enableHighAccuracy: true,
                timeout: 10000,
                maximumAge: 0
            };

            // Succès
            const success = (position) => {
                const longitude = position.coords.longitude;
                const latitude = position.coords.latitude;
                
                console.log('📍 Position obtenue:', { longitude, latitude });
                
                // ✅ Mise à jour des champs
                longitudeInput.value = longitude.toFixed(8);
                latitudeInput.value = latitude.toFixed(8);
                
                // ✅ Déclenchement des événements
                longitudeInput.dispatchEvent(new Event('input', { bubbles: true }));
                longitudeInput.dispatchEvent(new Event('change', { bubbles: true }));
                latitudeInput.dispatchEvent(new Event('input', { bubbles: true }));
                latitudeInput.dispatchEvent(new Event('change', { bubbles: true }));
                
                // ✅ Feedback visuel
                longitudeInput.classList.add('is-valid');
                latitudeInput.classList.add('is-valid');
                
                showToast('✅ Position obtenue avec succès ! Coordonnées ajoutées.', 'success');
                
                // Mise à jour de l'affichage
                updateAddressDisplay();
                
                // Marquer le formulaire comme modifié
                formModified = true;
                
                // Restaurer le bouton
                btn.innerHTML = originalText;
                btn.disabled = false;
            };

            // Erreur
            const error = (err) => {
                console.error('❌ Erreur géolocalisation:', err);
                
                let message = '❌ Impossible d\\'obtenir votre position.';
                
                switch(err.code) {
                    case err.PERMISSION_DENIED:
                        message = '❌ Permission refusée. Veuillez autoriser l\\'accès à la localisation.';
                        break;
                    case err.POSITION_UNAVAILABLE:
                        message = '❌ Position indisponible. Vérifiez votre connexion GPS.';
                        break;
                    case err.TIMEOUT:
                        message = '❌ Délai d\\'attente dépassé. Réessayez.';
                        break;
                }
                
                showToast(message, 'danger');
                
                // Restaurer le bouton
                btn.innerHTML = originalText;
                btn.disabled = false;
            };

            // Lancer la géolocalisation
            navigator.geolocation.getCurrentPosition(success, error, options);
        });
    }

    // ================================================
    // 3. MISE À JOUR DE L'AFFICHAGE DE L'ADRESSE
    // ================================================
    
    window.updateAddressDisplay = function() {
        const addressDisplay = document.querySelector('.card.bg-light .card-body p.mb-0');
        if (!addressDisplay) return;
        
        let addressText = '';
        
        if (addressInput && addressInput.value) {
            addressText = addressInput.value;
            
            if (cityInput && cityInput.value) {
                addressText += ', ' + cityInput.value;
            }
            
            if (countrySelect && countrySelect.value) {
                const countryOption = countrySelect.options[countrySelect.selectedIndex];
                if (countryOption && countryOption.text && countryOption.text !== 'Sélectionnez un pays') {
                    addressText += ', ' + countryOption.text;
                }
            }
            
            if (longitudeInput && latitudeInput && longitudeInput.value && latitudeInput.value) {
                addressText += `<span class=\"text-muted ms-2\">(GPS: \${parseFloat(latitudeInput.value).toFixed(6)}, \${parseFloat(longitudeInput.value).toFixed(6)})</span>`;
            }
        } else {
            addressText = '<span class=\"text-muted\">Adresse non renseignée</span>';
        }
        
        addressDisplay.innerHTML = addressText;
    };

    // ================================================
    // 4. ÉVÉNEMENTS DE MISE À JOUR DE L'ADRESSE
    // ================================================
    
    // Écouter les changements sur les champs d'adresse
    if (addressInput) addressInput.addEventListener('input', updateAddressDisplay);
    if (cityInput) cityInput.addEventListener('input', updateAddressDisplay);
    if (countrySelect) countrySelect.addEventListener('change', updateAddressDisplay);
    if (longitudeInput) {
        longitudeInput.addEventListener('input', updateAddressDisplay);
        longitudeInput.addEventListener('change', updateAddressDisplay);
    }
    if (latitudeInput) {
        latitudeInput.addEventListener('input', updateAddressDisplay);
        latitudeInput.addEventListener('change', updateAddressDisplay);
    }

    // ================================================
    // 5. PREVIEW DU LOGO - ✅ CORRIGÉ
    // ================================================
    
    if (logoFileInput) {
        logoFileInput.addEventListener('change', function(e) {
            const file = this.files[0];
            if (!file) return;
            
            // Vérifications
            const maxSize = 2 * 1024 * 1024; // 2MB
            if (file.size > maxSize) {
                showToast('❌ Le fichier est trop volumineux. Taille max: 2MB', 'danger');
                this.value = '';
                return;
            }

            const validTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp', 'image/svg+xml'];
            if (!validTypes.includes(file.type)) {
                showToast('❌ Type de fichier non supporté. Formats: JPG, PNG, GIF, WebP, SVG', 'danger');
                this.value = '';
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                const existingImg = document.getElementById('logo-preview');
                const placeholder = document.getElementById('logo-preview-placeholder');
                
                if (existingImg) {
                    existingImg.src = e.target.result;
                } else if (placeholder) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'img-fluid rounded-circle border border-4 border-light shadow-lg';
                    img.style = 'width: 180px; height: 180px; object-fit: cover;';
                    img.id = 'logo-preview';
                    img.alt = 'Logo preview';
                    
                    placeholder.replaceWith(img);
                    
                    // Ajouter le bouton supprimer
                    const logoContainer = document.querySelector('.logo-container');
                    if (logoContainer && !logoContainer.querySelector('.btn-danger[data-bs-target=\"#deleteLogoModal\"]')) {
                        const deleteBtn = document.createElement('button');
                        deleteBtn.type = 'button';
                        deleteBtn.className = 'btn btn-danger btn-sm position-absolute rounded-circle shadow-sm';
                        deleteBtn.style = 'bottom: 15px; right: 15px; width: 40px; height: 40px;';
                        deleteBtn.setAttribute('data-bs-toggle', 'modal');
                        deleteBtn.setAttribute('data-bs-target', '#deleteLogoModal');
                        deleteBtn.title = 'Supprimer le logo';
                        deleteBtn.innerHTML = '<i class=\"bi bi-trash\"></i>';
                        logoContainer.appendChild(deleteBtn);
                    }
                }
                
                showToast('✅ Image sélectionnée. Enregistrez pour appliquer.', 'success');
                formModified = true;
            };
            
            reader.readAsDataURL(file);
        });
    }

    // ================================================
    // 6. FORCE DU MOT DE PASSE
    // ================================================
    
    if (newPasswordInput) {
        const strengthBar = document.getElementById('passwordStrength');
        const strengthText = document.getElementById('passwordStrengthText');
        
        if (strengthBar && strengthText) {
            newPasswordInput.addEventListener('input', function() {
                const password = this.value;
                let strength = 0;
                
                // Critères
                if (password.length >= 8) strength += 25;
                if (password.length >= 12) strength += 10;
                if (/[a-z]/.test(password)) strength += 15;
                if (/[A-Z]/.test(password)) strength += 15;
                if (/[0-9]/.test(password)) strength += 15;
                if (/[^A-Za-z0-9]/.test(password)) strength += 20;
                
                strength = Math.min(strength, 100);
                strengthBar.style.width = strength + '%';
                
                if (strength < 30) {
                    strengthBar.className = 'progress-bar bg-danger';
                    strengthText.textContent = 'Faible';
                    strengthText.className = 'small fw-semibold text-danger';
                } else if (strength < 70) {
                    strengthBar.className = 'progress-bar bg-warning';
                    strengthText.textContent = 'Moyen';
                    strengthText.className = 'small fw-semibold text-warning';
                } else {
                    strengthBar.className = 'progress-bar bg-success';
                    strengthText.textContent = 'Fort';
                    strengthText.className = 'small fw-semibold text-success';
                }
            });
        }
    }

    // ================================================
    // 7. VALIDATION DES MOTS DE PASSE
    // ================================================
    
    if (newPasswordInput && confirmPasswordInput) {
        const matchFeedback = document.getElementById('passwordMatchFeedback');
        
        function checkPasswordMatch() {
            const password = newPasswordInput.value;
            const confirm = confirmPasswordInput.value;
            
            if (confirm.length > 0) {
                if (password === confirm) {
                    if (matchFeedback) {
                        matchFeedback.innerHTML = '<span class=\"text-success\"><i class=\"fas fa-check-circle me-1\"></i>Les mots de passe correspondent</span>';
                    }
                    confirmPasswordInput.classList.add('is-valid');
                    confirmPasswordInput.classList.remove('is-invalid');
                } else {
                    if (matchFeedback) {
                        matchFeedback.innerHTML = '<span class=\"text-danger\"><i class=\"fas fa-exclamation-circle me-1\"></i>Les mots de passe ne correspondent pas</span>';
                    }
                    confirmPasswordInput.classList.add('is-invalid');
                    confirmPasswordInput.classList.remove('is-valid');
                }
            } else {
                if (matchFeedback) {
                    matchFeedback.innerHTML = '';
                }
                confirmPasswordInput.classList.remove('is-valid', 'is-invalid');
            }
        }
        
        newPasswordInput.addEventListener('input', checkPasswordMatch);
        confirmPasswordInput.addEventListener('input', checkPasswordMatch);
    }

    // ================================================
    // 8. TOGGLE PASSWORD VISIBILITY
    // ================================================
    
    document.querySelectorAll('.toggle-password').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const input = this.closest('.input-group').querySelector('input');
            if (input) {
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                const icon = this.querySelector('i');
                if (icon) {
                    icon.classList.toggle('fa-eye');
                    icon.classList.toggle('fa-eye-slash');
                }
            }
        });
    });

    // ================================================
    // 9. SYSTÈME DE TOAST - ✅ CORRIGÉ
    // ================================================
    
    window.showToast = function(message, type = 'info') {
        // Créer le conteneur
        let toastContainer = document.querySelector('.toast-container');
        if (!toastContainer) {
            toastContainer = document.createElement('div');
            toastContainer.className = 'toast-container position-fixed top-0 end-0 p-3';
            toastContainer.style.zIndex = '9999';
            document.body.appendChild(toastContainer);
        }
        
        // Définir les couleurs et icônes
        let bgClass = 'bg-primary';
        let iconClass = 'bi-info-circle';
        
        switch(type) {
            case 'success':
                bgClass = 'bg-success';
                iconClass = 'bi-check-circle';
                break;
            case 'danger':
                bgClass = 'bg-danger';
                iconClass = 'bi-exclamation-triangle';
                break;
            case 'warning':
                bgClass = 'bg-warning';
                iconClass = 'bi-exclamation-circle';
                break;
        }
        
        // Créer le toast
        const toastId = 'toast-' + Date.now();
        const toast = document.createElement('div');
        toast.id = toastId;
        toast.className = 'toast align-items-center border-0 shadow-lg';
        toast.setAttribute('role', 'alert');
        toast.setAttribute('aria-live', 'assertive');
        toast.setAttribute('aria-atomic', 'true');
        
        toast.innerHTML = `
            <div class=\"d-flex\">
                <div class=\"toast-body \${bgClass} text-white rounded-start\">
                    <i class=\"bi \${iconClass} me-2\"></i>
                    \${message}
                </div>
                <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\"></button>
            </div>
        `;
        
        toastContainer.appendChild(toast);
        
        // Afficher avec Bootstrap
        if (typeof bootstrap !== 'undefined' && bootstrap.Toast) {
            const bsToast = new bootstrap.Toast(toast, {
                animation: true,
                autohide: true,
                delay: 5000
            });
            bsToast.show();
            
            toast.addEventListener('hidden.bs.toast', function() {
                this.remove();
            });
        } else {
            // Fallback
            toast.style.display = 'block';
            setTimeout(() => {
                toast.remove();
            }, 5000);
        }
    };

    // ================================================
    // 10. ÉTAT DU FORMULAIRE
    // ================================================
    
    if (form) {
        // Détection des modifications
        const formInputs = form.querySelectorAll('input, select, textarea');
        formInputs.forEach(input => {
            input.addEventListener('input', () => { formModified = true; });
            input.addEventListener('change', () => { formModified = true; });
        });
        
        // Reset du formulaire
        if (resetBtn) {
            resetBtn.addEventListener('click', function(e) {
                e.preventDefault();
                form.reset();
                formModified = false;
                
                // Réinitialiser la preview du logo
                if (logoFileInput) {
                    logoFileInput.value = '';
                }
                
                showToast('Formulaire réinitialisé', 'info');
            });
        }
        
        // Annulation avec confirmation
        const cancelBtn = document.querySelector('[data-bs-target=\"#cancelModal\"]');
        if (cancelBtn) {
            cancelBtn.addEventListener('click', function(e) {
                if (!formModified) {
                    e.preventDefault();
                    window.location.href = \"";
        // line 883
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\";
                }
            });
        }
        
        // Soumission du formulaire
        if (submitBtn) {
            form.addEventListener('submit', function(e) {
                // Validation des mots de passe si présents
                if (newPasswordInput && confirmPasswordInput) {
                    if (newPasswordInput.value !== confirmPasswordInput.value) {
                        e.preventDefault();
                        showToast('❌ Les mots de passe ne correspondent pas', 'danger');
                        return;
                    }
                }
                
                // Désactiver le bouton
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\" role=\"status\" aria-hidden=\"true\"></span>Enregistrement...';
                
                // Le formulaire se soumet normalement
                return true;
            });
        }
    }

    // ================================================
    // 11. VALIDATION BOOTSTRAP
    // ================================================
    
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

    // ================================================
    // 12. STYLES DYNAMIQUES
    // ================================================
    
    const style = document.createElement('style');
    style.textContent = `
        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
        }
        
        .toast {
            min-width: 300px;
            margin-bottom: 10px;
            border-radius: 8px;
            overflow: hidden;
        }
        
        .toast-body {
            padding: 12px 16px;
            flex: 1;
        }
        
        .form-floating > .form-control:focus ~ label,
        .form-floating > .form-control:not(:placeholder-shown) ~ label {
            opacity: 0.65;
            transform: scale(.85) translateY(-0.5rem) translateX(0.15rem);
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--bs-primary);
            box-shadow: 0 0 0 0.25rem rgba(var(--bs-primary-rgb), 0.25);
        }
        
        .bg-gradient-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .bg-primary-subtle {
            background-color: rgba(var(--bs-primary-rgb), 0.1) !important;
        }
        
        .logo-container {
            position: relative;
            display: inline-block;
        }
        
        .logo-container img {
            transition: transform 0.3s ease;
        }
        
        .logo-container:hover img {
            transform: scale(1.05);
        }
        
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
        }
        
        #longitude-input, #latitude-input {
            font-family: monospace;
        }
        
        .list-group-item {
            transition: background-color 0.2s ease;
        }
        
        .list-group-item:hover {
            background-color: rgba(0,0,0,0.02);
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        #get-location-btn:active {
            animation: pulse 0.3s ease;
        }
        
        .is-valid {
            border-color: #198754 !important;
        }
        
        .is-invalid {
            border-color: #dc3545 !important;
        }
    `;
    
    document.head.appendChild(style);
    
    // ================================================
    // 13. INITIALISATION
    // ================================================
    
    console.log('✅ JavaScript initialisé avec succès');
    
    // Mettre à jour l'affichage de l'adresse au chargement
    setTimeout(updateAddressDisplay, 100);
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
        return "dashboard/hmaservice/edit.html.twig";
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
        return array (  1154 => 883,  724 => 456,  720 => 455,  714 => 452,  710 => 451,  706 => 450,  699 => 446,  695 => 445,  677 => 430,  664 => 429,  644 => 419,  620 => 397,  607 => 387,  603 => 386,  591 => 377,  587 => 376,  569 => 360,  567 => 359,  556 => 351,  531 => 329,  526 => 327,  523 => 326,  521 => 320,  512 => 314,  507 => 312,  504 => 311,  502 => 305,  474 => 280,  469 => 278,  466 => 277,  464 => 273,  455 => 267,  450 => 265,  447 => 264,  445 => 259,  433 => 250,  428 => 248,  425 => 247,  423 => 241,  412 => 233,  407 => 231,  404 => 230,  402 => 225,  390 => 216,  385 => 214,  382 => 213,  380 => 209,  371 => 203,  367 => 201,  365 => 197,  362 => 196,  360 => 191,  349 => 183,  338 => 174,  336 => 169,  325 => 161,  302 => 141,  298 => 140,  286 => 131,  274 => 122,  262 => 113,  250 => 104,  232 => 89,  227 => 87,  224 => 86,  216 => 80,  200 => 67,  195 => 66,  193 => 65,  174 => 48,  170 => 46,  167 => 45,  159 => 42,  156 => 41,  153 => 40,  147 => 39,  142 => 38,  137 => 37,  135 => 36,  115 => 19,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/dashboard/hmaservice/edit.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Profil de l'entreprise{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <!-- Header -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <div>
                    <h1 class=\"h3 fw-bold text-dark mb-1\">
                        <i class=\"bi bi-building text-primary me-2\"></i>
                        Profil de l'entreprise
                    </h1>
                    <p class=\"text-muted mb-0\">Gérez les informations de votre entreprise</p>
                </div>
                <a href=\"{{ path('app_dashboard') }}\" class=\"btn btn-outline-secondary\">
                    <i class=\"bi bi-arrow-left me-2\"></i>Retour au Dashboard
                </a>
            </div>
        </div>
    </div>

    <!-- Container horizontal en haut pour l'adresse -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm bg-light\">
                <div class=\"card-body p-3\">
                    <div class=\"d-flex align-items-center\">
                        <i class=\"bi bi-geo-alt-fill text-primary fs-4 me-3\"></i>
                        <div>
                            <h6 class=\"fw-bold mb-1\">Adresse de l'entreprise</h6>
                            <p class=\"mb-0\">
                                {% if hma_service.address %}
                                    {{ hma_service.address }}
                                    {% if hma_service.city %}, {{ hma_service.city }}{% endif %}
                                    {% if hma_service.country %}, {{ hma_service.country }}{% endif %}
                                    {% if hma_service.latitude and hma_service.longitude %}
                                        <span class=\"text-muted ms-2\">
                                            (GPS: {{ hma_service.latitude|number_format(6) }}, {{ hma_service.longitude|number_format(6) }})
                                        </span>
                                    {% endif %}
                                {% else %}
                                    <span class=\"text-muted\">Adresse non renseignée</span>
                                {% endif %}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Container principal avec photo à gauche et formulaire à droite -->
    <div class=\"row\">
        <!-- Côté gauche : Photo et informations basiques -->
        <div class=\"col-lg-4 mb-4\">
            <div class=\"card border-0 shadow-lg h-100\">
                <div class=\"card-body p-4\">
                    <!-- Logo -->
                    <div class=\"text-center mb-4\">
                        <div class=\"logo-container position-relative d-inline-block\">
                            {% if hma_service.logo %}
                                <img src=\"{{ asset('uploads/logos/' ~ hma_service.logo) }}\" 
                                     alt=\"{{ hma_service.companyName }}\" 
                                     class=\"img-fluid rounded-circle border border-4 border-light shadow-lg\"
                                     style=\"width: 180px; height: 180px; object-fit: cover;\"
                                     id=\"logo-preview\">
                                <button type=\"button\" 
                                        class=\"btn btn-danger btn-sm position-absolute rounded-circle shadow-sm\"
                                        style=\"bottom: 15px; right: 15px; width: 40px; height: 40px;\"
                                        data-bs-toggle=\"modal\" 
                                        data-bs-target=\"#deleteLogoModal\"
                                        title=\"Supprimer le logo\">
                                    <i class=\"bi bi-trash\"></i>
                                </button>
                            {% else %}
                                <div class=\"rounded-circle d-flex align-items-center justify-content-center bg-gradient-primary text-white border border-4 border-light shadow-lg\"
                                     style=\"width: 180px; height: 180px;\"
                                     id=\"logo-preview-placeholder\">
                                    <i class=\"bi bi-building\" style=\"font-size: 4rem;\"></i>
                                </div>
                            {% endif %}
                        </div>
                        <h4 class=\"mt-4 mb-1 fw-bold\">{{ hma_service.companyName }}</h4>
                        <div class=\"badge bg-primary-subtle text-primary rounded-pill px-3 py-2 mb-3\">
                            <i class=\"bi bi-award me-1\"></i>{{ hma_service.companyType|trans }}
                        </div>
                    </div>

                    <!-- Informations basiques -->
                    <div class=\"border-top pt-4\">
                        <h6 class=\"fw-semibold mb-3\">
                            <i class=\"bi bi-info-circle me-2\"></i>Informations du compte
                        </h6>
                        <div class=\"list-group list-group-flush\">
                            <div class=\"list-group-item border-0 px-0 py-2\">
                                <div class=\"d-flex align-items-start\">
                                    <i class=\"bi bi-envelope text-muted me-2 mt-1\"></i>
                                    <div class=\"flex-grow-1\">
                                        <small class=\"text-muted d-block\">Email</small>
                                        <span class=\"fw-semibold text-break\">{{ hma_service.email }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"list-group-item border-0 px-0 py-2\">
                                <div class=\"d-flex align-items-start\">
                                    <i class=\"bi bi-telephone text-muted me-2 mt-1\"></i>
                                    <div class=\"flex-grow-1\">
                                        <small class=\"text-muted d-block\">Téléphone</small>
                                        <span class=\"fw-semibold\">{{ hma_service.phone }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"list-group-item border-0 px-0 py-2\">
                                <div class=\"d-flex align-items-start\">
                                    <i class=\"bi bi-tag text-muted me-2 mt-1\"></i>
                                    <div class=\"flex-grow-1\">
                                        <small class=\"text-muted d-block\">Abonnement</small>
                                        <span class=\"badge bg-success\">{{ hma_service.subscriptionNumber ?? 'Non attribué' }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"list-group-item border-0 px-0 py-2\">
                                <div class=\"d-flex align-items-start\">
                                    <i class=\"bi bi-calendar text-muted me-2 mt-1\"></i>
                                    <div class=\"flex-grow-1\">
                                        <small class=\"text-muted d-block\">Créé le</small>
                                        <span>{{ hma_service.createdAt|date('d/m/Y') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"list-group-item border-0 px-0 py-2\">
                                <div class=\"d-flex align-items-start\">
                                    <i class=\"bi bi-clock-history text-muted me-2 mt-1\"></i>
                                    <div class=\"flex-grow-1\">
                                        <small class=\"text-muted d-block\">Essai jusqu'au</small>
                                        <span class=\"fw-semibold {{ hma_service.trialEndsAt and hma_service.trialEndsAt < date('+7 days') ? 'text-danger' : '' }}\">
                                            {{ hma_service.trialEndsAt ? hma_service.trialEndsAt|date('d/m/Y') : 'Non défini' }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Côté droit : Formulaire de modification -->
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-lg h-100\">
                <div class=\"card-body p-4\">
                    <h5 class=\"card-title fw-bold mb-4\">
                        <i class=\"bi bi-pencil-square text-primary me-2\"></i>
                        Modifier les informations
                    </h5>
                    
                    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': true, 'id': 'profile-form'}}) }}

                    <!-- Upload logo -->
                    <div class=\"mb-4\">
                        <label class=\"form-label fw-semibold\">
                            <i class=\"bi bi-image me-1\"></i>Logo de l'entreprise
                        </label>
                        <div class=\"input-group\">
                            {{ form_widget(form.logoFile, {
                                'attr': {
                                    'class': 'form-control',
                                    'id': 'logo-file-input'
                                }
                            }) }}
                            <button type=\"button\" class=\"btn btn-outline-secondary\" onclick=\"document.getElementById('logo-file-input').click()\">
                                <i class=\"bi bi-folder2-open\"></i>
                            </button>
                        </div>
                        <div class=\"form-text\">
                            <small>Formats acceptés : JPG, PNG, GIF, WebP, SVG • Max 2MB</small>
                        </div>
                        <div class=\"invalid-feedback\">
                            {{ form_errors(form.logoFile) }}
                        </div>
                    </div>

                    <!-- Informations de base -->
                    <div class=\"row g-3 mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.companyName, {
                                    'attr': {
                                        'class': 'form-control',
                                        'placeholder': 'Nom de l\\'entreprise'
                                    }
                                }) }}
                                {{ form_label(form.companyName, null, {
                                    'label_attr': {
                                        'class': 'form-label'
                                    }
                                }) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.companyName) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.companyType, {
                                    'attr': {
                                        'class': 'form-select'
                                    }
                                }) }}
                                {{ form_label(form.companyType) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.companyType) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Téléphone -->
                    <div class=\"mb-4\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.phone, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'Téléphone'
                                }
                            }) }}
                            {{ form_label(form.phone) }}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.phone) }}
                            </div>
                        </div>
                    </div>

                    <!-- Adresse -->
                    <div class=\"mb-4\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.address, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'Adresse complète',
                                    'style': 'height: 100px'
                                }
                            }) }}
                            {{ form_label(form.address) }}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.address) }}
                            </div>
                        </div>
                    </div>

                    <!-- Ville et Pays -->
                    <div class=\"row g-3 mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.city, {
                                    'attr': {
                                        'class': 'form-control',
                                        'placeholder': 'Ville'
                                    }
                                }) }}
                                {{ form_label(form.city) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.city) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.country, {
                                    'attr': {
                                        'class': 'form-select'
                                    }
                                }) }}
                                {{ form_label(form.country) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.country) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Coordonnées GPS -->
                    <div class=\"mb-5\">
                        <div class=\"card bg-light border-0\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center mb-3\">
                                    <div class=\"flex-grow-1\">
                                        <h6 class=\"mb-0 fw-semibold\">
                                            <i class=\"bi bi-geo-alt me-2 text-primary\"></i>
                                            Coordonnées GPS
                                        </h6>
                                        <small class=\"text-muted\">Optionnel - Pour la géolocalisation</small>
                                    </div>
                                    <button type=\"button\" class=\"btn btn-outline-primary btn-sm\" id=\"get-location-btn\">
                                        <i class=\"bi bi-geo me-1\"></i>Utiliser ma position
                                    </button>
                                </div>
                                <div class=\"row g-3\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-floating\">
                                            {{ form_widget(form.longitude, {
                                                'attr': {
                                                    'class': 'form-control',
                                                    'placeholder': 'Longitude',
                                                    'id': 'longitude-input'
                                                }
                                            }) }}
                                            {{ form_label(form.longitude, 'Longitude') }}
                                            <div class=\"invalid-feedback\">
                                                {{ form_errors(form.longitude) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-floating\">
                                            {{ form_widget(form.latitude, {
                                                'attr': {
                                                    'class': 'form-control',
                                                    'placeholder': 'Latitude',
                                                    'id': 'latitude-input'
                                                }
                                            }) }}
                                            {{ form_label(form.latitude, 'Latitude') }}
                                            <div class=\"invalid-feedback\">
                                                {{ form_errors(form.latitude) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Boutons d'action -->
                    <div class=\"d-flex justify-content-end gap-3 pt-4 border-top\">
                        <button type=\"button\" class=\"btn btn-outline-danger px-4\" data-bs-toggle=\"modal\" data-bs-target=\"#cancelModal\">
                            <i class=\"bi bi-x-circle me-2\"></i>Annuler
                        </button>
                        <button type=\"reset\" class=\"btn btn-light px-4\" id=\"reset-btn\">
                            <i class=\"bi bi-arrow-counterclockwise me-2\"></i>Réinitialiser
                        </button>
                        <button type=\"submit\" class=\"btn btn-primary px-4\" id=\"submit-btn\">
                            <i class=\"bi bi-save me-2\"></i>Enregistrer
                        </button>
                    </div>

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour supprimer le logo -->
{% if hma_service.logo %}
<div class=\"modal fade\" id=\"deleteLogoModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header border-0 pb-0\">
                <h5 class=\"modal-title text-danger\">
                    <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>Supprimer le logo
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <i class=\"bi bi-trash-fill text-danger\" style=\"font-size: 3rem;\"></i>
                </div>
                <h5 class=\"fw-bold mb-3\">Êtes-vous sûr ?</h5>
                <p class=\"text-muted\">Cette action supprimera définitivement le logo de votre entreprise.</p>
                <div class=\"my-3\">
                    <img src=\"{{ asset('uploads/logos/' ~ hma_service.logo) }}\" 
                         alt=\"{{ hma_service.companyName }}\" 
                         class=\"rounded-circle shadow\"
                         style=\"width: 100px; height: 100px; object-fit: cover;\">
                </div>
            </div>
            <div class=\"modal-footer border-0 pt-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    Annuler
                </button>
                <form action=\"{{ path('app_dashboard_hmaservice_delete_logo') }}\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-logo' ~ hma_service.id) }}\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"bi bi-trash me-1\"></i>Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endif %}

<!-- Modal pour annuler les modifications -->
<div class=\"modal fade\" id=\"cancelModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header border-0 pb-0\">
                <h5 class=\"modal-title text-warning\">
                    <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>Annuler les modifications
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <i class=\"bi bi-question-circle-fill text-warning\" style=\"font-size: 3rem;\"></i>
                </div>
                <h5 class=\"fw-bold mb-3\">Annuler les modifications ?</h5>
                <p class=\"text-muted\">Toutes les modifications non enregistrées seront perdues. Voulez-vous vraiment quitter cette page ?</p>
            </div>
            <div class=\"modal-footer border-0 pt-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    Continuer l'édition
                </button>
                <a href=\"{{ path('app_dashboard') }}\" class=\"btn btn-warning\">
                    <i class=\"bi bi-x-circle me-1\"></i>Quitter sans enregistrer
                </a>
            </div>
        </div>
    </div>
</div>

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    'use strict';
    
    // ================================================
    // 1. RÉCUPÉRATION DES ÉLÉMENTS DU FORMULAIRE
    // ================================================
    
    // Champs du formulaire
    const form = document.getElementById('profile-form');
    const submitBtn = document.getElementById('submit-btn');
    const resetBtn = document.getElementById('reset-btn');
    
    // Champs GPS - ✅ CORRIGÉ : Utilisation des IDs Symfony
    const longitudeInput = document.getElementById('{{ form.longitude.vars.id }}');
    const latitudeInput = document.getElementById('{{ form.latitude.vars.id }}');
    const getLocationBtn = document.getElementById('get-location-btn');
    
    // Champs d'adresse
    const addressInput = document.getElementById('{{ form.address.vars.id }}');
    const cityInput = document.getElementById('{{ form.city.vars.id }}');
    const countrySelect = document.getElementById('{{ form.country.vars.id }}');
    
    // Champs mot de passe
    const newPasswordInput = document.getElementById('{{ form.newPassword.vars.id is defined ? form.newPassword.vars.id : '' }}');
    const confirmPasswordInput = document.getElementById('{{ form.confirmPassword.vars.id is defined ? form.confirmPassword.vars.id : '' }}');
    
    // Logo
    const logoFileInput = document.getElementById('logo-file-input');
    
    // État du formulaire
    let formModified = false;
    
    // ================================================
    // 2. GÉOLOCALISATION - ✅ CORRIGÉ
    // ================================================
    
    if (getLocationBtn) {
        getLocationBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            // ✅ Vérification que les champs existent
            if (!longitudeInput || !latitudeInput) {
                showToast('❌ Champs de coordonnées non trouvés', 'danger');
                console.error('Champs GPS manquants:', { longitude: longitudeInput, latitude: latitudeInput });
                return;
            }
            
            if (!navigator.geolocation) {
                showToast('❌ La géolocalisation n\\'est pas supportée par votre navigateur.', 'danger');
                return;
            }

            // UI: Désactiver le bouton
            const btn = this;
            const originalText = btn.innerHTML;
            btn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\" role=\"status\" aria-hidden=\"true\"></span>Obtention de la position...';
            btn.disabled = true;

            // Options de géolocalisation
            const options = {
                enableHighAccuracy: true,
                timeout: 10000,
                maximumAge: 0
            };

            // Succès
            const success = (position) => {
                const longitude = position.coords.longitude;
                const latitude = position.coords.latitude;
                
                console.log('📍 Position obtenue:', { longitude, latitude });
                
                // ✅ Mise à jour des champs
                longitudeInput.value = longitude.toFixed(8);
                latitudeInput.value = latitude.toFixed(8);
                
                // ✅ Déclenchement des événements
                longitudeInput.dispatchEvent(new Event('input', { bubbles: true }));
                longitudeInput.dispatchEvent(new Event('change', { bubbles: true }));
                latitudeInput.dispatchEvent(new Event('input', { bubbles: true }));
                latitudeInput.dispatchEvent(new Event('change', { bubbles: true }));
                
                // ✅ Feedback visuel
                longitudeInput.classList.add('is-valid');
                latitudeInput.classList.add('is-valid');
                
                showToast('✅ Position obtenue avec succès ! Coordonnées ajoutées.', 'success');
                
                // Mise à jour de l'affichage
                updateAddressDisplay();
                
                // Marquer le formulaire comme modifié
                formModified = true;
                
                // Restaurer le bouton
                btn.innerHTML = originalText;
                btn.disabled = false;
            };

            // Erreur
            const error = (err) => {
                console.error('❌ Erreur géolocalisation:', err);
                
                let message = '❌ Impossible d\\'obtenir votre position.';
                
                switch(err.code) {
                    case err.PERMISSION_DENIED:
                        message = '❌ Permission refusée. Veuillez autoriser l\\'accès à la localisation.';
                        break;
                    case err.POSITION_UNAVAILABLE:
                        message = '❌ Position indisponible. Vérifiez votre connexion GPS.';
                        break;
                    case err.TIMEOUT:
                        message = '❌ Délai d\\'attente dépassé. Réessayez.';
                        break;
                }
                
                showToast(message, 'danger');
                
                // Restaurer le bouton
                btn.innerHTML = originalText;
                btn.disabled = false;
            };

            // Lancer la géolocalisation
            navigator.geolocation.getCurrentPosition(success, error, options);
        });
    }

    // ================================================
    // 3. MISE À JOUR DE L'AFFICHAGE DE L'ADRESSE
    // ================================================
    
    window.updateAddressDisplay = function() {
        const addressDisplay = document.querySelector('.card.bg-light .card-body p.mb-0');
        if (!addressDisplay) return;
        
        let addressText = '';
        
        if (addressInput && addressInput.value) {
            addressText = addressInput.value;
            
            if (cityInput && cityInput.value) {
                addressText += ', ' + cityInput.value;
            }
            
            if (countrySelect && countrySelect.value) {
                const countryOption = countrySelect.options[countrySelect.selectedIndex];
                if (countryOption && countryOption.text && countryOption.text !== 'Sélectionnez un pays') {
                    addressText += ', ' + countryOption.text;
                }
            }
            
            if (longitudeInput && latitudeInput && longitudeInput.value && latitudeInput.value) {
                addressText += `<span class=\"text-muted ms-2\">(GPS: \${parseFloat(latitudeInput.value).toFixed(6)}, \${parseFloat(longitudeInput.value).toFixed(6)})</span>`;
            }
        } else {
            addressText = '<span class=\"text-muted\">Adresse non renseignée</span>';
        }
        
        addressDisplay.innerHTML = addressText;
    };

    // ================================================
    // 4. ÉVÉNEMENTS DE MISE À JOUR DE L'ADRESSE
    // ================================================
    
    // Écouter les changements sur les champs d'adresse
    if (addressInput) addressInput.addEventListener('input', updateAddressDisplay);
    if (cityInput) cityInput.addEventListener('input', updateAddressDisplay);
    if (countrySelect) countrySelect.addEventListener('change', updateAddressDisplay);
    if (longitudeInput) {
        longitudeInput.addEventListener('input', updateAddressDisplay);
        longitudeInput.addEventListener('change', updateAddressDisplay);
    }
    if (latitudeInput) {
        latitudeInput.addEventListener('input', updateAddressDisplay);
        latitudeInput.addEventListener('change', updateAddressDisplay);
    }

    // ================================================
    // 5. PREVIEW DU LOGO - ✅ CORRIGÉ
    // ================================================
    
    if (logoFileInput) {
        logoFileInput.addEventListener('change', function(e) {
            const file = this.files[0];
            if (!file) return;
            
            // Vérifications
            const maxSize = 2 * 1024 * 1024; // 2MB
            if (file.size > maxSize) {
                showToast('❌ Le fichier est trop volumineux. Taille max: 2MB', 'danger');
                this.value = '';
                return;
            }

            const validTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp', 'image/svg+xml'];
            if (!validTypes.includes(file.type)) {
                showToast('❌ Type de fichier non supporté. Formats: JPG, PNG, GIF, WebP, SVG', 'danger');
                this.value = '';
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                const existingImg = document.getElementById('logo-preview');
                const placeholder = document.getElementById('logo-preview-placeholder');
                
                if (existingImg) {
                    existingImg.src = e.target.result;
                } else if (placeholder) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'img-fluid rounded-circle border border-4 border-light shadow-lg';
                    img.style = 'width: 180px; height: 180px; object-fit: cover;';
                    img.id = 'logo-preview';
                    img.alt = 'Logo preview';
                    
                    placeholder.replaceWith(img);
                    
                    // Ajouter le bouton supprimer
                    const logoContainer = document.querySelector('.logo-container');
                    if (logoContainer && !logoContainer.querySelector('.btn-danger[data-bs-target=\"#deleteLogoModal\"]')) {
                        const deleteBtn = document.createElement('button');
                        deleteBtn.type = 'button';
                        deleteBtn.className = 'btn btn-danger btn-sm position-absolute rounded-circle shadow-sm';
                        deleteBtn.style = 'bottom: 15px; right: 15px; width: 40px; height: 40px;';
                        deleteBtn.setAttribute('data-bs-toggle', 'modal');
                        deleteBtn.setAttribute('data-bs-target', '#deleteLogoModal');
                        deleteBtn.title = 'Supprimer le logo';
                        deleteBtn.innerHTML = '<i class=\"bi bi-trash\"></i>';
                        logoContainer.appendChild(deleteBtn);
                    }
                }
                
                showToast('✅ Image sélectionnée. Enregistrez pour appliquer.', 'success');
                formModified = true;
            };
            
            reader.readAsDataURL(file);
        });
    }

    // ================================================
    // 6. FORCE DU MOT DE PASSE
    // ================================================
    
    if (newPasswordInput) {
        const strengthBar = document.getElementById('passwordStrength');
        const strengthText = document.getElementById('passwordStrengthText');
        
        if (strengthBar && strengthText) {
            newPasswordInput.addEventListener('input', function() {
                const password = this.value;
                let strength = 0;
                
                // Critères
                if (password.length >= 8) strength += 25;
                if (password.length >= 12) strength += 10;
                if (/[a-z]/.test(password)) strength += 15;
                if (/[A-Z]/.test(password)) strength += 15;
                if (/[0-9]/.test(password)) strength += 15;
                if (/[^A-Za-z0-9]/.test(password)) strength += 20;
                
                strength = Math.min(strength, 100);
                strengthBar.style.width = strength + '%';
                
                if (strength < 30) {
                    strengthBar.className = 'progress-bar bg-danger';
                    strengthText.textContent = 'Faible';
                    strengthText.className = 'small fw-semibold text-danger';
                } else if (strength < 70) {
                    strengthBar.className = 'progress-bar bg-warning';
                    strengthText.textContent = 'Moyen';
                    strengthText.className = 'small fw-semibold text-warning';
                } else {
                    strengthBar.className = 'progress-bar bg-success';
                    strengthText.textContent = 'Fort';
                    strengthText.className = 'small fw-semibold text-success';
                }
            });
        }
    }

    // ================================================
    // 7. VALIDATION DES MOTS DE PASSE
    // ================================================
    
    if (newPasswordInput && confirmPasswordInput) {
        const matchFeedback = document.getElementById('passwordMatchFeedback');
        
        function checkPasswordMatch() {
            const password = newPasswordInput.value;
            const confirm = confirmPasswordInput.value;
            
            if (confirm.length > 0) {
                if (password === confirm) {
                    if (matchFeedback) {
                        matchFeedback.innerHTML = '<span class=\"text-success\"><i class=\"fas fa-check-circle me-1\"></i>Les mots de passe correspondent</span>';
                    }
                    confirmPasswordInput.classList.add('is-valid');
                    confirmPasswordInput.classList.remove('is-invalid');
                } else {
                    if (matchFeedback) {
                        matchFeedback.innerHTML = '<span class=\"text-danger\"><i class=\"fas fa-exclamation-circle me-1\"></i>Les mots de passe ne correspondent pas</span>';
                    }
                    confirmPasswordInput.classList.add('is-invalid');
                    confirmPasswordInput.classList.remove('is-valid');
                }
            } else {
                if (matchFeedback) {
                    matchFeedback.innerHTML = '';
                }
                confirmPasswordInput.classList.remove('is-valid', 'is-invalid');
            }
        }
        
        newPasswordInput.addEventListener('input', checkPasswordMatch);
        confirmPasswordInput.addEventListener('input', checkPasswordMatch);
    }

    // ================================================
    // 8. TOGGLE PASSWORD VISIBILITY
    // ================================================
    
    document.querySelectorAll('.toggle-password').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const input = this.closest('.input-group').querySelector('input');
            if (input) {
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                const icon = this.querySelector('i');
                if (icon) {
                    icon.classList.toggle('fa-eye');
                    icon.classList.toggle('fa-eye-slash');
                }
            }
        });
    });

    // ================================================
    // 9. SYSTÈME DE TOAST - ✅ CORRIGÉ
    // ================================================
    
    window.showToast = function(message, type = 'info') {
        // Créer le conteneur
        let toastContainer = document.querySelector('.toast-container');
        if (!toastContainer) {
            toastContainer = document.createElement('div');
            toastContainer.className = 'toast-container position-fixed top-0 end-0 p-3';
            toastContainer.style.zIndex = '9999';
            document.body.appendChild(toastContainer);
        }
        
        // Définir les couleurs et icônes
        let bgClass = 'bg-primary';
        let iconClass = 'bi-info-circle';
        
        switch(type) {
            case 'success':
                bgClass = 'bg-success';
                iconClass = 'bi-check-circle';
                break;
            case 'danger':
                bgClass = 'bg-danger';
                iconClass = 'bi-exclamation-triangle';
                break;
            case 'warning':
                bgClass = 'bg-warning';
                iconClass = 'bi-exclamation-circle';
                break;
        }
        
        // Créer le toast
        const toastId = 'toast-' + Date.now();
        const toast = document.createElement('div');
        toast.id = toastId;
        toast.className = 'toast align-items-center border-0 shadow-lg';
        toast.setAttribute('role', 'alert');
        toast.setAttribute('aria-live', 'assertive');
        toast.setAttribute('aria-atomic', 'true');
        
        toast.innerHTML = `
            <div class=\"d-flex\">
                <div class=\"toast-body \${bgClass} text-white rounded-start\">
                    <i class=\"bi \${iconClass} me-2\"></i>
                    \${message}
                </div>
                <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\"></button>
            </div>
        `;
        
        toastContainer.appendChild(toast);
        
        // Afficher avec Bootstrap
        if (typeof bootstrap !== 'undefined' && bootstrap.Toast) {
            const bsToast = new bootstrap.Toast(toast, {
                animation: true,
                autohide: true,
                delay: 5000
            });
            bsToast.show();
            
            toast.addEventListener('hidden.bs.toast', function() {
                this.remove();
            });
        } else {
            // Fallback
            toast.style.display = 'block';
            setTimeout(() => {
                toast.remove();
            }, 5000);
        }
    };

    // ================================================
    // 10. ÉTAT DU FORMULAIRE
    // ================================================
    
    if (form) {
        // Détection des modifications
        const formInputs = form.querySelectorAll('input, select, textarea');
        formInputs.forEach(input => {
            input.addEventListener('input', () => { formModified = true; });
            input.addEventListener('change', () => { formModified = true; });
        });
        
        // Reset du formulaire
        if (resetBtn) {
            resetBtn.addEventListener('click', function(e) {
                e.preventDefault();
                form.reset();
                formModified = false;
                
                // Réinitialiser la preview du logo
                if (logoFileInput) {
                    logoFileInput.value = '';
                }
                
                showToast('Formulaire réinitialisé', 'info');
            });
        }
        
        // Annulation avec confirmation
        const cancelBtn = document.querySelector('[data-bs-target=\"#cancelModal\"]');
        if (cancelBtn) {
            cancelBtn.addEventListener('click', function(e) {
                if (!formModified) {
                    e.preventDefault();
                    window.location.href = \"{{ path('app_dashboard') }}\";
                }
            });
        }
        
        // Soumission du formulaire
        if (submitBtn) {
            form.addEventListener('submit', function(e) {
                // Validation des mots de passe si présents
                if (newPasswordInput && confirmPasswordInput) {
                    if (newPasswordInput.value !== confirmPasswordInput.value) {
                        e.preventDefault();
                        showToast('❌ Les mots de passe ne correspondent pas', 'danger');
                        return;
                    }
                }
                
                // Désactiver le bouton
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\" role=\"status\" aria-hidden=\"true\"></span>Enregistrement...';
                
                // Le formulaire se soumet normalement
                return true;
            });
        }
    }

    // ================================================
    // 11. VALIDATION BOOTSTRAP
    // ================================================
    
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

    // ================================================
    // 12. STYLES DYNAMIQUES
    // ================================================
    
    const style = document.createElement('style');
    style.textContent = `
        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
        }
        
        .toast {
            min-width: 300px;
            margin-bottom: 10px;
            border-radius: 8px;
            overflow: hidden;
        }
        
        .toast-body {
            padding: 12px 16px;
            flex: 1;
        }
        
        .form-floating > .form-control:focus ~ label,
        .form-floating > .form-control:not(:placeholder-shown) ~ label {
            opacity: 0.65;
            transform: scale(.85) translateY(-0.5rem) translateX(0.15rem);
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--bs-primary);
            box-shadow: 0 0 0 0.25rem rgba(var(--bs-primary-rgb), 0.25);
        }
        
        .bg-gradient-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .bg-primary-subtle {
            background-color: rgba(var(--bs-primary-rgb), 0.1) !important;
        }
        
        .logo-container {
            position: relative;
            display: inline-block;
        }
        
        .logo-container img {
            transition: transform 0.3s ease;
        }
        
        .logo-container:hover img {
            transform: scale(1.05);
        }
        
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
        }
        
        #longitude-input, #latitude-input {
            font-family: monospace;
        }
        
        .list-group-item {
            transition: background-color 0.2s ease;
        }
        
        .list-group-item:hover {
            background-color: rgba(0,0,0,0.02);
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        #get-location-btn:active {
            animation: pulse 0.3s ease;
        }
        
        .is-valid {
            border-color: #198754 !important;
        }
        
        .is-invalid {
            border-color: #dc3545 !important;
        }
    `;
    
    document.head.appendChild(style);
    
    // ================================================
    // 13. INITIALISATION
    // ================================================
    
    console.log('✅ JavaScript initialisé avec succès');
    
    // Mettre à jour l'affichage de l'adresse au chargement
    setTimeout(updateAddressDisplay, 100);
});
</script>
{% endblock %}", "dashboard/hmaservice/edit.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\dashboard\\hmaservice\\edit.html.twig");
    }
}
