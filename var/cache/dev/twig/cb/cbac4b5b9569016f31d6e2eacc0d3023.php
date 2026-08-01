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
class __TwigTemplate_9df015362207b357abe140fabadd6e1d extends Template
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
    /* ✅ NE PAS REDÉFINIR :root ICI - Utiliser les variables de base.html.twig */
    
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
    
    /* Styles pour les pièces jointes */
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
    
    /* ✅ Styles pour le loading du modal */
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

    // line 231
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

        // line 232
        yield "<div class=\"container-fluid px-4 py-3\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 238
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_index");
        yield "\">Commandes</a></li>
                    <li class=\"breadcrumb-item active\">";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 239, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 239), "html", null, true);
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
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 248, $this->source); })()), "id", [], "any", false, false, false, 248)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"bi bi-eye me-1\"></i> Détails
            </a>
            <a href=\"";
        // line 251
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
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 263, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 263), "html", null, true);
        yield "</div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"small text-muted text-uppercase\">Fournisseur</div>
                    <div class=\"fw-bold\">";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 267, $this->source); })()), "supplier", [], "any", false, false, false, 267), "name", [], "any", false, false, false, 267), "html", null, true);
        yield "</div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"small text-muted text-uppercase\">Date commande</div>
                    <div>";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 271, $this->source); })()), "createdAt", [], "any", false, false, false, 271), "d/m/Y"), "html", null, true);
        yield "</div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"small text-muted text-uppercase\">Montant total</div>
                    <div class=\"fw-bold text-primary\">";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 275, $this->source); })()), "totalAmount", [], "any", false, false, false, 275), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 275, $this->source); })()), "hmaService", [], "any", false, false, false, 275)), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 282
        yield "    ";
        $context["sessionIssues"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 282, $this->source); })()), "session", [], "any", false, false, false, 282), "get", ["pending_issues", []], "method", false, false, false, 282);
        // line 283
        yield "    ";
        $context["pendingCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["sessionIssues"]) || array_key_exists("sessionIssues", $context) ? $context["sessionIssues"] : (function () { throw new RuntimeError('Variable "sessionIssues" does not exist.', 283, $this->source); })()));
        // line 284
        yield "
    <!-- Barre d'outils réception -->
    <div class=\"reception-toolbar\">
        <div class=\"d-flex align-items-center gap-3\">
            <div class=\"stat-card p-2 px-3\">
                <i class=\"bi bi-box-seam text-primary me-1\"></i>
                <span class=\"fw-bold\">";
        // line 290
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 290, $this->source); })()), "purchaseItems", [], "any", false, false, false, 290)), "html", null, true);
        yield "</span>
                <span class=\"text-muted small\">articles</span>
            </div>
            ";
        // line 293
        if (((isset($context["pendingCount"]) || array_key_exists("pendingCount", $context) ? $context["pendingCount"] : (function () { throw new RuntimeError('Variable "pendingCount" does not exist.', 293, $this->source); })()) > 0)) {
            // line 294
            yield "            <div class=\"stat-card p-2 px-3\" style=\"background: #fef3c7;\">
                <i class=\"bi bi-exclamation-triangle-fill text-warning me-1\"></i>
                <span class=\"fw-bold text-warning\">";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pendingCount"]) || array_key_exists("pendingCount", $context) ? $context["pendingCount"] : (function () { throw new RuntimeError('Variable "pendingCount" does not exist.', 296, $this->source); })()), "html", null, true);
            yield "</span>
                <span class=\"text-muted small\">problèmes signalés</span>
            </div>
            ";
        }
        // line 300
        yield "        </div>
        <div class=\"text-muted small\">
            <i class=\"bi bi-info-circle me-1\"></i>
            Les problèmes signalés seront traités à la validation
        </div>
    </div>

    <!-- Formulaire de réception -->
    <form method=\"POST\" class=\"receive-form\" id=\"receiveForm\">
        ";
        // line 309
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 309, $this->source); })()), "purchaseItems", [], "any", false, false, false, 309));
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
            // line 310
            yield "            ";
            $context["product"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 310);
            // line 311
            yield "            ";
            $context["itemTotalPrice"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 311)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 311)) : (0)) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 311));
            // line 312
            yield "            
            ";
            // line 314
            yield "            ";
            $context["hasPendingIssue"] = false;
            // line 315
            yield "            ";
            $context["pendingIssue"] = null;
            // line 316
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sessionIssues"]) || array_key_exists("sessionIssues", $context) ? $context["sessionIssues"] : (function () { throw new RuntimeError('Variable "sessionIssues" does not exist.', 316, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["issue"]) {
                // line 317
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "batch_id", [], "any", false, false, false, 317) == CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 317))) {
                    // line 318
                    yield "                    ";
                    $context["hasPendingIssue"] = true;
                    // line 319
                    yield "                    ";
                    $context["pendingIssue"] = $context["issue"];
                    // line 320
                    yield "                ";
                }
                // line 321
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['issue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 322
            yield "            
            <div class=\"card batch-card ";
            // line 323
            if ((($tmp = (isset($context["hasPendingIssue"]) || array_key_exists("hasPendingIssue", $context) ? $context["hasPendingIssue"] : (function () { throw new RuntimeError('Variable "hasPendingIssue" does not exist.', 323, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "has-issue";
            }
            yield "\" data-item-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 323), "html", null, true);
            yield "\">
                <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
                    <div class=\"d-flex align-items-center gap-3\">
                        ";
            // line 326
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 326, $this->source); })()), "image", [], "any", false, false, false, 326)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 327
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 327, $this->source); })()), "image", [], "any", false, false, false, 327))), "html", null, true);
                yield "\" 
                                 alt=\"";
                // line 328
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 328, $this->source); })()), "name", [], "any", false, false, false, 328), "html", null, true);
                yield "\" 
                                 class=\"rounded\"
                                 style=\"width: 45px; height: 45px; object-fit: cover;\">
                        ";
            } else {
                // line 332
                yield "                            <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 45px; height: 45px;\">
                                <i class=\"bi bi-box text-secondary fs-5\"></i>
                            </div>
                        ";
            }
            // line 336
            yield "                        <div>
                            <h6 class=\"mb-0 fw-semibold\">";
            // line 337
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 337, $this->source); })()), "name", [], "any", false, false, false, 337), "html", null, true);
            yield "</h6>
                            <div class=\"small text-muted\">
                                <span class=\"me-2\">Code: ";
            // line 339
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 339, $this->source); })()), "barcode", [], "any", false, false, false, 339), "html", null, true);
            yield "</span>
                                ";
            // line 340
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 340, $this->source); })()), "hasExpiryDate", [], "any", false, false, false, 340)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 341
                yield "                                    <span class=\"perishable-badge\">
                                        <i class=\"bi bi-calendar-exclamation me-1\"></i>Périssable
                                    </span>
                                ";
            }
            // line 345
            yield "                            </div>
                        </div>
                    </div>
                    <div class=\"text-end\">
                        <div class=\"fw-bold text-primary\">";
            // line 349
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((isset($context["itemTotalPrice"]) || array_key_exists("itemTotalPrice", $context) ? $context["itemTotalPrice"] : (function () { throw new RuntimeError('Variable "itemTotalPrice" does not exist.', 349, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 349, $this->source); })()), "hmaService", [], "any", false, false, false, 349)), "html", null, true);
            yield "</div>
                        <div class=\"small text-muted\">";
            // line 350
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 350)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 350)) : (0)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 350, $this->source); })()), "hmaService", [], "any", false, false, false, 350)), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 350)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 350, $this->source); })()), "unit", [], "any", false, false, false, 350), "pièce")) : ("pièce")), "html", null, true);
            yield "</div>
                    </div>
                </div>
                
                ";
            // line 354
            if ((($tmp = (isset($context["hasPendingIssue"]) || array_key_exists("hasPendingIssue", $context) ? $context["hasPendingIssue"] : (function () { throw new RuntimeError('Variable "hasPendingIssue" does not exist.', 354, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 355
                yield "                <div class=\"issue-indicator\">
                    <i class=\"bi bi-exclamation-triangle-fill\"></i>
                    <div>
                        <strong>⚠️ Problème signalé</strong>
                        <span class=\"text-muted mx-2\">•</span>
                        <span>";
                // line 360
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(((CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "issue_type", [], "any", true, true, false, 360)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pendingIssue"]) || array_key_exists("pendingIssue", $context) ? $context["pendingIssue"] : (function () { throw new RuntimeError('Variable "pendingIssue" does not exist.', 360, $this->source); })()), "issue_type", [], "any", false, false, false, 360), "Non spécifié")) : ("Non spécifié")), ["_" => " "])), "html", null, true);
                yield "</span>
                        <span class=\"text-muted mx-2\">•</span>
                        <span>";
                // line 362
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "affected_quantity", [], "any", true, true, false, 362)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pendingIssue"]) || array_key_exists("pendingIssue", $context) ? $context["pendingIssue"] : (function () { throw new RuntimeError('Variable "pendingIssue" does not exist.', 362, $this->source); })()), "affected_quantity", [], "any", false, false, false, 362), 0)) : (0)), "html", null, true);
                yield " unité(s)</span>
                        <span class=\"text-muted mx-2\">•</span>
                        <span>Priorité: ";
                // line 364
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "priority", [], "any", true, true, false, 364)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pendingIssue"]) || array_key_exists("pendingIssue", $context) ? $context["pendingIssue"] : (function () { throw new RuntimeError('Variable "pendingIssue" does not exist.', 364, $this->source); })()), "priority", [], "any", false, false, false, 364), "medium")) : ("medium"))), "html", null, true);
                yield "</span>
                    </div>
                </div>
                ";
            }
            // line 368
            yield "                
                <div class=\"card-body\">
                    <input type=\"hidden\" name=\"item_id[]\" value=\"";
            // line 370
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 370), "html", null, true);
            yield "\">
                    
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-check\">
                                <input class=\"form-check-input remove-checkbox\" type=\"checkbox\" 
                                       name=\"remove_";
            // line 376
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 376), "html", null, true);
            yield "\" id=\"remove_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 376), "html", null, true);
            yield "\" value=\"1\">
                                <label class=\"form-check-label text-danger\" for=\"remove_";
            // line 377
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 377), "html", null, true);
            yield "\">
                                    <i class=\"bi bi-trash me-1\"></i> Ne pas réceptionner cet article
                                </label>
                            </div>
                        </div>
                        <div class=\"col-md-6 text-md-end\">
                            <div class=\"btn-group\">
                                <button type=\"button\" 
                                        class=\"btn btn-sm ";
            // line 385
            if ((($tmp = (isset($context["hasPendingIssue"]) || array_key_exists("hasPendingIssue", $context) ? $context["hasPendingIssue"] : (function () { throw new RuntimeError('Variable "hasPendingIssue" does not exist.', 385, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "btn-warning";
            } else {
                yield "btn-outline-danger";
            }
            yield " report-issue-btn\"
                                        data-item-id=\"";
            // line 386
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 386), "html", null, true);
            yield "\"
                                        data-product-name=\"";
            // line 387
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 387, $this->source); })()), "name", [], "any", false, false, false, 387), "html", null, true);
            yield "\"
                                        data-batch-number=\"LOT-";
            // line 388
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 388, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 388), "html", null, true);
            yield "-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 388), "html", null, true);
            yield "\"
                                        data-unit-price=\"";
            // line 389
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 389)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 389), "html", null, true)) : (0));
            yield "\"
                                        data-quantity=\"";
            // line 390
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 390), "html", null, true);
            yield "\"
                                        data-total-price=\"";
            // line 391
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["itemTotalPrice"]) || array_key_exists("itemTotalPrice", $context) ? $context["itemTotalPrice"] : (function () { throw new RuntimeError('Variable "itemTotalPrice" does not exist.', 391, $this->source); })()), "html", null, true);
            yield "\"
                                        data-unit=\"";
            // line 392
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 392)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 392, $this->source); })()), "unit", [], "any", false, false, false, 392), "pièce")) : ("pièce")), "html", null, true);
            yield "\"
                                        ";
            // line 393
            if ((($tmp = (isset($context["hasPendingIssue"]) || array_key_exists("hasPendingIssue", $context) ? $context["hasPendingIssue"] : (function () { throw new RuntimeError('Variable "hasPendingIssue" does not exist.', 393, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 394
                yield "                                        data-edit-mode=\"true\"
                                        data-issue-type=\"";
                // line 395
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pendingIssue"]) || array_key_exists("pendingIssue", $context) ? $context["pendingIssue"] : (function () { throw new RuntimeError('Variable "pendingIssue" does not exist.', 395, $this->source); })()), "issue_type", [], "any", false, false, false, 395), "html", null, true);
                yield "\"
                                        data-issue-description=\"";
                // line 396
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pendingIssue"]) || array_key_exists("pendingIssue", $context) ? $context["pendingIssue"] : (function () { throw new RuntimeError('Variable "pendingIssue" does not exist.', 396, $this->source); })()), "description", [], "any", false, false, false, 396), "html", null, true);
                yield "\"
                                        data-issue-priority=\"";
                // line 397
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pendingIssue"]) || array_key_exists("pendingIssue", $context) ? $context["pendingIssue"] : (function () { throw new RuntimeError('Variable "pendingIssue" does not exist.', 397, $this->source); })()), "priority", [], "any", false, false, false, 397), "html", null, true);
                yield "\"
                                        data-issue-affected-quantity=\"";
                // line 398
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pendingIssue"]) || array_key_exists("pendingIssue", $context) ? $context["pendingIssue"] : (function () { throw new RuntimeError('Variable "pendingIssue" does not exist.', 398, $this->source); })()), "affected_quantity", [], "any", false, false, false, 398), "html", null, true);
                yield "\"
                                        data-issue-stock-action=\"";
                // line 399
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pendingIssue"]) || array_key_exists("pendingIssue", $context) ? $context["pendingIssue"] : (function () { throw new RuntimeError('Variable "pendingIssue" does not exist.', 399, $this->source); })()), "stock_action", [], "any", false, false, false, 399), "html", null, true);
                yield "\"
                                        data-issue-attachments=\"";
                // line 400
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pendingIssue"]) || array_key_exists("pendingIssue", $context) ? $context["pendingIssue"] : (function () { throw new RuntimeError('Variable "pendingIssue" does not exist.', 400, $this->source); })()), "attachments", [], "any", false, false, false, 400)), "html_attr");
                yield "\"
                                        ";
            }
            // line 401
            yield ">
                                    <i class=\"bi bi-exclamation-triangle me-1\"></i>
                                    ";
            // line 403
            if ((($tmp = (isset($context["hasPendingIssue"]) || array_key_exists("hasPendingIssue", $context) ? $context["hasPendingIssue"] : (function () { throw new RuntimeError('Variable "hasPendingIssue" does not exist.', 403, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Modifier le signalement";
            } else {
                yield "Signaler un problème";
            }
            // line 404
            yield "                                </button>
                                ";
            // line 405
            if ((($tmp = (isset($context["hasPendingIssue"]) || array_key_exists("hasPendingIssue", $context) ? $context["hasPendingIssue"] : (function () { throw new RuntimeError('Variable "hasPendingIssue" does not exist.', 405, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 406
                yield "                                <button type=\"button\" 
                                        class=\"btn btn-sm btn-outline-danger delete-issue-btn\"
                                        data-item-id=\"";
                // line 408
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 408), "html", null, true);
                yield "\"
                                        data-product-name=\"";
                // line 409
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 409, $this->source); })()), "name", [], "any", false, false, false, 409), "html", null, true);
                yield "\">
                                    <i class=\"bi bi-trash\"></i>
                                </button>
                                ";
            }
            // line 413
            yield "                            </div>
                        </div>
                    </div>

                    <div class=\"row g-3\">
                        <div class=\"col-md-4\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-upc-scan me-1\"></i>Numéro de lot
                                ";
            // line 421
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 421, $this->source); })()), "hasExpiryDate", [], "any", false, false, false, 421)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"text-danger\">*</span>";
            }
            // line 422
            yield "                            </label>
                            <input type=\"text\" 
                                name=\"batch_number_";
            // line 424
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 424), "html", null, true);
            yield "\" 
                                class=\"form-control form-control-sm\" 
                                value=\"";
            // line 426
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 426)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 426), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((("LOT-" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 426, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 426)) . "-") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 426)), "html", null, true)));
            yield "\"
                                ";
            // line 427
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 427, $this->source); })()), "hasExpiryDate", [], "any", false, false, false, 427)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "required";
            }
            // line 428
            yield "                                placeholder=\"Ex: LOT-20250328-001\">
                            <small class=\"text-muted\">Laissez vide pour génération automatique</small>
                        </div>

                        <div class=\"col-md-4\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-box-seam me-1\"></i>Quantité commandée
                            </label>
                            <input type=\"number\" class=\"form-control form-control-sm bg-light\" value=\"";
            // line 436
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 436), "html", null, true);
            yield "\" readonly disabled>
                        </div>

                        <div class=\"col-md-4\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-check-circle me-1\"></i>Quantité reçue
                            </label>
                            <input type=\"number\" 
                                   name=\"received_quantity_";
            // line 444
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 444), "html", null, true);
            yield "\" 
                                   class=\"form-control form-control-sm received-quantity\" 
                                   value=\"";
            // line 446
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 446), "html", null, true);
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
            // line 459
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 459)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 459)) : (0)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 459, $this->source); })()), "hmaService", [], "any", false, false, false, 459)), "html", null, true);
            yield "\" readonly disabled>
                        </div>

                        <div class=\"col-md-6\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-pencil me-1\"></i>Prix unitaire réel
                            </label>
                            <input type=\"number\" 
                                   name=\"received_price_";
            // line 467
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 467), "html", null, true);
            yield "\" 
                                   class=\"form-control form-control-sm received-price\" 
                                   value=\"";
            // line 469
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 469)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 469), "html", null, true)) : (0));
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
            // line 480
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 480), "html", null, true);
            yield "\" 
                                    class=\"form-select form-select-sm location-select\"
                                    data-placeholder=\"-- Sélectionner --\">
                                <option value=\"\">-- Sélectionner un emplacement --</option>
                                ";
            // line 484
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 484, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 485
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 485), "html", null, true);
                yield "\">
                                        ";
                // line 486
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["location"], "code", [], "any", false, false, false, 486)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["location"], "code", [], "any", false, false, false, 486) . " - "), "html", null, true)) : (""));
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 486), "html", null, true);
                yield "
                                    </option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 489
            yield "                            </select>
                        </div>
                    </div>

                    ";
            // line 493
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 493, $this->source); })()), "hasExpiryDate", [], "any", false, false, false, 493)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 494
                yield "                    <div class=\"row g-3 mt-1\">
                        <div class=\"col-md-6\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-calendar-plus me-1\"></i>Date de fabrication
                                <span class=\"text-danger\">*</span>
                            </label>
                            <input type=\"date\" 
                                   name=\"manufacturing_date_";
                // line 501
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 501), "html", null, true);
                yield "\" 
                                   class=\"form-control form-control-sm\" 
                                   required
                                   value=\"";
                // line 504
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
                // line 512
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 512), "html", null, true);
                yield "\" 
                                   class=\"form-control form-control-sm\" 
                                   required
                                   min=\"";
                // line 515
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
                yield "\">
                        </div>
                    </div>
                    ";
            } else {
                // line 519
                yield "                    <div class=\"alert alert-success bg-light border-0 mt-3 mb-0 py-2 small\">
                        <i class=\"bi bi-check-circle me-1\"></i> Produit non périssable - lot créé automatiquement
                    </div>
                    ";
            }
            // line 523
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
        // line 526
        yield "
        <div class=\"card border-0 shadow-sm mt-4\">
            <div class=\"card-body py-3\">
                <div class=\"d-flex justify-content-end gap-2\">
                    <a href=\"";
        // line 530
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 530, $this->source); })()), "id", [], "any", false, false, false, 530)]), "html", null, true);
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

