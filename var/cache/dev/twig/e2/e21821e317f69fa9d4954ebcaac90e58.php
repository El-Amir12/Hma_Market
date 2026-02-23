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

/* manager/team/index.html.twig */
class __TwigTemplate_a9a52fbf53e174636f841f333b41c9e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manager/team/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manager/team/index.html.twig"));

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

        yield "Mon équipe - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 3, $this->source); })()), "companyName", [], "any", false, false, false, 3), "html", null, true);
        
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
    <!-- Header moderne avec dégradé animé -->
    <div class=\"row mb-5\">
        <div class=\"col-12\">
            <div class=\"modern-header position-relative overflow-hidden rounded-4 shadow-lg\">
                <!-- Éléments décoratifs -->
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
                                    <h1 class=\"display-5 fw-bold text-white mb-2\">Mon équipe</h1>
                                    <div class=\"d-flex align-items-center gap-3 flex-wrap\">
                                        <span class=\"badge bg-white text-primary px-4 py-2 rounded-pill fs-6 shadow-sm\">
                                            <i class=\"bi bi-building me-2\"></i>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 29, $this->source); })()), "companyName", [], "any", false, false, false, 29), "html", null, true);
        yield "
                                        </span>
                                        <span class=\"text-white-50\">
                                            <i class=\"bi bi-people me-1\"></i>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_items"]) || array_key_exists("total_items", $context) ? $context["total_items"] : (function () { throw new RuntimeError('Variable "total_items" does not exist.', 32, $this->source); })()), "html", null, true);
        yield " membres
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <!-- Stats rapides améliorées -->
                            <div class=\"stats-grid\">
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                                    <div class=\"stat-value text-white h3 mb-0 fw-bold\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 42, $this->source); })()), "active", [], "any", false, false, false, 42), "html", null, true);
        yield "</div>
                                    <div class=\"stat-label text-white-50 small\">
                                        <i class=\"bi bi-check-circle-fill text-success me-1\"></i>Actifs
                                    </div>
                                </div>
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                                    <div class=\"stat-value text-white h3 mb-0 fw-bold\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 48, $this->source); })()), "managers", [], "any", false, false, false, 48), "html", null, true);
        yield "</div>
                                    <div class=\"stat-label text-white-50 small\">
                                        <i class=\"bi bi-person-badge-fill text-info me-1\"></i>Managers
                                    </div>
                                </div>
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                                    <div class=\"stat-value text-white h3 mb-0 fw-bold\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 54, $this->source); })()), "stock", [], "any", false, false, false, 54), "html", null, true);
        yield "</div>
                                    <div class=\"stat-label text-white-50 small\">
                                        <i class=\"bi bi-box-seam-fill text-warning me-1\"></i>Stock
                                    </div>
                                </div>
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                                    <div class=\"stat-value text-white h3 mb-0 fw-bold\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 60, $this->source); })()), "cashiers", [], "any", false, false, false, 60), "html", null, true);
        yield "</div>
                                    <div class=\"stat-label text-white-50 small\">
                                        <i class=\"bi bi-cash-stack text-success me-1\"></i>Caissiers
                                    </div>
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

    <!-- Filtres améliorés -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body p-4\">
                    <form method=\"get\" action=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_manager_team_index");
        yield "\" class=\"row g-3\">
                        <div class=\"col-md-5\">
                            <div class=\"search-wrapper\">
                                <i class=\"bi bi-search search-icon\"></i>
                                <input type=\"text\" 
                                       name=\"search\" 
                                       class=\"form-control form-control-lg ps-5 border-0 bg-light\"
                                       placeholder=\"Rechercher un membre de l'équipe...\"
                                       value=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 93, $this->source); })()), "html", null, true);
        yield "\">
                                ";
        // line 94
        if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 94, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 95
            yield "                                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_manager_team_index", ["role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 95, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 95, $this->source); })())]), "html", null, true);
            yield "\" class=\"clear-search\">
                                        <i class=\"bi bi-x-circle-fill\"></i>
                                    </a>
                                ";
        }
        // line 99
        yield "                            </div>
                        </div>
                        
                        <div class=\"col-md-3\">
                            <select name=\"role\" class=\"form-select form-select-lg bg-light border-0\">
                                <option value=\"\">👥 Tous les rôles</option>
                                <option value=\"ROLE_ADMIN\" ";
        // line 105
        yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 105, $this->source); })()) == "ROLE_ADMIN")) ? ("selected") : (""));
        yield ">👑 Administrateurs</option>
                                <option value=\"ROLE_MANAGER\" ";
        // line 106
        yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 106, $this->source); })()) == "ROLE_MANAGER")) ? ("selected") : (""));
        yield ">📊 Gestionnaires</option>
                                <option value=\"ROLE_STOCK_MANAGER\" ";
        // line 107
        yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 107, $this->source); })()) == "ROLE_STOCK_MANAGER")) ? ("selected") : (""));
        yield ">📦 Responsables Stock</option>
                                <option value=\"ROLE_CASHIER\" ";
        // line 108
        yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 108, $this->source); })()) == "ROLE_CASHIER")) ? ("selected") : (""));
        yield ">💶 Caissiers</option>
                            </select>
                        </div>
                        
                        <div class=\"col-md-3\">
                            <select name=\"status\" class=\"form-select form-select-lg bg-light border-0\">
                                <option value=\"\">⚡ Tous les statuts</option>
                                <option value=\"active\" ";
        // line 115
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 115, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">✅ Actifs</option>
                                <option value=\"inactive\" ";
        // line 116
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 116, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">⛔ Désactivés</option>
                            </select>
                        </div>
                        
                        <div class=\"col-12 mt-3\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\">
                                <i class=\"bi bi-funnel me-2\"></i>Filtrer
                            </button>
                            <a href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_manager_team_index");
        yield "\" class=\"btn btn-outline-secondary btn-lg px-5 ms-2\">
                                <i class=\"bi bi-arrow-counterclockwise me-2\"></i>Réinitialiser
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau de l'équipe amélioré -->
    <div class=\"card border-0 shadow-lg\">
        <div class=\"card-header bg-white py-4 border-0\">
            <div class=\"d-flex align-items-center justify-content-between\">
                <h5 class=\"mb-0 fw-bold\">
                    <i class=\"bi bi-people me-2 text-primary\"></i>
                    Membres de l'équipe
                    <span class=\"badge bg-primary ms-2 rounded-pill\">";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_items"]) || array_key_exists("total_items", $context) ? $context["total_items"] : (function () { throw new RuntimeError('Variable "total_items" does not exist.', 141, $this->source); })()), "html", null, true);
        yield "</span>
                </h5>
                <div class=\"text-muted small\">
                    <i class=\"bi bi-mouse me-1\"></i>
                    Survolez pour plus d'options
                </div>
            </div>
        </div>
        
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"bg-light\">
                        <tr>
                            <th class=\"ps-4\" width=\"60\"></th>
                            <th>Membre</th>
                            <th>Rôle</th>
                            <th>Statut</th>
                            <th>Contact</th>
                            <th class=\"text-end pe-4\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 164, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 165
            yield "                            <tr class=\"user-row ";
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("table-inactive") : (""));
            yield "\">
                                <td class=\"ps-4\">
                                    <div class=\"user-avatar\">
                                        ";
            // line 168
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 168)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 169
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 169))), "html", null, true);
                yield "\" 
                                                 alt=\"";
                // line 170
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 170), "html", null, true);
                yield "\" 
                                                 class=\"rounded-circle object-fit-cover\"
                                                 width=\"45\" height=\"45\">
                                        ";
            } else {
                // line 174
                yield "                                            <div class=\"avatar-placeholder rounded-circle d-flex align-items-center justify-content-center\"
                                                 style=\"width: 45px; height: 45px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;\">
                                                <span class=\"fw-bold fs-5\">";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 176))), "html", null, true);
                yield "</span>
                                            </div>
                                        ";
            }
            // line 179
            yield "                                        
                                        ";
            // line 180
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isHmaOwner", [], "any", false, false, false, 180)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 181
                yield "                                            <span class=\"owner-badge\" title=\"Propriétaire\">
                                                <i class=\"bi bi-crown-fill\"></i>
                                            </span>
                                        ";
            }
            // line 185
            yield "                                        
                                        ";
            // line 186
            if (( !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "passwordChanged", [], "any", false, false, false, 186) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isHmaOwner", [], "any", false, false, false, 186))) {
                // line 187
                yield "                                            <span class=\"new-user-badge\" title=\"Première connexion en attente\">
                                                <i class=\"bi bi-star-fill\"></i>
                                            </span>
                                        ";
            }
            // line 191
            yield "                                    </div>
                                </td>
                                
                                <td>
                                    <div class=\"fw-semibold\">";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 195), "html", null, true);
            yield "</div>
                                    <small class=\"text-muted\">";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 196), "html", null, true);
            yield "</small>
                                </td>
                                
                                <td>
                                    ";
            // line 200
            $context["roleConfig"] = ["ROLE_ADMIN" => ["bg" => "danger-gradient", "icon" => "bi-shield-shaded", "label" => "Administrateur"], "ROLE_MANAGER" => ["bg" => "primary-gradient", "icon" => "bi-graph-up", "label" => "Gestionnaire"], "ROLE_STOCK_MANAGER" => ["bg" => "warning-gradient", "icon" => "bi-box-seam", "label" => "Stock"], "ROLE_CASHIER" => ["bg" => "success-gradient", "icon" => "bi-cash-coin", "label" => "Caissier"]];
            // line 206
            yield "                                    
                                    ";
            // line 207
            $context["role"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 207), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return ((isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 207, $this->source); })()) != "ROLE_USER"); }));
            // line 208
            yield "                                    ";
            $context["config"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["roleConfig"] ?? null), (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 208, $this->source); })()), [], "array", true, true, false, 208) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["roleConfig"]) || array_key_exists("roleConfig", $context) ? $context["roleConfig"] : (function () { throw new RuntimeError('Variable "roleConfig" does not exist.', 208, $this->source); })()), (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 208, $this->source); })()), [], "array", false, false, false, 208)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["roleConfig"]) || array_key_exists("roleConfig", $context) ? $context["roleConfig"] : (function () { throw new RuntimeError('Variable "roleConfig" does not exist.', 208, $this->source); })()), (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 208, $this->source); })()), [], "array", false, false, false, 208)) : (["bg" => "secondary-gradient", "icon" => "bi-person", "label" => "Utilisateur"]));
            // line 209
            yield "                                    
                                    <span class=\"role-badge ";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 210, $this->source); })()), "bg", [], "any", false, false, false, 210), "html", null, true);
            yield "\">
                                        <i class=\"bi ";
            // line 211
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 211, $this->source); })()), "icon", [], "any", false, false, false, 211), "html", null, true);
            yield " me-1\"></i>
                                        ";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 212, $this->source); })()), "label", [], "any", false, false, false, 212), "html", null, true);
            yield "
                                    </span>
                                </td>
                                
                                <td>
                                    ";
            // line 217
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 217)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 218
                yield "                                        <span class=\"status-badge status-active\">
                                            <i class=\"bi bi-check-circle-fill me-1\"></i>Actif
                                        </span>
                                    ";
            } else {
                // line 222
                yield "                                        <span class=\"status-badge status-inactive\">
                                            <i class=\"bi bi-x-circle-fill me-1\"></i>Inactif
                                        </span>
                                    ";
            }
            // line 226
            yield "                                </td>
                                
                                <td>
                                    <div class=\"contact-info\">
                                        <a href=\"mailto:";
            // line 230
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 230), "html", null, true);
            yield "\" class=\"text-decoration-none text-dark\">
                                            <i class=\"bi bi-envelope-fill text-primary me-1\"></i>
                                            <span class=\"small\">";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 232), "html", null, true);
            yield "</span>
                                        </a>
                                        <br>
                                        <a href=\"tel:";
            // line 235
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 235), "html", null, true);
            yield "\" class=\"text-decoration-none text-dark\">
                                            <i class=\"bi bi-telephone-fill text-success me-1\"></i>
                                            <span class=\"small\">";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 237), "html", null, true);
            yield "</span>
                                        </a>
                                    </div>
                                </td>
                                
                                <td class=\"text-end pe-4\">
                                    <div class=\"action-buttons\">
                                        <a href=\"";
            // line 244
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_manager_team_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 244)]), "html", null, true);
            yield "\" 
                                           class=\"btn-action btn-view\" 
                                           title=\"Voir les détails\">
                                            <i class=\"bi bi-eye-fill\"></i>
                                        </a>
                                        
                                        ";
            // line 250
            if ((((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 250) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 250, $this->source); })()), "id", [], "any", false, false, false, 250)) || CoreExtension::getAttribute($this->env, $this->source,             // line 251
(isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 251, $this->source); })()), "hasRole", ["ROLE_ADMIN"], "method", false, false, false, 251)) || ((CoreExtension::getAttribute($this->env, $this->source,             // line 252
(isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 252, $this->source); })()), "hasRole", ["ROLE_MANAGER"], "method", false, false, false, 252) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "hasRole", ["ROLE_ADMIN"], "method", false, false, false, 252)) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "hasRole", ["ROLE_MANAGER"], "method", false, false, false, 252)))) {
                // line 253
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_manager_team_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 253)]), "html", null, true);
                yield "\" 
                                               class=\"btn-action btn-edit\" 
                                               title=\"Modifier\">
                                                <i class=\"bi bi-pencil-fill\"></i>
                                            </a>
                                        ";
            }
            // line 259
            yield "                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 262
        if (!$context['_iterated']) {
            // line 263
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center py-5\">
                                    <div class=\"empty-state\">
                                        <div class=\"empty-state-icon mb-4\">
                                            <i class=\"bi bi-people-fill display-1 text-muted\"></i>
                                        </div>
                                        <h4 class=\"text-muted mb-3\">Aucun membre trouvé</h4>
                                        <p class=\"text-muted mb-4\">Aucun utilisateur ne correspond à vos critères</p>
                                        <a href=\"";
            // line 271
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_manager_team_index");
            yield "\" class=\"btn btn-primary btn-lg px-5\">
                                            <i class=\"bi bi-arrow-counterclockwise me-2\"></i>Réinitialiser les filtres
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
        yield "                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Pagination améliorée -->
        ";
        // line 284
        if (((isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 284, $this->source); })()) > 1)) {
            // line 285
            yield "        <div class=\"card-footer bg-white py-3 border-0\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"text-muted small\">
                    <i class=\"bi bi-layout-text-window me-1\"></i>
                    Page ";
            // line 289
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 289, $this->source); })()), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 289, $this->source); })()), "html", null, true);
            yield " • 
                    ";
            // line 290
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 290, $this->source); })()) - 1) * 10) + 1), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min(((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 290, $this->source); })()) * 10), (isset($context["total_items"]) || array_key_exists("total_items", $context) ? $context["total_items"] : (function () { throw new RuntimeError('Variable "total_items" does not exist.', 290, $this->source); })())), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_items"]) || array_key_exists("total_items", $context) ? $context["total_items"] : (function () { throw new RuntimeError('Variable "total_items" does not exist.', 290, $this->source); })()), "html", null, true);
            yield " membres
                </div>
                <nav aria-label=\"Pagination\">
                    <ul class=\"pagination pagination-modern mb-0\">
                        <li class=\"page-item ";
            // line 294
            yield ((((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 294, $this->source); })()) <= 1)) ? ("disabled") : (""));
            yield "\">
                            <a class=\"page-link\" href=\"";
            // line 295
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_manager_team_index", ["page" => ((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 295, $this->source); })()) - 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 295, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 295, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 295, $this->source); })())]), "html", null, true);
            yield "\">
                                <i class=\"bi bi-chevron-left\"></i>
                            </a>
                        </li>
                        
                        ";
            // line 300
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 300, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 301
                yield "                            <li class=\"page-item ";
                yield ((($context["i"] == (isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 301, $this->source); })()))) ? ("active") : (""));
                yield "\">
                                <a class=\"page-link\" href=\"";
                // line 302
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_manager_team_index", ["page" => $context["i"], "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 302, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 302, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 302, $this->source); })())]), "html", null, true);
                yield "\">
                                    ";
                // line 303
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "
                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 307
            yield "                        
                        <li class=\"page-item ";
            // line 308
            yield ((((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 308, $this->source); })()) >= (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 308, $this->source); })()))) ? ("disabled") : (""));
            yield "\">
                            <a class=\"page-link\" href=\"";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_manager_team_index", ["page" => ((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 309, $this->source); })()) + 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 309, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 309, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 309, $this->source); })())]), "html", null, true);
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
        // line 318
        yield "    </div>
