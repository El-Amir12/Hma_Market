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

/* stock/transfer/new.html.twig */
class __TwigTemplate_514c38f62faef4c2a5ed9e5ea621f58f extends Template
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
        yield "Nouveau transfert - HMA Market";
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
        --primary-dark: #0346b8;
        --success: #10b981;
        --warning: #f59e0b;
        --danger: #ef4444;
    }

    .transfer-wrapper {
        max-width: 1000px;
        margin: 0 auto;
    }

    /* ============================================
       EN-TÊTE
       ============================================ */
    .page-header-simple {
        background-color: #0463f1 !important;
        border-radius: 12px;
        padding: 1.25rem 1.5rem;
        margin-bottom: 1.5rem;
    }

    .page-header-simple,
    .page-header-simple * {
        color: #ffffff !important;
    }

    .page-header-simple .header-title {
        font-size: 1.4rem;
        font-weight: 700;
        margin: 0 0 0.35rem 0;
        display: flex;
        align-items: center;
        gap: 0.6rem;
    }

    .page-header-simple .header-subtitle {
        color: rgba(255, 255, 255, 0.95) !important;
        font-size: 0.88rem;
        margin: 0;
    }

    .page-header-simple .header-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .page-header-simple .btn-back-simple {
        background-color: #ffffff !important;
        color: #0463f1 !important;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.85rem;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        transition: background-color 0.2s ease;
    }
    .page-header-simple .btn-back-simple:hover {
        background-color: #f1f5f9 !important;
        color: #0346b8 !important;
    }
    .page-header-simple .btn-back-simple i {
        color: #0463f1 !important;
    }

    .breadcrumb-simple {
        list-style: none;
        padding: 0;
        margin: 0 0 0.75rem 0;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 0.4rem;
        font-size: 0.82rem;
    }
    .breadcrumb-simple li {
        color: #ffffff !important;
        display: flex;
        align-items: center;
    }
    .breadcrumb-simple li a {
        color: #ffffff !important;
        text-decoration: none;
        opacity: 0.9;
    }
    .breadcrumb-simple li a:hover {
        opacity: 1;
        text-decoration: underline;
    }
    .breadcrumb-simple li + li::before {
        content: '/';
        color: rgba(255, 255, 255, 0.7) !important;
        margin-right: 0.4rem;
        font-weight: 300;
    }
    .breadcrumb-simple li.active {
        opacity: 1;
        font-weight: 600;
    }

    /* ============================================
       SECTIONS
       ============================================ */
    .form-section {
        background: #fff;
        border-radius: 12px;
        padding: 1.5rem;
        margin-bottom: 1rem;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        border: 1px solid #e9ecef;
    }

    .form-section-title {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-size: 0.95rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 1.25rem;
        padding-bottom: 0.75rem;
        border-bottom: 2px solid #f1f5f9;
    }
    .form-section-title .step-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 28px;
        height: 28px;
        border-radius: 8px;
        background: #0463f1;
        color: #fff;
        font-size: 0.8rem;
        font-weight: 700;
        flex-shrink: 0;
    }
    .form-section-title .badge-optional {
        background: #e2e8f0;
        color: #475569;
        font-size: 0.68rem;
        padding: 0.2rem 0.55rem;
        border-radius: 20px;
        font-weight: 500;
        margin-left: auto;
    }

    /* ============================================
       ERREURS
       ============================================ */
    .form-error-box {
        background: #fef2f2;
        border: 1px solid #fecaca;
        border-left: 4px solid #ef4444;
        border-radius: 10px;
        padding: 1rem 1.15rem;
        margin-bottom: 1.25rem;
        color: #991b1b;
    }
    .form-error-box .error-title {
        font-weight: 700;
        font-size: 0.92rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin-bottom: 0.5rem;
    }
    .form-error-box ul {
        margin: 0;
        padding-left: 1.5rem;
        font-size: 0.85rem;
    }
    .field-error {
        color: #dc2626;
        font-size: 0.8rem;
        margin-top: 0.35rem;
        display: flex;
        align-items: center;
        gap: 0.35rem;
    }
    .form-control.is-invalid-custom {
        border-color: #dc2626 !important;
        background-color: #fef2f2 !important;
    }

    /* Box info */
    .batch-info-box {
        background: #f0f6ff;
        border: 1px solid #bfdbfe;
        border-left: 4px solid #0463f1;
        border-radius: 8px;
        padding: 0.85rem 1rem;
        margin-bottom: 1rem;
        font-size: 0.88rem;
    }

    /* Form controls */
    .form-control, .form-select {
        border-radius: 8px;
        border: 1px solid #d1d5db;
        padding: 0.6rem 0.85rem;
        font-size: 0.92rem;
    }
    .form-control:focus, .form-select:focus {
        border-color: #0463f1;
        box-shadow: 0 0 0 3px rgba(4, 99, 241, 0.15);
    }
    .form-label {
        font-size: 0.85rem;
        margin-bottom: 0.4rem;
        color: #334155;
        font-weight: 600;
    }
    textarea.form-control {
        min-height: 90px;
        resize: vertical;
    }

    /* Select2 */
    .select2-container--bootstrap-5 .select2-selection--single {
        height: auto !important;
        min-height: 52px !important;
        padding: 0.5rem 0.85rem !important;
        border-radius: 8px !important;
        border: 1px solid #d1d5db !important;
        background: #fff !important;
    }
    .select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
        color: #1e293b !important;
        font-weight: 600;
        font-size: 0.9rem;
        padding: 0 !important;
    }

    /* Boutons */
    .action-bar {
        display: flex;
        justify-content: flex-end;
        gap: 0.75rem;
        margin-top: 1.5rem;
        flex-wrap: wrap;
    }
    .btn {
        border-radius: 8px;
        font-weight: 600;
        padding: 0.6rem 1.4rem;
        font-size: 0.9rem;
    }
    .btn-primary {
        background: #0463f1;
        border: none;
    }
    .btn-primary:hover:not(:disabled) {
        background: #0346b8;
    }
    .btn-primary:disabled {
        background: #cbd5e1;
        cursor: not-allowed;
    }

    /* Info card */
    .info-card {
        background: linear-gradient(135deg, #e8f4fd 0%, #dbeafe 100%);
        border-radius: 12px;
        padding: 1.15rem;
        margin-bottom: 1rem;
        border-left: 4px solid #0463f1;
    }
    .info-card small {
        line-height: 1.7;
    }

    /* Alerte */
    .alert-warning-simple {
        background: #fef3c7;
        border-left: 4px solid #f59e0b;
        border-radius: 8px;
        padding: 1rem 1.15rem;
        display: flex;
        gap: 0.85rem;
        align-items: flex-start;
        color: #78350f;
        margin-bottom: 1rem;
        font-size: 0.88rem;
    }
    .alert-warning-simple i {
        color: #d97706;
        font-size: 1.25rem;
        flex-shrink: 0;
    }

    /* Modals */
    .confirmation-modal .modal-content {
        border: none;
        border-radius: 14px;
        overflow: hidden;
    }
    .confirmation-modal .modal-header {
        background: #f59e0b;
        color: #fff;
        border: none;
        padding: 1rem 1.25rem;
    }
    .confirmation-modal .modal-header.danger-header {
        background: #ef4444;
    }
    .confirmation-modal .modal-header .modal-title {
        font-weight: 700;
        font-size: 0.98rem;
        color: #fff;
    }
    .confirmation-modal .modal-header .btn-close {
        filter: brightness(0) invert(1);
    }
    .confirmation-modal .modal-body {
        padding: 1.25rem 1.5rem;
    }

    .confirm-summary {
        background: #f8fafc;
        border-radius: 10px;
        padding: 0.85rem 1rem;
        border: 1px solid #e2e8f0;
    }
    .confirm-summary .summary-row {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        padding: 0.5rem 0;
        gap: 1rem;
        border-bottom: 1px dashed #e2e8f0;
    }
    .confirm-summary .summary-row:last-child {
        border-bottom: none;
    }
    .confirm-summary .summary-label {
        color: #64748b;
        font-size: 0.82rem;
        font-weight: 500;
        flex-shrink: 0;
    }
    .confirm-summary .summary-value {
        font-weight: 700;
        color: #1e293b;
        font-size: 0.88rem;
        text-align: right;
        word-break: break-word;
    }
    .confirmation-modal .modal-footer {
        border: none;
        padding: 1rem 1.5rem 1.25rem;
        gap: 0.5rem;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .page-header-simple {
            padding: 1rem 1.15rem;
        }
        .page-header-simple .header-title {
            font-size: 1.15rem;
        }
        .form-section {
            padding: 1.15rem;
        }
        .form-section-title {
            font-size: 0.88rem;
        }
        .action-bar {
            flex-direction: column-reverse;
        }
        .action-bar .btn {
            width: 100%;
        }
        .confirmation-modal .modal-footer {
            flex-direction: column-reverse;
        }
        .confirmation-modal .modal-footer .btn {
            width: 100%;
        }
        .confirm-summary .summary-row {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.25rem;
        }
        .confirm-summary .summary-value {
            text-align: left;
        }
    }
</style>
";
        yield from [];
    }

    // line 410
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 411
        yield "<div class=\"container-fluid px-2 px-md-4 py-3\">
    <div class=\"transfer-wrapper\">

        <!-- EN-TÊTE -->
        <div class=\"page-header-simple\">
            <ul class=\"breadcrumb-simple\">
                <li><a href=\"";
        // line 417
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">Tableau de bord</a></li>
                <li><a href=\"";
        // line 418
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_index");
        yield "\">Transferts</a></li>
                <li class=\"active\">Nouveau transfert</li>
            </ul>
            <div class=\"header-actions\">
                <div>
                    <h1 class=\"header-title\">
                        <i class=\"fas fa-exchange-alt\"></i>
                        Nouveau transfert de stock
                    </h1>
                    <p class=\"header-subtitle\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Transférez des marchandises d'un emplacement à un autre
                    </p>
                </div>
                <a href=\"";
        // line 432
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_index");
        yield "\" class=\"btn-back-simple\">
                    <i class=\"fas fa-arrow-left\"></i> Retour
                </a>
            </div>
        </div>

        <!-- ERREURS GLOBALES -->
        ";
        // line 439
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 439), "errors", [], "any", false, false, false, 439)) > 0)) {
            // line 440
            yield "            <div class=\"form-error-box\">
                <div class=\"error-title\">
                    <i class=\"fas fa-exclamation-triangle\"></i>
                    Le formulaire contient des erreurs
                </div>
                <ul>
                    ";
            // line 446
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 446), "errors", [], "any", false, false, false, 446));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 447
                yield "                        <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 447), "html", null, true);
                yield "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 449
            yield "                </ul>
            </div>
        ";
        }
        // line 452
        yield "
        <!-- FORMULAIRE -->
        ";
        // line 454
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate", "id" => "transferForm"]]);
        yield "

        <!-- ÉTAPE 1 : Lot -->
        <div class=\"form-section\">
            <div class=\"form-section-title\">
                <span class=\"step-badge\">1</span>
                <span><i class=\"fas fa-boxes me-1 text-primary\"></i> Lot à transférer</span>
            </div>
            ";
        // line 462
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "stock_batch", [], "any", false, false, false, 462), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 463
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "stock_batch", [], "any", false, false, false, 463), 'widget');
        yield "
            ";
        // line 464
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "stock_batch", [], "any", false, false, false, 464), "vars", [], "any", false, false, false, 464), "errors", [], "any", false, false, false, 464));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 465
            yield "                <div class=\"field-error\">
                    <i class=\"fas fa-exclamation-circle\"></i> ";
            // line 466
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 466), "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 469
        yield "            <small class=\"text-muted d-block mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Seuls les lots avec stock disponible sont affichés
            </small>
        </div>

        <!-- ÉTAPE 2 : Destination -->
        <div class=\"form-section\">
            <div class=\"form-section-title\">
                <span class=\"step-badge\">2</span>
                <span><i class=\"fas fa-map-marker-alt me-1 text-primary\"></i> Emplacement de destination</span>
            </div>
            ";
        // line 481
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "destination_location", [], "any", false, false, false, 481), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 482
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "destination_location", [], "any", false, false, false, 482), 'widget');
        yield "
            ";
        // line 483
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "destination_location", [], "any", false, false, false, 483), "vars", [], "any", false, false, false, 483), "errors", [], "any", false, false, false, 483));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 484
            yield "                <div class=\"field-error\">
                    <i class=\"fas fa-exclamation-circle\"></i> ";
            // line 485
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 485), "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 488
        yield "            <small class=\"text-muted d-block mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                L'emplacement où les produits seront transférés
            </small>
        </div>

        <!-- ÉTAPE 3 : Quantité -->
        <div class=\"form-section\">
            <div class=\"form-section-title\">
                <span class=\"step-badge\">3</span>
                <span><i class=\"fas fa-hashtag me-1 text-primary\"></i> Quantité à transférer</span>
            </div>

            <div id=\"batch-info-box\" class=\"batch-info-box\" style=\"display: none;\">
                <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
                    <div>
                        <i class=\"fas fa-boxes me-1 text-primary\"></i>
                        <strong>Lot sélectionné :</strong>
                        <span id=\"batch-info-num\" class=\"text-primary fw-bold\">—</span>
                        <span id=\"batch-info-prod\" class=\"text-muted small\">—</span>
                    </div>
                    <div class=\"text-end\">
                        <span class=\"text-muted small\">Disponible :</span>
                        <strong id=\"batch-info-qty\" class=\"text-success\">—</strong>
                        <span class=\"text-muted small\">unités</span>
                    </div>
                </div>
            </div>

            ";
        // line 517
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 517), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 518
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 518), 'widget');
        yield "
            ";
        // line 519
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 519), "vars", [], "any", false, false, false, 519), "errors", [], "any", false, false, false, 519));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 520
            yield "                <div class=\"field-error\">
                    <i class=\"fas fa-exclamation-circle\"></i> ";
            // line 521
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 521), "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 524
        yield "
            <div id=\"quantity-error\" class=\"field-error\" style=\"display: none;\">
                <i class=\"fas fa-exclamation-circle\"></i> <span id=\"quantity-error-text\"></span>
            </div>

            <small class=\"text-muted d-block mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                La quantité ne peut pas dépasser le stock disponible du lot
            </small>
        </div>

        <!-- ÉTAPE 4 : Raison -->
        <div class=\"form-section\">
            <div class=\"form-section-title\">
                <span class=\"step-badge\">4</span>
                <span><i class=\"fas fa-pen me-1 text-primary\"></i> Raison du transfert</span>
                <span class=\"badge-optional\">Optionnel</span>
            </div>
            ";
        // line 542
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "reason", [], "any", false, false, false, 542), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 543
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "reason", [], "any", false, false, false, 543), 'widget');
        yield "
            ";
        // line 544
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "reason", [], "any", false, false, false, 544), "vars", [], "any", false, false, false, 544), "errors", [], "any", false, false, false, 544));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 545
            yield "                <div class=\"field-error\">
                    <i class=\"fas fa-exclamation-circle\"></i> ";
            // line 546
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 546), "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 549
        yield "        </div>

        <!-- INFO -->
        <div class=\"info-card\">
            <div class=\"d-flex gap-3\">
                <div>
                    <i class=\"fas fa-truck fa-2x text-primary\"></i>
                </div>
                <div>
                    <strong class=\"d-block mb-1\">📦 Comment fonctionne un transfert ?</strong>
                    <small class=\"text-secondary\">
                        <i class=\"fas fa-check-circle text-success me-1\"></i> Création → statut <strong>\"En attente\"</strong><br>
                        <i class=\"fas fa-check-circle text-success me-1\"></i> Expédition → stock <strong>déduit</strong> de la source<br>
                        <i class=\"fas fa-check-circle text-success me-1\"></i> Réception → stock <strong>ajouté</strong> à la destination<br>
                        <i class=\"fas fa-check-circle text-success me-1\"></i> Transfert marqué <strong>\"Terminé\"</strong>
                    </small>
                </div>
            </div>
        </div>

        <!-- ALERTE -->
        <div class=\"alert-warning-simple\">
            <i class=\"fas fa-exclamation-triangle\"></i>
            <div>
                <strong>⚠️ Points importants</strong>
                <small class=\"d-block mt-1\">
                    • Le stock n'est déduit qu'après avoir <strong>expédié</strong> le transfert<br>
                    • Le stock n'est ajouté qu'après avoir <strong>réceptionné</strong> le transfert<br>
                    • Un transfert peut être <strong>annulé</strong> tant qu'il n'est pas réceptionné
                </small>
            </div>
        </div>

        <!-- ACTIONS -->
        <div class=\"action-bar\">
            <a href=\"";
        // line 584
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-times me-1\"></i> Annuler
            </a>
            <button type=\"submit\" class=\"btn btn-primary\" id=\"submitBtn\">
                <i class=\"fas fa-save me-1\"></i> Créer le transfert
            </button>
        </div>

        ";
        // line 592
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
    </div>
