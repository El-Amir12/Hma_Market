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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "<div class=\"container-fluid px-4 py-3\">
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-chart-line me-1\"></i> Analyses
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 22, $this->source); })()), "requestNumber", [], "any", false, false, false, 22), "html", null, true);
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
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row g-4\">
        <div class=\"col-md-8\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        Informations
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">N° Demande</small>
                                <div class=\"fw-bold\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 51, $this->source); })()), "requestNumber", [], "any", false, false, false, 51), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Date de création</small>
                                <div class=\"fw-bold\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 57, $this->source); })()), "createdAt", [], "any", false, false, false, 57), "d/m/Y H:i:s"), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Type d'analyse</small>
                                <div class=\"fw-bold\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 63, $this->source); })()), "typeLabel", [], "any", false, false, false, 63), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Montant</small>
                                <div class=\"fw-bold text-primary\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 69, $this->source); })()), "amountFormatted", [], "any", false, false, false, 69), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Statut</small>
                                <div>
                                    <span class=\"badge ";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 76, $this->source); })()), "statusBadgeClass", [], "any", false, false, false, 76), "html", null, true);
        yield "\">
                                        <i class=\"fas ";
        // line 77
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 77, $this->source); })()), "status", [], "any", false, false, false, 77) == "completed")) ? ("fa-check-circle") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 77, $this->source); })()), "status", [], "any", false, false, false, 77) == "pending")) ? ("fa-clock") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 77, $this->source); })()), "status", [], "any", false, false, false, 77) == "processing")) ? ("fa-spinner fa-pulse") : ("fa-times-circle"))))));
        yield " me-1\"></i>
                                        ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 78, $this->source); })()), "statusLabel", [], "any", false, false, false, 78), "html", null, true);
        yield "
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Période analysée</small>
                                <div class=\"fw-bold\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 86, $this->source); })()), "periodStart", [], "any", false, false, false, 86), "d/m/Y"), "html", null, true);
        yield " au ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 86, $this->source); })()), "periodEnd", [], "any", false, false, false, 86), "d/m/Y"), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        ";
        // line 89
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 89, $this->source); })()), "notes", [], "any", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 90
            yield "                        <div class=\"col-12\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Notes</small>
                                <div class=\"fw-bold\">";
            // line 93
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 93, $this->source); })()), "notes", [], "any", false, false, false, 93), "html", null, true));
            yield "</div>
                            </div>
                        </div>
                        ";
        }
        // line 97
        yield "                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-download me-2 text-primary\"></i>
                        Téléchargement
                    </h5>
                </div>
                <div class=\"card-body text-center\">
                    
                    ";
        // line 113
        yield "                    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 113, $this->source); })()), "status", [], "any", false, false, false, 113) == "completed") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 113, $this->source); })()), "finalReportPath", [], "any", false, false, false, 113))) {
            // line 114
            yield "                        <div class=\"mb-3\">
                            <i class=\"fas fa-file-alt fa-4x text-success mb-2\"></i>
                            <p><strong>Votre rapport est prêt !</strong></p>
                            <small class=\"text-muted\">
                                Type: ";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 118, $this->source); })()), "finalReportType", [], "any", false, false, false, 118)), "html", null, true);
            yield "<br>
                                Disponible depuis le ";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 119, $this->source); })()), "finalReportUploadedAt", [], "any", false, false, false, 119), "d/m/Y"), "html", null, true);
            yield "
                            </small>
                        </div>
                        
                        <a href=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_download_final", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 123, $this->source); })()), "id", [], "any", false, false, false, 123)]), "html", null, true);
            yield "\" class=\"btn btn-success w-100 mb-2\">
                            <i class=\"fas fa-download me-1\"></i> Télécharger le rapport
                        </a>
                        
                        ";
            // line 127
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 127, $this->source); })()), "rawExportPath", [], "any", false, false, false, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 128
                yield "                            <hr>
                            <small class=\"text-muted d-block mb-2\">📁 Données brutes (optionnel)</small>
                            <a href=\"";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_download_raw", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 130, $this->source); })()), "id", [], "any", false, false, false, 130)]), "html", null, true);
                yield "\" class=\"btn btn-outline-secondary w-100\">
                                <i class=\"fas fa-database me-1\"></i> Télécharger les données brutes
                            </a>
                        ";
            }
            // line 134
            yield "                    
                    ";
            // line 136
            yield "                    ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 136, $this->source); })()), "status", [], "any", false, false, false, 136) == "processing") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 136, $this->source); })()), "rawExportPath", [], "any", false, false, false, 136))) {
            // line 137
            yield "                        <div class=\"mb-3\">
                            <i class=\"fas fa-database fa-4x text-info mb-2\"></i>
                            <p><strong>Données brutes disponibles</strong></p>
                            <small class=\"text-muted\">Notre expert analyse vos données pour préparer votre rapport personnalisé.</small>
                        </div>
                        
                        <a href=\"";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_analysis_download_raw", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 143, $this->source); })()), "id", [], "any", false, false, false, 143)]), "html", null, true);
            yield "\" class=\"btn btn-primary w-100 mb-2\">
                            <i class=\"fas fa-database me-1\"></i> Télécharger les données brutes
                        </a>
                        
                        <div class=\"alert alert-info small mt-3\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Le rapport final sera disponible prochainement. Vous serez notifié par email.
                        </div>
                    
                    ";
            // line 153
            yield "                    ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 153, $this->source); })()), "status", [], "any", false, false, false, 153) == "processing") &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 153, $this->source); })()), "rawExportPath", [], "any", false, false, false, 153))) {
            // line 154
            yield "                        <div class=\"mb-3\">
                            <i class=\"fas fa-spinner fa-pulse fa-4x text-primary mb-2\"></i>
                            <p>Préparation des données en cours...</p>
                            <small class=\"text-muted\">Cette page se rafraîchira automatiquement</small>
                        </div>
                        <div class=\"progress mb-3\">
                            <div class=\"progress-bar progress-bar-striped progress-bar-animated\" style=\"width: 100%\"></div>
                        </div>
                    
                    ";
            // line 164
            yield "                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 164, $this->source); })()), "status", [], "any", false, false, false, 164) == "pending")) {
            // line 165
            yield "                        <div class=\"mb-3\">
                            <i class=\"fas fa-clock fa-4x text-warning mb-2\"></i>
                            <p>En attente de validation.</p>
                            <small class=\"text-muted\">Notre équipe vous contactera pour finaliser la commande.</small>
                        </div>
                    
                    ";
            // line 172
            yield "                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 172, $this->source); })()), "status", [], "any", false, false, false, 172) == "paid")) {
            // line 173
            yield "                        <div class=\"mb-3\">
                            <i class=\"fas fa-credit-card fa-4x text-info mb-2\"></i>
                            <p>Paiement confirmé.</p>
                            <small class=\"text-muted\">L'analyse va commencer prochainement.</small>
                        </div>
                    
                    ";
            // line 180
            yield "                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 180, $this->source); })()), "status", [], "any", false, false, false, 180) == "failed")) {
            // line 181
            yield "                        <div class=\"mb-3\">
                            <i class=\"fas fa-exclamation-triangle fa-4x text-danger mb-2\"></i>
                            <p>Une erreur est survenue.</p>
                            <small class=\"text-muted\">Veuillez contacter le support.</small>
                        </div>
                    ";
        }
        // line 187
        yield "                    
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

    // line 195
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

        // line 196
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Rafraîchissement automatique UNIQUEMENT si pas de données brutes
    ";
        // line 200
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 200, $this->source); })()), "status", [], "any", false, false, false, 200) == "processing") &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 200, $this->source); })()), "rawExportPath", [], "any", false, false, false, 200))) {
            // line 201
            yield "        console.log('⏳ Génération en cours, rechargement dans 10s...');
        setTimeout(() => {
            window.location.reload();
        }, 10000);
    ";
        }
        // line 206
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
        return array (  415 => 206,  408 => 201,  406 => 200,  399 => 196,  386 => 195,  369 => 187,  361 => 181,  358 => 180,  350 => 173,  347 => 172,  339 => 165,  336 => 164,  325 => 154,  322 => 153,  310 => 143,  302 => 137,  299 => 136,  296 => 134,  289 => 130,  285 => 128,  283 => 127,  276 => 123,  269 => 119,  265 => 118,  259 => 114,  256 => 113,  239 => 97,  232 => 93,  227 => 90,  225 => 89,  217 => 86,  206 => 78,  202 => 77,  198 => 76,  188 => 69,  179 => 63,  170 => 57,  161 => 51,  138 => 31,  126 => 22,  119 => 18,  111 => 13,  103 => 7,  90 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/company/analysis/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Analyse {{ analysis.requestNumber }} - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid px-4 py-3\">
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
        <div class=\"col-md-8\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        Informations
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">N° Demande</small>
                                <div class=\"fw-bold\">{{ analysis.requestNumber }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Date de création</small>
                                <div class=\"fw-bold\">{{ analysis.createdAt|date('d/m/Y H:i:s') }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Type d'analyse</small>
                                <div class=\"fw-bold\">{{ analysis.typeLabel }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Montant</small>
                                <div class=\"fw-bold text-primary\">{{ analysis.amountFormatted }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Statut</small>
                                <div>
                                    <span class=\"badge {{ analysis.statusBadgeClass }}\">
                                        <i class=\"fas {{ analysis.status == 'completed' ? 'fa-check-circle' : (analysis.status == 'pending' ? 'fa-clock' : (analysis.status == 'processing' ? 'fa-spinner fa-pulse' : 'fa-times-circle')) }} me-1\"></i>
                                        {{ analysis.statusLabel }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Période analysée</small>
                                <div class=\"fw-bold\">{{ analysis.periodStart|date('d/m/Y') }} au {{ analysis.periodEnd|date('d/m/Y') }}</div>
                            </div>
                        </div>
                        {% if analysis.notes %}
                        <div class=\"col-12\">
                            <div class=\"border-bottom pb-2\">
                                <small class=\"text-muted\">Notes</small>
                                <div class=\"fw-bold\">{{ analysis.notes|nl2br }}</div>
                            </div>
                        </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-download me-2 text-primary\"></i>
                        Téléchargement
                    </h5>
                </div>
                <div class=\"card-body text-center\">
                    
                    {# === RAPPORT FINAL DISPONIBLE (COMPLETED) === #}
                    {% if analysis.status == 'completed' and analysis.finalReportPath %}
                        <div class=\"mb-3\">
                            <i class=\"fas fa-file-alt fa-4x text-success mb-2\"></i>
                            <p><strong>Votre rapport est prêt !</strong></p>
                            <small class=\"text-muted\">
                                Type: {{ analysis.finalReportType|upper }}<br>
                                Disponible depuis le {{ analysis.finalReportUploadedAt|date('d/m/Y') }}
                            </small>
                        </div>
                        
                        <a href=\"{{ path('company_analysis_download_final', {'id': analysis.id}) }}\" class=\"btn btn-success w-100 mb-2\">
                            <i class=\"fas fa-download me-1\"></i> Télécharger le rapport
                        </a>
                        
                        {% if analysis.rawExportPath %}
                            <hr>
                            <small class=\"text-muted d-block mb-2\">📁 Données brutes (optionnel)</small>
                            <a href=\"{{ path('company_analysis_download_raw', {'id': analysis.id}) }}\" class=\"btn btn-outline-secondary w-100\">
                                <i class=\"fas fa-database me-1\"></i> Télécharger les données brutes
                            </a>
                        {% endif %}
                    
                    {# === DONNÉES BRUTES DISPONIBLES (PROCESSING) === #}
                    {% elseif analysis.status == 'processing' and analysis.rawExportPath %}
                        <div class=\"mb-3\">
                            <i class=\"fas fa-database fa-4x text-info mb-2\"></i>
                            <p><strong>Données brutes disponibles</strong></p>
                            <small class=\"text-muted\">Notre expert analyse vos données pour préparer votre rapport personnalisé.</small>
                        </div>
                        
                        <a href=\"{{ path('company_analysis_download_raw', {'id': analysis.id}) }}\" class=\"btn btn-primary w-100 mb-2\">
                            <i class=\"fas fa-database me-1\"></i> Télécharger les données brutes
                        </a>
                        
                        <div class=\"alert alert-info small mt-3\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Le rapport final sera disponible prochainement. Vous serez notifié par email.
                        </div>
                    
                    {# === GÉNÉRATION DES DONNÉES BRUTES EN COURS === #}
                    {% elseif analysis.status == 'processing' and not analysis.rawExportPath %}
                        <div class=\"mb-3\">
                            <i class=\"fas fa-spinner fa-pulse fa-4x text-primary mb-2\"></i>
                            <p>Préparation des données en cours...</p>
                            <small class=\"text-muted\">Cette page se rafraîchira automatiquement</small>
                        </div>
                        <div class=\"progress mb-3\">
                            <div class=\"progress-bar progress-bar-striped progress-bar-animated\" style=\"width: 100%\"></div>
                        </div>
                    
                    {# === EN ATTENTE DE PAIEMENT === #}
                    {% elseif analysis.status == 'pending' %}
                        <div class=\"mb-3\">
                            <i class=\"fas fa-clock fa-4x text-warning mb-2\"></i>
                            <p>En attente de validation.</p>
                            <small class=\"text-muted\">Notre équipe vous contactera pour finaliser la commande.</small>
                        </div>
                    
                    {# === PAYÉ EN ATTENTE DE TRAITEMENT === #}
                    {% elseif analysis.status == 'paid' %}
                        <div class=\"mb-3\">
                            <i class=\"fas fa-credit-card fa-4x text-info mb-2\"></i>
                            <p>Paiement confirmé.</p>
                            <small class=\"text-muted\">L'analyse va commencer prochainement.</small>
                        </div>
                    
                    {# === ÉCHEC === #}
                    {% elseif analysis.status == 'failed' %}
                        <div class=\"mb-3\">
                            <i class=\"fas fa-exclamation-triangle fa-4x text-danger mb-2\"></i>
                            <p>Une erreur est survenue.</p>
                            <small class=\"text-muted\">Veuillez contacter le support.</small>
                        </div>
                    {% endif %}
                    
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
    // Rafraîchissement automatique UNIQUEMENT si pas de données brutes
    {% if analysis.status == 'processing' and not analysis.rawExportPath %}
        console.log('⏳ Génération en cours, rechargement dans 10s...');
        setTimeout(() => {
            window.location.reload();
        }, 10000);
    {% endif %}
});
</script>
{% endblock %}", "company/analysis/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\company\\analysis\\show.html.twig");
    }
}
