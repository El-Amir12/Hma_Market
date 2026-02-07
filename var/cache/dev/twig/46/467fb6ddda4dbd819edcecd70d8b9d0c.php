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

/* admin/user/index.html.twig */
class __TwigTemplate_ca338d75a924b60b8902491d9747ba7e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/index.html.twig"));

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

        yield "Gestion des utilisateurs";
        
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
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"h3 mb-0 text-gray-800\">Gestion des utilisateurs</h1>
            <p class=\"text-muted\">Gérez les utilisateurs de votre application</p>
        </div>
        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\" class=\"btn btn-primary\">
            <i class=\"fas fa-plus-circle me-2\"></i> Nouvel utilisateur
        </a>
    </div>

    <!-- Alertes flash -->
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", ["success"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "    
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", ["error"], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 26
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "
    <!-- Modal pour la suppression -->
    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Confirmation de suppression</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body\">
                    <p id=\"deleteMessage\"></p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <form id=\"deleteForm\" method=\"post\">
                        <input type=\"hidden\" name=\"_token\" id=\"deleteCsrfToken\">
                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Carte principale -->
    <div class=\"card shadow\">
        <div class=\"card-body\">
            <!-- Statistiques -->
            ";
        // line 58
        $context["activeUsers"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 58, $this->source); })()), function ($__u__) use ($context, $macros) { $context["u"] = $__u__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["u"]) || array_key_exists("u", $context) ? $context["u"] : (function () { throw new RuntimeError('Variable "u" does not exist.', 58, $this->source); })()), "isActive", [], "any", false, false, false, 58); }));
        // line 59
        yield "            ";
        $context["inactiveUsers"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 59, $this->source); })()), function ($__u__) use ($context, $macros) { $context["u"] = $__u__; return  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["u"]) || array_key_exists("u", $context) ? $context["u"] : (function () { throw new RuntimeError('Variable "u" does not exist.', 59, $this->source); })()), "isActive", [], "any", false, false, false, 59); }));
        // line 60
        yield "            ";
        $context["adminUsers"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 60, $this->source); })()), function ($__u__) use ($context, $macros) { $context["u"] = $__u__; return CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, (isset($context["u"]) || array_key_exists("u", $context) ? $context["u"] : (function () { throw new RuntimeError('Variable "u" does not exist.', 60, $this->source); })()), "roles", [], "any", false, false, false, 60)); }));
        // line 61
        yield "            
            <div class=\"row mb-4\">
                <div class=\"col-md-3 col-6 mb-3\">
                    <div class=\"card border-0 bg-light stat-card\">
                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title mb-1\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 66, $this->source); })()), "html", null, true);
        yield "</h5>
                            <p class=\"card-text text-muted small\">Utilisateurs totaux</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-6 mb-3\">
                    <div class=\"card border-0 bg-light stat-card\">
                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title mb-1 text-success\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeUsers"]) || array_key_exists("activeUsers", $context) ? $context["activeUsers"] : (function () { throw new RuntimeError('Variable "activeUsers" does not exist.', 74, $this->source); })()), "html", null, true);
        yield "</h5>
                            <p class=\"card-text text-muted small\">Utilisateurs actifs</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-6 mb-3\">
                    <div class=\"card border-0 bg-light stat-card\">
                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title mb-1 text-danger\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactiveUsers"]) || array_key_exists("inactiveUsers", $context) ? $context["inactiveUsers"] : (function () { throw new RuntimeError('Variable "inactiveUsers" does not exist.', 82, $this->source); })()), "html", null, true);
        yield "</h5>
                            <p class=\"card-text text-muted small\">Utilisateurs inactifs</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-6 mb-3\">
                    <div class=\"card border-0 bg-light stat-card\">
                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title mb-1 text-primary\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["adminUsers"]) || array_key_exists("adminUsers", $context) ? $context["adminUsers"] : (function () { throw new RuntimeError('Variable "adminUsers" does not exist.', 90, $this->source); })()), "html", null, true);
        yield "</h5>
                            <p class=\"card-text text-muted small\">Administrateurs</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle\">
                    <thead class=\"table-light\">
                        <tr>
                            <th width=\"60\">Photo</th>
                            <th>Nom complet</th>
                            <th>Email</th>
                            <th>Rôle</th>
                            <th width=\"120\">Statut</th>
                            <th width=\"100\">Date</th>
                            <th class=\"text-end\" width=\"160\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 111, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 112
            yield "                        <tr>
                            <td>
                                ";
            // line 114
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 115
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 115))), "html", null, true);
                yield "\" 
                                         alt=\"";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 116), "html", null, true);
                yield "\" 
                                         class=\"rounded-circle\"
                                         style=\"width: 40px; height: 40px; object-fit: cover;\"
                                         onerror=\"this.onerror=null; this.style.display='none'; this.parentElement.innerHTML='<div class=\\'rounded-circle d-flex align-items-center justify-content-center bg-light\\' style=\\'width: 40px; height: 40px;\\'><i class=\\'fas fa-user text-muted\\'></i></div>';\">
                                ";
            } else {
                // line 121
                yield "                                    <div class=\"rounded-circle d-flex align-items-center justify-content-center bg-light\"
                                         style=\"width: 40px; height: 40px;\">
                                        <i class=\"fas fa-user text-muted\"></i>
                                    </div>
                                ";
            }
            // line 126
            yield "                            </td>
                            <td>
                                <strong>";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 128), "html", null, true);
            yield "</strong>
                                <div class=\"text-muted small\">";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 129), "html", null, true);
            yield "</div>
                            </td>
                            <td>";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 131), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 133
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 133))) {
                // line 134
                yield "                                    <span class=\"badge bg-danger\">
                                        <i class=\"fas fa-crown me-1\"></i> Admin
                                    </span>
                                ";
            } elseif (CoreExtension::inFilter("ROLE_MANAGER", CoreExtension::getAttribute($this->env, $this->source,             // line 137
$context["user"], "roles", [], "any", false, false, false, 137))) {
                // line 138
                yield "                                    <span class=\"badge bg-primary\">
                                        <i class=\"fas fa-chart-line me-1\"></i> Gestionnaire
                                    </span>
                                ";
            } elseif (CoreExtension::inFilter("ROLE_STOCK_MANAGER", CoreExtension::getAttribute($this->env, $this->source,             // line 141
$context["user"], "roles", [], "any", false, false, false, 141))) {
                // line 142
                yield "                                    <span class=\"badge bg-warning text-dark\">
                                        <i class=\"fas fa-warehouse me-1\"></i> Stock
                                    </span>
                                ";
            } elseif (CoreExtension::inFilter("ROLE_CASHIER", CoreExtension::getAttribute($this->env, $this->source,             // line 145
$context["user"], "roles", [], "any", false, false, false, 145))) {
                // line 146
                yield "                                    <span class=\"badge bg-success\">
                                        <i class=\"fas fa-cash-register me-1\"></i> Caissier
                                    </span>
                                ";
            } else {
                // line 150
                yield "                                    <span class=\"badge bg-secondary\">
                                        <i class=\"fas fa-user me-1\"></i> Utilisateur
                                    </span>
                                ";
            }
            // line 154
            yield "                            </td>
                            <td>
                                <form action=\"";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_toggle_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 156)]), "html", null, true);
            yield "\" 
                                      method=\"post\" 
                                      class=\"d-inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 159))), "html", null, true);
            yield "\">
                                    ";
            // line 160
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 161
                yield "                                        <button type=\"submit\" 
                                                class=\"btn btn-success btn-sm rounded-pill w-100\" 
                                                title=\"Cliquez pour désactiver\">
                                            <i class=\"fas fa-toggle-on me-1\"></i> Actif
                                        </button>
                                    ";
            } else {
                // line 167
                yield "                                        <button type=\"submit\" 
                                                class=\"btn btn-danger btn-sm rounded-pill w-100\" 
                                                title=\"Cliquez pour activer\">
                                            <i class=\"fas fa-toggle-off me-1\"></i> Inactif
                                        </button>
                                    ";
            }
            // line 173
            yield "                                </form>
                            </td>
                            <td>
                                <small class=\"text-muted\">
                                    ";
            // line 177
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 177)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 177), "d/m/Y"), "html", null, true)) : (""));
            yield "
                                </small>
                            </td>
                            <td>
                                <div class=\"btn-group\" role=\"group\">
                                    <a href=\"";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 182)]), "html", null, true);
            yield "\" 
                                       class=\"btn btn-info btn-sm\" 
                                       title=\"Voir détails\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                    <a href=\"";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 187)]), "html", null, true);
            yield "\" 
                                       class=\"btn btn-warning btn-sm\" 
                                       title=\"Modifier\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    ";
            // line 192
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 192) != "admin@hma.com")) {
                // line 193
                yield "                                    <button type=\"button\" 
                                            class=\"btn btn-danger btn-sm delete-btn\" 
                                            data-user-id=\"";
                // line 195
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 195), "html", null, true);
                yield "\"
                                            data-user-name=\"";
                // line 196
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 196), "html", null, true);
                yield "\"
                                            data-csrf-token=\"";
                // line 197
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 197))), "html", null, true);
                yield "\"
                                            title=\"Supprimer\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                    ";
            } else {
                // line 202
                yield "                                    <button type=\"button\" 
                                            class=\"btn btn-danger btn-sm\" 
                                            title=\"Administrateur principal - Non supprimable\"
                                            disabled>
                                        <i class=\"fas fa-shield-alt\"></i>
                                    </button>
                                    ";
            }
            // line 209
            yield "                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 212
        if (!$context['_iterated']) {
            // line 213
            yield "                        <tr>
                            <td colspan=\"7\" class=\"text-center py-4\">
                                <div class=\"text-muted\">
                                    <i class=\"fas fa-users fa-2x mb-3\"></i>
                                    <p class=\"mb-0\">Aucun utilisateur trouvé</p>
                                    ";
            // line 218
            if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 218, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 219
                yield "                                        <p class=\"small\">Aucun résultat pour \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 219, $this->source); })()), "html", null, true);
                yield "\"</p>
                                        <a href=\"";
                // line 220
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
                yield "\" class=\"btn btn-outline-primary mt-2\">
                                            <i class=\"fas fa-times me-1\"></i> Effacer la recherche
                                        </a>
                                    ";
            } else {
                // line 224
                yield "                                        <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
                yield "\" class=\"btn btn-primary mt-2\">
                                            <i class=\"fas fa-plus me-1\"></i> Créer un utilisateur
                                        </a>
                                    ";
            }
            // line 228
            yield "                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        yield "                    </tbody>
                </table>
            </div>

            <!-- Pagination améliorée -->
            ";
        // line 237
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 237, $this->source); })()) > 1)) {
            // line 238
            yield "            <nav aria-label=\"Pagination\" class=\"mt-4\">
                <ul class=\"pagination justify-content-center\">
                    <!-- Premier & Précédent -->
                    ";
            // line 241
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 241, $this->source); })()) > 1)) {
                // line 242
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 243
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 243, $this->source); })()), "request", [], "any", false, false, false, 243), "query", [], "any", false, false, false, 243), "all", [], "any", false, false, false, 243), ["page" => 1])), "html", null, true);
                yield "\">
                                <i class=\"fas fa-angle-double-left\"></i>
                            </a>
                        </li>
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 248
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 248, $this->source); })()), "request", [], "any", false, false, false, 248), "query", [], "any", false, false, false, 248), "all", [], "any", false, false, false, 248), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 248, $this->source); })()) - 1)])), "html", null, true);
                yield "\">
                                <i class=\"fas fa-chevron-left\"></i>
                            </a>
                        </li>
                    ";
            } else {
                // line 253
                yield "                        <li class=\"page-item disabled\">
                            <span class=\"page-link\"><i class=\"fas fa-angle-double-left\"></i></span>
                        </li>
                        <li class=\"page-item disabled\">
                            <span class=\"page-link\"><i class=\"fas fa-chevron-left\"></i></span>
                        </li>
                    ";
            }
            // line 260
            yield "
                    <!-- Pages numérotées -->
                    ";
            // line 262
            $context["startPage"] = max(1, ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 262, $this->source); })()) - 2));
            // line 263
            yield "                    ";
            $context["endPage"] = min((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 263, $this->source); })()), ((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 263, $this->source); })()) + 4));
            // line 264
            yield "                    
                    ";
            // line 265
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 265, $this->source); })()) > 1)) {
                // line 266
                yield "                        <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                    ";
            }
            // line 268
            yield "                    
                    ";
            // line 269
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 269, $this->source); })()), (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 269, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 270
                yield "                        <li class=\"page-item ";
                if (($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 270, $this->source); })()))) {
                    yield "active";
                }
                yield "\">
                            <a class=\"page-link\" href=\"";
                // line 271
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 271, $this->source); })()), "request", [], "any", false, false, false, 271), "query", [], "any", false, false, false, 271), "all", [], "any", false, false, false, 271), ["page" => $context["page"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 274
            yield "                    
                    ";
            // line 275
            if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 275, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 275, $this->source); })()))) {
                // line 276
                yield "                        <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                    ";
            }
            // line 278
            yield "
                    <!-- Suivant & Dernier -->
                    ";
            // line 280
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 280, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 280, $this->source); })()))) {
                // line 281
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 282
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 282, $this->source); })()), "request", [], "any", false, false, false, 282), "query", [], "any", false, false, false, 282), "all", [], "any", false, false, false, 282), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 282, $this->source); })()) + 1)])), "html", null, true);
                yield "\">
                                <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        </li>
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 287
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 287, $this->source); })()), "request", [], "any", false, false, false, 287), "query", [], "any", false, false, false, 287), "all", [], "any", false, false, false, 287), ["page" => (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 287, $this->source); })())])), "html", null, true);
                yield "\">
                                <i class=\"fas fa-angle-double-right\"></i>
                            </a>
                        </li>
                    ";
            } else {
                // line 292
                yield "                        <li class=\"page-item disabled\">
                            <span class=\"page-link\"><i class=\"fas fa-chevron-right\"></i></span>
                        </li>
                        <li class=\"page-item disabled\">
                            <span class=\"page-link\"><i class=\"fas fa-angle-double-right\"></i></span>
                        </li>
                    ";
            }
            // line 299
            yield "                </ul>
                
                <div class=\"text-center text-muted small mt-2\">
                    Page ";
            // line 302
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 302, $this->source); })()), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 302, $this->source); })()), "html", null, true);
            yield " - 
                    Affichage de ";
            // line 303
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 303, $this->source); })())), "html", null, true);
            yield " utilisateur(s) sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 303, $this->source); })()), "html", null, true);
            yield " au total
                </div>
            </nav>
            ";
        }
        // line 307
        yield "        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 312
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

        // line 313
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de la suppression avec modal
    const deleteButtons = document.querySelectorAll('.delete-btn');
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    const deleteForm = document.getElementById('deleteForm');
    const deleteMessage = document.getElementById('deleteMessage');
    const deleteCsrfToken = document.getElementById('deleteCsrfToken');
    
    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const userId = this.dataset.userId;
            const userName = this.dataset.userName;
            const csrfToken = this.dataset.csrfToken;
            
            deleteMessage.innerHTML = `
                <div class=\"alert alert-warning\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Cette action est irréversible.
                </div>
                <p>Êtes-vous sûr de vouloir supprimer l'utilisateur <strong>\${userName}</strong> ?</p>
                <p class=\"text-danger small\">Toutes les données associées à cet utilisateur seront également supprimées.</p>
            `;
            deleteForm.action = `/admin/user/\${userId}`;
            deleteCsrfToken.value = csrfToken;
            
            deleteModal.show();
        });
    });

    // Confirmation pour activation/désactivation
    const toggleButtons = document.querySelectorAll('form[action*=\"toggle-status\"] button[type=\"submit\"]');
    toggleButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            const form = this.closest('form');
            const userStatus = this.textContent.includes('Actif') ? 'désactiver' : 'activer';
            const userName = this.closest('tr').querySelector('strong').textContent;
            
            if (!confirm(`Êtes-vous sûr de vouloir \${userStatus} l'utilisateur \"\${userName}\" ?`)) {
                e.preventDefault();
            }
        });
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
        return "admin/user/index.html.twig";
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
        return array (  657 => 313,  644 => 312,  630 => 307,  621 => 303,  615 => 302,  610 => 299,  601 => 292,  593 => 287,  585 => 282,  582 => 281,  580 => 280,  576 => 278,  572 => 276,  570 => 275,  567 => 274,  556 => 271,  549 => 270,  545 => 269,  542 => 268,  538 => 266,  536 => 265,  533 => 264,  530 => 263,  528 => 262,  524 => 260,  515 => 253,  507 => 248,  499 => 243,  496 => 242,  494 => 241,  489 => 238,  487 => 237,  480 => 232,  471 => 228,  463 => 224,  456 => 220,  451 => 219,  449 => 218,  442 => 213,  440 => 212,  433 => 209,  424 => 202,  416 => 197,  412 => 196,  408 => 195,  404 => 193,  402 => 192,  394 => 187,  386 => 182,  378 => 177,  372 => 173,  364 => 167,  356 => 161,  354 => 160,  350 => 159,  344 => 156,  340 => 154,  334 => 150,  328 => 146,  326 => 145,  321 => 142,  319 => 141,  314 => 138,  312 => 137,  307 => 134,  305 => 133,  300 => 131,  295 => 129,  291 => 128,  287 => 126,  280 => 121,  272 => 116,  267 => 115,  265 => 114,  261 => 112,  256 => 111,  232 => 90,  221 => 82,  210 => 74,  199 => 66,  192 => 61,  189 => 60,  186 => 59,  184 => 58,  155 => 31,  145 => 27,  142 => 26,  138 => 25,  135 => 24,  125 => 20,  122 => 19,  118 => 18,  109 => 12,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des utilisateurs{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"h3 mb-0 text-gray-800\">Gestion des utilisateurs</h1>
            <p class=\"text-muted\">Gérez les utilisateurs de votre application</p>
        </div>
        <a href=\"{{ path('app_user_new') }}\" class=\"btn btn-primary\">
            <i class=\"fas fa-plus-circle me-2\"></i> Nouvel utilisateur
        </a>
    </div>

    <!-- Alertes flash -->
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}
    
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}

    <!-- Modal pour la suppression -->
    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Confirmation de suppression</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body\">
                    <p id=\"deleteMessage\"></p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <form id=\"deleteForm\" method=\"post\">
                        <input type=\"hidden\" name=\"_token\" id=\"deleteCsrfToken\">
                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Carte principale -->
    <div class=\"card shadow\">
        <div class=\"card-body\">
            <!-- Statistiques -->
            {% set activeUsers = users|filter(u => u.isActive)|length %}
            {% set inactiveUsers = users|filter(u => not u.isActive)|length %}
            {% set adminUsers = users|filter(u => 'ROLE_ADMIN' in u.roles)|length %}
            
            <div class=\"row mb-4\">
                <div class=\"col-md-3 col-6 mb-3\">
                    <div class=\"card border-0 bg-light stat-card\">
                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title mb-1\">{{ totalItems }}</h5>
                            <p class=\"card-text text-muted small\">Utilisateurs totaux</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-6 mb-3\">
                    <div class=\"card border-0 bg-light stat-card\">
                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title mb-1 text-success\">{{ activeUsers }}</h5>
                            <p class=\"card-text text-muted small\">Utilisateurs actifs</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-6 mb-3\">
                    <div class=\"card border-0 bg-light stat-card\">
                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title mb-1 text-danger\">{{ inactiveUsers }}</h5>
                            <p class=\"card-text text-muted small\">Utilisateurs inactifs</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-6 mb-3\">
                    <div class=\"card border-0 bg-light stat-card\">
                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title mb-1 text-primary\">{{ adminUsers }}</h5>
                            <p class=\"card-text text-muted small\">Administrateurs</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle\">
                    <thead class=\"table-light\">
                        <tr>
                            <th width=\"60\">Photo</th>
                            <th>Nom complet</th>
                            <th>Email</th>
                            <th>Rôle</th>
                            <th width=\"120\">Statut</th>
                            <th width=\"100\">Date</th>
                            <th class=\"text-end\" width=\"160\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for user in users %}
                        <tr>
                            <td>
                                {% if user.photo %}
                                    <img src=\"{{ asset('uploads/users/' ~ user.photo) }}\" 
                                         alt=\"{{ user.fullName }}\" 
                                         class=\"rounded-circle\"
                                         style=\"width: 40px; height: 40px; object-fit: cover;\"
                                         onerror=\"this.onerror=null; this.style.display='none'; this.parentElement.innerHTML='<div class=\\'rounded-circle d-flex align-items-center justify-content-center bg-light\\' style=\\'width: 40px; height: 40px;\\'><i class=\\'fas fa-user text-muted\\'></i></div>';\">
                                {% else %}
                                    <div class=\"rounded-circle d-flex align-items-center justify-content-center bg-light\"
                                         style=\"width: 40px; height: 40px;\">
                                        <i class=\"fas fa-user text-muted\"></i>
                                    </div>
                                {% endif %}
                            </td>
                            <td>
                                <strong>{{ user.fullName }}</strong>
                                <div class=\"text-muted small\">{{ user.phone }}</div>
                            </td>
                            <td>{{ user.email }}</td>
                            <td>
                                {% if 'ROLE_ADMIN' in user.roles %}
                                    <span class=\"badge bg-danger\">
                                        <i class=\"fas fa-crown me-1\"></i> Admin
                                    </span>
                                {% elseif 'ROLE_MANAGER' in user.roles %}
                                    <span class=\"badge bg-primary\">
                                        <i class=\"fas fa-chart-line me-1\"></i> Gestionnaire
                                    </span>
                                {% elseif 'ROLE_STOCK_MANAGER' in user.roles %}
                                    <span class=\"badge bg-warning text-dark\">
                                        <i class=\"fas fa-warehouse me-1\"></i> Stock
                                    </span>
                                {% elseif 'ROLE_CASHIER' in user.roles %}
                                    <span class=\"badge bg-success\">
                                        <i class=\"fas fa-cash-register me-1\"></i> Caissier
                                    </span>
                                {% else %}
                                    <span class=\"badge bg-secondary\">
                                        <i class=\"fas fa-user me-1\"></i> Utilisateur
                                    </span>
                                {% endif %}
                            </td>
                            <td>
                                <form action=\"{{ path('app_user_toggle_status', {'id': user.id}) }}\" 
                                      method=\"post\" 
                                      class=\"d-inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle-status' ~ user.id) }}\">
                                    {% if user.isActive %}
                                        <button type=\"submit\" 
                                                class=\"btn btn-success btn-sm rounded-pill w-100\" 
                                                title=\"Cliquez pour désactiver\">
                                            <i class=\"fas fa-toggle-on me-1\"></i> Actif
                                        </button>
                                    {% else %}
                                        <button type=\"submit\" 
                                                class=\"btn btn-danger btn-sm rounded-pill w-100\" 
                                                title=\"Cliquez pour activer\">
                                            <i class=\"fas fa-toggle-off me-1\"></i> Inactif
                                        </button>
                                    {% endif %}
                                </form>
                            </td>
                            <td>
                                <small class=\"text-muted\">
                                    {{ user.createdAt ? user.createdAt|date('d/m/Y') : '' }}
                                </small>
                            </td>
                            <td>
                                <div class=\"btn-group\" role=\"group\">
                                    <a href=\"{{ path('app_user_show', {'id': user.id}) }}\" 
                                       class=\"btn btn-info btn-sm\" 
                                       title=\"Voir détails\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                    <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" 
                                       class=\"btn btn-warning btn-sm\" 
                                       title=\"Modifier\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    {% if user.email != 'admin@hma.com' %}
                                    <button type=\"button\" 
                                            class=\"btn btn-danger btn-sm delete-btn\" 
                                            data-user-id=\"{{ user.id }}\"
                                            data-user-name=\"{{ user.fullName }}\"
                                            data-csrf-token=\"{{ csrf_token('delete' ~ user.id) }}\"
                                            title=\"Supprimer\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                    {% else %}
                                    <button type=\"button\" 
                                            class=\"btn btn-danger btn-sm\" 
                                            title=\"Administrateur principal - Non supprimable\"
                                            disabled>
                                        <i class=\"fas fa-shield-alt\"></i>
                                    </button>
                                    {% endif %}
                                </div>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"7\" class=\"text-center py-4\">
                                <div class=\"text-muted\">
                                    <i class=\"fas fa-users fa-2x mb-3\"></i>
                                    <p class=\"mb-0\">Aucun utilisateur trouvé</p>
                                    {% if search %}
                                        <p class=\"small\">Aucun résultat pour \"{{ search }}\"</p>
                                        <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-outline-primary mt-2\">
                                            <i class=\"fas fa-times me-1\"></i> Effacer la recherche
                                        </a>
                                    {% else %}
                                        <a href=\"{{ path('app_user_new') }}\" class=\"btn btn-primary mt-2\">
                                            <i class=\"fas fa-plus me-1\"></i> Créer un utilisateur
                                        </a>
                                    {% endif %}
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>

            <!-- Pagination améliorée -->
            {% if totalPages > 1 %}
            <nav aria-label=\"Pagination\" class=\"mt-4\">
                <ul class=\"pagination justify-content-center\">
                    <!-- Premier & Précédent -->
                    {% if currentPage > 1 %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('app_user_index', app.request.query.all|merge({'page': 1})) }}\">
                                <i class=\"fas fa-angle-double-left\"></i>
                            </a>
                        </li>
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('app_user_index', app.request.query.all|merge({'page': currentPage - 1})) }}\">
                                <i class=\"fas fa-chevron-left\"></i>
                            </a>
                        </li>
                    {% else %}
                        <li class=\"page-item disabled\">
                            <span class=\"page-link\"><i class=\"fas fa-angle-double-left\"></i></span>
                        </li>
                        <li class=\"page-item disabled\">
                            <span class=\"page-link\"><i class=\"fas fa-chevron-left\"></i></span>
                        </li>
                    {% endif %}

                    <!-- Pages numérotées -->
                    {% set startPage = max(1, currentPage - 2) %}
                    {% set endPage = min(totalPages, startPage + 4) %}
                    
                    {% if startPage > 1 %}
                        <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                    {% endif %}
                    
                    {% for page in startPage..endPage %}
                        <li class=\"page-item {% if page == currentPage %}active{% endif %}\">
                            <a class=\"page-link\" href=\"{{ path('app_user_index', app.request.query.all|merge({'page': page})) }}\">{{ page }}</a>
                        </li>
                    {% endfor %}
                    
                    {% if endPage < totalPages %}
                        <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                    {% endif %}

                    <!-- Suivant & Dernier -->
                    {% if currentPage < totalPages %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('app_user_index', app.request.query.all|merge({'page': currentPage + 1})) }}\">
                                <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        </li>
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('app_user_index', app.request.query.all|merge({'page': totalPages})) }}\">
                                <i class=\"fas fa-angle-double-right\"></i>
                            </a>
                        </li>
                    {% else %}
                        <li class=\"page-item disabled\">
                            <span class=\"page-link\"><i class=\"fas fa-chevron-right\"></i></span>
                        </li>
                        <li class=\"page-item disabled\">
                            <span class=\"page-link\"><i class=\"fas fa-angle-double-right\"></i></span>
                        </li>
                    {% endif %}
                </ul>
                
                <div class=\"text-center text-muted small mt-2\">
                    Page {{ currentPage }} sur {{ totalPages }} - 
                    Affichage de {{ users|length }} utilisateur(s) sur {{ totalItems }} au total
                </div>
            </nav>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de la suppression avec modal
    const deleteButtons = document.querySelectorAll('.delete-btn');
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    const deleteForm = document.getElementById('deleteForm');
    const deleteMessage = document.getElementById('deleteMessage');
    const deleteCsrfToken = document.getElementById('deleteCsrfToken');
    
    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const userId = this.dataset.userId;
            const userName = this.dataset.userName;
            const csrfToken = this.dataset.csrfToken;
            
            deleteMessage.innerHTML = `
                <div class=\"alert alert-warning\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Cette action est irréversible.
                </div>
                <p>Êtes-vous sûr de vouloir supprimer l'utilisateur <strong>\${userName}</strong> ?</p>
                <p class=\"text-danger small\">Toutes les données associées à cet utilisateur seront également supprimées.</p>
            `;
            deleteForm.action = `/admin/user/\${userId}`;
            deleteCsrfToken.value = csrfToken;
            
            deleteModal.show();
        });
    });

    // Confirmation pour activation/désactivation
    const toggleButtons = document.querySelectorAll('form[action*=\"toggle-status\"] button[type=\"submit\"]');
    toggleButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            const form = this.closest('form');
            const userStatus = this.textContent.includes('Actif') ? 'désactiver' : 'activer';
            const userName = this.closest('tr').querySelector('strong').textContent;
            
            if (!confirm(`Êtes-vous sûr de vouloir \${userStatus} l'utilisateur \"\${userName}\" ?`)) {
                e.preventDefault();
            }
        });
    });
});
</script>
{% endblock %}", "admin/user/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\user\\index.html.twig");
    }
}
