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

/* dashboard/hmaservice/details.html.twig */
class __TwigTemplate_5d1f47b353f436fa64cde1e063c4cee4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/hmaservice/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/hmaservice/details.html.twig"));

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

        yield "Détails de l'entreprise";
        
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
                        Détails de l'entreprise
                    </h1>
                    <p class=\"text-muted mb-0\">Consultez les informations de votre entreprise</p>
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

    <!-- Carte principale avec toutes les informations -->
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-lg\">
                <div class=\"card-body p-4\">
                    <div class=\"row\">
                        <!-- Logo et informations de base -->
                        <div class=\"col-lg-4 border-end\">
                            <div class=\"text-center mb-4\">
                                <div class=\"logo-container position-relative d-inline-block mb-3\">
                                    ";
        // line 36
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 36, $this->source); })()), "logo", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "                                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 37, $this->source); })()), "logo", [], "any", false, false, false, 37))), "html", null, true);
            yield "\" 
                                             alt=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 38, $this->source); })()), "companyName", [], "any", false, false, false, 38), "html", null, true);
            yield "\" 
                                             class=\"img-fluid rounded-circle border border-4 border-light shadow-lg\"
                                             style=\"width: 180px; height: 180px; object-fit: cover;\">
                                    ";
        } else {
            // line 42
            yield "                                        <div class=\"rounded-circle d-flex align-items-center justify-content-center bg-gradient-primary text-white border border-4 border-light shadow-lg\"
                                             style=\"width: 180px; height: 180px;\">
                                            <i class=\"bi bi-building\" style=\"font-size: 4rem;\"></i>
                                        </div>
                                    ";
        }
        // line 47
        yield "                                </div>
                                <h4 class=\"mb-1 fw-bold\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 48, $this->source); })()), "companyName", [], "any", false, false, false, 48), "html", null, true);
        yield "</h4>
                                <div class=\"badge bg-primary-subtle text-primary rounded-pill px-3 py-2 mb-3\">
                                    <i class=\"bi bi-award me-1\"></i>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 50, $this->source); })()), "companyType", [], "any", false, false, false, 50)), "html", null, true);
        yield "
                                </div>
                            </div>

                            <!-- Statut -->
                            <div class=\"text-center mb-4\">
                                <div class=\"d-inline-flex align-items-center bg-light rounded-pill px-4 py-2\">
                                    <i class=\"bi bi-circle-fill ";
        // line 57
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 57, $this->source); })()), "isActive", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-success") : ("text-danger"));
        yield " me-2\"></i>
                                    <span class=\"fw-semibold\">";
        // line 58
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 58, $this->source); })()), "isActive", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Compte actif") : ("Compte désactivé"));
        yield "</span>
                                </div>
                            </div>

                            <!-- Actions rapides -->
                            <div class=\"d-grid gap-2\">
                                <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_hmaservice_edit");
        yield "\" class=\"btn btn-primary\">
                                    <i class=\"bi bi-pencil-square me-2\"></i>Modifier les informations
                                </a>
                                ";
        // line 67
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 67, $this->source); })()), "isActive", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "                                <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deactivateModal\">
                                    <i class=\"bi bi-power me-2\"></i>Désactiver le compte
                                </button>
                                ";
        } else {
            // line 72
            yield "                                <button type=\"button\" class=\"btn btn-outline-success\" data-bs-toggle=\"modal\" data-bs-target=\"#activateModal\">
                                    <i class=\"bi bi-power me-2\"></i>Activer le compte
                                </button>
                                ";
        }
        // line 76
        yield "                            </div>
                        </div>

                        <!-- Informations détaillées -->
                        <div class=\"col-lg-8\">
                            <!-- Informations de contact -->
                            <div class=\"mb-5\">
                                <h5 class=\"fw-bold mb-3\">
                                    <i class=\"bi bi-telephone text-primary me-2\"></i>
                                    Informations de contact
                                </h5>
                                <div class=\"row g-3\">
                                    <div class=\"col-md-6\">
                                        <div class=\"card bg-light border-0\">
                                            <div class=\"card-body\">
                                                <small class=\"text-muted d-block mb-1\">Email professionnel</small>
                                                <div class=\"d-flex align-items-center\">
                                                    <i class=\"bi bi-envelope text-primary me-2\"></i>
                                                    <span class=\"fw-semibold\">";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 94, $this->source); })()), "email", [], "any", false, false, false, 94), "html", null, true);
        yield "</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"card bg-light border-0\">
                                            <div class=\"card-body\">
                                                <small class=\"text-muted d-block mb-1\">Téléphone</small>
                                                <div class=\"d-flex align-items-center\">
                                                    <i class=\"bi bi-telephone text-primary me-2\"></i>
                                                    <span class=\"fw-semibold\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 105, $this->source); })()), "phone", [], "any", false, false, false, 105), "html", null, true);
        yield "</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Adresse -->
                            <div class=\"mb-5\">
                                <h5 class=\"fw-bold mb-3\">
                                    <i class=\"bi bi-geo-alt text-primary me-2\"></i>
                                    Adresse
                                </h5>
                                <div class=\"card bg-light border-0\">
                                    <div class=\"card-body\">
                                        <div class=\"d-flex align-items-start\">
                                            <i class=\"bi bi-geo-alt-fill text-primary mt-1 me-3 fs-5\"></i>
                                            <div>
                                                ";
        // line 124
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 124, $this->source); })()), "address", [], "any", false, false, false, 124) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 124, $this->source); })()), "city", [], "any", false, false, false, 124)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 124, $this->source); })()), "country", [], "any", false, false, false, 124))) {
            // line 125
            yield "                                                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 125, $this->source); })()), "address", [], "any", false, false, false, 125)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 126
                yield "                                                        <p class=\"mb-1 fw-semibold\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 126, $this->source); })()), "address", [], "any", false, false, false, 126), "html", null, true);
                yield "</p>
                                                    ";
            }
            // line 128
            yield "                                                    <div class=\"text-muted\">
                                                        ";
            // line 129
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 129, $this->source); })()), "city", [], "any", false, false, false, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 129, $this->source); })()), "city", [], "any", false, false, false, 129), "html", null, true);
            }
            // line 130
            yield "                                                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 130, $this->source); })()), "country", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 130, $this->source); })()), "country", [], "any", false, false, false, 130), "html", null, true);
            }
            // line 131
            yield "                                                    </div>
                                                    ";
            // line 132
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 132, $this->source); })()), "latitude", [], "any", false, false, false, 132) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 132, $this->source); })()), "longitude", [], "any", false, false, false, 132))) {
                // line 133
                yield "                                                        <div class=\"mt-2\">
                                                            <small class=\"text-muted\">
                                                                <i class=\"bi bi-geo me-1\"></i>
                                                                GPS: ";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 136, $this->source); })()), "latitude", [], "any", false, false, false, 136), 6), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 136, $this->source); })()), "longitude", [], "any", false, false, false, 136), 6), "html", null, true);
                yield "
                                                            </small>
                                                        </div>
                                                    ";
            }
            // line 140
            yield "                                                ";
        } else {
            // line 141
            yield "                                                    <p class=\"text-muted mb-0\">
                                                        <i class=\"bi bi-exclamation-circle me-1\"></i>
                                                        Aucune adresse renseignée
                                                    </p>
                                                ";
        }
        // line 146
        yield "                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Informations du compte -->
                            <div class=\"mb-5\">
                                <h5 class=\"fw-bold mb-3\">
                                    <i class=\"bi bi-info-circle text-primary me-2\"></i>
                                    Informations du compte
                                </h5>
                                <div class=\"row g-3\">
                                    <div class=\"col-md-6\">
                                        <div class=\"card bg-light border-0\">
                                            <div class=\"card-body\">
                                                <small class=\"text-muted d-block mb-1\">Numéro d'abonnement</small>
                                                <div class=\"d-flex align-items-center\">
                                                    <i class=\"bi bi-tag text-primary me-2\"></i>
                                                    <span class=\"fw-semibold badge bg-success\">
                                                        ";
        // line 166
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "subscriptionNumber", [], "any", true, true, false, 166) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 166, $this->source); })()), "subscriptionNumber", [], "any", false, false, false, 166)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 166, $this->source); })()), "subscriptionNumber", [], "any", false, false, false, 166), "html", null, true)) : ("Non attribué"));
        yield "
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"card bg-light border-0\">
                                            <div class=\"card-body\">
                                                <small class=\"text-muted d-block mb-1\">Date de création</small>
                                                <div class=\"d-flex align-items-center\">
                                                    <i class=\"bi bi-calendar text-primary me-2\"></i>
                                                    <span class=\"fw-semibold\">";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 178, $this->source); })()), "createdAt", [], "any", false, false, false, 178), "d/m/Y"), "html", null, true);
        yield "</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"card bg-light border-0\">
                                            <div class=\"card-body\">
                                                <small class=\"text-muted d-block mb-1\">Période d'essai</small>
                                                <div class=\"d-flex align-items-center\">
                                                    <i class=\"bi bi-clock-history text-primary me-2\"></i>
                                                    <span class=\"fw-semibold ";
        // line 189
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 189, $this->source); })()), "trialEndsAt", [], "any", false, false, false, 189) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 189, $this->source); })()), "trialEndsAt", [], "any", false, false, false, 189) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+7 days")))) ? ("text-danger") : (""));
        yield "\">
                                                        ";
        // line 190
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 190, $this->source); })()), "trialEndsAt", [], "any", false, false, false, 190)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 190, $this->source); })()), "trialEndsAt", [], "any", false, false, false, 190), "d/m/Y"), "html", null, true)) : ("Non défini"));
        yield "
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"card bg-light border-0\">
                                            <div class=\"card-body\">
                                                <small class=\"text-muted d-block mb-1\">Dernière mise à jour</small>
                                                <div class=\"d-flex align-items-center\">
                                                    <i class=\"bi bi-arrow-clockwise text-primary me-2\"></i>
                                                    <span class=\"fw-semibold\">";
        // line 202
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 202, $this->source); })()), "updatedAt", [], "any", false, false, false, 202)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 202, $this->source); })()), "updatedAt", [], "any", false, false, false, 202), "d/m/Y H:i"), "html", null, true)) : ("Jamais"));
        yield "</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Statistiques (optionnel) -->
                            <div>
                                <h5 class=\"fw-bold mb-3\">
                                    <i class=\"bi bi-graph-up text-primary me-2\"></i>
                                    Aperçu
                                </h5>
                                <div class=\"row g-3\">
                                    <div class=\"col-md-4\">
                                        <div class=\"card bg-primary text-white border-0\">
                                            <div class=\"card-body text-center\">
                                                <i class=\"bi bi-people fs-1 mb-2\"></i>
                                                <h6 class=\"mb-1\">Utilisateurs</h6>
                                                <h4 class=\"fw-bold mb-0\">5</h4>
                                                <small>Total employés</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"card bg-success text-white border-0\">
                                            <div class=\"card-body text-center\">
                                                <i class=\"bi bi-box-seam fs-1 mb-2\"></i>
                                                <h6 class=\"mb-1\">Produits</h6>
                                                <h4 class=\"fw-bold mb-0\">24</h4>
                                                <small>En stock</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"card bg-info text-white border-0\">
                                            <div class=\"card-body text-center\">
                                                <i class=\"bi bi-cart fs-1 mb-2\"></i>
                                                <h6 class=\"mb-1\">Commandes</h6>
                                                <h4 class=\"fw-bold mb-0\">12</h4>
                                                <small>Ce mois-ci</small>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Dans details.html.twig -->
                                    <div class=\"col-md-4\">
                                        <div class=\"card bg-light border-0\">
                                            <div class=\"card-body\">
                                                <small class=\"text-muted d-block mb-1\">Utilisateurs actifs</small>
                                                <div class=\"d-flex align-items-center\">
                                                    <i class=\"bi bi-people text-primary me-2\"></i>
                                                    <span class=\"fw-semibold\">
                                                        ";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active_users_count"]) || array_key_exists("active_users_count", $context) ? $context["active_users_count"] : (function () { throw new RuntimeError('Variable "active_users_count" does not exist.', 255, $this->source); })()), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_users_count"]) || array_key_exists("total_users_count", $context) ? $context["total_users_count"] : (function () { throw new RuntimeError('Variable "total_users_count" does not exist.', 255, $this->source); })()), "html", null, true);
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
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de désactivation -->
<div class=\"modal fade\" id=\"deactivateModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header border-0 pb-0\">
                <h5 class=\"modal-title text-danger\">
                    <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>Désactiver le compte
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <i class=\"bi bi-power text-danger\" style=\"font-size: 3rem;\"></i>
                </div>
                <h5 class=\"fw-bold mb-3\">Désactiver le compte entreprise ?</h5>
                <p class=\"text-muted\">
                    Cette action désactivera temporairement le compte de votre entreprise et tous les utilisateurs associés.
                    <br><br>
                    <strong>Conséquences :</strong>
                    <ul class=\"text-start text-muted small\">
                        <li><strong>";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_users_count"]) || array_key_exists("total_users_count", $context) ? $context["total_users_count"] : (function () { throw new RuntimeError('Variable "total_users_count" does not exist.', 291, $this->source); })()), "html", null, true);
        yield " utilisateur(s)</strong> seront désactivés</li>
                        <li>Personne ne pourra plus se connecter</li>
                        <li>Les commandes en cours seront suspendues</li>
                        <li>L'accès aux données sera restreint</li>
                        <li>Vous pourrez réactiver le compte à tout moment</li>
                    </ul>
                </p>
            </div>
            <div class=\"modal-footer border-0 pt-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"bi bi-x-circle me-1\"></i>Annuler
                </button>
                <form action=\"";
        // line 303
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_hmaservice_deactivate");
        yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 304
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("deactivate-company" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 304, $this->source); })()), "id", [], "any", false, false, false, 304))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"bi bi-power me-1\"></i>Désactiver ";
        // line 306
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_users_count"]) || array_key_exists("total_users_count", $context) ? $context["total_users_count"] : (function () { throw new RuntimeError('Variable "total_users_count" does not exist.', 306, $this->source); })()), "html", null, true);
        yield " utilisateur(s)
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal d'activation (si désactivé) -->
";
        // line 314
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 314, $this->source); })()), "isActive", [], "any", false, false, false, 314)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 315
            yield "<div class=\"modal fade\" id=\"activateModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header border-0 pb-0\">
                <h5 class=\"modal-title text-success\">
                    <i class=\"bi bi-check-circle-fill me-2\"></i>Activer le compte
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <i class=\"bi bi-power text-success\" style=\"font-size: 3rem;\"></i>
                </div>
                <h5 class=\"fw-bold mb-3\">Activer le compte entreprise ?</h5>
                <p class=\"text-muted\">
                    Cette action réactivera le compte de votre entreprise.
                    <br><br>
                    <strong>Conséquences :</strong>
                    <ul class=\"text-start text-muted small\">
                        <li>Les utilisateurs pourront à nouveau se connecter</li>
                        <li>Les fonctionnalités seront restaurées</li>
                        <li>L'accès aux données sera rétabli</li>
                    </ul>
                </p>
            </div>
            <div class=\"modal-footer border-0 pt-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"bi bi-x-circle me-1\"></i>Annuler
                </button>
                <form action=\"";
            // line 344
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_hmaservice_activate");
            yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 345
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("activate-company" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 345, $this->source); })()), "id", [], "any", false, false, false, 345))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn btn-success\">
                        <i class=\"bi bi-power me-1\"></i>Activer le compte
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        }
        // line 355
        yield "
