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

/* purchase/receive.html.twig */
class __TwigTemplate_6a4feda2f84c80fc4b35bb1370189ca8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchase/receive.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchase/receive.html.twig"));

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

        yield "Réceptionner la commande ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 4, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 4), "html", null, true);
        
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
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
    .batch-card {
        transition: all 0.3s ease;
        border-left: 4px solid var(--primary-color);
        margin-bottom: 1.25rem;
        border-radius: 0.75rem;
        overflow: hidden;
    }
    .batch-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }
    .batch-card.has-issue {
        border-left-color: var(--warning-color);
        background-color: #fffbeb;
    }
    .batch-card.removed {
        opacity: 0.6;
        background-color: var(--gray-100);
        border-left-color: #6c757d;
    }
    
    .perishable-badge {
        background-color: #fef3c7;
        color: #92400e;
        font-size: 0.7rem;
        padding: 0.2rem 0.6rem;
        border-radius: 20px;
    }
    
    .remove-checkbox {
        width: 1.2rem;
        height: 1.2rem;
        cursor: pointer;
        accent-color: var(--danger-color);
    }
    
    .issue-indicator {
        background: #fef3c7;
        border-bottom: 1px solid #fde68a;
        padding: 0.6rem 1rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-size: 0.85rem;
    }
    .issue-indicator i {
        color: var(--warning-color);
        font-size: 1.1rem;
    }
    .issue-indicator strong {
        color: #92400e;
    }
    
    .stat-card {
        background: white;
        border-radius: 0.75rem;
        padding: 1rem;
        text-align: center;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        transition: all 0.2s;
    }
    .stat-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    .reception-toolbar {
        background: white;
        border-radius: 0.75rem;
        padding: 1rem 1.25rem;
        margin-bottom: 1.5rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }
    
    .select2-container--bootstrap-5 .select2-selection {
        border-radius: 0.5rem;
        border-color: #e5e7eb;
        min-height: 38px;
    }
    
    .attachment-preview {
        position: relative;
        display: inline-block;
        margin: 5px;
    }
    .attachment-preview img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 8px;
        border: 1px solid #ddd;
    }
    .attachment-preview .remove-attachment {
        position: absolute;
        top: -8px;
        right: -8px;
        background: var(--danger-color);
        color: white;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        cursor: pointer;
        transition: all 0.2s;
        z-index: 10;
    }
    .attachment-preview .remove-attachment:hover {
        background: #c82333;
        transform: scale(1.1);
    }
    .attachment-preview .file-placeholder {
        width: 80px;
        height: 80px;
        background: #f3f4f6;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #e5e7eb;
    }
    
    .btn-primary {
        background: var(--primary-color) !important;
        border-color: var(--primary-color) !important;
    }
    .btn-primary:hover {
        background: var(--primary-dark) !important;
        border-color: var(--primary-dark) !important;
    }
    
    .btn-success {
        background: var(--success-color) !important;
        border-color: var(--success-color) !important;
    }
    .btn-success:hover {
        background: var(--success-color) !important;
        border-color: var(--success-color) !important;
        opacity: 0.9;
    }
    
    .btn-danger {
        background: var(--danger-color) !important;
        border-color: var(--danger-color) !important;
    }
    .btn-danger:hover {
        background: var(--danger-color) !important;
        border-color: var(--danger-color) !important;
        opacity: 0.9;
    }
    
    .text-primary {
        color: var(--primary-color) !important;
    }
    
    .badge.bg-primary {
        background: var(--primary-color) !important;
    }
    
    .modal-loading-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(255, 255, 255, 0.85);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 1060;
        border-radius: 0.5rem;
        backdrop-filter: blur(4px);
    }
    .modal-loading-overlay.show {
        display: flex;
    }
    .modal-content {
        position: relative;
        overflow: hidden;
    }
    .spinner-container {
        text-align: center;
    }
    .spinner-container .spinner-border {
        width: 3rem;
        height: 3rem;
        color: var(--primary-color);
    }
    .spinner-container .loading-text {
        margin-top: 1rem;
        color: var(--primary-color);
        font-weight: 500;
    }

    .internal-purchase-badge {
        background-color: #f3f4f6;
        color: #6b7280;
        font-size: 0.75rem;
        padding: 0.25rem 0.6rem;
        border-radius: 20px;
        font-style: italic;
        display: inline-block;
    }
    
    @media (max-width: 768px) {
        .reception-toolbar {
            flex-direction: column;
            align-items: stretch;
        }
        .batch-card .row {
            flex-direction: column;
        }
        .batch-card .col-md-4, .batch-card .col-md-6 {
            margin-bottom: 0.75rem;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 237
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

        // line 238
        yield "<div class=\"container-fluid px-4 py-3\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 244
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_index");
        yield "\">Commandes</a></li>
                    <li class=\"breadcrumb-item active\">";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 245, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 245), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"bi bi-box-seam me-2 text-primary\"></i>
                Réceptionner la commande
            </h1>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 254, $this->source); })()), "id", [], "any", false, false, false, 254)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"bi bi-eye me-1\"></i> Détails
            </a>
            <a href=\"";
        // line 257
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_index");
        yield "\" class=\"btn btn-outline-primary\">
                <i class=\"bi bi-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <!-- Carte récapitulative commande -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-body py-3\">
            <div class=\"row g-3 text-center text-md-start\">
                <div class=\"col-md-3\">
                    <div class=\"small text-muted text-uppercase\">N° commande</div>
                    <div class=\"fw-bold\">";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 269, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 269), "html", null, true);
        yield "</div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"small text-muted text-uppercase\">Fournisseur</div>
                    ";
        // line 273
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 273, $this->source); })()), "supplier", [], "any", false, false, false, 273)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 274
            yield "                        <div class=\"fw-bold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 274, $this->source); })()), "supplier", [], "any", false, false, false, 274), "name", [], "any", false, false, false, 274), "html", null, true);
            yield "</div>
                    ";
        } else {
            // line 276
            yield "                        <div class=\"internal-purchase-badge\">
                            <i class=\"bi bi-building me-1\"></i>Achat interne
                        </div>
                    ";
        }
        // line 280
        yield "                </div>
                <div class=\"col-md-3\">
                    <div class=\"small text-muted text-uppercase\">Date commande</div>
                    <div>";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 283, $this->source); })()), "createdAt", [], "any", false, false, false, 283), "d/m/Y"), "html", null, true);
        yield "</div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"small text-muted text-uppercase\">Montant total</div>
                    <div class=\"fw-bold text-primary\">";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 287, $this->source); })()), "totalAmount", [], "any", false, false, false, 287), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 287, $this->source); })()), "hmaService", [], "any", false, false, false, 287)), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 293
        $context["sessionIssues"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 293, $this->source); })()), "session", [], "any", false, false, false, 293), "get", ["pending_issues", []], "method", false, false, false, 293);
        // line 294
        yield "    ";
        $context["pendingCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["sessionIssues"]) || array_key_exists("sessionIssues", $context) ? $context["sessionIssues"] : (function () { throw new RuntimeError('Variable "sessionIssues" does not exist.', 294, $this->source); })()));
        // line 295
        yield "    ";
        $context["hasSupplier"] =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 295, $this->source); })()), "supplier", [], "any", false, false, false, 295));
        // line 296
        yield "
    <!-- Barre d'outils réception -->
    <div class=\"reception-toolbar\">
        <div class=\"d-flex align-items-center gap-3\">
            <div class=\"stat-card p-2 px-3\">
                <i class=\"bi bi-box-seam text-primary me-1\"></i>
                <span class=\"fw-bold\">";
        // line 302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 302, $this->source); })()), "purchaseItems", [], "any", false, false, false, 302)), "html", null, true);
        yield "</span>
                <span class=\"text-muted small\">articles</span>
            </div>
            ";
        // line 305
        if (((isset($context["pendingCount"]) || array_key_exists("pendingCount", $context) ? $context["pendingCount"] : (function () { throw new RuntimeError('Variable "pendingCount" does not exist.', 305, $this->source); })()) > 0)) {
            // line 306
            yield "            <div class=\"stat-card p-2 px-3\" style=\"background: #fef3c7;\">
                <i class=\"bi bi-exclamation-triangle-fill text-warning me-1\"></i>
                <span class=\"fw-bold text-warning\">";
            // line 308
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pendingCount"]) || array_key_exists("pendingCount", $context) ? $context["pendingCount"] : (function () { throw new RuntimeError('Variable "pendingCount" does not exist.', 308, $this->source); })()), "html", null, true);
            yield "</span>
                <span class=\"text-muted small\">problèmes signalés</span>
            </div>
            ";
        }
        // line 312
        yield "        </div>
        <div class=\"text-muted small\">
            ";
        // line 314
        if ((($tmp = (isset($context["hasSupplier"]) || array_key_exists("hasSupplier", $context) ? $context["hasSupplier"] : (function () { throw new RuntimeError('Variable "hasSupplier" does not exist.', 314, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 315
            yield "                <i class=\"bi bi-info-circle me-1\"></i>
                Les problèmes signalés seront traités à la validation
            ";
        } else {
            // line 318
            yield "                <i class=\"bi bi-info-circle me-1\"></i>
                <span class=\"internal-purchase-badge\">
                    Achat interne — signalement de problème non disponible
                </span>
            ";
        }
        // line 323
        yield "        </div>
    </div>

    <!-- Formulaire de réception -->
    <form method=\"POST\" class=\"receive-form\" id=\"receiveForm\">
        ";
        // line 328
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 328, $this->source); })()), "purchaseItems", [], "any", false, false, false, 328));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 329
            yield "            ";
            $context["product"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 329);
            // line 330
            yield "            ";
            $context["itemTotalPrice"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 330)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 330)) : (0)) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 330));
            // line 331
            yield "            
            ";
            // line 332
            $context["hasPendingIssue"] = false;
            // line 333
            yield "            ";
            $context["pendingIssue"] = null;
            // line 334
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sessionIssues"]) || array_key_exists("sessionIssues", $context) ? $context["sessionIssues"] : (function () { throw new RuntimeError('Variable "sessionIssues" does not exist.', 334, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["issue"]) {
                // line 335
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "batch_id", [], "any", false, false, false, 335) == CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 335))) {
                    // line 336
                    yield "                    ";
                    $context["hasPendingIssue"] = true;
                    // line 337
                    yield "                    ";
                    $context["pendingIssue"] = $context["issue"];
                    // line 338
                    yield "                ";
                }
                // line 339
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['issue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 340
            yield "            
            <div class=\"card batch-card ";
            // line 341
            if ((($tmp = (isset($context["hasPendingIssue"]) || array_key_exists("hasPendingIssue", $context) ? $context["hasPendingIssue"] : (function () { throw new RuntimeError('Variable "hasPendingIssue" does not exist.', 341, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "has-issue";
            }
            yield "\" data-item-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 341), "html", null, true);
            yield "\">
                <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
                    <div class=\"d-flex align-items-center gap-3\">
                        ";
            // line 344
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 344, $this->source); })()), "image", [], "any", false, false, false, 344)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 345
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 345, $this->source); })()), "image", [], "any", false, false, false, 345))), "html", null, true);
                yield "\" 
                                 alt=\"";
                // line 346
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 346, $this->source); })()), "name", [], "any", false, false, false, 346), "html", null, true);
                yield "\" 
                                 class=\"rounded\"
                                 style=\"width: 45px; height: 45px; object-fit: cover;\">
                        ";
            } else {
                // line 350
                yield "                            <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 45px; height: 45px;\">
                                <i class=\"bi bi-box text-secondary fs-5\"></i>
                            </div>
                        ";
            }
            // line 354
            yield "                        <div>
                            <h6 class=\"mb-0 fw-semibold\">";
            // line 355
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 355, $this->source); })()), "name", [], "any", false, false, false, 355), "html", null, true);
            yield "</h6>
                            <div class=\"small text-muted\">
                                <span class=\"me-2\">Code: ";
            // line 357
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 357, $this->source); })()), "barcode", [], "any", false, false, false, 357), "html", null, true);
            yield "</span>
                                ";
            // line 358
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 358, $this->source); })()), "hasExpiryDate", [], "any", false, false, false, 358)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 359
                yield "                                    <span class=\"perishable-badge\">
                                        <i class=\"bi bi-calendar-exclamation me-1\"></i>Périssable
                                    </span>
                                ";
            }
            // line 363
            yield "                            </div>
                        </div>
                    </div>
                    <div class=\"text-end\">
                        <div class=\"fw-bold text-primary\">";
            // line 367
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((isset($context["itemTotalPrice"]) || array_key_exists("itemTotalPrice", $context) ? $context["itemTotalPrice"] : (function () { throw new RuntimeError('Variable "itemTotalPrice" does not exist.', 367, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 367, $this->source); })()), "hmaService", [], "any", false, false, false, 367)), "html", null, true);
            yield "</div>
                        <div class=\"small text-muted\">";
            // line 368
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 368)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 368)) : (0)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 368, $this->source); })()), "hmaService", [], "any", false, false, false, 368)), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 368)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 368, $this->source); })()), "unit", [], "any", false, false, false, 368), "pièce")) : ("pièce")), "html", null, true);
            yield "</div>
                    </div>
                </div>
                
                ";
            // line 372
            if ((($tmp = (isset($context["hasPendingIssue"]) || array_key_exists("hasPendingIssue", $context) ? $context["hasPendingIssue"] : (function () { throw new RuntimeError('Variable "hasPendingIssue" does not exist.', 372, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 373
                yield "                <div class=\"issue-indicator\">
                    <i class=\"bi bi-exclamation-triangle-fill\"></i>
                    <div>
                        <strong>⚠️ Problème signalé</strong>
                        <span class=\"text-muted mx-2\">•</span>
                        <span>";
                // line 378
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(((CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "issue_type", [], "any", true, true, false, 378)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pendingIssue"]) || array_key_exists("pendingIssue", $context) ? $context["pendingIssue"] : (function () { throw new RuntimeError('Variable "pendingIssue" does not exist.', 378, $this->source); })()), "issue_type", [], "any", false, false, false, 378), "Non spécifié")) : ("Non spécifié")), ["_" => " "])), "html", null, true);
                yield "</span>
                        <span class=\"text-muted mx-2\">•</span>
                        <span>";
                // line 380
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "affected_quantity", [], "any", true, true, false, 380)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pendingIssue"]) || array_key_exists("pendingIssue", $context) ? $context["pendingIssue"] : (function () { throw new RuntimeError('Variable "pendingIssue" does not exist.', 380, $this->source); })()), "affected_quantity", [], "any", false, false, false, 380), 0)) : (0)), "html", null, true);
                yield " unité(s)</span>
                        <span class=\"text-muted mx-2\">•</span>
                        <span>Priorité: ";
                // line 382
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "priority", [], "any", true, true, false, 382)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pendingIssue"]) || array_key_exists("pendingIssue", $context) ? $context["pendingIssue"] : (function () { throw new RuntimeError('Variable "pendingIssue" does not exist.', 382, $this->source); })()), "priority", [], "any", false, false, false, 382), "medium")) : ("medium"))), "html", null, true);
                yield "</span>
                    </div>
                </div>
                ";
            }
            // line 386
            yield "                
                <div class=\"card-body\">
                    <input type=\"hidden\" name=\"item_id[]\" value=\"";
            // line 388
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 388), "html", null, true);
            yield "\">
                    
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-check\">
                                <input class=\"form-check-input remove-checkbox\" type=\"checkbox\" 
                                       name=\"remove_";
            // line 394
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 394), "html", null, true);
            yield "\" id=\"remove_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 394), "html", null, true);
            yield "\" value=\"1\">
                                <label class=\"form-check-label text-danger\" for=\"remove_";
            // line 395
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 395), "html", null, true);
            yield "\">
                                    <i class=\"bi bi-trash me-1\"></i> Ne pas réceptionner cet article
                                </label>
                            </div>
                        </div>
                        <div class=\"col-md-6 text-md-end\">
                            ";
            // line 401
            if ((($tmp = (isset($context["hasSupplier"]) || array_key_exists("hasSupplier", $context) ? $context["hasSupplier"] : (function () { throw new RuntimeError('Variable "hasSupplier" does not exist.', 401, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 402
                yield "                                <div class=\"btn-group\">
                                    <button type=\"button\" 
                                            class=\"btn btn-sm ";
                // line 404
                if ((($tmp = (isset($context["hasPendingIssue"]) || array_key_exists("hasPendingIssue", $context) ? $context["hasPendingIssue"] : (function () { throw new RuntimeError('Variable "hasPendingIssue" does not exist.', 404, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "btn-warning";
                } else {
                    yield "btn-outline-danger";
                }
                yield " report-issue-btn\"
                                            data-item-id=\"";
                // line 405
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 405), "html", null, true);
                yield "\"
                                            data-product-name=\"";
                // line 406
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 406, $this->source); })()), "name", [], "any", false, false, false, 406), "html", null, true);
                yield "\"
                                            data-batch-number=\"LOT-";
                // line 407
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 407, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 407), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 407), "html", null, true);
                yield "\"
                                            data-unit-price=\"";
                // line 408
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 408)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 408), "html", null, true)) : (0));
                yield "\"
                                            data-quantity=\"";
                // line 409
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 409), "html", null, true);
                yield "\"
                                            data-total-price=\"";
                // line 410
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["itemTotalPrice"]) || array_key_exists("itemTotalPrice", $context) ? $context["itemTotalPrice"] : (function () { throw new RuntimeError('Variable "itemTotalPrice" does not exist.', 410, $this->source); })()), "html", null, true);
                yield "\"
                                            data-unit=\"";
                // line 411
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 411)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 411, $this->source); })()), "unit", [], "any", false, false, false, 411), "pièce")) : ("pièce")), "html", null, true);
                yield "\"
                                            ";
                // line 412
                if ((($tmp = (isset($context["hasPendingIssue"]) || array_key_exists("hasPendingIssue", $context) ? $context["hasPendingIssue"] : (function () { throw new RuntimeError('Variable "hasPendingIssue" does not exist.', 412, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 413
                    yield "                                            data-edit-mode=\"true\"
                                            data-issue-type=\"";
                    // line 414
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pendingIssue"]) || array_key_exists("pendingIssue", $context) ? $context["pendingIssue"] : (function () { throw new RuntimeError('Variable "pendingIssue" does not exist.', 414, $this->source); })()), "issue_type", [], "any", false, false, false, 414), "html", null, true);
                    yield "\"
                                            data-issue-description=\"";
                    // line 415
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pendingIssue"]) || array_key_exists("pendingIssue", $context) ? $context["pendingIssue"] : (function () { throw new RuntimeError('Variable "pendingIssue" does not exist.', 415, $this->source); })()), "description", [], "any", false, false, false, 415), "html", null, true);
                    yield "\"
                                            data-issue-priority=\"";
                    // line 416
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pendingIssue"]) || array_key_exists("pendingIssue", $context) ? $context["pendingIssue"] : (function () { throw new RuntimeError('Variable "pendingIssue" does not exist.', 416, $this->source); })()), "priority", [], "any", false, false, false, 416), "html", null, true);
                    yield "\"
                                            data-issue-affected-quantity=\"";
                    // line 417
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pendingIssue"]) || array_key_exists("pendingIssue", $context) ? $context["pendingIssue"] : (function () { throw new RuntimeError('Variable "pendingIssue" does not exist.', 417, $this->source); })()), "affected_quantity", [], "any", false, false, false, 417), "html", null, true);
                    yield "\"
                                            data-issue-stock-action=\"";
                    // line 418
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pendingIssue"]) || array_key_exists("pendingIssue", $context) ? $context["pendingIssue"] : (function () { throw new RuntimeError('Variable "pendingIssue" does not exist.', 418, $this->source); })()), "stock_action", [], "any", false, false, false, 418), "html", null, true);
                    yield "\"
                                            data-issue-attachments=\"";
                    // line 419
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pendingIssue"]) || array_key_exists("pendingIssue", $context) ? $context["pendingIssue"] : (function () { throw new RuntimeError('Variable "pendingIssue" does not exist.', 419, $this->source); })()), "attachments", [], "any", false, false, false, 419)), "html_attr");
                    yield "\"
                                            ";
                }
                // line 420
                yield ">
                                        <i class=\"bi bi-exclamation-triangle me-1\"></i>
                                        ";
                // line 422
                if ((($tmp = (isset($context["hasPendingIssue"]) || array_key_exists("hasPendingIssue", $context) ? $context["hasPendingIssue"] : (function () { throw new RuntimeError('Variable "hasPendingIssue" does not exist.', 422, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "Modifier le signalement";
                } else {
                    yield "Signaler un problème";
                }
                // line 423
                yield "                                    </button>
                                    ";
                // line 424
                if ((($tmp = (isset($context["hasPendingIssue"]) || array_key_exists("hasPendingIssue", $context) ? $context["hasPendingIssue"] : (function () { throw new RuntimeError('Variable "hasPendingIssue" does not exist.', 424, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 425
                    yield "                                    <button type=\"button\" 
                                            class=\"btn btn-sm btn-outline-danger delete-issue-btn\"
                                            data-item-id=\"";
                    // line 427
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 427), "html", null, true);
                    yield "\"
                                            data-product-name=\"";
                    // line 428
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 428, $this->source); })()), "name", [], "any", false, false, false, 428), "html", null, true);
                    yield "\">
                                        <i class=\"bi bi-trash\"></i>
                                    </button>
                                    ";
                }
                // line 432
                yield "                                </div>
                            ";
            }
            // line 434
            yield "                        </div>
                    </div>

                    <div class=\"row g-3\">
                        <div class=\"col-md-4\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-upc-scan me-1\"></i>Numéro de lot
                                ";
            // line 441
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 441, $this->source); })()), "hasExpiryDate", [], "any", false, false, false, 441)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"text-danger\">*</span>";
            }
            // line 442
            yield "                            </label>
                            <input type=\"text\" 
                                name=\"batch_number_";
            // line 444
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 444), "html", null, true);
            yield "\" 
                                class=\"form-control form-control-sm\" 
                                value=\"";
            // line 446
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 446)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 446), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((("LOT-" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 446, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 446)) . "-") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 446)), "html", null, true)));
            yield "\"
                                ";
            // line 447
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 447, $this->source); })()), "hasExpiryDate", [], "any", false, false, false, 447)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "required";
            }
            // line 448
            yield "                                placeholder=\"Ex: LOT-20250328-001\">
                            <small class=\"text-muted\">Laissez vide pour génération automatique</small>
                        </div>

                        <div class=\"col-md-4\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-box-seam me-1\"></i>Quantité commandée
                            </label>
                            <input type=\"number\" class=\"form-control form-control-sm bg-light\" value=\"";
            // line 456
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 456), "html", null, true);
            yield "\" readonly disabled>
                        </div>

                        <div class=\"col-md-4\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-check-circle me-1\"></i>Quantité reçue
                            </label>
                            <input type=\"number\" 
                                   name=\"received_quantity_";
            // line 464
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 464), "html", null, true);
            yield "\" 
                                   class=\"form-control form-control-sm received-quantity\" 
                                   value=\"";
            // line 466
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 466), "html", null, true);
            yield "\"
                                   min=\"0\"
                                   step=\"1\"
                                   required>
                        </div>
                    </div>

                    <div class=\"row g-3 mt-1\">
                        <div class=\"col-md-6\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-tag me-1\"></i>Prix unitaire commandé
                            </label>
                            <input type=\"text\" class=\"form-control form-control-sm bg-light\" 
                                   value=\"";
            // line 479
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 479)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 479)) : (0)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 479, $this->source); })()), "hmaService", [], "any", false, false, false, 479)), "html", null, true);
            yield "\" readonly disabled>
                        </div>

                        <div class=\"col-md-6\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-pencil me-1\"></i>Prix unitaire réel
                            </label>
                            <input type=\"number\" 
                                   name=\"received_price_";
            // line 487
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 487), "html", null, true);
            yield "\" 
                                   class=\"form-control form-control-sm received-price\" 
                                   value=\"";
            // line 489
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 489)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 489), "html", null, true)) : (0));
            yield "\"
                                   step=\"0.01\"
                                   min=\"0\">
                        </div>
                    </div>

                    <div class=\"row g-3 mt-1\">
                        <div class=\"col-md-12\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-geo-alt me-1\"></i>Emplacement
                            </label>
                            <select name=\"location_id_";
            // line 500
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 500), "html", null, true);
            yield "\" 
                                    class=\"form-select form-select-sm location-select\"
                                    data-placeholder=\"-- Sélectionner --\">
                                <option value=\"\">-- Sélectionner un emplacement --</option>
                                ";
            // line 504
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 504, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 505
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 505), "html", null, true);
                yield "\">
                                        ";
                // line 506
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["location"], "code", [], "any", false, false, false, 506)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["location"], "code", [], "any", false, false, false, 506) . " - "), "html", null, true)) : (""));
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 506), "html", null, true);
                yield "
                                    </option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 509
            yield "                            </select>
                        </div>
                    </div>

                    ";
            // line 513
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 513, $this->source); })()), "hasExpiryDate", [], "any", false, false, false, 513)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 514
                yield "                    <div class=\"row g-3 mt-1\">
                        <div class=\"col-md-6\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-calendar-plus me-1\"></i>Date de fabrication
                                <span class=\"text-danger\">*</span>
                            </label>
                            <input type=\"date\" 
                                   name=\"manufacturing_date_";
                // line 521
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 521), "html", null, true);
                yield "\" 
                                   class=\"form-control form-control-sm\" 
                                   required
                                   value=\"";
                // line 524
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
                yield "\">
                        </div>
                        <div class=\"col-md-6\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-calendar-x me-1\"></i>Date d'expiration
                                <span class=\"text-danger\">*</span>
                            </label>
                            <input type=\"date\" 
                                   name=\"expiry_date_";
                // line 532
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 532), "html", null, true);
                yield "\" 
                                   class=\"form-control form-control-sm\" 
                                   required
                                   min=\"";
                // line 535
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
                yield "\">
                        </div>
                    </div>
                    ";
            } else {
                // line 539
                yield "                    <div class=\"alert alert-success bg-light border-0 mt-3 mb-0 py-2 small\">
                        <i class=\"bi bi-check-circle me-1\"></i> Produit non périssable - lot créé automatiquement
                    </div>
                    ";
            }
            // line 543
            yield "                </div>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 546
        yield "
        <div class=\"card border-0 shadow-sm mt-4\">
            <div class=\"card-body py-3\">
                <div class=\"d-flex justify-content-end gap-2\">
                    <a href=\"";
        // line 550
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 550, $this->source); })()), "id", [], "any", false, false, false, 550)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"bi bi-x-lg me-1\"></i> Annuler
                    </a>
                    <button type=\"button\" class=\"btn btn-success px-4\" id=\"confirmReceptionBtn\">
                        <i class=\"bi bi-check-lg me-1\"></i> Confirmer la réception
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Modal de confirmation de réception -->
<div class=\"modal fade\" id=\"confirmReceptionModal\" tabindex=\"-1\" data-bs-backdrop=\"static\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-loading-overlay\" id=\"confirmModalLoading\">
                <div class=\"spinner-container\">
                    <div class=\"spinner-border\" role=\"status\">
                        <span class=\"visually-hidden\">Chargement...</span>
                    </div>
                    <div class=\"loading-text\">Traitement en cours...</div>
                </div>
            </div>
            
            <div class=\"modal-header bg-success text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"bi bi-check-circle me-2\"></i>Confirmer la réception
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Êtes-vous sûr de vouloir confirmer la réception de cette commande ?</p>
                <ul class=\"mb-0\">
                    <li>Les lots de stock seront créés</li>
                    <li>Le stock sera mis à jour</li>
                    ";
        // line 586
        if ((($tmp = (isset($context["hasSupplier"]) || array_key_exists("hasSupplier", $context) ? $context["hasSupplier"] : (function () { throw new RuntimeError('Variable "hasSupplier" does not exist.', 586, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 587
            yield "                        <li>Les problèmes signalés généreront des avoirs</li>
                        <li>Le fournisseur sera notifié</li>
                    ";
        }
        // line 590
        yield "                </ul>
                <div class=\"alert alert-warning mt-3 mb-0 small\">
                    <i class=\"bi bi-exclamation-triangle me-1\"></i>
                    Cette action est irréversible.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\" id=\"cancelConfirmBtn\">Annuler</button>
                <button type=\"button\" class=\"btn btn-success\" id=\"confirmReceptionSubmit\">
                    <i class=\"bi bi-check-lg me-1\"></i> Confirmer
                </button>
            </div>
        </div>
    </div>
</div>

";
        // line 606
        if ((($tmp = (isset($context["hasSupplier"]) || array_key_exists("hasSupplier", $context) ? $context["hasSupplier"] : (function () { throw new RuntimeError('Variable "hasSupplier" does not exist.', 606, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 607
            yield "<!-- Modal Signaler un problème -->
<div class=\"modal fade\" id=\"reportIssueModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background: var(--danger-color); color: white; padding: 0.5rem 1rem;\">
                <h5 class=\"modal-title fs-6\">
                    <i class=\"bi bi-exclamation-triangle me-2\"></i><span id=\"modalTitle\">Signaler un problème</span>
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form method=\"post\" action=\"";
            // line 617
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_report_issue_temp");
            yield "\" enctype=\"multipart/form-data\" id=\"issueForm\">
                <div class=\"modal-body py-3\">
                    <input type=\"hidden\" name=\"batch_id\" id=\"report_batch_id\">
                    <input type=\"hidden\" name=\"purchase_id\" value=\"";
            // line 620
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 620, $this->source); })()), "id", [], "any", false, false, false, 620), "html", null, true);
            yield "\">
                    <input type=\"hidden\" name=\"existing_attachments\" id=\"existing_attachments\" value=\"\">
                    
                    <div class=\"bg-light p-3 rounded mb-3\">
                        <div class=\"row small\">
                            <div class=\"col-6\"><span class=\"text-muted\">Produit :</span> <strong id=\"report_product_name\"></strong></div>
                            <div class=\"col-6\"><span class=\"text-muted\">Lot :</span> <strong id=\"report_batch_number\"></strong></div>
                            <div class=\"col-6 mt-2\"><span class=\"text-muted\">Prix unitaire :</span> <strong id=\"report_unit_price\"></strong></div>
                            <div class=\"col-6 mt-2\"><span class=\"text-muted\">Quantité commandée :</span> <strong id=\"report_ordered_quantity\"></strong></div>
                            <div class=\"col-12 mt-2\"><span class=\"text-muted\">Unité :</span> <strong id=\"report_unit_name\"></strong></div>
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        <label class=\"form-label small fw-semibold\">Quantité concernée</label>
                        <div class=\"d-flex gap-3 mb-2\">
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"quantity_type\" id=\"quantity_all\" value=\"all\" checked>
                                <label class=\"form-check-label small\" for=\"quantity_all\">
                                    Tout le lot (<span id=\"total_quantity_label\">0</span> <span id=\"total_unit_label\">pièce(s)</span>)
                                </label>
                            </div>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"quantity_type\" id=\"quantity_partial\" value=\"partial\">
                                <label class=\"form-check-label small\" for=\"quantity_partial\">Quantité spécifique</label>
                            </div>
                        </div>
                        <div id=\"partial_quantity_container\" style=\"display: none;\">
                            <input type=\"number\" name=\"affected_quantity\" id=\"affected_quantity\" class=\"form-control form-control-sm\" 
                                   placeholder=\"Saisir la quantité\" min=\"1\" step=\"1\">
                            <small class=\"text-muted\">Saisissez le nombre d'unités concernées</small>
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        <label class=\"form-label small fw-semibold\">Type de problème</label>
                        <select name=\"issue_type\" id=\"issue_type\" class=\"form-select form-select-sm\" required>
                            <option value=\"\">-- Sélectionner --</option>
                            <option value=\"damaged\">📦 Produit abîmé</option>
                            <option value=\"quality\">🔍 Défaut de qualité</option>
                            <option value=\"quantity_missing\">📉 Quantité manquante</option>
                            <option value=\"wrong_product\">🔄 Erreur de produit</option>
                            <option value=\"short_shelf_life\">⏰ Durée de vie courte</option>
                            <option value=\"other\">❓ Autre</option>
                        </select>
                    </div>

                    <div class=\"mb-3\">
                        <label class=\"form-label small fw-semibold\">Priorité</label>
                        <select name=\"priority\" id=\"priority\" class=\"form-select form-select-sm\">
                            <option value=\"low\">🟢 Basse</option>
                            <option value=\"medium\" selected>🟡 Moyenne</option>
                            <option value=\"high\">🟠 Haute</option>
                            <option value=\"critical\">🔴 Critique</option>
                        </select>
                    </div>

                    <div class=\"mb-3\">
                        <label class=\"form-label small fw-semibold\">Description</label>
                        <textarea name=\"description\" id=\"description\" class=\"form-control form-control-sm\" rows=\"3\" required placeholder=\"Décrivez précisément le problème...\"></textarea>
                    </div>

                    <div class=\"mb-3\">
                        <label class=\"form-label small fw-semibold\">Action sur le stock</label>
                        <select name=\"stock_action\" id=\"stock_action\" class=\"form-select form-select-sm\">
                            <option value=\"none\">Aucune action (financier uniquement)</option>
                            <option value=\"reduce\">⬇️ Réduire le stock</option>
                            <option value=\"zero\">🗑️ Mettre le stock à zéro</option>
                            <option value=\"return\">📤 Retour fournisseur</option>
                        </select>
                    </div>

                    <div class=\"mb-3\">
                        <label class=\"form-label small fw-semibold\">Pièces jointes</label>
                        <div id=\"attachmentsPreview\" class=\"d-flex flex-wrap gap-2 mb-2\"></div>
                        <input type=\"file\" name=\"attachments[]\" id=\"attachments\" class=\"form-control form-control-sm\" multiple accept=\"image/*,video/*\">
                        <small class=\"text-muted\">Formats supportés: JPG, PNG, GIF, WEBP, MP4, MOV (max 50Mo par fichier)</small>
                    </div>
                </div>
                <div class=\"modal-footer py-2\">
                    <button type=\"button\" class=\"btn btn-sm btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-sm\" id=\"submitIssueBtn\" style=\"background: var(--danger-color); color: white; border-color: var(--danger-color);\">
                        <i class=\"bi bi-send me-1\"></i> Signaler
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal de suppression de problème -->
<div class=\"modal fade\" id=\"deleteIssueModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background: var(--danger-color); color: white;\">
                <h5 class=\"modal-title\">
                    <i class=\"bi bi-exclamation-triangle me-2\"></i> Confirmer la suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"deleteMessage\">Êtes-vous sûr de vouloir supprimer ce signalement ?</p>
                <p class=\"text-muted small mb-0\">Cette action est irréversible. Le problème ne sera pas pris en compte lors de la réception.</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form method=\"post\" id=\"deleteIssueForm\" action=\"\">
                    <button type=\"submit\" class=\"btn\" style=\"background: var(--danger-color); color: white; border-color: var(--danger-color);\">
                        <i class=\"bi bi-trash me-1\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 738
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

        // line 739
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
// ✅ Variable globale : présence d'un fournisseur
const HAS_SUPPLIER = ";
        // line 744
        yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 744, $this->source); })()), "supplier", [], "any", false, false, false, 744))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ";

document.addEventListener('DOMContentLoaded', function() {
    // SELECT2
    document.querySelectorAll('.location-select').forEach(select => {
        if (typeof \$ !== 'undefined') {
            \$(select).select2({
                theme: 'bootstrap-5',
                language: 'fr',
                placeholder: '-- Sélectionner --',
                allowClear: true,
                width: '100%'
            });
        }
    });

    // CASE \"Ne pas réceptionner\"
    document.querySelectorAll('.remove-checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const card = this.closest('.batch-card');
            const inputs = card.querySelectorAll('input:not([type=\"checkbox\"]), select');
            inputs.forEach(input => input.disabled = this.checked);
            
            if (typeof \$ !== 'undefined') {
                const select = card.querySelector('.location-select');
                if (select) this.checked ? \$(select).select2('disable') : \$(select).select2('enable');
            }
            
            card.style.opacity = this.checked ? '0.6' : '1';
        });
    });

    // DATES EXPIRATION
    document.querySelectorAll('input[name^=\"expiry_date_\"]').forEach(input => {
        input.addEventListener('change', function() {
            if (new Date(this.value) < new Date().setHours(0,0,0,0)) {
                alert('La date d\\'expiration ne peut pas être antérieure à aujourd\\'hui.');
                this.value = '';
            }
        });
    });

    // GESTION DES PIÈCES JOINTES (uniquement si fournisseur)
    if (!HAS_SUPPLIER) {
        initConfirmReception();
        return;
    }

    let currentAttachments = [];
    const attachmentsPreview = document.getElementById('attachmentsPreview');
    const existingAttachmentsInput = document.getElementById('existing_attachments');
    
    function updateAttachmentsPreview() {
        if (!attachmentsPreview) return;
        
        attachmentsPreview.innerHTML = '';
        currentAttachments.forEach((attachment, index) => {
            const extension = attachment.split('.').pop().toLowerCase();
            const isImage = ['jpg', 'jpeg', 'png', 'gif', 'webp'].includes(extension);
            
            const previewDiv = document.createElement('div');
            previewDiv.className = 'attachment-preview';
            previewDiv.innerHTML = `
                \${isImage ? 
                    `<img src=\"/uploads/credit_notes_attachments/\${attachment}\" alt=\"Pièce jointe\">` :
                    `<div class=\"file-placeholder\">
                        <i class=\"bi bi-file-earmark fs-1 text-muted\"></i>
                     </div>`
                }
                <div class=\"remove-attachment\" data-index=\"\${index}\">
                    <i class=\"bi bi-x\"></i>
                </div>
                <small class=\"d-block text-truncate\" style=\"max-width:80px\">\${attachment.length > 15 ? attachment.substring(0, 12) + '...' : attachment}</small>
            `;
            attachmentsPreview.appendChild(previewDiv);
        });
        
        if (existingAttachmentsInput) {
            existingAttachmentsInput.value = JSON.stringify(currentAttachments);
        }
    }
    
    document.addEventListener('click', function(e) {
        const removeBtn = e.target.closest('.remove-attachment');
        if (removeBtn) {
            const index = parseInt(removeBtn.dataset.index);
            if (!isNaN(index)) {
                currentAttachments.splice(index, 1);
                updateAttachmentsPreview();
            }
        }
    });

    // MODAL SIGNALEMENT
    let currentOrderedQuantity = 0, currentUnit = 'pièce(s)', isEditMode = false;
    const quantityAll = document.getElementById('quantity_all');
    const quantityPartial = document.getElementById('quantity_partial');
    const partialContainer = document.getElementById('partial_quantity_container');
    const affectedQty = document.getElementById('affected_quantity');
    const modalTitle = document.getElementById('modalTitle');
    const totalQuantityLabel = document.getElementById('total_quantity_label');
    const totalUnitLabel = document.getElementById('total_unit_label');
    const reportUnitName = document.getElementById('report_unit_name');
    
    if (quantityAll) {
        quantityAll.addEventListener('change', () => {
            if (partialContainer) partialContainer.style.display = 'none';
            if (affectedQty) affectedQty.value = '';
        });
    }
    
    if (quantityPartial) {
        quantityPartial.addEventListener('change', () => {
            if (partialContainer) partialContainer.style.display = 'block';
        });
    }
    
    if (affectedQty) {
        affectedQty.addEventListener('input', function() {
            let val = parseInt(this.value);
            if (val > currentOrderedQuantity) this.value = currentOrderedQuantity;
            if (val < 1) this.value = 1;
        });
    }

    const reportModalEl = document.getElementById('reportIssueModal');
    const reportModal = reportModalEl ? new bootstrap.Modal(reportModalEl) : null;
    
    document.querySelectorAll('.report-issue-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            if (!reportModal) return;
            
            isEditMode = this.dataset.editMode === 'true';
            modalTitle.textContent = isEditMode ? 'Modifier le signalement' : 'Signaler un problème';
            
            currentOrderedQuantity = parseInt(this.dataset.quantity);
            currentUnit = this.dataset.unit || 'pièce(s)';
            
            document.getElementById('report_product_name').textContent = this.dataset.productName;
            document.getElementById('report_batch_number').textContent = this.dataset.batchNumber;
            document.getElementById('report_ordered_quantity').textContent = this.dataset.quantity + ' ' + currentUnit;
            document.getElementById('report_unit_price').textContent = parseFloat(this.dataset.unitPrice).toLocaleString('fr-FR') + ' FCFA';
            document.getElementById('report_batch_id').value = this.dataset.itemId;
            
            if (totalQuantityLabel) totalQuantityLabel.textContent = this.dataset.quantity;
            if (totalUnitLabel) totalUnitLabel.textContent = currentUnit;
            if (reportUnitName) reportUnitName.textContent = currentUnit;
            if (affectedQty) affectedQty.max = this.dataset.quantity;
            
            currentAttachments = [];
            updateAttachmentsPreview();
            
            if (isEditMode) {
                const issueAttachments = this.dataset.issueAttachments ? JSON.parse(this.dataset.issueAttachments.replace(/&quot;/g, '\"')) : [];
                
                document.getElementById('issue_type').value = this.dataset.issueType || '';
                document.getElementById('description').value = this.dataset.issueDescription || '';
                document.getElementById('priority').value = this.dataset.issuePriority || 'medium';
                document.getElementById('stock_action').value = this.dataset.issueStockAction || 'none';
                
                if (issueAttachments.length) {
                    currentAttachments = [...issueAttachments];
                    updateAttachmentsPreview();
                }
                
                const issueAffectedQty = parseInt(this.dataset.issueAffectedQuantity) || currentOrderedQuantity;
                if (issueAffectedQty < currentOrderedQuantity) {
                    if (quantityPartial) quantityPartial.checked = true;
                    if (partialContainer) partialContainer.style.display = 'block';
                    if (affectedQty) affectedQty.value = issueAffectedQty;
                } else {
                    if (quantityAll) quantityAll.checked = true;
                    if (partialContainer) partialContainer.style.display = 'none';
                }
            } else {
                document.getElementById('issue_type').value = '';
                document.getElementById('description').value = '';
                document.getElementById('priority').value = 'medium';
                document.getElementById('stock_action').value = 'none';
                
                if (quantityAll) quantityAll.checked = true;
                if (partialContainer) partialContainer.style.display = 'none';
                if (affectedQty) affectedQty.value = '';
            }
            
            reportModal.show();
        });
    });
    
    const issueForm = document.getElementById('issueForm');
    if (issueForm) {
        issueForm.addEventListener('submit', function(e) {
            if (existingAttachmentsInput && currentAttachments.length > 0) {
                existingAttachmentsInput.value = JSON.stringify(currentAttachments);
            }
        });
    }

    // SUPPRESSION DE PROBLÈME
    const deleteModalEl = document.getElementById('deleteIssueModal');
    const deleteModal = deleteModalEl ? new bootstrap.Modal(deleteModalEl) : null;
    const deleteMessage = document.getElementById('deleteMessage');
    const deleteForm = document.getElementById('deleteIssueForm');
    
    document.querySelectorAll('.delete-issue-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            if (!deleteModal) return;
            
            if (deleteMessage) {
                deleteMessage.innerHTML = `Êtes-vous sûr de vouloir supprimer le signalement pour le produit <strong>\${this.dataset.productName}</strong> ?`;
            }
            
            if (deleteForm) {
                deleteForm.action = \"";
        // line 957
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_delete_issue_temp", ["batchId" => "BATCH_ID_PLACEHOLDER"]);
        yield "\".replace('BATCH_ID_PLACEHOLDER', this.dataset.itemId);
            }
            
            deleteModal.show();
        });
    });

    // CONFIRMATION DE RÉCEPTION
    initConfirmReception();
});

function initConfirmReception() {
    const confirmModalEl = document.getElementById('confirmReceptionModal');
    if (!confirmModalEl) return;
    
    const confirmModal = new bootstrap.Modal(confirmModalEl);
    const confirmBtn = document.getElementById('confirmReceptionBtn');
    const confirmSubmit = document.getElementById('confirmReceptionSubmit');
    const cancelConfirmBtn = document.getElementById('cancelConfirmBtn');
    const confirmLoading = document.getElementById('confirmModalLoading');
    const receiveForm = document.getElementById('receiveForm');
    
    if (confirmBtn) {
        confirmBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            let hasReceived = false;
            document.querySelectorAll('.batch-card').forEach(card => {
                if (!card.querySelector('.remove-checkbox')?.checked) hasReceived = true;
            });
            
            if (!hasReceived) {
                alert('Vous devez réceptionner au moins un article.');
                return;
            }
            
            const missingFields = [];
            const requiredInputs = document.querySelectorAll('[required]');
            
            requiredInputs.forEach(input => {
                if (input.disabled) return;
                if (input.offsetParent === null) return;
                
                let value = input.value.trim();
                if (input.type === 'checkbox') {
                    value = input.checked ? 'checked' : '';
                }
                
                if (!value) {
                    missingFields.push(input);
                    input.classList.add('is-invalid');
                } else {
                    input.classList.remove('is-invalid');
                }
            });
            
            if (missingFields.length > 0) {
                const fieldNames = missingFields.map(f => {
                    const label = f.closest('.row')?.querySelector('.form-label')?.textContent || f.name;
                    return `- \${label}`;
                }).join('\\n');
                alert(`Veuillez remplir tous les champs obligatoires :\\n\${fieldNames}`);
                missingFields[0].focus();
                return;
            }
            
            confirmModal.show();
        });
    }
    
    if (confirmSubmit) {
        confirmSubmit.addEventListener('click', function() {
            if (confirmLoading) confirmLoading.classList.add('show');
            
            this.disabled = true;
            this.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\" role=\"status\" aria-hidden=\"true\"></span> Traitement...';
            
            if (cancelConfirmBtn) cancelConfirmBtn.disabled = true;
            
            setTimeout(() => receiveForm.submit(), 300);
        });
    }
}
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
        return "purchase/receive.html.twig";
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
        return array (  1443 => 957,  1227 => 744,  1219 => 739,  1206 => 738,  1078 => 620,  1072 => 617,  1060 => 607,  1058 => 606,  1040 => 590,  1035 => 587,  1033 => 586,  994 => 550,  988 => 546,  972 => 543,  966 => 539,  959 => 535,  953 => 532,  942 => 524,  936 => 521,  927 => 514,  925 => 513,  919 => 509,  909 => 506,  904 => 505,  900 => 504,  893 => 500,  879 => 489,  874 => 487,  863 => 479,  847 => 466,  842 => 464,  831 => 456,  821 => 448,  817 => 447,  813 => 446,  808 => 444,  804 => 442,  800 => 441,  791 => 434,  787 => 432,  780 => 428,  776 => 427,  772 => 425,  770 => 424,  767 => 423,  761 => 422,  757 => 420,  752 => 419,  748 => 418,  744 => 417,  740 => 416,  736 => 415,  732 => 414,  729 => 413,  727 => 412,  723 => 411,  719 => 410,  715 => 409,  711 => 408,  705 => 407,  701 => 406,  697 => 405,  689 => 404,  685 => 402,  683 => 401,  674 => 395,  668 => 394,  659 => 388,  655 => 386,  648 => 382,  643 => 380,  638 => 378,  631 => 373,  629 => 372,  620 => 368,  616 => 367,  610 => 363,  604 => 359,  602 => 358,  598 => 357,  593 => 355,  590 => 354,  584 => 350,  577 => 346,  572 => 345,  570 => 344,  560 => 341,  557 => 340,  551 => 339,  548 => 338,  545 => 337,  542 => 336,  539 => 335,  534 => 334,  531 => 333,  529 => 332,  526 => 331,  523 => 330,  520 => 329,  503 => 328,  496 => 323,  489 => 318,  484 => 315,  482 => 314,  478 => 312,  471 => 308,  467 => 306,  465 => 305,  459 => 302,  451 => 296,  448 => 295,  445 => 294,  443 => 293,  434 => 287,  427 => 283,  422 => 280,  416 => 276,  410 => 274,  408 => 273,  401 => 269,  386 => 257,  380 => 254,  368 => 245,  364 => 244,  356 => 238,  343 => 237,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/purchase/receive.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Réceptionner la commande {{ purchase.purchaseNumber }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
    .batch-card {
        transition: all 0.3s ease;
        border-left: 4px solid var(--primary-color);
        margin-bottom: 1.25rem;
        border-radius: 0.75rem;
        overflow: hidden;
    }
    .batch-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }
    .batch-card.has-issue {
        border-left-color: var(--warning-color);
        background-color: #fffbeb;
    }
    .batch-card.removed {
        opacity: 0.6;
        background-color: var(--gray-100);
        border-left-color: #6c757d;
    }
    
    .perishable-badge {
        background-color: #fef3c7;
        color: #92400e;
        font-size: 0.7rem;
        padding: 0.2rem 0.6rem;
        border-radius: 20px;
    }
    
    .remove-checkbox {
        width: 1.2rem;
        height: 1.2rem;
        cursor: pointer;
        accent-color: var(--danger-color);
    }
    
    .issue-indicator {
        background: #fef3c7;
        border-bottom: 1px solid #fde68a;
        padding: 0.6rem 1rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-size: 0.85rem;
    }
    .issue-indicator i {
        color: var(--warning-color);
        font-size: 1.1rem;
    }
    .issue-indicator strong {
        color: #92400e;
    }
    
    .stat-card {
        background: white;
        border-radius: 0.75rem;
        padding: 1rem;
        text-align: center;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        transition: all 0.2s;
    }
    .stat-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    .reception-toolbar {
        background: white;
        border-radius: 0.75rem;
        padding: 1rem 1.25rem;
        margin-bottom: 1.5rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }
    
    .select2-container--bootstrap-5 .select2-selection {
        border-radius: 0.5rem;
        border-color: #e5e7eb;
        min-height: 38px;
    }
    
    .attachment-preview {
        position: relative;
        display: inline-block;
        margin: 5px;
    }
    .attachment-preview img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 8px;
        border: 1px solid #ddd;
    }
    .attachment-preview .remove-attachment {
        position: absolute;
        top: -8px;
        right: -8px;
        background: var(--danger-color);
        color: white;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        cursor: pointer;
        transition: all 0.2s;
        z-index: 10;
    }
    .attachment-preview .remove-attachment:hover {
        background: #c82333;
        transform: scale(1.1);
    }
    .attachment-preview .file-placeholder {
        width: 80px;
        height: 80px;
        background: #f3f4f6;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #e5e7eb;
    }
    
    .btn-primary {
        background: var(--primary-color) !important;
        border-color: var(--primary-color) !important;
    }
    .btn-primary:hover {
        background: var(--primary-dark) !important;
        border-color: var(--primary-dark) !important;
    }
    
    .btn-success {
        background: var(--success-color) !important;
        border-color: var(--success-color) !important;
    }
    .btn-success:hover {
        background: var(--success-color) !important;
        border-color: var(--success-color) !important;
        opacity: 0.9;
    }
    
    .btn-danger {
        background: var(--danger-color) !important;
        border-color: var(--danger-color) !important;
    }
    .btn-danger:hover {
        background: var(--danger-color) !important;
        border-color: var(--danger-color) !important;
        opacity: 0.9;
    }
    
    .text-primary {
        color: var(--primary-color) !important;
    }
    
    .badge.bg-primary {
        background: var(--primary-color) !important;
    }
    
    .modal-loading-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(255, 255, 255, 0.85);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 1060;
        border-radius: 0.5rem;
        backdrop-filter: blur(4px);
    }
    .modal-loading-overlay.show {
        display: flex;
    }
    .modal-content {
        position: relative;
        overflow: hidden;
    }
    .spinner-container {
        text-align: center;
    }
    .spinner-container .spinner-border {
        width: 3rem;
        height: 3rem;
        color: var(--primary-color);
    }
    .spinner-container .loading-text {
        margin-top: 1rem;
        color: var(--primary-color);
        font-weight: 500;
    }

    .internal-purchase-badge {
        background-color: #f3f4f6;
        color: #6b7280;
        font-size: 0.75rem;
        padding: 0.25rem 0.6rem;
        border-radius: 20px;
        font-style: italic;
        display: inline-block;
    }
    
    @media (max-width: 768px) {
        .reception-toolbar {
            flex-direction: column;
            align-items: stretch;
        }
        .batch-card .row {
            flex-direction: column;
        }
        .batch-card .col-md-4, .batch-card .col-md-6 {
            margin-bottom: 0.75rem;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4 py-3\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('purchase_index') }}\">Commandes</a></li>
                    <li class=\"breadcrumb-item active\">{{ purchase.purchaseNumber }}</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"bi bi-box-seam me-2 text-primary\"></i>
                Réceptionner la commande
            </h1>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"{{ path('purchase_show', {id: purchase.id}) }}\" class=\"btn btn-outline-secondary\">
                <i class=\"bi bi-eye me-1\"></i> Détails
            </a>
            <a href=\"{{ path('purchase_index') }}\" class=\"btn btn-outline-primary\">
                <i class=\"bi bi-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <!-- Carte récapitulative commande -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-body py-3\">
            <div class=\"row g-3 text-center text-md-start\">
                <div class=\"col-md-3\">
                    <div class=\"small text-muted text-uppercase\">N° commande</div>
                    <div class=\"fw-bold\">{{ purchase.purchaseNumber }}</div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"small text-muted text-uppercase\">Fournisseur</div>
                    {% if purchase.supplier %}
                        <div class=\"fw-bold\">{{ purchase.supplier.name }}</div>
                    {% else %}
                        <div class=\"internal-purchase-badge\">
                            <i class=\"bi bi-building me-1\"></i>Achat interne
                        </div>
                    {% endif %}
                </div>
                <div class=\"col-md-3\">
                    <div class=\"small text-muted text-uppercase\">Date commande</div>
                    <div>{{ purchase.createdAt|date('d/m/Y') }}</div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"small text-muted text-uppercase\">Montant total</div>
                    <div class=\"fw-bold text-primary\">{{ purchase.totalAmount|price_with_currency(purchase.hmaService) }}</div>
                </div>
            </div>
        </div>
    </div>

    {% set sessionIssues = app.session.get('pending_issues', []) %}
    {% set pendingCount = sessionIssues|length %}
    {% set hasSupplier = purchase.supplier is not null %}

    <!-- Barre d'outils réception -->
    <div class=\"reception-toolbar\">
        <div class=\"d-flex align-items-center gap-3\">
            <div class=\"stat-card p-2 px-3\">
                <i class=\"bi bi-box-seam text-primary me-1\"></i>
                <span class=\"fw-bold\">{{ purchase.purchaseItems|length }}</span>
                <span class=\"text-muted small\">articles</span>
            </div>
            {% if pendingCount > 0 %}
            <div class=\"stat-card p-2 px-3\" style=\"background: #fef3c7;\">
                <i class=\"bi bi-exclamation-triangle-fill text-warning me-1\"></i>
                <span class=\"fw-bold text-warning\">{{ pendingCount }}</span>
                <span class=\"text-muted small\">problèmes signalés</span>
            </div>
            {% endif %}
        </div>
        <div class=\"text-muted small\">
            {% if hasSupplier %}
                <i class=\"bi bi-info-circle me-1\"></i>
                Les problèmes signalés seront traités à la validation
            {% else %}
                <i class=\"bi bi-info-circle me-1\"></i>
                <span class=\"internal-purchase-badge\">
                    Achat interne — signalement de problème non disponible
                </span>
            {% endif %}
        </div>
    </div>

    <!-- Formulaire de réception -->
    <form method=\"POST\" class=\"receive-form\" id=\"receiveForm\">
        {% for item in purchase.purchaseItems %}
            {% set product = item.product %}
            {% set itemTotalPrice = (item.unitPrice ?: 0) * item.quantity %}
            
            {% set hasPendingIssue = false %}
            {% set pendingIssue = null %}
            {% for issue in sessionIssues %}
                {% if issue.batch_id == item.id %}
                    {% set hasPendingIssue = true %}
                    {% set pendingIssue = issue %}
                {% endif %}
            {% endfor %}
            
            <div class=\"card batch-card {% if hasPendingIssue %}has-issue{% endif %}\" data-item-id=\"{{ item.id }}\">
                <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
                    <div class=\"d-flex align-items-center gap-3\">
                        {% if product.image %}
                            <img src=\"{{ asset('uploads/products/' ~ product.image) }}\" 
                                 alt=\"{{ product.name }}\" 
                                 class=\"rounded\"
                                 style=\"width: 45px; height: 45px; object-fit: cover;\">
                        {% else %}
                            <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 45px; height: 45px;\">
                                <i class=\"bi bi-box text-secondary fs-5\"></i>
                            </div>
                        {% endif %}
                        <div>
                            <h6 class=\"mb-0 fw-semibold\">{{ product.name }}</h6>
                            <div class=\"small text-muted\">
                                <span class=\"me-2\">Code: {{ product.barcode }}</span>
                                {% if product.hasExpiryDate %}
                                    <span class=\"perishable-badge\">
                                        <i class=\"bi bi-calendar-exclamation me-1\"></i>Périssable
                                    </span>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    <div class=\"text-end\">
                        <div class=\"fw-bold text-primary\">{{ itemTotalPrice|price_with_currency(purchase.hmaService) }}</div>
                        <div class=\"small text-muted\">{{ (item.unitPrice ?: 0)|price_with_currency(purchase.hmaService) }}/{{ product.unit|default('pièce') }}</div>
                    </div>
                </div>
                
                {% if hasPendingIssue %}
                <div class=\"issue-indicator\">
                    <i class=\"bi bi-exclamation-triangle-fill\"></i>
                    <div>
                        <strong>⚠️ Problème signalé</strong>
                        <span class=\"text-muted mx-2\">•</span>
                        <span>{{ pendingIssue.issue_type|default('Non spécifié')|replace({'_': ' '})|capitalize }}</span>
                        <span class=\"text-muted mx-2\">•</span>
                        <span>{{ pendingIssue.affected_quantity|default(0) }} unité(s)</span>
                        <span class=\"text-muted mx-2\">•</span>
                        <span>Priorité: {{ pendingIssue.priority|default('medium')|capitalize }}</span>
                    </div>
                </div>
                {% endif %}
                
                <div class=\"card-body\">
                    <input type=\"hidden\" name=\"item_id[]\" value=\"{{ item.id }}\">
                    
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-check\">
                                <input class=\"form-check-input remove-checkbox\" type=\"checkbox\" 
                                       name=\"remove_{{ item.id }}\" id=\"remove_{{ item.id }}\" value=\"1\">
                                <label class=\"form-check-label text-danger\" for=\"remove_{{ item.id }}\">
                                    <i class=\"bi bi-trash me-1\"></i> Ne pas réceptionner cet article
                                </label>
                            </div>
                        </div>
                        <div class=\"col-md-6 text-md-end\">
                            {% if hasSupplier %}
                                <div class=\"btn-group\">
                                    <button type=\"button\" 
                                            class=\"btn btn-sm {% if hasPendingIssue %}btn-warning{% else %}btn-outline-danger{% endif %} report-issue-btn\"
                                            data-item-id=\"{{ item.id }}\"
                                            data-product-name=\"{{ product.name }}\"
                                            data-batch-number=\"LOT-{{ purchase.purchaseNumber }}-{{ loop.index }}\"
                                            data-unit-price=\"{{ item.unitPrice ?: 0 }}\"
                                            data-quantity=\"{{ item.quantity }}\"
                                            data-total-price=\"{{ itemTotalPrice }}\"
                                            data-unit=\"{{ product.unit|default('pièce') }}\"
                                            {% if hasPendingIssue %}
                                            data-edit-mode=\"true\"
                                            data-issue-type=\"{{ pendingIssue.issue_type }}\"
                                            data-issue-description=\"{{ pendingIssue.description }}\"
                                            data-issue-priority=\"{{ pendingIssue.priority }}\"
                                            data-issue-affected-quantity=\"{{ pendingIssue.affected_quantity }}\"
                                            data-issue-stock-action=\"{{ pendingIssue.stock_action }}\"
                                            data-issue-attachments=\"{{ pendingIssue.attachments|json_encode|escape('html_attr') }}\"
                                            {% endif %}>
                                        <i class=\"bi bi-exclamation-triangle me-1\"></i>
                                        {% if hasPendingIssue %}Modifier le signalement{% else %}Signaler un problème{% endif %}
                                    </button>
                                    {% if hasPendingIssue %}
                                    <button type=\"button\" 
                                            class=\"btn btn-sm btn-outline-danger delete-issue-btn\"
                                            data-item-id=\"{{ item.id }}\"
                                            data-product-name=\"{{ product.name }}\">
                                        <i class=\"bi bi-trash\"></i>
                                    </button>
                                    {% endif %}
                                </div>
                            {% endif %}
                        </div>
                    </div>

                    <div class=\"row g-3\">
                        <div class=\"col-md-4\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-upc-scan me-1\"></i>Numéro de lot
                                {% if product.hasExpiryDate %}<span class=\"text-danger\">*</span>{% endif %}
                            </label>
                            <input type=\"text\" 
                                name=\"batch_number_{{ item.id }}\" 
                                class=\"form-control form-control-sm\" 
                                value=\"{{ item.batchNumber ?: 'LOT-' ~ purchase.purchaseNumber ~ '-' ~ loop.index }}\"
                                {% if product.hasExpiryDate %}required{% endif %}
                                placeholder=\"Ex: LOT-20250328-001\">
                            <small class=\"text-muted\">Laissez vide pour génération automatique</small>
                        </div>

                        <div class=\"col-md-4\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-box-seam me-1\"></i>Quantité commandée
                            </label>
                            <input type=\"number\" class=\"form-control form-control-sm bg-light\" value=\"{{ item.quantity }}\" readonly disabled>
                        </div>

                        <div class=\"col-md-4\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-check-circle me-1\"></i>Quantité reçue
                            </label>
                            <input type=\"number\" 
                                   name=\"received_quantity_{{ item.id }}\" 
                                   class=\"form-control form-control-sm received-quantity\" 
                                   value=\"{{ item.quantity }}\"
                                   min=\"0\"
                                   step=\"1\"
                                   required>
                        </div>
                    </div>

                    <div class=\"row g-3 mt-1\">
                        <div class=\"col-md-6\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-tag me-1\"></i>Prix unitaire commandé
                            </label>
                            <input type=\"text\" class=\"form-control form-control-sm bg-light\" 
                                   value=\"{{ (item.unitPrice ?: 0)|price_with_currency(purchase.hmaService) }}\" readonly disabled>
                        </div>

                        <div class=\"col-md-6\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-pencil me-1\"></i>Prix unitaire réel
                            </label>
                            <input type=\"number\" 
                                   name=\"received_price_{{ item.id }}\" 
                                   class=\"form-control form-control-sm received-price\" 
                                   value=\"{{ item.unitPrice ?: 0 }}\"
                                   step=\"0.01\"
                                   min=\"0\">
                        </div>
                    </div>

                    <div class=\"row g-3 mt-1\">
                        <div class=\"col-md-12\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-geo-alt me-1\"></i>Emplacement
                            </label>
                            <select name=\"location_id_{{ item.id }}\" 
                                    class=\"form-select form-select-sm location-select\"
                                    data-placeholder=\"-- Sélectionner --\">
                                <option value=\"\">-- Sélectionner un emplacement --</option>
                                {% for location in locations %}
                                    <option value=\"{{ location.id }}\">
                                        {{ location.code ? location.code ~ ' - ' : '' }}{{ location.name }}
                                    </option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>

                    {% if product.hasExpiryDate %}
                    <div class=\"row g-3 mt-1\">
                        <div class=\"col-md-6\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-calendar-plus me-1\"></i>Date de fabrication
                                <span class=\"text-danger\">*</span>
                            </label>
                            <input type=\"date\" 
                                   name=\"manufacturing_date_{{ item.id }}\" 
                                   class=\"form-control form-control-sm\" 
                                   required
                                   value=\"{{ \"now\"|date('Y-m-d') }}\">
                        </div>
                        <div class=\"col-md-6\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-calendar-x me-1\"></i>Date d'expiration
                                <span class=\"text-danger\">*</span>
                            </label>
                            <input type=\"date\" 
                                   name=\"expiry_date_{{ item.id }}\" 
                                   class=\"form-control form-control-sm\" 
                                   required
                                   min=\"{{ \"now\"|date('Y-m-d') }}\">
                        </div>
                    </div>
                    {% else %}
                    <div class=\"alert alert-success bg-light border-0 mt-3 mb-0 py-2 small\">
                        <i class=\"bi bi-check-circle me-1\"></i> Produit non périssable - lot créé automatiquement
                    </div>
                    {% endif %}
                </div>
            </div>
        {% endfor %}

        <div class=\"card border-0 shadow-sm mt-4\">
            <div class=\"card-body py-3\">
                <div class=\"d-flex justify-content-end gap-2\">
                    <a href=\"{{ path('purchase_show', {id: purchase.id}) }}\" class=\"btn btn-outline-secondary\">
                        <i class=\"bi bi-x-lg me-1\"></i> Annuler
                    </a>
                    <button type=\"button\" class=\"btn btn-success px-4\" id=\"confirmReceptionBtn\">
                        <i class=\"bi bi-check-lg me-1\"></i> Confirmer la réception
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Modal de confirmation de réception -->
<div class=\"modal fade\" id=\"confirmReceptionModal\" tabindex=\"-1\" data-bs-backdrop=\"static\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-loading-overlay\" id=\"confirmModalLoading\">
                <div class=\"spinner-container\">
                    <div class=\"spinner-border\" role=\"status\">
                        <span class=\"visually-hidden\">Chargement...</span>
                    </div>
                    <div class=\"loading-text\">Traitement en cours...</div>
                </div>
            </div>
            
            <div class=\"modal-header bg-success text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"bi bi-check-circle me-2\"></i>Confirmer la réception
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Êtes-vous sûr de vouloir confirmer la réception de cette commande ?</p>
                <ul class=\"mb-0\">
                    <li>Les lots de stock seront créés</li>
                    <li>Le stock sera mis à jour</li>
                    {% if hasSupplier %}
                        <li>Les problèmes signalés généreront des avoirs</li>
                        <li>Le fournisseur sera notifié</li>
                    {% endif %}
                </ul>
                <div class=\"alert alert-warning mt-3 mb-0 small\">
                    <i class=\"bi bi-exclamation-triangle me-1\"></i>
                    Cette action est irréversible.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\" id=\"cancelConfirmBtn\">Annuler</button>
                <button type=\"button\" class=\"btn btn-success\" id=\"confirmReceptionSubmit\">
                    <i class=\"bi bi-check-lg me-1\"></i> Confirmer
                </button>
            </div>
        </div>
    </div>
</div>

{% if hasSupplier %}
<!-- Modal Signaler un problème -->
<div class=\"modal fade\" id=\"reportIssueModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background: var(--danger-color); color: white; padding: 0.5rem 1rem;\">
                <h5 class=\"modal-title fs-6\">
                    <i class=\"bi bi-exclamation-triangle me-2\"></i><span id=\"modalTitle\">Signaler un problème</span>
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form method=\"post\" action=\"{{ path('purchase_report_issue_temp') }}\" enctype=\"multipart/form-data\" id=\"issueForm\">
                <div class=\"modal-body py-3\">
                    <input type=\"hidden\" name=\"batch_id\" id=\"report_batch_id\">
                    <input type=\"hidden\" name=\"purchase_id\" value=\"{{ purchase.id }}\">
                    <input type=\"hidden\" name=\"existing_attachments\" id=\"existing_attachments\" value=\"\">
                    
                    <div class=\"bg-light p-3 rounded mb-3\">
                        <div class=\"row small\">
                            <div class=\"col-6\"><span class=\"text-muted\">Produit :</span> <strong id=\"report_product_name\"></strong></div>
                            <div class=\"col-6\"><span class=\"text-muted\">Lot :</span> <strong id=\"report_batch_number\"></strong></div>
                            <div class=\"col-6 mt-2\"><span class=\"text-muted\">Prix unitaire :</span> <strong id=\"report_unit_price\"></strong></div>
                            <div class=\"col-6 mt-2\"><span class=\"text-muted\">Quantité commandée :</span> <strong id=\"report_ordered_quantity\"></strong></div>
                            <div class=\"col-12 mt-2\"><span class=\"text-muted\">Unité :</span> <strong id=\"report_unit_name\"></strong></div>
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        <label class=\"form-label small fw-semibold\">Quantité concernée</label>
                        <div class=\"d-flex gap-3 mb-2\">
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"quantity_type\" id=\"quantity_all\" value=\"all\" checked>
                                <label class=\"form-check-label small\" for=\"quantity_all\">
                                    Tout le lot (<span id=\"total_quantity_label\">0</span> <span id=\"total_unit_label\">pièce(s)</span>)
                                </label>
                            </div>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"quantity_type\" id=\"quantity_partial\" value=\"partial\">
                                <label class=\"form-check-label small\" for=\"quantity_partial\">Quantité spécifique</label>
                            </div>
                        </div>
                        <div id=\"partial_quantity_container\" style=\"display: none;\">
                            <input type=\"number\" name=\"affected_quantity\" id=\"affected_quantity\" class=\"form-control form-control-sm\" 
                                   placeholder=\"Saisir la quantité\" min=\"1\" step=\"1\">
                            <small class=\"text-muted\">Saisissez le nombre d'unités concernées</small>
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        <label class=\"form-label small fw-semibold\">Type de problème</label>
                        <select name=\"issue_type\" id=\"issue_type\" class=\"form-select form-select-sm\" required>
                            <option value=\"\">-- Sélectionner --</option>
                            <option value=\"damaged\">📦 Produit abîmé</option>
                            <option value=\"quality\">🔍 Défaut de qualité</option>
                            <option value=\"quantity_missing\">📉 Quantité manquante</option>
                            <option value=\"wrong_product\">🔄 Erreur de produit</option>
                            <option value=\"short_shelf_life\">⏰ Durée de vie courte</option>
                            <option value=\"other\">❓ Autre</option>
                        </select>
                    </div>

                    <div class=\"mb-3\">
                        <label class=\"form-label small fw-semibold\">Priorité</label>
                        <select name=\"priority\" id=\"priority\" class=\"form-select form-select-sm\">
                            <option value=\"low\">🟢 Basse</option>
                            <option value=\"medium\" selected>🟡 Moyenne</option>
                            <option value=\"high\">🟠 Haute</option>
                            <option value=\"critical\">🔴 Critique</option>
                        </select>
                    </div>

                    <div class=\"mb-3\">
                        <label class=\"form-label small fw-semibold\">Description</label>
                        <textarea name=\"description\" id=\"description\" class=\"form-control form-control-sm\" rows=\"3\" required placeholder=\"Décrivez précisément le problème...\"></textarea>
                    </div>

                    <div class=\"mb-3\">
                        <label class=\"form-label small fw-semibold\">Action sur le stock</label>
                        <select name=\"stock_action\" id=\"stock_action\" class=\"form-select form-select-sm\">
                            <option value=\"none\">Aucune action (financier uniquement)</option>
                            <option value=\"reduce\">⬇️ Réduire le stock</option>
                            <option value=\"zero\">🗑️ Mettre le stock à zéro</option>
                            <option value=\"return\">📤 Retour fournisseur</option>
                        </select>
                    </div>

                    <div class=\"mb-3\">
                        <label class=\"form-label small fw-semibold\">Pièces jointes</label>
                        <div id=\"attachmentsPreview\" class=\"d-flex flex-wrap gap-2 mb-2\"></div>
                        <input type=\"file\" name=\"attachments[]\" id=\"attachments\" class=\"form-control form-control-sm\" multiple accept=\"image/*,video/*\">
                        <small class=\"text-muted\">Formats supportés: JPG, PNG, GIF, WEBP, MP4, MOV (max 50Mo par fichier)</small>
                    </div>
                </div>
                <div class=\"modal-footer py-2\">
                    <button type=\"button\" class=\"btn btn-sm btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-sm\" id=\"submitIssueBtn\" style=\"background: var(--danger-color); color: white; border-color: var(--danger-color);\">
                        <i class=\"bi bi-send me-1\"></i> Signaler
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal de suppression de problème -->
<div class=\"modal fade\" id=\"deleteIssueModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background: var(--danger-color); color: white;\">
                <h5 class=\"modal-title\">
                    <i class=\"bi bi-exclamation-triangle me-2\"></i> Confirmer la suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"deleteMessage\">Êtes-vous sûr de vouloir supprimer ce signalement ?</p>
                <p class=\"text-muted small mb-0\">Cette action est irréversible. Le problème ne sera pas pris en compte lors de la réception.</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form method=\"post\" id=\"deleteIssueForm\" action=\"\">
                    <button type=\"submit\" class=\"btn\" style=\"background: var(--danger-color); color: white; border-color: var(--danger-color);\">
                        <i class=\"bi bi-trash me-1\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endif %}
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
// ✅ Variable globale : présence d'un fournisseur
const HAS_SUPPLIER = {{ purchase.supplier is not null ? 'true' : 'false' }};

document.addEventListener('DOMContentLoaded', function() {
    // SELECT2
    document.querySelectorAll('.location-select').forEach(select => {
        if (typeof \$ !== 'undefined') {
            \$(select).select2({
                theme: 'bootstrap-5',
                language: 'fr',
                placeholder: '-- Sélectionner --',
                allowClear: true,
                width: '100%'
            });
        }
    });

    // CASE \"Ne pas réceptionner\"
    document.querySelectorAll('.remove-checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const card = this.closest('.batch-card');
            const inputs = card.querySelectorAll('input:not([type=\"checkbox\"]), select');
            inputs.forEach(input => input.disabled = this.checked);
            
            if (typeof \$ !== 'undefined') {
                const select = card.querySelector('.location-select');
                if (select) this.checked ? \$(select).select2('disable') : \$(select).select2('enable');
            }
            
            card.style.opacity = this.checked ? '0.6' : '1';
        });
    });

    // DATES EXPIRATION
    document.querySelectorAll('input[name^=\"expiry_date_\"]').forEach(input => {
        input.addEventListener('change', function() {
            if (new Date(this.value) < new Date().setHours(0,0,0,0)) {
                alert('La date d\\'expiration ne peut pas être antérieure à aujourd\\'hui.');
                this.value = '';
            }
        });
    });

    // GESTION DES PIÈCES JOINTES (uniquement si fournisseur)
    if (!HAS_SUPPLIER) {
        initConfirmReception();
        return;
    }

    let currentAttachments = [];
    const attachmentsPreview = document.getElementById('attachmentsPreview');
    const existingAttachmentsInput = document.getElementById('existing_attachments');
    
    function updateAttachmentsPreview() {
        if (!attachmentsPreview) return;
        
        attachmentsPreview.innerHTML = '';
        currentAttachments.forEach((attachment, index) => {
            const extension = attachment.split('.').pop().toLowerCase();
            const isImage = ['jpg', 'jpeg', 'png', 'gif', 'webp'].includes(extension);
            
            const previewDiv = document.createElement('div');
            previewDiv.className = 'attachment-preview';
            previewDiv.innerHTML = `
                \${isImage ? 
                    `<img src=\"/uploads/credit_notes_attachments/\${attachment}\" alt=\"Pièce jointe\">` :
                    `<div class=\"file-placeholder\">
                        <i class=\"bi bi-file-earmark fs-1 text-muted\"></i>
                     </div>`
                }
                <div class=\"remove-attachment\" data-index=\"\${index}\">
                    <i class=\"bi bi-x\"></i>
                </div>
                <small class=\"d-block text-truncate\" style=\"max-width:80px\">\${attachment.length > 15 ? attachment.substring(0, 12) + '...' : attachment}</small>
            `;
            attachmentsPreview.appendChild(previewDiv);
        });
        
        if (existingAttachmentsInput) {
            existingAttachmentsInput.value = JSON.stringify(currentAttachments);
        }
    }
    
    document.addEventListener('click', function(e) {
        const removeBtn = e.target.closest('.remove-attachment');
        if (removeBtn) {
            const index = parseInt(removeBtn.dataset.index);
            if (!isNaN(index)) {
                currentAttachments.splice(index, 1);
                updateAttachmentsPreview();
            }
        }
    });

    // MODAL SIGNALEMENT
    let currentOrderedQuantity = 0, currentUnit = 'pièce(s)', isEditMode = false;
    const quantityAll = document.getElementById('quantity_all');
    const quantityPartial = document.getElementById('quantity_partial');
    const partialContainer = document.getElementById('partial_quantity_container');
    const affectedQty = document.getElementById('affected_quantity');
    const modalTitle = document.getElementById('modalTitle');
    const totalQuantityLabel = document.getElementById('total_quantity_label');
    const totalUnitLabel = document.getElementById('total_unit_label');
    const reportUnitName = document.getElementById('report_unit_name');
    
    if (quantityAll) {
        quantityAll.addEventListener('change', () => {
            if (partialContainer) partialContainer.style.display = 'none';
            if (affectedQty) affectedQty.value = '';
        });
    }
    
    if (quantityPartial) {
        quantityPartial.addEventListener('change', () => {
            if (partialContainer) partialContainer.style.display = 'block';
        });
    }
    
    if (affectedQty) {
        affectedQty.addEventListener('input', function() {
            let val = parseInt(this.value);
            if (val > currentOrderedQuantity) this.value = currentOrderedQuantity;
            if (val < 1) this.value = 1;
        });
    }

    const reportModalEl = document.getElementById('reportIssueModal');
    const reportModal = reportModalEl ? new bootstrap.Modal(reportModalEl) : null;
    
    document.querySelectorAll('.report-issue-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            if (!reportModal) return;
            
            isEditMode = this.dataset.editMode === 'true';
            modalTitle.textContent = isEditMode ? 'Modifier le signalement' : 'Signaler un problème';
            
            currentOrderedQuantity = parseInt(this.dataset.quantity);
            currentUnit = this.dataset.unit || 'pièce(s)';
            
            document.getElementById('report_product_name').textContent = this.dataset.productName;
            document.getElementById('report_batch_number').textContent = this.dataset.batchNumber;
            document.getElementById('report_ordered_quantity').textContent = this.dataset.quantity + ' ' + currentUnit;
            document.getElementById('report_unit_price').textContent = parseFloat(this.dataset.unitPrice).toLocaleString('fr-FR') + ' FCFA';
            document.getElementById('report_batch_id').value = this.dataset.itemId;
            
            if (totalQuantityLabel) totalQuantityLabel.textContent = this.dataset.quantity;
            if (totalUnitLabel) totalUnitLabel.textContent = currentUnit;
            if (reportUnitName) reportUnitName.textContent = currentUnit;
            if (affectedQty) affectedQty.max = this.dataset.quantity;
            
            currentAttachments = [];
            updateAttachmentsPreview();
            
            if (isEditMode) {
                const issueAttachments = this.dataset.issueAttachments ? JSON.parse(this.dataset.issueAttachments.replace(/&quot;/g, '\"')) : [];
                
                document.getElementById('issue_type').value = this.dataset.issueType || '';
                document.getElementById('description').value = this.dataset.issueDescription || '';
                document.getElementById('priority').value = this.dataset.issuePriority || 'medium';
                document.getElementById('stock_action').value = this.dataset.issueStockAction || 'none';
                
                if (issueAttachments.length) {
                    currentAttachments = [...issueAttachments];
                    updateAttachmentsPreview();
                }
                
                const issueAffectedQty = parseInt(this.dataset.issueAffectedQuantity) || currentOrderedQuantity;
                if (issueAffectedQty < currentOrderedQuantity) {
                    if (quantityPartial) quantityPartial.checked = true;
                    if (partialContainer) partialContainer.style.display = 'block';
                    if (affectedQty) affectedQty.value = issueAffectedQty;
                } else {
                    if (quantityAll) quantityAll.checked = true;
                    if (partialContainer) partialContainer.style.display = 'none';
                }
            } else {
                document.getElementById('issue_type').value = '';
                document.getElementById('description').value = '';
                document.getElementById('priority').value = 'medium';
                document.getElementById('stock_action').value = 'none';
                
                if (quantityAll) quantityAll.checked = true;
                if (partialContainer) partialContainer.style.display = 'none';
                if (affectedQty) affectedQty.value = '';
            }
            
            reportModal.show();
        });
    });
    
    const issueForm = document.getElementById('issueForm');
    if (issueForm) {
        issueForm.addEventListener('submit', function(e) {
            if (existingAttachmentsInput && currentAttachments.length > 0) {
                existingAttachmentsInput.value = JSON.stringify(currentAttachments);
            }
        });
    }

    // SUPPRESSION DE PROBLÈME
    const deleteModalEl = document.getElementById('deleteIssueModal');
    const deleteModal = deleteModalEl ? new bootstrap.Modal(deleteModalEl) : null;
    const deleteMessage = document.getElementById('deleteMessage');
    const deleteForm = document.getElementById('deleteIssueForm');
    
    document.querySelectorAll('.delete-issue-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            if (!deleteModal) return;
            
            if (deleteMessage) {
                deleteMessage.innerHTML = `Êtes-vous sûr de vouloir supprimer le signalement pour le produit <strong>\${this.dataset.productName}</strong> ?`;
            }
            
            if (deleteForm) {
                deleteForm.action = \"{{ path('purchase_delete_issue_temp', {batchId: 'BATCH_ID_PLACEHOLDER'}) }}\".replace('BATCH_ID_PLACEHOLDER', this.dataset.itemId);
            }
            
            deleteModal.show();
        });
    });

    // CONFIRMATION DE RÉCEPTION
    initConfirmReception();
});

function initConfirmReception() {
    const confirmModalEl = document.getElementById('confirmReceptionModal');
    if (!confirmModalEl) return;
    
    const confirmModal = new bootstrap.Modal(confirmModalEl);
    const confirmBtn = document.getElementById('confirmReceptionBtn');
    const confirmSubmit = document.getElementById('confirmReceptionSubmit');
    const cancelConfirmBtn = document.getElementById('cancelConfirmBtn');
    const confirmLoading = document.getElementById('confirmModalLoading');
    const receiveForm = document.getElementById('receiveForm');
    
    if (confirmBtn) {
        confirmBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            let hasReceived = false;
            document.querySelectorAll('.batch-card').forEach(card => {
                if (!card.querySelector('.remove-checkbox')?.checked) hasReceived = true;
            });
            
            if (!hasReceived) {
                alert('Vous devez réceptionner au moins un article.');
                return;
            }
            
            const missingFields = [];
            const requiredInputs = document.querySelectorAll('[required]');
            
            requiredInputs.forEach(input => {
                if (input.disabled) return;
                if (input.offsetParent === null) return;
                
                let value = input.value.trim();
                if (input.type === 'checkbox') {
                    value = input.checked ? 'checked' : '';
                }
                
                if (!value) {
                    missingFields.push(input);
                    input.classList.add('is-invalid');
                } else {
                    input.classList.remove('is-invalid');
                }
            });
            
            if (missingFields.length > 0) {
                const fieldNames = missingFields.map(f => {
                    const label = f.closest('.row')?.querySelector('.form-label')?.textContent || f.name;
                    return `- \${label}`;
                }).join('\\n');
                alert(`Veuillez remplir tous les champs obligatoires :\\n\${fieldNames}`);
                missingFields[0].focus();
                return;
            }
            
            confirmModal.show();
        });
    }
    
    if (confirmSubmit) {
        confirmSubmit.addEventListener('click', function() {
            if (confirmLoading) confirmLoading.classList.add('show');
            
            this.disabled = true;
            this.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\" role=\"status\" aria-hidden=\"true\"></span> Traitement...';
            
            if (cancelConfirmBtn) cancelConfirmBtn.disabled = true;
            
            setTimeout(() => receiveForm.submit(), 300);
        });
    }
}
</script>
{% endblock %}", "purchase/receive.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\purchase\\receive.html.twig");
    }
}
