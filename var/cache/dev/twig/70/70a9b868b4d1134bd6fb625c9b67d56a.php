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

/* sale/orders/show.html.twig */
class __TwigTemplate_59ce13b3c027e5fe6ac3c6f36c8d8f67 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sale/orders/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sale/orders/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "Détails de la commande #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 5, $this->source); })()), "orderNumber", [], "any", false, false, false, 5), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<style>
    .order-card {
        background: white;
        border-radius: 16px;
        border: 1px solid #e5e7eb;
        overflow: hidden;
        margin-bottom: 1.5rem;
    }
    .order-card .card-header {
        background: #f8fafc;
        border-bottom: 1px solid #e5e7eb;
        padding: 1rem 1.25rem;
    }
    .info-item {
        padding: 0.75rem 1.25rem;
        border-bottom: 1px solid #f1f5f9;
    }
    .info-item:last-child {
        border-bottom: none;
    }
    .info-label {
        font-size: 0.75rem;
        text-transform: uppercase;
        color: #64748b;
        margin-bottom: 0.25rem;
    }
    .info-value {
        font-weight: 600;
    }
    .status-badge {
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
    }
    .return-card {
        background: #fffbeb;
        border-left: 4px solid #f59e0b;
        transition: transform 0.2s;
    }
    .return-card:hover {
        transform: translateX(5px);
    }
    
    .action-buttons {
        margin-top: 1rem;
        text-align: right;
    }
    .items-table th, .items-table td {
        vertical-align: middle;
    }
    
    .quantity-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
        padding: 0.25rem 0.5rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 500;
    }
    .quantity-returned {
        background-color: #fee2e2;
        color: #dc2626;
    }
    .quantity-remaining {
        background-color: #dcfce7;
        color: #16a34a;
    }
    .quantity-total {
        background-color: #e5e7eb;
        color: #374151;
    }
    .return-items-list {
        margin-top: 0.5rem;
        padding-top: 0.5rem;
        border-top: 1px dashed #e5e7eb;
    }
    .return-item-badge {
        display: inline-block;
        background: #f3f4f6;
        padding: 0.25rem 0.5rem;
        border-radius: 12px;
        font-size: 0.7rem;
        margin: 0.2rem 0.2rem;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 99
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

        // line 100
        yield "<div class=\"container-fluid py-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-shopping-cart me-1\"></i> Ventes
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        ";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 112, $this->source); })()), "orderNumber", [], "any", false, false, false, 112), "html", null, true);
        yield "
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-receipt me-2 text-primary\"></i>
                Commande #";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 118, $this->source); })()), "orderNumber", [], "any", false, false, false, 118), "html", null, true);
        yield "
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-calendar me-1\"></i>
                Créée le ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 122, $this->source); })()), "createdAt", [], "any", false, false, false, 122), "d/m/Y H:i"), "html", null, true);
        yield "
            </p>
        </div>
        <div class=\"d-flex gap-2\">
            <button type=\"button\" class=\"btn btn-outline-success quick-print\" 
                    data-order-id=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 127, $this->source); })()), "id", [], "any", false, false, false, 127), "html", null, true);
        yield "\" 
                    data-print-type=\"customer\" 
                    title=\"Impression rapide client\">
                <i class=\"fas fa-print me-1\"></i> <i class=\"fas fa-bolt fa-xs\"></i> Imprimer
            </button>
            
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-outline-primary dropdown-toggle\" data-bs-toggle=\"dropdown\">
                    <i class=\"fas fa-print me-1\"></i> Autres tickets
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                        <a class=\"dropdown-item print-customer\" href=\"#\" data-order-id=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 139, $this->source); })()), "id", [], "any", false, false, false, 139), "html", null, true);
        yield "\" data-print-type=\"customer\">
                            <i class=\"fas fa-receipt me-2\"></i> Ticket client
                        </a>
                    </li>
                    ";
        // line 143
        if ((($tmp = (isset($context["isRestaurant"]) || array_key_exists("isRestaurant", $context) ? $context["isRestaurant"] : (function () { throw new RuntimeError('Variable "isRestaurant" does not exist.', 143, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 144
            yield "                    <li><hr class=\"dropdown-divider\"></li>
                    <li>
                        <a class=\"dropdown-item print-kitchen\" href=\"#\" data-order-id=\"";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 146, $this->source); })()), "id", [], "any", false, false, false, 146), "html", null, true);
            yield "\" data-print-type=\"kitchen\">
                            <i class=\"fas fa-utensils me-2\"></i> Ticket cuisine
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item print-delivery\" href=\"#\" data-order-id=\"";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 151, $this->source); })()), "id", [], "any", false, false, false, 151), "html", null, true);
            yield "\" data-print-type=\"delivery\">
                            <i class=\"fas fa-truck me-2\"></i> Ticket livraison
                        </a>
                    </li>
                    ";
        }
        // line 156
        yield "                    <li><hr class=\"dropdown-divider\"></li>
                    <li>
                        <a class=\"dropdown-item print-cash\" href=\"#\" data-order-id=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 158, $this->source); })()), "id", [], "any", false, false, false, 158), "html", null, true);
        yield "\" data-print-type=\"cash\">
                            <i class=\"fas fa-money-bill-wave me-2\"></i> Ticket caisse
                        </a>
                    </li>
                </ul>
            </div>
            
            <a href=\"";
        // line 165
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Colonne gauche - Informations commande -->
        <div class=\"col-lg-4\">
            <div class=\"order-card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-info-circle me-2\"></i> Informations commande</h5>
                </div>
                
                <!-- Statut -->
                <div class=\"info-item\">
                    <div class=\"info-label\">Statut</div>
                    <div class=\"info-value\">
                        ";
        // line 183
        $context["statusColors"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 183, $this->source); })()), "getStatusColors", [], "method", false, false, false, 183);
        // line 184
        yield "                        ";
        $context["statusLabels"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 184, $this->source); })()), "getStatusLabels", [], "method", false, false, false, 184);
        // line 185
        yield "                        
                        <span class=\"status-badge bg-";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["statusColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 186, $this->source); })()), "status", [], "any", false, false, false, 186), [], "array", true, true, false, 186)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusColors"]) || array_key_exists("statusColors", $context) ? $context["statusColors"] : (function () { throw new RuntimeError('Variable "statusColors" does not exist.', 186, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 186, $this->source); })()), "status", [], "any", false, false, false, 186), [], "array", false, false, false, 186), "secondary")) : ("secondary")), "html", null, true);
        yield " text-white\">
                            ";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["statusLabels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 187, $this->source); })()), "status", [], "any", false, false, false, 187), [], "array", true, true, false, 187)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusLabels"]) || array_key_exists("statusLabels", $context) ? $context["statusLabels"] : (function () { throw new RuntimeError('Variable "statusLabels" does not exist.', 187, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 187, $this->source); })()), "status", [], "any", false, false, false, 187), [], "array", false, false, false, 187), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 187, $this->source); })()), "status", [], "any", false, false, false, 187))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 187, $this->source); })()), "status", [], "any", false, false, false, 187))), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>
                
                <div class=\"info-item\">
                    <div class=\"info-label\">Client</div>
                    <div class=\"info-value\">";
        // line 194
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 194, $this->source); })()), "customerName", [], "any", false, false, false, 194)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 194, $this->source); })()), "customerName", [], "any", false, false, false, 194), "html", null, true)) : ("Non renseigné"));
        yield "</div>
                    ";
        // line 195
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 195, $this->source); })()), "customerPhone", [], "any", false, false, false, 195)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 196
            yield "                        <div class=\"small text-muted mt-1\">
                            <i class=\"fas fa-phone me-1\"></i> ";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 197, $this->source); })()), "customerPhone", [], "any", false, false, false, 197), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 200
        yield "                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Caissier</div>
                    <div class=\"info-value\">
                        <div class=\"d-flex align-items-center\">
                            ";
        // line 205
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 205, $this->source); })()), "user", [], "any", false, false, false, 205), "photo", [], "any", false, false, false, 205)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 206
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 206, $this->source); })()), "user", [], "any", false, false, false, 206), "photo", [], "any", false, false, false, 206))), "html", null, true);
            yield "\" class=\"rounded-circle me-2\" width=\"32\" height=\"32\">
                            ";
        } else {
            // line 208
            yield "                                <div class=\"bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2\" style=\"width: 32px; height: 32px;\">
                                    <i class=\"fas fa-user text-secondary\"></i>
                                </div>
                            ";
        }
        // line 212
        yield "                            <div>
                                <strong>";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, true, false, 213), "fullName", [], "any", true, true, false, 213)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 213, $this->source); })()), "user", [], "any", false, false, false, 213), "fullName", [], "any", false, false, false, 213), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 213, $this->source); })()), "user", [], "any", false, false, false, 213), "email", [], "any", false, false, false, 213))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 213, $this->source); })()), "user", [], "any", false, false, false, 213), "email", [], "any", false, false, false, 213))), "html", null, true);
        yield "</strong>
                                <br><small class=\"text-muted\">";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 214, $this->source); })()), "user", [], "any", false, false, false, 214), "roles", [], "any", false, false, false, 214)), ["ROLE_" => ""]), "html", null, true);
        yield "</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Mode de paiement</div>
                    <div class=\"info-value\">
                        ";
        // line 222
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 222, $this->source); })()), "paymentMethod", [], "any", false, false, false, 222) == "cash")) {
            // line 223
            yield "                            <i class=\"fas fa-money-bill-wave text-success me-1\"></i> Espèces
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 224
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 224, $this->source); })()), "paymentMethod", [], "any", false, false, false, 224) == "card")) {
            // line 225
            yield "                            <i class=\"fas fa-credit-card text-primary me-1\"></i> Carte bancaire
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 226
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 226, $this->source); })()), "paymentMethod", [], "any", false, false, false, 226) == "mobile_money")) {
            // line 227
            yield "                            <i class=\"fas fa-mobile-alt text-info me-1\"></i> Mobile Money
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 228
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 228, $this->source); })()), "paymentMethod", [], "any", false, false, false, 228) == "feda_pay")) {
            // line 229
            yield "                            <i class=\"fas fa-credit-card text-primary me-1\"></i> FedaPay
                        ";
        } else {
            // line 231
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 231, $this->source); })()), "paymentMethod", [], "any", false, false, false, 231)), "html", null, true);
            yield "
                        ";
        }
        // line 233
        yield "                    </div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Montants</div>
                    <div class=\"info-value\">
                        <div class=\"d-flex justify-content-between\">
                            <span>Total :</span>
                            <strong class=\"text-primary\">";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 240, $this->source); })()), "totalAmount", [], "any", false, false, false, 240), 0, ",", " "), "html", null, true);
        yield " FCFA</strong>
                        </div>
                        <div class=\"d-flex justify-content-between mt-1\">
                            <span>Payé :</span>
                            <span>";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 244, $this->source); })()), "amountPaid", [], "any", false, false, false, 244), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
                        </div>
                        ";
        // line 246
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 246, $this->source); })()), "changeAmount", [], "any", false, false, false, 246) > 0)) {
            // line 247
            yield "                            <div class=\"d-flex justify-content-between mt-1\">
                                <span>Monnaie :</span>
                                <span class=\"text-success\">";
            // line 249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 249, $this->source); })()), "changeAmount", [], "any", false, false, false, 249), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
                            </div>
                        ";
        }
        // line 252
        yield "                    </div>
                </div>
                ";
        // line 254
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 254, $this->source); })()), "notes", [], "any", false, false, false, 254)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 255
            yield "                <div class=\"info-item\">
                    <div class=\"info-label\">Notes</div>
                    <div class=\"info-value text-muted\">";
            // line 257
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 257, $this->source); })()), "notes", [], "any", false, false, false, 257), "html", null, true));
            yield "</div>
                </div>
                ";
        }
        // line 260
        yield "            </div>

            <!-- ==================== SECTION MODIFICATION STATUT ==================== -->
            ";
        // line 263
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 264
            yield "            <div class=\"order-card mt-3\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-edit me-2 text-primary\"></i>
                        Modifier le statut
                    </h5>
                </div>
                <div class=\"p-3\">
                    ";
            // line 272
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 272, $this->source); })()), "status", [], "any", false, false, false, 272) == "completed") && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 272, $this->source); })()), "customerEmail", [], "any", false, false, false, 272)))) {
                // line 273
                yield "                        <div class=\"alert alert-info mb-3\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            Cette commande est une <strong>vente en caisse</strong> et est déjà terminée.
                        </div>
                    ";
            }
            // line 278
            yield "                    
                    <form method=\"POST\" action=\"";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_update_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 279, $this->source); })()), "id", [], "any", false, false, false, 279)]), "html", null, true);
            yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("update_order_status"), "html", null, true);
            yield "\">
                        <div class=\"row g-3\">
                            <div class=\"col-12\">
                                <label class=\"form-label fw-bold small\">Nouveau statut</label>
                                <select name=\"status\" class=\"form-select form-select-lg\">
                                    ";
            // line 285
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 285, $this->source); })()), "getStatusLabels", [], "method", false, false, false, 285));
            foreach ($context['_seq'] as $context["statusKey"] => $context["statusLabel"]) {
                // line 286
                yield "                                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusKey"], "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 286, $this->source); })()), "status", [], "any", false, false, false, 286) == $context["statusKey"])) {
                    yield "selected";
                }
                yield ">
                                            ";
                // line 287
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusLabel"], "html", null, true);
                yield "
                                        </option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['statusKey'], $context['statusLabel'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 290
            yield "                                </select>
                            </div>
                            <div class=\"col-12\">
                                <button type=\"submit\" class=\"btn btn-primary w-100 py-2\" 
                                        ";
            // line 294
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 294, $this->source); })()), "status", [], "any", false, false, false, 294) == "completed") && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 294, $this->source); })()), "customerEmail", [], "any", false, false, false, 294)))) {
                yield "disabled";
            }
            yield ">
                                    <i class=\"fas fa-save me-2\"></i> Mettre à jour le statut
                                </button>
                            </div>
                        </div>
                    </form>
                    
                    <div class=\"text-muted small mt-3\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        ";
            // line 303
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 303, $this->source); })()), "customerEmail", [], "any", false, false, false, 303)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 304
                yield "                            Le client recevra une notification par email lors du changement de statut.
                        ";
            } else {
                // line 306
                yield "                            <span class=\"text-warning\">⚠️ Aucun email client disponible pour cette commande (vente en caisse).</span>
                        ";
            }
            // line 308
            yield "                    </div>
                    
                    <div class=\"mt-2\">
                        <span class=\"badge bg-light text-dark\">
                            <i class=\"fas fa-clock me-1\"></i>
                            Dernière mise à jour : ";
            // line 313
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 313, $this->source); })()), "updatedAt", [], "any", false, false, false, 313), "d/m/Y H:i"), "html", null, true);
            yield "
                        </span>
                    </div>
                </div>
            </div>
            ";
        }
        // line 319
        yield "        </div>

        <!-- Colonne droite - Articles et retours -->
        <div class=\"col-lg-8\">
            <!-- Articles commandés -->
            <div class=\"order-card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-boxes me-2\"></i>
                        Articles commandés
                        <span class=\"badge bg-secondary ms-2\">";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 329, $this->source); })()), "orderItems", [], "any", false, false, false, 329)), "html", null, true);
        yield " article(s)</span>
                    </h5>
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0 items-table\">
                        <thead class=\"table-light\">
                            <tr>
                                <th>
                                    ";
        // line 337
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 337, $this->source); })()) == "restaurant")) {
            // line 338
            yield "                                        Article
                                    ";
        } else {
            // line 340
            yield "                                        Produit
                                    ";
        }
        // line 342
        yield "                                </th>
                                <th class=\"text-center\">Quantité</th>
                                <th class=\"text-center\">Prix unitaire</th>
                                <th class=\"text-center\">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 349
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 349, $this->source); })()), "orderItems", [], "any", false, false, false, 349));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 350
            yield "                                <tr>
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            ";
            // line 353
            if (((isset($context["isRestaurant"]) || array_key_exists("isRestaurant", $context) ? $context["isRestaurant"] : (function () { throw new RuntimeError('Variable "isRestaurant" does not exist.', 353, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "recipe", [], "any", false, false, false, 353))) {
                // line 354
                yield "                                                <i class=\"fas fa-utensils text-primary me-2 fa-fw\"></i>
                                            ";
            } else {
                // line 356
                yield "                                                <i class=\"fas fa-box text-success me-2 fa-fw\"></i>
                                            ";
            }
            // line 358
            yield "                                            <div>
                                                <strong>";
            // line 359
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 359), "html", null, true);
            yield "</strong>
                                                ";
            // line 360
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 360)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 361
                yield "                                                    <br><small class=\"text-primary\"><i class=\"fas fa-tag me-1\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 361), "html", null, true);
                yield " (-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionDiscountPercentage", [], "any", false, false, false, 361), "html", null, true);
                yield "%)</small>
                                                ";
            }
            // line 363
            yield "                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge bg-secondary\">";
            // line 367
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 367), "html", null, true);
            yield "</span>
                                    </td>
                                    <td class=\"text-center\">
                                        ";
            // line 370
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "originalUnitPrice", [], "any", false, false, false, 370)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 371
                yield "                                            <span class=\"text-muted text-decoration-line-through\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "originalUnitPrice", [], "any", false, false, false, 371), 0, ",", " "), "html", null, true);
                yield " FCFA</span><br>
                                            <span class=\"text-primary\">";
                // line 372
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 372), 0, ",", " "), "html", null, true);
                yield " FCFA</span>
                                        ";
            } else {
                // line 374
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 374), 0, ",", " "), "html", null, true);
                yield " FCFA
                                        ";
            }
            // line 376
            yield "                                    </td>
                                    <td class=\"text-center\">
                                        <strong>";
            // line 378
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 378), 0, ",", " "), "html", null, true);
            yield " FCFA</strong>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 382
        yield "                        </tbody>
                        <tfoot class=\"table-light\">
                            <tr>
                                <td colspan=\"3\" class=\"text-end fw-bold\">Total :</td>
                                <td class=\"text-center fw-bold text-primary h5\">
                                    ";
        // line 387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 387, $this->source); })()), "totalAmount", [], "any", false, false, false, 387), 0, ",", " "), "html", null, true);
        yield " FCFA
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <!-- Retours effectués -->
            ";
        // line 396
        if ((array_key_exists("returns", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["returns"]) || array_key_exists("returns", $context) ? $context["returns"] : (function () { throw new RuntimeError('Variable "returns" does not exist.', 396, $this->source); })())) > 0))) {
            // line 397
            yield "            <div class=\"order-card mt-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-undo-alt me-2 text-warning\"></i>
                        Retours effectués
                        <span class=\"badge bg-warning ms-2\">";
            // line 402
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["returns"]) || array_key_exists("returns", $context) ? $context["returns"] : (function () { throw new RuntimeError('Variable "returns" does not exist.', 402, $this->source); })())), "html", null, true);
            yield " retour(s)</span>
                    </h5>
                </div>
                <div class=\"p-3\">
                    ";
            // line 406
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["returns"]) || array_key_exists("returns", $context) ? $context["returns"] : (function () { throw new RuntimeError('Variable "returns" does not exist.', 406, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["return"]) {
                // line 407
                yield "                        <div class=\"return-card card mb-3\">
                            <div class=\"card-body\">
                                <div class=\"d-flex justify-content-between align-items-start flex-wrap gap-2\">
                                    <div>
                                        <h6 class=\"mb-1\">
                                            <a href=\"";
                // line 412
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["return"], "id", [], "any", false, false, false, 412)]), "html", null, true);
                yield "\" class=\"text-decoration-none\">
                                                <i class=\"fas fa-receipt me-1\"></i> ";
                // line 413
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnNumber", [], "any", false, false, false, 413), "html", null, true);
                yield "
                                            </a>
                                        </h6>
                                        <div class=\"small text-muted\">
                                            <i class=\"fas fa-calendar me-1\"></i> ";
                // line 417
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "createdAt", [], "any", false, false, false, 417), "d/m/Y H:i"), "html", null, true);
                yield "
                                        </div>
                                    </div>
                                    <div>
                                        ";
                // line 421
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["return"], "status", [], "any", false, false, false, 421) == "pending")) {
                    // line 422
                    yield "                                            <span class=\"badge bg-warning\">⏳ En attente</span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 423
$context["return"], "status", [], "any", false, false, false, 423) == "approved")) {
                    // line 424
                    yield "                                            <span class=\"badge bg-primary\">✓ Approuvé</span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 425
$context["return"], "status", [], "any", false, false, false, 425) == "completed")) {
                    // line 426
                    yield "                                            <span class=\"badge bg-success\">✅ Remboursé</span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 427
$context["return"], "status", [], "any", false, false, false, 427) == "rejected")) {
                    // line 428
                    yield "                                            <span class=\"badge bg-danger\">❌ Rejeté</span>
                                        ";
                }
                // line 430
                yield "                                    </div>
                                </div>
                                
                                <div class=\"mt-3\">
                                    <table class=\"table table-sm table-bordered mb-0\">
                                        <thead class=\"table-light\">
                                            <tr>
                                                <th>Produit</th>
                                                <th class=\"text-center\">Quantité retournée</th>
                                                <th class=\"text-center\">Quantité restante</th>
                                                <th class=\"text-center\">Prix unitaire</th>
                                                <th class=\"text-center\">Total remboursé</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
                // line 445
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnItems", [], "any", false, false, false, 445));
                foreach ($context['_seq'] as $context["_key"] => $context["returnItem"]) {
                    // line 446
                    yield "                                                ";
                    $context["originalQty"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "originalOrderItem", [], "any", false, false, false, 446), "quantity", [], "any", false, false, false, 446);
                    // line 447
                    yield "                                                ";
                    $context["returnedQty"] = CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "quantityReturned", [], "any", false, false, false, 447);
                    // line 448
                    yield "                                                ";
                    $context["remainingQty"] = ((isset($context["originalQty"]) || array_key_exists("originalQty", $context) ? $context["originalQty"] : (function () { throw new RuntimeError('Variable "originalQty" does not exist.', 448, $this->source); })()) - (isset($context["returnedQty"]) || array_key_exists("returnedQty", $context) ? $context["returnedQty"] : (function () { throw new RuntimeError('Variable "returnedQty" does not exist.', 448, $this->source); })()));
                    // line 449
                    yield "                                                <tr>
                                                    <td>
                                                        <strong>";
                    // line 451
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "productName", [], "any", false, false, false, 451), "html", null, true);
                    yield "</strong>
                                                        ";
                    // line 452
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "promotionName", [], "any", false, false, false, 452)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 453
                        yield "                                                            <br><small class=\"text-primary\"><i class=\"fas fa-tag\"></i> ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "promotionName", [], "any", false, false, false, 453), "html", null, true);
                        yield "</small>
                                                        ";
                    }
                    // line 455
                    yield "                                                        <br><small class=\"text-muted\">
                                                            <i class=\"fas ";
                    // line 456
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "itemType", [], "any", false, false, false, 456) == "recipe")) {
                        yield "fa-utensils";
                    } else {
                        yield "fa-box";
                    }
                    yield " me-1\"></i>
                                                            ";
                    // line 457
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "itemType", [], "any", false, false, false, 457) == "recipe")) {
                        yield "Menu";
                    } else {
                        yield "Produit";
                    }
                    // line 458
                    yield "                                                        </small>
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <span class=\"badge bg-danger\">";
                    // line 461
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["returnedQty"]) || array_key_exists("returnedQty", $context) ? $context["returnedQty"] : (function () { throw new RuntimeError('Variable "returnedQty" does not exist.', 461, $this->source); })()), "html", null, true);
                    yield "</span>
                                                    </td>
                                                    <td class=\"text-center\">
                                                        ";
                    // line 464
                    if (((isset($context["remainingQty"]) || array_key_exists("remainingQty", $context) ? $context["remainingQty"] : (function () { throw new RuntimeError('Variable "remainingQty" does not exist.', 464, $this->source); })()) > 0)) {
                        // line 465
                        yield "                                                            <span class=\"badge bg-success\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["remainingQty"]) || array_key_exists("remainingQty", $context) ? $context["remainingQty"] : (function () { throw new RuntimeError('Variable "remainingQty" does not exist.', 465, $this->source); })()), "html", null, true);
                        yield "</span>
                                                        ";
                    } else {
                        // line 467
                        yield "                                                            <span class=\"badge bg-secondary\">0</span>
                                                        ";
                    }
                    // line 469
                    yield "                                                    </td>
                                                    <td class=\"text-center\">
                                                        ";
                    // line 471
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "unitPriceAtSale", [], "any", false, false, false, 471), 0, ",", " "), "html", null, true);
                    yield " FCFA
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <strong class=\"text-primary\">";
                    // line 474
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "totalRefund", [], "any", false, false, false, 474), 0, ",", " "), "html", null, true);
                    yield " FCFA</strong>
                                                    </td>
                                                </tr>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['returnItem'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 478
                yield "                                        </tbody>
                                        <tfoot class=\"table-light\">
                                            <tr>
                                                <td colspan=\"4\" class=\"text-end fw-bold\">Total remboursé :</td>
                                                <td class=\"text-center fw-bold text-primary h5\">
                                                    ";
                // line 483
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "totalRefundAmount", [], "any", false, false, false, 483), 0, ",", " "), "html", null, true);
                yield " FCFA
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                
                                <div class=\"row mt-2 small\">
                                    <div class=\"col-md-4\">
                                        <strong>Motif :</strong> ";
                // line 492
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reasons"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 492), [], "array", true, true, false, 492)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reasons"]) || array_key_exists("reasons", $context) ? $context["reasons"] : (function () { throw new RuntimeError('Variable "reasons" does not exist.', 492, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 492), [], "array", false, false, false, 492), CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 492))) : (CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 492))), "html", null, true);
                yield "
                                    </div>
                                    <div class=\"col-md-4\">
                                        <strong>Enregistré par :</strong> ";
                // line 495
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnedBy", [], "any", false, false, false, 495), "fullName", [], "any", false, false, false, 495), "html", null, true);
                yield "
                                    </div>
                                    <div class=\"col-md-4\">
                                        <strong>Méthode :</strong>
                                        ";
                // line 499
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["return"], "refundMethod", [], "any", false, false, false, 499) == "cash")) {
                    // line 500
                    yield "                                            💰 Espèces
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 501
$context["return"], "refundMethod", [], "any", false, false, false, 501) == "mobile_money")) {
                    // line 502
                    yield "                                            📱 Mobile Money
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 503
$context["return"], "refundMethod", [], "any", false, false, false, 503) == "bank_transfer")) {
                    // line 504
                    yield "                                            🏦 Virement bancaire
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 505
$context["return"], "refundMethod", [], "any", false, false, false, 505) == "wallet")) {
                    // line 506
                    yield "                                            📱 Porte-monnaie électronique
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 507
$context["return"], "refundMethod", [], "any", false, false, false, 507) == "credit_note")) {
                    // line 508
                    yield "                                            📝 Avoir / Note de crédit
                                        ";
                }
                // line 510
                yield "                                    </div>
                                </div>
                                <div class=\"mt-2\">
                                    <a href=\"";
                // line 513
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["return"], "id", [], "any", false, false, false, 513)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">
                                        <i class=\"fas fa-eye me-1\"></i> Voir le détail
                                    </a>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['return'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 520
            yield "                </div>
            </div>
            ";
        }
        // line 523
        yield "
            <!-- Bouton Nouveau retour -->
            ";
        // line 525
        $context["hasRemainingItems"] = false;
        // line 526
        yield "            ";
        $context["returnedQuantities"] = ((array_key_exists("totalReturnedQuantities", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["totalReturnedQuantities"]) || array_key_exists("totalReturnedQuantities", $context) ? $context["totalReturnedQuantities"] : (function () { throw new RuntimeError('Variable "totalReturnedQuantities" does not exist.', 526, $this->source); })()), [])) : ([]));
        // line 527
        yield "
            ";
        // line 528
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 528, $this->source); })()), "orderItems", [], "any", false, false, false, 528));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 529
            yield "                ";
            $context["alreadyReturned"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["returnedQuantities"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 529), [], "array", true, true, false, 529)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnedQuantities"]) || array_key_exists("returnedQuantities", $context) ? $context["returnedQuantities"] : (function () { throw new RuntimeError('Variable "returnedQuantities" does not exist.', 529, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 529), [], "array", false, false, false, 529), 0)) : (0));
            // line 530
            yield "                ";
            $context["remaining"] = (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 530) - (isset($context["alreadyReturned"]) || array_key_exists("alreadyReturned", $context) ? $context["alreadyReturned"] : (function () { throw new RuntimeError('Variable "alreadyReturned" does not exist.', 530, $this->source); })()));
            // line 531
            yield "                ";
            if (((isset($context["remaining"]) || array_key_exists("remaining", $context) ? $context["remaining"] : (function () { throw new RuntimeError('Variable "remaining" does not exist.', 531, $this->source); })()) > 0)) {
                // line 532
                yield "                    ";
                $context["hasRemainingItems"] = true;
                // line 533
                yield "                ";
            }
            // line 534
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 535
        yield "
            ";
        // line 536
        if ((($tmp = (isset($context["hasRemainingItems"]) || array_key_exists("hasRemainingItems", $context) ? $context["hasRemainingItems"] : (function () { throw new RuntimeError('Variable "hasRemainingItems" does not exist.', 536, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 537
            yield "                <div class=\"action-buttons\">
                    <a href=\"";
            // line 538
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_new", ["orderId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 538, $this->source); })()), "id", [], "any", false, false, false, 538)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-lg\">
                        <i class=\"fas fa-undo-alt me-2\"></i> Demander un retour
                    </a>
                </div>
            ";
        }
        // line 543
        yield "        </div>
    </div>
</div>

<!-- Modal d'impression -->
<div class=\"modal fade\" id=\"receiptModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-print me-2\"></i> Aperçu du reçu
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\" id=\"receiptContent\">
                <div class=\"text-center py-5\">
                    <div class=\"spinner-border text-primary\" role=\"status\">
                        <span class=\"visually-hidden\">Chargement...</span>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"printReceiptModalBtn\">
                    <i class=\"fas fa-print me-2\"></i> Imprimer
                </button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 575
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

        // line 576
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
\$(document).ready(function() {
    const receiptModal = new bootstrap.Modal(document.getElementById('receiptModal'));
    const receiptContent = document.getElementById('receiptContent');
    
    \$('#printReceiptBtn').click(function() {
        loadReceipt();
    });
    
    function loadReceipt() {
        receiptContent.innerHTML = '<div class=\"text-center py-5\"><div class=\"spinner-border text-primary\"></div><p class=\"mt-2\">Chargement du reçu...</p></div>';
        receiptModal.show();
        
        fetch('";
        // line 590
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_receipt_content", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 590, $this->source); })()), "id", [], "any", false, false, false, 590)]), "html", null, true);
        yield "')
            .then(response => response.text())
            .then(html => {
                receiptContent.innerHTML = html;
            })
            .catch(error => {
                receiptContent.innerHTML = '<div class=\"alert alert-danger\">Erreur lors du chargement du reçu</div>';
            });
    }
    
    \$('#printReceiptModalBtn').click(function() {
        const printContent = receiptContent.innerHTML;
        const printWindow = window.open('', '_blank', 'width=450,height=650');
        printWindow.document.write(`
            <!DOCTYPE html>
            <html>
            <head>
                <title>Reçu de vente - ";
        // line 607
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 607, $this->source); })()), "orderNumber", [], "any", false, false, false, 607), "html", null, true);
        yield "</title>
                <meta charset=\"UTF-8\">
                <style>
                    body { font-family: monospace; margin: 0; padding: 20px; width: 400px; margin: 0 auto; }
                    .receipt { text-align: center; }
                    .receipt-header { margin-bottom: 15px; }
                    .receipt-header h2 { margin: 0; font-size: 18px; }
                    .receipt-header p { margin: 5px 0; font-size: 12px; }
                    .receipt-line { border-top: 1px dashed #000; margin: 10px 0; }
                    .receipt-items { width: 100%; margin: 10px 0; font-size: 12px; }
                    .receipt-items th, .receipt-items td { text-align: left; padding: 3px 0; }
                    .receipt-items td:last-child { text-align: right; }
                    .receipt-total { font-weight: bold; margin-top: 10px; }
                    .receipt-footer { margin-top: 15px; font-size: 10px; text-align: center; }
                    @media print {
                        body { margin: 0; padding: 10px; }
                        .no-print { display: none; }
                    }
                </style>
            </head>
            <body>
                \${printContent}
                <div class=\"receipt-footer no-print\">
                    <button onclick=\"window.print()\" style=\"margin-top: 20px; padding: 8px 16px;\">Imprimer</button>
                </div>
                <script>
                    window.print();
                <\\/script>
            </body>
            </html>
        `);
        printWindow.document.close();
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
        return "sale/orders/show.html.twig";
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
        return array (  1136 => 607,  1116 => 590,  1099 => 576,  1086 => 575,  1045 => 543,  1037 => 538,  1034 => 537,  1032 => 536,  1029 => 535,  1023 => 534,  1020 => 533,  1017 => 532,  1014 => 531,  1011 => 530,  1008 => 529,  1004 => 528,  1001 => 527,  998 => 526,  996 => 525,  992 => 523,  987 => 520,  974 => 513,  969 => 510,  965 => 508,  963 => 507,  960 => 506,  958 => 505,  955 => 504,  953 => 503,  950 => 502,  948 => 501,  945 => 500,  943 => 499,  936 => 495,  930 => 492,  918 => 483,  911 => 478,  901 => 474,  895 => 471,  891 => 469,  887 => 467,  881 => 465,  879 => 464,  873 => 461,  868 => 458,  862 => 457,  854 => 456,  851 => 455,  845 => 453,  843 => 452,  839 => 451,  835 => 449,  832 => 448,  829 => 447,  826 => 446,  822 => 445,  805 => 430,  801 => 428,  799 => 427,  796 => 426,  794 => 425,  791 => 424,  789 => 423,  786 => 422,  784 => 421,  777 => 417,  770 => 413,  766 => 412,  759 => 407,  755 => 406,  748 => 402,  741 => 397,  739 => 396,  727 => 387,  720 => 382,  710 => 378,  706 => 376,  700 => 374,  695 => 372,  690 => 371,  688 => 370,  682 => 367,  676 => 363,  668 => 361,  666 => 360,  662 => 359,  659 => 358,  655 => 356,  651 => 354,  649 => 353,  644 => 350,  640 => 349,  631 => 342,  627 => 340,  623 => 338,  621 => 337,  610 => 329,  598 => 319,  589 => 313,  582 => 308,  578 => 306,  574 => 304,  572 => 303,  558 => 294,  552 => 290,  543 => 287,  534 => 286,  530 => 285,  522 => 280,  518 => 279,  515 => 278,  508 => 273,  506 => 272,  496 => 264,  494 => 263,  489 => 260,  483 => 257,  479 => 255,  477 => 254,  473 => 252,  467 => 249,  463 => 247,  461 => 246,  456 => 244,  449 => 240,  440 => 233,  434 => 231,  430 => 229,  428 => 228,  425 => 227,  423 => 226,  420 => 225,  418 => 224,  415 => 223,  413 => 222,  402 => 214,  398 => 213,  395 => 212,  389 => 208,  383 => 206,  381 => 205,  374 => 200,  368 => 197,  365 => 196,  363 => 195,  359 => 194,  349 => 187,  345 => 186,  342 => 185,  339 => 184,  337 => 183,  316 => 165,  306 => 158,  302 => 156,  294 => 151,  286 => 146,  282 => 144,  280 => 143,  273 => 139,  258 => 127,  250 => 122,  243 => 118,  234 => 112,  226 => 107,  217 => 100,  204 => 99,  103 => 8,  90 => 7,  66 => 5,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/sale/orders/show.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Détails de la commande #{{ order.orderNumber }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<style>
    .order-card {
        background: white;
        border-radius: 16px;
        border: 1px solid #e5e7eb;
        overflow: hidden;
        margin-bottom: 1.5rem;
    }
    .order-card .card-header {
        background: #f8fafc;
        border-bottom: 1px solid #e5e7eb;
        padding: 1rem 1.25rem;
    }
    .info-item {
        padding: 0.75rem 1.25rem;
        border-bottom: 1px solid #f1f5f9;
    }
    .info-item:last-child {
        border-bottom: none;
    }
    .info-label {
        font-size: 0.75rem;
        text-transform: uppercase;
        color: #64748b;
        margin-bottom: 0.25rem;
    }
    .info-value {
        font-weight: 600;
    }
    .status-badge {
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
    }
    .return-card {
        background: #fffbeb;
        border-left: 4px solid #f59e0b;
        transition: transform 0.2s;
    }
    .return-card:hover {
        transform: translateX(5px);
    }
    
    .action-buttons {
        margin-top: 1rem;
        text-align: right;
    }
    .items-table th, .items-table td {
        vertical-align: middle;
    }
    
    .quantity-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
        padding: 0.25rem 0.5rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 500;
    }
    .quantity-returned {
        background-color: #fee2e2;
        color: #dc2626;
    }
    .quantity-remaining {
        background-color: #dcfce7;
        color: #16a34a;
    }
    .quantity-total {
        background-color: #e5e7eb;
        color: #374151;
    }
    .return-items-list {
        margin-top: 0.5rem;
        padding-top: 0.5rem;
        border-top: 1px dashed #e5e7eb;
    }
    .return-item-badge {
        display: inline-block;
        background: #f3f4f6;
        padding: 0.25rem 0.5rem;
        border-radius: 12px;
        font-size: 0.7rem;
        margin: 0.2rem 0.2rem;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_orders_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-shopping-cart me-1\"></i> Ventes
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        {{ order.orderNumber }}
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-receipt me-2 text-primary\"></i>
                Commande #{{ order.orderNumber }}
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-calendar me-1\"></i>
                Créée le {{ order.createdAt|date('d/m/Y H:i') }}
            </p>
        </div>
        <div class=\"d-flex gap-2\">
            <button type=\"button\" class=\"btn btn-outline-success quick-print\" 
                    data-order-id=\"{{ order.id }}\" 
                    data-print-type=\"customer\" 
                    title=\"Impression rapide client\">
                <i class=\"fas fa-print me-1\"></i> <i class=\"fas fa-bolt fa-xs\"></i> Imprimer
            </button>
            
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-outline-primary dropdown-toggle\" data-bs-toggle=\"dropdown\">
                    <i class=\"fas fa-print me-1\"></i> Autres tickets
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                        <a class=\"dropdown-item print-customer\" href=\"#\" data-order-id=\"{{ order.id }}\" data-print-type=\"customer\">
                            <i class=\"fas fa-receipt me-2\"></i> Ticket client
                        </a>
                    </li>
                    {% if isRestaurant %}
                    <li><hr class=\"dropdown-divider\"></li>
                    <li>
                        <a class=\"dropdown-item print-kitchen\" href=\"#\" data-order-id=\"{{ order.id }}\" data-print-type=\"kitchen\">
                            <i class=\"fas fa-utensils me-2\"></i> Ticket cuisine
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item print-delivery\" href=\"#\" data-order-id=\"{{ order.id }}\" data-print-type=\"delivery\">
                            <i class=\"fas fa-truck me-2\"></i> Ticket livraison
                        </a>
                    </li>
                    {% endif %}
                    <li><hr class=\"dropdown-divider\"></li>
                    <li>
                        <a class=\"dropdown-item print-cash\" href=\"#\" data-order-id=\"{{ order.id }}\" data-print-type=\"cash\">
                            <i class=\"fas fa-money-bill-wave me-2\"></i> Ticket caisse
                        </a>
                    </li>
                </ul>
            </div>
            
            <a href=\"{{ path('app_orders_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Colonne gauche - Informations commande -->
        <div class=\"col-lg-4\">
            <div class=\"order-card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-info-circle me-2\"></i> Informations commande</h5>
                </div>
                
                <!-- Statut -->
                <div class=\"info-item\">
                    <div class=\"info-label\">Statut</div>
                    <div class=\"info-value\">
                        {% set statusColors = order.getStatusColors() %}
                        {% set statusLabels = order.getStatusLabels() %}
                        
                        <span class=\"status-badge bg-{{ statusColors[order.status]|default('secondary') }} text-white\">
                            {{ statusLabels[order.status]|default(order.status) }}
                        </span>
                    </div>
                </div>
                
                <div class=\"info-item\">
                    <div class=\"info-label\">Client</div>
                    <div class=\"info-value\">{{ order.customerName ?: 'Non renseigné' }}</div>
                    {% if order.customerPhone %}
                        <div class=\"small text-muted mt-1\">
                            <i class=\"fas fa-phone me-1\"></i> {{ order.customerPhone }}
                        </div>
                    {% endif %}
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Caissier</div>
                    <div class=\"info-value\">
                        <div class=\"d-flex align-items-center\">
                            {% if order.user.photo %}
                                <img src=\"{{ asset('uploads/users/' ~ order.user.photo) }}\" class=\"rounded-circle me-2\" width=\"32\" height=\"32\">
                            {% else %}
                                <div class=\"bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2\" style=\"width: 32px; height: 32px;\">
                                    <i class=\"fas fa-user text-secondary\"></i>
                                </div>
                            {% endif %}
                            <div>
                                <strong>{{ order.user.fullName|default(order.user.email) }}</strong>
                                <br><small class=\"text-muted\">{{ order.user.roles|first|replace({'ROLE_': ''}) }}</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Mode de paiement</div>
                    <div class=\"info-value\">
                        {% if order.paymentMethod == 'cash' %}
                            <i class=\"fas fa-money-bill-wave text-success me-1\"></i> Espèces
                        {% elseif order.paymentMethod == 'card' %}
                            <i class=\"fas fa-credit-card text-primary me-1\"></i> Carte bancaire
                        {% elseif order.paymentMethod == 'mobile_money' %}
                            <i class=\"fas fa-mobile-alt text-info me-1\"></i> Mobile Money
                        {% elseif order.paymentMethod == 'feda_pay' %}
                            <i class=\"fas fa-credit-card text-primary me-1\"></i> FedaPay
                        {% else %}
                            {{ order.paymentMethod|capitalize }}
                        {% endif %}
                    </div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Montants</div>
                    <div class=\"info-value\">
                        <div class=\"d-flex justify-content-between\">
                            <span>Total :</span>
                            <strong class=\"text-primary\">{{ order.totalAmount|number_format(0, ',', ' ') }} FCFA</strong>
                        </div>
                        <div class=\"d-flex justify-content-between mt-1\">
                            <span>Payé :</span>
                            <span>{{ order.amountPaid|number_format(0, ',', ' ') }} FCFA</span>
                        </div>
                        {% if order.changeAmount > 0 %}
                            <div class=\"d-flex justify-content-between mt-1\">
                                <span>Monnaie :</span>
                                <span class=\"text-success\">{{ order.changeAmount|number_format(0, ',', ' ') }} FCFA</span>
                            </div>
                        {% endif %}
                    </div>
                </div>
                {% if order.notes %}
                <div class=\"info-item\">
                    <div class=\"info-label\">Notes</div>
                    <div class=\"info-value text-muted\">{{ order.notes|nl2br }}</div>
                </div>
                {% endif %}
            </div>

            <!-- ==================== SECTION MODIFICATION STATUT ==================== -->
            {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_ADMIN') %}
            <div class=\"order-card mt-3\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-edit me-2 text-primary\"></i>
                        Modifier le statut
                    </h5>
                </div>
                <div class=\"p-3\">
                    {% if order.status == 'completed' and order.customerEmail is empty %}
                        <div class=\"alert alert-info mb-3\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            Cette commande est une <strong>vente en caisse</strong> et est déjà terminée.
                        </div>
                    {% endif %}
                    
                    <form method=\"POST\" action=\"{{ path('app_orders_update_status', {id: order.id}) }}\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('update_order_status') }}\">
                        <div class=\"row g-3\">
                            <div class=\"col-12\">
                                <label class=\"form-label fw-bold small\">Nouveau statut</label>
                                <select name=\"status\" class=\"form-select form-select-lg\">
                                    {% for statusKey, statusLabel in order.getStatusLabels() %}
                                        <option value=\"{{ statusKey }}\" {% if order.status == statusKey %}selected{% endif %}>
                                            {{ statusLabel }}
                                        </option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"col-12\">
                                <button type=\"submit\" class=\"btn btn-primary w-100 py-2\" 
                                        {% if order.status == 'completed' and order.customerEmail is empty %}disabled{% endif %}>
                                    <i class=\"fas fa-save me-2\"></i> Mettre à jour le statut
                                </button>
                            </div>
                        </div>
                    </form>
                    
                    <div class=\"text-muted small mt-3\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        {% if order.customerEmail %}
                            Le client recevra une notification par email lors du changement de statut.
                        {% else %}
                            <span class=\"text-warning\">⚠️ Aucun email client disponible pour cette commande (vente en caisse).</span>
                        {% endif %}
                    </div>
                    
                    <div class=\"mt-2\">
                        <span class=\"badge bg-light text-dark\">
                            <i class=\"fas fa-clock me-1\"></i>
                            Dernière mise à jour : {{ order.updatedAt|date('d/m/Y H:i') }}
                        </span>
                    </div>
                </div>
            </div>
            {% endif %}
        </div>

        <!-- Colonne droite - Articles et retours -->
        <div class=\"col-lg-8\">
            <!-- Articles commandés -->
            <div class=\"order-card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-boxes me-2\"></i>
                        Articles commandés
                        <span class=\"badge bg-secondary ms-2\">{{ order.orderItems|length }} article(s)</span>
                    </h5>
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0 items-table\">
                        <thead class=\"table-light\">
                            <tr>
                                <th>
                                    {% if companyType == 'restaurant' %}
                                        Article
                                    {% else %}
                                        Produit
                                    {% endif %}
                                </th>
                                <th class=\"text-center\">Quantité</th>
                                <th class=\"text-center\">Prix unitaire</th>
                                <th class=\"text-center\">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for item in order.orderItems %}
                                <tr>
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            {% if isRestaurant and item.recipe %}
                                                <i class=\"fas fa-utensils text-primary me-2 fa-fw\"></i>
                                            {% else %}
                                                <i class=\"fas fa-box text-success me-2 fa-fw\"></i>
                                            {% endif %}
                                            <div>
                                                <strong>{{ item.productName }}</strong>
                                                {% if item.promotionName %}
                                                    <br><small class=\"text-primary\"><i class=\"fas fa-tag me-1\"></i>{{ item.promotionName }} (-{{ item.promotionDiscountPercentage }}%)</small>
                                                {% endif %}
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge bg-secondary\">{{ item.quantity }}</span>
                                    </td>
                                    <td class=\"text-center\">
                                        {% if item.originalUnitPrice %}
                                            <span class=\"text-muted text-decoration-line-through\">{{ item.originalUnitPrice|number_format(0, ',', ' ') }} FCFA</span><br>
                                            <span class=\"text-primary\">{{ item.unitPrice|number_format(0, ',', ' ') }} FCFA</span>
                                        {% else %}
                                            {{ item.unitPrice|number_format(0, ',', ' ') }} FCFA
                                        {% endif %}
                                    </td>
                                    <td class=\"text-center\">
                                        <strong>{{ item.totalPrice|number_format(0, ',', ' ') }} FCFA</strong>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                        <tfoot class=\"table-light\">
                            <tr>
                                <td colspan=\"3\" class=\"text-end fw-bold\">Total :</td>
                                <td class=\"text-center fw-bold text-primary h5\">
                                    {{ order.totalAmount|number_format(0, ',', ' ') }} FCFA
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <!-- Retours effectués -->
            {% if returns is defined and returns|length > 0 %}
            <div class=\"order-card mt-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-undo-alt me-2 text-warning\"></i>
                        Retours effectués
                        <span class=\"badge bg-warning ms-2\">{{ returns|length }} retour(s)</span>
                    </h5>
                </div>
                <div class=\"p-3\">
                    {% for return in returns %}
                        <div class=\"return-card card mb-3\">
                            <div class=\"card-body\">
                                <div class=\"d-flex justify-content-between align-items-start flex-wrap gap-2\">
                                    <div>
                                        <h6 class=\"mb-1\">
                                            <a href=\"{{ path('returns_show', {'id': return.id}) }}\" class=\"text-decoration-none\">
                                                <i class=\"fas fa-receipt me-1\"></i> {{ return.returnNumber }}
                                            </a>
                                        </h6>
                                        <div class=\"small text-muted\">
                                            <i class=\"fas fa-calendar me-1\"></i> {{ return.createdAt|date('d/m/Y H:i') }}
                                        </div>
                                    </div>
                                    <div>
                                        {% if return.status == 'pending' %}
                                            <span class=\"badge bg-warning\">⏳ En attente</span>
                                        {% elseif return.status == 'approved' %}
                                            <span class=\"badge bg-primary\">✓ Approuvé</span>
                                        {% elseif return.status == 'completed' %}
                                            <span class=\"badge bg-success\">✅ Remboursé</span>
                                        {% elseif return.status == 'rejected' %}
                                            <span class=\"badge bg-danger\">❌ Rejeté</span>
                                        {% endif %}
                                    </div>
                                </div>
                                
                                <div class=\"mt-3\">
                                    <table class=\"table table-sm table-bordered mb-0\">
                                        <thead class=\"table-light\">
                                            <tr>
                                                <th>Produit</th>
                                                <th class=\"text-center\">Quantité retournée</th>
                                                <th class=\"text-center\">Quantité restante</th>
                                                <th class=\"text-center\">Prix unitaire</th>
                                                <th class=\"text-center\">Total remboursé</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {% for returnItem in return.returnItems %}
                                                {% set originalQty = returnItem.originalOrderItem.quantity %}
                                                {% set returnedQty = returnItem.quantityReturned %}
                                                {% set remainingQty = originalQty - returnedQty %}
                                                <tr>
                                                    <td>
                                                        <strong>{{ returnItem.productName }}</strong>
                                                        {% if returnItem.promotionName %}
                                                            <br><small class=\"text-primary\"><i class=\"fas fa-tag\"></i> {{ returnItem.promotionName }}</small>
                                                        {% endif %}
                                                        <br><small class=\"text-muted\">
                                                            <i class=\"fas {% if returnItem.itemType == 'recipe' %}fa-utensils{% else %}fa-box{% endif %} me-1\"></i>
                                                            {% if returnItem.itemType == 'recipe' %}Menu{% else %}Produit{% endif %}
                                                        </small>
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <span class=\"badge bg-danger\">{{ returnedQty }}</span>
                                                    </td>
                                                    <td class=\"text-center\">
                                                        {% if remainingQty > 0 %}
                                                            <span class=\"badge bg-success\">{{ remainingQty }}</span>
                                                        {% else %}
                                                            <span class=\"badge bg-secondary\">0</span>
                                                        {% endif %}
                                                    </td>
                                                    <td class=\"text-center\">
                                                        {{ returnItem.unitPriceAtSale|number_format(0, ',', ' ') }} FCFA
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <strong class=\"text-primary\">{{ returnItem.totalRefund|number_format(0, ',', ' ') }} FCFA</strong>
                                                    </td>
                                                </tr>
                                            {% endfor %}
                                        </tbody>
                                        <tfoot class=\"table-light\">
                                            <tr>
                                                <td colspan=\"4\" class=\"text-end fw-bold\">Total remboursé :</td>
                                                <td class=\"text-center fw-bold text-primary h5\">
                                                    {{ return.totalRefundAmount|number_format(0, ',', ' ') }} FCFA
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                
                                <div class=\"row mt-2 small\">
                                    <div class=\"col-md-4\">
                                        <strong>Motif :</strong> {{ reasons[return.reason]|default(return.reason) }}
                                    </div>
                                    <div class=\"col-md-4\">
                                        <strong>Enregistré par :</strong> {{ return.returnedBy.fullName }}
                                    </div>
                                    <div class=\"col-md-4\">
                                        <strong>Méthode :</strong>
                                        {% if return.refundMethod == 'cash' %}
                                            💰 Espèces
                                        {% elseif return.refundMethod == 'mobile_money' %}
                                            📱 Mobile Money
                                        {% elseif return.refundMethod == 'bank_transfer' %}
                                            🏦 Virement bancaire
                                        {% elseif return.refundMethod == 'wallet' %}
                                            📱 Porte-monnaie électronique
                                        {% elseif return.refundMethod == 'credit_note' %}
                                            📝 Avoir / Note de crédit
                                        {% endif %}
                                    </div>
                                </div>
                                <div class=\"mt-2\">
                                    <a href=\"{{ path('returns_show', {'id': return.id}) }}\" class=\"btn btn-sm btn-outline-primary\">
                                        <i class=\"fas fa-eye me-1\"></i> Voir le détail
                                    </a>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
            {% endif %}

            <!-- Bouton Nouveau retour -->
            {% set hasRemainingItems = false %}
            {% set returnedQuantities = totalReturnedQuantities|default([]) %}

            {% for item in order.orderItems %}
                {% set alreadyReturned = returnedQuantities[item.id]|default(0) %}
                {% set remaining = item.quantity - alreadyReturned %}
                {% if remaining > 0 %}
                    {% set hasRemainingItems = true %}
                {% endif %}
            {% endfor %}

            {% if hasRemainingItems %}
                <div class=\"action-buttons\">
                    <a href=\"{{ path('returns_new', {'orderId': order.id}) }}\" class=\"btn btn-primary btn-lg\">
                        <i class=\"fas fa-undo-alt me-2\"></i> Demander un retour
                    </a>
                </div>
            {% endif %}
        </div>
    </div>
</div>

<!-- Modal d'impression -->
<div class=\"modal fade\" id=\"receiptModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-print me-2\"></i> Aperçu du reçu
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\" id=\"receiptContent\">
                <div class=\"text-center py-5\">
                    <div class=\"spinner-border text-primary\" role=\"status\">
                        <span class=\"visually-hidden\">Chargement...</span>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"printReceiptModalBtn\">
                    <i class=\"fas fa-print me-2\"></i> Imprimer
                </button>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
\$(document).ready(function() {
    const receiptModal = new bootstrap.Modal(document.getElementById('receiptModal'));
    const receiptContent = document.getElementById('receiptContent');
    
    \$('#printReceiptBtn').click(function() {
        loadReceipt();
    });
    
    function loadReceipt() {
        receiptContent.innerHTML = '<div class=\"text-center py-5\"><div class=\"spinner-border text-primary\"></div><p class=\"mt-2\">Chargement du reçu...</p></div>';
        receiptModal.show();
        
        fetch('{{ path(\"app_orders_receipt_content\", {\"id\": order.id}) }}')
            .then(response => response.text())
            .then(html => {
                receiptContent.innerHTML = html;
            })
            .catch(error => {
                receiptContent.innerHTML = '<div class=\"alert alert-danger\">Erreur lors du chargement du reçu</div>';
            });
    }
    
    \$('#printReceiptModalBtn').click(function() {
        const printContent = receiptContent.innerHTML;
        const printWindow = window.open('', '_blank', 'width=450,height=650');
        printWindow.document.write(`
            <!DOCTYPE html>
            <html>
            <head>
                <title>Reçu de vente - {{ order.orderNumber }}</title>
                <meta charset=\"UTF-8\">
                <style>
                    body { font-family: monospace; margin: 0; padding: 20px; width: 400px; margin: 0 auto; }
                    .receipt { text-align: center; }
                    .receipt-header { margin-bottom: 15px; }
                    .receipt-header h2 { margin: 0; font-size: 18px; }
                    .receipt-header p { margin: 5px 0; font-size: 12px; }
                    .receipt-line { border-top: 1px dashed #000; margin: 10px 0; }
                    .receipt-items { width: 100%; margin: 10px 0; font-size: 12px; }
                    .receipt-items th, .receipt-items td { text-align: left; padding: 3px 0; }
                    .receipt-items td:last-child { text-align: right; }
                    .receipt-total { font-weight: bold; margin-top: 10px; }
                    .receipt-footer { margin-top: 15px; font-size: 10px; text-align: center; }
                    @media print {
                        body { margin: 0; padding: 10px; }
                        .no-print { display: none; }
                    }
                </style>
            </head>
            <body>
                \${printContent}
                <div class=\"receipt-footer no-print\">
                    <button onclick=\"window.print()\" style=\"margin-top: 20px; padding: 8px 16px;\">Imprimer</button>
                </div>
                <script>
                    window.print();
                <\\/script>
            </body>
            </html>
        `);
        printWindow.document.close();
    });
});
</script>
{% endblock %}", "sale/orders/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\sale\\orders\\show.html.twig");
    }
}
