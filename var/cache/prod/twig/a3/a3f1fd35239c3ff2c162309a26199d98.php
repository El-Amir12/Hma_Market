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

/* return/show.html.twig */
class __TwigTemplate_4666ed7ed68e73971c4d5267e1902642 extends Template
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
        yield "Retour #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "returnNumber", [], "any", false, false, false, 4), "html", null, true);
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
<style>
    .status-badge {
        padding: 0.2rem 0.5rem;
        border-radius: 20px;
        font-size: 0.65rem;
        font-weight: 600;
        display: inline-block;
    }
    @media (min-width: 768px) {
        .status-badge {
            padding: 0.25rem 0.75rem;
            font-size: 0.75rem;
        }
    }
    .status-pending { background: #fef3c7; color: #d97706; }
    .status-approved { background: #dbeafe; color: #2563eb; }
    .status-completed { background: #dcfce7; color: #16a34a; }
    .status-rejected { background: #fee2e2; color: #dc2626; }
    
    .info-card {
        background: white;
        border-radius: 12px;
        border: 1px solid #e5e7eb;
        overflow: hidden;
    }
    @media (min-width: 768px) {
        .info-card {
            border-radius: 16px;
        }
    }
    .info-card .card-header {
        background: #f8fafc;
        border-bottom: 1px solid #e5e7eb;
        padding: 0.75rem 1rem;
    }
    @media (min-width: 768px) {
        .info-card .card-header {
            padding: 1rem 1.25rem;
        }
    }
    .info-item {
        padding: 0.5rem 1rem;
        border-bottom: 1px solid #f1f5f9;
    }
    @media (min-width: 768px) {
        .info-item {
            padding: 0.75rem 1.25rem;
        }
    }
    .info-item:last-child {
        border-bottom: none;
    }
    .info-label {
        font-size: 0.65rem;
        text-transform: uppercase;
        color: #64748b;
        margin-bottom: 0.25rem;
    }
    @media (min-width: 768px) {
        .info-label {
            font-size: 0.75rem;
        }
    }
    .info-value {
        font-weight: 600;
        font-size: 0.85rem;
    }
    @media (min-width: 768px) {
        .info-value {
            font-size: 1rem;
        }
    }
    
    .motif-badge {
        background-color: #0463f1 !important;
        color: white !important;
        padding: 4px 10px !important;
        border-radius: 20px !important;
        font-weight: 500 !important;
        display: inline-flex !important;
        align-items: center !important;
        gap: 4px !important;
        font-size: 0.75rem !important;
    }
    @media (min-width: 768px) {
        .motif-badge {
            padding: 6px 12px !important;
            gap: 6px !important;
            font-size: 0.85rem !important;
        }
    }
    
    .card-header-actions {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: stretch;
        flex-wrap: wrap;
        gap: 0.5rem;
        width: 100%;
    }
    @media (min-width: 768px) {
        .card-header-actions {
            flex-direction: row;
            align-items: center;
            gap: 1rem;
        }
    }
    
    /* ✅ ACTIONS GROUP - BIEN ALIGNÉES */
    .action-buttons-group {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
        align-items: center;
    }
    .action-buttons-group .btn {
        padding: 0.3rem 0.6rem;
        font-weight: 500;
        font-size: 0.75rem;
        transition: transform 0.2s, box-shadow 0.2s;
        flex: 1;
        min-width: 80px;
        text-align: center;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 4px;
        white-space: nowrap;
    }
    @media (min-width: 768px) {
        .action-buttons-group .btn {
            padding: 0.5rem 1rem;
            font-size: 0.85rem;
            flex: 0 1 auto;
            min-width: auto;
        }
    }
    .action-buttons-group .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    
    /* ✅ BOUTONS HEADER */
    .header-buttons {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
        align-items: center;
    }
    .header-buttons .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 4px;
        white-space: nowrap;
    }
    @media (max-width: 576px) {
        .header-buttons .btn {
            font-size: 0.7rem !important;
            padding: 0.25rem 0.5rem !important;
        }
        .header-buttons .btn i {
            font-size: 0.7rem !important;
        }
    }
    
    .quantity-this-return {
        background-color: #8b5cf6 !important;
        color: white !important;
        font-size: 0.7rem !important;
        padding: 3px 8px !important;
        border-radius: 8px !important;
        display: inline-flex !important;
        align-items: center !important;
        gap: 4px !important;
    }
    @media (min-width: 768px) {
        .quantity-this-return {
            font-size: 0.85rem !important;
            padding: 5px 10px !important;
            gap: 6px !important;
        }
    }
    
    /* Table responsive */
    .table-return-items {
        font-size: 0.75rem;
    }
    @media (min-width: 768px) {
        .table-return-items {
            font-size: 0.9rem;
        }
    }
    .table-return-items th,
    .table-return-items td {
        padding: 0.4rem 0.3rem;
        vertical-align: middle;
    }
    @media (min-width: 768px) {
        .table-return-items th,
        .table-return-items td {
            padding: 0.6rem 0.75rem;
        }
    }
    
    /* Container responsive */
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 8px !important;
            padding-right: 8px !important;
        }
        .h2 {
            font-size: 1.3rem !important;
        }
        .h5 {
            font-size: 0.9rem !important;
        }
        .h4 {
            font-size: 1.1rem !important;
        }
        .modal-body {
            padding: 0.75rem !important;
        }
        .modal-footer {
            padding: 0.5rem !important;
        }
        .modal-header {
            padding: 0.5rem 0.75rem !important;
        }
    }
    
    /* Badge progress bar */
    .progress-bar-custom {
        height: 4px;
        background-color: #e5e7eb;
        border-radius: 10px;
        overflow: hidden;
    }
    @media (min-width: 768px) {
        .progress-bar-custom {
            height: 6px;
        }
    }
    
    /* Modal responsive */
    @media (max-width: 576px) {
        .modal-dialog {
            margin: 0.5rem;
        }
        .modal-content {
            border-radius: 12px !important;
        }
        .modal-footer .btn {
            font-size: 0.7rem !important;
            padding: 0.25rem 0.5rem !important;
        }
    }
    
    /* User avatar responsive */
    .user-avatar-sm {
        width: 28px;
        height: 28px;
    }
    @media (min-width: 768px) {
        .user-avatar-sm {
            width: 32px;
            height: 32px;
        }
    }
</style>
";
        yield from [];
    }

    // line 281
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 282
        yield "<div class=\"container-fluid px-2 px-md-4 py-3 py-md-4\">
    <!-- ✅ EN-TÊTE AVEC BOUTONS BIEN ALIGNÉS -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div>
            <h1 class=\"h4 h-md-2 mb-1\">
                <i class=\"fas fa-undo-alt text-primary me-2\"></i>
                Retour #";
        // line 288
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "returnNumber", [], "any", false, false, false, 288), "html", null, true);
        yield "
            </h1>
            <p class=\"text-muted small\">Créé le ";
        // line 290
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "createdAt", [], "any", false, false, false, 290), "d/m/Y H:i"), "html", null, true);
        yield "</p>
        </div>
        <div class=\"header-buttons\">
            <a href=\"";
        // line 293
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour</span>
            </a>
            ";
        // line 296
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "status", [], "any", false, false, false, 296) == "pending")) {
            // line 297
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "id", [], "any", false, false, false, 297)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary btn-sm\">
                    <i class=\"fas fa-edit me-1\"></i> <span class=\"d-none d-sm-inline\">Modifier</span>
                </a>
            ";
        }
        // line 301
        yield "            ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "status", [], "any", false, false, false, 301) == "pending") || (CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "status", [], "any", false, false, false, 301) == "approved"))) {
            // line 302
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_print_receipt", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "id", [], "any", false, false, false, 302)]), "html", null, true);
            yield "\" class=\"btn btn-outline-info btn-sm\" target=\"_blank\">
                    <i class=\"fas fa-print me-1\"></i> <span class=\"d-none d-sm-inline\">Imprimer</span>
                </a>
            ";
        }
        // line 306
        yield "        </div>
    </div>

    <div class=\"row g-3 g-md-4\">
        <div class=\"col-12 col-lg-4\">
            <div class=\"info-card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-info-circle me-2\"></i> Informations générales</h5>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Statut</div>
                    <div class=\"info-value\">
                        ";
        // line 318
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "status", [], "any", false, false, false, 318) == "pending")) {
            // line 319
            yield "                            <span class=\"status-badge status-pending\">⏳ En attente</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 320
($context["returnOrder"] ?? null), "status", [], "any", false, false, false, 320) == "approved")) {
            // line 321
            yield "                            <span class=\"status-badge status-approved\">✓ Approuvé</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 322
($context["returnOrder"] ?? null), "status", [], "any", false, false, false, 322) == "completed")) {
            // line 323
            yield "                            <span class=\"status-badge status-completed\">✅ Remboursé</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 324
($context["returnOrder"] ?? null), "status", [], "any", false, false, false, 324) == "rejected")) {
            // line 325
            yield "                            <span class=\"status-badge status-rejected\">❌ Rejeté</span>
                        ";
        }
        // line 327
        yield "                    </div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">N° commande</div>
                    <div class=\"info-value\">
                        <a href=\"";
        // line 332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "originalOrder", [], "any", false, false, false, 332), "id", [], "any", false, false, false, 332)]), "html", null, true);
        yield "\" class=\"text-primary small\">
                            ";
        // line 333
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "orderNumber", [], "any", false, false, false, 333), "html", null, true);
        yield "
                        </a>
                    </div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Client</div>
                    <div class=\"info-value\">";
        // line 339
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "customerName", [], "any", false, false, false, 339)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "customerName", [], "any", false, false, false, 339), "html", null, true)) : ("Non renseigné"));
        yield "</div>
                    <div class=\"small text-muted\">";
        // line 340
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "customerPhone", [], "any", false, false, false, 340), "html", null, true);
        yield "</div>
                </div>
            </div>

            <!-- Validation -->
            <div class=\"info-card mt-3 mt-md-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-user-check me-2\"></i> Validation</h5>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Enregistré par</div>
                    <div class=\"info-value\">
                        <div class=\"d-flex align-items-center\">
                            ";
        // line 353
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "returnedBy", [], "any", false, false, false, 353), "photo", [], "any", false, false, false, 353)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 354
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "returnedBy", [], "any", false, false, false, 354), "photo", [], "any", false, false, false, 354))), "html", null, true);
            yield "\" class=\"rounded-circle me-2 user-avatar-sm\" width=\"28\" height=\"28\">
                            ";
        } else {
            // line 356
            yield "                                <div class=\"bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2 user-avatar-sm\" style=\"width: 28px; height: 28px;\">
                                    <i class=\"fas fa-user text-secondary small\"></i>
                                </div>
                            ";
        }
        // line 360
        yield "                            <div>
                                <strong class=\"small\">";
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "returnedBy", [], "any", false, false, false, 361), "fullName", [], "any", false, false, false, 361), "html", null, true);
        yield "</strong>
                                <br><small class=\"text-muted\">";
        // line 362
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "returnedBy", [], "any", false, false, false, 362), "email", [], "any", false, false, false, 362)), "truncate", [20], "method", false, false, false, 362), "html", null, true);
        yield "</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                ";
        // line 368
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "approvedBy", [], "any", false, false, false, 368)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 369
            yield "                <div class=\"info-item\">
                    <div class=\"info-label\">Approuvé par</div>
                    <div class=\"info-value\">
                        <div class=\"d-flex align-items-center\">
                            ";
            // line 373
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "approvedBy", [], "any", false, false, false, 373), "photo", [], "any", false, false, false, 373)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 374
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "approvedBy", [], "any", false, false, false, 374), "photo", [], "any", false, false, false, 374))), "html", null, true);
                yield "\" class=\"rounded-circle me-2 user-avatar-sm\" width=\"28\" height=\"28\">
                            ";
            } else {
                // line 376
                yield "                                <div class=\"bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2 user-avatar-sm\" style=\"width: 28px; height: 28px;\">
                                    <i class=\"fas fa-user text-secondary small\"></i>
                                </div>
                            ";
            }
            // line 380
            yield "                            <div>
                                <strong class=\"small\">";
            // line 381
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "approvedBy", [], "any", false, false, false, 381), "fullName", [], "any", false, false, false, 381), "html", null, true);
            yield "</strong>
                                <br><small class=\"text-muted\">
                                    <i class=\"fas fa-calendar me-1\"></i> ";
            // line 383
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "approvedAt", [], "any", false, false, false, 383), "d/m/Y H:i"), "html", null, true);
            yield "
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 390
        yield "                
                ";
        // line 391
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "completedBy", [], "any", false, false, false, 391)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 392
            yield "                <div class=\"info-item\">
                    <div class=\"info-label\">Remboursé par</div>
                    <div class=\"info-value\">
                        <div class=\"d-flex align-items-center\">
                            ";
            // line 396
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "completedBy", [], "any", false, false, false, 396), "photo", [], "any", false, false, false, 396)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 397
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "completedBy", [], "any", false, false, false, 397), "photo", [], "any", false, false, false, 397))), "html", null, true);
                yield "\" class=\"rounded-circle me-2 user-avatar-sm\" width=\"28\" height=\"28\">
                            ";
            } else {
                // line 399
                yield "                                <div class=\"bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2 user-avatar-sm\" style=\"width: 28px; height: 28px;\">
                                    <i class=\"fas fa-user text-secondary small\"></i>
                                </div>
                            ";
            }
            // line 403
            yield "                            <div>
                                <strong class=\"small\">";
            // line 404
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "completedBy", [], "any", false, false, false, 404), "fullName", [], "any", false, false, false, 404), "html", null, true);
            yield "</strong>
                                <br><small class=\"text-muted\">
                                    <i class=\"fas fa-calendar me-1\"></i> ";
            // line 406
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "completedAt", [], "any", false, false, false, 406), "d/m/Y H:i"), "html", null, true);
            yield "
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 413
        yield "            </div>

            <!-- Montants -->
            <div class=\"info-card mt-3 mt-md-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-chart-line me-2\"></i> Montants</h5>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Total à rembourser</div>
                    <div class=\"info-value h5 h-md-4 text-primary mb-0\">";
        // line 422
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "totalRefundAmount", [], "any", false, false, false, 422), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Méthode de remboursement</div>
                    <div class=\"info-value small\">
                        ";
        // line 427
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "refundMethod", [], "any", false, false, false, 427) == "cash")) {
            // line 428
            yield "                            <i class=\"fas fa-money-bill-wave text-success me-1\"></i> Espèces
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 429
($context["returnOrder"] ?? null), "refundMethod", [], "any", false, false, false, 429) == "mobile_money")) {
            // line 430
            yield "                            <i class=\"fas fa-mobile-alt text-info me-1\"></i> Mobile Money
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 431
($context["returnOrder"] ?? null), "refundMethod", [], "any", false, false, false, 431) == "bank_transfer")) {
            // line 432
            yield "                            <i class=\"fas fa-university text-primary me-1\"></i> Virement bancaire
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 433
($context["returnOrder"] ?? null), "refundMethod", [], "any", false, false, false, 433) == "wallet")) {
            // line 434
            yield "                            <i class=\"fas fa-wallet text-secondary me-1\"></i> Porte-monnaie
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 435
($context["returnOrder"] ?? null), "refundMethod", [], "any", false, false, false, 435) == "credit_note")) {
            // line 436
            yield "                            <i class=\"fas fa-file-invoice text-warning me-1\"></i> Avoir
                        ";
        }
        // line 438
        yield "                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-12 col-lg-8\">
            <div class=\"info-card\">
                <div class=\"card-header\">
                    <div class=\"card-header-actions\">
                        <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-boxes me-2\"></i> Articles retournés</h5>
                        
                        <div class=\"action-buttons-group\">
                            ";
        // line 450
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "status", [], "any", false, false, false, 450) == "pending") && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")))) {
            // line 451
            yield "                                <button type=\"button\" class=\"btn btn-danger\" id=\"rejectReturnBtn\">
                                    <i class=\"fas fa-times me-1\"></i> Rejeter
                                </button>
                                <button type=\"button\" class=\"btn btn-success\" id=\"approveReturnBtn\">
                                    <i class=\"fas fa-check me-1\"></i> Approuver
                                </button>
                            ";
        }
        // line 458
        yield "                            
                            ";
        // line 459
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "status", [], "any", false, false, false, 459) == "approved") && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")))) {
            // line 460
            yield "                                <button type=\"button\" class=\"btn btn-primary\" id=\"completeReturnBtn\">
                                    <i class=\"fas fa-money-bill-wave me-1\"></i> <span class=\"d-none d-sm-inline\">Rembourser</span>
                                </button>
                            ";
        }
        // line 464
        yield "                        </div>
                    </div>
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0 table-return-items\">
                        <thead class=\"table-light\">
                            <tr>
                                <th style=\"min-width: 80px;\">Article</th>
                                <th class=\"text-center\" style=\"min-width: 80px;\">
                                    Total retourné
                                </th>
                                <th class=\"text-center\" style=\"min-width: 60px;\">
                                    <span class=\"d-none d-sm-inline\">Dans ce retour</span>
                                    <span class=\"d-inline d-sm-none\">Quant.</span>
                                </th>
                                <th class=\"text-center d-none d-md-table-cell\">Prix unitaire</th>
                                <th class=\"text-center\" style=\"min-width: 70px;\">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 484
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "returnItems", [], "any", false, false, false, 484));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 485
            yield "                                ";
            $context["totalReturned"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["totalReturnedQuantities"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "originalOrderItem", [], "any", false, false, false, 485), "id", [], "any", false, false, false, 485), [], "array", true, true, false, 485)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["totalReturnedQuantities"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "originalOrderItem", [], "any", false, false, false, 485), "id", [], "any", false, false, false, 485)] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantityReturned", [], "any", false, false, false, 485))) : (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantityReturned", [], "any", false, false, false, 485)));
            // line 486
            yield "                                ";
            $context["totalOrderQty"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "originalOrderItem", [], "any", false, false, false, 486), "quantity", [], "any", false, false, false, 486);
            // line 487
            yield "                                ";
            $context["remaining"] = (($context["totalOrderQty"] ?? null) - ($context["totalReturned"] ?? null));
            // line 488
            yield "                                ";
            $context["returnPercentage"] = Twig\Extension\CoreExtension::round(((($context["totalReturned"] ?? null) / ($context["totalOrderQty"] ?? null)) * 100));
            // line 489
            yield "                                
                                <tr>
                                    <td>
                                        <strong class=\"small\">";
            // line 492
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 492)), "truncate", [20], "method", false, false, false, 492), "html", null, true);
            yield "</strong>
                                        ";
            // line 493
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 493)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 494
                yield "                                            <br><small class=\"text-primary\"><i class=\"fas fa-tag\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotionName", [], "any", false, false, false, 494)), "truncate", [10], "method", false, false, false, 494), "html", null, true);
                yield "</small>
                                        ";
            }
            // line 496
            yield "                                        <br><small class=\"text-muted d-none d-sm-inline\">";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "itemType", [], "any", false, false, false, 496) == "recipe")) ? ("Menu") : ("Produit"));
            yield "</small>
                                    </td>
                                    <td class=\"text-center\">
                                        <div class=\"d-flex align-items-center justify-content-center gap-1 gap-md-2 flex-wrap\">
                                            <span class=\"badge\" style=\"background: #dc2626; color: white; font-size: 0.7rem; padding: 4px 8px;\">
                                                <i class=\"fas fa-undo-alt me-1\"></i> ";
            // line 501
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalReturned"] ?? null), "html", null, true);
            yield "
                                            </span>
                                            <span class=\"text-muted fw-bold small\">/</span>
                                            <span class=\"badge\" style=\"background: #0463f1; color: white; font-size: 0.7rem; padding: 4px 8px;\">
                                                <i class=\"fas fa-box me-1\"></i> ";
            // line 505
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalOrderQty"] ?? null), "html", null, true);
            yield "
                                            </span>
                                        </div>
                                        
                                        <div class=\"progress-bar-custom mt-1\" style=\"width: 80px; margin: 0 auto;\">
                                            <div style=\"width: ";
            // line 510
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["returnPercentage"] ?? null), "html", null, true);
            yield "%; background-color: #dc2626; height: 4px;\"></div>
                                        </div>
                                        
                                        <div class=\"mt-1\">
                                            ";
            // line 514
            if ((($context["remaining"] ?? null) > 0)) {
                // line 515
                yield "                                                <span class=\"badge\" style=\"background: #f59e0b; color: white; font-size: 0.55rem; padding: 2px 6px; border-radius: 20px;\">
                                                    <i class=\"fas fa-box-open me-1\"></i> ";
                // line 516
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["remaining"] ?? null), "html", null, true);
                yield "
                                                </span>
                                            ";
            } else {
                // line 519
                yield "                                                <span class=\"badge\" style=\"background: #10b981; color: white; font-size: 0.55rem; padding: 2px 6px; border-radius: 20px;\">
                                                    <i class=\"fas fa-check-circle me-1\"></i> Complet
                                                </span>
                                            ";
            }
            // line 523
            yield "                                        </div>
                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"quantity-this-return\" style=\"font-size: 0.65rem; padding: 2px 6px;\">
                                            <i class=\"fas fa-exchange-alt me-1\"></i> ";
            // line 527
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantityReturned", [], "any", false, false, false, 527), "html", null, true);
            yield "
                                        </span>
                                    </td>
                                    <td class=\"text-center d-none d-md-table-cell\">
                                        ";
            // line 531
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPriceAtSale", [], "any", false, false, false, 531), 0, ",", " "), "html", null, true);
            yield " FCFA
                                    </td>
                                    <td class=\"text-center\">
                                        <strong class=\"text-primary small\">";
            // line 534
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalRefund", [], "any", false, false, false, 534), 0, ",", " "), "html", null, true);
            yield " FCFA</strong>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 538
        yield "                        </tbody>
                        <tfoot class=\"table-light\">
                            <tr>
                                <td colspan=\"4\" class=\"text-end fw-bold small\">Total :</td>
                                <td class=\"text-center fw-bold text-primary h5 h-md-4\">
                                    ";
        // line 543
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "totalRefundAmount", [], "any", false, false, false, 543), 0, ",", " "), "html", null, true);
        yield " FCFA
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <div class=\"info-card mt-3 mt-md-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-comment me-2\"></i> Motif et notes</h5>
                </div>
                <div class=\"info-item\">
                    <div class=\"info-label\">Motif du retour</div>
                    <div class=\"info-value\">
                        <span class=\"motif-badge\">
                            <i class=\"fas fa-tag me-1\"></i> ";
        // line 559
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reasons"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "reason", [], "any", false, false, false, 559), [], "array", true, true, false, 559)) ? (Twig\Extension\CoreExtension::default((($_v1 = ($context["reasons"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "reason", [], "any", false, false, false, 559)] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "reason", [], "any", false, false, false, 559))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "reason", [], "any", false, false, false, 559))), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>
                ";
        // line 563
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "reasonNotes", [], "any", false, false, false, 563)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 564
            yield "                <div class=\"info-item\">
                    <div class=\"info-label\">Détails du motif</div>
                    <div class=\"info-value small\">";
            // line 566
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "reasonNotes", [], "any", false, false, false, 566), "html", null, true));
            yield "</div>
                </div>
                ";
        }
        // line 569
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "notes", [], "any", false, false, false, 569)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 570
            yield "                <div class=\"info-item\">
                    <div class=\"info-label\">Notes internes</div>
                    <div class=\"info-value text-muted small\">";
            // line 572
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "notes", [], "any", false, false, false, 572), "html", null, true));
            yield "</div>
                </div>
                ";
        }
        // line 575
        yield "            </div>
        </div>
    </div>
