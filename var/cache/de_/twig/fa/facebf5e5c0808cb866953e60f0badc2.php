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
class __TwigTemplate_67e1377e222a835435e3a2dee66c2085 extends Template
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
                yield "        ";
                $context["companyType"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 20, $this->source); })()), "getType", [], "method", false, false, false, 20);
                // line 21
                yield "        ";
                $context["isPharmacy"] = ((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 21, $this->source); })()) == "pharmacy");
                // line 22
                yield "        
        ";
                // line 24
                yield "        <div class=\"card border-0 shadow-lg mb-4 overflow-hidden\" 
             style=\"background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);\">
            
            <!-- Effet de vague décoratif -->
            <div class=\"position-absolute opacity-10\" style=\"top: -50px; right: -50px;\">
                <i class=\"bi bi-graph-up-arrow\" style=\"font-size: 150px; color: rgba(255,255,255,0.1);\"></i>
            </div>
            
            <div class=\"card-body p-4 text-white position-relative\">
                
                <!-- ✅ BOUTON VISIBILITÉ POUR PHARMACIE -->
                ";
                // line 35
                if (((isset($context["isPharmacy"]) || array_key_exists("isPharmacy", $context) ? $context["isPharmacy"] : (function () { throw new RuntimeError('Variable "isPharmacy" does not exist.', 35, $this->source); })()) && (isset($context["can_upgrade_role"]) || array_key_exists("can_upgrade_role", $context) ? $context["can_upgrade_role"] : (function () { throw new RuntimeError('Variable "can_upgrade_role" does not exist.', 35, $this->source); })()))) {
                    // line 36
                    yield "                    <div class=\"mb-4\">
                        <div class=\"bg-white bg-opacity-10 rounded-3 p-3\">
                            <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-3\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"me-3\">
                                        <i class=\"bi bi-shop fs-2\"></i>
                                    </div>
                                    <div>
                                        <h5 class=\"fw-bold mb-1\">Visibilité de votre boutique</h5>
                                        <p class=\"mb-0 small text-white-50\">
                                            ";
                    // line 46
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 46, $this->source); })()), "companyPublic", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 47
                        yield "                                                <i class=\"bi bi-check-circle-fill text-success me-1\"></i>
                                                Votre boutique est actuellement <strong>visible</strong> sur le marketplace
                                            ";
                    } else {
                        // line 50
                        yield "                                                <i class=\"bi bi-eye-slash-fill text-warning me-1\"></i>
                                                Votre boutique est actuellement <strong>masquée</strong> sur le marketplace
                                            ";
                    }
                    // line 53
                    yield "                                        </p>
                                    </div>
                                </div>
                                <div>
                                    ";
                    // line 57
                    $context["isVisible"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 57, $this->source); })()), "companyPublic", [], "any", false, false, false, 57);
                    // line 58
                    yield "                                    <button type=\"button\" class=\"btn ";
                    yield (((($tmp = (isset($context["isVisible"]) || array_key_exists("isVisible", $context) ? $context["isVisible"] : (function () { throw new RuntimeError('Variable "isVisible" does not exist.', 58, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-outline-light") : ("btn-light"));
                    yield " py-2 px-4 fw-semibold\" 
                                            data-bs-toggle=\"modal\" 
                                            data-bs-target=\"#visibilityConfirmModal\">
                                        <i class=\"bi ";
                    // line 61
                    yield (((($tmp = (isset($context["isVisible"]) || array_key_exists("isVisible", $context) ? $context["isVisible"] : (function () { throw new RuntimeError('Variable "isVisible" does not exist.', 61, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bi-eye-slash") : ("bi-eye"));
                    yield " me-2\"></i>
                                        ";
                    // line 62
                    yield (((($tmp = (isset($context["isVisible"]) || array_key_exists("isVisible", $context) ? $context["isVisible"] : (function () { throw new RuntimeError('Variable "isVisible" does not exist.', 62, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Masquer ma boutique") : ("Rendre visible"));
                    yield "
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
                }
                // line 69
                yield "
                <!-- ✅ BOUTON MODIFIER PÉRIODES DE GARDE POUR PHARMACIE -->
                ";
                // line 71
                if (((isset($context["isPharmacy"]) || array_key_exists("isPharmacy", $context) ? $context["isPharmacy"] : (function () { throw new RuntimeError('Variable "isPharmacy" does not exist.', 71, $this->source); })()) && (isset($context["can_upgrade_role"]) || array_key_exists("can_upgrade_role", $context) ? $context["can_upgrade_role"] : (function () { throw new RuntimeError('Variable "can_upgrade_role" does not exist.', 71, $this->source); })()))) {
                    // line 72
                    yield "                    <div class=\"mb-4\">
                        <div class=\"bg-white bg-opacity-10 rounded-3 p-3\">
                            <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-3\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"me-3\">
                                        <i class=\"bi bi-clock-history fs-2\"></i>
                                    </div>
                                    <div>
                                        <h5 class=\"fw-bold mb-1\">Périodes de garde</h5>
                                        <p class=\"mb-0 small text-white-50\">
                                            ";
                    // line 82
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 82, $this->source); })()), "guardPeriods", [], "any", false, false, false, 82))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 83
                        yield "                                                <i class=\"bi bi-check-circle-fill text-success me-1\"></i>
                                                ";
                        // line 84
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 84, $this->source); })()), "guardPeriods", [], "any", false, false, false, 84)), "html", null, true);
                        yield " période(s) de garde configurée(s)
                                            ";
                    } else {
                        // line 86
                        yield "                                                <i class=\"bi bi-exclamation-triangle-fill text-warning me-1\"></i>
                                                Aucune période de garde configurée
                                            ";
                    }
                    // line 89
                    yield "                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <button type=\"button\" class=\"btn btn-light py-2 px-4 fw-semibold\" 
                                            style=\"color: var(--primary-color) !important;\"
                                            data-bs-toggle=\"modal\" 
                                            data-bs-target=\"#guardPeriodsModal\">
                                        <i class=\"bi bi-pencil me-2\"></i>
                                        Modifier les périodes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
                }
                // line 105
                yield "                
                <!-- En-tête avec plan et badge -->
                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <div>
                        <span class=\"text-white-50 small text-uppercase tracking-wider\">Plan actuel</span>
                        <h3 class=\"h2 fw-bold mb-0 d-flex align-items-center\">
                            ";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 111, $this->source); })()), "plan_label", [], "any", false, false, false, 111), "html", null, true);
                yield "
                            <span class=\"badge bg-white text-primary ms-3 px-3 py-2 rounded-pill\" 
                                 style=\"color: var(--primary-color) !important;\">
                                ";
                // line 114
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 114, $this->source); })()), "is_trial", [], "any", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 115
                    yield "                                    <i class=\"bi bi-star-fill me-1\"></i>Essai
                                ";
                } else {
                    // line 117
                    yield "                                    <i class=\"bi bi-check-circle-fill me-1\"></i>Actif
                                ";
                }
                // line 119
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
                // line 130
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 130, $this->source); })()), "is_trial", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 131
                    yield "                    <div class=\"bg-white bg-opacity-10 rounded-3 p-3 mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"flex-shrink-0 me-3\">
                                <i class=\"bi bi-hourglass-split fs-2\"></i>
                            </div>
                            <div class=\"flex-grow-1\">
                                <div class=\"d-flex justify-content-between align-items-center mb-1\">
                                    <span class=\"fw-semibold\">Période d'essai</span>
                                    <span class=\"fw-bold\">";
                    // line 139
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 139, $this->source); })()), "days_remaining", [], "any", false, false, false, 139), "html", null, true);
                    yield " jours restants</span>
                                </div>
                                <div class=\"progress\" style=\"height: 8px; background-color: rgba(255,255,255,0.2);\">
                                    ";
                    // line 142
                    $context["percentage"] = Twig\Extension\CoreExtension::round((((14 - CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 142, $this->source); })()), "days_remaining", [], "any", false, false, false, 142)) / 14) * 100));
                    // line 143
                    yield "                                    ";
                    if (((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 143, $this->source); })()) > 100)) {
                        $context["percentage"] = 100;
                    }
                    // line 144
                    yield "                                    ";
                    if (((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 144, $this->source); })()) < 0)) {
                        $context["percentage"] = 0;
                    }
                    // line 145
                    yield "                                    <div class=\"progress-bar bg-white\" role=\"progressbar\" 
                                         style=\"width: ";
                    // line 146
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 146, $this->source); })()), "html", null, true);
                    yield "%;\" 
                                         aria-valuenow=\"";
                    // line 147
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 147, $this->source); })()), "html", null, true);
                    yield "\" 
                                         aria-valuemin=\"0\" 
                                         aria-valuemax=\"100\">
                                    </div>
                                </div>
                                <small class=\"text-white-50 mt-1 d-block\">
                                    <i class=\"bi bi-calendar me-1\"></i>Se termine le ";
                    // line 153
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 153, $this->source); })()), "end_date", [], "any", false, false, false, 153), "html", null, true);
                    yield "
                                </small>
                            </div>
                        </div>
                    </div>
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 158
(isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 158, $this->source); })()), "plan", [], "any", false, false, false, 158) == "freemium")) {
                    // line 159
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
                    // line 174
                    yield "                    <div class=\"bg-white bg-opacity-10 rounded-3 p-3 mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"flex-shrink-0 me-3\">
                                <i class=\"bi bi-check-circle fs-2\"></i>
                            </div>
                            <div class=\"flex-grow-1\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <span class=\"fw-semibold\">Abonnement actif</span>
                                    ";
                    // line 182
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 182, $this->source); })()), "subscription_end", [], "any", false, false, false, 182)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 183
                        yield "                                        <small class=\"text-white-50\">
                                            <i class=\"bi bi-calendar me-1\"></i>Renouvellement le ";
                        // line 184
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 184, $this->source); })()), "subscription_end", [], "any", false, false, false, 184), "html", null, true);
                        yield "
                                        </small>
                                    ";
                    }
                    // line 187
                    yield "                                </div>
                            </div>
                        </div>
                    </div>
                ";
                }
                // line 192
                yield "                
                <!-- Statistiques d'utilisation -->
                <div class=\"row g-3 mb-4\">
                    <div class=\"col-md-4\">
                        <div class=\"bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                            <div class=\"fs-4 fw-bold\">";
                // line 197
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 197, $this->source); })()), "usage", [], "any", false, false, false, 197), "products", [], "any", false, false, false, 197), "current", [], "any", false, false, false, 197), "html", null, true);
                yield "</div>
                            <small class=\"text-white-50\">Produits</small>
                            ";
                // line 199
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 199, $this->source); })()), "usage", [], "any", false, false, false, 199), "products", [], "any", false, false, false, 199), "limit", [], "any", false, false, false, 199) != Twig\Extension\CoreExtension::constant("PHP_INT_MAX"))) {
                    // line 200
                    yield "                                <div class=\"progress mt-2\" style=\"height: 4px; background-color: rgba(255,255,255,0.2);\">
                                    <div class=\"progress-bar bg-white\" style=\"width: ";
                    // line 201
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 201, $this->source); })()), "usage", [], "any", false, false, false, 201), "products", [], "any", false, false, false, 201), "percentage", [], "any", false, false, false, 201), "html", null, true);
                    yield "%;\"></div>
                                </div>
                            ";
                }
                // line 204
                yield "                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                            <div class=\"fs-4 fw-bold\">";
                // line 208
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 208, $this->source); })()), "usage", [], "any", false, false, false, 208), "categories", [], "any", false, false, false, 208), "current", [], "any", false, false, false, 208), "html", null, true);
                yield "</div>
                            <small class=\"text-white-50\">Catégories</small>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                            <div class=\"fs-4 fw-bold\">";
                // line 214
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 214, $this->source); })()), "usage", [], "any", false, false, false, 214), "users", [], "any", false, false, false, 214), "current", [], "any", false, false, false, 214), "html", null, true);
                yield "</div>
                            <small class=\"text-white-50\">Utilisateurs</small>
                        </div>
                    </div>
                </div>
                
                <!-- Boutons d'action -->
                <div class=\"d-flex gap-3 flex-wrap\">
                    ";
                // line 222
                if ((($tmp = (isset($context["can_upgrade_role"]) || array_key_exists("can_upgrade_role", $context) ? $context["can_upgrade_role"] : (function () { throw new RuntimeError('Variable "can_upgrade_role" does not exist.', 222, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 223
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 223, $this->source); })()), "plan", [], "any", false, false, false, 223) == "freemium")) {
                        // line 224
                        yield "                            <a href=\"";
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
                        yield "\" class=\"btn btn-light flex-grow-1 py-3 fw-semibold\" 
                               style=\"color: var(--primary-color) !important;\">
                                <i class=\"bi bi-stars me-2\"></i>
                                Passer à un plan payant
                            </a>
                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 229
(isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 229, $this->source); })()), "plan", [], "any", false, false, false, 229) == "basic")) {
                        // line 230
                        yield "                            <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans", ["plan" => "premium", "billing" => "monthly"]), "html", null, true);
                        yield "\" class=\"btn btn-light flex-grow-1 py-3 fw-semibold\"
                               style=\"color: var(--primary-color) !important;\">
                                <i class=\"bi bi-stars me-2\"></i>
                                Passer à Premium
                            </a>
                        ";
                    } elseif (((CoreExtension::getAttribute($this->env, $this->source,                     // line 235
(isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 235, $this->source); })()), "plan", [], "any", false, false, false, 235) == "premium") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 235, $this->source); })()), "billing_period", [], "any", false, false, false, 235) == "monthly"))) {
                        // line 236
                        yield "                            <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans", ["plan" => "premium", "billing" => "yearly"]), "html", null, true);
                        yield "\" class=\"btn btn-light flex-grow-1 py-3 fw-semibold\"
                               style=\"color: var(--primary-color) !important;\">
                                <i class=\"bi bi-stars me-2\"></i>
                                Passer à Premium annuel <span class=\"badge bg-success ms-2\">-20%</span>
                            </a>
                        ";
                    }
                    // line 242
                    yield "                    ";
                }
                // line 243
                yield "                    
                    <a href=\"";
                // line 244
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
                yield "\" class=\"btn btn-outline-light flex-grow-1 py-3\">
                        <i class=\"bi bi-info-circle me-2\"></i>
                        Détails
                    </a>
                </div>
                
                <!-- Liste des fonctionnalités -->
                ";
                // line 251
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "features", [], "any", true, true, false, 251) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 251, $this->source); })()), "features", [], "any", false, false, false, 251)) > 0))) {
                    // line 252
                    yield "                    <div class=\"mt-4 pt-3 border-top border-white border-opacity-20\">
                        <small class=\"text-white-50 d-block mb-2\">Fonctionnalités incluses :</small>
                        <div class=\"d-flex flex-wrap gap-2\">
                            ";
                    // line 255
                    if (CoreExtension::inFilter("all", CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 255, $this->source); })()), "features", [], "any", false, false, false, 255))) {
                        // line 256
                        yield "                                <span class=\"badge bg-white bg-opacity-20 text-white px-3 py-2\">
                                    <i class=\"bi bi-check-circle-fill me-1 small\"></i>
                                    Toutes les fonctionnalités
                                </span>
                            ";
                    } else {
                        // line 261
                        yield "                                ";
                        // line 262
                        yield "                                ";
                        $context["feature_labels"] = ["basic_inventory" => "Inventaire de base", "basic_reports" => "Rapports de base", "advanced_inventory" => "Inventaire avancé", "reports" => "Rapports", "api_access" => "Accès API", "priority_support" => "Support prioritaire", "custom_domain" => "Domaine personnalisé", "white_label" => "Marque blanche"];
                        // line 272
                        yield "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription_info"]) || array_key_exists("subscription_info", $context) ? $context["subscription_info"] : (function () { throw new RuntimeError('Variable "subscription_info" does not exist.', 272, $this->source); })()), "features", [], "any", false, false, false, 272));
                        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                            // line 273
                            yield "                                    <span class=\"badge bg-white bg-opacity-20 text-white px-3 py-2\">
                                        <i class=\"bi bi-check-circle-fill me-1 small\"></i>
                                        ";
                            // line 275
                            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["feature_labels"] ?? null), $context["feature"], [], "array", true, true, false, 275) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["feature_labels"]) || array_key_exists("feature_labels", $context) ? $context["feature_labels"] : (function () { throw new RuntimeError('Variable "feature_labels" does not exist.', 275, $this->source); })()), $context["feature"], [], "array", false, false, false, 275)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["feature_labels"]) || array_key_exists("feature_labels", $context) ? $context["feature_labels"] : (function () { throw new RuntimeError('Variable "feature_labels" does not exist.', 275, $this->source); })()), $context["feature"], [], "array", false, false, false, 275), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["feature"], ["_" => " "])), "html", null, true)));
                            yield "
                                    </span>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 278
                        yield "                            ";
                    }
                    // line 279
                    yield "                        </div>
                    </div>
                ";
                }
                // line 282
                yield "            </div>
        </div>
    ";
            }
        }
        // line 286
        yield "
