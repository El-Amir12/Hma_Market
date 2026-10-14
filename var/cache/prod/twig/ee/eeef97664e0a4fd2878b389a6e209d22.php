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

/* stock/transfer/receive.html.twig */
class __TwigTemplate_e8d320a13629d20d4cc4865c92493910 extends Template
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
        yield "Réceptionner transfert - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "transferNumber", [], "any", false, false, false, 4), "html", null, true);
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
    .receive-wrapper {
        max-width: 900px;
        margin: 0 auto;
    }

    /* EN-TÊTE */
    .page-header-simple {
        background-color: #10b981;
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
        font-size: 0.88rem;
        margin: 0;
        opacity: 0.95;
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
        color: #10b981 !important;
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
        background-color: #f0fdf4 !important;
        color: #059669 !important;
    }
    .page-header-simple .btn-back-simple i {
        color: #10b981 !important;
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
    }
    .breadcrumb-simple li.active {
        opacity: 1;
        font-weight: 600;
    }

    /* SECTIONS */
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
        background: #10b981;
        color: #fff;
        font-size: 0.8rem;
        font-weight: 700;
        flex-shrink: 0;
    }

    .info-card {
        background: #f0fdf4;
        border: 1px solid #bbf7d0;
        border-left: 4px solid #10b981;
        border-radius: 8px;
        padding: 0.85rem 1rem;
        font-size: 0.88rem;
    }

    .detail-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.6rem 0;
        border-bottom: 1px dashed #e9ecef;
        gap: 1rem;
    }
    .detail-row:last-child {
        border-bottom: none;
    }
    .detail-label {
        color: #64748b;
        font-size: 0.82rem;
        font-weight: 500;
        flex-shrink: 0;
    }
    .detail-value {
        font-weight: 700;
        color: #1e293b;
        font-size: 0.88rem;
        text-align: right;
        word-break: break-word;
    }

    .route-display {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        background: #f8fafc;
        border-radius: 10px;
        padding: 1rem;
        margin: 1rem 0;
    }
    .route-point {
        flex: 1;
        text-align: center;
    }
    .route-point .point-icon {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1.15rem;
        margin-bottom: 0.5rem;
    }
    .route-point.from .point-icon {
        background: #d1fae5;
        color: #065f46;
    }
    .route-point.to .point-icon {
        background: #dbeafe;
        color: #1e40af;
    }
    .route-point .point-label {
        font-size: 0.68rem;
        color: #64748b;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 0.4px;
    }
    .route-point .point-name {
        font-weight: 700;
        font-size: 0.88rem;
        color: #1e293b;
        margin-top: 0.15rem;
    }
    .route-arrow {
        color: #10b981;
        font-size: 1.3rem;
        flex-shrink: 0;
    }

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
    .btn-success {
        background: #10b981;
        border: none;
    }
    .btn-success:hover:not(:disabled) {
        background: #059669;
    }

    /* MODALS */
    .confirmation-modal .modal-content {
        border: none;
        border-radius: 14px;
        overflow: hidden;
    }
    .confirmation-modal .modal-header {
        background: #10b981;
        color: #fff;
        border: none;
        padding: 1rem 1.25rem;
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

    /* RESPONSIVE */
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
        .route-display {
            flex-direction: column;
            gap: 0.5rem;
        }
        .route-arrow {
            transform: rotate(90deg);
        }
        .detail-row {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.25rem;
        }
        .detail-value {
            text-align: left;
        }
    }
