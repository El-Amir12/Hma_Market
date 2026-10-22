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

/* admin/stock_movement/show.html.twig */
class __TwigTemplate_07318256dc850866658da5c6fafc35e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_movement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_movement/show.html.twig"));

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

        yield "Détail mouvement - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 4, $this->source); })()), "movementTypeLabel", [], "any", false, false, false, 4), "html", null, true);
        
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
    :root {
        --primary: #0463f1;
        --success: #10b981;
        --warning: #f59e0b;
        --danger: #ef4444;
        --info: #0ea5e9;
        --gray-50: #f9fafb;
        --gray-100: #f3f4f6;
        --gray-200: #e5e7eb;
        --gray-600: #4b5563;
        --gray-700: #374151;
    }

    .stat-card {
        transition: transform 0.2s, box-shadow 0.2s;
        border-radius: 1rem;
        background: white;
        border: none;
    }
    .stat-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .info-row {
        border-bottom: 1px solid var(--gray-200);
        padding: 0.75rem 0;
    }
    .info-row:last-child {
        border-bottom: none;
    }
    .info-label {
        font-size: 0.7rem;
        text-transform: uppercase;
        font-weight: 600;
        color: var(--gray-600);
        letter-spacing: 0.5px;
    }
    .info-value {
        font-size: 1rem;
        font-weight: 500;
        color: var(--gray-700);
    }
    .badge-custom {
        padding: 0.35rem 0.75rem;
        border-radius: 2rem;
        font-weight: 500;
    }
    .card-header-custom {
        background: white;
        border-bottom: 2px solid var(--gray-100);
        padding: 1rem 1.25rem;
    }
    .card-header-custom h5 {
        font-weight: 600;
        font-size: 1rem;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .card-header-custom h5 i {
        color: var(--primary);
    }
    .link-card {
        text-decoration: none;
        transition: all 0.2s;
    }
    .link-card:hover {
        transform: translateY(-3px);
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 82
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

        // line 83
        yield "<div class=\"container-fluid px-4 py-3\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-exchange-alt me-1\"></i> Mouvements de stock
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 99, $this->source); })()), "movementTypeLabel", [], "any", false, false, false, 99), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-exchange-alt me-2 text-primary\"></i>
                Détail du mouvement
            </h1>
        </div>
        <div>
            <a href=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_index", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "request", [], "any", false, false, false, 108), "query", [], "any", false, false, false, 108), "all", [], "any", false, false, false, 108)), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour à la liste
            </a>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Colonne gauche -->
        <div class=\"col-xl-6\">
            <!-- Carte Informations générales -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header-custom\">
                    <h5>
                        <i class=\"fas fa-info-circle\"></i>
                        Informations générales
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-6\">
                            <div class=\"info-row\">
                                <div class=\"info-label\">Date</div>
                                <div class=\"info-value\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 130, $this->source); })()), "createdAt", [], "any", false, false, false, 130), "d/m/Y H:i:s"), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-row\">
                                <div class=\"info-label\">Type de mouvement</div>
                                <div class=\"info-value\">
                                    <span class=\"badge ";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 137, $this->source); })()), "movementTypeBadgeClass", [], "any", false, false, false, 137), "html", null, true);
        yield " badge-custom\">
                                        <i class=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 138, $this->source); })()), "movementTypeIcon", [], "any", false, false, false, 138), "html", null, true);
        yield " me-1\"></i>
                                        ";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 139, $this->source); })()), "movementTypeLabel", [], "any", false, false, false, 139), "html", null, true);
        yield "
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-row\">
                                <div class=\"info-label\">Quantité</div>
                                <div class=\"info-value ";
        // line 147
        yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 147, $this->source); })()), "movementType", [], "any", false, false, false, 147), ["purchase_in", "return_in"])) ? ("text-success") : ("text-danger"));
        yield "\">
                                    ";
        // line 148
        yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 148, $this->source); })()), "movementType", [], "any", false, false, false, 148), ["purchase_in", "return_in"])) ? ("+") : ("-"));
        yield "
                                    ";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 149, $this->source); })()), "quantity", [], "any", false, false, false, 149), 0, ",", " "), "html", null, true);
        yield " unité(s)
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-row\">
                                <div class=\"info-label\">Prix unitaire</div>
                                <div class=\"info-value\">";
        // line 156
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 156, $this->source); })()), "unitPrice", [], "any", false, false, false, 156)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 156, $this->source); })()), "unitPrice", [], "any", false, false, false, 156), CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 156, $this->source); })()), "hmaService", [], "any", false, false, false, 156)), "html", null, true)) : ("—"));
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-row\">
                                <div class=\"info-label\">Valeur totale</div>
                                <div class=\"info-value\">";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 162, $this->source); })()), "quantity", [], "any", false, false, false, 162) * ((CoreExtension::getAttribute($this->env, $this->source, ($context["movement"] ?? null), "unitPrice", [], "any", true, true, false, 162)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 162, $this->source); })()), "unitPrice", [], "any", false, false, false, 162), 0)) : (0))), CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 162, $this->source); })()), "hmaService", [], "any", false, false, false, 162)), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"info-row\">
                                <div class=\"info-label\">Notes</div>
                                <div class=\"info-value\">";
        // line 168
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 168, $this->source); })()), "notes", [], "any", false, false, false, 168)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 168, $this->source); })()), "notes", [], "any", false, false, false, 168), "html", null, true)) : ("—"));
        yield "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte Utilisateur -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header-custom\">
                    <h5>
                        <i class=\"fas fa-user\"></i>
                        Utilisateur
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 184
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 184, $this->source); })()), "user", [], "any", false, false, false, 184)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 185
            yield "                        <div class=\"d-flex align-items-center gap-3\">
                            ";
            // line 186
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 186, $this->source); })()), "user", [], "any", false, false, false, 186), "photo", [], "any", false, false, false, 186)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 187
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 187, $this->source); })()), "user", [], "any", false, false, false, 187), "photo", [], "any", false, false, false, 187))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 187, $this->source); })()), "user", [], "any", false, false, false, 187), "fullName", [], "any", false, false, false, 187), "html", null, true);
                yield "\" class=\"rounded-circle\" style=\"width: 60px; height: 60px; object-fit: cover;\">
                            ";
            } else {
                // line 189
                yield "                                <div class=\"rounded-circle bg-light d-flex align-items-center justify-content-center\" style=\"width: 60px; height: 60px;\">
                                    <i class=\"fas fa-user fa-2x text-muted\"></i>
                                </div>
                            ";
            }
            // line 193
            yield "                            <div>
                                <h5 class=\"mb-1\">";
            // line 194
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 194, $this->source); })()), "user", [], "any", false, false, false, 194), "fullName", [], "any", false, false, false, 194)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 194, $this->source); })()), "user", [], "any", false, false, false, 194), "fullName", [], "any", false, false, false, 194), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 194, $this->source); })()), "user", [], "any", false, false, false, 194), "email", [], "any", false, false, false, 194), "html", null, true)));
            yield "</h5>
                                <div class=\"text-muted small\">
                                    <i class=\"fas fa-envelope me-1\"></i> ";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 196, $this->source); })()), "user", [], "any", false, false, false, 196), "email", [], "any", false, false, false, 196), "html", null, true);
            yield "
                                    ";
            // line 197
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 197, $this->source); })()), "user", [], "any", false, false, false, 197), "phone", [], "any", false, false, false, 197)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 198
                yield "                                        <span class=\"mx-2\">•</span>
                                        <i class=\"fas fa-phone me-1\"></i> ";
                // line 199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 199, $this->source); })()), "user", [], "any", false, false, false, 199), "phone", [], "any", false, false, false, 199), "html", null, true);
                yield "
                                    ";
            }
            // line 201
            yield "                                </div>
                                <span class=\"badge ";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 202, $this->source); })()), "user", [], "any", false, false, false, 202), "roleBadgeClass", [], "any", false, false, false, 202), "html", null, true);
            yield " mt-1\">
                                    <i class=\"";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 203, $this->source); })()), "user", [], "any", false, false, false, 203), "roleIcon", [], "any", false, false, false, 203), "html", null, true);
            yield " me-1\"></i>
                                    ";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 204, $this->source); })()), "user", [], "any", false, false, false, 204), "roleLabel", [], "any", false, false, false, 204), "html", null, true);
            yield "
                                </span>
                            </div>
                        </div>
                    ";
        } else {
            // line 209
            yield "                        <div class=\"text-center py-3 text-muted\">
                            <i class=\"fas fa-robot fa-2x mb-2\"></i>
                            <p class=\"mb-0\">Mouvement automatique (système)</p>
                        </div>
                    ";
        }
        // line 214
        yield "                </div>
            </div>
        </div>

        <!-- Colonne droite -->
        <div class=\"col-xl-6\">
            <!-- Carte Lot & Produit -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header-custom\">
                    <h5>
                        <i class=\"fas fa-boxes\"></i>
                        Lot & Produit
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 229
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 229, $this->source); })()), "stockBatch", [], "any", false, false, false, 229)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 230
            yield "                        <div class=\"row\">
                            <div class=\"col-6\">
                                <div class=\"info-row\">
                                    <div class=\"info-label\">N° lot</div>
                                    <div class=\"info-value\"><code>";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 234, $this->source); })()), "stockBatch", [], "any", false, false, false, 234), "batchNumber", [], "any", false, false, false, 234), "html", null, true);
            yield "</code></div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"info-row\">
                                    <div class=\"info-label\">Produit</div>
                                    <div class=\"info-value\">";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 240, $this->source); })()), "stockBatch", [], "any", false, false, false, 240), "product", [], "any", false, false, false, 240), "name", [], "any", false, false, false, 240), "html", null, true);
            yield "</div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"info-row\">
                                    <div class=\"info-label\">Code-barres</div>
                                    <div class=\"info-value\">";
            // line 246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 246, $this->source); })()), "stockBatch", [], "any", false, false, false, 246), "product", [], "any", false, false, false, 246), "barcode", [], "any", false, false, false, 246), "html", null, true);
            yield "</div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"info-row\">
                                    <div class=\"info-label\">Catégorie</div>
                                    <div class=\"info-value\">";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["movement"] ?? null), "stockBatch", [], "any", false, true, false, 252), "product", [], "any", false, true, false, 252), "category", [], "any", false, true, false, 252), "name", [], "any", true, true, false, 252)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 252, $this->source); })()), "stockBatch", [], "any", false, false, false, 252), "product", [], "any", false, false, false, 252), "category", [], "any", false, false, false, 252), "name", [], "any", false, false, false, 252), "—")) : ("—")), "html", null, true);
            yield "</div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"info-row\">
                                    <div class=\"info-label\">Prix unitaire du lot</div>
                                    <div class=\"info-value\">";
            // line 258
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 258, $this->source); })()), "stockBatch", [], "any", false, false, false, 258), "unitPrice", [], "any", false, false, false, 258), CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 258, $this->source); })()), "hmaService", [], "any", false, false, false, 258)), "html", null, true);
            yield "</div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"info-row\">
                                    <div class=\"info-label\">Stock actuel</div>
                                    <div class=\"info-value\">";
            // line 264
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 264, $this->source); })()), "stockBatch", [], "any", false, false, false, 264), "currentQuantity", [], "any", false, false, false, 264), 0, ",", " "), "html", null, true);
            yield " unités</div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"info-row\">
                                    <div class=\"info-label\">Emplacement</div>
                                    <div class=\"info-value\">";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 270, $this->source); })()), "stockBatch", [], "any", false, false, false, 270), "locationDisplay", [], "any", false, false, false, 270), "html", null, true);
            yield "</div>
                                </div>
                            </div>
                            ";
            // line 273
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 273, $this->source); })()), "stockBatch", [], "any", false, false, false, 273), "expiryDate", [], "any", false, false, false, 273)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 274
                yield "                            <div class=\"col-6\">
                                <div class=\"info-row\">
                                    <div class=\"info-label\">Date d'expiration</div>
                                    <div class=\"info-value\">";
                // line 277
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 277, $this->source); })()), "stockBatch", [], "any", false, false, false, 277), "expiryDate", [], "any", false, false, false, 277), "d/m/Y"), "html", null, true);
                yield "</div>
                                </div>
                            </div>
                            ";
            }
            // line 281
            yield "                        </div>
                    ";
        } else {
            // line 283
            yield "                        <div class=\"text-center py-3 text-muted\">
                            <i class=\"fas fa-box-open fa-2x mb-2\"></i>
                            <p class=\"mb-0\">Aucun lot associé à ce mouvement</p>
                        </div>
                    ";
        }
        // line 288
        yield "                </div>
            </div>

            <!-- Carte Élément associé -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header-custom\">
                    <h5>
                        <i class=\"fas fa-link\"></i>
                        Élément associé
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 300
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 300, $this->source); })()), "referenceId", [], "any", false, false, false, 300)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 301
            yield "                        ";
            // line 302
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 302, $this->source); })()), "movementType", [], "any", false, false, false, 302) == "sale_out")) {
                // line 303
                yield "                            <div class=\"text-center\">
                                <div class=\"mb-3\">
                                    <div class=\"rounded-circle bg-primary bg-opacity-10 d-inline-flex p-3\">
                                        <i class=\"fas fa-shopping-cart fa-3x text-primary\"></i>
                                    </div>
                                </div>
                                <h5 class=\"fw-bold\">Vente associée</h5>
                                <div class=\"bg-light rounded-3 p-3 mt-3 text-start\">
                                    <div class=\"row small\">
                                        <div class=\"col-6 text-muted\">Date de la vente</div>
                                        <div class=\"col-6 text-end fw-semibold\">";
                // line 313
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 313, $this->source); })()), "createdAt", [], "any", false, false, false, 313), "d/m/Y H:i"), "html", null, true);
                yield "</div>
                                        <div class=\"col-6 text-muted mt-2\">Quantité vendue</div>
                                        <div class=\"col-6 text-end fw-semibold\">";
                // line 315
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 315, $this->source); })()), "quantity", [], "any", false, false, false, 315), 0, ",", " "), "html", null, true);
                yield " unités</div>
                                        <div class=\"col-6 text-muted mt-2\">Montant total</div>
                                        <div class=\"col-6 text-end fw-semibold\">";
                // line 317
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 317, $this->source); })()), "quantity", [], "any", false, false, false, 317) * ((CoreExtension::getAttribute($this->env, $this->source, ($context["movement"] ?? null), "unitPrice", [], "any", true, true, false, 317)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 317, $this->source); })()), "unitPrice", [], "any", false, false, false, 317), 0)) : (0))), CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 317, $this->source); })()), "hmaService", [], "any", false, false, false, 317)), "html", null, true);
                yield "</div>
                                    </div>
                                </div>
                                <a href=\"";
                // line 320
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 320, $this->source); })()), "referenceId", [], "any", false, false, false, 320)]), "html", null, true);
                yield "\" class=\"btn btn-primary mt-3\">
                                    <i class=\"fas fa-eye me-1\"></i> Voir le détail de la vente
                                </a>
                            </div>

                        ";
                // line 326
                yield "                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 326, $this->source); })()), "movementType", [], "any", false, false, false, 326) == "purchase_in")) {
                // line 327
                yield "                            <div class=\"text-center\">
                                <div class=\"mb-3\">
                                    <div class=\"rounded-circle bg-success bg-opacity-10 d-inline-flex p-3\">
                                        <i class=\"fas fa-truck fa-3x text-success\"></i>
                                    </div>
                                </div>
                                <h5 class=\"fw-bold\">Achat associé</h5>
                                <div class=\"bg-light rounded-3 p-3 mt-3 text-start\">
                                    <div class=\"row small\">
                                        <div class=\"col-6 text-muted\">N° commande</div>
                                        <div class=\"col-6 text-end fw-semibold\">
                                            ";
                // line 338
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 338, $this->source); })()), "purchaseItem", [], "any", false, false, false, 338)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 339
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 339, $this->source); })()), "purchaseItem", [], "any", false, false, false, 339), "purchase", [], "any", false, false, false, 339), "purchaseNumber", [], "any", false, false, false, 339), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 341
                    yield "                                                Référence #";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 341, $this->source); })()), "referenceId", [], "any", false, false, false, 341), "html", null, true);
                    yield "
                                            ";
                }
                // line 343
                yield "                                        </div>
                                        <div class=\"col-6 text-muted mt-2\">Fournisseur</div>
                                        <div class=\"col-6 text-end fw-semibold\">
                                            ";
                // line 346
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 346, $this->source); })()), "purchaseItem", [], "any", false, false, false, 346)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 347
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 347, $this->source); })()), "purchaseItem", [], "any", false, false, false, 347), "purchase", [], "any", false, false, false, 347), "supplier", [], "any", false, false, false, 347), "name", [], "any", false, false, false, 347), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 349
                    yield "                                                —
                                            ";
                }
                // line 351
                yield "                                        </div>
                                        <div class=\"col-6 text-muted mt-2\">Quantité achetée</div>
                                        <div class=\"col-6 text-end fw-semibold\">";
                // line 353
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 353, $this->source); })()), "quantity", [], "any", false, false, false, 353), 0, ",", " "), "html", null, true);
                yield " unités</div>
                                    </div>
                                </div>
                                <a href=\"";
                // line 356
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 356, $this->source); })()), "referenceId", [], "any", false, false, false, 356)]), "html", null, true);
                yield "\" class=\"btn btn-success mt-3\">
                                    <i class=\"fas fa-eye me-1\"></i> Voir le détail de l'achat
                                </a>
                            </div>

                        ";
                // line 362
                yield "                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 362, $this->source); })()), "movementType", [], "any", false, false, false, 362) == "return_in")) {
                // line 363
                yield "                            <div class=\"text-center\">
                                <div class=\"mb-3\">
                                    <div class=\"rounded-circle bg-info bg-opacity-10 d-inline-flex p-3\">
                                        <i class=\"fas fa-undo-alt fa-3x text-info\"></i>
                                    </div>
                                </div>
                                <h5 class=\"fw-bold\">Retour client associé</h5>
                                <div class=\"bg-light rounded-3 p-3 mt-3 text-start\">
                                    <div class=\"row small\">
                                        <div class=\"col-6 text-muted\">N° retour</div>
                                        <div class=\"col-6 text-end fw-semibold\">#";
                // line 373
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 373, $this->source); })()), "referenceId", [], "any", false, false, false, 373), "html", null, true);
                yield "</div>
                                        <div class=\"col-6 text-muted mt-2\">Quantité retournée</div>
                                        <div class=\"col-6 text-end fw-semibold\">";
                // line 375
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 375, $this->source); })()), "quantity", [], "any", false, false, false, 375), 0, ",", " "), "html", null, true);
                yield " unités</div>
                                        <div class=\"col-6 text-muted mt-2\">Date du retour</div>
                                        <div class=\"col-6 text-end fw-semibold\">";
                // line 377
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 377, $this->source); })()), "createdAt", [], "any", false, false, false, 377), "d/m/Y"), "html", null, true);
                yield "</div>
                                    </div>
                                </div>
                                <a href=\"";
                // line 380
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 380, $this->source); })()), "referenceId", [], "any", false, false, false, 380)]), "html", null, true);
                yield "\" class=\"btn btn-info mt-3\">
                                    <i class=\"fas fa-eye me-1\"></i> Voir le détail du retour
                                </a>
                            </div>

                        ";
                // line 386
                yield "                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 386, $this->source); })()), "movementType", [], "any", false, false, false, 386) == "return_out")) {
                // line 387
                yield "                            <div class=\"text-center\">
                                <div class=\"mb-3\">
                                    <div class=\"rounded-circle bg-warning bg-opacity-10 d-inline-flex p-3\">
                                        <i class=\"fas fa-truck-loading fa-3x text-warning\"></i>
                                    </div>
                                </div>
                                <h5 class=\"fw-bold\">Retour fournisseur associé</h5>
                                <div class=\"bg-light rounded-3 p-3 mt-3 text-start\">
                                    <div class=\"row small\">
                                        <div class=\"col-6 text-muted\">N° avoir</div>
                                        <div class=\"col-6 text-end fw-semibold\">#";
                // line 397
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 397, $this->source); })()), "referenceId", [], "any", false, false, false, 397), "html", null, true);
                yield "</div>
                                        <div class=\"col-6 text-muted mt-2\">Quantité retournée</div>
                                        <div class=\"col-6 text-end fw-semibold\">";
                // line 399
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 399, $this->source); })()), "quantity", [], "any", false, false, false, 399), 0, ",", " "), "html", null, true);
                yield " unités</div>
                                        <div class=\"col-6 text-muted mt-2\">Date</div>
                                        <div class=\"col-6 text-end fw-semibold\">";
                // line 401
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 401, $this->source); })()), "createdAt", [], "any", false, false, false, 401), "d/m/Y"), "html", null, true);
                yield "</div>
                                    </div>
                                </div>
                                <a href=\"";
                // line 404
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 404, $this->source); })()), "referenceId", [], "any", false, false, false, 404)]), "html", null, true);
                yield "\" class=\"btn btn-warning mt-3\">
                                    <i class=\"fas fa-eye me-1\"></i> Voir le détail
                                </a>
                            </div>

                        ";
                // line 410
                yield "                        ";
            } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 410, $this->source); })()), "movementType", [], "any", false, false, false, 410), ["adjustment_in", "adjustment_out"])) {
                // line 411
                yield "                            <div class=\"text-center\">
                                <div class=\"mb-3\">
                                    <div class=\"rounded-circle bg-";
                // line 413
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 413, $this->source); })()), "movementType", [], "any", false, false, false, 413) == "adjustment_in")) ? ("success") : ("danger"));
                yield " bg-opacity-10 d-inline-flex p-3\">
                                        <i class=\"fas ";
                // line 414
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 414, $this->source); })()), "movementType", [], "any", false, false, false, 414) == "adjustment_in")) ? ("fa-plus-circle") : ("fa-minus-circle"));
                yield " fa-3x text-";
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 414, $this->source); })()), "movementType", [], "any", false, false, false, 414) == "adjustment_in")) ? ("success") : ("danger"));
                yield "\"></i>
                                    </div>
                                </div>
                                <h5 class=\"fw-bold\">Ajustement de stock ";
                // line 417
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 417, $this->source); })()), "movementType", [], "any", false, false, false, 417) == "adjustment_in")) ? ("(+)") : ("(-)"));
                yield "</h5>
                                <div class=\"bg-light rounded-3 p-3 mt-3 text-start\">
                                    <div class=\"row small\">
                                        <div class=\"col-6 text-muted\">Raison</div>
                                        <div class=\"col-6 text-end fw-semibold\">";
                // line 421
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, ($context["movement"] ?? null), "notes", [], "any", true, true, false, 421)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 421, $this->source); })()), "notes", [], "any", false, false, false, 421), "Ajustement manuel")) : ("Ajustement manuel"))), "truncate", [40], "method", false, false, false, 421), "html", null, true);
                yield "</div>
                                        <div class=\"col-6 text-muted mt-2\">Quantité</div>
                                        <div class=\"col-6 text-end fw-semibold\">";
                // line 423
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 423, $this->source); })()), "quantity", [], "any", false, false, false, 423), 0, ",", " "), "html", null, true);
                yield " unités</div>
                                        <div class=\"col-6 text-muted mt-2\">Date</div>
                                        <div class=\"col-6 text-end fw-semibold\">";
                // line 425
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 425, $this->source); })()), "createdAt", [], "any", false, false, false, 425), "d/m/Y H:i"), "html", null, true);
                yield "</div>
                                    </div>
                                </div>
                                <div class=\"alert alert-";
                // line 428
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 428, $this->source); })()), "movementType", [], "any", false, false, false, 428) == "adjustment_in")) ? ("success") : ("danger"));
                yield " mt-3\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Ajustement manuel - aucune vente ou achat associé.
                                </div>
                            </div>

                        ";
                // line 435
                yield "                        ";
            } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 435, $this->source); })()), "movementType", [], "any", false, false, false, 435), ["transfer_in", "transfer_out"])) {
                // line 436
                yield "                            <div class=\"text-center\">
                                <div class=\"mb-3\">
                                    <div class=\"rounded-circle bg-primary bg-opacity-10 d-inline-flex p-3\">
                                        <i class=\"fas fa-arrow-";
                // line 439
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 439, $this->source); })()), "movementType", [], "any", false, false, false, 439) == "transfer_in")) ? ("right") : ("left"));
                yield " fa-3x text-primary\"></i>
                                    </div>
                                </div>
                                <h5 class=\"fw-bold\">Transfert ";
                // line 442
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 442, $this->source); })()), "movementType", [], "any", false, false, false, 442) == "transfer_in")) ? ("entrant") : ("sortant"));
                yield "</h5>
                                <div class=\"bg-light rounded-3 p-3 mt-3 text-start\">
                                    <div class=\"row small\">
                                        <div class=\"col-6 text-muted\">Référence</div>
                                        <div class=\"col-6 text-end fw-semibold\">";
                // line 446
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, ($context["movement"] ?? null), "notes", [], "any", true, true, false, 446)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 446, $this->source); })()), "notes", [], "any", false, false, false, 446), "Transfert")) : ("Transfert"))), "truncate", [30], "method", false, false, false, 446), "html", null, true);
                yield "</div>
                                        <div class=\"col-6 text-muted mt-2\">Quantité</div>
                                        <div class=\"col-6 text-end fw-semibold\">";
                // line 448
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 448, $this->source); })()), "quantity", [], "any", false, false, false, 448), 0, ",", " "), "html", null, true);
                yield " unités</div>
                                        <div class=\"col-6 text-muted mt-2\">Date</div>
                                        <div class=\"col-6 text-end fw-semibold\">";
                // line 450
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 450, $this->source); })()), "createdAt", [], "any", false, false, false, 450), "d/m/Y"), "html", null, true);
                yield "</div>
                                    </div>
                                </div>
                                <div class=\"alert alert-info mt-3\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Transfert ";
                // line 455
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 455, $this->source); })()), "movementType", [], "any", false, false, false, 455) == "transfer_in")) ? ("depuis") : ("vers"));
                yield " un autre magasin.
                                </div>
                            </div>

                        ";
            } else {
                // line 460
                yield "                            <div class=\"text-center py-3 text-muted\">
                                <i class=\"fas fa-question-circle fa-2x mb-2\"></i>
                                <p class=\"mb-0\">Type de mouvement : ";
                // line 462
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 462, $this->source); })()), "movementType", [], "any", false, false, false, 462), "html", null, true);
                yield "</p>
                            </div>
                        ";
            }
            // line 465
            yield "                    ";
        } else {
            // line 466
            yield "                        <div class=\"text-center py-3 text-muted\">
                            <i class=\"fas fa-link fa-2x mb-2 opacity-50\"></i>
                            <p class=\"mb-0\">Aucun élément associé</p>
                            <small>Ce mouvement n'est lié à aucune vente, achat ou retour.</small>
                        </div>
                    ";
        }
        // line 472
        yield "                </div>
            </div>
        </div>
    </div>

    <!-- Historique des mouvements du lot (pleine largeur) -->
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header-custom\">
                    <h5>
                        <i class=\"fas fa-history\"></i>
                        Historique des mouvements du lot
                    </h5>
                </div>
                <div class=\"card-body p-0\">
                    ";
        // line 488
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 488, $this->source); })()), "stockBatch", [], "any", false, false, false, 488) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 488, $this->source); })()), "stockBatch", [], "any", false, false, false, 488), "stockMovements", [], "any", false, false, false, 488)) > 0))) {
            // line 489
            yield "                        <div class=\"table-responsive\">
                            <table class=\"table table-hover align-middle mb-0\">
                                <thead class=\"table-light\">
                                    <tr>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Quantité</th>
                                        <th>Référence</th>
                                        <th>Stock restant</th>
                                        <th>Utilisateur</th>
                                        <th class=\"text-center\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 503
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 503, $this->source); })()), "stockBatch", [], "any", false, false, false, 503), "stockMovements", [], "any", false, false, false, 503), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 503, $this->source); })()), "createdAt", [], "any", false, false, false, 503) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 503, $this->source); })()), "createdAt", [], "any", false, false, false, 503)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["otherMovement"]) {
                // line 504
                yield "                                        <tr>
                                            <td>
                                                <div class=\"fw-semibold\">";
                // line 506
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "createdAt", [], "any", false, false, false, 506), "d/m/Y"), "html", null, true);
                yield "</div>
                                                <small class=\"text-muted\">";
                // line 507
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "createdAt", [], "any", false, false, false, 507), "H:i:s"), "html", null, true);
                yield "</small>
                                            </td>
                                            <td>
                                                <span class=\"badge ";
                // line 510
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "movementTypeBadgeClass", [], "any", false, false, false, 510), "html", null, true);
                yield " badge-custom\">
                                                    <i class=\"";
                // line 511
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "movementTypeIcon", [], "any", false, false, false, 511), "html", null, true);
                yield " me-1\"></i>
                                                    ";
                // line 512
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "movementTypeLabel", [], "any", false, false, false, 512), "html", null, true);
                yield "
                                                </span>
                                            </td>
                                            <td class=\"";
                // line 515
                yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "movementType", [], "any", false, false, false, 515), ["purchase_in", "return_in"])) ? ("text-success") : ("text-danger"));
                yield "\">
                                                ";
                // line 516
                yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "movementType", [], "any", false, false, false, 516), ["purchase_in", "return_in"])) ? ("+") : ("-"));
                yield "
                                                ";
                // line 517
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "quantity", [], "any", false, false, false, 517), 0, ",", " "), "html", null, true);
                yield "
                                            </div>
                                            <td>
                                                ";
                // line 520
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "movementType", [], "any", false, false, false, 520) == "purchase_in") && CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "purchaseItem", [], "any", false, false, false, 520))) {
                    // line 521
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "purchaseItem", [], "any", false, false, false, 521), "purchase", [], "any", false, false, false, 521), "purchaseNumber", [], "any", false, false, false, 521), "html", null, true);
                    yield "
                                                ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 522
