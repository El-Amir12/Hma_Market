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

/* super_admin/export/index.html.twig */
class __TwigTemplate_84e14487321c19fbba5cbf049fadabe4 extends Template
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
        yield "Export des données - Super Admin";
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
        yield "<div class=\"container-fluid px-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-file-export me-2 text-primary\"></i>
                Export des données de ventes
            </h1>
            <p class=\"text-muted mt-2\">
                Exportez les données de ventes des entreprises pour analyse
            </p>
        </div>
        <div>
            <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_dashboard");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-filter me-2 text-primary\"></i>
                        Filtres
                    </h5>
                </div>
                <div class=\"card-body\">
                    <form method=\"get\" action=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_export_index");
        yield "\" id=\"filterForm\">
                        <div class=\"mb-3\">
                            <label class=\"form-label fw-bold\">Entreprise</label>
                            <select name=\"company_id\" class=\"form-select select2-company\" id=\"companySelect\">
                                <option value=\"\">-- Toutes les entreprises --</option>
                                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["companies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 41
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 41), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "company_id", [], "any", false, false, false, 41) == CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 41))) ? ("selected") : (""));
            yield ">
                                        ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 42), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyType", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyType", [], "any", false, false, false, 42), "N/A")) : ("N/A")), "html", null, true);
            yield ")
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['company'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "                            </select>
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label fw-bold\">Période</label>
                            <div class=\"row g-2\">
                                <div class=\"col-6\">
                                    <input type=\"date\" name=\"date_from\" class=\"form-control\" 
                                           value=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 53), "html", null, true);
        yield "\" placeholder=\"Date début\">
                                </div>
                                <div class=\"col-6\">
                                    <input type=\"date\" name=\"date_to\" class=\"form-control\" 
                                           value=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 57), "html", null, true);
        yield "\" placeholder=\"Date fin\">
                                </div>
                            </div>
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label fw-bold\">Mode de paiement</label>
                            <select name=\"payment_method\" class=\"form-select\">
                                <option value=\"\">-- Tous --</option>
                                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["payment_methods"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 67
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["method"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "payment_method", [], "any", false, false, false, 67) == $context["method"])) ? ("selected") : (""));
            yield ">
                                        ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["method"]), "html", null, true);
            yield "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['method'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "                            </select>
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label fw-bold\">Montant (FCFA)</label>
                            <div class=\"row g-2\">
                                <div class=\"col-6\">
                                    <input type=\"number\" name=\"min_amount\" class=\"form-control\" 
                                           value=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "min_amount", [], "any", false, false, false, 79), "html", null, true);
        yield "\" placeholder=\"Min\">
                                </div>
                                <div class=\"col-6\">
                                    <input type=\"number\" name=\"max_amount\" class=\"form-control\" 
                                           value=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "max_amount", [], "any", false, false, false, 83), "html", null, true);
        yield "\" placeholder=\"Max\">
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class=\"d-grid gap-2\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-search me-1\"></i> Appliquer les filtres
                            </button>
                            <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_export_index");
        yield "\" class=\"btn btn-outline-secondary\">
                                <i class=\"fas fa-undo me-1\"></i> Réinitialiser
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            ";
        // line 102
        if ((($tmp =  !(null === ($context["stats"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 103
            yield "            <div class=\"card border-0 bg-primary bg-opacity-10 shadow-sm\">
                <div class=\"card-body\">
                    <h6 class=\"text-primary mb-3\">
                        <i class=\"fas fa-chart-line me-1\"></i> Statistiques
                    </h6>
                    <div class=\"row text-center\">
                        <div class=\"col-6\">
                            <div class=\"display-6 text-primary\">";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_orders", [], "any", false, false, false, 110), "html", null, true);
            yield "</div>
                            <small class=\"text-muted\">Ventes</small>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"display-6 text-success\">";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_revenue", [], "any", false, false, false, 114), 0, ",", " "), "html", null, true);
            yield "</div>
                            <small class=\"text-muted\">FCFA</small>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        // line 121
        yield "        </div>

        <div class=\"col-md-8\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-download me-2 text-success\"></i>
                        Actions d'export
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 132
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "company_id", [], "any", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 133
            yield "                        <div class=\"alert alert-info\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            Export pour : <strong>";
            // line 135
            yield (((CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["companies"] ?? null), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "id", [], "any", false, false, false, 135) == CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "company_id", [], "any", false, false, false, 135)); })), "companyName", [], "any", true, true, false, 135) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["companies"] ?? null), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "id", [], "any", false, false, false, 135) == CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "company_id", [], "any", false, false, false, 135)); })), "companyName", [], "any", false, false, false, 135)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["companies"] ?? null), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "id", [], "any", false, false, false, 135) == CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "company_id", [], "any", false, false, false, 135)); })), "companyName", [], "any", false, false, false, 135), "html", null, true)) : ("Entreprise sélectionnée"));
            yield "</strong>
                        </div>
                        
                        <div class=\"d-grid gap-3\">
                            <a href=\"";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_export_excel", ($context["filters"] ?? null)), "html", null, true);
            yield "\" class=\"btn btn-success btn-lg\">
                                <i class=\"fas fa-file-excel me-2\"></i>
                                Exporter vers Excel
                            </a>
                            <small class=\"text-muted text-center\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Le fichier Excel contient plusieurs feuilles : Ventes, Produits, Catégories, Caissiers, Promotions
                            </small>
                        </div>
                    ";
        } else {
            // line 149
            yield "                        <div class=\"text-center py-5\">
                            <i class=\"fas fa-building fa-3x text-muted mb-3\"></i>
                            <p class=\"text-muted\">Sélectionnez une entreprise pour exporter ses données</p>
                            <button class=\"btn btn-primary\" onclick=\"document.getElementById('companySelect').focus()\">
                                <i class=\"fas fa-arrow-up me-1\"></i> Sélectionner une entreprise
                            </button>
                        </div>
                    ";
        }
        // line 157
        yield "                </div>
            </div>

            ";
        // line 160
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "company_id", [], "any", false, false, false, 160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 161
            yield "            <div class=\"card border-0 shadow-sm mt-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-chart-pie me-2 text-info\"></i>
                        Analyse rapide
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"mb-3\">
                                <label class=\"text-muted small fw-bold\">Période analysée</label>
                                <div>
                                    ";
            // line 174
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 174) || CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 174))) {
                // line 175
                yield "                                        Du ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 175)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 175), "début")) : ("début")), "html", null, true);
                yield " au ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 175)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 175), "aujourd'hui")) : ("aujourd'hui")), "html", null, true);
                yield "
                                    ";
            } else {
                // line 177
                yield "                                        Toute la période
                                    ";
            }
            // line 179
            yield "                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"text-muted small fw-bold\">Mode de paiement</label>
                                <div>";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "payment_method", [], "any", true, true, false, 183)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "payment_method", [], "any", false, false, false, 183), "Tous")) : ("Tous"))), "html", null, true);
            yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-3\">
                                <label class=\"text-muted small fw-bold\">Panier moyen</label>
                                <div class=\"h4 text-primary\">
                                    ";
            // line 190
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_orders", [], "any", false, false, false, 190) > 0)) {
                // line 191
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_revenue", [], "any", false, false, false, 191) / CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_orders", [], "any", false, false, false, 191)), 0, ",", " "), "html", null, true);
                yield " FCFA
                                    ";
            } else {
                // line 193
                yield "                                        0 FCFA
                                    ";
            }
            // line 195
            yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        // line 202
        yield "        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 207
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 208
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    \$('.select2-company').select2({
        theme: 'bootstrap-5',
        placeholder: '-- Toutes les entreprises --',
        allowClear: true,
        width: '100%'
    });
    
    // Auto-submit when company changes
    \$('#companySelect').on('change', function() {
        if (\$(this).val()) {
            \$('#filterForm').submit();
        }
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
        return "super_admin/export/index.html.twig";
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
        return array (  390 => 208,  383 => 207,  375 => 202,  366 => 195,  362 => 193,  356 => 191,  354 => 190,  344 => 183,  338 => 179,  334 => 177,  326 => 175,  324 => 174,  309 => 161,  307 => 160,  302 => 157,  292 => 149,  279 => 139,  272 => 135,  268 => 133,  266 => 132,  253 => 121,  243 => 114,  236 => 110,  227 => 103,  225 => 102,  214 => 94,  200 => 83,  193 => 79,  183 => 71,  174 => 68,  167 => 67,  163 => 66,  151 => 57,  144 => 53,  134 => 45,  123 => 42,  116 => 41,  112 => 40,  104 => 35,  85 => 19,  71 => 7,  64 => 6,  53 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "super_admin/export/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\export\\index.html.twig");
    }
}