</style>
";
        yield from [];
    }

    // line 371
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 372
        yield "<div class=\"container-fluid px-2 px-md-4 py-3\">
    <div class=\"receive-wrapper\">

        <!-- EN-TÊTE -->
        <div class=\"page-header-simple\">
            <ul class=\"breadcrumb-simple\">
                <li><a href=\"";
        // line 378
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">Tableau de bord</a></li>
                <li><a href=\"";
        // line 379
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_index");
        yield "\">Transferts</a></li>
                <li><a href=\"";
        // line 380
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "id", [], "any", false, false, false, 380)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "transferNumber", [], "any", false, false, false, 380)), "truncate", [15], "method", false, false, false, 380), "html", null, true);
        yield "</a></li>
                <li class=\"active\">Réception</li>
            </ul>
            <div class=\"header-actions\">
                <div>
                    <h1 class=\"header-title\">
                        <i class=\"fas fa-check-circle\"></i>
                        Réceptionner le transfert
                    </h1>
                    <p class=\"header-subtitle\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Confirmez la réception des marchandises
                    </p>
                </div>
                <a href=\"";
        // line 394
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "id", [], "any", false, false, false, 394)]), "html", null, true);
        yield "\" class=\"btn-back-simple\">
                    <i class=\"fas fa-arrow-left\"></i> Retour
                </a>
            </div>
        </div>

        <!-- DÉTAILS DU TRANSFERT -->
        <div class=\"form-section\">
            <div class=\"form-section-title\">
                <span class=\"step-badge\">
                    <i class=\"fas fa-info\"></i>
                </span>
                <span>Détails du transfert</span>
            </div>

            <div class=\"info-card mb-3\">
                <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
                    <div>
                        <i class=\"fas fa-hashtag me-1 text-success\"></i>
                        <strong>N° transfert :</strong>
                        <span class=\"text-success fw-bold\">";
        // line 414
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "transferNumber", [], "any", false, false, false, 414), "html", null, true);
        yield "</span>
                    </div>
                    <div>
                        <span class=\"badge bg-warning text-dark\">
                            <i class=\"fas fa-truck me-1\"></i> En transit
                        </span>
                    </div>
                </div>
            </div>

            <!-- Route -->
            <div class=\"route-display\">
                <div class=\"route-point from\">
                    <div class=\"point-icon\">
                        <i class=\"fas fa-warehouse\"></i>
                    </div>
                    <div class=\"point-label\">De</div>
                    <div class=\"point-name\">
                        ";
        // line 432
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "sourceLocation", [], "any", false, false, false, 432)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "sourceLocation", [], "any", false, false, false, 432), "displayName", [], "any", false, false, false, 432), "html", null, true)) : ("Non défini"));
        yield "
                    </div>
                </div>
                <div class=\"route-arrow\">
                    <i class=\"fas fa-long-arrow-alt-right\"></i>
                </div>
                <div class=\"route-point to\">
                    <div class=\"point-icon\">
                        <i class=\"fas fa-map-marker-alt\"></i>
                    </div>
                    <div class=\"point-label\">Vers</div>
                    <div class=\"point-name\">
                        ";
        // line 444
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "destinationLocation", [], "any", false, false, false, 444), "displayName", [], "any", false, false, false, 444), "html", null, true);
        yield "
                    </div>
                </div>
            </div>

            <!-- Détails -->
            <div class=\"detail-row\">
                <span class=\"detail-label\">
                    <i class=\"fas fa-box me-1\"></i> Produit
                </span>
                <span class=\"detail-value\">";
        // line 454
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "stockBatch", [], "any", false, false, false, 454), "product", [], "any", false, false, false, 454), "name", [], "any", false, false, false, 454), "html", null, true);
        yield "</span>
            </div>
            <div class=\"detail-row\">
                <span class=\"detail-label\">
                    <i class=\"fas fa-barcode me-1\"></i> N° lot
                </span>
                <span class=\"detail-value\">
                    <code>";
        // line 461
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "stockBatch", [], "any", false, false, false, 461), "batchNumber", [], "any", false, false, false, 461), "html", null, true);
        yield "</code>
                </span>
            </div>
            <div class=\"detail-row\">
                <span class=\"detail-label\">
                    <i class=\"fas fa-hashtag me-1\"></i> Quantité à réceptionner
                </span>
                <span class=\"detail-value text-success\">
                    ";
        // line 469
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "quantity", [], "any", false, false, false, 469), 0, ",", " "), "html", null, true);
        yield " unités
                </span>
            </div>

            ";
        // line 473
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "stockBatch", [], "any", false, false, false, 473), "expiryDate", [], "any", false, false, false, 473)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 474
            yield "            <div class=\"detail-row\">
                <span class=\"detail-label\">
                    <i class=\"fas fa-calendar-times me-1\"></i> Date d'expiration
                </span>
                <span class=\"detail-value\">";
            // line 478
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "stockBatch", [], "any", false, false, false, 478), "expiryDate", [], "any", false, false, false, 478), "d/m/Y"), "html", null, true);
            yield "</span>
            </div>
            ";
        }
        // line 481
        yield "
            <div class=\"detail-row\">
                <span class=\"detail-label\">
                    <i class=\"fas fa-tag me-1\"></i> Prix unitaire
                </span>
                <span class=\"detail-value\">
                    ";
        // line 487
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "stockBatch", [], "any", false, false, false, 487), "unitPrice", [], "any", false, false, false, 487), CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "hmaService", [], "any", false, false, false, 487)), "html", null, true);
        yield "
                </span>
            </div>

            <div class=\"detail-row\">
                <span class=\"detail-label\">
                    <i class=\"fas fa-coins me-1\"></i> Valeur totale
                </span>
                <span class=\"detail-value text-success\">
                    ";
        // line 496
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "quantity", [], "any", false, false, false, 496) * CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "stockBatch", [], "any", false, false, false, 496), "unitPrice", [], "any", false, false, false, 496)), CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "hmaService", [], "any", false, false, false, 496)), "html", null, true);
        yield "
                </span>
            </div>

            <div class=\"detail-row\">
                <span class=\"detail-label\">
                    <i class=\"fas fa-user me-1\"></i> Expédié par
                </span>
                <span class=\"detail-value\">
                    ";
        // line 505
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "createdBy", [], "any", false, false, false, 505), "fullName", [], "any", false, false, false, 505)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "createdBy", [], "any", false, false, false, 505), "fullName", [], "any", false, false, false, 505), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "createdBy", [], "any", false, false, false, 505), "email", [], "any", false, false, false, 505), "html", null, true)));
        yield "
                </span>
            </div>

            ";
        // line 509
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "reason", [], "any", false, false, false, 509)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 510
            yield "            <div class=\"detail-row\">
                <span class=\"detail-label\">
                    <i class=\"fas fa-comment me-1\"></i> Raison
                </span>
                <span class=\"detail-value\">";
            // line 514
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "reason", [], "any", false, false, false, 514), "html", null, true);
            yield "</span>
            </div>
            ";
        }
        // line 517
        yield "        </div>

        <!-- CONFIRMATION -->
        <div class=\"form-section\">
            <div class=\"form-section-title\">
                <span class=\"step-badge\">
                    <i class=\"fas fa-check\"></i>
                </span>
                <span>Confirmation de réception</span>
            </div>

            <div class=\"alert-warning-simple\">
                <i class=\"fas fa-exclamation-triangle\"></i>
                <div>
                    <strong>Action irréversible</strong>
                    <small class=\"d-block mt-1\">
                        Une fois réceptionné, le transfert sera marqué comme <strong>\"Terminé\"</strong>.
                        Le stock sera ajouté à l'emplacement destination et <strong>ne pourra plus être annulé</strong>.
                    </small>
                </div>
            </div>

            <div class=\"mb-3\">
                <label class=\"form-label fw-bold small\">Date de réception prévue</label>
                <input type=\"text\" 
                       class=\"form-control\" 
                       value=\"";
        // line 543
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i:s"), "html", null, true);
        yield "\" 
                       readonly 
                       disabled>
                <small class=\"text-muted\">
                    <i class=\"fas fa-info-circle me-1\"></i>
                    La date sera automatiquement enregistrée
                </small>
            </div>
        </div>

        <!-- ACTIONS -->
        <div class=\"action-bar\">
            <a href=\"";
        // line 555
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "id", [], "any", false, false, false, 555)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-times me-1\"></i> Annuler
            </a>
            <button type=\"button\" class=\"btn btn-success\" id=\"openConfirmModalBtn\">
                <i class=\"fas fa-check-circle me-1\"></i> Confirmer la réception
            </button>
        </div>

    </div>