<!-- Modal pour supprimer le logo (si logo existe) -->
";
        // line 357
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 357, $this->source); })()), "logo", [], "any", false, false, false, 357)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 358
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
            // line 374
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 374, $this->source); })()), "logo", [], "any", false, false, false, 374))), "html", null, true);
            yield "\" 
                         alt=\"";
            // line 375
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 375, $this->source); })()), "companyName", [], "any", false, false, false, 375), "html", null, true);
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
            // line 384
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_hmaservice_delete_logo");
            yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 385
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-logo" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 385, $this->source); })()), "id", [], "any", false, false, false, 385))), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 397
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

        // line 398
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion des modals
    const deactivateBtn = document.querySelector('[data-bs-target=\"#deactivateModal\"]');
    const activateBtn = document.querySelector('[data-bs-target=\"#activateModal\"]');
    
    // Animation pour les cartes
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
            this.style.transition = 'transform 0.3s ease';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
    
    // Gestion du statut
    const statusBadge = document.querySelector('.badge');
    if (statusBadge) {
        const statusText = statusBadge.textContent.trim().toLowerCase();
        if (statusText.includes('actif')) {
            statusBadge.classList.add('bg-success', 'text-white');
        } else if (statusText.includes('désactivé')) {
            statusBadge.classList.add('bg-danger', 'text-white');
        }
    }
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
        return "dashboard/hmaservice/details.html.twig";
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
        return array (  647 => 398,  634 => 397,  612 => 385,  608 => 384,  596 => 375,  592 => 374,  574 => 358,  572 => 357,  568 => 355,  555 => 345,  551 => 344,  520 => 315,  518 => 314,  507 => 306,  502 => 304,  498 => 303,  483 => 291,  442 => 255,  386 => 202,  371 => 190,  367 => 189,  353 => 178,  338 => 166,  316 => 146,  309 => 141,  306 => 140,  297 => 136,  292 => 133,  290 => 132,  287 => 131,  281 => 130,  277 => 129,  274 => 128,  268 => 126,  265 => 125,  263 => 124,  241 => 105,  227 => 94,  207 => 76,  201 => 72,  195 => 68,  193 => 67,  187 => 64,  178 => 58,  174 => 57,  164 => 50,  159 => 48,  156 => 47,  149 => 42,  142 => 38,  137 => 37,  135 => 36,  115 => 19,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/dashboard/hmaservice/details.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Détails de l'entreprise{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <!-- Header -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <div>
                    <h1 class=\"h3 fw-bold text-dark mb-1\">
                        <i class=\"bi bi-building text-primary me-2\"></i>
                        Détails de l'entreprise
                    </h1>
                    <p class=\"text-muted mb-0\">Consultez les informations de votre entreprise</p>
                </div>
                <a href=\"{{ path('app_dashboard') }}\" class=\"btn btn-outline-secondary\">
                    <i class=\"bi bi-arrow-left me-2\"></i>Retour au Dashboard
                </a>
            </div>
        </div>
    </div>

    <!-- Carte principale avec toutes les informations -->
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-lg\">
                <div class=\"card-body p-4\">
                    <div class=\"row\">
                        <!-- Logo et informations de base -->
                        <div class=\"col-lg-4 border-end\">
                            <div class=\"text-center mb-4\">
                                <div class=\"logo-container position-relative d-inline-block mb-3\">
                                    {% if hma_service.logo %}
                                        <img src=\"{{ asset('uploads/logos/' ~ hma_service.logo) }}\" 
                                             alt=\"{{ hma_service.companyName }}\" 
                                             class=\"img-fluid rounded-circle border border-4 border-light shadow-lg\"
                                             style=\"width: 180px; height: 180px; object-fit: cover;\">
                                    {% else %}
                                        <div class=\"rounded-circle d-flex align-items-center justify-content-center bg-gradient-primary text-white border border-4 border-light shadow-lg\"
                                             style=\"width: 180px; height: 180px;\">
                                            <i class=\"bi bi-building\" style=\"font-size: 4rem;\"></i>
                                        </div>
                                    {% endif %}
                                </div>
                                <h4 class=\"mb-1 fw-bold\">{{ hma_service.companyName }}</h4>
                                <div class=\"badge bg-primary-subtle text-primary rounded-pill px-3 py-2 mb-3\">
                                    <i class=\"bi bi-award me-1\"></i>{{ hma_service.companyType|trans }}
                                </div>
                            </div>

                            <!-- Statut -->
                            <div class=\"text-center mb-4\">
                                <div class=\"d-inline-flex align-items-center bg-light rounded-pill px-4 py-2\">
                                    <i class=\"bi bi-circle-fill {{ hma_service.isActive ? 'text-success' : 'text-danger' }} me-2\"></i>
                                    <span class=\"fw-semibold\">{{ hma_service.isActive ? 'Compte actif' : 'Compte désactivé' }}</span>
                                </div>
                            </div>

                            <!-- Actions rapides -->
                            <div class=\"d-grid gap-2\">
                                <a href=\"{{ path('app_dashboard_hmaservice_edit') }}\" class=\"btn btn-primary\">
                                    <i class=\"bi bi-pencil-square me-2\"></i>Modifier les informations
                                </a>
                                {% if hma_service.isActive %}
                                <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deactivateModal\">
                                    <i class=\"bi bi-power me-2\"></i>Désactiver le compte
                                </button>
                                {% else %}
                                <button type=\"button\" class=\"btn btn-outline-success\" data-bs-toggle=\"modal\" data-bs-target=\"#activateModal\">
                                    <i class=\"bi bi-power me-2\"></i>Activer le compte
                                </button>
                                {% endif %}
                            </div>
                        </div>

                        <!-- Informations détaillées -->
                        <div class=\"col-lg-8\">
                            <!-- Informations de contact -->
                            <div class=\"mb-5\">
                                <h5 class=\"fw-bold mb-3\">
                                    <i class=\"bi bi-telephone text-primary me-2\"></i>
                                    Informations de contact
                                </h5>
                                <div class=\"row g-3\">
                                    <div class=\"col-md-6\">
                                        <div class=\"card bg-light border-0\">
                                            <div class=\"card-body\">
                                                <small class=\"text-muted d-block mb-1\">Email professionnel</small>
                                                <div class=\"d-flex align-items-center\">
                                                    <i class=\"bi bi-envelope text-primary me-2\"></i>
                                                    <span class=\"fw-semibold\">{{ hma_service.email }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"card bg-light border-0\">
                                            <div class=\"card-body\">
                                                <small class=\"text-muted d-block mb-1\">Téléphone</small>
                                                <div class=\"d-flex align-items-center\">
                                                    <i class=\"bi bi-telephone text-primary me-2\"></i>
                                                    <span class=\"fw-semibold\">{{ hma_service.phone }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Adresse -->
                            <div class=\"mb-5\">
                                <h5 class=\"fw-bold mb-3\">
                                    <i class=\"bi bi-geo-alt text-primary me-2\"></i>
                                    Adresse
                                </h5>
                                <div class=\"card bg-light border-0\">
                                    <div class=\"card-body\">
                                        <div class=\"d-flex align-items-start\">
                                            <i class=\"bi bi-geo-alt-fill text-primary mt-1 me-3 fs-5\"></i>
                                            <div>
                                                {% if hma_service.address or hma_service.city or hma_service.country %}
                                                    {% if hma_service.address %}
                                                        <p class=\"mb-1 fw-semibold\">{{ hma_service.address }}</p>
                                                    {% endif %}
                                                    <div class=\"text-muted\">
                                                        {% if hma_service.city %}{{ hma_service.city }}{% endif %}
                                                        {% if hma_service.country %}, {{ hma_service.country }}{% endif %}
                                                    </div>
                                                    {% if hma_service.latitude and hma_service.longitude %}
                                                        <div class=\"mt-2\">
                                                            <small class=\"text-muted\">
                                                                <i class=\"bi bi-geo me-1\"></i>
                                                                GPS: {{ hma_service.latitude|number_format(6) }}, {{ hma_service.longitude|number_format(6) }}
                                                            </small>
                                                        </div>
                                                    {% endif %}
                                                {% else %}
                                                    <p class=\"text-muted mb-0\">
                                                        <i class=\"bi bi-exclamation-circle me-1\"></i>
                                                        Aucune adresse renseignée
                                                    </p>
                                                {% endif %}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Informations du compte -->
                            <div class=\"mb-5\">
                                <h5 class=\"fw-bold mb-3\">
                                    <i class=\"bi bi-info-circle text-primary me-2\"></i>
                                    Informations du compte
                                </h5>
                                <div class=\"row g-3\">
                                    <div class=\"col-md-6\">
                                        <div class=\"card bg-light border-0\">
                                            <div class=\"card-body\">
                                                <small class=\"text-muted d-block mb-1\">Numéro d'abonnement</small>
                                                <div class=\"d-flex align-items-center\">
                                                    <i class=\"bi bi-tag text-primary me-2\"></i>
                                                    <span class=\"fw-semibold badge bg-success\">
                                                        {{ hma_service.subscriptionNumber ?? 'Non attribué' }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"card bg-light border-0\">
                                            <div class=\"card-body\">
                                                <small class=\"text-muted d-block mb-1\">Date de création</small>
                                                <div class=\"d-flex align-items-center\">
                                                    <i class=\"bi bi-calendar text-primary me-2\"></i>
                                                    <span class=\"fw-semibold\">{{ hma_service.createdAt|date('d/m/Y') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"card bg-light border-0\">
                                            <div class=\"card-body\">
                                                <small class=\"text-muted d-block mb-1\">Période d'essai</small>
                                                <div class=\"d-flex align-items-center\">
                                                    <i class=\"bi bi-clock-history text-primary me-2\"></i>
                                                    <span class=\"fw-semibold {{ hma_service.trialEndsAt and hma_service.trialEndsAt < date('+7 days') ? 'text-danger' : '' }}\">
                                                        {{ hma_service.trialEndsAt ? hma_service.trialEndsAt|date('d/m/Y') : 'Non défini' }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"card bg-light border-0\">
                                            <div class=\"card-body\">
                                                <small class=\"text-muted d-block mb-1\">Dernière mise à jour</small>
                                                <div class=\"d-flex align-items-center\">
                                                    <i class=\"bi bi-arrow-clockwise text-primary me-2\"></i>
                                                    <span class=\"fw-semibold\">{{ hma_service.updatedAt ? hma_service.updatedAt|date('d/m/Y H:i') : 'Jamais' }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Statistiques (optionnel) -->
                            <div>
                                <h5 class=\"fw-bold mb-3\">
                                    <i class=\"bi bi-graph-up text-primary me-2\"></i>
                                    Aperçu
                                </h5>
                                <div class=\"row g-3\">
                                    <div class=\"col-md-4\">
                                        <div class=\"card bg-primary text-white border-0\">
                                            <div class=\"card-body text-center\">
                                                <i class=\"bi bi-people fs-1 mb-2\"></i>
                                                <h6 class=\"mb-1\">Utilisateurs</h6>
                                                <h4 class=\"fw-bold mb-0\">5</h4>
                                                <small>Total employés</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"card bg-success text-white border-0\">
                                            <div class=\"card-body text-center\">
                                                <i class=\"bi bi-box-seam fs-1 mb-2\"></i>
                                                <h6 class=\"mb-1\">Produits</h6>
                                                <h4 class=\"fw-bold mb-0\">24</h4>
                                                <small>En stock</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"card bg-info text-white border-0\">
                                            <div class=\"card-body text-center\">
                                                <i class=\"bi bi-cart fs-1 mb-2\"></i>
                                                <h6 class=\"mb-1\">Commandes</h6>
                                                <h4 class=\"fw-bold mb-0\">12</h4>
                                                <small>Ce mois-ci</small>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Dans details.html.twig -->
                                    <div class=\"col-md-4\">
                                        <div class=\"card bg-light border-0\">
                                            <div class=\"card-body\">
                                                <small class=\"text-muted d-block mb-1\">Utilisateurs actifs</small>
                                                <div class=\"d-flex align-items-center\">
                                                    <i class=\"bi bi-people text-primary me-2\"></i>
                                                    <span class=\"fw-semibold\">
                                                        {{ active_users_count }} / {{ total_users_count }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de désactivation -->
<div class=\"modal fade\" id=\"deactivateModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header border-0 pb-0\">
                <h5 class=\"modal-title text-danger\">
                    <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>Désactiver le compte
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <i class=\"bi bi-power text-danger\" style=\"font-size: 3rem;\"></i>
                </div>
                <h5 class=\"fw-bold mb-3\">Désactiver le compte entreprise ?</h5>
                <p class=\"text-muted\">
                    Cette action désactivera temporairement le compte de votre entreprise et tous les utilisateurs associés.
                    <br><br>
                    <strong>Conséquences :</strong>
                    <ul class=\"text-start text-muted small\">
                        <li><strong>{{ total_users_count }} utilisateur(s)</strong> seront désactivés</li>
                        <li>Personne ne pourra plus se connecter</li>
                        <li>Les commandes en cours seront suspendues</li>
                        <li>L'accès aux données sera restreint</li>
                        <li>Vous pourrez réactiver le compte à tout moment</li>
                    </ul>
                </p>
            </div>
            <div class=\"modal-footer border-0 pt-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"bi bi-x-circle me-1\"></i>Annuler
                </button>
                <form action=\"{{ path('app_dashboard_hmaservice_deactivate') }}\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('deactivate-company' ~ hma_service.id) }}\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"bi bi-power me-1\"></i>Désactiver {{ total_users_count }} utilisateur(s)
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal d'activation (si désactivé) -->
{% if not hma_service.isActive %}
<div class=\"modal fade\" id=\"activateModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header border-0 pb-0\">
                <h5 class=\"modal-title text-success\">
                    <i class=\"bi bi-check-circle-fill me-2\"></i>Activer le compte
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <i class=\"bi bi-power text-success\" style=\"font-size: 3rem;\"></i>
                </div>
                <h5 class=\"fw-bold mb-3\">Activer le compte entreprise ?</h5>
                <p class=\"text-muted\">
                    Cette action réactivera le compte de votre entreprise.
                    <br><br>
                    <strong>Conséquences :</strong>
                    <ul class=\"text-start text-muted small\">
                        <li>Les utilisateurs pourront à nouveau se connecter</li>
                        <li>Les fonctionnalités seront restaurées</li>
                        <li>L'accès aux données sera rétabli</li>
                    </ul>
                </p>
            </div>
            <div class=\"modal-footer border-0 pt-0\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"bi bi-x-circle me-1\"></i>Annuler
                </button>
                <form action=\"{{ path('app_dashboard_hmaservice_activate') }}\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('activate-company' ~ hma_service.id) }}\">
                    <button type=\"submit\" class=\"btn btn-success\">
                        <i class=\"bi bi-power me-1\"></i>Activer le compte
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endif %}

<!-- Modal pour supprimer le logo (si logo existe) -->
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
{% endblock %}

{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion des modals
    const deactivateBtn = document.querySelector('[data-bs-target=\"#deactivateModal\"]');
    const activateBtn = document.querySelector('[data-bs-target=\"#activateModal\"]');
    
    // Animation pour les cartes
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
            this.style.transition = 'transform 0.3s ease';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
    
    // Gestion du statut
    const statusBadge = document.querySelector('.badge');
    if (statusBadge) {
        const statusText = statusBadge.textContent.trim().toLowerCase();
        if (statusText.includes('actif')) {
            statusBadge.classList.add('bg-success', 'text-white');
        } else if (statusText.includes('désactivé')) {
            statusBadge.classList.add('bg-danger', 'text-white');
        }
    }
});
</script>
{% endblock %}", "dashboard/hmaservice/details.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\dashboard\\hmaservice\\details.html.twig");
    }
}
