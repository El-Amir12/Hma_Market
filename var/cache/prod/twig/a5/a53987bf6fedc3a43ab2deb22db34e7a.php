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

/* admin/supplier/index.html.twig */
class __TwigTemplate_4b1544c3c4c197209bcee0ea1f8a6bec extends Template
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
        yield "Gestion des Fournisseurs - HMA Market";
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
        yield "<div class=\"container-fluid px-2 px-md-4 py-2 py-md-3\">
    <!-- En-tête -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2 gap-md-3\">
        <div>
            <h1 class=\"h5 h-md-3 mb-0 text-gray-800\">
                <i class=\"fas fa-truck me-2\"></i>Gestion des Fournisseurs
            </h1>
            <p class=\"text-muted mt-1 small d-none d-sm-block\">Gérez vos fournisseurs et leurs coordonnées</p>
        </div>
        
        <div class=\"d-flex align-items-center gap-2 flex-wrap w-100 w-sm-auto justify-content-between justify-content-sm-end\">
            <!-- Quota -->
            <div class=\"quota-card bg-light border-0 shadow-sm\">
                <div class=\"d-flex align-items-center gap-1\">
                    <span class=\"badge bg-primary rounded-circle quota-badge\">
                        <i class=\"fas fa-chart-line\"></i>
                    </span>
                    <div>
                        <small class=\"text-muted d-block quota-label\">Fournisseurs</small>
                        <h6 class=\"mb-0 ";
        // line 26
        yield (((($tmp = ($context["quotaReached"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-danger") : ("text-success"));
        yield " fw-bold quota-value\">
                            ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeCount"] ?? null), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quota"] ?? null), "html", null, true);
        yield "
                            ";
        // line 28
        if ((($context["quota"] ?? null) == "Illimité")) {
            // line 29
            yield "                                <i class=\"fas fa-infinity text-info ms-1 small\"></i>
                            ";
        }
        // line 31
        yield "                        </h6>
                    </div>
                </div>
            </div>

            <!-- En attente -->
            ";
        // line 37
        if ((($context["subscriptionInactiveCount"] ?? null) > 0)) {
            // line 38
            yield "            <div class=\"quota-card bg-light border-0 shadow-sm\">
                <div class=\"d-flex align-items-center gap-1\">
                    <span class=\"badge bg-warning rounded-circle quota-badge\">
                        <i class=\"fas fa-clock\"></i>
                    </span>
                    <div>
                        <small class=\"text-muted d-block quota-label\">En attente</small>
                        <h6 class=\"mb-0 fw-bold quota-value\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscriptionInactiveCount"] ?? null), "html", null, true);
            yield "</h6>
                    </div>
                </div>
            </div>
            ";
        }
        // line 50
        yield "
            <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_new");
        yield "\" id=\"newSupplierBtn\" class=\"btn btn-primary btn-sm shadow-sm\">
                <i class=\"fas fa-plus-circle me-1\"></i> <span class=\"d-none d-sm-inline\">Nouveau</span>
            </a>
        </div>
    </div>

    ";
        // line 58
        yield "    ";
        if ((($context["quotaReached"] ?? null) && (($context["plan"] ?? null) != "premium"))) {
            // line 59
            yield "    <div class=\"alert alert-warning alert-dismissible fade show shadow-sm py-2\" role=\"alert\">
        <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center flex-wrap gap-2\">
            <div class=\"small\">
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quota"] ?? null), "html", null, true);
            yield " fournisseurs.
            </div>
            <a href=\"";
            // line 65
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
            yield "\" class=\"btn btn-warning btn-sm\">
                <i class=\"fas fa-arrow-up me-1\"></i> Voir les offres
            </a>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 72
        yield "
    ";
        // line 74
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 75
            yield "        <div class=\"alert alert-success alert-dismissible fade show shadow-sm py-2\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "    
    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 82
            yield "        <div class=\"alert alert-danger alert-dismissible fade show shadow-sm py-2\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "
    <!-- Statistiques filtrées -->
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2\">
            <h5 class=\"mb-0 fw-semibold fs-6\">
                <i class=\"fas fa-chart-pie text-primary me-2\"></i>Statistiques
            </h5>
        </div>
        <div class=\"card-body p-2 p-md-3\">
            <div class=\"stats-grid\">
                <!-- Actifs -->
                <div class=\"stat-item\">
                    <div class=\"stat-icon bg-success\">
                        <i class=\"fas fa-check-circle\"></i>
                    </div>
                    <div class=\"stat-content\">
                        <span class=\"stat-label\">Actifs</span>
                        <span class=\"stat-value text-success\">";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeFiltered"] ?? null), "html", null, true);
        yield "</span>
                    </div>
                </div>
                
                <!-- Inactifs -->
                <div class=\"stat-item\">
                    <div class=\"stat-icon bg-danger\">
                        <i class=\"fas fa-pause-circle\"></i>
                    </div>
                    <div class=\"stat-content\">
                        <span class=\"stat-label\">Inactifs</span>
                        <span class=\"stat-value text-danger\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inactiveFiltered"] ?? null), "html", null, true);
        yield "</span>
                    </div>
                </div>
                
                <!-- Abonnement actif -->
                <div class=\"stat-item\">
                    <div class=\"stat-icon bg-info\">
                        <i class=\"fas fa-database\"></i>
                    </div>
                    <div class=\"stat-content\">
                        <span class=\"stat-label\">Abon. actif</span>
                        <span class=\"stat-value text-info\">";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscriptionActiveFiltered"] ?? null), "html", null, true);
        yield "</span>
                    </div>
                </div>
                
                <!-- Abonnement inactif -->
                <div class=\"stat-item\">
                    <div class=\"stat-icon bg-secondary\">
                        <i class=\"fas fa-clock\"></i>
                    </div>
                    <div class=\"stat-content\">
                        <span class=\"stat-label\">Abon. inactif</span>
                        <span class=\"stat-value text-secondary\">";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscriptionInactiveFiltered"] ?? null), "html", null, true);
        yield "</span>
                    </div>
                </div>
                
                <!-- Filtrés (pleine largeur sur mobile) -->
                <div class=\"stat-item stat-item-full\">
                    <div class=\"stat-icon bg-primary\">
                        <i class=\"fas fa-truck\"></i>
                    </div>
                    <div class=\"stat-content\">
                        <span class=\"stat-label\">Filtrés</span>
                        <span class=\"stat-value text-primary\">";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalFiltered"] ?? null), "html", null, true);
        yield "</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2\">
            <h5 class=\"mb-0 fw-semibold fs-6\">
                <i class=\"fas fa-filter text-primary me-2\"></i>Filtres
            </h5>
        </div>
        <div class=\"card-body p-2 p-md-3\">
            <form method=\"get\" class=\"row g-2\">
                <div class=\"col-12 col-md-4\">
                    <label for=\"search\" class=\"form-label fw-semibold small mb-1\">
                        <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                    </label>
                    <div class=\"input-group input-group-sm\">
                        <span class=\"input-group-text bg-light border-0\">
                            <i class=\"fas fa-search text-muted\"></i>
                        </span>
                        <input type=\"text\" name=\"search\" id=\"search\" value=\"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
        yield "\" 
                            class=\"form-control bg-light border-0\" placeholder=\"Nom, contact...\">
                    </div>
                </div>
                <div class=\"col-6 col-md-2\">
                    <label for=\"status\" class=\"form-label fw-semibold small mb-1\">
                        <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                    </label>
                    <select name=\"status\" id=\"status\" class=\"form-select form-select-sm bg-light border-0\">
                        <option value=\"all\" ";
        // line 181
        yield (((($context["status"] ?? null) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"active\" ";
        // line 182
        yield (((($context["status"] ?? null) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                        <option value=\"inactive\" ";
        // line 183
        yield (((($context["status"] ?? null) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                    </select>
                </div>
                <div class=\"col-6 col-md-2\">
                    <label for=\"sub_status\" class=\"form-label fw-semibold small mb-1\">
                        <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                    </label>
                    <select name=\"sub_status\" id=\"sub_status\" class=\"form-select form-select-sm bg-light border-0\">
                        <option value=\"all\" ";
        // line 191
        yield (((($context["subStatus"] ?? null) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"active\" ";
        // line 192
        yield (((($context["subStatus"] ?? null) == "active")) ? ("selected") : (""));
        yield ">Actif</option>
                        <option value=\"inactive\" ";
        // line 193
        yield (((($context["subStatus"] ?? null) == "inactive")) ? ("selected") : (""));
        yield ">Inactif</option>
                    </select>
                </div>
                <div class=\"col-12 col-md-4 d-flex align-items-end gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary btn-sm flex-grow-1\">
                        <i class=\"fas fa-search me-1\"></i> Filtrer
                    </button>
                    <a href=\"";
        // line 200
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm\" title=\"Effacer\">
                        <i class=\"fas fa-undo\"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>

    ";
        // line 209
        yield "    ";
        if (((($context["subStatus"] ?? null) == "inactive") && (($context["subscriptionInactiveFiltered"] ?? null) > 0))) {
            // line 210
            yield "        <div class=\"alert alert-info alert-dismissible fade show mb-3 mb-md-4 shadow-sm py-2\" role=\"alert\">
            <i class=\"fas fa-info-circle me-2\"></i>
            <strong>";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscriptionInactiveFiltered"] ?? null), "html", null, true);
            yield " fournisseur(s)</strong> désactivés par abonnement.
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        // line 216
        yield "
    <!-- Grille de fournisseurs -->
    <div class=\"row g-2 g-md-3 g-lg-4\">
        ";
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["suppliers"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["supplier"]) {
            // line 220
            yield "        <div class=\"col-12 col-sm-6 col-md-4 col-xl-3\">
            <div class=\"card h-100 border-0 shadow-sm hover-card\">
                <div class=\"card-header bg-transparent border-0 pt-2 px-2 px-md-3\">
                    <div class=\"d-flex flex-wrap justify-content-between align-items-start gap-1\">
                        <div>
                            <span class=\"badge ";
            // line 225
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 225)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
            yield " rounded-pill px-2 py-1 small\">
                                <i class=\"fas ";
            // line 226
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 226)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check-circle") : ("fa-pause-circle"));
            yield " me-1\"></i>
                                <span class=\"d-none d-sm-inline\">";
            // line 227
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 227)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "</span>
                            </span>
                        </div>
                        <div>
                            ";
            // line 231
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "subscriptionActive", [], "any", false, false, false, 231)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 232
                yield "                                <span class=\"badge bg-info rounded-pill px-2 py-1 small\" title=\"Dans quota\">
                                    <i class=\"fas fa-database me-1\"></i><span class=\"d-none d-md-inline\">Quota</span>
                                </span>
                            ";
            } else {
                // line 236
                yield "                                <span class=\"badge bg-warning rounded-pill px-2 py-1 small\" title=\"Hors quota\">
                                    <i class=\"fas fa-clock me-1\"></i><span class=\"d-none d-md-inline\">Attente</span>
                                </span>
                            ";
            }
            // line 240
            yield "                        </div>
                    </div>
                    <h5 class=\"card-title mt-2 mb-0 fw-bold text-truncate fs-6\">";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "name", [], "any", false, false, false, 242), "html", null, true);
            yield "</h5>
                </div>
                <div class=\"card-body pt-0 px-2 px-md-3 pb-2 pb-md-3\">
                    <div class=\"mb-1 mb-md-2\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <div class=\"contact-icon\">
                                <i class=\"fas fa-user text-primary\"></i>
                            </div>
                            <span class=\"small text-truncate\">";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "contactPerson", [], "any", false, false, false, 250)), "truncate", [15], "method", false, false, false, 250), "html", null, true);
            yield "</span>
                        </div>
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <div class=\"contact-icon\">
                                <i class=\"fas fa-phone text-success\"></i>
                            </div>
                            <span class=\"small text-truncate\">";
            // line 256
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "phone", [], "any", false, false, false, 256), "html", null, true);
            yield "</span>
                            <a href=\"https://wa.me/";
            // line 257
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "phone", [], "any", false, false, false, 257), [" " => "", "-" => "", "+" => ""]), "html", null, true);
            yield "\" 
                               target=\"_blank\" 
                               class=\"ms-auto text-success\"
                               title=\"WhatsApp\">
                                <i class=\"fab fa-whatsapp\"></i>
                            </a>
                        </div>
                        
                        ";
            // line 266
            yield "                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <div class=\"contact-icon\">
                                <i class=\"fas fa-envelope text-info\"></i>
                            </div>
                            <a href=\"mailto:";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "email", [], "any", false, false, false, 270), "html", null, true);
            yield "\" 
                               class=\"small text-primary text-decoration-none fw-semibold text-truncate email-link\" 
                               title=\"Envoyer un email à ";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "email", [], "any", false, false, false, 272), "html", null, true);
            yield "\">
                                <i class=\"fas fa-paper-plane me-1 icon-tiny\"></i>
                                ";
            // line 274
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "email", [], "any", false, false, false, 274)), "truncate", [20], "method", false, false, false, 274), "html", null, true);
            yield "
                            </a>
                        </div>
                        
                        <div class=\"d-flex align-items-center d-none d-sm-flex\">
                            <div class=\"contact-icon\">
                                <i class=\"fas fa-map-marker-alt text-warning\"></i>
                            </div>
                            <span class=\"small text-truncate\">";
            // line 282
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "adress", [], "any", false, false, false, 282)), "truncate", [25], "method", false, false, false, 282), "html", null, true);
            yield "</span>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-between gap-1 mt-2\">
                        <a href=\"";
            // line 286
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 286)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info flex-fill\" title=\"Voir\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a href=\"";
            // line 289
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 289)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-warning flex-fill\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        ";
            // line 292
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "subscriptionActive", [], "any", false, false, false, 292)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 293
                yield "                            <button type=\"button\" 
                                    class=\"btn btn-sm ";
                // line 294
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 294)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-outline-danger") : ("btn-outline-success"));
                yield " flex-fill toggle-supplier-btn\"
                                    data-supplier-id=\"";
                // line 295
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 295), "html", null, true);
                yield "\"
                                    data-supplier-name=\"";
                // line 296
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "name", [], "any", false, false, false, 296), "html", null, true);
                yield "\"
                                    data-current-status=\"";
                // line 297
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 297)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                yield "\"
                                    data-token=\"";
                // line 298
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 298))), "html", null, true);
                yield "\"
                                    title=\"";
                // line 299
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 299)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
                yield "\">
                                <i class=\"fas ";
                // line 300
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 300)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
                yield "\"></i>
                            </button>
                        ";
            } else {
                // line 303
                yield "                            <span class=\"btn btn-sm btn-secondary disabled flex-fill\" title=\"Désactivé par quota\">
                                <i class=\"fas fa-ban\"></i>
                            </span>
                        ";
            }
            // line 307
            yield "                        ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "purchases", [], "any", false, false, false, 307)) == 0))) {
                // line 308
                yield "                            <button type=\"button\" 
                                    class=\"btn btn-sm btn-outline-danger flex-fill delete-supplier-btn\"
                                    data-supplier-id=\"";
                // line 310
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 310), "html", null, true);
                yield "\"
                                    data-supplier-name=\"";
                // line 311
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "name", [], "any", false, false, false, 311), "html", null, true);
                yield "\"
                                    title=\"Supprimer\">
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        ";
            }
            // line 316
            yield "                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 320
        if (!$context['_iterated']) {
            // line 321
            yield "        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center py-4 py-md-5\">
                    <i class=\"fas fa-truck fa-3x text-muted mb-3 opacity-50\"></i>
                    <h4 class=\"text-muted fw-light fs-5\">Aucun fournisseur trouvé</h4>
                    <p class=\"text-muted mb-3 small\">Modifiez vos filtres ou créez un nouveau fournisseur.</p>
                    <a href=\"";
            // line 327
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index");
            yield "\" class=\"btn btn-outline-primary btn-sm px-3\">
                        <i class=\"fas fa-undo me-2\"></i> Réinitialiser
                    </a>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['supplier'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 334
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 337
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 338
            yield "    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-center mt-3 mt-md-4 gap-2\">
        <div class=\"text-muted small\">
            Page ";
            // line 340
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currentPage"] ?? null), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalItems"] ?? null), "html", null, true);
            yield " résultats)
        </div>
        <nav aria-label=\"Pagination\">
            <ul class=\"pagination pagination-sm mb-0 justify-content-center\">
                <li class=\"page-item ";
            // line 344
            yield (((($context["currentPage"] ?? null) <= 1)) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 345
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 345), "query", [], "any", false, false, false, 345), "all", [], "any", false, false, false, 345), ["page" => (($context["currentPage"] ?? null) - 1)])), "html", null, true);
            yield "\"><i class=\"fas fa-chevron-left\"></i></a>
                </li>
                ";
            // line 347
            $context["maxVisible"] = 5;
            // line 348
            yield "                ";
            $context["startPage"] = max(1, (($context["currentPage"] ?? null) - 2));
            // line 349
            yield "                ";
            $context["endPage"] = min(($context["totalPages"] ?? null), ((($context["startPage"] ?? null) + ($context["maxVisible"] ?? null)) - 1));
            // line 350
            yield "                ";
            if (((($context["endPage"] ?? null) - ($context["startPage"] ?? null)) < (($context["maxVisible"] ?? null) - 1))) {
                // line 351
                yield "                    ";
                $context["startPage"] = max(1, ((($context["endPage"] ?? null) - ($context["maxVisible"] ?? null)) + 1));
                // line 352
                yield "                ";
            }
            // line 353
            yield "                
                ";
            // line 354
            if ((($context["startPage"] ?? null) > 1)) {
                // line 355
                yield "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                // line 356
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 356), "query", [], "any", false, false, false, 356), "all", [], "any", false, false, false, 356), ["page" => 1])), "html", null, true);
                yield "\">1</a>
                    </li>
                    ";
                // line 358
                if ((($context["startPage"] ?? null) > 2)) {
                    // line 359
                    yield "                        <li class=\"page-item disabled d-none d-sm-block\"><span class=\"page-link\">…</span></li>
                    ";
                }
                // line 361
                yield "                ";
            }
            // line 362
            yield "                
                ";
            // line 363
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(($context["startPage"] ?? null), ($context["endPage"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 364
                yield "                    <li class=\"page-item ";
                yield ((($context["i"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 365
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 365), "query", [], "any", false, false, false, 365), "all", [], "any", false, false, false, 365), ["page" => $context["i"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 368
            yield "                
                ";
            // line 369
            if ((($context["endPage"] ?? null) < ($context["totalPages"] ?? null))) {
                // line 370
                yield "                    ";
                if ((($context["endPage"] ?? null) < (($context["totalPages"] ?? null) - 1))) {
                    // line 371
                    yield "                        <li class=\"page-item disabled d-none d-sm-block\"><span class=\"page-link\">…</span></li>
                    ";
                }
                // line 373
                yield "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                // line 374
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 374), "query", [], "any", false, false, false, 374), "all", [], "any", false, false, false, 374), ["page" => ($context["totalPages"] ?? null)])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            // line 377
            yield "                
                <li class=\"page-item ";
            // line 378
            yield (((($context["currentPage"] ?? null) >= ($context["totalPages"] ?? null))) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 379
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 379), "query", [], "any", false, false, false, 379), "all", [], "any", false, false, false, 379), ["page" => (($context["currentPage"] ?? null) + 1)])), "html", null, true);
            yield "\"><i class=\"fas fa-chevron-right\"></i></a>
                </li>
            </ul>
        </nav>
    </div>
    ";
        }
        // line 385
        yield "</div>

