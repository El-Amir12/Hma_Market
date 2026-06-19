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

/* admin/Location/index.html.twig */
class __TwigTemplate_b0b9e6cda433793f51ce59bd44d93ee3 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/Location/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/Location/index.html.twig"));

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

        yield "Gestion des emplacements - HMA Market";
        
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
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-map-marker-alt me-1\"></i> Emplacements
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>
                Gestion des emplacements
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Organisez vos lots par emplacements physiques
            </p>
        </div>
        <div>
            <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouvel emplacement
            </a>
        </div>
    </div>

    <!-- Statistiques : 5 cartes -->
    <div class=\"row g-3 mb-4\">
        <!-- Carte 1 : Total emplacements -->
        <div class=\"col-md-2 col-sm-6\">
            <div class=\"card border-0 bg-primary bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-map-marker-alt fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 46, $this->source); })()), "total_locations", [], "any", false, false, false, 46), "html", null, true);
        yield "</h3>
                    <small class=\"text-white-50\">Total emplacements</small>
                </div>
            </div>
        </div>

        <!-- Carte 2 : Emplacements actifs -->
        <div class=\"col-md-2 col-sm-6\">
            <div class=\"card border-0 bg-success bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-check-circle fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 57, $this->source); })()), "active_locations", [], "any", false, false, false, 57), "html", null, true);
        yield "</h3>
                    <small class=\"text-white-50\">Emplacements actifs</small>
                </div>
            </div>
        </div>

        <!-- Carte 3 : Emplacements inactifs -->
        <div class=\"col-md-2 col-sm-6\">
            <div class=\"card border-0 bg-danger bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-ban fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 68, $this->source); })()), "inactive_locations", [], "any", false, false, false, 68), "html", null, true);
        yield "</h3>
                    <small class=\"text-white-50\">Emplacements inactifs</small>
                </div>
            </div>
        </div>

        <!-- Carte 4 : Lots stockés -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card border-0 bg-info bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-boxes fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 79, $this->source); })()), "total_batches", [], "any", false, false, false, 79), "html", null, true);
        yield "</h3>
                    <small class=\"text-white-50\">Lots stockés</small>
                </div>
            </div>
        </div>

        <!-- Carte 5 : Emplacements utilisés -->
        <div class=\"col-md-3 col-sm-12\">
            <div class=\"card border-0 bg-warning bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-chart-line fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 90, $this->source); })()), "used_locations", [], "any", false, false, false, 90), "html", null, true);
        yield "</h3>
                    <small class=\"text-white-50\">Emplacements utilisés</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des emplacements -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\">
                <i class=\"fas fa-list me-2\"></i> Liste des emplacements
            </h5>
            <span class=\"badge bg-secondary\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 103, $this->source); })())), "html", null, true);
        yield " emplacement(s)</span>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th>Code</th>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Lots associés</th>
                            <th>Statut</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 119, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 120
            yield "                            <tr class=\"";
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["location"], "isActive", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-secondary";
            }
            yield "\">
                                <td>
                                    ";
            // line 122
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["location"], "code", [], "any", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 123
                yield "                                        <span class=\"badge bg-info\">
                                            <i class=\"fas fa-qrcode me-1\"></i> ";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "code", [], "any", false, false, false, 124), "html", null, true);
                yield "
                                        </span>
                                    ";
            } else {
                // line 127
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 129
            yield "                                </td>
                                <td>
                                    <strong>";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 131), "html", null, true);
            yield "</strong>
                                </td>
                                <td>
                                    ";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, $context["location"], "description", [], "any", true, true, false, 134)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "description", [], "any", false, false, false, 134), "—")) : ("—"))), "truncate", [60], "method", false, false, false, 134), "html", null, true);
            yield "
                                </td>
                                <td>
                                    <a href=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 137)]), "html", null, true);
            yield "\" 
                                       class=\"text-decoration-none\">
                                        <span class=\"badge bg-secondary\">
                                            <i class=\"fas fa-boxes me-1\"></i> ";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["location"], "stockBatches", [], "any", false, false, false, 140)), "html", null, true);
            yield " lot(s)
                                        </span>
                                    </a>
                                </td>
                                <td>
                                    <span class=\"badge ";
            // line 145
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["location"], "isActive", [], "any", false, false, false, 145)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
            yield "\">
                                        ";
            // line 146
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["location"], "isActive", [], "any", false, false, false, 146)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                                    </span>
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 151)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-sm btn-outline-primary\" title=\"Voir les lots\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 155)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <button type=\"button\" 
                                                class=\"btn btn-sm btn-outline-info toggle-location-btn\"
                                                data-location-id=\"";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 161), "html", null, true);
            yield "\"
                                                data-is-active=\"";
            // line 162
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["location"], "isActive", [], "any", false, false, false, 162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\"
                                                data-location-name=\"";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 163), "html", null, true);
            yield "\"
                                                data-token=\"";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-location" . CoreExtension::getAttribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 164))), "html", null, true);
            yield "\"
                                                title=\"";
            // line 165
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["location"], "isActive", [], "any", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "\">
                                            <i class=\"fas ";
            // line 166
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["location"], "isActive", [], "any", false, false, false, 166)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
            yield "\"></i>
                                        </button>
                                        ";
            // line 168
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["location"], "stockBatches", [], "any", false, false, false, 168)) == 0)) {
                // line 169
                yield "                                            <button type=\"button\" 
                                                    class=\"btn btn-sm btn-outline-danger delete-location-btn\"
                                                    data-location-id=\"";
                // line 171
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 171), "html", null, true);
                yield "\"
                                                    data-location-name=\"";
                // line 172
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 172), "html", null, true);
                yield "\"
                                                    data-token=\"";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 173))), "html", null, true);
                yield "\"
                                                    title=\"Supprimer\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        ";
            } else {
                // line 178
                yield "                                            <button type=\"button\" 
                                                    class=\"btn btn-sm btn-outline-danger delete-location-with-batches-btn\"
                                                    data-location-id=\"";
                // line 180
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 180), "html", null, true);
                yield "\"
                                                    data-location-name=\"";
                // line 181
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 181), "html", null, true);
                yield "\"
                                                    data-batches-count=\"";
                // line 182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["location"], "stockBatches", [], "any", false, false, false, 182)), "html", null, true);
                yield "\"
                                                    data-token=\"";
                // line 183
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 183))), "html", null, true);
                yield "\"
                                                    title=\"Supprimer avec réassignation\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        ";
            }
            // line 188
            yield "                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 191
        if (!$context['_iterated']) {
            // line 192
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center py-5\">
                                    <i class=\"fas fa-map-marker-alt fa-3x text-muted mb-3\"></i>
                                    <p class=\"text-muted mb-0\">Aucun emplacement enregistré</p>
                                    <a href=\"";
            // line 196
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_new");
            yield "\" class=\"btn btn-sm btn-primary mt-3\">
                                        <i class=\"fas fa-plus-circle me-1\"></i> Créer un emplacement
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['location'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Toggle Statut -->
<div class=\"modal fade\" id=\"toggleLocationModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleLocationMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleLocationForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleLocationToken\">
                    <button type=\"submit\" class=\"btn\" id=\"toggleLocationBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal de suppression (version unique, générée dynamiquement) -->
<div class=\"modal fade\" id=\"deleteLocationModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer l'emplacement
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form id=\"deleteLocationForm\" method=\"post\">
                <div class=\"modal-body\">
                    <p id=\"deleteLocationMessage\"></p>
                    <div id=\"reassignLocationContainer\" style=\"display: none;\">
                        <div class=\"alert alert-warning\">
                            <i class=\"fas fa-exclamation-triangle me-2\"></i>
                            <span id=\"batchesCountInfo\"></span>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label fw-bold\">
                                <i class=\"fas fa-map-marker-alt me-1\"></i> Réassigner les lots à :
                            </label>
                            <select name=\"new_location_id\" id=\"newLocationSelect\" class=\"form-select\">
                                <option value=\"\">-- Aucun emplacement (supprimer la référence) --</option>
                                <!-- Les options seront remplies dynamiquement par JavaScript -->
                            </select>
                            <small class=\"text-muted\">Les lots seront déplacés vers cet emplacement.</small>
                        </div>
                    </div>
                    <p class=\"text-danger mb-0 mt-3\">
                        <small>⚠️ Cette action est irréversible.</small>
                    </p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <input type=\"hidden\" name=\"_token\" id=\"deleteLocationToken\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer définitivement</button>
                </div>
            </form>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 276
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

        // line 277
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== TOGGLE STATUT ==========
    const toggleModalElement = document.getElementById('toggleLocationModal');
    const toggleModal = toggleModalElement ? new bootstrap.Modal(toggleModalElement) : null;
    
    document.querySelectorAll('.toggle-location-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const locationId = this.dataset.locationId;
            const isActive = this.dataset.isActive === '1';
            const token = this.dataset.token;
            const locationName = this.dataset.locationName;
            
            const message = document.getElementById('toggleLocationMessage');
            const form = document.getElementById('toggleLocationForm');
            const tokenInput = document.getElementById('toggleLocationToken');
            const submitBtn = document.getElementById('toggleLocationBtn');
            
            if (message) {
                message.textContent = `Êtes-vous sûr de vouloir \${isActive ? 'désactiver' : 'activer'} l'emplacement \"\${locationName}\" ?`;
            }
            if (form) form.action = `/admin/location/\${locationId}/toggle`;
            if (tokenInput) tokenInput.value = token;
            if (submitBtn) {
                submitBtn.className = isActive ? 'btn btn-danger' : 'btn btn-success';
                submitBtn.textContent = isActive ? 'Désactiver' : 'Activer';
            }
            if (toggleModal) toggleModal.show();
        });
    });
    
    // ========== SUPPRESSION ==========
    const deleteModalElement = document.getElementById('deleteLocationModal');
    const deleteModal = deleteModalElement ? new bootstrap.Modal(deleteModalElement) : null;
    
    // Récupérer tous les emplacements depuis le DOM (pour les options de réassignation)
    const allLocations = [];
    document.querySelectorAll('tbody tr').forEach(row => {
        const locationId = row.querySelector('.delete-location-btn, .delete-location-with-batches-btn')?.dataset.locationId;
        const locationName = row.querySelector('td:nth-child(2) strong')?.textContent;
        if (locationId && locationName) {
            allLocations.push({ id: locationId, name: locationName });
        }
    });
    
    // Fonction pour remplir dynamiquement le select des emplacements
    function populateLocationSelect(excludeLocationId) {
        const select = document.getElementById('newLocationSelect');
        if (!select) return;
        
        // Garder l'option par défaut
        select.innerHTML = '<option value=\"\">-- Aucun emplacement (supprimer la référence) --</option>';
        
        // Ajouter tous les autres emplacements
        allLocations.forEach(location => {
            if (location.id != excludeLocationId) {
                const option = document.createElement('option');
                option.value = location.id;
                option.textContent = location.name;
                select.appendChild(option);
            }
        });
    }
    
    // Pour les emplacements sans lots (suppression simple)
    document.querySelectorAll('.delete-location-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const locationId = this.dataset.locationId;
            const locationName = this.dataset.locationName;
            const token = this.dataset.token;
            
            const message = document.getElementById('deleteLocationMessage');
            const form = document.getElementById('deleteLocationForm');
            const tokenInput = document.getElementById('deleteLocationToken');
            const reassignContainer = document.getElementById('reassignLocationContainer');
            
            if (message) {
                message.innerHTML = `
                    <div class=\"alert alert-warning\">⚠️ Cette action est irréversible.</div>
                    <p>Supprimer l'emplacement <strong>\${locationName}</strong> ?</p>
                `;
            }
            if (reassignContainer) reassignContainer.style.display = 'none';
            if (form) form.action = `/admin/location/\${locationId}/delete`;
            if (tokenInput) tokenInput.value = token;
            if (deleteModal) deleteModal.show();
        });
    });
    
    // Pour les emplacements avec lots (suppression avec réassignation)
    document.querySelectorAll('.delete-location-with-batches-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const locationId = this.dataset.locationId;
            const locationName = this.dataset.locationName;
            const batchesCount = this.dataset.batchesCount;
            const token = this.dataset.token;
            
            const message = document.getElementById('deleteLocationMessage');
            const form = document.getElementById('deleteLocationForm');
            const tokenInput = document.getElementById('deleteLocationToken');
            const reassignContainer = document.getElementById('reassignLocationContainer');
            const batchesCountInfo = document.getElementById('batchesCountInfo');
            
            // Remplir le select avec tous les emplacements SAUF celui qu'on supprime
            populateLocationSelect(locationId);
            
            if (message) {
                message.innerHTML = `<p>Supprimer l'emplacement <strong>\${locationName}</strong> ?</p>`;
            }
            if (batchesCountInfo) {
                batchesCountInfo.innerHTML = `Cet emplacement contient <strong>\${batchesCount} lot(s)</strong>.`;
            }
            if (reassignContainer) reassignContainer.style.display = 'block';
            if (form) form.action = `/admin/location/\${locationId}/delete`;
            if (tokenInput) tokenInput.value = token;
            if (deleteModal) deleteModal.show();
        });
    });
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 400
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

        // line 401
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
.table-hover tbody tr:hover {
    background-color: rgba(102, 126, 234, 0.05);
    cursor: pointer;
}
.card {
    transition: transform 0.2s, box-shadow 0.2s;
}
.card:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.1) !important;
}
.badge {
    font-weight: 500;
}
.btn-group .btn {
    padding: 0.25rem 0.5rem;
}
.table td {
    vertical-align: middle;
}
@media (max-width: 768px) {
    .btn-group {
        flex-direction: column;
    }
    .btn-group .btn {
        margin: 1px 0;
    }
}
</style>
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
        return "admin/Location/index.html.twig";
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
        return array (  666 => 401,  653 => 400,  520 => 277,  507 => 276,  424 => 202,  412 => 196,  406 => 192,  404 => 191,  397 => 188,  389 => 183,  385 => 182,  381 => 181,  377 => 180,  373 => 178,  365 => 173,  361 => 172,  357 => 171,  353 => 169,  351 => 168,  346 => 166,  342 => 165,  338 => 164,  334 => 163,  330 => 162,  326 => 161,  317 => 155,  310 => 151,  302 => 146,  298 => 145,  290 => 140,  284 => 137,  278 => 134,  272 => 131,  268 => 129,  264 => 127,  258 => 124,  255 => 123,  253 => 122,  245 => 120,  240 => 119,  221 => 103,  205 => 90,  191 => 79,  177 => 68,  163 => 57,  149 => 46,  133 => 33,  111 => 14,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/location/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion des emplacements - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
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
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-map-marker-alt me-1\"></i> Emplacements
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>
                Gestion des emplacements
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Organisez vos lots par emplacements physiques
            </p>
        </div>
        <div>
            <a href=\"{{ path('app_admin_location_new') }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouvel emplacement
            </a>
        </div>
    </div>

    <!-- Statistiques : 5 cartes -->
    <div class=\"row g-3 mb-4\">
        <!-- Carte 1 : Total emplacements -->
        <div class=\"col-md-2 col-sm-6\">
            <div class=\"card border-0 bg-primary bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-map-marker-alt fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">{{ stats.total_locations }}</h3>
                    <small class=\"text-white-50\">Total emplacements</small>
                </div>
            </div>
        </div>

        <!-- Carte 2 : Emplacements actifs -->
        <div class=\"col-md-2 col-sm-6\">
            <div class=\"card border-0 bg-success bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-check-circle fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">{{ stats.active_locations }}</h3>
                    <small class=\"text-white-50\">Emplacements actifs</small>
                </div>
            </div>
        </div>

        <!-- Carte 3 : Emplacements inactifs -->
        <div class=\"col-md-2 col-sm-6\">
            <div class=\"card border-0 bg-danger bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-ban fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">{{ stats.inactive_locations }}</h3>
                    <small class=\"text-white-50\">Emplacements inactifs</small>
                </div>
            </div>
        </div>

        <!-- Carte 4 : Lots stockés -->
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"card border-0 bg-info bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-boxes fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">{{ stats.total_batches }}</h3>
                    <small class=\"text-white-50\">Lots stockés</small>
                </div>
            </div>
        </div>

        <!-- Carte 5 : Emplacements utilisés -->
        <div class=\"col-md-3 col-sm-12\">
            <div class=\"card border-0 bg-warning bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-chart-line fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">{{ stats.used_locations }}</h3>
                    <small class=\"text-white-50\">Emplacements utilisés</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des emplacements -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\">
                <i class=\"fas fa-list me-2\"></i> Liste des emplacements
            </h5>
            <span class=\"badge bg-secondary\">{{ locations|length }} emplacement(s)</span>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th>Code</th>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Lots associés</th>
                            <th>Statut</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for location in locations %}
                            <tr class=\"{% if not location.isActive %}table-secondary{% endif %}\">
                                <td>
                                    {% if location.code %}
                                        <span class=\"badge bg-info\">
                                            <i class=\"fas fa-qrcode me-1\"></i> {{ location.code }}
                                        </span>
                                    {% else %}
                                        <span class=\"text-muted\">—</span>
                                    {% endif %}
                                </td>
                                <td>
                                    <strong>{{ location.name }}</strong>
                                </td>
                                <td>
                                    {{ location.description|default('—')|u.truncate(60) }}
                                </td>
                                <td>
                                    <a href=\"{{ path('app_admin_location_show', {'id': location.id}) }}\" 
                                       class=\"text-decoration-none\">
                                        <span class=\"badge bg-secondary\">
                                            <i class=\"fas fa-boxes me-1\"></i> {{ location.stockBatches|length }} lot(s)
                                        </span>
                                    </a>
                                </td>
                                <td>
                                    <span class=\"badge {{ location.isActive ? 'bg-success' : 'bg-danger' }}\">
                                        {{ location.isActive ? 'Actif' : 'Inactif' }}
                                    </span>
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"{{ path('app_admin_location_show', {'id': location.id}) }}\" 
                                           class=\"btn btn-sm btn-outline-primary\" title=\"Voir les lots\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"{{ path('app_admin_location_edit', {'id': location.id}) }}\" 
                                           class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <button type=\"button\" 
                                                class=\"btn btn-sm btn-outline-info toggle-location-btn\"
                                                data-location-id=\"{{ location.id }}\"
                                                data-is-active=\"{{ location.isActive ? '1' : '0' }}\"
                                                data-location-name=\"{{ location.name }}\"
                                                data-token=\"{{ csrf_token('toggle-location' ~ location.id) }}\"
                                                title=\"{{ location.isActive ? 'Désactiver' : 'Activer' }}\">
                                            <i class=\"fas {{ location.isActive ? 'fa-toggle-on' : 'fa-toggle-off' }}\"></i>
                                        </button>
                                        {% if location.stockBatches|length == 0 %}
                                            <button type=\"button\" 
                                                    class=\"btn btn-sm btn-outline-danger delete-location-btn\"
                                                    data-location-id=\"{{ location.id }}\"
                                                    data-location-name=\"{{ location.name }}\"
                                                    data-token=\"{{ csrf_token('delete' ~ location.id) }}\"
                                                    title=\"Supprimer\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        {% else %}
                                            <button type=\"button\" 
                                                    class=\"btn btn-sm btn-outline-danger delete-location-with-batches-btn\"
                                                    data-location-id=\"{{ location.id }}\"
                                                    data-location-name=\"{{ location.name }}\"
                                                    data-batches-count=\"{{ location.stockBatches|length }}\"
                                                    data-token=\"{{ csrf_token('delete' ~ location.id) }}\"
                                                    title=\"Supprimer avec réassignation\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        {% endif %}
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"6\" class=\"text-center py-5\">
                                    <i class=\"fas fa-map-marker-alt fa-3x text-muted mb-3\"></i>
                                    <p class=\"text-muted mb-0\">Aucun emplacement enregistré</p>
                                    <a href=\"{{ path('app_admin_location_new') }}\" class=\"btn btn-sm btn-primary mt-3\">
                                        <i class=\"fas fa-plus-circle me-1\"></i> Créer un emplacement
                                    </a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Toggle Statut -->
