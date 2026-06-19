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

/* stock/inventory/show.html.twig */
class __TwigTemplate_9d20f3f4e3fab9140abb696b8a01f8d4 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/inventory/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/inventory/show.html.twig"));

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

        yield "Inventaire - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 4, $this->source); })()), "inventoryNumber", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .stat-card {
        border-radius: 0.75rem;
        transition: all 0.2s;
    }
    .difference-positive {
        background-color: #d1fae5;
        color: #065f46;
    }
    .difference-negative {
        background-color: #fee2e2;
        color: #991b1b;
    }
    .difference-zero {
        background-color: #f3f4f6;
        color: #6b7280;
    }
    .status-badge {
        font-size: 0.8rem;
        padding: 0.35rem 0.75rem;
    }
    .progress-custom {
        height: 8px;
        border-radius: 4px;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 36
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

        // line 37
        yield "<div class=\"container-fluid px-4 py-3\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-clipboard-list me-1\"></i> Inventaires
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 53, $this->source); })()), "inventoryNumber", [], "any", false, false, false, 53), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-clipboard-list text-primary me-2\"></i>
                Inventaire ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 58, $this->source); })()), "inventoryNumber", [], "any", false, false, false, 58), "html", null, true);
        yield "
            </h1>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
            ";
        // line 65
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 65, $this->source); })()), "status", [], "any", false, false, false, 65) == "in_progress")) {
            // line 66
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_count", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-clipboard-list me-1\"></i> Continuer la saisie
                </a>
            ";
        }
        // line 70
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 70, $this->source); })()), "status", [], "any", false, false, false, 70) == "completed")) {
            // line 71
            yield "                <button type=\"button\" class=\"btn btn-outline-success\" onclick=\"window.print()\">
                    <i class=\"fas fa-print me-1\"></i> Imprimer
                </button>
            ";
        }
        // line 75
        yield "        </div>
    </div>

    <!-- Informations générales -->
    <div class=\"row g-4 mb-4\">
        <div class=\"col-md-6 col-xl-3\">
            <div class=\"card border-0 shadow-sm stat-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <small class=\"text-muted text-uppercase\">N° inventaire</small>
                            <h5 class=\"mb-0\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 86, $this->source); })()), "inventoryNumber", [], "any", false, false, false, 86), "html", null, true);
        yield "</h5>
                        </div>
                        <i class=\"fas fa-hashtag fa-2x text-primary opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-xl-3\">
            <div class=\"card border-0 shadow-sm stat-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <small class=\"text-muted text-uppercase\">Date inventaire</small>
                            <h5 class=\"mb-0\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 99, $this->source); })()), "inventoryDate", [], "any", false, false, false, 99), "d/m/Y"), "html", null, true);
        yield "</h5>
                        </div>
                        <i class=\"fas fa-calendar-alt fa-2x text-primary opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-xl-3\">
            <div class=\"card border-0 shadow-sm stat-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <small class=\"text-muted text-uppercase\">Statut</small>
                            <h5 class=\"mb-0\">
                                <span class=\"badge ";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 113, $this->source); })()), "statusBadgeClass", [], "any", false, false, false, 113), "html", null, true);
        yield " status-badge\">
                                    <i class=\"fas ";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 114, $this->source); })()), "statusIcon", [], "any", false, false, false, 114), "html", null, true);
        yield " me-1\"></i>
                                    ";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 115, $this->source); })()), "statusLabel", [], "any", false, false, false, 115), "html", null, true);
        yield "
                                </span>
                            </h5>
                        </div>
                        <i class=\"fas fa-info-circle fa-2x text-primary opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-xl-3\">
            <div class=\"card border-0 shadow-sm stat-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <small class=\"text-muted text-uppercase\">Progression</small>
                            <h5 class=\"mb-0\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 130, $this->source); })()), "html", null, true);
        yield "%</h5>
                        </div>
                        <i class=\"fas fa-chart-line fa-2x text-primary opacity-50\"></i>
                    </div>
                    <div class=\"progress progress-custom mt-2\">
                        <div class=\"progress-bar bg-primary\" style=\"width: ";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 135, $this->source); })()), "html", null, true);
        yield "%\"></div>
                    </div>
                    <small class=\"text-muted\">";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countedItems"]) || array_key_exists("countedItems", $context) ? $context["countedItems"] : (function () { throw new RuntimeError('Variable "countedItems" does not exist.', 137, $this->source); })()), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 137, $this->source); })()), "html", null, true);
        yield " produits comptés</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Détails supplémentaires -->
    <div class=\"row g-4 mb-4\">
        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-user me-2 text-primary\"></i>
                        Informations
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-2\">
                            <small class=\"text-muted\">Créé par</small>
                            <div class=\"fw-bold\">";
        // line 157
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 157, $this->source); })()), "createdBy", [], "any", false, false, false, 157), "fullName", [], "any", false, false, false, 157)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 157, $this->source); })()), "createdBy", [], "any", false, false, false, 157), "fullName", [], "any", false, false, false, 157), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 157, $this->source); })()), "createdBy", [], "any", false, false, false, 157), "email", [], "any", false, false, false, 157), "html", null, true)));
        yield "</div>
                        </div>
                        <div class=\"col-md-6 mb-2\">
                            <small class=\"text-muted\">Créé le</small>
                            <div class=\"fw-bold\">";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 161, $this->source); })()), "createdAt", [], "any", false, false, false, 161), "d/m/Y H:i"), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"col-md-6 mb-2\">
                            <small class=\"text-muted\">Emplacement</small>
                            <div class=\"fw-bold\">";
        // line 165
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 165, $this->source); })()), "location", [], "any", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 165, $this->source); })()), "location", [], "any", false, false, false, 165), "displayName", [], "any", false, false, false, 165), "html", null, true)) : ("Tous les emplacements"));
        yield "</div>
                        </div>
                        ";
        // line 167
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 167, $this->source); })()), "validatedBy", [], "any", false, false, false, 167)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 168
            yield "                        <div class=\"col-md-6 mb-2\">
                            <small class=\"text-muted\">Validé par</small>
                            <div class=\"fw-bold text-success\">";
            // line 170
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 170, $this->source); })()), "validatedBy", [], "any", false, false, false, 170), "fullName", [], "any", false, false, false, 170)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 170, $this->source); })()), "validatedBy", [], "any", false, false, false, 170), "fullName", [], "any", false, false, false, 170), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 170, $this->source); })()), "validatedBy", [], "any", false, false, false, 170), "email", [], "any", false, false, false, 170), "html", null, true)));
            yield "</div>
                        </div>
                        <div class=\"col-md-6 mb-2\">
                            <small class=\"text-muted\">Validé le</small>
                            <div class=\"fw-bold text-success\">";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 174, $this->source); })()), "validatedAt", [], "any", false, false, false, 174), "d/m/Y H:i"), "html", null, true);
            yield "</div>
                        </div>
                        ";
        }
        // line 177
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 177, $this->source); })()), "notes", [], "any", false, false, false, 177)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 178
            yield "                        <div class=\"col-12 mt-2\">
                            <small class=\"text-muted\">Notes</small>
                            <div class=\"fw-bold\">";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 180, $this->source); })()), "notes", [], "any", false, false, false, 180), "html", null, true);
            yield "</div>
                        </div>
                        ";
        }
        // line 183
        yield "                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-chart-pie me-2 text-primary\"></i>
                        Résumé
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row text-center\">
                        <div class=\"col-4\">
                            <div class=\"p-3 bg-light rounded\">
                                <h3 class=\"mb-0 text-primary\">";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 199, $this->source); })()), "html", null, true);
        yield "</h3>
                                <small class=\"text-muted\">Produits</small>
                            </div>
                        </div>
                        <div class=\"col-4\">
                            <div class=\"p-3 bg-light rounded\">
                                <h3 class=\"mb-0 text-warning\">";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["differences"]) || array_key_exists("differences", $context) ? $context["differences"] : (function () { throw new RuntimeError('Variable "differences" does not exist.', 205, $this->source); })())), "html", null, true);
        yield "</h3>
                                <small class=\"text-muted\">Écarts</small>
                            </div>
                        </div>
                        <div class=\"col-4\">
                            <div class=\"p-3 bg-light rounded\">
                                <h3 class=\"mb-0 text-success\">";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countedItems"]) || array_key_exists("countedItems", $context) ? $context["countedItems"] : (function () { throw new RuntimeError('Variable "countedItems" does not exist.', 211, $this->source); })()), "html", null, true);
        yield "</h3>
                                <small class=\"text-muted\">Comptés</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des produits -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Produits inventoriés
            </h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th>Produit</th>
                            <th>Code-barres</th>
                            <th class=\"text-end\">Stock attendu</th>
                            <th class=\"text-end\">Stock compté</th>
                            <th class=\"text-end\">Écart</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 243
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 243, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 244
            yield "                            ";
            $context["diff"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "difference", [], "any", false, false, false, 244);
            // line 245
            yield "                            ";
            $context["diffClass"] = ((((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 245, $this->source); })()) > 0)) ? ("difference-positive") : (((((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 245, $this->source); })()) < 0)) ? ("difference-negative") : ("difference-zero"))));
            // line 246
            yield "                            <tr>
                                <td>
                                    <div class=\"fw-bold\">";
            // line 248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 248), "name", [], "any", false, false, false, 248), "html", null, true);
            yield "</div>
                                    <small class=\"text-muted\">";
            // line 249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, true, false, 249), "category", [], "any", false, true, false, 249), "name", [], "any", true, true, false, 249)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 249), "category", [], "any", false, false, false, 249), "name", [], "any", false, false, false, 249), "Sans catégorie")) : ("Sans catégorie")), "html", null, true);
            yield "</small>
                                </td>
                                <td><code>";
            // line 251
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 251), "barcode", [], "any", false, false, false, 251), "html", null, true);
            yield "</code></td>
                                <td class=\"text-end\">";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expectedQuantity", [], "any", false, false, false, 252), 0, ",", " "), "html", null, true);
            yield "</td>
                                <td class=\"text-end\">
                                    ";
            // line 254
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "actualQuantity", [], "any", false, false, false, 254) > 0)) {
                // line 255
                yield "                                        <span class=\"fw-bold\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "actualQuantity", [], "any", false, false, false, 255), 0, ",", " "), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 257
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 259
            yield "                                </td>
                                <td class=\"text-end\">
                                    ";
            // line 261
            if (((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 261, $this->source); })()) != 0)) {
                // line 262
                yield "                                        <span class=\"badge ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["diffClass"]) || array_key_exists("diffClass", $context) ? $context["diffClass"] : (function () { throw new RuntimeError('Variable "diffClass" does not exist.', 262, $this->source); })()), "html", null, true);
                yield "\">
                                            ";
                // line 263
                yield ((((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 263, $this->source); })()) > 0)) ? ("+") : (""));
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 263, $this->source); })()), 0, ",", " "), "html", null, true);
                yield "
                                        </span>
                                    ";
            } else {
                // line 266
                yield "                                        <span class=\"badge difference-zero\">0</span>
                                    ";
            }
            // line 268
            yield "                                </td>
                                <td>
                                    ";
            // line 270
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "actualQuantity", [], "any", false, false, false, 270) > 0)) {
                // line 271
                yield "                                        <span class=\"badge bg-success\">Compté</span>
                                    ";
            } else {
                // line 273
                yield "                                        <span class=\"badge bg-warning text-dark\">À compter</span>
                                    ";
            }
            // line 275
            yield "                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 277
        if (!$context['_iterated']) {
            // line 278
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center py-5\">
                                    <i class=\"fas fa-box-open fa-3x text-muted mb-3 opacity-50\"></i>
                                    <p class=\"text-muted mb-0\">Aucun produit dans cet inventaire</p>
                                    <a href=\"";
            // line 282
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_add_products", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 282, $this->source); })()), "id", [], "any", false, false, false, 282)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm mt-2\">
                                        <i class=\"fas fa-plus me-1\"></i> Ajouter des produits
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
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
        return "stock/inventory/show.html.twig";
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
        return array (  557 => 288,  545 => 282,  539 => 278,  537 => 277,  531 => 275,  527 => 273,  523 => 271,  521 => 270,  517 => 268,  513 => 266,  506 => 263,  501 => 262,  499 => 261,  495 => 259,  491 => 257,  485 => 255,  483 => 254,  478 => 252,  474 => 251,  469 => 249,  465 => 248,  461 => 246,  458 => 245,  455 => 244,  450 => 243,  415 => 211,  406 => 205,  397 => 199,  379 => 183,  373 => 180,  369 => 178,  366 => 177,  360 => 174,  353 => 170,  349 => 168,  347 => 167,  342 => 165,  335 => 161,  328 => 157,  303 => 137,  298 => 135,  290 => 130,  272 => 115,  268 => 114,  264 => 113,  247 => 99,  231 => 86,  218 => 75,  212 => 71,  209 => 70,  201 => 66,  199 => 65,  193 => 62,  186 => 58,  178 => 53,  171 => 49,  163 => 44,  154 => 37,  141 => 36,  102 => 7,  89 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/stock/inventory/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Inventaire - {{ inventory.inventoryNumber }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .stat-card {
        border-radius: 0.75rem;
        transition: all 0.2s;
    }
    .difference-positive {
        background-color: #d1fae5;
        color: #065f46;
    }
    .difference-negative {
        background-color: #fee2e2;
        color: #991b1b;
    }
    .difference-zero {
        background-color: #f3f4f6;
        color: #6b7280;
    }
    .status-badge {
        font-size: 0.8rem;
        padding: 0.35rem 0.75rem;
    }
    .progress-custom {
        height: 8px;
        border-radius: 4px;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4 py-3\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_stock_inventory_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-clipboard-list me-1\"></i> Inventaires
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">{{ inventory.inventoryNumber }}</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-clipboard-list text-primary me-2\"></i>
                Inventaire {{ inventory.inventoryNumber }}
            </h1>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"{{ path('app_stock_inventory_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
            {% if inventory.status == 'in_progress' %}
                <a href=\"{{ path('app_stock_inventory_count', {'id': inventory.id}) }}\" class=\"btn btn-primary\">
                    <i class=\"fas fa-clipboard-list me-1\"></i> Continuer la saisie
                </a>
            {% endif %}
            {% if inventory.status == 'completed' %}
                <button type=\"button\" class=\"btn btn-outline-success\" onclick=\"window.print()\">
                    <i class=\"fas fa-print me-1\"></i> Imprimer
                </button>
            {% endif %}
        </div>
    </div>

    <!-- Informations générales -->
    <div class=\"row g-4 mb-4\">
        <div class=\"col-md-6 col-xl-3\">
            <div class=\"card border-0 shadow-sm stat-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <small class=\"text-muted text-uppercase\">N° inventaire</small>
                            <h5 class=\"mb-0\">{{ inventory.inventoryNumber }}</h5>
                        </div>
                        <i class=\"fas fa-hashtag fa-2x text-primary opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-xl-3\">
            <div class=\"card border-0 shadow-sm stat-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <small class=\"text-muted text-uppercase\">Date inventaire</small>
                            <h5 class=\"mb-0\">{{ inventory.inventoryDate|date('d/m/Y') }}</h5>
                        </div>
                        <i class=\"fas fa-calendar-alt fa-2x text-primary opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-xl-3\">
            <div class=\"card border-0 shadow-sm stat-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <small class=\"text-muted text-uppercase\">Statut</small>
                            <h5 class=\"mb-0\">
                                <span class=\"badge {{ inventory.statusBadgeClass }} status-badge\">
                                    <i class=\"fas {{ inventory.statusIcon }} me-1\"></i>
                                    {{ inventory.statusLabel }}
                                </span>
                            </h5>
                        </div>
                        <i class=\"fas fa-info-circle fa-2x text-primary opacity-50\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-xl-3\">
            <div class=\"card border-0 shadow-sm stat-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <small class=\"text-muted text-uppercase\">Progression</small>
                            <h5 class=\"mb-0\">{{ progress }}%</h5>
                        </div>
                        <i class=\"fas fa-chart-line fa-2x text-primary opacity-50\"></i>
                    </div>
                    <div class=\"progress progress-custom mt-2\">
                        <div class=\"progress-bar bg-primary\" style=\"width: {{ progress }}%\"></div>
                    </div>
                    <small class=\"text-muted\">{{ countedItems }}/{{ totalItems }} produits comptés</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Détails supplémentaires -->
    <div class=\"row g-4 mb-4\">
        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-user me-2 text-primary\"></i>
                        Informations
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-2\">
                            <small class=\"text-muted\">Créé par</small>
                            <div class=\"fw-bold\">{{ inventory.createdBy.fullName ?: inventory.createdBy.email }}</div>
                        </div>
                        <div class=\"col-md-6 mb-2\">
                            <small class=\"text-muted\">Créé le</small>
                            <div class=\"fw-bold\">{{ inventory.createdAt|date('d/m/Y H:i') }}</div>
                        </div>
                        <div class=\"col-md-6 mb-2\">
                            <small class=\"text-muted\">Emplacement</small>
                            <div class=\"fw-bold\">{{ inventory.location ? inventory.location.displayName : 'Tous les emplacements' }}</div>
                        </div>
                        {% if inventory.validatedBy %}
                        <div class=\"col-md-6 mb-2\">
                            <small class=\"text-muted\">Validé par</small>
                            <div class=\"fw-bold text-success\">{{ inventory.validatedBy.fullName ?: inventory.validatedBy.email }}</div>
                        </div>
                        <div class=\"col-md-6 mb-2\">
                            <small class=\"text-muted\">Validé le</small>
                            <div class=\"fw-bold text-success\">{{ inventory.validatedAt|date('d/m/Y H:i') }}</div>
                        </div>
                        {% endif %}
                        {% if inventory.notes %}
                        <div class=\"col-12 mt-2\">
                            <small class=\"text-muted\">Notes</small>
                            <div class=\"fw-bold\">{{ inventory.notes }}</div>
                        </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-chart-pie me-2 text-primary\"></i>
                        Résumé
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row text-center\">
                        <div class=\"col-4\">
                            <div class=\"p-3 bg-light rounded\">
                                <h3 class=\"mb-0 text-primary\">{{ totalItems }}</h3>
                                <small class=\"text-muted\">Produits</small>
                            </div>
                        </div>
                        <div class=\"col-4\">
                            <div class=\"p-3 bg-light rounded\">
                                <h3 class=\"mb-0 text-warning\">{{ differences|length }}</h3>
                                <small class=\"text-muted\">Écarts</small>
                            </div>
                        </div>
                        <div class=\"col-4\">
                            <div class=\"p-3 bg-light rounded\">
                                <h3 class=\"mb-0 text-success\">{{ countedItems }}</h3>
                                <small class=\"text-muted\">Comptés</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des produits -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Produits inventoriés
            </h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th>Produit</th>
                            <th>Code-barres</th>
                            <th class=\"text-end\">Stock attendu</th>
                            <th class=\"text-end\">Stock compté</th>
                            <th class=\"text-end\">Écart</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in items %}
                            {% set diff = item.difference %}
                            {% set diffClass = diff > 0 ? 'difference-positive' : (diff < 0 ? 'difference-negative' : 'difference-zero') %}
                            <tr>
                                <td>
                                    <div class=\"fw-bold\">{{ item.product.name }}</div>
                                    <small class=\"text-muted\">{{ item.product.category.name|default('Sans catégorie') }}</small>
                                </td>
                                <td><code>{{ item.product.barcode }}</code></td>
                                <td class=\"text-end\">{{ item.expectedQuantity|number_format(0, ',', ' ') }}</td>
                                <td class=\"text-end\">
                                    {% if item.actualQuantity > 0 %}
                                        <span class=\"fw-bold\">{{ item.actualQuantity|number_format(0, ',', ' ') }}</span>
                                    {% else %}
                                        <span class=\"text-muted\">—</span>
                                    {% endif %}
                                </td>
                                <td class=\"text-end\">
                                    {% if diff != 0 %}
                                        <span class=\"badge {{ diffClass }}\">
                                            {{ diff > 0 ? '+' : '' }}{{ diff|number_format(0, ',', ' ') }}
                                        </span>
                                    {% else %}
                                        <span class=\"badge difference-zero\">0</span>
                                    {% endif %}
                                </td>
                                <td>
                                    {% if item.actualQuantity > 0 %}
                                        <span class=\"badge bg-success\">Compté</span>
                                    {% else %}
                                        <span class=\"badge bg-warning text-dark\">À compter</span>
                                    {% endif %}
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"6\" class=\"text-center py-5\">
                                    <i class=\"fas fa-box-open fa-3x text-muted mb-3 opacity-50\"></i>
                                    <p class=\"text-muted mb-0\">Aucun produit dans cet inventaire</p>
                                    <a href=\"{{ path('app_stock_inventory_add_products', {'id': inventory.id}) }}\" class=\"btn btn-primary btn-sm mt-2\">
                                        <i class=\"fas fa-plus me-1\"></i> Ajouter des produits
                                    </a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "stock/inventory/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\inventory\\show.html.twig");
    }
}
