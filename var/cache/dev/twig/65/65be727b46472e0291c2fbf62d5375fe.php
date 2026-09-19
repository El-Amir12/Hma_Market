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

/* profile/show.html.twig */
class __TwigTemplate_22d79ec108efb57b90b22036fffd8f5e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/show.html.twig"));

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

        yield "Mon profil - ";
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
        yield "<div class=\"container-fluid px-3 px-md-4\">
    <!-- Header moderne -->
    <div class=\"row mb-4 mb-md-5\">
        <div class=\"col-12\">
            <div class=\"profile-header position-relative overflow-hidden rounded-4 shadow-lg\">
                <div class=\"floating-shapes\">
                    <div class=\"shape shape-1\"></div>
                    <div class=\"shape shape-2\"></div>
                    <div class=\"shape shape-3\"></div>
                </div>
                
                <div class=\"position-relative p-3 p-md-5 profile-header-content\" style=\"z-index: 2;\">
                    <div class=\"row align-items-center g-3\">
                        <div class=\"col-12 col-lg-8\">
                            <div class=\"d-flex flex-column flex-sm-row align-items-center align-items-sm-start text-center text-sm-start gap-3 gap-md-4\">
                                <div class=\"icon-wrapper bg-white bg-opacity-20 rounded-4 p-3 p-md-4 flex-shrink-0\">
                                    <i class=\"bi bi-person-circle text-white display-4\"></i>
                                </div>
                                <div class=\"flex-grow-1\">
                                    <h1 class=\"display-6 display-md-5 fw-bold text-white mb-2\">Mon profil</h1>
                                    <div class=\"d-flex align-items-center justify-content-center justify-content-sm-start gap-2 gap-md-3 flex-wrap\">
                                        <span class=\"badge bg-white text-primary px-3 px-md-4 py-2 rounded-pill fs-6\">
                                            <i class=\"bi bi-building me-2\"></i>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "companyDisplayName", [], "any", false, false, false, 28), "html", null, true);
        yield "
                                        </span>
                                        <span class=\"text-white-50 small\">
                                            <i class=\"bi bi-person-badge me-1\"></i>
                                            ";
        // line 32
        $context["role"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "roles", [], "any", false, false, false, 32), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return ((isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 32, $this->source); })()) != "ROLE_USER"); }));
        // line 33
        yield "                                            ";
        if (((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 33, $this->source); })()) == "ROLE_ADMIN")) {
            yield "Administrateur
                                            ";
        } elseif ((        // line 34
(isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 34, $this->source); })()) == "ROLE_MANAGER")) {
            yield "Gestionnaire
                                            ";
        } elseif ((        // line 35
(isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 35, $this->source); })()) == "ROLE_STOCK_MANAGER")) {
            yield "Responsable Stock
                                            ";
        } elseif ((        // line 36
(isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 36, $this->source); })()) == "ROLE_CASHIER")) {
            yield "Caissier
                                            ";
        } else {
            // line 37
            yield "Utilisateur
                                            ";
        }
        // line 39
        yield "                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-lg-4\">
                            <div class=\"d-flex flex-column flex-sm-row gap-2 justify-content-center justify-content-lg-end\">
                                <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
        yield "\" class=\"btn btn-light btn-lg px-3 px-md-4\">
                                    <i class=\"bi bi-pencil-square me-2\"></i>Modifier
                                </a>
                                <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_change_password");
        yield "\" class=\"btn btn-outline-light btn-lg px-3 px-md-4\">
                                    <i class=\"bi bi-key me-2\"></i>Sécurité
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"wave-decoration\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 120\" preserveAspectRatio=\"none\">
                        <path fill=\"#ffffff\" fill-opacity=\"1\" d=\"M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,120L1360,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z\"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Messages flash -->
    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "flashes", ["success"], "method", false, false, false, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 68
            yield "        <div class=\"alert alert-success alert-dismissible fade show rounded-4 shadow-sm mb-4\" role=\"alert\">
            <div class=\"d-flex align-items-center\">
                <i class=\"bi bi-check-circle-fill fs-4 me-3\"></i>
                <div>";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
            </div>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "
    <!-- Contenu du profil -->
    <div class=\"row g-3 g-md-4\">
        <!-- Colonne de gauche - Photo et infos rapides -->
        <div class=\"col-12 col-lg-4\">
            <div class=\"card border-0 shadow-lg h-100\">
                <div class=\"card-body text-center p-3 p-md-4\">
                    <!-- Photo de profil -->
                    <div class=\"position-relative d-inline-block mb-4\">
                        ";
        // line 85
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 85, $this->source); })()), "photo", [], "any", false, false, false, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 86, $this->source); })()), "photo", [], "any", false, false, false, 86))), "html", null, true);
            yield "?";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "timestamp", [], "any", false, false, false, 86), "html", null, true);
            yield "\" 
                                 alt=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 87, $this->source); })()), "fullName", [], "any", false, false, false, 87), "html", null, true);
            yield "\" 
                                 class=\"rounded-circle shadow-lg profile-photo\"
                                 id=\"profilePhoto\"
                                 style=\"width: 180px; height: 180px; object-fit: cover; border: 5px solid #667eea;\">
                        ";
        } else {
            // line 92
            yield "                            <div class=\"avatar-circle bg-gradient-primary text-white shadow-lg mx-auto\"
                                 style=\"width: 180px; height: 180px; border: 5px solid #667eea;\">
                                <i class=\"bi bi-person-fill\" style=\"font-size: 5rem;\"></i>
                            </div>
                        ";
        }
        // line 97
        yield "                        
                        <span class=\"position-absolute bottom-0 end-0\">
                            <span class=\"status-badge bg-";
        // line 99
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 99, $this->source); })()), "isActive", [], "any", false, false, false, 99)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("success") : ("danger"));
        yield " rounded-circle p-2 border border-3 border-white shadow d-inline-block\"
                                  style=\"width: 30px; height: 30px;\"
                                  data-bs-toggle=\"tooltip\"
                                  title=\"";
        // line 102
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 102, $this->source); })()), "isActive", [], "any", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Compte actif") : ("Compte inactif"));
        yield "\"></span>
                        </span>
                    </div>

                    <h3 class=\"mb-1\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 106, $this->source); })()), "fullName", [], "any", false, false, false, 106), "html", null, true);
        yield "</h3>
                    <p class=\"text-muted mb-3 text-break\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 107, $this->source); })()), "email", [], "any", false, false, false, 107), "html", null, true);
        yield "</p>

                    <!-- ✅ Bouton \"Appeler\" SUPPRIMÉ (l'utilisateur ne peut pas s'appeler lui-même) -->
                    <div class=\"d-grid gap-2\">
                        <a href=\"mailto:";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 111, $this->source); })()), "email", [], "any", false, false, false, 111), "html", null, true);
        yield "\" class=\"btn btn-outline-info btn-lg\">
                            <i class=\"bi bi-envelope-fill me-2\"></i>Envoyer un email
                        </a>
                    </div>

                    <hr class=\"my-4\">

                    <div class=\"text-start\">
                        <div class=\"d-flex align-items-center mb-3\">
                            <div class=\"icon-box bg-primary bg-opacity-10 rounded-3 p-2 me-3 flex-shrink-0\">
                                <i class=\"bi bi-telephone-fill text-primary\"></i>
                            </div>
                            <div class=\"min-w-0\">
                                <small class=\"text-muted d-block\">Téléphone</small>
                                <strong>";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 125, $this->source); })()), "phone", [], "any", false, false, false, 125), "html", null, true);
        yield "</strong>
                            </div>
                        </div>
                        <div class=\"d-flex align-items-center mb-3\">
                            <div class=\"icon-box bg-success bg-opacity-10 rounded-3 p-2 me-3 flex-shrink-0\">
                                <i class=\"bi bi-calendar-plus text-success\"></i>
                            </div>
                            <div class=\"min-w-0\">
                                <small class=\"text-muted d-block\">Date d'embauche</small>
                                <strong>";
        // line 134
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 134, $this->source); })()), "employmentDate", [], "any", false, false, false, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 134, $this->source); })()), "employmentDate", [], "any", false, false, false, 134), "d/m/Y"), "html", null, true)) : ("Non renseignée"));
        yield "</strong>
                            </div>
                        </div>
                        <div class=\"d-flex align-items-center mb-3\">
                            <div class=\"icon-box bg-info bg-opacity-10 rounded-3 p-2 me-3 flex-shrink-0\">
                                <i class=\"bi bi-calendar-check text-info\"></i>
                            </div>
                            <div class=\"min-w-0\">
                                <small class=\"text-muted d-block\">Membre depuis</small>
                                <strong>";
        // line 143
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 143, $this->source); })()), "createdAt", [], "any", false, false, false, 143)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 143, $this->source); })()), "createdAt", [], "any", false, false, false, 143), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield "</strong>
                            </div>
                        </div>
                        ";
        // line 146
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 146, $this->source); })()), "updatedAt", [], "any", false, false, false, 146)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 147
            yield "                            <div class=\"d-flex align-items-center\">
                                <div class=\"icon-box bg-warning bg-opacity-10 rounded-3 p-2 me-3 flex-shrink-0\">
                                    <i class=\"bi bi-clock-history text-warning\"></i>
                                </div>
                                <div class=\"min-w-0\">
                                    <small class=\"text-muted d-block\">Dernière modification</small>
                                    <strong>";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 153, $this->source); })()), "updatedAt", [], "any", false, false, false, 153), "d/m/Y"), "html", null, true);
            yield "</strong>
                                </div>
                            </div>
                        ";
        }
        // line 157
        yield "                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne de droite - Informations détaillées -->
        <div class=\"col-12 col-lg-8\">
            <div class=\"row g-3 g-md-4\">
                <!-- Informations personnelles -->
                <div class=\"col-12 col-md-6\">
                    <div class=\"card border-0 shadow-lg h-100\">
                        <div class=\"card-header bg-gradient-info text-white py-3\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"bi bi-person-badge me-2\"></i>Informations personnelles
                            </h5>
                        </div>
                        <div class=\"card-body p-3 p-md-4\">
                            <table class=\"table table-borderless profile-table mb-0\">
                                <tr>
                                    <td class=\"text-muted ps-0\">Nom complet</td>
                                    <td class=\"fw-semibold pe-0 text-end text-break\">";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 177, $this->source); })()), "fullName", [], "any", false, false, false, 177), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <td class=\"text-muted ps-0\">Email</td>
                                    <td class=\"fw-semibold pe-0 text-end text-break\">
                                        <a href=\"mailto:";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 182, $this->source); })()), "email", [], "any", false, false, false, 182), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                                            ";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 183, $this->source); })()), "email", [], "any", false, false, false, 183), "html", null, true);
        yield "
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"text-muted ps-0\">Téléphone</td>
                                    <td class=\"fw-semibold pe-0 text-end\">
                                        ";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 190, $this->source); })()), "phone", [], "any", false, false, false, 190), "html", null, true);
        yield "
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"text-muted ps-0\">Entreprise</td>
                                    <td class=\"fw-semibold pe-0 text-end\">
                                        ";
        // line 196
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 196, $this->source); })()), "hmaService", [], "any", false, false, false, 196)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 197
            yield "                                            <span class=\"badge bg-primary px-3 py-2\">
                                                <i class=\"bi bi-building me-1\"></i>
                                                ";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 199, $this->source); })()), "hmaService", [], "any", false, false, false, 199), "companyName", [], "any", false, false, false, 199), "html", null, true);
            yield "
                                            </span>
                                        ";
        } else {
            // line 202
            yield "                                            <span class=\"badge bg-secondary px-3 py-2\">
                                                <i class=\"bi bi-person me-1\"></i>
                                                Indépendant
                                            </span>
                                        ";
        }
        // line 207
        yield "                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Informations système -->
                <div class=\"col-12 col-md-6\">
                    <div class=\"card border-0 shadow-lg h-100\">
                        <div class=\"card-header bg-gradient-secondary text-white py-3\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"bi bi-shield-lock me-2\"></i>Sécurité
                            </h5>
                        </div>
                        <div class=\"card-body p-3 p-md-4\">
                            <table class=\"table table-borderless profile-table mb-0\">
                                <tr>
                                    <td class=\"text-muted ps-0\">Rôle</td>
                                    <td class=\"fw-semibold pe-0 text-end\">
                                        <span class=\"role-badge ";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 227, $this->source); })()), "roleBadgeClass", [], "any", false, false, false, 227), "html", null, true);
        yield " py-2 px-3 px-md-4\">
                                            <i class=\"bi ";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 228, $this->source); })()), "roleIcon", [], "any", false, false, false, 228), "html", null, true);
        yield " me-2\"></i>
                                            ";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 229, $this->source); })()), "roleLabel", [], "any", false, false, false, 229), "html", null, true);
        yield "
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"text-muted ps-0\">Statut</td>
                                    <td class=\"fw-semibold pe-0 text-end\">
                                        ";
        // line 236
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 236, $this->source); })()), "isActive", [], "any", false, false, false, 236)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 237
            yield "                                            <span class=\"badge bg-success px-3 py-2\">
                                                <i class=\"bi bi-check-circle-fill me-1\"></i>Actif
                                            </span>
                                        ";
        } else {
            // line 241
            yield "                                            <span class=\"badge bg-danger px-3 py-2\">
                                                <i class=\"bi bi-x-circle-fill me-1\"></i>Inactif
                                            </span>
                                        ";
        }
        // line 245
        yield "                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"text-muted ps-0\">Mot de passe</td>
                                    <td class=\"fw-semibold pe-0 text-end\">
                                        ";
        // line 250
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 250, $this->source); })()), "passwordChanged", [], "any", false, false, false, 250)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 251
            yield "                                            <span class=\"badge bg-success px-3 py-2\">
                                                <i class=\"bi bi-check-circle-fill me-1\"></i>Déjà modifié
                                            </span>
                                        ";
        } else {
            // line 255
            yield "                                            <span class=\"badge bg-warning text-dark px-3 py-2\">
                                                <i class=\"bi bi-exclamation-triangle-fill me-1\"></i>Première connexion
                                            </span>
                                        ";
        }
        // line 259
        yield "                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"text-muted ps-0\">Dernière connexion</td>
                                    <td class=\"fw-semibold pe-0 text-end\">
                                        <span class=\"badge bg-info px-3 py-2\">
                                            <i class=\"bi bi-clock me-1\"></i>";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "lastLoginAt", [], "any", true, true, false, 265)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 265, $this->source); })()), "lastLoginAt", [], "any", false, false, false, 265), "N/A")) : ("N/A")), "html", null, true);
        yield "
                                        </span>
                                    </td>
                                </tr>
                            </table>
                            
                            <div class=\"d-grid mt-4\">
                                <a href=\"";
        // line 272
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_change_password");
        yield "\" class=\"btn btn-outline-warning btn-lg\">
                                    <i class=\"bi bi-key me-2\"></i>Changer mon mot de passe
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Statistiques d'activité -->
                <div class=\"col-12\">
                    <div class=\"card border-0 shadow-lg\">
                        <div class=\"card-header bg-gradient-warning text-white py-3\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"bi bi-bar-chart-steps me-2\"></i>Activité récente
                            </h5>
                        </div>
                        <div class=\"card-body p-3 p-md-4\">
                            <div class=\"row g-3 g-md-4\">
                                <div class=\"col-6 col-md-3\">
                                    <div class=\"stat-card text-center h-100\">
                                        <div class=\"stat-icon bg-primary bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block\">
                                            <i class=\"bi bi-box-seam text-primary fs-3\"></i>
                                        </div>
                                        <div class=\"stat-value h3 mb-1 fw-bold\">";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 295, $this->source); })()), "products", [], "any", false, false, false, 295)), "html", null, true);
        yield "</div>
                                        <div class=\"stat-label text-muted small\">Produits créés</div>
                                    </div>
                                </div>
                                <div class=\"col-6 col-md-3\">
                                    <div class=\"stat-card text-center h-100\">
                                        <div class=\"stat-icon bg-success bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block\">
                                            <i class=\"bi bi-cart-check text-success fs-3\"></i>
                                        </div>
                                        <div class=\"stat-value h3 mb-1 fw-bold\">";
        // line 304
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 304, $this->source); })()), "orders", [], "any", false, false, false, 304)), "html", null, true);
        yield "</div>
                                        <div class=\"stat-label text-muted small\">Commandes</div>
                                    </div>
                                </div>
                                <div class=\"col-6 col-md-3\">
                                    <div class=\"stat-card text-center h-100\">
                                        <div class=\"stat-icon bg-info bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block\">
                                            <i class=\"bi bi-arrow-left-right text-info fs-3\"></i>
                                        </div>
                                        <div class=\"stat-value h3 mb-1 fw-bold\">";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 313, $this->source); })()), "stockMovements", [], "any", false, false, false, 313)), "html", null, true);
        yield "</div>
                                        <div class=\"stat-label text-muted small\">Mouvements</div>
                                    </div>
                                </div>
                                <div class=\"col-6 col-md-3\">
                                    <div class=\"stat-card text-center h-100\">
                                        <div class=\"stat-icon bg-warning bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block\">
                                            <i class=\"bi bi-tags text-warning fs-3\"></i>
                                        </div>
                                        <div class=\"stat-value h3 mb-1 fw-bold\">";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 322, $this->source); })()), "categories", [], "any", false, false, false, 322)), "html", null, true);
        yield "</div>
                                        <div class=\"stat-label text-muted small\">Catégories</div>
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

