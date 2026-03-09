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

/* components/_subscription_widget.html.twig */
class __TwigTemplate_0b2831cbe1e7e72ad4b16c893e0d33b6 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_subscription_widget.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_subscription_widget.html.twig"));

        // line 2
        yield "
";
        // line 4
        if ((($tmp =  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "    ";
            $context["hmaService"] = null;
            // line 6
            yield "    
    ";
            // line 8
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 8), "hmaServiceId", [], "any", true, true, false, 8)) {
                // line 9
                yield "        ";
                // line 10
                yield "        ";
                $context["hmaService"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "hmaServiceId", [], "any", false, false, false, 10);
                // line 11
                yield "    ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 11), "companyName", [], "any", true, true, false, 11)) {
                // line 12
                yield "        ";
                // line 13
                yield "        ";
                $context["hmaService"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13);
                // line 14
                yield "    ";
            }
            // line 15
            yield "    
    ";
            // line 17
            yield "    ";
            if ((($tmp =  !(null === (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 17, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 18
                yield "        ";
                $context["subscription_info"] = $this->extensions['App\Twig\SubscriptionExtension']->getSubscriptionInfo((isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 18, $this->source); })()));
                // line 19
                yield "        ";
                $context["can_upgrade_role"] = ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"));
                // line 20
                yield "        
        <div class=\"card border-0 shadow-lg mb-4 overflow-hidden\" style=\"background: linear-gradient(135deg, var(--primary-color) 0%, #0355d0 100%);\">
            <!-- Effet de vague décoratif -->
            <div class=\"position-absolute opacity-10\" style=\"top: -50px; right: -50px;\">
                <i class=\"bi bi-graph-up-arrow\" style=\"font-size: 150px; color: rgba(255,255,255,0.1);\"></i>
            </div>
            
            <div class=\"card-body p-4 text-white position-relative\">
                <!-- En-tête avec plan et badge -->
                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <div>
                        <span class=\"text-white-50 small text-uppercase tracking-wider\">Plan actuel</span>
                        <h3 class=\"h2 fw-bold mb-0 d-flex align-items-center\">
                            ";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 33, $this->source); })()), "plan_label", [], "any", false, false, false, 33), "html", null, true);
                yield "
                            <span class=\"badge bg-white text-primary ms-3 px-3 py-2 rounded-pill\">
                                ";
                // line 35
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 35, $this->source); })()), "is_trial", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 36
                    yield "                                    <i class=\"bi bi-star-fill me-1\"></i>Essai
                                ";
                } else {
                    // line 38
                    yield "                                    <i class=\"bi bi-check-circle-fill me-1\"></i>Actif
                                ";
                }
                // line 40
                yield "                            </span>
                        </h3>
                    </div>
                    
                    <!-- Logo ou icône -->
                    <div class=\"bg-white bg-opacity-20 rounded-circle p-3\" style=\"width: 70px; height: 70px;\">
                        <i class=\"bi bi-gem fs-1 text-white\"></i>
                    </div>
                </div>
                
                <!-- Informations de temps restant -->
                ";
                // line 51
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 51, $this->source); })()), "is_trial", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 52
                    yield "                    <div class=\"bg-white bg-opacity-10 rounded-3 p-3 mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"flex-shrink-0 me-3\">
                                <i class=\"bi bi-hourglass-split fs-2\"></i>
                            </div>
                            <div class=\"flex-grow-1\">
                                <div class=\"d-flex justify-content-between align-items-center mb-1\">
                                    <span class=\"fw-semibold\">Période d'essai</span>
                                    <span class=\"fw-bold\">";
                    // line 60
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 60, $this->source); })()), "days_remaining", [], "any", false, false, false, 60), "html", null, true);
                    yield " jours restants</span>
                                </div>
                                <div class=\"progress\" style=\"height: 8px; background-color: rgba(255,255,255,0.2);\">
                                    ";
                    // line 63
                    $context["percentage"] = Twig\Extension\CoreExtension::round((((14 - CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 63, $this->source); })()), "days_remaining", [], "any", false, false, false, 63)) / 14) * 100));
                    // line 64
                    yield "                                    ";
                    if (((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 64, $this->source); })()) > 100)) {
                        $context["percentage"] = 100;
                    }
                    // line 65
                    yield "                                    ";
                    if (((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 65, $this->source); })()) < 0)) {
                        $context["percentage"] = 0;
                    }
                    // line 66
                    yield "                                    <div class=\"progress-bar bg-white\" role=\"progressbar\" 
                                         style=\"width: ";
                    // line 67
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 67, $this->source); })()), "html", null, true);
                    yield "%;\" 
                                         aria-valuenow=\"";
                    // line 68
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 68, $this->source); })()), "html", null, true);
                    yield "\" 
                                         aria-valuemin=\"0\" 
                                         aria-valuemax=\"100\">
                                    </div>
                                </div>
                                <small class=\"text-white-50 mt-1 d-block\">
                                    <i class=\"bi bi-calendar me-1\"></i>Se termine le ";
                    // line 74
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 74, $this->source); })()), "end_date", [], "any", false, false, false, 74), "html", null, true);
                    yield "
                                </small>
                            </div>
                        </div>
                    </div>
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 79
(isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 79, $this->source); })()), "plan", [], "any", false, false, false, 79) == "freemium")) {
                    // line 80
                    yield "                    <div class=\"bg-white bg-opacity-10 rounded-3 p-3 mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"flex-shrink-0 me-3\">
                                <i class=\"bi bi-gift fs-2\"></i>
                            </div>
                            <div class=\"flex-grow-1\">
                                <h5 class=\"fw-bold mb-1\">Plan Gratuit</h5>
                                <p class=\"mb-0 small text-white-50\">
                                    <i class=\"bi bi-info-circle me-1\"></i>
                                    Profitez de fonctionnalités limitées.
                                </p>
                            </div>
                        </div>
                    </div>
                ";
                } else {
                    // line 95
                    yield "                    <div class=\"bg-white bg-opacity-10 rounded-3 p-3 mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"flex-shrink-0 me-3\">
                                <i class=\"bi bi-check-circle fs-2\"></i>
                            </div>
                            <div class=\"flex-grow-1\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <span class=\"fw-semibold\">Abonnement actif</span>
                                    ";
                    // line 103
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 103, $this->source); })()), "subscription_end", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 104
                        yield "                                        <small class=\"text-white-50\">
                                            <i class=\"bi bi-calendar me-1\"></i>Renouvellement le ";
                        // line 105
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 105, $this->source); })()), "subscription_end", [], "any", false, false, false, 105), "html", null, true);
                        yield "
                                        </small>
                                    ";
                    }
                    // line 108
                    yield "                                </div>
                            </div>
                        </div>
                    </div>
                ";
                }
                // line 113
                yield "                
                <!-- Statistiques d'utilisation -->
                <div class=\"row g-3 mb-4\">
                    <div class=\"col-md-4\">
                        <div class=\"bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                            <div class=\"fs-4 fw-bold\">";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 118, $this->source); })()), "usage", [], "any", false, false, false, 118), "products", [], "any", false, false, false, 118), "current", [], "any", false, false, false, 118), "html", null, true);
                yield "</div>
                            <small class=\"text-white-50\">Produits</small>
                            ";
                // line 120
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 120, $this->source); })()), "usage", [], "any", false, false, false, 120), "products", [], "any", false, false, false, 120), "limit", [], "any", false, false, false, 120) != Twig\Extension\CoreExtension::constant("PHP_INT_MAX"))) {
                    // line 121
                    yield "                                <div class=\"progress mt-2\" style=\"height: 4px;\">
                                    <div class=\"progress-bar bg-white\" style=\"width: ";
                    // line 122
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 122, $this->source); })()), "usage", [], "any", false, false, false, 122), "products", [], "any", false, false, false, 122), "percentage", [], "any", false, false, false, 122), "html", null, true);
                    yield "%\"></div>
                                </div>
                            ";
                }
                // line 125
                yield "                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                            <div class=\"fs-4 fw-bold\">";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 129, $this->source); })()), "usage", [], "any", false, false, false, 129), "categories", [], "any", false, false, false, 129), "current", [], "any", false, false, false, 129), "html", null, true);
                yield "</div>
                            <small class=\"text-white-50\">Catégories</small>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                            <div class=\"fs-4 fw-bold\">";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 135, $this->source); })()), "usage", [], "any", false, false, false, 135), "users", [], "any", false, false, false, 135), "current", [], "any", false, false, false, 135), "html", null, true);
                yield "</div>
                            <small class=\"text-white-50\">Utilisateurs</small>
                        </div>
                    </div>
                </div>
                
                <!-- Boutons d'action -->
                <div class=\"d-flex gap-3\">
                    ";
                // line 143
                if ((($tmp = (isset($context["can_upgrade_role"]) || array_key_exists("can_upgrade_role", $context) ? $context["can_upgrade_role"] : (function () { throw new RuntimeError('Variable "can_upgrade_role" does not exist.', 143, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 144
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 144, $this->source); })()), "plan", [], "any", false, false, false, 144) == "freemium")) {
                        // line 145
                        yield "                            <a href=\"";
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
                        yield "\" class=\"btn btn-light flex-grow-1 py-3 fw-semibold\">
                                <i class=\"bi bi-stars me-2\"></i>
                                Passer à un plan payant
                            </a>
                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 149
(isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 149, $this->source); })()), "plan", [], "any", false, false, false, 149) == "basic")) {
                        // line 150
                        yield "                            <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans", ["plan" => "premium", "billing" => "monthly"]), "html", null, true);
                        yield "\" class=\"btn btn-light flex-grow-1 py-3 fw-semibold\">
                                <i class=\"bi bi-stars me-2\"></i>
                                Passer à Premium
                            </a>
                        ";
                    } elseif (((CoreExtension::getAttribute($this->env, $this->source,                     // line 154
(isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 154, $this->source); })()), "plan", [], "any", false, false, false, 154) == "premium") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 154, $this->source); })()), "billing_period", [], "any", false, false, false, 154) == "monthly"))) {
                        // line 155
                        yield "                            <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans", ["plan" => "premium", "billing" => "yearly"]), "html", null, true);
                        yield "\" class=\"btn btn-light flex-grow-1 py-3 fw-semibold\">
                                <i class=\"bi bi-stars me-2\"></i>
                                Passer à Premium annuel <span class=\"badge bg-success ms-2\">-20%</span>
                            </a>
                        ";
                    }
                    // line 160
                    yield "                    ";
                }
                // line 161
                yield "                    
                    <a href=\"#\" class=\"btn btn-outline-light flex-grow-1 py-3\">
                        <i class=\"bi bi-info-circle me-2\"></i>
                        Détails
                    </a>
                </div>
                
                <!-- Liste des fonctionnalités -->
                ";
                // line 169
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "features", [], "any", true, true, false, 169) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 169, $this->source); })()), "features", [], "any", false, false, false, 169)) > 0))) {
                    // line 170
                    yield "                    <div class=\"mt-4 pt-3 border-top border-white border-opacity-20\">
                        <small class=\"text-white-50 d-block mb-2\">Fonctionnalités incluses :</small>
                        <div class=\"d-flex flex-wrap gap-2\">
                            ";
                    // line 173
                    if (CoreExtension::inFilter("all", CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 173, $this->source); })()), "features", [], "any", false, false, false, 173))) {
                        // line 174
                        yield "                                <span class=\"badge bg-white bg-opacity-20 text-white px-3 py-2\">
                                    <i class=\"bi bi-check-circle-fill me-1 small\"></i>
                                    Toutes les fonctionnalités
                                </span>
                            ";
                    } else {
                        // line 179
                        yield "                                ";
                        // line 180
                        yield "                                ";
                        $context["feature_labels"] = ["basic_inventory" => "Inventaire de base", "basic_reports" => "Rapports de base", "advanced_inventory" => "Inventaire avancé", "reports" => "Rapports", "api_access" => "Accès API", "priority_support" => "Support prioritaire", "custom_domain" => "Domaine personnalisé", "white_label" => "Marque blanche"];
                        // line 190
                        yield "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 190, $this->source); })()), "features", [], "any", false, false, false, 190));
                        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                            // line 191
                            yield "                                    <span class=\"badge bg-white bg-opacity-20 text-white px-3 py-2\">
                                        <i class=\"bi bi-check-circle-fill me-1 small\"></i>
                                        ";
                            // line 193
                            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["feature_labels"] ?? null), $context["feature"], [], "array", true, true, false, 193) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["feature_labels"]) || array_key_exists("feature_labels", $context) ? $context["feature_labels"] : (function () { throw new RuntimeError('Variable "feature_labels" does not exist.', 193, $this->source); })()), $context["feature"], [], "array", false, false, false, 193)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["feature_labels"]) || array_key_exists("feature_labels", $context) ? $context["feature_labels"] : (function () { throw new RuntimeError('Variable "feature_labels" does not exist.', 193, $this->source); })()), $context["feature"], [], "array", false, false, false, 193), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["feature"], ["_" => " "])), "html", null, true)));
                            yield "
                                    </span>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 196
                        yield "                            ";
                    }
                    // line 197
                    yield "                        </div>
                    </div>
                ";
                }
                // line 200
                yield "            </div>
        </div>
    ";
            }
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/_subscription_widget.html.twig";
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
        return array (  377 => 200,  372 => 197,  369 => 196,  360 => 193,  356 => 191,  351 => 190,  348 => 180,  346 => 179,  339 => 174,  337 => 173,  332 => 170,  330 => 169,  320 => 161,  317 => 160,  308 => 155,  306 => 154,  298 => 150,  296 => 149,  288 => 145,  285 => 144,  283 => 143,  272 => 135,  263 => 129,  257 => 125,  251 => 122,  248 => 121,  246 => 120,  241 => 118,  234 => 113,  227 => 108,  221 => 105,  218 => 104,  216 => 103,  206 => 95,  189 => 80,  187 => 79,  179 => 74,  170 => 68,  166 => 67,  163 => 66,  158 => 65,  153 => 64,  151 => 63,  145 => 60,  135 => 52,  133 => 51,  120 => 40,  116 => 38,  112 => 36,  110 => 35,  105 => 33,  90 => 20,  87 => 19,  84 => 18,  81 => 17,  78 => 15,  75 => 14,  72 => 13,  70 => 12,  67 => 11,  64 => 10,  62 => 9,  59 => 8,  56 => 6,  53 => 5,  51 => 4,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/components/_subscription_widget.html.twig #}

{# Ne pas afficher pour le super admin #}
{% if not is_granted('ROLE_SUPER_ADMIN') %}
    {% set hmaService = null %}
    
    {# Récupérer le HmaService selon le type d'utilisateur #}
    {% if app.user.hmaServiceId is defined %}
        {# C'est un User avec une relation #}
        {% set hmaService = app.user.hmaServiceId %}
    {% elseif app.user.companyName is defined %}
        {# C'est directement un HmaService #}
        {% set hmaService = app.user %}
    {% endif %}
    
    {# N'afficher que si on a un HmaService valide #}
    {% if hmaService is not null %}
        {% set subscription_info = get_subscription_info(hmaService) %}
        {% set can_upgrade_role = is_granted('ROLE_ADMIN') or is_granted('ROLE_MANAGER') %}
        
        <div class=\"card border-0 shadow-lg mb-4 overflow-hidden\" style=\"background: linear-gradient(135deg, var(--primary-color) 0%, #0355d0 100%);\">
            <!-- Effet de vague décoratif -->
            <div class=\"position-absolute opacity-10\" style=\"top: -50px; right: -50px;\">
                <i class=\"bi bi-graph-up-arrow\" style=\"font-size: 150px; color: rgba(255,255,255,0.1);\"></i>
            </div>
            
            <div class=\"card-body p-4 text-white position-relative\">
                <!-- En-tête avec plan et badge -->
                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <div>
                        <span class=\"text-white-50 small text-uppercase tracking-wider\">Plan actuel</span>
                        <h3 class=\"h2 fw-bold mb-0 d-flex align-items-center\">
                            {{ subscription_info.plan_label }}
                            <span class=\"badge bg-white text-primary ms-3 px-3 py-2 rounded-pill\">
                                {% if subscription_info.is_trial %}
                                    <i class=\"bi bi-star-fill me-1\"></i>Essai
                                {% else %}
                                    <i class=\"bi bi-check-circle-fill me-1\"></i>Actif
                                {% endif %}
                            </span>
                        </h3>
                    </div>
                    
                    <!-- Logo ou icône -->
                    <div class=\"bg-white bg-opacity-20 rounded-circle p-3\" style=\"width: 70px; height: 70px;\">
                        <i class=\"bi bi-gem fs-1 text-white\"></i>
                    </div>
                </div>
                
                <!-- Informations de temps restant -->
                {% if subscription_info.is_trial %}
                    <div class=\"bg-white bg-opacity-10 rounded-3 p-3 mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"flex-shrink-0 me-3\">
                                <i class=\"bi bi-hourglass-split fs-2\"></i>
                            </div>
                            <div class=\"flex-grow-1\">
                                <div class=\"d-flex justify-content-between align-items-center mb-1\">
                                    <span class=\"fw-semibold\">Période d'essai</span>
                                    <span class=\"fw-bold\">{{ subscription_info.days_remaining }} jours restants</span>
                                </div>
                                <div class=\"progress\" style=\"height: 8px; background-color: rgba(255,255,255,0.2);\">
                                    {% set percentage = ((14 - subscription_info.days_remaining) / 14 * 100)|round %}
                                    {% if percentage > 100 %}{% set percentage = 100 %}{% endif %}
                                    {% if percentage < 0 %}{% set percentage = 0 %}{% endif %}
                                    <div class=\"progress-bar bg-white\" role=\"progressbar\" 
                                         style=\"width: {{ percentage }}%;\" 
                                         aria-valuenow=\"{{ percentage }}\" 
                                         aria-valuemin=\"0\" 
                                         aria-valuemax=\"100\">
                                    </div>
                                </div>
                                <small class=\"text-white-50 mt-1 d-block\">
                                    <i class=\"bi bi-calendar me-1\"></i>Se termine le {{ subscription_info.end_date }}
                                </small>
                            </div>
                        </div>
                    </div>
                {% elseif subscription_info.plan == 'freemium' %}
                    <div class=\"bg-white bg-opacity-10 rounded-3 p-3 mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"flex-shrink-0 me-3\">
                                <i class=\"bi bi-gift fs-2\"></i>
                            </div>
                            <div class=\"flex-grow-1\">
                                <h5 class=\"fw-bold mb-1\">Plan Gratuit</h5>
                                <p class=\"mb-0 small text-white-50\">
                                    <i class=\"bi bi-info-circle me-1\"></i>
                                    Profitez de fonctionnalités limitées.
                                </p>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"bg-white bg-opacity-10 rounded-3 p-3 mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"flex-shrink-0 me-3\">
                                <i class=\"bi bi-check-circle fs-2\"></i>
                            </div>
                            <div class=\"flex-grow-1\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <span class=\"fw-semibold\">Abonnement actif</span>
                                    {% if subscription_info.subscription_end %}
                                        <small class=\"text-white-50\">
                                            <i class=\"bi bi-calendar me-1\"></i>Renouvellement le {{ subscription_info.subscription_end }}
                                        </small>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                {% endif %}
                
                <!-- Statistiques d'utilisation -->
                <div class=\"row g-3 mb-4\">
                    <div class=\"col-md-4\">
                        <div class=\"bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                            <div class=\"fs-4 fw-bold\">{{ subscription_info.usage.products.current }}</div>
                            <small class=\"text-white-50\">Produits</small>
                            {% if subscription_info.usage.products.limit != constant('PHP_INT_MAX') %}
                                <div class=\"progress mt-2\" style=\"height: 4px;\">
                                    <div class=\"progress-bar bg-white\" style=\"width: {{ subscription_info.usage.products.percentage }}%\"></div>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                            <div class=\"fs-4 fw-bold\">{{ subscription_info.usage.categories.current }}</div>
                            <small class=\"text-white-50\">Catégories</small>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                            <div class=\"fs-4 fw-bold\">{{ subscription_info.usage.users.current }}</div>
                            <small class=\"text-white-50\">Utilisateurs</small>
                        </div>
                    </div>
                </div>
                
                <!-- Boutons d'action -->
                <div class=\"d-flex gap-3\">
                    {% if can_upgrade_role %}
                        {% if subscription_info.plan == 'freemium' %}
                            <a href=\"{{ path('app_subscription_plans') }}\" class=\"btn btn-light flex-grow-1 py-3 fw-semibold\">
                                <i class=\"bi bi-stars me-2\"></i>
                                Passer à un plan payant
                            </a>
                        {% elseif subscription_info.plan == 'basic' %}
                            <a href=\"{{ path('app_subscription_plans', {plan: 'premium', billing: 'monthly'}) }}\" class=\"btn btn-light flex-grow-1 py-3 fw-semibold\">
                                <i class=\"bi bi-stars me-2\"></i>
                                Passer à Premium
                            </a>
                        {% elseif subscription_info.plan == 'premium' and subscription_info.billing_period == 'monthly' %}
                            <a href=\"{{ path('app_subscription_plans', {plan: 'premium', billing: 'yearly'}) }}\" class=\"btn btn-light flex-grow-1 py-3 fw-semibold\">
                                <i class=\"bi bi-stars me-2\"></i>
                                Passer à Premium annuel <span class=\"badge bg-success ms-2\">-20%</span>
                            </a>
                        {% endif %}
                    {% endif %}
                    
                    <a href=\"#\" class=\"btn btn-outline-light flex-grow-1 py-3\">
                        <i class=\"bi bi-info-circle me-2\"></i>
                        Détails
                    </a>
                </div>
                
                <!-- Liste des fonctionnalités -->
                {% if subscription_info.features is defined and subscription_info.features|length > 0 %}
                    <div class=\"mt-4 pt-3 border-top border-white border-opacity-20\">
                        <small class=\"text-white-50 d-block mb-2\">Fonctionnalités incluses :</small>
                        <div class=\"d-flex flex-wrap gap-2\">
                            {% if 'all' in subscription_info.features %}
                                <span class=\"badge bg-white bg-opacity-20 text-white px-3 py-2\">
                                    <i class=\"bi bi-check-circle-fill me-1 small\"></i>
                                    Toutes les fonctionnalités
                                </span>
                            {% else %}
                                {# Dictionnaire pour de jolis libellés #}
                                {% set feature_labels = {
                                    'basic_inventory': 'Inventaire de base',
                                    'basic_reports': 'Rapports de base',
                                    'advanced_inventory': 'Inventaire avancé',
                                    'reports': 'Rapports',
                                    'api_access': 'Accès API',
                                    'priority_support': 'Support prioritaire',
                                    'custom_domain': 'Domaine personnalisé',
                                    'white_label': 'Marque blanche'
                                } %}
                                {% for feature in subscription_info.features %}
                                    <span class=\"badge bg-white bg-opacity-20 text-white px-3 py-2\">
                                        <i class=\"bi bi-check-circle-fill me-1 small\"></i>
                                        {{ feature_labels[feature] ?? feature|replace({'_': ' '})|title }}
                                    </span>
                                {% endfor %}
                            {% endif %}
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    {% endif %}
{% endif %}", "components/_subscription_widget.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\components\\_subscription_widget.html.twig");
    }
}
