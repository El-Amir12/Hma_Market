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
class __TwigTemplate_56f8bc76895f5c422198c6d199964e3b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/analysis/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/analysis/show.html.twig"));

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

        yield "Analyse ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 4, $this->source); })()), "requestNumber", [], "any", false, false, false, 4), "html", null, true);
        yield " - HMA Market";
        
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 159
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 176, $this->source); })()), "requestNumber", [], "any", false, false, false, 176), "html", null, true);
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 203, $this->source); })()), "paidAt", [], "any", false, false, false, 203)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 204
            yield "                        <div class=\"payment-card\">
                            <div class=\"payment-detail\">
                                <span class=\"payment-label\">
                                    <i class=\"fas fa-hashtag me-1\"></i> ID Transaction
                                </span>
                                <span class=\"payment-value text-primary\">";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "paymentTransactionId", [], "any", true, true, false, 209)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 209, $this->source); })()), "paymentTransactionId", [], "any", false, false, false, 209), "---")) : ("---")), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"payment-detail\">
                                <span class=\"payment-label\">
                                    <i class=\"fas fa-calendar-check me-1\"></i> Date de paiement
                                </span>
                                <span class=\"payment-value\">";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 215, $this->source); })()), "paidAt", [], "any", false, false, false, 215), "d/m/Y H:i:s"), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"payment-detail\">
                                <span class=\"payment-label\">
                                    <i class=\"fas fa-money-bill-wave me-1\"></i> Montant payé
                                </span>
                                <span class=\"payment-value fw-bold text-success\">";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 221, $this->source); })()), "amountFormatted", [], "any", false, false, false, 221), "html", null, true);
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
                            <div class=\"payment-detail\">
                                <span class=\"payment-label\">
                                    <i class=\"fas fa-credit-card me-1\"></i> Mode de paiement
                                </span>
                                <span class=\"payment-value\">Carte bancaire / Mobile Money</span>
                            </div>
                        </div>
                    ";
        } else {
            // line 239
            yield "                        <div class=\"text-center py-4\">
                            <div class=\"rounded-circle bg-secondary bg-opacity-10 p-3 d-inline-flex mb-3\">
                                <i class=\"fas fa-hourglass-half fa-2x text-secondary\"></i>
                            </div>
                            <p class=\"mb-0 text-muted\">Paiement en attente</p>
                            <small class=\"text-muted\">Le paiement n'a pas encore été effectué.</small>
                        </div>
                    ";
        }
        // line 247
        yield "                    
                    <!-- Résumé de la commande -->
                    <div class=\"mt-3 pt-2 border-top\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <span class=\"text-muted small\">Sous-total</span>
                            <span class=\"fw-bold\">";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 252, $this->source); })()), "amountFormatted", [], "any", false, false, false, 252), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <span class=\"text-muted small\">Taxes (0%)</span>
                            <span class=\"fw-bold\">0 FCFA</span>
                        </div>
                        <div class=\"d-flex justify-content-between align-items-center pt-2 border-top\">
                            <span class=\"fw-bold\">Total</span>
                            <span class=\"fw-bold fs-5 text-primary\">";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 260, $this->source); })()), "amountFormatted", [], "any", false, false, false, 260), "html", null, true);
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
        // line 279
        yield "                    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 279, $this->source); })()), "status", [], "any", false, false, false, 279) == "completed") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 279, $this->source); })()), "finalReportPath", [], "any", false, false, false, 279))) {
            // line 280
            yield "                        <div class=\"download-icon bg-success bg-opacity-10\">
                            <i class=\"fas fa-file-alt fa-3x text-success\"></i>
                        </div>
                        <h5 class=\"fw-bold mb-2\">Votre rapport est prêt !</h5>
                        <small class=\"text-muted d-block mb-3\">
                            <i class=\"fas fa-file-";
            // line 285
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 285, $this->source); })()), "finalReportType", [], "any", false, false, false, 285) == "excel")) ? ("excel") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 285, $this->source); })()), "finalReportType", [], "any", false, false, false, 285) == "powerbi")) ? ("chart-pie") : ("alt"))));
            yield " me-1\"></i>
                            ";
            // line 286
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 286, $this->source); })()), "finalReportType", [], "any", false, false, false, 286)), "html", null, true);
            yield "
                            • ";
            // line 287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 287, $this->source); })()), "finalReportUploadedAt", [], "any", false, false, false, 287), "d/m/Y H:i"), "html", null, true);
            yield "
                        </small>
                        
                        <a href=\"";
            // line 290
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_download_final", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 290, $this->source); })()), "id", [], "any", false, false, false, 290)]), "html", null, true);
            yield "\" class=\"btn btn-success btn-download w-100 mb-3\">
                            <i class=\"fas fa-download me-2\"></i> Télécharger le rapport
                        </a>
                        
                        ";
            // line 294
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 294, $this->source); })()), "rawExportPath", [], "any", false, false, false, 294)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 295
                yield "                            <hr class=\"my-3\">
                            <small class=\"text-muted d-block mb-2\">📁 Données brutes (optionnel)</small>
                            <a href=\"";
                // line 297
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_download_raw", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 297, $this->source); })()), "id", [], "any", false, false, false, 297)]), "html", null, true);
                yield "\" class=\"btn btn-outline-secondary w-100\">
                                <i class=\"fas fa-database me-1\"></i> Télécharger les données brutes
                            </a>
                        ";
            }
            // line 301
            yield "                    
                    ";
            // line 303
            yield "                    ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 303, $this->source); })()), "status", [], "any", false, false, false, 303) == "processing") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 303, $this->source); })()), "rawExportPath", [], "any", false, false, false, 303))) {
            // line 304
            yield "                        <div class=\"download-icon bg-info bg-opacity-10\">
                            <i class=\"fas fa-database fa-3x text-info\"></i>
                        </div>
                        <h5 class=\"fw-bold mb-2\">Données brutes disponibles</h5>
                        <small class=\"text-muted d-block mb-3\">
                            Exporté le ";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 309, $this->source); })()), "rawExportedAt", [], "any", false, false, false, 309), "d/m/Y H:i"), "html", null, true);
            yield "
                        </small>
                        
                        <a href=\"";
            // line 312
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_download_raw", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 312, $this->source); })()), "id", [], "any", false, false, false, 312)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-download w-100 mb-3\">
                            <i class=\"fas fa-download me-2\"></i> Télécharger les données brutes
                        </a>
                        
                        <div class=\"alert alert-info alert-custom small mt-3\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            Notre expert analyse vos données pour préparer votre rapport personnalisé.
                        </div>
                    
                    ";
            // line 322
            yield "                    ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 322, $this->source); })()), "status", [], "any", false, false, false, 322) == "processing") &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 322, $this->source); })()), "rawExportPath", [], "any", false, false, false, 322))) {
            // line 323
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
            // line 339
            yield "                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 339, $this->source); })()), "status", [], "any", false, false, false, 339) == "pending")) {
            // line 340
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
            // line 352
            yield "                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 352, $this->source); })()), "status", [], "any", false, false, false, 352) == "paid")) {
            // line 353
            yield "                        <div class=\"download-icon bg-success bg-opacity-10\">
                            <i class=\"fas fa-credit-card fa-3x text-success\"></i>
                        </div>
                        <h5 class=\"fw-bold mb-2\">Paiement confirmé !</h5>
                        <small class=\"text-muted d-block mb-3\">Transaction #";
            // line 357
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "paymentTransactionId", [], "any", true, true, false, 357)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 357, $this->source); })()), "paymentTransactionId", [], "any", false, false, false, 357), "---")) : ("---")), "html", null, true);
            yield "</small>
                        
                        <div class=\"alert alert-info alert-custom small\">
                            <i class=\"fas fa-rocket me-2\"></i>
                            L'analyse va commencer prochainement.
                        </div>
                    
                    ";
            // line 365
            yield "                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 365, $this->source); })()), "status", [], "any", false, false, false, 365) == "failed")) {
            // line 366
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
        // line 377
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
        // line 401
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 401, $this->source); })()), "requestNumber", [], "any", false, false, false, 401), "html", null, true);
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
        // line 416
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 416, $this->source); })()), "createdAt", [], "any", false, false, false, 416), "d/m/Y H:i:s"), "html", null, true);
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
        // line 431
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 431, $this->source); })()), "typeLabel", [], "any", false, false, false, 431), "html", null, true);
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
        // line 446
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 446, $this->source); })()), "amountFormatted", [], "any", false, false, false, 446), "html", null, true);
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
        // line 458
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 458, $this->source); })()), "status", [], "any", false, false, false, 458) == "completed")) {
            yield "card-success
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 459
(isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 459, $this->source); })()), "status", [], "any", false, false, false, 459) == "processing")) {
            yield "card-info
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 460
(isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 460, $this->source); })()), "status", [], "any", false, false, false, 460) == "pending")) {
            yield "card-warning
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 461
(isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 461, $this->source); })()), "status", [], "any", false, false, false, 461) == "paid")) {
            yield "card-primary
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 462
(isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 462, $this->source); })()), "status", [], "any", false, false, false, 462) == "failed")) {
            yield "card-danger
                                ";
        } else {
            // line 463
            yield "card-secondary";
        }
        yield "\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <small class=\"text-muted text-uppercase fw-semibold\">Statut</small>
                                        <div class=\"mt-1\">
                                            <span class=\"badge bg-white\">
                                                <i class=\"fas ";
        // line 469
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 469, $this->source); })()), "status", [], "any", false, false, false, 469) == "completed")) ? ("fa-check-circle") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 469, $this->source); })()), "status", [], "any", false, false, false, 469) == "pending")) ? ("fa-clock") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 469, $this->source); })()), "status", [], "any", false, false, false, 469) == "processing")) ? ("fa-spinner fa-pulse") : ("fa-times-circle"))))));
        yield " me-1\"></i>
                                                ";
        // line 470
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 470, $this->source); })()), "statusLabel", [], "any", false, false, false, 470), "html", null, true);
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
        // line 487
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 487, $this->source); })()), "periodStart", [], "any", false, false, false, 487), "d/m/Y"), "html", null, true);
        yield " au ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 487, $this->source); })()), "periodEnd", [], "any", false, false, false, 487), "d/m/Y"), "html", null, true);
        yield "</div>
                                    </div>
                                    <div class=\"rounded-circle p-3\">
                                        <i class=\"fas fa-calendar-week\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        ";
        // line 496
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 496, $this->source); })()), "notes", [], "any", false, false, false, 496)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 497
            yield "                        <div class=\"col-12\">
                            <div class=\"info-card card-secondary\">
                                <div class=\"d-flex align-items-start gap-3\">
                                    <div class=\"rounded-circle p-3\">
                                        <i class=\"fas fa-sticky-note\"></i>
                                    </div>
                                    <div>
                                        <small class=\"text-muted text-uppercase fw-semibold\">Notes</small>
                                        <div class=\"mt-1\">";
            // line 505
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 505, $this->source); })()), "notes", [], "any", false, false, false, 505), "html", null, true));
            yield "</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 511
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 519
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

        // line 520
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Rafraîchissement automatique UNIQUEMENT pendant la génération des données brutes
    ";
        // line 524
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 524, $this->source); })()), "status", [], "any", false, false, false, 524) == "processing") &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 524, $this->source); })()), "rawExportPath", [], "any", false, false, false, 524))) {
            // line 525
            yield "        console.log('⏳ Génération des données en cours, rechargement dans 10s...');
        setTimeout(function() {
            location.reload();
        }, 10000);
    ";
        }
        // line 530
        yield "    
    // Pas de rechargement si les données brutes sont déjà disponibles
    ";
        // line 532
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 532, $this->source); })()), "status", [], "any", false, false, false, 532) == "processing") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 532, $this->source); })()), "rawExportPath", [], "any", false, false, false, 532))) {
            // line 533
            yield "        console.log('✅ Données brutes disponibles, pas de rechargement automatique');
    ";
        }
        // line 535
        yield "});
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
        return array (  820 => 535,  816 => 533,  814 => 532,  810 => 530,  803 => 525,  801 => 524,  794 => 520,  781 => 519,  764 => 511,  755 => 505,  745 => 497,  743 => 496,  729 => 487,  709 => 470,  705 => 469,  695 => 463,  690 => 462,  686 => 461,  682 => 460,  678 => 459,  674 => 458,  659 => 446,  641 => 431,  623 => 416,  605 => 401,  579 => 377,  566 => 366,  563 => 365,  553 => 357,  547 => 353,  544 => 352,  531 => 340,  528 => 339,  511 => 323,  508 => 322,  496 => 312,  490 => 309,  483 => 304,  480 => 303,  477 => 301,  470 => 297,  466 => 295,  464 => 294,  457 => 290,  451 => 287,  447 => 286,  443 => 285,  436 => 280,  433 => 279,  412 => 260,  401 => 252,  394 => 247,  384 => 239,  363 => 221,  354 => 215,  345 => 209,  338 => 204,  336 => 203,  315 => 185,  303 => 176,  296 => 172,  288 => 167,  279 => 160,  266 => 159,  104 => 7,  91 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/company/analysis/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Analyse {{ analysis.requestNumber }} - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
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
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4 py-3\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('company_analysis_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-chart-line me-1\"></i> Analyses
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">{{ analysis.requestNumber }}</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-chart-line me-2 text-primary\"></i>
                Détail de l'analyse
            </h1>
        </div>
        <div>
            <a href=\"{{ path('company_analysis_index') }}\" class=\"btn btn-outline-secondary\">
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
                    {% if analysis.paidAt %}
                        <div class=\"payment-card\">
                            <div class=\"payment-detail\">
                                <span class=\"payment-label\">
                                    <i class=\"fas fa-hashtag me-1\"></i> ID Transaction
                                </span>
                                <span class=\"payment-value text-primary\">{{ analysis.paymentTransactionId|default('---') }}</span>
                            </div>
                            <div class=\"payment-detail\">
                                <span class=\"payment-label\">
                                    <i class=\"fas fa-calendar-check me-1\"></i> Date de paiement
                                </span>
                                <span class=\"payment-value\">{{ analysis.paidAt|date('d/m/Y H:i:s') }}</span>
                            </div>
                            <div class=\"payment-detail\">
                                <span class=\"payment-label\">
                                    <i class=\"fas fa-money-bill-wave me-1\"></i> Montant payé
                                </span>
                                <span class=\"payment-value fw-bold text-success\">{{ analysis.amountFormatted }}</span>
                            </div>
                            <div class=\"payment-detail\">
                                <span class=\"payment-label\">
                                    <i class=\"fas fa-check-circle me-1\"></i> Statut
                                </span>
                                <span class=\"payment-value\">
                                    <span class=\"badge bg-success\">Payé</span>
                                </span>
                            </div>
                            <div class=\"payment-detail\">
                                <span class=\"payment-label\">
                                    <i class=\"fas fa-credit-card me-1\"></i> Mode de paiement
                                </span>
                                <span class=\"payment-value\">Carte bancaire / Mobile Money</span>
                            </div>
                        </div>
                    {% else %}
                        <div class=\"text-center py-4\">
                            <div class=\"rounded-circle bg-secondary bg-opacity-10 p-3 d-inline-flex mb-3\">
                                <i class=\"fas fa-hourglass-half fa-2x text-secondary\"></i>
                            </div>
                            <p class=\"mb-0 text-muted\">Paiement en attente</p>
                            <small class=\"text-muted\">Le paiement n'a pas encore été effectué.</small>
                        </div>
                    {% endif %}
                    
                    <!-- Résumé de la commande -->
                    <div class=\"mt-3 pt-2 border-top\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <span class=\"text-muted small\">Sous-total</span>
                            <span class=\"fw-bold\">{{ analysis.amountFormatted }}</span>
                        </div>
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <span class=\"text-muted small\">Taxes (0%)</span>
                            <span class=\"fw-bold\">0 FCFA</span>
                        </div>
                        <div class=\"d-flex justify-content-between align-items-center pt-2 border-top\">
                            <span class=\"fw-bold\">Total</span>
                            <span class=\"fw-bold fs-5 text-primary\">{{ analysis.amountFormatted }}</span>
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
                    
                    {# === RAPPORT FINAL DISPONIBLE (COMPLETED) === #}
                    {% if analysis.status == 'completed' and analysis.finalReportPath %}
                        <div class=\"download-icon bg-success bg-opacity-10\">
                            <i class=\"fas fa-file-alt fa-3x text-success\"></i>
                        </div>
                        <h5 class=\"fw-bold mb-2\">Votre rapport est prêt !</h5>
                        <small class=\"text-muted d-block mb-3\">
                            <i class=\"fas fa-file-{{ analysis.finalReportType == 'excel' ? 'excel' : (analysis.finalReportType == 'powerbi' ? 'chart-pie' : 'alt') }} me-1\"></i>
                            {{ analysis.finalReportType|upper }}
                            • {{ analysis.finalReportUploadedAt|date('d/m/Y H:i') }}
                        </small>
                        
                        <a href=\"{{ path('company_analysis_download_final', {'id': analysis.id}) }}\" class=\"btn btn-success btn-download w-100 mb-3\">
                            <i class=\"fas fa-download me-2\"></i> Télécharger le rapport
                        </a>
                        
                        {% if analysis.rawExportPath %}
                            <hr class=\"my-3\">
                            <small class=\"text-muted d-block mb-2\">📁 Données brutes (optionnel)</small>
                            <a href=\"{{ path('company_analysis_download_raw', {'id': analysis.id}) }}\" class=\"btn btn-outline-secondary w-100\">
                                <i class=\"fas fa-database me-1\"></i> Télécharger les données brutes
                            </a>
                        {% endif %}
                    
                    {# === DONNÉES BRUTES DISPONIBLES (PROCESSING) === #}
                    {% elseif analysis.status == 'processing' and analysis.rawExportPath %}
                        <div class=\"download-icon bg-info bg-opacity-10\">
                            <i class=\"fas fa-database fa-3x text-info\"></i>
                        </div>
                        <h5 class=\"fw-bold mb-2\">Données brutes disponibles</h5>
                        <small class=\"text-muted d-block mb-3\">
                            Exporté le {{ analysis.rawExportedAt|date('d/m/Y H:i') }}
                        </small>
                        
                        <a href=\"{{ path('company_analysis_download_raw', {'id': analysis.id}) }}\" class=\"btn btn-primary btn-download w-100 mb-3\">
                            <i class=\"fas fa-download me-2\"></i> Télécharger les données brutes
                        </a>
                        
                        <div class=\"alert alert-info alert-custom small mt-3\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            Notre expert analyse vos données pour préparer votre rapport personnalisé.
                        </div>
                    
                    {# === GÉNÉRATION EN COURS === #}
                    {% elseif analysis.status == 'processing' and not analysis.rawExportPath %}
                        <div class=\"download-icon bg-primary bg-opacity-10\">
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
                    
                    {# === EN ATTENTE DE PAIEMENT === #}
                    {% elseif analysis.status == 'pending' %}
                        <div class=\"download-icon bg-warning bg-opacity-10\">
                            <i class=\"fas fa-clock fa-3x text-warning\"></i>
                        </div>
                        <h5 class=\"fw-bold mb-2\">En attente de validation</h5>
                        <small class=\"text-muted d-block mb-3\">Paiement en attente</small>
                        
                        <div class=\"alert alert-warning alert-custom small\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            Notre équipe vous contactera pour finaliser la commande.
                        </div>
                    
                    {# === PAIEMENT CONFIRMÉ === #}
                    {% elseif analysis.status == 'paid' %}
                        <div class=\"download-icon bg-success bg-opacity-10\">
                            <i class=\"fas fa-credit-card fa-3x text-success\"></i>
                        </div>
                        <h5 class=\"fw-bold mb-2\">Paiement confirmé !</h5>
                        <small class=\"text-muted d-block mb-3\">Transaction #{{ analysis.paymentTransactionId|default('---') }}</small>
                        
                        <div class=\"alert alert-info alert-custom small\">
                            <i class=\"fas fa-rocket me-2\"></i>
                            L'analyse va commencer prochainement.
                        </div>
                    
                    {# === ÉCHEC === #}
                    {% elseif analysis.status == 'failed' %}
                        <div class=\"download-icon bg-danger bg-opacity-10\">
                            <i class=\"fas fa-exclamation-triangle fa-3x text-danger\"></i>
                        </div>
                        <h5 class=\"fw-bold mb-2\">Une erreur est survenue</h5>
                        <small class=\"text-muted d-block mb-3\">Veuillez contacter le support</small>
                        
                        <div class=\"alert alert-danger alert-custom small\">
                            <i class=\"fas fa-headset me-2\"></i>
                            Contactez notre support technique pour résoudre le problème.
                        </div>
                    {% endif %}
                    
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
                                        <div class=\"fw-bold fs-5 mt-1\">{{ analysis.requestNumber }}</div>
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
                                        <div class=\"fw-bold mt-1\">{{ analysis.createdAt|date('d/m/Y H:i:s') }}</div>
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
                                        <div class=\"fw-bold mt-1\">{{ analysis.typeLabel }}</div>
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
                                        <div class=\"fw-bold fs-5 mt-1\">{{ analysis.amountFormatted }}</div>
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
                                {% if analysis.status == 'completed' %}card-success
                                {% elseif analysis.status == 'processing' %}card-info
                                {% elseif analysis.status == 'pending' %}card-warning
                                {% elseif analysis.status == 'paid' %}card-primary
                                {% elseif analysis.status == 'failed' %}card-danger
                                {% else %}card-secondary{% endif %}\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <small class=\"text-muted text-uppercase fw-semibold\">Statut</small>
                                        <div class=\"mt-1\">
                                            <span class=\"badge bg-white\">
                                                <i class=\"fas {{ analysis.status == 'completed' ? 'fa-check-circle' : (analysis.status == 'pending' ? 'fa-clock' : (analysis.status == 'processing' ? 'fa-spinner fa-pulse' : 'fa-times-circle')) }} me-1\"></i>
                                                {{ analysis.statusLabel }}
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
                                        <div class=\"fw-bold mt-1\">{{ analysis.periodStart|date('d/m/Y') }} au {{ analysis.periodEnd|date('d/m/Y') }}</div>
                                    </div>
                                    <div class=\"rounded-circle p-3\">
                                        <i class=\"fas fa-calendar-week\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        {% if analysis.notes %}
                        <div class=\"col-12\">
                            <div class=\"info-card card-secondary\">
                                <div class=\"d-flex align-items-start gap-3\">
                                    <div class=\"rounded-circle p-3\">
                                        <i class=\"fas fa-sticky-note\"></i>
                                    </div>
                                    <div>
                                        <small class=\"text-muted text-uppercase fw-semibold\">Notes</small>
                                        <div class=\"mt-1\">{{ analysis.notes|nl2br }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Rafraîchissement automatique UNIQUEMENT pendant la génération des données brutes
    {% if analysis.status == 'processing' and not analysis.rawExportPath %}
        console.log('⏳ Génération des données en cours, rechargement dans 10s...');
        setTimeout(function() {
            location.reload();
        }, 10000);
    {% endif %}
    
    // Pas de rechargement si les données brutes sont déjà disponibles
    {% if analysis.status == 'processing' and analysis.rawExportPath %}
        console.log('✅ Données brutes disponibles, pas de rechargement automatique');
    {% endif %}
});
</script>
{% endblock %}", "company/analysis/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\company\\analysis\\show.html.twig");
    }
}
