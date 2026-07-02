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
class __TwigTemplate_afd36c313815cbfdc30526d5299e74d3 extends Template
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
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête avec quota et bouton d'ajout -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <h1 class=\"h3 mb-0 text-gray-800\">
                <i class=\"fas fa-truck me-2\"></i>Gestion des Fournisseurs
            </h1>
            <p class=\"text-muted mt-1\">Gérez vos fournisseurs et leurs coordonnées</p>
        </div>
        
        <div class=\"d-flex align-items-center gap-3 flex-wrap\">
            <!-- Indicateur de quota -->
            <div class=\"card bg-light border-0 shadow-sm p-2\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-2\">
                        <span class=\"badge bg-primary p-2 rounded-circle\">
                            <i class=\"fas fa-chart-line fa-fw\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted d-block\">Fournisseurs dans quota</small>
                        <h6 class=\"mb-0 ";
        // line 28
        yield (((($tmp = ($context["quotaReached"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-danger") : ("text-success"));
        yield " fw-bold\">
                            ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeCount"] ?? null), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quota"] ?? null), "html", null, true);
        yield "
                            ";
        // line 30
        if ((($context["quota"] ?? null) == "Illimité")) {
            // line 31
            yield "                                <i class=\"fas fa-infinity text-info ms-1 small\"></i>
                            ";
        }
        // line 33
        yield "                        </h6>
                    </div>
                </div>
            </div>

            ";
        // line 39
        yield "            ";
        if ((($context["subscriptionInactiveCount"] ?? null) > 0)) {
            // line 40
            yield "            <div class=\"card bg-light border-0 shadow-sm p-2\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-2\">
                        <span class=\"badge bg-warning p-2 rounded-circle\">
                            <i class=\"fas fa-clock fa-fw\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted d-block\">En attente</small>
                        <h6 class=\"mb-0 fw-bold\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscriptionInactiveCount"] ?? null), "html", null, true);
            yield "</h6>
                    </div>
                </div>
            </div>
            ";
        }
        // line 54
        yield "
            <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_new");
        yield "\" id=\"newSupplierBtn\" class=\"btn btn-primary shadow-sm\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouveau Fournisseur
            </a>
        </div>
    </div>

    ";
        // line 62
        yield "    ";
        if ((($context["quotaReached"] ?? null) && (($context["plan"] ?? null) != "premium"))) {
            // line 63
            yield "    <div class=\"alert alert-warning alert-dismissible fade show shadow-sm\" role=\"alert\">
        <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quota"] ?? null), "html", null, true);
            yield " fournisseurs dans le quota.
            </div>
            <a href=\"";
            // line 69
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
            yield "\" class=\"btn btn-warning btn-sm\">
                <i class=\"fas fa-arrow-up me-1\"></i> Voir les offres
            </a>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 76
        yield "
    ";
        // line 78
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 79
            yield "        <div class=\"alert alert-success alert-dismissible fade show shadow-sm\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "    
    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 85));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 86
            yield "        <div class=\"alert alert-danger alert-dismissible fade show shadow-sm\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "
    <!-- Statistiques filtrées -->
    <div class=\"card shadow-sm border-0 mb-4\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-chart-pie text-primary me-2\"></i>Statistiques selon les filtres
            </h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row g-3 row-cols-2 row-cols-md-4 row-cols-lg-5\" style=\"--bs-custom-col: 20%;\">
                <div class=\"col\">
                    <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Filtrés</span>
                                <h3 class=\"mb-0 fw-bold\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"bg-primary p-2 rounded-3\">
                                <i class=\"fas fa-truck text-white fs-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Actifs</span>
                                <h3 class=\"mb-0 fw-bold text-success\">";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"bg-success p-2 rounded-3\">
                                <i class=\"fas fa-check-circle text-white fs-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Inactifs</span>
                                <h3 class=\"mb-0 fw-bold text-danger\">";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inactiveFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"bg-danger p-2 rounded-3\">
                                <i class=\"fas fa-pause-circle text-white fs-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Abonnement actif</span>
                                <h3 class=\"mb-0 fw-bold text-info\">";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscriptionActiveFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"bg-info p-2 rounded-3\">
                                <i class=\"fas fa-database text-white fs-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Abonnement inactif</span>
                                <h3 class=\"mb-0 fw-bold text-secondary\">";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscriptionInactiveFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"bg-secondary p-2 rounded-3\">
                                <i class=\"fas fa-clock text-white fs-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulaire de filtres -->
    <div class=\"card shadow-sm border-0 mb-4\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-filter text-primary me-2\"></i>Filtres avancés
            </h5>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" class=\"row g-3\">
                <div class=\"col-lg-4 col-md-6\">
                    <label for=\"search\" class=\"form-label fw-semibold\">
                        <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                    </label>
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-light border-0\">
                            <i class=\"fas fa-search text-muted\"></i>
                        </span>
                        <input type=\"text\" name=\"search\" id=\"search\" value=\"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
        yield "\" 
                            class=\"form-control bg-light border-0\" placeholder=\"Nom, contact, email...\">
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <label for=\"status\" class=\"form-label fw-semibold\">
                        <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                    </label>
                    <select name=\"status\" id=\"status\" class=\"form-select bg-light border-0\">
                        <option value=\"all\" ";
        // line 196
        yield (((($context["status"] ?? null) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"active\" ";
        // line 197
        yield (((($context["status"] ?? null) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                        <option value=\"inactive\" ";
        // line 198
        yield (((($context["status"] ?? null) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                    </select>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <label for=\"sub_status\" class=\"form-label fw-semibold\">
                        <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                    </label>
                    <select name=\"sub_status\" id=\"sub_status\" class=\"form-select bg-light border-0\">
                        <option value=\"all\" ";
        // line 206
        yield (((($context["subStatus"] ?? null) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"active\" ";
        // line 207
        yield (((($context["subStatus"] ?? null) == "active")) ? ("selected") : (""));
        yield ">Actif</option>
                        <option value=\"inactive\" ";
        // line 208
        yield (((($context["subStatus"] ?? null) == "inactive")) ? ("selected") : (""));
        yield ">Inactif</option>
                    </select>
                </div>
                <div class=\"col-lg-2 d-flex align-items-end gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary w-100 py-2\">
                        <i class=\"fas fa-search me-1\"></i> Filtrer
                    </button>
                    <a href=\"";
        // line 215
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index");
        yield "\" class=\"btn btn-outline-secondary py-2\" title=\"Effacer\">
                        <i class=\"fas fa-undo\"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>

    ";
        // line 224
        yield "    ";
        if (((($context["subStatus"] ?? null) == "inactive") && (($context["subscriptionInactiveFiltered"] ?? null) > 0))) {
            // line 225
            yield "        <div class=\"alert alert-info alert-dismissible fade show mb-4 shadow-sm\" role=\"alert\">
            <i class=\"fas fa-info-circle me-2\"></i>
            <strong>";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscriptionInactiveFiltered"] ?? null), "html", null, true);
            yield " fournisseur(s)</strong> désactivés par abonnement.
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        // line 231
        yield "
    <!-- Grille de fournisseurs -->
    <div class=\"row g-4\">
        ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["suppliers"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["supplier"]) {
            // line 235
            yield "        <div class=\"col-xl-3 col-lg-4 col-md-6\">
            <div class=\"card h-100 border-0 shadow-sm hover-card\">
                <div class=\"card-header bg-transparent border-0 pt-3 px-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <span class=\"badge ";
            // line 240
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 240)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
            yield " rounded-pill px-3 py-2\">
                                <i class=\"fas ";
            // line 241
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 241)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check-circle") : ("fa-pause-circle"));
            yield " me-1\"></i>
                                ";
            // line 242
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 242)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                            </span>
                        </div>
                        <div>
                            ";
            // line 246
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "subscriptionActive", [], "any", false, false, false, 246)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 247
                yield "                                <span class=\"badge bg-info rounded-pill px-3 py-2\" title=\"Dans quota\">
                                    <i class=\"fas fa-database me-1\"></i>Quota
                                </span>
                            ";
            } else {
                // line 251
                yield "                                <span class=\"badge bg-warning rounded-pill px-3 py-2\" title=\"Hors quota\">
                                    <i class=\"fas fa-clock me-1\"></i>En attente
                                </span>
                            ";
            }
            // line 255
            yield "                        </div>
                    </div>
                    <h5 class=\"card-title mt-2 mb-0 fw-bold text-truncate\">";
            // line 257
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "name", [], "any", false, false, false, 257), "html", null, true);
            yield "</h5>
                </div>
                <div class=\"card-body pt-2\">
                    <div class=\"mb-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <div class=\"bg-light rounded-circle p-2 me-2\" style=\"width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;\">
                                <i class=\"fas fa-user text-primary small\"></i>
                            </div>
                            <span class=\"small\">";
            // line 265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "contactPerson", [], "any", false, false, false, 265), "html", null, true);
            yield "</span>
                        </div>
                        <div class=\"d-flex align-items-center mb-2\">
                            <div class=\"bg-light rounded-circle p-2 me-2\" style=\"width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;\">
                                <i class=\"fas fa-phone text-success small\"></i>
                            </div>
                            <span class=\"small\">";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "phone", [], "any", false, false, false, 271), "html", null, true);
            yield "</span>
                            <a href=\"https://wa.me/";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "phone", [], "any", false, false, false, 272), [" " => "", "-" => "", "+" => ""]), "html", null, true);
            yield "\" 
                               target=\"_blank\" 
                               class=\"ms-auto text-success\"
                               title=\"Discuter sur WhatsApp\">
                                <i class=\"fab fa-whatsapp fa-lg\"></i>
                            </a>
                        </div>
                        <div class=\"d-flex align-items-center mb-2\">
                            <div class=\"bg-light rounded-circle p-2 me-2\" style=\"width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;\">
                                <i class=\"fas fa-envelope text-info small\"></i>
                            </div>
                            <span class=\"small text-truncate\">";
            // line 283
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "email", [], "any", false, false, false, 283), "html", null, true);
            yield "</span>
                        </div>
                        <div class=\"d-flex align-items-center\">
                            <div class=\"bg-light rounded-circle p-2 me-2\" style=\"width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;\">
                                <i class=\"fas fa-map-marker-alt text-warning small\"></i>
                            </div>
                            <span class=\"small text-truncate\">";
            // line 289
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "adress", [], "any", false, false, false, 289)), "truncate", [35], "method", false, false, false, 289), "html", null, true);
            yield "</span>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-between gap-2 mt-3\">
                        <a href=\"";
            // line 293
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 293)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info flex-fill\">
                            <i class=\"fas fa-eye me-1\"></i> 
                        </a>
                        <a href=\"";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 296)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-warning flex-fill\">
                            <i class=\"fas fa-edit me-1\"></i> 
                        </a>
                        ";
            // line 299
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "subscriptionActive", [], "any", false, false, false, 299)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 300
                yield "                            <button type=\"button\" 
                                    class=\"btn btn-sm ";
                // line 301
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 301)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-outline-danger") : ("btn-outline-success"));
                yield " flex-fill toggle-supplier-btn\"
                                    data-supplier-id=\"";
                // line 302
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 302), "html", null, true);
                yield "\"
                                    data-supplier-name=\"";
                // line 303
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "name", [], "any", false, false, false, 303), "html", null, true);
                yield "\"
                                    data-current-status=\"";
                // line 304
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 304)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                yield "\"
                                    data-token=\"";
                // line 305
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 305))), "html", null, true);
                yield "\"
                                    title=\"";
                // line 306
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 306)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
                yield "\">
                                <i class=\"fas ";
                // line 307
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 307)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
                yield "\"></i>
                            </button>
                        ";
            } else {
                // line 310
                yield "                            <span class=\"btn btn-sm btn-secondary disabled flex-fill\">
                                <i class=\"fas fa-ban\"></i>
                            </span>
                        ";
            }
            // line 314
            yield "                        ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "purchases", [], "any", false, false, false, 314)) == 0))) {
                // line 315
                yield "                            <button type=\"button\" 
                                    class=\"btn btn-sm btn-outline-danger flex-fill delete-supplier-btn\"
                                    data-supplier-id=\"";
                // line 317
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 317), "html", null, true);
                yield "\"
                                    data-supplier-name=\"";
                // line 318
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "name", [], "any", false, false, false, 318), "html", null, true);
                yield "\"
                                    title=\"Supprimer\">
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        ";
            }
            // line 323
            yield "                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 327
        if (!$context['_iterated']) {
            // line 328
            yield "        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-truck fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted fw-light\">Aucun fournisseur trouvé</h4>
                    <p class=\"text-muted mb-4\">Modifiez vos filtres ou créez un nouveau fournisseur.</p>
                    <a href=\"";
            // line 334
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index");
            yield "\" class=\"btn btn-outline-primary px-4\">
                        <i class=\"fas fa-undo me-2\"></i> Réinitialiser les filtres
                    </a>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['supplier'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 341
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 344
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 345
            yield "    <div class=\"d-flex justify-content-between align-items-center mt-4\">
        <div class=\"text-muted small\">
            Page ";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currentPage"] ?? null), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalItems"] ?? null), "html", null, true);
            yield " résultats)
        </div>
        <nav aria-label=\"Pagination\">
            <ul class=\"pagination pagination-sm mb-0\">
                <li class=\"page-item ";
            // line 351
            yield (((($context["currentPage"] ?? null) <= 1)) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 352
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 352), "query", [], "any", false, false, false, 352), "all", [], "any", false, false, false, 352), ["page" => (($context["currentPage"] ?? null) - 1)])), "html", null, true);
            yield "\"><i class=\"fas fa-chevron-left\"></i></a>
                </li>
                ";
            // line 354
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 355
                yield "                    <li class=\"page-item ";
                yield ((($context["i"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 356
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 356), "query", [], "any", false, false, false, 356), "all", [], "any", false, false, false, 356), ["page" => $context["i"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 359
            yield "                <li class=\"page-item ";
            yield (((($context["currentPage"] ?? null) >= ($context["totalPages"] ?? null))) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 360
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 360), "query", [], "any", false, false, false, 360), "all", [], "any", false, false, false, 360), ["page" => (($context["currentPage"] ?? null) + 1)])), "html", null, true);
            yield "\"><i class=\"fas fa-chevron-right\"></i></a>
                </li>
            </ul>
        </nav>
    </div>
    ";
        }
        // line 366
        yield "</div>

