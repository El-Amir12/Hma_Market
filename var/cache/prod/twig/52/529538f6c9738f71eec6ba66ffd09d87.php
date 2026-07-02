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

/* company/analysis/show.html.twig */
class __TwigTemplate_a78cacebbce64a85cc5c016479208d82 extends Template
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
        yield "Analyse ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "requestNumber", [], "any", false, false, false, 4), "html", null, true);
        yield " - HMA Market";
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
    .info-card {
        background: white;
        border-radius: 1rem;
        padding: 1rem;
        margin-bottom: 1rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }
    .info-card:hover {
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .status-badge {
        font-size: 0.85rem;
        padding: 0.5rem 1rem;
        border-radius: 2rem;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }
    .payment-card {
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        border-radius: 1rem;
        padding: 1rem;
        margin-top: 1rem;
    }
    .payment-detail {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.5rem 0;
        border-bottom: 1px solid #e2e8f0;
    }
    .payment-detail:last-child {
        border-bottom: none;
    }
    .payment-label {
        font-size: 0.8rem;
        color: #64748b;
    }
    .payment-value {
        font-weight: 600;
        font-size: 0.9rem;
    }
    .download-section {
        text-align: center;
    }
    .download-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
    }
    .btn-download {
        padding: 0.75rem 1rem;
        font-weight: 600;
        border-radius: 0.75rem;
        transition: all 0.3s ease;
    }
    .btn-download:hover {
        transform: translateY(-2px);
    }
    .alert-custom {
        border-radius: 0.75rem;
        padding: 0.75rem 1rem;
    }
    .progress-custom {
        height: 8px;
        border-radius: 4px;
    }
    .progress-custom .progress-bar {
        border-radius: 4px;
    }
    
    /* Cartes avec fond coloré */
    .card-primary {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%);
        color: white;
    }
    .card-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
    }
    .card-warning {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        color: white;
    }
    .card-info {
        background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%);
        color: white;
    }
    .card-danger {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        color: white;
    }
    .card-purple {
        background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
        color: white;
    }
    .card-secondary {
        background: linear-gradient(135deg, #64748b 0%, #475569 100%);
        color: white;
    }
    
    .card-primary .text-muted,
    .card-success .text-muted,
    .card-warning .text-muted,
    .card-info .text-muted,
    .card-danger .text-muted,
    .card-purple .text-muted,
    .card-secondary .text-muted {
        color: rgba(255,255,255,0.8) !important;
    }
    
    .card-primary .rounded-circle,
    .card-success .rounded-circle,
    .card-warning .rounded-circle,
    .card-info .rounded-circle,
    .card-danger .rounded-circle,
    .card-purple .rounded-circle,
    .card-secondary .rounded-circle {
        background: rgba(255,255,255,0.2) !important;
    }
    
    .card-primary .rounded-circle i,
    .card-success .rounded-circle i,
    .card-warning .rounded-circle i,
    .card-info .rounded-circle i,
    .card-danger .rounded-circle i,
    .card-purple .rounded-circle i,
    .card-secondary .rounded-circle i {
        color: white !important;
    }
    
    /* Badge personnalisé pour les cartes colorées */
    .card-primary .badge.bg-white,
    .card-success .badge.bg-white,
    .card-warning .badge.bg-white,
    .card-info .badge.bg-white,
    .card-danger .badge.bg-white,
    .card-purple .badge.bg-white,
    .card-secondary .badge.bg-white {
        background: rgba(255,255,255,0.2) !important;
        color: white !important;
    }
</style>
";
        yield from [];
    }

    // line 159
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 160
        yield "<div class=\"container-fluid px-4 py-3\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 167
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 172
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-chart-line me-1\"></i> Analyses
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "requestNumber", [], "any", false, false, false, 176), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-chart-line me-2 text-primary\"></i>
                Détail de l'analyse
            </h1>
        </div>
        <div>
            <a href=\"";
        // line 185
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <!-- Deux colonnes principales -->
    <div class=\"row g-4\">
        <!-- Colonne gauche - Informations de paiement -->
        <div class=\"col-lg-6\">
            <div class=\"card border-0 shadow-sm h-100\">
                <div class=\"card-header bg-white py-3 border-0\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-credit-card me-2 text-primary\"></i>
                        Informations de paiement
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 203
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "paidAt", [], "any", false, false, false, 203)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 204
            yield "                        <div class=\"payment-card\">
                            <div class=\"payment-detail\">
                                <span class=\"payment-label\">
                                    <i class=\"fas fa-hashtag me-1\"></i> ID Transaction
                                </span>
                                <span class=\"payment-value text-primary\">";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "paymentTransactionId", [], "any", true, true, false, 209)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "paymentTransactionId", [], "any", false, false, false, 209), "---")) : ("---")), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"payment-detail\">
                                <span class=\"payment-label\">
                                    <i class=\"fas fa-calendar-check me-1\"></i> Date de paiement
                                </span>
                                <span class=\"payment-value\">";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "paidAt", [], "any", false, false, false, 215), "d/m/Y H:i:s"), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"payment-detail\">
                                <span class=\"payment-label\">
                                    <i class=\"fas fa-money-bill-wave me-1\"></i> Montant payé
                                </span>
                                <span class=\"payment-value fw-bold text-success\">";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "amountFormatted", [], "any", false, false, false, 221), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"payment-detail\">
                                <span class=\"payment-label\">
                                    <i class=\"fas fa-check-circle me-1\"></i> Statut
                                </span>
                                <span class=\"payment-value\">
                                    <span class=\"badge bg-success\">Payé</span>
                                </span>
                            </div>
                            <!-- Dans la section Informations de paiement, remplacez la ligne du mode de paiement -->

                            <div class=\"payment-detail\">
                                <span class=\"payment-label\">
                                    <i class=\"fas fa-credit-card me-1\"></i> Mode de paiement
                                </span>
                                <span class=\"payment-value\">
                                    ";
            // line 238
            if ((($tmp = ($context["payment_method"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 239
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["payment_method"] ?? null), "html", null, true);
                yield "
                                    ";
            } else {
                // line 241
                yield "                                        ";
                $context["payment"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["payments"] ?? null));
                // line 242
                yield "                                        ";
                if (((($context["payment"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paymentData", [], "any", false, false, false, 242)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paymentData", [], "any", false, true, false, 242), "mode", [], "any", true, true, false, 242))) {
                    // line 243
                    yield "                                            ";
                    $context["mode"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paymentData", [], "any", false, false, false, 243), "mode", [], "any", false, false, false, 243);
                    // line 244
                    yield "                                            ";
                    if (CoreExtension::inFilter("momo", ($context["mode"] ?? null))) {
                        // line 245
                        yield "                                                Mobile Money
                                            ";
                    } elseif (CoreExtension::inFilter("card",                     // line 246
($context["mode"] ?? null))) {
                        // line 247
                        yield "                                                Carte bancaire
                                            ";
                    } elseif (CoreExtension::inFilter("wave",                     // line 248
($context["mode"] ?? null))) {
                        // line 249
                        yield "                                                Wave
                                            ";
                    } else {
                        // line 251
                        yield "                                                ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(($context["mode"] ?? null), ["_test" => ""])), "html", null, true);
                        yield "
                                            ";
                    }
                    // line 253
                    yield "                                        ";
                } else {
                    // line 254
                    yield "                                            Carte bancaire / Mobile Money
                                        ";
                }
                // line 256
                yield "                                    ";
            }
            // line 257
            yield "                                </span>
                            </div>
                        </div>
                    ";
        } else {
            // line 261
            yield "                        <div class=\"text-center py-4\">
                            <div class=\"rounded-circle bg-secondary bg-opacity-10 p-3 d-inline-flex mb-3\">
                                <i class=\"fas fa-hourglass-half fa-2x text-secondary\"></i>
                            </div>
                            <p class=\"mb-0 text-muted\">Paiement en attente</p>
                            <small class=\"text-muted\">Le paiement n'a pas encore été effectué.</small>
                        </div>
                    ";
        }
        // line 269
        yield "
                    <div class=\"mt-3 pt-2 border-top\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <span class=\"text-muted small\">Sous-total</span>
                            <span class=\"fw-bold\">
                                ";
        // line 274
        $context["total"] = $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "amount", [], "any", false, false, false, 274), 0, ",", " ");
        // line 275
        yield "                                ";
        $context["subtotal"] = $this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "amount", [], "any", false, false, false, 275) - ($context["tax_amount"] ?? null)), 0, ",", " ");
        // line 276
        yield "                                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subtotal"] ?? null), "html", null, true);
        yield " FCFA
                            </span>
                        </div>
                        
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <span class=\"text-muted small\">
                                Frais / Taxes 
                                ";
        // line 283
        if ((($context["tax_rate"] ?? null) > 0)) {
            // line 284
            yield "                                    (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tax_rate"] ?? null), "html", null, true);
            yield "%)
                                ";
        } else {
            // line 286
            yield "                                    (frais transaction)
                                ";
        }
        // line 288
        yield "                            </span>
                            <span class=\"fw-bold\">";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["tax_amount"] ?? null), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
                        </div>
                        
                        <div class=\"d-flex justify-content-between align-items-center pt-2 border-top\">
                            <span class=\"fw-bold\">Total</span>
                            <span class=\"fw-bold fs-5 text-primary\">";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "amountFormatted", [], "any", false, false, false, 294), "html", null, true);
        yield "</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite - Téléchargement -->
        <div class=\"col-lg-6\">
            <div class=\"card border-0 shadow-sm h-100\">
                <div class=\"card-header bg-white py-3 border-0\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-download me-2 text-primary\"></i>
                        Téléchargement
                    </h5>
                </div>
                <div class=\"card-body download-section\">
                    
                    ";
        // line 313
        yield "                    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "status", [], "any", false, false, false, 313) == "completed") && CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "finalReportPath", [], "any", false, false, false, 313))) {
            // line 314
            yield "                        <div class=\"download-icon bg-success bg-opacity-10\">
                            <i class=\"fas fa-file-alt fa-3x text-success\"></i>
                        </div>
                        <h5 class=\"fw-bold mb-2\">Votre rapport est prêt !</h5>
                        <small class=\"text-muted d-block mb-3\">
                            <i class=\"fas fa-file-";
            // line 319
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "finalReportType", [], "any", false, false, false, 319) == "excel")) ? ("excel") : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "finalReportType", [], "any", false, false, false, 319) == "powerbi")) ? ("chart-pie") : ("alt"))));
            yield " me-1\"></i>
                            ";
            // line 320
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "finalReportType", [], "any", false, false, false, 320)), "html", null, true);
            yield "
                            • ";
            // line 321
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "finalReportUploadedAt", [], "any", false, false, false, 321), "d/m/Y H:i"), "html", null, true);
            yield "
                        </small>
                        
                        <a href=\"";
            // line 324
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_download_final", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "id", [], "any", false, false, false, 324)]), "html", null, true);
            yield "\" class=\"btn btn-success btn-download w-100 mb-3\">
                            <i class=\"fas fa-download me-2\"></i> Télécharger le rapport
                        </a>
                        
                        ";
            // line 328
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "rawExportPath", [], "any", false, false, false, 328)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 329
                yield "                            <hr class=\"my-3\">
                            <small class=\"text-muted d-block mb-2\">📁 Données brutes (optionnel)</small>
                            <a href=\"";
                // line 331
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_download_raw", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "id", [], "any", false, false, false, 331)]), "html", null, true);
                yield "\" class=\"btn btn-outline-secondary w-100\">
                                <i class=\"fas fa-database me-1\"></i> Télécharger les données brutes
                            </a>
                        ";
            }
            // line 335
            yield "                    
                    ";
            // line 337
            yield "                    ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "status", [], "any", false, false, false, 337) == "processing") && CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "rawExportPath", [], "any", false, false, false, 337))) {
            // line 338
            yield "                        <div class=\"download-icon bg-info bg-opacity-10\">
                            <i class=\"fas fa-database fa-3x text-info\"></i>
                        </div>
                        <h5 class=\"fw-bold mb-2\">Données brutes disponibles</h5>
                        <small class=\"text-muted d-block mb-3\">
                            Exporté le ";
            // line 343
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "rawExportedAt", [], "any", false, false, false, 343), "d/m/Y H:i"), "html", null, true);
            yield "
                        </small>
                        
                        <a href=\"";
            // line 346
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_download_raw", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "id", [], "any", false, false, false, 346)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-download w-100 mb-3\">
                            <i class=\"fas fa-download me-2\"></i> Télécharger les données brutes
                        </a>
                        
                        <div class=\"alert alert-info alert-custom small mt-3\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            Notre expert analyse vos données pour préparer votre rapport personnalisé.
                        </div>
                    
                    ";
            // line 356
            yield "                    ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "status", [], "any", false, false, false, 356) == "processing") &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "rawExportPath", [], "any", false, false, false, 356))) {
            // line 357
            yield "                        <div class=\"download-icon bg-primary bg-opacity-10\">
                            <i class=\"fas fa-spinner fa-pulse fa-3x text-primary\"></i>
                        </div>
                        <h5 class=\"fw-bold mb-2\">Préparation en cours...</h5>
                        <small class=\"text-muted d-block mb-3\">Génération des données</small>
                        
                        <div class=\"progress progress-custom mb-3\">
                            <div class=\"progress-bar progress-bar-striped progress-bar-animated bg-primary\" style=\"width: 100%\"></div>
                        </div>
                        
                        <div class=\"alert alert-warning alert-custom small\">
                            <i class=\"fas fa-hourglass-half me-2\"></i>
                            Cette page se rafraîchira automatiquement une fois les données prêtes.
                        </div>
                    
                    ";
            // line 373
            yield "                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "status", [], "any", false, false, false, 373) == "pending")) {
            // line 374
            yield "                        <div class=\"download-icon bg-warning bg-opacity-10\">
                            <i class=\"fas fa-clock fa-3x text-warning\"></i>
                        </div>
                        <h5 class=\"fw-bold mb-2\">En attente de validation</h5>
                        <small class=\"text-muted d-block mb-3\">Paiement en attente</small>
                        
                        <div class=\"alert alert-warning alert-custom small\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            Notre équipe vous contactera pour finaliser la commande.
                        </div>
                    
                    ";
            // line 386
            yield "                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "status", [], "any", false, false, false, 386) == "paid")) {
            // line 387
            yield "                        <div class=\"download-icon bg-success bg-opacity-10\">
                            <i class=\"fas fa-credit-card fa-3x text-success\"></i>
                        </div>
                        <h5 class=\"fw-bold mb-2\">Paiement confirmé !</h5>
                        <small class=\"text-muted d-block mb-3\">Transaction #";
            // line 391
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "paymentTransactionId", [], "any", true, true, false, 391)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "paymentTransactionId", [], "any", false, false, false, 391), "---")) : ("---")), "html", null, true);
            yield "</small>
                        
                        <div class=\"alert alert-info alert-custom small\">
                            <i class=\"fas fa-rocket me-2\"></i>
                            L'analyse va commencer prochainement.
                        </div>
                    
                    ";
            // line 399
            yield "                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "status", [], "any", false, false, false, 399) == "failed")) {
            // line 400
            yield "                        <div class=\"download-icon bg-danger bg-opacity-10\">
                            <i class=\"fas fa-exclamation-triangle fa-3x text-danger\"></i>
                        </div>
                        <h5 class=\"fw-bold mb-2\">Une erreur est survenue</h5>
                        <small class=\"text-muted d-block mb-3\">Veuillez contacter le support</small>
                        
                        <div class=\"alert alert-danger alert-custom small\">
                            <i class=\"fas fa-headset me-2\"></i>
                            Contactez notre support technique pour résoudre le problème.
                        </div>
                    ";
        }
        // line 411
        yield "                    
                </div>
            </div>
        </div>
    </div>

    <!-- Ligne suivante - Informations générales (pleine largeur) -->
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3 border-0\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        Informations générales
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <!-- N° Demande -->
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"info-card card-secondary\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <small class=\"text-muted text-uppercase fw-semibold\">N° Demande</small>
                                        <div class=\"fw-bold fs-5 mt-1\">";
        // line 435
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "requestNumber", [], "any", false, false, false, 435), "html", null, true);
        yield "</div>
                                    </div>
                                    <div class=\"rounded-circle p-3\">
                                        <i class=\"fas fa-hashtag\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Date de création -->
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"info-card card-info\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <small class=\"text-muted text-uppercase fw-semibold\">Date de création</small>
                                        <div class=\"fw-bold mt-1\">";
        // line 450
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "createdAt", [], "any", false, false, false, 450), "d/m/Y H:i:s"), "html", null, true);
        yield "</div>
                                    </div>
                                    <div class=\"rounded-circle p-3\">
                                        <i class=\"fas fa-calendar-alt\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Type d'analyse -->
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"info-card card-primary\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <small class=\"text-muted text-uppercase fw-semibold\">Type d'analyse</small>
                                        <div class=\"fw-bold mt-1\">";
        // line 465
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "typeLabel", [], "any", false, false, false, 465), "html", null, true);
        yield "</div>
                                    </div>
                                    <div class=\"rounded-circle p-3\">
                                        <i class=\"fas fa-chart-line\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Montant -->
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"info-card card-warning\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <small class=\"text-muted text-uppercase fw-semibold\">Montant</small>
                                        <div class=\"fw-bold fs-5 mt-1\">";
        // line 480
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "amountFormatted", [], "any", false, false, false, 480), "html", null, true);
        yield "</div>
                                    </div>
                                    <div class=\"rounded-circle p-3\">
                                        <i class=\"fas fa-money-bill-wave\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Statut -->
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"info-card 
                                ";
        // line 492
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "status", [], "any", false, false, false, 492) == "completed")) {
            yield "card-success
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 493
($context["analysis"] ?? null), "status", [], "any", false, false, false, 493) == "processing")) {
            yield "card-info
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 494
($context["analysis"] ?? null), "status", [], "any", false, false, false, 494) == "pending")) {
            yield "card-warning
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 495
($context["analysis"] ?? null), "status", [], "any", false, false, false, 495) == "paid")) {
            yield "card-primary
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 496
($context["analysis"] ?? null), "status", [], "any", false, false, false, 496) == "failed")) {
            yield "card-danger
                                ";
        } else {
            // line 497
            yield "card-secondary";
        }
        yield "\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <small class=\"text-muted text-uppercase fw-semibold\">Statut</small>
                                        <div class=\"mt-1\">
                                            <span class=\"badge bg-white\">
                                                <i class=\"fas ";
        // line 503
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "status", [], "any", false, false, false, 503) == "completed")) ? ("fa-check-circle") : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "status", [], "any", false, false, false, 503) == "pending")) ? ("fa-clock") : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "status", [], "any", false, false, false, 503) == "processing")) ? ("fa-spinner fa-pulse") : ("fa-times-circle"))))));
        yield " me-1\"></i>
                                                ";
        // line 504
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "statusLabel", [], "any", false, false, false, 504), "html", null, true);
        yield "
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"rounded-circle p-3\">
                                        <i class=\"fas fa-tasks\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Période analysée -->
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"info-card card-purple\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <small class=\"text-muted text-uppercase fw-semibold\">Période analysée</small>
                                        <div class=\"fw-bold mt-1\">";
        // line 521
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "periodStart", [], "any", false, false, false, 521), "d/m/Y"), "html", null, true);
        yield " au ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "periodEnd", [], "any", false, false, false, 521), "d/m/Y"), "html", null, true);
        yield "</div>
                                    </div>
                                    <div class=\"rounded-circle p-3\">
                                        <i class=\"fas fa-calendar-week\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        ";
        // line 530
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "notes", [], "any", false, false, false, 530)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 531
            yield "                        <div class=\"col-12\">
                            <div class=\"info-card card-secondary\">
                                <div class=\"d-flex align-items-start gap-3\">
                                    <div class=\"rounded-circle p-3\">
                                        <i class=\"fas fa-sticky-note\"></i>
                                    </div>
                                    <div>
                                        <small class=\"text-muted text-uppercase fw-semibold\">Notes</small>
                                        <div class=\"mt-1\">";
            // line 539
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "notes", [], "any", false, false, false, 539), "html", null, true));
            yield "</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 545
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 553
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 554
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Rafraîchissement automatique UNIQUEMENT pendant la génération des données brutes
    ";
        // line 558
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "status", [], "any", false, false, false, 558) == "processing") &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "rawExportPath", [], "any", false, false, false, 558))) {
            // line 559
            yield "        console.log('⏳ Génération des données en cours, rechargement dans 10s...');
        setTimeout(function() {
           m location.reload();
        }, 10000);
    ";
        }
        // line 564
        yield "    
    // Pas de rechargement si les données brutes sont déjà disponibles
    ";
        // line 566
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "status", [], "any", false, false, false, 566) == "processing") && CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "rawExportPath", [], "any", false, false, false, 566))) {
            // line 567
            yield "        console.log('✅ Données brutes disponibles, pas de rechargement automatique');
    ";
        }
        // line 569
        yield "});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "company/analysis/show.html.twig";
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
        return array (  849 => 569,  845 => 567,  843 => 566,  839 => 564,  832 => 559,  830 => 558,  823 => 554,  816 => 553,  805 => 545,  796 => 539,  786 => 531,  784 => 530,  770 => 521,  750 => 504,  746 => 503,  736 => 497,  731 => 496,  727 => 495,  723 => 494,  719 => 493,  715 => 492,  700 => 480,  682 => 465,  664 => 450,  646 => 435,  620 => 411,  607 => 400,  604 => 399,  594 => 391,  588 => 387,  585 => 386,  572 => 374,  569 => 373,  552 => 357,  549 => 356,  537 => 346,  531 => 343,  524 => 338,  521 => 337,  518 => 335,  511 => 331,  507 => 329,  505 => 328,  498 => 324,  492 => 321,  488 => 320,  484 => 319,  477 => 314,  474 => 313,  453 => 294,  445 => 289,  442 => 288,  438 => 286,  432 => 284,  430 => 283,  419 => 276,  416 => 275,  414 => 274,  407 => 269,  397 => 261,  391 => 257,  388 => 256,  384 => 254,  381 => 253,  375 => 251,  371 => 249,  369 => 248,  366 => 247,  364 => 246,  361 => 245,  358 => 244,  355 => 243,  352 => 242,  349 => 241,  343 => 239,  341 => 238,  321 => 221,  312 => 215,  303 => 209,  296 => 204,  294 => 203,  273 => 185,  261 => 176,  254 => 172,  246 => 167,  237 => 160,  230 => 159,  74 => 7,  67 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "company/analysis/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\company\\analysis\\show.html.twig");
    }
}
