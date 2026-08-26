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
class __TwigTemplate_4702a6877492f1af53b6b457acda71d6 extends Template
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

    /* ✅ RESPONSIVE */
    @media (max-width: 992px) {
        .container-fluid {
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
        }
        
        .d-flex.justify-content-between.align-items-center {
            flex-direction: column;
            align-items: flex-start !important;
            gap: 0.75rem !important;
        }
        
        .btn-group {
            flex-wrap: wrap;
        }
    }

    @media (max-width: 768px) {
        .container-fluid {
            padding-left: 0.5rem !important;
            padding-right: 0.5rem !important;
        }
        
        /* En-tête en colonne */
        .d-flex.justify-content-between.align-items-center {
            flex-direction: column;
            align-items: flex-start !important;
            gap: 0.5rem !important;
            width: 100%;
        }
        
        .d-flex.justify-content-between.align-items-center > div:first-child {
            width: 100%;
        }
        
        .d-flex.gap-2 {
            width: 100%;
            flex-wrap: wrap;
        }
        
        .d-flex.gap-2 > * {
            flex: 1 1 auto;
            min-width: calc(50% - 0.25rem);
        }
        
        /* Bouton \"Imprimer\" et dropdown en colonne sur mobile */
        .btn-group {
            display: flex;
            flex-direction: column;
            width: 100%;
        }
        .btn-group .btn {
            border-radius: 0.375rem !important;
            margin-bottom: 0.25rem;
        }
        .btn-group .btn:last-child {
            margin-bottom: 0;
        }
        .btn-group .dropdown-toggle {
            border-radius: 0.375rem !important;
        }
        .btn-group .dropdown-menu {
            position: static !important;
            transform: none !important;
            width: 100%;
            margin-top: 0.25rem;
        }
        
        /* Bouton Quick print */
        .btn.outline-success.quick-print {
            flex: 1 1 100%;
        }
        
        /* Retour en colonne */
        .d-flex.gap-2 .btn-outline-secondary {
            flex: 1 1 100%;
        }
        
        /* Informations commande en colonne */
        .info-item {
            padding: 0.5rem 0.75rem;
        }
        
        .info-value .d-flex.align-items-center {
            flex-wrap: wrap;
        }
        
        /* Tableau des articles - version scroll horizontale */
        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        
        .items-table th, 
        .items-table td {
            font-size: 0.8rem;
            padding: 0.4rem 0.5rem !important;
        }
        
        /* Retours */
        .return-card .card-body {
            padding: 0.75rem !important;
        }
        
        .return-card .row.mt-2 .col-md-4 {
            margin-bottom: 0.25rem;
        }
        
        /* Montants */
        .h5 {
            font-size: 1rem !important;
        }
        
        /* Action buttons */
        .action-buttons {
            text-align: center;
        }
        .action-buttons .btn-lg {
            width: 100%;
            font-size: 0.9rem;
            padding: 0.5rem 1rem;
        }
        
        /* Modification statut */
        .order-card .p-3 {
            padding: 0.75rem !important;
        }
        .order-card .p-3 .row .col-12 {
            margin-bottom: 0.5rem;
        }
        
        /* Breadcrumb */
        .breadcrumb {
            font-size: 0.7rem;
        }
        .breadcrumb-item + .breadcrumb-item::before {
            padding-right: 0.3rem;
            padding-left: 0.3rem;
        }
        
        h1.h3 {
            font-size: 1.1rem !important;
            word-break: break-word;
        }
    }

    @media (max-width: 480px) {
        .container-fluid {
            padding-left: 0.25rem !important;
            padding-right: 0.25rem !important;
        }
        
        .d-flex.gap-2 > * {
            min-width: 100%;
            flex: 0 0 100%;
        }
        
        .btn-group .btn {
            font-size: 0.75rem;
            padding: 0.3rem 0.5rem;
        }
        
        .btn-group .dropdown-item {
            font-size: 0.75rem;
            padding: 0.3rem 0.75rem;
        }
        
        .items-table th, 
        .items-table td {
            font-size: 0.7rem;
            padding: 0.3rem 0.4rem !important;
        }
        
        .order-card .card-header {
            padding: 0.5rem 0.75rem !important;
        }
        .order-card .card-header h5 {
            font-size: 0.9rem;
        }
        
        .info-label {
            font-size: 0.65rem;
        }
        .info-value {
            font-size: 0.85rem;
        }
        
        .status-badge {
            font-size: 0.65rem;
            padding: 0.15rem 0.5rem;
        }
        
        .return-card .table-sm th,
        .return-card .table-sm td {
            font-size: 0.65rem;
            padding: 0.2rem 0.3rem !important;
        }
        
        h1.h3 {
            font-size: 0.95rem !important;
        }
        
        .text-muted.mt-2 {
            font-size: 0.75rem;
        }
        
        .action-buttons .btn-lg {
            font-size: 0.8rem;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 311
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

        // line 312
        yield "<div class=\"container-fluid py-3 py-md-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 319
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-shopping-cart me-1\"></i> Ventes
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        ";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 324, $this->source); })()), "orderNumber", [], "any", false, false, false, 324), "html", null, true);
        yield "
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-receipt me-2 text-primary\"></i>
                Commande #";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 330, $this->source); })()), "orderNumber", [], "any", false, false, false, 330), "html", null, true);
        yield "
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-calendar me-1\"></i>
                Créée le ";
        // line 334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 334, $this->source); })()), "createdAt", [], "any", false, false, false, 334), "d/m/Y H:i"), "html", null, true);
        yield "
            </p>
        </div>
        <div class=\"d-flex flex-wrap gap-2 w-100 w-md-auto\">
            <!-- ✅ Bouton Impression rapide -->
            <button type=\"button\" class=\"btn btn-outline-success quick-print flex-grow-1 flex-md-grow-0\" 
                    data-order-id=\"";
        // line 340
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 340, $this->source); })()), "id", [], "any", false, false, false, 340), "html", null, true);
        yield "\" 
                    data-print-type=\"customer\" 
                    title=\"Impression rapide client\">
                <i class=\"fas fa-print me-1\"></i> <i class=\"fas fa-bolt fa-xs\"></i> 
                <span class=\"d-none d-sm-inline\">Imprimer</span>
            </button>
            
            <!-- ✅ Dropdown Autres tickets -->
            <div class=\"btn-group w-100 w-md-auto\">
                <button type=\"button\" class=\"btn btn-outline-primary dropdown-toggle flex-grow-1\" data-bs-toggle=\"dropdown\">
                    <i class=\"fas fa-print me-1\"></i> <span class=\"d-none d-sm-inline\">Autres tickets</span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end w-100 w-md-auto\">
                    <li>
                        <a class=\"dropdown-item print-customer\" href=\"#\" data-order-id=\"";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 354, $this->source); })()), "id", [], "any", false, false, false, 354), "html", null, true);
        yield "\" data-print-type=\"customer\">
                            <i class=\"fas fa-receipt me-2\"></i> Ticket client
                        </a>
                    </li>
                    ";
        // line 358
        if ((($tmp = (isset($context["isRestaurant"]) || array_key_exists("isRestaurant", $context) ? $context["isRestaurant"] : (function () { throw new RuntimeError('Variable "isRestaurant" does not exist.', 358, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 359
            yield "                    <li><hr class=\"dropdown-divider\"></li>
                    <li>
                        <a class=\"dropdown-item print-kitchen\" href=\"#\" data-order-id=\"";
            // line 361
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 361, $this->source); })()), "id", [], "any", false, false, false, 361), "html", null, true);
            yield "\" data-print-type=\"kitchen\">
                            <i class=\"fas fa-utensils me-2\"></i> Ticket cuisine
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item print-delivery\" href=\"#\" data-order-id=\"";
            // line 366
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 366, $this->source); })()), "id", [], "any", false, false, false, 366), "html", null, true);
            yield "\" data-print-type=\"delivery\">
                            <i class=\"fas fa-truck me-2\"></i> Ticket livraison
                        </a>
                    </li>
                    ";
        }
        // line 371
        yield "                    <li><hr class=\"dropdown-divider\"></li>
                    <li>
                        <a class=\"dropdown-item print-cash\" href=\"#\" data-order-id=\"";
        // line 373
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 373, $this->source); })()), "id", [], "any", false, false, false, 373), "html", null, true);
        yield "\" data-print-type=\"cash\">
                            <i class=\"fas fa-money-bill-wave me-2\"></i> Ticket caisse
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- ✅ Bouton Retour -->
            <a href=\"";
        // line 381
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index");
        yield "\" class=\"btn btn-outline-secondary flex-grow-1 flex-md-grow-0\">
                <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour</span>
            </a>
        </div>
    </div>

    <div class=\"row g-3 g-md-4\">
        <!-- Colonne gauche - Informations commande -->
        <div class=\"col-12 col-lg-4\">
            <div class=\"order-card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-info-circle me-2\"></i> Informations commande</h5>
                </div>
                
                <!-- Statut -->
                <div class=\"info-item\">
                    <div class=\"info-label\">Statut</div>
                    <div class=\"info-value\">
                        ";
        // line 399
        $context["statusColors"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 399, $this->source); })()), "getStatusColors", [], "method", false, false, false, 399);
        // line 400
        yield "                        ";
        $context["statusLabels"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 400, $this->source); })()), "getStatusLabels", [], "method", false, false, false, 400);
        // line 401
        yield "                        
                        <span class=\"status-badge bg-";
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["statusColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 402, $this->source); })()), "status", [], "any", false, false, false, 402), [], "array", true, true, false, 402)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusColors"]) || array_key_exists("statusColors", $context) ? $context["statusColors"] : (function () { throw new RuntimeError('Variable "statusColors" does not exist.', 402, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 402, $this->source); })()), "status", [], "any", false, false, false, 402), [], "array", false, false, false, 402), "secondary")) : ("secondary")), "html", null, true);
        yield " text-white\">
                            ";
        // line 403
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["statusLabels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 403, $this->source); })()), "status", [], "any", false, false, false, 403), [], "array", true, true, false, 403)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusLabels"]) || array_key_exists("statusLabels", $context) ? $context["statusLabels"] : (function () { throw new RuntimeError('Variable "statusLabels" does not exist.', 403, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 403, $this->source); })()), "status", [], "any", false, false, false, 403), [], "array", false, false, false, 403), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 403, $this->source); })()), "status", [], "any", false, false, false, 403))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 403, $this->source); })()), "status", [], "any", false, false, false, 403))), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>
                
                <div class=\"info-item\">
                    <div class=\"info-label\">Client</div>
                    <div class=\"info-value\">";
        // line 410
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 410, $this->source); })()), "customerName", [], "any", false, false, false, 410)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 410, $this->source); })()), "customerName", [], "any", false, false, false, 410), "html", null, true)) : ("Non renseigné"));
        yield "</div>
                    ";
        // line 411
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 411, $this->source); })()), "customerPhone", [], "any", false, false, false, 411)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 412
            yield "                        <div class=\"small text-muted mt-1\">
                            <i class=\"fas fa-phone me-1\"></i> ";
            // line 413
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 413, $this->source); })()), "customerPhone", [], "any", false, false, false, 413), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 416
        yield "                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Caissier</div>
                    <div class=\"info-value\">
                        <div class=\"d-flex align-items-center\">
                            ";
        // line 421
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 421, $this->source); })()), "user", [], "any", false, false, false, 421), "photo", [], "any", false, false, false, 421)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 422
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 422, $this->source); })()), "user", [], "any", false, false, false, 422), "photo", [], "any", false, false, false, 422))), "html", null, true);
            yield "\" class=\"rounded-circle me-2\" width=\"32\" height=\"32\">
                            ";
        } else {
            // line 424
            yield "                                <div class=\"bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2\" style=\"width: 32px; height: 32px;\">
                                    <i class=\"fas fa-user text-secondary\"></i>
                                </div>
                            ";
        }
        // line 428
        yield "                            <div>
                                <strong>";
        // line 429
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, true, false, 429), "fullName", [], "any", true, true, false, 429)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 429, $this->source); })()), "user", [], "any", false, false, false, 429), "fullName", [], "any", false, false, false, 429), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 429, $this->source); })()), "user", [], "any", false, false, false, 429), "email", [], "any", false, false, false, 429))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 429, $this->source); })()), "user", [], "any", false, false, false, 429), "email", [], "any", false, false, false, 429))), "html", null, true);
        yield "</strong>
                                <br><small class=\"text-muted\">";
        // line 430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 430, $this->source); })()), "user", [], "any", false, false, false, 430), "roles", [], "any", false, false, false, 430)), ["ROLE_" => ""]), "html", null, true);
        yield "</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Mode de paiement</div>
                    <div class=\"info-value\">
                        ";
        // line 438
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 438, $this->source); })()), "paymentMethod", [], "any", false, false, false, 438) == "cash")) {
            // line 439
            yield "                            <i class=\"fas fa-money-bill-wave text-success me-1\"></i> Espèces
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 440
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 440, $this->source); })()), "paymentMethod", [], "any", false, false, false, 440) == "card")) {
            // line 441
            yield "                            <i class=\"fas fa-credit-card text-primary me-1\"></i> Carte bancaire
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 442
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 442, $this->source); })()), "paymentMethod", [], "any", false, false, false, 442) == "mobile_money")) {
            // line 443
            yield "                            <i class=\"fas fa-mobile-alt text-info me-1\"></i> Mobile Money
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 444
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 444, $this->source); })()), "paymentMethod", [], "any", false, false, false, 444) == "feda_pay")) {
            // line 445
            yield "                            <i class=\"fas fa-credit-card text-primary me-1\"></i> FedaPay
                        ";
        } else {
            // line 447
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 447, $this->source); })()), "paymentMethod", [], "any", false, false, false, 447)), "html", null, true);
            yield "
                        ";
        }
        // line 449
        yield "                    </div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Montants</div>
                    <div class=\"info-value\">
                        <div class=\"d-flex justify-content-between\">
                            <span>Total :</span>
                            <strong class=\"text-primary\">";
        // line 456
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 456, $this->source); })()), "totalAmount", [], "any", false, false, false, 456), 0, ",", " "), "html", null, true);
        yield " FCFA</strong>
                        </div>
                        <div class=\"d-flex justify-content-between mt-1\">
                            <span>Payé :</span>
                            <span>";
        // line 460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 460, $this->source); })()), "amountPaid", [], "any", false, false, false, 460), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
                        </div>
                        ";
        // line 462
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 462, $this->source); })()), "changeAmount", [], "any", false, false, false, 462) > 0)) {
            // line 463
            yield "                            <div class=\"d-flex justify-content-between mt-1\">
                                <span>Monnaie :</span>
                                <span class=\"text-success\">";
            // line 465
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 465, $this->source); })()), "changeAmount", [], "any", false, false, false, 465), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
                            </div>
                        ";
        }
        // line 468
        yield "                    </div>
                </div>
                ";
        // line 470
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 470, $this->source); })()), "notes", [], "any", false, false, false, 470)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 471
            yield "                <div class=\"info-item\">
                    <div class=\"info-label\">Notes</div>
                    <div class=\"info-value text-muted\">";
            // line 473
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 473, $this->source); })()), "notes", [], "any", false, false, false, 473), "html", null, true));
            yield "</div>
                </div>
                ";
        }
        // line 476
        yield "            </div>

            <!-- ==================== SECTION MODIFICATION STATUT ==================== -->
            ";
        // line 479
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 480
            yield "            <div class=\"order-card mt-3\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-edit me-2 text-primary\"></i>
                        Modifier le statut
                    </h5>
                </div>
                <div class=\"p-3\">
                    ";
            // line 488
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 488, $this->source); })()), "status", [], "any", false, false, false, 488) == "completed") && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 488, $this->source); })()), "customerEmail", [], "any", false, false, false, 488)))) {
                // line 489
                yield "                        <div class=\"alert alert-info mb-3\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            Cette commande est une <strong>vente en caisse</strong> et est déjà terminée.
                        </div>
                    ";
            }
            // line 494
            yield "                    
                    <form method=\"POST\" action=\"";
            // line 495
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_update_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 495, $this->source); })()), "id", [], "any", false, false, false, 495)]), "html", null, true);
            yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 496
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("update_order_status"), "html", null, true);
            yield "\">
                        <div class=\"row g-3\">
                            <div class=\"col-12\">
                                <label class=\"form-label fw-bold small\">Nouveau statut</label>
                                <select name=\"status\" class=\"form-select\">
                                    ";
            // line 501
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 501, $this->source); })()), "getStatusLabels", [], "method", false, false, false, 501));
            foreach ($context['_seq'] as $context["statusKey"] => $context["statusLabel"]) {
                // line 502
                yield "                                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusKey"], "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 502, $this->source); })()), "status", [], "any", false, false, false, 502) == $context["statusKey"])) {
                    yield "selected";
                }
                yield ">
                                            ";
                // line 503
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusLabel"], "html", null, true);
                yield "
                                        </option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['statusKey'], $context['statusLabel'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 506
            yield "                                </select>
                            </div>
                            <div class=\"col-12\">
                                <button type=\"submit\" class=\"btn btn-primary w-100 py-2\" 
                                        ";
            // line 510
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 510, $this->source); })()), "status", [], "any", false, false, false, 510) == "completed") && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 510, $this->source); })()), "customerEmail", [], "any", false, false, false, 510)))) {
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
            // line 519
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 519, $this->source); })()), "customerEmail", [], "any", false, false, false, 519)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 520
                yield "                            Le client recevra une notification par email lors du changement de statut.
                        ";
            } else {
                // line 522
                yield "                            <span class=\"text-warning\">⚠️ Aucun email client disponible pour cette commande (vente en caisse).</span>
                        ";
            }
            // line 524
            yield "                    </div>
                    
                    <div class=\"mt-2\">
                        <span class=\"badge bg-light text-dark\">
                            <i class=\"fas fa-clock me-1\"></i>
                            Dernière mise à jour : ";
            // line 529
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 529, $this->source); })()), "updatedAt", [], "any", false, false, false, 529), "d/m/Y H:i"), "html", null, true);
            yield "
                        </span>
                    </div>
                </div>
            </div>
            ";
        }
        // line 535
        yield "        </div>

        <!-- Colonne droite - Articles et retours -->
        <div class=\"col-12 col-lg-8\">
            <!-- Articles commandés -->
            <div class=\"order-card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-boxes me-2\"></i>
                        <span class=\"d-none d-sm-inline\">Articles commandés</span>
                        <span class=\"d-inline d-sm-none\">Articles</span>
                        <span class=\"badge bg-secondary ms-2\">";
        // line 546
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 546, $this->source); })()), "orderItems", [], "any", false, false, false, 546)), "html", null, true);
        yield "</span>
                    </h5>
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0 items-table\">
                        <thead class=\"table-light\">
                            <tr>
                                <th>
                                    ";
        // line 554
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 554, $this->source); })()) == "restaurant")) {
            // line 555
            yield "                                        Article
                                    ";
        } else {
            // line 557
            yield "                                        Produit
                                    ";
        }
        // line 559
        yield "                                </th>
                                <th class=\"text-center\">Qté</th>
                                <th class=\"text-center\">Prix unit.</th>
                                <th class=\"text-center\">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 566
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 566, $this->source); })()), "orderItems", [], "any", false, false, false, 566));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 567
            yield "                                <tr>
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            ";
            // line 570
            if (((isset($context["isRestaurant"]) || array_key_exists("isRestaurant", $context) ? $context["isRestaurant"] : (function () { throw new RuntimeError('Variable "isRestaurant" does not exist.', 570, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "recipe", [], "any", false, false, false, 570))) {
                // line 571
                yield "                                                <i class=\"fas fa-utensils text-primary me-2 fa-fw\"></i>
                                            ";
            } else {
                // line 573
                yield "                                                <i class=\"fas fa-box text-success me-2 fa-fw\"></i>
                                            ";
            }
            // line 575
            yield "                                            <div>
                                                <strong>";
            // line 576
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 576)), "truncate", [25], "method", false, false, false, 576), "html", null, true);
            yield "</strong>
                                                ";
            // line 577
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 577)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 578
                yield "                                                    <br><small class=\"text-primary\"><i class=\"fas fa-tag me-1\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 578), "html", null, true);
                yield " (-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionDiscountPercentage", [], "any", false, false, false, 578), "html", null, true);
                yield "%)</small>
                                                ";
            }
            // line 580
            yield "                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge bg-secondary\">";
            // line 584
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 584), "html", null, true);
            yield "</span>
                                    </td>
                                    <td class=\"text-center\">
                                        ";
            // line 587
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "originalUnitPrice", [], "any", false, false, false, 587)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 588
                yield "                                            <span class=\"text-muted text-decoration-line-through d-none d-sm-inline\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "originalUnitPrice", [], "any", false, false, false, 588), 0, ",", " "), "html", null, true);
                yield "</span><br class=\"d-none d-sm-block\">
                                            <span class=\"text-primary\">";
                // line 589
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 589), 0, ",", " "), "html", null, true);
                yield "</span>
                                        ";
            } else {
                // line 591
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 591), 0, ",", " "), "html", null, true);
                yield "
                                        ";
            }
            // line 593
            yield "                                    </td>
                                    <td class=\"text-center\">
                                        <strong>";
            // line 595
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 595), 0, ",", " "), "html", null, true);
            yield "</strong>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 599
        yield "                        </tbody>
                        <tfoot class=\"table-light\">
                            <tr>
                                <td colspan=\"3\" class=\"text-end fw-bold\">Total :</td>
                                <td class=\"text-center fw-bold text-primary h5\">
                                    ";
        // line 604
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 604, $this->source); })()), "totalAmount", [], "any", false, false, false, 604), 0, ",", " "), "html", null, true);
        yield " FCFA
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <!-- Retours effectués -->
            ";
        // line 613
        if ((array_key_exists("returns", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["returns"]) || array_key_exists("returns", $context) ? $context["returns"] : (function () { throw new RuntimeError('Variable "returns" does not exist.', 613, $this->source); })())) > 0))) {
            // line 614
            yield "            <div class=\"order-card mt-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-undo-alt me-2 text-warning\"></i>
                        <span class=\"d-none d-sm-inline\">Retours effectués</span>
                        <span class=\"d-inline d-sm-none\">Retours</span>
                        <span class=\"badge bg-warning ms-2\">";
            // line 620
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["returns"]) || array_key_exists("returns", $context) ? $context["returns"] : (function () { throw new RuntimeError('Variable "returns" does not exist.', 620, $this->source); })())), "html", null, true);
            yield "</span>
                    </h5>
                </div>
                <div class=\"p-3\">
                    ";
            // line 624
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["returns"]) || array_key_exists("returns", $context) ? $context["returns"] : (function () { throw new RuntimeError('Variable "returns" does not exist.', 624, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["return"]) {
                // line 625
                yield "                        <div class=\"return-card card mb-3\">
                            <div class=\"card-body\">
                                <div class=\"d-flex justify-content-between align-items-start flex-wrap gap-2\">
                                    <div>
                                        <h6 class=\"mb-1\">
                                            <a href=\"";
                // line 630
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["return"], "id", [], "any", false, false, false, 630)]), "html", null, true);
                yield "\" class=\"text-decoration-none\">
                                                <i class=\"fas fa-receipt me-1\"></i> ";
                // line 631
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnNumber", [], "any", false, false, false, 631), "html", null, true);
                yield "
                                            </a>
                                        </h6>
                                        <div class=\"small text-muted\">
                                            <i class=\"fas fa-calendar me-1\"></i> ";
                // line 635
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "createdAt", [], "any", false, false, false, 635), "d/m/Y H:i"), "html", null, true);
                yield "
                                        </div>
                                    </div>
                                    <div>
                                        ";
                // line 639
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["return"], "status", [], "any", false, false, false, 639) == "pending")) {
                    // line 640
                    yield "                                            <span class=\"badge bg-warning\">⏳ En attente</span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 641
$context["return"], "status", [], "any", false, false, false, 641) == "approved")) {
                    // line 642
                    yield "                                            <span class=\"badge bg-primary\">✓ Approuvé</span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 643
$context["return"], "status", [], "any", false, false, false, 643) == "completed")) {
                    // line 644
                    yield "                                            <span class=\"badge bg-success\">✅ Remboursé</span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 645
$context["return"], "status", [], "any", false, false, false, 645) == "rejected")) {
                    // line 646
                    yield "                                            <span class=\"badge bg-danger\">❌ Rejeté</span>
                                        ";
                }
                // line 648
                yield "                                    </div>
                                </div>
                                
                                <div class=\"mt-3 table-responsive\">
                                    <table class=\"table table-sm table-bordered mb-0\">
                                        <thead class=\"table-light\">
                                            <tr>
                                                <th>Produit</th>
                                                <th class=\"text-center\">Qté retournée</th>
                                                <th class=\"text-center\">Qté restante</th>
                                                <th class=\"text-center\">Prix unit.</th>
                                                <th class=\"text-center\">Total remb.</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
                // line 663
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnItems", [], "any", false, false, false, 663));
                foreach ($context['_seq'] as $context["_key"] => $context["returnItem"]) {
                    // line 664
                    yield "                                                ";
                    $context["originalQty"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "originalOrderItem", [], "any", false, false, false, 664), "quantity", [], "any", false, false, false, 664);
                    // line 665
                    yield "                                                ";
                    $context["returnedQty"] = CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "quantityReturned", [], "any", false, false, false, 665);
                    // line 666
                    yield "                                                ";
                    $context["remainingQty"] = ((isset($context["originalQty"]) || array_key_exists("originalQty", $context) ? $context["originalQty"] : (function () { throw new RuntimeError('Variable "originalQty" does not exist.', 666, $this->source); })()) - (isset($context["returnedQty"]) || array_key_exists("returnedQty", $context) ? $context["returnedQty"] : (function () { throw new RuntimeError('Variable "returnedQty" does not exist.', 666, $this->source); })()));
                    // line 667
                    yield "                                                <tr>
                                                    <td>
                                                        <strong>";
                    // line 669
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "productName", [], "any", false, false, false, 669)), "truncate", [20], "method", false, false, false, 669), "html", null, true);
                    yield "</strong>
                                                        ";
                    // line 670
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "promotionName", [], "any", false, false, false, 670)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 671
                        yield "                                                            <br><small class=\"text-primary\"><i class=\"fas fa-tag\"></i> ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "promotionName", [], "any", false, false, false, 671), "html", null, true);
                        yield "</small>
                                                        ";
                    }
                    // line 673
                    yield "                                                        <br><small class=\"text-muted\">
                                                            <i class=\"fas ";
                    // line 674
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "itemType", [], "any", false, false, false, 674) == "recipe")) {
                        yield "fa-utensils";
                    } else {
                        yield "fa-box";
                    }
                    yield " me-1\"></i>
                                                            ";
                    // line 675
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "itemType", [], "any", false, false, false, 675) == "recipe")) {
                        yield "Menu";
                    } else {
                        yield "Produit";
                    }
                    // line 676
                    yield "                                                        </small>
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <span class=\"badge bg-danger\">";
                    // line 679
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["returnedQty"]) || array_key_exists("returnedQty", $context) ? $context["returnedQty"] : (function () { throw new RuntimeError('Variable "returnedQty" does not exist.', 679, $this->source); })()), "html", null, true);
                    yield "</span>
                                                    </td>
                                                    <td class=\"text-center\">
                                                        ";
                    // line 682
                    if (((isset($context["remainingQty"]) || array_key_exists("remainingQty", $context) ? $context["remainingQty"] : (function () { throw new RuntimeError('Variable "remainingQty" does not exist.', 682, $this->source); })()) > 0)) {
                        // line 683
                        yield "                                                            <span class=\"badge bg-success\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["remainingQty"]) || array_key_exists("remainingQty", $context) ? $context["remainingQty"] : (function () { throw new RuntimeError('Variable "remainingQty" does not exist.', 683, $this->source); })()), "html", null, true);
                        yield "</span>
                                                        ";
                    } else {
                        // line 685
                        yield "                                                            <span class=\"badge bg-secondary\">0</span>
                                                        ";
                    }
                    // line 687
                    yield "                                                    </td>
                                                    <td class=\"text-center\">
                                                        ";
                    // line 689
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "unitPriceAtSale", [], "any", false, false, false, 689), 0, ",", " "), "html", null, true);
                    yield "
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <strong class=\"text-primary\">";
                    // line 692
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "totalRefund", [], "any", false, false, false, 692), 0, ",", " "), "html", null, true);
                    yield "</strong>
                                                    </td>
                                                </tr>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['returnItem'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 696
                yield "                                        </tbody>
                                        <tfoot class=\"table-light\">
                                            <tr>
                                                <td colspan=\"4\" class=\"text-end fw-bold\">Total remboursé :</td>
                                                <td class=\"text-center fw-bold text-primary h5\">
                                                    ";
                // line 701
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "totalRefundAmount", [], "any", false, false, false, 701), 0, ",", " "), "html", null, true);
                yield " FCFA
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                
                                <div class=\"row mt-2 small g-1\">
                                    <div class=\"col-12 col-md-4\">
                                        <strong>Motif :</strong> ";
                // line 710
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reasons"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 710), [], "array", true, true, false, 710)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reasons"]) || array_key_exists("reasons", $context) ? $context["reasons"] : (function () { throw new RuntimeError('Variable "reasons" does not exist.', 710, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 710), [], "array", false, false, false, 710), CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 710))) : (CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 710))), "html", null, true);
                yield "
                                    </div>
                                    <div class=\"col-12 col-md-4\">
                                        <strong>Enregistré par :</strong> ";
                // line 713
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnedBy", [], "any", false, false, false, 713), "fullName", [], "any", false, false, false, 713), "html", null, true);
                yield "
                                    </div>
                                    <div class=\"col-12 col-md-4\">
                                        <strong>Méthode :</strong>
                                        ";
                // line 717
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["return"], "refundMethod", [], "any", false, false, false, 717) == "cash")) {
                    // line 718
                    yield "                                            💰 Espèces
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 719
$context["return"], "refundMethod", [], "any", false, false, false, 719) == "mobile_money")) {
                    // line 720
                    yield "                                            📱 Mobile Money
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 721
$context["return"], "refundMethod", [], "any", false, false, false, 721) == "bank_transfer")) {
                    // line 722
                    yield "                                            🏦 Virement bancaire
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 723
$context["return"], "refundMethod", [], "any", false, false, false, 723) == "wallet")) {
                    // line 724
                    yield "                                            📱 Porte-monnaie électronique
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 725
$context["return"], "refundMethod", [], "any", false, false, false, 725) == "credit_note")) {
                    // line 726
                    yield "                                            📝 Avoir / Note de crédit
                                        ";
                }
                // line 728
                yield "                                    </div>
                                </div>
                                <div class=\"mt-2\">
                                    <a href=\"";
                // line 731
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["return"], "id", [], "any", false, false, false, 731)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary w-100 w-md-auto\">
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
            // line 738
            yield "                </div>
            </div>
            ";
        }
        // line 741
        yield "
            <!-- Bouton Nouveau retour -->
            ";
        // line 743
        $context["hasRemainingItems"] = false;
        // line 744
        yield "            ";
        $context["returnedQuantities"] = ((array_key_exists("totalReturnedQuantities", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["totalReturnedQuantities"]) || array_key_exists("totalReturnedQuantities", $context) ? $context["totalReturnedQuantities"] : (function () { throw new RuntimeError('Variable "totalReturnedQuantities" does not exist.', 744, $this->source); })()), [])) : ([]));
        // line 745
        yield "
            ";
        // line 746
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 746, $this->source); })()), "orderItems", [], "any", false, false, false, 746));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 747
            yield "                ";
            $context["alreadyReturned"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["returnedQuantities"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 747), [], "array", true, true, false, 747)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnedQuantities"]) || array_key_exists("returnedQuantities", $context) ? $context["returnedQuantities"] : (function () { throw new RuntimeError('Variable "returnedQuantities" does not exist.', 747, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 747), [], "array", false, false, false, 747), 0)) : (0));
            // line 748
            yield "                ";
            $context["remaining"] = (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 748) - (isset($context["alreadyReturned"]) || array_key_exists("alreadyReturned", $context) ? $context["alreadyReturned"] : (function () { throw new RuntimeError('Variable "alreadyReturned" does not exist.', 748, $this->source); })()));
            // line 749
            yield "                ";
            if (((isset($context["remaining"]) || array_key_exists("remaining", $context) ? $context["remaining"] : (function () { throw new RuntimeError('Variable "remaining" does not exist.', 749, $this->source); })()) > 0)) {
                // line 750
                yield "                    ";
                $context["hasRemainingItems"] = true;
                // line 751
                yield "                ";
            }
            // line 752
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 753
        yield "
            ";
        // line 754
        if ((($tmp = (isset($context["hasRemainingItems"]) || array_key_exists("hasRemainingItems", $context) ? $context["hasRemainingItems"] : (function () { throw new RuntimeError('Variable "hasRemainingItems" does not exist.', 754, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 755
            yield "                <div class=\"action-buttons\">
                    <a href=\"";
            // line 756
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_new", ["orderId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 756, $this->source); })()), "id", [], "any", false, false, false, 756)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-lg\">
                        <i class=\"fas fa-undo-alt me-2\"></i> Demander un retour
                    </a>
                </div>
            ";
        }
        // line 761
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
            <div class=\"modal-footer flex-wrap gap-2\">
                <button type=\"button\" class=\"btn btn-secondary flex-grow-1 flex-md-grow-0\" data-bs-dismiss=\"modal\">Fermer</button>
                <button type=\"button\" class=\"btn btn-primary flex-grow-1 flex-md-grow-0\" id=\"printReceiptModalBtn\">
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

    // line 793
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

        // line 794
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
\$(document).ready(function() {
    const receiptModal = new bootstrap.Modal(document.getElementById('receiptModal'));
    const receiptContent = document.getElementById('receiptContent');
    
    // Bouton d'impression rapide
    \$('.quick-print').click(function() {
        const orderId = \$(this).data('order-id');
        const printType = \$(this).data('print-type');
        window.open('/orders/' + orderId + '/print?type=' + printType, '_blank', 'width=450,height=650');
    });
    
    // Bouton d'impression via dropdown
    \$('.print-customer, .print-kitchen, .print-delivery, .print-cash').click(function(e) {
        e.preventDefault();
        const orderId = \$(this).data('order-id');
        const printType = \$(this).data('print-type');
        window.open('/orders/' + orderId + '/print?type=' + printType, '_blank', 'width=450,height=650');
    });
    
    // Modal d'impression
    \$('#printReceiptBtn').click(function() {
        loadReceipt();
    });
    
    function loadReceipt() {
        receiptContent.innerHTML = '<div class=\"text-center py-5\"><div class=\"spinner-border text-primary\"></div><p class=\"mt-2\">Chargement du reçu...</p></div>';
        receiptModal.show();
        
        fetch('";
        // line 824
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_receipt_content", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 824, $this->source); })()), "id", [], "any", false, false, false, 824)]), "html", null, true);
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
        // line 841
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 841, $this->source); })()), "orderNumber", [], "any", false, false, false, 841), "html", null, true);
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
        return array (  1370 => 841,  1350 => 824,  1317 => 794,  1304 => 793,  1263 => 761,  1255 => 756,  1252 => 755,  1250 => 754,  1247 => 753,  1241 => 752,  1238 => 751,  1235 => 750,  1232 => 749,  1229 => 748,  1226 => 747,  1222 => 746,  1219 => 745,  1216 => 744,  1214 => 743,  1210 => 741,  1205 => 738,  1192 => 731,  1187 => 728,  1183 => 726,  1181 => 725,  1178 => 724,  1176 => 723,  1173 => 722,  1171 => 721,  1168 => 720,  1166 => 719,  1163 => 718,  1161 => 717,  1154 => 713,  1148 => 710,  1136 => 701,  1129 => 696,  1119 => 692,  1113 => 689,  1109 => 687,  1105 => 685,  1099 => 683,  1097 => 682,  1091 => 679,  1086 => 676,  1080 => 675,  1072 => 674,  1069 => 673,  1063 => 671,  1061 => 670,  1057 => 669,  1053 => 667,  1050 => 666,  1047 => 665,  1044 => 664,  1040 => 663,  1023 => 648,  1019 => 646,  1017 => 645,  1014 => 644,  1012 => 643,  1009 => 642,  1007 => 641,  1004 => 640,  1002 => 639,  995 => 635,  988 => 631,  984 => 630,  977 => 625,  973 => 624,  966 => 620,  958 => 614,  956 => 613,  944 => 604,  937 => 599,  927 => 595,  923 => 593,  917 => 591,  912 => 589,  907 => 588,  905 => 587,  899 => 584,  893 => 580,  885 => 578,  883 => 577,  879 => 576,  876 => 575,  872 => 573,  868 => 571,  866 => 570,  861 => 567,  857 => 566,  848 => 559,  844 => 557,  840 => 555,  838 => 554,  827 => 546,  814 => 535,  805 => 529,  798 => 524,  794 => 522,  790 => 520,  788 => 519,  774 => 510,  768 => 506,  759 => 503,  750 => 502,  746 => 501,  738 => 496,  734 => 495,  731 => 494,  724 => 489,  722 => 488,  712 => 480,  710 => 479,  705 => 476,  699 => 473,  695 => 471,  693 => 470,  689 => 468,  683 => 465,  679 => 463,  677 => 462,  672 => 460,  665 => 456,  656 => 449,  650 => 447,  646 => 445,  644 => 444,  641 => 443,  639 => 442,  636 => 441,  634 => 440,  631 => 439,  629 => 438,  618 => 430,  614 => 429,  611 => 428,  605 => 424,  599 => 422,  597 => 421,  590 => 416,  584 => 413,  581 => 412,  579 => 411,  575 => 410,  565 => 403,  561 => 402,  558 => 401,  555 => 400,  553 => 399,  532 => 381,  521 => 373,  517 => 371,  509 => 366,  501 => 361,  497 => 359,  495 => 358,  488 => 354,  471 => 340,  462 => 334,  455 => 330,  446 => 324,  438 => 319,  429 => 312,  416 => 311,  103 => 8,  90 => 7,  66 => 5,  43 => 3,);
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

    /* ✅ RESPONSIVE */
    @media (max-width: 992px) {
        .container-fluid {
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
        }
        
        .d-flex.justify-content-between.align-items-center {
            flex-direction: column;
            align-items: flex-start !important;
            gap: 0.75rem !important;
        }
        
        .btn-group {
            flex-wrap: wrap;
        }
    }

    @media (max-width: 768px) {
        .container-fluid {
            padding-left: 0.5rem !important;
            padding-right: 0.5rem !important;
        }
        
        /* En-tête en colonne */
        .d-flex.justify-content-between.align-items-center {
            flex-direction: column;
            align-items: flex-start !important;
            gap: 0.5rem !important;
            width: 100%;
        }
        
        .d-flex.justify-content-between.align-items-center > div:first-child {
            width: 100%;
        }
        
        .d-flex.gap-2 {
            width: 100%;
            flex-wrap: wrap;
        }
        
        .d-flex.gap-2 > * {
            flex: 1 1 auto;
            min-width: calc(50% - 0.25rem);
        }
        
        /* Bouton \"Imprimer\" et dropdown en colonne sur mobile */
        .btn-group {
            display: flex;
            flex-direction: column;
            width: 100%;
        }
        .btn-group .btn {
            border-radius: 0.375rem !important;
            margin-bottom: 0.25rem;
        }
        .btn-group .btn:last-child {
            margin-bottom: 0;
        }
        .btn-group .dropdown-toggle {
            border-radius: 0.375rem !important;
        }
        .btn-group .dropdown-menu {
            position: static !important;
            transform: none !important;
            width: 100%;
            margin-top: 0.25rem;
        }
        
        /* Bouton Quick print */
        .btn.outline-success.quick-print {
            flex: 1 1 100%;
        }
        
        /* Retour en colonne */
        .d-flex.gap-2 .btn-outline-secondary {
            flex: 1 1 100%;
        }
        
        /* Informations commande en colonne */
        .info-item {
            padding: 0.5rem 0.75rem;
        }
        
        .info-value .d-flex.align-items-center {
            flex-wrap: wrap;
        }
        
        /* Tableau des articles - version scroll horizontale */
        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        
        .items-table th, 
        .items-table td {
            font-size: 0.8rem;
            padding: 0.4rem 0.5rem !important;
        }
        
        /* Retours */
        .return-card .card-body {
            padding: 0.75rem !important;
        }
        
        .return-card .row.mt-2 .col-md-4 {
            margin-bottom: 0.25rem;
        }
        
        /* Montants */
        .h5 {
            font-size: 1rem !important;
        }
        
        /* Action buttons */
        .action-buttons {
            text-align: center;
        }
        .action-buttons .btn-lg {
            width: 100%;
            font-size: 0.9rem;
            padding: 0.5rem 1rem;
        }
        
        /* Modification statut */
        .order-card .p-3 {
            padding: 0.75rem !important;
        }
        .order-card .p-3 .row .col-12 {
            margin-bottom: 0.5rem;
        }
        
        /* Breadcrumb */
        .breadcrumb {
            font-size: 0.7rem;
        }
        .breadcrumb-item + .breadcrumb-item::before {
            padding-right: 0.3rem;
            padding-left: 0.3rem;
        }
        
        h1.h3 {
            font-size: 1.1rem !important;
            word-break: break-word;
        }
    }

    @media (max-width: 480px) {
        .container-fluid {
            padding-left: 0.25rem !important;
            padding-right: 0.25rem !important;
        }
        
        .d-flex.gap-2 > * {
            min-width: 100%;
            flex: 0 0 100%;
        }
        
        .btn-group .btn {
            font-size: 0.75rem;
            padding: 0.3rem 0.5rem;
        }
        
        .btn-group .dropdown-item {
            font-size: 0.75rem;
            padding: 0.3rem 0.75rem;
        }
        
        .items-table th, 
        .items-table td {
            font-size: 0.7rem;
            padding: 0.3rem 0.4rem !important;
        }
        
        .order-card .card-header {
            padding: 0.5rem 0.75rem !important;
        }
        .order-card .card-header h5 {
            font-size: 0.9rem;
        }
        
        .info-label {
            font-size: 0.65rem;
        }
        .info-value {
            font-size: 0.85rem;
        }
        
        .status-badge {
            font-size: 0.65rem;
            padding: 0.15rem 0.5rem;
        }
        
        .return-card .table-sm th,
        .return-card .table-sm td {
            font-size: 0.65rem;
            padding: 0.2rem 0.3rem !important;
        }
        
        h1.h3 {
            font-size: 0.95rem !important;
        }
        
        .text-muted.mt-2 {
            font-size: 0.75rem;
        }
        
        .action-buttons .btn-lg {
            font-size: 0.8rem;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid py-3 py-md-4\">
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
        <div class=\"d-flex flex-wrap gap-2 w-100 w-md-auto\">
            <!-- ✅ Bouton Impression rapide -->
            <button type=\"button\" class=\"btn btn-outline-success quick-print flex-grow-1 flex-md-grow-0\" 
                    data-order-id=\"{{ order.id }}\" 
                    data-print-type=\"customer\" 
                    title=\"Impression rapide client\">
                <i class=\"fas fa-print me-1\"></i> <i class=\"fas fa-bolt fa-xs\"></i> 
                <span class=\"d-none d-sm-inline\">Imprimer</span>
            </button>
            
            <!-- ✅ Dropdown Autres tickets -->
            <div class=\"btn-group w-100 w-md-auto\">
                <button type=\"button\" class=\"btn btn-outline-primary dropdown-toggle flex-grow-1\" data-bs-toggle=\"dropdown\">
                    <i class=\"fas fa-print me-1\"></i> <span class=\"d-none d-sm-inline\">Autres tickets</span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end w-100 w-md-auto\">
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
            
            <!-- ✅ Bouton Retour -->
            <a href=\"{{ path('app_orders_index') }}\" class=\"btn btn-outline-secondary flex-grow-1 flex-md-grow-0\">
                <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour</span>
            </a>
        </div>
    </div>

    <div class=\"row g-3 g-md-4\">
        <!-- Colonne gauche - Informations commande -->
        <div class=\"col-12 col-lg-4\">
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
                                <select name=\"status\" class=\"form-select\">
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
        <div class=\"col-12 col-lg-8\">
            <!-- Articles commandés -->
            <div class=\"order-card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-boxes me-2\"></i>
                        <span class=\"d-none d-sm-inline\">Articles commandés</span>
                        <span class=\"d-inline d-sm-none\">Articles</span>
                        <span class=\"badge bg-secondary ms-2\">{{ order.orderItems|length }}</span>
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
                                <th class=\"text-center\">Qté</th>
                                <th class=\"text-center\">Prix unit.</th>
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
                                                <strong>{{ item.productName|u.truncate(25) }}</strong>
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
                                            <span class=\"text-muted text-decoration-line-through d-none d-sm-inline\">{{ item.originalUnitPrice|number_format(0, ',', ' ') }}</span><br class=\"d-none d-sm-block\">
                                            <span class=\"text-primary\">{{ item.unitPrice|number_format(0, ',', ' ') }}</span>
                                        {% else %}
                                            {{ item.unitPrice|number_format(0, ',', ' ') }}
                                        {% endif %}
                                    </td>
                                    <td class=\"text-center\">
                                        <strong>{{ item.totalPrice|number_format(0, ',', ' ') }}</strong>
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
                        <span class=\"d-none d-sm-inline\">Retours effectués</span>
                        <span class=\"d-inline d-sm-none\">Retours</span>
                        <span class=\"badge bg-warning ms-2\">{{ returns|length }}</span>
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
                                
                                <div class=\"mt-3 table-responsive\">
                                    <table class=\"table table-sm table-bordered mb-0\">
                                        <thead class=\"table-light\">
                                            <tr>
                                                <th>Produit</th>
                                                <th class=\"text-center\">Qté retournée</th>
                                                <th class=\"text-center\">Qté restante</th>
                                                <th class=\"text-center\">Prix unit.</th>
                                                <th class=\"text-center\">Total remb.</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {% for returnItem in return.returnItems %}
                                                {% set originalQty = returnItem.originalOrderItem.quantity %}
                                                {% set returnedQty = returnItem.quantityReturned %}
                                                {% set remainingQty = originalQty - returnedQty %}
                                                <tr>
                                                    <td>
                                                        <strong>{{ returnItem.productName|u.truncate(20) }}</strong>
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
                                                        {{ returnItem.unitPriceAtSale|number_format(0, ',', ' ') }}
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <strong class=\"text-primary\">{{ returnItem.totalRefund|number_format(0, ',', ' ') }}</strong>
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
                                
                                <div class=\"row mt-2 small g-1\">
                                    <div class=\"col-12 col-md-4\">
                                        <strong>Motif :</strong> {{ reasons[return.reason]|default(return.reason) }}
                                    </div>
                                    <div class=\"col-12 col-md-4\">
                                        <strong>Enregistré par :</strong> {{ return.returnedBy.fullName }}
                                    </div>
                                    <div class=\"col-12 col-md-4\">
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
                                    <a href=\"{{ path('returns_show', {'id': return.id}) }}\" class=\"btn btn-sm btn-outline-primary w-100 w-md-auto\">
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
            <div class=\"modal-footer flex-wrap gap-2\">
                <button type=\"button\" class=\"btn btn-secondary flex-grow-1 flex-md-grow-0\" data-bs-dismiss=\"modal\">Fermer</button>
                <button type=\"button\" class=\"btn btn-primary flex-grow-1 flex-md-grow-0\" id=\"printReceiptModalBtn\">
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
    
    // Bouton d'impression rapide
    \$('.quick-print').click(function() {
        const orderId = \$(this).data('order-id');
        const printType = \$(this).data('print-type');
        window.open('/orders/' + orderId + '/print?type=' + printType, '_blank', 'width=450,height=650');
    });
    
    // Bouton d'impression via dropdown
    \$('.print-customer, .print-kitchen, .print-delivery, .print-cash').click(function(e) {
        e.preventDefault();
        const orderId = \$(this).data('order-id');
        const printType = \$(this).data('print-type');
        window.open('/orders/' + orderId + '/print?type=' + printType, '_blank', 'width=450,height=650');
    });
    
    // Modal d'impression
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