<!-- Modals -->
<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Quota atteint</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-ban fa-4x text-warning mb-3\"></i>
                <h5>Vous avez atteint votre limite de ";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quota"] ?? null), "html", null, true);
        yield " fournisseurs dans le quota.</h5>
                <p class=\"text-muted\">Pour ajouter de nouveaux fournisseurs, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <a href=\"";
        // line 382
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
        yield "\" class=\"btn btn-warning btn-lg px-4\">
                    <i class=\"fas fa-arrow-up me-2\"></i> Voir les offres
                </a>
                <button type=\"button\" class=\"btn btn-outline-secondary btn-lg px-4\" data-bs-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"toggleSupplierModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-question-circle fa-4x text-primary mb-3\"></i>
                <p id=\"toggleSupplierMessage\" class=\"mb-0\"></p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleSupplierForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleSupplierToken\">
                    <button type=\"submit\" class=\"btn btn-warning px-4\">Confirmer</button>
                </form>
            </div>
        </div>
    </div>
</div>

";
        // line 413
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 414
            yield "<div class=\"modal fade\" id=\"deleteSupplierModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                <p id=\"deleteSupplierMessage\" class=\"mb-0\"></p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteSupplierForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteSupplierCsrfToken\">
                    <button type=\"submit\" class=\"btn btn-danger px-4\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        }
        yield from [];
    }

    // line 438
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 439
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
.hover-card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.hover-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.08) !important;
}
.stat-item {
    transition: background-color 0.2s;
}
.stat-item:hover {
    background-color: #e9ecef !important;
}
.badge {
    font-weight: 500;
    letter-spacing: 0.3px;
}
@media (min-width: 992px) {
    .row-cols-lg-5 > .col {
        flex: 0 0 20%;
        max-width: 20%;
    }
}
@media (max-width: 768px) {
    .pagination {
        flex-wrap: wrap;
        justify-content: center;
    }
}
</style>
";
        yield from [];
    }

    // line 473
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 474
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
        // line 482
        if ((($tmp = ($context["quotaReached"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 483
            yield "                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            ";
        } else {
            // line 485
            yield "                window.location.href = \"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_new");
            yield "\";
            ";
        }
        // line 487
        yield "        });
    }

    // Toggle status
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleSupplierModal'));
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
        // line 510
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 511
            yield "    const deleteModal = new bootstrap.Modal(document.getElementById('deleteSupplierModal'));
    const deleteForm = document.getElementById('deleteSupplierForm');
    const deleteToken = document.getElementById('deleteSupplierCsrfToken');
    const deleteMessage = document.getElementById('deleteSupplierMessage');

    document.querySelectorAll('.delete-supplier-btn:not([disabled])').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.supplierId;
            const name = this.dataset.supplierName;
            deleteMessage.innerHTML = `
                <div class=\"alert alert-warning mb-2 p-2\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>Cette action est irréversible.
                </div>
                <p class=\"mb-0\">Supprimer le fournisseur <strong>\"\${name}\"</strong> ?</p>
            `;
            deleteForm.action = `/admin/supplier/\${id}`;
            deleteToken.value = '";
            // line 527
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete"), "html", null, true);
            yield "';
            deleteModal.show();
        });
    });
    ";
        }
        // line 532
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
        return array (  888 => 532,  880 => 527,  862 => 511,  860 => 510,  835 => 487,  829 => 485,  825 => 483,  823 => 482,  812 => 474,  805 => 473,  767 => 439,  760 => 438,  733 => 414,  731 => 413,  697 => 382,  690 => 378,  676 => 366,  667 => 360,  662 => 359,  651 => 356,  646 => 355,  642 => 354,  637 => 352,  633 => 351,  622 => 347,  618 => 345,  616 => 344,  611 => 341,  598 => 334,  590 => 328,  588 => 327,  580 => 323,  572 => 318,  568 => 317,  564 => 315,  561 => 314,  555 => 310,  549 => 307,  545 => 306,  541 => 305,  537 => 304,  533 => 303,  529 => 302,  525 => 301,  522 => 300,  520 => 299,  514 => 296,  508 => 293,  501 => 289,  492 => 283,  478 => 272,  474 => 271,  465 => 265,  454 => 257,  450 => 255,  444 => 251,  438 => 247,  436 => 246,  429 => 242,  425 => 241,  421 => 240,  414 => 235,  409 => 234,  404 => 231,  397 => 227,  393 => 225,  390 => 224,  379 => 215,  369 => 208,  365 => 207,  361 => 206,  350 => 198,  346 => 197,  342 => 196,  330 => 187,  298 => 158,  282 => 145,  266 => 132,  250 => 119,  234 => 106,  217 => 91,  207 => 87,  204 => 86,  200 => 85,  197 => 84,  187 => 80,  184 => 79,  179 => 78,  176 => 76,  166 => 69,  161 => 67,  155 => 63,  152 => 62,  143 => 55,  140 => 54,  132 => 49,  121 => 40,  118 => 39,  111 => 33,  107 => 31,  105 => 30,  99 => 29,  95 => 28,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/supplier/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\supplier\\index.html.twig");
    }
}
