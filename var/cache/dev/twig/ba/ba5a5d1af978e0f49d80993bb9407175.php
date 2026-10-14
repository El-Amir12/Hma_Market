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
        yield "    <div class=\"container-fluid px-2 px-md-4\">
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
                                <div class=\"d-flex flex-column flex-sm-row align-items-center align-items-sm-start text-center text-sm-start gap-3 gap-md-4\">
                                    <div class=\"icon-wrapper bg-white bg-opacity-20 rounded-3 rounded-md-4 p-3 p-md-4 flex-shrink-0\">
                                        <i class=\"bi bi-people-fill text-white display-6 display-md-4\"></i>
                                    </div>
                                    <div>
                                        <h1 class=\"h3 h-md-1 display-md-5 fw-bold text-white mb-1 mb-md-2\">Gestion des utilisateurs</h1>
                                        <div class=\"d-flex align-items-center justify-content-center justify-content-sm-start gap-2 gap-md-3 flex-wrap\">
                                            ";
        // line 27
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 27, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "                                                <span class=\"badge bg-white text-primary px-3 py-1 px-md-4 py-md-2 rounded-pill fs-6\">
                                                    <i class=\"bi bi-shield-shaded me-1 me-md-2\"></i>Super Admin
                                                </span>
                                                <span class=\"text-white-50 small\"><i class=\"bi bi-building me-1\"></i>Toutes les entreprises</span>
                                            ";
        } else {
            // line 33
            yield "                                                <span class=\"badge bg-white text-success px-3 py-1 px-md-4 py-md-2 rounded-pill fs-6\">
                                                    <i class=\"bi bi-building me-1 me-md-2\"></i>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "companyDisplayName", [], "any", false, false, false, 34)), "truncate", [20, "..."], "method", false, false, false, 34), "html", null, true);
            yield "
                                                </span>
                                            ";
        }
        // line 37
        yield "                                        </div>
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
                        ";
        // line 82
        yield "                        <div class=\"stats-filtered-grid ";
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 82, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "has-5-items";
        } else {
            yield "has-4-items";
        }
        yield "\">
                            <div class=\"stat-filtered-item\">
                                <div class=\"stat-item p-2 p-md-3 bg-light rounded-2 rounded-md-3 h-100\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"min-w-0\">
                                            <span class=\"text-muted text-uppercase small fw-bold d-block\">Filtrés</span>
                                            <h3 class=\"mb-0 fw-bold fs-5 fs-md-3\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFiltered"]) || array_key_exists("totalFiltered", $context) ? $context["totalFiltered"] : (function () { throw new RuntimeError('Variable "totalFiltered" does not exist.', 88, $this->source); })()), "html", null, true);
        yield "</h3>
                                        </div>
                                        <div class=\"bg-primary bg-opacity-10 p-2 p-md-3 rounded-2 rounded-md-3 flex-shrink-0\">
                                            <i class=\"bi bi-people text-white fs-5 fs-md-2\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"stat-filtered-item\">
                                <div class=\"stat-item p-2 p-md-3 bg-light rounded-2 rounded-md-3 h-100\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"min-w-0\">
                                            <span class=\"text-muted text-uppercase small fw-bold d-block\">Actifs</span>
                                            <h3 class=\"mb-0 fw-bold text-success fs-5 fs-md-3\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeFiltered"]) || array_key_exists("activeFiltered", $context) ? $context["activeFiltered"] : (function () { throw new RuntimeError('Variable "activeFiltered" does not exist.', 101, $this->source); })()), "html", null, true);
        yield "</h3>
                                        </div>
                                        <div class=\"bg-success bg-opacity-10 p-2 p-md-3 rounded-2 rounded-md-3 flex-shrink-0\">
                                            <i class=\"bi bi-check-circle text-white fs-5 fs-md-2\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"stat-filtered-item\">
                                <div class=\"stat-item p-2 p-md-3 bg-light rounded-2 rounded-md-3 h-100\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"min-w-0\">
                                            <span class=\"text-muted text-uppercase small fw-bold d-block\">Inactifs</span>
                                            <h3 class=\"mb-0 fw-bold text-danger fs-5 fs-md-3\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactiveFiltered"]) || array_key_exists("inactiveFiltered", $context) ? $context["inactiveFiltered"] : (function () { throw new RuntimeError('Variable "inactiveFiltered" does not exist.', 114, $this->source); })()), "html", null, true);
        yield "</h3>
                                        </div>
                                        <div class=\"bg-danger bg-opacity-10 p-2 p-md-3 rounded-2 rounded-md-3 flex-shrink-0\">
                                            <i class=\"bi bi-pause-circle text-white fs-5 fs-md-2\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"stat-filtered-item\">
                                <div class=\"stat-item p-2 p-md-3 bg-light rounded-2 rounded-md-3 h-100\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"min-w-0\">
                                            <span class=\"text-muted text-uppercase small fw-bold d-block\">Hors quota</span>
                                            <h3 class=\"mb-0 fw-bold text-warning fs-5 fs-md-3\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["outOfQuotaFiltered"]) || array_key_exists("outOfQuotaFiltered", $context) ? $context["outOfQuotaFiltered"] : (function () { throw new RuntimeError('Variable "outOfQuotaFiltered" does not exist.', 127, $this->source); })()), "html", null, true);
        yield "</h3>
                                        </div>
                                        <div class=\"bg-warning bg-opacity-10 p-2 p-md-3 rounded-2 rounded-md-3 flex-shrink-0\">
                                            <i class=\"bi bi-exclamation-triangle text-white fs-5 fs-md-2\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 135
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 135, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 136
            yield "                            ";
            // line 137
            yield "                            <div class=\"stat-filtered-item full-width-mobile\">
                                <div class=\"stat-item p-2 p-md-3 bg-light rounded-2 rounded-md-3 h-100\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"min-w-0\">
                                            <span class=\"text-muted text-uppercase small fw-bold d-block\">Bloqués</span>
                                            <h3 class=\"mb-0 fw-bold text-dark fs-5 fs-md-3\">";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["blockedFiltered"]) || array_key_exists("blockedFiltered", $context) ? $context["blockedFiltered"] : (function () { throw new RuntimeError('Variable "blockedFiltered" does not exist.', 142, $this->source); })()), "html", null, true);
            yield "</h3>
                                        </div>
                                        <div class=\"bg-dark bg-opacity-10 p-2 p-md-3 rounded-2 rounded-md-3 flex-shrink-0\">
                                            <i class=\"bi bi-lock text-white fs-5 fs-md-2\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
        }
        // line 151
        yield "                        </div>
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
                        <div class=\"d-flex align-items-center gap-1 gap-md-2 flex-wrap filter-actions\">
                            <a href=\"";
        // line 164
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm btn-md px-2 px-md-3\">
                                <i class=\"bi bi-arrow-counterclockwise me-1\"></i><span class=\"d-none d-sm-inline\">Effacer</span>
                            </a>
                            <button type=\"submit\" form=\"userFilterForm\" class=\"btn btn-primary btn-sm btn-md px-3 px-md-4\">
                                <i class=\"bi bi-funnel me-1\"></i><span class=\"d-none d-sm-inline\">Filtrer</span>
                            </button>
                            
                            ";
        // line 171
        if (((isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 171, $this->source); })()) || (isset($context["can_add_user"]) || array_key_exists("can_add_user", $context) ? $context["can_add_user"] : (function () { throw new RuntimeError('Variable "can_add_user" does not exist.', 171, $this->source); })()))) {
            // line 172
            yield "                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
            yield "\" class=\"btn btn-success btn-sm btn-md\">
                                    <i class=\"bi bi-person-plus-fill me-1\"></i><span class=\"d-none d-sm-inline\">Nouvel utilisateur</span>
                                </a>
                            ";
        } else {
            // line 176
            yield "                                <button type=\"button\" class=\"btn btn-warning btn-sm btn-md\" data-bs-toggle=\"modal\" data-bs-target=\"#quotaReachedModal\">
                                    <i class=\"bi bi-person-plus-fill me-1\"></i><span class=\"d-none d-sm-inline\">Limite atteinte</span>
                                </button>
                            ";
        }
        // line 180
        yield "                        </div>
                    </div>
                    <div class=\"card-body p-2 p-md-3\">
                        <form method=\"get\" action=\"";
        // line 183
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"row g-2 g-md-3\" id=\"userFilterForm\">
                            
                            ";
        // line 185
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 185, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 186
            yield "                                
                                <div class=\"col-12 col-md-6 col-lg-3\">
                                    <label for=\"search\" class=\"form-label fw-bold small\">Rechercher</label>
                                    <div class=\"input-group\">
                                        <span class=\"input-group-text bg-light border-0\"><i class=\"bi bi-search\"></i></span>
                                        <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control bg-light border-0 form-control-sm\" placeholder=\"Nom, email...\" value=\"";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 191, $this->source); })()), "html", null, true);
            yield "\">
                                        ";
            // line 192
            if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 192, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 193
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 193, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 193, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 193, $this->source); })()), "company" => (isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 193, $this->source); })())]), "html", null, true);
                yield "\" class=\"btn btn-outline-secondary border-0\" title=\"Effacer\">
                                            <i class=\"bi bi-x-circle\"></i>
                                        </a>
                                        ";
            }
            // line 197
            yield "                                    </div>
                                </div>
                                
                                <div class=\"col-12 col-md-6 col-lg-3\">
                                    <label for=\"company\" class=\"form-label fw-bold small\">Entreprise</label>
                                    <select name=\"company\" id=\"company\" class=\"form-select bg-light border-0 form-select-sm\">
                                        <option value=\"\">Toutes</option>
                                        ";
            // line 204
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 204, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
                // line 205
                yield "                                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 205), "html", null, true);
                yield "\" ";
                yield ((((isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 205, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 205))) ? ("selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 205)), "truncate", [25, "..."], "method", false, false, false, 205), "html", null, true);
                yield "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['company'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            yield "                                    </select>
                                </div>
                                
                                <div class=\"col-12 col-md-6 col-lg-3\">
                                    <label for=\"role\" class=\"form-label fw-bold small\">Rôle</label>
                                    <select name=\"role\" id=\"role\" class=\"form-select bg-light border-0 form-select-sm\">
                                        <option value=\"\">Tous</option>
                                        <option value=\"ROLE_ADMIN\" ";
            // line 214
            yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 214, $this->source); })()) == "ROLE_ADMIN")) ? ("selected") : (""));
            yield ">Administrateurs</option>
                                        <option value=\"ROLE_MANAGER\" ";
            // line 215
            yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 215, $this->source); })()) == "ROLE_MANAGER")) ? ("selected") : (""));
            yield ">Gestionnaires</option>
                                        <option value=\"ROLE_STOCK_MANAGER\" ";
            // line 216
            yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 216, $this->source); })()) == "ROLE_STOCK_MANAGER")) ? ("selected") : (""));
            yield ">Responsables Stock</option>
                                        <option value=\"ROLE_CASHIER\" ";
            // line 217
            yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 217, $this->source); })()) == "ROLE_CASHIER")) ? ("selected") : (""));
            yield ">Caissiers</option>
                                    </select>
                                </div>
                                
                                <div class=\"col-12 col-md-6 col-lg-3\">
                                    <label for=\"status\" class=\"form-label fw-bold small\">Statut</label>
                                    <select name=\"status\" id=\"status\" class=\"form-select bg-light border-0 form-select-sm\">
                                        <option value=\"\">Tous</option>
                                        <option value=\"active\" ";
            // line 225
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 225, $this->source); })()) == "active")) ? ("selected") : (""));
            yield ">Actifs</option>
                                        <option value=\"inactive\" ";
            // line 226
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 226, $this->source); })()) == "inactive")) ? ("selected") : (""));
            yield ">Désactivés</option>
                                        <option value=\"quota\" ";
            // line 227
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 227, $this->source); })()) == "quota")) ? ("selected") : (""));
            yield ">Hors quota</option>
                                        <option value=\"blocked\" ";
            // line 228
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 228, $this->source); })()) == "blocked")) ? ("selected") : (""));
            yield ">Bloqués</option>
                                    </select>
                                </div>
                            
                            ";
        } else {
            // line 233
            yield "                                
                                <div class=\"col-12 col-md-6 col-lg-4\">
                                    <label for=\"search\" class=\"form-label fw-bold small\">Rechercher</label>
                                    <div class=\"input-group\">
                                        <span class=\"input-group-text bg-light border-0\"><i class=\"bi bi-search\"></i></span>
                                        <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control bg-light border-0 form-control-sm\" placeholder=\"Nom, email...\" value=\"";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 238, $this->source); })()), "html", null, true);
            yield "\">
                                        ";
            // line 239
            if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 239, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 240
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 240, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 240, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 240, $this->source); })()), "company" => (isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 240, $this->source); })())]), "html", null, true);
                yield "\" class=\"btn btn-outline-secondary border-0\" title=\"Effacer\">
                                            <i class=\"bi bi-x-circle\"></i>
                                        </a>
                                        ";
            }
            // line 244
            yield "                                    </div>
                                </div>
                                
                                <div class=\"col-12 col-md-6 col-lg-4\">
                                    <label for=\"role\" class=\"form-label fw-bold small\">Rôle</label>
                                    <select name=\"role\" id=\"role\" class=\"form-select bg-light border-0 form-select-sm\">
                                        <option value=\"\">Tous</option>
                                        <option value=\"ROLE_ADMIN\" ";
            // line 251
            yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 251, $this->source); })()) == "ROLE_ADMIN")) ? ("selected") : (""));
            yield ">Administrateurs</option>
                                        <option value=\"ROLE_MANAGER\" ";
            // line 252
            yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 252, $this->source); })()) == "ROLE_MANAGER")) ? ("selected") : (""));
            yield ">Gestionnaires</option>
                                        <option value=\"ROLE_STOCK_MANAGER\" ";
            // line 253
            yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 253, $this->source); })()) == "ROLE_STOCK_MANAGER")) ? ("selected") : (""));
            yield ">Responsables Stock</option>
                                        <option value=\"ROLE_CASHIER\" ";
            // line 254
            yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 254, $this->source); })()) == "ROLE_CASHIER")) ? ("selected") : (""));
            yield ">Caissiers</option>
                                    </select>
                                </div>
                                
                                <div class=\"col-12 col-md-6 col-lg-4\">
                                    <label for=\"status\" class=\"form-label fw-bold small\">Statut</label>
                                    <select name=\"status\" id=\"status\" class=\"form-select bg-light border-0 form-select-sm\">
                                        <option value=\"\">Tous</option>
                                        <option value=\"active\" ";
            // line 262
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 262, $this->source); })()) == "active")) ? ("selected") : (""));
            yield ">Actifs</option>
                                        <option value=\"inactive\" ";
            // line 263
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 263, $this->source); })()) == "inactive")) ? ("selected") : (""));
            yield ">Désactivés</option>
                                        <option value=\"quota\" ";
            // line 264
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 264, $this->source); })()) == "quota")) ? ("selected") : (""));
            yield ">Hors quota</option>
                                    </select>
                                </div>
                                
                            ";
        }
        // line 269
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
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 282, $this->source); })()), "html", null, true);
        yield "</span>
                </h5>
                <small class=\"text-muted d-none d-sm-block\"><i class=\"bi bi-mouse me-1\"></i> Scrollez pour voir plus</small>
            </div>
            
            <div class=\"card-body p-0\">
                ";
        // line 289
        yield "                <div class=\"table-responsive table-scroll-mobile\">
                    <table class=\"table table-hover align-middle mb-0 table-sm table-md\">
                        <thead class=\"bg-light\">
                            <tr>
                                <th class=\"ps-2 ps-md-4\" style=\"width: 40px;\"></th>
                                <th>Utilisateur</th>
                                ";
        // line 295
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 295, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<th class=\"d-none d-lg-table-cell\">Entreprise</th>";
        }
        // line 296
        yield "                                <th>Rôle</th>
                                <th>Statut</th>
                                <th>Contact</th>
                                <th class=\"d-none d-xl-table-cell\">Date d'embauche</th>
                                <th class=\"text-end pe-2 pe-md-4\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 304, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 305
            yield "                                ";
            $context["rowClass"] = "";
            // line 306
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "hmaServiceId", [], "any", false, false, false, 306) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "hmaServiceId", [], "any", false, false, false, 306), "hmaActive", [], "any", false, false, false, 306))) {
                // line 307
                yield "                                    ";
                $context["rowClass"] = "table-inactive-company";
                // line 308
                yield "                                ";
            } elseif ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "subscriptionActive", [], "any", false, false, false, 308)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 309
                yield "                                    ";
                $context["rowClass"] = "table-warning";
                // line 310
                yield "                                ";
            } elseif ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 310)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 311
                yield "                                    ";
                $context["rowClass"] = "table-secondary";
                // line 312
                yield "                                ";
            }
            // line 313
            yield "                                
                                <tr class=\"align-middle ";
            // line 314
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rowClass"]) || array_key_exists("rowClass", $context) ? $context["rowClass"] : (function () { throw new RuntimeError('Variable "rowClass" does not exist.', 314, $this->source); })()), "html", null, true);
            yield "\">
                                    <td class=\"ps-2 ps-md-4\">
                                        <div class=\"position-relative d-inline-block\">
                                            ";
            // line 317
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 317)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 318
                yield "                                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 318))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 318), "html", null, true);
                yield "\" class=\"rounded-circle\" width=\"35\" height=\"35\" style=\"object-fit: cover;\">
                                            ";
            } else {
                // line 320
                yield "                                                <div class=\"rounded-circle bg-primary text-white d-flex align-items-center justify-content-center\" style=\"width:35px;height:35px;\">
                                                    <span class=\"fw-bold fs-6\">";
                // line 321
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 321))), "html", null, true);
                yield "</span>
                                                </div>
                                            ";
            }
            // line 324
            yield "                                            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isHmaOwner", [], "any", false, false, false, 324)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 325
                yield "                                                <span class=\"position-absolute bottom-0 end-0 bg-warning rounded-circle p-1 border border-2 border-white\" style=\"width:14px;height:14px;\" data-bs-toggle=\"tooltip\" title=\"Propriétaire\">
                                                    <i class=\"bi bi-crown-fill text-white\" style=\"font-size:8px;\"></i>
                                                </span>
                                            ";
            }
            // line 329
            yield "                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"fw-semibold small fs-md-6 text-nowrap\">";
            // line 332
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 332)), "truncate", [20, "..."], "method", false, false, false, 332), "html", null, true);
            yield "</div>
                                    </td>
                                    ";
            // line 334
            if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 334, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 335
                yield "                                    <td class=\"d-none d-lg-table-cell\">
                                        ";
                // line 336
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "hmaServiceId", [], "any", false, false, false, 336)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 337
                    yield "                                            <span class=\"badge bg-light text-dark p-1 p-md-2 small\">
                                                <i class=\"bi bi-building me-1\"></i>
                                                ";
                    // line 339
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "hmaServiceId", [], "any", false, false, false, 339), "companyName", [], "any", false, false, false, 339)), "truncate", [15, "..."], "method", false, false, false, 339), "html", null, true);
                    yield "
                                            </span>
                                        ";
                } else {
                    // line 342
                    yield "                                            <span class=\"badge bg-secondary small\">Indépendant</span>
                                        ";
                }
                // line 344
                yield "                                    </td>
                                    ";
            }
            // line 346
            yield "                                    <td>
                                        <span class=\"badge rounded-pill ";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roleBadgeClass", [], "any", false, false, false, 347), "html", null, true);
            yield " p-1 p-md-2 small text-nowrap\">
                                            <i class=\"bi ";
            // line 348
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roleIcon", [], "any", false, false, false, 348), "html", null, true);
            yield " me-1\"></i>
                                            ";
            // line 349
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roleLabel", [], "any", false, false, false, 349)), "truncate", [10, "..."], "method", false, false, false, 349), "html", null, true);
            yield "
                                        </span>
                                    </td>
                                    <td>
                                        <div class=\"d-flex flex-column gap-1\">
                                            <span class=\"badge rounded-pill ";
            // line 354
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statusBadgeClass", [], "any", false, false, false, 354), "html", null, true);
            yield " p-1 p-md-2 small text-nowrap\">
                                                <i class=\"bi ";
            // line 355
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statusIcon", [], "any", false, false, false, 355), "html", null, true);
            yield " me-1\"></i>
                                                ";
            // line 356
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statusLabel", [], "any", false, false, false, 356)), "truncate", [8, "..."], "method", false, false, false, 356), "html", null, true);
            yield "
                                            </span>
                                            ";
            // line 358
            if (( !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "passwordChanged", [], "any", false, false, false, 358) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isHmaOwner", [], "any", false, false, false, 358))) {
                // line 359
                yield "                                                <span class=\"badge bg-warning-subtle text-warning-emphasis p-1 small text-nowrap\" data-bs-toggle=\"tooltip\" title=\"Première connexion en attente\">
                                                    <i class=\"bi bi-shield-exclamation me-1\"></i>1ère connexion
                                                </span>
                                            ";
            }
            // line 363
            yield "                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"small\">
                                            <div class=\"text-nowrap\"><i class=\"bi bi-envelope me-1 text-muted\"></i> <a href=\"mailto:";
            // line 367
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 367), "html", null, true);
            yield "\" class=\"text-decoration-none text-dark\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 367)), "truncate", [15, "..."], "method", false, false, false, 367), "html", null, true);
            yield "</a></div>
                                            <div class=\"text-nowrap\"><i class=\"bi bi-telephone me-1 text-muted\"></i> <a href=\"tel:";
            // line 368
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 368), "html", null, true);
            yield "\" class=\"text-decoration-none text-dark\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 368), "html", null, true);
            yield "</a></div>
                                        </div>
                                    </td>
                                    <td class=\"d-none d-xl-table-cell\">
                                        ";
            // line 372
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 372)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 373
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 373), "d/m/Y"), "html", null, true);
                yield "
                                        ";
            } else {
                // line 375
                yield "                                            <span class=\"text-muted\">-</span>
                                        ";
            }
            // line 377
            yield "                                    </td>
                                    <td class=\"text-end pe-2 pe-md-4\">
                                        <div class=\"d-flex gap-1 justify-content-end flex-wrap\">
                                            <a href=\"";
            // line 380
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 380)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info\" data-bs-toggle=\"tooltip\" title=\"Voir\">
                                                <i class=\"bi bi-eye\"></i>
                                            </a>
                                            ";
            // line 383
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isEditableBy", [(isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 383, $this->source); })())], "method", false, false, false, 383)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 384
                yield "                                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 384)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-warning\" data-bs-toggle=\"tooltip\" title=\"Modifier\">
                                                    <i class=\"bi bi-pencil\"></i>
                                                </a>
                                            ";
            }
            // line 388
            yield "                                            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "canToggleStatusBy", [(isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 388, $this->source); })())], "method", false, false, false, 388)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 389
                yield "                                                <button type=\"button\" class=\"btn btn-sm btn-outline-";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 389)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("danger") : ("success"));
                yield " toggle-status-btn\"
                                                        data-user-id=\"";
                // line 390
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 390), "html", null, true);
                yield "\"
                                                        data-user-name=\"";
                // line 391
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 391), "html", null, true);
                yield "\"
                                                        data-current-status=\"";
                // line 392
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 392)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                yield "\"
                                                        data-csrf-token=\"";
                // line 393
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 393))), "html", null, true);
                yield "\"
                                                        data-bs-toggle=\"tooltip\"
                                                        title=\"";
                // line 395
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 395)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
                yield "\">
                                                    <i class=\"bi bi-";
                // line 396
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 396)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("toggle-off") : ("toggle-on"));
                yield "\"></i>
                                                </button>
                                            ";
            }
            // line 399
            yield "                                            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "canBeDeletedBy", [(isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 399, $this->source); })())], "method", false, false, false, 399)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 400
                yield "                                                <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-btn\"
                                                        data-user-id=\"";
                // line 401
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 401), "html", null, true);
                yield "\"
                                                        data-user-name=\"";
                // line 402
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 402), "html", null, true);
                yield "\"
                                                        data-csrf-token=\"";
                // line 403
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 403))), "html", null, true);
                yield "\"
                                                        data-bs-toggle=\"tooltip\"
                                                        title=\"Supprimer\">
                                                    <i class=\"bi bi-trash\"></i>
                                                </button>
                                            ";
            }
            // line 409
            yield "                                        </div>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 412
        if (!$context['_iterated']) {
            // line 413
            yield "                                <tr>
                                    <td colspan=\"";
            // line 414
            if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 414, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            // line 419
            if (((isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 419, $this->source); })()) || (isset($context["can_add_user"]) || array_key_exists("can_add_user", $context) ? $context["can_add_user"] : (function () { throw new RuntimeError('Variable "can_add_user" does not exist.', 419, $this->source); })()))) {
                // line 420
                yield "                                                <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
                yield "\" class=\"btn btn-primary btn-sm btn-lg-md px-4 px-md-5\">
                                                    <i class=\"bi bi-person-plus me-2\"></i>Créer un utilisateur
                                                </a>
                                            ";
            }
            // line 424
            yield "                                        </div>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 428
        yield "                        </tbody>
                    </table>
                </div>
            </div>
                
            <!-- Pagination -->
            ";
        // line 434
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 434, $this->source); })()) > 1)) {
            // line 435
            yield "            <div class=\"card-footer bg-white py-2 py-md-3 d-flex flex-wrap justify-content-between align-items-center gap-2\">
                <div class=\"text-muted small w-100 w-md-auto text-center text-md-start\">
                    <span class=\"d-none d-sm-inline\">Affichage de </span>
                    ";
            // line 438
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 438, $this->source); })()) - 1) * (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 438, $this->source); })())) + 1), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 438, $this->source); })()) * (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 438, $this->source); })())), (isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 438, $this->source); })())), "html", null, true);
            yield " 
                    <span class=\"d-none d-sm-inline\">sur ";
            // line 439
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 439, $this->source); })()), "html", null, true);
            yield " utilisateurs</span>
                </div>
                <nav aria-label=\"Pagination\" class=\"w-100 w-md-auto\">
                    <ul class=\"pagination pagination-sm mb-0 justify-content-center\">
                        <li class=\"page-item ";
            // line 443
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 443, $this->source); })()) <= 1)) ? ("disabled") : (""));
            yield "\">
                            <a class=\"page-link\" href=\"";
            // line 444
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 444, $this->source); })()) - 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 444, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 444, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 444, $this->source); })()), "company" => (isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 444, $this->source); })())]), "html", null, true);
            yield "\"><i class=\"bi bi-chevron-left\"></i></a>
                        </li>
                        ";
            // line 446
            $context["maxVisible"] = 5;
            // line 447
            yield "                        ";
            $context["startPage"] = max(1, ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 447, $this->source); })()) - 2));
            // line 448
            yield "                        ";
            $context["endPage"] = min((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 448, $this->source); })()), (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 448, $this->source); })()) + (isset($context["maxVisible"]) || array_key_exists("maxVisible", $context) ? $context["maxVisible"] : (function () { throw new RuntimeError('Variable "maxVisible" does not exist.', 448, $this->source); })())) - 1));
            // line 449
            yield "                        ";
            if ((((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 449, $this->source); })()) - (isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 449, $this->source); })())) < ((isset($context["maxVisible"]) || array_key_exists("maxVisible", $context) ? $context["maxVisible"] : (function () { throw new RuntimeError('Variable "maxVisible" does not exist.', 449, $this->source); })()) - 1))) {
                // line 450
                yield "                            ";
                $context["startPage"] = max(1, (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 450, $this->source); })()) - (isset($context["maxVisible"]) || array_key_exists("maxVisible", $context) ? $context["maxVisible"] : (function () { throw new RuntimeError('Variable "maxVisible" does not exist.', 450, $this->source); })())) + 1));
                // line 451
                yield "                        ";
            }
            // line 452
            yield "                        
                        ";
            // line 453
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 453, $this->source); })()) > 1)) {
                // line 454
                yield "                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"";
                // line 455
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => 1, "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 455, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 455, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 455, $this->source); })()), "company" => (isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 455, $this->source); })())]), "html", null, true);
                yield "\">1</a>
                            </li>
                            ";
                // line 457
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 457, $this->source); })()) > 2)) {
                    // line 458
                    yield "                                <li class=\"page-item disabled d-none d-sm-block\"><span class=\"page-link\">…</span></li>
                            ";
                }
                // line 460
                yield "                        ";
            }
            // line 461
            yield "                        
                        ";
            // line 462
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 462, $this->source); })()), (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 462, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 463
                yield "                            <li class=\"page-item ";
                yield ((($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 463, $this->source); })()))) ? ("active") : (""));
                yield "\">
                                <a class=\"page-link\" href=\"";
                // line 464
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => $context["i"], "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 464, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 464, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 464, $this->source); })()), "company" => (isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 464, $this->source); })())]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 467
            yield "                        
                        ";
            // line 468
            if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 468, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 468, $this->source); })()))) {
                // line 469
                yield "                            ";
                if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 469, $this->source); })()) < ((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 469, $this->source); })()) - 1))) {
                    // line 470
                    yield "                                <li class=\"page-item disabled d-none d-sm-block\"><span class=\"page-link\">…</span></li>
                            ";
                }
                // line 472
                yield "                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"";
                // line 473
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 473, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 473, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 473, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 473, $this->source); })()), "company" => (isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 473, $this->source); })())]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 473, $this->source); })()), "html", null, true);
                yield "</a>
                            </li>
                        ";
            }
            // line 476
            yield "                        
                        <li class=\"page-item ";
            // line 477
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 477, $this->source); })()) >= (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 477, $this->source); })()))) ? ("disabled") : (""));
            yield "\">
                            <a class=\"page-link\" href=\"";
            // line 478
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 478, $this->source); })()) + 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 478, $this->source); })()), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 478, $this->source); })()), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 478, $this->source); })()), "company" => (isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 478, $this->source); })())]), "html", null, true);
            yield "\"><i class=\"bi bi-chevron-right\"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
            ";
        }
        // line 484
        yield "        </div>
    </div>

    <!-- Modals -->
    <div class=\"modal fade\" id=\"toggleStatusModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered modal-sm modal-dialog-scrollable\">
            <div class=\"modal-content border-0 shadow\">
                <div class=\"modal-header bg-warning text-white border-0\">
                    <h5 class=\"modal-title fs-6\"><i class=\"bi bi-exclamation-triangle me-2\"></i>Confirmation</h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body text-center py-3 py-md-4\">
                    <i class=\"bi bi-question-circle text-warning modal-icon\" style=\"font-size: 3rem;\"></i>
                    <h5 id=\"toggleStatusMessage\" class=\"mt-2 mt-md-3 mb-0 fs-6\"></h5>
                    <p class=\"text-muted small mb-0\">Cette action peut être annulée à tout moment.</p>
                </div>
                <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3 flex-column flex-sm-row gap-2\">
                    <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3 w-100 w-sm-auto\" data-bs-dismiss=\"modal\"><i class=\"bi bi-x me-2\"></i>Annuler</button>
                    <form id=\"toggleStatusForm\" method=\"post\" class=\"d-inline w-100 w-sm-auto\">
                        <input type=\"hidden\" name=\"_token\" id=\"toggleStatusToken\">
                        <button type=\"submit\" class=\"btn btn-warning btn-sm px-3 w-100\"><i class=\"bi bi-check me-2\"></i>Confirmer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered modal-sm modal-dialog-scrollable\">
            <div class=\"modal-content border-0 shadow\">
                <div class=\"modal-header bg-danger text-white border-0\">
                    <h5 class=\"modal-title fs-6\"><i class=\"bi bi-exclamation-triangle me-2\"></i>Confirmation de suppression</h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body text-center py-3 py-md-4\">
                    <i class=\"bi bi-trash3 text-danger modal-icon\" style=\"font-size: 3rem;\"></i>
                    <h5 id=\"deleteMessage\" class=\"mt-2 mt-md-3 mb-0 fs-6\"></h5>
                    <p class=\"text-muted small mb-0\">Cette action est irréversible.</p>
                </div>
                <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3 flex-column flex-sm-row gap-2\">
                    <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3 w-100 w-sm-auto\" data-bs-dismiss=\"modal\"><i class=\"bi bi-x me-2\"></i>Annuler</button>
                    <form id=\"deleteForm\" method=\"post\" class=\"d-inline w-100 w-sm-auto\">
                        <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                        <button type=\"submit\" class=\"btn btn-danger btn-sm px-3 w-100\"><i class=\"bi bi-trash me-2\"></i>Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered modal-sm modal-dialog-scrollable\">
            <div class=\"modal-content border-0 shadow\">
                <div class=\"modal-header bg-warning text-white border-0\">
                    <h5 class=\"modal-title fs-6\"><i class=\"bi bi-exclamation-triangle me-2\"></i>Limite atteinte</h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body text-center py-3 py-md-4\">
                    <i class=\"bi bi-people-fill text-warning modal-icon\" style=\"font-size: 3rem;\"></i>
                    <h5 class=\"mt-2 mt-md-3 fs-6\">Limite d'utilisateurs atteinte</h5>
                    <p class=\"text-muted small mb-0\">Passez à un plan supérieur pour ajouter des utilisateurs.</p>
                </div>
                <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3 flex-column flex-sm-row gap-2\">
                    <a href=\"";
        // line 547
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
        yield "\" class=\"btn btn-warning btn-sm px-3 w-100 w-sm-auto\"><i class=\"bi bi-arrow-up-circle me-2\"></i>Voir les offres</a>
                    <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3 w-100 w-sm-auto\" data-bs-dismiss=\"modal\">Annuler</button>
                </div>
            </div>
        </div>
    </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 555
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

        // line 556
        yield "    ";
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

    // line 606
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

        // line 607
        yield "    ";
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

    /* ============================================
    STATS FILTRÉES - GRILLE ADAPTATIVE
    ============================================ */
    .stats-filtered-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 0.5rem;
    }

    /* 5 items : les 4 premiers en 2x2, le 5ème en pleine largeur */
    .stats-filtered-grid.has-5-items .stat-filtered-item.full-width-mobile {
        grid-column: 1 / -1;
    }

    /* 4 items : 2x2 sur mobile */
    .stats-filtered-grid.has-4-items {
        grid-template-columns: repeat(2, 1fr);
    }

    /* Sur tablette+ : 4 colonnes pour 4 items, 5 colonnes pour 5 items */
    @media (min-width: 768px) {
        .stats-filtered-grid.has-4-items {
            grid-template-columns: repeat(4, 1fr);
            gap: 0.75rem;
        }
        .stats-filtered-grid.has-5-items {
            grid-template-columns: repeat(5, 1fr);
            gap: 0.75rem;
        }
        .stats-filtered-grid.has-5-items .stat-filtered-item.full-width-mobile {
            grid-column: auto;
        }
    }

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

    /* Utility */
    .min-w-0 {
        min-width: 0;
    }

    /* ============================================
    RESPONSIVE MOBILE
    ============================================ */

    /* Tablette */
    @media (max-width: 991.98px) {
        .filter-actions {
            width: 100%;
            justify-content: stretch;
        }
        .filter-actions .btn {
            flex: 1;
        }
    }

    /* Mobile */
    @media (max-width: 767.98px) {
        /* Container */
        .container-fluid {
            padding-left: 0.5rem !important;
            padding-right: 0.5rem !important;
        }

        /* Header */
        .modern-header {
            min-height: auto;
        }
        .modern-header h1 {
            font-size: 1.25rem;
        }
        .modern-header .display-md-4 {
            font-size: 1.75rem !important;
        }
        .modern-header .icon-wrapper {
            padding: 0.65rem !important;
        }
        .modern-header .position-relative.p-3 {
            padding-bottom: 1.5rem !important;
        }

        /* Stats grid header */
        .stats-grid {
            gap: 4px;
            margin-top: 0.5rem;
        }
        .stats-grid .stat-card {
            padding: 0.4rem 0.25rem !important;
        }
        .stats-grid .stat-value {
            font-size: 0.95rem !important;
        }
        .stats-grid .stat-label {
            font-size: 0.55rem !important;
            line-height: 1;
        }

        /* Filtres actions */
        .filter-actions {
            flex-direction: column;
            gap: 0.4rem !important;
        }
        .filter-actions .btn {
            width: 100%;
            font-size: 0.8rem;
            padding: 0.4rem 0.5rem;
        }
        .filter-actions .btn .d-none.d-sm-inline {
            display: inline !important;
        }

        /* Stats filtrées */
        .stat-item {
            padding: 0.5rem !important;
        }
        .stat-item h3 {
            font-size: 1rem !important;
        }
        .stat-item .text-uppercase {
            font-size: 0.6rem !important;
        }
        .stat-item .bg-primary,
        .stat-item .bg-success,
        .stat-item .bg-danger,
        .stat-item .bg-warning,
        .stat-item .bg-dark {
            padding: 0.4rem !important;
        }
        .stat-item i {
            font-size: 1rem !important;
        }

        /* ============================================
        TABLEAU SCROLLABLE HORIZONTALEMENT
        ============================================ */
        .table-scroll-mobile {
            overflow-x: auto !important;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: thin;
        }
        .table-scroll-mobile::-webkit-scrollbar {
            height: 6px;
        }
        .table-scroll-mobile::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        .table-scroll-mobile::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 10px;
        }
        .table-scroll-mobile::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }

        /* Tableau : forcer une largeur minimale */
        .table-scroll-mobile table {
            min-width: 780px;
            width: 100%;
        }
        .table-scroll-mobile table th,
        .table-scroll-mobile table td {
            white-space: nowrap;
            padding: 0.5rem 0.5rem !important;
            font-size: 0.8rem;
        }
        .table-scroll-mobile table th {
            font-size: 0.75rem;
            font-weight: 700;
        }
        .table-scroll-mobile table td .badge {
            font-size: 0.65rem !important;
            padding: 0.25rem 0.5rem !important;
        }
        .table-scroll-mobile table td .btn-sm {
            padding: 0.25rem 0.4rem;
            font-size: 0.75rem;
        }

        /* Card header */
        .card-header h5 {
            font-size: 0.9rem;
        }
        .card-header h5 .badge {
            font-size: 0.65rem;
        }

        /* Pagination */
        .pagination-sm .page-link {
            padding: 0.3rem 0.5rem;
            font-size: 0.75rem;
        }

        /* Modals */
        .modal-body h5 {
            font-size: 0.9rem;
        }
        .modal-body p {
            font-size: 0.8rem;
        }
        .modal-icon {
            font-size: 2rem !important;
        }
    }

    /* Très petits mobiles */
    @media (max-width: 375.98px) {
        .modern-header h1 {
            font-size: 1.1rem;
        }
        .modern-header .display-md-4 {
            font-size: 1.5rem !important;
        }
        .stats-grid .stat-value {
            font-size: 0.85rem !important;
        }
        .stats-grid .stat-label {
            font-size: 0.5rem !important;
        }
        .stat-item h3 {
            font-size: 0.9rem !important;
        }
        .stat-item .text-uppercase {
            font-size: 0.55rem !important;
        }
        .filter-actions .btn {
            font-size: 0.75rem;
            padding: 0.35rem 0.4rem;
        }
        .table-scroll-mobile table {
            min-width: 720px;
        }
    }

    /* Classe utilitaire pour pleine largeur sur mobile */
    @media (max-width: 575.98px) {
        .w-100-mobile {
            width: 100% !important;
        }
    }
    @media (min-width: 576px) {
        .w-sm-auto {
            width: auto !important;
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
        return array (  1167 => 607,  1154 => 606,  1093 => 556,  1080 => 555,  1062 => 547,  997 => 484,  988 => 478,  984 => 477,  981 => 476,  973 => 473,  970 => 472,  966 => 470,  963 => 469,  961 => 468,  958 => 467,  947 => 464,  942 => 463,  938 => 462,  935 => 461,  932 => 460,  928 => 458,  926 => 457,  921 => 455,  918 => 454,  916 => 453,  913 => 452,  910 => 451,  907 => 450,  904 => 449,  901 => 448,  898 => 447,  896 => 446,  891 => 444,  887 => 443,  880 => 439,  874 => 438,  869 => 435,  867 => 434,  859 => 428,  850 => 424,  842 => 420,  840 => 419,  828 => 414,  825 => 413,  823 => 412,  816 => 409,  807 => 403,  803 => 402,  799 => 401,  796 => 400,  793 => 399,  787 => 396,  783 => 395,  778 => 393,  774 => 392,  770 => 391,  766 => 390,  761 => 389,  758 => 388,  750 => 384,  748 => 383,  742 => 380,  737 => 377,  733 => 375,  727 => 373,  725 => 372,  716 => 368,  710 => 367,  704 => 363,  698 => 359,  696 => 358,  691 => 356,  687 => 355,  683 => 354,  675 => 349,  671 => 348,  667 => 347,  664 => 346,  660 => 344,  656 => 342,  650 => 339,  646 => 337,  644 => 336,  641 => 335,  639 => 334,  634 => 332,  629 => 329,  623 => 325,  620 => 324,  614 => 321,  611 => 320,  603 => 318,  601 => 317,  595 => 314,  592 => 313,  589 => 312,  586 => 311,  583 => 310,  580 => 309,  577 => 308,  574 => 307,  571 => 306,  568 => 305,  563 => 304,  553 => 296,  549 => 295,  541 => 289,  532 => 282,  517 => 269,  509 => 264,  505 => 263,  501 => 262,  490 => 254,  486 => 253,  482 => 252,  478 => 251,  469 => 244,  461 => 240,  459 => 239,  455 => 238,  448 => 233,  440 => 228,  436 => 227,  432 => 226,  428 => 225,  417 => 217,  413 => 216,  409 => 215,  405 => 214,  396 => 207,  383 => 205,  379 => 204,  370 => 197,  362 => 193,  360 => 192,  356 => 191,  349 => 186,  347 => 185,  342 => 183,  337 => 180,  331 => 176,  323 => 172,  321 => 171,  311 => 164,  296 => 151,  284 => 142,  277 => 137,  275 => 136,  273 => 135,  262 => 127,  246 => 114,  230 => 101,  214 => 88,  200 => 82,  172 => 56,  165 => 52,  158 => 48,  151 => 44,  142 => 37,  136 => 34,  133 => 33,  126 => 28,  124 => 27,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("    {# templates/admin/user/index.html.twig #}
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
                                <div class=\"d-flex flex-column flex-sm-row align-items-center align-items-sm-start text-center text-sm-start gap-3 gap-md-4\">
                                    <div class=\"icon-wrapper bg-white bg-opacity-20 rounded-3 rounded-md-4 p-3 p-md-4 flex-shrink-0\">
                                        <i class=\"bi bi-people-fill text-white display-6 display-md-4\"></i>
                                    </div>
                                    <div>
                                        <h1 class=\"h3 h-md-1 display-md-5 fw-bold text-white mb-1 mb-md-2\">Gestion des utilisateurs</h1>
                                        <div class=\"d-flex align-items-center justify-content-center justify-content-sm-start gap-2 gap-md-3 flex-wrap\">
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
                        {# ✅ Grille stats filtrées : 2 colonnes sur mobile, la 5ème sur toute la largeur #}
                        <div class=\"stats-filtered-grid {% if is_super_admin %}has-5-items{% else %}has-4-items{% endif %}\">
                            <div class=\"stat-filtered-item\">
                                <div class=\"stat-item p-2 p-md-3 bg-light rounded-2 rounded-md-3 h-100\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"min-w-0\">
                                            <span class=\"text-muted text-uppercase small fw-bold d-block\">Filtrés</span>
                                            <h3 class=\"mb-0 fw-bold fs-5 fs-md-3\">{{ totalFiltered }}</h3>
                                        </div>
                                        <div class=\"bg-primary bg-opacity-10 p-2 p-md-3 rounded-2 rounded-md-3 flex-shrink-0\">
                                            <i class=\"bi bi-people text-white fs-5 fs-md-2\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"stat-filtered-item\">
                                <div class=\"stat-item p-2 p-md-3 bg-light rounded-2 rounded-md-3 h-100\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"min-w-0\">
                                            <span class=\"text-muted text-uppercase small fw-bold d-block\">Actifs</span>
                                            <h3 class=\"mb-0 fw-bold text-success fs-5 fs-md-3\">{{ activeFiltered }}</h3>
                                        </div>
                                        <div class=\"bg-success bg-opacity-10 p-2 p-md-3 rounded-2 rounded-md-3 flex-shrink-0\">
                                            <i class=\"bi bi-check-circle text-white fs-5 fs-md-2\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"stat-filtered-item\">
                                <div class=\"stat-item p-2 p-md-3 bg-light rounded-2 rounded-md-3 h-100\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"min-w-0\">
                                            <span class=\"text-muted text-uppercase small fw-bold d-block\">Inactifs</span>
                                            <h3 class=\"mb-0 fw-bold text-danger fs-5 fs-md-3\">{{ inactiveFiltered }}</h3>
                                        </div>
                                        <div class=\"bg-danger bg-opacity-10 p-2 p-md-3 rounded-2 rounded-md-3 flex-shrink-0\">
                                            <i class=\"bi bi-pause-circle text-white fs-5 fs-md-2\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"stat-filtered-item\">
                                <div class=\"stat-item p-2 p-md-3 bg-light rounded-2 rounded-md-3 h-100\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"min-w-0\">
                                            <span class=\"text-muted text-uppercase small fw-bold d-block\">Hors quota</span>
                                            <h3 class=\"mb-0 fw-bold text-warning fs-5 fs-md-3\">{{ outOfQuotaFiltered }}</h3>
                                        </div>
                                        <div class=\"bg-warning bg-opacity-10 p-2 p-md-3 rounded-2 rounded-md-3 flex-shrink-0\">
                                            <i class=\"bi bi-exclamation-triangle text-white fs-5 fs-md-2\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {% if is_super_admin %}
                            {# ✅ La 5ème carte (Bloqués) couvre toute la largeur sur mobile #}
                            <div class=\"stat-filtered-item full-width-mobile\">
                                <div class=\"stat-item p-2 p-md-3 bg-light rounded-2 rounded-md-3 h-100\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"min-w-0\">
                                            <span class=\"text-muted text-uppercase small fw-bold d-block\">Bloqués</span>
                                            <h3 class=\"mb-0 fw-bold text-dark fs-5 fs-md-3\">{{ blockedFiltered }}</h3>
                                        </div>
                                        <div class=\"bg-dark bg-opacity-10 p-2 p-md-3 rounded-2 rounded-md-3 flex-shrink-0\">
                                            <i class=\"bi bi-lock text-white fs-5 fs-md-2\"></i>
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
                        <div class=\"d-flex align-items-center gap-1 gap-md-2 flex-wrap filter-actions\">
                            <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-outline-secondary btn-sm btn-md px-2 px-md-3\">
                                <i class=\"bi bi-arrow-counterclockwise me-1\"></i><span class=\"d-none d-sm-inline\">Effacer</span>
                            </a>
                            <button type=\"submit\" form=\"userFilterForm\" class=\"btn btn-primary btn-sm btn-md px-3 px-md-4\">
                                <i class=\"bi bi-funnel me-1\"></i><span class=\"d-none d-sm-inline\">Filtrer</span>
                            </button>
                            
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
                            
                            {% if is_super_admin %}
                                
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
                                
                                <div class=\"col-12 col-md-6 col-lg-3\">
                                    <label for=\"company\" class=\"form-label fw-bold small\">Entreprise</label>
                                    <select name=\"company\" id=\"company\" class=\"form-select bg-light border-0 form-select-sm\">
                                        <option value=\"\">Toutes</option>
                                        {% for company in companies %}
                                        <option value=\"{{ company.id }}\" {{ companyId == company.id ? 'selected' }}>{{ company.companyName|u.truncate(25, '...') }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                                
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
                            
                            {% else %}
                                
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
                {# ✅ Tableau scrollable horizontalement sur mobile #}
                <div class=\"table-responsive table-scroll-mobile\">
                    <table class=\"table table-hover align-middle mb-0 table-sm table-md\">
                        <thead class=\"bg-light\">
                            <tr>
                                <th class=\"ps-2 ps-md-4\" style=\"width: 40px;\"></th>
                                <th>Utilisateur</th>
                                {% if is_super_admin %}<th class=\"d-none d-lg-table-cell\">Entreprise</th>{% endif %}
                                <th>Rôle</th>
                                <th>Statut</th>
                                <th>Contact</th>
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
                                        <div class=\"fw-semibold small fs-md-6 text-nowrap\">{{ user.fullName|u.truncate(20, '...') }}</div>
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
                                    <td>
                                        <span class=\"badge rounded-pill {{ user.roleBadgeClass }} p-1 p-md-2 small text-nowrap\">
                                            <i class=\"bi {{ user.roleIcon }} me-1\"></i>
                                            {{ user.roleLabel|u.truncate(10, '...') }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class=\"d-flex flex-column gap-1\">
                                            <span class=\"badge rounded-pill {{ user.statusBadgeClass }} p-1 p-md-2 small text-nowrap\">
                                                <i class=\"bi {{ user.statusIcon }} me-1\"></i>
                                                {{ user.statusLabel|u.truncate(8, '...') }}
                                            </span>
                                            {% if not user.passwordChanged and not user.isHmaOwner %}
                                                <span class=\"badge bg-warning-subtle text-warning-emphasis p-1 small text-nowrap\" data-bs-toggle=\"tooltip\" title=\"Première connexion en attente\">
                                                    <i class=\"bi bi-shield-exclamation me-1\"></i>1ère connexion
                                                </span>
                                            {% endif %}
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"small\">
                                            <div class=\"text-nowrap\"><i class=\"bi bi-envelope me-1 text-muted\"></i> <a href=\"mailto:{{ user.email }}\" class=\"text-decoration-none text-dark\">{{ user.email|u.truncate(15, '...') }}</a></div>
                                            <div class=\"text-nowrap\"><i class=\"bi bi-telephone me-1 text-muted\"></i> <a href=\"tel:{{ user.phone }}\" class=\"text-decoration-none text-dark\">{{ user.phone }}</a></div>
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
                <div class=\"text-muted small w-100 w-md-auto text-center text-md-start\">
                    <span class=\"d-none d-sm-inline\">Affichage de </span>
                    {{ ((currentPage - 1) * limit) + 1 }} à {{ min(currentPage * limit, totalItems) }} 
                    <span class=\"d-none d-sm-inline\">sur {{ totalItems }} utilisateurs</span>
                </div>
                <nav aria-label=\"Pagination\" class=\"w-100 w-md-auto\">
                    <ul class=\"pagination pagination-sm mb-0 justify-content-center\">
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
                                <li class=\"page-item disabled d-none d-sm-block\"><span class=\"page-link\">…</span></li>
                            {% endif %}
                        {% endif %}
                        
                        {% for i in startPage..endPage %}
                            <li class=\"page-item {{ i == currentPage ? 'active' }}\">
                                <a class=\"page-link\" href=\"{{ path('app_user_index', {page: i, search: search, role: role, status: status, company: companyId}) }}\">{{ i }}</a>
                            </li>
                        {% endfor %}
                        
                        {% if endPage < totalPages %}
                            {% if endPage < totalPages - 1 %}
                                <li class=\"page-item disabled d-none d-sm-block\"><span class=\"page-link\">…</span></li>
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
        <div class=\"modal-dialog modal-dialog-centered modal-sm modal-dialog-scrollable\">
            <div class=\"modal-content border-0 shadow\">
                <div class=\"modal-header bg-warning text-white border-0\">
                    <h5 class=\"modal-title fs-6\"><i class=\"bi bi-exclamation-triangle me-2\"></i>Confirmation</h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body text-center py-3 py-md-4\">
                    <i class=\"bi bi-question-circle text-warning modal-icon\" style=\"font-size: 3rem;\"></i>
                    <h5 id=\"toggleStatusMessage\" class=\"mt-2 mt-md-3 mb-0 fs-6\"></h5>
                    <p class=\"text-muted small mb-0\">Cette action peut être annulée à tout moment.</p>
                </div>
                <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3 flex-column flex-sm-row gap-2\">
                    <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3 w-100 w-sm-auto\" data-bs-dismiss=\"modal\"><i class=\"bi bi-x me-2\"></i>Annuler</button>
                    <form id=\"toggleStatusForm\" method=\"post\" class=\"d-inline w-100 w-sm-auto\">
                        <input type=\"hidden\" name=\"_token\" id=\"toggleStatusToken\">
                        <button type=\"submit\" class=\"btn btn-warning btn-sm px-3 w-100\"><i class=\"bi bi-check me-2\"></i>Confirmer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered modal-sm modal-dialog-scrollable\">
            <div class=\"modal-content border-0 shadow\">
                <div class=\"modal-header bg-danger text-white border-0\">
                    <h5 class=\"modal-title fs-6\"><i class=\"bi bi-exclamation-triangle me-2\"></i>Confirmation de suppression</h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body text-center py-3 py-md-4\">
                    <i class=\"bi bi-trash3 text-danger modal-icon\" style=\"font-size: 3rem;\"></i>
                    <h5 id=\"deleteMessage\" class=\"mt-2 mt-md-3 mb-0 fs-6\"></h5>
                    <p class=\"text-muted small mb-0\">Cette action est irréversible.</p>
                </div>
                <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3 flex-column flex-sm-row gap-2\">
                    <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3 w-100 w-sm-auto\" data-bs-dismiss=\"modal\"><i class=\"bi bi-x me-2\"></i>Annuler</button>
                    <form id=\"deleteForm\" method=\"post\" class=\"d-inline w-100 w-sm-auto\">
                        <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                        <button type=\"submit\" class=\"btn btn-danger btn-sm px-3 w-100\"><i class=\"bi bi-trash me-2\"></i>Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered modal-sm modal-dialog-scrollable\">
            <div class=\"modal-content border-0 shadow\">
                <div class=\"modal-header bg-warning text-white border-0\">
                    <h5 class=\"modal-title fs-6\"><i class=\"bi bi-exclamation-triangle me-2\"></i>Limite atteinte</h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body text-center py-3 py-md-4\">
                    <i class=\"bi bi-people-fill text-warning modal-icon\" style=\"font-size: 3rem;\"></i>
                    <h5 class=\"mt-2 mt-md-3 fs-6\">Limite d'utilisateurs atteinte</h5>
                    <p class=\"text-muted small mb-0\">Passez à un plan supérieur pour ajouter des utilisateurs.</p>
                </div>
                <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3 flex-column flex-sm-row gap-2\">
                    <a href=\"{{ path('app_subscription_plans') }}\" class=\"btn btn-warning btn-sm px-3 w-100 w-sm-auto\"><i class=\"bi bi-arrow-up-circle me-2\"></i>Voir les offres</a>
                    <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3 w-100 w-sm-auto\" data-bs-dismiss=\"modal\">Annuler</button>
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

    /* ============================================
    STATS FILTRÉES - GRILLE ADAPTATIVE
    ============================================ */
    .stats-filtered-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 0.5rem;
    }

    /* 5 items : les 4 premiers en 2x2, le 5ème en pleine largeur */
    .stats-filtered-grid.has-5-items .stat-filtered-item.full-width-mobile {
        grid-column: 1 / -1;
    }

    /* 4 items : 2x2 sur mobile */
    .stats-filtered-grid.has-4-items {
        grid-template-columns: repeat(2, 1fr);
    }

    /* Sur tablette+ : 4 colonnes pour 4 items, 5 colonnes pour 5 items */
    @media (min-width: 768px) {
        .stats-filtered-grid.has-4-items {
            grid-template-columns: repeat(4, 1fr);
            gap: 0.75rem;
        }
        .stats-filtered-grid.has-5-items {
            grid-template-columns: repeat(5, 1fr);
            gap: 0.75rem;
        }
        .stats-filtered-grid.has-5-items .stat-filtered-item.full-width-mobile {
            grid-column: auto;
        }
    }

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

    /* Utility */
    .min-w-0 {
        min-width: 0;
    }

    /* ============================================
    RESPONSIVE MOBILE
    ============================================ */

    /* Tablette */
    @media (max-width: 991.98px) {
        .filter-actions {
            width: 100%;
            justify-content: stretch;
        }
        .filter-actions .btn {
            flex: 1;
        }
    }

    /* Mobile */
    @media (max-width: 767.98px) {
        /* Container */
        .container-fluid {
            padding-left: 0.5rem !important;
            padding-right: 0.5rem !important;
        }

        /* Header */
        .modern-header {
            min-height: auto;
        }
        .modern-header h1 {
            font-size: 1.25rem;
        }
        .modern-header .display-md-4 {
            font-size: 1.75rem !important;
        }
        .modern-header .icon-wrapper {
            padding: 0.65rem !important;
        }
        .modern-header .position-relative.p-3 {
            padding-bottom: 1.5rem !important;
        }

        /* Stats grid header */
        .stats-grid {
            gap: 4px;
            margin-top: 0.5rem;
        }
        .stats-grid .stat-card {
            padding: 0.4rem 0.25rem !important;
        }
        .stats-grid .stat-value {
            font-size: 0.95rem !important;
        }
        .stats-grid .stat-label {
            font-size: 0.55rem !important;
            line-height: 1;
        }

        /* Filtres actions */
        .filter-actions {
            flex-direction: column;
            gap: 0.4rem !important;
        }
        .filter-actions .btn {
            width: 100%;
            font-size: 0.8rem;
            padding: 0.4rem 0.5rem;
        }
        .filter-actions .btn .d-none.d-sm-inline {
            display: inline !important;
        }

        /* Stats filtrées */
        .stat-item {
            padding: 0.5rem !important;
        }
        .stat-item h3 {
            font-size: 1rem !important;
        }
        .stat-item .text-uppercase {
            font-size: 0.6rem !important;
        }
        .stat-item .bg-primary,
        .stat-item .bg-success,
        .stat-item .bg-danger,
        .stat-item .bg-warning,
        .stat-item .bg-dark {
            padding: 0.4rem !important;
        }
        .stat-item i {
            font-size: 1rem !important;
        }

        /* ============================================
        TABLEAU SCROLLABLE HORIZONTALEMENT
        ============================================ */
        .table-scroll-mobile {
            overflow-x: auto !important;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: thin;
        }
        .table-scroll-mobile::-webkit-scrollbar {
            height: 6px;
        }
        .table-scroll-mobile::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        .table-scroll-mobile::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 10px;
        }
        .table-scroll-mobile::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }

        /* Tableau : forcer une largeur minimale */
        .table-scroll-mobile table {
            min-width: 780px;
            width: 100%;
        }
        .table-scroll-mobile table th,
        .table-scroll-mobile table td {
            white-space: nowrap;
            padding: 0.5rem 0.5rem !important;
            font-size: 0.8rem;
        }
        .table-scroll-mobile table th {
            font-size: 0.75rem;
            font-weight: 700;
        }
        .table-scroll-mobile table td .badge {
            font-size: 0.65rem !important;
            padding: 0.25rem 0.5rem !important;
        }
        .table-scroll-mobile table td .btn-sm {
            padding: 0.25rem 0.4rem;
            font-size: 0.75rem;
        }

        /* Card header */
        .card-header h5 {
            font-size: 0.9rem;
        }
        .card-header h5 .badge {
            font-size: 0.65rem;
        }

        /* Pagination */
        .pagination-sm .page-link {
            padding: 0.3rem 0.5rem;
            font-size: 0.75rem;
        }

        /* Modals */
        .modal-body h5 {
            font-size: 0.9rem;
        }
        .modal-body p {
            font-size: 0.8rem;
        }
        .modal-icon {
            font-size: 2rem !important;
        }
    }

    /* Très petits mobiles */
    @media (max-width: 375.98px) {
        .modern-header h1 {
            font-size: 1.1rem;
        }
        .modern-header .display-md-4 {
            font-size: 1.5rem !important;
        }
        .stats-grid .stat-value {
            font-size: 0.85rem !important;
        }
        .stats-grid .stat-label {
            font-size: 0.5rem !important;
        }
        .stat-item h3 {
            font-size: 0.9rem !important;
        }
        .stat-item .text-uppercase {
            font-size: 0.55rem !important;
        }
        .filter-actions .btn {
            font-size: 0.75rem;
            padding: 0.35rem 0.4rem;
        }
        .table-scroll-mobile table {
            min-width: 720px;
        }
    }

    /* Classe utilitaire pour pleine largeur sur mobile */
    @media (max-width: 575.98px) {
        .w-100-mobile {
            width: 100% !important;
        }
    }
    @media (min-width: 576px) {
        .w-sm-auto {
            width: auto !important;
        }
    }
    </style>
    {% endblock %}", "admin/user/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\user\\index.html.twig");
    }
}