</div>

<!-- Modals -->
<div class=\"modal fade\" id=\"confirmApproveModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-success text-white\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-check-circle me-2\"></i> Approuver</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"fas fa-check-circle fa-2x fa-md-3x text-success mb-3\"></i>
                <p class=\"small\">Approuver cette demande de retour ?</p>
                <p class=\"text-muted small\">Le retour pourra ensuite être remboursé.</p>
            </div>
            <div class=\"modal-footer justify-content-center py-2 py-md-3\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-success btn-sm\" id=\"confirmApproveBtn\">Approuver</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"confirmRejectModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-ban me-2\"></i> Rejeter</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"text-center mb-3\">
                    <i class=\"fas fa-exclamation-triangle fa-2x fa-md-3x text-danger mb-3\"></i>
                    <p class=\"small\">Rejeter cette demande de retour ?</p>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label small\">Motif du rejet</label>
                    <textarea id=\"rejectReason\" class=\"form-control form-control-sm\" rows=\"3\" placeholder=\"Expliquez pourquoi...\"></textarea>
                </div>
            </div>
            <div class=\"modal-footer py-2 py-md-3\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-danger btn-sm\" id=\"confirmRejectBtn\">Confirmer</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"confirmCompleteModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-money-bill-wave me-2\"></i> Remboursement</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"fas fa-money-bill-wave fa-2x fa-md-3x text-primary mb-3\"></i>
                <p class=\"small\">Confirmer le remboursement ?</p>
                <div class=\"alert alert-warning small p-2 p-md-3\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Les produits seront remis en stock.
                </div>
            </div>
            <div class=\"modal-footer justify-content-center py-2 py-md-3\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"confirmCompleteBtn\">Confirmer</button>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 650
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 651
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    let returnId = ";
        // line 654
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["returnOrder"] ?? null), "id", [], "any", false, false, false, 654), "html", null, true);
        yield ";

    const approveBtn = document.getElementById('approveReturnBtn');
    const rejectBtn = document.getElementById('rejectReturnBtn');
    const completeBtn = document.getElementById('completeReturnBtn');

    if (approveBtn) {
        approveBtn.addEventListener('click', function() {
            new bootstrap.Modal(document.getElementById('confirmApproveModal')).show();
        });
    }

    document.getElementById('confirmApproveBtn')?.addEventListener('click', function() {
        const btn = this;
        btn.disabled = true;
        btn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>...';
        
        fetch('/returns/' + returnId + '/approve', {
            method: 'POST',
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert(data.error || 'Erreur');
                btn.disabled = false;
                btn.innerHTML = 'Approuver';
            }
        })
        .catch(() => {
            alert('Erreur');
            btn.disabled = false;
            btn.innerHTML = 'Approuver';
        });
    });

    if (rejectBtn) {
        rejectBtn.addEventListener('click', function() {
            new bootstrap.Modal(document.getElementById('confirmRejectModal')).show();
        });
    }

    document.getElementById('confirmRejectBtn')?.addEventListener('click', function() {
        const btn = this;
        const reason = document.getElementById('rejectReason').value;
        btn.disabled = true;
        btn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>...';
        
        fetch('/returns/' + returnId + '/reject', {
            method: 'POST',
            headers: { 
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({ reason: reason })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert(data.error || 'Erreur');
                btn.disabled = false;
                btn.innerHTML = 'Confirmer';
            }
        })
        .catch(() => {
            alert('Erreur');
            btn.disabled = false;
            btn.innerHTML = 'Confirmer';
        });
    });

    if (completeBtn) {
        completeBtn.addEventListener('click', function() {
            new bootstrap.Modal(document.getElementById('confirmCompleteModal')).show();
        });
    }

    document.getElementById('confirmCompleteBtn')?.addEventListener('click', function() {
        const btn = this;
        btn.disabled = true;
        btn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>...';
        
        fetch('/returns/' + returnId + '/complete', {
            method: 'POST',
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert(data.error || 'Erreur');
                btn.disabled = false;
                btn.innerHTML = 'Confirmer';
            }
        })
        .catch(() => {
            alert('Erreur');
            btn.disabled = false;
            btn.innerHTML = 'Confirmer';
        });
    });
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
        return "return/show.html.twig";
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
        return array (  954 => 654,  948 => 651,  941 => 650,  863 => 575,  857 => 572,  853 => 570,  850 => 569,  844 => 566,  840 => 564,  838 => 563,  831 => 559,  812 => 543,  805 => 538,  795 => 534,  789 => 531,  782 => 527,  776 => 523,  770 => 519,  764 => 516,  761 => 515,  759 => 514,  752 => 510,  744 => 505,  737 => 501,  728 => 496,  722 => 494,  720 => 493,  716 => 492,  711 => 489,  708 => 488,  705 => 487,  702 => 486,  699 => 485,  695 => 484,  673 => 464,  667 => 460,  665 => 459,  662 => 458,  653 => 451,  651 => 450,  637 => 438,  633 => 436,  631 => 435,  628 => 434,  626 => 433,  623 => 432,  621 => 431,  618 => 430,  616 => 429,  613 => 428,  611 => 427,  603 => 422,  592 => 413,  582 => 406,  577 => 404,  574 => 403,  568 => 399,  562 => 397,  560 => 396,  554 => 392,  552 => 391,  549 => 390,  539 => 383,  534 => 381,  531 => 380,  525 => 376,  519 => 374,  517 => 373,  511 => 369,  509 => 368,  500 => 362,  496 => 361,  493 => 360,  487 => 356,  481 => 354,  479 => 353,  463 => 340,  459 => 339,  450 => 333,  446 => 332,  439 => 327,  435 => 325,  433 => 324,  430 => 323,  428 => 322,  425 => 321,  423 => 320,  420 => 319,  418 => 318,  404 => 306,  396 => 302,  393 => 301,  385 => 297,  383 => 296,  377 => 293,  371 => 290,  366 => 288,  358 => 282,  351 => 281,  73 => 7,  66 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "return/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\return\\show.html.twig");
    }
}
