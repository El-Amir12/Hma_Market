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
class __TwigTemplate_bda05269e615e3b1cf73f00dd91061b6 extends Template
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
        yield "<div class=\"container-fluid px-2 px-md-4\">
    <!-- Header moderne -->
    <div class=\"row mb-3 mb-md-4\">
        <div class=\"col-12\">
            <div class=\"modern-header position-relative overflow-hidden rounded-3 rounded-md-4 shadow-lg\">
                <div class=\"floating-shapes\">
                    <div class=\"shape shape-1\"></div>
                    <div class=\"shape shape-2\"></div>
                    <div class=\"shape shape-3\"></div>
                </div>
                <div class=\"position-relative p-3 p-md-5\" style=\"z-index: 2;\">
                    <div class=\"row align-items-center g-3\">
                        <div class=\"col-12 col-lg-8\">
                            <div class=\"d-flex align-items-center gap-3 gap-md-4\">
                                <div class=\"icon-wrapper bg-white bg-opacity-20 rounded-3 rounded-md-4 p-3 p-md-4\">
                                    <i class=\"bi bi-people-fill text-white display-6 display-md-4\"></i>
                                </div>
                                <div>
                                    <h1 class=\"h2 h-md-1 display-md-5 fw-bold text-white mb-1 mb-md-2\">Gestion des utilisateurs</h1>
                                    <div class=\"d-flex align-items-center gap-2 gap-md-3 flex-wrap\">
                                        ";
        // line 27
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 27, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "                                            <span class=\"badge bg-white text-primary px-3 py-1 px-md-4 py-md-2 rounded-pill fs-6\">
                                                <i class=\"bi bi-shield-shaded me-1 me-md-2\"></i>Super Admin
                                            </span>
                                            <span class=\"text-white-50 small\"><i class=\"bi bi-building me-1\"></i>Toutes les entreprises</span>
                                        ";
        } else {
            // line 33
            yield "                                            <span class=\"badge bg-white text-success px-3 py-1 px-md-4 py-md-2 rounded-pill fs-6\">
                                                <i class=\"bi bi-building me-1 me-md-2\"></i>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "companyDisplayName", [], "any", false, false, false, 34)), "truncate", [20, "..."], "method", false, false, false, 34), "html", null, true);
            yield "
                                            </span>
                                        ";
        }
        // line 37
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-lg-4\">
                            <div class=\"stats-grid\">
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-2 rounded-md-3 p-2 p-md-3 text-center\">
                                    <div class=\"stat-value text-white h5 h-md-3 mb-0 fw-bold\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 44, $this->source); })()), "total", [], "any", false, false, false, 44), "html", null, true);
        yield "</div>
                                    <div class=\"stat-label text-white-50 small\">Total</div>
                                </div>
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-2 rounded-md-3 p-2 p-md-3 text-center\">
                                    <div class=\"stat-value text-success h5 h-md-3 mb-0 fw-bold\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 48, $this->source); })()), "active", [], "any", false, false, false, 48), "html", null, true);
        yield "</div>
                                    <div class=\"stat-label text-white-50 small\">Actifs</div>
                                </div>
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-2 rounded-md-3 p-2 p-md-3 text-center\">
                                    <div class=\"stat-value text-warning h5 h-md-3 mb-0 fw-bold\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 52, $this->source); })()), "inactiveByAdmin", [], "any", false, false, false, 52), "html", null, true);
        yield "</div>
                                    <div class=\"stat-label text-white-50 small\">Inactifs</div>
                                </div>
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-2 rounded-md-3 p-2 p-md-3 text-center\">
                                    <div class=\"stat-value text-danger h5 h-md-3 mb-0 fw-bold\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 56, $this->source); })()), "outOfQuota", [], "any", false, false, false, 56), "html", null, true);
        yield "</div>
                                    <div class=\"stat-label text-white-50 small\">Hors quota</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"wave-decoration d-none d-md-block\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 120\" preserveAspectRatio=\"none\">
                        <path fill=\"#ffffff\" fill-opacity=\"1\" d=\"M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,120L1360,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z\"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistiques filtrées -->
    <div class=\"row mb-3 mb-md-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-2 py-md-3 d-flex align-items-center\">
                    <i class=\"bi bi-funnel me-2 text-primary fs-5 fs-md-4\"></i>
                    <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\">Statistiques selon les filtres</h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"row g-2 g-md-3 row-cols-2 row-cols-md-4 ";
        // line 81
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 81, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "row-cols-xl-5";
        } else {
            yield "row-cols-xl-4";
        }
        yield "\">
                        <div class=\"col\">
                            <div class=\"stat-item p-2 p-md-3 bg-light rounded-2 rounded-md-3 h-100\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <span class=\"text-muted text-uppercase small fw-bold\">Filtrés</span>
                                        <h3 class=\"mb-0 fw-bold fs-4 fs-md-3\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFiltered"]) || array_key_exists("totalFiltered", $context) ? $context["totalFiltered"] : (function () { throw new RuntimeError('Variable "totalFiltered" does not exist.', 87, $this->source); })()), "html", null, true);
        yield "</h3>
                                    </div>
                                    <div class=\"bg-primary bg-opacity-10 p-2 p-md-3 rounded-2 rounded-md-3\">
                                        <i class=\"bi bi-people text-white fs-4 fs-md-2\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col\">
                            <div class=\"stat-item p-2 p-md-3 bg-light rounded-2 rounded-md-3 h-100\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <span class=\"text-muted text-uppercase small fw-bold\">Actifs</span>
                                        <h3 class=\"mb-0 fw-bold text-success fs-4 fs-md-3\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeFiltered"]) || array_key_exists("activeFiltered", $context) ? $context["activeFiltered"] : (function () { throw new RuntimeError('Variable "activeFiltered" does not exist.', 100, $this->source); })()), "html", null, true);
        yield "</h3>
                                    </div>
                                    <div class=\"bg-success bg-opacity-10 p-2 p-md-3 rounded-2 rounded-md-3\">
                                        <i class=\"bi bi-check-circle text-white fs-4 fs-md-2\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col\">
                            <div class=\"stat-item p-2 p-md-3 bg-light rounded-2 rounded-md-3 h-100\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <span class=\"text-muted text-uppercase small fw-bold\">Inactifs</span>
                                        <h3 class=\"mb-0 fw-bold text-danger fs-4 fs-md-3\">";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactiveFiltered"]) || array_key_exists("inactiveFiltered", $context) ? $context["inactiveFiltered"] : (function () { throw new RuntimeError('Variable "inactiveFiltered" does not exist.', 113, $this->source); })()), "html", null, true);
        yield "</h3>
                                    </div>
                                    <div class=\"bg-danger bg-opacity-10 p-2 p-md-3 rounded-2 rounded-md-3\">
                                        <i class=\"bi bi-pause-circle text-white fs-4 fs-md-2\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col\">
                            <div class=\"stat-item p-2 p-md-3 bg-light rounded-2 rounded-md-3 h-100\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <span class=\"text-muted text-uppercase small fw-bold\">Hors quota</span>
                                        <h3 class=\"mb-0 fw-bold text-warning fs-4 fs-md-3\">";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["outOfQuotaFiltered"]) || array_key_exists("outOfQuotaFiltered", $context) ? $context["outOfQuotaFiltered"] : (function () { throw new RuntimeError('Variable "outOfQuotaFiltered" does not exist.', 126, $this->source); })()), "html", null, true);
        yield "</h3>
                                    </div>
                                    <div class=\"bg-warning bg-opacity-10 p-2 p-md-3 rounded-2 rounded-md-3\">
                                        <i class=\"bi bi-exclamation-triangle text-white fs-4 fs-md-2\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 134
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 134, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 135
            yield "                        <div class=\"col\">
                            <div class=\"stat-item p-2 p-md-3 bg-light rounded-2 rounded-md-3 h-100\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <span class=\"text-muted text-uppercase small fw-bold\">Bloqués</span>
                                        <h3 class=\"mb-0 fw-bold text-dark fs-4 fs-md-3\">";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["blockedFiltered"]) || array_key_exists("blockedFiltered", $context) ? $context["blockedFiltered"] : (function () { throw new RuntimeError('Variable "blockedFiltered" does not exist.', 140, $this->source); })()), "html", null, true);
            yield "</h3>
                                    </div>
                                    <div class=\"bg-dark bg-opacity-10 p-2 p-md-3 rounded-2 rounded-md-3\">
                                        <i class=\"bi bi-lock text-white fs-4 fs-md-2\"></i>
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

    <!-- Filtres avancés -->
    <div class=\"row mb-3 mb-md-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-2 py-md-3 d-flex align-items-center justify-content-between flex-wrap gap-2\">
                    <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\"><i class=\"bi bi-sliders2 me-2\"></i>Filtres avancés</h5>
                    <div class=\"d-flex align-items-center gap-1 gap-md-2 flex-wrap\">
                        ";
        // line 163
        yield "                        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm btn-md px-2 px-md-3\">
                            <i class=\"bi bi-arrow-counterclockwise me-1\"></i><span class=\"d-none d-sm-inline\">Effacer</span>
                        </a>
                        <button type=\"submit\" form=\"userFilterForm\" class=\"btn btn-primary btn-sm btn-md px-3 px-md-4\">
                            <i class=\"bi bi-funnel me-1\"></i><span class=\"d-none d-sm-inline\">Filtrer</span>
                        </button>
                        
                        ";
        // line 171
        yield "                        ";
        if (((isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 171, $this->source); })()) || (isset($context["can_add_user"]) || array_key_exists("can_add_user", $context) ? $context["can_add_user"] : (function () { throw new RuntimeError('Variable "can_add_user" does not exist.', 171, $this->source); })()))) {
            // line 172
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
            yield "\" class=\"btn btn-success btn-sm btn-md\">
                                <i class=\"bi bi-person-plus-fill me-1\"></i><span class=\"d-none d-sm-inline\">Nouvel utilisateur</span>
                            </a>
                        ";
        } else {
            // line 176
            yield "                            <button type=\"button\" class=\"btn btn-warning btn-sm btn-md\" data-bs-toggle=\"modal\" data-bs-target=\"#quotaReachedModal\">
                                <i class=\"bi bi-person-plus-fill me-1\"></i><span class=\"d-none d-sm-inline\">Limite atteinte</span>
                            </button>
                        ";
        }
        // line 180
        yield "                    </div>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <form method=\"get\" action=\"";
        // line 183
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"row g-2 g-md-3\" id=\"userFilterForm\">
                        
                        ";
        // line 186
        yield "                        ";
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 186, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 187
            yield "                            
                            ";
            // line 189
            yield "                            <div class=\"col-12 col-md-6 col-lg-3\">
                                <label for=\"search\" class=\"form-label fw-bold small\">Rechercher</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text bg-light border-0\"><i class=\"bi bi-search\"></i></span>
                                    <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control bg-light border-0 form-control-sm\" placeholder=\"Nom, email...\" value=\"";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 193, $this->source); })()), "html", null, true);
            yield "\">
                                    ";
            // line 194
            if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 194, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 195
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 195, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 195, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 195, $this->source); })()), "company" => (isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 195, $this->source); })())]), "html", null, true);
                yield "\" class=\"btn btn-outline-secondary border-0\" title=\"Effacer\">
                                        <i class=\"bi bi-x-circle\"></i>
                                    </a>
                                    ";
            }
            // line 199
            yield "                                </div>
                            </div>
                            
                            ";
            // line 203
            yield "                            <div class=\"col-12 col-md-6 col-lg-3\">
                                <label for=\"company\" class=\"form-label fw-bold small\">Entreprise</label>
                                <select name=\"company\" id=\"company\" class=\"form-select bg-light border-0 form-select-sm\">
                                    <option value=\"\">Toutes</option>
                                    ";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 207, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
                // line 208
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 208), "html", null, true);
                yield "\" ";
                yield ((((isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 208, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 208))) ? ("selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 208)), "truncate", [25, "..."], "method", false, false, false, 208), "html", null, true);
                yield "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['company'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 210
            yield "                                </select>
                            </div>
                            
                            ";
            // line 214
            yield "                            <div class=\"col-12 col-md-6 col-lg-3\">
                                <label for=\"role\" class=\"form-label fw-bold small\">Rôle</label>
                                <select name=\"role\" id=\"role\" class=\"form-select bg-light border-0 form-select-sm\">
                                    <option value=\"\">Tous</option>
                                    <option value=\"ROLE_ADMIN\" ";
            // line 218
            yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 218, $this->source); })()) == "ROLE_ADMIN")) ? ("selected") : (""));
            yield ">Administrateurs</option>
                                    <option value=\"ROLE_MANAGER\" ";
            // line 219
            yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 219, $this->source); })()) == "ROLE_MANAGER")) ? ("selected") : (""));
            yield ">Gestionnaires</option>
                                    <option value=\"ROLE_STOCK_MANAGER\" ";
            // line 220
            yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 220, $this->source); })()) == "ROLE_STOCK_MANAGER")) ? ("selected") : (""));
            yield ">Responsables Stock</option>
                                    <option value=\"ROLE_CASHIER\" ";
            // line 221
            yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 221, $this->source); })()) == "ROLE_CASHIER")) ? ("selected") : (""));
            yield ">Caissiers</option>
                                </select>
                            </div>
                            
                            ";
            // line 226
            yield "                            <div class=\"col-12 col-md-6 col-lg-3\">
                                <label for=\"status\" class=\"form-label fw-bold small\">Statut</label>
                                <select name=\"status\" id=\"status\" class=\"form-select bg-light border-0 form-select-sm\">
                                    <option value=\"\">Tous</option>
                                    <option value=\"active\" ";
            // line 230
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 230, $this->source); })()) == "active")) ? ("selected") : (""));
            yield ">Actifs</option>
                                    <option value=\"inactive\" ";
            // line 231
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 231, $this->source); })()) == "inactive")) ? ("selected") : (""));
            yield ">Désactivés</option>
                                    <option value=\"quota\" ";
            // line 232
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 232, $this->source); })()) == "quota")) ? ("selected") : (""));
            yield ">Hors quota</option>
                                    <option value=\"blocked\" ";
            // line 233
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 233, $this->source); })()) == "blocked")) ? ("selected") : (""));
            yield ">Bloqués</option>
                                </select>
                            </div>
                        
                        ";
            // line 238
            yield "                        ";
        } else {
            // line 239
            yield "                            
                            ";
            // line 241
            yield "                            <div class=\"col-12 col-md-6 col-lg-4\">
                                <label for=\"search\" class=\"form-label fw-bold small\">Rechercher</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text bg-light border-0\"><i class=\"bi bi-search\"></i></span>
                                    <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control bg-light border-0 form-control-sm\" placeholder=\"Nom, email...\" value=\"";
            // line 245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 245, $this->source); })()), "html", null, true);
            yield "\">
                                    ";
            // line 246
            if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 246, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 247
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 247, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 247, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 247, $this->source); })()), "company" => (isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 247, $this->source); })())]), "html", null, true);
                yield "\" class=\"btn btn-outline-secondary border-0\" title=\"Effacer\">
                                        <i class=\"bi bi-x-circle\"></i>
                                    </a>
                                    ";
            }
            // line 251
            yield "                                </div>
                            </div>
                            
                            ";
            // line 255
            yield "                            <div class=\"col-12 col-md-6 col-lg-4\">
                                <label for=\"role\" class=\"form-label fw-bold small\">Rôle</label>
                                <select name=\"role\" id=\"role\" class=\"form-select bg-light border-0 form-select-sm\">
                                    <option value=\"\">Tous</option>
                                    <option value=\"ROLE_ADMIN\" ";
            // line 259
            yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 259, $this->source); })()) == "ROLE_ADMIN")) ? ("selected") : (""));
            yield ">Administrateurs</option>
                                    <option value=\"ROLE_MANAGER\" ";
            // line 260
            yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 260, $this->source); })()) == "ROLE_MANAGER")) ? ("selected") : (""));
            yield ">Gestionnaires</option>
                                    <option value=\"ROLE_STOCK_MANAGER\" ";
            // line 261
            yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 261, $this->source); })()) == "ROLE_STOCK_MANAGER")) ? ("selected") : (""));
            yield ">Responsables Stock</option>
                                    <option value=\"ROLE_CASHIER\" ";
            // line 262
            yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 262, $this->source); })()) == "ROLE_CASHIER")) ? ("selected") : (""));
            yield ">Caissiers</option>
                                </select>
                            </div>
                            
                            ";
            // line 267
            yield "                            <div class=\"col-12 col-md-6 col-lg-4\">
                                <label for=\"status\" class=\"form-label fw-bold small\">Statut</label>
                                <select name=\"status\" id=\"status\" class=\"form-select bg-light border-0 form-select-sm\">
                                    <option value=\"\">Tous</option>
                                    <option value=\"active\" ";
            // line 271
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 271, $this->source); })()) == "active")) ? ("selected") : (""));
            yield ">Actifs</option>
                                    <option value=\"inactive\" ";
            // line 272
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 272, $this->source); })()) == "inactive")) ? ("selected") : (""));
            yield ">Désactivés</option>
                                    <option value=\"quota\" ";
            // line 273
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 273, $this->source); })()) == "quota")) ? ("selected") : (""));
            yield ">Hors quota</option>
                                </select>
                            </div>
                            
                        ";
        }
        // line 278
        yield "                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des utilisateurs -->
    <div class=\"card border-0 shadow-lg\">
        <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\">
                <i class=\"bi bi-table me-2 text-primary\"></i>
                Liste des utilisateurs
                <span class=\"badge bg-primary ms-2 rounded-pill\">";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 291, $this->source); })()), "html", null, true);
        yield "</span>
            </h5>
            <small class=\"text-muted d-none d-sm-block\"><i class=\"bi bi-mouse me-1\"></i> Scrollez pour voir plus</small>
        </div>
        
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0 table-sm table-md\">
                    <thead class=\"bg-light\">
                        <tr>
                            <th class=\"ps-2 ps-md-4\" style=\"width: 40px;\"></th>
                            <th>Utilisateur</th>
                            ";
        // line 303
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 303, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<th class=\"d-none d-lg-table-cell\">Entreprise</th>";
        }
        // line 304
        yield "                            <th class=\"d-none d-sm-table-cell\">Rôle</th>
                            <th>Statut</th>
                            <th class=\"d-none d-md-table-cell\">Contact</th>
                            <th class=\"d-none d-xl-table-cell\">Date d'embauche</th>
                            <th class=\"text-end pe-2 pe-md-4\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 312
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 312, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 313
            yield "                            ";
            $context["rowClass"] = "";
            // line 314
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "hmaServiceId", [], "any", false, false, false, 314) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "hmaServiceId", [], "any", false, false, false, 314), "hmaActive", [], "any", false, false, false, 314))) {
                // line 315
                yield "                                ";
                $context["rowClass"] = "table-inactive-company";
                // line 316
                yield "                            ";
            } elseif ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "subscriptionActive", [], "any", false, false, false, 316)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 317
                yield "                                ";
                $context["rowClass"] = "table-warning";
                // line 318
                yield "                            ";
            } elseif ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 318)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 319
                yield "                                ";
                $context["rowClass"] = "table-secondary";
                // line 320
                yield "                            ";
            }
            // line 321
            yield "                            
                            <tr class=\"align-middle ";
            // line 322
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rowClass"]) || array_key_exists("rowClass", $context) ? $context["rowClass"] : (function () { throw new RuntimeError('Variable "rowClass" does not exist.', 322, $this->source); })()), "html", null, true);
            yield "\">
                                <td class=\"ps-2 ps-md-4\">
                                    <div class=\"position-relative d-inline-block\">
                                        ";
            // line 325
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 325)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 326
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 326))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 326), "html", null, true);
                yield "\" class=\"rounded-circle\" width=\"35\" height=\"35\" style=\"object-fit: cover;\">
                                        ";
            } else {
                // line 328
                yield "                                            <div class=\"rounded-circle bg-primary text-white d-flex align-items-center justify-content-center\" style=\"width:35px;height:35px;\">
                                                <span class=\"fw-bold fs-6\">";
                // line 329
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 329))), "html", null, true);
                yield "</span>
                                            </div>
                                        ";
            }
            // line 332
            yield "                                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isHmaOwner", [], "any", false, false, false, 332)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 333
                yield "                                            <span class=\"position-absolute bottom-0 end-0 bg-warning rounded-circle p-1 border border-2 border-white\" style=\"width:14px;height:14px;\" data-bs-toggle=\"tooltip\" title=\"Propriétaire\">
                                                <i class=\"bi bi-crown-fill text-white\" style=\"font-size:8px;\"></i>
                                            </span>
                                        ";
            }
            // line 337
            yield "                                    </div>
                                </td>
                                <td>
                                    <div class=\"fw-semibold small fs-md-6\">";
            // line 340
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 340)), "truncate", [20, "..."], "method", false, false, false, 340), "html", null, true);
            yield "</div>
                                </td>
                                ";
            // line 342
            if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 342, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 343
                yield "                                <td class=\"d-none d-lg-table-cell\">
                                    ";
                // line 344
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "hmaServiceId", [], "any", false, false, false, 344)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 345
                    yield "                                        <span class=\"badge bg-light text-dark p-1 p-md-2 small\">
                                            <i class=\"bi bi-building me-1\"></i>
                                            ";
                    // line 347
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "hmaServiceId", [], "any", false, false, false, 347), "companyName", [], "any", false, false, false, 347)), "truncate", [15, "..."], "method", false, false, false, 347), "html", null, true);
                    yield "
                                        </span>
                                    ";
                } else {
                    // line 350
                    yield "                                        <span class=\"badge bg-secondary small\">Indépendant</span>
                                    ";
                }
                // line 352
                yield "                                </td>
                                ";
            }
            // line 354
            yield "                                <td class=\"d-none d-sm-table-cell\">
                                    <span class=\"badge rounded-pill ";
            // line 355
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roleBadgeClass", [], "any", false, false, false, 355), "html", null, true);
            yield " p-1 p-md-2 small\">
                                        <i class=\"bi ";
            // line 356
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roleIcon", [], "any", false, false, false, 356), "html", null, true);
            yield " me-1\"></i>
                                        ";
            // line 357
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roleLabel", [], "any", false, false, false, 357)), "truncate", [10, "..."], "method", false, false, false, 357), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td>
                                    <div class=\"d-flex flex-column gap-1\">
                                        <span class=\"badge rounded-pill ";
            // line 362
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statusBadgeClass", [], "any", false, false, false, 362), "html", null, true);
            yield " p-1 p-md-2 small\">
                                            <i class=\"bi ";
            // line 363
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statusIcon", [], "any", false, false, false, 363), "html", null, true);
            yield " me-1\"></i>
                                            ";
            // line 364
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statusLabel", [], "any", false, false, false, 364)), "truncate", [8, "..."], "method", false, false, false, 364), "html", null, true);
            yield "
                                        </span>
                                        ";
            // line 366
            if (( !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "passwordChanged", [], "any", false, false, false, 366) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isHmaOwner", [], "any", false, false, false, 366))) {
                // line 367
                yield "                                            <span class=\"badge bg-warning-subtle text-warning-emphasis p-1 small\" data-bs-toggle=\"tooltip\" title=\"Première connexion en attente\">
                                                <i class=\"bi bi-shield-exclamation me-1\"></i>1ère connexion
                                            </span>
                                        ";
            }
            // line 371
            yield "                                    </div>
                                </td>
                                <td class=\"d-none d-md-table-cell\">
                                    <div class=\"small\">
                                        <div><i class=\"bi bi-envelope me-1 text-muted\"></i> <a href=\"mailto:";
            // line 375
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 375), "html", null, true);
            yield "\" class=\"text-decoration-none text-dark\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 375)), "truncate", [15, "..."], "method", false, false, false, 375), "html", null, true);
            yield "</a></div>
                                        <div><i class=\"bi bi-telephone me-1 text-muted\"></i> <a href=\"tel:";
            // line 376
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 376), "html", null, true);
            yield "\" class=\"text-decoration-none text-dark\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 376), "html", null, true);
            yield "</a></div>
                                    </div>
                                </td>
                                <td class=\"d-none d-xl-table-cell\">
                                    ";
            // line 380
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 380)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 381
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 381), "d/m/Y"), "html", null, true);
                yield "
                                    ";
            } else {
                // line 383
                yield "                                        <span class=\"text-muted\">-</span>
                                    ";
            }
            // line 385
            yield "                                </td>
                                <td class=\"text-end pe-2 pe-md-4\">
                                    <div class=\"d-flex gap-1 justify-content-end flex-wrap\">
                                        <a href=\"";
            // line 388
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 388)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info\" data-bs-toggle=\"tooltip\" title=\"Voir\">
                                            <i class=\"bi bi-eye\"></i>
                                        </a>
                                        ";
            // line 391
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isEditableBy", [(isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 391, $this->source); })())], "method", false, false, false, 391)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 392
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 392)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-warning\" data-bs-toggle=\"tooltip\" title=\"Modifier\">
                                                <i class=\"bi bi-pencil\"></i>
                                            </a>
                                        ";
            }
            // line 396
            yield "                                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "canToggleStatusBy", [(isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 396, $this->source); })())], "method", false, false, false, 396)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 397
                yield "                                            <button type=\"button\" class=\"btn btn-sm btn-outline-";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 397)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("danger") : ("success"));
                yield " toggle-status-btn\"
                                                    data-user-id=\"";
                // line 398
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 398), "html", null, true);
                yield "\"
                                                    data-user-name=\"";
                // line 399
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 399), "html", null, true);
                yield "\"
                                                    data-current-status=\"";
                // line 400
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 400)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                yield "\"
                                                    data-csrf-token=\"";
                // line 401
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 401))), "html", null, true);
                yield "\"
                                                    data-bs-toggle=\"tooltip\"
                                                    title=\"";
                // line 403
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 403)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
                yield "\">
                                                <i class=\"bi bi-";
                // line 404
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 404)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("toggle-off") : ("toggle-on"));
                yield "\"></i>
                                            </button>
                                        ";
            }
            // line 407
            yield "                                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "canBeDeletedBy", [(isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 407, $this->source); })())], "method", false, false, false, 407)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 408
                yield "                                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-btn\"
                                                    data-user-id=\"";
                // line 409
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 409), "html", null, true);
                yield "\"
                                                    data-user-name=\"";
                // line 410
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 410), "html", null, true);
                yield "\"
                                                    data-csrf-token=\"";
                // line 411
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 411))), "html", null, true);
                yield "\"
                                                    data-bs-toggle=\"tooltip\"
                                                    title=\"Supprimer\">
                                                <i class=\"bi bi-trash\"></i>
                                            </button>
                                        ";
            }
            // line 417
            yield "                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 420
        if (!$context['_iterated']) {
            // line 421
            yield "                            <tr>
                                <td colspan=\"";
            // line 422
            if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 422, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "8";
            } else {
                yield "7";
            }
            yield "\" class=\"text-center py-4 py-md-5\">
                                    <div class=\"empty-state\">
                                        <i class=\"bi bi-people display-1 text-muted mb-3 mb-md-4 d-block\"></i>
                                        <h4 class=\"text-muted mb-2 mb-md-3\">Aucun utilisateur trouvé</h4>
                                        <p class=\"text-muted mb-3 mb-md-4\">Commencez par créer votre premier utilisateur</p>
                                        ";
            // line 427
            if (((isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 427, $this->source); })()) || (isset($context["can_add_user"]) || array_key_exists("can_add_user", $context) ? $context["can_add_user"] : (function () { throw new RuntimeError('Variable "can_add_user" does not exist.', 427, $this->source); })()))) {
                // line 428
                yield "                                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
                yield "\" class=\"btn btn-primary btn-sm btn-lg-md px-4 px-md-5\">
                                                <i class=\"bi bi-person-plus me-2\"></i>Créer un utilisateur
                                            </a>
                                        ";
            }
            // line 432
            yield "                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 436
        yield "                    </tbody>
                </table>
            </div>
        </div>
              
        <!-- Pagination -->
        ";
        // line 442
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 442, $this->source); })()) > 1)) {
            // line 443
            yield "        <div class=\"card-footer bg-white py-2 py-md-3 d-flex flex-wrap justify-content-between align-items-center gap-2\">
            <div class=\"text-muted small\">
                <span class=\"d-none d-sm-inline\">Affichage de </span>
                ";
            // line 446
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 446, $this->source); })()) - 1) * (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 446, $this->source); })())) + 1), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 446, $this->source); })()) * (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 446, $this->source); })())), (isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 446, $this->source); })())), "html", null, true);
            yield " 
                <span class=\"d-none d-sm-inline\">sur ";
            // line 447
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 447, $this->source); })()), "html", null, true);
            yield " utilisateurs</span>
            </div>
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination pagination-sm mb-0\">
                    <li class=\"page-item ";
            // line 451
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 451, $this->source); })()) <= 1)) ? ("disabled") : (""));
            yield "\">
                        <a class=\"page-link\" href=\"";
            // line 452
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 452, $this->source); })()) - 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 452, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 452, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 452, $this->source); })()), "company" => (isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 452, $this->source); })())]), "html", null, true);
            yield "\"><i class=\"bi bi-chevron-left\"></i></a>
                    </li>
                    ";
            // line 454
            $context["maxVisible"] = 5;
            // line 455
            yield "                    ";
            $context["startPage"] = max(1, ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 455, $this->source); })()) - 2));
            // line 456
            yield "                    ";
            $context["endPage"] = min((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 456, $this->source); })()), (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 456, $this->source); })()) + (isset($context["maxVisible"]) || array_key_exists("maxVisible", $context) ? $context["maxVisible"] : (function () { throw new RuntimeError('Variable "maxVisible" does not exist.', 456, $this->source); })())) - 1));
            // line 457
            yield "                    ";
            if ((((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 457, $this->source); })()) - (isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 457, $this->source); })())) < ((isset($context["maxVisible"]) || array_key_exists("maxVisible", $context) ? $context["maxVisible"] : (function () { throw new RuntimeError('Variable "maxVisible" does not exist.', 457, $this->source); })()) - 1))) {
                // line 458
                yield "                        ";
                $context["startPage"] = max(1, (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 458, $this->source); })()) - (isset($context["maxVisible"]) || array_key_exists("maxVisible", $context) ? $context["maxVisible"] : (function () { throw new RuntimeError('Variable "maxVisible" does not exist.', 458, $this->source); })())) + 1));
                // line 459
                yield "                    ";
            }
            // line 460
            yield "                    
                    ";
            // line 461
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 461, $this->source); })()) > 1)) {
                // line 462
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 463
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => 1, "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 463, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 463, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 463, $this->source); })()), "company" => (isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 463, $this->source); })())]), "html", null, true);
                yield "\">1</a>
                        </li>
                        ";
                // line 465
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 465, $this->source); })()) > 2)) {
                    // line 466
                    yield "                            <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                        ";
                }
                // line 468
                yield "                    ";
            }
            // line 469
            yield "                    
                    ";
            // line 470
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 470, $this->source); })()), (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 470, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 471
                yield "                        <li class=\"page-item ";
                yield ((($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 471, $this->source); })()))) ? ("active") : (""));
                yield "\">
                            <a class=\"page-link\" href=\"";
                // line 472
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => $context["i"], "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 472, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 472, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 472, $this->source); })()), "company" => (isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 472, $this->source); })())]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 475
            yield "                    
                    ";
            // line 476
            if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 476, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 476, $this->source); })()))) {
                // line 477
                yield "                        ";
                if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 477, $this->source); })()) < ((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 477, $this->source); })()) - 1))) {
                    // line 478
                    yield "                            <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                        ";
                }
                // line 480
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 481
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 481, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 481, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 481, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 481, $this->source); })()), "company" => (isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 481, $this->source); })())]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 481, $this->source); })()), "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            // line 484
            yield "                    
                    <li class=\"page-item ";
            // line 485
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 485, $this->source); })()) >= (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 485, $this->source); })()))) ? ("disabled") : (""));
            yield "\">
                        <a class=\"page-link\" href=\"";
            // line 486
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 486, $this->source); })()) + 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 486, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 486, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 486, $this->source); })()), "company" => (isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 486, $this->source); })())]), "html", null, true);
            yield "\"><i class=\"bi bi-chevron-right\"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
        ";
        }
        // line 492
        yield "    </div>
