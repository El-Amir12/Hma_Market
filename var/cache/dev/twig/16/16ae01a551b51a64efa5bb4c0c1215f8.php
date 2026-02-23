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

/* admin/purchase/index.html.twig */
class __TwigTemplate_77b9e2dcecd2d484b04a67429110b1d0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase/index.html.twig"));

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

        yield "Gestion des achats";
        
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
        $context["status_mapping"] = ["draft" => "Brouillon", "confirmed" => "Confirmé", "received" => "Reçu", "cancelled" => "Annulé"];
        // line 12
        yield "
";
        // line 13
        $context["status_colors"] = ["draft" => "orange", "confirmed" => "blue", "received" => "green", "cancelled" => "red"];
        // line 19
        yield "
";
        // line 20
        $context["status_icons"] = ["draft" => "fa-edit", "confirmed" => "fa-check-circle", "received" => "fa-box-check", "cancelled" => "fa-ban"];
        // line 26
        yield "
<div class=\"container-fluid px-4\">
    <!-- Container pour l'en-tête -->
    <div class=\"card border-0 shadow-sm mb-4 mt-4\">
        <div class=\"card-body p-4\">
            <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center\">
                <div class=\"mb-3 mb-md-0\">
                    <h1 class=\"h2 fw-bold mb-1\">Achats</h1>
                    <p class=\"text-muted mb-0\">Gérez vos réceptions de stock et commandes</p>
                </div>
                <div class=\"d-flex align-items-center gap-3\">
                    <div class=\"text-end bg-light rounded-3 p-3\">
                        <div class=\"h1 fw-bold text-primary mb-0\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_purchases_count"]) || array_key_exists("total_purchases_count", $context) ? $context["total_purchases_count"] : (function () { throw new RuntimeError('Variable "total_purchases_count" does not exist.', 38, $this->source); })()), "html", null, true);
        yield "</div>
                        <div class=\"text-muted small\">Total achats</div>
                    </div>
                    <div class=\"vr d-none d-md-block\"></div>
                    <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_cart");
        yield "\" class=\"btn btn-primary px-4 py-2\">
                        <i class=\"fas fa-plus me-2\"></i>
                        Nouvel achat
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Cartes de statistiques par statut -->
    <div class=\"row g-3 mb-4\">
        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["status_key"] => $context["status_label"]) {
            // line 54
            yield "            ";
            $context["count"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["status_counts"] ?? null), $context["status_key"], [], "array", true, true, false, 54) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_counts"]) || array_key_exists("status_counts", $context) ? $context["status_counts"] : (function () { throw new RuntimeError('Variable "status_counts" does not exist.', 54, $this->source); })()), $context["status_key"], [], "array", false, false, false, 54)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_counts"]) || array_key_exists("status_counts", $context) ? $context["status_counts"] : (function () { throw new RuntimeError('Variable "status_counts" does not exist.', 54, $this->source); })()), $context["status_key"], [], "array", false, false, false, 54)) : (0));
            // line 55
            yield "            ";
            $context["percentage"] = ((((isset($context["total_purchases_count"]) || array_key_exists("total_purchases_count", $context) ? $context["total_purchases_count"] : (function () { throw new RuntimeError('Variable "total_purchases_count" does not exist.', 55, $this->source); })()) > 0)) ? (Twig\Extension\CoreExtension::round((((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 55, $this->source); })()) / (isset($context["total_purchases_count"]) || array_key_exists("total_purchases_count", $context) ? $context["total_purchases_count"] : (function () { throw new RuntimeError('Variable "total_purchases_count" does not exist.', 55, $this->source); })())) * 100), 1)) : (0));
            // line 56
            yield "            
            <div class=\"col-xl-3 col-md-6\">
                <div class=\"card border-0 shadow-sm h-100\">
                    <div class=\"card-body p-3\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <div class=\"text-muted small mb-2\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status_label"], "html", null, true);
            yield "</div>
                                <div class=\"h3 fw-bold mb-1 text-";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_colors"]) || array_key_exists("status_colors", $context) ? $context["status_colors"] : (function () { throw new RuntimeError('Variable "status_colors" does not exist.', 63, $this->source); })()), $context["status_key"], [], "array", false, false, false, 63), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 63, $this->source); })()), "html", null, true);
            yield "</div>
                                <div class=\"small text-muted\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 64, $this->source); })()), "html", null, true);
            yield "% du total</div>
                            </div>
                            <div class=\"bg-";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_colors"]) || array_key_exists("status_colors", $context) ? $context["status_colors"] : (function () { throw new RuntimeError('Variable "status_colors" does not exist.', 66, $this->source); })()), $context["status_key"], [], "array", false, false, false, 66), "html", null, true);
            yield "-light rounded-circle p-2\">
                                <i class=\"fas ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_icons"]) || array_key_exists("status_icons", $context) ? $context["status_icons"] : (function () { throw new RuntimeError('Variable "status_icons" does not exist.', 67, $this->source); })()), $context["status_key"], [], "array", false, false, false, 67), "html", null, true);
            yield " fa-lg text-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_colors"]) || array_key_exists("status_colors", $context) ? $context["status_colors"] : (function () { throw new RuntimeError('Variable "status_colors" does not exist.', 67, $this->source); })()), $context["status_key"], [], "array", false, false, false, 67), "html", null, true);
            yield "\"></i>
                            </div>
                        </div>
                        <div class=\"mt-3\">
                            <div class=\"progress\" style=\"height: 4px;\">
                                <div class=\"progress-bar bg-";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_colors"]) || array_key_exists("status_colors", $context) ? $context["status_colors"] : (function () { throw new RuntimeError('Variable "status_colors" does not exist.', 72, $this->source); })()), $context["status_key"], [], "array", false, false, false, 72), "html", null, true);
            yield "\" 
                                     style=\"width: ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 73, $this->source); })()), "html", null, true);
            yield "%\" 
                                     role=\"progressbar\"></div>
                            </div>
                        </div>
                    </div>
                    <a href=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_index", ["status" => $context["status_key"]]), "html", null, true);
            yield "\" 
                       class=\"stretched-link\"></a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['status_key'], $context['status_label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "    </div>

    <!-- Section Filtres -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-body p-4\">
            <h5 class=\"fw-bold mb-3\">
                <i class=\"fas fa-sliders-h me-2 text-primary\"></i>
                Filtres
            </h5>
            
            <div class=\"row g-3\">
                <!-- Filtre par statut -->
                <div class=\"col-md-8\">
                    <div class=\"d-flex flex-wrap gap-2\">
                        <a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_index");
        yield "\" 
                           class=\"btn btn-sm ";
        // line 98
        yield (((null === (isset($context["current_status"]) || array_key_exists("current_status", $context) ? $context["current_status"] : (function () { throw new RuntimeError('Variable "current_status" does not exist.', 98, $this->source); })()))) ? ("btn-dark") : ("btn-outline-dark"));
        yield " rounded-pill px-3\">
                            <span class=\"fw-medium\">Tous</span>
                            <span class=\"badge bg-dark-subtle text-dark ms-2\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_purchases_count"]) || array_key_exists("total_purchases_count", $context) ? $context["total_purchases_count"] : (function () { throw new RuntimeError('Variable "total_purchases_count" does not exist.', 100, $this->source); })()), "html", null, true);
        yield "</span>
                        </a>
                        
                        ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 103, $this->source); })()));
        foreach ($context['_seq'] as $context["status_key"] => $context["status_label"]) {
            // line 104
            yield "                            ";
            $context["count"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["status_counts"] ?? null), $context["status_key"], [], "array", true, true, false, 104) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_counts"]) || array_key_exists("status_counts", $context) ? $context["status_counts"] : (function () { throw new RuntimeError('Variable "status_counts" does not exist.', 104, $this->source); })()), $context["status_key"], [], "array", false, false, false, 104)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_counts"]) || array_key_exists("status_counts", $context) ? $context["status_counts"] : (function () { throw new RuntimeError('Variable "status_counts" does not exist.', 104, $this->source); })()), $context["status_key"], [], "array", false, false, false, 104)) : (0));
            // line 105
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_index", ["status" => $context["status_key"]]), "html", null, true);
            yield "\" 
                               class=\"btn btn-sm ";
            // line 106
            yield ((((isset($context["current_status"]) || array_key_exists("current_status", $context) ? $context["current_status"] : (function () { throw new RuntimeError('Variable "current_status" does not exist.', 106, $this->source); })()) == $context["status_key"])) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("btn-" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_colors"]) || array_key_exists("status_colors", $context) ? $context["status_colors"] : (function () { throw new RuntimeError('Variable "status_colors" does not exist.', 106, $this->source); })()), $context["status_key"], [], "array", false, false, false, 106)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("btn-outline-" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_colors"]) || array_key_exists("status_colors", $context) ? $context["status_colors"] : (function () { throw new RuntimeError('Variable "status_colors" does not exist.', 106, $this->source); })()), $context["status_key"], [], "array", false, false, false, 106)), "html", null, true)));
            yield " rounded-pill px-3\">
                                <i class=\"fas ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_icons"]) || array_key_exists("status_icons", $context) ? $context["status_icons"] : (function () { throw new RuntimeError('Variable "status_icons" does not exist.', 107, $this->source); })()), $context["status_key"], [], "array", false, false, false, 107), "html", null, true);
            yield " me-1\"></i>
                                <span class=\"fw-medium\">";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status_label"], "html", null, true);
            yield "</span>
                                <span class=\"badge bg-";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_colors"]) || array_key_exists("status_colors", $context) ? $context["status_colors"] : (function () { throw new RuntimeError('Variable "status_colors" does not exist.', 109, $this->source); })()), $context["status_key"], [], "array", false, false, false, 109), "html", null, true);
            yield "-subtle text-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_colors"]) || array_key_exists("status_colors", $context) ? $context["status_colors"] : (function () { throw new RuntimeError('Variable "status_colors" does not exist.', 109, $this->source); })()), $context["status_key"], [], "array", false, false, false, 109), "html", null, true);
            yield " ms-2\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 109, $this->source); })()), "html", null, true);
            yield "</span>
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['status_key'], $context['status_label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        yield "                    </div>
                </div>
                
                <!-- Filtre par période -->
                <div class=\"col-md-4\">
                    <form method=\"get\" action=\"";
        // line 117
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_index");
        yield "\" id=\"periodFilter\" class=\"d-flex gap-2\">
                        <input type=\"hidden\" name=\"status\" value=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("current_status", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["current_status"]) || array_key_exists("current_status", $context) ? $context["current_status"] : (function () { throw new RuntimeError('Variable "current_status" does not exist.', 118, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"page\" value=\"1\">
                        
                        <div class=\"input-group input-group-sm\">
                            <span class=\"input-group-text bg-white border-end-0\">
                                <i class=\"fas fa-calendar text-muted\"></i>
                            </span>
                            <input type=\"date\" 
                                   name=\"start_date\" 
                                   class=\"form-control border-start-0 border-end-0\" 
                                   value=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "request", [], "any", false, false, false, 128), "query", [], "any", false, false, false, 128), "get", ["start_date"], "method", false, false, false, 128), "html", null, true);
        yield "\"
                                   placeholder=\"Début\">
                            <span class=\"input-group-text bg-white border-start-0 border-end-0 text-muted\">
                                <i class=\"fas fa-minus\"></i>
                            </span>
                            <input type=\"date\" 
                                   name=\"end_date\" 
                                   class=\"form-control border-start-0\" 
                                   value=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "request", [], "any", false, false, false, 136), "query", [], "any", false, false, false, 136), "get", ["end_date"], "method", false, false, false, 136), "html", null, true);
        yield "\"
                                   placeholder=\"Fin\">
                            <button type=\"submit\" class=\"btn btn-outline-primary\">
                                <i class=\"fas fa-search\"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des achats -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead>
                        <tr class=\"border-bottom\">
                            <th class=\"px-4 py-3 text-uppercase text-xs fw-semibold text-muted bg-light\">
                                N° Achat
                            </th>
                            <th class=\"px-3 py-3 text-uppercase text-xs fw-semibold text-muted bg-light\">
                                Date
                            </th>
                            <th class=\"px-3 py-3 text-uppercase text-xs fw-semibold text-muted bg-light\">
                                Fournisseur
                            </th>
                            <th class=\"px-3 py-3 text-uppercase text-xs fw-semibold text-muted bg-light text-center\">
                                Articles
                            </th>
                            <th class=\"px-3 py-3 text-uppercase text-xs fw-semibold text-muted bg-light text-center\">
                                Montant
                            </th>
                            <th class=\"px-3 py-3 text-uppercase text-xs fw-semibold text-muted bg-light text-center\">
                                Statut
                            </th>
                            <th class=\"px-3 py-3 text-uppercase text-xs fw-semibold text-muted bg-light text-center\">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["purchases"]) || array_key_exists("purchases", $context) ? $context["purchases"] : (function () { throw new RuntimeError('Variable "purchases" does not exist.', 179, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["purchase"]) {
            // line 180
            yield "                            <tr class=\"border-bottom\">
                                <td class=\"px-4 py-3\">
                                    <div class=\"fw-bold text-dark\">";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "purchaseNumber", [], "any", false, false, false, 182), "html", null, true);
            yield "</div>
                                </td>
                                <td class=\"px-3 py-3\">
                                    <div class=\"fw-semibold\">";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "createdAt", [], "any", false, false, false, 185), "d/m/Y"), "html", null, true);
            yield "</div>
                                    <div class=\"text-muted small\">";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "createdAt", [], "any", false, false, false, 186), "H:i"), "html", null, true);
            yield "</div>
                                </td>
                                <td class=\"px-3 py-3\">
                                    ";
            // line 189
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "supplier", [], "any", false, false, false, 189)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 190
                yield "                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"bg-blue-subtle rounded-circle p-2 me-2\">
                                                <i class=\"fas fa-truck fa-sm text-blue\"></i>
                                            </div>
                                            <div>
                                                <div class=\"fw-semibold\">";
                // line 195
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "supplier", [], "any", false, false, false, 195), "name", [], "any", false, false, false, 195), "html", null, true);
                yield "</div>
                                                ";
                // line 196
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "supplier", [], "any", false, false, false, 196), "email", [], "any", false, false, false, 196)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 197
                    yield "                                                    <div class=\"text-muted small text-truncate\" style=\"max-width: 200px;\">
                                                        ";
                    // line 198
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "supplier", [], "any", false, false, false, 198), "email", [], "any", false, false, false, 198), "html", null, true);
                    yield "
                                                    </div>
                                                ";
                }
                // line 201
                yield "                                            </div>
                                        </div>
                                    ";
            } else {
                // line 204
                yield "                                        <span class=\"text-muted fst-italic\">Non spécifié</span>
                                    ";
            }
            // line 206
            yield "                                </td>
                                <td class=\"px-3 py-3 text-center\">
                                    ";
            // line 208
            $context["totalQuantity"] = 0;
            // line 209
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "purchaseItems", [], "any", false, false, false, 209));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 210
                yield "                                        ";
                $context["totalQuantity"] = ((isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new RuntimeError('Variable "totalQuantity" does not exist.', 210, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 210));
                // line 211
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            yield "                                    <div class=\"fw-bold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "purchaseItems", [], "any", false, false, false, 212)), "html", null, true);
            yield "</div>
                                    <div class=\"text-muted small\">";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new RuntimeError('Variable "totalQuantity" does not exist.', 213, $this->source); })()), "html", null, true);
            yield " unités</div>
                                </td>
                                <td class=\"px-3 py-3 text-center\">
                                    <div class=\"fw-bold text-success\">";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\FcfaExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "totalAmount", [], "any", false, false, false, 216)), "html", null, true);
            yield "</div>
                                </td>
                                <td class=\"px-3 py-3 text-center\">
                                    <span class=\"badge bg-";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_colors"]) || array_key_exists("status_colors", $context) ? $context["status_colors"] : (function () { throw new RuntimeError('Variable "status_colors" does not exist.', 219, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "status", [], "any", false, false, false, 219), [], "array", false, false, false, 219), "html", null, true);
            yield "-subtle text-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_colors"]) || array_key_exists("status_colors", $context) ? $context["status_colors"] : (function () { throw new RuntimeError('Variable "status_colors" does not exist.', 219, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "status", [], "any", false, false, false, 219), [], "array", false, false, false, 219), "html", null, true);
            yield " border border-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_colors"]) || array_key_exists("status_colors", $context) ? $context["status_colors"] : (function () { throw new RuntimeError('Variable "status_colors" does not exist.', 219, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "status", [], "any", false, false, false, 219), [], "array", false, false, false, 219), "html", null, true);
            yield " py-2 px-3\">
                                        <i class=\"fas ";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_icons"]) || array_key_exists("status_icons", $context) ? $context["status_icons"] : (function () { throw new RuntimeError('Variable "status_icons" does not exist.', 220, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "status", [], "any", false, false, false, 220), [], "array", false, false, false, 220), "html", null, true);
            yield " me-1\"></i>
                                        ";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_mapping"]) || array_key_exists("status_mapping", $context) ? $context["status_mapping"] : (function () { throw new RuntimeError('Variable "status_mapping" does not exist.', 221, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "status", [], "any", false, false, false, 221), [], "array", false, false, false, 221), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td class=\"px-3 py-3 text-center\">
                                    <div class=\"d-flex justify-content-center gap-2\">
                                        <!-- Bouton Détails (toujours visible) -->
                                        <a href=\"";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "id", [], "any", false, false, false, 227)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-sm btn-outline-primary px-3\"
                                           data-bs-toggle=\"tooltip\"
                                           title=\"Voir les détails\">
                                            <i class=\"fas fa-eye\"></i>
                                            <span class=\"d-none d-md-inline ms-1\">Détails</span>
                                        </a>
                                        
                                        <!-- Bouton Bon de commande (uniquement pour statut \"confirmed\") -->
                                        ";
            // line 236
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "status", [], "any", false, false, false, 236) == "confirmed")) {
                // line 237
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_view_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "id", [], "any", false, false, false, 237), "type" => "bon-commande"]), "html", null, true);
                yield "\" 
                                               class=\"btn btn-sm btn-outline-info px-3\"
                                               data-bs-toggle=\"tooltip\"
                                               title=\"Bon de commande\"
                                               target=\"_blank\">
                                                <i class=\"fas fa-file-contract\"></i>
                                                <span class=\"d-none d-md-inline ms-1\">Bon</span>
                                            </a>
                                        ";
            }
            // line 246
            yield "                                        
                                        <!-- Bouton Reçu (uniquement pour statut \"received\") -->
                                        ";
            // line 248
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "status", [], "any", false, false, false, 248) == "received")) {
                // line 249
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_view_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "id", [], "any", false, false, false, 249), "type" => "recu-achat"]), "html", null, true);
                yield "\" 
                                               class=\"btn btn-sm btn-outline-success px-3\"
                                               data-bs-toggle=\"tooltip\"
                                               title=\"Reçu d'achat\"
                                               target=\"_blank\">
                                                <i class=\"fas fa-file-invoice-dollar\"></i>
                                                <span class=\"d-none d-md-inline ms-1\">Reçu</span>
                                            </a>
                                        ";
            }
            // line 258
            yield "                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 261
        if (!$context['_iterated']) {
            // line 262
            yield "                            <tr>
                                <td colspan=\"7\" class=\"text-center py-5\">
                                    <div class=\"py-5\">
                                        <div class=\"text-muted mb-3\">
                                            <i class=\"fas fa-shopping-bag fa-3x\"></i>
                                        </div>
                                        <h5 class=\"fw-bold text-muted mb-2\">Aucun achat trouvé</h5>
                                        <p class=\"text-muted mb-4\">
                                            ";
            // line 270
            if ((($tmp = (isset($context["current_status"]) || array_key_exists("current_status", $context) ? $context["current_status"] : (function () { throw new RuntimeError('Variable "current_status" does not exist.', 270, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 271
                yield "                                                Aucun achat avec le statut \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_mapping"]) || array_key_exists("status_mapping", $context) ? $context["status_mapping"] : (function () { throw new RuntimeError('Variable "status_mapping" does not exist.', 271, $this->source); })()), (isset($context["current_status"]) || array_key_exists("current_status", $context) ? $context["current_status"] : (function () { throw new RuntimeError('Variable "current_status" does not exist.', 271, $this->source); })()), [], "array", false, false, false, 271), "html", null, true);
                yield "\"
                                            ";
            } else {
                // line 273
                yield "                                                Créez votre premier achat
                                            ";
            }
            // line 275
            yield "                                        </p>
                                        <a href=\"";
            // line 276
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_cart");
            yield "\" class=\"btn btn-primary\">
                                            <i class=\"fas fa-plus me-2\"></i>
                                            Nouvel achat
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['purchase'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        yield "                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            ";
        // line 289
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 289, $this->source); })()), "total_pages", [], "any", false, false, false, 289) > 1)) {
            // line 290
            yield "                <div class=\"card-footer bg-white border-0 py-3 px-4\">
                    <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-center\">
                        <div class=\"text-muted small mb-2 mb-md-0\">
                            <span class=\"fw-medium\">";
            // line 293
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["purchases"]) || array_key_exists("purchases", $context) ? $context["purchases"] : (function () { throw new RuntimeError('Variable "purchases" does not exist.', 293, $this->source); })())), "html", null, true);
            yield "</span> sur 
                            <span class=\"fw-medium\">";
            // line 294
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 294, $this->source); })()), "total_items", [], "any", false, false, false, 294), "html", null, true);
            yield "</span> achats
                        </div>
                        
                        <nav aria-label=\"Navigation des achats\">
                            <ul class=\"pagination pagination-sm mb-0\">
                                <!-- Page précédente -->
                                ";
            // line 300
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 300, $this->source); })()), "has_previous_page", [], "any", false, false, false, 300)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 301
                yield "                                    <li class=\"page-item\">
                                        <a class=\"page-link\" 
                                           href=\"";
                // line 303
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 303, $this->source); })()), "request", [], "any", false, false, false, 303), "query", [], "any", false, false, false, 303), "all", [], "any", false, false, false, 303), ["page" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 303, $this->source); })()), "previous_page", [], "any", false, false, false, 303)])), "html", null, true);
                yield "\"
                                           aria-label=\"Précédent\">
                                            <i class=\"fas fa-chevron-left\"></i>
                                        </a>
                                    </li>
                                ";
            } else {
                // line 309
                yield "                                    <li class=\"page-item disabled\">
                                        <span class=\"page-link\">
                                            <i class=\"fas fa-chevron-left\"></i>
                                        </span>
                                    </li>
                                ";
            }
            // line 315
            yield "                                
                                <!-- Pages numérotées -->
                                ";
            // line 317
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 317, $this->source); })()), "total_pages", [], "any", false, false, false, 317)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 318
                yield "                                    ";
                if (($context["page"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 318, $this->source); })()), "current_page", [], "any", false, false, false, 318))) {
                    // line 319
                    yield "                                        <li class=\"page-item active\">
                                            <span class=\"page-link\">";
                    // line 320
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</span>
                                        </li>
                                    ";
                } elseif ((((                // line 322
$context["page"] == 1) || ($context["page"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 322, $this->source); })()), "total_pages", [], "any", false, false, false, 322))) || ((                // line 323
$context["page"] >= (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 323, $this->source); })()), "current_page", [], "any", false, false, false, 323) - 1)) && ($context["page"] <= (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 323, $this->source); })()), "current_page", [], "any", false, false, false, 323) + 1))))) {
                    // line 324
                    yield "                                        <li class=\"page-item\">
                                            <a class=\"page-link\" 
                                               href=\"";
                    // line 326
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 326, $this->source); })()), "request", [], "any", false, false, false, 326), "query", [], "any", false, false, false, 326), "all", [], "any", false, false, false, 326), ["page" => $context["page"]])), "html", null, true);
                    yield "\">
                                                ";
                    // line 327
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "
                                            </a>
                                        </li>
                                    ";
                } elseif (((                // line 330
$context["page"] == (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 330, $this->source); })()), "current_page", [], "any", false, false, false, 330) - 2)) || ($context["page"] == (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 330, $this->source); })()), "current_page", [], "any", false, false, false, 330) + 2)))) {
                    // line 331
                    yield "                                        <li class=\"page-item disabled\">
                                            <span class=\"page-link\">...</span>
                                        </li>
                                    ";
                }
                // line 335
                yield "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 336
            yield "                                
                                <!-- Page suivante -->
                                ";
            // line 338
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 338, $this->source); })()), "has_next_page", [], "any", false, false, false, 338)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 339
                yield "                                    <li class=\"page-item\">
                                        <a class=\"page-link\" 
                                           href=\"";
                // line 341
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 341, $this->source); })()), "request", [], "any", false, false, false, 341), "query", [], "any", false, false, false, 341), "all", [], "any", false, false, false, 341), ["page" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 341, $this->source); })()), "next_page", [], "any", false, false, false, 341)])), "html", null, true);
                yield "\"
                                           aria-label=\"Suivant\">
                                            <i class=\"fas fa-chevron-right\"></i>
                                        </a>
                                    </li>
                                ";
            } else {
                // line 347
                yield "                                    <li class=\"page-item disabled\">
                                        <span class=\"page-link\">
                                            <i class=\"fas fa-chevron-right\"></i>
                                        </span>
                                    </li>
                                ";
            }
            // line 353
            yield "                            </ul>
                        </nav>
                        
                        <div class=\"text-muted small mt-2 mt-md-0\">
                            Page <span class=\"fw-medium\">";
            // line 357
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 357, $this->source); })()), "current_page", [], "any", false, false, false, 357), "html", null, true);
            yield "</span> sur 
                            <span class=\"fw-medium\">";
            // line 358
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 358, $this->source); })()), "total_pages", [], "any", false, false, false, 358), "html", null, true);
            yield "</span>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 363
        yield "        </div>
    </div>
