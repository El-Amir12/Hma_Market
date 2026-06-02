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

/* super_admin/analysis/show.html.twig */
class __TwigTemplate_4e6d519b2a7d26baf34c8c9af8237c7d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/analysis/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/analysis/show.html.twig"));

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
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 4, $this->source); })()), "company", [], "any", false, false, false, 4), "companyName", [], "any", false, false, false, 4), "html", null, true);
        
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
        background: #f8fafc;
        border-radius: 1rem;
        padding: 1.25rem;
        margin-bottom: 1rem;
    }
    .status-badge {
        font-size: 0.9rem;
        padding: 0.5rem 1rem;
        border-radius: 2rem;
    }
    .timeline {
        position: relative;
        padding-left: 2rem;
    }
    .timeline::before {
        content: '';
        position: absolute;
        left: 0.5rem;
        top: 0;
        bottom: 0;
        width: 2px;
        background: #e5e7eb;
    }
    .timeline-item {
        position: relative;
        padding-bottom: 1.5rem;
    }
    .timeline-item::before {
        content: '';
        position: absolute;
        left: -1.5rem;
        top: 0.25rem;
        width: 1rem;
        height: 1rem;
        border-radius: 50%;
        background: #0463f1;
        border: 2px solid white;
        box-shadow: 0 0 0 2px #e5e7eb;
    }
    .timeline-item.completed::before {
        background: #10b981;
    }
    .timeline-item.pending::before {
        background: #f59e0b;
    }
    .action-buttons {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }
    .payment-link {
        background: #f0fdf4;
        border: 1px solid #bbf7d0;
        border-radius: 0.75rem;
        padding: 1rem;
    }
    .payment-link input {
        font-size: 0.8rem;
        font-family: monospace;
    }
    .payment-details {
        background: #f8fafc;
        border-radius: 0.75rem;
        padding: 1rem;
        margin-top: 1rem;
    }
    .payment-details pre {
        background: #1e293b;
        color: #e2e8f0;
        padding: 0.75rem;
        border-radius: 0.5rem;
        font-size: 0.7rem;
        overflow-x: auto;
        max-height: 200px;
    }
    .company-logo {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        background: white;
        padding: 5px;
    }
    .company-initials {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        font-weight: bold;
        color: #0463f1;
    }
    .modal-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
    }
    .btn-loading {
        pointer-events: none;
        opacity: 0.7;
    }
    .report-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 1rem;
        padding: 1rem;
        margin-bottom: 1rem;
        color: white;
    }
    .report-card .btn {
        background: rgba(255,255,255,0.2);
        border: none;
        color: white;
    }
    .report-card .btn:hover {
        background: rgba(255,255,255,0.3);
    }
    .upload-form {
        background: #f8fafc;
        border-radius: 1rem;
        padding: 1rem;
        margin-top: 1rem;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 142
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

        // line 143
        yield "<div class=\"container-fluid px-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-chart-line me-1\"></i> Analyses
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 153, $this->source); })()), "requestNumber", [], "any", false, false, false, 153), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-chart-line me-2 text-primary\"></i>
                Analyse #";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 158, $this->source); })()), "requestNumber", [], "any", false, false, false, 158), "html", null, true);
        yield "
            </h1>
        </div>
        <div class=\"action-buttons\">
            <a href=\"";
        // line 162
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Colonne gauche -->
        <div class=\"col-xl-7\">
            <!-- Informations générales -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        Informations générales
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">N° Demande</small>
                                <div class=\"fw-bold fs-5\">";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 184, $this->source); })()), "requestNumber", [], "any", false, false, false, 184), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Date de création</small>
                                <div class=\"fw-bold\">";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 190, $this->source); })()), "createdAt", [], "any", false, false, false, 190), "d/m/Y H:i:s"), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Type d'analyse</small>
                                <div class=\"fw-bold\">";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 196, $this->source); })()), "typeLabel", [], "any", false, false, false, 196), "html", null, true);
        yield "</div>
                                <small class=\"text-muted\">";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 197, $this->source); })()), "amountFormatted", [], "any", false, false, false, 197), "html", null, true);
        yield "</small>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Statut</small>
                                <div>
                                    <span class=\"badge ";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 204, $this->source); })()), "statusBadgeClass", [], "any", false, false, false, 204), "html", null, true);
        yield " status-badge\">
                                        <i class=\"fas ";
        // line 205
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 205, $this->source); })()), "status", [], "any", false, false, false, 205) == "completed")) ? ("fa-check-circle") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 205, $this->source); })()), "status", [], "any", false, false, false, 205) == "pending")) ? ("fa-clock") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 205, $this->source); })()), "status", [], "any", false, false, false, 205) == "processing")) ? ("fa-spinner fa-pulse") : ("fa-times-circle"))))));
        yield " me-1\"></i>
                                        ";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 206, $this->source); })()), "statusLabel", [], "any", false, false, false, 206), "html", null, true);
        yield "
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Période analysée</small>
                                <div class=\"fw-bold\">";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 214, $this->source); })()), "periodStart", [], "any", false, false, false, 214), "d/m/Y"), "html", null, true);
        yield " au ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 214, $this->source); })()), "periodEnd", [], "any", false, false, false, 214), "d/m/Y"), "html", null, true);
        yield "</div>
                                ";
        // line 215
        $context["daysCount"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 215, $this->source); })()), "periodStart", [], "any", false, false, false, 215), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 215, $this->source); })()), "periodEnd", [], "any", false, false, false, 215)], "method", false, false, false, 215), "days", [], "any", false, false, false, 215);
        // line 216
        yield "                                <small class=\"text-muted\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["daysCount"]) || array_key_exists("daysCount", $context) ? $context["daysCount"] : (function () { throw new RuntimeError('Variable "daysCount" does not exist.', 216, $this->source); })()), "html", null, true);
        yield " jours de données</small>
                            </div>
                        </div>
                        ";
        // line 219
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 219, $this->source); })()), "notes", [], "any", false, false, false, 219)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 220
            yield "                        <div class=\"col-12\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Notes / Instructions</small>
                                <div class=\"mt-1\">";
            // line 223
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 223, $this->source); })()), "notes", [], "any", false, false, false, 223), "html", null, true));
            yield "</div>
                            </div>
                        </div>
                        ";
        }
        // line 227
        yield "                    </div>
                </div>
            </div>

            <!-- Chronologie -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-history me-2 text-primary\"></i>
                        Chronologie
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"timeline\">
                        <div class=\"timeline-item completed\">
                            <div class=\"fw-bold\">Demande créée</div>
                            <small class=\"text-muted\">";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 243, $this->source); })()), "createdAt", [], "any", false, false, false, 243), "d/m/Y H:i:s"), "html", null, true);
        yield "</small>
                            <div class=\"text-muted small\">Demande enregistrée avec succès</div>
                        </div>
                        
                        ";
        // line 247
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 247, $this->source); })()), "paidAt", [], "any", false, false, false, 247)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 248
            yield "                        <div class=\"timeline-item completed\">
                            <div class=\"fw-bold\">Paiement reçu</div>
                            <small class=\"text-muted\">";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 250, $this->source); })()), "paidAt", [], "any", false, false, false, 250), "d/m/Y H:i:s"), "html", null, true);
            yield "</small>
                            <div class=\"text-muted small\">Transaction #";
            // line 251
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 251, $this->source); })()), "paymentTransactionId", [], "any", false, false, false, 251), "html", null, true);
            yield "</div>
                        </div>
                        ";
        } else {
            // line 254
            yield "                        <div class=\"timeline-item pending\">
                            <div class=\"fw-bold\">En attente de paiement</div>
                            <small class=\"text-muted\">Expire le ";
            // line 256
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 256, $this->source); })()), "expiresAt", [], "any", false, false, false, 256), "d/m/Y"), "html", null, true);
            yield "</small>
                            <div class=\"text-muted small\">Générer le lien de paiement ci-dessous</div>
                        </div>
                        ";
        }
        // line 260
        yield "                        
                        ";
        // line 261
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 261, $this->source); })()), "rawExportedAt", [], "any", false, false, false, 261)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 262
            yield "                        <div class=\"timeline-item completed\">
                            <div class=\"fw-bold\">Données brutes exportées</div>
                            <small class=\"text-muted\">";
            // line 264
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 264, $this->source); })()), "rawExportedAt", [], "any", false, false, false, 264), "d/m/Y H:i:s"), "html", null, true);
            yield "</small>
                            <div class=\"text-muted small\">Fichier ZIP disponible</div>
                        </div>
                        ";
        }
        // line 268
        yield "                        
                        ";
        // line 269
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 269, $this->source); })()), "finalReportUploadedAt", [], "any", false, false, false, 269)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 270
            yield "                        <div class=\"timeline-item completed\">
                            <div class=\"fw-bold\">Rapport final uploadé</div>
                            <small class=\"text-muted\">";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 272, $this->source); })()), "finalReportUploadedAt", [], "any", false, false, false, 272), "d/m/Y H:i:s"), "html", null, true);
            yield "</small>
                            <div class=\"text-muted small\">Type: ";
            // line 273
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 273, $this->source); })()), "finalReportType", [], "any", false, false, false, 273)), "html", null, true);
            yield "</div>
                        </div>
                        ";
        }
        // line 276
        yield "                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite -->
        <div class=\"col-xl-5\">
            <!-- Entreprise -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-building me-2 text-primary\"></i>
                        Entreprise
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"text-center mb-3\">
                        ";
        // line 293
        $context["logoPath"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 293, $this->source); })()), "company", [], "any", false, false, false, 293), "logo", [], "any", false, false, false, 293);
        // line 294
        yield "                        ";
        if (((isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 294, $this->source); })()) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 294, $this->source); })())))) {
            // line 295
            yield "                            ";
            if ((is_string($_v0 = (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 295, $this->source); })())) && is_string($_v1 = "uploads/") && str_starts_with($_v0, $_v1))) {
                // line 296
                yield "                                ";
                $context["logoFullPath"] = (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 296, $this->source); })());
                // line 297
                yield "                            ";
            } elseif ((is_string($_v2 = (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 297, $this->source); })())) && is_string($_v3 = "/") && str_starts_with($_v2, $_v3))) {
                // line 298
                yield "                                ";
                $context["logoFullPath"] = (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 298, $this->source); })());
                // line 299
                yield "                            ";
            } else {
                // line 300
                yield "                                ";
                $context["logoFullPath"] = ("uploads/logos/" . (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 300, $this->source); })()));
                // line 301
                yield "                            ";
            }
            // line 302
            yield "                            
                            ";
            // line 303
            if ((is_string($_v4 = (isset($context["logoFullPath"]) || array_key_exists("logoFullPath", $context) ? $context["logoFullPath"] : (function () { throw new RuntimeError('Variable "logoFullPath" does not exist.', 303, $this->source); })())) && is_string($_v5 = "/") && str_starts_with($_v4, $_v5))) {
                // line 304
                yield "                                ";
                $context["logoUrl"] = (isset($context["logoFullPath"]) || array_key_exists("logoFullPath", $context) ? $context["logoFullPath"] : (function () { throw new RuntimeError('Variable "logoFullPath" does not exist.', 304, $this->source); })());
                // line 305
                yield "                            ";
            } else {
                // line 306
                yield "                                ";
                $context["logoUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["logoFullPath"]) || array_key_exists("logoFullPath", $context) ? $context["logoFullPath"] : (function () { throw new RuntimeError('Variable "logoFullPath" does not exist.', 306, $this->source); })()));
                // line 307
                yield "                            ";
            }
            // line 308
            yield "                            
                            <img src=\"";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["logoUrl"]) || array_key_exists("logoUrl", $context) ? $context["logoUrl"] : (function () { throw new RuntimeError('Variable "logoUrl" does not exist.', 309, $this->source); })()), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 309, $this->source); })()), "company", [], "any", false, false, false, 309), "companyName", [], "any", false, false, false, 309), "html", null, true);
            yield "\" class=\"company-logo\" 
                                 onerror=\"this.onerror=null; this.parentElement.innerHTML='<div class=\\'company-initials\\'>";
            // line 310
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 310, $this->source); })()), "company", [], "any", false, false, false, 310), "companyName", [], "any", false, false, false, 310), 0, 2)), "html", null, true);
            yield "</div>';\">
                        ";
        } else {
            // line 312
            yield "                            <div class=\"company-initials\">
                                ";
            // line 313
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 313, $this->source); })()), "company", [], "any", false, false, false, 313), "companyName", [], "any", false, false, false, 313), 0, 2)), "html", null, true);
            yield "
                            </div>
                        ";
        }
        // line 316
        yield "                    </div>
                    <div class=\"text-center mb-3\">
                        <h5 class=\"mb-0\">";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 318, $this->source); })()), "company", [], "any", false, false, false, 318), "companyName", [], "any", false, false, false, 318), "html", null, true);
        yield "</h5>
                        <small class=\"text-muted\">";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 319, $this->source); })()), "company", [], "any", false, false, false, 319), "subscriptionNumber", [], "any", false, false, false, 319), "html", null, true);
        yield "</small>
                    </div>
                    <div class=\"row g-2\">
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Type</span>
                                <span>";
        // line 325
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 325, $this->source); })()), "company", [], "any", false, false, false, 325), "type", [], "any", false, false, false, 325) == "restaurant")) ? ("🍽️ Restaurant") : ("🛒 Commerce"));
        yield "</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Email</span>
                                <span>";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 331, $this->source); })()), "company", [], "any", false, false, false, 331), "email", [], "any", false, false, false, 331), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Téléphone</span>
                                <span>";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["analysis"] ?? null), "company", [], "any", false, true, false, 337), "phone", [], "any", true, true, false, 337)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 337, $this->source); })()), "company", [], "any", false, false, false, 337), "phone", [], "any", false, false, false, 337), "—")) : ("—")), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Date création</span>
                                <span>";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 343, $this->source); })()), "company", [], "any", false, false, false, 343), "createdAt", [], "any", false, false, false, 343), "d/m/Y"), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"mt-3\">
                        <a href=\"";
        // line 348
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 348, $this->source); })()), "company", [], "any", false, false, false, 348), "id", [], "any", false, false, false, 348)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-outline-primary w-100\">
                            <i class=\"fas fa-eye me-1\"></i> Voir les détails
                        </a>
                    </div>
                </div>
            </div>

            <!-- Actions principales -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-cog me-2 text-primary\"></i>
                        Actions
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 365
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 365, $this->source); })()), "status", [], "any", false, false, false, 365) == "pending")) {
            // line 366
            yield "                        <div class=\"payment-link mb-3\">
                            <div class=\"fw-bold mb-2\">🔗 Lien de paiement</div>
                            <div class=\"input-group mb-2\">
                                <input type=\"text\" id=\"paymentLinkInput\" class=\"form-control form-control-sm\" readonly>
                                <button class=\"btn btn-sm btn-primary\" id=\"copyPaymentLinkBtn\" title=\"Copier le lien\">
                                    <i class=\"fas fa-copy\"></i>
                                </button>
                            </div>
                            <div class=\"d-flex gap-2\">
                                <button class=\"btn btn-sm btn-success w-100\" id=\"generatePaymentLinkBtn\">
                                    <i class=\"fas fa-credit-card me-1\"></i> Générer le lien
                                </button>
                                <button class=\"btn btn-sm btn-info w-100\" id=\"sendEmailLinkBtn\" style=\"display: none;\">
                                    <i class=\"fas fa-envelope me-1\"></i> Envoyer par email
                                </button>
                            </div>
                        </div>
                        <div class=\"alert alert-warning small\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i>
                            Ce lien expirera le ";
            // line 385
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 385, $this->source); })()), "expiresAt", [], "any", false, false, false, 385), "d/m/Y"), "html", null, true);
            yield ".
                        </div>
                    ";
        }
        // line 388
        yield "                    
                    ";
        // line 390
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 390, $this->source); })()), "status", [], "any", false, false, false, 390) == "paid")) {
            // line 391
            yield "                        <div class=\"alert alert-info\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Le paiement a été confirmé. Vous pouvez maintenant exporter les données brutes.
                        </div>
                        <button type=\"button\" class=\"btn btn-primary w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmGenerateRawModal\">
                            <i class=\"fas fa-database me-1\"></i> Exporter les données brutes (ZIP)
                        </button>
                    ";
        }
        // line 399
        yield "                    
                    ";
        // line 401
        yield "                    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 401, $this->source); })()), "status", [], "any", false, false, false, 401) == "processing") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 401, $this->source); })()), "rawExportPath", [], "any", false, false, false, 401))) {
            // line 402
            yield "                        <div class=\"alert alert-success\">
                            <i class=\"fas fa-check-circle me-1\"></i>
                            Les données brutes sont prêtes.
                        </div>
                        
                        <!-- Télécharger données brutes -->
                        <a href=\"";
            // line 408
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_download_raw", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 408, $this->source); })()), "id", [], "any", false, false, false, 408)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary w-100 mb-3\">
                            <i class=\"fas fa-download me-1\"></i> Télécharger les données brutes (ZIP)
                        </a>
                        
                        <hr>
                        
                        <div class=\"fw-bold mb-3\">📤 Uploader le rapport final</div>
                        
                        <!-- Formulaire d'upload simple -->
                        <form method=\"post\" action=\"";
            // line 417
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_upload_report", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 417, $this->source); })()), "id", [], "any", false, false, false, 417)]), "html", null, true);
            yield "\" enctype=\"multipart/form-data\" class=\"upload-form\">
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Sélectionner le fichier</label>
                                <input type=\"file\" name=\"report\" class=\"form-control\" accept=\".xlsx,.xls,.pbix,.pdf,.zip\" required>
                                <small class=\"text-muted d-block mt-1\">Formats acceptés: Excel (.xlsx), Power BI (.pbix), PDF, ZIP</small>
                            </div>
                            <button type=\"submit\" class=\"btn btn-success w-100\">
                                <i class=\"fas fa-cloud-upload-alt me-1\"></i> Uploader le rapport final
                            </button>
                        </form>
                    ";
        }
        // line 428
        yield "                    
                    ";
        // line 430
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 430, $this->source); })()), "status", [], "any", false, false, false, 430) == "completed")) {
            // line 431
            yield "                        <div class=\"report-card\">
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <div>
                                    <i class=\"fas fa-file-alt fa-2x me-2\"></i>
                                    <strong>Rapport final</strong>
                                    <div class=\"small\">";
            // line 436
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 436, $this->source); })()), "finalReportFilename", [], "any", false, false, false, 436), "html", null, true);
            yield "</div>
                                    <div class=\"small opacity-75\">Uploadé le ";
            // line 437
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 437, $this->source); })()), "finalReportUploadedAt", [], "any", false, false, false, 437), "d/m/Y H:i"), "html", null, true);
            yield "</div>
                                </div>
                                <div class=\"btn-group-vertical\">
                                    <a href=\"";
            // line 440
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_download_final", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 440, $this->source); })()), "id", [], "any", false, false, false, 440)]), "html", null, true);
            yield "\" class=\"btn btn-sm mb-1\">
                                        <i class=\"fas fa-download\"></i> Télécharger
                                    </a>
                                    <button type=\"button\" class=\"btn btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmReplaceModal\">
                                        <i class=\"fas fa-sync-alt\"></i> Remplacer
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <hr>
                        
                        <div class=\"alert alert-success\">
                            <i class=\"fas fa-check-circle me-1\"></i>
                            L'entreprise peut maintenant télécharger son rapport.
                        </div>
                        
                        <!-- Option pour retélécharger les données brutes -->
                        <a href=\"";
            // line 458
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_download_raw", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 458, $this->source); })()), "id", [], "any", false, false, false, 458)]), "html", null, true);
            yield "\" class=\"btn btn-outline-secondary w-100\">
                            <i class=\"fas fa-database me-1\"></i> Télécharger les données brutes
                        </a>
                        
                        <!-- Formulaire pour remplacer le rapport -->
                        <form method=\"post\" action=\"";
            // line 463
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_replace_report", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 463, $this->source); })()), "id", [], "any", false, false, false, 463)]), "html", null, true);
            yield "\" enctype=\"multipart/form-data\" class=\"upload-form mt-3\">
                            <div class=\"mb-2\">
                                <label class=\"form-label\">Remplacer le rapport</label>
                                <input type=\"file\" name=\"report\" class=\"form-control form-control-sm\" accept=\".xlsx,.xls,.pbix,.pdf,.zip\" required>
                            </div>
                            <button type=\"submit\" class=\"btn btn-outline-warning w-100\">
                                <i class=\"fas fa-sync-alt me-1\"></i> Remplacer le rapport
                            </button>
                        </form>
                    ";
        }
        // line 473
        yield "                    
                    ";
        // line 475
        yield "                    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 475, $this->source); })()), "status", [], "any", false, false, false, 475) == "processing") &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 475, $this->source); })()), "rawExportPath", [], "any", false, false, false, 475))) {
            // line 476
            yield "                        <div class=\"alert alert-warning\">
                            <i class=\"fas fa-spinner fa-pulse me-1\"></i>
                            Génération des données brutes en cours...
                        </div>
                        <div class=\"progress mb-3\">
                            <div class=\"progress-bar progress-bar-striped progress-bar-animated\" style=\"width: 100%\">Génération...</div>
                        </div>
                        <button type=\"button\" class=\"btn btn-danger w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmCancelModal\">
                            <i class=\"fas fa-ban me-1\"></i> Annuler
                        </button>
                    ";
        }
        // line 487
        yield "                    
                    ";
        // line 489
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 489, $this->source); })()), "status", [], "any", false, false, false, 489) == "failed")) {
            // line 490
            yield "                        <div class=\"alert alert-danger\">
                            <i class=\"fas fa-exclamation-circle me-1\"></i>
                            Une erreur est survenue.
                        </div>
                        <button type=\"button\" class=\"btn btn-warning w-100 mb-2\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmRetryModal\">
                            <i class=\"fas fa-sync me-1\"></i> Réessayer
                        </button>
                        <button type=\"button\" class=\"btn btn-outline-danger w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmForcePaidModal\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> Forcer le statut à \"Payé\"
                        </button>
                    ";
        }
        // line 501
        yield "                </div>
            </div>

            <!-- Détails du paiement -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-credit-card me-2 text-primary\"></i>
                        Détails du paiement
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 513
        $context["payment"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 513, $this->source); })()));
        // line 514
        yield "                    
                    ";
        // line 515
        if ((($tmp = (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 515, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 516
            yield "                    <div class=\"row g-2\">
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">ID Transaction</span>
                                <span class=\"fw-bold\">";
            // line 520
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 520, $this->source); })()), "transactionId", [], "any", false, false, false, 520), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Date de paiement</span>
                                <span>";
            // line 526
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 526, $this->source); })()), "paidAt", [], "any", false, false, false, 526)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 526, $this->source); })()), "paidAt", [], "any", false, false, false, 526), "d/m/Y H:i:s"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 526, $this->source); })()), "paidAt", [], "any", false, false, false, 526), "d/m/Y H:i:s"), "html", null, true)));
            yield "</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Montant payé</span>
                                <span class=\"fw-bold text-success\">";
            // line 532
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 532, $this->source); })()), "amountFormatted", [], "any", false, false, false, 532), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Statut</span>
                                <span><span class=\"badge bg-success\">";
            // line 538
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 538, $this->source); })()), "statusLabel", [], "any", false, false, false, 538), "html", null, true);
            yield "</span></span>
                            </div>
                        </div>
                    </div>
                    ";
        } else {
            // line 543
            yield "                    <div class=\"alert alert-info mb-0\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Aucun paiement enregistré.
                    </div>
                    ";
        }
        // line 548
        yield "                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 555
        yield "
