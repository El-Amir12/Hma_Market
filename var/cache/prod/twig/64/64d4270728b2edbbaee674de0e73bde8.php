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

/* stock/transfer/show.html.twig */
class __TwigTemplate_6c9c187911fbc9e26afa3301d87756d0 extends Template
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
        yield "Détail transfert - ";
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
    /* ============================================
       INFO ROWS
    ============================================ */
    .info-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.6rem 0;
        border-bottom: 1px dashed #e9ecef;
        gap: 1rem;
    }
    .info-row:last-child {
        border-bottom: none;
    }
    .info-label {
        color: #64748b;
        font-size: 0.82rem;
        font-weight: 500;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        gap: 0.35rem;
    }
    .info-value {
        font-weight: 700;
        color: #1e293b;
        font-size: 0.88rem;
        text-align: right;
        word-break: break-word;
    }

    /* ============================================
       ROUTE DE → VERS
    ============================================ */
    .route-display {
        display: flex;
        align-items: stretch;
        gap: 0.75rem;
        background: #f8fafc;
        border-radius: 12px;
        padding: 1.15rem;
        margin: 0.5rem 0;
        border: 1px solid #e2e8f0;
    }
    .route-point {
        flex: 1;
        text-align: center;
        min-width: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .route-point .point-icon {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
        flex-shrink: 0;
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
        font-weight: 700;
        letter-spacing: 0.5px;
    }
    .route-point .point-name {
        font-weight: 700;
        font-size: 0.95rem;
        color: #1e293b;
        margin-top: 0.25rem;
        line-height: 1.3;
        word-break: break-word;
        max-width: 100%;
    }
    .route-arrow {
        color: #0463f1;
        font-size: 1.5rem;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* ============================================
       USER CARD (avec avatar)
    ============================================ */
    .user-card {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        padding: 0.85rem 1rem;
    }
    .user-avatar-lg {
        width: 52px;
        height: 52px;
        border-radius: 50%;
        object-fit: cover;
        flex-shrink: 0;
        border: 3px solid #e2e8f0;
    }
    .user-avatar-placeholder-lg {
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background: #e2e8f0;
        color: #64748b;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        font-size: 1.3rem;
    }
    .user-card .user-info {
        display: flex;
        flex-direction: column;
        min-width: 0;
        line-height: 1.3;
    }
    .user-card .user-name {
        font-weight: 700;
        font-size: 0.95rem;
        color: #1e293b;
        word-break: break-word;
    }
    .user-card .user-email {
        font-size: 0.82rem;
        color: #64748b;
        word-break: break-word;
    }
    .user-card .user-role-badge {
        margin-top: 0.25rem;
        font-size: 0.68rem;
        padding: 0.15rem 0.5rem;
        border-radius: 6px;
        background: #eff6ff;
        color: #0463f1;
        font-weight: 600;
        align-self: flex-start;
    }

    /* ============================================
       ACTION BTN
    ============================================ */
    .action-btn {
        font-weight: 600;
        padding: 0.6rem 1.2rem;
        border-radius: 8px;
    }

    /* ============================================
       RESPONSIVE
    ============================================ */
    @media (max-width: 768px) {
        .route-display {
            flex-direction: column;
            gap: 0.75rem;
            padding: 1rem;
        }
        .route-arrow {
            transform: rotate(90deg);
            font-size: 1.3rem;
        }
        .route-point .point-name {
            font-size: 0.9rem;
        }
        .info-row {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.25rem;
        }
        .info-value {
            text-align: left;
        }
        .user-card {
            flex-direction: column;
            align-items: flex-start;
            text-align: left;
        }
        .action-btn {
            width: 100%;
            justify-content: center;
        }
        .header-actions-mobile {
            width: 100%;
            flex-direction: column;
        }
    }
</style>
";
        yield from [];
    }

    // line 216
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 217
        yield "<div class=\"container-fluid px-2 px-md-4 py-3\">
    <div class=\"row\">
        <div class=\"col-lg-10 mx-auto\">

            <!-- EN-TÊTE -->
            <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
                <div>
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb mb-1\">
                            <li class=\"breadcrumb-item small\">
                                <a href=\"";
        // line 227
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                                    <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                                </a>
                            </li>
                            <li class=\"breadcrumb-item small\">
                                <a href=\"";
        // line 232
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_index");
        yield "\" class=\"text-decoration-none\">
                                    <i class=\"fas fa-exchange-alt me-1\"></i> Transferts
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active small\">";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "transferNumber", [], "any", false, false, false, 236), "html", null, true);
        yield "</li>
                        </ol>
                    </nav>
                    <h1 class=\"h3 mb-0 fw-bold\">
                        <i class=\"fas fa-exchange-alt text-primary me-2\"></i>
                        Détail du transfert
                    </h1>
                </div>
                <div class=\"d-flex gap-2 flex-wrap header-actions-mobile\">
                    ";
        // line 245
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "status", [], "any", false, false, false, 245) == "pending")) {
            // line 246
            yield "                        <button type=\"button\" 
                                class=\"btn btn-success action-btn start-transfer-btn\" 
                                data-id=\"";
            // line 248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "id", [], "any", false, false, false, 248), "html", null, true);
            yield "\" 
                                data-number=\"";
            // line 249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "transferNumber", [], "any", false, false, false, 249), "html", null, true);
            yield "\"
                                data-token=\"";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("start-transfer-" . CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "id", [], "any", false, false, false, 250))), "html", null, true);
            yield "\">
                            <i class=\"fas fa-truck me-1\"></i> Expédier
                        </button>
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 253
($context["transfer"] ?? null), "status", [], "any", false, false, false, 253) == "in_transit")) {
            // line 254
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_receive", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "id", [], "any", false, false, false, 254)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-info text-white action-btn\">
                            <i class=\"fas fa-check-circle me-1\"></i> Réceptionner
                        </a>
                    ";
        }
        // line 259
        yield "
                    ";
        // line 260
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "status", [], "any", false, false, false, 260), ["pending", "in_transit"])) {
            // line 261
            yield "                        <button type=\"button\" 
                                class=\"btn btn-outline-danger action-btn cancel-transfer-btn\" 
                                data-id=\"";
            // line 263
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "id", [], "any", false, false, false, 263), "html", null, true);
            yield "\" 
                                data-number=\"";
            // line 264
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "transferNumber", [], "any", false, false, false, 264), "html", null, true);
            yield "\"
                                data-token=\"";
            // line 265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cancel-transfer-" . CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "id", [], "any", false, false, false, 265))), "html", null, true);
            yield "\">
                            <i class=\"fas fa-ban me-1\"></i> Annuler
                        </button>
                    ";
        }
        // line 269
        yield "
                    <a href=\"";
        // line 270
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_index");
        yield "\" class=\"btn btn-outline-secondary action-btn\">
                        <i class=\"fas fa-arrow-left me-1\"></i> Retour
                    </a>
                </div>
            </div>

            <!-- CARTE INFORMATIONS GÉNÉRALES -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        Informations du transfert
                    </h5>
                    <span class=\"badge ";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "statusBadgeClass", [], "any", false, false, false, 283), "html", null, true);
        yield "\">
                        <i class=\"fas ";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "statusIcon", [], "any", false, false, false, 284), "html", null, true);
        yield " me-1\"></i>
                        ";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "statusLabel", [], "any", false, false, false, 285), "html", null, true);
        yield "
                    </span>
                </div>
                <div class=\"card-body\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-hashtag me-1\"></i> N° transfert
                        </span>
                        <span class=\"info-value\">";
        // line 293
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "transferNumber", [], "any", false, false, false, 293), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-calendar-alt me-1\"></i> Date de création
                        </span>
                        <span class=\"info-value\">";
        // line 299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "createdAt", [], "any", false, false, false, 299), "d/m/Y H:i:s"), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-boxes me-1\"></i> Quantité transférée
                        </span>
                        <span class=\"info-value text-primary\">
                            ";
        // line 306
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "quantity", [], "any", false, false, false, 306), 0, ",", " "), "html", null, true);
        yield " unités
                        </span>
                    </div>
                    ";
        // line 309
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "reason", [], "any", false, false, false, 309)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 310
            yield "                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-comment me-1\"></i> Raison
                        </span>
                        <span class=\"info-value\">";
            // line 314
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "reason", [], "any", false, false, false, 314), "html", null, true);
            yield "</span>
                    </div>
                    ";
        }
        // line 317
        yield "
                    ";
        // line 318
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "receivedBy", [], "any", false, false, false, 318)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 319
            yield "                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-calendar-check me-1\"></i> Date de réception
                        </span>
                        <span class=\"info-value text-success\">
                            ";
            // line 324
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "receivedAt", [], "any", false, false, false, 324), "d/m/Y H:i:s"), "html", null, true);
            yield "
                        </span>
                    </div>
                    ";
        }
        // line 328
        yield "                </div>
            </div>

            <!-- CARTE CRÉÉ PAR (avec avatar) -->
            <div class=\"card border-0 shadow-sm mt-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-user-plus me-2 text-primary\"></i>
                        Créé par
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"user-card\">
                        ";
        // line 341
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "createdBy", [], "any", false, false, false, 341), "photo", [], "any", false, false, false, 341)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 342
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "createdBy", [], "any", false, false, false, 342), "photo", [], "any", false, false, false, 342))), "html", null, true);
            yield "\"
                                 alt=\"";
            // line 343
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "createdBy", [], "any", false, false, false, 343), "fullName", [], "any", false, false, false, 343), "html", null, true);
            yield "\"
                                 class=\"user-avatar-lg\"
                                 onerror=\"this.style.display='none'; this.nextElementSibling.style.display='flex';\">
                            <div class=\"user-avatar-placeholder-lg\" style=\"display: none;\">
                                <i class=\"fas fa-users\"></i>
                            </div>
                        ";
        } else {
            // line 350
            yield "                            <div class=\"user-avatar-placeholder-lg\">
                                <i class=\"fas fa-users\"></i>
                            </div>
                        ";
        }
        // line 354
        yield "                        <div class=\"user-info\">
                            <span class=\"user-name\">";
        // line 355
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "createdBy", [], "any", false, false, false, 355), "fullName", [], "any", false, false, false, 355)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "createdBy", [], "any", false, false, false, 355), "fullName", [], "any", false, false, false, 355), "html", null, true)) : ("Utilisateur"));
        yield "</span>
                            <span class=\"user-email\">";
        // line 356
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "createdBy", [], "any", false, false, false, 356), "email", [], "any", false, false, false, 356), "html", null, true);
        yield "</span>
                            ";
        // line 357
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "createdBy", [], "any", false, true, false, 357), "roleLabel", [], "any", true, true, false, 357)) {
            // line 358
            yield "                                <span class=\"user-role-badge\">
                                    <i class=\"fas fa-id-badge me-1\"></i>";
            // line 359
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "createdBy", [], "any", false, false, false, 359), "roleLabel", [], "any", false, false, false, 359), "html", null, true);
            yield "
                                </span>
                            ";
        }
        // line 362
        yield "                        </div>
                    </div>
                </div>
            </div>

            <!-- CARTE RÉCEPTIONNÉ PAR (avec avatar, si présent) -->
            ";
        // line 368
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "receivedBy", [], "any", false, false, false, 368)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 369
            yield "            <div class=\"card border-0 shadow-sm mt-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-user-check me-2 text-success\"></i>
                        Réceptionné par
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"user-card\">
                        ";
            // line 378
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "receivedBy", [], "any", false, false, false, 378), "photo", [], "any", false, false, false, 378)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 379
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "receivedBy", [], "any", false, false, false, 379), "photo", [], "any", false, false, false, 379))), "html", null, true);
                yield "\"
                                 alt=\"";
                // line 380
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "receivedBy", [], "any", false, false, false, 380), "fullName", [], "any", false, false, false, 380), "html", null, true);
                yield "\"
                                 class=\"user-avatar-lg\"
                                 onerror=\"this.style.display='none'; this.nextElementSibling.style.display='flex';\">
                            <div class=\"user-avatar-placeholder-lg\" style=\"display: none;\">
                                <i class=\"fas fa-users\"></i>
                            </div>
                        ";
            } else {
                // line 387
                yield "                            <div class=\"user-avatar-placeholder-lg\">
                                <i class=\"fas fa-users\"></i>
                            </div>
                        ";
            }
            // line 391
            yield "                        <div class=\"user-info\">
                            <span class=\"user-name\">";
            // line 392
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "receivedBy", [], "any", false, false, false, 392), "fullName", [], "any", false, false, false, 392)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "receivedBy", [], "any", false, false, false, 392), "fullName", [], "any", false, false, false, 392), "html", null, true)) : ("Utilisateur"));
            yield "</span>
                            <span class=\"user-email\">";
            // line 393
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "receivedBy", [], "any", false, false, false, 393), "email", [], "any", false, false, false, 393), "html", null, true);
            yield "</span>
                            ";
            // line 394
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "receivedBy", [], "any", false, true, false, 394), "roleLabel", [], "any", true, true, false, 394)) {
                // line 395
                yield "                                <span class=\"user-role-badge\">
                                    <i class=\"fas fa-id-badge me-1\"></i>";
                // line 396
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "receivedBy", [], "any", false, false, false, 396), "roleLabel", [], "any", false, false, false, 396), "html", null, true);
                yield "
                                </span>
                            ";
            }
            // line 399
            yield "                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        // line 404
        yield "
            <!-- CARTE TRAJET -->
            <div class=\"card border-0 shadow-sm mt-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-route me-2 text-primary\"></i>
                        Trajet du transfert
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"route-display\">
                        <div class=\"route-point from\">
                            <div class=\"point-icon\">
                                <i class=\"fas fa-warehouse\"></i>
                            </div>
                            <div class=\"point-label\">De</div>
                            <div class=\"point-name\">
                                ";
        // line 421
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "sourceLocation", [], "any", false, false, false, 421)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "sourceLocation", [], "any", false, false, false, 421), "displayName", [], "any", false, false, false, 421), "html", null, true)) : ("Non défini"));
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
        // line 433
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "destinationLocation", [], "any", false, false, false, 433), "displayName", [], "any", false, false, false, 433), "html", null, true);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARTE LOT ET PRODUIT -->
            <div class=\"card border-0 shadow-sm mt-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-boxes me-2 text-primary\"></i>
                        Lot concerné
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-barcode me-1\"></i> N° lot
                        </span>
                        <span class=\"info-value\">
                            <code>";
        // line 454
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "stockBatch", [], "any", false, false, false, 454), "batchNumber", [], "any", false, false, false, 454), "html", null, true);
        yield "</code>
                        </span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-box me-1\"></i> Produit
                        </span>
                        <span class=\"info-value\">";
        // line 461
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "stockBatch", [], "any", false, false, false, 461), "product", [], "any", false, false, false, 461), "name", [], "any", false, false, false, 461), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-barcode me-1\"></i> Code-barres
                        </span>
                        <span class=\"info-value\">";
        // line 467
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "stockBatch", [], "any", false, false, false, 467), "product", [], "any", false, false, false, 467), "barcode", [], "any", false, false, false, 467), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-tag me-1\"></i> Prix unitaire
                        </span>
                        <span class=\"info-value\">
                            ";
        // line 474
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "stockBatch", [], "any", false, false, false, 474), "unitPrice", [], "any", false, false, false, 474), CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "hmaService", [], "any", false, false, false, 474)), "html", null, true);
        yield "
                        </span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-coins me-1\"></i> Valeur totale
                        </span>
                        <span class=\"info-value text-primary\">
                            ";
        // line 482
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "quantity", [], "any", false, false, false, 482) * CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "stockBatch", [], "any", false, false, false, 482), "unitPrice", [], "any", false, false, false, 482)), CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "hmaService", [], "any", false, false, false, 482)), "html", null, true);
        yield "
                        </span>
                    </div>
                    ";
        // line 485
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "stockBatch", [], "any", false, false, false, 485), "expiryDate", [], "any", false, false, false, 485)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 486
            yield "                    <div class=\"info-row\">
                        <span class=\"info-label\">
                            <i class=\"fas fa-calendar-times me-1\"></i> Expiration
                        </span>
                        <span class=\"info-value\">
                            ";
            // line 491
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transfer"] ?? null), "stockBatch", [], "any", false, false, false, 491), "expiryDate", [], "any", false, false, false, 491), "d/m/Y"), "html", null, true);
            yield "
                        </span>
                    </div>
                    ";
        }
        // line 495
        yield "                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL CONFIRMATION DÉPART -->