$context["otherMovement"], "referenceId", [], "any", false, false, false, 522)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 523
                    yield "                                                    <span class=\"text-muted\">Réf #";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "referenceId", [], "any", false, false, false, 523), "html", null, true);
                    yield "</span>
                                                ";
                } else {
                    // line 525
                    yield "                                                    <span class=\"text-muted\">—</span>
                                                ";
                }
                // line 527
                yield "                                            </div>
                                            <td>
                                                <strong>";
                // line 529
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "stockBatch", [], "any", false, false, false, 529), "currentQuantity", [], "any", false, false, false, 529), 0, ",", " "), "html", null, true);
                yield "</strong>
                                            </div>
                                            <td>";
                // line 531
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "user", [], "any", false, false, false, 531)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "user", [], "any", false, false, false, 531), "fullName", [], "any", false, false, false, 531)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "user", [], "any", false, false, false, 531), "fullName", [], "any", false, false, false, 531), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "user", [], "any", false, false, false, 531), "email", [], "any", false, false, false, 531), "html", null, true)))) : ("Système"));
                yield "</div>
                                            <td class=\"text-center\">
                                                ";
                // line 533
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "id", [], "any", false, false, false, 533) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 533, $this->source); })()), "id", [], "any", false, false, false, 533))) {
                    // line 534
                    yield "                                                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "id", [], "any", false, false, false, 534)]), "html", null, true);
                    yield "\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir le détail\">
                                                        <i class=\"fas fa-eye\"></i>
                                                    </a>
                                                ";
                } else {
                    // line 538
                    yield "                                                    <span class=\"badge bg-secondary\">Actuel</span>
                                                ";
                }
                // line 540
                yield "                                            </div>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['otherMovement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 543
            yield "                                </tbody>
                            </table>
                        </div>
                    ";
        } else {
            // line 547
            yield "                        <div class=\"text-center py-4 text-muted\">
                            <i class=\"fas fa-history fa-2x mb-2 opacity-50\"></i>
                            <p class=\"mb-0\">Aucun autre mouvement pour ce lot</p>
                        </div>
                    ";
        }
        // line 552
        yield "                </div>
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
        return "admin/stock_movement/show.html.twig";
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
        return array (  993 => 552,  986 => 547,  980 => 543,  972 => 540,  968 => 538,  960 => 534,  958 => 533,  953 => 531,  948 => 529,  944 => 527,  940 => 525,  934 => 523,  932 => 522,  927 => 521,  925 => 520,  919 => 517,  915 => 516,  911 => 515,  905 => 512,  901 => 511,  897 => 510,  891 => 507,  887 => 506,  883 => 504,  879 => 503,  863 => 489,  861 => 488,  843 => 472,  835 => 466,  832 => 465,  826 => 462,  822 => 460,  814 => 455,  806 => 450,  801 => 448,  796 => 446,  789 => 442,  783 => 439,  778 => 436,  775 => 435,  766 => 428,  760 => 425,  755 => 423,  750 => 421,  743 => 417,  735 => 414,  731 => 413,  727 => 411,  724 => 410,  716 => 404,  710 => 401,  705 => 399,  700 => 397,  688 => 387,  685 => 386,  677 => 380,  671 => 377,  666 => 375,  661 => 373,  649 => 363,  646 => 362,  638 => 356,  632 => 353,  628 => 351,  624 => 349,  618 => 347,  616 => 346,  611 => 343,  605 => 341,  599 => 339,  597 => 338,  584 => 327,  581 => 326,  573 => 320,  567 => 317,  562 => 315,  557 => 313,  545 => 303,  542 => 302,  540 => 301,  538 => 300,  524 => 288,  517 => 283,  513 => 281,  506 => 277,  501 => 274,  499 => 273,  493 => 270,  484 => 264,  475 => 258,  466 => 252,  457 => 246,  448 => 240,  439 => 234,  433 => 230,  431 => 229,  414 => 214,  407 => 209,  399 => 204,  395 => 203,  391 => 202,  388 => 201,  383 => 199,  380 => 198,  378 => 197,  374 => 196,  369 => 194,  366 => 193,  360 => 189,  352 => 187,  350 => 186,  347 => 185,  345 => 184,  326 => 168,  317 => 162,  308 => 156,  298 => 149,  294 => 148,  290 => 147,  279 => 139,  275 => 138,  271 => 137,  261 => 130,  236 => 108,  224 => 99,  217 => 95,  209 => 90,  200 => 83,  187 => 82,  102 => 7,  89 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/stock_movement/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Détail mouvement - {{ movement.movementTypeLabel }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    :root {
        --primary: #0463f1;
        --success: #10b981;
        --warning: #f59e0b;
        --danger: #ef4444;
        --info: #0ea5e9;
        --gray-50: #f9fafb;
        --gray-100: #f3f4f6;
        --gray-200: #e5e7eb;
        --gray-600: #4b5563;
        --gray-700: #374151;
    }

    .stat-card {
        transition: transform 0.2s, box-shadow 0.2s;
        border-radius: 1rem;
        background: white;
        border: none;
    }
    .stat-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .info-row {
        border-bottom: 1px solid var(--gray-200);
        padding: 0.75rem 0;
    }
    .info-row:last-child {
        border-bottom: none;
    }
    .info-label {
        font-size: 0.7rem;
        text-transform: uppercase;
        font-weight: 600;
        color: var(--gray-600);
        letter-spacing: 0.5px;
    }
    .info-value {
        font-size: 1rem;
        font-weight: 500;
        color: var(--gray-700);
    }
    .badge-custom {
        padding: 0.35rem 0.75rem;
        border-radius: 2rem;
        font-weight: 500;
    }
    .card-header-custom {
        background: white;
        border-bottom: 2px solid var(--gray-100);
        padding: 1rem 1.25rem;
    }
    .card-header-custom h5 {
        font-weight: 600;
        font-size: 1rem;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .card-header-custom h5 i {
        color: var(--primary);
    }
    .link-card {
        text-decoration: none;
        transition: all 0.2s;
    }
    .link-card:hover {
        transform: translateY(-3px);
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
                        <a href=\"{{ path('app_admin_stock_movement_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-exchange-alt me-1\"></i> Mouvements de stock
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">{{ movement.movementTypeLabel }}</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-exchange-alt me-2 text-primary\"></i>
                Détail du mouvement
            </h1>
        </div>
        <div>
            <a href=\"{{ path('app_admin_stock_movement_index', app.request.query.all) }}\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour à la liste
            </a>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Colonne gauche -->
        <div class=\"col-xl-6\">
            <!-- Carte Informations générales -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header-custom\">
                    <h5>
                        <i class=\"fas fa-info-circle\"></i>
                        Informations générales
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-6\">
                            <div class=\"info-row\">
                                <div class=\"info-label\">Date</div>
                                <div class=\"info-value\">{{ movement.createdAt|date('d/m/Y H:i:s') }}</div>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-row\">
                                <div class=\"info-label\">Type de mouvement</div>
                                <div class=\"info-value\">
                                    <span class=\"badge {{ movement.movementTypeBadgeClass }} badge-custom\">
                                        <i class=\"{{ movement.movementTypeIcon }} me-1\"></i>
                                        {{ movement.movementTypeLabel }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-row\">
                                <div class=\"info-label\">Quantité</div>
                                <div class=\"info-value {{ movement.movementType in ['purchase_in', 'return_in'] ? 'text-success' : 'text-danger' }}\">
                                    {{ movement.movementType in ['purchase_in', 'return_in'] ? '+' : '-' }}
                                    {{ movement.quantity|number_format(0, ',', ' ') }} unité(s)
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-row\">
                                <div class=\"info-label\">Prix unitaire</div>
                                <div class=\"info-value\">{{ movement.unitPrice ? (movement.unitPrice|price_with_currency(movement.hmaService)) : '—' }}</div>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-row\">
                                <div class=\"info-label\">Valeur totale</div>
                                <div class=\"info-value\">{{ (movement.quantity * (movement.unitPrice|default(0)))|price_with_currency(movement.hmaService) }}</div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"info-row\">
                                <div class=\"info-label\">Notes</div>
                                <div class=\"info-value\">{{ movement.notes ?: '—' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte Utilisateur -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header-custom\">
                    <h5>
                        <i class=\"fas fa-user\"></i>
                        Utilisateur
                    </h5>
                </div>
                <div class=\"card-body\">
                    {% if movement.user %}
                        <div class=\"d-flex align-items-center gap-3\">
                            {% if movement.user.photo %}
                                <img src=\"{{ asset('uploads/users/' ~ movement.user.photo) }}\" alt=\"{{ movement.user.fullName }}\" class=\"rounded-circle\" style=\"width: 60px; height: 60px; object-fit: cover;\">
                            {% else %}
                                <div class=\"rounded-circle bg-light d-flex align-items-center justify-content-center\" style=\"width: 60px; height: 60px;\">
                                    <i class=\"fas fa-user fa-2x text-muted\"></i>
                                </div>
                            {% endif %}
                            <div>
                                <h5 class=\"mb-1\">{{ movement.user.fullName ?: movement.user.email }}</h5>
                                <div class=\"text-muted small\">
                                    <i class=\"fas fa-envelope me-1\"></i> {{ movement.user.email }}
                                    {% if movement.user.phone %}
                                        <span class=\"mx-2\">•</span>
                                        <i class=\"fas fa-phone me-1\"></i> {{ movement.user.phone }}
                                    {% endif %}
                                </div>
                                <span class=\"badge {{ movement.user.roleBadgeClass }} mt-1\">
                                    <i class=\"{{ movement.user.roleIcon }} me-1\"></i>
                                    {{ movement.user.roleLabel }}
                                </span>
                            </div>
                        </div>
                    {% else %}
                        <div class=\"text-center py-3 text-muted\">
                            <i class=\"fas fa-robot fa-2x mb-2\"></i>
                            <p class=\"mb-0\">Mouvement automatique (système)</p>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>

        <!-- Colonne droite -->
        <div class=\"col-xl-6\">
            <!-- Carte Lot & Produit -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header-custom\">
                    <h5>
                        <i class=\"fas fa-boxes\"></i>
                        Lot & Produit
                    </h5>
                </div>
                <div class=\"card-body\">
                    {% if movement.stockBatch %}
                        <div class=\"row\">
                            <div class=\"col-6\">
                                <div class=\"info-row\">
                                    <div class=\"info-label\">N° lot</div>
                                    <div class=\"info-value\"><code>{{ movement.stockBatch.batchNumber }}</code></div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"info-row\">
                                    <div class=\"info-label\">Produit</div>
                                    <div class=\"info-value\">{{ movement.stockBatch.product.name }}</div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"info-row\">
                                    <div class=\"info-label\">Code-barres</div>
                                    <div class=\"info-value\">{{ movement.stockBatch.product.barcode }}</div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"info-row\">
                                    <div class=\"info-label\">Catégorie</div>
                                    <div class=\"info-value\">{{ movement.stockBatch.product.category.name|default('—') }}</div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"info-row\">
                                    <div class=\"info-label\">Prix unitaire du lot</div>
                                    <div class=\"info-value\">{{ movement.stockBatch.unitPrice|price_with_currency(movement.hmaService) }}</div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"info-row\">
                                    <div class=\"info-label\">Stock actuel</div>
                                    <div class=\"info-value\">{{ movement.stockBatch.currentQuantity|number_format(0, ',', ' ') }} unités</div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"info-row\">
                                    <div class=\"info-label\">Emplacement</div>
                                    <div class=\"info-value\">{{ movement.stockBatch.locationDisplay }}</div>
                                </div>
                            </div>
                            {% if movement.stockBatch.expiryDate %}
                            <div class=\"col-6\">
                                <div class=\"info-row\">
                                    <div class=\"info-label\">Date d'expiration</div>
                                    <div class=\"info-value\">{{ movement.stockBatch.expiryDate|date('d/m/Y') }}</div>
                                </div>
                            </div>
                            {% endif %}
                        </div>
                    {% else %}
                        <div class=\"text-center py-3 text-muted\">
                            <i class=\"fas fa-box-open fa-2x mb-2\"></i>
                            <p class=\"mb-0\">Aucun lot associé à ce mouvement</p>
                        </div>
                    {% endif %}
                </div>
            </div>

            <!-- Carte Élément associé -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header-custom\">
                    <h5>
                        <i class=\"fas fa-link\"></i>
                        Élément associé
                    </h5>
                </div>
                <div class=\"card-body\">
                    {% if movement.referenceId %}
                        {# VENTE - Order #}
                        {% if movement.movementType == 'sale_out' %}
                            <div class=\"text-center\">
                                <div class=\"mb-3\">
                                    <div class=\"rounded-circle bg-primary bg-opacity-10 d-inline-flex p-3\">
                                        <i class=\"fas fa-shopping-cart fa-3x text-primary\"></i>
                                    </div>
                                </div>
                                <h5 class=\"fw-bold\">Vente associée</h5>
                                <div class=\"bg-light rounded-3 p-3 mt-3 text-start\">
                                    <div class=\"row small\">
                                        <div class=\"col-6 text-muted\">Date de la vente</div>
                                        <div class=\"col-6 text-end fw-semibold\">{{ movement.createdAt|date('d/m/Y H:i') }}</div>
                                        <div class=\"col-6 text-muted mt-2\">Quantité vendue</div>
                                        <div class=\"col-6 text-end fw-semibold\">{{ movement.quantity|number_format(0, ',', ' ') }} unités</div>
                                        <div class=\"col-6 text-muted mt-2\">Montant total</div>
                                        <div class=\"col-6 text-end fw-semibold\">{{ (movement.quantity * (movement.unitPrice|default(0)))|price_with_currency(movement.hmaService) }}</div>
                                    </div>
                                </div>
                                <a href=\"{{ path('app_orders_show', {'id': movement.referenceId}) }}\" class=\"btn btn-primary mt-3\">
                                    <i class=\"fas fa-eye me-1\"></i> Voir le détail de la vente
                                </a>
                            </div>

                        {# ACHAT - Purchase #}
                        {% elseif movement.movementType == 'purchase_in' %}
                            <div class=\"text-center\">
                                <div class=\"mb-3\">
                                    <div class=\"rounded-circle bg-success bg-opacity-10 d-inline-flex p-3\">
                                        <i class=\"fas fa-truck fa-3x text-success\"></i>
                                    </div>
                                </div>
                                <h5 class=\"fw-bold\">Achat associé</h5>
                                <div class=\"bg-light rounded-3 p-3 mt-3 text-start\">
                                    <div class=\"row small\">
                                        <div class=\"col-6 text-muted\">N° commande</div>
                                        <div class=\"col-6 text-end fw-semibold\">
                                            {% if movement.purchaseItem %}
                                                {{ movement.purchaseItem.purchase.purchaseNumber }}
                                            {% else %}
                                                Référence #{{ movement.referenceId }}
                                            {% endif %}
                                        </div>
                                        <div class=\"col-6 text-muted mt-2\">Fournisseur</div>
                                        <div class=\"col-6 text-end fw-semibold\">
                                            {% if movement.purchaseItem %}
                                                {{ movement.purchaseItem.purchase.supplier.name }}
                                            {% else %}
                                                —
                                            {% endif %}
                                        </div>
                                        <div class=\"col-6 text-muted mt-2\">Quantité achetée</div>
                                        <div class=\"col-6 text-end fw-semibold\">{{ movement.quantity|number_format(0, ',', ' ') }} unités</div>
                                    </div>
                                </div>
                                <a href=\"{{ path('purchase_show', {'id': movement.referenceId}) }}\" class=\"btn btn-success mt-3\">
                                    <i class=\"fas fa-eye me-1\"></i> Voir le détail de l'achat
                                </a>
                            </div>

                        {# RETOUR CLIENT - ReturnOrder #}
                        {% elseif movement.movementType == 'return_in' %}
                            <div class=\"text-center\">
                                <div class=\"mb-3\">
                                    <div class=\"rounded-circle bg-info bg-opacity-10 d-inline-flex p-3\">
                                        <i class=\"fas fa-undo-alt fa-3x text-info\"></i>
                                    </div>
                                </div>
                                <h5 class=\"fw-bold\">Retour client associé</h5>
                                <div class=\"bg-light rounded-3 p-3 mt-3 text-start\">
                                    <div class=\"row small\">
                                        <div class=\"col-6 text-muted\">N° retour</div>
                                        <div class=\"col-6 text-end fw-semibold\">#{{ movement.referenceId }}</div>
                                        <div class=\"col-6 text-muted mt-2\">Quantité retournée</div>
                                        <div class=\"col-6 text-end fw-semibold\">{{ movement.quantity|number_format(0, ',', ' ') }} unités</div>
                                        <div class=\"col-6 text-muted mt-2\">Date du retour</div>
                                        <div class=\"col-6 text-end fw-semibold\">{{ movement.createdAt|date('d/m/Y') }}</div>
                                    </div>
                                </div>
                                <a href=\"{{ path('returns_show', {'id': movement.referenceId}) }}\" class=\"btn btn-info mt-3\">
                                    <i class=\"fas fa-eye me-1\"></i> Voir le détail du retour
                                </a>
                            </div>

                        {# RETOUR FOURNISSEUR - SupplierCreditNote #}
                        {% elseif movement.movementType == 'return_out' %}
                            <div class=\"text-center\">
                                <div class=\"mb-3\">
                                    <div class=\"rounded-circle bg-warning bg-opacity-10 d-inline-flex p-3\">
                                        <i class=\"fas fa-truck-loading fa-3x text-warning\"></i>
                                    </div>
                                </div>
                                <h5 class=\"fw-bold\">Retour fournisseur associé</h5>
                                <div class=\"bg-light rounded-3 p-3 mt-3 text-start\">
                                    <div class=\"row small\">
                                        <div class=\"col-6 text-muted\">N° avoir</div>
                                        <div class=\"col-6 text-end fw-semibold\">#{{ movement.referenceId }}</div>
                                        <div class=\"col-6 text-muted mt-2\">Quantité retournée</div>
                                        <div class=\"col-6 text-end fw-semibold\">{{ movement.quantity|number_format(0, ',', ' ') }} unités</div>
                                        <div class=\"col-6 text-muted mt-2\">Date</div>
                                        <div class=\"col-6 text-end fw-semibold\">{{ movement.createdAt|date('d/m/Y') }}</div>
                                    </div>
                                </div>
                                <a href=\"{{ path('app_supplier_credit_note_show', {'id': movement.referenceId}) }}\" class=\"btn btn-warning mt-3\">
                                    <i class=\"fas fa-eye me-1\"></i> Voir le détail
                                </a>
                            </div>

                        {# AJUSTEMENT #}
                        {% elseif movement.movementType in ['adjustment_in', 'adjustment_out'] %}
                            <div class=\"text-center\">
                                <div class=\"mb-3\">
                                    <div class=\"rounded-circle bg-{{ movement.movementType == 'adjustment_in' ? 'success' : 'danger' }} bg-opacity-10 d-inline-flex p-3\">
                                        <i class=\"fas {{ movement.movementType == 'adjustment_in' ? 'fa-plus-circle' : 'fa-minus-circle' }} fa-3x text-{{ movement.movementType == 'adjustment_in' ? 'success' : 'danger' }}\"></i>
                                    </div>
                                </div>
                                <h5 class=\"fw-bold\">Ajustement de stock {{ movement.movementType == 'adjustment_in' ? '(+)' : '(-)' }}</h5>
                                <div class=\"bg-light rounded-3 p-3 mt-3 text-start\">
                                    <div class=\"row small\">
                                        <div class=\"col-6 text-muted\">Raison</div>
                                        <div class=\"col-6 text-end fw-semibold\">{{ movement.notes|default('Ajustement manuel')|u.truncate(40) }}</div>
                                        <div class=\"col-6 text-muted mt-2\">Quantité</div>
                                        <div class=\"col-6 text-end fw-semibold\">{{ movement.quantity|number_format(0, ',', ' ') }} unités</div>
                                        <div class=\"col-6 text-muted mt-2\">Date</div>
                                        <div class=\"col-6 text-end fw-semibold\">{{ movement.createdAt|date('d/m/Y H:i') }}</div>
                                    </div>
                                </div>
                                <div class=\"alert alert-{{ movement.movementType == 'adjustment_in' ? 'success' : 'danger' }} mt-3\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Ajustement manuel - aucune vente ou achat associé.
                                </div>
                            </div>

                        {# TRANSFERT #}
                        {% elseif movement.movementType in ['transfer_in', 'transfer_out'] %}
                            <div class=\"text-center\">
                                <div class=\"mb-3\">
                                    <div class=\"rounded-circle bg-primary bg-opacity-10 d-inline-flex p-3\">
                                        <i class=\"fas fa-arrow-{{ movement.movementType == 'transfer_in' ? 'right' : 'left' }} fa-3x text-primary\"></i>
                                    </div>
                                </div>
                                <h5 class=\"fw-bold\">Transfert {{ movement.movementType == 'transfer_in' ? 'entrant' : 'sortant' }}</h5>
                                <div class=\"bg-light rounded-3 p-3 mt-3 text-start\">
                                    <div class=\"row small\">
                                        <div class=\"col-6 text-muted\">Référence</div>
                                        <div class=\"col-6 text-end fw-semibold\">{{ movement.notes|default('Transfert')|u.truncate(30) }}</div>
                                        <div class=\"col-6 text-muted mt-2\">Quantité</div>
                                        <div class=\"col-6 text-end fw-semibold\">{{ movement.quantity|number_format(0, ',', ' ') }} unités</div>
                                        <div class=\"col-6 text-muted mt-2\">Date</div>
                                        <div class=\"col-6 text-end fw-semibold\">{{ movement.createdAt|date('d/m/Y') }}</div>
                                    </div>
                                </div>
                                <div class=\"alert alert-info mt-3\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Transfert {{ movement.movementType == 'transfer_in' ? 'depuis' : 'vers' }} un autre magasin.
                                </div>
                            </div>

                        {% else %}
                            <div class=\"text-center py-3 text-muted\">
                                <i class=\"fas fa-question-circle fa-2x mb-2\"></i>
                                <p class=\"mb-0\">Type de mouvement : {{ movement.movementType }}</p>
                            </div>
                        {% endif %}
                    {% else %}
                        <div class=\"text-center py-3 text-muted\">
                            <i class=\"fas fa-link fa-2x mb-2 opacity-50\"></i>
                            <p class=\"mb-0\">Aucun élément associé</p>
                            <small>Ce mouvement n'est lié à aucune vente, achat ou retour.</small>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

    <!-- Historique des mouvements du lot (pleine largeur) -->
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header-custom\">
                    <h5>
                        <i class=\"fas fa-history\"></i>
                        Historique des mouvements du lot
                    </h5>
                </div>
                <div class=\"card-body p-0\">
                    {% if movement.stockBatch and movement.stockBatch.stockMovements|length > 0 %}
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover align-middle mb-0\">
                                <thead class=\"table-light\">
                                    <tr>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Quantité</th>
                                        <th>Référence</th>
                                        <th>Stock restant</th>
                                        <th>Utilisateur</th>
                                        <th class=\"text-center\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for otherMovement in movement.stockBatch.stockMovements|sort((a, b) => b.createdAt <=> a.createdAt) %}
                                        <tr>
                                            <td>
                                                <div class=\"fw-semibold\">{{ otherMovement.createdAt|date('d/m/Y') }}</div>
                                                <small class=\"text-muted\">{{ otherMovement.createdAt|date('H:i:s') }}</small>
                                            </td>
                                            <td>
                                                <span class=\"badge {{ otherMovement.movementTypeBadgeClass }} badge-custom\">
                                                    <i class=\"{{ otherMovement.movementTypeIcon }} me-1\"></i>
                                                    {{ otherMovement.movementTypeLabel }}
                                                </span>
                                            </td>
                                            <td class=\"{{ otherMovement.movementType in ['purchase_in', 'return_in'] ? 'text-success' : 'text-danger' }}\">
                                                {{ otherMovement.movementType in ['purchase_in', 'return_in'] ? '+' : '-' }}
                                                {{ otherMovement.quantity|number_format(0, ',', ' ') }}
                                            </div>
                                            <td>
                                                {% if otherMovement.movementType == 'purchase_in' and otherMovement.purchaseItem %}
                                                    {{ otherMovement.purchaseItem.purchase.purchaseNumber }}
                                                {% elseif otherMovement.referenceId %}
                                                    <span class=\"text-muted\">Réf #{{ otherMovement.referenceId }}</span>
                                                {% else %}
                                                    <span class=\"text-muted\">—</span>
                                                {% endif %}
                                            </div>
                                            <td>
                                                <strong>{{ otherMovement.stockBatch.currentQuantity|number_format(0, ',', ' ') }}</strong>
                                            </div>
                                            <td>{{ otherMovement.user ? (otherMovement.user.fullName ?: otherMovement.user.email) : 'Système' }}</div>
                                            <td class=\"text-center\">
                                                {% if otherMovement.id != movement.id %}
                                                    <a href=\"{{ path('app_admin_stock_movement_show', {'id': otherMovement.id}) }}\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir le détail\">
                                                        <i class=\"fas fa-eye\"></i>
                                                    </a>
                                                {% else %}
                                                    <span class=\"badge bg-secondary\">Actuel</span>
                                                {% endif %}
                                            </div>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    {% else %}
                        <div class=\"text-center py-4 text-muted\">
                            <i class=\"fas fa-history fa-2x mb-2 opacity-50\"></i>
                            <p class=\"mb-0\">Aucun autre mouvement pour ce lot</p>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/stock_movement/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_movement\\show.html.twig");
    }
}
