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

/* super_admin/subscription_plan/index.html.twig */
class __TwigTemplate_b790c700d975765e64c8aad53b6b9b2c extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/subscription_plan/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/subscription_plan/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Plans d'abonnement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"container-fluid px-4 py-4\">
    <!-- En-tête moderne -->
    <div class=\"row mb-5\">
        <div class=\"col-12\">
            <div class=\"modern-header position-relative overflow-hidden rounded-4 shadow-lg p-5 text-white\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\">
                <div class=\"floating-bg\">
                    <div class=\"shape shape-1\"></div>
                    <div class=\"shape shape-2\"></div>
                </div>
                <div class=\"position-relative z-1\">
                    <div class=\"d-flex align-items-center gap-4\">
                        <div class=\"icon-wrapper bg-white bg-opacity-20 rounded-4 p-4\">
                            <i class=\"bi bi-tags display-4\"></i>
                        </div>
                        <div>
                            <h1 class=\"display-5 fw-bold mb-2\">Plans d'abonnement</h1>
                            <p class=\"text-white-50 mb-0\">Gérez les offres proposées aux entreprises</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Messages flash -->
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "flashes", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 32
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 33
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show rounded-4 shadow-sm mb-4\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "
    <!-- Bouton nouveau plan -->
    <div class=\"d-flex justify-content-end mb-4\">
        <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_new");
        yield "\" class=\"btn btn-primary btn-lg rounded-pill px-4 shadow-sm\">
            <i class=\"bi bi-plus-circle me-2\"></i>Nouveau plan
        </a>
    </div>

    <!-- Grille des plans -->
    <div class=\"row g-4\">
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["plans"]) || array_key_exists("plans", $context) ? $context["plans"] : (function () { throw new RuntimeError('Variable "plans" does not exist.', 46, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 47
            yield "            <div class=\"col-xl-4 col-lg-6\">
                <div class=\"card h-100 border-0 shadow-lg hover-lift rounded-4 overflow-hidden d-flex flex-column\">
                    <!-- En-tête avec nom et badge illimité/limité -->
                    <div class=\"card-header bg-gradient-";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 50)), "html", null, true);
            yield " text-white py-3 d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0 fw-bold\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "displayName", [], "any", false, false, false, 51), "html", null, true);
            yield "</h5>
                        <span class=\"badge bg-white text-dark rounded-pill px-3 py-2\">
                            ";
            // line 53
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isUnlimited", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Illimité";
            } else {
                yield "Limité";
            }
            // line 54
            yield "                        </span>
                    </div>

                    <div class=\"card-body p-4 d-flex flex-column flex-grow-1\">
                        <!-- Prix -->
                        <div class=\"text-center mb-4\">
                            <h2 class=\"display-6 fw-bold text-primary mb-0\">";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "priceMonthly", [], "any", false, false, false, 60), 0, ",", " "), "html", null, true);
            yield " FCFA</h2>
                            <p class=\"text-muted\">/mois • <small>";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "priceYearly", [], "any", false, false, false, 61), 0, ",", " "), "html", null, true);
            yield " FCFA/an</small></p>
                        </div>

                        <!-- Limites affichées ligne par ligne (même si illimité) -->
                        <div class=\"mb-4\">
                            <div class=\"d-flex align-items-center mb-2\">
                                <i class=\"bi bi-people-fill text-success me-3 fs-5\"></i>
                                <span><strong>Utilisateurs/rôle :</strong> ";
            // line 68
            yield (((null === CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxUsersPerRole", [], "any", false, false, false, 68))) ? ("∞") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxUsersPerRole", [], "any", false, false, false, 68), "html", null, true)));
            yield "</span>
                            </div>
                            <div class=\"d-flex align-items-center mb-2\">
                                <i class=\"bi bi-box-fill text-info me-3 fs-5\"></i>
                                <span><strong>Produits :</strong> ";
            // line 72
            yield (((null === CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxProducts", [], "any", false, false, false, 72))) ? ("∞") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxProducts", [], "any", false, false, false, 72), "html", null, true)));
            yield "</span>
                            </div>
                            <div class=\"d-flex align-items-center mb-2\">
                                <i class=\"bi bi-cart-fill text-warning me-3 fs-5\"></i>
                                <span><strong>Commandes/mois :</strong> ";
            // line 76
            yield (((null === CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxOrdersPerMonth", [], "any", false, false, false, 76))) ? ("∞") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxOrdersPerMonth", [], "any", false, false, false, 76), "html", null, true)));
            yield "</span>
                            </div>
                            <div class=\"d-flex align-items-center mb-2\">
                                <i class=\"bi bi-tags-fill text-primary me-3 fs-5\"></i>
                                <span><strong>Catégories :</strong> ";
            // line 80
            yield (((null === CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxCategories", [], "any", false, false, false, 80))) ? ("∞") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxCategories", [], "any", false, false, false, 80), "html", null, true)));
            yield "</span>
                            </div>
                            <div class=\"d-flex align-items-center mb-2\">
                                <i class=\"bi bi-truck-fill text-secondary me-3 fs-5\"></i>
                                <span><strong>Fournisseurs :</strong> ";
            // line 84
            yield (((null === CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxSuppliers", [], "any", false, false, false, 84))) ? ("∞") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxSuppliers", [], "any", false, false, false, 84), "html", null, true)));
            yield "</span>
                            </div>
                        </div>

                        <!-- Nombre de fonctionnalités -->
                        ";
            // line 89
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "features", [], "any", false, false, false, 89)) > 0)) {
                // line 90
                yield "                            <div class=\"d-flex align-items-center mb-3\">
                                <i class=\"bi bi-star-fill text-warning me-3 fs-5\"></i>
                                <span><strong>Fonctionnalités :</strong> ";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "features", [], "any", false, false, false, 92)), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            // line 95
            yield "
                        <!-- Statut actif/inactif et nombre d'abonnements -->
                        <div class=\"d-flex justify-content-between align-items-center mt-auto mb-3\">
                            <span class=\"badge bg-";
            // line 98
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("success") : ("secondary"));
            yield " fs-6 p-2\">
                                <i class=\"bi bi-";
            // line 99
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 99)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("check-circle") : ("x-circle"));
            yield " me-1\"></i>
                                ";
            // line 100
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                            </span>
                            <small class=\"text-muted\">";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "subscriptions", [], "any", false, false, false, 102)), "html", null, true);
            yield " abonnement(s)</small>
                        </div>

                        <!-- Actions centrées -->
                        <div class=\"d-flex gap-2 justify-content-center mt-2\">
                            <a href=\"";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 107)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary rounded-pill px-3\" title=\"Détails\"><i class=\"bi bi-eye\"></i></a>
                            <a href=\"";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 108)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-warning rounded-pill px-3\" title=\"Modifier\"><i class=\"bi bi-pencil\"></i></a>
                            <button type=\"button\" class=\"btn btn-sm btn-outline-";
            // line 109
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("danger") : ("success"));
            yield " rounded-pill px-3\" data-bs-toggle=\"modal\" data-bs-target=\"#toggleModal";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 109), "html", null, true);
            yield "\" title=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "\"><i class=\"bi bi-";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("pause-fill") : ("play-fill"));
            yield "\"></i></button>
                            ";
            // line 110
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "subscriptions", [], "any", false, false, false, 110)) == 0)) {
                // line 111
                yield "                                <button type=\"button\" class=\"btn btn-sm btn-outline-danger rounded-pill px-3\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 111), "html", null, true);
                yield "\" title=\"Supprimer\"><i class=\"bi bi-trash\"></i></button>
                            ";
            }
            // line 113
            yield "                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Toggle (placé dans la boucle, après la carte) -->
            <div class=\"modal fade\" id=\"toggleModal";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 119), "html", null, true);
            yield "\" tabindex=\"-1\">
                <div class=\"modal-dialog modal-dialog-centered\">
                    <div class=\"modal-content border-0 rounded-4\">
                        <div class=\"modal-header bg-";
            // line 122
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("success"));
            yield " text-white border-0\">
                            <h5 class=\"modal-title\">
                                <i class=\"bi bi-";
            // line 124
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("pause-circle") : ("play-circle"));
            yield " me-2\"></i>
                                ";
            // line 125
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 125)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield " le plan
                            </h5>
                            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                        </div>
                        <div class=\"modal-body p-4\">
                            <p class=\"mb-0\">
                                Êtes-vous sûr de vouloir ";
            // line 131
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 131)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("désactiver") : ("activer"));
            yield " le plan <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "displayName", [], "any", false, false, false, 131), "html", null, true);
            yield "</strong> ?
                                ";
            // line 132
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 133
                yield "                                    <br><small class=\"text-muted\">Les entreprises avec ce plan ne pourront plus l'utiliser.</small>
                                ";
            } else {
                // line 135
                yield "                                    <br><small class=\"text-muted\">Les entreprises pourront souscrire à ce plan.</small>
                                ";
            }
            // line 137
            yield "                            </p>
                        </div>
                        <div class=\"modal-footer border-0 justify-content-center\">
                            <button type=\"button\" class=\"btn btn-secondary px-4 rounded-pill\" data-bs-dismiss=\"modal\">Annuler</button>
                            <form action=\"";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 141)]), "html", null, true);
            yield "\" method=\"post\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle" . CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 142))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-";
            // line 143
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 143)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("success"));
            yield " px-4 rounded-pill\">Confirmer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Delete (si pas d'abonnements) -->
            ";
            // line 151
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "subscriptions", [], "any", false, false, false, 151)) == 0)) {
                // line 152
                yield "            <div class=\"modal fade\" id=\"deleteModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 152), "html", null, true);
                yield "\" tabindex=\"-1\">
                <div class=\"modal-dialog modal-dialog-centered\">
                    <div class=\"modal-content border-0 rounded-4\">
                        <div class=\"modal-header bg-danger text-white border-0\">
                            <h5 class=\"modal-title\"><i class=\"bi bi-exclamation-triangle-fill me-2\"></i>Supprimer le plan</h5>
                            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                        </div>
                        <div class=\"modal-body p-4\">
                            <p>Attention, cette action est irréversible. Voulez-vous vraiment supprimer le plan <strong>";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "displayName", [], "any", false, false, false, 160), "html", null, true);
                yield "</strong> ?</p>
                        </div>
                        <div class=\"modal-footer border-0 justify-content-center\">
                            <button type=\"button\" class=\"btn btn-secondary px-4 rounded-pill\" data-bs-dismiss=\"modal\">Annuler</button>
                            <form action=\"";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 164)]), "html", null, true);
                yield "\" method=\"post\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 165))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"btn btn-danger px-4 rounded-pill\">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            // line 173
            yield "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 174
            yield "            <!-- Aucun plan trouvé -->
            <div class=\"col-12 text-center py-5\">
                <i class=\"bi bi-tags display-1 text-muted\"></i>
                <p class=\"mt-3 fs-4\">Aucun plan d'abonnement.</p>
                <a href=\"";
            // line 178
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_new");
            yield "\" class=\"btn btn-primary btn-lg rounded-pill px-5\">Créer le premier</a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['plan'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        yield "    </div>