<div class=\"modal fade\" id=\"startTransferModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-success text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-truck me-2\"></i> Confirmer le départ
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Êtes-vous sûr de vouloir expédier le transfert <strong id=\"startTransferNumber\">—</strong> ?</p>
                <div class=\"alert alert-warning mb-0\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Le stock sera <strong>déduit</strong> de l'emplacement source.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-1\"></i> Annuler
                </button>
                <form id=\"startTransferForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"startTransferToken\" value=\"\">
                    <button type=\"submit\" class=\"btn btn-success\">
                        <i class=\"fas fa-check me-1\"></i> Confirmer le départ
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- MODAL CONFIRMATION ANNULATION -->
<div class=\"modal fade\" id=\"cancelTransferModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-ban me-2\"></i> Annuler le transfert
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form method=\"post\" id=\"cancelTransferForm\">
                <div class=\"modal-body\">
                    <p>Annuler le transfert <strong id=\"cancelTransferNumber\">—</strong> ?</p>
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-bold\">Raison de l'annulation</label>
                        <textarea name=\"reason\" class=\"form-control\" rows=\"3\" required placeholder=\"Expliquez pourquoi vous annulez ce transfert...\"></textarea>
                    </div>
                    <div class=\"alert alert-warning mb-0\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        Cette action est <strong>irréversible</strong>.
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <input type=\"hidden\" name=\"_token\" id=\"cancelTransferToken\" value=\"\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                        <i class=\"fas fa-arrow-left me-1\"></i> Retour
                    </button>
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fas fa-ban me-1\"></i> Confirmer l'annulation
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 570
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 571
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {

    // ============================================
    // MODAL EXPÉDITION
    // ============================================
    const startModalEl = document.getElementById('startTransferModal');
    const startModal = new bootstrap.Modal(startModalEl);
    const startTransferNumber = document.getElementById('startTransferNumber');
    const startTransferForm = document.getElementById('startTransferForm');
    const startTransferToken = document.getElementById('startTransferToken');

    document.querySelectorAll('.start-transfer-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.id;
            const number = this.dataset.number;
            const token = this.dataset.token;

            startTransferNumber.textContent = number;
            startTransferForm.action = '/stock/transfer/' + id + '/start';
            startTransferToken.value = token;

            startModal.show();
        });
    });

    // ============================================
    // MODAL ANNULATION
    // ============================================
    const cancelModalEl = document.getElementById('cancelTransferModal');
    const cancelModal = new bootstrap.Modal(cancelModalEl);
    const cancelTransferNumber = document.getElementById('cancelTransferNumber');
    const cancelTransferForm = document.getElementById('cancelTransferForm');
    const cancelTransferToken = document.getElementById('cancelTransferToken');

    document.querySelectorAll('.cancel-transfer-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.id;
            const number = this.dataset.number;
            const token = this.dataset.token;

            cancelTransferNumber.textContent = number;
            cancelTransferForm.action = '/stock/transfer/' + id + '/cancel';
            cancelTransferToken.value = token;

            cancelModal.show();
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
        return "stock/transfer/show.html.twig";
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
        return array (  821 => 571,  814 => 570,  736 => 495,  729 => 491,  722 => 486,  720 => 485,  714 => 482,  703 => 474,  693 => 467,  684 => 461,  674 => 454,  650 => 433,  635 => 421,  616 => 404,  609 => 399,  603 => 396,  600 => 395,  598 => 394,  594 => 393,  590 => 392,  587 => 391,  581 => 387,  571 => 380,  566 => 379,  564 => 378,  553 => 369,  551 => 368,  543 => 362,  537 => 359,  534 => 358,  532 => 357,  528 => 356,  524 => 355,  521 => 354,  515 => 350,  505 => 343,  500 => 342,  498 => 341,  483 => 328,  476 => 324,  469 => 319,  467 => 318,  464 => 317,  458 => 314,  452 => 310,  450 => 309,  444 => 306,  434 => 299,  425 => 293,  414 => 285,  410 => 284,  406 => 283,  390 => 270,  387 => 269,  380 => 265,  376 => 264,  372 => 263,  368 => 261,  366 => 260,  363 => 259,  354 => 254,  352 => 253,  346 => 250,  342 => 249,  338 => 248,  334 => 246,  332 => 245,  320 => 236,  313 => 232,  305 => 227,  293 => 217,  286 => 216,  73 => 7,  66 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "stock/transfer/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\transfer\\show.html.twig");
    }
}
