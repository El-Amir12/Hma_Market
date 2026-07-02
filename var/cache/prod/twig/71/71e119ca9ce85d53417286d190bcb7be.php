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
class __TwigTemplate_e16c8b84829d735141f2b8d2e67c530b extends Template
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
    :root {
        --primary: #0463f1;
        --success: #10b981;
        --warning: #f59e0b;
        --danger: #ef4444;
        --info: #3b82f6;
        --gray-50: #f9fafb;
        --gray-100: #f3f4f6;
        --gray-200: #e5e7eb;
        --gray-600: #4b5563;
        --gray-700: #374151;
    }
    
    .batch-card {
        transition: all 0.3s ease;
        border-left: 4px solid var(--primary);
        margin-bottom: 1.25rem;
        border-radius: 0.75rem;
        overflow: hidden;
    }
    .batch-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }
    .batch-card.has-issue {
        border-left-color: var(--warning);
        background-color: #fffbeb;
    }
    .batch-card.removed {
        opacity: 0.6;
        background-color: var(--gray-100);
        border-left-color: var(--gray-600);
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
        accent-color: var(--danger);
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
        color: var(--warning);
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
        border-color: var(--gray-200);
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
        background: var(--danger);
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
        background: var(--gray-100);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid var(--gray-200);
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

    // line 169
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 170
        yield "<div class=\"container-fluid px-4 py-3\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_index");
        yield "\">Commandes</a></li>
                    <li class=\"breadcrumb-item active\">";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 177), "html", null, true);
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
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "id", [], "any", false, false, false, 186)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"bi bi-eye me-1\"></i> Détails
            </a>
            <a href=\"";
        // line 189
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
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 201), "html", null, true);
        yield "</div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"small text-muted text-uppercase\">Fournisseur</div>
                    <div class=\"fw-bold\">";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 205), "name", [], "any", false, false, false, 205), "html", null, true);
        yield "</div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"small text-muted text-uppercase\">Date commande</div>
                    <div>";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "createdAt", [], "any", false, false, false, 209), "d/m/Y"), "html", null, true);
        yield "</div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"small text-muted text-uppercase\">Montant total</div>
                    <div class=\"fw-bold text-primary\">";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "totalAmount", [], "any", false, false, false, 213), CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "hmaService", [], "any", false, false, false, 213)), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 220
        yield "    ";
        $context["sessionIssues"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 220), "get", ["pending_issues", []], "method", false, false, false, 220);
        // line 221
        yield "    ";
        $context["pendingCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["sessionIssues"] ?? null));
        // line 222
        yield "
    <!-- Barre d'outils réception -->
    <div class=\"reception-toolbar\">
        <div class=\"d-flex align-items-center gap-3\">
            <div class=\"stat-card p-2 px-3\">
                <i class=\"bi bi-box-seam text-primary me-1\"></i>
                <span class=\"fw-bold\">";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseItems", [], "any", false, false, false, 228)), "html", null, true);
        yield "</span>
                <span class=\"text-muted small\">articles</span>
            </div>
            ";
        // line 231
        if ((($context["pendingCount"] ?? null) > 0)) {
            // line 232
            yield "            <div class=\"stat-card p-2 px-3\" style=\"background: #fef3c7;\">
                <i class=\"bi bi-exclamation-triangle-fill text-warning me-1\"></i>
                <span class=\"fw-bold text-warning\">";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pendingCount"] ?? null), "html", null, true);
            yield "</span>
                <span class=\"text-muted small\">problèmes signalés</span>
            </div>
            ";
        }
        // line 238
        yield "        </div>
        <div class=\"text-muted small\">
            <i class=\"bi bi-info-circle me-1\"></i>
            Les problèmes signalés seront traités à la validation
        </div>
    </div>

    <!-- Formulaire de réception -->
    <form method=\"POST\" class=\"receive-form\" id=\"receiveForm\">
        ";
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseItems", [], "any", false, false, false, 247));
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
            // line 248
            yield "            ";
            $context["product"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 248);
            // line 249
            yield "            ";
            $context["itemTotalPrice"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 249)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 249)) : (0)) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 249));
            // line 250
            yield "            
            ";
            // line 252
            yield "            ";
            $context["hasPendingIssue"] = false;
            // line 253
            yield "            ";
            $context["pendingIssue"] = null;
            // line 254
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["sessionIssues"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["issue"]) {
                // line 255
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "batch_id", [], "any", false, false, false, 255) == CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 255))) {
                    // line 256
                    yield "                    ";
                    $context["hasPendingIssue"] = true;
                    // line 257
                    yield "                    ";
                    $context["pendingIssue"] = $context["issue"];
                    // line 258
                    yield "                ";
                }
                // line 259
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['issue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 260
            yield "            
            <div class=\"card batch-card ";
            // line 261
            if ((($tmp = ($context["hasPendingIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "has-issue";
            }
            yield "\" data-item-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 261), "html", null, true);
            yield "\">
                <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
                    <div class=\"d-flex align-items-center gap-3\">
                        ";
            // line 264
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 264)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 265
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 265))), "html", null, true);
                yield "\" 
                                 alt=\"";
                // line 266
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 266), "html", null, true);
                yield "\" 
                                 class=\"rounded\"
                                 style=\"width: 45px; height: 45px; object-fit: cover;\">
                        ";
            } else {
                // line 270
                yield "                            <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 45px; height: 45px;\">
                                <i class=\"bi bi-box text-secondary fs-5\"></i>
                            </div>
                        ";
            }
            // line 274
            yield "                        <div>
                            <h6 class=\"mb-0 fw-semibold\">";
            // line 275
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 275), "html", null, true);
            yield "</h6>
                            <div class=\"small text-muted\">
                                <span class=\"me-2\">Code: ";
            // line 277
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "barcode", [], "any", false, false, false, 277), "html", null, true);
            yield "</span>
                                ";
            // line 278
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hasExpiryDate", [], "any", false, false, false, 278)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 279
                yield "                                    <span class=\"perishable-badge\">
                                        <i class=\"bi bi-calendar-exclamation me-1\"></i>Périssable
                                    </span>
                                ";
            }
            // line 283
            yield "                            </div>
                        </div>
                    </div>
                    <div class=\"text-end\">
                        <div class=\"fw-bold text-primary\">";
            // line 287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(($context["itemTotalPrice"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "hmaService", [], "any", false, false, false, 287)), "html", null, true);
            yield "</div>
                        <div class=\"small text-muted\">";
            // line 288
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 288)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 288)) : (0)), CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "hmaService", [], "any", false, false, false, 288)), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 288)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 288), "pièce")) : ("pièce")), "html", null, true);
            yield "</div>
                    </div>
                </div>
                
                ";
            // line 292
            if ((($tmp = ($context["hasPendingIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 293
                yield "                <div class=\"issue-indicator\">
                    <i class=\"bi bi-exclamation-triangle-fill\"></i>
                    <div>
                        <strong>⚠️ Problème signalé</strong>
                        <span class=\"text-muted mx-2\">•</span>
                        <span>";
                // line 298
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(((CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "issue_type", [], "any", true, true, false, 298)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "issue_type", [], "any", false, false, false, 298), "Non spécifié")) : ("Non spécifié")), ["_" => " "])), "html", null, true);
                yield "</span>
                        <span class=\"text-muted mx-2\">•</span>
                        <span>";
                // line 300
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "affected_quantity", [], "any", true, true, false, 300)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "affected_quantity", [], "any", false, false, false, 300), 0)) : (0)), "html", null, true);
                yield " unité(s)</span>
                        <span class=\"text-muted mx-2\">•</span>
                        <span>Priorité: ";
                // line 302
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "priority", [], "any", true, true, false, 302)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "priority", [], "any", false, false, false, 302), "medium")) : ("medium"))), "html", null, true);
                yield "</span>
                    </div>
                </div>
                ";
            }
            // line 306
            yield "                
                <div class=\"card-body\">
                    <input type=\"hidden\" name=\"item_id[]\" value=\"";
            // line 308
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 308), "html", null, true);
            yield "\">
                    
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-check\">
                                <input class=\"form-check-input remove-checkbox\" type=\"checkbox\" 
                                       name=\"remove_";
            // line 314
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 314), "html", null, true);
            yield "\" id=\"remove_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 314), "html", null, true);
            yield "\" value=\"1\">
                                <label class=\"form-check-label text-danger\" for=\"remove_";
            // line 315
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 315), "html", null, true);
            yield "\">
                                    <i class=\"bi bi-trash me-1\"></i> Ne pas réceptionner cet article
                                </label>
                            </div>
                        </div>
                        <div class=\"col-md-6 text-md-end\">
                            <div class=\"btn-group\">
                                <button type=\"button\" 
                                        class=\"btn btn-sm ";
            // line 323
            if ((($tmp = ($context["hasPendingIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "btn-warning";
            } else {
                yield "btn-outline-danger";
            }
            yield " report-issue-btn\"
                                        data-item-id=\"";
            // line 324
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 324), "html", null, true);
            yield "\"
                                        data-product-name=\"";
            // line 325
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 325), "html", null, true);
            yield "\"
                                        data-batch-number=\"LOT-";
            // line 326
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 326), "html", null, true);
            yield "-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 326), "html", null, true);
            yield "\"
                                        data-unit-price=\"";
            // line 327
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 327)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 327), "html", null, true)) : (0));
            yield "\"
                                        data-quantity=\"";
            // line 328
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 328), "html", null, true);
            yield "\"
                                        data-total-price=\"";
            // line 329
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemTotalPrice"] ?? null), "html", null, true);
            yield "\"
                                        data-unit=\"";
            // line 330
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 330)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 330), "pièce")) : ("pièce")), "html", null, true);
            yield "\"
                                        ";
            // line 331
            if ((($tmp = ($context["hasPendingIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 332
                yield "                                        data-edit-mode=\"true\"
                                        data-issue-type=\"";
                // line 333
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "issue_type", [], "any", false, false, false, 333), "html", null, true);
                yield "\"
                                        data-issue-description=\"";
                // line 334
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "description", [], "any", false, false, false, 334), "html", null, true);
                yield "\"
                                        data-issue-priority=\"";
                // line 335
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "priority", [], "any", false, false, false, 335), "html", null, true);
                yield "\"
                                        data-issue-affected-quantity=\"";
                // line 336
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "affected_quantity", [], "any", false, false, false, 336), "html", null, true);
                yield "\"
                                        data-issue-stock-action=\"";
                // line 337
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "stock_action", [], "any", false, false, false, 337), "html", null, true);
                yield "\"
                                        data-issue-attachments=\"";
                // line 338
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["pendingIssue"] ?? null), "attachments", [], "any", false, false, false, 338)), "html_attr");
                yield "\"
                                        ";
            }
            // line 339
            yield ">
                                    <i class=\"bi bi-exclamation-triangle me-1\"></i>
                                    ";
            // line 341
            if ((($tmp = ($context["hasPendingIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Modifier le signalement";
            } else {
                yield "Signaler un problème";
            }
            // line 342
            yield "                                </button>
                                ";
            // line 343
            if ((($tmp = ($context["hasPendingIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 344
                yield "                                <button type=\"button\" 
                                        class=\"btn btn-sm btn-outline-danger delete-issue-btn\"
                                        data-item-id=\"";
                // line 346
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 346), "html", null, true);
                yield "\"
                                        data-product-name=\"";
                // line 347
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 347), "html", null, true);
                yield "\">
                                    <i class=\"bi bi-trash\"></i>
                                </button>
                                ";
            }
            // line 351
            yield "                            </div>
                        </div>
                    </div>

                    <div class=\"row g-3\">
                        <div class=\"col-md-4\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-upc-scan me-1\"></i>Numéro de lot
                                ";
            // line 359
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hasExpiryDate", [], "any", false, false, false, 359)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"text-danger\">*</span>";
            }
            // line 360
            yield "                            </label>
                            <input type=\"text\" 
                                name=\"batch_number_";
            // line 362
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 362), "html", null, true);
            yield "\" 
                                class=\"form-control form-control-sm\" 
                                value=\"";
            // line 364
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 364)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 364), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((("LOT-" . CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 364)) . "-") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 364)), "html", null, true)));
            yield "\"
                                ";
            // line 365
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hasExpiryDate", [], "any", false, false, false, 365)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "required";
            }
            // line 366
            yield "                                placeholder=\"Ex: LOT-20250328-001\">
                            <small class=\"text-muted\">Laissez vide pour génération automatique</small>
                        </div>

                        <div class=\"col-md-4\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-box-seam me-1\"></i>Quantité commandée
                            </label>
                            <input type=\"number\" class=\"form-control form-control-sm bg-light\" value=\"";
            // line 374
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 374), "html", null, true);
            yield "\" readonly disabled>
                        </div>

                        <div class=\"col-md-4\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-check-circle me-1\"></i>Quantité reçue
                            </label>
                            <input type=\"number\" 
                                   name=\"received_quantity_";
            // line 382
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 382), "html", null, true);
            yield "\" 
                                   class=\"form-control form-control-sm received-quantity\" 
                                   value=\"";
            // line 384
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 384), "html", null, true);
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
            // line 397
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 397)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 397)) : (0)), CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "hmaService", [], "any", false, false, false, 397)), "html", null, true);
            yield "\" readonly disabled>
                        </div>

                        <div class=\"col-md-6\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-pencil me-1\"></i>Prix unitaire réel
                            </label>
                            <input type=\"number\" 
                                   name=\"received_price_";
            // line 405
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 405), "html", null, true);
            yield "\" 
                                   class=\"form-control form-control-sm received-price\" 
                                   value=\"";
            // line 407
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 407)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 407), "html", null, true)) : (0));
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
            // line 418
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 418), "html", null, true);
            yield "\" 
                                    class=\"form-select form-select-sm location-select\"
                                    data-placeholder=\"-- Sélectionner --\">
                                <option value=\"\">-- Sélectionner un emplacement --</option>
                                ";
            // line 422
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 423
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 423), "html", null, true);
                yield "\">
                                        ";
                // line 424
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["location"], "code", [], "any", false, false, false, 424)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["location"], "code", [], "any", false, false, false, 424) . " - "), "html", null, true)) : (""));
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 424), "html", null, true);
                yield "
                                    </option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 427
            yield "                            </select>
                        </div>
                    </div>

                    ";
            // line 431
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hasExpiryDate", [], "any", false, false, false, 431)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 432
                yield "                    <div class=\"row g-3 mt-1\">
                        <div class=\"col-md-6\">
                            <label class=\"form-label small fw-semibold text-uppercase text-muted\">
                                <i class=\"bi bi-calendar-plus me-1\"></i>Date de fabrication
                                <span class=\"text-danger\">*</span>
                            </label>
                            <input type=\"date\" 
                                   name=\"manufacturing_date_";
                // line 439
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 439), "html", null, true);
                yield "\" 
                                   class=\"form-control form-control-sm\" 
                                   required
                                   value=\"";
                // line 442
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
                // line 450
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 450), "html", null, true);
                yield "\" 
                                   class=\"form-control form-control-sm\" 
                                   required
                                   min=\"";
                // line 453
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
                yield "\">
                        </div>
                    </div>
                    ";
            } else {
                // line 457
                yield "                    <div class=\"alert alert-success bg-light border-0 mt-3 mb-0 py-2 small\">
                        <i class=\"bi bi-check-circle me-1\"></i> Produit non périssable - lot créé automatiquement
                    </div>
                    ";
            }
            // line 461
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
        // line 464
        yield "
        <div class=\"card border-0 shadow-sm mt-4\">
            <div class=\"card-body py-3\">
                <div class=\"d-flex justify-content-end gap-2\">
                    <a href=\"";
        // line 468
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "id", [], "any", false, false, false, 468)]), "html", null, true);
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
<div class=\"modal fade\" id=\"confirmReceptionModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
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
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-success\" id=\"confirmReceptionSubmit\">
                    <i class=\"bi bi-check-lg me-1\"></i> Confirmer
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Signaler un problème - AVEC GESTION DES PIÈCES JOINTES -->
<div class=\"modal fade\" id=\"reportIssueModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white py-2\">
                <h5 class=\"modal-title fs-6\">
                    <i class=\"bi bi-exclamation-triangle me-2\"></i><span id=\"modalTitle\">Signaler un problème</span>
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form method=\"post\" action=\"";
        // line 523
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_report_issue_temp");
        yield "\" enctype=\"multipart/form-data\" id=\"issueForm\">
                <div class=\"modal-body py-3\">
                    <input type=\"hidden\" name=\"batch_id\" id=\"report_batch_id\">
                    <input type=\"hidden\" name=\"purchase_id\" value=\"";
        // line 526
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "id", [], "any", false, false, false, 526), "html", null, true);
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
                    <button type=\"submit\" class=\"btn btn-sm btn-danger\" id=\"submitIssueBtn\">
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
            <div class=\"modal-header bg-danger text-white\">
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
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"bi bi-trash me-1\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 643
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 644
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Select2
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

    // Case \"Ne pas réceptionner\"
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

    // Dates expiration
    document.querySelectorAll('input[name^=\"expiry_date_\"]').forEach(input => {
        input.addEventListener('change', function() {
            if (new Date(this.value) < new Date().setHours(0,0,0,0)) {
                alert('La date d\\'expiration ne peut pas être antérieure à aujourd\\'hui.');
                this.value = '';
            }
        });
    });

    // ========== GESTION DES PIÈCES JOINTES ==========
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
        
        // Mettre à jour le champ hidden
        if (existingAttachmentsInput) {
            existingAttachmentsInput.value = JSON.stringify(currentAttachments);
        }
    }
    
    // Suppression d'une pièce jointe
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

    // ========== MODAL SIGNALEMENT ==========
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
            
            // Afficher l'unité
            if (totalQuantityLabel) totalQuantityLabel.textContent = this.dataset.quantity;
            if (totalUnitLabel) totalUnitLabel.textContent = currentUnit;
            if (reportUnitName) reportUnitName.textContent = currentUnit;
            
            if (affectedQty) affectedQty.max = this.dataset.quantity;
            
            // Réinitialiser les pièces jointes
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
                
                // Charger les pièces jointes existantes
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
    
    // Submit du formulaire d'issue - ajouter les pièces jointes existantes
    const issueForm = document.getElementById('issueForm');
    if (issueForm) {
        issueForm.addEventListener('submit', function(e) {
            // S'assurer que les pièces jointes existantes sont bien envoyées
            if (existingAttachmentsInput && currentAttachments.length > 0) {
                existingAttachmentsInput.value = JSON.stringify(currentAttachments);
            }
        });
    }

    // ========== SUPPRESSION DE PROBLÈME ==========
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
        // line 885
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_delete_issue_temp", ["batchId" => "BATCH_ID_PLACEHOLDER"]);
        yield "\".replace('BATCH_ID_PLACEHOLDER', itemId);
            }
            
            deleteModal.show();
        });
    });

    // ========== CONFIRMATION DE RÉCEPTION ==========
    const confirmModal = new bootstrap.Modal(document.getElementById('confirmReceptionModal'));
    const confirmBtn = document.getElementById('confirmReceptionBtn');
    const confirmSubmit = document.getElementById('confirmReceptionSubmit');
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
                // Ignorer si désactivé
                if (input.disabled) return;
                // Ignorer si caché
                if (input.offsetParent === null) return;
                
                // Vérifier la valeur
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
            receiveForm.submit();
        });
    }
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
        return array (  1286 => 885,  1042 => 644,  1035 => 643,  914 => 526,  908 => 523,  850 => 468,  844 => 464,  828 => 461,  822 => 457,  815 => 453,  809 => 450,  798 => 442,  792 => 439,  783 => 432,  781 => 431,  775 => 427,  765 => 424,  760 => 423,  756 => 422,  749 => 418,  735 => 407,  730 => 405,  719 => 397,  703 => 384,  698 => 382,  687 => 374,  677 => 366,  673 => 365,  669 => 364,  664 => 362,  660 => 360,  656 => 359,  646 => 351,  639 => 347,  635 => 346,  631 => 344,  629 => 343,  626 => 342,  620 => 341,  616 => 339,  611 => 338,  607 => 337,  603 => 336,  599 => 335,  595 => 334,  591 => 333,  588 => 332,  586 => 331,  582 => 330,  578 => 329,  574 => 328,  570 => 327,  564 => 326,  560 => 325,  556 => 324,  548 => 323,  537 => 315,  531 => 314,  522 => 308,  518 => 306,  511 => 302,  506 => 300,  501 => 298,  494 => 293,  492 => 292,  483 => 288,  479 => 287,  473 => 283,  467 => 279,  465 => 278,  461 => 277,  456 => 275,  453 => 274,  447 => 270,  440 => 266,  435 => 265,  433 => 264,  423 => 261,  420 => 260,  414 => 259,  411 => 258,  408 => 257,  405 => 256,  402 => 255,  397 => 254,  394 => 253,  391 => 252,  388 => 250,  385 => 249,  382 => 248,  365 => 247,  354 => 238,  347 => 234,  343 => 232,  341 => 231,  335 => 228,  327 => 222,  324 => 221,  321 => 220,  312 => 213,  305 => 209,  298 => 205,  291 => 201,  276 => 189,  270 => 186,  258 => 177,  254 => 176,  246 => 170,  239 => 169,  73 => 7,  66 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "purchase/receive.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\purchase\\receive.html.twig");
    }
}