<!-- Modals -->
<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm modal-dialog-scrollable\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0 py-2\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Quota atteint</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3\">
                <i class=\"fas fa-ban fa-2x text-warning mb-2\"></i>
                <h5 class=\"fs-6\">Limite de ";
        // line 397
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quota"] ?? null), "html", null, true);
        yield " fournisseurs atteinte</h5>
                <p class=\"text-muted small mb-0\">Passez à un plan supérieur pour ajouter des fournisseurs.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center py-2 flex-column flex-sm-row gap-2\">
                <a href=\"";
        // line 401
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
        yield "\" class=\"btn btn-warning btn-sm px-3 w-100 w-sm-auto\">
                    <i class=\"fas fa-arrow-up me-2\"></i> Voir les offres
                </a>
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3 w-100 w-sm-auto\" data-bs-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"toggleSupplierModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm modal-dialog-scrollable\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0 py-2\">
                <h5 class=\"modal-title fs-6\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3\">
                <i class=\"fas fa-question-circle fa-2x text-primary mb-2\"></i>
                <p id=\"toggleSupplierMessage\" class=\"mb-0 small\"></p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center py-2 flex-column flex-sm-row gap-2\">
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3 w-100 w-sm-auto\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleSupplierForm\" method=\"post\" class=\"d-inline w-100 w-sm-auto\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleSupplierToken\">
                    <button type=\"submit\" class=\"btn btn-warning btn-sm px-3 w-100\">Confirmer</button>
                </form>
            </div>
        </div>
    </div>
