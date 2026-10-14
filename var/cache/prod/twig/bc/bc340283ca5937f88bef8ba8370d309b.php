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

/* stock/adjustment/new.html.twig */
class __TwigTemplate_3cfb7b65b6ee4eb7bc907bb719c89e25 extends Template
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
        yield "Nouvel ajustement - HMA Market";
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
    /* ============================================
       LAYOUT
       ============================================ */
    .adjustment-wrapper {
        max-width: 1000px;
        margin: 0 auto;
    }

    /* ============================================
       EN-TÊTE SIMPLE
       ============================================ */
    .page-header-simple {
        background-color: #0463f1;
        border-radius: 12px;
        padding: 1.25rem 1.5rem;
        margin-bottom: 1.5rem;
    }

    .page-header-simple .header-title {
        color: #ffffff;
        font-size: 1.4rem;
        font-weight: 700;
        margin: 0 0 0.35rem 0;
        display: flex;
        align-items: center;
        gap: 0.6rem;
    }
    .page-header-simple .header-title i {
        color: #ffffff;
    }

    .page-header-simple .header-subtitle {
        color: rgba(255, 255, 255, 0.9);
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
        background-color: #ffffff;
        color: #0463f1;
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
        background-color: #f1f5f9;
        color: #0346b8;
    }

    /* Breadcrumb */
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
        color: #ffffff;
        display: flex;
        align-items: center;
    }
    .breadcrumb-simple li a {
        color: #ffffff;
        text-decoration: none;
        opacity: 0.9;
    }
    .breadcrumb-simple li a:hover {
        opacity: 1;
        text-decoration: underline;
    }
    .breadcrumb-simple li + li::before {
        content: '/';
        color: rgba(255, 255, 255, 0.7);
        margin-right: 0.4rem;
        font-weight: 300;
    }
    .breadcrumb-simple li.active {
        opacity: 1;
        font-weight: 600;
    }

    /* ============================================
       SECTIONS DE FORMULAIRE
       ============================================ */
    .form-section {
        background: #fff;
        border-radius: 12px;
        padding: 1.5rem;
        margin-bottom: 1rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
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

    /* ============================================
       CARTES DE TYPE
       ============================================ */
    .type-card {
        cursor: pointer;
        transition: all 0.2s ease;
        border: 2px solid #e9ecef;
        border-radius: 12px;
        background: #fff;
        position: relative;
        height: 100%;
    }
    .type-card:hover {
        border-color: #cbd5e1;
        transform: translateY(-2px);
    }
    .type-card.selected {
        border-color: #0463f1;
        background-color: #f0f6ff;
        box-shadow: 0 4px 12px rgba(4,99,241,0.15);
    }
    .type-card.selected::before {
        content: '✓';
        position: absolute;
        top: 10px;
        right: 10px;
        width: 24px;
        height: 24px;
        background: #0463f1;
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 0.8rem;
    }

    .type-card .card-body {
        padding: 1.5rem 1rem;
    }
    .type-card .type-icon {
        font-size: 2.5rem;
        margin-bottom: 0.75rem;
        display: inline-block;
    }
    .type-card[data-type=\"in\"] .type-icon { color: #10b981; }
    .type-card[data-type=\"out\"] .type-icon { color: #ef4444; }

    .type-card h5 {
        font-weight: 700;
        font-size: 1.05rem;
        margin-bottom: 0.4rem;
    }
    .type-card[data-type=\"in\"] h5 { color: #059669; }
    .type-card[data-type=\"out\"] h5 { color: #dc2626; }

    .type-card small.text-muted {
        font-size: 0.78rem;
        display: block;
        min-height: 32px;
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
    .form-error-box li {
        margin-bottom: 0.25rem;
    }

    .field-error {
        color: #dc2626;
        font-size: 0.8rem;
        margin-top: 0.35rem;
        display: flex;
        align-items: center;
        gap: 0.35rem;
    }
    .field-error i {
        font-size: 0.85rem;
    }

    .form-control.is-invalid-custom {
        border-color: #dc2626 !important;
        background-color: #fef2f2 !important;
    }

    /* ============================================
       ✅ BOX INFO LOT SÉLECTIONNÉ
       ============================================ */
    .batch-info-box {
        background: #f0f6ff;
        border: 1px solid #bfdbfe;
        border-left: 4px solid #0463f1;
        border-radius: 8px;
        padding: 0.85rem 1rem;
        margin-bottom: 1rem;
        font-size: 0.88rem;
    }

    /* ============================================
       FORM CONTROLS
       ============================================ */
    .form-control, .form-select {
        border-radius: 8px;
        border: 1px solid #d1d5db;
        padding: 0.6rem 0.85rem;
        font-size: 0.92rem;
    }
    .form-control:focus, .form-select:focus {
        border-color: #0463f1;
        box-shadow: 0 0 0 3px rgba(4,99,241,0.15);
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

    /* ============================================
       SELECT2 - LOT
       ============================================ */
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

    .batch-option-rich {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        width: 100%;
    }
    .batch-thumb {
        width: 42px;
        height: 42px;
        border-radius: 8px;
        overflow: hidden;
        flex-shrink: 0;
        background: #f1f5f9;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #e2e8f0;
    }
    .batch-thumb .batch-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .batch-thumb .batch-icon-fallback {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #94a3b8;
        font-size: 1.05rem;
        background: #e0ebff;
    }
    .batch-info { flex-grow: 1; min-width: 0; }
    .batch-info .batch-num {
        font-weight: 700;
        color: #1e293b;
        font-size: 0.88rem;
        display: block;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .batch-info .batch-prod {
        font-size: 0.75rem;
        color: #64748b;
        display: block;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .batch-info .batch-barcode {
        color: #94a3b8;
        font-size: 0.68rem;
        margin-left: 0.35rem;
        font-family: 'Courier New', monospace;
    }
    .batch-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-top: 0.15rem;
    }
    .batch-expiry, .batch-loc {
        font-size: 0.68rem;
        color: #64748b;
        display: inline-flex;
        align-items: center;
    }
    .batch-qty {
        flex-shrink: 0;
        text-align: right;
        padding-left: 0.5rem;
    }
    .batch-qty .qty-val {
        font-weight: 800;
        color: #10b981;
        font-size: 0.95rem;
        display: block;
    }
    .batch-qty .qty-val.qty-low { color: #ef4444 !important; }
    .batch-qty .qty-lbl {
        font-size: 0.62rem;
        color: #94a3b8;
        text-transform: uppercase;
        display: block;
    }

    /* Dropdown */
    .select2-results__option--highlighted {
        background: #0463f1 !important;
    }
    .select2-results__option--highlighted .batch-icon-fallback {
        background: rgba(255,255,255,0.2) !important;
        color: #fff !important;
    }
    .select2-results__option--highlighted .batch-num,
    .select2-results__option--highlighted .batch-prod,
    .select2-results__option--highlighted .batch-barcode,
    .select2-results__option--highlighted .batch-expiry,
    .select2-results__option--highlighted .batch-loc,
    .select2-results__option--highlighted .qty-lbl {
        color: rgba(255,255,255,0.95) !important;
    }
    .select2-results__option--highlighted .qty-val { color: #fff !important; }
    .select2-results__option--highlighted .qty-val.qty-low { color: #fecaca !important; }

    /* ============================================
       BOUTONS
       ============================================ */
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

    /* ============================================
       ALERTE
       ============================================ */
    .alert-simple {
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
    .alert-simple i {
        color: #d97706;
        font-size: 1.25rem;
        flex-shrink: 0;
    }

    /* ============================================
       MODALS
       ============================================ */
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
    .confirmation-modal .modal-header.info-header {
        background: #0463f1;
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
    .confirm-summary .summary-value.text-success { color: #059669 !important; }
    .confirm-summary .summary-value.text-danger { color: #dc2626 !important; }

    .type-badge-simple {
        display: inline-block;
        padding: 0.25rem 0.6rem;
        border-radius: 20px;
        font-size: 0.72rem;
        font-weight: 600;
    }
    .type-badge-simple.in { background: #d1fae5; color: #065f46; }
    .type-badge-simple.out { background: #fee2e2; color: #991b1b; }

    .confirmation-modal .modal-footer {
        border: none;
        padding: 1rem 1.5rem 1.25rem;
        gap: 0.5rem;
    }

    /* ============================================
       RESPONSIVE
       ============================================ */
    @media (max-width: 768px) {
        .page-header-simple {
            padding: 1rem 1.15rem;
        }
        .page-header-simple .header-title {
            font-size: 1.15rem;
        }
        .page-header-simple .header-subtitle {
            font-size: 0.8rem;
        }
        .form-section {
            padding: 1.15rem;
        }
        .form-section-title {
            font-size: 0.88rem;
        }
        .type-card .type-icon { font-size: 2rem; }
        .type-card h5 { font-size: 0.95rem; }
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

    // line 594
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 595
        yield "<div class=\"container-fluid px-2 px-md-4 py-3\">
    <div class=\"adjustment-wrapper\">

        <!-- ==========================================
             EN-TÊTE SIMPLE
        ========================================== -->
        <div class=\"page-header-simple\">
            <ul class=\"breadcrumb-simple\">
                <li><a href=\"";
        // line 603
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">Tableau de bord</a></li>
                <li><a href=\"";
        // line 604
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_index");
        yield "\">Ajustements</a></li>
                <li class=\"active\">Nouvel ajustement</li>
            </ul>
            <div class=\"header-actions\">
                <div>
                    <h1 class=\"header-title\">
                        <i class=\"fas fa-plus-circle\"></i>
                        Nouvel ajustement de stock
                    </h1>
                    <p class=\"header-subtitle\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Action irréversible — vérifiez les informations avant de valider
                    </p>
                </div>
                <a href=\"";
        // line 618
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_index");
        yield "\" class=\"btn-back-simple\">
                    <i class=\"fas fa-arrow-left\"></i> Retour
                </a>
            </div>
        </div>

        <!-- ==========================================
             ERREURS GLOBALES
        ========================================== -->
        ";
        // line 627
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 627), "errors", [], "any", false, false, false, 627)) > 0)) {
            // line 628
            yield "            <div class=\"form-error-box\">
                <div class=\"error-title\">
                    <i class=\"fas fa-exclamation-triangle\"></i>
                    Le formulaire contient des erreurs
                </div>
                <ul>
                    ";
            // line 634
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 634), "errors", [], "any", false, false, false, 634));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 635
                yield "                        <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 635), "html", null, true);
                yield "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 637
            yield "                </ul>
            </div>
        ";
        }
        // line 640
        yield "
        <!-- ==========================================
             FORMULAIRE
        ========================================== -->
        ";
        // line 644
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate", "id" => "adjustmentForm"]]);
        yield "

        <!-- ÉTAPE 1 : Type -->
        <div class=\"form-section\">
            <div class=\"form-section-title\">
                <span class=\"step-badge\">1</span>
                <span><i class=\"fas fa-tag me-1 text-primary\"></i> Type d'ajustement</span>
            </div>

            ";
        // line 654
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 654), 'widget');
        yield "
            ";
        // line 655
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 655), "vars", [], "any", false, false, false, 655), "errors", [], "any", false, false, false, 655));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 656
            yield "                <div class=\"field-error\">
                    <i class=\"fas fa-exclamation-circle\"></i> ";
            // line 657
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 657), "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 660
        yield "
            <div id=\"type-buttons\" class=\"row g-3\">
                <div class=\"col-12 col-md-6\">
                    <div class=\"card type-card\" data-type=\"in\">
                        <div class=\"card-body text-center\">
                            <i class=\"fas fa-plus-circle type-icon\"></i>
                            <h5>Entrée (+)</h5>
                            <small class=\"text-muted\">Surplus, don, réception sans commande</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-md-6\">
                    <div class=\"card type-card\" data-type=\"out\">
                        <div class=\"card-body text-center\">
                            <i class=\"fas fa-minus-circle type-icon\"></i>
                            <h5>Sortie (-)</h5>
                            <small class=\"text-muted\">Casse, perte, vol, échantillon</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"type-error text-danger small mt-2\" style=\"display: none;\">
                <i class=\"fas fa-exclamation-circle me-1\"></i> Veuillez sélectionner un type d'ajustement.
            </div>
        </div>

        <!-- ÉTAPE 2 : Lot -->
        <div class=\"form-section\">
            <div class=\"form-section-title\">
                <span class=\"step-badge\">2</span>
                <span><i class=\"fas fa-boxes me-1 text-primary\"></i> Lot concerné</span>
            </div>
            ";
        // line 692
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "stock_batch", [], "any", false, false, false, 692), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 693
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "stock_batch", [], "any", false, false, false, 693), 'widget');
        yield "
            ";
        // line 694
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "stock_batch", [], "any", false, false, false, 694), "vars", [], "any", false, false, false, 694), "errors", [], "any", false, false, false, 694));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 695
            yield "                <div class=\"field-error\">
                    <i class=\"fas fa-exclamation-circle\"></i> ";
            // line 696
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 696), "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 699
        yield "            <small class=\"text-muted d-block mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Le stock actuel du lot sera directement modifié
            </small>
        </div>

        <!-- ÉTAPE 3 : Quantité -->
        <div class=\"form-section\">
            <div class=\"form-section-title\">
                <span class=\"step-badge\">3</span>
                <span><i class=\"fas fa-hashtag me-1 text-primary\"></i> Quantité</span>
            </div>

            ";
        // line 713
        yield "            <div id=\"batch-info-box\" class=\"batch-info-box\" style=\"display: none;\">
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
                        <span id=\"batch-info-unit\" class=\"text-muted small\">—</span>
                    </div>
                </div>
            </div>

            ";
        // line 729
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 729), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 730
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 730), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex : 10"]]);
        yield "
            ";
        // line 731
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 731), "vars", [], "any", false, false, false, 731), "errors", [], "any", false, false, false, 731));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 732
            yield "                <div class=\"field-error\">
                    <i class=\"fas fa-exclamation-circle\"></i> ";
            // line 733
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 733), "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 736
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
                <span><i class=\"fas fa-pen me-1 text-primary\"></i> Raison de l'ajustement</span>
            </div>
            ";
        // line 753
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "reason", [], "any", false, false, false, 753), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 754
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "reason", [], "any", false, false, false, 754), 'widget', ["attr" => ["class" => "form-control", "rows" => 3, "placeholder" => "Expliquez la raison de cet ajustement..."]]);
        yield "
            ";
        // line 755
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "reason", [], "any", false, false, false, 755), "vars", [], "any", false, false, false, 755), "errors", [], "any", false, false, false, 755));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 756
            yield "                <div class=\"field-error\">
                    <i class=\"fas fa-exclamation-circle\"></i> ";
            // line 757
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 757), "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 760
        yield "        </div>

        <!-- ÉTAPE 5 : Justificatif -->
        <div class=\"form-section\">
            <div class=\"form-section-title\">
                <span class=\"step-badge\">5</span>
                <span>
                    <i class=\"fas fa-paperclip me-1 text-primary\"></i> Justificatif
                    <span class=\"badge bg-secondary ms-2 small\">Optionnel</span>
                </span>
            </div>
            ";
        // line 771
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "justification_file", [], "any", false, false, false, 771), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 772
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "justification_file", [], "any", false, false, false, 772), 'widget');
        yield "
            ";
        // line 773
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "justification_file", [], "any", false, false, false, 773), "vars", [], "any", false, false, false, 773), "errors", [], "any", false, false, false, 773));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 774
            yield "                <div class=\"field-error\">
                    <i class=\"fas fa-exclamation-circle\"></i> ";
            // line 775
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 775), "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 778
        yield "            <small class=\"text-muted d-block mt-2\">
                <i class=\"fas fa-file-upload me-1\"></i>
                Formats acceptés : JPG, PNG, GIF, PDF (max 5 Mo)
            </small>
        </div>

        <!-- ALERTE -->
        <div class=\"alert-simple\">
            <i class=\"fas fa-exclamation-triangle\"></i>
            <div>
                <strong>Action irréversible.</strong>
                Une fois l'ajustement effectué, il ne pourra pas être modifié ni supprimé.
            </div>
        </div>

        <!-- ACTIONS -->
        <div class=\"action-bar\">
            <a href=\"";
        // line 795
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-times me-1\"></i> Annuler
            </a>
            <button type=\"submit\" class=\"btn btn-primary\" id=\"submitBtn\" disabled>
                <i class=\"fas fa-save me-1\"></i> Effectuer l'ajustement
            </button>
        </div>

        ";
        // line 803
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
    </div>
