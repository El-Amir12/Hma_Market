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
                $context["can_upgrade"] = ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"));
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
                                    ";
                    // line 90
                    if ((($tmp = (isset($context["can_upgrade"]) || array_key_exists("can_upgrade", $context) ? $context["can_upgrade"] : (function () { throw new RuntimeError('Variable "can_upgrade" does not exist.', 90, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 91
                        yield "                                        <a href=\"";
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
                        yield "\" class=\"text-white fw-bold text-decoration-underline\">
                                            Passez à un plan supérieur
                                        </a>
                                    ";
                    }
                    // line 95
                    yield "                                </p>
                            </div>
                        </div>
                    </div>
                ";
                } else {
                    // line 100
                    yield "                    <div class=\"bg-white bg-opacity-10 rounded-3 p-3 mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"flex-shrink-0 me-3\">
                                <i class=\"bi bi-check-circle fs-2\"></i>
                            </div>
                            <div class=\"flex-grow-1\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <span class=\"fw-semibold\">Abonnement actif</span>
                                    ";
                    // line 108
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 108, $this->source); })()), "subscription_end", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 109
                        yield "                                        <small class=\"text-white-50\">
                                            <i class=\"bi bi-calendar me-1\"></i>Renouvellement le ";
                        // line 110
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 110, $this->source); })()), "subscription_end", [], "any", false, false, false, 110), "html", null, true);
                        yield "
                                        </small>
                                    ";
                    }
                    // line 113
                    yield "                                </div>
                            </div>
                        </div>
                    </div>
                ";
                }
                // line 118
                yield "                
                <!-- Statistiques d'utilisation -->
                <div class=\"row g-3 mb-4\">
                    <div class=\"col-md-4\">
                        <div class=\"bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                            <div class=\"fs-4 fw-bold\">";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 123, $this->source); })()), "usage", [], "any", false, false, false, 123), "products", [], "any", false, false, false, 123), "current", [], "any", false, false, false, 123), "html", null, true);
                yield "</div>
                            <small class=\"text-white-50\">Produits</small>
                            ";
                // line 125
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 125, $this->source); })()), "usage", [], "any", false, false, false, 125), "products", [], "any", false, false, false, 125), "limit", [], "any", false, false, false, 125) != Twig\Extension\CoreExtension::constant("PHP_INT_MAX"))) {
                    // line 126
                    yield "                                <div class=\"progress mt-2\" style=\"height: 4px;\">
                                    <div class=\"progress-bar bg-white\" style=\"width: ";
                    // line 127
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 127, $this->source); })()), "usage", [], "any", false, false, false, 127), "products", [], "any", false, false, false, 127), "percentage", [], "any", false, false, false, 127), "html", null, true);
                    yield "%\"></div>
                                </div>
                            ";
                }
                // line 130
                yield "                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                            <div class=\"fs-4 fw-bold\">";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 134, $this->source); })()), "usage", [], "any", false, false, false, 134), "categories", [], "any", false, false, false, 134), "current", [], "any", false, false, false, 134), "html", null, true);
                yield "</div>
                            <small class=\"text-white-50\">Catégories</small>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                            <div class=\"fs-4 fw-bold\">";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 140, $this->source); })()), "usage", [], "any", false, false, false, 140), "users", [], "any", false, false, false, 140), "current", [], "any", false, false, false, 140), "html", null, true);
                yield "</div>
                            <small class=\"text-white-50\">Utilisateurs</small>
                        </div>
                    </div>
                </div>
                
                <!-- Boutons d'action -->
                <div class=\"d-flex gap-3\">
                    ";
                // line 148
                if (((isset($context["can_upgrade"]) || array_key_exists("can_upgrade", $context) ? $context["can_upgrade"] : (function () { throw new RuntimeError('Variable "can_upgrade" does not exist.', 148, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 148, $this->source); })()), "can_upgrade", [], "any", false, false, false, 148))) {
                    // line 149
                    yield "                        <a href=\"#\" class=\"btn btn-light flex-grow-1 py-3 fw-semibold\">
                            <i class=\"bi bi-stars me-2\"></i>
                            ";
                    // line 151
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 151, $this->source); })()), "plan", [], "any", false, false, false, 151) == "freemium")) {
                        // line 152
                        yield "                                Passer à un plan payant
                            ";
                    } else {
                        // line 154
                        yield "                                Améliorer mon abonnement
                            ";
                    }
                    // line 156
                    yield "                        </a>
                    ";
                }
                // line 158
                yield "                    
                    <a href=\"#\" class=\"btn btn-outline-light flex-grow-1 py-3\">
                        <i class=\"bi bi-info-circle me-2\"></i>
                        Détails
                    </a>
                </div>
                
                <!-- Liste des fonctionnalités -->
                ";
                // line 166
                if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 166, $this->source); })()), "features", [], "any", false, false, false, 166)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 166, $this->source); })()), "features", [], "any", false, false, false, 166), 0, [], "array", false, false, false, 166) != "all"))) {
                    // line 167
                    yield "                    <div class=\"mt-4 pt-3 border-top border-white border-opacity-20\">
                        <small class=\"text-white-50 d-block mb-2\">Fonctionnalités incluses :</small>
                        <div class=\"d-flex flex-wrap gap-2\">
                            ";
                    // line 170
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 170, $this->source); })()), "features", [], "any", false, false, false, 170));
                    foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                        // line 171
                        yield "                                <span class=\"badge bg-white bg-opacity-20 text-white px-3 py-2\">
                                    <i class=\"bi bi-check-circle-fill me-1 small\"></i>
                                    ";
                        // line 173
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["feature"], ["_" => " "])), "html", null, true);
                        yield "
                                </span>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 176
                    yield "                        </div>
                    </div>
                ";
                }
                // line 179
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
        return array (  354 => 179,  349 => 176,  340 => 173,  336 => 171,  332 => 170,  327 => 167,  325 => 166,  315 => 158,  311 => 156,  307 => 154,  303 => 152,  301 => 151,  297 => 149,  295 => 148,  284 => 140,  275 => 134,  269 => 130,  263 => 127,  260 => 126,  258 => 125,  253 => 123,  246 => 118,  239 => 113,  233 => 110,  230 => 109,  228 => 108,  218 => 100,  211 => 95,  203 => 91,  201 => 90,  189 => 80,  187 => 79,  179 => 74,  170 => 68,  166 => 67,  163 => 66,  158 => 65,  153 => 64,  151 => 63,  145 => 60,  135 => 52,  133 => 51,  120 => 40,  116 => 38,  112 => 36,  110 => 35,  105 => 33,  90 => 20,  87 => 19,  84 => 18,  81 => 17,  78 => 15,  75 => 14,  72 => 13,  70 => 12,  67 => 11,  64 => 10,  62 => 9,  59 => 8,  56 => 6,  53 => 5,  51 => 4,  48 => 2,);
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
        {% set can_upgrade = is_granted('ROLE_ADMIN') or is_granted('ROLE_MANAGER') %}
        
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
                                    {% if can_upgrade %}
                                        <a href=\"{{ path('app_subscription_plans') }}\" class=\"text-white fw-bold text-decoration-underline\">
                                            Passez à un plan supérieur
                                        </a>
                                    {% endif %}
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
                    {% if can_upgrade and subscription_info.can_upgrade %}
                        <a href=\"#\" class=\"btn btn-light flex-grow-1 py-3 fw-semibold\">
                            <i class=\"bi bi-stars me-2\"></i>
                            {% if subscription_info.plan == 'freemium' %}
                                Passer à un plan payant
                            {% else %}
                                Améliorer mon abonnement
                            {% endif %}
                        </a>
                    {% endif %}
                    
                    <a href=\"#\" class=\"btn btn-outline-light flex-grow-1 py-3\">
                        <i class=\"bi bi-info-circle me-2\"></i>
                        Détails
                    </a>
                </div>
                
                <!-- Liste des fonctionnalités -->
                {% if subscription_info.features is not empty and subscription_info.features[0] != 'all' %}
                    <div class=\"mt-4 pt-3 border-top border-white border-opacity-20\">
                        <small class=\"text-white-50 d-block mb-2\">Fonctionnalités incluses :</small>
                        <div class=\"d-flex flex-wrap gap-2\">
                            {% for feature in subscription_info.features %}
                                <span class=\"badge bg-white bg-opacity-20 text-white px-3 py-2\">
                                    <i class=\"bi bi-check-circle-fill me-1 small\"></i>
                                    {{ feature|replace({'_': ' '})|title }}
                                </span>
                            {% endfor %}
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    {% endif %}
{% endif %}", "components/_subscription_widget.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\components\\_subscription_widget.html.twig");
    }
}