";
        // line 557
        yield "<div class=\"modal fade\" id=\"confirmGenerateRawModal\" tabindex=\"-1\" data-bs-backdrop=\"static\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-database me-2\"></i>
                    Export des données brutes
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"modal-icon bg-primary bg-opacity-10\">
                    <i class=\"fas fa-chart-line fa-3x text-primary\"></i>
                </div>
                <p class=\"mb-3\">
                    <strong>Confirmez-vous l'export des données brutes ?</strong>
                </p>
                <div class=\"alert alert-info text-start small\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Cette opération peut prendre plusieurs minutes. Vous recevrez un fichier ZIP contenant toutes les données au format Excel.
                </div>
            </div>
            <div class=\"modal-footer justify-content-center\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"confirmGenerateRawBtn\">
                    <i class=\"fas fa-check me-2\"></i> Confirmer
                </button>
            </div>
        </div>
    </div>
</div>

";
        // line 590
        yield "<div class=\"modal fade\" id=\"confirmReplaceModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-sync-alt me-2\"></i>
                    Remplacer le rapport
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Voulez-vous remplacer le rapport actuel ?</p>
                <div class=\"alert alert-warning small\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    L'ancien fichier sera supprimé définitivement.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-warning\" id=\"confirmReplaceBtn\">Confirmer</button>
            </div>
        </div>
    </div>