</div>

<!-- MODAL DE CONFIRMATION -->
<div class=\"modal fade confirmation-modal\" id=\"confirmTransferModal\" tabindex=\"-1\" data-bs-backdrop=\"static\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Confirmer le transfert
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p class=\"mb-3 small text-muted\">Vérifiez les informations :</p>
                <div class=\"confirm-summary\">
                    <div class=\"summary-row\">
                        <span class=\"summary-label\">Lot</span>
                        <span class=\"summary-value\" id=\"confirm-batch\">—</span>
                    </div>
                    <div class=\"summary-row\">
                        <span class=\"summary-label\">De</span>
                        <span class=\"summary-value\" id=\"confirm-source\">—</span>
                    </div>
                    <div class=\"summary-row\">
                        <span class=\"summary-label\">Vers</span>
                        <span class=\"summary-value\" id=\"confirm-destination\">—</span>
                    </div>
                    <div class=\"summary-row\">
                        <span class=\"summary-label\">Quantité</span>
                        <span class=\"summary-value\" id=\"confirm-quantity\">—</span>
                    </div>
                    <div class=\"summary-row\">
                        <span class=\"summary-label\">Raison</span>
                        <span class=\"summary-value\" id=\"confirm-reason\">—</span>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    Annuler
                </button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"confirmTransferBtn\">
                    <i class=\"fas fa-check me-1\"></i> Confirmer
                </button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL D'ALERTE -->
