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
class __TwigTemplate_06b91453ac740ea8e50881af0c5145ea extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "Gestion des utilisateurs - HMA Market";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "<div class=\"container-fluid px-4\">
    <!-- Header moderne avec dégradé et animations -->
    <div class=\"row mb-5\">
        <div class=\"col-12\">
            <div class=\"modern-header position-relative overflow-hidden rounded-4 shadow-lg\">
                <!-- Éléments décoratifs animés -->
                <div class=\"floating-shapes\">
                    <div class=\"shape shape-1\"></div>
                    <div class=\"shape shape-2\"></div>
                    <div class=\"shape shape-3\"></div>
                </div>
                
                <div class=\"position-relative p-5\" style=\"z-index: 2;\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-lg-8\">
                            <div class=\"d-flex align-items-center gap-4\">
                                <div class=\"icon-wrapper bg-white bg-opacity-20 rounded-4 p-4\">
                                    <i class=\"bi bi-people-fill text-white display-4\"></i>
                                </div>
                                <div>
                                    <h1 class=\"display-5 fw-bold text-white mb-2\">Gestion des utilisateurs</h1>
                                    <div class=\"d-flex align-items-center gap-3 flex-wrap\">
                                        ";
        // line 30
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 30, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "                                            <span class=\"badge bg-white text-primary px-4 py-2 rounded-pill fs-6\">
                                                <i class=\"bi bi-shield-shaded me-2\"></i>Super Administrateur
                                            </span>
                                            <span class=\"text-white-50\">
                                                <i class=\"bi bi-building me-1\"></i>Toutes les entreprises
                                            </span>
                                        ";
        } else {
            // line 38
            yield "                                            <span class=\"badge bg-white text-success px-4 py-2 rounded-pill fs-6\">
                                                <i class=\"bi bi-building me-2\"></i>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "companyDisplayName", [], "any", false, false, false, 39), "html", null, true);
            yield "
                                            </span>
                                        ";
        }
        // line 42
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <!-- Statistiques rapides sous forme de cartes -->
                            <div class=\"stats-grid\">
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                                    <div class=\"stat-value text-white h3 mb-0 fw-bold\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 50, $this->source); })()), "total", [], "any", false, false, false, 50), "html", null, true);
        yield "</div>
                                    <div class=\"stat-label text-white-50 small\">Total</div>
                                </div>
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                                    <div class=\"stat-value text-success h3 mb-0 fw-bold\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 54, $this->source); })()), "active", [], "any", false, false, false, 54), "html", null, true);
        yield "</div>
                                    <div class=\"stat-label text-white-50 small\">Actifs</div>
                                </div>
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                                    <div class=\"stat-value text-warning h3 mb-0 fw-bold\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 58, $this->source); })()), "inactiveByAdmin", [], "any", false, false, false, 58), "html", null, true);
        yield "</div>
                                    <div class=\"stat-label text-white-50 small\">Inactifs</div>
                                </div>
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                                    <div class=\"stat-value text-danger h3 mb-0 fw-bold\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 62, $this->source); })()), "outOfQuota", [], "any", false, false, false, 62), "html", null, true);
        yield "</div>
                                    <div class=\"stat-label text-white-50 small\">Hors quota</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Vague décorative -->
                <div class=\"wave-decoration\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 120\" preserveAspectRatio=\"none\">
                        <path fill=\"#ffffff\" fill-opacity=\"1\" d=\"M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,120L1360,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z\"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres et actions -->
    <div class=\"row mb-4 g-3\">
        <div class=\"col-lg-";
        // line 82
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 82, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "9";
        } else {
            yield "8";
        }
        yield "\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body p-4\">
                    <form method=\"get\" action=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"row g-3\">
                        <div class=\"col-md-";
        // line 86
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 86, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "4";
        } else {
            yield "5";
        }
        yield "\">
                            <div class=\"search-wrapper\">
                                <i class=\"bi bi-search search-icon\"></i>
                                <input type=\"text\" 
                                       name=\"search\" 
                                       class=\"form-control form-control-lg ps-5 border-0 bg-light\"
                                       placeholder=\"Rechercher un utilisateur...\"
                                       value=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 93, $this->source); })()), "html", null, true);
        yield "\">
                                ";
        // line 94
        if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 94, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 95
            yield "                                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\" class=\"clear-search\">
                                        <i class=\"bi bi-x-circle\"></i>
                                    </a>
                                ";
        }
        // line 99
        yield "                            </div>
                        </div>
                        
                        ";
        // line 102
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 102, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 103
            yield "                        <div class=\"col-md-3\">
                            <select name=\"company\" class=\"form-select form-select-lg bg-light border-0\">
                                <option value=\"\">🏢 Toutes les entreprises</option>
                                ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 106, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
                // line 107
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 107), "html", null, true);
                yield "\" ";
                yield ((((isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 107, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 107))) ? ("selected") : (""));
                yield ">
                                        ";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 108), "html", null, true);
                yield "
                                    </option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['company'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            yield "                            </select>
                        </div>
                        ";
        }
        // line 114
        yield "                        
                        <div class=\"col-md-3\">
                            <select name=\"role\" class=\"form-select form-select-lg bg-light border-0\">
                                <option value=\"\">👥 Tous les rôles</option>
                                <option value=\"ROLE_ADMIN\" ";
        // line 118
        yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 118, $this->source); })()) == "ROLE_ADMIN")) ? ("selected") : (""));
        yield ">👑 Administrateurs</option>
                                <option value=\"ROLE_MANAGER\" ";
        // line 119
        yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 119, $this->source); })()) == "ROLE_MANAGER")) ? ("selected") : (""));
        yield ">📊 Gestionnaires</option>
                                <option value=\"ROLE_STOCK_MANAGER\" ";
        // line 120
        yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 120, $this->source); })()) == "ROLE_STOCK_MANAGER")) ? ("selected") : (""));
        yield ">📦 Responsables Stock</option>
                                <option value=\"ROLE_CASHIER\" ";
        // line 121
        yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 121, $this->source); })()) == "ROLE_CASHIER")) ? ("selected") : (""));
        yield ">💶 Caissiers</option>
                            </select>
                        </div>
                        
                        <div class=\"col-md-3\">
                            <select name=\"status\" class=\"form-select form-select-lg bg-light border-0\">
                                <option value=\"\">⚡ Tous les statuts</option>
                                <option value=\"active\" ";
        // line 128
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 128, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">✅ Actifs</option>
                                <option value=\"inactive\" ";
        // line 129
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 129, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">⛔ Désactivés</option>
                                <option value=\"quota\" ";
        // line 130
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 130, $this->source); })()) == "quota")) ? ("selected") : (""));
        yield ">⚠️ Hors quota</option>
                                ";
        // line 131
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 131, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 132
            yield "                                    <option value=\"blocked\" ";
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 132, $this->source); })()) == "blocked")) ? ("selected") : (""));
            yield ">🔒 Entreprises bloquées</option>
                                ";
        }
        // line 134
        yield "                            </select>
                        </div>
                        
                        <div class=\"col-12 mt-3\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\">
                                <i class=\"bi bi-funnel me-2\"></i>Appliquer les filtres
                            </button>
                            <a href=\"";
        // line 141
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-outline-secondary btn-lg px-5 ms-2\">
                                <i class=\"bi bi-arrow-counterclockwise me-2\"></i>Réinitialiser
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-";
        // line 150
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 150, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "3";
        } else {
            yield "4";
        }
        yield "\">
            <div class=\"card border-0 shadow-sm h-100\">
                <div class=\"card-body d-flex align-items-center justify-content-center\">
                    ";
        // line 153
        if (((isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 153, $this->source); })()) || (isset($context["can_add_user"]) || array_key_exists("can_add_user", $context) ? $context["can_add_user"] : (function () { throw new RuntimeError('Variable "can_add_user" does not exist.', 153, $this->source); })()))) {
            // line 154
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
            yield "\" class=\"btn btn-success btn-lg w-100 py-3\">
                            <i class=\"bi bi-person-plus-fill me-2\"></i>
                            Nouvel utilisateur
                        </a>
                    ";
        } else {
            // line 159
            yield "                        <button type=\"button\" class=\"btn btn-secondary btn-lg w-100 py-3\" disabled 
                                data-bs-toggle=\"tooltip\" 
                                title=\"Limite d'utilisateurs atteinte pour votre plan\">
                            <i class=\"bi bi-person-plus-fill me-2\"></i>
                            Limite atteinte
                        </button>
                    ";
        }
        // line 166
        yield "                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des utilisateurs -->
    <div class=\"card border-0 shadow-lg\">
        <div class=\"card-header bg-white py-4 border-0\">
            <div class=\"d-flex align-items-center justify-content-between\">
                <h5 class=\"mb-0 fw-bold\">
                    <i class=\"bi bi-table me-2 text-primary\"></i>
                    Liste des utilisateurs
                    <span class=\"badge bg-primary ms-2 rounded-pill\">";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 178, $this->source); })()), "html", null, true);
        yield "</span>
                </h5>
                <div class=\"text-muted small\">
                    <i class=\"bi bi-mouse me-1\"></i>
                    Scrollez pour voir plus de colonnes
                </div>
            </div>
        </div>
        
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\" style=\"max-height: 600px; overflow-y: auto; overflow-x: auto;\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"bg-light sticky-top\" style=\"top: 0; z-index: 10;\">
                        <tr>
                            <th class=\"ps-4\" width=\"60\"></th>
                            <th>Utilisateur</th>
                            ";
        // line 194
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 194, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 195
            yield "                                <th>Entreprise</th>
                            ";
        }
        // line 197
        yield "                            <th>Rôle</th>
                            <th>Statut</th>
                            <th>Contact</th>
                            <th class=\"text-end pe-4\" style=\"min-width: 200px;\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 204, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 205
            yield "                            ";
            $context["rowClass"] = "";
            // line 206
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "hmaServiceId", [], "any", false, false, false, 206) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "hmaServiceId", [], "any", false, false, false, 206), "hmaActive", [], "any", false, false, false, 206))) {
                // line 207
                yield "                                ";
                $context["rowClass"] = "table-inactive-company";
                // line 208
                yield "                            ";
            } elseif ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "subscriptionActive", [], "any", false, false, false, 208)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 209
                yield "                                ";
                $context["rowClass"] = "table-warning";
                // line 210
                yield "                            ";
            } elseif ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 210)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 211
                yield "                                ";
                $context["rowClass"] = "table-inactive";
                // line 212
                yield "                            ";
            }
            // line 213
            yield "                            
                            <tr class=\"user-row ";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rowClass"]) || array_key_exists("rowClass", $context) ? $context["rowClass"] : (function () { throw new RuntimeError('Variable "rowClass" does not exist.', 214, $this->source); })()), "html", null, true);
            yield "\" data-user-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 214), "html", null, true);
            yield "\">
                                <td class=\"ps-4\">
                                    <div class=\"user-avatar\">
                                        ";
            // line 217
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 217)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 218
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 218))), "html", null, true);
                yield "\" 
                                                 alt=\"";
                // line 219
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 219), "html", null, true);
                yield "\" 
                                                 class=\"rounded-circle object-fit-cover\"
                                                 width=\"45\" height=\"45\">
                                        ";
            } else {
                // line 223
                yield "                                            <div class=\"avatar-placeholder rounded-circle bg-gradient-primary text-white d-flex align-items-center justify-content-center\"
                                                 style=\"width: 45px; height: 45px;\">
                                                <span class=\"fw-bold fs-5\">";
                // line 225
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 225))), "html", null, true);
                yield "</span>
                                            </div>
                                        ";
            }
            // line 228
            yield "                                        
                                        ";
            // line 229
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isHmaOwner", [], "any", false, false, false, 229)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 230
                yield "                                            <span class=\"owner-badge\" data-bs-toggle=\"tooltip\" title=\"Propriétaire\">
                                                <i class=\"bi bi-crown-fill\"></i>
                                            </span>
                                        ";
            }
            // line 234
            yield "                                    </div>
                                </td>
                                
                                <td>
                                    <div class=\"fw-semibold\">";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 238), "html", null, true);
            yield "</div>
                                </td>
                                
                                ";
            // line 241
            if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 241, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 242
                yield "                                    <td>
                                        ";
                // line 243
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "hmaServiceId", [], "any", false, false, false, 243)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 244
                    yield "                                            <div class=\"d-flex align-items-center\">
                                                <span class=\"company-badge\">
                                                    <i class=\"bi bi-building me-1\"></i>
                                                    ";
                    // line 247
                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "hmaServiceId", [], "any", false, false, false, 247), "companyName", [], "any", false, false, false, 247)) > 20)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "hmaServiceId", [], "any", false, false, false, 247), "companyName", [], "any", false, false, false, 247), 0, 20) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "hmaServiceId", [], "any", false, false, false, 247), "companyName", [], "any", false, false, false, 247), "html", null, true)));
                    yield "
                                                </span>
                                                ";
                    // line 249
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "hmaServiceId", [], "any", false, false, false, 249), "hmaActive", [], "any", false, false, false, 249)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 250
                        yield "                                                    <span class=\"badge bg-dark ms-2\" data-bs-toggle=\"tooltip\" title=\"Entreprise bloquée\">
                                                        <i class=\"bi bi-lock-fill\"></i>
                                                    </span>
                                                ";
                    }
                    // line 254
                    yield "                                            </div>
                                        ";
                } else {
                    // line 256
                    yield "                                            <span class=\"badge bg-secondary\">Indépendant</span>
                                        ";
                }
                // line 258
                yield "                                    </td>
                                ";
            }
            // line 260
            yield "                                
                                <td>
                                    <span class=\"role-badge ";
            // line 262
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roleBadgeClass", [], "any", false, false, false, 262), "html", null, true);
            yield "\">
                                        <i class=\"bi ";
            // line 263
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roleIcon", [], "any", false, false, false, 263), "html", null, true);
            yield " me-1\"></i>
                                        ";
            // line 264
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roleLabel", [], "any", false, false, false, 264), "html", null, true);
            yield "
                                    </span>
                                </td>
                                
                                <td>
                                    <div class=\"d-flex flex-column gap-1\">
                                        <span class=\"status-badge ";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statusBadgeClass", [], "any", false, false, false, 270), "html", null, true);
            yield "\">
                                            <i class=\"bi ";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statusIcon", [], "any", false, false, false, 271), "html", null, true);
            yield " me-1\"></i>
                                            ";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statusLabel", [], "any", false, false, false, 272), "html", null, true);
            yield "
                                        </span>
                                        ";
            // line 274
            if (( !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "passwordChanged", [], "any", false, false, false, 274) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isHmaOwner", [], "any", false, false, false, 274))) {
                // line 275
                yield "                                            <span class=\"badge bg-warning-subtle text-warning-emphasis px-2 py-1 small\" 
                                                  data-bs-toggle=\"tooltip\" 
                                                  title=\"Première connexion en attente\">
                                                <i class=\"bi bi-shield-exclamation me-1\"></i>
                                                1ère connexion
                                            </span>
                                        ";
            }
            // line 282
            yield "                                    </div>
                                </td>
                                
                                <td>
                                    <div class=\"contact-info\">
                                        <div class=\"small\">
                                            <i class=\"bi bi-envelope text-muted me-1\"></i>
                                            <a href=\"mailto:";
            // line 289
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 289), "html", null, true);
            yield "\" class=\"text-decoration-none text-dark\">
                                                ";
            // line 290
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 290)) > 20)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 290), 0, 20) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 290), "html", null, true)));
            yield "
                                            </a>
                                        </div>
                                        <div class=\"small\">
                                            <i class=\"bi bi-telephone text-muted me-1\"></i>
                                            <a href=\"tel:";
            // line 295
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 295), "html", null, true);
            yield "\" class=\"text-decoration-none text-dark\">
                                                ";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 296), "html", null, true);
            yield "
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                
                                <td class=\"text-end pe-4\">
                                    <div class=\"action-buttons\">
                                        <a href=\"";
            // line 304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 304)]), "html", null, true);
            yield "\" 
                                           class=\"btn-action btn-view\" 
                                           data-bs-toggle=\"tooltip\" 
                                           title=\"Voir les détails\">
                                            <i class=\"bi bi-eye\"></i>
                                        </a>
                                        
                                        ";
            // line 311
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isEditableBy", [(isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 311, $this->source); })())], "method", false, false, false, 311)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 312
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 312)]), "html", null, true);
                yield "\" 
                                               class=\"btn-action btn-edit\" 
                                               data-bs-toggle=\"tooltip\" 
                                               title=\"Modifier\">
                                                <i class=\"bi bi-pencil\"></i>
                                            </a>
                                        ";
            }
            // line 319
            yield "                                        
                                        ";
            // line 320
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "canToggleStatusBy", [(isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 320, $this->source); })())], "method", false, false, false, 320)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 321
                yield "                                            <button type=\"button\" 
                                                    class=\"btn-action btn-";
                // line 322
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 322)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("danger") : ("success"));
                yield " toggle-status-btn\"
                                                    data-user-id=\"";
                // line 323
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 323), "html", null, true);
                yield "\"
                                                    data-user-name=\"";
                // line 324
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 324), "html", null, true);
                yield "\"
                                                    data-current-status=\"";
                // line 325
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 325)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                yield "\"
                                                    data-csrf-token=\"";
                // line 326
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 326))), "html", null, true);
                yield "\"
                                                    data-bs-toggle=\"tooltip\" 
                                                    title=\"";
                // line 328
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 328)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
                yield "\">
                                                <i class=\"bi bi-";
                // line 329
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 329)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("toggle-off") : ("toggle-on"));
                yield "\"></i>
                                            </button>
                                        ";
            }
            // line 332
            yield "                                        
                                        ";
            // line 333
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "canBeDeletedBy", [(isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 333, $this->source); })())], "method", false, false, false, 333)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 334
                yield "                                            <button type=\"button\" 
                                                    class=\"btn-action btn-delete delete-btn\"
                                                    data-user-id=\"";
                // line 336
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 336), "html", null, true);
                yield "\"
                                                    data-user-name=\"";
                // line 337
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 337), "html", null, true);
                yield "\"
                                                    data-csrf-token=\"";
                // line 338
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 338))), "html", null, true);
                yield "\"
                                                    data-bs-toggle=\"tooltip\" 
                                                    title=\"Supprimer\">
                                                <i class=\"bi bi-trash\"></i>
                                            </button>
                                        ";
            }
            // line 344
            yield "                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 347
        if (!$context['_iterated']) {
            // line 348
            yield "                            <tr>
                                <td colspan=\"";
            // line 349
            if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 349, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "7";
            } else {
                yield "6";
            }
            yield "\" class=\"text-center py-5\">
                                    <div class=\"empty-state\">
                                        <div class=\"empty-state-icon mb-4\">
                                            <i class=\"bi bi-people display-1 text-muted\"></i>
                                        </div>
                                        <h4 class=\"text-muted mb-3\">Aucun utilisateur trouvé</h4>
                                        <p class=\"text-muted mb-4\">Commencez par créer votre premier utilisateur</p>
                                        ";
            // line 356
            if (((isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 356, $this->source); })()) || (isset($context["can_add_user"]) || array_key_exists("can_add_user", $context) ? $context["can_add_user"] : (function () { throw new RuntimeError('Variable "can_add_user" does not exist.', 356, $this->source); })()))) {
                // line 357
                yield "                                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
                yield "\" class=\"btn btn-primary btn-lg px-5\">
                                                <i class=\"bi bi-person-plus me-2\"></i>Créer un utilisateur
                                            </a>
                                        ";
            }
            // line 361
            yield "                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 365
        yield "                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Pagination -->
        ";
        // line 371
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 371, $this->source); })()) > 1)) {
            // line 372
            yield "        <div class=\"card-footer bg-white py-3 border-0\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"text-muted small\">
                    Affichage de ";
            // line 375
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 375, $this->source); })()) - 1) * (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 375, $this->source); })())) + 1), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 375, $this->source); })()) * (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 375, $this->source); })())), (isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 375, $this->source); })())), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 375, $this->source); })()), "html", null, true);
            yield " utilisateurs
                </div>
                <nav aria-label=\"Pagination\">
                    <ul class=\"pagination pagination-modern mb-0\">
                        <li class=\"page-item ";
            // line 379
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 379, $this->source); })()) <= 1)) ? ("disabled") : (""));
            yield "\">
                            <a class=\"page-link\" href=\"";
            // line 380
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 380, $this->source); })()) - 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 380, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 380, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 380, $this->source); })()), "company" => (isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 380, $this->source); })())]), "html", null, true);
            yield "\">
                                <i class=\"bi bi-chevron-left\"></i>
                            </a>
                        </li>
                        
                        ";
            // line 385
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 385, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 386
                yield "                            <li class=\"page-item ";
                yield ((($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 386, $this->source); })()))) ? ("active") : (""));
                yield "\">
                                <a class=\"page-link\" href=\"";
                // line 387
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => $context["i"], "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 387, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 387, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 387, $this->source); })()), "company" => (isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 387, $this->source); })())]), "html", null, true);
                yield "\">
                                    ";
                // line 388
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "
                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 392
            yield "                        
                        <li class=\"page-item ";
            // line 393
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 393, $this->source); })()) >= (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 393, $this->source); })()))) ? ("disabled") : (""));
            yield "\">
                            <a class=\"page-link\" href=\"";
            // line 394
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 394, $this->source); })()) + 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 394, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 394, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 394, $this->source); })()), "company" => (isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 394, $this->source); })())]), "html", null, true);
            yield "\">
                                <i class=\"bi bi-chevron-right\"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        ";
        }
        // line 403
        yield "    </div>