</div>

<style>
/* Styles personnalisés modernes */
:root {
    --orange: #fd7e14;
    --blue: #0d6efd;
    --green: #198754;
    --red: #dc3545;
    --orange-light: #fff3e0;
    --blue-light: #e3f2fd;
    --green-light: #e8f5e9;
    --red-light: #ffebee;
}

.bg-orange-light { background-color: var(--orange-light); }
.bg-blue-light { background-color: var(--blue-light); }
.bg-green-light { background-color: var(--green-light); }
.bg-red-light { background-color: var(--red-light); }

.text-orange { color: var(--orange); }
.text-blue { color: var(--blue); }
.text-green { color: var(--green); }
.text-red { color: var(--red); }

.bg-orange-subtle { background-color: rgba(253, 126, 20, 0.1); }
.bg-blue-subtle { background-color: rgba(13, 110, 253, 0.1); }
.bg-green-subtle { background-color: rgba(25, 135, 84, 0.1); }
.bg-red-subtle { background-color: rgba(220, 53, 69, 0.1); }

.border-orange { border-color: var(--orange); }
.border-blue { border-color: var(--blue); }
.border-green { border-color: var(--green); }
.border-red { border-color: var(--red); }

.btn-outline-orange {
    color: var(--orange);
    border-color: var(--orange);
}
.btn-outline-orange:hover {
    background-color: var(--orange);
    border-color: var(--orange);
    color: white;
}