</div>

<style>
.modern-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    min-height: 180px;
}
.floating-bg .shape {
    position: absolute;
    background: rgba(255,255,255,0.1);
    border-radius: 50%;
}
.shape-1 {
    width: 250px; height: 250px; top: -80px; right: -40px;
    animation: float 8s ease-in-out infinite;
}
.shape-2 {
    width: 150px; height: 150px; bottom: -40px; left: -20px;
    animation: float 12s ease-in-out infinite reverse;
}
@keyframes float {
    0%,100%{ transform: translateY(0) rotate(0deg); }
    50%{ transform: translateY(-20px) rotate(5deg); }
}
.icon-wrapper {
    transition: transform 0.3s;
}
.icon-wrapper:hover {
    transform: scale(1.05) rotate(5deg);
}
.hover-lift {
    transition: all 0.3s;
}
.hover-lift:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 30px rgba(0,0,0,0.15) !important;
}
/* Dégradés pour les en-têtes selon le plan */
.bg-gradient-freemium { background: linear-gradient(135deg, #6b7280, #4b5563); }
.bg-gradient-basic    { background: linear-gradient(135deg, #3b82f6, #1d4ed8); }
.bg-gradient-premium  { background: linear-gradient(135deg, #8b5cf6, #6d28d9); }
.bg-gradient-secondary{ background: linear-gradient(135deg, #9ca3af, #6b7280); }
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
        return "super_admin/subscription_plan/index.html.twig";
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
        return array (  444 => 181,  435 => 178,  429 => 174,  424 => 173,  413 => 165,  409 => 164,  402 => 160,  390 => 152,  388 => 151,  377 => 143,  373 => 142,  369 => 141,  363 => 137,  359 => 135,  355 => 133,  353 => 132,  347 => 131,  338 => 125,  334 => 124,  329 => 122,  323 => 119,  315 => 113,  309 => 111,  307 => 110,  297 => 109,  293 => 108,  289 => 107,  281 => 102,  276 => 100,  272 => 99,  268 => 98,  263 => 95,  257 => 92,  253 => 90,  251 => 89,  243 => 84,  236 => 80,  229 => 76,  222 => 72,  215 => 68,  205 => 61,  201 => 60,  193 => 54,  187 => 53,  182 => 51,  178 => 50,  173 => 47,  168 => 46,  158 => 39,  153 => 36,  147 => 35,  136 => 33,  131 => 32,  127 => 31,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Plans d'abonnement{% endblock %}

{% block body %}
<div class=\"container-fluid px-4 py-4\">
    <!-- En-tête moderne -->
    <div class=\"row mb-5\">
        <div class=\"col-12\">
            <div class=\"modern-header position-relative overflow-hidden rounded-4 shadow-lg p-5 text-white\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\">
                <div class=\"floating-bg\">
                    <div class=\"shape shape-1\"></div>
                    <div class=\"shape shape-2\"></div>
                </div>
                <div class=\"position-relative z-1\">
                    <div class=\"d-flex align-items-center gap-4\">
                        <div class=\"icon-wrapper bg-white bg-opacity-20 rounded-4 p-4\">
                            <i class=\"bi bi-tags display-4\"></i>
                        </div>
                        <div>
                            <h1 class=\"display-5 fw-bold mb-2\">Plans d'abonnement</h1>
                            <p class=\"text-white-50 mb-0\">Gérez les offres proposées aux entreprises</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Messages flash -->
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }} alert-dismissible fade show rounded-4 shadow-sm mb-4\">{{ message }}</div>
        {% endfor %}
    {% endfor %}

    <!-- Bouton nouveau plan -->
    <div class=\"d-flex justify-content-end mb-4\">
        <a href=\"{{ path('app_super_admin_subscription_plan_new') }}\" class=\"btn btn-primary btn-lg rounded-pill px-4 shadow-sm\">
            <i class=\"bi bi-plus-circle me-2\"></i>Nouveau plan
        </a>
    </div>

    <!-- Grille des plans -->
    <div class=\"row g-4\">
        {% for plan in plans %}
            <div class=\"col-xl-4 col-lg-6\">
                <div class=\"card h-100 border-0 shadow-lg hover-lift rounded-4 overflow-hidden d-flex flex-column\">
                    <!-- En-tête avec nom et badge illimité/limité -->
                    <div class=\"card-header bg-gradient-{{ plan.name|lower }} text-white py-3 d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0 fw-bold\">{{ plan.displayName }}</h5>
                        <span class=\"badge bg-white text-dark rounded-pill px-3 py-2\">
                            {% if plan.isUnlimited %}Illimité{% else %}Limité{% endif %}
                        </span>
                    </div>

                    <div class=\"card-body p-4 d-flex flex-column flex-grow-1\">
                        <!-- Prix -->
                        <div class=\"text-center mb-4\">
                            <h2 class=\"display-6 fw-bold text-primary mb-0\">{{ plan.priceMonthly|number_format(0, ',', ' ') }} FCFA</h2>
                            <p class=\"text-muted\">/mois • <small>{{ plan.priceYearly|number_format(0, ',', ' ') }} FCFA/an</small></p>
                        </div>

                        <!-- Limites affichées ligne par ligne (même si illimité) -->
                        <div class=\"mb-4\">
                            <div class=\"d-flex align-items-center mb-2\">
                                <i class=\"bi bi-people-fill text-success me-3 fs-5\"></i>
                                <span><strong>Utilisateurs/rôle :</strong> {{ plan.maxUsersPerRole is null ? '∞' : plan.maxUsersPerRole }}</span>
                            </div>
                            <div class=\"d-flex align-items-center mb-2\">
                                <i class=\"bi bi-box-fill text-info me-3 fs-5\"></i>
                                <span><strong>Produits :</strong> {{ plan.maxProducts is null ? '∞' : plan.maxProducts }}</span>
                            </div>
                            <div class=\"d-flex align-items-center mb-2\">
                                <i class=\"bi bi-cart-fill text-warning me-3 fs-5\"></i>
                                <span><strong>Commandes/mois :</strong> {{ plan.maxOrdersPerMonth is null ? '∞' : plan.maxOrdersPerMonth }}</span>
                            </div>
                            <div class=\"d-flex align-items-center mb-2\">
                                <i class=\"bi bi-tags-fill text-primary me-3 fs-5\"></i>
                                <span><strong>Catégories :</strong> {{ plan.maxCategories is null ? '∞' : plan.maxCategories }}</span>
                            </div>
                            <div class=\"d-flex align-items-center mb-2\">
                                <i class=\"bi bi-truck-fill text-secondary me-3 fs-5\"></i>
                                <span><strong>Fournisseurs :</strong> {{ plan.maxSuppliers is null ? '∞' : plan.maxSuppliers }}</span>
                            </div>
                        </div>

                        <!-- Nombre de fonctionnalités -->
                        {% if plan.features|length > 0 %}
                            <div class=\"d-flex align-items-center mb-3\">
                                <i class=\"bi bi-star-fill text-warning me-3 fs-5\"></i>
                                <span><strong>Fonctionnalités :</strong> {{ plan.features|length }}</span>
                            </div>
                        {% endif %}

                        <!-- Statut actif/inactif et nombre d'abonnements -->
                        <div class=\"d-flex justify-content-between align-items-center mt-auto mb-3\">
                            <span class=\"badge bg-{{ plan.isActive ? 'success' : 'secondary' }} fs-6 p-2\">
                                <i class=\"bi bi-{{ plan.isActive ? 'check-circle' : 'x-circle' }} me-1\"></i>
                                {{ plan.isActive ? 'Actif' : 'Inactif' }}
                            </span>
                            <small class=\"text-muted\">{{ plan.subscriptions|length }} abonnement(s)</small>
                        </div>

                        <!-- Actions centrées -->
                        <div class=\"d-flex gap-2 justify-content-center mt-2\">
                            <a href=\"{{ path('app_super_admin_subscription_plan_show', {'id': plan.id}) }}\" class=\"btn btn-sm btn-outline-primary rounded-pill px-3\" title=\"Détails\"><i class=\"bi bi-eye\"></i></a>
                            <a href=\"{{ path('app_super_admin_subscription_plan_edit', {'id': plan.id}) }}\" class=\"btn btn-sm btn-outline-warning rounded-pill px-3\" title=\"Modifier\"><i class=\"bi bi-pencil\"></i></a>
                            <button type=\"button\" class=\"btn btn-sm btn-outline-{{ plan.isActive ? 'danger' : 'success' }} rounded-pill px-3\" data-bs-toggle=\"modal\" data-bs-target=\"#toggleModal{{ plan.id }}\" title=\"{{ plan.isActive ? 'Désactiver' : 'Activer' }}\"><i class=\"bi bi-{{ plan.isActive ? 'pause-fill' : 'play-fill' }}\"></i></button>
                            {% if plan.subscriptions|length == 0 %}
                                <button type=\"button\" class=\"btn btn-sm btn-outline-danger rounded-pill px-3\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ plan.id }}\" title=\"Supprimer\"><i class=\"bi bi-trash\"></i></button>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Toggle (placé dans la boucle, après la carte) -->
            <div class=\"modal fade\" id=\"toggleModal{{ plan.id }}\" tabindex=\"-1\">
                <div class=\"modal-dialog modal-dialog-centered\">
                    <div class=\"modal-content border-0 rounded-4\">
                        <div class=\"modal-header bg-{{ plan.isActive ? 'warning' : 'success' }} text-white border-0\">
                            <h5 class=\"modal-title\">
                                <i class=\"bi bi-{{ plan.isActive ? 'pause-circle' : 'play-circle' }} me-2\"></i>
                                {{ plan.isActive ? 'Désactiver' : 'Activer' }} le plan
                            </h5>
                            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                        </div>
                        <div class=\"modal-body p-4\">
                            <p class=\"mb-0\">
                                Êtes-vous sûr de vouloir {{ plan.isActive ? 'désactiver' : 'activer' }} le plan <strong>{{ plan.displayName }}</strong> ?
                                {% if plan.isActive %}
                                    <br><small class=\"text-muted\">Les entreprises avec ce plan ne pourront plus l'utiliser.</small>
                                {% else %}
                                    <br><small class=\"text-muted\">Les entreprises pourront souscrire à ce plan.</small>
                                {% endif %}
                            </p>
                        </div>
                        <div class=\"modal-footer border-0 justify-content-center\">
                            <button type=\"button\" class=\"btn btn-secondary px-4 rounded-pill\" data-bs-dismiss=\"modal\">Annuler</button>
                            <form action=\"{{ path('app_super_admin_subscription_plan_toggle', {'id': plan.id}) }}\" method=\"post\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle' ~ plan.id) }}\">
                                <button type=\"submit\" class=\"btn btn-{{ plan.isActive ? 'warning' : 'success' }} px-4 rounded-pill\">Confirmer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Delete (si pas d'abonnements) -->
            {% if plan.subscriptions|length == 0 %}
            <div class=\"modal fade\" id=\"deleteModal{{ plan.id }}\" tabindex=\"-1\">
                <div class=\"modal-dialog modal-dialog-centered\">
                    <div class=\"modal-content border-0 rounded-4\">
                        <div class=\"modal-header bg-danger text-white border-0\">
                            <h5 class=\"modal-title\"><i class=\"bi bi-exclamation-triangle-fill me-2\"></i>Supprimer le plan</h5>
                            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                        </div>
                        <div class=\"modal-body p-4\">
                            <p>Attention, cette action est irréversible. Voulez-vous vraiment supprimer le plan <strong>{{ plan.displayName }}</strong> ?</p>
                        </div>
                        <div class=\"modal-footer border-0 justify-content-center\">
                            <button type=\"button\" class=\"btn btn-secondary px-4 rounded-pill\" data-bs-dismiss=\"modal\">Annuler</button>
                            <form action=\"{{ path('app_super_admin_subscription_plan_delete', {'id': plan.id}) }}\" method=\"post\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ plan.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger px-4 rounded-pill\">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {% endif %}
        {% else %}
            <!-- Aucun plan trouvé -->
            <div class=\"col-12 text-center py-5\">
                <i class=\"bi bi-tags display-1 text-muted\"></i>
                <p class=\"mt-3 fs-4\">Aucun plan d'abonnement.</p>
                <a href=\"{{ path('app_super_admin_subscription_plan_new') }}\" class=\"btn btn-primary btn-lg rounded-pill px-5\">Créer le premier</a>
            </div>
        {% endfor %}
    </div>
</div>

<style>
.modern-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    min-height: 180px;
}
.floating-bg .shape {
    position: absolute;
    background: rgba(255,255,255,0.1);
    border-radius: 50%;
}
.shape-1 {
    width: 250px; height: 250px; top: -80px; right: -40px;
    animation: float 8s ease-in-out infinite;
}
.shape-2 {
    width: 150px; height: 150px; bottom: -40px; left: -20px;
    animation: float 12s ease-in-out infinite reverse;
}
@keyframes float {
    0%,100%{ transform: translateY(0) rotate(0deg); }
    50%{ transform: translateY(-20px) rotate(5deg); }
}
.icon-wrapper {
    transition: transform 0.3s;
}
.icon-wrapper:hover {
    transform: scale(1.05) rotate(5deg);
}
.hover-lift {
    transition: all 0.3s;
}
.hover-lift:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 30px rgba(0,0,0,0.15) !important;
}
/* Dégradés pour les en-têtes selon le plan */
.bg-gradient-freemium { background: linear-gradient(135deg, #6b7280, #4b5563); }
.bg-gradient-basic    { background: linear-gradient(135deg, #3b82f6, #1d4ed8); }
.bg-gradient-premium  { background: linear-gradient(135deg, #8b5cf6, #6d28d9); }
.bg-gradient-secondary{ background: linear-gradient(135deg, #9ca3af, #6b7280); }
</style>
{% endblock %}", "super_admin/subscription_plan/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\subscription_plan\\index.html.twig");
    }
}