<div class=\"modal fade confirmation-modal\" id=\"alertModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header danger-header\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    <span id=\"alertModalTitle\">Attention</span>
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p class=\"mb-0\" id=\"alertModalMessage\">Message</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">Compris</button>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 666
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 667
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {

    console.log('=== INIT TRANSFER ===');

    // ============================================
    // MODAL D'ALERTE
    // ============================================
    const alertModalEl = document.getElementById('alertModal');
    const alertModal = new bootstrap.Modal(alertModalEl);
    const alertTitle = document.getElementById('alertModalTitle');
    const alertMessage = document.getElementById('alertModalMessage');

    function showAlert(message, title = 'Attention') {
        alertTitle.textContent = title;
        alertMessage.textContent = message;
        alertModal.show();
    }

    // ============================================
    // ✅ RÉCUPÉRATION ROBUSTE PAR NAME (fiable à 100%)
    // ============================================
    function getFieldByName(name) {
        return document.querySelector(`[name=\"\${name}\"]`);
    }

    // ✅ On utilise le name Symfony — toujours fiable
    const form = document.getElementById('transferForm');

    // Les names Symfony sont : stock_transfer[champ]
    const batchSelect = getFieldByName('stock_transfer[stock_batch]');
    const destSelect = getFieldByName('stock_transfer[destination_location]');
    const qtyInput = getFieldByName('stock_transfer[quantity]');
    const reasonInput = getFieldByName('stock_transfer[reason]');

    // ✅ DEBUG COMPLET
    console.log('=== CHAMPS DÉTECTÉS ===');
    console.log('Form:', form);
    console.log('Batch select:', batchSelect, '| name:', batchSelect?.name);
    console.log('Dest select:', destSelect, '| name:', destSelect?.name);
    console.log('Qty input:', qtyInput, '| name:', qtyInput?.name, '| id:', qtyInput?.id);
    console.log('Reason input:', reasonInput, '| name:', reasonInput?.name);
    console.log('=======================');

    if (!qtyInput) {
        console.error('❌ Champ quantité introuvable !');
        console.error('Recherche des inputs :');
        document.querySelectorAll('input').forEach(el => {
            console.error(' → name:', el.name, '| id:', el.id, '| type:', el.type);
        });
        alert('Erreur : champ quantité introuvable.');
        return;
    }

    // ============================================
    // VARIABLES
    // ============================================
    let selectedBatchQty = 0;
    let selectedBatchNumber = '';
    let selectedBatchProduct = '';
    let selectedBatchSource = '';

    const qtyError = document.getElementById('quantity-error');
    const qtyErrorText = document.getElementById('quantity-error-text');

    // ============================================
    // SELECT2 — on cible par name
    // ============================================
    \$(batchSelect).select2({
        theme: 'bootstrap-5',
        language: 'fr',
        placeholder: '-- Sélectionner un lot --',
        allowClear: true,
        width: '100%',
    });

    \$(destSelect).select2({
        theme: 'bootstrap-5',
        language: 'fr',
        placeholder: '-- Sélectionner un emplacement --',
        allowClear: true,
        width: '100%',
    });

    // ============================================
    // ✅ SÉLECTION DU LOT — attaché à l'élément trouvé par name
    // ============================================
    \$(batchSelect).on('select2:select', function(e) {
        const data = e.params.data;
        if (!data.element) return;

        const \$opt = \$(data.element);
        selectedBatchQty = parseInt(\$opt.data('current-quantity')) || 0;
        selectedBatchNumber = \$opt.data('batch-number') || '';
        selectedBatchProduct = \$opt.data('product-name') || '';
        selectedBatchSource = \$opt.data('location') || '—';

        console.log('✅ Lot sélectionné:', {
            qty: selectedBatchQty,
            num: selectedBatchNumber,
            prod: selectedBatchProduct,
            source: selectedBatchSource,
        });

        const infoBox = document.getElementById('batch-info-box');
        document.getElementById('batch-info-num').textContent = selectedBatchNumber;
        document.getElementById('batch-info-prod').textContent = selectedBatchProduct ? '— ' + selectedBatchProduct : '';
        document.getElementById('batch-info-qty').textContent = selectedBatchQty;
        infoBox.style.display = 'block';

        if (qtyInput) {
            qtyInput.max = selectedBatchQty;
            const currentVal = parseInt(qtyInput.value) || 0;
            if (currentVal > selectedBatchQty) {
                qtyInput.value = selectedBatchQty;
            }
        }

        validateQuantity();
    });

    \$(batchSelect).on('select2:clear', function() {
        selectedBatchQty = 0;
        selectedBatchNumber = '';
        selectedBatchProduct = '';
        selectedBatchSource = '';
        document.getElementById('batch-info-box').style.display = 'none';
        if (qtyInput) qtyInput.removeAttribute('max');
        validateQuantity();
    });

    // ============================================
    // ✅ VALIDATION QUANTITÉ
    // ============================================
    function validateQuantity() {
        if (!qtyInput) return true;
        const qty = parseInt(qtyInput.value) || 0;

        if (qtyError) qtyError.style.display = 'none';
        qtyInput.classList.remove('is-invalid-custom');

        if (qty <= 0) return true;

        if (selectedBatchQty > 0 && qty > selectedBatchQty) {
            if (qtyErrorText) {
                qtyErrorText.textContent = `La quantité (\${qty}) dépasse le stock disponible (\${selectedBatchQty}).`;
            }
            if (qtyError) qtyError.style.display = 'flex';
            qtyInput.classList.add('is-invalid-custom');
            return false;
        }
        return true;
    }

    if (qtyInput) {
        qtyInput.addEventListener('input', validateQuantity);
        qtyInput.addEventListener('change', validateQuantity);
    }

    // ============================================
    // ✅ HELPER : la valeur Select2 (fiable)
    // ============================================
    function getSelect2Value(\$selectElement) {
        if (typeof \$.fn.select2 === 'undefined') {
            return \$selectElement.val();
        }
        const data = \$selectElement.select2('data');
        return (data && data.length > 0 && data[0].id) ? data[0].id : null;
    }

    // ============================================
    // ✅ LECTURE ROBUSTE DE LA QUANTITÉ
    // ============================================
    function getQuantity() {
        if (!qtyInput) return 0;
        const raw = qtyInput.value;
        const parsed = parseInt(raw, 10);
        console.log('🔍 Quantité — raw:', JSON.stringify(raw), '| parsed:', parsed);
        return isNaN(parsed) ? 0 : parsed;
    }

    // ============================================
    // SOUMISSION + MODAL
    // ============================================
    const confirmModalEl = document.getElementById('confirmTransferModal');
    const confirmModal = new bootstrap.Modal(confirmModalEl);
    let isConfirmed = false;

    form.addEventListener('submit', function(e) {
        console.log('=== SUBMIT DÉCLENCHÉ ===');

        if (isConfirmed) return true;
        e.preventDefault();

        // 1) Lot
        const batchValue = getSelect2Value(\$(batchSelect));
        console.log('Lot value:', batchValue);

        if (!batchValue) {
            showAlert('Veuillez sélectionner un lot.', 'Lot manquant');
            return false;
        }

        // 2) Destination
        const destValue = getSelect2Value(\$(destSelect));
        console.log('Dest value:', destValue);

        if (!destValue) {
            showAlert('Veuillez sélectionner un emplacement de destination.', 'Destination manquante');
            return false;
        }

        // 3) Quantité
        const quantity = getQuantity();
        console.log('Quantité lue:', quantity);

        if (quantity <= 0) {
            showAlert('Veuillez saisir une quantité valide (supérieure à 0).', 'Quantité invalide');
            qtyInput.focus();
            return false;
        }

        // 4) Stock
        if (selectedBatchQty > 0 && quantity > selectedBatchQty) {
            showAlert(`La quantité (\${quantity}) dépasse le stock disponible (\${selectedBatchQty}).`, 'Stock insuffisant');
            qtyInput.focus();
            return false;
        }

        // 5) Destination label
        let destinationLabel = '—';
        if (typeof \$.fn.select2 !== 'undefined') {
            const destData = \$(destSelect).select2('data')[0];
            destinationLabel = destData ? destData.text : '—';
        }

        // 6) Remplir modal
        document.getElementById('confirm-batch').textContent = selectedBatchNumber + (selectedBatchProduct ? ' — ' + selectedBatchProduct : '');
        document.getElementById('confirm-source').textContent = selectedBatchSource || '—';
        document.getElementById('confirm-destination').textContent = destinationLabel;
        document.getElementById('confirm-quantity').innerHTML = `<span class=\"text-primary\">\${quantity} unités</span>`;

        const reason = reasonInput?.value.trim() || '';
        document.getElementById('confirm-reason').textContent = reason ? (reason.length > 80 ? reason.substring(0, 80) + '…' : reason) : '—';

        confirmModal.show();
    });

    // Confirmer
    document.getElementById('confirmTransferBtn').addEventListener('click', function() {
        console.log('=== CONFIRM TRANSFER ===');
        isConfirmed = true;
        this.disabled = true;
        this.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>Traitement...';
        confirmModal.hide();
        setTimeout(() => {
            console.log('Envoi du formulaire...');
            form.submit();
        }, 200);
    });

    confirmModalEl.addEventListener('hidden.bs.modal', function() {
        const btn = document.getElementById('confirmTransferBtn');
        if (!isConfirmed) {
            btn.disabled = false;
            btn.innerHTML = '<i class=\"fas fa-check me-1\"></i> Confirmer';
        }
    });

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
        return "stock/transfer/new.html.twig";
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
        return array (  862 => 667,  855 => 666,  777 => 592,  766 => 584,  729 => 549,  720 => 546,  717 => 545,  713 => 544,  709 => 543,  705 => 542,  685 => 524,  676 => 521,  673 => 520,  669 => 519,  665 => 518,  661 => 517,  630 => 488,  621 => 485,  618 => 484,  614 => 483,  610 => 482,  606 => 481,  592 => 469,  583 => 466,  580 => 465,  576 => 464,  572 => 463,  568 => 462,  557 => 454,  553 => 452,  548 => 449,  539 => 447,  535 => 446,  527 => 440,  525 => 439,  515 => 432,  498 => 418,  494 => 417,  486 => 411,  479 => 410,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "stock/transfer/new.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\transfer\\new.html.twig");
    }
}