.btn-outline-blue {
    color: var(--blue);
    border-color: var(--blue);
}
.btn-outline-blue:hover {
    background-color: var(--blue);
    border-color: var(--blue);
    color: white;
}

.btn-outline-green {
    color: var(--green);
    border-color: var(--green);
}
.btn-outline-green:hover {
    background-color: var(--green);
    border-color: var(--green);
    color: white;
}

.btn-outline-red {
    color: var(--red);
    border-color: var(--red);
}
.btn-outline-red:hover {
    background-color: var(--red);
    border-color: var(--red);
    color: white;
}

.btn-outline-info {
    color: #0dcaf0;
    border-color: #0dcaf0;
}
.btn-outline-info:hover {
    background-color: #0dcaf0;
    border-color: #0dcaf0;
    color: white;
}

.card {
    border-radius: 10px;
    overflow: hidden;
    transition: all 0.2s ease;
}

.card:hover:not(.card-body) {
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
}

.table {
    margin-bottom: 0;
}

.table thead th {
    font-weight: 600;
    letter-spacing: 0.3px;
    border-top: none;
    padding-top: 1rem;
    padding-bottom: 1rem;
}

.table tbody tr {
    transition: background-color 0.2s ease;
}

.table tbody tr:hover {
    background-color: rgba(0, 0, 0, 0.02);
}