<style>
:root {
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --info-gradient: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
    --secondary-gradient: linear-gradient(135deg, #9ca3af 0%, #6b7280 100%);
    --warning-gradient: linear-gradient(135deg, #fbbf24 0%, #d97706 100%);
}

/* Header */
.profile-header {
    background: var(--primary-gradient);
    position: relative;
    min-height: 200px;
}

.floating-shapes {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 1;
}

.shape {
    position: absolute;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
}

.shape-1 {
    width: 250px;
    height: 250px;
    top: -120px;
    right: -50px;
    animation: float 8s ease-in-out infinite;
}

.shape-2 {
    width: 180px;
    height: 180px;
    bottom: -70px;
    left: -30px;
    animation: float 12s ease-in-out infinite reverse;
}

.shape-3 {
    width: 130px;
    height: 130px;
    top: 30%;
    left: 20%;
    animation: float 10s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(10deg); }
}

.icon-wrapper {
    transition: transform 0.3s ease;
}

.icon-wrapper:hover {
    transform: scale(1.05) rotate(5deg);
}

.wave-decoration {
    position: absolute;
    bottom: -1px;
    left: 0;
    right: 0;
    line-height: 0;
    z-index: 2;
}

.wave-decoration svg {
    width: 100%;
    height: 50px;
}

/* Avatar */
.avatar-circle {
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
}

.avatar-circle i {
    animation: pulse 3s infinite;
}

@keyframes pulse {
    0%, 100% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.1); opacity: 0.9; }
}