</div>

";
        // line 432
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 433
            yield "<div class=\"modal fade\" id=\"deleteSupplierModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm modal-dialog-scrollable\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-danger text-white border-0 py-2\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3\">
                <i class=\"fas fa-trash-alt fa-2x text-danger mb-2\"></i>
                <p id=\"deleteSupplierMessage\" class=\"mb-0 small\"></p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center py-2 flex-column flex-sm-row gap-2\">
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3 w-100 w-sm-auto\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteSupplierForm\" method=\"post\" class=\"d-inline w-100 w-sm-auto\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteSupplierCsrfToken\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm px-3 w-100\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        }
        yield from [];
    }

    // line 457
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 458
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
:root {
    --shadow-sm: 0 2px 8px rgba(0,0,0,0.06);
    --shadow-md: 0 4px 20px rgba(0,0,0,0.08);
}

/* ============================================
   CARTES STATISTIQUES
   Mobile : 4 en haut (1/4) + 1 pleine largeur en bas
   ============================================ */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 0.5rem;
}

/* Par défaut : chaque carte prend 1/4 (4 par ligne) */
.stat-item {
    grid-column: span 1;
    display: flex;
    align-items: center;
    gap: 0.4rem;
    padding: 0.5rem 0.5rem;
    background: #f8f9fa;
    border-radius: 10px;
    transition: all 0.2s ease;
    min-height: 58px;
    min-width: 0;
}

