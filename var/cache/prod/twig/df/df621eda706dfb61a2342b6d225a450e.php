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
class __TwigTemplate_60386044f2b9a34ca164bb38d8cc7e4b extends Template
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
        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Gestion des utilisateurs - HMA Market";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        if ((($tmp = ($context["is_super_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 34), "companyDisplayName", [], "any", false, false, false, 34)), "truncate", [20, "..."], "method", false, false, false, 34), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", false, false, false, 44), "html", null, true);
        yield "</div>
                                        <div class=\"stat-label text-white-50 small\">Total</div>
                                    </div>
                                    <div class=\"stat-card bg-white bg-opacity-10 rounded-2 rounded-md-3 p-2 p-md-3 text-center\">
                                        <div class=\"stat-value text-success h5 h-md-3 mb-0 fw-bold\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active", [], "any", false, false, false, 48), "html", null, true);
        yield "</div>
                                        <div class=\"stat-label text-white-50 small\">Actifs</div>
                                    </div>
                                    <div class=\"stat-card bg-white bg-opacity-10 rounded-2 rounded-md-3 p-2 p-md-3 text-center\">
                                        <div class=\"stat-value text-warning h5 h-md-3 mb-0 fw-bold\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "inactiveByAdmin", [], "any", false, false, false, 52), "html", null, true);
        yield "</div>
                                        <div class=\"stat-label text-white-50 small\">Inactifs</div>
                                    </div>
                                    <div class=\"stat-card bg-white bg-opacity-10 rounded-2 rounded-md-3 p-2 p-md-3 text-center\">
                                        <div class=\"stat-value text-danger h5 h-md-3 mb-0 fw-bold\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "outOfQuota", [], "any", false, false, false, 56), "html", null, true);
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
        if ((($tmp = ($context["is_super_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalFiltered"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeFiltered"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inactiveFiltered"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["outOfQuotaFiltered"] ?? null), "html", null, true);
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
        if ((($tmp = ($context["is_super_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["blockedFiltered"] ?? null), "html", null, true);
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
        if ((($context["is_super_admin"] ?? null) || ($context["can_add_user"] ?? null))) {
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
        if ((($tmp = ($context["is_super_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 186
            yield "                                
                                <div class=\"col-12 col-md-6 col-lg-3\">
                                    <label for=\"search\" class=\"form-label fw-bold small\">Rechercher</label>
                                    <div class=\"input-group\">
                                        <span class=\"input-group-text bg-light border-0\"><i class=\"bi bi-search\"></i></span>
                                        <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control bg-light border-0 form-control-sm\" placeholder=\"Nom, email...\" value=\"";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
            yield "\">
                                        ";
            // line 192
            if ((($tmp = ($context["search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 193
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => ($context["currentPage"] ?? null), "role" => ($context["role"] ?? null), "status" => ($context["status"] ?? null), "company" => ($context["companyId"] ?? null)]), "html", null, true);
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
            $context['_seq'] = CoreExtension::ensureTraversable(($context["companies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
                // line 205
                yield "                                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 205), "html", null, true);
                yield "\" ";
                yield (((($context["companyId"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 205))) ? ("selected") : (""));
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
            yield (((($context["role"] ?? null) == "ROLE_ADMIN")) ? ("selected") : (""));
            yield ">Administrateurs</option>
                                        <option value=\"ROLE_MANAGER\" ";
            // line 215
            yield (((($context["role"] ?? null) == "ROLE_MANAGER")) ? ("selected") : (""));
            yield ">Gestionnaires</option>
                                        <option value=\"ROLE_STOCK_MANAGER\" ";
            // line 216
            yield (((($context["role"] ?? null) == "ROLE_STOCK_MANAGER")) ? ("selected") : (""));
            yield ">Responsables Stock</option>
                                        <option value=\"ROLE_CASHIER\" ";
            // line 217
            yield (((($context["role"] ?? null) == "ROLE_CASHIER")) ? ("selected") : (""));
            yield ">Caissiers</option>
                                    </select>
                                </div>
                                
                                <div class=\"col-12 col-md-6 col-lg-3\">
                                    <label for=\"status\" class=\"form-label fw-bold small\">Statut</label>
                                    <select name=\"status\" id=\"status\" class=\"form-select bg-light border-0 form-select-sm\">
                                        <option value=\"\">Tous</option>
                                        <option value=\"active\" ";
            // line 225
            yield (((($context["status"] ?? null) == "active")) ? ("selected") : (""));
            yield ">Actifs</option>
                                        <option value=\"inactive\" ";
            // line 226
            yield (((($context["status"] ?? null) == "inactive")) ? ("selected") : (""));
            yield ">Désactivés</option>
                                        <option value=\"quota\" ";
            // line 227
            yield (((($context["status"] ?? null) == "quota")) ? ("selected") : (""));
            yield ">Hors quota</option>
                                        <option value=\"blocked\" ";
            // line 228
            yield (((($context["status"] ?? null) == "blocked")) ? ("selected") : (""));
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
            yield "\">
                                        ";
            // line 239
            if ((($tmp = ($context["search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 240
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => ($context["currentPage"] ?? null), "role" => ($context["role"] ?? null), "status" => ($context["status"] ?? null), "company" => ($context["companyId"] ?? null)]), "html", null, true);
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
            yield (((($context["role"] ?? null) == "ROLE_ADMIN")) ? ("selected") : (""));
            yield ">Administrateurs</option>
                                        <option value=\"ROLE_MANAGER\" ";
            // line 252
            yield (((($context["role"] ?? null) == "ROLE_MANAGER")) ? ("selected") : (""));
            yield ">Gestionnaires</option>
                                        <option value=\"ROLE_STOCK_MANAGER\" ";
            // line 253
            yield (((($context["role"] ?? null) == "ROLE_STOCK_MANAGER")) ? ("selected") : (""));
            yield ">Responsables Stock</option>
                                        <option value=\"ROLE_CASHIER\" ";
            // line 254
            yield (((($context["role"] ?? null) == "ROLE_CASHIER")) ? ("selected") : (""));
            yield ">Caissiers</option>
                                    </select>
                                </div>
                                
                                <div class=\"col-12 col-md-6 col-lg-4\">
                                    <label for=\"status\" class=\"form-label fw-bold small\">Statut</label>
                                    <select name=\"status\" id=\"status\" class=\"form-select bg-light border-0 form-select-sm\">
                                        <option value=\"\">Tous</option>
                                        <option value=\"active\" ";
            // line 262
            yield (((($context["status"] ?? null) == "active")) ? ("selected") : (""));
            yield ">Actifs</option>
                                        <option value=\"inactive\" ";
            // line 263
            yield (((($context["status"] ?? null) == "inactive")) ? ("selected") : (""));
            yield ">Désactivés</option>
                                        <option value=\"quota\" ";
            // line 264
            yield (((($context["status"] ?? null) == "quota")) ? ("selected") : (""));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalItems"] ?? null), "html", null, true);
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
        if ((($tmp = ($context["is_super_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["users"] ?? null));
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rowClass"] ?? null), "html", null, true);
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
            if ((($tmp = ($context["is_super_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isEditableBy", [($context["current_user"] ?? null)], "method", false, false, false, 383)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "canToggleStatusBy", [($context["current_user"] ?? null)], "method", false, false, false, 388)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "canBeDeletedBy", [($context["current_user"] ?? null)], "method", false, false, false, 399)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            if ((($tmp = ($context["is_super_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            if ((($context["is_super_admin"] ?? null) || ($context["can_add_user"] ?? null))) {
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
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 435
            yield "            <div class=\"card-footer bg-white py-2 py-md-3 d-flex flex-wrap justify-content-between align-items-center gap-2\">
                <div class=\"text-muted small w-100 w-md-auto text-center text-md-start\">
                    <span class=\"d-none d-sm-inline\">Affichage de </span>
                    ";
            // line 438
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($context["currentPage"] ?? null) - 1) * ($context["limit"] ?? null)) + 1), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min((($context["currentPage"] ?? null) * ($context["limit"] ?? null)), ($context["totalItems"] ?? null)), "html", null, true);
            yield " 
                    <span class=\"d-none d-sm-inline\">sur ";
            // line 439
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalItems"] ?? null), "html", null, true);
            yield " utilisateurs</span>
                </div>
                <nav aria-label=\"Pagination\" class=\"w-100 w-md-auto\">
                    <ul class=\"pagination pagination-sm mb-0 justify-content-center\">
                        <li class=\"page-item ";
            // line 443
            yield (((($context["currentPage"] ?? null) <= 1)) ? ("disabled") : (""));
            yield "\">
                            <a class=\"page-link\" href=\"";
            // line 444
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => (($context["currentPage"] ?? null) - 1), "search" => ($context["search"] ?? null), "role" => ($context["role"] ?? null), "status" => ($context["status"] ?? null), "company" => ($context["companyId"] ?? null)]), "html", null, true);
            yield "\"><i class=\"bi bi-chevron-left\"></i></a>
                        </li>
                        ";
            // line 446
            $context["maxVisible"] = 5;
            // line 447
            yield "                        ";
            $context["startPage"] = max(1, (($context["currentPage"] ?? null) - 2));
            // line 448
            yield "                        ";
            $context["endPage"] = min(($context["totalPages"] ?? null), ((($context["startPage"] ?? null) + ($context["maxVisible"] ?? null)) - 1));
            // line 449
            yield "                        ";
            if (((($context["endPage"] ?? null) - ($context["startPage"] ?? null)) < (($context["maxVisible"] ?? null) - 1))) {
                // line 450
                yield "                            ";
                $context["startPage"] = max(1, ((($context["endPage"] ?? null) - ($context["maxVisible"] ?? null)) + 1));
                // line 451
                yield "                        ";
            }
            // line 452
            yield "                        
                        ";
            // line 453
            if ((($context["startPage"] ?? null) > 1)) {
                // line 454
                yield "                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"";
                // line 455
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => 1, "search" => ($context["search"] ?? null), "role" => ($context["role"] ?? null), "status" => ($context["status"] ?? null), "company" => ($context["companyId"] ?? null)]), "html", null, true);
                yield "\">1</a>
                            </li>
                            ";
                // line 457
                if ((($context["startPage"] ?? null) > 2)) {
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
            $context['_seq'] = CoreExtension::ensureTraversable(range(($context["startPage"] ?? null), ($context["endPage"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 463
                yield "                            <li class=\"page-item ";
                yield ((($context["i"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                yield "\">
                                <a class=\"page-link\" href=\"";
                // line 464
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => $context["i"], "search" => ($context["search"] ?? null), "role" => ($context["role"] ?? null), "status" => ($context["status"] ?? null), "company" => ($context["companyId"] ?? null)]), "html", null, true);
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
            if ((($context["endPage"] ?? null) < ($context["totalPages"] ?? null))) {
                // line 469
                yield "                            ";
                if ((($context["endPage"] ?? null) < (($context["totalPages"] ?? null) - 1))) {
                    // line 470
                    yield "                                <li class=\"page-item disabled d-none d-sm-block\"><span class=\"page-link\">…</span></li>
                            ";
                }
                // line 472
                yield "                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"";
                // line 473
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => ($context["totalPages"] ?? null), "search" => ($context["search"] ?? null), "role" => ($context["role"] ?? null), "status" => ($context["status"] ?? null), "company" => ($context["companyId"] ?? null)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
                yield "</a>
                            </li>
                        ";
            }
            // line 476
            yield "                        
                        <li class=\"page-item ";
            // line 477
            yield (((($context["currentPage"] ?? null) >= ($context["totalPages"] ?? null))) ? ("disabled") : (""));
            yield "\">
                            <a class=\"page-link\" href=\"";
            // line 478
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => (($context["currentPage"] ?? null) + 1), "search" => ($context["search"] ?? null), "role" => ($context["role"] ?? null), "status" => ($context["status"] ?? null), "company" => ($context["companyId"] ?? null)]), "html", null, true);
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
        yield from [];
    }

    // line 555
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 606
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        return array (  1113 => 607,  1106 => 606,  1051 => 556,  1044 => 555,  1032 => 547,  967 => 484,  958 => 478,  954 => 477,  951 => 476,  943 => 473,  940 => 472,  936 => 470,  933 => 469,  931 => 468,  928 => 467,  917 => 464,  912 => 463,  908 => 462,  905 => 461,  902 => 460,  898 => 458,  896 => 457,  891 => 455,  888 => 454,  886 => 453,  883 => 452,  880 => 451,  877 => 450,  874 => 449,  871 => 448,  868 => 447,  866 => 446,  861 => 444,  857 => 443,  850 => 439,  844 => 438,  839 => 435,  837 => 434,  829 => 428,  820 => 424,  812 => 420,  810 => 419,  798 => 414,  795 => 413,  793 => 412,  786 => 409,  777 => 403,  773 => 402,  769 => 401,  766 => 400,  763 => 399,  757 => 396,  753 => 395,  748 => 393,  744 => 392,  740 => 391,  736 => 390,  731 => 389,  728 => 388,  720 => 384,  718 => 383,  712 => 380,  707 => 377,  703 => 375,  697 => 373,  695 => 372,  686 => 368,  680 => 367,  674 => 363,  668 => 359,  666 => 358,  661 => 356,  657 => 355,  653 => 354,  645 => 349,  641 => 348,  637 => 347,  634 => 346,  630 => 344,  626 => 342,  620 => 339,  616 => 337,  614 => 336,  611 => 335,  609 => 334,  604 => 332,  599 => 329,  593 => 325,  590 => 324,  584 => 321,  581 => 320,  573 => 318,  571 => 317,  565 => 314,  562 => 313,  559 => 312,  556 => 311,  553 => 310,  550 => 309,  547 => 308,  544 => 307,  541 => 306,  538 => 305,  533 => 304,  523 => 296,  519 => 295,  511 => 289,  502 => 282,  487 => 269,  479 => 264,  475 => 263,  471 => 262,  460 => 254,  456 => 253,  452 => 252,  448 => 251,  439 => 244,  431 => 240,  429 => 239,  425 => 238,  418 => 233,  410 => 228,  406 => 227,  402 => 226,  398 => 225,  387 => 217,  383 => 216,  379 => 215,  375 => 214,  366 => 207,  353 => 205,  349 => 204,  340 => 197,  332 => 193,  330 => 192,  326 => 191,  319 => 186,  317 => 185,  312 => 183,  307 => 180,  301 => 176,  293 => 172,  291 => 171,  281 => 164,  266 => 151,  254 => 142,  247 => 137,  245 => 136,  243 => 135,  232 => 127,  216 => 114,  200 => 101,  184 => 88,  170 => 82,  142 => 56,  135 => 52,  128 => 48,  121 => 44,  112 => 37,  106 => 34,  103 => 33,  96 => 28,  94 => 27,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/user/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\user\\index.html.twig");
    }
}