</div>

<!-- Modals -->
<div class=\"modal fade\" id=\"toggleStatusModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title fs-6\"><i class=\"bi bi-exclamation-triangle me-2\"></i>Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"bi bi-question-circle text-warning\" style=\"font-size: 3rem;\"></i>
                <h5 id=\"toggleStatusMessage\" class=\"mt-2 mt-md-3 mb-0 fs-6\"></h5>
                <p class=\"text-muted small mb-0\">Cette action peut être annulée à tout moment.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3\">
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3\" data-bs-dismiss=\"modal\"><i class=\"bi bi-x me-2\"></i>Annuler</button>
                <form id=\"toggleStatusForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleStatusToken\">
                    <button type=\"submit\" class=\"btn btn-warning btn-sm px-3\"><i class=\"bi bi-check me-2\"></i>Confirmer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title fs-6\"><i class=\"bi bi-exclamation-triangle me-2\"></i>Confirmation de suppression</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"bi bi-trash3 text-danger\" style=\"font-size: 3rem;\"></i>
                <h5 id=\"deleteMessage\" class=\"mt-2 mt-md-3 mb-0 fs-6\"></h5>
                <p class=\"text-muted small mb-0\">Cette action est irréversible.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3\">
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3\" data-bs-dismiss=\"modal\"><i class=\"bi bi-x me-2\"></i>Annuler</button>
                <form id=\"deleteForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm px-3\"><i class=\"bi bi-trash me-2\"></i>Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title fs-6\"><i class=\"bi bi-exclamation-triangle me-2\"></i>Limite atteinte</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"bi bi-people-fill text-warning\" style=\"font-size: 3rem;\"></i>
                <h5 class=\"mt-2 mt-md-3 fs-6\">Limite d'utilisateurs atteinte</h5>
                <p class=\"text-muted small mb-0\">Passez à un plan supérieur pour ajouter des utilisateurs.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3\">
                <a href=\"";
        // line 555
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
        yield "\" class=\"btn btn-warning btn-sm px-3\"><i class=\"bi bi-arrow-up-circle me-2\"></i>Voir les offres</a>
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3\" data-bs-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 563
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

        // line 564
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
            toggleMessage.innerHTML = `Êtes-vous sûr de vouloir <strong class=\"text-\${currentStatus === 'active' ? 'danger' : 'success'}\">\${action}</strong> <strong>\${userName}</strong> ?`;
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

    // line 614
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

        // line 615
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
    min-height: 150px;
}
@media (min-width: 768px) {
    .modern-header {
        min-height: 200px;
    }
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
    width: 200px;
    height: 200px;
    top: -100px;
    right: -50px;
    animation: float 8s ease-in-out infinite;
}
@media (min-width: 768px) {
    .shape-1 {
        width: 300px;
        height: 300px;
        top: -150px;
    }
}
.shape-2 {
    width: 120px;
    height: 120px;
    bottom: -60px;
    left: -30px;
    animation: float 12s ease-in-out infinite reverse;
}
@media (min-width: 768px) {
    .shape-2 {
        width: 200px;
        height: 200px;
        bottom: -80px;
    }
}
.shape-3 {
    width: 100px;
    height: 100px;
    top: 50%;
    left: 20%;
    animation: float 10s ease-in-out infinite;
}
@media (min-width: 768px) {
    .shape-3 {
        width: 150px;
        height: 150px;
        left: 30%;
    }
}
@keyframes float {
    0%,100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-15px) rotate(10deg); }
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
    gap: 6px;
}
@media (min-width: 576px) {
    .stats-grid {
        gap: 10px;
    }
}
.stat-card {
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
    border: 1px solid rgba(255,255,255,0.1);
}
.stat-card:hover {
    transform: translateY(-3px);
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
    height: 30px;
}
@media (min-width: 768px) {
    .wave-decoration svg {
        height: 50px;
    }
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
    padding: 0.25rem 0.5rem;
    font-size: 0.75rem;
}
@media (min-width: 576px) {
    .pagination-sm .page-link {
        padding: 0.25rem 0.75rem;
        font-size: 0.875rem;
    }
}

