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
class __TwigTemplate_ba77873acb2257281d8cd0afa30f73dd extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/index.html.twig"));

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

        yield "Gestion des utilisateurs - HMA Market";
        
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
        yield "<div class=\"container-fluid px-4\">
    <!-- Header moderne -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"modern-header position-relative overflow-hidden rounded-4 shadow-lg\">
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
        // line 27
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 27, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "                                            <span class=\"badge bg-white text-primary px-4 py-2 rounded-pill fs-6\">
                                                <i class=\"bi bi-shield-shaded me-2\"></i>Super Administrateur
                                            </span>
                                            <span class=\"text-white-50\"><i class=\"bi bi-building me-1\"></i>Toutes les entreprises</span>
                                        ";
        } else {
            // line 33
            yield "                                            <span class=\"badge bg-white text-success px-4 py-2 rounded-pill fs-6\">
                                                <i class=\"bi bi-building me-2\"></i>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "companyDisplayName", [], "any", false, false, false, 34), "html", null, true);
            yield "
                                            </span>
                                        ";
        }
        // line 37
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"stats-grid\">
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                                    <div class=\"stat-value text-white h3 mb-0 fw-bold\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 44, $this->source); })()), "total", [], "any", false, false, false, 44), "html", null, true);
        yield "</div>
                                    <div class=\"stat-label text-white-50 small\">Total</div>
                                </div>
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                                    <div class=\"stat-value text-success h3 mb-0 fw-bold\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 48, $this->source); })()), "active", [], "any", false, false, false, 48), "html", null, true);
        yield "</div>
                                    <div class=\"stat-label text-white-50 small\">Actifs</div>
                                </div>
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                                    <div class=\"stat-value text-warning h3 mb-0 fw-bold\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 52, $this->source); })()), "inactiveByAdmin", [], "any", false, false, false, 52), "html", null, true);
        yield "</div>
                                    <div class=\"stat-label text-white-50 small\">Inactifs</div>
                                </div>
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                                    <div class=\"stat-value text-danger h3 mb-0 fw-bold\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 56, $this->source); })()), "outOfQuota", [], "any", false, false, false, 56), "html", null, true);
        yield "</div>
                                    <div class=\"stat-label text-white-50 small\">Hors quota</div>
                                </div>
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

    <!-- Statistiques filtrées (pleine largeur) -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3 d-flex align-items-center\">
                    <i class=\"bi bi-funnel me-2 text-primary fs-4\"></i>
                    <h5 class=\"mb-0 fw-bold\">Statistiques selon les filtres</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3 row-cols-2 row-cols-md-4 ";
        // line 81
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 81, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "row-cols-xl-5";
        } else {
            yield "row-cols-xl-4";
        }
        yield "\">
                        <div class=\"col\">
                            <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <span class=\"text-muted text-uppercase small fw-bold\">Filtrés</span>
                                        <h3 class=\"mb-0 fw-bold\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFiltered"]) || array_key_exists("totalFiltered", $context) ? $context["totalFiltered"] : (function () { throw new RuntimeError('Variable "totalFiltered" does not exist.', 87, $this->source); })()), "html", null, true);
        yield "</h3>
                                    </div>
                                    <div class=\"bg-primary bg-opacity-10 p-3 rounded-3\">
                                        <i class=\"bi bi-people text-white fs-2\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col\">
                            <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <span class=\"text-muted text-uppercase small fw-bold\">Actifs</span>
                                        <h3 class=\"mb-0 fw-bold text-success\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeFiltered"]) || array_key_exists("activeFiltered", $context) ? $context["activeFiltered"] : (function () { throw new RuntimeError('Variable "activeFiltered" does not exist.', 100, $this->source); })()), "html", null, true);
        yield "</h3>
                                    </div>
                                    <div class=\"bg-success bg-opacity-10 p-3 rounded-3\">
                                        <i class=\"bi bi-check-circle text-white fs-2\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col\">
                            <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <span class=\"text-muted text-uppercase small fw-bold\">Inactifs</span>
                                        <h3 class=\"mb-0 fw-bold text-danger\">";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactiveFiltered"]) || array_key_exists("inactiveFiltered", $context) ? $context["inactiveFiltered"] : (function () { throw new RuntimeError('Variable "inactiveFiltered" does not exist.', 113, $this->source); })()), "html", null, true);
        yield "</h3>
                                    </div>
                                    <div class=\"bg-danger bg-opacity-10 p-3 rounded-3\">
                                        <i class=\"bi bi-pause-circle text-white fs-2\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col\">
                            <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <span class=\"text-muted text-uppercase small fw-bold\">Hors quota</span>
                                        <h3 class=\"mb-0 fw-bold text-warning\">";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["outOfQuotaFiltered"]) || array_key_exists("outOfQuotaFiltered", $context) ? $context["outOfQuotaFiltered"] : (function () { throw new RuntimeError('Variable "outOfQuotaFiltered" does not exist.', 126, $this->source); })()), "html", null, true);
        yield "</h3>
                                    </div>
                                    <div class=\"bg-warning bg-opacity-10 p-3 rounded-3\">
                                        <i class=\"bi bi-exclamation-triangle text-white fs-2\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 134
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 134, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 135
            yield "                        <div class=\"col\">
                            <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <span class=\"text-muted text-uppercase small fw-bold\">Bloqués</span>
                                        <h3 class=\"mb-0 fw-bold text-dark\">";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["blockedFiltered"]) || array_key_exists("blockedFiltered", $context) ? $context["blockedFiltered"] : (function () { throw new RuntimeError('Variable "blockedFiltered" does not exist.', 140, $this->source); })()), "html", null, true);
            yield "</h3>
                                    </div>
                                    <div class=\"bg-dark bg-opacity-10 p-3 rounded-3\">
                                        <i class=\"bi bi-lock text-white fs-2\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 149
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres avancés (pleine largeur) -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3 d-flex align-items-center justify-content-between\">
                    <h5 class=\"mb-0 fw-bold\"><i class=\"bi bi-sliders2 me-2\"></i>Filtres avancés</h5>
                    ";
        // line 161
        if (((isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 161, $this->source); })()) || (isset($context["can_add_user"]) || array_key_exists("can_add_user", $context) ? $context["can_add_user"] : (function () { throw new RuntimeError('Variable "can_add_user" does not exist.', 161, $this->source); })()))) {
            // line 162
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
            yield "\" class=\"btn btn-success\">
                            <i class=\"bi bi-person-plus-fill me-2\"></i>Nouvel utilisateur
                        </a>
                    ";
        } else {
            // line 166
            yield "                        <button type=\"button\" class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#quotaReachedModal\">
                            <i class=\"bi bi-person-plus-fill me-2\"></i>Limite atteinte
                        </button>
                    ";
        }
        // line 170
        yield "                </div>
                <div class=\"card-body\">
                    <form method=\"get\" action=\"";
        // line 172
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"row g-3\">
                        <div class=\"col-md-";
        // line 173
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 173, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "4";
        } else {
            yield "5";
        }
        yield "\">
                            <label for=\"search\" class=\"form-label fw-bold\">Rechercher</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-light border-0\"><i class=\"bi bi-search\"></i></span>
                                <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control bg-light border-0\" placeholder=\"Nom, email, téléphone...\" value=\"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 177, $this->source); })()), "html", null, true);
        yield "\">
                                ";
        // line 178
        if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 178, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 179
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 179, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 179, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 179, $this->source); })()), "company" => (isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 179, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn btn-outline-secondary border-0\" title=\"Effacer\">
                                    <i class=\"bi bi-x-circle\"></i>
                                </a>
                                ";
        }
        // line 183
        yield "                            </div>
                        </div>
                        
                        ";
        // line 186
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 186, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 187
            yield "                        <div class=\"col-md-3\">
                            <label for=\"company\" class=\"form-label fw-bold\">Entreprise</label>
                            <select name=\"company\" id=\"company\" class=\"form-select bg-light border-0\">
                                <option value=\"\">Toutes</option>
                                ";
            // line 191
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 191, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
                // line 192
                yield "                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 192), "html", null, true);
                yield "\" ";
                yield ((((isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 192, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 192))) ? ("selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 192), "html", null, true);
                yield "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['company'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            yield "                            </select>
                        </div>
                        ";
        }
        // line 197
        yield "                        
                        <div class=\"col-md-";
        // line 198
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 198, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "3";
        } else {
            yield "4";
        }
        yield "\">
                            <label for=\"role\" class=\"form-label fw-bold\">Rôle</label>
                            <select name=\"role\" id=\"role\" class=\"form-select bg-light border-0\">
                                <option value=\"\">Tous</option>
                                <option value=\"ROLE_ADMIN\" ";
        // line 202
        yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 202, $this->source); })()) == "ROLE_ADMIN")) ? ("selected") : (""));
        yield ">Administrateurs</option>
                                <option value=\"ROLE_MANAGER\" ";
        // line 203
        yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 203, $this->source); })()) == "ROLE_MANAGER")) ? ("selected") : (""));
        yield ">Gestionnaires</option>
                                <option value=\"ROLE_STOCK_MANAGER\" ";
        // line 204
        yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 204, $this->source); })()) == "ROLE_STOCK_MANAGER")) ? ("selected") : (""));
        yield ">Responsables Stock</option>
                                <option value=\"ROLE_CASHIER\" ";
        // line 205
        yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 205, $this->source); })()) == "ROLE_CASHIER")) ? ("selected") : (""));
        yield ">Caissiers</option>
                            </select>
                        </div>
                        
                        <div class=\"col-md-2\">
                            <label for=\"status\" class=\"form-label fw-bold\">Statut</label>
                            <select name=\"status\" id=\"status\" class=\"form-select bg-light border-0\">
                                <option value=\"\">Tous</option>
                                <option value=\"active\" ";
        // line 213
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 213, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                                <option value=\"inactive\" ";
        // line 214
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 214, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Désactivés</option>
                                <option value=\"quota\" ";
        // line 215
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 215, $this->source); })()) == "quota")) ? ("selected") : (""));
        yield ">Hors quota</option>
                                ";
        // line 216
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 216, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 217
            yield "                                <option value=\"blocked\" ";
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 217, $this->source); })()) == "blocked")) ? ("selected") : (""));
            yield ">Bloqués</option>
                                ";
        }
        // line 219
        yield "                            </select>
                        </div>
                        
                        <div class=\"col-12 d-flex justify-content-end gap-2 mt-4\">
                            <a href=\"";
        // line 223
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-outline-secondary px-4\">
                                <i class=\"bi bi-arrow-counterclockwise me-2\"></i>Effacer
                            </a>
                            <button type=\"submit\" class=\"btn btn-primary px-5\">
                                <i class=\"bi bi-funnel me-2\"></i>Filtrer
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des utilisateurs -->
    <div class=\"card border-0 shadow-lg\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-bold\">
                <i class=\"bi bi-table me-2 text-primary\"></i>
                Liste des utilisateurs
                <span class=\"badge bg-primary ms-2 rounded-pill\">";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 242, $this->source); })()), "html", null, true);
        yield "</span>
            </h5>
            <small class=\"text-muted\"><i class=\"bi bi-mouse me-1\"></i> Scrollez pour voir plus</small>
        </div>
        
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"bg-light\">
                        <tr>
                            <th class=\"ps-4\" style=\"width: 60px;\"></th>
                            <th>Utilisateur</th>
                            ";
        // line 254
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 254, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<th>Entreprise</th>";
        }
        // line 255
        yield "                            <th>Rôle</th>
                            <th>Statut</th>
                            <th>Contact</th>
                            <th>Date d'embauche</th>
                            <th class=\"text-end pe-4\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 263
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 263, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 264
            yield "                            ";
            $context["rowClass"] = "";
            // line 265
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "hmaServiceId", [], "any", false, false, false, 265) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "hmaServiceId", [], "any", false, false, false, 265), "hmaActive", [], "any", false, false, false, 265))) {
                // line 266
                yield "                                ";
                $context["rowClass"] = "table-inactive-company";
                // line 267
                yield "                            ";
            } elseif ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "subscriptionActive", [], "any", false, false, false, 267)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 268
                yield "                                ";
                $context["rowClass"] = "table-warning";
                // line 269
                yield "                            ";
            } elseif ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 269)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 270
                yield "                                ";
                $context["rowClass"] = "table-secondary";
                // line 271
                yield "                            ";
            }
            // line 272
            yield "                            
                            <tr class=\"align-middle ";
            // line 273
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rowClass"]) || array_key_exists("rowClass", $context) ? $context["rowClass"] : (function () { throw new RuntimeError('Variable "rowClass" does not exist.', 273, $this->source); })()), "html", null, true);
            yield "\">
                                <td class=\"ps-4\">
                                    <div class=\"position-relative d-inline-block\">
                                        ";
            // line 276
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 276)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 277
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 277))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 277), "html", null, true);
                yield "\" class=\"rounded-circle\" width=\"45\" height=\"45\" style=\"object-fit: cover;\">
                                        ";
            } else {
                // line 279
                yield "                                            <div class=\"rounded-circle bg-primary text-white d-flex align-items-center justify-content-center\" style=\"width:45px;height:45px;\">
                                                <span class=\"fw-bold fs-5\">";
                // line 280
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 280))), "html", null, true);
                yield "</span>
                                            </div>
                                        ";
            }
            // line 283
            yield "                                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isHmaOwner", [], "any", false, false, false, 283)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 284
                yield "                                            <span class=\"position-absolute bottom-0 end-0 bg-warning rounded-circle p-1 border border-2 border-white\" style=\"width:16px;height:16px;\" data-bs-toggle=\"tooltip\" title=\"Propriétaire\">
                                                <i class=\"bi bi-crown-fill text-white\" style=\"font-size:10px;\"></i>
                                            </span>
                                        ";
            }
            // line 288
            yield "                                    </div>
                                </td>
                                <td>
                                    <div class=\"fw-semibold\">";
            // line 291
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 291), "html", null, true);
            yield "</div>
                                </td>
                                ";
            // line 293
            if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 293, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 294
                yield "                                <td>
                                    ";
                // line 295
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "hmaServiceId", [], "any", false, false, false, 295)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 296
                    yield "                                        <span class=\"badge bg-light text-dark p-2\">
                                            <i class=\"bi bi-building me-1\"></i>
                                            ";
                    // line 298
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "hmaServiceId", [], "any", false, false, false, 298), "companyName", [], "any", false, false, false, 298)), "truncate", [20, "..."], "method", false, false, false, 298), "html", null, true);
                    yield "
                                        </span>
                                    ";
                } else {
                    // line 301
                    yield "                                        <span class=\"badge bg-secondary\">Indépendant</span>
                                    ";
                }
                // line 303
                yield "                                </td>
                                ";
            }
            // line 305
            yield "                                <td>
                                    <span class=\"badge rounded-pill ";
            // line 306
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roleBadgeClass", [], "any", false, false, false, 306), "html", null, true);
            yield " p-2\">
                                        <i class=\"bi ";
            // line 307
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roleIcon", [], "any", false, false, false, 307), "html", null, true);
            yield " me-1\"></i>
                                        ";
            // line 308
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roleLabel", [], "any", false, false, false, 308), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td>
                                    <div class=\"d-flex flex-column gap-1\">
                                        <span class=\"badge rounded-pill ";
            // line 313
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statusBadgeClass", [], "any", false, false, false, 313), "html", null, true);
            yield " p-2\">
                                            <i class=\"bi ";
            // line 314
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statusIcon", [], "any", false, false, false, 314), "html", null, true);
            yield " me-1\"></i>
                                            ";
            // line 315
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statusLabel", [], "any", false, false, false, 315), "html", null, true);
            yield "
                                        </span>
                                        ";
            // line 317
            if (( !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "passwordChanged", [], "any", false, false, false, 317) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isHmaOwner", [], "any", false, false, false, 317))) {
                // line 318
                yield "                                            <span class=\"badge bg-warning-subtle text-warning-emphasis p-1 small\" data-bs-toggle=\"tooltip\" title=\"Première connexion en attente\">
                                                <i class=\"bi bi-shield-exclamation me-1\"></i>1ère connexion
                                            </span>
                                        ";
            }
            // line 322
            yield "                                    </div>
                                </td>
                                <td>
                                    <div class=\"small\">
                                        <div><i class=\"bi bi-envelope me-1 text-muted\"></i> <a href=\"mailto:";
            // line 326
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 326), "html", null, true);
            yield "\" class=\"text-decoration-none text-dark\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 326)), "truncate", [20, "..."], "method", false, false, false, 326), "html", null, true);
            yield "</a></div>
                                        <div><i class=\"bi bi-telephone me-1 text-muted\"></i> <a href=\"tel:";
            // line 327
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 327), "html", null, true);
            yield "\" class=\"text-decoration-none text-dark\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 327), "html", null, true);
            yield "</a></div>
                                    </div>
                                </td>
                                <td>
                                    ";
            // line 331
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 331)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 332
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 332), "d/m/Y"), "html", null, true);
                yield "
                                    ";
            } else {
                // line 334
                yield "                                        <span class=\"text-muted\">-</span>
                                    ";
            }
            // line 336
            yield "                                </td>
                                <td class=\"text-end pe-4\">
                                    <div class=\"d-flex gap-1 justify-content-end\">
                                        <a href=\"";
            // line 339
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 339)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info\" data-bs-toggle=\"tooltip\" title=\"Voir\">
                                            <i class=\"bi bi-eye\"></i>
                                        </a>
                                        ";
            // line 342
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isEditableBy", [(isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 342, $this->source); })())], "method", false, false, false, 342)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 343
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 343)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-warning\" data-bs-toggle=\"tooltip\" title=\"Modifier\">
                                                <i class=\"bi bi-pencil\"></i>
                                            </a>
                                        ";
            }
            // line 347
            yield "                                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "canToggleStatusBy", [(isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 347, $this->source); })())], "method", false, false, false, 347)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 348
                yield "                                            <button type=\"button\" class=\"btn btn-sm btn-outline-";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 348)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("danger") : ("success"));
                yield " toggle-status-btn\"
                                                    data-user-id=\"";
                // line 349
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 349), "html", null, true);
                yield "\"
                                                    data-user-name=\"";
                // line 350
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 350), "html", null, true);
                yield "\"
                                                    data-current-status=\"";
                // line 351
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 351)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                yield "\"
                                                    data-csrf-token=\"";
                // line 352
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 352))), "html", null, true);
                yield "\"
                                                    data-bs-toggle=\"tooltip\"
                                                    title=\"";
                // line 354
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 354)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
                yield "\">
                                                <i class=\"bi bi-";
                // line 355
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 355)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("toggle-off") : ("toggle-on"));
                yield "\"></i>
                                            </button>
                                        ";
            }
            // line 358
            yield "                                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "canBeDeletedBy", [(isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 358, $this->source); })())], "method", false, false, false, 358)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 359
                yield "                                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-btn\"
                                                    data-user-id=\"";
                // line 360
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 360), "html", null, true);
                yield "\"
                                                    data-user-name=\"";
                // line 361
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 361), "html", null, true);
                yield "\"
                                                    data-csrf-token=\"";
                // line 362
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 362))), "html", null, true);
                yield "\"
                                                    data-bs-toggle=\"tooltip\"
                                                    title=\"Supprimer\">
                                                <i class=\"bi bi-trash\"></i>
                                            </button>
                                        ";
            }
            // line 368
            yield "                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 371
        if (!$context['_iterated']) {
            // line 372
            yield "                            <tr>
                                <td colspan=\"";
            // line 373
            if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 373, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "8";
            } else {
                yield "7";
            }
            yield "\" class=\"text-center py-5\">
                                    <div class=\"empty-state\">
                                        <i class=\"bi bi-people display-1 text-muted mb-4 d-block\"></i>
                                        <h4 class=\"text-muted mb-3\">Aucun utilisateur trouvé</h4>
                                        <p class=\"text-muted mb-4\">Commencez par créer votre premier utilisateur</p>
                                        ";
            // line 378
            if (((isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 378, $this->source); })()) || (isset($context["can_add_user"]) || array_key_exists("can_add_user", $context) ? $context["can_add_user"] : (function () { throw new RuntimeError('Variable "can_add_user" does not exist.', 378, $this->source); })()))) {
                // line 379
                yield "                                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
                yield "\" class=\"btn btn-primary btn-lg px-5\">
                                                <i class=\"bi bi-person-plus me-2\"></i>Créer un utilisateur
                                            </a>
                                        ";
            }
            // line 383
            yield "                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 387
        yield "                    </tbody>
                </table>
            </div>
        </div>
              
        <!-- Pagination -->
        ";
        // line 393
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 393, $this->source); })()) > 1)) {
            // line 394
            yield "        <div class=\"card-footer bg-white py-3 d-flex flex-wrap justify-content-between align-items-center\">
            <div class=\"text-muted small\">
                Affichage de ";
            // line 396
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 396, $this->source); })()) - 1) * (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 396, $this->source); })())) + 1), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 396, $this->source); })()) * (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 396, $this->source); })())), (isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 396, $this->source); })())), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 396, $this->source); })()), "html", null, true);
            yield " utilisateurs
            </div>
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination pagination-sm mb-0\">
                    <li class=\"page-item ";
            // line 400
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 400, $this->source); })()) <= 1)) ? ("disabled") : (""));
            yield "\">
                        <a class=\"page-link\" href=\"";
            // line 401
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 401, $this->source); })()) - 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 401, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 401, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 401, $this->source); })()), "company" => (isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 401, $this->source); })())]), "html", null, true);
            yield "\"><i class=\"bi bi-chevron-left\"></i></a>
                    </li>
                    ";
            // line 403
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 403, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 404
                yield "                        <li class=\"page-item ";
                yield ((($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 404, $this->source); })()))) ? ("active") : (""));
                yield "\">
                            <a class=\"page-link\" href=\"";
                // line 405
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => $context["i"], "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 405, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 405, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 405, $this->source); })()), "company" => (isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 405, $this->source); })())]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 408
            yield "                    <li class=\"page-item ";
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 408, $this->source); })()) >= (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 408, $this->source); })()))) ? ("disabled") : (""));
            yield "\">
                        <a class=\"page-link\" href=\"";
            // line 409
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 409, $this->source); })()) + 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 409, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 409, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 409, $this->source); })()), "company" => (isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 409, $this->source); })())]), "html", null, true);
            yield "\"><i class=\"bi bi-chevron-right\"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
        ";
        }
        // line 415
        yield "    </div>
        
        <!-- Pagination -->
        ";
        // line 418
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 418, $this->source); })()) > 1)) {
            // line 419
            yield "        <div class=\"card-footer bg-white py-3 d-flex flex-wrap justify-content-between align-items-center\">
            <div class=\"text-muted small\">
                Affichage de ";
            // line 421
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 421, $this->source); })()) - 1) * (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 421, $this->source); })())) + 1), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 421, $this->source); })()) * (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 421, $this->source); })())), (isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 421, $this->source); })())), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 421, $this->source); })()), "html", null, true);
            yield " utilisateurs
            </div>
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination pagination-sm mb-0\">
                    <li class=\"page-item ";
            // line 425
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 425, $this->source); })()) <= 1)) ? ("disabled") : (""));
            yield "\">
                        <a class=\"page-link\" href=\"";
            // line 426
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 426, $this->source); })()) - 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 426, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 426, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 426, $this->source); })()), "company" => (isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 426, $this->source); })())]), "html", null, true);
            yield "\"><i class=\"bi bi-chevron-left\"></i></a>
                    </li>
                    ";
            // line 428
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 428, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 429
                yield "                        <li class=\"page-item ";
                yield ((($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 429, $this->source); })()))) ? ("active") : (""));
                yield "\">
                            <a class=\"page-link\" href=\"";
                // line 430
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => $context["i"], "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 430, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 430, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 430, $this->source); })()), "company" => (isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 430, $this->source); })())]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 433
            yield "                    <li class=\"page-item ";
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 433, $this->source); })()) >= (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 433, $this->source); })()))) ? ("disabled") : (""));
            yield "\">
                        <a class=\"page-link\" href=\"";
            // line 434
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 434, $this->source); })()) + 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 434, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 434, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 434, $this->source); })()), "company" => (isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 434, $this->source); })())]), "html", null, true);
            yield "\"><i class=\"bi bi-chevron-right\"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
        ";
        }
        // line 440
        yield "    </div>
