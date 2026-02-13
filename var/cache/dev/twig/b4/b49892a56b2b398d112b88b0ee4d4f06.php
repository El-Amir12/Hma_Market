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

/* admin/user/show.html.twig */
class __TwigTemplate_ac208c094d6a08f1bbf9b7d19c154576 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/show.html.twig"));

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

        yield "Détails de l'utilisateur - ";
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
    <!-- Header avec boutons d'action -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"h3 mb-0 text-gray-800\">
                <i class=\"fas fa-user-circle me-2 text-primary\"></i>
                Détails de l'utilisateur
            </h1>
            <p class=\"text-muted\">Consultez les informations détaillées de l'utilisateur</p>
        </div>
        <div class=\"btn-group\">
            <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-outline-primary\">
                <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
            </a>
            <a href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                <i class=\"fas fa-edit me-2\"></i> Modifier
            </a>
            <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                <i class=\"fas fa-trash me-2\"></i> Supprimer
            </button>
        </div>
    </div>

    <!-- Modal de suppression -->
    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title text-danger\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation de suppression
                    </h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"alert alert-warning\">
                        <i class=\"fas fa-exclamation-circle me-2\"></i>
                        Cette action est irréversible !
                    </div>
                    <p>Êtes-vous sûr de vouloir supprimer l'utilisateur <strong>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "fullName", [], "any", false, false, false, 44), "html", null, true);
        yield "</strong> ?</p>
                    <p class=\"text-danger small\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Toutes les données associées à cet utilisateur seront également supprimées.
                    </p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                        <i class=\"fas fa-times me-1\"></i> Annuler
                    </button>
                    <form action=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54)]), "html", null, true);
        yield "\" method=\"post\" class=\"d-inline\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55))), "html", null, true);
        yield "\">
                        <button type=\"submit\" class=\"btn btn-danger\">
                            <i class=\"fas fa-trash me-1\"></i> Supprimer définitivement
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <!-- Carte de profil -->
        <div class=\"col-lg-4 mb-4\">
            <div class=\"card shadow border-0\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-id-card me-2\"></i> Profil
                    </h5>
                </div>
                <div class=\"card-body text-center p-4\">
                    <!-- Photo de profil -->
                    <div class=\"mb-4\">
                        ";
        // line 77
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "photo", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 78
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 78, $this->source); })()), "photo", [], "any", false, false, false, 78))), "html", null, true);
            yield "\" 
                                 alt=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 79, $this->source); })()), "fullName", [], "any", false, false, false, 79), "html", null, true);
            yield "\" 
                                 class=\"rounded-circle shadow-lg\"
                                 style=\"width: 180px; height: 180px; object-fit: cover; border: 5px solid #f8f9fa;\"
                                 onerror=\"this.onerror=null; this.src='";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/default-avatar.png"), "html", null, true);
            yield "'\">
                        ";
        } else {
            // line 84
            yield "                            <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto bg-gradient-primary text-white shadow-lg\"
                                 style=\"width: 180px; height: 180px; border: 5px solid #f8f9fa;\">
                                <div class=\"text-center\">
                                    <i class=\"fas fa-user fa-5x\"></i>
                                    <div class=\"mt-2 fw-bold\">";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 88, $this->source); })()), "fullName", [], "any", false, false, false, 88))), "html", null, true);
            yield "</div>
                                </div>
                            </div>
                        ";
        }
        // line 92
        yield "                    </div>
                    
                    <!-- Nom et rôle -->
                    <h4 class=\"card-title mb-2\">";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 95, $this->source); })()), "fullName", [], "any", false, false, false, 95), "html", null, true);
        yield "</h4>
                    
                    <div class=\"mb-3\">
                        ";
        // line 98
        if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 98, $this->source); })()), "roles", [], "any", false, false, false, 98))) {
            // line 99
            yield "                            <span class=\"badge bg-danger bg-gradient px-3 py-2\">
                                <i class=\"fas fa-crown me-1\"></i> Administrateur
                            </span>
                        ";
        } elseif (CoreExtension::inFilter("ROLE_MANAGER", CoreExtension::getAttribute($this->env, $this->source,         // line 102
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 102, $this->source); })()), "roles", [], "any", false, false, false, 102))) {
            // line 103
            yield "                            <span class=\"badge bg-primary bg-gradient px-3 py-2\">
                                <i class=\"fas fa-chart-line me-1\"></i> Gestionnaire
                            </span>
                        ";
        } elseif (CoreExtension::inFilter("ROLE_STOCK_MANAGER", CoreExtension::getAttribute($this->env, $this->source,         // line 106
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 106, $this->source); })()), "roles", [], "any", false, false, false, 106))) {
            // line 107
            yield "                            <span class=\"badge bg-warning bg-gradient px-3 py-2 text-dark\">
                                <i class=\"fas fa-warehouse me-1\"></i> Responsable Stock
                            </span>
                        ";
        } elseif (CoreExtension::inFilter("ROLE_CASHIER", CoreExtension::getAttribute($this->env, $this->source,         // line 110
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 110, $this->source); })()), "roles", [], "any", false, false, false, 110))) {
            // line 111
            yield "                            <span class=\"badge bg-success bg-gradient px-3 py-2\">
                                <i class=\"fas fa-cash-register me-1\"></i> Caissier
                            </span>
                        ";
        } else {
            // line 115
            yield "                            <span class=\"badge bg-secondary bg-gradient px-3 py-2\">
                                <i class=\"fas fa-user me-1\"></i> Utilisateur
                            </span>
                        ";
        }
        // line 119
        yield "                    </div>
                    
                    <!-- Statut -->
                    <div class=\"mb-4\">
                        ";
        // line 123
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 123, $this->source); })()), "isActive", [], "any", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 124
            yield "                            <span class=\"badge bg-success px-3 py-2\">
                                <i class=\"fas fa-check-circle me-1\"></i> Actif
                            </span>
                        ";
        } else {
            // line 128
            yield "                            <span class=\"badge bg-danger px-3 py-2\">
                                <i class=\"fas fa-times-circle me-1\"></i> Inactif
                            </span>
                        ";
        }
        // line 132
        yield "                    </div>
                    
                    <!-- Boutons d'action rapides -->
                    <div class=\"d-grid gap-2\">
                        <a href=\"mailto:";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 136, $this->source); })()), "email", [], "any", false, false, false, 136), "html", null, true);
        yield "\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-envelope me-2\"></i> Envoyer un email
                        </a>
                        <a href=\"tel:";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 139, $this->source); })()), "phone", [], "any", false, false, false, 139), "html", null, true);
        yield "\" class=\"btn btn-outline-success\">
                            <i class=\"fas fa-phone me-2\"></i> Appeler
                        </a>
                    </div>
                </div>
                <div class=\"card-footer bg-light text-center\">
                    <small class=\"text-muted\">
                        <i class=\"fas fa-user-plus me-1\"></i>
                        Membre depuis ";
        // line 147
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 147, $this->source); })()), "createdAt", [], "any", false, false, false, 147)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 147, $this->source); })()), "createdAt", [], "any", false, false, false, 147), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield "
                    </small>
                </div>
            </div>
        </div>

        <!-- Carte des informations détaillées -->
        <div class=\"col-lg-8\">
            <div class=\"card shadow border-0\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-info-circle me-2\"></i> Informations détaillées
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <!-- Informations personnelles -->
                        <div class=\"col-md-6\">
                            <div class=\"card border-0 bg-light mb-4\">
                                <div class=\"card-body\">
                                    <h6 class=\"card-title text-primary mb-3\">
                                        <i class=\"fas fa-user me-2\"></i> Informations personnelles
                                    </h6>
                                    <table class=\"table table-borderless\">
                                        <tr>
                                            <td class=\"text-muted\" width=\"40%\">Nom complet</td>
                                            <td class=\"fw-semibold\">";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 173, $this->source); })()), "fullName", [], "any", false, false, false, 173), "html", null, true);
        yield "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-muted\">Email</td>
                                            <td>
                                                <a href=\"mailto:";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 178, $this->source); })()), "email", [], "any", false, false, false, 178), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                                                    ";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 179, $this->source); })()), "email", [], "any", false, false, false, 179), "html", null, true);
        yield "
                                                    <i class=\"fas fa-external-link-alt ms-1 small\"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-muted\">Téléphone</td>
                                            <td>
                                                <a href=\"tel:";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 187, $this->source); })()), "phone", [], "any", false, false, false, 187), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                                                    ";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 188, $this->source); })()), "phone", [], "any", false, false, false, 188), "html", null, true);
        yield "
                                                    <i class=\"fas fa-external-link-alt ms-1 small\"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Informations système -->
                        <div class=\"col-md-6\">
                            <div class=\"card border-0 bg-light mb-4\">
                                <div class=\"card-body\">
                                    <h6 class=\"card-title text-primary mb-3\">
                                        <i class=\"fas fa-cog me-2\"></i> Informations système
                                    </h6>
                                    <table class=\"table table-borderless\">
                                        <tr>
                                            <td class=\"text-muted\" width=\"40%\">ID Utilisateur</td>
                                            <td class=\"fw-semibold\">#";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 208, $this->source); })()), "id", [], "any", false, false, false, 208), "html", null, true);
        yield "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-muted\">Statut</td>
                                            <td>
                                                ";
        // line 213
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 213, $this->source); })()), "isActive", [], "any", false, false, false, 213)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 214
            yield "                                                    <span class=\"badge bg-success\">
                                                        <i class=\"fas fa-check-circle me-1\"></i> Actif
                                                    </span>
                                                ";
        } else {
            // line 218
            yield "                                                    <span class=\"badge bg-danger\">
                                                        <i class=\"fas fa-times-circle me-1\"></i> Inactif
                                                    </span>
                                                ";
        }
        // line 222
        yield "                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-muted\">Rôles</td>
                                            <td>
                                                <div class=\"d-flex flex-wrap gap-1\">
                                                    ";
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 228, $this->source); })()), "roles", [], "any", false, false, false, 228));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 229
            yield "                                                        ";
            if (($context["role"] != "ROLE_USER")) {
                // line 230
                yield "                                                            <span class=\"badge bg-info\">
                                                                ";
                // line 231
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["role"], ["ROLE_" => ""]))), "html", null, true);
                yield "
                                                            </span>
                                                        ";
            }
            // line 234
            yield "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        yield "                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Dates -->
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"card border-0 bg-light\">
                                <div class=\"card-body\">
                                    <h6 class=\"card-title text-primary mb-3\">
                                        <i class=\"fas fa-calendar-alt me-2\"></i> Dates importantes
                                    </h6>
                                    <table class=\"table table-borderless\">
                                        <tr>
                                            <td class=\"text-muted\" width=\"40%\">Date de création</td>
                                            <td>
                                                <i class=\"far fa-calendar-plus me-2 text-success\"></i>
                                                ";
        // line 257
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 257, $this->source); })()), "createdAt", [], "any", false, false, false, 257)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 257, $this->source); })()), "createdAt", [], "any", false, false, false, 257), "d/m/Y à H:i"), "html", null, true)) : ("N/A"));
        yield "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-muted\">Dernière modification</td>
                                            <td>
                                                <i class=\"far fa-edit me-2 text-warning\"></i>
                                                ";
        // line 264
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 264, $this->source); })()), "updatedAt", [], "any", false, false, false, 264)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 264, $this->source); })()), "updatedAt", [], "any", false, false, false, 264), "d/m/Y à H:i"), "html", null, true)) : ("N/A"));
        yield "
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Statistiques (optionnel) -->
                        <div class=\"col-md-6\">
                            <div class=\"card border-0 bg-light\">
                                <div class=\"card-body\">
                                    <h6 class=\"card-title text-primary mb-3\">
                                        <i class=\"fas fa-chart-bar me-2\"></i> Statistiques
                                    </h6>
                                    <table class=\"table table-borderless\">
                                        <tr>
                                            <td class=\"text-muted\" width=\"40%\">Produits créés</td>
                                            <td>
                                                <span class=\"badge bg-primary\">
                                                    ";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 284, $this->source); })()), "products", [], "any", false, false, false, 284)), "html", null, true);
        yield " produit(s)
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-muted\">Commandes</td>
                                            <td>
                                                <span class=\"badge bg-success\">
                                                    ";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 292, $this->source); })()), "orders", [], "any", false, false, false, 292)), "html", null, true);
        yield " commande(s)
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-muted\">Mouvements stock</td>
                                            <td>
                                                <span class=\"badge bg-warning text-dark\">
                                                    ";
        // line 300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 300, $this->source); })()), "stockMovements", [], "any", false, false, false, 300)), "html", null, true);
        yield " mouvement(s)
                                                </span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Boutons d'action en bas -->
                <div class=\"card-footer bg-light\">
                    <div class=\"d-flex justify-content-between\">
                        <a href=\"";
        // line 314
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
                        </a>
                        <div class=\"btn-group\">
                            <a href=\"";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 318, $this->source); })()), "id", [], "any", false, false, false, 318)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                                <i class=\"fas fa-edit me-2\"></i> Modifier
                            </a>
                            <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                                <i class=\"fas fa-trash me-2\"></i> Supprimer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.card {
    border-radius: 12px;
    overflow: hidden;
    transition: transform 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
}