/* Empty state */
.empty-state {
    padding: 2rem;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-radius: 16px;
}
@media (min-width: 768px) {
    .empty-state {
        padding: 3rem;
        border-radius: 20px;
    }
}

/* Responsive table */
@media (max-width: 576px) {
    .table-sm td, .table-sm th {
        padding: 0.3rem 0.4rem;
        font-size: 0.75rem;
    }
    .btn-sm {
        padding: 0.15rem 0.3rem;
        font-size: 0.7rem;
    }
    .btn-sm i {
        font-size: 0.8rem;
    }
    .badge {
        font-size: 0.6rem !important;
        padding: 0.2rem 0.4rem !important;
    }
}

/* Container padding */
@media (max-width: 576px) {
    .container-fluid {
        padding-left: 8px !important;
        padding-right: 8px !important;
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
        return array (  1180 => 615,  1167 => 614,  1107 => 564,  1094 => 563,  1076 => 555,  1011 => 492,  1002 => 486,  998 => 485,  995 => 484,  987 => 481,  984 => 480,  980 => 478,  977 => 477,  975 => 476,  972 => 475,  961 => 472,  956 => 471,  952 => 470,  949 => 469,  946 => 468,  942 => 466,  940 => 465,  935 => 463,  932 => 462,  930 => 461,  927 => 460,  924 => 459,  921 => 458,  918 => 457,  915 => 456,  912 => 455,  910 => 454,  905 => 452,  901 => 451,  894 => 447,  888 => 446,  883 => 443,  881 => 442,  873 => 436,  864 => 432,  856 => 428,  854 => 427,  842 => 422,  839 => 421,  837 => 420,  830 => 417,  821 => 411,  817 => 410,  813 => 409,  810 => 408,  807 => 407,  801 => 404,  797 => 403,  792 => 401,  788 => 400,  784 => 399,  780 => 398,  775 => 397,  772 => 396,  764 => 392,  762 => 391,  756 => 388,  751 => 385,  747 => 383,  741 => 381,  739 => 380,  730 => 376,  724 => 375,  718 => 371,  712 => 367,  710 => 366,  705 => 364,  701 => 363,  697 => 362,  689 => 357,  685 => 356,  681 => 355,  678 => 354,  674 => 352,  670 => 350,  664 => 347,  660 => 345,  658 => 344,  655 => 343,  653 => 342,  648 => 340,  643 => 337,  637 => 333,  634 => 332,  628 => 329,  625 => 328,  617 => 326,  615 => 325,  609 => 322,  606 => 321,  603 => 320,  600 => 319,  597 => 318,  594 => 317,  591 => 316,  588 => 315,  585 => 314,  582 => 313,  577 => 312,  567 => 304,  563 => 303,  548 => 291,  533 => 278,  525 => 273,  521 => 272,  517 => 271,  511 => 267,  504 => 262,  500 => 261,  496 => 260,  492 => 259,  486 => 255,  481 => 251,  473 => 247,  471 => 246,  467 => 245,  461 => 241,  458 => 239,  455 => 238,  448 => 233,  444 => 232,  440 => 231,  436 => 230,  430 => 226,  423 => 221,  419 => 220,  415 => 219,  411 => 218,  405 => 214,  400 => 210,  387 => 208,  383 => 207,  377 => 203,  372 => 199,  364 => 195,  362 => 194,  358 => 193,  352 => 189,  349 => 187,  346 => 186,  341 => 183,  336 => 180,  330 => 176,  322 => 172,  319 => 171,  308 => 163,  293 => 149,  281 => 140,  274 => 135,  272 => 134,  261 => 126,  245 => 113,  229 => 100,  213 => 87,  200 => 81,  172 => 56,  165 => 52,  158 => 48,  151 => 44,  142 => 37,  136 => 34,  133 => 33,  126 => 28,  124 => 27,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/user/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion des utilisateurs - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid px-2 px-md-4\">
    <!-- Header moderne -->
    <div class=\"row mb-3 mb-md-4\">
        <div class=\"col-12\">
            <div class=\"modern-header position-relative overflow-hidden rounded-3 rounded-md-4 shadow-lg\">
                <div class=\"floating-shapes\">
                    <div class=\"shape shape-1\"></div>
                    <div class=\"shape shape-2\"></div>
                    <div class=\"shape shape-3\"></div>
                </div>
                <div class=\"position-relative p-3 p-md-5\" style=\"z-index: 2;\">
                    <div class=\"row align-items-center g-3\">
                        <div class=\"col-12 col-lg-8\">
                            <div class=\"d-flex align-items-center gap-3 gap-md-4\">
                                <div class=\"icon-wrapper bg-white bg-opacity-20 rounded-3 rounded-md-4 p-3 p-md-4\">
                                    <i class=\"bi bi-people-fill text-white display-6 display-md-4\"></i>
                                </div>
                                <div>
                                    <h1 class=\"h2 h-md-1 display-md-5 fw-bold text-white mb-1 mb-md-2\">Gestion des utilisateurs</h1>
                                    <div class=\"d-flex align-items-center gap-2 gap-md-3 flex-wrap\">
                                        {% if is_super_admin %}
                                            <span class=\"badge bg-white text-primary px-3 py-1 px-md-4 py-md-2 rounded-pill fs-6\">
                                                <i class=\"bi bi-shield-shaded me-1 me-md-2\"></i>Super Admin
                                            </span>
                                            <span class=\"text-white-50 small\"><i class=\"bi bi-building me-1\"></i>Toutes les entreprises</span>
                                        {% else %}
                                            <span class=\"badge bg-white text-success px-3 py-1 px-md-4 py-md-2 rounded-pill fs-6\">
                                                <i class=\"bi bi-building me-1 me-md-2\"></i>{{ app.user.companyDisplayName|u.truncate(20, '...') }}
                                            </span>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-lg-4\">
                            <div class=\"stats-grid\">
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-2 rounded-md-3 p-2 p-md-3 text-center\">
                                    <div class=\"stat-value text-white h5 h-md-3 mb-0 fw-bold\">{{ stats.total }}</div>
                                    <div class=\"stat-label text-white-50 small\">Total</div>
                                </div>
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-2 rounded-md-3 p-2 p-md-3 text-center\">
                                    <div class=\"stat-value text-success h5 h-md-3 mb-0 fw-bold\">{{ stats.active }}</div>
                                    <div class=\"stat-label text-white-50 small\">Actifs</div>
                                </div>
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-2 rounded-md-3 p-2 p-md-3 text-center\">
                                    <div class=\"stat-value text-warning h5 h-md-3 mb-0 fw-bold\">{{ stats.inactiveByAdmin }}</div>
                                    <div class=\"stat-label text-white-50 small\">Inactifs</div>
                                </div>
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-2 rounded-md-3 p-2 p-md-3 text-center\">
                                    <div class=\"stat-value text-danger h5 h-md-3 mb-0 fw-bold\">{{ stats.outOfQuota }}</div>
                                    <div class=\"stat-label text-white-50 small\">Hors quota</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"wave-decoration d-none d-md-block\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 120\" preserveAspectRatio=\"none\">
                        <path fill=\"#ffffff\" fill-opacity=\"1\" d=\"M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,120L1360,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z\"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistiques filtrées -->
    <div class=\"row mb-3 mb-md-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-2 py-md-3 d-flex align-items-center\">
                    <i class=\"bi bi-funnel me-2 text-primary fs-5 fs-md-4\"></i>
                    <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\">Statistiques selon les filtres</h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"row g-2 g-md-3 row-cols-2 row-cols-md-4 {% if is_super_admin %}row-cols-xl-5{% else %}row-cols-xl-4{% endif %}\">
                        <div class=\"col\">
                            <div class=\"stat-item p-2 p-md-3 bg-light rounded-2 rounded-md-3 h-100\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <span class=\"text-muted text-uppercase small fw-bold\">Filtrés</span>
                                        <h3 class=\"mb-0 fw-bold fs-4 fs-md-3\">{{ totalFiltered }}</h3>
                                    </div>
                                    <div class=\"bg-primary bg-opacity-10 p-2 p-md-3 rounded-2 rounded-md-3\">
                                        <i class=\"bi bi-people text-white fs-4 fs-md-2\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col\">
                            <div class=\"stat-item p-2 p-md-3 bg-light rounded-2 rounded-md-3 h-100\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <span class=\"text-muted text-uppercase small fw-bold\">Actifs</span>
                                        <h3 class=\"mb-0 fw-bold text-success fs-4 fs-md-3\">{{ activeFiltered }}</h3>
                                    </div>
                                    <div class=\"bg-success bg-opacity-10 p-2 p-md-3 rounded-2 rounded-md-3\">
                                        <i class=\"bi bi-check-circle text-white fs-4 fs-md-2\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col\">
                            <div class=\"stat-item p-2 p-md-3 bg-light rounded-2 rounded-md-3 h-100\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <span class=\"text-muted text-uppercase small fw-bold\">Inactifs</span>
                                        <h3 class=\"mb-0 fw-bold text-danger fs-4 fs-md-3\">{{ inactiveFiltered }}</h3>
                                    </div>
                                    <div class=\"bg-danger bg-opacity-10 p-2 p-md-3 rounded-2 rounded-md-3\">
                                        <i class=\"bi bi-pause-circle text-white fs-4 fs-md-2\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col\">
                            <div class=\"stat-item p-2 p-md-3 bg-light rounded-2 rounded-md-3 h-100\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <span class=\"text-muted text-uppercase small fw-bold\">Hors quota</span>
                                        <h3 class=\"mb-0 fw-bold text-warning fs-4 fs-md-3\">{{ outOfQuotaFiltered }}</h3>
                                    </div>
                                    <div class=\"bg-warning bg-opacity-10 p-2 p-md-3 rounded-2 rounded-md-3\">
                                        <i class=\"bi bi-exclamation-triangle text-white fs-4 fs-md-2\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% if is_super_admin %}
                        <div class=\"col\">
                            <div class=\"stat-item p-2 p-md-3 bg-light rounded-2 rounded-md-3 h-100\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <span class=\"text-muted text-uppercase small fw-bold\">Bloqués</span>
                                        <h3 class=\"mb-0 fw-bold text-dark fs-4 fs-md-3\">{{ blockedFiltered }}</h3>
                                    </div>
                                    <div class=\"bg-dark bg-opacity-10 p-2 p-md-3 rounded-2 rounded-md-3\">
                                        <i class=\"bi bi-lock text-white fs-4 fs-md-2\"></i>
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

    <!-- Filtres avancés -->
    <div class=\"row mb-3 mb-md-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-2 py-md-3 d-flex align-items-center justify-content-between flex-wrap gap-2\">
                    <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\"><i class=\"bi bi-sliders2 me-2\"></i>Filtres avancés</h5>
                    <div class=\"d-flex align-items-center gap-1 gap-md-2 flex-wrap\">
                        {# Boutons Filtrer et Effacer #}
                        <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-outline-secondary btn-sm btn-md px-2 px-md-3\">
                            <i class=\"bi bi-arrow-counterclockwise me-1\"></i><span class=\"d-none d-sm-inline\">Effacer</span>
                        </a>
                        <button type=\"submit\" form=\"userFilterForm\" class=\"btn btn-primary btn-sm btn-md px-3 px-md-4\">
                            <i class=\"bi bi-funnel me-1\"></i><span class=\"d-none d-sm-inline\">Filtrer</span>
                        </button>
                        
                        {# Bouton Nouvel utilisateur #}
                        {% if is_super_admin or can_add_user %}
                            <a href=\"{{ path('app_user_new') }}\" class=\"btn btn-success btn-sm btn-md\">
                                <i class=\"bi bi-person-plus-fill me-1\"></i><span class=\"d-none d-sm-inline\">Nouvel utilisateur</span>
                            </a>
                        {% else %}
                            <button type=\"button\" class=\"btn btn-warning btn-sm btn-md\" data-bs-toggle=\"modal\" data-bs-target=\"#quotaReachedModal\">
                                <i class=\"bi bi-person-plus-fill me-1\"></i><span class=\"d-none d-sm-inline\">Limite atteinte</span>
                            </button>
                        {% endif %}
                    </div>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <form method=\"get\" action=\"{{ path('app_user_index') }}\" class=\"row g-2 g-md-3\" id=\"userFilterForm\">
                        
                        {# CAS 1: SUPER ADMIN - 4 filtres #}
                        {% if is_super_admin %}
                            
                            {# 1. RECHERCHE #}
                            <div class=\"col-12 col-md-6 col-lg-3\">
                                <label for=\"search\" class=\"form-label fw-bold small\">Rechercher</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text bg-light border-0\"><i class=\"bi bi-search\"></i></span>
                                    <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control bg-light border-0 form-control-sm\" placeholder=\"Nom, email...\" value=\"{{ search }}\">
                                    {% if search %}
                                    <a href=\"{{ path('app_user_index', {page: currentPage, role: role, status: status, company: companyId}) }}\" class=\"btn btn-outline-secondary border-0\" title=\"Effacer\">
                                        <i class=\"bi bi-x-circle\"></i>
                                    </a>
                                    {% endif %}
                                </div>
                            </div>
                            
                            {# 2. ENTREPRISE #}
                            <div class=\"col-12 col-md-6 col-lg-3\">
                                <label for=\"company\" class=\"form-label fw-bold small\">Entreprise</label>
                                <select name=\"company\" id=\"company\" class=\"form-select bg-light border-0 form-select-sm\">
                                    <option value=\"\">Toutes</option>
                                    {% for company in companies %}
                                    <option value=\"{{ company.id }}\" {{ companyId == company.id ? 'selected' }}>{{ company.companyName|u.truncate(25, '...') }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            
                            {# 3. RÔLE #}
                            <div class=\"col-12 col-md-6 col-lg-3\">
                                <label for=\"role\" class=\"form-label fw-bold small\">Rôle</label>
                                <select name=\"role\" id=\"role\" class=\"form-select bg-light border-0 form-select-sm\">
                                    <option value=\"\">Tous</option>
                                    <option value=\"ROLE_ADMIN\" {{ role == 'ROLE_ADMIN' ? 'selected' }}>Administrateurs</option>
                                    <option value=\"ROLE_MANAGER\" {{ role == 'ROLE_MANAGER' ? 'selected' }}>Gestionnaires</option>
                                    <option value=\"ROLE_STOCK_MANAGER\" {{ role == 'ROLE_STOCK_MANAGER' ? 'selected' }}>Responsables Stock</option>
                                    <option value=\"ROLE_CASHIER\" {{ role == 'ROLE_CASHIER' ? 'selected' }}>Caissiers</option>
                                </select>
                            </div>
                            
                            {# 4. STATUT #}
                            <div class=\"col-12 col-md-6 col-lg-3\">
                                <label for=\"status\" class=\"form-label fw-bold small\">Statut</label>
                                <select name=\"status\" id=\"status\" class=\"form-select bg-light border-0 form-select-sm\">
                                    <option value=\"\">Tous</option>
                                    <option value=\"active\" {{ status == 'active' ? 'selected' }}>Actifs</option>
                                    <option value=\"inactive\" {{ status == 'inactive' ? 'selected' }}>Désactivés</option>
                                    <option value=\"quota\" {{ status == 'quota' ? 'selected' }}>Hors quota</option>
                                    <option value=\"blocked\" {{ status == 'blocked' ? 'selected' }}>Bloqués</option>
                                </select>
                            </div>
                        
                        {# CAS 2: ADMIN - 3 filtres #}
                        {% else %}
                            
                            {# 1. RECHERCHE #}
                            <div class=\"col-12 col-md-6 col-lg-4\">
                                <label for=\"search\" class=\"form-label fw-bold small\">Rechercher</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text bg-light border-0\"><i class=\"bi bi-search\"></i></span>
                                    <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control bg-light border-0 form-control-sm\" placeholder=\"Nom, email...\" value=\"{{ search }}\">
                                    {% if search %}
                                    <a href=\"{{ path('app_user_index', {page: currentPage, role: role, status: status, company: companyId}) }}\" class=\"btn btn-outline-secondary border-0\" title=\"Effacer\">
                                        <i class=\"bi bi-x-circle\"></i>
                                    </a>
                                    {% endif %}
                                </div>
                            </div>
                            
                            {# 2. RÔLE #}
                            <div class=\"col-12 col-md-6 col-lg-4\">
                                <label for=\"role\" class=\"form-label fw-bold small\">Rôle</label>
                                <select name=\"role\" id=\"role\" class=\"form-select bg-light border-0 form-select-sm\">
                                    <option value=\"\">Tous</option>
                                    <option value=\"ROLE_ADMIN\" {{ role == 'ROLE_ADMIN' ? 'selected' }}>Administrateurs</option>
                                    <option value=\"ROLE_MANAGER\" {{ role == 'ROLE_MANAGER' ? 'selected' }}>Gestionnaires</option>
                                    <option value=\"ROLE_STOCK_MANAGER\" {{ role == 'ROLE_STOCK_MANAGER' ? 'selected' }}>Responsables Stock</option>
                                    <option value=\"ROLE_CASHIER\" {{ role == 'ROLE_CASHIER' ? 'selected' }}>Caissiers</option>
                                </select>
                            </div>
                            
                            {# 3. STATUT #}
                            <div class=\"col-12 col-md-6 col-lg-4\">
                                <label for=\"status\" class=\"form-label fw-bold small\">Statut</label>
                                <select name=\"status\" id=\"status\" class=\"form-select bg-light border-0 form-select-sm\">
                                    <option value=\"\">Tous</option>
                                    <option value=\"active\" {{ status == 'active' ? 'selected' }}>Actifs</option>
                                    <option value=\"inactive\" {{ status == 'inactive' ? 'selected' }}>Désactivés</option>
                                    <option value=\"quota\" {{ status == 'quota' ? 'selected' }}>Hors quota</option>
                                </select>
                            </div>
                            
                        {% endif %}
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des utilisateurs -->
    <div class=\"card border-0 shadow-lg\">
        <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\">
                <i class=\"bi bi-table me-2 text-primary\"></i>
                Liste des utilisateurs
                <span class=\"badge bg-primary ms-2 rounded-pill\">{{ totalItems }}</span>
            </h5>
            <small class=\"text-muted d-none d-sm-block\"><i class=\"bi bi-mouse me-1\"></i> Scrollez pour voir plus</small>
        </div>
        
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0 table-sm table-md\">
                    <thead class=\"bg-light\">
                        <tr>
                            <th class=\"ps-2 ps-md-4\" style=\"width: 40px;\"></th>
                            <th>Utilisateur</th>
                            {% if is_super_admin %}<th class=\"d-none d-lg-table-cell\">Entreprise</th>{% endif %}
                            <th class=\"d-none d-sm-table-cell\">Rôle</th>
                            <th>Statut</th>
                            <th class=\"d-none d-md-table-cell\">Contact</th>
                            <th class=\"d-none d-xl-table-cell\">Date d'embauche</th>
                            <th class=\"text-end pe-2 pe-md-4\">Actions</th>
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
                                <td class=\"ps-2 ps-md-4\">
                                    <div class=\"position-relative d-inline-block\">
                                        {% if user.photo %}
                                            <img src=\"{{ asset('uploads/users/' ~ user.photo) }}\" alt=\"{{ user.fullName }}\" class=\"rounded-circle\" width=\"35\" height=\"35\" style=\"object-fit: cover;\">
                                        {% else %}
                                            <div class=\"rounded-circle bg-primary text-white d-flex align-items-center justify-content-center\" style=\"width:35px;height:35px;\">
                                                <span class=\"fw-bold fs-6\">{{ user.fullName|first|upper }}</span>
                                            </div>
                                        {% endif %}
                                        {% if user.isHmaOwner %}
                                            <span class=\"position-absolute bottom-0 end-0 bg-warning rounded-circle p-1 border border-2 border-white\" style=\"width:14px;height:14px;\" data-bs-toggle=\"tooltip\" title=\"Propriétaire\">
                                                <i class=\"bi bi-crown-fill text-white\" style=\"font-size:8px;\"></i>
                                            </span>
                                        {% endif %}
                                    </div>
                                </td>
                                <td>
                                    <div class=\"fw-semibold small fs-md-6\">{{ user.fullName|u.truncate(20, '...') }}</div>
                                </td>
                                {% if is_super_admin %}
                                <td class=\"d-none d-lg-table-cell\">
                                    {% if user.hmaServiceId %}
                                        <span class=\"badge bg-light text-dark p-1 p-md-2 small\">
                                            <i class=\"bi bi-building me-1\"></i>
                                            {{ user.hmaServiceId.companyName|u.truncate(15, '...') }}
                                        </span>
                                    {% else %}
                                        <span class=\"badge bg-secondary small\">Indépendant</span>
                                    {% endif %}
                                </td>
                                {% endif %}
                                <td class=\"d-none d-sm-table-cell\">
                                    <span class=\"badge rounded-pill {{ user.roleBadgeClass }} p-1 p-md-2 small\">
                                        <i class=\"bi {{ user.roleIcon }} me-1\"></i>
                                        {{ user.roleLabel|u.truncate(10, '...') }}
                                    </span>
                                </td>
                                <td>
                                    <div class=\"d-flex flex-column gap-1\">
                                        <span class=\"badge rounded-pill {{ user.statusBadgeClass }} p-1 p-md-2 small\">
                                            <i class=\"bi {{ user.statusIcon }} me-1\"></i>
                                            {{ user.statusLabel|u.truncate(8, '...') }}
                                        </span>
                                        {% if not user.passwordChanged and not user.isHmaOwner %}
                                            <span class=\"badge bg-warning-subtle text-warning-emphasis p-1 small\" data-bs-toggle=\"tooltip\" title=\"Première connexion en attente\">
                                                <i class=\"bi bi-shield-exclamation me-1\"></i>1ère connexion
                                            </span>
                                        {% endif %}
                                    </div>
                                </td>
                                <td class=\"d-none d-md-table-cell\">
                                    <div class=\"small\">
                                        <div><i class=\"bi bi-envelope me-1 text-muted\"></i> <a href=\"mailto:{{ user.email }}\" class=\"text-decoration-none text-dark\">{{ user.email|u.truncate(15, '...') }}</a></div>
                                        <div><i class=\"bi bi-telephone me-1 text-muted\"></i> <a href=\"tel:{{ user.phone }}\" class=\"text-decoration-none text-dark\">{{ user.phone }}</a></div>
                                    </div>
                                </td>
                                <td class=\"d-none d-xl-table-cell\">
                                    {% if user.createdAt %}
                                        {{ user.createdAt|date('d/m/Y') }}
                                    {% else %}
                                        <span class=\"text-muted\">-</span>
                                    {% endif %}
                                </td>
                                <td class=\"text-end pe-2 pe-md-4\">
                                    <div class=\"d-flex gap-1 justify-content-end flex-wrap\">
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
                                <td colspan=\"{% if is_super_admin %}8{% else %}7{% endif %}\" class=\"text-center py-4 py-md-5\">
                                    <div class=\"empty-state\">
                                        <i class=\"bi bi-people display-1 text-muted mb-3 mb-md-4 d-block\"></i>
                                        <h4 class=\"text-muted mb-2 mb-md-3\">Aucun utilisateur trouvé</h4>
                                        <p class=\"text-muted mb-3 mb-md-4\">Commencez par créer votre premier utilisateur</p>
                                        {% if is_super_admin or can_add_user %}
                                            <a href=\"{{ path('app_user_new') }}\" class=\"btn btn-primary btn-sm btn-lg-md px-4 px-md-5\">
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
        <div class=\"card-footer bg-white py-2 py-md-3 d-flex flex-wrap justify-content-between align-items-center gap-2\">
            <div class=\"text-muted small\">
                <span class=\"d-none d-sm-inline\">Affichage de </span>
                {{ ((currentPage - 1) * limit) + 1 }} à {{ min(currentPage * limit, totalItems) }} 
                <span class=\"d-none d-sm-inline\">sur {{ totalItems }} utilisateurs</span>
            </div>
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination pagination-sm mb-0\">
                    <li class=\"page-item {{ currentPage <= 1 ? 'disabled' }}\">
                        <a class=\"page-link\" href=\"{{ path('app_user_index', {page: currentPage - 1, search: search, role: role, status: status, company: companyId}) }}\"><i class=\"bi bi-chevron-left\"></i></a>
                    </li>
                    {% set maxVisible = 5 %}
                    {% set startPage = max(1, currentPage - 2) %}
                    {% set endPage = min(totalPages, startPage + maxVisible - 1) %}
                    {% if endPage - startPage < maxVisible - 1 %}
                        {% set startPage = max(1, endPage - maxVisible + 1) %}
                    {% endif %}
                    
                    {% if startPage > 1 %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('app_user_index', {page: 1, search: search, role: role, status: status, company: companyId}) }}\">1</a>
                        </li>
                        {% if startPage > 2 %}
                            <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                        {% endif %}
                    {% endif %}
                    
                    {% for i in startPage..endPage %}
                        <li class=\"page-item {{ i == currentPage ? 'active' }}\">
                            <a class=\"page-link\" href=\"{{ path('app_user_index', {page: i, search: search, role: role, status: status, company: companyId}) }}\">{{ i }}</a>
                        </li>
                    {% endfor %}
                    
                    {% if endPage < totalPages %}
                        {% if endPage < totalPages - 1 %}
                            <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                        {% endif %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('app_user_index', {page: totalPages, search: search, role: role, status: status, company: companyId}) }}\">{{ totalPages }}</a>
                        </li>
                    {% endif %}
                    
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
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title fs-6\"><i class=\"bi bi-exclamation-triangle me-2\"></i>Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"bi bi-question-circle text-warning\" style=\"font-size: 3rem;\"></i>
                <h5 id=\"toggleStatusMessage\" class=\"mt-2 mt-md-3 mb-0 fs-6\"></h5>
                <p class=\"text-muted small mb-0\">Cette action peut être annulée à tout moment.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3\">
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3\" data-bs-dismiss=\"modal\"><i class=\"bi bi-x me-2\"></i>Annuler</button>
                <form id=\"toggleStatusForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleStatusToken\">
                    <button type=\"submit\" class=\"btn btn-warning btn-sm px-3\"><i class=\"bi bi-check me-2\"></i>Confirmer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title fs-6\"><i class=\"bi bi-exclamation-triangle me-2\"></i>Confirmation de suppression</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"bi bi-trash3 text-danger\" style=\"font-size: 3rem;\"></i>
                <h5 id=\"deleteMessage\" class=\"mt-2 mt-md-3 mb-0 fs-6\"></h5>
                <p class=\"text-muted small mb-0\">Cette action est irréversible.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3\">
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3\" data-bs-dismiss=\"modal\"><i class=\"bi bi-x me-2\"></i>Annuler</button>
                <form id=\"deleteForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm px-3\"><i class=\"bi bi-trash me-2\"></i>Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title fs-6\"><i class=\"bi bi-exclamation-triangle me-2\"></i>Limite atteinte</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"bi bi-people-fill text-warning\" style=\"font-size: 3rem;\"></i>
                <h5 class=\"mt-2 mt-md-3 fs-6\">Limite d'utilisateurs atteinte</h5>
                <p class=\"text-muted small mb-0\">Passez à un plan supérieur pour ajouter des utilisateurs.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3\">
                <a href=\"{{ path('app_subscription_plans') }}\" class=\"btn btn-warning btn-sm px-3\"><i class=\"bi bi-arrow-up-circle me-2\"></i>Voir les offres</a>
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3\" data-bs-dismiss=\"modal\">Annuler</button>
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
            toggleMessage.innerHTML = `Êtes-vous sûr de vouloir <strong class=\"text-\${currentStatus === 'active' ? 'danger' : 'success'}\">\${action}</strong> <strong>\${userName}</strong> ?`;
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
    min-height: 150px;
}
@media (min-width: 768px) {
    .modern-header {
        min-height: 200px;
    }
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
    width: 200px;
    height: 200px;
    top: -100px;
    right: -50px;
    animation: float 8s ease-in-out infinite;
}
@media (min-width: 768px) {
    .shape-1 {
        width: 300px;
        height: 300px;
        top: -150px;
    }
}
.shape-2 {
    width: 120px;
    height: 120px;
    bottom: -60px;
    left: -30px;
    animation: float 12s ease-in-out infinite reverse;
}
@media (min-width: 768px) {
    .shape-2 {
        width: 200px;
        height: 200px;
        bottom: -80px;
    }
}
.shape-3 {
    width: 100px;
    height: 100px;
    top: 50%;
    left: 20%;
    animation: float 10s ease-in-out infinite;
}
@media (min-width: 768px) {
    .shape-3 {
        width: 150px;
        height: 150px;
        left: 30%;
    }
}
@keyframes float {
    0%,100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-15px) rotate(10deg); }
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
    gap: 6px;
}
@media (min-width: 576px) {
    .stats-grid {
        gap: 10px;
    }
}
.stat-card {
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
    border: 1px solid rgba(255,255,255,0.1);
}
.stat-card:hover {
    transform: translateY(-3px);
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
    height: 30px;
}
@media (min-width: 768px) {
    .wave-decoration svg {
        height: 50px;
    }
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
    padding: 0.25rem 0.5rem;
    font-size: 0.75rem;
}
@media (min-width: 576px) {
    .pagination-sm .page-link {
        padding: 0.25rem 0.75rem;
        font-size: 0.875rem;
    }
}

/* Empty state */
.empty-state {
    padding: 2rem;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-radius: 16px;
}
@media (min-width: 768px) {
    .empty-state {
        padding: 3rem;
        border-radius: 20px;
    }
}

/* Responsive table */
@media (max-width: 576px) {
    .table-sm td, .table-sm th {
        padding: 0.3rem 0.4rem;
        font-size: 0.75rem;
    }
    .btn-sm {
        padding: 0.15rem 0.3rem;
        font-size: 0.7rem;
    }
    .btn-sm i {
        font-size: 0.8rem;
    }
    .badge {
        font-size: 0.6rem !important;
        padding: 0.2rem 0.4rem !important;
    }
}

/* Container padding */
@media (max-width: 576px) {
    .container-fluid {
        padding-left: 8px !important;
        padding-right: 8px !important;
    }
}
</style>
{% endblock %}", "admin/user/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\user\\index.html.twig");
    }
}