.table tbody td {
    padding-top: 1rem;
    padding-bottom: 1rem;
    vertical-align: middle;
}

.badge {
    font-weight: 500;
    letter-spacing: 0.3px;
    border-width: 1px;
    border-style: solid;
}

.btn-outline-primary {
    border-width: 1px;
}

.input-group .input-group-text {
    background-color: white;
    border-color: #dee2e6;
}

.input-group .form-control {
    border-color: #dee2e6;
}

.input-group .form-control:focus {
    box-shadow: none;
    border-color: #86b7fe;
}

.pagination .page-item.active .page-link {
    background-color: #0d6efd;
    border-color: #0d6efd;
}

.pagination .page-link {
    border-color: #dee2e6;
    color: #495057;
    border-radius: 5px;
    margin: 0 2px;
}

.pagination .page-link:hover {
    background-color: #f8f9fa;
    color: #0d6efd;
}

/* Animation pour les cartes */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

.row.g-3 > div {
    animation: fadeIn 0.3s ease forwards;
}

.row.g-3 > div:nth-child(2) { animation-delay: 0.1s; }
.row.g-3 > div:nth-child(3) { animation-delay: 0.2s; }
.row.g-3 > div:nth-child(4) { animation-delay: 0.3s; }

/* Responsive */
@media (max-width: 768px) {
    .container-fluid {
        padding-left: 1rem;
        padding-right: 1rem;
    }
    
    .table-responsive {
        font-size: 0.9rem;
    }
    
    .btn-sm .d-md-inline {
        display: inline !important;
    }
    
    .d-flex.justify-content-center.gap-2 {
        gap: 4px !important;
    }
    
    .btn-sm.px-3 {
        padding-left: 8px !important;
        padding-right: 8px !important;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialisation des tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Filtre par période - validation
    const periodForm = document.getElementById('periodFilter');
    if (periodForm) {
        const startDateInput = periodForm.querySelector('input[name=\"start_date\"]');
        const endDateInput = periodForm.querySelector('input[name=\"end_date\"]');
        
        // Validation des dates
        startDateInput.addEventListener('change', function() {
            if (endDateInput.value && new Date(this.value) > new Date(endDateInput.value)) {
                alert(\"La date de début ne peut pas être postérieure à la date de fin.\");
                this.value = '';
            }
        });
        
        endDateInput.addEventListener('change', function() {
            if (startDateInput.value && new Date(this.value) < new Date(startDateInput.value)) {
                alert(\"La date de fin ne peut pas être antérieure à la date de début.\");
                this.value = '';
            }
        });
    }
    
    // Effet de survol sur les cartes
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        const link = card.querySelector('.stretched-link');
        if (link) {
            card.style.cursor = 'pointer';
            
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px)';
                this.style.boxShadow = '0 8px 25px rgba(0,0,0,0.1)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 2px 10px rgba(0,0,0,0.05)';
            });
        }
    });
});
</script>
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
        return "admin/purchase/index.html.twig";
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
        return array (  721 => 363,  713 => 358,  709 => 357,  703 => 353,  695 => 347,  686 => 341,  682 => 339,  680 => 338,  676 => 336,  670 => 335,  664 => 331,  662 => 330,  656 => 327,  652 => 326,  648 => 324,  646 => 323,  645 => 322,  640 => 320,  637 => 319,  634 => 318,  630 => 317,  626 => 315,  618 => 309,  609 => 303,  605 => 301,  603 => 300,  594 => 294,  590 => 293,  585 => 290,  583 => 289,  576 => 284,  562 => 276,  559 => 275,  555 => 273,  549 => 271,  547 => 270,  537 => 262,  535 => 261,  528 => 258,  515 => 249,  513 => 248,  509 => 246,  496 => 237,  494 => 236,  482 => 227,  473 => 221,  469 => 220,  461 => 219,  455 => 216,  449 => 213,  444 => 212,  438 => 211,  435 => 210,  430 => 209,  428 => 208,  424 => 206,  420 => 204,  415 => 201,  409 => 198,  406 => 197,  404 => 196,  400 => 195,  393 => 190,  391 => 189,  385 => 186,  381 => 185,  375 => 182,  371 => 180,  366 => 179,  320 => 136,  309 => 128,  296 => 118,  292 => 117,  285 => 112,  272 => 109,  268 => 108,  264 => 107,  260 => 106,  255 => 105,  252 => 104,  248 => 103,  242 => 100,  237 => 98,  233 => 97,  217 => 83,  206 => 78,  198 => 73,  194 => 72,  184 => 67,  180 => 66,  175 => 64,  169 => 63,  165 => 62,  157 => 56,  154 => 55,  151 => 54,  147 => 53,  133 => 42,  126 => 38,  112 => 26,  110 => 20,  107 => 19,  105 => 13,  102 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des achats{% endblock %}

{% block body %}
{% set status_mapping = {
    'draft': 'Brouillon',
    'confirmed': 'Confirmé',
    'received': 'Reçu',
    'cancelled': 'Annulé'
} %}

{% set status_colors = {
    'draft': 'orange',
    'confirmed': 'blue',
    'received': 'green',
    'cancelled': 'red'
} %}

{% set status_icons = {
    'draft': 'fa-edit',
    'confirmed': 'fa-check-circle',
    'received': 'fa-box-check',
    'cancelled': 'fa-ban'
} %}

<div class=\"container-fluid px-4\">
    <!-- Container pour l'en-tête -->
    <div class=\"card border-0 shadow-sm mb-4 mt-4\">
        <div class=\"card-body p-4\">
            <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center\">
                <div class=\"mb-3 mb-md-0\">
                    <h1 class=\"h2 fw-bold mb-1\">Achats</h1>
                    <p class=\"text-muted mb-0\">Gérez vos réceptions de stock et commandes</p>
                </div>
                <div class=\"d-flex align-items-center gap-3\">
                    <div class=\"text-end bg-light rounded-3 p-3\">
                        <div class=\"h1 fw-bold text-primary mb-0\">{{ total_purchases_count }}</div>
                        <div class=\"text-muted small\">Total achats</div>
                    </div>
                    <div class=\"vr d-none d-md-block\"></div>
                    <a href=\"{{ path('admin_purchase_cart') }}\" class=\"btn btn-primary px-4 py-2\">
                        <i class=\"fas fa-plus me-2\"></i>
                        Nouvel achat
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Cartes de statistiques par statut -->
    <div class=\"row g-3 mb-4\">
        {% for status_key, status_label in statuses %}
            {% set count = status_counts[status_key] ?? 0 %}
            {% set percentage = total_purchases_count > 0 ? (count / total_purchases_count * 100)|round(1) : 0 %}
            
            <div class=\"col-xl-3 col-md-6\">
                <div class=\"card border-0 shadow-sm h-100\">
                    <div class=\"card-body p-3\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <div class=\"text-muted small mb-2\">{{ status_label }}</div>
                                <div class=\"h3 fw-bold mb-1 text-{{ status_colors[status_key] }}\">{{ count }}</div>
                                <div class=\"small text-muted\">{{ percentage }}% du total</div>
                            </div>
                            <div class=\"bg-{{ status_colors[status_key] }}-light rounded-circle p-2\">
                                <i class=\"fas {{ status_icons[status_key] }} fa-lg text-{{ status_colors[status_key] }}\"></i>
                            </div>
                        </div>
                        <div class=\"mt-3\">
                            <div class=\"progress\" style=\"height: 4px;\">
                                <div class=\"progress-bar bg-{{ status_colors[status_key] }}\" 
                                     style=\"width: {{ percentage }}%\" 
                                     role=\"progressbar\"></div>
                            </div>
                        </div>
                    </div>
                    <a href=\"{{ path('admin_purchase_index', {'status': status_key}) }}\" 
                       class=\"stretched-link\"></a>
                </div>
            </div>
        {% endfor %}
    </div>

    <!-- Section Filtres -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-body p-4\">
            <h5 class=\"fw-bold mb-3\">
                <i class=\"fas fa-sliders-h me-2 text-primary\"></i>
                Filtres
            </h5>
            
            <div class=\"row g-3\">
                <!-- Filtre par statut -->
                <div class=\"col-md-8\">
                    <div class=\"d-flex flex-wrap gap-2\">
                        <a href=\"{{ path('admin_purchase_index') }}\" 
                           class=\"btn btn-sm {{ current_status is null ? 'btn-dark' : 'btn-outline-dark' }} rounded-pill px-3\">
                            <span class=\"fw-medium\">Tous</span>
                            <span class=\"badge bg-dark-subtle text-dark ms-2\">{{ total_purchases_count }}</span>
                        </a>
                        
                        {% for status_key, status_label in statuses %}
                            {% set count = status_counts[status_key] ?? 0 %}
                            <a href=\"{{ path('admin_purchase_index', {'status': status_key}) }}\" 
                               class=\"btn btn-sm {{ current_status == status_key ? 'btn-' ~ status_colors[status_key] : 'btn-outline-' ~ status_colors[status_key] }} rounded-pill px-3\">
                                <i class=\"fas {{ status_icons[status_key] }} me-1\"></i>
                                <span class=\"fw-medium\">{{ status_label }}</span>
                                <span class=\"badge bg-{{ status_colors[status_key] }}-subtle text-{{ status_colors[status_key] }} ms-2\">{{ count }}</span>
                            </a>
                        {% endfor %}
                    </div>
                </div>
                
                <!-- Filtre par période -->
                <div class=\"col-md-4\">
                    <form method=\"get\" action=\"{{ path('admin_purchase_index') }}\" id=\"periodFilter\" class=\"d-flex gap-2\">
                        <input type=\"hidden\" name=\"status\" value=\"{{ current_status|default('') }}\">
                        <input type=\"hidden\" name=\"page\" value=\"1\">
                        
                        <div class=\"input-group input-group-sm\">
                            <span class=\"input-group-text bg-white border-end-0\">
                                <i class=\"fas fa-calendar text-muted\"></i>
                            </span>
                            <input type=\"date\" 
                                   name=\"start_date\" 
                                   class=\"form-control border-start-0 border-end-0\" 
                                   value=\"{{ app.request.query.get('start_date') }}\"
                                   placeholder=\"Début\">
                            <span class=\"input-group-text bg-white border-start-0 border-end-0 text-muted\">
                                <i class=\"fas fa-minus\"></i>
                            </span>
                            <input type=\"date\" 
                                   name=\"end_date\" 
                                   class=\"form-control border-start-0\" 
                                   value=\"{{ app.request.query.get('end_date') }}\"
                                   placeholder=\"Fin\">
                            <button type=\"submit\" class=\"btn btn-outline-primary\">
                                <i class=\"fas fa-search\"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des achats -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead>
                        <tr class=\"border-bottom\">
                            <th class=\"px-4 py-3 text-uppercase text-xs fw-semibold text-muted bg-light\">
                                N° Achat
                            </th>
                            <th class=\"px-3 py-3 text-uppercase text-xs fw-semibold text-muted bg-light\">
                                Date
                            </th>
                            <th class=\"px-3 py-3 text-uppercase text-xs fw-semibold text-muted bg-light\">
                                Fournisseur
                            </th>
                            <th class=\"px-3 py-3 text-uppercase text-xs fw-semibold text-muted bg-light text-center\">
                                Articles
                            </th>
                            <th class=\"px-3 py-3 text-uppercase text-xs fw-semibold text-muted bg-light text-center\">
                                Montant
                            </th>
                            <th class=\"px-3 py-3 text-uppercase text-xs fw-semibold text-muted bg-light text-center\">
                                Statut
                            </th>
                            <th class=\"px-3 py-3 text-uppercase text-xs fw-semibold text-muted bg-light text-center\">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for purchase in purchases %}
                            <tr class=\"border-bottom\">
                                <td class=\"px-4 py-3\">
                                    <div class=\"fw-bold text-dark\">{{ purchase.purchaseNumber }}</div>
                                </td>
                                <td class=\"px-3 py-3\">
                                    <div class=\"fw-semibold\">{{ purchase.createdAt|date('d/m/Y') }}</div>
                                    <div class=\"text-muted small\">{{ purchase.createdAt|date('H:i') }}</div>
                                </td>
                                <td class=\"px-3 py-3\">
                                    {% if purchase.supplier %}
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"bg-blue-subtle rounded-circle p-2 me-2\">
                                                <i class=\"fas fa-truck fa-sm text-blue\"></i>
                                            </div>
                                            <div>
                                                <div class=\"fw-semibold\">{{ purchase.supplier.name }}</div>
                                                {% if purchase.supplier.email %}
                                                    <div class=\"text-muted small text-truncate\" style=\"max-width: 200px;\">
                                                        {{ purchase.supplier.email }}
                                                    </div>
                                                {% endif %}
                                            </div>
                                        </div>
                                    {% else %}
                                        <span class=\"text-muted fst-italic\">Non spécifié</span>
                                    {% endif %}
                                </td>
                                <td class=\"px-3 py-3 text-center\">
                                    {% set totalQuantity = 0 %}
                                    {% for item in purchase.purchaseItems %}
                                        {% set totalQuantity = totalQuantity + item.quantity %}
                                    {% endfor %}
                                    <div class=\"fw-bold\">{{ purchase.purchaseItems|length }}</div>
                                    <div class=\"text-muted small\">{{ totalQuantity }} unités</div>
                                </td>
                                <td class=\"px-3 py-3 text-center\">
                                    <div class=\"fw-bold text-success\">{{ purchase.totalAmount|format_fcfa }}</div>
                                </td>
                                <td class=\"px-3 py-3 text-center\">
                                    <span class=\"badge bg-{{ status_colors[purchase.status] }}-subtle text-{{ status_colors[purchase.status] }} border border-{{ status_colors[purchase.status] }} py-2 px-3\">
                                        <i class=\"fas {{ status_icons[purchase.status] }} me-1\"></i>
                                        {{ status_mapping[purchase.status] }}
                                    </span>
                                </td>
                                <td class=\"px-3 py-3 text-center\">
                                    <div class=\"d-flex justify-content-center gap-2\">
                                        <!-- Bouton Détails (toujours visible) -->
                                        <a href=\"{{ path('admin_purchase_show', {'id': purchase.id}) }}\" 
                                           class=\"btn btn-sm btn-outline-primary px-3\"
                                           data-bs-toggle=\"tooltip\"
                                           title=\"Voir les détails\">
                                            <i class=\"fas fa-eye\"></i>
                                            <span class=\"d-none d-md-inline ms-1\">Détails</span>
                                        </a>
                                        
                                        <!-- Bouton Bon de commande (uniquement pour statut \"confirmed\") -->
                                        {% if purchase.status == 'confirmed'%}
                                            <a href=\"{{ path('admin_purchase_view_pdf', {'id': purchase.id, 'type': 'bon-commande'}) }}\" 
                                               class=\"btn btn-sm btn-outline-info px-3\"
                                               data-bs-toggle=\"tooltip\"
                                               title=\"Bon de commande\"
                                               target=\"_blank\">
                                                <i class=\"fas fa-file-contract\"></i>
                                                <span class=\"d-none d-md-inline ms-1\">Bon</span>
                                            </a>
                                        {% endif %}
                                        
                                        <!-- Bouton Reçu (uniquement pour statut \"received\") -->
                                        {% if purchase.status == 'received' %}
                                            <a href=\"{{ path('admin_purchase_view_pdf', {'id': purchase.id, 'type': 'recu-achat'}) }}\" 
                                               class=\"btn btn-sm btn-outline-success px-3\"
                                               data-bs-toggle=\"tooltip\"
                                               title=\"Reçu d'achat\"
                                               target=\"_blank\">
                                                <i class=\"fas fa-file-invoice-dollar\"></i>
                                                <span class=\"d-none d-md-inline ms-1\">Reçu</span>
                                            </a>
                                        {% endif %}
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"7\" class=\"text-center py-5\">
                                    <div class=\"py-5\">
                                        <div class=\"text-muted mb-3\">
                                            <i class=\"fas fa-shopping-bag fa-3x\"></i>
                                        </div>
                                        <h5 class=\"fw-bold text-muted mb-2\">Aucun achat trouvé</h5>
                                        <p class=\"text-muted mb-4\">
                                            {% if current_status %}
                                                Aucun achat avec le statut \"{{ status_mapping[current_status] }}\"
                                            {% else %}
                                                Créez votre premier achat
                                            {% endif %}
                                        </p>
                                        <a href=\"{{ path('admin_purchase_cart') }}\" class=\"btn btn-primary\">
                                            <i class=\"fas fa-plus me-2\"></i>
                                            Nouvel achat
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            {% if pagination.total_pages > 1 %}
                <div class=\"card-footer bg-white border-0 py-3 px-4\">
                    <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-center\">
                        <div class=\"text-muted small mb-2 mb-md-0\">
                            <span class=\"fw-medium\">{{ purchases|length }}</span> sur 
                            <span class=\"fw-medium\">{{ pagination.total_items }}</span> achats
                        </div>
                        
                        <nav aria-label=\"Navigation des achats\">
                            <ul class=\"pagination pagination-sm mb-0\">
                                <!-- Page précédente -->
                                {% if pagination.has_previous_page %}
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" 
                                           href=\"{{ path('admin_purchase_index', app.request.query.all|merge({'page': pagination.previous_page})) }}\"
                                           aria-label=\"Précédent\">
                                            <i class=\"fas fa-chevron-left\"></i>
                                        </a>
                                    </li>
                                {% else %}
                                    <li class=\"page-item disabled\">
                                        <span class=\"page-link\">
                                            <i class=\"fas fa-chevron-left\"></i>
                                        </span>
                                    </li>
                                {% endif %}
                                
                                <!-- Pages numérotées -->
                                {% for page in 1..pagination.total_pages %}
                                    {% if page == pagination.current_page %}
                                        <li class=\"page-item active\">
                                            <span class=\"page-link\">{{ page }}</span>
                                        </li>
                                    {% elseif page == 1 or page == pagination.total_pages or 
                                            (page >= pagination.current_page - 1 and page <= pagination.current_page + 1) %}
                                        <li class=\"page-item\">
                                            <a class=\"page-link\" 
                                               href=\"{{ path('admin_purchase_index', app.request.query.all|merge({'page': page})) }}\">
                                                {{ page }}
                                            </a>
                                        </li>
                                    {% elseif page == pagination.current_page - 2 or page == pagination.current_page + 2 %}
                                        <li class=\"page-item disabled\">
                                            <span class=\"page-link\">...</span>
                                        </li>
                                    {% endif %}
                                {% endfor %}
                                
                                <!-- Page suivante -->
                                {% if pagination.has_next_page %}
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" 
                                           href=\"{{ path('admin_purchase_index', app.request.query.all|merge({'page': pagination.next_page})) }}\"
                                           aria-label=\"Suivant\">
                                            <i class=\"fas fa-chevron-right\"></i>
                                        </a>
                                    </li>
                                {% else %}
                                    <li class=\"page-item disabled\">
                                        <span class=\"page-link\">
                                            <i class=\"fas fa-chevron-right\"></i>
                                        </span>
                                    </li>
                                {% endif %}
                            </ul>
                        </nav>
                        
                        <div class=\"text-muted small mt-2 mt-md-0\">
                            Page <span class=\"fw-medium\">{{ pagination.current_page }}</span> sur 
                            <span class=\"fw-medium\">{{ pagination.total_pages }}</span>
                        </div>
                    </div>
                </div>
            {% endif %}
        </div>
    </div>
</div>

<style>
/* Styles personnalisés modernes */
:root {
    --orange: #fd7e14;
    --blue: #0d6efd;
    --green: #198754;
    --red: #dc3545;
    --orange-light: #fff3e0;
    --blue-light: #e3f2fd;
    --green-light: #e8f5e9;
    --red-light: #ffebee;
}

.bg-orange-light { background-color: var(--orange-light); }
.bg-blue-light { background-color: var(--blue-light); }
.bg-green-light { background-color: var(--green-light); }
.bg-red-light { background-color: var(--red-light); }

.text-orange { color: var(--orange); }
.text-blue { color: var(--blue); }
.text-green { color: var(--green); }
.text-red { color: var(--red); }

.bg-orange-subtle { background-color: rgba(253, 126, 20, 0.1); }
.bg-blue-subtle { background-color: rgba(13, 110, 253, 0.1); }
.bg-green-subtle { background-color: rgba(25, 135, 84, 0.1); }
.bg-red-subtle { background-color: rgba(220, 53, 69, 0.1); }

.border-orange { border-color: var(--orange); }
.border-blue { border-color: var(--blue); }
.border-green { border-color: var(--green); }
.border-red { border-color: var(--red); }

.btn-outline-orange {
    color: var(--orange);
    border-color: var(--orange);
}
.btn-outline-orange:hover {
    background-color: var(--orange);
    border-color: var(--orange);
    color: white;
}

.btn-outline-blue {
    color: var(--blue);
    border-color: var(--blue);
}
.btn-outline-blue:hover {
    background-color: var(--blue);
    border-color: var(--blue);
    color: white;
}

.btn-outline-green {
    color: var(--green);
    border-color: var(--green);
}
.btn-outline-green:hover {
    background-color: var(--green);
    border-color: var(--green);
    color: white;
}

.btn-outline-red {
    color: var(--red);
    border-color: var(--red);
}
.btn-outline-red:hover {
    background-color: var(--red);
    border-color: var(--red);
    color: white;
}

.btn-outline-info {
    color: #0dcaf0;
    border-color: #0dcaf0;
}
.btn-outline-info:hover {
    background-color: #0dcaf0;
    border-color: #0dcaf0;
    color: white;
}

.card {
    border-radius: 10px;
    overflow: hidden;
    transition: all 0.2s ease;
}

.card:hover:not(.card-body) {
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
}

.table {
    margin-bottom: 0;
}

.table thead th {
    font-weight: 600;
    letter-spacing: 0.3px;
    border-top: none;
    padding-top: 1rem;
    padding-bottom: 1rem;
}

.table tbody tr {
    transition: background-color 0.2s ease;
}

.table tbody tr:hover {
    background-color: rgba(0, 0, 0, 0.02);
}

.table tbody td {
    padding-top: 1rem;
    padding-bottom: 1rem;
    vertical-align: middle;
}

.badge {
    font-weight: 500;
    letter-spacing: 0.3px;
    border-width: 1px;
    border-style: solid;
}

.btn-outline-primary {
    border-width: 1px;
}

.input-group .input-group-text {
    background-color: white;
    border-color: #dee2e6;
}

.input-group .form-control {
    border-color: #dee2e6;
}

.input-group .form-control:focus {
    box-shadow: none;
    border-color: #86b7fe;
}

.pagination .page-item.active .page-link {
    background-color: #0d6efd;
    border-color: #0d6efd;
}

.pagination .page-link {
    border-color: #dee2e6;
    color: #495057;
    border-radius: 5px;
    margin: 0 2px;
}

.pagination .page-link:hover {
    background-color: #f8f9fa;
    color: #0d6efd;
}

/* Animation pour les cartes */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

.row.g-3 > div {
    animation: fadeIn 0.3s ease forwards;
}

.row.g-3 > div:nth-child(2) { animation-delay: 0.1s; }
.row.g-3 > div:nth-child(3) { animation-delay: 0.2s; }
.row.g-3 > div:nth-child(4) { animation-delay: 0.3s; }

/* Responsive */
@media (max-width: 768px) {
    .container-fluid {
        padding-left: 1rem;
        padding-right: 1rem;
    }
    
    .table-responsive {
        font-size: 0.9rem;
    }
    
    .btn-sm .d-md-inline {
        display: inline !important;
    }
    
    .d-flex.justify-content-center.gap-2 {
        gap: 4px !important;
    }
    
    .btn-sm.px-3 {
        padding-left: 8px !important;
        padding-right: 8px !important;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialisation des tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Filtre par période - validation
    const periodForm = document.getElementById('periodFilter');
    if (periodForm) {
        const startDateInput = periodForm.querySelector('input[name=\"start_date\"]');
        const endDateInput = periodForm.querySelector('input[name=\"end_date\"]');
        
        // Validation des dates
        startDateInput.addEventListener('change', function() {
            if (endDateInput.value && new Date(this.value) > new Date(endDateInput.value)) {
                alert(\"La date de début ne peut pas être postérieure à la date de fin.\");
                this.value = '';
            }
        });
        
        endDateInput.addEventListener('change', function() {
            if (startDateInput.value && new Date(this.value) < new Date(startDateInput.value)) {
                alert(\"La date de fin ne peut pas être antérieure à la date de début.\");
                this.value = '';
            }
        });
    }
    
    // Effet de survol sur les cartes
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        const link = card.querySelector('.stretched-link');
        if (link) {
            card.style.cursor = 'pointer';
            
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px)';
                this.style.boxShadow = '0 8px 25px rgba(0,0,0,0.1)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 2px 10px rgba(0,0,0,0.05)';
            });
        }
    });
});
</script>
{% endblock %}", "admin/purchase/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\purchase\\index.html.twig");
    }
}