.bg-gradient-primary {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
}

.badge {
    border-radius: 20px;
    font-weight: 500;
    letter-spacing: 0.3px;
}

.table-borderless td {
    padding: 12px 8px;
    border-bottom: 1px solid rgba(0,0,0,0.05);
}

.btn-outline-primary:hover, .btn-outline-success:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
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
        return "admin/user/show.html.twig";
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
        return array (  543 => 318,  536 => 314,  519 => 300,  508 => 292,  497 => 284,  474 => 264,  464 => 257,  440 => 235,  434 => 234,  428 => 231,  425 => 230,  422 => 229,  418 => 228,  410 => 222,  404 => 218,  398 => 214,  396 => 213,  388 => 208,  365 => 188,  361 => 187,  350 => 179,  346 => 178,  338 => 173,  309 => 147,  298 => 139,  292 => 136,  286 => 132,  280 => 128,  274 => 124,  272 => 123,  266 => 119,  260 => 115,  254 => 111,  252 => 110,  247 => 107,  245 => 106,  240 => 103,  238 => 102,  233 => 99,  231 => 98,  225 => 95,  220 => 92,  213 => 88,  207 => 84,  202 => 82,  196 => 79,  191 => 78,  189 => 77,  164 => 55,  160 => 54,  147 => 44,  120 => 20,  114 => 17,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de l'utilisateur - {{ user.fullName }}{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- Header avec boutons d'action -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"h3 mb-0 text-gray-800\">
                <i class=\"fas fa-user-circle me-2 text-primary\"></i>
                Détails de l'utilisateur
            </h1>
            <p class=\"text-muted\">Consultez les informations détaillées de l'utilisateur</p>
        </div>
        <div class=\"btn-group\">
            <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-outline-primary\">
                <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
            </a>
            <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" class=\"btn btn-warning\">
                <i class=\"fas fa-edit me-2\"></i> Modifier
            </a>
            <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                <i class=\"fas fa-trash me-2\"></i> Supprimer
            </button>
        </div>
    </div>

    <!-- Modal de suppression -->
    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title text-danger\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation de suppression
                    </h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"alert alert-warning\">
                        <i class=\"fas fa-exclamation-circle me-2\"></i>
                        Cette action est irréversible !
                    </div>
                    <p>Êtes-vous sûr de vouloir supprimer l'utilisateur <strong>{{ user.fullName }}</strong> ?</p>
                    <p class=\"text-danger small\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Toutes les données associées à cet utilisateur seront également supprimées.
                    </p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                        <i class=\"fas fa-times me-1\"></i> Annuler
                    </button>
                    <form action=\"{{ path('app_user_delete', {'id': user.id}) }}\" method=\"post\" class=\"d-inline\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
                        <button type=\"submit\" class=\"btn btn-danger\">
                            <i class=\"fas fa-trash me-1\"></i> Supprimer définitivement
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <!-- Carte de profil -->
        <div class=\"col-lg-4 mb-4\">
            <div class=\"card shadow border-0\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-id-card me-2\"></i> Profil
                    </h5>
                </div>
                <div class=\"card-body text-center p-4\">
                    <!-- Photo de profil -->
                    <div class=\"mb-4\">
                        {% if user.photo %}
                            <img src=\"{{ asset('uploads/users/' ~ user.photo) }}\" 
                                 alt=\"{{ user.fullName }}\" 
                                 class=\"rounded-circle shadow-lg\"
                                 style=\"width: 180px; height: 180px; object-fit: cover; border: 5px solid #f8f9fa;\"
                                 onerror=\"this.onerror=null; this.src='{{ asset('assets/images/default-avatar.png') }}'\">
                        {% else %}
                            <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto bg-gradient-primary text-white shadow-lg\"
                                 style=\"width: 180px; height: 180px; border: 5px solid #f8f9fa;\">
                                <div class=\"text-center\">
                                    <i class=\"fas fa-user fa-5x\"></i>
                                    <div class=\"mt-2 fw-bold\">{{ user.fullName|first|upper }}</div>
                                </div>
                            </div>
                        {% endif %}
                    </div>
                    
                    <!-- Nom et rôle -->
                    <h4 class=\"card-title mb-2\">{{ user.fullName }}</h4>
                    
                    <div class=\"mb-3\">
                        {% if 'ROLE_ADMIN' in user.roles %}
                            <span class=\"badge bg-danger bg-gradient px-3 py-2\">
                                <i class=\"fas fa-crown me-1\"></i> Administrateur
                            </span>
                        {% elseif 'ROLE_MANAGER' in user.roles %}
                            <span class=\"badge bg-primary bg-gradient px-3 py-2\">
                                <i class=\"fas fa-chart-line me-1\"></i> Gestionnaire
                            </span>
                        {% elseif 'ROLE_STOCK_MANAGER' in user.roles %}
                            <span class=\"badge bg-warning bg-gradient px-3 py-2 text-dark\">
                                <i class=\"fas fa-warehouse me-1\"></i> Responsable Stock
                            </span>
                        {% elseif 'ROLE_CASHIER' in user.roles %}
                            <span class=\"badge bg-success bg-gradient px-3 py-2\">
                                <i class=\"fas fa-cash-register me-1\"></i> Caissier
                            </span>
                        {% else %}
                            <span class=\"badge bg-secondary bg-gradient px-3 py-2\">
                                <i class=\"fas fa-user me-1\"></i> Utilisateur
                            </span>
                        {% endif %}
                    </div>
                    
                    <!-- Statut -->
                    <div class=\"mb-4\">
                        {% if user.isActive %}
                            <span class=\"badge bg-success px-3 py-2\">
                                <i class=\"fas fa-check-circle me-1\"></i> Actif
                            </span>
                        {% else %}
                            <span class=\"badge bg-danger px-3 py-2\">
                                <i class=\"fas fa-times-circle me-1\"></i> Inactif
                            </span>
                        {% endif %}
                    </div>
                    
                    <!-- Boutons d'action rapides -->
                    <div class=\"d-grid gap-2\">
                        <a href=\"mailto:{{ user.email }}\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-envelope me-2\"></i> Envoyer un email
                        </a>
                        <a href=\"tel:{{ user.phone }}\" class=\"btn btn-outline-success\">
                            <i class=\"fas fa-phone me-2\"></i> Appeler
                        </a>
                    </div>
                </div>
                <div class=\"card-footer bg-light text-center\">
                    <small class=\"text-muted\">
                        <i class=\"fas fa-user-plus me-1\"></i>
                        Membre depuis {{ user.createdAt ? user.createdAt|date('d/m/Y') : 'N/A' }}
                    </small>
                </div>
            </div>
        </div>

        <!-- Carte des informations détaillées -->
        <div class=\"col-lg-8\">
            <div class=\"card shadow border-0\">
                <div class=\"card-header bg-gradient-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-info-circle me-2\"></i> Informations détaillées
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <!-- Informations personnelles -->
                        <div class=\"col-md-6\">
                            <div class=\"card border-0 bg-light mb-4\">
                                <div class=\"card-body\">
                                    <h6 class=\"card-title text-primary mb-3\">
                                        <i class=\"fas fa-user me-2\"></i> Informations personnelles
                                    </h6>
                                    <table class=\"table table-borderless\">
                                        <tr>
                                            <td class=\"text-muted\" width=\"40%\">Nom complet</td>
                                            <td class=\"fw-semibold\">{{ user.fullName }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-muted\">Email</td>
                                            <td>
                                                <a href=\"mailto:{{ user.email }}\" class=\"text-decoration-none\">
                                                    {{ user.email }}
                                                    <i class=\"fas fa-external-link-alt ms-1 small\"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-muted\">Téléphone</td>
                                            <td>
                                                <a href=\"tel:{{ user.phone }}\" class=\"text-decoration-none\">
                                                    {{ user.phone }}
                                                    <i class=\"fas fa-external-link-alt ms-1 small\"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Informations système -->
                        <div class=\"col-md-6\">
                            <div class=\"card border-0 bg-light mb-4\">
                                <div class=\"card-body\">
                                    <h6 class=\"card-title text-primary mb-3\">
                                        <i class=\"fas fa-cog me-2\"></i> Informations système
                                    </h6>
                                    <table class=\"table table-borderless\">
                                        <tr>
                                            <td class=\"text-muted\" width=\"40%\">ID Utilisateur</td>
                                            <td class=\"fw-semibold\">#{{ user.id }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-muted\">Statut</td>
                                            <td>
                                                {% if user.isActive %}
                                                    <span class=\"badge bg-success\">
                                                        <i class=\"fas fa-check-circle me-1\"></i> Actif
                                                    </span>
                                                {% else %}
                                                    <span class=\"badge bg-danger\">
                                                        <i class=\"fas fa-times-circle me-1\"></i> Inactif
                                                    </span>
                                                {% endif %}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-muted\">Rôles</td>
                                            <td>
                                                <div class=\"d-flex flex-wrap gap-1\">
                                                    {% for role in user.roles %}
                                                        {% if role != 'ROLE_USER' %}
                                                            <span class=\"badge bg-info\">
                                                                {{ role|replace({'ROLE_': ''})|lower|title }}
                                                            </span>
                                                        {% endif %}
                                                    {% endfor %}
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Dates -->
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"card border-0 bg-light\">
                                <div class=\"card-body\">
                                    <h6 class=\"card-title text-primary mb-3\">
                                        <i class=\"fas fa-calendar-alt me-2\"></i> Dates importantes
                                    </h6>
                                    <table class=\"table table-borderless\">
                                        <tr>
                                            <td class=\"text-muted\" width=\"40%\">Date de création</td>
                                            <td>
                                                <i class=\"far fa-calendar-plus me-2 text-success\"></i>
                                                {{ user.createdAt ? user.createdAt|date('d/m/Y à H:i') : 'N/A' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-muted\">Dernière modification</td>
                                            <td>
                                                <i class=\"far fa-edit me-2 text-warning\"></i>
                                                {{ user.updatedAt ? user.updatedAt|date('d/m/Y à H:i') : 'N/A' }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Statistiques (optionnel) -->
                        <div class=\"col-md-6\">
                            <div class=\"card border-0 bg-light\">
                                <div class=\"card-body\">
                                    <h6 class=\"card-title text-primary mb-3\">
                                        <i class=\"fas fa-chart-bar me-2\"></i> Statistiques
                                    </h6>
                                    <table class=\"table table-borderless\">
                                        <tr>
                                            <td class=\"text-muted\" width=\"40%\">Produits créés</td>
                                            <td>
                                                <span class=\"badge bg-primary\">
                                                    {{ user.products|length }} produit(s)
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-muted\">Commandes</td>
                                            <td>
                                                <span class=\"badge bg-success\">
                                                    {{ user.orders|length }} commande(s)
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-muted\">Mouvements stock</td>
                                            <td>
                                                <span class=\"badge bg-warning text-dark\">
                                                    {{ user.stockMovements|length }} mouvement(s)
                                                </span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Boutons d'action en bas -->
                <div class=\"card-footer bg-light\">
                    <div class=\"d-flex justify-content-between\">
                        <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
                        </a>
                        <div class=\"btn-group\">
                            <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" class=\"btn btn-warning\">
                                <i class=\"fas fa-edit me-2\"></i> Modifier
                            </a>
                            <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                                <i class=\"fas fa-trash me-2\"></i> Supprimer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.card {
    border-radius: 12px;
    overflow: hidden;
    transition: transform 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
}

.bg-gradient-primary {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
}

.badge {
    border-radius: 20px;
    font-weight: 500;
    letter-spacing: 0.3px;
}

.table-borderless td {
    padding: 12px 8px;
    border-bottom: 1px solid rgba(0,0,0,0.05);
}

.btn-outline-primary:hover, .btn-outline-success:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}
</style>
{% endblock %}", "admin/user/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\user\\show.html.twig");
    }
}
