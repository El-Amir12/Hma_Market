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
class __TwigTemplate_6f7b989e15a32c21b55d7e0c80def8be extends Template
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
        yield "Réceptionner la commande ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 4), "html", null, true);
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 237
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 245), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "id", [], "any", false, false, false, 254)]), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 269), "html", null, true);
        yield "</div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"small text-muted text-uppercase\">Fournisseur</div>
                    ";
        // line 273
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 273)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 274
            yield "                        <div class=\"fw-bold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 274), "name", [], "any", false, false, false, 274), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "createdAt", [], "any", false, false, false, 283), "d/m/Y"), "html", null, true);
        yield "</div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"small text-muted text-uppercase\">Montant total</div>
                    <div class=\"fw-bold text-primary\">";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "totalAmount", [], "any", false, false, false, 287), CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "hmaService", [], "any", false, false, false, 287)), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 293
        $context["sessionIssues"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 293), "get", ["pending_issues", []], "method", false, false, false, 293);
        // line 294
        yield "    ";
        $context["pendingCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["sessionIssues"] ?? null));
        // line 295
        yield "    ";
        $context["hasSupplier"] =  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 295));
        // line 296
        yield "
    <!-- Barre d'outils réception -->
    <div class=\"reception-toolbar\">
        <div class=\"d-flex align-items-center gap-3\">
            <div class=\"stat-card p-2 px-3\">
                <i class=\"bi bi-box-seam text-primary me-1\"></i>
                <span class=\"fw-bold\">";
        // line 302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseItems", [], "any", false, false, false, 302)), "html", null, true);
        yield "</span>
                <span class=\"text-muted small\">articles</span>
            </div>
            ";
        // line 305
        if ((($context["pendingCount"] ?? null) > 0)) {
            // line 306
            yield "            <div class=\"stat-card p-2 px-3\" style=\"background: #fef3c7;\">
                <i class=\"bi bi-exclamation-triangle-fill text-warning me-1\"></i>
                <span class=\"fw-bold text-warning\">";
            // line 308
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pendingCount"] ?? null), "html", null, true);
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
        if ((($tmp = ($context["hasSupplier"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseItems", [], "any", false, false, false, 328));
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
            $context['_seq'] = CoreExtension::ensureTraversable(($context["sessionIssues"] ?? null));
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
            if ((($tmp = ($context["hasPendingIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "has-issue";
            }
            yield "\" data-item-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 341), "html", null, true);
            yield "\">
                <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
                    <div class=\"d-flex align-items-center gap-3\">
                        ";
            // line 344
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 344)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 345
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 345))), "html", null, true);
                yield "\" 
                                 alt=\"";
                // line 346
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 346), "html", null, true);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 355), "html", null, true);
            yield "</h6>
                            <div class=\"small text-muted\">
                                <span class=\"me-2\">Code: ";
            // line 357
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "barcode", [], "any", false, false, false, 357), "html", null, true);
            yield "</span>
                                ";
            // line 358
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hasExpiryDate", [], "any", false, false, false, 358)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(($context["itemTotalPrice"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "hmaService", [], "any", false, false, false, 367)), "html", null, true);
            yield "</div>
                        <div class=\"small text-muted\">";
            // line 368
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 368)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 368)) : (0)), CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "hmaService", [], "any", false, false, false, 368)), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 368)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 368), "pièce")) : ("pièce")), "html", null, true);
            yield "</div>
                    </div>
                </div>
                
                ";
            // line 372
            if ((($tmp = ($context["hasPendingIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 373
                yield "                <div class=\"issue-indicator\">
                    <i class=\"bi bi-exclamation-triangle-fill\"></i>
                    <div>
                        <strong>⚠️ Problème signalé</strong>
                        <span class=\"text-muted mx-2\">•</span>
                        <span>";
                // line 378
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(((CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "issue_type", [], "any", true, true, false, 378)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "issue_type", [], "any", false, false, false, 378), "Non spécifié")) : ("Non spécifié")), ["_" => " "])), "html", null, true);
                yield "</span>
                        <span class=\"text-muted mx-2\">•</span>
                        <span>";
                // line 380
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "affected_quantity", [], "any", true, true, false, 380)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "affected_quantity", [], "any", false, false, false, 380), 0)) : (0)), "html", null, true);
                yield " unité(s)</span>
                        <span class=\"text-muted mx-2\">•</span>
                        <span>Priorité: ";
                // line 382
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "priority", [], "any", true, true, false, 382)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "priority", [], "any", false, false, false, 382), "medium")) : ("medium"))), "html", null, true);
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
            if ((($tmp = ($context["hasSupplier"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 402
                yield "                                <div class=\"btn-group\">
                                    <button type=\"button\" 
                                            class=\"btn btn-sm ";
                // line 404
                if ((($tmp = ($context["hasPendingIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 406), "html", null, true);
                yield "\"
                                            data-batch-number=\"LOT-";
                // line 407
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 407), "html", null, true);
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemTotalPrice"] ?? null), "html", null, true);
                yield "\"
                                            data-unit=\"";
                // line 411
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 411)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 411), "pièce")) : ("pièce")), "html", null, true);
                yield "\"
                                            ";
                // line 412
                if ((($tmp = ($context["hasPendingIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 413
                    yield "                                            data-edit-mode=\"true\"
                                            data-issue-type=\"";
                    // line 414
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "issue_type", [], "any", false, false, false, 414), "html", null, true);
                    yield "\"
                                            data-issue-description=\"";
                    // line 415
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "description", [], "any", false, false, false, 415), "html", null, true);
                    yield "\"
                                            data-issue-priority=\"";
                    // line 416
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "priority", [], "any", false, false, false, 416), "html", null, true);
                    yield "\"
                                            data-issue-affected-quantity=\"";
                    // line 417
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "affected_quantity", [], "any", false, false, false, 417), "html", null, true);
                    yield "\"
                                            data-issue-stock-action=\"";
                    // line 418
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "stock_action", [], "any", false, false, false, 418), "html", null, true);
                    yield "\"
                                            data-issue-attachments=\"";
                    // line 419
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "attachments", [], "any", false, false, false, 419)), "html_attr");
                    yield "\"
                                            ";
                }
                // line 420
                yield ">
                                        <i class=\"bi bi-exclamation-triangle me-1\"></i>
                                        ";
                // line 422
                if ((($tmp = ($context["hasPendingIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "Modifier le signalement";
                } else {
                    yield "Signaler un problème";
                }
                // line 423
                yield "                                    </button>
                                    ";
                // line 424
                if ((($tmp = ($context["hasPendingIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 425
                    yield "                                    <button type=\"button\" 
                                            class=\"btn btn-sm btn-outline-danger delete-issue-btn\"
                                            data-item-id=\"";
                    // line 427
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 427), "html", null, true);
                    yield "\"
                                            data-product-name=\"";
                    // line 428
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 428), "html", null, true);
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
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hasExpiryDate", [], "any", false, false, false, 441)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 446)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 446), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((("LOT-" . CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 446)) . "-") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 446)), "html", null, true)));
            yield "\"
                                ";
            // line 447
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hasExpiryDate", [], "any", false, false, false, 447)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 479)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 479)) : (0)), CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "hmaService", [], "any", false, false, false, 479)), "html", null, true);
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
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locations"] ?? null));
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
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hasExpiryDate", [], "any", false, false, false, 513)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "id", [], "any", false, false, false, 550)]), "html", null, true);
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
        if ((($tmp = ($context["hasSupplier"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        if ((($tmp = ($context["hasSupplier"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "id", [], "any", false, false, false, 620), "html", null, true);
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
        yield from [];
    }

    // line 738
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 739
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('=== INIT PURCHASE RECEIVE ===');

    // ============================================
    // 1. INITIALISATION SELECT2 (emplacements)
    // ============================================
    if (typeof \$ !== 'undefined' && \$.fn.select2) {
        \$('.location-select').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '-- Sélectionner un emplacement --',
            allowClear: true,
            width: '100%'
        });
    }

    // ============================================
    // 2. MODAL CONFIRMATION RÉCEPTION
    // ============================================
    const confirmModalEl = document.getElementById('confirmReceptionModal');
    const confirmBtn = document.getElementById('confirmReceptionBtn');
    const submitBtn = document.getElementById('confirmReceptionSubmit');
    const receiveForm = document.getElementById('receiveForm');
    const loadingOverlay = document.getElementById('confirmModalLoading');

    // ✅ Vérifier que l'élément existe AVANT d'instancier Bootstrap
    let confirmModal = null;
    if (confirmModalEl && typeof bootstrap !== 'undefined') {
        try {
            confirmModal = new bootstrap.Modal(confirmModalEl, {
                backdrop: 'static',
                keyboard: false
            });
        } catch (e) {
            console.error('❌ Impossible d\\'initialiser le modal:', e);
        }
    } else {
        console.warn('⚠️ confirmReceptionModal introuvable ou Bootstrap non chargé');
    }

    // Ouvrir le modal
    confirmBtn?.addEventListener('click', function(e) {
        e.preventDefault();
        console.log('→ Ouverture du modal de confirmation');
        if (confirmModal) {
            confirmModal.show();
        } else {
            // Fallback : soumettre directement si le modal n'est pas dispo
            if (confirm('Confirmer la réception de cette commande ?')) {
                receiveForm?.submit();
            }
        }
    });

    // Confirmer et soumettre
    submitBtn?.addEventListener('click', function(e) {
        e.preventDefault();
        console.log('→ Confirmation de la réception');

        // Désactiver le bouton pour éviter le double-clic
        this.disabled = true;
        this.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span> Traitement...';

        // Afficher l'overlay de chargement dans le modal
        if (loadingOverlay) {
            loadingOverlay.classList.add('show');
        }

        // Désactiver aussi le bouton Annuler du modal
        const cancelBtn = document.getElementById('cancelConfirmBtn');
        if (cancelBtn) cancelBtn.disabled = true;

        // ✅ LAISSER le modal ouvert pendant la soumission pour éviter
        //    les problèmes de focus et de scroll
        setTimeout(() => {
            if (receiveForm) {
                console.log('→ Soumission du formulaire');
                receiveForm.submit();
            } else {
                console.error('❌ Formulaire receiveForm introuvable');
                this.disabled = false;
                this.innerHTML = '<i class=\"bi bi-check-lg me-1\"></i> Confirmer';
                if (loadingOverlay) loadingOverlay.classList.remove('show');
            }
        }, 200);
    });

    // ============================================
    // 3. GESTION DES PROBLÈMES (Signaler/Modifier)
    // ============================================
    const reportIssueModalEl = document.getElementById('reportIssueModal');
    let reportIssueModal = null;
    if (reportIssueModalEl && typeof bootstrap !== 'undefined') {
        try {
            reportIssueModal = new bootstrap.Modal(reportIssueModalEl);
        } catch (e) {
            console.error('❌ Impossible d\\'initialiser reportIssueModal:', e);
        }
    }

    document.querySelectorAll('.report-issue-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const itemId = this.dataset.itemId;
            const isEditMode = this.dataset.editMode === 'true';

            console.log('→ Signalement problème item:', itemId, 'edit:', isEditMode);

            // Remplir les champs du modal
            document.getElementById('report_batch_id').value = itemId;
            document.getElementById('report_product_name').textContent = this.dataset.productName;
            document.getElementById('report_batch_number').textContent = this.dataset.batchNumber;
            document.getElementById('report_unit_price').textContent = 
                new Intl.NumberFormat('fr-FR').format(this.dataset.unitPrice) + ' FCFA';
            document.getElementById('report_ordered_quantity').textContent = this.dataset.quantity;
            document.getElementById('report_unit_name').textContent = this.dataset.unit;

            document.getElementById('total_quantity_label').textContent = this.dataset.quantity;
            document.getElementById('total_unit_label').textContent = this.dataset.unit;

            // Titre du modal
            const modalTitle = document.getElementById('modalTitle');
            if (modalTitle) {
                modalTitle.textContent = isEditMode ? 'Modifier le signalement' : 'Signaler un problème';
            }

            // Si mode édition : pré-remplir les champs
            if (isEditMode) {
                document.getElementById('issue_type').value = this.dataset.issueType || '';
                document.getElementById('description').value = this.dataset.issueDescription || '';
                document.getElementById('priority').value = this.dataset.issuePriority || 'medium';
                document.getElementById('stock_action').value = this.dataset.issueStockAction || 'none';

                const affectedQty = parseInt(this.dataset.issueAffectedQuantity) || 0;
                const totalQty = parseInt(this.dataset.quantity) || 0;

                if (affectedQty > 0 && affectedQty < totalQty) {
                    document.getElementById('quantity_partial').checked = true;
                    document.getElementById('partial_quantity_container').style.display = 'block';
                    document.getElementById('affected_quantity').value = affectedQty;
                } else {
                    document.getElementById('quantity_all').checked = true;
                    document.getElementById('partial_quantity_container').style.display = 'none';
                }

                // Pièces jointes existantes
                const existingAttachments = this.dataset.issueAttachments;
                if (existingAttachments) {
                    try {
                        const attachments = JSON.parse(existingAttachments);
                        document.getElementById('existing_attachments').value = JSON.stringify(attachments);
                        renderExistingAttachments(attachments);
                    } catch (e) {
                        console.error('Erreur parsing attachments:', e);
                    }
                }
            } else {
                // Reset pour nouveau signalement
                document.getElementById('issueForm').reset();
                document.getElementById('report_batch_id').value = itemId;
                document.getElementById('existing_attachments').value = '';
                document.getElementById('attachmentsPreview').innerHTML = '';
                document.getElementById('partial_quantity_container').style.display = 'none';
                document.getElementById('quantity_all').checked = true;
            }

            if (reportIssueModal) reportIssueModal.show();
        });
    });

    // Gestion quantité all/partial
    document.getElementById('quantity_all')?.addEventListener('change', function() {
        if (this.checked) {
            document.getElementById('partial_quantity_container').style.display = 'none';
        }
    });
    document.getElementById('quantity_partial')?.addEventListener('change', function() {
        if (this.checked) {
            document.getElementById('partial_quantity_container').style.display = 'block';
            document.getElementById('affected_quantity')?.focus();
        }
    });

    // ============================================
    // 4. SUPPRESSION DE PROBLÈME
    // ============================================
    const deleteIssueModalEl = document.getElementById('deleteIssueModal');
    let deleteIssueModal = null;
    if (deleteIssueModalEl && typeof bootstrap !== 'undefined') {
        try {
            deleteIssueModal = new bootstrap.Modal(deleteIssueModalEl);
        } catch (e) {
            console.error('❌ Impossible d\\'initialiser deleteIssueModal:', e);
        }
    }

    document.querySelectorAll('.delete-issue-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const itemId = this.dataset.itemId;
            const productName = this.dataset.productName;

            console.log('→ Suppression problème item:', itemId);

            document.getElementById('deleteMessage').innerHTML = 
                `Êtes-vous sûr de vouloir supprimer le signalement pour <strong>\${productName}</strong> ?`;

            const deleteForm = document.getElementById('deleteIssueForm');
            if (deleteForm) {
                deleteForm.action = `/purchase/delete-issue-temp/\${itemId}`;
            }

            if (deleteIssueModal) deleteIssueModal.show();
        });
    });

    // ============================================
    // 5. APERÇU DES PIÈCES JOINTES
    // ============================================
    document.getElementById('attachments')?.addEventListener('change', function(e) {
        const files = e.target.files;
        const preview = document.getElementById('attachmentsPreview');
        if (!preview) return;
        preview.innerHTML = '';

        Array.from(files).forEach(file => {
            const wrapper = document.createElement('div');
            wrapper.className = 'attachment-preview';

            if (file.type.startsWith('image/')) {
                const img = document.createElement('img');
                img.src = URL.createObjectURL(file);
                wrapper.appendChild(img);
            } else {
                const placeholder = document.createElement('div');
                placeholder.className = 'file-placeholder';
                placeholder.innerHTML = '<i class=\"bi bi-file-earmark fs-3 text-secondary\"></i>';
                wrapper.appendChild(placeholder);
            }

            preview.appendChild(wrapper);
        });
    });

    function renderExistingAttachments(attachments) {
        const preview = document.getElementById('attachmentsPreview');
        if (!preview) return;
        preview.innerHTML = '';

        attachments.forEach(filename => {
            const wrapper = document.createElement('div');
            wrapper.className = 'attachment-preview';

            const img = document.createElement('img');
            img.src = `/uploads/credit_notes_attachments/\${filename}`;
            img.onerror = function() {
                this.parentElement.innerHTML = 
                    '<div class=\"file-placeholder\"><i class=\"bi bi-file-earmark fs-3 text-secondary\"></i></div>';
            };

            const removeBtn = document.createElement('span');
            removeBtn.className = 'remove-attachment';
            removeBtn.innerHTML = '×';
            removeBtn.onclick = function() {
                const existing = JSON.parse(document.getElementById('existing_attachments').value || '[]');
                const updated = existing.filter(f => f !== filename);
                document.getElementById('existing_attachments').value = JSON.stringify(updated);
                wrapper.remove();
            };

            wrapper.appendChild(img);
            wrapper.appendChild(removeBtn);
            preview.appendChild(wrapper);
        });
    }

    console.log('=== INIT TERMINÉE ===');
});
</script>
";
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
        return array (  1165 => 739,  1158 => 738,  1036 => 620,  1030 => 617,  1018 => 607,  1016 => 606,  998 => 590,  993 => 587,  991 => 586,  952 => 550,  946 => 546,  930 => 543,  924 => 539,  917 => 535,  911 => 532,  900 => 524,  894 => 521,  885 => 514,  883 => 513,  877 => 509,  867 => 506,  862 => 505,  858 => 504,  851 => 500,  837 => 489,  832 => 487,  821 => 479,  805 => 466,  800 => 464,  789 => 456,  779 => 448,  775 => 447,  771 => 446,  766 => 444,  762 => 442,  758 => 441,  749 => 434,  745 => 432,  738 => 428,  734 => 427,  730 => 425,  728 => 424,  725 => 423,  719 => 422,  715 => 420,  710 => 419,  706 => 418,  702 => 417,  698 => 416,  694 => 415,  690 => 414,  687 => 413,  685 => 412,  681 => 411,  677 => 410,  673 => 409,  669 => 408,  663 => 407,  659 => 406,  655 => 405,  647 => 404,  643 => 402,  641 => 401,  632 => 395,  626 => 394,  617 => 388,  613 => 386,  606 => 382,  601 => 380,  596 => 378,  589 => 373,  587 => 372,  578 => 368,  574 => 367,  568 => 363,  562 => 359,  560 => 358,  556 => 357,  551 => 355,  548 => 354,  542 => 350,  535 => 346,  530 => 345,  528 => 344,  518 => 341,  515 => 340,  509 => 339,  506 => 338,  503 => 337,  500 => 336,  497 => 335,  492 => 334,  489 => 333,  487 => 332,  484 => 331,  481 => 330,  478 => 329,  461 => 328,  454 => 323,  447 => 318,  442 => 315,  440 => 314,  436 => 312,  429 => 308,  425 => 306,  423 => 305,  417 => 302,  409 => 296,  406 => 295,  403 => 294,  401 => 293,  392 => 287,  385 => 283,  380 => 280,  374 => 276,  368 => 274,  366 => 273,  359 => 269,  344 => 257,  338 => 254,  326 => 245,  322 => 244,  314 => 238,  307 => 237,  73 => 7,  66 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "purchase/receive.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\purchase\\receive.html.twig");
    }
}