<div class=\"modal fade\" id=\"toggleLocationModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleLocationMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleLocationForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleLocationToken\">
                    <button type=\"submit\" class=\"btn\" id=\"toggleLocationBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal de suppression (version unique, générée dynamiquement) -->
<div class=\"modal fade\" id=\"deleteLocationModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer l'emplacement
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form id=\"deleteLocationForm\" method=\"post\">
                <div class=\"modal-body\">
                    <p id=\"deleteLocationMessage\"></p>
                    <div id=\"reassignLocationContainer\" style=\"display: none;\">
                        <div class=\"alert alert-warning\">
                            <i class=\"fas fa-exclamation-triangle me-2\"></i>
                            <span id=\"batchesCountInfo\"></span>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label fw-bold\">
                                <i class=\"fas fa-map-marker-alt me-1\"></i> Réassigner les lots à :
                            </label>
                            <select name=\"new_location_id\" id=\"newLocationSelect\" class=\"form-select\">
                                <option value=\"\">-- Aucun emplacement (supprimer la référence) --</option>
                                <!-- Les options seront remplies dynamiquement par JavaScript -->
                            </select>
                            <small class=\"text-muted\">Les lots seront déplacés vers cet emplacement.</small>
                        </div>
                    </div>
                    <p class=\"text-danger mb-0 mt-3\">
                        <small>⚠️ Cette action est irréversible.</small>
                    </p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <input type=\"hidden\" name=\"_token\" id=\"deleteLocationToken\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer définitivement</button>
                </div>
            </form>
        </div>
    </div>
