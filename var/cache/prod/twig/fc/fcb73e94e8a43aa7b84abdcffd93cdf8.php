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
class __TwigTemplate_598975da263620fadac95591b93a0bbc extends Template
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
                yield "        ";
                $context["companyType"] = CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "getType", [], "method", false, false, false, 20);
                // line 21
                yield "        ";
                $context["isPharmacy"] = (($context["companyType"] ?? null) == "pharmacy");
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
                if ((($context["isPharmacy"] ?? null) && ($context["can_upgrade_role"] ?? null))) {
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
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "companyPublic", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
                    $context["isVisible"] = CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "companyPublic", [], "any", false, false, false, 57);
                    // line 58
                    yield "                                    <button type=\"button\" class=\"btn ";
                    yield (((($tmp = ($context["isVisible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-outline-light") : ("btn-light"));
                    yield " py-2 px-4 fw-semibold\" 
                                            data-bs-toggle=\"modal\" 
                                            data-bs-target=\"#visibilityConfirmModal\">
                                        <i class=\"bi ";
                    // line 61
                    yield (((($tmp = ($context["isVisible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bi-eye-slash") : ("bi-eye"));
                    yield " me-2\"></i>
                                        ";
                    // line 62
                    yield (((($tmp = ($context["isVisible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Masquer ma boutique") : ("Rendre visible"));
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
                if ((($context["isPharmacy"] ?? null) && ($context["can_upgrade_role"] ?? null))) {
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
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "guardPeriods", [], "any", false, false, false, 82))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 83
                        yield "                                                <i class=\"bi bi-check-circle-fill text-success me-1\"></i>
                                                ";
                        // line 84
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "guardPeriods", [], "any", false, false, false, 84)), "html", null, true);
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "plan_label", [], "any", false, false, false, 111), "html", null, true);
                yield "
                            <span class=\"badge bg-white text-primary ms-3 px-3 py-2 rounded-pill\" 
                                 style=\"color: var(--primary-color) !important;\">
                                ";
                // line 114
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "is_trial", [], "any", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "is_trial", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "days_remaining", [], "any", false, false, false, 139), "html", null, true);
                    yield " jours restants</span>
                                </div>
                                <div class=\"progress\" style=\"height: 8px; background-color: rgba(255,255,255,0.2);\">
                                    ";
                    // line 142
                    $context["percentage"] = Twig\Extension\CoreExtension::round((((14 - CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "days_remaining", [], "any", false, false, false, 142)) / 14) * 100));
                    // line 143
                    yield "                                    ";
                    if ((($context["percentage"] ?? null) > 100)) {
                        $context["percentage"] = 100;
                    }
                    // line 144
                    yield "                                    ";
                    if ((($context["percentage"] ?? null) < 0)) {
                        $context["percentage"] = 0;
                    }
                    // line 145
                    yield "                                    <div class=\"progress-bar bg-white\" role=\"progressbar\" 
                                         style=\"width: ";
                    // line 146
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["percentage"] ?? null), "html", null, true);
                    yield "%;\" 
                                         aria-valuenow=\"";
                    // line 147
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["percentage"] ?? null), "html", null, true);
                    yield "\" 
                                         aria-valuemin=\"0\" 
                                         aria-valuemax=\"100\">
                                    </div>
                                </div>
                                <small class=\"text-white-50 mt-1 d-block\">
                                    <i class=\"bi bi-calendar me-1\"></i>Se termine le ";
                    // line 153
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "end_date", [], "any", false, false, false, 153), "html", null, true);
                    yield "
                                </small>
                            </div>
                        </div>
                    </div>
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 158
($context["subscription_info"] ?? null), "plan", [], "any", false, false, false, 158) == "freemium")) {
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
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "subscription_end", [], "any", false, false, false, 182)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 183
                        yield "                                        <small class=\"text-white-50\">
                                            <i class=\"bi bi-calendar me-1\"></i>Renouvellement le ";
                        // line 184
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "subscription_end", [], "any", false, false, false, 184), "html", null, true);
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "usage", [], "any", false, false, false, 197), "products", [], "any", false, false, false, 197), "current", [], "any", false, false, false, 197), "html", null, true);
                yield "</div>
                            <small class=\"text-white-50\">Produits</small>
                            ";
                // line 199
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "usage", [], "any", false, false, false, 199), "products", [], "any", false, false, false, 199), "limit", [], "any", false, false, false, 199) != Twig\Extension\CoreExtension::constant("PHP_INT_MAX"))) {
                    // line 200
                    yield "                                <div class=\"progress mt-2\" style=\"height: 4px; background-color: rgba(255,255,255,0.2);\">
                                    <div class=\"progress-bar bg-white\" style=\"width: ";
                    // line 201
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "usage", [], "any", false, false, false, 201), "products", [], "any", false, false, false, 201), "percentage", [], "any", false, false, false, 201), "html", null, true);
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "usage", [], "any", false, false, false, 208), "categories", [], "any", false, false, false, 208), "current", [], "any", false, false, false, 208), "html", null, true);
                yield "</div>
                            <small class=\"text-white-50\">Catégories</small>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"bg-white bg-opacity-10 rounded-3 p-3 text-center\">
                            <div class=\"fs-4 fw-bold\">";
                // line 214
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "usage", [], "any", false, false, false, 214), "users", [], "any", false, false, false, 214), "current", [], "any", false, false, false, 214), "html", null, true);
                yield "</div>
                            <small class=\"text-white-50\">Utilisateurs</small>
                        </div>
                    </div>
                </div>
                
                <!-- Boutons d'action -->
                <div class=\"d-flex gap-3 flex-wrap\">
                    ";
                // line 222
                if ((($tmp = ($context["can_upgrade_role"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 223
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "plan", [], "any", false, false, false, 223) == "freemium")) {
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
($context["subscription_info"] ?? null), "plan", [], "any", false, false, false, 229) == "basic")) {
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
($context["subscription_info"] ?? null), "plan", [], "any", false, false, false, 235) == "premium") && (CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "billing_period", [], "any", false, false, false, 235) == "monthly"))) {
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
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "features", [], "any", true, true, false, 251) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "features", [], "any", false, false, false, 251)) > 0))) {
                    // line 252
                    yield "                    <div class=\"mt-4 pt-3 border-top border-white border-opacity-20\">
                        <small class=\"text-white-50 d-block mb-2\">Fonctionnalités incluses :</small>
                        <div class=\"d-flex flex-wrap gap-2\">
                            ";
                    // line 255
                    if (CoreExtension::inFilter("all", CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "features", [], "any", false, false, false, 255))) {
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
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["subscription_info"] ?? null), "features", [], "any", false, false, false, 272));
                        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                            // line 273
                            yield "                                    <span class=\"badge bg-white bg-opacity-20 text-white px-3 py-2\">
                                        <i class=\"bi bi-check-circle-fill me-1 small\"></i>
                                        ";
                            // line 275
                            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["feature_labels"] ?? null), $context["feature"], [], "array", true, true, false, 275) &&  !(null === (($_v0 = ($context["feature_labels"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[$context["feature"]] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["feature_labels"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[$context["feature"]] ?? null) : null), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["feature"], ["_" => " "])), "html", null, true)));
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
        return array (  505 => 286,  499 => 282,  494 => 279,  491 => 278,  482 => 275,  478 => 273,  473 => 272,  470 => 262,  468 => 261,  461 => 256,  459 => 255,  454 => 252,  452 => 251,  442 => 244,  439 => 243,  436 => 242,  426 => 236,  424 => 235,  415 => 230,  413 => 229,  404 => 224,  401 => 223,  399 => 222,  388 => 214,  379 => 208,  373 => 204,  367 => 201,  364 => 200,  362 => 199,  357 => 197,  350 => 192,  343 => 187,  337 => 184,  334 => 183,  332 => 182,  322 => 174,  305 => 159,  303 => 158,  295 => 153,  286 => 147,  282 => 146,  279 => 145,  274 => 144,  269 => 143,  267 => 142,  261 => 139,  251 => 131,  249 => 130,  236 => 119,  232 => 117,  228 => 115,  226 => 114,  220 => 111,  212 => 105,  194 => 89,  189 => 86,  184 => 84,  181 => 83,  179 => 82,  167 => 72,  165 => 71,  161 => 69,  151 => 62,  147 => 61,  140 => 58,  138 => 57,  132 => 53,  127 => 50,  122 => 47,  120 => 46,  108 => 36,  106 => 35,  93 => 24,  90 => 22,  87 => 21,  84 => 20,  81 => 19,  78 => 18,  75 => 17,  72 => 15,  69 => 14,  66 => 13,  64 => 12,  61 => 11,  58 => 10,  56 => 9,  53 => 8,  50 => 6,  47 => 5,  45 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/_subscription_widget.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\components\\_subscription_widget.html.twig");
    }
}
