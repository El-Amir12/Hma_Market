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
class __TwigTemplate_be14270a6af3006aaefdd44c8a99c7cf extends Template
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
        yield "<div class=\"container-fluid py-4\">
    <!-- En-tête avec le fronton de l'entreprise -->
    <div class=\"card mb-4\">
        <div class=\"card-body\">
            <div class=\"d-flex align-items-center\">
                <div class=\"flex-shrink-0\">
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
                             style=\"width: 60px; height: 60px; object-fit: cover; border-radius: 10px;\">
                    ";
        } else {
            // line 18
            yield "                        <div style=\"width: 60px; height: 60px; border-radius: 10px; 
                                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                                    color: white; display: flex; align-items: center; justify-content: center;
                                    font-weight: bold; font-size: 1.5rem;\">
                            ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 22, $this->source); })()), "companyName", [], "any", false, false, false, 22))), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 25
        yield "                </div>
                <div class=\"flex-grow-1 ms-3\">
                    <h4 class=\"mb-1\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 27, $this->source); })()), "companyName", [], "any", false, false, false, 27), "html", null, true);
        yield "</h4>
                    <div class=\"d-flex gap-3\">
                        <span class=\"text-muted\">
                            <i class=\"bi bi-envelope me-1\"></i>
                            ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), "html", null, true);
        yield "
                        </span>
                        <span class=\"text-muted\">
                            <i class=\"bi bi-telephone me-1\"></i>
                            ";
        // line 35
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 35, $this->source); })()), "phone", [], "any", false, false, false, 35)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 35, $this->source); })()), "phone", [], "any", false, false, false, 35), "html", null, true)) : ("Non renseigné"));
        yield "
                        </span>
                        <span class=\"badge ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 37, $this->source); })()), "currentPlanBadgeClass", [], "any", false, false, false, 37), "html", null, true);
        yield "\">
                            ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 38, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 38), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>
                <div>
                    <a href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        yield "\" 
                       class=\"btn btn-outline-secondary\">
                        <i class=\"bi bi-arrow-left me-1\"></i>
                        Retour aux détails
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card mb-4\">
        <div class=\"card-body\">
            <form method=\"get\" class=\"row g-3\">
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Statut</label>
                    <select name=\"status\" class=\"form-select\">
                        <option value=\"\">Tous</option>
                        <option value=\"active\">Actif</option>
                        <option value=\"expired\">Expiré</option>
                        <option value=\"cancelled\">Annulé</option>
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Date début</label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Date fin</label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control\">
                </div>
                <div class=\"col-md-3 d-flex align-items-end\">
                    <button type=\"submit\" class=\"btn btn-primary me-2\">
                        <i class=\"bi bi-funnel me-1\"></i>
                        Filtrer
                    </button>
                    <a href=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_subscriptions", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79)]), "html", null, true);
        yield "\" 
                       class=\"btn btn-outline-secondary\">
                        <i class=\"bi bi-arrow-counterclockwise\"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Tableau des abonnements -->
    <div class=\"card\">
        <div class=\"card-header bg-white d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\">
                <i class=\"bi bi-clock-history me-2\"></i>
                Historique complet des abonnements
            </h5>
            <div class=\"btn-group\">
                <a href=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_export", ["company" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96), "format" => "pdf"]), "html", null, true);
        yield "\" 
                   class=\"btn btn-sm btn-outline-danger\">
                    <i class=\"bi bi-file-pdf me-1\"></i>
                    PDF
                </a>
                <a href=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_export", ["company" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101), "format" => "excel"]), "html", null, true);
        yield "\" 
                   class=\"btn btn-sm btn-outline-success\">
                    <i class=\"bi bi-file-excel me-1\"></i>
                    Excel
                </a>
            </div>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"bg-light\">
                        <tr>
                            <th>Date</th>
                            <th>Plan</th>
                            <th>Période</th>
                            <th>Montant</th>
                            <th>Statut</th>
                            <th>Paiement</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 123, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
            // line 124
            yield "                            <tr>
                                <td>
                                    ";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "createdAt", [], "any", false, false, false, 126), "d/m/Y"), "html", null, true);
            yield "<br>
                                    <small class=\"text-muted\">";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "createdAt", [], "any", false, false, false, 127), "H:i"), "html", null, true);
            yield "</small>
                                </td>
                                <td>
                                    <span class=\"badge ";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "planBadgeClass", [], "any", false, false, false, 130), "html", null, true);
            yield "\">
                                        <i class=\"bi ";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "planIcon", [], "any", false, false, false, 131), "html", null, true);
            yield " me-1\"></i>
                                        ";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "planLabel", [], "any", false, false, false, 132), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td>
                                    ";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "startAt", [], "any", false, false, false, 136), "d/m/Y"), "html", null, true);
            yield "<br>
                                    <small class=\"text-muted\">au ";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 137), "d/m/Y"), "html", null, true);
            yield "</small>
                                </td>
                                <td>
                                    <strong>";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "amount", [], "any", false, false, false, 140), 0, ",", " "), "html", null, true);
            yield " FCFA</strong>
                                </td>
                                <td>
                                    ";
            // line 143
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 143) == "active")) {
                // line 144
                yield "                                        <span class=\"badge bg-success\">Actif</span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 145
$context["subscription"], "status", [], "any", false, false, false, 145) == "expired")) {
                // line 146
                yield "                                        <span class=\"badge bg-danger\">Expiré</span>
                                    ";
            } else {
                // line 148
                yield "                                        <span class=\"badge bg-secondary\">Annulé</span>
                                    ";
            }
            // line 150
            yield "                                </td>
                                <td>
                                    ";
            // line 152
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "payment", [], "any", false, false, false, 152)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 153
                yield "                                        <span class=\"badge bg-";
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "payment", [], "any", false, false, false, 153), "status", [], "any", false, false, false, 153) == "completed")) ? ("success") : ("warning"));
                yield "\">
                                            ";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "payment", [], "any", false, false, false, 154), "status", [], "any", false, false, false, 154), "html", null, true);
                yield "
                                        </span>
                                    ";
            } else {
                // line 157
                yield "                                        -
                                    ";
            }
            // line 159
            yield "                                </td>
                                <td>
                                    <a href=\"";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "id", [], "any", false, false, false, 161)]), "html", null, true);
            yield "\" 
                                       class=\"btn btn-sm btn-outline-info\">
                                        <i class=\"bi bi-eye\"></i>
                                    </a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 167
        if (!$context['_iterated']) {
            // line 168
            yield "                            <tr>
                                <td colspan=\"7\" class=\"text-center py-4\">
                                    <i class=\"bi bi-clock-history fs-1 text-muted d-block mb-2\"></i>
                                    <p class=\"text-muted mb-0\">Aucun abonnement trouvé</p>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        yield "                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        ";
        // line 181
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 181, $this->source); })())) > 0)) {
            // line 182
            yield "            <div class=\"card-footer bg-white\">
                ";
            // line 183
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 183, $this->source); })()));
            yield "
            </div>
        ";
        }
        // line 186
        yield "    </div>