</div>

<!-- ==========================================
     MODAL DE CONFIRMATION
========================================== -->
<div class=\"modal fade confirmation-modal\" id=\"confirmAdjustmentModal\" tabindex=\"-1\" data-bs-backdrop=\"static\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Confirmer l'ajustement
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p class=\"mb-3 small text-muted\">
                    Vérifiez les informations ci-dessous :
                </p>
                <div class=\"confirm-summary\">
                    <div class=\"summary-row\">
                        <span class=\"summary-label\">Type</span>
                        <span class=\"summary-value\" id=\"confirm-type\">—</span>
                    </div>
                    <div class=\"summary-row\">
                        <span class=\"summary-label\">Lot</span>
                        <span class=\"summary-value\" id=\"confirm-batch\">—</span>
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
                <button type=\"button\" class=\"btn btn-primary\" id=\"confirmAdjustmentBtn\">
                    <i class=\"fas fa-check me-1\"></i> Confirmer
                </button>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================
     MODAL D'ALERTE
========================================== -->
<div class=\"modal fade confirmation-modal\" id=\"alertModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header danger-header\" id=\"alertModalHeader\">
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

    // line 879
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 880
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {

    // ============================================
    // MODAL D'ALERTE GÉNÉRIQUE
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
    // VARIABLES GLOBALES
    // ============================================
    let selectedType = null;
    let selectedBatchQty = 0;
    let selectedBatchUnit = 'unité';

    const form = document.getElementById('adjustmentForm');
    const typeInput = document.getElementById('stock_adjustment_type');

    if (!typeInput) {
        console.error('❌ Champ type introuvable — vérifiez le FormType');
    }

    // ============================================
    // SELECT2 - LOT
    // ============================================
    function formatBatchOption(batch) {
        if (!batch.id) return batch.text;

        const \$option = \$(batch.element);
        const batchNumber = \$option.data('batch-number') || '';
        const productName = \$option.data('product-name') || '';
        const productImage = \$option.data('product-image') || '';
        const productBarcode = \$option.data('product-barcode') || '';
        const currentQty = \$option.data('current-quantity');
        const unit = \$option.data('unit') || 'unité';
        const expiryDate = \$option.data('expiry-date') || '';
        const location = \$option.data('location') || '';

        const qtyDisplay = (currentQty !== undefined && currentQty !== null && currentQty !== '')
            ? currentQty
            : '—';

        const imageHtml = productImage
            ? `<img src=\"\${productImage}\" alt=\"\${productName}\" class=\"batch-img\" onerror=\"this.style.display='none'; this.nextElementSibling.style.display='flex';\">
               <div class=\"batch-icon-fallback\" style=\"display:none;\"><i class=\"fas fa-box\"></i></div>`
            : `<div class=\"batch-icon-fallback\" style=\"display:flex;\"><i class=\"fas fa-box\"></i></div>`;

        const expiryBadge = expiryDate
            ? `<span class=\"batch-expiry\"><i class=\"fas fa-calendar-alt me-1\"></i>\${expiryDate}</span>`
            : '';

        const qtyClass = (currentQty !== undefined && currentQty !== null && currentQty <= 10)
            ? 'qty-val qty-low'
            : 'qty-val';

        return \$(`
            <div class=\"batch-option-rich\">
                <div class=\"batch-thumb\">\${imageHtml}</div>
                <div class=\"batch-info\">
                    <span class=\"batch-num\">\${batchNumber}</span>
                    <span class=\"batch-prod\">
                        \${productName}
                        \${productBarcode ? `<small class=\"batch-barcode\">\${productBarcode}</small>` : ''}
                    </span>
                    \${(expiryBadge || location) ? `
                        <div class=\"batch-meta\">
                            \${expiryBadge}
                            \${location ? `<span class=\"batch-loc\"><i class=\"fas fa-map-marker-alt me-1\"></i>\${location}</span>` : ''}
                        </div>
                    ` : ''}
                </div>
                <div class=\"batch-qty\">
                    <span class=\"\${qtyClass}\">\${qtyDisplay}</span>
                    <span class=\"qty-lbl\">\${unit}</span>
                </div>
            </div>
        `);
    }

    function formatBatchSelection(batch) {
        if (!batch.id) return batch.text;
        return formatBatchOption(batch);
    }

    \$('.select2-batch').select2({
        theme: 'bootstrap-5',
        language: 'fr',
        placeholder: '-- Sélectionner un lot --',
        allowClear: true,
        width: '100%',
        templateResult: formatBatchOption,
        templateSelection: formatBatchSelection,
        escapeMarkup: function(markup) { return markup; }
    });

    // ============================================
    // RÉCUPÉRATION DES CHAMPS
    // ============================================
    function getFieldByName(fieldName) {
        return document.querySelector(`[name=\"stock_adjustment[\${fieldName}]\"]`);
    }

    const qtyInput = getFieldByName('quantity');
    const qtyError = document.getElementById('quantity-error');
    const qtyErrorText = document.getElementById('quantity-error-text');

    // ============================================
    // ✅ GESTION DE LA SÉLECTION DU LOT
    // ============================================
    \$('.select2-batch').on('select2:select', function(e) {
        const data = e.params.data;
        if (!data.element) return;

        const \$opt = \$(data.element);
        selectedBatchQty = parseInt(\$opt.data('current-quantity')) || 0;
        selectedBatchUnit = \$opt.data('unit') || 'unité';

        const batchNum = \$opt.data('batch-number') || '';
        const productName = \$opt.data('product-name') || '';

        // Afficher la box info
        const infoBox = document.getElementById('batch-info-box');
        document.getElementById('batch-info-num').textContent = batchNum;
        document.getElementById('batch-info-prod').textContent = productName ? '— ' + productName : '';
        document.getElementById('batch-info-qty').textContent = selectedBatchQty;
        document.getElementById('batch-info-unit').textContent = selectedBatchUnit;
        infoBox.style.display = 'block';

        // Mettre à jour le max du champ quantité
        if (qtyInput) {
            qtyInput.max = selectedBatchQty;

            // Si la valeur dépasse, la corriger
            const currentVal = parseInt(qtyInput.value) || 0;
            if (currentVal > selectedBatchQty) {
                qtyInput.value = selectedBatchQty;
            }
        }

        // Revalider
        validateQuantity();
    });

    // Si le lot est effacé
    \$('.select2-batch').on('select2:clear', function() {
        selectedBatchQty = 0;
        document.getElementById('batch-info-box').style.display = 'none';
        if (qtyInput) qtyInput.removeAttribute('max');
        validateQuantity();
    });

    // ============================================
    // ✅ VALIDATION EN TEMPS RÉEL DE LA QUANTITÉ
    // ============================================
    function validateQuantity() {
        if (!qtyInput) return true;

        const qty = parseInt(qtyInput.value) || 0;

        // Reset
        if (qtyError) qtyError.style.display = 'none';
        qtyInput.classList.remove('is-invalid-custom');

        if (qty <= 0) return true;

        if (selectedBatchQty > 0 && qty > selectedBatchQty) {
            if (qtyErrorText) {
                qtyErrorText.textContent = `La quantité (\${qty} \${selectedBatchUnit}) dépasse le stock disponible du lot (\${selectedBatchQty} \${selectedBatchUnit}).`;
            }
            if (qtyError) qtyError.style.display = 'flex';
            qtyInput.classList.add('is-invalid-custom');
            return false;
        }

        return true;
    }

    qtyInput?.addEventListener('input', function() {
        const qty = parseInt(this.value) || 0;
        const max = parseInt(this.max) || 0;

        if (max > 0 && qty > max) {
            if (qtyErrorText) {
                qtyErrorText.textContent = `Maximum disponible : \${max} \${selectedBatchUnit}`;
            }
            if (qtyError) qtyError.style.display = 'flex';
            qtyInput.classList.add('is-invalid-custom');
        } else {
            if (qtyError) qtyError.style.display = 'none';
            qtyInput.classList.remove('is-invalid-custom');
        }
    });

    // ============================================
    // GESTION DU TYPE
    // ============================================
    const typeCards = document.querySelectorAll('.type-card');
    const submitBtn = document.getElementById('submitBtn');
    const typeError = document.querySelector('.type-error');

    typeCards.forEach(card => {
        card.addEventListener('click', function() {
            typeCards.forEach(c => c.classList.remove('selected'));
            this.classList.add('selected');
            selectedType = this.dataset.type;
            if (typeInput) typeInput.value = selectedType;
            typeError.style.display = 'none';
            submitBtn.disabled = false;
        });
    });

    // ============================================
    // VALIDATION + MODAL DE CONFIRMATION
    // ============================================
    const confirmModalEl = document.getElementById('confirmAdjustmentModal');
    const confirmModal = new bootstrap.Modal(confirmModalEl);

    const confirmType = document.getElementById('confirm-type');
    const confirmBatch = document.getElementById('confirm-batch');
    const confirmQuantity = document.getElementById('confirm-quantity');
    const confirmReason = document.getElementById('confirm-reason');

    let isConfirmed = false;

    form.addEventListener('submit', function(e) {
        if (isConfirmed) return true;
        e.preventDefault();

        // 1) Type
        if (!selectedType) {
            typeError.style.display = 'block';
            typeError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            return false;
        }

        // 2) Lot
        const batchSelect = document.querySelector('.select2-batch');
        if (!batchSelect || !batchSelect.value) {
            showAlert('Veuillez sélectionner un lot.', 'Lot manquant');
            return false;
        }

        // 3) Quantité
        const quantity = parseInt(qtyInput?.value) || 0;
        if (!quantity || quantity <= 0) {
            showAlert('Veuillez saisir une quantité valide (supérieure à 0).', 'Quantité invalide');
            qtyInput?.focus();
            return false;
        }

        // ✅ 3bis) Vérification du stock disponible
        if (selectedBatchQty > 0 && quantity > selectedBatchQty) {
            showAlert(
                `La quantité demandée (\${quantity} \${selectedBatchUnit}) dépasse le stock disponible du lot (\${selectedBatchQty} \${selectedBatchUnit}).`,
                'Stock insuffisant'
            );
            qtyInput?.focus();
            return false;
        }

        // 4) Raison
        const reasonInput = getFieldByName('reason');
        const reason = reasonInput ? reasonInput.value.trim() : '';
        if (!reason) {
            showAlert('Veuillez saisir une raison pour cet ajustement.', 'Raison manquante');
            reasonInput?.focus();
            return false;
        }

        // 5) Libellé du lot
        const \$batchSelect = \$(batchSelect);
        const selectedData = \$batchSelect.select2('data')[0];
        let batchLabel = '—';
        if (selectedData && selectedData.element) {
            const \$opt = \$(selectedData.element);
            const num = \$opt.data('batch-number') || '';
            const prod = \$opt.data('product-name') || '';
            batchLabel = num + (prod ? ' — ' + prod : '');
        }

        // 6) Remplir le modal
        if (selectedType === 'in') {
            confirmType.innerHTML = '<span class=\"type-badge-simple in\"><i class=\"fas fa-arrow-up me-1\"></i>Entrée (+)</span>';
        } else {
            confirmType.innerHTML = '<span class=\"type-badge-simple out\"><i class=\"fas fa-arrow-down me-1\"></i>Sortie (-)</span>';
        }

        confirmBatch.textContent = batchLabel;

        // ✅ Quantité + info stock avant/après
        const afterQty = selectedType === 'in'
            ? selectedBatchQty + quantity
            : selectedBatchQty - quantity;

        confirmQuantity.innerHTML = `<div>
            <span class=\"\${selectedType === 'in' ? 'text-success' : 'text-danger'}\">
                \${selectedType === 'in' ? '+' : '−'} \${quantity} \${selectedBatchUnit}
            </span>
            <small class=\"d-block text-muted\" style=\"font-size: 0.72rem;\">
                Stock actuel : \${selectedBatchQty} \${selectedBatchUnit} → \${afterQty} après
            </small>
        </div>`;

        confirmReason.textContent = reason.length > 80 ? reason.substring(0, 80) + '…' : reason;

        // 7) Ouvrir le modal
        confirmModal.show();
    });

    // Confirmer
    document.getElementById('confirmAdjustmentBtn').addEventListener('click', function() {
        isConfirmed = true;
        this.disabled = true;
        this.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>Traitement...';
        confirmModal.hide();
        setTimeout(() => form.submit(), 200);
    });

    confirmModalEl.addEventListener('hidden.bs.modal', function() {
        const btn = document.getElementById('confirmAdjustmentBtn');
        if (!isConfirmed) {
            btn.disabled = false;
            btn.innerHTML = '<i class=\"fas fa-check me-1\"></i> Confirmer';
        }
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
        return "stock/adjustment/new.html.twig";
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
        return array (  1092 => 880,  1085 => 879,  1005 => 803,  994 => 795,  975 => 778,  966 => 775,  963 => 774,  959 => 773,  955 => 772,  951 => 771,  938 => 760,  929 => 757,  926 => 756,  922 => 755,  918 => 754,  914 => 753,  895 => 736,  886 => 733,  883 => 732,  879 => 731,  875 => 730,  871 => 729,  853 => 713,  838 => 699,  829 => 696,  826 => 695,  822 => 694,  818 => 693,  814 => 692,  780 => 660,  771 => 657,  768 => 656,  764 => 655,  759 => 654,  747 => 644,  741 => 640,  736 => 637,  727 => 635,  723 => 634,  715 => 628,  713 => 627,  701 => 618,  684 => 604,  680 => 603,  670 => 595,  663 => 594,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "stock/adjustment/new.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\adjustment\\new.html.twig");
    }
}