</div>

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== TOGGLE STATUT ==========
    const toggleModalElement = document.getElementById('toggleLocationModal');
    const toggleModal = toggleModalElement ? new bootstrap.Modal(toggleModalElement) : null;
    
    document.querySelectorAll('.toggle-location-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const locationId = this.dataset.locationId;
            const isActive = this.dataset.isActive === '1';
            const token = this.dataset.token;
            const locationName = this.dataset.locationName;
            
            const message = document.getElementById('toggleLocationMessage');
            const form = document.getElementById('toggleLocationForm');
            const tokenInput = document.getElementById('toggleLocationToken');
            const submitBtn = document.getElementById('toggleLocationBtn');
            
            if (message) {
                message.textContent = `Êtes-vous sûr de vouloir \${isActive ? 'désactiver' : 'activer'} l'emplacement \"\${locationName}\" ?`;
            }
            if (form) form.action = `/admin/location/\${locationId}/toggle`;
            if (tokenInput) tokenInput.value = token;
            if (submitBtn) {
                submitBtn.className = isActive ? 'btn btn-danger' : 'btn btn-success';
                submitBtn.textContent = isActive ? 'Désactiver' : 'Activer';
            }
            if (toggleModal) toggleModal.show();
        });
    });
    
    // ========== SUPPRESSION ==========
    const deleteModalElement = document.getElementById('deleteLocationModal');
    const deleteModal = deleteModalElement ? new bootstrap.Modal(deleteModalElement) : null;
    
    // Récupérer tous les emplacements depuis le DOM (pour les options de réassignation)
    const allLocations = [];
    document.querySelectorAll('tbody tr').forEach(row => {
        const locationId = row.querySelector('.delete-location-btn, .delete-location-with-batches-btn')?.dataset.locationId;
        const locationName = row.querySelector('td:nth-child(2) strong')?.textContent;
        if (locationId && locationName) {
            allLocations.push({ id: locationId, name: locationName });
        }
    });
    
    // Fonction pour remplir dynamiquement le select des emplacements
    function populateLocationSelect(excludeLocationId) {
        const select = document.getElementById('newLocationSelect');
        if (!select) return;
        
        // Garder l'option par défaut
        select.innerHTML = '<option value=\"\">-- Aucun emplacement (supprimer la référence) --</option>';
        
        // Ajouter tous les autres emplacements
        allLocations.forEach(location => {
            if (location.id != excludeLocationId) {
                const option = document.createElement('option');
                option.value = location.id;
                option.textContent = location.name;
                select.appendChild(option);
            }
        });
    }
    
    // Pour les emplacements sans lots (suppression simple)
    document.querySelectorAll('.delete-location-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const locationId = this.dataset.locationId;
            const locationName = this.dataset.locationName;
            const token = this.dataset.token;
            
            const message = document.getElementById('deleteLocationMessage');
            const form = document.getElementById('deleteLocationForm');
            const tokenInput = document.getElementById('deleteLocationToken');
            const reassignContainer = document.getElementById('reassignLocationContainer');
            
            if (message) {
                message.innerHTML = `
                    <div class=\"alert alert-warning\">⚠️ Cette action est irréversible.</div>
                    <p>Supprimer l'emplacement <strong>\${locationName}</strong> ?</p>
                `;
            }
            if (reassignContainer) reassignContainer.style.display = 'none';
            if (form) form.action = `/admin/location/\${locationId}/delete`;
            if (tokenInput) tokenInput.value = token;
            if (deleteModal) deleteModal.show();
        });
    });
    
    // Pour les emplacements avec lots (suppression avec réassignation)
    document.querySelectorAll('.delete-location-with-batches-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const locationId = this.dataset.locationId;
            const locationName = this.dataset.locationName;
            const batchesCount = this.dataset.batchesCount;
            const token = this.dataset.token;
            
            const message = document.getElementById('deleteLocationMessage');
            const form = document.getElementById('deleteLocationForm');
            const tokenInput = document.getElementById('deleteLocationToken');
            const reassignContainer = document.getElementById('reassignLocationContainer');
            const batchesCountInfo = document.getElementById('batchesCountInfo');
            
            // Remplir le select avec tous les emplacements SAUF celui qu'on supprime
            populateLocationSelect(locationId);
            
            if (message) {
                message.innerHTML = `<p>Supprimer l'emplacement <strong>\${locationName}</strong> ?</p>`;
            }
            if (batchesCountInfo) {
                batchesCountInfo.innerHTML = `Cet emplacement contient <strong>\${batchesCount} lot(s)</strong>.`;
            }
            if (reassignContainer) reassignContainer.style.display = 'block';
            if (form) form.action = `/admin/location/\${locationId}/delete`;
            if (tokenInput) tokenInput.value = token;
            if (deleteModal) deleteModal.show();
        });
    });
});
</script>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
.table-hover tbody tr:hover {
    background-color: rgba(102, 126, 234, 0.05);
    cursor: pointer;
}
.card {
    transition: transform 0.2s, box-shadow 0.2s;
}
.card:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.1) !important;
}
.badge {
    font-weight: 500;
}
.btn-group .btn {
    padding: 0.25rem 0.5rem;
}
.table td {
    vertical-align: middle;
}
@media (max-width: 768px) {
    .btn-group {
        flex-direction: column;
    }
    .btn-group .btn {
        margin: 1px 0;
    }
}
</style>
{% endblock %}", "admin/Location/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\Location\\index.html.twig");
    }
}