";
        
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
        return array (  511 => 286,  505 => 282,  500 => 279,  497 => 278,  488 => 275,  484 => 273,  479 => 272,  476 => 262,  474 => 261,  467 => 256,  465 => 255,  460 => 252,  458 => 251,  448 => 244,  445 => 243,  442 => 242,  432 => 236,  430 => 235,  421 => 230,  419 => 229,  410 => 224,  407 => 223,  405 => 222,  394 => 214,  385 => 208,  379 => 204,  373 => 201,  370 => 200,  368 => 199,  363 => 197,  356 => 192,  349 => 187,  343 => 184,  340 => 183,  338 => 182,  328 => 174,  311 => 159,  309 => 158,  301 => 153,  292 => 147,  288 => 146,  285 => 145,  280 => 144,  275 => 143,  273 => 142,  267 => 139,  257 => 131,  255 => 130,  242 => 119,  238 => 117,  234 => 115,  232 => 114,  226 => 111,  218 => 105,  200 => 89,  195 => 86,  190 => 84,  187 => 83,  185 => 82,  173 => 72,  171 => 71,  167 => 69,  157 => 62,  153 => 61,  146 => 58,  144 => 57,  138 => 53,  133 => 50,  128 => 47,  126 => 46,  114 => 36,  112 => 35,  99 => 24,  96 => 22,  93 => 21,  90 => 20,  87 => 19,  84 => 18,  81 => 17,  78 => 15,  75 => 14,  72 => 13,  70 => 12,  67 => 11,  64 => 10,  62 => 9,  59 => 8,  56 => 6,  53 => 5,  51 => 4,  48 => 2,);
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
        {% set companyType = hmaService.getType() %}
        {% set isPharmacy = companyType == 'pharmacy' %}
        
        {# ✅ Utilisation des variables CSS pour le style #}
        <div class=\"card border-0 shadow-lg mb-4 overflow-hidden\" 
             style=\"background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);\">
            
            <!-- Effet de vague décoratif -->
            <div class=\"position-absolute opacity-10\" style=\"top: -50px; right: -50px;\">
                <i class=\"bi bi-graph-up-arrow\" style=\"font-size: 150px; color: rgba(255,255,255,0.1);\"></i>
            </div>
            
            <div class=\"card-body p-4 text-white position-relative\">
                
                <!-- ✅ BOUTON VISIBILITÉ POUR PHARMACIE -->
                {% if isPharmacy and can_upgrade_role %}
                    <div class=\"mb-4\">
                        <div class=\"bg-white bg-opacity-10 rounded-3 p-3\">
                            <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-3\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"me-3\">
                                        <i class=\"bi bi-shop fs-2\"></i>
                                    </div>
                                    <div>
                                        <h5 class=\"fw-bold mb-1\">Visibilité de votre boutique</h5>
                                        <p class=\"mb-0 small text-white-50\">
                                            {% if hmaService.companyPublic %}
                                                <i class=\"bi bi-check-circle-fill text-success me-1\"></i>
                                                Votre boutique est actuellement <strong>visible</strong> sur le marketplace
                                            {% else %}
                                                <i class=\"bi bi-eye-slash-fill text-warning me-1\"></i>
                                                Votre boutique est actuellement <strong>masquée</strong> sur le marketplace
                                            {% endif %}
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    {% set isVisible = hmaService.companyPublic %}
                                    <button type=\"button\" class=\"btn {{ isVisible ? 'btn-outline-light' : 'btn-light' }} py-2 px-4 fw-semibold\" 
                                            data-bs-toggle=\"modal\" 
                                            data-bs-target=\"#visibilityConfirmModal\">
                                        <i class=\"bi {{ isVisible ? 'bi-eye-slash' : 'bi-eye' }} me-2\"></i>
                                        {{ isVisible ? 'Masquer ma boutique' : 'Rendre visible' }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endif %}

                <!-- ✅ BOUTON MODIFIER PÉRIODES DE GARDE POUR PHARMACIE -->
                {% if isPharmacy and can_upgrade_role %}
                    <div class=\"mb-4\">
                        <div class=\"bg-white bg-opacity-10 rounded-3 p-3\">
                            <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-3\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"me-3\">
                                        <i class=\"bi bi-clock-history fs-2\"></i>
                                    </div>
                                    <div>
                                        <h5 class=\"fw-bold mb-1\">Périodes de garde</h5>
                                        <p class=\"mb-0 small text-white-50\">
                                            {% if hmaService.guardPeriods is not empty %}
                                                <i class=\"bi bi-check-circle-fill text-success me-1\"></i>
                                                {{ hmaService.guardPeriods|length }} période(s) de garde configurée(s)
                                            {% else %}
                                                <i class=\"bi bi-exclamation-triangle-fill text-warning me-1\"></i>
                                                Aucune période de garde configurée
                                            {% endif %}
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <button type=\"button\" class=\"btn btn-light py-2 px-4 fw-semibold\" 
                                            style=\"color: var(--primary-color) !important;\"
                                            data-bs-toggle=\"modal\" 
                                            data-bs-target=\"#guardPeriodsModal\">
                                        <i class=\"bi bi-pencil me-2\"></i>
                                        Modifier les périodes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endif %}
                
                <!-- En-tête avec plan et badge -->
                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <div>
                        <span class=\"text-white-50 small text-uppercase tracking-wider\">Plan actuel</span>
                        <h3 class=\"h2 fw-bold mb-0 d-flex align-items-center\">
                            {{ subscription_info.plan_label }}
                            <span class=\"badge bg-white text-primary ms-3 px-3 py-2 rounded-pill\" 
                                 style=\"color: var(--primary-color) !important;\">
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
                                <div class=\"progress mt-2\" style=\"height: 4px; background-color: rgba(255,255,255,0.2);\">
                                    <div class=\"progress-bar bg-white\" style=\"width: {{ subscription_info.usage.products.percentage }}%;\"></div>
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
                <div class=\"d-flex gap-3 flex-wrap\">
                    {% if can_upgrade_role %}
                        {% if subscription_info.plan == 'freemium' %}
                            <a href=\"{{ path('app_subscription_plans') }}\" class=\"btn btn-light flex-grow-1 py-3 fw-semibold\" 
                               style=\"color: var(--primary-color) !important;\">
                                <i class=\"bi bi-stars me-2\"></i>
                                Passer à un plan payant
                            </a>
                        {% elseif subscription_info.plan == 'basic' %}
                            <a href=\"{{ path('app_subscription_plans', {plan: 'premium', billing: 'monthly'}) }}\" class=\"btn btn-light flex-grow-1 py-3 fw-semibold\"
                               style=\"color: var(--primary-color) !important;\">
                                <i class=\"bi bi-stars me-2\"></i>
                                Passer à Premium
                            </a>
                        {% elseif subscription_info.plan == 'premium' and subscription_info.billing_period == 'monthly' %}
                            <a href=\"{{ path('app_subscription_plans', {plan: 'premium', billing: 'yearly'}) }}\" class=\"btn btn-light flex-grow-1 py-3 fw-semibold\"
                               style=\"color: var(--primary-color) !important;\">
                                <i class=\"bi bi-stars me-2\"></i>
                                Passer à Premium annuel <span class=\"badge bg-success ms-2\">-20%</span>
                            </a>
                        {% endif %}
                    {% endif %}
                    
                    <a href=\"{{ path('app_subscription_plans') }}\" class=\"btn btn-outline-light flex-grow-1 py-3\">
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
{% endif %}

", "components/_subscription_widget.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\components\\_subscription_widget.html.twig");
    }
}
