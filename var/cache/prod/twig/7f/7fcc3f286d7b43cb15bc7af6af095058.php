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
class __TwigTemplate_bc0cd31710d9b8460c08b632874bbd2a extends Template
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
        if ((($tmp = ($context["is_super_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 34), "companyDisplayName", [], "any", false, false, false, 34), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", false, false, false, 44), "html", null, true);
        yield "</div>
                                    <div class=\"stat-label text-white-50 small\">Total</div>
                                </div>
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                                    <div class=\"stat-value text-success h3 mb-0 fw-bold\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active", [], "any", false, false, false, 48), "html", null, true);
        yield "</div>
                                    <div class=\"stat-label text-white-50 small\">Actifs</div>
                                </div>
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                                    <div class=\"stat-value text-warning h3 mb-0 fw-bold\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "inactiveByAdmin", [], "any", false, false, false, 52), "html", null, true);
        yield "</div>
                                    <div class=\"stat-label text-white-50 small\">Inactifs</div>
                                </div>
                                <div class=\"stat-card bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                                    <div class=\"stat-value text-danger h3 mb-0 fw-bold\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "outOfQuota", [], "any", false, false, false, 56), "html", null, true);
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
        if ((($tmp = ($context["is_super_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalFiltered"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeFiltered"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inactiveFiltered"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["outOfQuotaFiltered"] ?? null), "html", null, true);
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
        if ((($tmp = ($context["is_super_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 135
            yield "                        <div class=\"col\">
                            <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <span class=\"text-muted text-uppercase small fw-bold\">Bloqués</span>
                                        <h3 class=\"mb-0 fw-bold text-dark\">";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["blockedFiltered"] ?? null), "html", null, true);
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
                <div class=\"card-header bg-white py-3 d-flex align-items-center justify-content-between flex-wrap gap-2\">
                    <h5 class=\"mb-0 fw-bold\"><i class=\"bi bi-sliders2 me-2\"></i>Filtres avancés</h5>
                    <div class=\"d-flex align-items-center gap-2 flex-wrap\">
                        ";
        // line 163
        yield "                        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-outline-secondary px-3\">
                            <i class=\"bi bi-arrow-counterclockwise me-1\"></i>Effacer
                        </a>
                        <button type=\"submit\" form=\"userFilterForm\" class=\"btn btn-primary px-4\">
                            <i class=\"bi bi-funnel me-1\"></i>Filtrer
                        </button>
                        
                        ";
        // line 171
        yield "                        ";
        if ((($context["is_super_admin"] ?? null) || ($context["can_add_user"] ?? null))) {
            // line 172
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
            yield "\" class=\"btn btn-success\">
                                <i class=\"bi bi-person-plus-fill me-1\"></i>Nouvel utilisateur
                            </a>
                        ";
        } else {
            // line 176
            yield "                            <button type=\"button\" class=\"btn btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#quotaReachedModal\">
                                <i class=\"bi bi-person-plus-fill me-1\"></i>Limite atteinte
                            </button>
                        ";
        }
        // line 180
        yield "                    </div>
                </div>
                <div class=\"card-body\">
                    <form method=\"get\" action=\"";
        // line 183
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"row g-3\" id=\"userFilterForm\">
                        
                        ";
        // line 186
        yield "                        ";
        if ((($tmp = ($context["is_super_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 187
            yield "                            
                            ";
            // line 189
            yield "                            <div class=\"col-12 col-md-3\">
                                <label for=\"search\" class=\"form-label fw-bold\">Rechercher</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text bg-light border-0\"><i class=\"bi bi-search\"></i></span>
                                    <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control bg-light border-0\" placeholder=\"Nom, email, téléphone...\" value=\"";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
            yield "\">
                                    ";
            // line 194
            if ((($tmp = ($context["search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 195
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => ($context["currentPage"] ?? null), "role" => ($context["role"] ?? null), "status" => ($context["status"] ?? null), "company" => ($context["companyId"] ?? null)]), "html", null, true);
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
            yield "                            <div class=\"col-12 col-md-3\">
                                <label for=\"company\" class=\"form-label fw-bold\">Entreprise</label>
                                <select name=\"company\" id=\"company\" class=\"form-select bg-light border-0\">
                                    <option value=\"\">Toutes</option>
                                    ";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["companies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
                // line 208
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 208), "html", null, true);
                yield "\" ";
                yield (((($context["companyId"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 208))) ? ("selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 208), "html", null, true);
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
            yield "                            <div class=\"col-12 col-md-3\">
                                <label for=\"role\" class=\"form-label fw-bold\">Rôle</label>
                                <select name=\"role\" id=\"role\" class=\"form-select bg-light border-0\">
                                    <option value=\"\">Tous</option>
                                    <option value=\"ROLE_ADMIN\" ";
            // line 218
            yield (((($context["role"] ?? null) == "ROLE_ADMIN")) ? ("selected") : (""));
            yield ">Administrateurs</option>
                                    <option value=\"ROLE_MANAGER\" ";
            // line 219
            yield (((($context["role"] ?? null) == "ROLE_MANAGER")) ? ("selected") : (""));
            yield ">Gestionnaires</option>
                                    <option value=\"ROLE_STOCK_MANAGER\" ";
            // line 220
            yield (((($context["role"] ?? null) == "ROLE_STOCK_MANAGER")) ? ("selected") : (""));
            yield ">Responsables Stock</option>
                                    <option value=\"ROLE_CASHIER\" ";
            // line 221
            yield (((($context["role"] ?? null) == "ROLE_CASHIER")) ? ("selected") : (""));
            yield ">Caissiers</option>
                                </select>
                            </div>
                            
                            ";
            // line 226
            yield "                            <div class=\"col-12 col-md-3\">
                                <label for=\"status\" class=\"form-label fw-bold\">Statut</label>
                                <select name=\"status\" id=\"status\" class=\"form-select bg-light border-0\">
                                    <option value=\"\">Tous</option>
                                    <option value=\"active\" ";
            // line 230
            yield (((($context["status"] ?? null) == "active")) ? ("selected") : (""));
            yield ">Actifs</option>
                                    <option value=\"inactive\" ";
            // line 231
            yield (((($context["status"] ?? null) == "inactive")) ? ("selected") : (""));
            yield ">Désactivés</option>
                                    <option value=\"quota\" ";
            // line 232
            yield (((($context["status"] ?? null) == "quota")) ? ("selected") : (""));
            yield ">Hors quota</option>
                                    <option value=\"blocked\" ";
            // line 233
            yield (((($context["status"] ?? null) == "blocked")) ? ("selected") : (""));
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
            yield "                            <div class=\"col-12 col-md-4\">
                                <label for=\"search\" class=\"form-label fw-bold\">Rechercher</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text bg-light border-0\"><i class=\"bi bi-search\"></i></span>
                                    <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control bg-light border-0\" placeholder=\"Nom, email, téléphone...\" value=\"";
            // line 245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
            yield "\">
                                    ";
            // line 246
            if ((($tmp = ($context["search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 247
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => ($context["currentPage"] ?? null), "role" => ($context["role"] ?? null), "status" => ($context["status"] ?? null), "company" => ($context["companyId"] ?? null)]), "html", null, true);
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
            yield "                            <div class=\"col-12 col-md-4\">
                                <label for=\"role\" class=\"form-label fw-bold\">Rôle</label>
                                <select name=\"role\" id=\"role\" class=\"form-select bg-light border-0\">
                                    <option value=\"\">Tous</option>
                                    <option value=\"ROLE_ADMIN\" ";
            // line 259
            yield (((($context["role"] ?? null) == "ROLE_ADMIN")) ? ("selected") : (""));
            yield ">Administrateurs</option>
                                    <option value=\"ROLE_MANAGER\" ";
            // line 260
            yield (((($context["role"] ?? null) == "ROLE_MANAGER")) ? ("selected") : (""));
            yield ">Gestionnaires</option>
                                    <option value=\"ROLE_STOCK_MANAGER\" ";
            // line 261
            yield (((($context["role"] ?? null) == "ROLE_STOCK_MANAGER")) ? ("selected") : (""));
            yield ">Responsables Stock</option>
                                    <option value=\"ROLE_CASHIER\" ";
            // line 262
            yield (((($context["role"] ?? null) == "ROLE_CASHIER")) ? ("selected") : (""));
            yield ">Caissiers</option>
                                </select>
                            </div>
                            
                            ";
            // line 267
            yield "                            <div class=\"col-12 col-md-4\">
                                <label for=\"status\" class=\"form-label fw-bold\">Statut</label>
                                <select name=\"status\" id=\"status\" class=\"form-select bg-light border-0\">
                                    <option value=\"\">Tous</option>
                                    <option value=\"active\" ";
            // line 271
            yield (((($context["status"] ?? null) == "active")) ? ("selected") : (""));
            yield ">Actifs</option>
                                    <option value=\"inactive\" ";
            // line 272
            yield (((($context["status"] ?? null) == "inactive")) ? ("selected") : (""));
            yield ">Désactivés</option>
                                    <option value=\"quota\" ";
            // line 273
            yield (((($context["status"] ?? null) == "quota")) ? ("selected") : (""));
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
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-bold\">
                <i class=\"bi bi-table me-2 text-primary\"></i>
                Liste des utilisateurs
                <span class=\"badge bg-primary ms-2 rounded-pill\">";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalItems"] ?? null), "html", null, true);
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
        // line 303
        if ((($tmp = ($context["is_super_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<th>Entreprise</th>";
        }
        // line 304
        yield "                            <th>Rôle</th>
                            <th>Statut</th>
                            <th>Contact</th>
                            <th>Date d'embauche</th>
                            <th class=\"text-end pe-4\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 312
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["users"] ?? null));
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rowClass"] ?? null), "html", null, true);
            yield "\">
                                <td class=\"ps-4\">
                                    <div class=\"position-relative d-inline-block\">
                                        ";
            // line 325
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 325)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 326
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 326))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 326), "html", null, true);
                yield "\" class=\"rounded-circle\" width=\"45\" height=\"45\" style=\"object-fit: cover;\">
                                        ";
            } else {
                // line 328
                yield "                                            <div class=\"rounded-circle bg-primary text-white d-flex align-items-center justify-content-center\" style=\"width:45px;height:45px;\">
                                                <span class=\"fw-bold fs-5\">";
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
                yield "                                            <span class=\"position-absolute bottom-0 end-0 bg-warning rounded-circle p-1 border border-2 border-white\" style=\"width:16px;height:16px;\" data-bs-toggle=\"tooltip\" title=\"Propriétaire\">
                                                <i class=\"bi bi-crown-fill text-white\" style=\"font-size:10px;\"></i>
                                            </span>
                                        ";
            }
            // line 337
            yield "                                    </div>
                                </td>
                                <td>
                                    <div class=\"fw-semibold\">";
            // line 340
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 340), "html", null, true);
            yield "</div>
                                </td>
                                ";
            // line 342
            if ((($tmp = ($context["is_super_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 343
                yield "                                <td>
                                    ";
                // line 344
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "hmaServiceId", [], "any", false, false, false, 344)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 345
                    yield "                                        <span class=\"badge bg-light text-dark p-2\">
                                            <i class=\"bi bi-building me-1\"></i>
                                            ";
                    // line 347
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "hmaServiceId", [], "any", false, false, false, 347), "companyName", [], "any", false, false, false, 347)), "truncate", [20, "..."], "method", false, false, false, 347), "html", null, true);
                    yield "
                                        </span>
                                    ";
                } else {
                    // line 350
                    yield "                                        <span class=\"badge bg-secondary\">Indépendant</span>
                                    ";
                }
                // line 352
                yield "                                </td>
                                ";
            }
            // line 354
            yield "                                <td>
                                    <span class=\"badge rounded-pill ";
            // line 355
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roleBadgeClass", [], "any", false, false, false, 355), "html", null, true);
            yield " p-2\">
                                        <i class=\"bi ";
            // line 356
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roleIcon", [], "any", false, false, false, 356), "html", null, true);
            yield " me-1\"></i>
                                        ";
            // line 357
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roleLabel", [], "any", false, false, false, 357), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td>
                                    <div class=\"d-flex flex-column gap-1\">
                                        <span class=\"badge rounded-pill ";
            // line 362
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statusBadgeClass", [], "any", false, false, false, 362), "html", null, true);
            yield " p-2\">
                                            <i class=\"bi ";
            // line 363
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statusIcon", [], "any", false, false, false, 363), "html", null, true);
            yield " me-1\"></i>
                                            ";
            // line 364
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statusLabel", [], "any", false, false, false, 364), "html", null, true);
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
                                <td>
                                    <div class=\"small\">
                                        <div><i class=\"bi bi-envelope me-1 text-muted\"></i> <a href=\"mailto:";
            // line 375
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 375), "html", null, true);
            yield "\" class=\"text-decoration-none text-dark\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 375)), "truncate", [20, "..."], "method", false, false, false, 375), "html", null, true);
            yield "</a></div>
                                        <div><i class=\"bi bi-telephone me-1 text-muted\"></i> <a href=\"tel:";
            // line 376
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 376), "html", null, true);
            yield "\" class=\"text-decoration-none text-dark\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 376), "html", null, true);
            yield "</a></div>
                                    </div>
                                </td>
                                <td>
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
                                <td class=\"text-end pe-4\">
                                    <div class=\"d-flex gap-1 justify-content-end\">
                                        <a href=\"";
            // line 388
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 388)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info\" data-bs-toggle=\"tooltip\" title=\"Voir\">
                                            <i class=\"bi bi-eye\"></i>
                                        </a>
                                        ";
            // line 391
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isEditableBy", [($context["current_user"] ?? null)], "method", false, false, false, 391)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "canToggleStatusBy", [($context["current_user"] ?? null)], "method", false, false, false, 396)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "canBeDeletedBy", [($context["current_user"] ?? null)], "method", false, false, false, 407)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            if ((($tmp = ($context["is_super_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            // line 427
            if ((($context["is_super_admin"] ?? null) || ($context["can_add_user"] ?? null))) {
                // line 428
                yield "                                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
                yield "\" class=\"btn btn-primary btn-lg px-5\">
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
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 443
            yield "        <div class=\"card-footer bg-white py-3 d-flex flex-wrap justify-content-between align-items-center\">
            <div class=\"text-muted small\">
                Affichage de ";
            // line 445
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($context["currentPage"] ?? null) - 1) * ($context["limit"] ?? null)) + 1), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min((($context["currentPage"] ?? null) * ($context["limit"] ?? null)), ($context["totalItems"] ?? null)), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalItems"] ?? null), "html", null, true);
            yield " utilisateurs
            </div>
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination pagination-sm mb-0\">
                    <li class=\"page-item ";
            // line 449
            yield (((($context["currentPage"] ?? null) <= 1)) ? ("disabled") : (""));
            yield "\">
                        <a class=\"page-link\" href=\"";
            // line 450
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => (($context["currentPage"] ?? null) - 1), "search" => ($context["search"] ?? null), "role" => ($context["role"] ?? null), "status" => ($context["status"] ?? null), "company" => ($context["companyId"] ?? null)]), "html", null, true);
            yield "\"><i class=\"bi bi-chevron-left\"></i></a>
                    </li>
                    ";
            // line 452
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 453
                yield "                        <li class=\"page-item ";
                yield ((($context["i"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                yield "\">
                            <a class=\"page-link\" href=\"";
                // line 454
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
            // line 457
            yield "                    <li class=\"page-item ";
            yield (((($context["currentPage"] ?? null) >= ($context["totalPages"] ?? null))) ? ("disabled") : (""));
            yield "\">
                        <a class=\"page-link\" href=\"";
            // line 458
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => (($context["currentPage"] ?? null) + 1), "search" => ($context["search"] ?? null), "role" => ($context["role"] ?? null), "status" => ($context["status"] ?? null), "company" => ($context["companyId"] ?? null)]), "html", null, true);
            yield "\"><i class=\"bi bi-chevron-right\"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
        ";
        }
        // line 464
        yield "    </div>
        
        <!-- Pagination -->
        ";
        // line 467
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 468
            yield "        <div class=\"card-footer bg-white py-3 d-flex flex-wrap justify-content-between align-items-center\">
            <div class=\"text-muted small\">
                Affichage de ";
            // line 470
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($context["currentPage"] ?? null) - 1) * ($context["limit"] ?? null)) + 1), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min((($context["currentPage"] ?? null) * ($context["limit"] ?? null)), ($context["totalItems"] ?? null)), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalItems"] ?? null), "html", null, true);
            yield " utilisateurs
            </div>
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination pagination-sm mb-0\">
                    <li class=\"page-item ";
            // line 474
            yield (((($context["currentPage"] ?? null) <= 1)) ? ("disabled") : (""));
            yield "\">
                        <a class=\"page-link\" href=\"";
            // line 475
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => (($context["currentPage"] ?? null) - 1), "search" => ($context["search"] ?? null), "role" => ($context["role"] ?? null), "status" => ($context["status"] ?? null), "company" => ($context["companyId"] ?? null)]), "html", null, true);
            yield "\"><i class=\"bi bi-chevron-left\"></i></a>
                    </li>
                    ";
            // line 477
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 478
                yield "                        <li class=\"page-item ";
                yield ((($context["i"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                yield "\">
                            <a class=\"page-link\" href=\"";
                // line 479
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
            // line 482
            yield "                    <li class=\"page-item ";
            yield (((($context["currentPage"] ?? null) >= ($context["totalPages"] ?? null))) ? ("disabled") : (""));
            yield "\">
                        <a class=\"page-link\" href=\"";
            // line 483
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => (($context["currentPage"] ?? null) + 1), "search" => ($context["search"] ?? null), "role" => ($context["role"] ?? null), "status" => ($context["status"] ?? null), "company" => ($context["companyId"] ?? null)]), "html", null, true);
            yield "\"><i class=\"bi bi-chevron-right\"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
        ";
        }
        // line 489
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
        // line 552
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
        yield "\" class=\"btn btn-warning btn-lg px-5\"><i class=\"bi bi-arrow-up-circle me-2\"></i>Voir les offres</a>
                <button type=\"button\" class=\"btn btn-outline-secondary btn-lg px-5\" data-bs-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 560
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 561
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
        yield from [];
    }

    // line 611
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 612
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
        return array (  1121 => 612,  1114 => 611,  1060 => 561,  1053 => 560,  1041 => 552,  976 => 489,  967 => 483,  962 => 482,  951 => 479,  946 => 478,  942 => 477,  937 => 475,  933 => 474,  922 => 470,  918 => 468,  916 => 467,  911 => 464,  902 => 458,  897 => 457,  886 => 454,  881 => 453,  877 => 452,  872 => 450,  868 => 449,  857 => 445,  853 => 443,  851 => 442,  843 => 436,  834 => 432,  826 => 428,  824 => 427,  812 => 422,  809 => 421,  807 => 420,  800 => 417,  791 => 411,  787 => 410,  783 => 409,  780 => 408,  777 => 407,  771 => 404,  767 => 403,  762 => 401,  758 => 400,  754 => 399,  750 => 398,  745 => 397,  742 => 396,  734 => 392,  732 => 391,  726 => 388,  721 => 385,  717 => 383,  711 => 381,  709 => 380,  700 => 376,  694 => 375,  688 => 371,  682 => 367,  680 => 366,  675 => 364,  671 => 363,  667 => 362,  659 => 357,  655 => 356,  651 => 355,  648 => 354,  644 => 352,  640 => 350,  634 => 347,  630 => 345,  628 => 344,  625 => 343,  623 => 342,  618 => 340,  613 => 337,  607 => 333,  604 => 332,  598 => 329,  595 => 328,  587 => 326,  585 => 325,  579 => 322,  576 => 321,  573 => 320,  570 => 319,  567 => 318,  564 => 317,  561 => 316,  558 => 315,  555 => 314,  552 => 313,  547 => 312,  537 => 304,  533 => 303,  518 => 291,  503 => 278,  495 => 273,  491 => 272,  487 => 271,  481 => 267,  474 => 262,  470 => 261,  466 => 260,  462 => 259,  456 => 255,  451 => 251,  443 => 247,  441 => 246,  437 => 245,  431 => 241,  428 => 239,  425 => 238,  418 => 233,  414 => 232,  410 => 231,  406 => 230,  400 => 226,  393 => 221,  389 => 220,  385 => 219,  381 => 218,  375 => 214,  370 => 210,  357 => 208,  353 => 207,  347 => 203,  342 => 199,  334 => 195,  332 => 194,  328 => 193,  322 => 189,  319 => 187,  316 => 186,  311 => 183,  306 => 180,  300 => 176,  292 => 172,  289 => 171,  278 => 163,  263 => 149,  251 => 140,  244 => 135,  242 => 134,  231 => 126,  215 => 113,  199 => 100,  183 => 87,  170 => 81,  142 => 56,  135 => 52,  128 => 48,  121 => 44,  112 => 37,  106 => 34,  103 => 33,  96 => 28,  94 => 27,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/user/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\user\\index.html.twig");
    }
}
