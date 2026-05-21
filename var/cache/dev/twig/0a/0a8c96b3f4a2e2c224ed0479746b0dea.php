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
class __TwigTemplate_a7d085b4c8b944d0c35cf023f9758113 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sale/orders/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sale/orders/show.html.twig"));

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

        yield "Détails de la commande #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 4, $this->source); })()), "orderNumber", [], "any", false, false, false, 4), "html", null, true);
        
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
    .status-completed { background: #dcfce7; color: #16a34a; }
    .status-cancelled { background: #fee2e2; color: #dc2626; }
    .status-refunded { background: #fef3c7; color: #d97706; }
    
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

    // line 102
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

        // line 103
        yield "<div class=\"container-fluid py-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-shopping-cart me-1\"></i> Ventes
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        ";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 115, $this->source); })()), "orderNumber", [], "any", false, false, false, 115), "html", null, true);
        yield "
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-receipt me-2 text-primary\"></i>
                Commande #";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 121, $this->source); })()), "orderNumber", [], "any", false, false, false, 121), "html", null, true);
        yield "
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-calendar me-1\"></i>
                Créée le ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 125, $this->source); })()), "createdAt", [], "any", false, false, false, 125), "d/m/Y H:i"), "html", null, true);
        yield "
            </p>
        </div>
        <div class=\"d-flex gap-2\">
            <!-- Bouton d'impression rapide -->
            <button type=\"button\" class=\"btn btn-outline-success quick-print\" 
                    data-order-id=\"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 131, $this->source); })()), "id", [], "any", false, false, false, 131), "html", null, true);
        yield "\" 
                    data-print-type=\"customer\" 
                    title=\"Impression rapide client\">
                <i class=\"fas fa-print me-1\"></i> <i class=\"fas fa-bolt fa-xs\"></i> Imprimer
            </button>
            
            <!-- Menu déroulant -->
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-outline-primary dropdown-toggle\" data-bs-toggle=\"dropdown\">
                    <i class=\"fas fa-print me-1\"></i> Autres tickets
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                        <a class=\"dropdown-item print-customer\" href=\"#\" data-order-id=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 144, $this->source); })()), "id", [], "any", false, false, false, 144), "html", null, true);
        yield "\" data-print-type=\"customer\">
                            <i class=\"fas fa-receipt me-2\"></i> Ticket client
                        </a>
                    </li>
                    
                    ";
        // line 149
        if ((($tmp = (isset($context["isRestaurant"]) || array_key_exists("isRestaurant", $context) ? $context["isRestaurant"] : (function () { throw new RuntimeError('Variable "isRestaurant" does not exist.', 149, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 150
            yield "                    <li><hr class=\"dropdown-divider\"></li>
                    <li>
                        <a class=\"dropdown-item print-kitchen\" href=\"#\" data-order-id=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 152, $this->source); })()), "id", [], "any", false, false, false, 152), "html", null, true);
            yield "\" data-print-type=\"kitchen\">
                            <i class=\"fas fa-utensils me-2\"></i> Ticket cuisine
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item print-delivery\" href=\"#\" data-order-id=\"";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 157, $this->source); })()), "id", [], "any", false, false, false, 157), "html", null, true);
            yield "\" data-print-type=\"delivery\">
                            <i class=\"fas fa-truck me-2\"></i> Ticket livraison
                        </a>
                    </li>
                    ";
        }
        // line 162
        yield "                    
                    <li><hr class=\"dropdown-divider\"></li>
                    <li>
                        <a class=\"dropdown-item print-cash\" href=\"#\" data-order-id=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 165, $this->source); })()), "id", [], "any", false, false, false, 165), "html", null, true);
        yield "\" data-print-type=\"cash\">
                            <i class=\"fas fa-money-bill-wave me-2\"></i> Ticket caisse
                        </a>
                    </li>
                </ul>
            </div>
            
            <a href=\"";
        // line 172
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
                <div class=\"info-item\">
                    <div class=\"info-label\">Statut</div>
                    <div class=\"info-value\">
                        ";
        // line 188
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 188, $this->source); })()), "status", [], "any", false, false, false, 188) == "completed")) {
            // line 189
            yield "                            <span class=\"status-badge status-completed\">✅ Complétée</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 190
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 190, $this->source); })()), "status", [], "any", false, false, false, 190) == "cancelled")) {
            // line 191
            yield "                            <span class=\"status-badge status-cancelled\">❌ Annulée</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 192
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 192, $this->source); })()), "status", [], "any", false, false, false, 192) == "refunded")) {
            // line 193
            yield "                            <span class=\"status-badge status-refunded\">🔄 Remboursée</span>
                        ";
        } else {
            // line 195
            yield "                            <span class=\"status-badge status-completed\">✅ Complétée</span>
                        ";
        }
        // line 197
        yield "                    </div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Client</div>
                    <div class=\"info-value\">";
        // line 201
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 201, $this->source); })()), "customerName", [], "any", false, false, false, 201)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 201, $this->source); })()), "customerName", [], "any", false, false, false, 201), "html", null, true)) : ("Non renseigné"));
        yield "</div>
                    ";
        // line 202
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 202, $this->source); })()), "customerPhone", [], "any", false, false, false, 202)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 203
            yield "                        <div class=\"small text-muted mt-1\">
                            <i class=\"fas fa-phone me-1\"></i> ";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 204, $this->source); })()), "customerPhone", [], "any", false, false, false, 204), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 207
        yield "                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Caissier</div>
                    <div class=\"info-value\">
                        <div class=\"d-flex align-items-center\">
                            ";
        // line 212
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 212, $this->source); })()), "user", [], "any", false, false, false, 212), "photo", [], "any", false, false, false, 212)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 213
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 213, $this->source); })()), "user", [], "any", false, false, false, 213), "photo", [], "any", false, false, false, 213))), "html", null, true);
            yield "\" class=\"rounded-circle me-2\" width=\"32\" height=\"32\">
                            ";
        } else {
            // line 215
            yield "                                <div class=\"bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2\" style=\"width: 32px; height: 32px;\">
                                    <i class=\"fas fa-user text-secondary\"></i>
                                </div>
                            ";
        }
        // line 219
        yield "                            <div>
                                <strong>";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, true, false, 220), "fullName", [], "any", true, true, false, 220)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 220, $this->source); })()), "user", [], "any", false, false, false, 220), "fullName", [], "any", false, false, false, 220), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 220, $this->source); })()), "user", [], "any", false, false, false, 220), "email", [], "any", false, false, false, 220))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 220, $this->source); })()), "user", [], "any", false, false, false, 220), "email", [], "any", false, false, false, 220))), "html", null, true);
        yield "</strong>
                                <br><small class=\"text-muted\">";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 221, $this->source); })()), "user", [], "any", false, false, false, 221), "roles", [], "any", false, false, false, 221)), ["ROLE_" => ""]), "html", null, true);
        yield "</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Mode de paiement</div>
                    <div class=\"info-value\">
                        ";
        // line 229
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 229, $this->source); })()), "paymentMethod", [], "any", false, false, false, 229) == "cash")) {
            // line 230
            yield "                            <i class=\"fas fa-money-bill-wave text-success me-1\"></i> Espèces
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 231
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 231, $this->source); })()), "paymentMethod", [], "any", false, false, false, 231) == "card")) {
            // line 232
            yield "                            <i class=\"fas fa-credit-card text-primary me-1\"></i> Carte bancaire
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 233
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 233, $this->source); })()), "paymentMethod", [], "any", false, false, false, 233) == "mobile_money")) {
            // line 234
            yield "                            <i class=\"fas fa-mobile-alt text-info me-1\"></i> Mobile Money
                        ";
        }
        // line 236
        yield "                    </div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Montants</div>
                    <div class=\"info-value\">
                        <div class=\"d-flex justify-content-between\">
                            <span>Total :</span>
                            <strong class=\"text-primary\">";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 243, $this->source); })()), "totalAmount", [], "any", false, false, false, 243), 0, ",", " "), "html", null, true);
        yield " FCFA</strong>
                        </div>
                        <div class=\"d-flex justify-content-between mt-1\">
                            <span>Payé :</span>
                            <span>";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 247, $this->source); })()), "amountPaid", [], "any", false, false, false, 247), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
                        </div>
                        ";
        // line 249
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 249, $this->source); })()), "changeAmount", [], "any", false, false, false, 249) > 0)) {
            // line 250
            yield "                            <div class=\"d-flex justify-content-between mt-1\">
                                <span>Monnaie :</span>
                                <span class=\"text-success\">";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 252, $this->source); })()), "changeAmount", [], "any", false, false, false, 252), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
                            </div>
                        ";
        }
        // line 255
        yield "                    </div>
                </div>
                ";
        // line 257
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 257, $this->source); })()), "notes", [], "any", false, false, false, 257)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 258
            yield "                <div class=\"info-item\">
                    <div class=\"info-label\">Notes</div>
                    <div class=\"info-value text-muted\">";
            // line 260
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 260, $this->source); })()), "notes", [], "any", false, false, false, 260), "html", null, true));
            yield "</div>
                </div>
                ";
        }
        // line 263
        yield "            </div>
        </div>

        <!-- Colonne droite - Articles et retours -->
        <div class=\"col-lg-8\">
            <!-- Articles commandés -->
            <div class=\"order-card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-boxes me-2\"></i>
                        Articles commandés
                        <span class=\"badge bg-secondary ms-2\">";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 274, $this->source); })()), "orderItems", [], "any", false, false, false, 274)), "html", null, true);
        yield " article(s)</span>
                    </h5>
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0 items-table\">
                        <thead class=\"table-light\">
                            <tr>
                                <th>
                                    ";
        // line 282
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 282, $this->source); })()) == "restaurant")) {
            // line 283
            yield "                                        Article
                                    ";
        } else {
            // line 285
            yield "                                        Produit
                                    ";
        }
        // line 287
        yield "                                </th>
                                <th class=\"text-center\">Quantité</th>
                                <th class=\"text-center\">Prix unitaire</th>
                                <th class=\"text-center\">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 294, $this->source); })()), "orderItems", [], "any", false, false, false, 294));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 295
            yield "                                <tr>
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            ";
            // line 298
            if (((isset($context["isRestaurant"]) || array_key_exists("isRestaurant", $context) ? $context["isRestaurant"] : (function () { throw new RuntimeError('Variable "isRestaurant" does not exist.', 298, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "recipe", [], "any", false, false, false, 298))) {
                // line 299
                yield "                                                <i class=\"fas fa-utensils text-primary me-2 fa-fw\"></i>
                                            ";
            } else {
                // line 301
                yield "                                                <i class=\"fas fa-box text-success me-2 fa-fw\"></i>
                                            ";
            }
            // line 303
            yield "                                            <div>
                                                <strong>";
            // line 304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 304), "html", null, true);
            yield "</strong>
                                                ";
            // line 305
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 305)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 306
                yield "                                                    <br><small class=\"text-primary\"><i class=\"fas fa-tag me-1\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 306), "html", null, true);
                yield " (-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionDiscountPercentage", [], "any", false, false, false, 306), "html", null, true);
                yield "%)</small>
                                                ";
            }
            // line 308
            yield "                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge bg-secondary\">";
            // line 312
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 312), "html", null, true);
            yield "</span>
                                    </td>
                                    <td class=\"text-center\">
                                        ";
            // line 315
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "originalUnitPrice", [], "any", false, false, false, 315)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 316
                yield "                                            <span class=\"text-muted text-decoration-line-through\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "originalUnitPrice", [], "any", false, false, false, 316), 0, ",", " "), "html", null, true);
                yield " FCFA</span><br>
                                            <span class=\"text-primary\">";
                // line 317
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 317), 0, ",", " "), "html", null, true);
                yield " FCFA</span>
                                        ";
            } else {
                // line 319
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 319), 0, ",", " "), "html", null, true);
                yield " FCFA
                                        ";
            }
            // line 321
            yield "                                    </td>
                                    <td class=\"text-center\">
                                        <strong>";
            // line 323
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 323), 0, ",", " "), "html", null, true);
            yield " FCFA</strong>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        yield "                        </tbody>
                        <tfoot class=\"table-light\">
                            <tr>
                                <td colspan=\"3\" class=\"text-end fw-bold\">Total :</td>
                                <td class=\"text-center fw-bold text-primary h5\">
                                    ";
        // line 332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 332, $this->source); })()), "totalAmount", [], "any", false, false, false, 332), 0, ",", " "), "html", null, true);
        yield " FCFA
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <!-- Retours effectués -->
            ";
        // line 341
        if ((array_key_exists("returns", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["returns"]) || array_key_exists("returns", $context) ? $context["returns"] : (function () { throw new RuntimeError('Variable "returns" does not exist.', 341, $this->source); })())) > 0))) {
            // line 342
            yield "            <div class=\"order-card mt-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-undo-alt me-2 text-warning\"></i>
                        Retours effectués
                        <span class=\"badge bg-warning ms-2\">";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["returns"]) || array_key_exists("returns", $context) ? $context["returns"] : (function () { throw new RuntimeError('Variable "returns" does not exist.', 347, $this->source); })())), "html", null, true);
            yield " retour(s)</span>
                    </h5>
                </div>
                <div class=\"p-3\">
                    ";
            // line 351
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["returns"]) || array_key_exists("returns", $context) ? $context["returns"] : (function () { throw new RuntimeError('Variable "returns" does not exist.', 351, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["return"]) {
                // line 352
                yield "                        <div class=\"return-card card mb-3\">
                            <div class=\"card-body\">
                                <div class=\"d-flex justify-content-between align-items-start flex-wrap gap-2\">
                                    <div>
                                        <h6 class=\"mb-1\">
                                            <a href=\"";
                // line 357
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["return"], "id", [], "any", false, false, false, 357)]), "html", null, true);
                yield "\" class=\"text-decoration-none\">
                                                <i class=\"fas fa-receipt me-1\"></i> ";
                // line 358
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnNumber", [], "any", false, false, false, 358), "html", null, true);
                yield "
                                            </a>
                                        </h6>
                                        <div class=\"small text-muted\">
                                            <i class=\"fas fa-calendar me-1\"></i> ";
                // line 362
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "createdAt", [], "any", false, false, false, 362), "d/m/Y H:i"), "html", null, true);
                yield "
                                        </div>
                                    </div>
                                    <div>
                                        ";
                // line 366
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["return"], "status", [], "any", false, false, false, 366) == "pending")) {
                    // line 367
                    yield "                                            <span class=\"badge bg-warning\">⏳ En attente</span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 368
$context["return"], "status", [], "any", false, false, false, 368) == "approved")) {
                    // line 369
                    yield "                                            <span class=\"badge bg-primary\">✓ Approuvé</span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 370
$context["return"], "status", [], "any", false, false, false, 370) == "completed")) {
                    // line 371
                    yield "                                            <span class=\"badge bg-success\">✅ Remboursé</span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 372
$context["return"], "status", [], "any", false, false, false, 372) == "rejected")) {
                    // line 373
                    yield "                                            <span class=\"badge bg-danger\">❌ Rejeté</span>
                                        ";
                }
                // line 375
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
                // line 390
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnItems", [], "any", false, false, false, 390));
                foreach ($context['_seq'] as $context["_key"] => $context["returnItem"]) {
                    // line 391
                    yield "                                                ";
                    $context["originalQty"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "originalOrderItem", [], "any", false, false, false, 391), "quantity", [], "any", false, false, false, 391);
                    // line 392
                    yield "                                                ";
                    $context["returnedQty"] = CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "quantityReturned", [], "any", false, false, false, 392);
                    // line 393
                    yield "                                                ";
                    $context["remainingQty"] = ((isset($context["originalQty"]) || array_key_exists("originalQty", $context) ? $context["originalQty"] : (function () { throw new RuntimeError('Variable "originalQty" does not exist.', 393, $this->source); })()) - (isset($context["returnedQty"]) || array_key_exists("returnedQty", $context) ? $context["returnedQty"] : (function () { throw new RuntimeError('Variable "returnedQty" does not exist.', 393, $this->source); })()));
                    // line 394
                    yield "                                                <tr>
                                                    <td>
                                                        <strong>";
                    // line 396
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "productName", [], "any", false, false, false, 396), "html", null, true);
                    yield "</strong>
                                                        ";
                    // line 397
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "promotionName", [], "any", false, false, false, 397)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 398
                        yield "                                                            <br><small class=\"text-primary\"><i class=\"fas fa-tag\"></i> ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "promotionName", [], "any", false, false, false, 398), "html", null, true);
                        yield "</small>
                                                        ";
                    }
                    // line 400
                    yield "                                                        <br><small class=\"text-muted\">
                                                            <i class=\"fas ";
                    // line 401
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "itemType", [], "any", false, false, false, 401) == "recipe")) {
                        yield "fa-utensils";
                    } else {
                        yield "fa-box";
                    }
                    yield " me-1\"></i>
                                                            ";
                    // line 402
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "itemType", [], "any", false, false, false, 402) == "recipe")) {
                        yield "Menu";
                    } else {
                        yield "Produit";
                    }
                    // line 403
                    yield "                                                        </small>
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <span class=\"badge bg-danger\">";
                    // line 406
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["returnedQty"]) || array_key_exists("returnedQty", $context) ? $context["returnedQty"] : (function () { throw new RuntimeError('Variable "returnedQty" does not exist.', 406, $this->source); })()), "html", null, true);
                    yield "</span>
                                                    </td>
                                                    <td class=\"text-center\">
                                                        ";
                    // line 409
                    if (((isset($context["remainingQty"]) || array_key_exists("remainingQty", $context) ? $context["remainingQty"] : (function () { throw new RuntimeError('Variable "remainingQty" does not exist.', 409, $this->source); })()) > 0)) {
                        // line 410
                        yield "                                                            <span class=\"badge bg-success\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["remainingQty"]) || array_key_exists("remainingQty", $context) ? $context["remainingQty"] : (function () { throw new RuntimeError('Variable "remainingQty" does not exist.', 410, $this->source); })()), "html", null, true);
                        yield "</span>
                                                        ";
                    } else {
                        // line 412
                        yield "                                                            <span class=\"badge bg-secondary\">0</span>
                                                        ";
                    }
                    // line 414
                    yield "                                                    </td>
                                                    <td class=\"text-center\">
                                                        ";
                    // line 416
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "unitPriceAtSale", [], "any", false, false, false, 416), 0, ",", " "), "html", null, true);
                    yield " FCFA
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <strong class=\"text-primary\">";
                    // line 419
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["returnItem"], "totalRefund", [], "any", false, false, false, 419), 0, ",", " "), "html", null, true);
                    yield " FCFA</strong>
                                                    </td>
                                                </tr>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['returnItem'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 423
                yield "                                        </tbody>
                                        <tfoot class=\"table-light\">
                                            <tr>
                                                <td colspan=\"4\" class=\"text-end fw-bold\">Total remboursé :</td>
                                                <td class=\"text-center fw-bold text-primary h5\">
                                                    ";
                // line 428
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "totalRefundAmount", [], "any", false, false, false, 428), 0, ",", " "), "html", null, true);
                yield " FCFA
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                
                                <div class=\"row mt-2 small\">
                                    <div class=\"col-md-4\">
                                        <strong>Motif :</strong> ";
                // line 437
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reasons"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 437), [], "array", true, true, false, 437)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reasons"]) || array_key_exists("reasons", $context) ? $context["reasons"] : (function () { throw new RuntimeError('Variable "reasons" does not exist.', 437, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 437), [], "array", false, false, false, 437), CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 437))) : (CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 437))), "html", null, true);
                yield "
                                    </div>
                                    <div class=\"col-md-4\">
                                        <strong>Enregistré par :</strong> ";
                // line 440
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnedBy", [], "any", false, false, false, 440), "fullName", [], "any", false, false, false, 440), "html", null, true);
                yield "
                                    </div>
                                    <div class=\"col-md-4\">
                                        <strong>Méthode :</strong>
                                        ";
                // line 444
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["return"], "refundMethod", [], "any", false, false, false, 444) == "cash")) {
                    // line 445
                    yield "                                            💰 Espèces
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 446
$context["return"], "refundMethod", [], "any", false, false, false, 446) == "mobile_money")) {
                    // line 447
                    yield "                                            📱 Mobile Money
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 448
$context["return"], "refundMethod", [], "any", false, false, false, 448) == "bank_transfer")) {
                    // line 449
                    yield "                                            🏦 Virement bancaire
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 450
$context["return"], "refundMethod", [], "any", false, false, false, 450) == "wallet")) {
                    // line 451
                    yield "                                            📱 Porte-monnaie électronique
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 452
$context["return"], "refundMethod", [], "any", false, false, false, 452) == "credit_note")) {
                    // line 453
                    yield "                                            📝 Avoir / Note de crédit
                                        ";
                }
                // line 455
                yield "                                    </div>
                                </div>
                                <div class=\"mt-2\">
                                    <a href=\"";
                // line 458
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["return"], "id", [], "any", false, false, false, 458)]), "html", null, true);
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
            // line 465
            yield "                </div>
            </div>
            ";
        }
        // line 468
        yield "
            <!-- Bouton Nouveau retour - Condition simple -->
            ";
        // line 470
        $context["hasRemainingItems"] = false;
        // line 471
        yield "
            ";
        // line 473
        yield "            ";
        $context["returnedQuantities"] = ((array_key_exists("totalReturnedQuantities", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["totalReturnedQuantities"]) || array_key_exists("totalReturnedQuantities", $context) ? $context["totalReturnedQuantities"] : (function () { throw new RuntimeError('Variable "totalReturnedQuantities" does not exist.', 473, $this->source); })()), [])) : ([]));
        // line 474
        yield "
            ";
        // line 476
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 476, $this->source); })()), "orderItems", [], "any", false, false, false, 476));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 477
            yield "                ";
            $context["alreadyReturned"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["returnedQuantities"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 477), [], "array", true, true, false, 477)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnedQuantities"]) || array_key_exists("returnedQuantities", $context) ? $context["returnedQuantities"] : (function () { throw new RuntimeError('Variable "returnedQuantities" does not exist.', 477, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 477), [], "array", false, false, false, 477), 0)) : (0));
            // line 478
            yield "                ";
            $context["remaining"] = (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 478) - (isset($context["alreadyReturned"]) || array_key_exists("alreadyReturned", $context) ? $context["alreadyReturned"] : (function () { throw new RuntimeError('Variable "alreadyReturned" does not exist.', 478, $this->source); })()));
            // line 479
            yield "                ";
            if (((isset($context["remaining"]) || array_key_exists("remaining", $context) ? $context["remaining"] : (function () { throw new RuntimeError('Variable "remaining" does not exist.', 479, $this->source); })()) > 0)) {
                // line 480
                yield "                    ";
                $context["hasRemainingItems"] = true;
                // line 481
                yield "                ";
            }
            // line 482
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 483
        yield "
            ";
        // line 485
        yield "            ";
        if ((($tmp = (isset($context["hasRemainingItems"]) || array_key_exists("hasRemainingItems", $context) ? $context["hasRemainingItems"] : (function () { throw new RuntimeError('Variable "hasRemainingItems" does not exist.', 485, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 486
            yield "                <div class=\"action-buttons\">
                    <a href=\"";
            // line 487
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_new", ["orderId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 487, $this->source); })()), "id", [], "any", false, false, false, 487)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-lg\">
                        <i class=\"fas fa-undo-alt me-2\"></i> Demander un retour
                    </a>
                </div>
            ";
        }
        // line 492
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

    // line 524
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

        // line 525
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
\$(document).ready(function() {
    const receiptModal = new bootstrap.Modal(document.getElementById('receiptModal'));
    const receiptContent = document.getElementById('receiptContent');
    
    // Impression du reçu
    \$('#printReceiptBtn').click(function() {
        loadReceipt();
    });
    
    function loadReceipt() {
        receiptContent.innerHTML = '<div class=\"text-center py-5\"><div class=\"spinner-border text-primary\"></div><p class=\"mt-2\">Chargement du reçu...</p></div>';
        receiptModal.show();
        
        fetch('";
        // line 540
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_receipt_content", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 540, $this->source); })()), "id", [], "any", false, false, false, 540)]), "html", null, true);
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
        // line 557
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 557, $this->source); })()), "orderNumber", [], "any", false, false, false, 557), "html", null, true);
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
        return array (  1033 => 557,  1013 => 540,  995 => 525,  982 => 524,  941 => 492,  933 => 487,  930 => 486,  927 => 485,  924 => 483,  918 => 482,  915 => 481,  912 => 480,  909 => 479,  906 => 478,  903 => 477,  898 => 476,  895 => 474,  892 => 473,  889 => 471,  887 => 470,  883 => 468,  878 => 465,  865 => 458,  860 => 455,  856 => 453,  854 => 452,  851 => 451,  849 => 450,  846 => 449,  844 => 448,  841 => 447,  839 => 446,  836 => 445,  834 => 444,  827 => 440,  821 => 437,  809 => 428,  802 => 423,  792 => 419,  786 => 416,  782 => 414,  778 => 412,  772 => 410,  770 => 409,  764 => 406,  759 => 403,  753 => 402,  745 => 401,  742 => 400,  736 => 398,  734 => 397,  730 => 396,  726 => 394,  723 => 393,  720 => 392,  717 => 391,  713 => 390,  696 => 375,  692 => 373,  690 => 372,  687 => 371,  685 => 370,  682 => 369,  680 => 368,  677 => 367,  675 => 366,  668 => 362,  661 => 358,  657 => 357,  650 => 352,  646 => 351,  639 => 347,  632 => 342,  630 => 341,  618 => 332,  611 => 327,  601 => 323,  597 => 321,  591 => 319,  586 => 317,  581 => 316,  579 => 315,  573 => 312,  567 => 308,  559 => 306,  557 => 305,  553 => 304,  550 => 303,  546 => 301,  542 => 299,  540 => 298,  535 => 295,  531 => 294,  522 => 287,  518 => 285,  514 => 283,  512 => 282,  501 => 274,  488 => 263,  482 => 260,  478 => 258,  476 => 257,  472 => 255,  466 => 252,  462 => 250,  460 => 249,  455 => 247,  448 => 243,  439 => 236,  435 => 234,  433 => 233,  430 => 232,  428 => 231,  425 => 230,  423 => 229,  412 => 221,  408 => 220,  405 => 219,  399 => 215,  393 => 213,  391 => 212,  384 => 207,  378 => 204,  375 => 203,  373 => 202,  369 => 201,  363 => 197,  359 => 195,  355 => 193,  353 => 192,  350 => 191,  348 => 190,  345 => 189,  343 => 188,  324 => 172,  314 => 165,  309 => 162,  301 => 157,  293 => 152,  289 => 150,  287 => 149,  279 => 144,  263 => 131,  254 => 125,  247 => 121,  238 => 115,  230 => 110,  221 => 103,  208 => 102,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
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
    .status-completed { background: #dcfce7; color: #16a34a; }
    .status-cancelled { background: #fee2e2; color: #dc2626; }
    .status-refunded { background: #fef3c7; color: #d97706; }
    
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
            <!-- Bouton d'impression rapide -->
            <button type=\"button\" class=\"btn btn-outline-success quick-print\" 
                    data-order-id=\"{{ order.id }}\" 
                    data-print-type=\"customer\" 
                    title=\"Impression rapide client\">
                <i class=\"fas fa-print me-1\"></i> <i class=\"fas fa-bolt fa-xs\"></i> Imprimer
            </button>
            
            <!-- Menu déroulant -->
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
                <div class=\"info-item\">
                    <div class=\"info-label\">Statut</div>
                    <div class=\"info-value\">
                        {% if order.status == 'completed' %}
                            <span class=\"status-badge status-completed\">✅ Complétée</span>
                        {% elseif order.status == 'cancelled' %}
                            <span class=\"status-badge status-cancelled\">❌ Annulée</span>
                        {% elseif order.status == 'refunded' %}
                            <span class=\"status-badge status-refunded\">🔄 Remboursée</span>
                        {% else %}
                            <span class=\"status-badge status-completed\">✅ Complétée</span>
                        {% endif %}
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

            <!-- Bouton Nouveau retour - Condition simple -->
            {% set hasRemainingItems = false %}

            {# Récupérer les quantités déjà retournées #}
            {% set returnedQuantities = totalReturnedQuantities|default([]) %}

            {# Parcourir les articles de la commande #}
            {% for item in order.orderItems %}
                {% set alreadyReturned = returnedQuantities[item.id]|default(0) %}
                {% set remaining = item.quantity - alreadyReturned %}
                {% if remaining > 0 %}
                    {% set hasRemainingItems = true %}
                {% endif %}
            {% endfor %}

            {# Afficher le bouton seulement s'il reste des articles à retourner #}
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
    
    // Impression du reçu
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
