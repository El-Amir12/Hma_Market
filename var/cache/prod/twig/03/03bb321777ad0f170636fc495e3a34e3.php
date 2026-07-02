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
class __TwigTemplate_42ef0c82ef4a979475badc9ca48585db extends Template
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
                $context["hmaService"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 10), "hmaServiceId", [], "any", false, false, false, 10);
                // line 11
                yield "    ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 11), "companyName", [], "any", true, true, false, 11)) {
                // line 12
                yield "        ";
                // line 13
                yield "        ";
                $context["hmaService"] = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 13);
                // line 14
                yield "    ";
            }
            // line 15
            yield "    
    ";
            // line 17
            yield "    ";
            if ((($tmp =  !(null === ($context["hmaService"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 18
                yield "        ";
                $context["subscription_info"] = $this->extensions['App\Twig\SubscriptionExtension']->getSubscriptionInfo(($context["hmaService"] ?? null));
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "plan_label", [], "any", false, false, false, 33), "html", null, true);
                yield "
                            <span class=\"badge bg-white text-primary ms-3 px-3 py-2 rounded-pill\">
                                ";
                // line 35
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "is_trial", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "is_trial", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "days_remaining", [], "any", false, false, false, 60), "html", null, true);
                    yield " jours restants</span>
                                </div>
                                <div class=\"progress\" style=\"height: 8px; background-color: rgba(255,255,255,0.2);\">
                                    ";
                    // line 63
                    $context["percentage"] = Twig\Extension\CoreExtension::round((((14 - CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "days_remaining", [], "any", false, false, false, 63)) / 14) * 100));
                    // line 64
                    yield "                                    ";
                    if ((($context["percentage"] ?? null) > 100)) {
                        $context["percentage"] = 100;
                    }
                    // line 65
                    yield "                                    ";
                    if ((($context["percentage"] ?? null) < 0)) {
                        $context["percentage"] = 0;
                    }
                    // line 66
                    yield "                                    <div class=\"progress-bar bg-white\" role=\"progressbar\" 
                                         style=\"width: ";
                    // line 67
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["percentage"] ?? null), "html", null, true);
                    yield "%;\" 
                                         aria-valuenow=\"";
                    // line 68
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["percentage"] ?? null), "html", null, true);
                    yield "\" 
                                         aria-valuemin=\"0\" 
                                         aria-valuemax=\"100\">
                                    </div>
                                </div>
                                <small class=\"text-white-50 mt-1 d-block\">
                                    <i class=\"bi bi-calendar me-1\"></i>Se termine le ";
                    // line 74
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "end_date", [], "any", false, false, false, 74), "html", null, true);
                    yield "
                                </small>
                            </div>
                        </div>
                    </div>
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 79
($context["subscription_info"] ?? null), "plan", [], "any", false, false, false, 79) == "freemium")) {
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
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "subscription_end", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 104
                        yield "                                        <small class=\"text-white-50\">
                                            <i class=\"bi bi-calendar me-1\"></i>Renouvellement le ";
                        // line 105
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "subscription_end", [], "any", false, false, false, 105), "html", null, true);
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "usage", [], "any", false, false, false, 118), "products", [], "any", false, false, false, 118), "current", [], "any", false, false, false, 118), "html", null, true);
                yield "</div>
                            <small class=\"text-white-50\">Produits</small>
                            ";
                // line 120
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "usage", [], "any", false, false, false, 120), "products", [], "any", false, false, false, 120), "limit", [], "any", false, false, false, 120) != Twig\Extension\CoreExtension::constant("PHP_INT_MAX"))) {
                    // line 121
                    yield "                                <div class=\"progress mt-2\" style=\"height: 4px;\">
                                    <div class=\"progress-bar bg-white\" style=\"width: ";
                    // line 122
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "usage", [], "any", false, false, false, 122), "products", [], "any", false, false, false, 122), "percentage", [], "any", false, false, false, 122), "html", null, true);
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "usage", [], "any", false, false, false, 129), "categories", [], "any", false, false, false, 129), "current", [], "any", false, false, false, 129), "html", null, true);
                yield "</div>
                            <small class=\"text-white-50\">Catégories</small>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                            <div class=\"fs-4 fw-bold\">";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "usage", [], "any", false, false, false, 135), "users", [], "any", false, false, false, 135), "current", [], "any", false, false, false, 135), "html", null, true);
                yield "</div>
                            <small class=\"text-white-50\">Utilisateurs</small>
                        </div>
                    </div>
                </div>
                
                <!-- Boutons d'action -->
                <div class=\"d-flex gap-3\">
                    ";
                // line 143
                if ((($tmp = ($context["can_upgrade_role"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 144
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "plan", [], "any", false, false, false, 144) == "freemium")) {
                        // line 145
                        yield "                            <a href=\"";
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
                        yield "\" class=\"btn btn-light flex-grow-1 py-3 fw-semibold\">
                                <i class=\"bi bi-stars me-2\"></i>
                                Passer à un plan payant
                            </a>
                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 149
($context["subscription_info"] ?? null), "plan", [], "any", false, false, false, 149) == "basic")) {
                        // line 150
                        yield "                            <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans", ["plan" => "premium", "billing" => "monthly"]), "html", null, true);
                        yield "\" class=\"btn btn-light flex-grow-1 py-3 fw-semibold\">
                                <i class=\"bi bi-stars me-2\"></i>
                                Passer à Premium
                            </a>
                        ";
                    } elseif (((CoreExtension::getAttribute($this->env, $this->source,                     // line 154
($context["subscription_info"] ?? null), "plan", [], "any", false, false, false, 154) == "premium") && (CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "billing_period", [], "any", false, false, false, 154) == "monthly"))) {
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
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "features", [], "any", true, true, false, 169) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "features", [], "any", false, false, false, 169)) > 0))) {
                    // line 170
                    yield "                    <div class=\"mt-4 pt-3 border-top border-white border-opacity-20\">
                        <small class=\"text-white-50 d-block mb-2\">Fonctionnalités incluses :</small>
                        <div class=\"d-flex flex-wrap gap-2\">
                            ";
                    // line 173
                    if (CoreExtension::inFilter("all", CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "features", [], "any", false, false, false, 173))) {
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
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "features", [], "any", false, false, false, 190));
                        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                            // line 191
                            yield "                                    <span class=\"badge bg-white bg-opacity-20 text-white px-3 py-2\">
                                        <i class=\"bi bi-check-circle-fill me-1 small\"></i>
                                        ";
                            // line 193
                            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["feature_labels"] ?? null), $context["feature"], [], "array", true, true, false, 193) &&  !(null === (($_v0 = ($context["feature_labels"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[$context["feature"]] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["feature_labels"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[$context["feature"]] ?? null) : null), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["feature"], ["_" => " "])), "html", null, true)));
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
        return array (  371 => 200,  366 => 197,  363 => 196,  354 => 193,  350 => 191,  345 => 190,  342 => 180,  340 => 179,  333 => 174,  331 => 173,  326 => 170,  324 => 169,  314 => 161,  311 => 160,  302 => 155,  300 => 154,  292 => 150,  290 => 149,  282 => 145,  279 => 144,  277 => 143,  266 => 135,  257 => 129,  251 => 125,  245 => 122,  242 => 121,  240 => 120,  235 => 118,  228 => 113,  221 => 108,  215 => 105,  212 => 104,  210 => 103,  200 => 95,  183 => 80,  181 => 79,  173 => 74,  164 => 68,  160 => 67,  157 => 66,  152 => 65,  147 => 64,  145 => 63,  139 => 60,  129 => 52,  127 => 51,  114 => 40,  110 => 38,  106 => 36,  104 => 35,  99 => 33,  84 => 20,  81 => 19,  78 => 18,  75 => 17,  72 => 15,  69 => 14,  66 => 13,  64 => 12,  61 => 11,  58 => 10,  56 => 9,  53 => 8,  50 => 6,  47 => 5,  45 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/_subscription_widget.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\components\\_subscription_widget.html.twig");
    }
}