<!-- Modal de confirmation de réception AVEC EFFET DE CHARGEMENT -->
<div class=\"modal fade\" id=\"confirmReceptionModal\" tabindex=\"-1\" data-bs-backdrop=\"static\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <!-- Overlay de chargement -->
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
                    <li>Les problèmes signalés généreront des avoirs</li>
                    <li>Les fournisseurs seront notifiés</li>
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
            <form method=\"post\" action=\"";
        // line 595
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_report_issue_temp");
        yield "\" enctype=\"multipart/form-data\" id=\"issueForm\">
                <div class=\"modal-body py-3\">
                    <input type=\"hidden\" name=\"batch_id\" id=\"report_batch_id\">
                    <input type=\"hidden\" name=\"purchase_id\" value=\"";
        // line 598
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 598, $this->source); })()), "id", [], "any", false, false, false, 598), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 715
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

        // line 716
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ============================================
    // SELECT2
    // ============================================
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

    // ============================================
    // CASE \"Ne pas réceptionner\"
    // ============================================
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

    // ============================================
    // DATES EXPIRATION
    // ============================================
    document.querySelectorAll('input[name^=\"expiry_date_\"]').forEach(input => {
        input.addEventListener('change', function() {
            if (new Date(this.value) < new Date().setHours(0,0,0,0)) {
                alert('La date d\\'expiration ne peut pas être antérieure à aujourd\\'hui.');
                this.value = '';
            }
        });
    });

    // ============================================
    // GESTION DES PIÈCES JOINTES
    // ============================================
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
                    `<img src=\"/uploads/credit_notes_attachments/\${attachment}\" alt=\"Pièce jointe\" onerror=\"this.src='data:image/svg+xml,%3Csvg xmlns=\\'http://www.w3.org/2000/svg\\' width=\\'80\\' height=\\'80\\' viewBox=\\'0 0 24 24\\' fill=\\'none\\' stroke=\\'%23666\\' stroke-width=\\'1\\'%3E%3Crect width=\\'80\\' height=\\'80\\' fill=\\'%23f3f4f6\\'/%3E%3Cpath d=\\'M4 4h16v16H4z\\'/%3E%3C/svg%3E'\">` :
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

    // ============================================
    // MODAL SIGNALEMENT
    // ============================================
    let currentUnitPrice = 0, currentOrderedQuantity = 0, currentUnit = 'pièce(s)', isEditMode = false;
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

    const reportModal = new bootstrap.Modal(document.getElementById('reportIssueModal'));
    document.querySelectorAll('.report-issue-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            isEditMode = this.dataset.editMode === 'true';
            
            if (isEditMode) {
                modalTitle.textContent = 'Modifier le signalement';
            } else {
                modalTitle.textContent = 'Signaler un problème';
            }
            
            currentUnitPrice = parseFloat(this.dataset.unitPrice);
            currentOrderedQuantity = parseInt(this.dataset.quantity);
            currentUnit = this.dataset.unit || 'pièce(s)';
            
            const productNameEl = document.getElementById('report_product_name');
            const batchNumberEl = document.getElementById('report_batch_number');
            const orderedQuantityEl = document.getElementById('report_ordered_quantity');
            const unitPriceEl = document.getElementById('report_unit_price');
            const batchIdEl = document.getElementById('report_batch_id');
            
            if (productNameEl) productNameEl.textContent = this.dataset.productName;
            if (batchNumberEl) batchNumberEl.textContent = this.dataset.batchNumber;
            if (orderedQuantityEl) orderedQuantityEl.textContent = this.dataset.quantity + ' ' + currentUnit;
            if (unitPriceEl) unitPriceEl.textContent = parseFloat(this.dataset.unitPrice).toLocaleString('fr-FR') + ' FCFA';
            if (batchIdEl) batchIdEl.value = this.dataset.itemId;
            
            if (totalQuantityLabel) totalQuantityLabel.textContent = this.dataset.quantity;
            if (totalUnitLabel) totalUnitLabel.textContent = currentUnit;
            if (reportUnitName) reportUnitName.textContent = currentUnit;
            
            if (affectedQty) affectedQty.max = this.dataset.quantity;
            
            currentAttachments = [];
            updateAttachmentsPreview();
            
            if (isEditMode) {
                const issueType = this.dataset.issueType || '';
                const issueDesc = this.dataset.issueDescription || '';
                const issuePriority = this.dataset.issuePriority || 'medium';
                const issueAffectedQty = parseInt(this.dataset.issueAffectedQuantity) || currentOrderedQuantity;
                const issueStockAction = this.dataset.issueStockAction || 'none';
                const issueAttachments = this.dataset.issueAttachments ? JSON.parse(this.dataset.issueAttachments.replace(/&quot;/g, '\"')) : [];
                
                const issueTypeEl = document.getElementById('issue_type');
                const descriptionEl = document.getElementById('description');
                const priorityEl = document.getElementById('priority');
                const stockActionEl = document.getElementById('stock_action');
                
                if (issueTypeEl) issueTypeEl.value = issueType;
                if (descriptionEl) descriptionEl.value = issueDesc;
                if (priorityEl) priorityEl.value = issuePriority;
                if (stockActionEl) stockActionEl.value = issueStockAction;
                
                if (issueAttachments && issueAttachments.length) {
                    currentAttachments = [...issueAttachments];
                    updateAttachmentsPreview();
                }
                
                if (issueAffectedQty < currentOrderedQuantity) {
                    if (quantityPartial) quantityPartial.checked = true;
                    if (partialContainer) partialContainer.style.display = 'block';
                    if (affectedQty) affectedQty.value = issueAffectedQty;
                } else {
                    if (quantityAll) quantityAll.checked = true;
                    if (partialContainer) partialContainer.style.display = 'none';
                    if (affectedQty) affectedQty.value = '';
                }
            } else {
                const issueTypeEl = document.getElementById('issue_type');
                const descriptionEl = document.getElementById('description');
                const priorityEl = document.getElementById('priority');
                const stockActionEl = document.getElementById('stock_action');
                
                if (issueTypeEl) issueTypeEl.value = '';
                if (descriptionEl) descriptionEl.value = '';
                if (priorityEl) priorityEl.value = 'medium';
                if (stockActionEl) stockActionEl.value = 'none';
                
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

    // ============================================
    // SUPPRESSION DE PROBLÈME
    // ============================================
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteIssueModal'));
    const deleteMessage = document.getElementById('deleteMessage');
    const deleteForm = document.getElementById('deleteIssueForm');
    
    document.querySelectorAll('.delete-issue-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const itemId = this.dataset.itemId;
            const productName = this.dataset.productName;
            
            if (deleteMessage) {
                deleteMessage.innerHTML = `Êtes-vous sûr de vouloir supprimer le signalement pour le produit <strong>\${productName}</strong> ?`;
            }
            
            if (deleteForm) {
                deleteForm.action = \"";
        // line 962
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_delete_issue_temp", ["batchId" => "BATCH_ID_PLACEHOLDER"]);
        yield "\".replace('BATCH_ID_PLACEHOLDER', itemId);
            }
            
            deleteModal.show();
        });
    });

    // ============================================
    // CONFIRMATION DE RÉCEPTION AVEC LOADING
    // ============================================
    const confirmModal = new bootstrap.Modal(document.getElementById('confirmReceptionModal'));
    const confirmBtn = document.getElementById('confirmReceptionBtn');
    const confirmSubmit = document.getElementById('confirmReceptionSubmit');
    const cancelConfirmBtn = document.getElementById('cancelConfirmBtn');
    const confirmLoading = document.getElementById('confirmModalLoading');
    const receiveForm = document.getElementById('receiveForm');
    
    if (confirmBtn) {
        confirmBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Vérifier qu'au moins un article est réceptionné
            let hasReceived = false;
            document.querySelectorAll('.batch-card').forEach(card => {
                if (!card.querySelector('.remove-checkbox')?.checked) hasReceived = true;
            });
            
            if (!hasReceived) {
                alert('Vous devez réceptionner au moins un article.');
                return;
            }
            
            // Vérifier uniquement les champs requis NON désactivés
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
            // ✅ Activer le loading
            if (confirmLoading) {
                confirmLoading.classList.add('show');
            }
            
            // ✅ Désactiver le bouton pour éviter les doubles clics
            this.disabled = true;
            this.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\" role=\"status\" aria-hidden=\"true\"></span> Traitement...';
            
            // ✅ Désactiver le bouton Annuler
            if (cancelConfirmBtn) {
                cancelConfirmBtn.disabled = true;
            }
            
            // ✅ Soumettre le formulaire après un petit délai pour que l'utilisateur voie le loading
            setTimeout(function() {
                receiveForm.submit();
            }, 300);
        });
    }
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
        return array (  1417 => 962,  1168 => 716,  1155 => 715,  1028 => 598,  1022 => 595,  954 => 530,  948 => 526,  932 => 523,  926 => 519,  919 => 515,  913 => 512,  902 => 504,  896 => 501,  887 => 494,  885 => 493,  879 => 489,  869 => 486,  864 => 485,  860 => 484,  853 => 480,  839 => 469,  834 => 467,  823 => 459,  807 => 446,  802 => 444,  791 => 436,  781 => 428,  777 => 427,  773 => 426,  768 => 424,  764 => 422,  760 => 421,  750 => 413,  743 => 409,  739 => 408,  735 => 406,  733 => 405,  730 => 404,  724 => 403,  720 => 401,  715 => 400,  711 => 399,  707 => 398,  703 => 397,  699 => 396,  695 => 395,  692 => 394,  690 => 393,  686 => 392,  682 => 391,  678 => 390,  674 => 389,  668 => 388,  664 => 387,  660 => 386,  652 => 385,  641 => 377,  635 => 376,  626 => 370,  622 => 368,  615 => 364,  610 => 362,  605 => 360,  598 => 355,  596 => 354,  587 => 350,  583 => 349,  577 => 345,  571 => 341,  569 => 340,  565 => 339,  560 => 337,  557 => 336,  551 => 332,  544 => 328,  539 => 327,  537 => 326,  527 => 323,  524 => 322,  518 => 321,  515 => 320,  512 => 319,  509 => 318,  506 => 317,  501 => 316,  498 => 315,  495 => 314,  492 => 312,  489 => 311,  486 => 310,  469 => 309,  458 => 300,  451 => 296,  447 => 294,  445 => 293,  439 => 290,  431 => 284,  428 => 283,  425 => 282,  416 => 275,  409 => 271,  402 => 267,  395 => 263,  380 => 251,  374 => 248,  362 => 239,  358 => 238,  350 => 232,  337 => 231,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
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
    /* ✅ NE PAS REDÉFINIR :root ICI - Utiliser les variables de base.html.twig */
    
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
    
    /* Styles pour les pièces jointes */
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
    
    /* ✅ Styles pour le loading du modal */
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
                    <div class=\"fw-bold\">{{ purchase.supplier.name }}</div>
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

    {# Récupération des problèmes en session #}
    {% set sessionIssues = app.session.get('pending_issues', []) %}
    {% set pendingCount = sessionIssues|length %}

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
            <i class=\"bi bi-info-circle me-1\"></i>
            Les problèmes signalés seront traités à la validation
        </div>
    </div>

    <!-- Formulaire de réception -->
    <form method=\"POST\" class=\"receive-form\" id=\"receiveForm\">
        {% for item in purchase.purchaseItems %}
            {% set product = item.product %}
            {% set itemTotalPrice = (item.unitPrice ?: 0) * item.quantity %}
            
            {# Vérifier si un problème a été signalé #}
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

<!-- Modal de confirmation de réception AVEC EFFET DE CHARGEMENT -->
<div class=\"modal fade\" id=\"confirmReceptionModal\" tabindex=\"-1\" data-bs-backdrop=\"static\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <!-- Overlay de chargement -->
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
                    <li>Les problèmes signalés généreront des avoirs</li>
                    <li>Les fournisseurs seront notifiés</li>
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
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ============================================
    // SELECT2
    // ============================================
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

    // ============================================
    // CASE \"Ne pas réceptionner\"
    // ============================================
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

    // ============================================
    // DATES EXPIRATION
    // ============================================
    document.querySelectorAll('input[name^=\"expiry_date_\"]').forEach(input => {
        input.addEventListener('change', function() {
            if (new Date(this.value) < new Date().setHours(0,0,0,0)) {
                alert('La date d\\'expiration ne peut pas être antérieure à aujourd\\'hui.');
                this.value = '';
            }
        });
    });

    // ============================================
    // GESTION DES PIÈCES JOINTES
    // ============================================
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
                    `<img src=\"/uploads/credit_notes_attachments/\${attachment}\" alt=\"Pièce jointe\" onerror=\"this.src='data:image/svg+xml,%3Csvg xmlns=\\'http://www.w3.org/2000/svg\\' width=\\'80\\' height=\\'80\\' viewBox=\\'0 0 24 24\\' fill=\\'none\\' stroke=\\'%23666\\' stroke-width=\\'1\\'%3E%3Crect width=\\'80\\' height=\\'80\\' fill=\\'%23f3f4f6\\'/%3E%3Cpath d=\\'M4 4h16v16H4z\\'/%3E%3C/svg%3E'\">` :
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

    // ============================================
    // MODAL SIGNALEMENT
    // ============================================
    let currentUnitPrice = 0, currentOrderedQuantity = 0, currentUnit = 'pièce(s)', isEditMode = false;
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

    const reportModal = new bootstrap.Modal(document.getElementById('reportIssueModal'));
    document.querySelectorAll('.report-issue-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            isEditMode = this.dataset.editMode === 'true';
            
            if (isEditMode) {
                modalTitle.textContent = 'Modifier le signalement';
            } else {
                modalTitle.textContent = 'Signaler un problème';
            }
            
            currentUnitPrice = parseFloat(this.dataset.unitPrice);
            currentOrderedQuantity = parseInt(this.dataset.quantity);
            currentUnit = this.dataset.unit || 'pièce(s)';
            
            const productNameEl = document.getElementById('report_product_name');
            const batchNumberEl = document.getElementById('report_batch_number');
            const orderedQuantityEl = document.getElementById('report_ordered_quantity');
            const unitPriceEl = document.getElementById('report_unit_price');
            const batchIdEl = document.getElementById('report_batch_id');
            
            if (productNameEl) productNameEl.textContent = this.dataset.productName;
            if (batchNumberEl) batchNumberEl.textContent = this.dataset.batchNumber;
            if (orderedQuantityEl) orderedQuantityEl.textContent = this.dataset.quantity + ' ' + currentUnit;
            if (unitPriceEl) unitPriceEl.textContent = parseFloat(this.dataset.unitPrice).toLocaleString('fr-FR') + ' FCFA';
            if (batchIdEl) batchIdEl.value = this.dataset.itemId;
            
            if (totalQuantityLabel) totalQuantityLabel.textContent = this.dataset.quantity;
            if (totalUnitLabel) totalUnitLabel.textContent = currentUnit;
            if (reportUnitName) reportUnitName.textContent = currentUnit;
            
            if (affectedQty) affectedQty.max = this.dataset.quantity;
            
            currentAttachments = [];
            updateAttachmentsPreview();
            
            if (isEditMode) {
                const issueType = this.dataset.issueType || '';
                const issueDesc = this.dataset.issueDescription || '';
                const issuePriority = this.dataset.issuePriority || 'medium';
                const issueAffectedQty = parseInt(this.dataset.issueAffectedQuantity) || currentOrderedQuantity;
                const issueStockAction = this.dataset.issueStockAction || 'none';
                const issueAttachments = this.dataset.issueAttachments ? JSON.parse(this.dataset.issueAttachments.replace(/&quot;/g, '\"')) : [];
                
                const issueTypeEl = document.getElementById('issue_type');
                const descriptionEl = document.getElementById('description');
                const priorityEl = document.getElementById('priority');
                const stockActionEl = document.getElementById('stock_action');
                
                if (issueTypeEl) issueTypeEl.value = issueType;
                if (descriptionEl) descriptionEl.value = issueDesc;
                if (priorityEl) priorityEl.value = issuePriority;
                if (stockActionEl) stockActionEl.value = issueStockAction;
                
                if (issueAttachments && issueAttachments.length) {
                    currentAttachments = [...issueAttachments];
                    updateAttachmentsPreview();
                }
                
                if (issueAffectedQty < currentOrderedQuantity) {
                    if (quantityPartial) quantityPartial.checked = true;
                    if (partialContainer) partialContainer.style.display = 'block';
                    if (affectedQty) affectedQty.value = issueAffectedQty;
                } else {
                    if (quantityAll) quantityAll.checked = true;
                    if (partialContainer) partialContainer.style.display = 'none';
                    if (affectedQty) affectedQty.value = '';
                }
            } else {
                const issueTypeEl = document.getElementById('issue_type');
                const descriptionEl = document.getElementById('description');
                const priorityEl = document.getElementById('priority');
                const stockActionEl = document.getElementById('stock_action');
                
                if (issueTypeEl) issueTypeEl.value = '';
                if (descriptionEl) descriptionEl.value = '';
                if (priorityEl) priorityEl.value = 'medium';
                if (stockActionEl) stockActionEl.value = 'none';
                
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

    // ============================================
    // SUPPRESSION DE PROBLÈME
    // ============================================
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteIssueModal'));
    const deleteMessage = document.getElementById('deleteMessage');
    const deleteForm = document.getElementById('deleteIssueForm');
    
    document.querySelectorAll('.delete-issue-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const itemId = this.dataset.itemId;
            const productName = this.dataset.productName;
            
            if (deleteMessage) {
                deleteMessage.innerHTML = `Êtes-vous sûr de vouloir supprimer le signalement pour le produit <strong>\${productName}</strong> ?`;
            }
            
            if (deleteForm) {
                deleteForm.action = \"{{ path('purchase_delete_issue_temp', {batchId: 'BATCH_ID_PLACEHOLDER'}) }}\".replace('BATCH_ID_PLACEHOLDER', itemId);
            }
            
            deleteModal.show();
        });
    });

    // ============================================
    // CONFIRMATION DE RÉCEPTION AVEC LOADING
    // ============================================
    const confirmModal = new bootstrap.Modal(document.getElementById('confirmReceptionModal'));
    const confirmBtn = document.getElementById('confirmReceptionBtn');
    const confirmSubmit = document.getElementById('confirmReceptionSubmit');
    const cancelConfirmBtn = document.getElementById('cancelConfirmBtn');
    const confirmLoading = document.getElementById('confirmModalLoading');
    const receiveForm = document.getElementById('receiveForm');
    
    if (confirmBtn) {
        confirmBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Vérifier qu'au moins un article est réceptionné
            let hasReceived = false;
            document.querySelectorAll('.batch-card').forEach(card => {
                if (!card.querySelector('.remove-checkbox')?.checked) hasReceived = true;
            });
            
            if (!hasReceived) {
                alert('Vous devez réceptionner au moins un article.');
                return;
            }
            
            // Vérifier uniquement les champs requis NON désactivés
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
            // ✅ Activer le loading
            if (confirmLoading) {
                confirmLoading.classList.add('show');
            }
            
            // ✅ Désactiver le bouton pour éviter les doubles clics
            this.disabled = true;
            this.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\" role=\"status\" aria-hidden=\"true\"></span> Traitement...';
            
            // ✅ Désactiver le bouton Annuler
            if (cancelConfirmBtn) {
                cancelConfirmBtn.disabled = true;
            }
            
            // ✅ Soumettre le formulaire après un petit délai pour que l'utilisateur voie le loading
            setTimeout(function() {
                receiveForm.submit();
            }, 300);
        });
    }
});
</script>
{% endblock %}", "purchase/receive.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\purchase\\receive.html.twig");
    }
}
