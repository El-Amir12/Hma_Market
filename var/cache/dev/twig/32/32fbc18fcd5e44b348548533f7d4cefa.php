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
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 87
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

        // line 88
        yield "<div class=\"container-fluid px-4 py-3\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-chart-line me-1\"></i> Analyses
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 104, $this->source); })()), "requestNumber", [], "any", false, false, false, 104), "html", null, true);
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
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Colonne gauche - Informations -->
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3 border-0\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        Informations générales
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <small class=\"text-muted text-uppercase fw-semibold\">N° Demande</small>
                                        <div class=\"fw-bold fs-5 mt-1\">";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 136, $this->source); })()), "requestNumber", [], "any", false, false, false, 136), "html", null, true);
        yield "</div>
                                    </div>
                                    <div class=\"rounded-circle bg-primary bg-opacity-10 p-3\">
                                        <i class=\"fas fa-hashtag text-primary\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <small class=\"text-muted text-uppercase fw-semibold\">Date de création</small>
                                        <div class=\"fw-bold mt-1\">";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 149, $this->source); })()), "createdAt", [], "any", false, false, false, 149), "d/m/Y H:i:s"), "html", null, true);
        yield "</div>
                                    </div>
                                    <div class=\"rounded-circle bg-info bg-opacity-10 p-3\">
                                        <i class=\"fas fa-calendar-alt text-info\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <small class=\"text-muted text-uppercase fw-semibold\">Type d'analyse</small>
                                        <div class=\"fw-bold mt-1\">";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 162, $this->source); })()), "typeLabel", [], "any", false, false, false, 162), "html", null, true);
        yield "</div>
                                    </div>
                                    <div class=\"rounded-circle bg-success bg-opacity-10 p-3\">
                                        <i class=\"fas fa-chart-line text-success\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <small class=\"text-muted text-uppercase fw-semibold\">Montant</small>
                                        <div class=\"fw-bold fs-5 text-primary mt-1\">";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 175, $this->source); })()), "amountFormatted", [], "any", false, false, false, 175), "html", null, true);
        yield "</div>
                                    </div>
                                    <div class=\"rounded-circle bg-warning bg-opacity-10 p-3\">
                                        <i class=\"fas fa-money-bill-wave text-warning\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <small class=\"text-muted text-uppercase fw-semibold\">Statut</small>
                                        <div class=\"mt-1\">
                                            <span class=\"badge ";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 189, $this->source); })()), "statusBadgeClass", [], "any", false, false, false, 189), "html", null, true);
        yield " status-badge\">
                                                <i class=\"fas ";
        // line 190
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 190, $this->source); })()), "status", [], "any", false, false, false, 190) == "completed")) ? ("fa-check-circle") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 190, $this->source); })()), "status", [], "any", false, false, false, 190) == "pending")) ? ("fa-clock") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 190, $this->source); })()), "status", [], "any", false, false, false, 190) == "processing")) ? ("fa-spinner fa-pulse") : ("fa-times-circle"))))));
        yield " me-1\"></i>
                                                ";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 191, $this->source); })()), "statusLabel", [], "any", false, false, false, 191), "html", null, true);
        yield "
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"rounded-circle bg-secondary bg-opacity-10 p-3\">
                                        <i class=\"fas fa-tasks text-secondary\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <small class=\"text-muted text-uppercase fw-semibold\">Période analysée</small>
                                        <div class=\"fw-bold mt-1\">";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 206, $this->source); })()), "periodStart", [], "any", false, false, false, 206), "d/m/Y"), "html", null, true);
        yield " au ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 206, $this->source); })()), "periodEnd", [], "any", false, false, false, 206), "d/m/Y"), "html", null, true);
        yield "</div>
                                    </div>
                                    <div class=\"rounded-circle bg-purple bg-opacity-10 p-3\">
                                        <i class=\"fas fa-calendar-week text-purple\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 214
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 214, $this->source); })()), "notes", [], "any", false, false, false, 214)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 215
            yield "                        <div class=\"col-12\">
                            <div class=\"info-card\">
                                <div class=\"d-flex align-items-start gap-3\">
                                    <div class=\"rounded-circle bg-secondary bg-opacity-10 p-3\">
                                        <i class=\"fas fa-sticky-note text-secondary\"></i>
                                    </div>
                                    <div>
                                        <small class=\"text-muted text-uppercase fw-semibold\">Notes</small>
                                        <div class=\"mt-1\">";
            // line 223
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 223, $this->source); })()), "notes", [], "any", false, false, false, 223), "html", null, true));
            yield "</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 229
        yield "                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite - Téléchargement & Paiement -->
        <div class=\"col-lg-4\">
            <!-- Section Téléchargement -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3 border-0\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-download me-2 text-primary\"></i>
                        Téléchargement
                    </h5>
                </div>
                <div class=\"card-body download-section\">
                    
                    ";
        // line 247
        yield "                    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 247, $this->source); })()), "status", [], "any", false, false, false, 247) == "completed") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 247, $this->source); })()), "finalReportPath", [], "any", false, false, false, 247))) {
            // line 248
            yield "                        <div class=\"download-icon bg-success bg-opacity-10\">
                            <i class=\"fas fa-file-alt fa-3x text-success\"></i>
                        </div>
                        <h5 class=\"fw-bold mb-2\">Votre rapport est prêt !</h5>
                        <small class=\"text-muted d-block mb-3\">
                            <i class=\"fas fa-file-";
            // line 253
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 253, $this->source); })()), "finalReportType", [], "any", false, false, false, 253) == "excel")) ? ("excel") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 253, $this->source); })()), "finalReportType", [], "any", false, false, false, 253) == "powerbi")) ? ("chart-pie") : ("alt"))));
            yield " me-1\"></i>
                            ";
            // line 254
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 254, $this->source); })()), "finalReportType", [], "any", false, false, false, 254)), "html", null, true);
            yield "
                            • ";
            // line 255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 255, $this->source); })()), "finalReportUploadedAt", [], "any", false, false, false, 255), "d/m/Y H:i"), "html", null, true);
            yield "
                        </small>
                        
                        <a href=\"";
            // line 258
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_download_final", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 258, $this->source); })()), "id", [], "any", false, false, false, 258)]), "html", null, true);
            yield "\" class=\"btn btn-success btn-download w-100 mb-3\">
                            <i class=\"fas fa-download me-2\"></i> Télécharger le rapport
                        </a>
                        
                        ";
            // line 262
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 262, $this->source); })()), "rawExportPath", [], "any", false, false, false, 262)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 263
                yield "                            <hr class=\"my-3\">
                            <small class=\"text-muted d-block mb-2\">📁 Données brutes (optionnel)</small>
                            <a href=\"";
                // line 265
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_download_raw", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 265, $this->source); })()), "id", [], "any", false, false, false, 265)]), "html", null, true);
                yield "\" class=\"btn btn-outline-secondary w-100\">
                                <i class=\"fas fa-database me-1\"></i> Télécharger les données brutes
                            </a>
                        ";
            }
            // line 269
            yield "                    
                    ";
            // line 271
            yield "                    ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 271, $this->source); })()), "status", [], "any", false, false, false, 271) == "processing") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 271, $this->source); })()), "rawExportPath", [], "any", false, false, false, 271))) {
            // line 272
            yield "                        <div class=\"download-icon bg-info bg-opacity-10\">
                            <i class=\"fas fa-database fa-3x text-info\"></i>
                        </div>
                        <h5 class=\"fw-bold mb-2\">Données brutes disponibles</h5>
                        <small class=\"text-muted d-block mb-3\">
                            Exporté le ";
            // line 277
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 277, $this->source); })()), "rawExportedAt", [], "any", false, false, false, 277), "d/m/Y H:i"), "html", null, true);
            yield "
                        </small>
                        
                        <a href=\"";
            // line 280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_download_raw", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 280, $this->source); })()), "id", [], "any", false, false, false, 280)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-download w-100 mb-3\">
                            <i class=\"fas fa-download me-2\"></i> Télécharger les données brutes
                        </a>
                        
                        <div class=\"alert alert-info alert-custom small mt-3\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            Notre expert analyse vos données pour préparer votre rapport personnalisé.
                        </div>
                    
                    ";
            // line 290
            yield "                    ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 290, $this->source); })()), "status", [], "any", false, false, false, 290) == "processing") &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 290, $this->source); })()), "rawExportPath", [], "any", false, false, false, 290))) {
            // line 291
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
            // line 307
            yield "                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 307, $this->source); })()), "status", [], "any", false, false, false, 307) == "pending")) {
            // line 308
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
            // line 320
            yield "                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 320, $this->source); })()), "status", [], "any", false, false, false, 320) == "paid")) {
            // line 321
            yield "                        <div class=\"download-icon bg-success bg-opacity-10\">
                            <i class=\"fas fa-credit-card fa-3x text-success\"></i>
                        </div>
                        <h5 class=\"fw-bold mb-2\">Paiement confirmé !</h5>
                        <small class=\"text-muted d-block mb-3\">Transaction #";
            // line 325
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "paymentTransactionId", [], "any", true, true, false, 325)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 325, $this->source); })()), "paymentTransactionId", [], "any", false, false, false, 325), "---")) : ("---")), "html", null, true);
            yield "</small>
                        
                        <div class=\"alert alert-info alert-custom small\">
                            <i class=\"fas fa-rocket me-2\"></i>
                            L'analyse va commencer prochainement.
                        </div>
                    
                    ";
            // line 333
            yield "                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 333, $this->source); })()), "status", [], "any", false, false, false, 333) == "failed")) {
            // line 334
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
        // line 345
        yield "                    
                </div>
            </div>

            <!-- Section Informations de paiement -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3 border-0\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-credit-card me-2 text-primary\"></i>
                        Informations de paiement
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 358
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 358, $this->source); })()), "paidAt", [], "any", false, false, false, 358)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 359
            yield "                        <div class=\"payment-card\">
                            <div class=\"payment-detail\">
                                <span class=\"payment-label\">
                                    <i class=\"fas fa-hashtag me-1\"></i> ID Transaction
                                </span>
                                <span class=\"payment-value text-primary\">";
            // line 364
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "paymentTransactionId", [], "any", true, true, false, 364)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 364, $this->source); })()), "paymentTransactionId", [], "any", false, false, false, 364), "---")) : ("---")), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"payment-detail\">
                                <span class=\"payment-label\">
                                    <i class=\"fas fa-calendar-check me-1\"></i> Date de paiement
                                </span>
                                <span class=\"payment-value\">";
            // line 370
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 370, $this->source); })()), "paidAt", [], "any", false, false, false, 370), "d/m/Y H:i:s"), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"payment-detail\">
                                <span class=\"payment-label\">
                                    <i class=\"fas fa-money-bill-wave me-1\"></i> Montant payé
                                </span>
                                <span class=\"payment-value fw-bold text-success\">";
            // line 376
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 376, $this->source); })()), "amountFormatted", [], "any", false, false, false, 376), "html", null, true);
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
            // line 394
            yield "                        <div class=\"text-center py-4\">
                            <div class=\"rounded-circle bg-secondary bg-opacity-10 p-3 d-inline-flex mb-3\">
                                <i class=\"fas fa-hourglass-half fa-2x text-secondary\"></i>
                            </div>
                            <p class=\"mb-0 text-muted\">Paiement en attente</p>
                            <small class=\"text-muted\">Le paiement n'a pas encore été effectué.</small>
                        </div>
                    ";
        }
        // line 402
        yield "                    
                    <!-- Résumé de la commande -->
                    <div class=\"mt-3 pt-2 border-top\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <span class=\"text-muted small\">Sous-total</span>
                            <span class=\"fw-bold\">";
        // line 407
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 407, $this->source); })()), "amountFormatted", [], "any", false, false, false, 407), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <span class=\"text-muted small\">Taxes (0%)</span>
                            <span class=\"fw-bold\">0 FCFA</span>
                        </div>
                        <div class=\"d-flex justify-content-between align-items-center pt-2 border-top\">
                            <span class=\"fw-bold\">Total</span>
                            <span class=\"fw-bold fs-5 text-primary\">";
        // line 415
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 415, $this->source); })()), "amountFormatted", [], "any", false, false, false, 415), "html", null, true);
        yield "</span>
                        </div>
                    </div>
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

    // line 425
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

        // line 426
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Rafraîchissement automatique UNIQUEMENT pendant la génération des données brutes
    ";
        // line 430
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 430, $this->source); })()), "status", [], "any", false, false, false, 430) == "processing") &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 430, $this->source); })()), "rawExportPath", [], "any", false, false, false, 430))) {
            // line 431
            yield "        console.log('⏳ Génération des données en cours, rechargement dans 10s...');
        setTimeout(function() {
            location.reload();
        }, 10000);
    ";
        }
        // line 436
        yield "    
    // Pas de rechargement si les données brutes sont déjà disponibles
    ";
        // line 438
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 438, $this->source); })()), "status", [], "any", false, false, false, 438) == "processing") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 438, $this->source); })()), "rawExportPath", [], "any", false, false, false, 438))) {
            // line 439
            yield "        console.log('✅ Données brutes disponibles, pas de rechargement automatique');
    ";
        }
        // line 441
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
        return array (  709 => 441,  705 => 439,  703 => 438,  699 => 436,  692 => 431,  690 => 430,  683 => 426,  670 => 425,  650 => 415,  639 => 407,  632 => 402,  622 => 394,  601 => 376,  592 => 370,  583 => 364,  576 => 359,  574 => 358,  559 => 345,  546 => 334,  543 => 333,  533 => 325,  527 => 321,  524 => 320,  511 => 308,  508 => 307,  491 => 291,  488 => 290,  476 => 280,  470 => 277,  463 => 272,  460 => 271,  457 => 269,  450 => 265,  446 => 263,  444 => 262,  437 => 258,  431 => 255,  427 => 254,  423 => 253,  416 => 248,  413 => 247,  394 => 229,  385 => 223,  375 => 215,  373 => 214,  360 => 206,  342 => 191,  338 => 190,  334 => 189,  317 => 175,  301 => 162,  285 => 149,  269 => 136,  243 => 113,  231 => 104,  224 => 100,  216 => 95,  207 => 88,  194 => 87,  104 => 7,  91 => 6,  66 => 4,  43 => 2,);
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

    <div class=\"row g-4\">
        <!-- Colonne gauche - Informations -->
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3 border-0\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        Informations générales
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <small class=\"text-muted text-uppercase fw-semibold\">N° Demande</small>
                                        <div class=\"fw-bold fs-5 mt-1\">{{ analysis.requestNumber }}</div>
                                    </div>
                                    <div class=\"rounded-circle bg-primary bg-opacity-10 p-3\">
                                        <i class=\"fas fa-hashtag text-primary\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <small class=\"text-muted text-uppercase fw-semibold\">Date de création</small>
                                        <div class=\"fw-bold mt-1\">{{ analysis.createdAt|date('d/m/Y H:i:s') }}</div>
                                    </div>
                                    <div class=\"rounded-circle bg-info bg-opacity-10 p-3\">
                                        <i class=\"fas fa-calendar-alt text-info\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <small class=\"text-muted text-uppercase fw-semibold\">Type d'analyse</small>
                                        <div class=\"fw-bold mt-1\">{{ analysis.typeLabel }}</div>
                                    </div>
                                    <div class=\"rounded-circle bg-success bg-opacity-10 p-3\">
                                        <i class=\"fas fa-chart-line text-success\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <small class=\"text-muted text-uppercase fw-semibold\">Montant</small>
                                        <div class=\"fw-bold fs-5 text-primary mt-1\">{{ analysis.amountFormatted }}</div>
                                    </div>
                                    <div class=\"rounded-circle bg-warning bg-opacity-10 p-3\">
                                        <i class=\"fas fa-money-bill-wave text-warning\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <small class=\"text-muted text-uppercase fw-semibold\">Statut</small>
                                        <div class=\"mt-1\">
                                            <span class=\"badge {{ analysis.statusBadgeClass }} status-badge\">
                                                <i class=\"fas {{ analysis.status == 'completed' ? 'fa-check-circle' : (analysis.status == 'pending' ? 'fa-clock' : (analysis.status == 'processing' ? 'fa-spinner fa-pulse' : 'fa-times-circle')) }} me-1\"></i>
                                                {{ analysis.statusLabel }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"rounded-circle bg-secondary bg-opacity-10 p-3\">
                                        <i class=\"fas fa-tasks text-secondary\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <small class=\"text-muted text-uppercase fw-semibold\">Période analysée</small>
                                        <div class=\"fw-bold mt-1\">{{ analysis.periodStart|date('d/m/Y') }} au {{ analysis.periodEnd|date('d/m/Y') }}</div>
                                    </div>
                                    <div class=\"rounded-circle bg-purple bg-opacity-10 p-3\">
                                        <i class=\"fas fa-calendar-week text-purple\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% if analysis.notes %}
                        <div class=\"col-12\">
                            <div class=\"info-card\">
                                <div class=\"d-flex align-items-start gap-3\">
                                    <div class=\"rounded-circle bg-secondary bg-opacity-10 p-3\">
                                        <i class=\"fas fa-sticky-note text-secondary\"></i>
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

        <!-- Colonne droite - Téléchargement & Paiement -->
        <div class=\"col-lg-4\">
            <!-- Section Téléchargement -->
            <div class=\"card border-0 shadow-sm mb-4\">
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

            <!-- Section Informations de paiement -->
            <div class=\"card border-0 shadow-sm\">
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