</div>

";
        // line 616
        yield "<div class=\"modal fade\" id=\"confirmRetryModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning\">
                <h5 class=\"modal-title\">Réessayer</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Voulez-vous réessayer de générer l'analyse ?</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-warning\" id=\"confirmRetryBtn\">Réessayer</button>
            </div>
        </div>
    </div>
</div>

";
        // line 635
        yield "<div class=\"modal fade\" id=\"confirmForcePaidModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">Forcer le statut à \"Payé\"</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Attention ! Cette action est irréversible.</p>
                <div class=\"alert alert-danger small\">Assurez-vous que le paiement a bien été effectué.</div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"confirmForcePaidBtn\">Confirmer</button>
            </div>
        </div>
    </div>
</div>

";
        // line 655
        yield "<div class=\"modal fade\" id=\"confirmCancelModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">Annuler la génération</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Voulez-vous vraiment annuler la génération ?</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Non</button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"confirmCancelBtn\">Oui, annuler</button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 674
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

        // line 675
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    const analysisId = ";
        // line 678
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 678, $this->source); })()), "id", [], "any", false, false, false, 678), "html", null, true);
        yield ";
    
    // ==================== GÉNÉRATION EXPORT BRUT ====================
    const generateRawBtn = document.getElementById('confirmGenerateRawBtn');
    if (generateRawBtn) {
        generateRawBtn.addEventListener('click', function() {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '";
        // line 686
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_generate_raw", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 686, $this->source); })()), "id", [], "any", false, false, false, 686)]), "html", null, true);
        yield "';
            document.body.appendChild(form);
            generateRawBtn.disabled = true;
            generateRawBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span> Génération...';
            
            const modal = bootstrap.Modal.getInstance(document.getElementById('confirmGenerateRawModal'));
            modal.hide();
            form.submit();
        });
    }
    
    // ==================== REPLACER LE RAPPORT ====================
    const replaceBtn = document.getElementById('confirmReplaceBtn');
    if (replaceBtn) {
        replaceBtn.addEventListener('click', function() {
            // Le formulaire de remplacement est déjà dans la page
            const form = document.querySelector('#confirmReplaceModal').closest('form');
            if (form) {
                form.submit();
            }
            const modal = bootstrap.Modal.getInstance(document.getElementById('confirmReplaceModal'));
            modal.hide();
        });
    }
    
    // ==================== AUTRES ACTIONS ====================
    const retryBtn = document.getElementById('confirmRetryBtn');
    if (retryBtn) {
        retryBtn.addEventListener('click', () => {
            window.location.href = '";
        // line 715
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_retry", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 715, $this->source); })()), "id", [], "any", false, false, false, 715)]), "html", null, true);
        yield "';
        });
    }
    
    const forcePaidBtn = document.getElementById('confirmForcePaidBtn');
    if (forcePaidBtn) {
        forcePaidBtn.addEventListener('click', () => {
            window.location.href = '";
        // line 722
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_force_to_paid", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 722, $this->source); })()), "id", [], "any", false, false, false, 722)]), "html", null, true);
        yield "';
        });
    }
    
    const cancelBtn = document.getElementById('confirmCancelBtn');
    if (cancelBtn) {
        cancelBtn.addEventListener('click', () => {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '";
        // line 731
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 731, $this->source); })()), "id", [], "any", false, false, false, 731)]), "html", null, true);
        yield "';
            document.body.appendChild(form);
            form.submit();
        });
    }
    
    // ==================== LIEN DE PAIEMENT ====================
    const generateLinkBtn = document.getElementById('generatePaymentLinkBtn');
    const sendEmailBtn = document.getElementById('sendEmailLinkBtn');
    const paymentLinkInput = document.getElementById('paymentLinkInput');
    const copyBtn = document.getElementById('copyPaymentLinkBtn');
    
    if (generateLinkBtn && ";
        // line 743
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 743, $this->source); })()), "status", [], "any", false, false, false, 743) == "pending")) ? ("true") : ("false"));
        yield ") {
        generateLinkBtn.addEventListener('click', async () => {
            generateLinkBtn.disabled = true;
            generateLinkBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-1\"></span> Génération...';
            
            const response = await fetch('";
        // line 748
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_payment_link", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 748, $this->source); })()), "id", [], "any", false, false, false, 748)]), "html", null, true);
        yield "');
            const data = await response.json();
            
            if (data.payment_url && data.payment_url !== '#') {
                paymentLinkInput.value = data.payment_url;
                generateLinkBtn.innerHTML = '<i class=\"fas fa-check me-1\"></i> Lien généré';
                sendEmailBtn.style.display = 'block';
                showToast('success', 'Lien généré avec succès');
            } else {
                generateLinkBtn.innerHTML = '<i class=\"fas fa-credit-card me-1\"></i> Générer le lien';
                showToast('error', 'Erreur lors de la génération');
            }
            generateLinkBtn.disabled = false;
        });
    }
    
    if (sendEmailBtn) {
        sendEmailBtn.addEventListener('click', async () => {
            const paymentLink = paymentLinkInput.value;
            if (!paymentLink) {
                showToast('error', 'Générez d\\'abord le lien');
                return;
            }
            
            sendEmailBtn.disabled = true;
            sendEmailBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-1\"></span> Envoi...';
            
            const response = await fetch('";
        // line 775
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_send_payment_link", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 775, $this->source); })()), "id", [], "any", false, false, false, 775)]), "html", null, true);
        yield "', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ payment_link: paymentLink })
            });
            const data = await response.json();
            
            if (data.success) {
                showToast('success', 'Email envoyé avec succès');
                sendEmailBtn.innerHTML = '<i class=\"fas fa-check me-1\"></i> Email envoyé';
            } else {
                showToast('error', data.error || 'Erreur');
                sendEmailBtn.innerHTML = '<i class=\"fas fa-envelope me-1\"></i> Envoyer par email';
                sendEmailBtn.disabled = false;
            }
        });
    }
    
    if (copyBtn) {
        copyBtn.addEventListener('click', () => {
            paymentLinkInput.select();
            document.execCommand('copy');
            showToast('success', 'Lien copié');
        });
    }
    
    function showToast(type, message) {
        const toast = document.createElement('div');
        toast.className = `position-fixed bottom-0 end-0 p-3 m-3 bg-\${type === 'success' ? 'success' : 'danger'} text-white rounded shadow`;
        toast.style.zIndex = '9999';
        toast.style.cursor = 'pointer';
        toast.innerHTML = `<i class=\"fas fa-\${type === 'success' ? 'check-circle' : 'exclamation-circle'} me-2\"></i>\${message}`;
        document.body.appendChild(toast);
        setTimeout(() => toast.remove(), 3000);
    }
});
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
        return "super_admin/analysis/show.html.twig";
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
        return array (  1177 => 775,  1147 => 748,  1139 => 743,  1124 => 731,  1112 => 722,  1102 => 715,  1070 => 686,  1059 => 678,  1053 => 675,  1040 => 674,  1012 => 655,  991 => 635,  971 => 616,  944 => 590,  910 => 557,  907 => 555,  899 => 548,  892 => 543,  884 => 538,  875 => 532,  866 => 526,  857 => 520,  851 => 516,  849 => 515,  846 => 514,  844 => 513,  830 => 501,  817 => 490,  814 => 489,  811 => 487,  798 => 476,  795 => 475,  792 => 473,  779 => 463,  771 => 458,  750 => 440,  744 => 437,  740 => 436,  733 => 431,  730 => 430,  727 => 428,  713 => 417,  701 => 408,  693 => 402,  690 => 401,  687 => 399,  677 => 391,  674 => 390,  671 => 388,  665 => 385,  644 => 366,  641 => 365,  622 => 348,  614 => 343,  605 => 337,  596 => 331,  587 => 325,  578 => 319,  574 => 318,  570 => 316,  564 => 313,  561 => 312,  556 => 310,  550 => 309,  547 => 308,  544 => 307,  541 => 306,  538 => 305,  535 => 304,  533 => 303,  530 => 302,  527 => 301,  524 => 300,  521 => 299,  518 => 298,  515 => 297,  512 => 296,  509 => 295,  506 => 294,  504 => 293,  485 => 276,  479 => 273,  475 => 272,  471 => 270,  469 => 269,  466 => 268,  459 => 264,  455 => 262,  453 => 261,  450 => 260,  443 => 256,  439 => 254,  433 => 251,  429 => 250,  425 => 248,  423 => 247,  416 => 243,  398 => 227,  391 => 223,  386 => 220,  384 => 219,  377 => 216,  375 => 215,  369 => 214,  358 => 206,  354 => 205,  350 => 204,  340 => 197,  336 => 196,  327 => 190,  318 => 184,  293 => 162,  286 => 158,  278 => 153,  271 => 149,  263 => 143,  250 => 142,  105 => 7,  92 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/super_admin/analysis/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Analyse {{ analysis.requestNumber }} - {{ analysis.company.companyName }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .info-card {
        background: #f8fafc;
        border-radius: 1rem;
        padding: 1.25rem;
        margin-bottom: 1rem;
    }
    .status-badge {
        font-size: 0.9rem;
        padding: 0.5rem 1rem;
        border-radius: 2rem;
    }
    .timeline {
        position: relative;
        padding-left: 2rem;
    }
    .timeline::before {
        content: '';
        position: absolute;
        left: 0.5rem;
        top: 0;
        bottom: 0;
        width: 2px;
        background: #e5e7eb;
    }
    .timeline-item {
        position: relative;
        padding-bottom: 1.5rem;
    }
    .timeline-item::before {
        content: '';
        position: absolute;
        left: -1.5rem;
        top: 0.25rem;
        width: 1rem;
        height: 1rem;
        border-radius: 50%;
        background: #0463f1;
        border: 2px solid white;
        box-shadow: 0 0 0 2px #e5e7eb;
    }
    .timeline-item.completed::before {
        background: #10b981;
    }
    .timeline-item.pending::before {
        background: #f59e0b;
    }
    .action-buttons {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }
    .payment-link {
        background: #f0fdf4;
        border: 1px solid #bbf7d0;
        border-radius: 0.75rem;
        padding: 1rem;
    }
    .payment-link input {
        font-size: 0.8rem;
        font-family: monospace;
    }
    .payment-details {
        background: #f8fafc;
        border-radius: 0.75rem;
        padding: 1rem;
        margin-top: 1rem;
    }
    .payment-details pre {
        background: #1e293b;
        color: #e2e8f0;
        padding: 0.75rem;
        border-radius: 0.5rem;
        font-size: 0.7rem;
        overflow-x: auto;
        max-height: 200px;
    }
    .company-logo {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        background: white;
        padding: 5px;
    }
    .company-initials {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        font-weight: bold;
        color: #0463f1;
    }
    .modal-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
    }
    .btn-loading {
        pointer-events: none;
        opacity: 0.7;
    }
    .report-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 1rem;
        padding: 1rem;
        margin-bottom: 1rem;
        color: white;
    }
    .report-card .btn {
        background: rgba(255,255,255,0.2);
        border: none;
        color: white;
    }
    .report-card .btn:hover {
        background: rgba(255,255,255,0.3);
    }
    .upload-form {
        background: #f8fafc;
        border-radius: 1rem;
        padding: 1rem;
        margin-top: 1rem;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('super_admin_analysis_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-chart-line me-1\"></i> Analyses
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">{{ analysis.requestNumber }}</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-chart-line me-2 text-primary\"></i>
                Analyse #{{ analysis.requestNumber }}
            </h1>
        </div>
        <div class=\"action-buttons\">
            <a href=\"{{ path('super_admin_analysis_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Colonne gauche -->
        <div class=\"col-xl-7\">
            <!-- Informations générales -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        Informations générales
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">N° Demande</small>
                                <div class=\"fw-bold fs-5\">{{ analysis.requestNumber }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Date de création</small>
                                <div class=\"fw-bold\">{{ analysis.createdAt|date('d/m/Y H:i:s') }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Type d'analyse</small>
                                <div class=\"fw-bold\">{{ analysis.typeLabel }}</div>
                                <small class=\"text-muted\">{{ analysis.amountFormatted }}</small>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Statut</small>
                                <div>
                                    <span class=\"badge {{ analysis.statusBadgeClass }} status-badge\">
                                        <i class=\"fas {{ analysis.status == 'completed' ? 'fa-check-circle' : (analysis.status == 'pending' ? 'fa-clock' : (analysis.status == 'processing' ? 'fa-spinner fa-pulse' : 'fa-times-circle')) }} me-1\"></i>
                                        {{ analysis.statusLabel }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Période analysée</small>
                                <div class=\"fw-bold\">{{ analysis.periodStart|date('d/m/Y') }} au {{ analysis.periodEnd|date('d/m/Y') }}</div>
                                {% set daysCount = analysis.periodStart.diff(analysis.periodEnd).days %}
                                <small class=\"text-muted\">{{ daysCount }} jours de données</small>
                            </div>
                        </div>
                        {% if analysis.notes %}
                        <div class=\"col-12\">
                            <div class=\"info-card\">
                                <small class=\"text-muted\">Notes / Instructions</small>
                                <div class=\"mt-1\">{{ analysis.notes|nl2br }}</div>
                            </div>
                        </div>
                        {% endif %}
                    </div>
                </div>
            </div>

            <!-- Chronologie -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-history me-2 text-primary\"></i>
                        Chronologie
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"timeline\">
                        <div class=\"timeline-item completed\">
                            <div class=\"fw-bold\">Demande créée</div>
                            <small class=\"text-muted\">{{ analysis.createdAt|date('d/m/Y H:i:s') }}</small>
                            <div class=\"text-muted small\">Demande enregistrée avec succès</div>
                        </div>
                        
                        {% if analysis.paidAt %}
                        <div class=\"timeline-item completed\">
                            <div class=\"fw-bold\">Paiement reçu</div>
                            <small class=\"text-muted\">{{ analysis.paidAt|date('d/m/Y H:i:s') }}</small>
                            <div class=\"text-muted small\">Transaction #{{ analysis.paymentTransactionId }}</div>
                        </div>
                        {% else %}
                        <div class=\"timeline-item pending\">
                            <div class=\"fw-bold\">En attente de paiement</div>
                            <small class=\"text-muted\">Expire le {{ analysis.expiresAt|date('d/m/Y') }}</small>
                            <div class=\"text-muted small\">Générer le lien de paiement ci-dessous</div>
                        </div>
                        {% endif %}
                        
                        {% if analysis.rawExportedAt %}
                        <div class=\"timeline-item completed\">
                            <div class=\"fw-bold\">Données brutes exportées</div>
                            <small class=\"text-muted\">{{ analysis.rawExportedAt|date('d/m/Y H:i:s') }}</small>
                            <div class=\"text-muted small\">Fichier ZIP disponible</div>
                        </div>
                        {% endif %}
                        
                        {% if analysis.finalReportUploadedAt %}
                        <div class=\"timeline-item completed\">
                            <div class=\"fw-bold\">Rapport final uploadé</div>
                            <small class=\"text-muted\">{{ analysis.finalReportUploadedAt|date('d/m/Y H:i:s') }}</small>
                            <div class=\"text-muted small\">Type: {{ analysis.finalReportType|upper }}</div>
                        </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite -->
        <div class=\"col-xl-5\">
            <!-- Entreprise -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-building me-2 text-primary\"></i>
                        Entreprise
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"text-center mb-3\">
                        {% set logoPath = analysis.company.logo %}
                        {% if logoPath and logoPath is not empty %}
                            {% if logoPath starts with 'uploads/' %}
                                {% set logoFullPath = logoPath %}
                            {% elseif logoPath starts with '/' %}
                                {% set logoFullPath = logoPath %}
                            {% else %}
                                {% set logoFullPath = 'uploads/logos/' ~ logoPath %}
                            {% endif %}
                            
                            {% if logoFullPath starts with '/' %}
                                {% set logoUrl = logoFullPath %}
                            {% else %}
                                {% set logoUrl = asset(logoFullPath) %}
                            {% endif %}
                            
                            <img src=\"{{ logoUrl }}\" alt=\"{{ analysis.company.companyName }}\" class=\"company-logo\" 
                                 onerror=\"this.onerror=null; this.parentElement.innerHTML='<div class=\\'company-initials\\'>{{ analysis.company.companyName|slice(0,2)|upper }}</div>';\">
                        {% else %}
                            <div class=\"company-initials\">
                                {{ analysis.company.companyName|slice(0,2)|upper }}
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"text-center mb-3\">
                        <h5 class=\"mb-0\">{{ analysis.company.companyName }}</h5>
                        <small class=\"text-muted\">{{ analysis.company.subscriptionNumber }}</small>
                    </div>
                    <div class=\"row g-2\">
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Type</span>
                                <span>{{ analysis.company.type == 'restaurant' ? '🍽️ Restaurant' : '🛒 Commerce' }}</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Email</span>
                                <span>{{ analysis.company.email }}</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Téléphone</span>
                                <span>{{ analysis.company.phone|default('—') }}</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Date création</span>
                                <span>{{ analysis.company.createdAt|date('d/m/Y') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"mt-3\">
                        <a href=\"{{ path('app_super_admin_hma_service_show', {'id': analysis.company.id}) }}\" class=\"btn btn-sm btn-outline-primary w-100\">
                            <i class=\"fas fa-eye me-1\"></i> Voir les détails
                        </a>
                    </div>
                </div>
            </div>

            <!-- Actions principales -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-cog me-2 text-primary\"></i>
                        Actions
                    </h5>
                </div>
                <div class=\"card-body\">
                    {# Cas 1: En attente de paiement #}
                    {% if analysis.status == 'pending' %}
                        <div class=\"payment-link mb-3\">
                            <div class=\"fw-bold mb-2\">🔗 Lien de paiement</div>
                            <div class=\"input-group mb-2\">
                                <input type=\"text\" id=\"paymentLinkInput\" class=\"form-control form-control-sm\" readonly>
                                <button class=\"btn btn-sm btn-primary\" id=\"copyPaymentLinkBtn\" title=\"Copier le lien\">
                                    <i class=\"fas fa-copy\"></i>
                                </button>
                            </div>
                            <div class=\"d-flex gap-2\">
                                <button class=\"btn btn-sm btn-success w-100\" id=\"generatePaymentLinkBtn\">
                                    <i class=\"fas fa-credit-card me-1\"></i> Générer le lien
                                </button>
                                <button class=\"btn btn-sm btn-info w-100\" id=\"sendEmailLinkBtn\" style=\"display: none;\">
                                    <i class=\"fas fa-envelope me-1\"></i> Envoyer par email
                                </button>
                            </div>
                        </div>
                        <div class=\"alert alert-warning small\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i>
                            Ce lien expirera le {{ analysis.expiresAt|date('d/m/Y') }}.
                        </div>
                    {% endif %}
                    
                    {# Cas 2: Payé - Générer l'export brut #}
                    {% if analysis.status == 'paid' %}
                        <div class=\"alert alert-info\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Le paiement a été confirmé. Vous pouvez maintenant exporter les données brutes.
                        </div>
                        <button type=\"button\" class=\"btn btn-primary w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmGenerateRawModal\">
                            <i class=\"fas fa-database me-1\"></i> Exporter les données brutes (ZIP)
                        </button>
                    {% endif %}
                    
                    {# Cas 3: En traitement (données brutes générées, en attente upload rapport) #}
                    {% if analysis.status == 'processing' and analysis.rawExportPath %}
                        <div class=\"alert alert-success\">
                            <i class=\"fas fa-check-circle me-1\"></i>
                            Les données brutes sont prêtes.
                        </div>
                        
                        <!-- Télécharger données brutes -->
                        <a href=\"{{ path('super_admin_analysis_download_raw', {'id': analysis.id}) }}\" class=\"btn btn-outline-primary w-100 mb-3\">
                            <i class=\"fas fa-download me-1\"></i> Télécharger les données brutes (ZIP)
                        </a>
                        
                        <hr>
                        
                        <div class=\"fw-bold mb-3\">📤 Uploader le rapport final</div>
                        
                        <!-- Formulaire d'upload simple -->
                        <form method=\"post\" action=\"{{ path('super_admin_analysis_upload_report', {'id': analysis.id}) }}\" enctype=\"multipart/form-data\" class=\"upload-form\">
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Sélectionner le fichier</label>
                                <input type=\"file\" name=\"report\" class=\"form-control\" accept=\".xlsx,.xls,.pbix,.pdf,.zip\" required>
                                <small class=\"text-muted d-block mt-1\">Formats acceptés: Excel (.xlsx), Power BI (.pbix), PDF, ZIP</small>
                            </div>
                            <button type=\"submit\" class=\"btn btn-success w-100\">
                                <i class=\"fas fa-cloud-upload-alt me-1\"></i> Uploader le rapport final
                            </button>
                        </form>
                    {% endif %}
                    
                    {# Cas 4: Complété (rapport final uploadé) #}
                    {% if analysis.status == 'completed' %}
                        <div class=\"report-card\">
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <div>
                                    <i class=\"fas fa-file-alt fa-2x me-2\"></i>
                                    <strong>Rapport final</strong>
                                    <div class=\"small\">{{ analysis.finalReportFilename }}</div>
                                    <div class=\"small opacity-75\">Uploadé le {{ analysis.finalReportUploadedAt|date('d/m/Y H:i') }}</div>
                                </div>
                                <div class=\"btn-group-vertical\">
                                    <a href=\"{{ path('super_admin_analysis_download_final', {'id': analysis.id}) }}\" class=\"btn btn-sm mb-1\">
                                        <i class=\"fas fa-download\"></i> Télécharger
                                    </a>
                                    <button type=\"button\" class=\"btn btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmReplaceModal\">
                                        <i class=\"fas fa-sync-alt\"></i> Remplacer
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <hr>
                        
                        <div class=\"alert alert-success\">
                            <i class=\"fas fa-check-circle me-1\"></i>
                            L'entreprise peut maintenant télécharger son rapport.
                        </div>
                        
                        <!-- Option pour retélécharger les données brutes -->
                        <a href=\"{{ path('super_admin_analysis_download_raw', {'id': analysis.id}) }}\" class=\"btn btn-outline-secondary w-100\">
                            <i class=\"fas fa-database me-1\"></i> Télécharger les données brutes
                        </a>
                        
                        <!-- Formulaire pour remplacer le rapport -->
                        <form method=\"post\" action=\"{{ path('super_admin_analysis_replace_report', {'id': analysis.id}) }}\" enctype=\"multipart/form-data\" class=\"upload-form mt-3\">
                            <div class=\"mb-2\">
                                <label class=\"form-label\">Remplacer le rapport</label>
                                <input type=\"file\" name=\"report\" class=\"form-control form-control-sm\" accept=\".xlsx,.xls,.pbix,.pdf,.zip\" required>
                            </div>
                            <button type=\"submit\" class=\"btn btn-outline-warning w-100\">
                                <i class=\"fas fa-sync-alt me-1\"></i> Remplacer le rapport
                            </button>
                        </form>
                    {% endif %}
                    
                    {# Cas 5: En traitement sans données brutes #}
                    {% if analysis.status == 'processing' and not analysis.rawExportPath %}
                        <div class=\"alert alert-warning\">
                            <i class=\"fas fa-spinner fa-pulse me-1\"></i>
                            Génération des données brutes en cours...
                        </div>
                        <div class=\"progress mb-3\">
                            <div class=\"progress-bar progress-bar-striped progress-bar-animated\" style=\"width: 100%\">Génération...</div>
                        </div>
                        <button type=\"button\" class=\"btn btn-danger w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmCancelModal\">
                            <i class=\"fas fa-ban me-1\"></i> Annuler
                        </button>
                    {% endif %}
                    
                    {# Cas 6: Échec #}
                    {% if analysis.status == 'failed' %}
                        <div class=\"alert alert-danger\">
                            <i class=\"fas fa-exclamation-circle me-1\"></i>
                            Une erreur est survenue.
                        </div>
                        <button type=\"button\" class=\"btn btn-warning w-100 mb-2\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmRetryModal\">
                            <i class=\"fas fa-sync me-1\"></i> Réessayer
                        </button>
                        <button type=\"button\" class=\"btn btn-outline-danger w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmForcePaidModal\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> Forcer le statut à \"Payé\"
                        </button>
                    {% endif %}
                </div>
            </div>

            <!-- Détails du paiement -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-credit-card me-2 text-primary\"></i>
                        Détails du paiement
                    </h5>
                </div>
                <div class=\"card-body\">
                    {% set payment = payments|first %}
                    
                    {% if payment %}
                    <div class=\"row g-2\">
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">ID Transaction</span>
                                <span class=\"fw-bold\">{{ payment.transactionId }}</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Date de paiement</span>
                                <span>{{ payment.paidAt ? payment.paidAt|date('d/m/Y H:i:s') : analysis.paidAt|date('d/m/Y H:i:s') }}</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Montant payé</span>
                                <span class=\"fw-bold text-success\">{{ analysis.amountFormatted }}</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Statut</span>
                                <span><span class=\"badge bg-success\">{{ payment.statusLabel }}</span></span>
                            </div>
                        </div>
                    </div>
                    {% else %}
                    <div class=\"alert alert-info mb-0\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Aucun paiement enregistré.
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>

{# ==================== MODALES ==================== #}

{# Modal Générer l'export brut #}
<div class=\"modal fade\" id=\"confirmGenerateRawModal\" tabindex=\"-1\" data-bs-backdrop=\"static\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-database me-2\"></i>
                    Export des données brutes
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"modal-icon bg-primary bg-opacity-10\">
                    <i class=\"fas fa-chart-line fa-3x text-primary\"></i>
                </div>
                <p class=\"mb-3\">
                    <strong>Confirmez-vous l'export des données brutes ?</strong>
                </p>
                <div class=\"alert alert-info text-start small\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Cette opération peut prendre plusieurs minutes. Vous recevrez un fichier ZIP contenant toutes les données au format Excel.
                </div>
            </div>
            <div class=\"modal-footer justify-content-center\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"confirmGenerateRawBtn\">
                    <i class=\"fas fa-check me-2\"></i> Confirmer
                </button>
            </div>
        </div>
    </div>
</div>

{# Modal Remplacer le rapport #}
<div class=\"modal fade\" id=\"confirmReplaceModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-sync-alt me-2\"></i>
                    Remplacer le rapport
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Voulez-vous remplacer le rapport actuel ?</p>
                <div class=\"alert alert-warning small\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    L'ancien fichier sera supprimé définitivement.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-warning\" id=\"confirmReplaceBtn\">Confirmer</button>
            </div>
        </div>
    </div>
</div>

{# Modal Réessayer #}
<div class=\"modal fade\" id=\"confirmRetryModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning\">
                <h5 class=\"modal-title\">Réessayer</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Voulez-vous réessayer de générer l'analyse ?</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-warning\" id=\"confirmRetryBtn\">Réessayer</button>
            </div>
        </div>
    </div>
</div>

{# Modal Forcer le statut #}
<div class=\"modal fade\" id=\"confirmForcePaidModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">Forcer le statut à \"Payé\"</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Attention ! Cette action est irréversible.</p>
                <div class=\"alert alert-danger small\">Assurez-vous que le paiement a bien été effectué.</div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"confirmForcePaidBtn\">Confirmer</button>
            </div>
        </div>
    </div>
</div>

{# Modal Annuler #}
<div class=\"modal fade\" id=\"confirmCancelModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">Annuler la génération</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Voulez-vous vraiment annuler la génération ?</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Non</button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"confirmCancelBtn\">Oui, annuler</button>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const analysisId = {{ analysis.id }};
    
    // ==================== GÉNÉRATION EXPORT BRUT ====================
    const generateRawBtn = document.getElementById('confirmGenerateRawBtn');
    if (generateRawBtn) {
        generateRawBtn.addEventListener('click', function() {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '{{ path('super_admin_analysis_generate_raw', {'id': analysis.id}) }}';
            document.body.appendChild(form);
            generateRawBtn.disabled = true;
            generateRawBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span> Génération...';
            
            const modal = bootstrap.Modal.getInstance(document.getElementById('confirmGenerateRawModal'));
            modal.hide();
            form.submit();
        });
    }
    
    // ==================== REPLACER LE RAPPORT ====================
    const replaceBtn = document.getElementById('confirmReplaceBtn');
    if (replaceBtn) {
        replaceBtn.addEventListener('click', function() {
            // Le formulaire de remplacement est déjà dans la page
            const form = document.querySelector('#confirmReplaceModal').closest('form');
            if (form) {
                form.submit();
            }
            const modal = bootstrap.Modal.getInstance(document.getElementById('confirmReplaceModal'));
            modal.hide();
        });
    }
    
    // ==================== AUTRES ACTIONS ====================
    const retryBtn = document.getElementById('confirmRetryBtn');
    if (retryBtn) {
        retryBtn.addEventListener('click', () => {
            window.location.href = '{{ path('super_admin_analysis_retry', {'id': analysis.id}) }}';
        });
    }
    
    const forcePaidBtn = document.getElementById('confirmForcePaidBtn');
    if (forcePaidBtn) {
        forcePaidBtn.addEventListener('click', () => {
            window.location.href = '{{ path('super_admin_analysis_force_to_paid', {'id': analysis.id}) }}';
        });
    }
    
    const cancelBtn = document.getElementById('confirmCancelBtn');
    if (cancelBtn) {
        cancelBtn.addEventListener('click', () => {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '{{ path('super_admin_analysis_cancel', {'id': analysis.id}) }}';
            document.body.appendChild(form);
            form.submit();
        });
    }
    
    // ==================== LIEN DE PAIEMENT ====================
    const generateLinkBtn = document.getElementById('generatePaymentLinkBtn');
    const sendEmailBtn = document.getElementById('sendEmailLinkBtn');
    const paymentLinkInput = document.getElementById('paymentLinkInput');
    const copyBtn = document.getElementById('copyPaymentLinkBtn');
    
    if (generateLinkBtn && {{ analysis.status == 'pending' ? 'true' : 'false' }}) {
        generateLinkBtn.addEventListener('click', async () => {
            generateLinkBtn.disabled = true;
            generateLinkBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-1\"></span> Génération...';
            
            const response = await fetch('{{ path('super_admin_analysis_payment_link', {'id': analysis.id}) }}');
            const data = await response.json();
            
            if (data.payment_url && data.payment_url !== '#') {
                paymentLinkInput.value = data.payment_url;
                generateLinkBtn.innerHTML = '<i class=\"fas fa-check me-1\"></i> Lien généré';
                sendEmailBtn.style.display = 'block';
                showToast('success', 'Lien généré avec succès');
            } else {
                generateLinkBtn.innerHTML = '<i class=\"fas fa-credit-card me-1\"></i> Générer le lien';
                showToast('error', 'Erreur lors de la génération');
            }
            generateLinkBtn.disabled = false;
        });
    }
    
    if (sendEmailBtn) {
        sendEmailBtn.addEventListener('click', async () => {
            const paymentLink = paymentLinkInput.value;
            if (!paymentLink) {
                showToast('error', 'Générez d\\'abord le lien');
                return;
            }
            
            sendEmailBtn.disabled = true;
            sendEmailBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-1\"></span> Envoi...';
            
            const response = await fetch('{{ path('super_admin_analysis_send_payment_link', {'id': analysis.id}) }}', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ payment_link: paymentLink })
            });
            const data = await response.json();
            
            if (data.success) {
                showToast('success', 'Email envoyé avec succès');
                sendEmailBtn.innerHTML = '<i class=\"fas fa-check me-1\"></i> Email envoyé';
            } else {
                showToast('error', data.error || 'Erreur');
                sendEmailBtn.innerHTML = '<i class=\"fas fa-envelope me-1\"></i> Envoyer par email';
                sendEmailBtn.disabled = false;
            }
        });
    }
    
    if (copyBtn) {
        copyBtn.addEventListener('click', () => {
            paymentLinkInput.select();
            document.execCommand('copy');
            showToast('success', 'Lien copié');
        });
    }
    
    function showToast(type, message) {
        const toast = document.createElement('div');
        toast.className = `position-fixed bottom-0 end-0 p-3 m-3 bg-\${type === 'success' ? 'success' : 'danger'} text-white rounded shadow`;
        toast.style.zIndex = '9999';
        toast.style.cursor = 'pointer';
        toast.innerHTML = `<i class=\"fas fa-\${type === 'success' ? 'check-circle' : 'exclamation-circle'} me-2\"></i>\${message}`;
        document.body.appendChild(toast);
        setTimeout(() => toast.remove(), 3000);
    }
});
</script>
{% endblock %}", "super_admin/analysis/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\analysis\\show.html.twig");
    }
}