/* ✅ La carte \"Filtrés\" prend toute la largeur (4/4) */
.stat-item-full {
    grid-column: span 4;
    padding: 0.6rem 0.75rem;
}

.stat-item:hover {
    background: #e9ecef;
    transform: translateY(-2px);
}

.stat-icon {
    width: 30px;
    height: 30px;
    min-width: 30px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 0.75rem;
    flex-shrink: 0;
}

.stat-item-full .stat-icon {
    width: 32px;
    height: 32px;
    min-width: 32px;
    font-size: 0.8rem;
}

.stat-content {
    display: flex;
    flex-direction: column;
    min-width: 0;
    flex: 1;
}

.stat-label {
    font-size: 0.5rem;
    text-transform: uppercase;
    letter-spacing: 0.2px;
    color: #6b7280;
    font-weight: 600;
    line-height: 1.1;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.stat-item-full .stat-label {
    font-size: 0.6rem;
}

.stat-value {
    font-size: 1rem;
    font-weight: 700;
    color: #1f2937;
    line-height: 1.2;
    margin-top: 0.1rem;
}

.stat-item-full .stat-value {
    font-size: 1.1rem;
}

/* ============================================
   QUOTA CARDS
   ============================================ */
.quota-card {
    padding: 0.4rem 0.6rem;
    border-radius: 8px;
    min-width: auto;
}

.quota-badge {
    width: 24px;
    height: 24px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 0.7rem;
    padding: 0 !important;
    flex-shrink: 0;
}

.quota-label {
    font-size: 0.55rem;
    line-height: 1;
    white-space: nowrap;
}

.quota-value {
    font-size: 0.8rem;
    line-height: 1.2;
}

/* ============================================
   CARTES FOURNISSEURS
   ============================================ */
.hover-card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    border-radius: 12px;
    overflow: hidden;
}
.hover-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-md) !important;
}