</div>

<!-- MODAL CONFIRMATION -->
<div class=\"modal fade confirmation-modal\" id=\"confirmReceiveModal\" tabindex=\"-1\" data-bs-backdrop=\"static\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-check-circle me-2\"></i>
                    Confirmer la réception
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p class=\"mb-3 small text-muted\">
                    Vérifiez les informations avant de valider définitivement :
                </p>

                <div class=\"confirm-summary\">
                    <div class=\"summary-row\">
                        <span class=\"summary-label\">N° transfert</span>
                        <span class=\"summary-value\">";
        // line 585
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "transferNumber", [], "any", false, false, false, 585), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"summary-row\">
                        <span class=\"summary-label\">Produit</span>
                        <span class=\"summary-value\">";
        // line 589
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "stockBatch", [], "any", false, false, false, 589), "product", [], "any", false, false, false, 589), "name", [], "any", false, false, false, 589), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"summary-row\">
                        <span class=\"summary-label\">Lot</span>
                        <span class=\"summary-value\">
                            <code>";
        // line 594
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "stockBatch", [], "any", false, false, false, 594), "batchNumber", [], "any", false, false, false, 594), "html", null, true);
        yield "</code>
                        </span>
                    </div>
                    <div class=\"summary-row\">
                        <span class=\"summary-label\">Quantité</span>
                        <span class=\"summary-value text-success\">
                            + ";
        // line 600
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "quantity", [], "any", false, false, false, 600), 0, ",", " "), "html", null, true);
        yield " unités
                        </span>
                    </div>
                    <div class=\"summary-row\">
                        <span class=\"summary-label\">Destination</span>
                        <span class=\"summary-value\">
                            ";
        // line 606
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "destinationLocation", [], "any", false, false, false, 606), "displayName", [], "any", false, false, false, 606), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>

                <div class=\"alert alert-warning mt-3 mb-0 small\">
                    <i class=\"fas fa-exclamation-triangle me-1\"></i>
                    <strong>Action irréversible</strong> — le stock sera ajouté à l'emplacement destination et le transfert ne pourra plus être annulé.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-1\"></i> Annuler
                </button>

                ";
        // line 622
        yield "                <form method=\"post\" id=\"receiveForm\" class=\"d-inline\">
                    <input type=\"hidden\" 
                           name=\"_token\" 
                           value=\"";
        // line 625
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("receive-transfer-" . CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "id", [], "any", false, false, false, 625))), "html", null, true);
        yield "\">
                    ";
        // line 627
        yield "                    <button type=\"button\" class=\"btn btn-success\" id=\"confirmReceiveBtn\">
                        <i class=\"fas fa-check-circle me-1\"></i> Confirmer la réception
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 637
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 638
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
console.log('%c=== SCRIPT RECEIVE TRANSFER CHARGÉ ===', 'color: #10b981; font-weight: bold; font-size: 14px;');