/* Badges de rôle */
.role-badge {
    display: inline-flex;
    align-items: center;
    padding: 8px 20px;
    border-radius: 30px;
    font-size: 0.95rem;
    font-weight: 600;
    color: white;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.2);
    letter-spacing: 0.3px;
    transition: all 0.3s ease;
}

.role-badge i {
    font-size: 1.1rem;
}

.role-badge:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
}

.role-badge.bg-gradient-primary { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
.role-badge.bg-gradient-info { background: linear-gradient(135deg, #4299e1 0%, #3182ce 100%); }
.role-badge.bg-gradient-warning { background: linear-gradient(135deg, #fbbf24 0%, #d97706 100%); }
.role-badge.bg-gradient-success { background: linear-gradient(135deg, #48bb78 0%, #38a169 100%); }
.role-badge.bg-gradient-danger { background: linear-gradient(135deg, #f56565 0%, #e53e3e 100%); }
.role-badge.bg-gradient-secondary { background: linear-gradient(135deg, #a0aec0 0%, #718096 100%); }

/* Icon box */
.icon-box {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Statistiques */
.stat-card {
    padding: 1.5rem 1rem;
    background: white;
    border-radius: 15px;
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05);
}

.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

.stat-icon {
    transition: all 0.3s ease;
}

.stat-card:hover .stat-icon {
    transform: scale(1.1);
}

/* Cards */
.card {
    border-radius: 15px;
    overflow: hidden;
    transition: all 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15) !important;
}

.bg-gradient-info {
    background: var(--info-gradient) !important;
}

.bg-gradient-secondary {
    background: var(--secondary-gradient) !important;
}

.bg-gradient-warning {
    background: var(--warning-gradient) !important;
}

/* Badge de statut */
.status-badge {
    animation: statusPulse 2s infinite;
}

@keyframes statusPulse {
    0% { box-shadow: 0 0 0 0 rgba(102, 126, 234, 0.7); }
    70% { box-shadow: 0 0 0 10px rgba(102, 126, 234, 0); }
    100% { box-shadow: 0 0 0 0 rgba(102, 126, 234, 0); }
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

.btn-outline-primary:hover {
    background: var(--primary-gradient);
    border-color: transparent;
    color: white;
}

.btn-outline-light:hover {
    background: rgba(255,255,255,0.2);
    border-color: white;
    color: white;
}

/* Table */
.table-borderless td {
    padding: 0.75rem 0;
    border: none;
}

/* Badges */
.badge {
    border-radius: 30px;
    font-weight: 500;
}

/* Alerts */
.alert {
    border-radius: 15px;
    border: none;
}

/* Utility */
.min-w-0 {
    min-width: 0;
}

/* ============================================
   RESPONSIVE MOBILE - AMÉLIORATIONS
   ============================================ */

/* Tablette */
@media (max-width: 991.98px) {
    .profile-header {
        min-height: auto;
    }
    
    .profile-header-content {
        padding-bottom: 3.5rem !important;
    }
    
    .wave-decoration svg {
        height: 40px;
    }
}

/* Mobile */
@media (max-width: 767.98px) {
    .container-fluid {
        padding-left: 0.75rem;
        padding-right: 0.75rem;
    }
    
    /* Header */
    .profile-header {
        border-radius: 1rem !important;
    }
    
    .profile-header-content {
        padding: 1.5rem 1rem 3rem !important;
    }
    
    .profile-header h1.display-6 {
        font-size: 1.75rem;
    }
    
    .icon-wrapper {
        padding: 0.75rem !important;
    }
    
    .icon-wrapper i {
        font-size: 2rem !important;
    }
    
    .wave-decoration svg {
        height: 30px;
    }
    
    /* Photo de profil */
    .profile-photo,
    .avatar-circle {
        width: 130px !important;
        height: 130px !important;
    }
    
    .avatar-circle i {
        font-size: 3.5rem !important;
    }
    
    /* Badge de statut */
    .status-badge {
        width: 24px !important;
        height: 24px !important;
    }
    
    /* Cards */
    .card-header h5 {
        font-size: 1rem;
    }
    
    .card-header {
        padding: 0.75rem 1rem;
    }
    
    /* Tableaux -> transformation en liste sur mobile */
    .profile-table tr {
        display: flex;
        flex-direction: column;
        padding: 0.75rem 0;
        border-bottom: 1px solid rgba(0,0,0,0.06);
    }
    
    .profile-table tr:last-child {
        border-bottom: none;
    }
    
    .profile-table td {
        display: block;
        width: 100%;
        text-align: left !important;
        padding: 0.15rem 0 !important;
    }
    
    .profile-table td.text-muted {
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
    }
    
    .profile-table td.fw-semibold {
        font-size: 0.95rem;
    }
    
    .profile-table td.text-end {
        text-align: left !important;
    }
    
    /* Badges dans les tableaux */
    .profile-table .badge,
    .profile-table .role-badge {
        display: inline-flex;
        margin-top: 0.25rem;
    }
    
    /* Role badge */
    .role-badge {
        padding: 6px 14px;
        font-size: 0.85rem;
    }
    
    /* Stats */
    .stat-card {
        padding: 1rem 0.5rem;
    }
    
    .stat-icon {
        padding: 0.5rem !important;
    }
    
    .stat-icon i {
        font-size: 1.25rem !important;
    }
    
    .stat-value {
        font-size: 1.25rem !important;
    }
    
    .stat-label {
        font-size: 0.7rem;
    }
    
    /* Boutons */
    .btn-lg {
        font-size: 0.9rem;
        padding: 0.6rem 1rem;
    }
    
    /* Email / téléphone wrap */
    .text-break {
        word-break: break-word;
    }
}

/* Très petits mobiles */
@media (max-width: 375.98px) {
    .profile-header h1.display-6 {
        font-size: 1.4rem;
    }
    
    .profile-photo,
    .avatar-circle {
        width: 110px !important;
        height: 110px !important;
    }
    
    .avatar-circle i {
        font-size: 3rem !important;
    }
    
    .stat-value {
        font-size: 1.1rem !important;
    }
    
    .stat-label {
        font-size: 0.65rem;
    }
    
    .btn-lg {
        font-size: 0.8rem;
        padding: 0.5rem 0.75rem;
    }
}
</style>

";
        // line 769
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

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

        // line 770
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialisation des tooltips Bootstrap
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // Auto-fermeture des alertes
    setTimeout(function() {
        document.querySelectorAll('.alert').forEach(function(alert) {
            var bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        });
    }, 5000);
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
        return "profile/show.html.twig";
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
        return array (  1040 => 770,  1017 => 769,  567 => 322,  555 => 313,  543 => 304,  531 => 295,  505 => 272,  495 => 265,  487 => 259,  481 => 255,  475 => 251,  473 => 250,  466 => 245,  460 => 241,  454 => 237,  452 => 236,  442 => 229,  438 => 228,  434 => 227,  412 => 207,  405 => 202,  399 => 199,  395 => 197,  393 => 196,  384 => 190,  374 => 183,  370 => 182,  362 => 177,  340 => 157,  333 => 153,  325 => 147,  323 => 146,  317 => 143,  305 => 134,  293 => 125,  276 => 111,  269 => 107,  265 => 106,  258 => 102,  252 => 99,  248 => 97,  241 => 92,  233 => 87,  226 => 86,  224 => 85,  213 => 76,  202 => 71,  197 => 68,  193 => 67,  172 => 49,  166 => 46,  157 => 39,  153 => 37,  148 => 36,  144 => 35,  140 => 34,  135 => 33,  133 => 32,  126 => 28,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon profil - {{ user.fullName }}{% endblock %}

{% block body %}
<div class=\"container-fluid px-3 px-md-4\">
    <!-- Header moderne -->
    <div class=\"row mb-4 mb-md-5\">
        <div class=\"col-12\">
            <div class=\"profile-header position-relative overflow-hidden rounded-4 shadow-lg\">
                <div class=\"floating-shapes\">
                    <div class=\"shape shape-1\"></div>
                    <div class=\"shape shape-2\"></div>
                    <div class=\"shape shape-3\"></div>
                </div>
                
                <div class=\"position-relative p-3 p-md-5 profile-header-content\" style=\"z-index: 2;\">
                    <div class=\"row align-items-center g-3\">
                        <div class=\"col-12 col-lg-8\">
                            <div class=\"d-flex flex-column flex-sm-row align-items-center align-items-sm-start text-center text-sm-start gap-3 gap-md-4\">
                                <div class=\"icon-wrapper bg-white bg-opacity-20 rounded-4 p-3 p-md-4 flex-shrink-0\">
                                    <i class=\"bi bi-person-circle text-white display-4\"></i>
                                </div>
                                <div class=\"flex-grow-1\">
                                    <h1 class=\"display-6 display-md-5 fw-bold text-white mb-2\">Mon profil</h1>
                                    <div class=\"d-flex align-items-center justify-content-center justify-content-sm-start gap-2 gap-md-3 flex-wrap\">
                                        <span class=\"badge bg-white text-primary px-3 px-md-4 py-2 rounded-pill fs-6\">
                                            <i class=\"bi bi-building me-2\"></i>{{ user.companyDisplayName }}
                                        </span>
                                        <span class=\"text-white-50 small\">
                                            <i class=\"bi bi-person-badge me-1\"></i>
                                            {% set role = user.roles|filter(r => r != 'ROLE_USER')|first %}
                                            {% if role == 'ROLE_ADMIN' %}Administrateur
                                            {% elseif role == 'ROLE_MANAGER' %}Gestionnaire
                                            {% elseif role == 'ROLE_STOCK_MANAGER' %}Responsable Stock
                                            {% elseif role == 'ROLE_CASHIER' %}Caissier
                                            {% else %}Utilisateur
                                            {% endif %}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-lg-4\">
                            <div class=\"d-flex flex-column flex-sm-row gap-2 justify-content-center justify-content-lg-end\">
                                <a href=\"{{ path('app_profile_edit') }}\" class=\"btn btn-light btn-lg px-3 px-md-4\">
                                    <i class=\"bi bi-pencil-square me-2\"></i>Modifier
                                </a>
                                <a href=\"{{ path('app_change_password') }}\" class=\"btn btn-outline-light btn-lg px-3 px-md-4\">
                                    <i class=\"bi bi-key me-2\"></i>Sécurité
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"wave-decoration\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 120\" preserveAspectRatio=\"none\">
                        <path fill=\"#ffffff\" fill-opacity=\"1\" d=\"M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,120L1360,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z\"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Messages flash -->
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show rounded-4 shadow-sm mb-4\" role=\"alert\">
            <div class=\"d-flex align-items-center\">
                <i class=\"bi bi-check-circle-fill fs-4 me-3\"></i>
                <div>{{ message }}</div>
            </div>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}

    <!-- Contenu du profil -->
    <div class=\"row g-3 g-md-4\">
        <!-- Colonne de gauche - Photo et infos rapides -->
        <div class=\"col-12 col-lg-4\">
            <div class=\"card border-0 shadow-lg h-100\">
                <div class=\"card-body text-center p-3 p-md-4\">
                    <!-- Photo de profil -->
                    <div class=\"position-relative d-inline-block mb-4\">
                        {% if user.photo %}
                            <img src=\"{{ asset('uploads/users/' ~ user.photo) }}?{{ date().timestamp }}\" 
                                 alt=\"{{ user.fullName }}\" 
                                 class=\"rounded-circle shadow-lg profile-photo\"
                                 id=\"profilePhoto\"
                                 style=\"width: 180px; height: 180px; object-fit: cover; border: 5px solid #667eea;\">
                        {% else %}
                            <div class=\"avatar-circle bg-gradient-primary text-white shadow-lg mx-auto\"
                                 style=\"width: 180px; height: 180px; border: 5px solid #667eea;\">
                                <i class=\"bi bi-person-fill\" style=\"font-size: 5rem;\"></i>
                            </div>
                        {% endif %}
                        
                        <span class=\"position-absolute bottom-0 end-0\">
                            <span class=\"status-badge bg-{{ user.isActive ? 'success' : 'danger' }} rounded-circle p-2 border border-3 border-white shadow d-inline-block\"
                                  style=\"width: 30px; height: 30px;\"
                                  data-bs-toggle=\"tooltip\"
                                  title=\"{{ user.isActive ? 'Compte actif' : 'Compte inactif' }}\"></span>
                        </span>
                    </div>

                    <h3 class=\"mb-1\">{{ user.fullName }}</h3>
                    <p class=\"text-muted mb-3 text-break\">{{ user.email }}</p>

                    <!-- ✅ Bouton \"Appeler\" SUPPRIMÉ (l'utilisateur ne peut pas s'appeler lui-même) -->
                    <div class=\"d-grid gap-2\">
                        <a href=\"mailto:{{ user.email }}\" class=\"btn btn-outline-info btn-lg\">
                            <i class=\"bi bi-envelope-fill me-2\"></i>Envoyer un email
                        </a>
                    </div>

                    <hr class=\"my-4\">

                    <div class=\"text-start\">
                        <div class=\"d-flex align-items-center mb-3\">
                            <div class=\"icon-box bg-primary bg-opacity-10 rounded-3 p-2 me-3 flex-shrink-0\">
                                <i class=\"bi bi-telephone-fill text-primary\"></i>
                            </div>
                            <div class=\"min-w-0\">
                                <small class=\"text-muted d-block\">Téléphone</small>
                                <strong>{{ user.phone }}</strong>
                            </div>
                        </div>
                        <div class=\"d-flex align-items-center mb-3\">
                            <div class=\"icon-box bg-success bg-opacity-10 rounded-3 p-2 me-3 flex-shrink-0\">
                                <i class=\"bi bi-calendar-plus text-success\"></i>
                            </div>
                            <div class=\"min-w-0\">
                                <small class=\"text-muted d-block\">Date d'embauche</small>
                                <strong>{{ user.employmentDate ? user.employmentDate|date('d/m/Y') : 'Non renseignée' }}</strong>
                            </div>
                        </div>
                        <div class=\"d-flex align-items-center mb-3\">
                            <div class=\"icon-box bg-info bg-opacity-10 rounded-3 p-2 me-3 flex-shrink-0\">
                                <i class=\"bi bi-calendar-check text-info\"></i>
                            </div>
                            <div class=\"min-w-0\">
                                <small class=\"text-muted d-block\">Membre depuis</small>
                                <strong>{{ user.createdAt ? user.createdAt|date('d/m/Y') : 'N/A' }}</strong>
                            </div>
                        </div>
                        {% if user.updatedAt %}
                            <div class=\"d-flex align-items-center\">
                                <div class=\"icon-box bg-warning bg-opacity-10 rounded-3 p-2 me-3 flex-shrink-0\">
                                    <i class=\"bi bi-clock-history text-warning\"></i>
                                </div>
                                <div class=\"min-w-0\">
                                    <small class=\"text-muted d-block\">Dernière modification</small>
                                    <strong>{{ user.updatedAt|date('d/m/Y') }}</strong>
                                </div>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne de droite - Informations détaillées -->
        <div class=\"col-12 col-lg-8\">
            <div class=\"row g-3 g-md-4\">
                <!-- Informations personnelles -->
                <div class=\"col-12 col-md-6\">
                    <div class=\"card border-0 shadow-lg h-100\">
                        <div class=\"card-header bg-gradient-info text-white py-3\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"bi bi-person-badge me-2\"></i>Informations personnelles
                            </h5>
                        </div>
                        <div class=\"card-body p-3 p-md-4\">
                            <table class=\"table table-borderless profile-table mb-0\">
                                <tr>
                                    <td class=\"text-muted ps-0\">Nom complet</td>
                                    <td class=\"fw-semibold pe-0 text-end text-break\">{{ user.fullName }}</td>
                                </tr>
                                <tr>
                                    <td class=\"text-muted ps-0\">Email</td>
                                    <td class=\"fw-semibold pe-0 text-end text-break\">
                                        <a href=\"mailto:{{ user.email }}\" class=\"text-decoration-none\">
                                            {{ user.email }}
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"text-muted ps-0\">Téléphone</td>
                                    <td class=\"fw-semibold pe-0 text-end\">
                                        {{ user.phone }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"text-muted ps-0\">Entreprise</td>
                                    <td class=\"fw-semibold pe-0 text-end\">
                                        {% if user.hmaService %}
                                            <span class=\"badge bg-primary px-3 py-2\">
                                                <i class=\"bi bi-building me-1\"></i>
                                                {{ user.hmaService.companyName }}
                                            </span>
                                        {% else %}
                                            <span class=\"badge bg-secondary px-3 py-2\">
                                                <i class=\"bi bi-person me-1\"></i>
                                                Indépendant
                                            </span>
                                        {% endif %}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Informations système -->
                <div class=\"col-12 col-md-6\">
                    <div class=\"card border-0 shadow-lg h-100\">
                        <div class=\"card-header bg-gradient-secondary text-white py-3\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"bi bi-shield-lock me-2\"></i>Sécurité
                            </h5>
                        </div>
                        <div class=\"card-body p-3 p-md-4\">
                            <table class=\"table table-borderless profile-table mb-0\">
                                <tr>
                                    <td class=\"text-muted ps-0\">Rôle</td>
                                    <td class=\"fw-semibold pe-0 text-end\">
                                        <span class=\"role-badge {{ user.roleBadgeClass }} py-2 px-3 px-md-4\">
                                            <i class=\"bi {{ user.roleIcon }} me-2\"></i>
                                            {{ user.roleLabel }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"text-muted ps-0\">Statut</td>
                                    <td class=\"fw-semibold pe-0 text-end\">
                                        {% if user.isActive %}
                                            <span class=\"badge bg-success px-3 py-2\">
                                                <i class=\"bi bi-check-circle-fill me-1\"></i>Actif
                                            </span>
                                        {% else %}
                                            <span class=\"badge bg-danger px-3 py-2\">
                                                <i class=\"bi bi-x-circle-fill me-1\"></i>Inactif
                                            </span>
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"text-muted ps-0\">Mot de passe</td>
                                    <td class=\"fw-semibold pe-0 text-end\">
                                        {% if user.passwordChanged %}
                                            <span class=\"badge bg-success px-3 py-2\">
                                                <i class=\"bi bi-check-circle-fill me-1\"></i>Déjà modifié
                                            </span>
                                        {% else %}
                                            <span class=\"badge bg-warning text-dark px-3 py-2\">
                                                <i class=\"bi bi-exclamation-triangle-fill me-1\"></i>Première connexion
                                            </span>
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"text-muted ps-0\">Dernière connexion</td>
                                    <td class=\"fw-semibold pe-0 text-end\">
                                        <span class=\"badge bg-info px-3 py-2\">
                                            <i class=\"bi bi-clock me-1\"></i>{{ user.lastLoginAt|default('N/A') }}
                                        </span>
                                    </td>
                                </tr>
                            </table>
                            
                            <div class=\"d-grid mt-4\">
                                <a href=\"{{ path('app_change_password') }}\" class=\"btn btn-outline-warning btn-lg\">
                                    <i class=\"bi bi-key me-2\"></i>Changer mon mot de passe
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Statistiques d'activité -->
                <div class=\"col-12\">
                    <div class=\"card border-0 shadow-lg\">
                        <div class=\"card-header bg-gradient-warning text-white py-3\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"bi bi-bar-chart-steps me-2\"></i>Activité récente
                            </h5>
                        </div>
                        <div class=\"card-body p-3 p-md-4\">
                            <div class=\"row g-3 g-md-4\">
                                <div class=\"col-6 col-md-3\">
                                    <div class=\"stat-card text-center h-100\">
                                        <div class=\"stat-icon bg-primary bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block\">
                                            <i class=\"bi bi-box-seam text-primary fs-3\"></i>
                                        </div>
                                        <div class=\"stat-value h3 mb-1 fw-bold\">{{ user.products|length }}</div>
                                        <div class=\"stat-label text-muted small\">Produits créés</div>
                                    </div>
                                </div>
                                <div class=\"col-6 col-md-3\">
                                    <div class=\"stat-card text-center h-100\">
                                        <div class=\"stat-icon bg-success bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block\">
                                            <i class=\"bi bi-cart-check text-success fs-3\"></i>
                                        </div>
                                        <div class=\"stat-value h3 mb-1 fw-bold\">{{ user.orders|length }}</div>
                                        <div class=\"stat-label text-muted small\">Commandes</div>
                                    </div>
                                </div>
                                <div class=\"col-6 col-md-3\">
                                    <div class=\"stat-card text-center h-100\">
                                        <div class=\"stat-icon bg-info bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block\">
                                            <i class=\"bi bi-arrow-left-right text-info fs-3\"></i>
                                        </div>
                                        <div class=\"stat-value h3 mb-1 fw-bold\">{{ user.stockMovements|length }}</div>
                                        <div class=\"stat-label text-muted small\">Mouvements</div>
                                    </div>
                                </div>
                                <div class=\"col-6 col-md-3\">
                                    <div class=\"stat-card text-center h-100\">
                                        <div class=\"stat-icon bg-warning bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block\">
                                            <i class=\"bi bi-tags text-warning fs-3\"></i>
                                        </div>
                                        <div class=\"stat-value h3 mb-1 fw-bold\">{{ user.categories|length }}</div>
                                        <div class=\"stat-label text-muted small\">Catégories</div>
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

<style>
:root {
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --info-gradient: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
    --secondary-gradient: linear-gradient(135deg, #9ca3af 0%, #6b7280 100%);
    --warning-gradient: linear-gradient(135deg, #fbbf24 0%, #d97706 100%);
}

/* Header */
.profile-header {
    background: var(--primary-gradient);
    position: relative;
    min-height: 200px;
}

.floating-shapes {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 1;
}

.shape {
    position: absolute;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
}

.shape-1 {
    width: 250px;
    height: 250px;
    top: -120px;
    right: -50px;
    animation: float 8s ease-in-out infinite;
}

.shape-2 {
    width: 180px;
    height: 180px;
    bottom: -70px;
    left: -30px;
    animation: float 12s ease-in-out infinite reverse;
}

.shape-3 {
    width: 130px;
    height: 130px;
    top: 30%;
    left: 20%;
    animation: float 10s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(10deg); }
}

.icon-wrapper {
    transition: transform 0.3s ease;
}

.icon-wrapper:hover {
    transform: scale(1.05) rotate(5deg);
}

.wave-decoration {
    position: absolute;
    bottom: -1px;
    left: 0;
    right: 0;
    line-height: 0;
    z-index: 2;
}

.wave-decoration svg {
    width: 100%;
    height: 50px;
}

/* Avatar */
.avatar-circle {
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
}

.avatar-circle i {
    animation: pulse 3s infinite;
}

@keyframes pulse {
    0%, 100% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.1); opacity: 0.9; }
}

/* Badges de rôle */
.role-badge {
    display: inline-flex;
    align-items: center;
    padding: 8px 20px;
    border-radius: 30px;
    font-size: 0.95rem;
    font-weight: 600;
    color: white;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.2);
    letter-spacing: 0.3px;
    transition: all 0.3s ease;
}

.role-badge i {
    font-size: 1.1rem;
}

.role-badge:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
}

.role-badge.bg-gradient-primary { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
.role-badge.bg-gradient-info { background: linear-gradient(135deg, #4299e1 0%, #3182ce 100%); }
.role-badge.bg-gradient-warning { background: linear-gradient(135deg, #fbbf24 0%, #d97706 100%); }
.role-badge.bg-gradient-success { background: linear-gradient(135deg, #48bb78 0%, #38a169 100%); }
.role-badge.bg-gradient-danger { background: linear-gradient(135deg, #f56565 0%, #e53e3e 100%); }
.role-badge.bg-gradient-secondary { background: linear-gradient(135deg, #a0aec0 0%, #718096 100%); }

/* Icon box */
.icon-box {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Statistiques */
.stat-card {
    padding: 1.5rem 1rem;
    background: white;
    border-radius: 15px;
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05);
}

.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

.stat-icon {
    transition: all 0.3s ease;
}

.stat-card:hover .stat-icon {
    transform: scale(1.1);
}

/* Cards */
.card {
    border-radius: 15px;
    overflow: hidden;
    transition: all 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15) !important;
}

.bg-gradient-info {
    background: var(--info-gradient) !important;
}

.bg-gradient-secondary {
    background: var(--secondary-gradient) !important;
}

.bg-gradient-warning {
    background: var(--warning-gradient) !important;
}

/* Badge de statut */
.status-badge {
    animation: statusPulse 2s infinite;
}

@keyframes statusPulse {
    0% { box-shadow: 0 0 0 0 rgba(102, 126, 234, 0.7); }
    70% { box-shadow: 0 0 0 10px rgba(102, 126, 234, 0); }
    100% { box-shadow: 0 0 0 0 rgba(102, 126, 234, 0); }
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

.btn-outline-primary:hover {
    background: var(--primary-gradient);
    border-color: transparent;
    color: white;
}

.btn-outline-light:hover {
    background: rgba(255,255,255,0.2);
    border-color: white;
    color: white;
}

/* Table */
.table-borderless td {
    padding: 0.75rem 0;
    border: none;
}

/* Badges */
.badge {
    border-radius: 30px;
    font-weight: 500;
}

/* Alerts */
.alert {
    border-radius: 15px;
    border: none;
}

/* Utility */
.min-w-0 {
    min-width: 0;
}

/* ============================================
   RESPONSIVE MOBILE - AMÉLIORATIONS
   ============================================ */

/* Tablette */
@media (max-width: 991.98px) {
    .profile-header {
        min-height: auto;
    }
    
    .profile-header-content {
        padding-bottom: 3.5rem !important;
    }
    
    .wave-decoration svg {
        height: 40px;
    }
}

/* Mobile */
@media (max-width: 767.98px) {
    .container-fluid {
        padding-left: 0.75rem;
        padding-right: 0.75rem;
    }
    
    /* Header */
    .profile-header {
        border-radius: 1rem !important;
    }
    
    .profile-header-content {
        padding: 1.5rem 1rem 3rem !important;
    }
    
    .profile-header h1.display-6 {
        font-size: 1.75rem;
    }
    
    .icon-wrapper {
        padding: 0.75rem !important;
    }
    
    .icon-wrapper i {
        font-size: 2rem !important;
    }
    
    .wave-decoration svg {
        height: 30px;
    }
    
    /* Photo de profil */
    .profile-photo,
    .avatar-circle {
        width: 130px !important;
        height: 130px !important;
    }
    
    .avatar-circle i {
        font-size: 3.5rem !important;
    }
    
    /* Badge de statut */
    .status-badge {
        width: 24px !important;
        height: 24px !important;
    }
    
    /* Cards */
    .card-header h5 {
        font-size: 1rem;
    }
    
    .card-header {
        padding: 0.75rem 1rem;
    }
    
    /* Tableaux -> transformation en liste sur mobile */
    .profile-table tr {
        display: flex;
        flex-direction: column;
        padding: 0.75rem 0;
        border-bottom: 1px solid rgba(0,0,0,0.06);
    }
    
    .profile-table tr:last-child {
        border-bottom: none;
    }
    
    .profile-table td {
        display: block;
        width: 100%;
        text-align: left !important;
        padding: 0.15rem 0 !important;
    }
    
    .profile-table td.text-muted {
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
    }
    
    .profile-table td.fw-semibold {
        font-size: 0.95rem;
    }
    
    .profile-table td.text-end {
        text-align: left !important;
    }
    
    /* Badges dans les tableaux */
    .profile-table .badge,
    .profile-table .role-badge {
        display: inline-flex;
        margin-top: 0.25rem;
    }
    
    /* Role badge */
    .role-badge {
        padding: 6px 14px;
        font-size: 0.85rem;
    }
    
    /* Stats */
    .stat-card {
        padding: 1rem 0.5rem;
    }
    
    .stat-icon {
        padding: 0.5rem !important;
    }
    
    .stat-icon i {
        font-size: 1.25rem !important;
    }
    
    .stat-value {
        font-size: 1.25rem !important;
    }
    
    .stat-label {
        font-size: 0.7rem;
    }
    
    /* Boutons */
    .btn-lg {
        font-size: 0.9rem;
        padding: 0.6rem 1rem;
    }
    
    /* Email / téléphone wrap */
    .text-break {
        word-break: break-word;
    }
}

/* Très petits mobiles */
@media (max-width: 375.98px) {
    .profile-header h1.display-6 {
        font-size: 1.4rem;
    }
    
    .profile-photo,
    .avatar-circle {
        width: 110px !important;
        height: 110px !important;
    }
    
    .avatar-circle i {
        font-size: 3rem !important;
    }
    
    .stat-value {
        font-size: 1.1rem !important;
    }
    
    .stat-label {
        font-size: 0.65rem;
    }
    
    .btn-lg {
        font-size: 0.8rem;
        padding: 0.5rem 0.75rem;
    }
}
</style>

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialisation des tooltips Bootstrap
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // Auto-fermeture des alertes
    setTimeout(function() {
        document.querySelectorAll('.alert').forEach(function(alert) {
            var bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        });
    }, 5000);
});
</script>
{% endblock %}
{% endblock %}", "profile/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\profile\\show.html.twig");
    }
}