.contact-icon {
    width: 24px;
    height: 24px;
    min-width: 24px;
    background: #f1f5f9;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 0.5rem;
    font-size: 0.7rem;
    flex-shrink: 0;
}

.icon-tiny {
    font-size: 0.55rem;
}

.email-link {
    max-width: 140px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.badge {
    font-weight: 500;
    letter-spacing: 0.3px;
}

/* Email link hover */
a[href^=\"mailto:\"] {
    transition: all 0.2s ease;
}
a[href^=\"mailto:\"]:hover {
    color: #0d6efd !important;
    text-decoration: underline !important;
}
a[href^=\"mailto:\"]:hover .fa-paper-plane {
    animation: fly 0.4s ease;
}
@keyframes fly {
    0% { transform: translateX(0); }
    50% { transform: translateX(5px) scale(1.2); }
    100% { transform: translateX(0); }
}

/* ============================================
   RESPONSIVE
   ============================================ */

/* Tablette ≥ 576px : 5 cartes sur une seule ligne */
@media (min-width: 576px) {
    .stats-grid {
        grid-template-columns: repeat(5, 1fr);
        gap: 0.75rem;
    }
    .stat-item,
    .stat-item-full {
        grid-column: span 1;  /* Toutes sur une ligne */
        padding: 0.75rem;
        min-height: 65px;
        gap: 0.6rem;
    }
    .stat-icon,
    .stat-item-full .stat-icon {
        width: 40px;
        height: 40px;
        min-width: 40px;
        font-size: 1rem;
    }
    .stat-label,
    .stat-item-full .stat-label {
        font-size: 0.7rem;
    }
    .stat-value,
    .stat-item-full .stat-value {
        font-size: 1.25rem;
    }
    .quota-card {
        padding: 0.5rem 0.75rem;
    }
    .quota-badge {
        width: 30px;
        height: 30px;
        font-size: 0.85rem;
    }
    .quota-label {
        font-size: 0.65rem;
    }
    .quota-value {
        font-size: 0.95rem;
    }
}

/* Desktop ≥ 992px */
@media (min-width: 992px) {
    .stats-grid {
        grid-template-columns: repeat(5, 1fr);
        gap: 0.75rem;
    }
    .stat-item,
    .stat-item-full {
        padding: 0.85rem 1rem;
        min-height: 70px;
    }
    .stat-icon,
    .stat-item-full .stat-icon {
        width: 44px;
        height: 44px;
        min-width: 44px;
        font-size: 1.1rem;
    }
    .stat-value,
    .stat-item-full .stat-value {
        font-size: 1.4rem;
    }
}

/* Mobile < 576px */
@media (max-width: 575.98px) {
    .container-fluid {
        padding-left: 0.5rem !important;
        padding-right: 0.5rem !important;
    }

    /* Cartes fournisseurs */
    .card-header {
        padding: 0.5rem 0.75rem !important;
    }
    .card-body {
        padding: 0.5rem 0.75rem !important;
    }
    .card-title {
        font-size: 0.9rem !important;
    }
    .badge {
        font-size: 0.55rem !important;
        padding: 0.15rem 0.4rem !important;
    }
    .btn-sm {
        padding: 0.25rem 0.4rem !important;
        font-size: 0.7rem !important;
        min-height: 30px;
    }
    .btn-sm i {
        font-size: 0.75rem;
    }
    .contact-icon {
        width: 20px;
        height: 20px;
        min-width: 20px;
        font-size: 0.6rem;
        margin-right: 0.4rem;
    }
    .email-link {
        max-width: 120px;
        font-size: 0.75rem !important;
    }

    /* Pagination */
    .pagination-sm .page-link {
        padding: 0.2rem 0.4rem !important;
        font-size: 0.7rem !important;
    }

    /* Alertes */
    .alert {
        padding: 0.5rem 0.75rem !important;
        font-size: 0.8rem !important;
    }
    .alert .btn {
        font-size: 0.7rem !important;
        padding: 0.2rem 0.5rem !important;
    }

    /* Header */
    h1.h5 {
        font-size: 1rem !important;
    }

    /* Modals */
    .modal-body {
        padding: 0.75rem !important;
    }
    .modal-footer {
        padding: 0.5rem !important;
    }
    .modal-footer .btn {
        font-size: 0.75rem !important;
        padding: 0.3rem 0.6rem !important;
    }
}

/* Très petits mobiles < 376px */
@media (max-width: 375.98px) {
    .stat-item,
    .stat-item-full {
        padding: 0.4rem 0.35rem;
        min-height: 52px;
        gap: 0.3rem;
    }
    .stat-icon,
    .stat-item-full .stat-icon {
        width: 26px;
        height: 26px;
        min-width: 26px;
        font-size: 0.65rem;
    }
    .stat-label,
    .stat-item-full .stat-label {
        font-size: 0.45rem;
    }
    .stat-value,
    .stat-item-full .stat-value {
        font-size: 0.85rem;
    }
    .quota-card {
        padding: 0.3rem 0.5rem;
    }
    .quota-badge {
        width: 20px;
        height: 20px;
        font-size: 0.6rem;
    }
    .quota-label {
        font-size: 0.5rem;
    }
    .quota-value {
        font-size: 0.75rem;
    }
}

/* Classe utilitaire pour boutons full width sur mobile */
@media (max-width: 575.98px) {
    .w-100-mobile {
        width: 100% !important;
    }
}
@media (min-width: 576px) {
    .w-sm-auto {
        width: auto !important;
    }
}
</style>
";
        yield from [];
    }

    // line 846
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 847
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Nouveau fournisseur
    const newBtn = document.getElementById('newSupplierBtn');
    if (newBtn) {
        newBtn.addEventListener('click', function(e) {
            e.preventDefault();
            ";
        // line 855
        if ((($tmp = ($context["quotaReached"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 856
            yield "                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            ";
        } else {
            // line 858
            yield "                window.location.href = \"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_new");
            yield "\";
            ";
        }
        // line 860
        yield "        });
    }

    // Toggle status
    const toggleModalEl = document.getElementById('toggleSupplierModal');
    const toggleModal = new bootstrap.Modal(toggleModalEl);
    const toggleForm = document.getElementById('toggleSupplierForm');
    const toggleToken = document.getElementById('toggleSupplierToken');
    const toggleMessage = document.getElementById('toggleSupplierMessage');

    document.querySelectorAll('.toggle-supplier-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.supplierId;
            const name = this.dataset.supplierName;
            const current = this.dataset.currentStatus;
            const action = current === 'active' ? 'désactiver' : 'activer';
            toggleMessage.innerText = `Êtes-vous sûr de vouloir \${action} le fournisseur \"\${name}\" ?`;
            toggleForm.action = `/admin/supplier/\${id}/toggle-status`;
            toggleToken.value = this.dataset.token;
            toggleModal.show();
        });
    });

    // Suppression
    ";
        // line 884
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 885
            yield "    const deleteModalEl = document.getElementById('deleteSupplierModal');
    if (deleteModalEl) {
        const deleteModal = new bootstrap.Modal(deleteModalEl);
        const deleteForm = document.getElementById('deleteSupplierForm');
        const deleteToken = document.getElementById('deleteSupplierCsrfToken');
        const deleteMessage = document.getElementById('deleteSupplierMessage');

        document.querySelectorAll('.delete-supplier-btn:not([disabled])').forEach(btn => {
            btn.addEventListener('click', function() {
                const id = this.dataset.supplierId;
                const name = this.dataset.supplierName;
                deleteMessage.innerHTML = `
                    <div class=\"alert alert-warning mb-2 p-2 small\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>Cette action est irréversible.
                    </div>
                    <p class=\"mb-0\">Supprimer le fournisseur <strong>\"\${name}\"</strong> ?</p>
                `;
                deleteForm.action = `/admin/supplier/\${id}`;
                deleteToken.value = '";
            // line 903
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete"), "html", null, true);
            yield "';
                deleteModal.show();
            });
        });
    }
    ";
        }
        // line 909
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
        return "admin/supplier/index.html.twig";
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
        return array (  1313 => 909,  1304 => 903,  1284 => 885,  1282 => 884,  1256 => 860,  1250 => 858,  1246 => 856,  1244 => 855,  1233 => 847,  1226 => 846,  834 => 458,  827 => 457,  800 => 433,  798 => 432,  764 => 401,  757 => 397,  743 => 385,  734 => 379,  730 => 378,  727 => 377,  719 => 374,  716 => 373,  712 => 371,  709 => 370,  707 => 369,  704 => 368,  693 => 365,  688 => 364,  684 => 363,  681 => 362,  678 => 361,  674 => 359,  672 => 358,  667 => 356,  664 => 355,  662 => 354,  659 => 353,  656 => 352,  653 => 351,  650 => 350,  647 => 349,  644 => 348,  642 => 347,  637 => 345,  633 => 344,  622 => 340,  618 => 338,  616 => 337,  611 => 334,  598 => 327,  590 => 321,  588 => 320,  580 => 316,  572 => 311,  568 => 310,  564 => 308,  561 => 307,  555 => 303,  549 => 300,  545 => 299,  541 => 298,  537 => 297,  533 => 296,  529 => 295,  525 => 294,  522 => 293,  520 => 292,  514 => 289,  508 => 286,  501 => 282,  490 => 274,  485 => 272,  480 => 270,  474 => 266,  463 => 257,  459 => 256,  450 => 250,  439 => 242,  435 => 240,  429 => 236,  423 => 232,  421 => 231,  414 => 227,  410 => 226,  406 => 225,  399 => 220,  394 => 219,  389 => 216,  382 => 212,  378 => 210,  375 => 209,  364 => 200,  354 => 193,  350 => 192,  346 => 191,  335 => 183,  331 => 182,  327 => 181,  315 => 172,  288 => 148,  274 => 137,  260 => 126,  246 => 115,  232 => 104,  213 => 87,  203 => 83,  200 => 82,  196 => 81,  193 => 80,  183 => 76,  180 => 75,  175 => 74,  172 => 72,  162 => 65,  157 => 63,  151 => 59,  148 => 58,  139 => 51,  136 => 50,  128 => 45,  119 => 38,  117 => 37,  109 => 31,  105 => 29,  103 => 28,  97 => 27,  93 => 26,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/supplier/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\supplier\\index.html.twig");
    }
}