</div>

<style>
:root {
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --danger-gradient: linear-gradient(135deg, #f87171 0%, #dc2626 100%);
    --success-gradient: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
    --warning-gradient: linear-gradient(135deg, #fbbf24 0%, #d97706 100%);
    --info-gradient: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
    --secondary-gradient: linear-gradient(135deg, #9ca3af 0%, #6b7280 100%);
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
    color: #dc3545;
    text-decoration: none;
    z-index: 10;
}

.clear-search:hover {
    transform: translateY(-50%) scale(1.1);
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
}

.new-user-badge {
    position: absolute;
    top: -2px;
    left: -2px;
    background: linear-gradient(135deg, #60a5fa, #3b82f6);
    color: white;
    border-radius: 50%;
    padding: 4px;
    font-size: 10px;
    border: 2px solid white;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}

/* Badges de rôle améliorés */
.role-badge {
    display: inline-flex;
    align-items: center;
    padding: 8px 14px;
    border-radius: 30px;
    font-size: 0.85rem;
    font-weight: 600;
    color: white;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    border: 1px solid rgba(255,255,255,0.2);
    letter-spacing: 0.3px;
}

.role-badge:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.15);
}

.role-badge i {
    font-size: 0.9rem;
    margin-right: 6px;
}

.danger-gradient { background: var(--danger-gradient); }
.primary-gradient { background: var(--primary-gradient); }
.warning-gradient { background: var(--warning-gradient); }
.success-gradient { background: var(--success-gradient); }
.info-gradient { background: var(--info-gradient); }
.secondary-gradient { background: var(--secondary-gradient); }

/* Badges de statut */
.status-badge {
    display: inline-flex;
    align-items: center;
    padding: 6px 12px;
    border-radius: 30px;
    font-size: 0.8rem;
    font-weight: 500;
    background: white;
    border: 1px solid;
    transition: all 0.3s ease;
}

.status-active {
    color: #38a169;
    border-color: #38a169;
    background: rgba(72, 187, 120, 0.1);
}

.status-inactive {
    color: #dc2626;
    border-color: #dc2626;
    background: rgba(220, 38, 38, 0.1);
}

/* Boutons d'action */
.action-buttons {
    display: flex;
    gap: 8px;
    justify-content: flex-end;
}

.btn-action {
    width: 38px;
    height: 38px;
    border-radius: 12px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: none;
    background: transparent;
    color: #6c757d;
    transition: all 0.3s ease;
    text-decoration: none;
    position: relative;
    overflow: hidden;
}

.btn-action::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(255,255,255,0.5);
    transform: translate(-50%, -50%);
    transition: width 0.3s, height 0.3s;
}

.btn-action:hover::before {
    width: 100%;
    height: 100%;
}

.btn-action:hover {
    transform: translateY(-3px);
    color: white;
    box-shadow: 0 6px 15px rgba(0,0,0,0.2);
}

.btn-view:hover {
    background: var(--info-gradient);
}

.btn-edit:hover {
    background: var(--warning-gradient);
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

/* Pagination moderne */
.pagination-modern .page-link {
    border: none;
    padding: 8px 16px;
    margin: 0 3px;
    border-radius: 12px;
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

/* Contact info */
.contact-info a {
    transition: color 0.3s ease;
}

.contact-info a:hover {
    color: #667eea !important;
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

/* Responsive */
@media (max-width: 768px) {
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .action-buttons {
        flex-wrap: wrap;
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
        return "manager/team/index.html.twig";
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
        return array (  608 => 318,  596 => 309,  592 => 308,  589 => 307,  579 => 303,  575 => 302,  570 => 301,  566 => 300,  558 => 295,  554 => 294,  543 => 290,  537 => 289,  531 => 285,  529 => 284,  521 => 278,  508 => 271,  498 => 263,  496 => 262,  489 => 259,  479 => 253,  477 => 252,  476 => 251,  475 => 250,  466 => 244,  456 => 237,  451 => 235,  445 => 232,  440 => 230,  434 => 226,  428 => 222,  422 => 218,  420 => 217,  412 => 212,  408 => 211,  404 => 210,  401 => 209,  398 => 208,  396 => 207,  393 => 206,  391 => 200,  384 => 196,  380 => 195,  374 => 191,  368 => 187,  366 => 186,  363 => 185,  357 => 181,  355 => 180,  352 => 179,  346 => 176,  342 => 174,  335 => 170,  330 => 169,  328 => 168,  321 => 165,  316 => 164,  290 => 141,  270 => 124,  259 => 116,  255 => 115,  245 => 108,  241 => 107,  237 => 106,  233 => 105,  225 => 99,  217 => 95,  215 => 94,  211 => 93,  200 => 85,  172 => 60,  163 => 54,  154 => 48,  145 => 42,  132 => 32,  126 => 29,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon équipe - {{ company.companyName }}{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- Header moderne avec dégradé animé -->
    <div class=\"row mb-5\">
        <div class=\"col-12\">
            <div class=\"modern-header position-relative overflow-hidden rounded-4 shadow-lg\">
                <!-- Éléments décoratifs -->
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
                                    <h1 class=\"display-5 fw-bold text-white mb-2\">Mon équipe</h1>
                                    <div class=\"d-flex align-items-center gap-3 flex-wrap\">
                                        <span class=\"badge bg-white text-primary px-4 py-2 rounded-pill fs-6 shadow-sm\">
                                            <i class=\"bi bi-building me-2\"></i>{{ company.companyName }}
                                        </span>
                                        <span class=\"text-white-50\">
                                            <i class=\"bi bi-people me-1\"></i>{{ total_items }} membres
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <!-- Stats rapides améliorées -->
                            <div class=\"stats-grid\">
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                                    <div class=\"stat-value text-white h3 mb-0 fw-bold\">{{ stats.active }}</div>
                                    <div class=\"stat-label text-white-50 small\">
                                        <i class=\"bi bi-check-circle-fill text-success me-1\"></i>Actifs
                                    </div>
                                </div>
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                                    <div class=\"stat-value text-white h3 mb-0 fw-bold\">{{ stats.managers }}</div>
                                    <div class=\"stat-label text-white-50 small\">
                                        <i class=\"bi bi-person-badge-fill text-info me-1\"></i>Managers
                                    </div>
                                </div>
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                                    <div class=\"stat-value text-white h3 mb-0 fw-bold\">{{ stats.stock }}</div>
                                    <div class=\"stat-label text-white-50 small\">
                                        <i class=\"bi bi-box-seam-fill text-warning me-1\"></i>Stock
                                    </div>
                                </div>
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                                    <div class=\"stat-value text-white h3 mb-0 fw-bold\">{{ stats.cashiers }}</div>
                                    <div class=\"stat-label text-white-50 small\">
                                        <i class=\"bi bi-cash-stack text-success me-1\"></i>Caissiers
                                    </div>
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

    <!-- Filtres améliorés -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body p-4\">
                    <form method=\"get\" action=\"{{ path('app_manager_team_index') }}\" class=\"row g-3\">
                        <div class=\"col-md-5\">
                            <div class=\"search-wrapper\">
                                <i class=\"bi bi-search search-icon\"></i>
                                <input type=\"text\" 
                                       name=\"search\" 
                                       class=\"form-control form-control-lg ps-5 border-0 bg-light\"
                                       placeholder=\"Rechercher un membre de l'équipe...\"
                                       value=\"{{ search }}\">
                                {% if search %}
                                    <a href=\"{{ path('app_manager_team_index', {role: role, status: status}) }}\" class=\"clear-search\">
                                        <i class=\"bi bi-x-circle-fill\"></i>
                                    </a>
                                {% endif %}
                            </div>
                        </div>
                        
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
                            </select>
                        </div>
                        
                        <div class=\"col-12 mt-3\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\">
                                <i class=\"bi bi-funnel me-2\"></i>Filtrer
                            </button>
                            <a href=\"{{ path('app_manager_team_index') }}\" class=\"btn btn-outline-secondary btn-lg px-5 ms-2\">
                                <i class=\"bi bi-arrow-counterclockwise me-2\"></i>Réinitialiser
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau de l'équipe amélioré -->
    <div class=\"card border-0 shadow-lg\">
        <div class=\"card-header bg-white py-4 border-0\">
            <div class=\"d-flex align-items-center justify-content-between\">
                <h5 class=\"mb-0 fw-bold\">
                    <i class=\"bi bi-people me-2 text-primary\"></i>
                    Membres de l'équipe
                    <span class=\"badge bg-primary ms-2 rounded-pill\">{{ total_items }}</span>
                </h5>
                <div class=\"text-muted small\">
                    <i class=\"bi bi-mouse me-1\"></i>
                    Survolez pour plus d'options
                </div>
            </div>
        </div>
        
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"bg-light\">
                        <tr>
                            <th class=\"ps-4\" width=\"60\"></th>
                            <th>Membre</th>
                            <th>Rôle</th>
                            <th>Statut</th>
                            <th>Contact</th>
                            <th class=\"text-end pe-4\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for user in users %}
                            <tr class=\"user-row {{ not user.isActive ? 'table-inactive' }}\">
                                <td class=\"ps-4\">
                                    <div class=\"user-avatar\">
                                        {% if user.photo %}
                                            <img src=\"{{ asset('uploads/users/' ~ user.photo) }}\" 
                                                 alt=\"{{ user.fullName }}\" 
                                                 class=\"rounded-circle object-fit-cover\"
                                                 width=\"45\" height=\"45\">
                                        {% else %}
                                            <div class=\"avatar-placeholder rounded-circle d-flex align-items-center justify-content-center\"
                                                 style=\"width: 45px; height: 45px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;\">
                                                <span class=\"fw-bold fs-5\">{{ user.fullName|first|upper }}</span>
                                            </div>
                                        {% endif %}
                                        
                                        {% if user.isHmaOwner %}
                                            <span class=\"owner-badge\" title=\"Propriétaire\">
                                                <i class=\"bi bi-crown-fill\"></i>
                                            </span>
                                        {% endif %}
                                        
                                        {% if not user.passwordChanged and not user.isHmaOwner %}
                                            <span class=\"new-user-badge\" title=\"Première connexion en attente\">
                                                <i class=\"bi bi-star-fill\"></i>
                                            </span>
                                        {% endif %}
                                    </div>
                                </td>
                                
                                <td>
                                    <div class=\"fw-semibold\">{{ user.fullName }}</div>
                                    <small class=\"text-muted\">{{ user.email }}</small>
                                </td>
                                
                                <td>
                                    {% set roleConfig = {
                                        'ROLE_ADMIN': {bg: 'danger-gradient', icon: 'bi-shield-shaded', label: 'Administrateur'},
                                        'ROLE_MANAGER': {bg: 'primary-gradient', icon: 'bi-graph-up', label: 'Gestionnaire'},
                                        'ROLE_STOCK_MANAGER': {bg: 'warning-gradient', icon: 'bi-box-seam', label: 'Stock'},
                                        'ROLE_CASHIER': {bg: 'success-gradient', icon: 'bi-cash-coin', label: 'Caissier'}
                                    } %}
                                    
                                    {% set role = user.roles|filter(r => r != 'ROLE_USER')|first %}
                                    {% set config = roleConfig[role] ?? {bg: 'secondary-gradient', icon: 'bi-person', label: 'Utilisateur'} %}
                                    
                                    <span class=\"role-badge {{ config.bg }}\">
                                        <i class=\"bi {{ config.icon }} me-1\"></i>
                                        {{ config.label }}
                                    </span>
                                </td>
                                
                                <td>
                                    {% if user.isActive %}
                                        <span class=\"status-badge status-active\">
                                            <i class=\"bi bi-check-circle-fill me-1\"></i>Actif
                                        </span>
                                    {% else %}
                                        <span class=\"status-badge status-inactive\">
                                            <i class=\"bi bi-x-circle-fill me-1\"></i>Inactif
                                        </span>
                                    {% endif %}
                                </td>
                                
                                <td>
                                    <div class=\"contact-info\">
                                        <a href=\"mailto:{{ user.email }}\" class=\"text-decoration-none text-dark\">
                                            <i class=\"bi bi-envelope-fill text-primary me-1\"></i>
                                            <span class=\"small\">{{ user.email }}</span>
                                        </a>
                                        <br>
                                        <a href=\"tel:{{ user.phone }}\" class=\"text-decoration-none text-dark\">
                                            <i class=\"bi bi-telephone-fill text-success me-1\"></i>
                                            <span class=\"small\">{{ user.phone }}</span>
                                        </a>
                                    </div>
                                </td>
                                
                                <td class=\"text-end pe-4\">
                                    <div class=\"action-buttons\">
                                        <a href=\"{{ path('app_manager_team_show', {'id': user.id}) }}\" 
                                           class=\"btn-action btn-view\" 
                                           title=\"Voir les détails\">
                                            <i class=\"bi bi-eye-fill\"></i>
                                        </a>
                                        
                                        {% if user.id == current_user.id or 
                                              current_user.hasRole('ROLE_ADMIN') or 
                                              (current_user.hasRole('ROLE_MANAGER') and not user.hasRole('ROLE_ADMIN') and not user.hasRole('ROLE_MANAGER')) %}
                                            <a href=\"{{ path('app_manager_team_edit', {'id': user.id}) }}\" 
                                               class=\"btn-action btn-edit\" 
                                               title=\"Modifier\">
                                                <i class=\"bi bi-pencil-fill\"></i>
                                            </a>
                                        {% endif %}
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"6\" class=\"text-center py-5\">
                                    <div class=\"empty-state\">
                                        <div class=\"empty-state-icon mb-4\">
                                            <i class=\"bi bi-people-fill display-1 text-muted\"></i>
                                        </div>
                                        <h4 class=\"text-muted mb-3\">Aucun membre trouvé</h4>
                                        <p class=\"text-muted mb-4\">Aucun utilisateur ne correspond à vos critères</p>
                                        <a href=\"{{ path('app_manager_team_index') }}\" class=\"btn btn-primary btn-lg px-5\">
                                            <i class=\"bi bi-arrow-counterclockwise me-2\"></i>Réinitialiser les filtres
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Pagination améliorée -->
        {% if total_pages > 1 %}
        <div class=\"card-footer bg-white py-3 border-0\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"text-muted small\">
                    <i class=\"bi bi-layout-text-window me-1\"></i>
                    Page {{ current_page }} sur {{ total_pages }} • 
                    {{ ((current_page - 1) * 10) + 1 }} - {{ min(current_page * 10, total_items) }} sur {{ total_items }} membres
                </div>
                <nav aria-label=\"Pagination\">
                    <ul class=\"pagination pagination-modern mb-0\">
                        <li class=\"page-item {{ current_page <= 1 ? 'disabled' }}\">
                            <a class=\"page-link\" href=\"{{ path('app_manager_team_index', {page: current_page - 1, search: search, role: role, status: status}) }}\">
                                <i class=\"bi bi-chevron-left\"></i>
                            </a>
                        </li>
                        
                        {% for i in 1..total_pages %}
                            <li class=\"page-item {{ i == current_page ? 'active' }}\">
                                <a class=\"page-link\" href=\"{{ path('app_manager_team_index', {page: i, search: search, role: role, status: status}) }}\">
                                    {{ i }}
                                </a>
                            </li>
                        {% endfor %}
                        
                        <li class=\"page-item {{ current_page >= total_pages ? 'disabled' }}\">
                            <a class=\"page-link\" href=\"{{ path('app_manager_team_index', {page: current_page + 1, search: search, role: role, status: status}) }}\">
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

<style>
:root {
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --danger-gradient: linear-gradient(135deg, #f87171 0%, #dc2626 100%);
    --success-gradient: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
    --warning-gradient: linear-gradient(135deg, #fbbf24 0%, #d97706 100%);
    --info-gradient: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
    --secondary-gradient: linear-gradient(135deg, #9ca3af 0%, #6b7280 100%);
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
    color: #dc3545;
    text-decoration: none;
    z-index: 10;
}

.clear-search:hover {
    transform: translateY(-50%) scale(1.1);
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
}

.new-user-badge {
    position: absolute;
    top: -2px;
    left: -2px;
    background: linear-gradient(135deg, #60a5fa, #3b82f6);
    color: white;
    border-radius: 50%;
    padding: 4px;
    font-size: 10px;
    border: 2px solid white;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}

/* Badges de rôle améliorés */
.role-badge {
    display: inline-flex;
    align-items: center;
    padding: 8px 14px;
    border-radius: 30px;
    font-size: 0.85rem;
    font-weight: 600;
    color: white;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    border: 1px solid rgba(255,255,255,0.2);
    letter-spacing: 0.3px;
}

.role-badge:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.15);
}

.role-badge i {
    font-size: 0.9rem;
    margin-right: 6px;
}

.danger-gradient { background: var(--danger-gradient); }
.primary-gradient { background: var(--primary-gradient); }
.warning-gradient { background: var(--warning-gradient); }
.success-gradient { background: var(--success-gradient); }
.info-gradient { background: var(--info-gradient); }
.secondary-gradient { background: var(--secondary-gradient); }

/* Badges de statut */
.status-badge {
    display: inline-flex;
    align-items: center;
    padding: 6px 12px;
    border-radius: 30px;
    font-size: 0.8rem;
    font-weight: 500;
    background: white;
    border: 1px solid;
    transition: all 0.3s ease;
}

.status-active {
    color: #38a169;
    border-color: #38a169;
    background: rgba(72, 187, 120, 0.1);
}

.status-inactive {
    color: #dc2626;
    border-color: #dc2626;
    background: rgba(220, 38, 38, 0.1);
}

/* Boutons d'action */
.action-buttons {
    display: flex;
    gap: 8px;
    justify-content: flex-end;
}

.btn-action {
    width: 38px;
    height: 38px;
    border-radius: 12px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: none;
    background: transparent;
    color: #6c757d;
    transition: all 0.3s ease;
    text-decoration: none;
    position: relative;
    overflow: hidden;
}

.btn-action::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(255,255,255,0.5);
    transform: translate(-50%, -50%);
    transition: width 0.3s, height 0.3s;
}

.btn-action:hover::before {
    width: 100%;
    height: 100%;
}

.btn-action:hover {
    transform: translateY(-3px);
    color: white;
    box-shadow: 0 6px 15px rgba(0,0,0,0.2);
}

.btn-view:hover {
    background: var(--info-gradient);
}

.btn-edit:hover {
    background: var(--warning-gradient);
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

/* Pagination moderne */
.pagination-modern .page-link {
    border: none;
    padding: 8px 16px;
    margin: 0 3px;
    border-radius: 12px;
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

/* Contact info */
.contact-info a {
    transition: color 0.3s ease;
}

.contact-info a:hover {
    color: #667eea !important;
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

/* Responsive */
@media (max-width: 768px) {
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .action-buttons {
        flex-wrap: wrap;
    }
}
</style>
{% endblock %}", "manager/team/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\manager\\team\\index.html.twig");
    }
}