</div>
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
        return array (  395 => 186,  389 => 183,  386 => 182,  384 => 181,  376 => 175,  364 => 168,  362 => 167,  351 => 161,  347 => 159,  343 => 157,  337 => 154,  332 => 153,  330 => 152,  326 => 150,  322 => 148,  318 => 146,  316 => 145,  313 => 144,  311 => 143,  305 => 140,  299 => 137,  295 => 136,  288 => 132,  284 => 131,  280 => 130,  274 => 127,  270 => 126,  266 => 124,  261 => 123,  236 => 101,  228 => 96,  208 => 79,  169 => 43,  161 => 38,  157 => 37,  152 => 35,  145 => 31,  138 => 27,  134 => 25,  128 => 22,  122 => 18,  116 => 15,  111 => 14,  109 => 13,  101 => 7,  88 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/super_admin/hma_service/subscriptions.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Historique des abonnements - {{ hma_service.companyName }}{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <!-- En-tête avec le fronton de l'entreprise -->
    <div class=\"card mb-4\">
        <div class=\"card-body\">
            <div class=\"d-flex align-items-center\">
                <div class=\"flex-shrink-0\">
                    {% if hma_service.logo %}
                        <img src=\"{{ asset('uploads/logos/' ~ hma_service.logo) }}\" 
                             alt=\"{{ hma_service.companyName }}\" 
                             style=\"width: 60px; height: 60px; object-fit: cover; border-radius: 10px;\">
                    {% else %}
                        <div style=\"width: 60px; height: 60px; border-radius: 10px; 
                                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                                    color: white; display: flex; align-items: center; justify-content: center;
                                    font-weight: bold; font-size: 1.5rem;\">
                            {{ hma_service.companyName|first|upper }}
                        </div>
                    {% endif %}
                </div>
                <div class=\"flex-grow-1 ms-3\">
                    <h4 class=\"mb-1\">{{ hma_service.companyName }}</h4>
                    <div class=\"d-flex gap-3\">
                        <span class=\"text-muted\">
                            <i class=\"bi bi-envelope me-1\"></i>
                            {{ hma_service.email }}
                        </span>
                        <span class=\"text-muted\">
                            <i class=\"bi bi-telephone me-1\"></i>
                            {{ hma_service.phone ?: 'Non renseigné' }}
                        </span>
                        <span class=\"badge {{ hma_service.currentPlanBadgeClass }}\">
                            {{ hma_service.currentPlanLabel }}
                        </span>
                    </div>
                </div>
                <div>
                    <a href=\"{{ path('app_super_admin_hma_service_show', {'id': hma_service.id}) }}\" 
                       class=\"btn btn-outline-secondary\">
                        <i class=\"bi bi-arrow-left me-1\"></i>
                        Retour aux détails
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card mb-4\">
        <div class=\"card-body\">
            <form method=\"get\" class=\"row g-3\">
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Statut</label>
                    <select name=\"status\" class=\"form-select\">
                        <option value=\"\">Tous</option>
                        <option value=\"active\">Actif</option>
                        <option value=\"expired\">Expiré</option>
                        <option value=\"cancelled\">Annulé</option>
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Date début</label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Date fin</label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control\">
                </div>
                <div class=\"col-md-3 d-flex align-items-end\">
                    <button type=\"submit\" class=\"btn btn-primary me-2\">
                        <i class=\"bi bi-funnel me-1\"></i>
                        Filtrer
                    </button>
                    <a href=\"{{ path('app_super_admin_hma_service_subscriptions', {'id': hma_service.id}) }}\" 
                       class=\"btn btn-outline-secondary\">
                        <i class=\"bi bi-arrow-counterclockwise\"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Tableau des abonnements -->
    <div class=\"card\">
        <div class=\"card-header bg-white d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\">
                <i class=\"bi bi-clock-history me-2\"></i>
                Historique complet des abonnements
            </h5>
            <div class=\"btn-group\">
                <a href=\"{{ path('app_super_admin_subscription_export', {'company': hma_service.id, 'format': 'pdf'}) }}\" 
                   class=\"btn btn-sm btn-outline-danger\">
                    <i class=\"bi bi-file-pdf me-1\"></i>
                    PDF
                </a>
                <a href=\"{{ path('app_super_admin_subscription_export', {'company': hma_service.id, 'format': 'excel'}) }}\" 
                   class=\"btn btn-sm btn-outline-success\">
                    <i class=\"bi bi-file-excel me-1\"></i>
                    Excel
                </a>
            </div>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"bg-light\">
                        <tr>
                            <th>Date</th>
                            <th>Plan</th>
                            <th>Période</th>
                            <th>Montant</th>
                            <th>Statut</th>
                            <th>Paiement</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for subscription in pagination %}
                            <tr>
                                <td>
                                    {{ subscription.createdAt|date('d/m/Y') }}<br>
                                    <small class=\"text-muted\">{{ subscription.createdAt|date('H:i') }}</small>
                                </td>
                                <td>
                                    <span class=\"badge {{ subscription.planBadgeClass }}\">
                                        <i class=\"bi {{ subscription.planIcon }} me-1\"></i>
                                        {{ subscription.planLabel }}
                                    </span>
                                </td>
                                <td>
                                    {{ subscription.startAt|date('d/m/Y') }}<br>
                                    <small class=\"text-muted\">au {{ subscription.endsAt|date('d/m/Y') }}</small>
                                </td>
                                <td>
                                    <strong>{{ subscription.amount|number_format(0, ',', ' ') }} FCFA</strong>
                                </td>
                                <td>
                                    {% if subscription.status == 'active' %}
                                        <span class=\"badge bg-success\">Actif</span>
                                    {% elseif subscription.status == 'expired' %}
                                        <span class=\"badge bg-danger\">Expiré</span>
                                    {% else %}
                                        <span class=\"badge bg-secondary\">Annulé</span>
                                    {% endif %}
                                </td>
                                <td>
                                    {% if subscription.payment %}
                                        <span class=\"badge bg-{{ subscription.payment.status == 'completed' ? 'success' : 'warning' }}\">
                                            {{ subscription.payment.status }}
                                        </span>
                                    {% else %}
                                        -
                                    {% endif %}
                                </td>
                                <td>
                                    <a href=\"{{ path('app_super_admin_subscription_show', {'id': subscription.id}) }}\" 
                                       class=\"btn btn-sm btn-outline-info\">
                                        <i class=\"bi bi-eye\"></i>
                                    </a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"7\" class=\"text-center py-4\">
                                    <i class=\"bi bi-clock-history fs-1 text-muted d-block mb-2\"></i>
                                    <p class=\"text-muted mb-0\">Aucun abonnement trouvé</p>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        {% if pagination|length > 0 %}
            <div class=\"card-footer bg-white\">
                {{ knp_pagination_render(pagination) }}
            </div>
        {% endif %}
    </div>
</div>
{% endblock %}", "super_admin/hma_service/subscriptions.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\hma_service\\subscriptions.html.twig");
    }
}
