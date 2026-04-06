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

/* admin/type_promotion/index.html.twig */
class __TwigTemplate_e25df14144c623136d3e30f217499480 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/type_promotion/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/type_promotion/index.html.twig"));

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

        yield "Types de promotion - HMA Market";
        
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
    <div class=\"d-flex flex-wrap justify-content-between align-items-center mb-4\">
        <div class=\"mb-2 mb-sm-0\">
            <h1 class=\"h3 mb-1\">
                <i class=\"fas fa-cog me-2 text-primary\"></i>Types de promotion
            </h1>
            <p class=\"text-muted mb-0\">Gérez les types de réduction (pourcentage, montant fixe, etc.)</p>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_index");
        yield "\" class=\"btn btn-outline-primary\">
                <i class=\"fas fa-list me-2\"></i> Voir les promotions
            </a>
            <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouveau type
            </a>
        </div>
    </div>

    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", ["success"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            yield "        <div class=\"alert alert-success alert-dismissible fade show\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", ["error"], "method", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 28
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "
    <!-- Statistiques -->
    <div class=\"card shadow-sm border-0 mb-4\">
        <div class=\"card-header bg-white py-3 border-0\">
            <h5 class=\"mb-0\"><i class=\"fas fa-chart-pie me-2 text-primary\"></i>Statistiques</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row g-3\">
                <div class=\"col-md-4\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">Total</span>
                                <h3 class=\"mb-0 fw-bold\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFiltered"]) || array_key_exists("totalFiltered", $context) ? $context["totalFiltered"] : (function () { throw new RuntimeError('Variable "totalFiltered" does not exist.', 43, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-tag fa-2x text-primary opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">Actifs</span>
                                <h3 class=\"mb-0 fw-bold\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeFiltered"]) || array_key_exists("activeFiltered", $context) ? $context["activeFiltered"] : (function () { throw new RuntimeError('Variable "activeFiltered" does not exist.', 54, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-check-circle fa-2x text-success opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">Inactifs</span>
                                <h3 class=\"mb-0 fw-bold\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactiveFiltered"]) || array_key_exists("inactiveFiltered", $context) ? $context["inactiveFiltered"] : (function () { throw new RuntimeError('Variable "inactiveFiltered" does not exist.', 65, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-ban fa-2x text-danger opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card shadow-sm border-0 mb-4\">
        <div class=\"card-header bg-white py-3 border-0\">
            <h5 class=\"mb-0\"><i class=\"fas fa-filter me-2 text-primary\"></i>Filtres</h5>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" class=\"row g-3\">
                <div class=\"col-lg-4 col-md-6\">
                    <label class=\"form-label fw-semibold\">Recherche</label>
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white border-end-0\"><i class=\"fas fa-search text-muted\"></i></span>
                        <input type=\"text\" name=\"search\" value=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 86, $this->source); })()), "html", null, true);
        yield "\" class=\"form-control border-start-0\" placeholder=\"Nom, description...\">
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <label class=\"form-label fw-semibold\">Statut</label>
                    <select name=\"status\" class=\"form-select\">
                        <option value=\"all\" ";
        // line 92
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 92, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"active\" ";
        // line 93
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 93, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                        <option value=\"inactive\" ";
        // line 94
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 94, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                    </select>
                </div>
                <div class=\"col-lg-5 d-flex gap-2 align-items-end justify-content-lg-end justify-content-start\">
                    <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_index");
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-undo-alt me-1\"></i> Effacer
                    </a>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-filter me-1\"></i> Filtrer
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Grille des types (cartes) -->
    <div class=\"row g-4\">
        ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 111, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 112
            yield "            <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-12\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow transition-all rounded-4 overflow-hidden\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-start mb-2\">
                            <h5 class=\"card-title fw-bold mb-0\">";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 116), 0, 30), "html", null, true);
            yield "</h5>
                            <span class=\"badge ";
            // line 117
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["type"], "isActive", [], "any", false, false, false, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield " px-2 py-1 ms-1 flex-shrink-0\">
                                ";
            // line 118
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["type"], "isActive", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                            </span>
                        </div>
                        <p class=\"card-text small text-muted mb-3\">
                            ";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["type"], "description", [], "any", true, true, false, 122)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "description", [], "any", false, false, false, 122), "Aucune description")) : ("Aucune description")), 0, 80), "html", null, true);
            yield "
                            ";
            // line 123
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["type"], "description", [], "any", false, false, false, 123)) > 80)) {
                yield "...";
            }
            // line 124
            yield "                        </p>
                        <div class=\"small text-muted\">
                            <i class=\"fas fa-calendar-alt me-1\"></i> Créé le ";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "createdAt", [], "any", false, false, false, 126), "d/m/Y"), "html", null, true);
            yield "
                        </div>
                    </div>
                    <div class=\"card-footer bg-transparent border-0 d-flex justify-content-between gap-2 pt-0 pb-3\">
                        <a href=\"";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 130)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary flex-fill\">
                            <i class=\"fas fa-edit me-1\"></i> Modifier
                        </a>
                        ";
            // line 133
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 134
                yield "                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger flex-fill\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 134), "html", null, true);
                yield "\">
                                <i class=\"fas fa-trash-alt me-1\"></i> Supprimer
                            </button>
                        ";
            }
            // line 138
            yield "                    </div>
                </div>
            </div>

            <!-- Modal de suppression pour ce type -->
            <div class=\"modal fade\" id=\"deleteModal-";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 143), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 143), "html", null, true);
            yield "\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header border-0\">
                            <h5 class=\"modal-title text-danger\" id=\"deleteModalLabel-";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 147), "html", null, true);
            yield "\">
                                <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmer la suppression
                            </h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
                        </div>
                        <div class=\"modal-body text-center py-4\">
                            <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                            <h5>Êtes-vous sûr de vouloir supprimer ce type ?</h5>
                            <p class=\"text-muted mb-0\">Type : <strong>";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 155), "html", null, true);
            yield "</strong></p>
                            <p class=\"text-muted small mt-2\">Cette action est irréversible.</p>
                        </div>
                        <div class=\"modal-footer border-0 justify-content-center\">
                            <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                                <i class=\"fas fa-times me-1\"></i> Annuler
                            </button>
                            <form method=\"post\" action=\"";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 162)]), "html", null, true);
            yield "\" class=\"d-inline\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 163))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-danger\">
                                    <i class=\"fas fa-trash-alt me-1\"></i> Supprimer définitivement
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 172
        if (!$context['_iterated']) {
            // line 173
            yield "            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm rounded-4 text-center py-5\">
                    <div class=\"card-body\">
                        <i class=\"fas fa-percent fa-5x text-muted mb-3 opacity-25\"></i>
                        <h4 class=\"text-muted\">Aucun type de promotion trouvé</h4>
                        <p class=\"text-muted\">Modifiez vos filtres ou créez un nouveau type.</p>
                        <a href=\"";
            // line 179
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_new");
            yield "\" class=\"btn btn-primary mt-2\">
                            <i class=\"fas fa-plus-circle me-2\"></i> Nouveau type
                        </a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 189
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 189, $this->source); })()) > 1)) {
            // line 190
            yield "        <nav class=\"mt-5\">
            <ul class=\"pagination justify-content-center\">
                ";
            // line 192
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 192, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 193
                yield "                    <li class=\"page-item ";
                yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 193, $this->source); })()))) ? ("active") : (""));
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 194
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 194, $this->source); })()), "request", [], "any", false, false, false, 194), "query", [], "any", false, false, false, 194), "all", [], "any", false, false, false, 194), ["page" => $context["page"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            yield "            </ul>
        </nav>
    ";
        }
        // line 200
        yield "</div>

<style>
.hover-shadow {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.hover-shadow:hover {
    transform: translateY(-5px);
    box-shadow: 0 1rem 2rem rgba(0,0,0,0.1) !important;
}
.rounded-4 {
    border-radius: 1rem;
}
.stat-card {
    transition: transform 0.2s;
}
.stat-card:hover {
    transform: scale(1.02);
    background-color: #ffffff !important;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
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
        return "admin/type_promotion/index.html.twig";
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
        return array (  435 => 200,  430 => 197,  419 => 194,  414 => 193,  410 => 192,  406 => 190,  404 => 189,  399 => 186,  386 => 179,  378 => 173,  376 => 172,  362 => 163,  358 => 162,  348 => 155,  337 => 147,  328 => 143,  321 => 138,  313 => 134,  311 => 133,  305 => 130,  298 => 126,  294 => 124,  290 => 123,  286 => 122,  279 => 118,  275 => 117,  271 => 116,  265 => 112,  260 => 111,  244 => 98,  237 => 94,  233 => 93,  229 => 92,  220 => 86,  196 => 65,  182 => 54,  168 => 43,  153 => 30,  144 => 28,  139 => 27,  130 => 25,  126 => 24,  117 => 18,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Types de promotion - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <div class=\"d-flex flex-wrap justify-content-between align-items-center mb-4\">
        <div class=\"mb-2 mb-sm-0\">
            <h1 class=\"h3 mb-1\">
                <i class=\"fas fa-cog me-2 text-primary\"></i>Types de promotion
            </h1>
            <p class=\"text-muted mb-0\">Gérez les types de réduction (pourcentage, montant fixe, etc.)</p>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"{{ path('app_admin_promotion_index') }}\" class=\"btn btn-outline-primary\">
                <i class=\"fas fa-list me-2\"></i> Voir les promotions
            </a>
            <a href=\"{{ path('app_admin_type_promotion_new') }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouveau type
            </a>
        </div>
    </div>

    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    {% endfor %}
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible fade show\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    {% endfor %}

    <!-- Statistiques -->
    <div class=\"card shadow-sm border-0 mb-4\">
        <div class=\"card-header bg-white py-3 border-0\">
            <h5 class=\"mb-0\"><i class=\"fas fa-chart-pie me-2 text-primary\"></i>Statistiques</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row g-3\">
                <div class=\"col-md-4\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">Total</span>
                                <h3 class=\"mb-0 fw-bold\">{{ totalFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-tag fa-2x text-primary opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">Actifs</span>
                                <h3 class=\"mb-0 fw-bold\">{{ activeFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-check-circle fa-2x text-success opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">Inactifs</span>
                                <h3 class=\"mb-0 fw-bold\">{{ inactiveFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-ban fa-2x text-danger opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card shadow-sm border-0 mb-4\">
        <div class=\"card-header bg-white py-3 border-0\">
            <h5 class=\"mb-0\"><i class=\"fas fa-filter me-2 text-primary\"></i>Filtres</h5>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" class=\"row g-3\">
                <div class=\"col-lg-4 col-md-6\">
                    <label class=\"form-label fw-semibold\">Recherche</label>
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white border-end-0\"><i class=\"fas fa-search text-muted\"></i></span>
                        <input type=\"text\" name=\"search\" value=\"{{ search }}\" class=\"form-control border-start-0\" placeholder=\"Nom, description...\">
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <label class=\"form-label fw-semibold\">Statut</label>
                    <select name=\"status\" class=\"form-select\">
                        <option value=\"all\" {{ status == 'all' ? 'selected' }}>Tous</option>
                        <option value=\"active\" {{ status == 'active' ? 'selected' }}>Actifs</option>
                        <option value=\"inactive\" {{ status == 'inactive' ? 'selected' }}>Inactifs</option>
                    </select>
                </div>
                <div class=\"col-lg-5 d-flex gap-2 align-items-end justify-content-lg-end justify-content-start\">
                    <a href=\"{{ path('app_admin_type_promotion_index') }}\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-undo-alt me-1\"></i> Effacer
                    </a>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-filter me-1\"></i> Filtrer
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Grille des types (cartes) -->
    <div class=\"row g-4\">
        {% for type in types %}
            <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-12\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow transition-all rounded-4 overflow-hidden\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-start mb-2\">
                            <h5 class=\"card-title fw-bold mb-0\">{{ type.name|slice(0, 30) }}</h5>
                            <span class=\"badge {{ type.isActive ? 'bg-success' : 'bg-secondary' }} px-2 py-1 ms-1 flex-shrink-0\">
                                {{ type.isActive ? 'Actif' : 'Inactif' }}
                            </span>
                        </div>
                        <p class=\"card-text small text-muted mb-3\">
                            {{ type.description|default('Aucune description')|slice(0, 80) }}
                            {% if type.description|length > 80 %}...{% endif %}
                        </p>
                        <div class=\"small text-muted\">
                            <i class=\"fas fa-calendar-alt me-1\"></i> Créé le {{ type.createdAt|date('d/m/Y') }}
                        </div>
                    </div>
                    <div class=\"card-footer bg-transparent border-0 d-flex justify-content-between gap-2 pt-0 pb-3\">
                        <a href=\"{{ path('app_admin_type_promotion_edit', {id: type.id}) }}\" class=\"btn btn-sm btn-outline-primary flex-fill\">
                            <i class=\"fas fa-edit me-1\"></i> Modifier
                        </a>
                        {% if is_granted('ROLE_ADMIN') %}
                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger flex-fill\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal-{{ type.id }}\">
                                <i class=\"fas fa-trash-alt me-1\"></i> Supprimer
                            </button>
                        {% endif %}
                    </div>
                </div>
            </div>

            <!-- Modal de suppression pour ce type -->
            <div class=\"modal fade\" id=\"deleteModal-{{ type.id }}\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel-{{ type.id }}\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header border-0\">
                            <h5 class=\"modal-title text-danger\" id=\"deleteModalLabel-{{ type.id }}\">
                                <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmer la suppression
                            </h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
                        </div>
                        <div class=\"modal-body text-center py-4\">
                            <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                            <h5>Êtes-vous sûr de vouloir supprimer ce type ?</h5>
                            <p class=\"text-muted mb-0\">Type : <strong>{{ type.name }}</strong></p>
                            <p class=\"text-muted small mt-2\">Cette action est irréversible.</p>
                        </div>
                        <div class=\"modal-footer border-0 justify-content-center\">
                            <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                                <i class=\"fas fa-times me-1\"></i> Annuler
                            </button>
                            <form method=\"post\" action=\"{{ path('app_admin_type_promotion_delete', {id: type.id}) }}\" class=\"d-inline\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ type.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger\">
                                    <i class=\"fas fa-trash-alt me-1\"></i> Supprimer définitivement
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm rounded-4 text-center py-5\">
                    <div class=\"card-body\">
                        <i class=\"fas fa-percent fa-5x text-muted mb-3 opacity-25\"></i>
                        <h4 class=\"text-muted\">Aucun type de promotion trouvé</h4>
                        <p class=\"text-muted\">Modifiez vos filtres ou créez un nouveau type.</p>
                        <a href=\"{{ path('app_admin_type_promotion_new') }}\" class=\"btn btn-primary mt-2\">
                            <i class=\"fas fa-plus-circle me-2\"></i> Nouveau type
                        </a>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>

    <!-- Pagination -->
    {% if totalPages > 1 %}
        <nav class=\"mt-5\">
            <ul class=\"pagination justify-content-center\">
                {% for page in 1..totalPages %}
                    <li class=\"page-item {{ page == currentPage ? 'active' }}\">
                        <a class=\"page-link\" href=\"{{ path('app_admin_type_promotion_index', app.request.query.all|merge({'page': page})) }}\">{{ page }}</a>
                    </li>
                {% endfor %}
            </ul>
        </nav>
    {% endif %}
</div>

<style>
.hover-shadow {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.hover-shadow:hover {
    transform: translateY(-5px);
    box-shadow: 0 1rem 2rem rgba(0,0,0,0.1) !important;
}
.rounded-4 {
    border-radius: 1rem;
}
.stat-card {
    transition: transform 0.2s;
}
.stat-card:hover {
    transform: scale(1.02);
    background-color: #ffffff !important;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
}
</style>
{% endblock %}", "admin/type_promotion/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\type_promotion\\index.html.twig");
    }
}
