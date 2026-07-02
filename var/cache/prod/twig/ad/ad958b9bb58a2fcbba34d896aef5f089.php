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
class __TwigTemplate_e18cc56135b81f81a0065f1a8e3df51a extends Template
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
        yield "Historique des abonnements - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "companyName", [], "any", false, false, false, 4), "html", null, true);
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<div class=\"container-fluid py-4\">
    <!-- En-tête avec le fronton de l'entreprise -->
    <div class=\"card mb-4\">
        <div class=\"card-body\">
            <div class=\"d-flex align-items-center\">
                <div class=\"flex-shrink-0\">
                    ";
        // line 13
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "logo", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "logo", [], "any", false, false, false, 14))), "html", null, true);
            yield "\" 
                             alt=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "companyName", [], "any", false, false, false, 15), "html", null, true);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "companyName", [], "any", false, false, false, 22))), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 25
        yield "                </div>
                <div class=\"flex-grow-1 ms-3\">
                    <h4 class=\"mb-1\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "companyName", [], "any", false, false, false, 27), "html", null, true);
        yield "</h4>
                    <div class=\"d-flex gap-3\">
                        <span class=\"text-muted\">
                            <i class=\"bi bi-envelope me-1\"></i>
                            ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "email", [], "any", false, false, false, 31), "html", null, true);
        yield "
                        </span>
                        <span class=\"text-muted\">
                            <i class=\"bi bi-telephone me-1\"></i>
                            ";
        // line 35
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "phone", [], "any", false, false, false, 35)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "phone", [], "any", false, false, false, 35), "html", null, true)) : ("Non renseigné"));
        yield "
                        </span>
                        <span class=\"badge ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "currentPlanBadgeClass", [], "any", false, false, false, 37), "html", null, true);
        yield "\">
                            ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "currentPlanLabel", [], "any", false, false, false, 38), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>
                <div>
                    <a href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "id", [], "any", false, false, false, 43)]), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_subscriptions", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "id", [], "any", false, false, false, 79)]), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_export", ["company" => CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "id", [], "any", false, false, false, 96), "format" => "pdf"]), "html", null, true);
        yield "\" 
                   class=\"btn btn-sm btn-outline-danger\">
                    <i class=\"bi bi-file-pdf me-1\"></i>
                    PDF
                </a>
                <a href=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_export", ["company" => CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "id", [], "any", false, false, false, 101), "format" => "excel"]), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["pagination"] ?? null));
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["pagination"] ?? null)) > 0)) {
            // line 182
            yield "            <div class=\"card-footer bg-white\">
                ";
            // line 183
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["pagination"] ?? null));
            yield "
            </div>
        ";
        }
        // line 186
        yield "    </div>
</div>
";
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
        return array (  365 => 186,  359 => 183,  356 => 182,  354 => 181,  346 => 175,  334 => 168,  332 => 167,  321 => 161,  317 => 159,  313 => 157,  307 => 154,  302 => 153,  300 => 152,  296 => 150,  292 => 148,  288 => 146,  286 => 145,  283 => 144,  281 => 143,  275 => 140,  269 => 137,  265 => 136,  258 => 132,  254 => 131,  250 => 130,  244 => 127,  240 => 126,  236 => 124,  231 => 123,  206 => 101,  198 => 96,  178 => 79,  139 => 43,  131 => 38,  127 => 37,  122 => 35,  115 => 31,  108 => 27,  104 => 25,  98 => 22,  92 => 18,  86 => 15,  81 => 14,  79 => 13,  71 => 7,  64 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "super_admin/hma_service/subscriptions.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\hma_service\\subscriptions.html.twig");
    }
}