</div>

<!-- Modals -->
<div class=\"modal fade\" id=\"toggleStatusModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title\"><i class=\"bi bi-exclamation-triangle me-2\"></i>Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"bi bi-question-circle text-warning\" style=\"font-size: 4rem;\"></i>
                <h5 id=\"toggleStatusMessage\" class=\"mt-3 mb-0\"></h5>
                <p class=\"text-muted small\">Cette action peut être annulée à tout moment.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\"><i class=\"bi bi-x me-2\"></i>Annuler</button>
                <form id=\"toggleStatusForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleStatusToken\">
                    <button type=\"submit\" class=\"btn btn-warning px-4\"><i class=\"bi bi-check me-2\"></i>Confirmer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title\"><i class=\"bi bi-exclamation-triangle me-2\"></i>Confirmation de suppression</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"bi bi-trash3 text-danger\" style=\"font-size: 4rem;\"></i>
                <h5 id=\"deleteMessage\" class=\"mt-3 mb-0\"></h5>
                <p class=\"text-muted small\">Cette action est irréversible.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\"><i class=\"bi bi-x me-2\"></i>Annuler</button>
                <form id=\"deleteForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger px-4\"><i class=\"bi bi-trash me-2\"></i>Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title\"><i class=\"bi bi-exclamation-triangle me-2\"></i>Limite d'utilisateurs atteinte</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"bi bi-people-fill text-warning\" style=\"font-size: 4rem;\"></i>
                <h5 class=\"mt-3\">Vous avez atteint la limite d'utilisateurs pour votre plan.</h5>
                <p class=\"text-muted\">Pour ajouter de nouveaux utilisateurs, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <a href=\"";
        // line 503
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
        yield "\" class=\"btn btn-warning btn-lg px-5\"><i class=\"bi bi-arrow-up-circle me-2\"></i>Voir les offres</a>
                <button type=\"button\" class=\"btn btn-outline-secondary btn-lg px-5\" data-bs-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 511
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

        // line 512
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
    tooltipTriggerList.map(function (el) { return new bootstrap.Tooltip(el); });

    // Toggle status modal
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleStatusModal'));
    const toggleButtons = document.querySelectorAll('.toggle-status-btn');
    const toggleForm = document.getElementById('toggleStatusForm');
    const toggleToken = document.getElementById('toggleStatusToken');
    const toggleMessage = document.getElementById('toggleStatusMessage');

    toggleButtons.forEach(btn => {
        btn.addEventListener('click', function() {
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

    // Delete modal
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    const deleteButtons = document.querySelectorAll('.delete-btn');
    const deleteForm = document.getElementById('deleteForm');
    const deleteToken = document.getElementById('deleteToken');
    const deleteMessage = document.getElementById('deleteMessage');

    deleteButtons.forEach(btn => {
        btn.addEventListener('click', function() {
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

    // line 562
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

        // line 563
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

/* Header */
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
    background: rgba(255,255,255,0.1);
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
    0%,100% { transform: translateY(0) rotate(0deg); }
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
    border: 1px solid rgba(255,255,255,0.1);
}
.stat-card:hover {
    transform: translateY(-5px);
    background-color: rgba(255,255,255,0.15) !important;
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

/* Statistiques */
.stat-item {
    transition: transform 0.2s, box-shadow 0.2s;
    border: 1px solid transparent;
}
.stat-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

/* Badges */
.badge.bg-gradient-danger { background: var(--danger-gradient); }
.badge.bg-gradient-primary { background: var(--primary-gradient); }
.badge.bg-gradient-warning { background: var(--warning-gradient); }
.badge.bg-gradient-success { background: var(--success-gradient); }
.badge.bg-gradient-info { background: var(--info-gradient); }

.bg-warning-subtle {
    background-color: #fef3c7 !important;
    color: #92400e !important;
}

/* Tableau */
.table-inactive-company {
    background-color: #2d3748 !important;
    color: white !important;
}
.table-inactive-company a {
    color: rgba(255,255,255,0.8) !important;
}
.table-warning {
    background-color: #fff3cd !important;
}
.table-secondary {
    background-color: #f8f9fa !important;
    opacity: 0.8;
}

/* Pagination */
.pagination-sm .page-link {
    border-radius: 0.25rem;
    margin: 0 2px;
}

/* Empty state */
.empty-state {
    padding: 3rem;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-radius: 20px;
}

/* Responsive */
@media (max-width: 768px) {
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
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
        return array (  1103 => 563,  1090 => 562,  1030 => 512,  1017 => 511,  999 => 503,  934 => 440,  925 => 434,  920 => 433,  909 => 430,  904 => 429,  900 => 428,  895 => 426,  891 => 425,  880 => 421,  876 => 419,  874 => 418,  869 => 415,  860 => 409,  855 => 408,  844 => 405,  839 => 404,  835 => 403,  830 => 401,  826 => 400,  815 => 396,  811 => 394,  809 => 393,  801 => 387,  792 => 383,  784 => 379,  782 => 378,  770 => 373,  767 => 372,  765 => 371,  758 => 368,  749 => 362,  745 => 361,  741 => 360,  738 => 359,  735 => 358,  729 => 355,  725 => 354,  720 => 352,  716 => 351,  712 => 350,  708 => 349,  703 => 348,  700 => 347,  692 => 343,  690 => 342,  684 => 339,  679 => 336,  675 => 334,  669 => 332,  667 => 331,  658 => 327,  652 => 326,  646 => 322,  640 => 318,  638 => 317,  633 => 315,  629 => 314,  625 => 313,  617 => 308,  613 => 307,  609 => 306,  606 => 305,  602 => 303,  598 => 301,  592 => 298,  588 => 296,  586 => 295,  583 => 294,  581 => 293,  576 => 291,  571 => 288,  565 => 284,  562 => 283,  556 => 280,  553 => 279,  545 => 277,  543 => 276,  537 => 273,  534 => 272,  531 => 271,  528 => 270,  525 => 269,  522 => 268,  519 => 267,  516 => 266,  513 => 265,  510 => 264,  505 => 263,  495 => 255,  491 => 254,  476 => 242,  454 => 223,  448 => 219,  442 => 217,  440 => 216,  436 => 215,  432 => 214,  428 => 213,  417 => 205,  413 => 204,  409 => 203,  405 => 202,  394 => 198,  391 => 197,  386 => 194,  373 => 192,  369 => 191,  363 => 187,  361 => 186,  356 => 183,  348 => 179,  346 => 178,  342 => 177,  331 => 173,  327 => 172,  323 => 170,  317 => 166,  309 => 162,  307 => 161,  293 => 149,  281 => 140,  274 => 135,  272 => 134,  261 => 126,  245 => 113,  229 => 100,  213 => 87,  200 => 81,  172 => 56,  165 => 52,  158 => 48,  151 => 44,  142 => 37,  136 => 34,  133 => 33,  126 => 28,  124 => 27,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/user/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion des utilisateurs - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- Header moderne -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"modern-header position-relative overflow-hidden rounded-4 shadow-lg\">
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
                                            <span class=\"text-white-50\"><i class=\"bi bi-building me-1\"></i>Toutes les entreprises</span>
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
                <div class=\"wave-decoration\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 120\" preserveAspectRatio=\"none\">
                        <path fill=\"#ffffff\" fill-opacity=\"1\" d=\"M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,120L1360,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z\"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistiques filtrées (pleine largeur) -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3 d-flex align-items-center\">
                    <i class=\"bi bi-funnel me-2 text-primary fs-4\"></i>
                    <h5 class=\"mb-0 fw-bold\">Statistiques selon les filtres</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3 row-cols-2 row-cols-md-4 {% if is_super_admin %}row-cols-xl-5{% else %}row-cols-xl-4{% endif %}\">
                        <div class=\"col\">
                            <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <span class=\"text-muted text-uppercase small fw-bold\">Filtrés</span>
                                        <h3 class=\"mb-0 fw-bold\">{{ totalFiltered }}</h3>
                                    </div>
                                    <div class=\"bg-primary bg-opacity-10 p-3 rounded-3\">
                                        <i class=\"bi bi-people text-white fs-2\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col\">
                            <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <span class=\"text-muted text-uppercase small fw-bold\">Actifs</span>
                                        <h3 class=\"mb-0 fw-bold text-success\">{{ activeFiltered }}</h3>
                                    </div>
                                    <div class=\"bg-success bg-opacity-10 p-3 rounded-3\">
                                        <i class=\"bi bi-check-circle text-white fs-2\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col\">
                            <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <span class=\"text-muted text-uppercase small fw-bold\">Inactifs</span>
                                        <h3 class=\"mb-0 fw-bold text-danger\">{{ inactiveFiltered }}</h3>
                                    </div>
                                    <div class=\"bg-danger bg-opacity-10 p-3 rounded-3\">
                                        <i class=\"bi bi-pause-circle text-white fs-2\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col\">
                            <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <span class=\"text-muted text-uppercase small fw-bold\">Hors quota</span>
                                        <h3 class=\"mb-0 fw-bold text-warning\">{{ outOfQuotaFiltered }}</h3>
                                    </div>
                                    <div class=\"bg-warning bg-opacity-10 p-3 rounded-3\">
                                        <i class=\"bi bi-exclamation-triangle text-white fs-2\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% if is_super_admin %}
                        <div class=\"col\">
                            <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <span class=\"text-muted text-uppercase small fw-bold\">Bloqués</span>
                                        <h3 class=\"mb-0 fw-bold text-dark\">{{ blockedFiltered }}</h3>
                                    </div>
                                    <div class=\"bg-dark bg-opacity-10 p-3 rounded-3\">
                                        <i class=\"bi bi-lock text-white fs-2\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres avancés (pleine largeur) -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3 d-flex align-items-center justify-content-between\">
                    <h5 class=\"mb-0 fw-bold\"><i class=\"bi bi-sliders2 me-2\"></i>Filtres avancés</h5>
                    {% if is_super_admin or can_add_user %}
                        <a href=\"{{ path('app_user_new') }}\" class=\"btn btn-success\">
                            <i class=\"bi bi-person-plus-fill me-2\"></i>Nouvel utilisateur
                        </a>
                    {% else %}
                        <button type=\"button\" class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#quotaReachedModal\">
                            <i class=\"bi bi-person-plus-fill me-2\"></i>Limite atteinte
                        </button>
                    {% endif %}
                </div>
                <div class=\"card-body\">
                    <form method=\"get\" action=\"{{ path('app_user_index') }}\" class=\"row g-3\">
                        <div class=\"col-md-{% if is_super_admin %}4{% else %}5{% endif %}\">
                            <label for=\"search\" class=\"form-label fw-bold\">Rechercher</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-light border-0\"><i class=\"bi bi-search\"></i></span>
                                <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control bg-light border-0\" placeholder=\"Nom, email, téléphone...\" value=\"{{ search }}\">
                                {% if search %}
                                <a href=\"{{ path('app_user_index', {page: currentPage, role: role, status: status, company: companyId}) }}\" class=\"btn btn-outline-secondary border-0\" title=\"Effacer\">
                                    <i class=\"bi bi-x-circle\"></i>
                                </a>
                                {% endif %}
                            </div>
                        </div>
                        
                        {% if is_super_admin %}
                        <div class=\"col-md-3\">
                            <label for=\"company\" class=\"form-label fw-bold\">Entreprise</label>
                            <select name=\"company\" id=\"company\" class=\"form-select bg-light border-0\">
                                <option value=\"\">Toutes</option>
                                {% for company in companies %}
                                <option value=\"{{ company.id }}\" {{ companyId == company.id ? 'selected' }}>{{ company.companyName }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        {% endif %}
                        
                        <div class=\"col-md-{% if is_super_admin %}3{% else %}4{% endif %}\">
                            <label for=\"role\" class=\"form-label fw-bold\">Rôle</label>
                            <select name=\"role\" id=\"role\" class=\"form-select bg-light border-0\">
                                <option value=\"\">Tous</option>
                                <option value=\"ROLE_ADMIN\" {{ role == 'ROLE_ADMIN' ? 'selected' }}>Administrateurs</option>
                                <option value=\"ROLE_MANAGER\" {{ role == 'ROLE_MANAGER' ? 'selected' }}>Gestionnaires</option>
                                <option value=\"ROLE_STOCK_MANAGER\" {{ role == 'ROLE_STOCK_MANAGER' ? 'selected' }}>Responsables Stock</option>
                                <option value=\"ROLE_CASHIER\" {{ role == 'ROLE_CASHIER' ? 'selected' }}>Caissiers</option>
                            </select>
                        </div>
                        
                        <div class=\"col-md-2\">
                            <label for=\"status\" class=\"form-label fw-bold\">Statut</label>
                            <select name=\"status\" id=\"status\" class=\"form-select bg-light border-0\">
                                <option value=\"\">Tous</option>
                                <option value=\"active\" {{ status == 'active' ? 'selected' }}>Actifs</option>
                                <option value=\"inactive\" {{ status == 'inactive' ? 'selected' }}>Désactivés</option>
                                <option value=\"quota\" {{ status == 'quota' ? 'selected' }}>Hors quota</option>
                                {% if is_super_admin %}
                                <option value=\"blocked\" {{ status == 'blocked' ? 'selected' }}>Bloqués</option>
                                {% endif %}
                            </select>
                        </div>
                        
                        <div class=\"col-12 d-flex justify-content-end gap-2 mt-4\">
                            <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-outline-secondary px-4\">
                                <i class=\"bi bi-arrow-counterclockwise me-2\"></i>Effacer
                            </a>
                            <button type=\"submit\" class=\"btn btn-primary px-5\">
                                <i class=\"bi bi-funnel me-2\"></i>Filtrer
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des utilisateurs -->
    <div class=\"card border-0 shadow-lg\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-bold\">
                <i class=\"bi bi-table me-2 text-primary\"></i>
                Liste des utilisateurs
                <span class=\"badge bg-primary ms-2 rounded-pill\">{{ totalItems }}</span>
            </h5>
            <small class=\"text-muted\"><i class=\"bi bi-mouse me-1\"></i> Scrollez pour voir plus</small>
        </div>
        
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"bg-light\">
                        <tr>
                            <th class=\"ps-4\" style=\"width: 60px;\"></th>
                            <th>Utilisateur</th>
                            {% if is_super_admin %}<th>Entreprise</th>{% endif %}
                            <th>Rôle</th>
                            <th>Statut</th>
                            <th>Contact</th>
                            <th>Date d'embauche</th>
                            <th class=\"text-end pe-4\">Actions</th>
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
                                {% set rowClass = 'table-secondary' %}
                            {% endif %}
                            
                            <tr class=\"align-middle {{ rowClass }}\">
                                <td class=\"ps-4\">
                                    <div class=\"position-relative d-inline-block\">
                                        {% if user.photo %}
                                            <img src=\"{{ asset('uploads/users/' ~ user.photo) }}\" alt=\"{{ user.fullName }}\" class=\"rounded-circle\" width=\"45\" height=\"45\" style=\"object-fit: cover;\">
                                        {% else %}
                                            <div class=\"rounded-circle bg-primary text-white d-flex align-items-center justify-content-center\" style=\"width:45px;height:45px;\">
                                                <span class=\"fw-bold fs-5\">{{ user.fullName|first|upper }}</span>
                                            </div>
                                        {% endif %}
                                        {% if user.isHmaOwner %}
                                            <span class=\"position-absolute bottom-0 end-0 bg-warning rounded-circle p-1 border border-2 border-white\" style=\"width:16px;height:16px;\" data-bs-toggle=\"tooltip\" title=\"Propriétaire\">
                                                <i class=\"bi bi-crown-fill text-white\" style=\"font-size:10px;\"></i>
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
                                        <span class=\"badge bg-light text-dark p-2\">
                                            <i class=\"bi bi-building me-1\"></i>
                                            {{ user.hmaServiceId.companyName|u.truncate(20, '...') }}
                                        </span>
                                    {% else %}
                                        <span class=\"badge bg-secondary\">Indépendant</span>
                                    {% endif %}
                                </td>
                                {% endif %}
                                <td>
                                    <span class=\"badge rounded-pill {{ user.roleBadgeClass }} p-2\">
                                        <i class=\"bi {{ user.roleIcon }} me-1\"></i>
                                        {{ user.roleLabel }}
                                    </span>
                                </td>
                                <td>
                                    <div class=\"d-flex flex-column gap-1\">
                                        <span class=\"badge rounded-pill {{ user.statusBadgeClass }} p-2\">
                                            <i class=\"bi {{ user.statusIcon }} me-1\"></i>
                                            {{ user.statusLabel }}
                                        </span>
                                        {% if not user.passwordChanged and not user.isHmaOwner %}
                                            <span class=\"badge bg-warning-subtle text-warning-emphasis p-1 small\" data-bs-toggle=\"tooltip\" title=\"Première connexion en attente\">
                                                <i class=\"bi bi-shield-exclamation me-1\"></i>1ère connexion
                                            </span>
                                        {% endif %}
                                    </div>
                                </td>
                                <td>
                                    <div class=\"small\">
                                        <div><i class=\"bi bi-envelope me-1 text-muted\"></i> <a href=\"mailto:{{ user.email }}\" class=\"text-decoration-none text-dark\">{{ user.email|u.truncate(20, '...') }}</a></div>
                                        <div><i class=\"bi bi-telephone me-1 text-muted\"></i> <a href=\"tel:{{ user.phone }}\" class=\"text-decoration-none text-dark\">{{ user.phone }}</a></div>
                                    </div>
                                </td>
                                <td>
                                    {% if user.createdAt %}
                                        {{ user.createdAt|date('d/m/Y') }}
                                    {% else %}
                                        <span class=\"text-muted\">-</span>
                                    {% endif %}
                                </td>
                                <td class=\"text-end pe-4\">
                                    <div class=\"d-flex gap-1 justify-content-end\">
                                        <a href=\"{{ path('app_user_show', {'id': user.id}) }}\" class=\"btn btn-sm btn-outline-info\" data-bs-toggle=\"tooltip\" title=\"Voir\">
                                            <i class=\"bi bi-eye\"></i>
                                        </a>
                                        {% if user.isEditableBy(current_user) %}
                                            <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" class=\"btn btn-sm btn-outline-warning\" data-bs-toggle=\"tooltip\" title=\"Modifier\">
                                                <i class=\"bi bi-pencil\"></i>
                                            </a>
                                        {% endif %}
                                        {% if user.canToggleStatusBy(current_user) %}
                                            <button type=\"button\" class=\"btn btn-sm btn-outline-{{ user.isActive ? 'danger' : 'success' }} toggle-status-btn\"
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
                                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-btn\"
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
                                <td colspan=\"{% if is_super_admin %}8{% else %}7{% endif %}\" class=\"text-center py-5\">
                                    <div class=\"empty-state\">
                                        <i class=\"bi bi-people display-1 text-muted mb-4 d-block\"></i>
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
        <div class=\"card-footer bg-white py-3 d-flex flex-wrap justify-content-between align-items-center\">
            <div class=\"text-muted small\">
                Affichage de {{ ((currentPage - 1) * limit) + 1 }} à {{ min(currentPage * limit, totalItems) }} sur {{ totalItems }} utilisateurs
            </div>
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination pagination-sm mb-0\">
                    <li class=\"page-item {{ currentPage <= 1 ? 'disabled' }}\">
                        <a class=\"page-link\" href=\"{{ path('app_user_index', {page: currentPage - 1, search: search, role: role, status: status, company: companyId}) }}\"><i class=\"bi bi-chevron-left\"></i></a>
                    </li>
                    {% for i in 1..totalPages %}
                        <li class=\"page-item {{ i == currentPage ? 'active' }}\">
                            <a class=\"page-link\" href=\"{{ path('app_user_index', {page: i, search: search, role: role, status: status, company: companyId}) }}\">{{ i }}</a>
                        </li>
                    {% endfor %}
                    <li class=\"page-item {{ currentPage >= totalPages ? 'disabled' }}\">
                        <a class=\"page-link\" href=\"{{ path('app_user_index', {page: currentPage + 1, search: search, role: role, status: status, company: companyId}) }}\"><i class=\"bi bi-chevron-right\"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
        {% endif %}
    </div>
        
        <!-- Pagination -->
        {% if totalPages > 1 %}
        <div class=\"card-footer bg-white py-3 d-flex flex-wrap justify-content-between align-items-center\">
            <div class=\"text-muted small\">
                Affichage de {{ ((currentPage - 1) * limit) + 1 }} à {{ min(currentPage * limit, totalItems) }} sur {{ totalItems }} utilisateurs
            </div>
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination pagination-sm mb-0\">
                    <li class=\"page-item {{ currentPage <= 1 ? 'disabled' }}\">
                        <a class=\"page-link\" href=\"{{ path('app_user_index', {page: currentPage - 1, search: search, role: role, status: status, company: companyId}) }}\"><i class=\"bi bi-chevron-left\"></i></a>
                    </li>
                    {% for i in 1..totalPages %}
                        <li class=\"page-item {{ i == currentPage ? 'active' }}\">
                            <a class=\"page-link\" href=\"{{ path('app_user_index', {page: i, search: search, role: role, status: status, company: companyId}) }}\">{{ i }}</a>
                        </li>
                    {% endfor %}
                    <li class=\"page-item {{ currentPage >= totalPages ? 'disabled' }}\">
                        <a class=\"page-link\" href=\"{{ path('app_user_index', {page: currentPage + 1, search: search, role: role, status: status, company: companyId}) }}\"><i class=\"bi bi-chevron-right\"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
        {% endif %}
    </div>
</div>

<!-- Modals -->
<div class=\"modal fade\" id=\"toggleStatusModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title\"><i class=\"bi bi-exclamation-triangle me-2\"></i>Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"bi bi-question-circle text-warning\" style=\"font-size: 4rem;\"></i>
                <h5 id=\"toggleStatusMessage\" class=\"mt-3 mb-0\"></h5>
                <p class=\"text-muted small\">Cette action peut être annulée à tout moment.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\"><i class=\"bi bi-x me-2\"></i>Annuler</button>
                <form id=\"toggleStatusForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleStatusToken\">
                    <button type=\"submit\" class=\"btn btn-warning px-4\"><i class=\"bi bi-check me-2\"></i>Confirmer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title\"><i class=\"bi bi-exclamation-triangle me-2\"></i>Confirmation de suppression</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"bi bi-trash3 text-danger\" style=\"font-size: 4rem;\"></i>
                <h5 id=\"deleteMessage\" class=\"mt-3 mb-0\"></h5>
                <p class=\"text-muted small\">Cette action est irréversible.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\"><i class=\"bi bi-x me-2\"></i>Annuler</button>
                <form id=\"deleteForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger px-4\"><i class=\"bi bi-trash me-2\"></i>Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title\"><i class=\"bi bi-exclamation-triangle me-2\"></i>Limite d'utilisateurs atteinte</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"bi bi-people-fill text-warning\" style=\"font-size: 4rem;\"></i>
                <h5 class=\"mt-3\">Vous avez atteint la limite d'utilisateurs pour votre plan.</h5>
                <p class=\"text-muted\">Pour ajouter de nouveaux utilisateurs, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <a href=\"{{ path('app_subscription_plans') }}\" class=\"btn btn-warning btn-lg px-5\"><i class=\"bi bi-arrow-up-circle me-2\"></i>Voir les offres</a>
                <button type=\"button\" class=\"btn btn-outline-secondary btn-lg px-5\" data-bs-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
    tooltipTriggerList.map(function (el) { return new bootstrap.Tooltip(el); });

    // Toggle status modal
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleStatusModal'));
    const toggleButtons = document.querySelectorAll('.toggle-status-btn');
    const toggleForm = document.getElementById('toggleStatusForm');
    const toggleToken = document.getElementById('toggleStatusToken');
    const toggleMessage = document.getElementById('toggleStatusMessage');

    toggleButtons.forEach(btn => {
        btn.addEventListener('click', function() {
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

    // Delete modal
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    const deleteButtons = document.querySelectorAll('.delete-btn');
    const deleteForm = document.getElementById('deleteForm');
    const deleteToken = document.getElementById('deleteToken');
    const deleteMessage = document.getElementById('deleteMessage');

    deleteButtons.forEach(btn => {
        btn.addEventListener('click', function() {
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

/* Header */
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
    background: rgba(255,255,255,0.1);
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
    0%,100% { transform: translateY(0) rotate(0deg); }
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
    border: 1px solid rgba(255,255,255,0.1);
}
.stat-card:hover {
    transform: translateY(-5px);
    background-color: rgba(255,255,255,0.15) !important;
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

/* Statistiques */
.stat-item {
    transition: transform 0.2s, box-shadow 0.2s;
    border: 1px solid transparent;
}
.stat-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

/* Badges */
.badge.bg-gradient-danger { background: var(--danger-gradient); }
.badge.bg-gradient-primary { background: var(--primary-gradient); }
.badge.bg-gradient-warning { background: var(--warning-gradient); }
.badge.bg-gradient-success { background: var(--success-gradient); }
.badge.bg-gradient-info { background: var(--info-gradient); }

.bg-warning-subtle {
    background-color: #fef3c7 !important;
    color: #92400e !important;
}

/* Tableau */
.table-inactive-company {
    background-color: #2d3748 !important;
    color: white !important;
}
.table-inactive-company a {
    color: rgba(255,255,255,0.8) !important;
}
.table-warning {
    background-color: #fff3cd !important;
}
.table-secondary {
    background-color: #f8f9fa !important;
    opacity: 0.8;
}

/* Pagination */
.pagination-sm .page-link {
    border-radius: 0.25rem;
    margin: 0 2px;
}

/* Empty state */
.empty-state {
    padding: 3rem;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-radius: 20px;
}

/* Responsive */
@media (max-width: 768px) {
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}
</style>
{% endblock %}", "admin/user/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\user\\index.html.twig");
    }
}