document.addEventListener('DOMContentLoaded', function() {
    console.log('%c=== DOMContentLoaded ===', 'color: #0ea5e9; font-weight: bold;');

    // ============================================
    // RÉCUPÉRATION DES ÉLÉMENTS
    // ============================================
    const modalEl = document.getElementById('confirmReceiveModal');
    const openBtn = document.getElementById('openConfirmModalBtn');
    const form = document.getElementById('receiveForm');
    const submitBtn = document.getElementById('confirmReceiveBtn');

    console.log('--- ÉLÉMENTS DU DOM ---');
    console.log('modalEl:', modalEl);
    console.log('openBtn:', openBtn);
    console.log('form:', form);
    console.log('submitBtn:', submitBtn);

    if (!modalEl || !openBtn || !form || !submitBtn) {
        console.error('❌ Un élément essentiel est manquant !');
        return;
    }

    const modal = new bootstrap.Modal(modalEl);
    let isSubmitting = false;

    // ============================================
    // 1. OUVRIR LE MODAL
    // ============================================
    openBtn.addEventListener('click', function(e) {
        e.preventDefault();
        console.log('%c=== CLIC \"OUVRIR LE MODAL\" ===', 'color: #0ea5e9; font-weight: bold;');
        modal.show();
    });

    // ============================================
    // 2. CONFIRMER LA RÉCEPTION
    // ============================================
    submitBtn.addEventListener('click', function(e) {
        // ✅ CRITIQUE : empêcher TOUT comportement par défaut
        e.preventDefault();
        e.stopPropagation();

        // ✅ Éviter double-clic
        if (isSubmitting) {
            console.log('⏸️ Déjà en cours de soumission, ignoré');
            return;
        }

        console.log('%c=== CLIC \"CONFIRMER\" ===', 'color: #10b981; font-weight: bold; font-size: 14px;');
        isSubmitting = true;

        // ✅ Vérifier le token CSRF
        const token = form.querySelector('input[name=\"_token\"]');
        if (!token || !token.value) {
            console.error('❌ Token CSRF manquant !');
            alert('Erreur : token CSRF manquant. Rechargez la page.');
            isSubmitting = false;
            return;
        }

        console.log('✅ Token CSRF présent:', token.value.substring(0, 20) + '...');
        console.log('Action:', form.action || window.location.href);
        console.log('Méthode:', form.method);

        // ✅ Désactiver le bouton + spinner
        this.disabled = true;
        this.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\" role=\"status\" aria-hidden=\"true\"></span> Traitement...';

        // ✅ Fermer le modal
        modal.hide();

        // ✅ LA CLÉ : submit après un court délai
        setTimeout(function() {
            console.log('%c=== SUBMIT DU FORMULAIRE ===', 'color: #ef4444; font-weight: bold; font-size: 14px;');

            try {
                form.submit();
                console.log('✅ form.submit() exécuté');
            } catch (err) {
                console.error('❌ Erreur submit:', err);
                alert('Erreur lors de la soumission: ' + err.message);
                isSubmitting = false;
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<i class=\"fas fa-check-circle me-1\"></i> Confirmer la réception';
            }
        }, 300);
    });

    // ============================================
    // 3. DEBUG : SUBMIT NATIF
    // ============================================
    form.addEventListener('submit', function(e) {
        console.log('%c=== SUBMIT NATIF DÉCLENCHÉ ===', 'color: #f59e0b; font-weight: bold;');
        console.log('e.defaultPrevented:', e.defaultPrevented);
        console.log('e.submitter:', e.submitter);
    });

    // ============================================
    // 4. DEBUG : NAVIGATION
    // ============================================
    window.addEventListener('beforeunload', function() {
        console.log('%c=== NAVIGATION EN COURS ===', 'color: #ef4444; font-weight: bold;');
    });

    console.log('%c=== INIT TERMINÉE ===', 'color: #10b981; font-weight: bold;');
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
        return "stock/transfer/receive.html.twig";
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
        return array (  806 => 638,  799 => 637,  786 => 627,  782 => 625,  777 => 622,  759 => 606,  750 => 600,  741 => 594,  733 => 589,  726 => 585,  693 => 555,  678 => 543,  650 => 517,  644 => 514,  638 => 510,  636 => 509,  629 => 505,  617 => 496,  605 => 487,  597 => 481,  591 => 478,  585 => 474,  583 => 473,  576 => 469,  565 => 461,  555 => 454,  542 => 444,  527 => 432,  506 => 414,  483 => 394,  464 => 380,  460 => 379,  456 => 378,  448 => 372,  441 => 371,  73 => 7,  66 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "stock/transfer/receive.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\transfer\\receive.html.twig");
    }
}