</div>

<!-- Modals de confirmation -->
<div class=\"modal fade\" id=\"toggleStatusModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0\">
            <div class=\"modal-header bg-warning border-0\">
                <h5 class=\"modal-title text-white\">
                    <i class=\"bi bi-exclamation-triangle me-2\"></i>
                    Confirmation
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <i class=\"bi bi-question-circle text-warning\" style=\"font-size: 4rem;\"></i>
                </div>
                <h5 id=\"toggleStatusMessage\" class=\"mb-3\"></h5>
                <p class=\"text-muted mb-0\">Cette action peut être annulée à tout moment.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">
                    <i class=\"bi bi-x me-2\"></i>Annuler
                </button>
                <form id=\"toggleStatusForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleStatusToken\">
                    <button type=\"submit\" class=\"btn btn-warning px-4\">
                        <i class=\"bi bi-check me-2\"></i>Confirmer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title\">
                    <i class=\"bi bi-exclamation-triangle me-2\"></i>
                    Confirmation de suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <i class=\"bi bi-trash3 text-danger\" style=\"font-size: 4rem;\"></i>
                </div>
                <h5 id=\"deleteMessage\" class=\"mb-3\"></h5>
                <p class=\"text-muted mb-0\">Cette action est irréversible.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">
                    <i class=\"bi bi-x me-2\"></i>Annuler
                </button>
                <form id=\"deleteForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger px-4\">
                        <i class=\"bi bi-trash me-2\"></i>Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 472
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

        // line 473
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialisation des tooltips
    const tooltips = document.querySelectorAll('[data-bs-toggle=\"tooltip\"]');
    tooltips.forEach(tooltip => new bootstrap.Tooltip(tooltip));
    
    // Gestion du toggle status
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleStatusModal'));
    const toggleButtons = document.querySelectorAll('.toggle-status-btn');
    const toggleForm = document.getElementById('toggleStatusForm');
    const toggleToken = document.getElementById('toggleStatusToken');
    const toggleMessage = document.getElementById('toggleStatusMessage');
    
    toggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            const userId = this.dataset.userId;
            const userName = this.dataset.userName;
            const currentStatus = this.dataset.currentStatus;
            const csrfToken = this.dataset.csrfToken;
            
            const action = currentStatus === 'active' ? 'désactiver' : 'activer';
            toggleMessage.innerHTML = `Êtes-vous sûr de vouloir <strong class=\"text-\${currentStatus === 'active' ? 'danger' : 'success'}\">\${action}</strong> l'utilisateur <strong>\${userName}</strong> ?`;
            
            toggleForm.action = `/admin/user/\${userId}/toggle-status`;
            toggleToken.value = csrfToken;
            toggleModal.show();
        });
    });
    
    // Gestion de la suppression
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    const deleteButtons = document.querySelectorAll('.delete-btn');
    const deleteForm = document.getElementById('deleteForm');
    const deleteToken = document.getElementById('deleteToken');
    const deleteMessage = document.getElementById('deleteMessage');
    
    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const userId = this.dataset.userId;
            const userName = this.dataset.userName;
            const csrfToken = this.dataset.csrfToken;
            
            deleteMessage.innerHTML = `Supprimer définitivement <strong class=\"text-danger\">\${userName}</strong> ?`;
            deleteForm.action = `/admin/user/\${userId}`;
            deleteToken.value = csrfToken;
            deleteModal.show();
        });
    });
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 526
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

        // line 527
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
:root {
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --success-gradient: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
    --warning-gradient: linear-gradient(135deg, #fbbf24 0%, #d97706 100%);
    --danger-gradient: linear-gradient(135deg, #f87171 0%, #dc2626 100%);
    --info-gradient: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
    --dark-gradient: linear-gradient(135deg, #1f2937 0%, #111827 100%);
}

/* Header moderne */
.modern-header {
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
    width: 300px;
    height: 300px;
    top: -150px;
    right: -50px;
    animation: float 8s ease-in-out infinite;
}

.shape-2 {
    width: 200px;
    height: 200px;
    bottom: -80px;
    left: -30px;
    animation: float 12s ease-in-out infinite reverse;
}

.shape-3 {
    width: 150px;
    height: 150px;
    top: 50%;
    left: 30%;
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

.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 10px;
}

.stat-card {
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.stat-card:hover {
    transform: translateY(-5px);
    background-color: rgba(255, 255, 255, 0.15) !important;
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

/* Recherche */
.search-wrapper {
    position: relative;
}

.search-icon {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #6c757d;
    z-index: 10;
}

.clear-search {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #6c757d;
    text-decoration: none;
    z-index: 10;
}

.clear-search:hover {
    color: #dc3545;
}

/* Avatar */
.user-avatar {
    position: relative;
    display: inline-block;
}

.owner-badge {
    position: absolute;
    bottom: -2px;
    right: -2px;
    background: linear-gradient(135deg, #fbbf24, #d97706);
    color: white;
    border-radius: 50%;
    padding: 4px;
    font-size: 12px;
    border: 2px solid white;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    animation: pulse 2s infinite;
}

/* Badges */
.role-badge {
    display: inline-flex;
    align-items: center;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 500;
    color: white;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.role-badge:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

.role-badge.bg-gradient-danger { background: var(--danger-gradient); }
.role-badge.bg-gradient-primary { background: var(--primary-gradient); }
.role-badge.bg-gradient-warning { background: var(--warning-gradient); }
.role-badge.bg-gradient-success { background: var(--success-gradient); }
.role-badge.bg-gradient-info { background: var(--info-gradient); }

.status-badge {
    display: inline-flex;
    align-items: center;
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
    background: white;
    border: 1px solid;
    transition: all 0.3s ease;
}

.company-badge {
    display: inline-flex;
    align-items: center;
    padding: 4px 10px;
    background: #f8f9fa;
    border-radius: 20px;
    font-size: 0.85rem;
    color: #495057;
}

/* Boutons d'action */
.action-buttons {
    display: flex;
    gap: 5px;
    justify-content: flex-end;
}

.btn-action {
    width: 35px;
    height: 35px;
    border-radius: 10px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: none;
    background: transparent;
    color: #6c757d;
    transition: all 0.3s ease;
    text-decoration: none;
}

.btn-action:hover {
    transform: translateY(-2px);
    color: white;
}

.btn-view:hover {
    background: var(--info-gradient);
    box-shadow: 0 4px 10px rgba(59, 130, 246, 0.3);
}

.btn-edit:hover {
    background: var(--warning-gradient);
    box-shadow: 0 4px 10px rgba(217, 119, 6, 0.3);
}

.btn-danger:hover {
    background: var(--danger-gradient) !important;
    box-shadow: 0 4px 10px rgba(220, 38, 38, 0.3);
}

.btn-success:hover {
    background: var(--success-gradient) !important;
    box-shadow: 0 4px 10px rgba(56, 161, 105, 0.3);
}

.btn-delete:hover {
    background: var(--danger-gradient) !important;
    box-shadow: 0 4px 10px rgba(220, 38, 38, 0.3);
}

/* Lignes du tableau */
.user-row {
    transition: all 0.3s ease;
    cursor: pointer;
}

.user-row:hover {
    background-color: rgba(102, 126, 234, 0.05) !important;
    transform: scale(1.01);
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.table-inactive {
    background-color: #f8f9fa;
    opacity: 0.8;
}

.table-inactive-company {
    background-color: #2d3748;
    color: white !important;
}

.table-inactive-company .text-muted {
    color: rgba(255,255,255,0.6) !important;
}

.table-warning {
    background-color: #fff3cd;
}

/* Pagination moderne */
.pagination-modern .page-link {
    border: none;
    padding: 8px 16px;
    margin: 0 3px;
    border-radius: 10px;
    color: #4a5568;
    font-weight: 500;
    transition: all 0.3s ease;
    background: transparent;
}

.pagination-modern .page-link:hover {
    background: var(--primary-gradient);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
}

.pagination-modern .page-item.active .page-link {
    background: var(--primary-gradient);
    color: white;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
}

.pagination-modern .page-item.disabled .page-link {
    background: transparent;
    color: #cbd5e0;
}

/* Empty state */
.empty-state {
    padding: 3rem;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-radius: 20px;
}

.empty-state-icon {
    animation: bounce 2s infinite;
}

@keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-20px); }
}

/* Scrollbar personnalisée */
.table-responsive::-webkit-scrollbar {
    width: 8px;
    height: 8px;
}

.table-responsive::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 10px;
}

.table-responsive::-webkit-scrollbar-thumb {
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 10px;
}

.table-responsive::-webkit-scrollbar-thumb:hover {
    background: #667eea;
}

/* Badges de statut */
.badge.bg-warning-subtle {
    background-color: #fef3c7 !important;
    color: #92400e !important;
}

.text-warning-emphasis {
    color: #78350f !important;
}

/* Animations */
@keyframes pulse {
    0% { box-shadow: 0 0 0 0 rgba(251, 191, 36, 0.7); }
    70% { box-shadow: 0 0 0 10px rgba(251, 191, 36, 0); }
    100% { box-shadow: 0 0 0 0 rgba(251, 191, 36, 0); }
}

/* Responsive */
@media (max-width: 768px) {
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .action-buttons {
        flex-wrap: wrap;
    }
    
    .btn-action {
        width: 30px;
        height: 30px;
        font-size: 0.85rem;
    }
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
        return array (  1011 => 527,  998 => 526,  935 => 473,  922 => 472,  844 => 403,  832 => 394,  828 => 393,  825 => 392,  815 => 388,  811 => 387,  806 => 386,  802 => 385,  794 => 380,  790 => 379,  779 => 375,  774 => 372,  772 => 371,  764 => 365,  755 => 361,  747 => 357,  745 => 356,  731 => 349,  728 => 348,  726 => 347,  719 => 344,  710 => 338,  706 => 337,  702 => 336,  698 => 334,  696 => 333,  693 => 332,  687 => 329,  683 => 328,  678 => 326,  674 => 325,  670 => 324,  666 => 323,  662 => 322,  659 => 321,  657 => 320,  654 => 319,  643 => 312,  641 => 311,  631 => 304,  620 => 296,  616 => 295,  608 => 290,  604 => 289,  595 => 282,  586 => 275,  584 => 274,  579 => 272,  575 => 271,  571 => 270,  562 => 264,  558 => 263,  554 => 262,  550 => 260,  546 => 258,  542 => 256,  538 => 254,  532 => 250,  530 => 249,  525 => 247,  520 => 244,  518 => 243,  515 => 242,  513 => 241,  507 => 238,  501 => 234,  495 => 230,  493 => 229,  490 => 228,  484 => 225,  480 => 223,  473 => 219,  468 => 218,  466 => 217,  458 => 214,  455 => 213,  452 => 212,  449 => 211,  446 => 210,  443 => 209,  440 => 208,  437 => 207,  434 => 206,  431 => 205,  426 => 204,  417 => 197,  413 => 195,  411 => 194,  392 => 178,  378 => 166,  369 => 159,  360 => 154,  358 => 153,  348 => 150,  336 => 141,  327 => 134,  321 => 132,  319 => 131,  315 => 130,  311 => 129,  307 => 128,  297 => 121,  293 => 120,  289 => 119,  285 => 118,  279 => 114,  274 => 111,  265 => 108,  258 => 107,  254 => 106,  249 => 103,  247 => 102,  242 => 99,  234 => 95,  232 => 94,  228 => 93,  214 => 86,  210 => 85,  200 => 82,  177 => 62,  170 => 58,  163 => 54,  156 => 50,  146 => 42,  140 => 39,  137 => 38,  128 => 31,  126 => 30,  102 => 8,  89 => 7,  66 => 5,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/user/index.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Gestion des utilisateurs - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- Header moderne avec dégradé et animations -->
    <div class=\"row mb-5\">
        <div class=\"col-12\">
            <div class=\"modern-header position-relative overflow-hidden rounded-4 shadow-lg\">
                <!-- Éléments décoratifs animés -->
                <div class=\"floating-shapes\">
                    <div class=\"shape shape-1\"></div>
                    <div class=\"shape shape-2\"></div>
                    <div class=\"shape shape-3\"></div>
                </div>
                
                <div class=\"position-relative p-5\" style=\"z-index: 2;\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-lg-8\">
                            <div class=\"d-flex align-items-center gap-4\">
                                <div class=\"icon-wrapper bg-white bg-opacity-20 rounded-4 p-4\">
                                    <i class=\"bi bi-people-fill text-white display-4\"></i>
                                </div>
                                <div>
                                    <h1 class=\"display-5 fw-bold text-white mb-2\">Gestion des utilisateurs</h1>
                                    <div class=\"d-flex align-items-center gap-3 flex-wrap\">
                                        {% if is_super_admin %}
                                            <span class=\"badge bg-white text-primary px-4 py-2 rounded-pill fs-6\">
                                                <i class=\"bi bi-shield-shaded me-2\"></i>Super Administrateur
                                            </span>
                                            <span class=\"text-white-50\">
                                                <i class=\"bi bi-building me-1\"></i>Toutes les entreprises
                                            </span>
                                        {% else %}
                                            <span class=\"badge bg-white text-success px-4 py-2 rounded-pill fs-6\">
                                                <i class=\"bi bi-building me-2\"></i>{{ app.user.companyDisplayName }}
                                            </span>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <!-- Statistiques rapides sous forme de cartes -->
                            <div class=\"stats-grid\">
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                                    <div class=\"stat-value text-white h3 mb-0 fw-bold\">{{ stats.total }}</div>
                                    <div class=\"stat-label text-white-50 small\">Total</div>
                                </div>
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                                    <div class=\"stat-value text-success h3 mb-0 fw-bold\">{{ stats.active }}</div>
                                    <div class=\"stat-label text-white-50 small\">Actifs</div>
                                </div>
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                                    <div class=\"stat-value text-warning h3 mb-0 fw-bold\">{{ stats.inactiveByAdmin }}</div>
                                    <div class=\"stat-label text-white-50 small\">Inactifs</div>
                                </div>
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                                    <div class=\"stat-value text-danger h3 mb-0 fw-bold\">{{ stats.outOfQuota }}</div>
                                    <div class=\"stat-label text-white-50 small\">Hors quota</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Vague décorative -->
                <div class=\"wave-decoration\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 120\" preserveAspectRatio=\"none\">
                        <path fill=\"#ffffff\" fill-opacity=\"1\" d=\"M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,120L1360,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z\"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres et actions -->
    <div class=\"row mb-4 g-3\">
        <div class=\"col-lg-{% if is_super_admin %}9{% else %}8{% endif %}\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body p-4\">
                    <form method=\"get\" action=\"{{ path('app_user_index') }}\" class=\"row g-3\">
                        <div class=\"col-md-{% if is_super_admin %}4{% else %}5{% endif %}\">
                            <div class=\"search-wrapper\">
                                <i class=\"bi bi-search search-icon\"></i>
                                <input type=\"text\" 
                                       name=\"search\" 
                                       class=\"form-control form-control-lg ps-5 border-0 bg-light\"
                                       placeholder=\"Rechercher un utilisateur...\"
                                       value=\"{{ search }}\">
                                {% if search %}
                                    <a href=\"{{ path('app_user_index') }}\" class=\"clear-search\">
                                        <i class=\"bi bi-x-circle\"></i>
                                    </a>
                                {% endif %}
                            </div>
                        </div>
                        
                        {% if is_super_admin %}
                        <div class=\"col-md-3\">
                            <select name=\"company\" class=\"form-select form-select-lg bg-light border-0\">
                                <option value=\"\">🏢 Toutes les entreprises</option>
                                {% for company in companies %}
                                    <option value=\"{{ company.id }}\" {{ companyId == company.id ? 'selected' }}>
                                        {{ company.companyName }}
                                    </option>
                                {% endfor %}
                            </select>
                        </div>
                        {% endif %}
                        
                        <div class=\"col-md-3\">
                            <select name=\"role\" class=\"form-select form-select-lg bg-light border-0\">
                                <option value=\"\">👥 Tous les rôles</option>
                                <option value=\"ROLE_ADMIN\" {{ role == 'ROLE_ADMIN' ? 'selected' }}>👑 Administrateurs</option>
                                <option value=\"ROLE_MANAGER\" {{ role == 'ROLE_MANAGER' ? 'selected' }}>📊 Gestionnaires</option>
                                <option value=\"ROLE_STOCK_MANAGER\" {{ role == 'ROLE_STOCK_MANAGER' ? 'selected' }}>📦 Responsables Stock</option>
                                <option value=\"ROLE_CASHIER\" {{ role == 'ROLE_CASHIER' ? 'selected' }}>💶 Caissiers</option>
                            </select>
                        </div>
                        
                        <div class=\"col-md-3\">
                            <select name=\"status\" class=\"form-select form-select-lg bg-light border-0\">
                                <option value=\"\">⚡ Tous les statuts</option>
                                <option value=\"active\" {{ status == 'active' ? 'selected' }}>✅ Actifs</option>
                                <option value=\"inactive\" {{ status == 'inactive' ? 'selected' }}>⛔ Désactivés</option>
                                <option value=\"quota\" {{ status == 'quota' ? 'selected' }}>⚠️ Hors quota</option>
                                {% if is_super_admin %}
                                    <option value=\"blocked\" {{ status == 'blocked' ? 'selected' }}>🔒 Entreprises bloquées</option>
                                {% endif %}
                            </select>
                        </div>
                        
                        <div class=\"col-12 mt-3\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\">
                                <i class=\"bi bi-funnel me-2\"></i>Appliquer les filtres
                            </button>
                            <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-outline-secondary btn-lg px-5 ms-2\">
                                <i class=\"bi bi-arrow-counterclockwise me-2\"></i>Réinitialiser
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-{% if is_super_admin %}3{% else %}4{% endif %}\">
            <div class=\"card border-0 shadow-sm h-100\">
                <div class=\"card-body d-flex align-items-center justify-content-center\">
                    {% if is_super_admin or can_add_user %}
                        <a href=\"{{ path('app_user_new') }}\" class=\"btn btn-success btn-lg w-100 py-3\">
                            <i class=\"bi bi-person-plus-fill me-2\"></i>
                            Nouvel utilisateur
                        </a>
                    {% else %}
                        <button type=\"button\" class=\"btn btn-secondary btn-lg w-100 py-3\" disabled 
                                data-bs-toggle=\"tooltip\" 
                                title=\"Limite d'utilisateurs atteinte pour votre plan\">
                            <i class=\"bi bi-person-plus-fill me-2\"></i>
                            Limite atteinte
                        </button>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des utilisateurs -->
    <div class=\"card border-0 shadow-lg\">
        <div class=\"card-header bg-white py-4 border-0\">
            <div class=\"d-flex align-items-center justify-content-between\">
                <h5 class=\"mb-0 fw-bold\">
                    <i class=\"bi bi-table me-2 text-primary\"></i>
                    Liste des utilisateurs
                    <span class=\"badge bg-primary ms-2 rounded-pill\">{{ totalItems }}</span>
                </h5>
                <div class=\"text-muted small\">
                    <i class=\"bi bi-mouse me-1\"></i>
                    Scrollez pour voir plus de colonnes
                </div>
            </div>
        </div>
        
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\" style=\"max-height: 600px; overflow-y: auto; overflow-x: auto;\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"bg-light sticky-top\" style=\"top: 0; z-index: 10;\">
                        <tr>
                            <th class=\"ps-4\" width=\"60\"></th>
                            <th>Utilisateur</th>
                            {% if is_super_admin %}
                                <th>Entreprise</th>
                            {% endif %}
                            <th>Rôle</th>
                            <th>Statut</th>
                            <th>Contact</th>
                            <th class=\"text-end pe-4\" style=\"min-width: 200px;\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for user in users %}
                            {% set rowClass = '' %}
                            {% if user.hmaServiceId and not user.hmaServiceId.hmaActive %}
                                {% set rowClass = 'table-inactive-company' %}
                            {% elseif not user.subscriptionActive %}
                                {% set rowClass = 'table-warning' %}
                            {% elseif not user.isActive %}
                                {% set rowClass = 'table-inactive' %}
                            {% endif %}
                            
                            <tr class=\"user-row {{ rowClass }}\" data-user-id=\"{{ user.id }}\">
                                <td class=\"ps-4\">
                                    <div class=\"user-avatar\">
                                        {% if user.photo %}
                                            <img src=\"{{ asset('uploads/users/' ~ user.photo) }}\" 
                                                 alt=\"{{ user.fullName }}\" 
                                                 class=\"rounded-circle object-fit-cover\"
                                                 width=\"45\" height=\"45\">
                                        {% else %}
                                            <div class=\"avatar-placeholder rounded-circle bg-gradient-primary text-white d-flex align-items-center justify-content-center\"
                                                 style=\"width: 45px; height: 45px;\">
                                                <span class=\"fw-bold fs-5\">{{ user.fullName|first|upper }}</span>
                                            </div>
                                        {% endif %}
                                        
                                        {% if user.isHmaOwner %}
                                            <span class=\"owner-badge\" data-bs-toggle=\"tooltip\" title=\"Propriétaire\">
                                                <i class=\"bi bi-crown-fill\"></i>
                                            </span>
                                        {% endif %}
                                    </div>
                                </td>
                                
                                <td>
                                    <div class=\"fw-semibold\">{{ user.fullName }}</div>
                                </td>
                                
                                {% if is_super_admin %}
                                    <td>
                                        {% if user.hmaServiceId %}
                                            <div class=\"d-flex align-items-center\">
                                                <span class=\"company-badge\">
                                                    <i class=\"bi bi-building me-1\"></i>
                                                    {{ user.hmaServiceId.companyName|length > 20 ? user.hmaServiceId.companyName|slice(0, 20) ~ '...' : user.hmaServiceId.companyName }}
                                                </span>
                                                {% if not user.hmaServiceId.hmaActive %}
                                                    <span class=\"badge bg-dark ms-2\" data-bs-toggle=\"tooltip\" title=\"Entreprise bloquée\">
                                                        <i class=\"bi bi-lock-fill\"></i>
                                                    </span>
                                                {% endif %}
                                            </div>
                                        {% else %}
                                            <span class=\"badge bg-secondary\">Indépendant</span>
                                        {% endif %}
                                    </td>
                                {% endif %}
                                
                                <td>
                                    <span class=\"role-badge {{ user.roleBadgeClass }}\">
                                        <i class=\"bi {{ user.roleIcon }} me-1\"></i>
                                        {{ user.roleLabel }}
                                    </span>
                                </td>
                                
                                <td>
                                    <div class=\"d-flex flex-column gap-1\">
                                        <span class=\"status-badge {{ user.statusBadgeClass }}\">
                                            <i class=\"bi {{ user.statusIcon }} me-1\"></i>
                                            {{ user.statusLabel }}
                                        </span>
                                        {% if not user.passwordChanged and not user.isHmaOwner %}
                                            <span class=\"badge bg-warning-subtle text-warning-emphasis px-2 py-1 small\" 
                                                  data-bs-toggle=\"tooltip\" 
                                                  title=\"Première connexion en attente\">
                                                <i class=\"bi bi-shield-exclamation me-1\"></i>
                                                1ère connexion
                                            </span>
                                        {% endif %}
                                    </div>
                                </td>
                                
                                <td>
                                    <div class=\"contact-info\">
                                        <div class=\"small\">
                                            <i class=\"bi bi-envelope text-muted me-1\"></i>
                                            <a href=\"mailto:{{ user.email }}\" class=\"text-decoration-none text-dark\">
                                                {{ user.email|length > 20 ? user.email|slice(0, 20) ~ '...' : user.email }}
                                            </a>
                                        </div>
                                        <div class=\"small\">
                                            <i class=\"bi bi-telephone text-muted me-1\"></i>
                                            <a href=\"tel:{{ user.phone }}\" class=\"text-decoration-none text-dark\">
                                                {{ user.phone }}
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                
                                <td class=\"text-end pe-4\">
                                    <div class=\"action-buttons\">
                                        <a href=\"{{ path('app_user_show', {'id': user.id}) }}\" 
                                           class=\"btn-action btn-view\" 
                                           data-bs-toggle=\"tooltip\" 
                                           title=\"Voir les détails\">
                                            <i class=\"bi bi-eye\"></i>
                                        </a>
                                        
                                        {% if user.isEditableBy(current_user) %}
                                            <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" 
                                               class=\"btn-action btn-edit\" 
                                               data-bs-toggle=\"tooltip\" 
                                               title=\"Modifier\">
                                                <i class=\"bi bi-pencil\"></i>
                                            </a>
                                        {% endif %}
                                        
                                        {% if user.canToggleStatusBy(current_user) %}
                                            <button type=\"button\" 
                                                    class=\"btn-action btn-{{ user.isActive ? 'danger' : 'success' }} toggle-status-btn\"
                                                    data-user-id=\"{{ user.id }}\"
                                                    data-user-name=\"{{ user.fullName }}\"
                                                    data-current-status=\"{{ user.isActive ? 'active' : 'inactive' }}\"
                                                    data-csrf-token=\"{{ csrf_token('toggle-status' ~ user.id) }}\"
                                                    data-bs-toggle=\"tooltip\" 
                                                    title=\"{{ user.isActive ? 'Désactiver' : 'Activer' }}\">
                                                <i class=\"bi bi-{{ user.isActive ? 'toggle-off' : 'toggle-on' }}\"></i>
                                            </button>
                                        {% endif %}
                                        
                                        {% if user.canBeDeletedBy(current_user) %}
                                            <button type=\"button\" 
                                                    class=\"btn-action btn-delete delete-btn\"
                                                    data-user-id=\"{{ user.id }}\"
                                                    data-user-name=\"{{ user.fullName }}\"
                                                    data-csrf-token=\"{{ csrf_token('delete' ~ user.id) }}\"
                                                    data-bs-toggle=\"tooltip\" 
                                                    title=\"Supprimer\">
                                                <i class=\"bi bi-trash\"></i>
                                            </button>
                                        {% endif %}
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"{% if is_super_admin %}7{% else %}6{% endif %}\" class=\"text-center py-5\">
                                    <div class=\"empty-state\">
                                        <div class=\"empty-state-icon mb-4\">
                                            <i class=\"bi bi-people display-1 text-muted\"></i>
                                        </div>
                                        <h4 class=\"text-muted mb-3\">Aucun utilisateur trouvé</h4>
                                        <p class=\"text-muted mb-4\">Commencez par créer votre premier utilisateur</p>
                                        {% if is_super_admin or can_add_user %}
                                            <a href=\"{{ path('app_user_new') }}\" class=\"btn btn-primary btn-lg px-5\">
                                                <i class=\"bi bi-person-plus me-2\"></i>Créer un utilisateur
                                            </a>
                                        {% endif %}
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Pagination -->
        {% if totalPages > 1 %}
        <div class=\"card-footer bg-white py-3 border-0\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"text-muted small\">
                    Affichage de {{ ((currentPage - 1) * limit) + 1 }} à {{ min(currentPage * limit, totalItems) }} sur {{ totalItems }} utilisateurs
                </div>
                <nav aria-label=\"Pagination\">
                    <ul class=\"pagination pagination-modern mb-0\">
                        <li class=\"page-item {{ currentPage <= 1 ? 'disabled' }}\">
                            <a class=\"page-link\" href=\"{{ path('app_user_index', {page: currentPage - 1, search: search, role: role, status: status, company: companyId}) }}\">
                                <i class=\"bi bi-chevron-left\"></i>
                            </a>
                        </li>
                        
                        {% for i in 1..totalPages %}
                            <li class=\"page-item {{ i == currentPage ? 'active' }}\">
                                <a class=\"page-link\" href=\"{{ path('app_user_index', {page: i, search: search, role: role, status: status, company: companyId}) }}\">
                                    {{ i }}
                                </a>
                            </li>
                        {% endfor %}
                        
                        <li class=\"page-item {{ currentPage >= totalPages ? 'disabled' }}\">
                            <a class=\"page-link\" href=\"{{ path('app_user_index', {page: currentPage + 1, search: search, role: role, status: status, company: companyId}) }}\">
                                <i class=\"bi bi-chevron-right\"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        {% endif %}
    </div>
</div>

<!-- Modals de confirmation -->
<div class=\"modal fade\" id=\"toggleStatusModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0\">
            <div class=\"modal-header bg-warning border-0\">
                <h5 class=\"modal-title text-white\">
                    <i class=\"bi bi-exclamation-triangle me-2\"></i>
                    Confirmation
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <i class=\"bi bi-question-circle text-warning\" style=\"font-size: 4rem;\"></i>
                </div>
                <h5 id=\"toggleStatusMessage\" class=\"mb-3\"></h5>
                <p class=\"text-muted mb-0\">Cette action peut être annulée à tout moment.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">
                    <i class=\"bi bi-x me-2\"></i>Annuler
                </button>
                <form id=\"toggleStatusForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleStatusToken\">
                    <button type=\"submit\" class=\"btn btn-warning px-4\">
                        <i class=\"bi bi-check me-2\"></i>Confirmer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title\">
                    <i class=\"bi bi-exclamation-triangle me-2\"></i>
                    Confirmation de suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <i class=\"bi bi-trash3 text-danger\" style=\"font-size: 4rem;\"></i>
                </div>
                <h5 id=\"deleteMessage\" class=\"mb-3\"></h5>
                <p class=\"text-muted mb-0\">Cette action est irréversible.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">
                    <i class=\"bi bi-x me-2\"></i>Annuler
                </button>
                <form id=\"deleteForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger px-4\">
                        <i class=\"bi bi-trash me-2\"></i>Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialisation des tooltips
    const tooltips = document.querySelectorAll('[data-bs-toggle=\"tooltip\"]');
    tooltips.forEach(tooltip => new bootstrap.Tooltip(tooltip));
    
    // Gestion du toggle status
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleStatusModal'));
    const toggleButtons = document.querySelectorAll('.toggle-status-btn');
    const toggleForm = document.getElementById('toggleStatusForm');
    const toggleToken = document.getElementById('toggleStatusToken');
    const toggleMessage = document.getElementById('toggleStatusMessage');
    
    toggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            const userId = this.dataset.userId;
            const userName = this.dataset.userName;
            const currentStatus = this.dataset.currentStatus;
            const csrfToken = this.dataset.csrfToken;
            
            const action = currentStatus === 'active' ? 'désactiver' : 'activer';
            toggleMessage.innerHTML = `Êtes-vous sûr de vouloir <strong class=\"text-\${currentStatus === 'active' ? 'danger' : 'success'}\">\${action}</strong> l'utilisateur <strong>\${userName}</strong> ?`;
            
            toggleForm.action = `/admin/user/\${userId}/toggle-status`;
            toggleToken.value = csrfToken;
            toggleModal.show();
        });
    });
    
    // Gestion de la suppression
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    const deleteButtons = document.querySelectorAll('.delete-btn');
    const deleteForm = document.getElementById('deleteForm');
    const deleteToken = document.getElementById('deleteToken');
    const deleteMessage = document.getElementById('deleteMessage');
    
    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const userId = this.dataset.userId;
            const userName = this.dataset.userName;
            const csrfToken = this.dataset.csrfToken;
            
            deleteMessage.innerHTML = `Supprimer définitivement <strong class=\"text-danger\">\${userName}</strong> ?`;
            deleteForm.action = `/admin/user/\${userId}`;
            deleteToken.value = csrfToken;
            deleteModal.show();
        });
    });
});
</script>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
:root {
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --success-gradient: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
    --warning-gradient: linear-gradient(135deg, #fbbf24 0%, #d97706 100%);
    --danger-gradient: linear-gradient(135deg, #f87171 0%, #dc2626 100%);
    --info-gradient: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
    --dark-gradient: linear-gradient(135deg, #1f2937 0%, #111827 100%);
}

/* Header moderne */
.modern-header {
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
    width: 300px;
    height: 300px;
    top: -150px;
    right: -50px;
    animation: float 8s ease-in-out infinite;
}

.shape-2 {
    width: 200px;
    height: 200px;
    bottom: -80px;
    left: -30px;
    animation: float 12s ease-in-out infinite reverse;
}

.shape-3 {
    width: 150px;
    height: 150px;
    top: 50%;
    left: 30%;
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

.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 10px;
}

.stat-card {
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.stat-card:hover {
    transform: translateY(-5px);
    background-color: rgba(255, 255, 255, 0.15) !important;
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

/* Recherche */
.search-wrapper {
    position: relative;
}

.search-icon {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #6c757d;
    z-index: 10;
}

.clear-search {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #6c757d;
    text-decoration: none;
    z-index: 10;
}

.clear-search:hover {
    color: #dc3545;
}

/* Avatar */
.user-avatar {
    position: relative;
    display: inline-block;
}

.owner-badge {
    position: absolute;
    bottom: -2px;
    right: -2px;
    background: linear-gradient(135deg, #fbbf24, #d97706);
    color: white;
    border-radius: 50%;
    padding: 4px;
    font-size: 12px;
    border: 2px solid white;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    animation: pulse 2s infinite;
}

/* Badges */
.role-badge {
    display: inline-flex;
    align-items: center;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 500;
    color: white;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.role-badge:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

.role-badge.bg-gradient-danger { background: var(--danger-gradient); }
.role-badge.bg-gradient-primary { background: var(--primary-gradient); }
.role-badge.bg-gradient-warning { background: var(--warning-gradient); }
.role-badge.bg-gradient-success { background: var(--success-gradient); }
.role-badge.bg-gradient-info { background: var(--info-gradient); }

.status-badge {
    display: inline-flex;
    align-items: center;
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
    background: white;
    border: 1px solid;
    transition: all 0.3s ease;
}

.company-badge {
    display: inline-flex;
    align-items: center;
    padding: 4px 10px;
    background: #f8f9fa;
    border-radius: 20px;
    font-size: 0.85rem;
    color: #495057;
}

/* Boutons d'action */
.action-buttons {
    display: flex;
    gap: 5px;
    justify-content: flex-end;
}

.btn-action {
    width: 35px;
    height: 35px;
    border-radius: 10px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: none;
    background: transparent;
    color: #6c757d;
    transition: all 0.3s ease;
    text-decoration: none;
}

.btn-action:hover {
    transform: translateY(-2px);
    color: white;
}

.btn-view:hover {
    background: var(--info-gradient);
    box-shadow: 0 4px 10px rgba(59, 130, 246, 0.3);
}

.btn-edit:hover {
    background: var(--warning-gradient);
    box-shadow: 0 4px 10px rgba(217, 119, 6, 0.3);
}

.btn-danger:hover {
    background: var(--danger-gradient) !important;
    box-shadow: 0 4px 10px rgba(220, 38, 38, 0.3);
}

.btn-success:hover {
    background: var(--success-gradient) !important;
    box-shadow: 0 4px 10px rgba(56, 161, 105, 0.3);
}

.btn-delete:hover {
    background: var(--danger-gradient) !important;
    box-shadow: 0 4px 10px rgba(220, 38, 38, 0.3);
}

/* Lignes du tableau */
.user-row {
    transition: all 0.3s ease;
    cursor: pointer;
}

.user-row:hover {
    background-color: rgba(102, 126, 234, 0.05) !important;
    transform: scale(1.01);
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.table-inactive {
    background-color: #f8f9fa;
    opacity: 0.8;
}

.table-inactive-company {
    background-color: #2d3748;
    color: white !important;
}

.table-inactive-company .text-muted {
    color: rgba(255,255,255,0.6) !important;
}

.table-warning {
    background-color: #fff3cd;
}

/* Pagination moderne */
.pagination-modern .page-link {
    border: none;
    padding: 8px 16px;
    margin: 0 3px;
    border-radius: 10px;
    color: #4a5568;
    font-weight: 500;
    transition: all 0.3s ease;
    background: transparent;
}

.pagination-modern .page-link:hover {
    background: var(--primary-gradient);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
}

.pagination-modern .page-item.active .page-link {
    background: var(--primary-gradient);
    color: white;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
}

.pagination-modern .page-item.disabled .page-link {
    background: transparent;
    color: #cbd5e0;
}

/* Empty state */
.empty-state {
    padding: 3rem;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-radius: 20px;
}

.empty-state-icon {
    animation: bounce 2s infinite;
}

@keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-20px); }
}

/* Scrollbar personnalisée */
.table-responsive::-webkit-scrollbar {
    width: 8px;
    height: 8px;
}

.table-responsive::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 10px;
}

.table-responsive::-webkit-scrollbar-thumb {
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 10px;
}

.table-responsive::-webkit-scrollbar-thumb:hover {
    background: #667eea;
}

/* Badges de statut */
.badge.bg-warning-subtle {
    background-color: #fef3c7 !important;
    color: #92400e !important;
}

.text-warning-emphasis {
    color: #78350f !important;
}

/* Animations */
@keyframes pulse {
    0% { box-shadow: 0 0 0 0 rgba(251, 191, 36, 0.7); }
    70% { box-shadow: 0 0 0 10px rgba(251, 191, 36, 0); }
    100% { box-shadow: 0 0 0 0 rgba(251, 191, 36, 0); }
}

/* Responsive */
@media (max-width: 768px) {
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .action-buttons {
        flex-wrap: wrap;
    }
    
    .btn-action {
        width: 30px;
        height: 30px;
        font-size: 0.85rem;
    }
}
</style>
{% endblock %}", "admin/user/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\user\\index.html.twig");
    }
}
