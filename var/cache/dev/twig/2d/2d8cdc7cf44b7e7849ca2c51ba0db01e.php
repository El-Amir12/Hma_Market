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

/* super_admin/hma_service/subscriptions.html.twig */
class __TwigTemplate_c2bf89bc5f9f2b1aa3666fd07b6b124a extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/hma_service/subscriptions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/hma_service/subscriptions.html.twig"));

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

        yield "Historique des abonnements - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 4, $this->source); })()), "companyName", [], "any", false, false, false, 4), "html", null, true);
        
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
        yield "<div class=\"container-fluid px-2 px-sm-3 px-md-4 py-3 py-md-4\">
    <!-- En-tête avec le fronton de l'entreprise -->
    <div class=\"card mb-3 mb-md-4 shadow-sm border-0\">
        <div class=\"card-body p-3 p-md-4\">
            <div class=\"d-flex flex-column flex-sm-row align-items-sm-center gap-3\">
                <div class=\"flex-shrink-0 text-center text-sm-start\">
                    ";
        // line 13
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 13, $this->source); })()), "logo", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 14, $this->source); })()), "logo", [], "any", false, false, false, 14))), "html", null, true);
            yield "\" 
                             alt=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 15, $this->source); })()), "companyName", [], "any", false, false, false, 15), "html", null, true);
            yield "\" 
                             class=\"rounded-3\"
                             style=\"width: 50px; height: 50px; object-fit: cover;\">
                    ";
        } else {
            // line 19
            yield "                        <div style=\"width: 50px; height: 50px; border-radius: 10px; 
                                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                                    color: white; display: flex; align-items: center; justify-content: center;
                                    font-weight: bold; font-size: 1.2rem; margin: 0 auto;\">
                            ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 23, $this->source); })()), "companyName", [], "any", false, false, false, 23))), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 26
        yield "                </div>
                <div class=\"flex-grow-1 text-center text-sm-start\">
                    <h4 class=\"mb-1 fs-5 fs-md-4\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 28, $this->source); })()), "companyName", [], "any", false, false, false, 28), "html", null, true);
        yield "</h4>
                    <div class=\"d-flex flex-wrap justify-content-center justify-content-sm-start gap-2 gap-md-3\">
                        <span class=\"text-muted small\">
                            <i class=\"bi bi-envelope me-1\"></i>
                            ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), "html", null, true);
        yield "
                        </span>
                        <span class=\"text-muted small\">
                            <i class=\"bi bi-telephone me-1\"></i>
                            ";
        // line 36
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 36, $this->source); })()), "phone", [], "any", false, false, false, 36)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 36, $this->source); })()), "phone", [], "any", false, false, false, 36), "html", null, true)) : ("Non renseigné"));
        yield "
                        </span>
                        <span class=\"badge ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 38, $this->source); })()), "currentPlanBadgeClass", [], "any", false, false, false, 38), "html", null, true);
        yield " fs-6\">
                            ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 39, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 39), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>
                <div class=\"text-center text-sm-end\">
                    <a href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
        yield "\" 
                       class=\"btn btn-outline-secondary btn-sm w-100 w-sm-auto\">
                        <i class=\"bi bi-arrow-left me-1\"></i>
                        Retour
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres - Version responsive -->
    <div class=\"card mb-3 mb-md-4 shadow-sm border-0\">
        <div class=\"card-body p-3 p-md-4\">
            <form method=\"get\" class=\"row g-2 g-md-3\">
                <div class=\"col-12 col-sm-6 col-md-3\">
                    <label class=\"form-label small fw-semibold mb-1\">Statut</label>
                    <select name=\"status\" class=\"form-select form-select-sm\">
                        <option value=\"\">Tous</option>
                        <option value=\"active\" ";
        // line 62
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 62, $this->source); })()), "status", [], "any", false, false, false, 62) == "active")) {
            yield "selected";
        }
        yield ">Actif</option>
                        <option value=\"expired\" ";
        // line 63
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 63, $this->source); })()), "status", [], "any", false, false, false, 63) == "expired")) {
            yield "selected";
        }
        yield ">Expiré</option>
                        <option value=\"cancelled\" ";
        // line 64
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 64, $this->source); })()), "status", [], "any", false, false, false, 64) == "cancelled")) {
            yield "selected";
        }
        yield ">Annulé</option>
                    </select>
                </div>
                <div class=\"col-6 col-sm-6 col-md-3\">
                    <label class=\"form-label small fw-semibold mb-1\">Date début</label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control form-control-sm\" value=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 69, $this->source); })()), "date_from", [], "any", false, false, false, 69), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-6 col-sm-6 col-md-3\">
                    <label class=\"form-label small fw-semibold mb-1\">Date fin</label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control form-control-sm\" value=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 73, $this->source); })()), "date_to", [], "any", false, false, false, 73), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-12 col-sm-6 col-md-3 d-flex align-items-end gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary btn-sm flex-grow-1\">
                        <i class=\"bi bi-funnel me-1\"></i>
                        Filtrer
                    </button>
                    <a href=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_subscriptions", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80)]), "html", null, true);
        yield "\" 
                       class=\"btn btn-outline-secondary btn-sm\" title=\"Réinitialiser les filtres\">
                        <i class=\"bi bi-arrow-counterclockwise\"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Tableau des abonnements -->
    <div class=\"card shadow-sm border-0\">
        <div class=\"card-header bg-white d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2 p-3 p-md-4 border-0\">
            <h5 class=\"mb-0 fs-6 fs-md-5\">
                <i class=\"bi bi-clock-history me-2\"></i>
                Historique complet des abonnements
                <span class=\"badge bg-secondary ms-2\">";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 95, $this->source); })())), "html", null, true);
        yield "</span>
            </h5>
            <div class=\"btn-group btn-group-sm w-100 w-sm-auto\" role=\"group\">
                <a href=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_export", ["company" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 98, $this->source); })()), "id", [], "any", false, false, false, 98), "format" => "pdf"]), "html", null, true);
        yield "\" 
                   class=\"btn btn-outline-danger flex-grow-1 flex-sm-grow-0\">
                    <i class=\"bi bi-file-pdf me-1\"></i>
                    <span class=\"d-none d-sm-inline\">PDF</span>
                </a>
                <a href=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_export", ["company" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 103, $this->source); })()), "id", [], "any", false, false, false, 103), "format" => "excel"]), "html", null, true);
        yield "\" 
                   class=\"btn btn-outline-success flex-grow-1 flex-sm-grow-0\">
                    <i class=\"bi bi-file-excel me-1\"></i>
                    <span class=\"d-none d-sm-inline\">Excel</span>
                </a>
            </div>
        </div>
        <div class=\"card-body p-0\">
            <!-- Version Desktop - Tableau -->
            <div class=\"d-none d-md-block\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover align-middle mb-0\">
                        <thead class=\"bg-light\">
                            <tr>
                                <th class=\"py-2 px-3 text-nowrap\">Date</th>
                                <th class=\"py-2 px-3\">Plan</th>
                                <th class=\"py-2 px-3\">Période</th>
                                <th class=\"py-2 px-3 text-end\">Montant</th>
                                <th class=\"py-2 px-3\">Statut</th>
                                <th class=\"py-2 px-3\">Paiement</th>
                                <th class=\"py-2 px-3 text-center\" style=\"width: 50px;\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 127, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
            // line 128
            yield "                                <tr>
                                    <td class=\"py-2 px-3\">
                                        <span class=\"fw-semibold\">";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "createdAt", [], "any", false, false, false, 130), "d/m/Y"), "html", null, true);
            yield "</span>
                                        <br>
                                        <small class=\"text-muted\">";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "createdAt", [], "any", false, false, false, 132), "H:i"), "html", null, true);
            yield "</small>
                                    </td>
                                    <td class=\"py-2 px-3\">
                                        <span class=\"badge ";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "planBadgeClass", [], "any", false, false, false, 135), "html", null, true);
            yield "\">
                                            <i class=\"bi ";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "planIcon", [], "any", false, false, false, 136), "html", null, true);
            yield " me-1\"></i>
                                            ";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "planLabel", [], "any", false, false, false, 137), "html", null, true);
            yield "
                                        </span>
                                    </td>
                                    <td class=\"py-2 px-3 small\">
                                        <span class=\"fw-semibold\">";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "startsAt", [], "any", false, false, false, 141), "d/m/Y"), "html", null, true);
            yield "</span>
                                        <br>
                                        <span class=\"text-muted\">→ ";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 143), "d/m/Y"), "html", null, true);
            yield "</span>
                                    </td>
                                    <td class=\"py-2 px-3 text-end\">
                                        <strong>";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "planPrice", [], "any", false, false, false, 146), 0, ",", " "), "html", null, true);
            yield " FCFA</strong>
                                    </td>
                                    <td class=\"py-2 px-3\">
                                        <span class=\"badge ";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "statusBadgeClass", [], "any", false, false, false, 149), "html", null, true);
            yield "\">
                                            ";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "statusLabel", [], "any", false, false, false, 150), "html", null, true);
            yield "
                                        </span>
                                        ";
            // line 152
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "isExpiringSoon", [], "method", false, false, false, 152)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 153
                yield "                                            <span class=\"badge bg-warning text-dark ms-1\" title=\"Expire bientôt\">
                                                <i class=\"bi bi-exclamation-triangle\"></i>
                                            </span>
                                        ";
            }
            // line 157
            yield "                                    </td>
                                    <td class=\"py-2 px-3\">
                                        ";
            // line 159
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "lastPayment", [], "any", true, true, false, 159) && CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "lastPayment", [], "any", false, false, false, 159))) {
                // line 160
                yield "                                            <span class=\"badge bg-";
                yield ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "lastPayment", [], "any", false, false, false, 160), "status", [], "any", false, false, false, 160) == "completed") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "lastPayment", [], "any", false, false, false, 160), "status", [], "any", false, false, false, 160) == "paid"))) ? ("success") : ("warning"));
                yield "\">
                                                <i class=\"bi bi-";
                // line 161
                yield ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "lastPayment", [], "any", false, false, false, 161), "status", [], "any", false, false, false, 161) == "completed") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "lastPayment", [], "any", false, false, false, 161), "status", [], "any", false, false, false, 161) == "paid"))) ? ("check-circle") : ("clock"));
                yield " me-1\"></i>
                                                ";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "lastPayment", [], "any", false, false, false, 162), "status", [], "any", false, false, false, 162)), "html", null, true);
                yield "
                                            </span>
                                        ";
            } else {
                // line 165
                yield "                                            <span class=\"text-muted\">-</span>
                                        ";
            }
            // line 167
            yield "                                    </td>
                                    <td class=\"py-2 px-3 text-center\">
                                        <a href=\"";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "id", [], "any", false, false, false, 169)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-sm btn-outline-info\" title=\"Voir les détails\">
                                            <i class=\"bi bi-eye\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 175
        if (!$context['_iterated']) {
            // line 176
            yield "                                <tr>
                                    <td colspan=\"7\" class=\"text-center py-5\">
                                        <i class=\"bi bi-clock-history fs-1 text-muted d-block mb-2\"></i>
                                        <p class=\"text-muted mb-0\">Aucun abonnement trouvé</p>
                                        <p class=\"text-muted small mb-0\">Ajustez vos filtres pour voir plus de résultats</p>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        yield "                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Version Mobile - Cards -->
            <div class=\"d-block d-md-none\">
                ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 191, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
            // line 192
            yield "                    <div class=\"card border-0 border-bottom rounded-0\">
                        <div class=\"card-body p-3\">
                            <div class=\"d-flex justify-content-between align-items-start mb-2\">
                                <div>
                                    <span class=\"badge ";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "planBadgeClass", [], "any", false, false, false, 196), "html", null, true);
            yield " mb-1\">
                                        <i class=\"bi ";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "planIcon", [], "any", false, false, false, 197), "html", null, true);
            yield " me-1\"></i>
                                        ";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "planLabel", [], "any", false, false, false, 198), "html", null, true);
            yield "
                                    </span>
                                    <div class=\"small text-muted\">
                                        <i class=\"bi bi-calendar3 me-1\"></i>
                                        ";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "createdAt", [], "any", false, false, false, 202), "d/m/Y H:i"), "html", null, true);
            yield "
                                    </div>
                                </div>
                                <div class=\"d-flex gap-1\">
                                    ";
            // line 206
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "isExpiringSoon", [], "method", false, false, false, 206)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 207
                yield "                                        <span class=\"badge bg-warning text-dark\" title=\"Expire bientôt\">
                                            <i class=\"bi bi-exclamation-triangle\"></i>
                                        </span>
                                    ";
            }
            // line 211
            yield "                                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "id", [], "any", false, false, false, 211)]), "html", null, true);
            yield "\" 
                                       class=\"btn btn-sm btn-outline-info\" title=\"Voir les détails\">
                                        <i class=\"bi bi-eye\"></i>
                                    </a>
                                </div>
                            </div>
                            
                            <div class=\"row g-1 small\">
                                <div class=\"col-6\">
                                    <span class=\"text-muted\">Période :</span>
                                    <div class=\"fw-semibold\">";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "startsAt", [], "any", false, false, false, 221), "d/m/Y"), "html", null, true);
            yield "</div>
                                    <div class=\"text-muted\">→ ";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 222), "d/m/Y"), "html", null, true);
            yield "</div>
                                </div>
                                <div class=\"col-6 text-end\">
                                    <span class=\"text-muted\">Montant :</span>
                                    <div class=\"fw-bold\">";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "planPrice", [], "any", false, false, false, 226), 0, ",", " "), "html", null, true);
            yield " FCFA</div>
                                </div>
                                <div class=\"col-6\">
                                    <span class=\"text-muted\">Statut :</span>
                                    <div>
                                        <span class=\"badge ";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "statusBadgeClass", [], "any", false, false, false, 231), "html", null, true);
            yield " mt-1\">
                                            ";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "statusLabel", [], "any", false, false, false, 232), "html", null, true);
            yield "
                                        </span>
                                    </div>
                                </div>
                                <div class=\"col-6 text-end\">
                                    <span class=\"text-muted\">Paiement :</span>
                                    <div class=\"mt-1\">
                                        ";
            // line 239
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "lastPayment", [], "any", true, true, false, 239) && CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "lastPayment", [], "any", false, false, false, 239))) {
                // line 240
                yield "                                            <span class=\"badge bg-";
                yield ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "lastPayment", [], "any", false, false, false, 240), "status", [], "any", false, false, false, 240) == "completed") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "lastPayment", [], "any", false, false, false, 240), "status", [], "any", false, false, false, 240) == "paid"))) ? ("success") : ("warning"));
                yield "\">
                                                <i class=\"bi bi-";
                // line 241
                yield ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "lastPayment", [], "any", false, false, false, 241), "status", [], "any", false, false, false, 241) == "completed") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "lastPayment", [], "any", false, false, false, 241), "status", [], "any", false, false, false, 241) == "paid"))) ? ("check-circle") : ("clock"));
                yield " me-1\"></i>
                                                ";
                // line 242
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "lastPayment", [], "any", false, false, false, 242), "status", [], "any", false, false, false, 242)), "html", null, true);
                yield "
                                            </span>
                                        ";
            } else {
                // line 245
                yield "                                            <span class=\"text-muted\">-</span>
                                        ";
            }
            // line 247
            yield "                                    </div>
                                </div>
                            </div>

                            <!-- Barre de progression pour l'abonnement -->
                            ";
            // line 252
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "progressPercentage", [], "any", false, false, false, 252))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 253
                yield "                                <div class=\"mt-2\">
                                    <div class=\"progress\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-primary\" 
                                             role=\"progressbar\" 
                                             style=\"width: ";
                // line 257
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "progressPercentage", [], "any", false, false, false, 257), "html", null, true);
                yield "%;\"
                                             aria-valuenow=\"";
                // line 258
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "progressPercentage", [], "any", false, false, false, 258), "html", null, true);
                yield "\" 
                                             aria-valuemin=\"0\" 
                                             aria-valuemax=\"100\">
                                        </div>
                                    </div>
                                    <div class=\"d-flex justify-content-between small text-muted mt-1\">
                                        <span>Début</span>
                                        <span>";
                // line 265
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "progressPercentage", [], "any", false, false, false, 265)), "html", null, true);
                yield "%</span>
                                        <span>Fin</span>
                                    </div>
                                </div>
                            ";
            }
            // line 270
            yield "                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 272
        if (!$context['_iterated']) {
            // line 273
            yield "                    <div class=\"text-center py-5\">
                        <i class=\"bi bi-clock-history fs-1 text-muted d-block mb-2\"></i>
                        <p class=\"text-muted mb-0\">Aucun abonnement trouvé</p>
                        <p class=\"text-muted small mb-0\">Ajustez vos filtres pour voir plus de résultats</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        yield "            </div>
        </div>

        <!-- Pagination -->
        ";
        // line 283
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 283, $this->source); })())) > 0)) {
            // line 284
            yield "            <div class=\"card-footer bg-white p-2 p-md-3 border-0\">
                <div class=\"d-flex justify-content-center\">
                    ";
            // line 286
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 286, $this->source); })()));
            yield "
                </div>
            </div>
        ";
        }
        // line 290
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 294
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

        // line 295
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    /* Améliorations pour le mobile */
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 8px !important;
            padding-right: 8px !important;
        }
        .card-body {
            padding: 12px !important;
        }
        .badge {
            font-size: 0.75rem !important;
        }
        .btn-sm {
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
        }
        .table-responsive {
            font-size: 0.8rem;
        }
        /* Amélioration du scroll horizontal sur mobile */
        .table-responsive {
            -webkit-overflow-scrolling: touch;
        }
    }
    
    /* Animation pour les cartes mobiles */
    .card.border-0.border-bottom {
        transition: background-color 0.2s ease;
    }
    .card.border-0.border-bottom:active {
        background-color: rgba(0, 0, 0, 0.03);
    }
    
    /* Amélioration de la lisibilité */
    .badge {
        font-weight: 500;
        letter-spacing: 0.01em;
    }
    
    /* Pagination responsive */
    .pagination {
        flex-wrap: wrap;
        justify-content: center;
        gap: 2px;
    }
    .pagination .page-link {
        padding: 0.375rem 0.75rem;
        font-size: 0.875rem;
    }
    @media (max-width: 576px) {
        .pagination .page-link {
            padding: 0.25rem 0.5rem;
            font-size: 0.75rem;
        }
        .pagination .page-item:not(.active) .page-link {
            display: none;
        }
        .pagination .page-item.active .page-link,
        .pagination .page-item.prev .page-link,
        .pagination .page-item.next .page-link {
            display: block;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 363
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

        // line 364
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    // Auto-soumission du formulaire de filtres lors du changement de statut
    document.addEventListener('DOMContentLoaded', function() {
        const statusSelect = document.querySelector('select[name=\"status\"]');
        if (statusSelect) {
            statusSelect.addEventListener('change', function() {
                this.closest('form').submit();
            });
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
        return "super_admin/hma_service/subscriptions.html.twig";
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
        return array (  725 => 364,  712 => 363,  634 => 295,  621 => 294,  608 => 290,  601 => 286,  597 => 284,  595 => 283,  589 => 279,  578 => 273,  576 => 272,  570 => 270,  562 => 265,  552 => 258,  548 => 257,  542 => 253,  540 => 252,  533 => 247,  529 => 245,  523 => 242,  519 => 241,  514 => 240,  512 => 239,  502 => 232,  498 => 231,  490 => 226,  483 => 222,  479 => 221,  465 => 211,  459 => 207,  457 => 206,  450 => 202,  443 => 198,  439 => 197,  435 => 196,  429 => 192,  424 => 191,  415 => 184,  402 => 176,  400 => 175,  389 => 169,  385 => 167,  381 => 165,  375 => 162,  371 => 161,  366 => 160,  364 => 159,  360 => 157,  354 => 153,  352 => 152,  347 => 150,  343 => 149,  337 => 146,  331 => 143,  326 => 141,  319 => 137,  315 => 136,  311 => 135,  305 => 132,  300 => 130,  296 => 128,  291 => 127,  264 => 103,  256 => 98,  250 => 95,  232 => 80,  222 => 73,  215 => 69,  205 => 64,  199 => 63,  193 => 62,  172 => 44,  164 => 39,  160 => 38,  155 => 36,  148 => 32,  141 => 28,  137 => 26,  131 => 23,  125 => 19,  118 => 15,  113 => 14,  111 => 13,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/super_admin/hma_service/subscriptions.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Historique des abonnements - {{ hma_service.companyName }}{% endblock %}

{% block body %}
<div class=\"container-fluid px-2 px-sm-3 px-md-4 py-3 py-md-4\">
    <!-- En-tête avec le fronton de l'entreprise -->
    <div class=\"card mb-3 mb-md-4 shadow-sm border-0\">
        <div class=\"card-body p-3 p-md-4\">
            <div class=\"d-flex flex-column flex-sm-row align-items-sm-center gap-3\">
                <div class=\"flex-shrink-0 text-center text-sm-start\">
                    {% if hma_service.logo %}
                        <img src=\"{{ asset('uploads/logos/' ~ hma_service.logo) }}\" 
                             alt=\"{{ hma_service.companyName }}\" 
                             class=\"rounded-3\"
                             style=\"width: 50px; height: 50px; object-fit: cover;\">
                    {% else %}
                        <div style=\"width: 50px; height: 50px; border-radius: 10px; 
                                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                                    color: white; display: flex; align-items: center; justify-content: center;
                                    font-weight: bold; font-size: 1.2rem; margin: 0 auto;\">
                            {{ hma_service.companyName|first|upper }}
                        </div>
                    {% endif %}
                </div>
                <div class=\"flex-grow-1 text-center text-sm-start\">
                    <h4 class=\"mb-1 fs-5 fs-md-4\">{{ hma_service.companyName }}</h4>
                    <div class=\"d-flex flex-wrap justify-content-center justify-content-sm-start gap-2 gap-md-3\">
                        <span class=\"text-muted small\">
                            <i class=\"bi bi-envelope me-1\"></i>
                            {{ hma_service.email }}
                        </span>
                        <span class=\"text-muted small\">
                            <i class=\"bi bi-telephone me-1\"></i>
                            {{ hma_service.phone ?: 'Non renseigné' }}
                        </span>
                        <span class=\"badge {{ hma_service.currentPlanBadgeClass }} fs-6\">
                            {{ hma_service.currentPlanLabel }}
                        </span>
                    </div>
                </div>
                <div class=\"text-center text-sm-end\">
                    <a href=\"{{ path('app_super_admin_hma_service_show', {'id': hma_service.id}) }}\" 
                       class=\"btn btn-outline-secondary btn-sm w-100 w-sm-auto\">
                        <i class=\"bi bi-arrow-left me-1\"></i>
                        Retour
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres - Version responsive -->
    <div class=\"card mb-3 mb-md-4 shadow-sm border-0\">
        <div class=\"card-body p-3 p-md-4\">
            <form method=\"get\" class=\"row g-2 g-md-3\">
                <div class=\"col-12 col-sm-6 col-md-3\">
                    <label class=\"form-label small fw-semibold mb-1\">Statut</label>
                    <select name=\"status\" class=\"form-select form-select-sm\">
                        <option value=\"\">Tous</option>
                        <option value=\"active\" {% if filters.status == 'active' %}selected{% endif %}>Actif</option>
                        <option value=\"expired\" {% if filters.status == 'expired' %}selected{% endif %}>Expiré</option>
                        <option value=\"cancelled\" {% if filters.status == 'cancelled' %}selected{% endif %}>Annulé</option>
                    </select>
                </div>
                <div class=\"col-6 col-sm-6 col-md-3\">
                    <label class=\"form-label small fw-semibold mb-1\">Date début</label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control form-control-sm\" value=\"{{ filters.date_from }}\">
                </div>
                <div class=\"col-6 col-sm-6 col-md-3\">
                    <label class=\"form-label small fw-semibold mb-1\">Date fin</label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control form-control-sm\" value=\"{{ filters.date_to }}\">
                </div>
                <div class=\"col-12 col-sm-6 col-md-3 d-flex align-items-end gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary btn-sm flex-grow-1\">
                        <i class=\"bi bi-funnel me-1\"></i>
                        Filtrer
                    </button>
                    <a href=\"{{ path('app_super_admin_hma_service_subscriptions', {'id': hma_service.id}) }}\" 
                       class=\"btn btn-outline-secondary btn-sm\" title=\"Réinitialiser les filtres\">
                        <i class=\"bi bi-arrow-counterclockwise\"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Tableau des abonnements -->
    <div class=\"card shadow-sm border-0\">
        <div class=\"card-header bg-white d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2 p-3 p-md-4 border-0\">
            <h5 class=\"mb-0 fs-6 fs-md-5\">
                <i class=\"bi bi-clock-history me-2\"></i>
                Historique complet des abonnements
                <span class=\"badge bg-secondary ms-2\">{{ pagination|length }}</span>
            </h5>
            <div class=\"btn-group btn-group-sm w-100 w-sm-auto\" role=\"group\">
                <a href=\"{{ path('super_admin_subscription_export', {'company': hma_service.id, 'format': 'pdf'}) }}\" 
                   class=\"btn btn-outline-danger flex-grow-1 flex-sm-grow-0\">
                    <i class=\"bi bi-file-pdf me-1\"></i>
                    <span class=\"d-none d-sm-inline\">PDF</span>
                </a>
                <a href=\"{{ path('super_admin_subscription_export', {'company': hma_service.id, 'format': 'excel'}) }}\" 
                   class=\"btn btn-outline-success flex-grow-1 flex-sm-grow-0\">
                    <i class=\"bi bi-file-excel me-1\"></i>
                    <span class=\"d-none d-sm-inline\">Excel</span>
                </a>
            </div>
        </div>
        <div class=\"card-body p-0\">
            <!-- Version Desktop - Tableau -->
            <div class=\"d-none d-md-block\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover align-middle mb-0\">
                        <thead class=\"bg-light\">
                            <tr>
                                <th class=\"py-2 px-3 text-nowrap\">Date</th>
                                <th class=\"py-2 px-3\">Plan</th>
                                <th class=\"py-2 px-3\">Période</th>
                                <th class=\"py-2 px-3 text-end\">Montant</th>
                                <th class=\"py-2 px-3\">Statut</th>
                                <th class=\"py-2 px-3\">Paiement</th>
                                <th class=\"py-2 px-3 text-center\" style=\"width: 50px;\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for subscription in pagination %}
                                <tr>
                                    <td class=\"py-2 px-3\">
                                        <span class=\"fw-semibold\">{{ subscription.createdAt|date('d/m/Y') }}</span>
                                        <br>
                                        <small class=\"text-muted\">{{ subscription.createdAt|date('H:i') }}</small>
                                    </td>
                                    <td class=\"py-2 px-3\">
                                        <span class=\"badge {{ subscription.planBadgeClass }}\">
                                            <i class=\"bi {{ subscription.planIcon }} me-1\"></i>
                                            {{ subscription.planLabel }}
                                        </span>
                                    </td>
                                    <td class=\"py-2 px-3 small\">
                                        <span class=\"fw-semibold\">{{ subscription.startsAt|date('d/m/Y') }}</span>
                                        <br>
                                        <span class=\"text-muted\">→ {{ subscription.endsAt|date('d/m/Y') }}</span>
                                    </td>
                                    <td class=\"py-2 px-3 text-end\">
                                        <strong>{{ subscription.planPrice|number_format(0, ',', ' ') }} FCFA</strong>
                                    </td>
                                    <td class=\"py-2 px-3\">
                                        <span class=\"badge {{ subscription.statusBadgeClass }}\">
                                            {{ subscription.statusLabel }}
                                        </span>
                                        {% if subscription.isExpiringSoon() %}
                                            <span class=\"badge bg-warning text-dark ms-1\" title=\"Expire bientôt\">
                                                <i class=\"bi bi-exclamation-triangle\"></i>
                                            </span>
                                        {% endif %}
                                    </td>
                                    <td class=\"py-2 px-3\">
                                        {% if subscription.lastPayment is defined and subscription.lastPayment %}
                                            <span class=\"badge bg-{{ subscription.lastPayment.status == 'completed' or subscription.lastPayment.status == 'paid' ? 'success' : 'warning' }}\">
                                                <i class=\"bi bi-{{ subscription.lastPayment.status == 'completed' or subscription.lastPayment.status == 'paid' ? 'check-circle' : 'clock' }} me-1\"></i>
                                                {{ subscription.lastPayment.status|capitalize }}
                                            </span>
                                        {% else %}
                                            <span class=\"text-muted\">-</span>
                                        {% endif %}
                                    </td>
                                    <td class=\"py-2 px-3 text-center\">
                                        <a href=\"{{ path('super_admin_subscription_show', {'id': subscription.id}) }}\" 
                                           class=\"btn btn-sm btn-outline-info\" title=\"Voir les détails\">
                                            <i class=\"bi bi-eye\"></i>
                                        </a>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"7\" class=\"text-center py-5\">
                                        <i class=\"bi bi-clock-history fs-1 text-muted d-block mb-2\"></i>
                                        <p class=\"text-muted mb-0\">Aucun abonnement trouvé</p>
                                        <p class=\"text-muted small mb-0\">Ajustez vos filtres pour voir plus de résultats</p>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Version Mobile - Cards -->
            <div class=\"d-block d-md-none\">
                {% for subscription in pagination %}
                    <div class=\"card border-0 border-bottom rounded-0\">
                        <div class=\"card-body p-3\">
                            <div class=\"d-flex justify-content-between align-items-start mb-2\">
                                <div>
                                    <span class=\"badge {{ subscription.planBadgeClass }} mb-1\">
                                        <i class=\"bi {{ subscription.planIcon }} me-1\"></i>
                                        {{ subscription.planLabel }}
                                    </span>
                                    <div class=\"small text-muted\">
                                        <i class=\"bi bi-calendar3 me-1\"></i>
                                        {{ subscription.createdAt|date('d/m/Y H:i') }}
                                    </div>
                                </div>
                                <div class=\"d-flex gap-1\">
                                    {% if subscription.isExpiringSoon() %}
                                        <span class=\"badge bg-warning text-dark\" title=\"Expire bientôt\">
                                            <i class=\"bi bi-exclamation-triangle\"></i>
                                        </span>
                                    {% endif %}
                                    <a href=\"{{ path('super_admin_subscription_show', {'id': subscription.id}) }}\" 
                                       class=\"btn btn-sm btn-outline-info\" title=\"Voir les détails\">
                                        <i class=\"bi bi-eye\"></i>
                                    </a>
                                </div>
                            </div>
                            
                            <div class=\"row g-1 small\">
                                <div class=\"col-6\">
                                    <span class=\"text-muted\">Période :</span>
                                    <div class=\"fw-semibold\">{{ subscription.startsAt|date('d/m/Y') }}</div>
                                    <div class=\"text-muted\">→ {{ subscription.endsAt|date('d/m/Y') }}</div>
                                </div>
                                <div class=\"col-6 text-end\">
                                    <span class=\"text-muted\">Montant :</span>
                                    <div class=\"fw-bold\">{{ subscription.planPrice|number_format(0, ',', ' ') }} FCFA</div>
                                </div>
                                <div class=\"col-6\">
                                    <span class=\"text-muted\">Statut :</span>
                                    <div>
                                        <span class=\"badge {{ subscription.statusBadgeClass }} mt-1\">
                                            {{ subscription.statusLabel }}
                                        </span>
                                    </div>
                                </div>
                                <div class=\"col-6 text-end\">
                                    <span class=\"text-muted\">Paiement :</span>
                                    <div class=\"mt-1\">
                                        {% if subscription.lastPayment is defined and subscription.lastPayment %}
                                            <span class=\"badge bg-{{ subscription.lastPayment.status == 'completed' or subscription.lastPayment.status == 'paid' ? 'success' : 'warning' }}\">
                                                <i class=\"bi bi-{{ subscription.lastPayment.status == 'completed' or subscription.lastPayment.status == 'paid' ? 'check-circle' : 'clock' }} me-1\"></i>
                                                {{ subscription.lastPayment.status|capitalize }}
                                            </span>
                                        {% else %}
                                            <span class=\"text-muted\">-</span>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>

                            <!-- Barre de progression pour l'abonnement -->
                            {% if subscription.progressPercentage is not null %}
                                <div class=\"mt-2\">
                                    <div class=\"progress\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-primary\" 
                                             role=\"progressbar\" 
                                             style=\"width: {{ subscription.progressPercentage }}%;\"
                                             aria-valuenow=\"{{ subscription.progressPercentage }}\" 
                                             aria-valuemin=\"0\" 
                                             aria-valuemax=\"100\">
                                        </div>
                                    </div>
                                    <div class=\"d-flex justify-content-between small text-muted mt-1\">
                                        <span>Début</span>
                                        <span>{{ subscription.progressPercentage|round }}%</span>
                                        <span>Fin</span>
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                {% else %}
                    <div class=\"text-center py-5\">
                        <i class=\"bi bi-clock-history fs-1 text-muted d-block mb-2\"></i>
                        <p class=\"text-muted mb-0\">Aucun abonnement trouvé</p>
                        <p class=\"text-muted small mb-0\">Ajustez vos filtres pour voir plus de résultats</p>
                    </div>
                {% endfor %}
            </div>
        </div>

        <!-- Pagination -->
        {% if pagination|length > 0 %}
            <div class=\"card-footer bg-white p-2 p-md-3 border-0\">
                <div class=\"d-flex justify-content-center\">
                    {{ knp_pagination_render(pagination) }}
                </div>
            </div>
        {% endif %}
    </div>
</div>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    /* Améliorations pour le mobile */
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 8px !important;
            padding-right: 8px !important;
        }
        .card-body {
            padding: 12px !important;
        }
        .badge {
            font-size: 0.75rem !important;
        }
        .btn-sm {
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
        }
        .table-responsive {
            font-size: 0.8rem;
        }
        /* Amélioration du scroll horizontal sur mobile */
        .table-responsive {
            -webkit-overflow-scrolling: touch;
        }
    }
    
    /* Animation pour les cartes mobiles */
    .card.border-0.border-bottom {
        transition: background-color 0.2s ease;
    }
    .card.border-0.border-bottom:active {
        background-color: rgba(0, 0, 0, 0.03);
    }
    
    /* Amélioration de la lisibilité */
    .badge {
        font-weight: 500;
        letter-spacing: 0.01em;
    }
    
    /* Pagination responsive */
    .pagination {
        flex-wrap: wrap;
        justify-content: center;
        gap: 2px;
    }
    .pagination .page-link {
        padding: 0.375rem 0.75rem;
        font-size: 0.875rem;
    }
    @media (max-width: 576px) {
        .pagination .page-link {
            padding: 0.25rem 0.5rem;
            font-size: 0.75rem;
        }
        .pagination .page-item:not(.active) .page-link {
            display: none;
        }
        .pagination .page-item.active .page-link,
        .pagination .page-item.prev .page-link,
        .pagination .page-item.next .page-link {
            display: block;
        }
    }
</style>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
    // Auto-soumission du formulaire de filtres lors du changement de statut
    document.addEventListener('DOMContentLoaded', function() {
        const statusSelect = document.querySelector('select[name=\"status\"]');
        if (statusSelect) {
            statusSelect.addEventListener('change', function() {
                this.closest('form').submit();
            });
        }
    });
</script>
{% endblock %}", "super_admin/hma_service/subscriptions.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\hma_service\\subscriptions.html.twig");
    }
}
