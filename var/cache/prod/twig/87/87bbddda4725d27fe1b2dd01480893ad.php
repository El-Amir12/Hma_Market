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

/* super_admin/subscription_plan/show.html.twig */
class __TwigTemplate_c24b864933027283208188844a9ae1db extends Template
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
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "displayName", [], "any", false, false, false, 3), "html", null, true);
        yield " - Détails du plan";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"container-fluid px-4 py-4 bg-light min-vh-100\">
    <!-- En-tête moderne avec dégradé amélioré -->
    <div class=\"row mb-5\">
        <div class=\"col-12\">
            <div class=\"modern-header position-relative overflow-hidden rounded-5 shadow-lg p-5 text-white\" 
                style=\"background: linear-gradient(145deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);\">
                <div class=\"floating-bg\">
                    <div class=\"shape shape-1\"></div>
                    <div class=\"shape shape-2\"></div>
                    <div class=\"shape shape-3\"></div>
                </div>
                <div class=\"position-relative z-1\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"d-flex align-items-center gap-4\">
                            <div class=\"icon-wrapper bg-white bg-opacity-20 backdrop-blur rounded-4 p-4\">
                                <i class=\"fas fa-tag text-white display-4\"></i>
                            </div>
                            <div>
                                <h1 class=\"display-4 fw-bold mb-2\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "displayName", [], "any", false, false, false, 24), "html", null, true);
        yield "</h1>
                                <p class=\"text-white-50 mb-0 fs-5\">Détails du plan d'abonnement • 
                                    <span class=\"badge bg-white text-dark rounded-pill px-3 py-2 ms-2\">
                                        ";
        // line 27
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "isUnlimited", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Illimité";
        } else {
            yield "Limité";
        }
        // line 28
        yield "                                    </span>
                                </p>
                            </div>
                        </div>
                        <div>
                            <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_index");
        yield "\" class=\"btn btn-light rounded-pill px-4 shadow-sm\" style=\"cursor: pointer; position: relative; z-index: 100;\">
                                <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"wave-bottom\">
                    <svg viewBox=\"0 0 1440 120\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"none\">
                        <path d=\"M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z\" fill=\"white\" fill-opacity=\"0.2\"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Messages flash -->
    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 49));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 50
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 51
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show rounded-4 shadow-sm mb-4 border-0\" role=\"alert\">
                <div class=\"d-flex align-items-center\">
                    <i class=\"fas fa-";
                // line 53
                yield ((($context["label"] == "success")) ? ("check-circle") : ("exclamation-triangle"));
                yield " fs-4 me-3\"></i>
                    <span>";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
                </div>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "
    <!-- Détails du plan -->
    <div class=\"row mb-5\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                <div class=\"card-header bg-gradient-primary text-white py-3 d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0 fw-bold\"><i class=\"fas fa-info-circle me-2\"></i>Informations générales</h5>
                </div>
                <div class=\"card-body p-4\">
                    <!-- Informations générales -->
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <ul class=\"list-unstyled\">
                                <li class=\"mb-3 d-flex align-items-center\">
                                    <div class=\"bg-primary bg-opacity-10 p-2 rounded-3 me-3\">
                                        <i class=\"fas fa-tag text-white\"></i>
                                    </div>
                                    <div><strong>Nom technique :</strong> ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "name", [], "any", false, false, false, 77), "html", null, true);
        yield "</div>
                                </li>
                                <li class=\"mb-3 d-flex align-items-center\">
                                    <div class=\"bg-success bg-opacity-10 p-2 rounded-3 me-3\">
                                        <i class=\"fas fa-calendar-check text-white\"></i>
                                    </div>
                                    <div><strong>Créé le :</strong> ";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "createdAt", [], "any", false, false, false, 83), "d/m/Y H:i"), "html", null, true);
        yield "</div>
                                </li>
                                <li class=\"mb-3 d-flex align-items-center\">
                                    <div class=\"bg-warning bg-opacity-10 p-2 rounded-3 me-3\">
                                        <i class=\"fas fa-sync-alt text-white\"></i>
                                    </div>
                                    <div><strong>Dernière mise à jour :</strong> ";
        // line 89
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "updatedAt", [], "any", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "updatedAt", [], "any", false, false, false, 89), "d/m/Y H:i"), "html", null, true)) : ("Jamais"));
        yield "</div>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-md-6\">
                            <ul class=\"list-unstyled\">
                                <li class=\"mb-3 d-flex align-items-center\">
                                    <div class=\"bg-success bg-opacity-10 p-2 rounded-3 me-3\">
                                        <i class=\"fas fa-money-bill-wave text-white\"></i>
                                    </div>
                                    <div><strong>Prix mensuel :</strong> ";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "priceMonthly", [], "any", false, false, false, 99), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
                                </li>
                                <li class=\"mb-3 d-flex align-items-center\">
                                    <div class=\"bg-warning bg-opacity-10 p-2 rounded-3 me-3\">
                                        <i class=\"fas fa-money-bill-wave text-white\"></i>
                                    </div>
                                    <div><strong>Prix annuel :</strong> ";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "priceYearly", [], "any", false, false, false, 105), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
                                </li>
                                <li class=\"mb-3 d-flex align-items-center\">
                                    <div class=\"bg-info bg-opacity-10 p-2 rounded-3 me-3\">
                                        <i class=\"fas fa-chart-bar text-white\"></i>
                                    </div>
                                    <div><strong>Abonnements :</strong> ";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "subscriptions", [], "any", false, false, false, 111)), "html", null, true);
        yield "</div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Description -->
                    ";
        // line 118
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "description", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 119
            yield "                        <div class=\"description-box p-3 rounded-3 mt-4 mb-4\">
                            <i class=\"fas fa-quote-left me-2 text-info\"></i>
                            <em>";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "description", [], "any", false, false, false, 121), "html", null, true);
            yield "</em>
                        </div>
                    ";
        }
        // line 124
        yield "
                    <hr class=\"my-4\">

                    <!-- Limites Commerce -->
                    <h6 class=\"fw-bold mb-3\"><i class=\"fas fa-store me-2 text-primary\"></i>Limites Commerce</h6>
                    <div class=\"d-flex flex-wrap gap-2 mb-4\">
                        ";
        // line 130
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "maxUsersPerRole", [], "any", false, false, false, 130))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 131
            yield "                            <span class=\"badge bg-light text-dark border px-3 py-2 rounded-pill\">
                                <i class=\"fas fa-users text-success me-1\"></i> ";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "maxUsersPerRole", [], "any", false, false, false, 132), "html", null, true);
            yield " utilisateurs/rôle
                            </span>
                        ";
        }
        // line 135
        yield "                        ";
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "maxProducts", [], "any", false, false, false, 135))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 136
            yield "                            <span class=\"badge bg-light text-dark border px-3 py-2 rounded-pill\">
                                <i class=\"fas fa-box text-info me-1\"></i> ";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "maxProducts", [], "any", false, false, false, 137)), "html", null, true);
            yield " produits
                            </span>
                        ";
        }
        // line 140
        yield "                        ";
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "maxOrdersPerMonth", [], "any", false, false, false, 140))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 141
            yield "                            <span class=\"badge bg-light text-dark border px-3 py-2 rounded-pill\">
                                <i class=\"fas fa-shopping-cart text-warning me-1\"></i> ";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "maxOrdersPerMonth", [], "any", false, false, false, 142)), "html", null, true);
            yield " commandes/mois
                            </span>
                        ";
        }
        // line 145
        yield "                        ";
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "maxCategories", [], "any", false, false, false, 145))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 146
            yield "                            <span class=\"badge bg-light text-dark border px-3 py-2 rounded-pill\">
                                <i class=\"fas fa-tags text-primary me-1\"></i> ";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "maxCategories", [], "any", false, false, false, 147)), "html", null, true);
            yield " catégories
                            </span>
                        ";
        }
        // line 150
        yield "                        ";
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "maxSuppliers", [], "any", false, false, false, 150))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 151
            yield "                            <span class=\"badge bg-light text-dark border px-3 py-2 rounded-pill\">
                                <i class=\"fas fa-truck text-secondary me-1\"></i> ";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "maxSuppliers", [], "any", false, false, false, 152)), "html", null, true);
            yield " fournisseurs
                            </span>
                        ";
        }
        // line 155
        yield "                    </div>

                    <!-- Limites Restaurant -->
                    ";
        // line 158
        $context["hasRestaurantLimits"] = ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "maxRecipes", [], "any", false, false, false, 158)) ||  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "maxRecipeCategories", [], "any", false, false, false, 158)));
        // line 159
        yield "                    ";
        if ((($tmp = ($context["hasRestaurantLimits"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 160
            yield "                        <h6 class=\"fw-bold mb-3 mt-4\"><i class=\"fas fa-utensils me-2 text-success\"></i>Limites Restaurant</h6>
                        <div class=\"d-flex flex-wrap gap-2 mb-4\">
                            ";
            // line 162
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "maxRecipes", [], "any", false, false, false, 162))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 163
                yield "                                <span class=\"badge bg-light text-dark border px-3 py-2 rounded-pill\">
                                    <i class=\"fas fa-book text-success me-1\"></i> 
                                    ";
                // line 165
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "maxRecipes", [], "any", false, false, false, 165) >= 999999999)) {
                    // line 166
                    yield "                                        ♾️ Recettes illimitées
                                    ";
                } else {
                    // line 168
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "maxRecipes", [], "any", false, false, false, 168)), "html", null, true);
                    yield " recettes
                                    ";
                }
                // line 170
                yield "                                </span>
                            ";
            }
            // line 172
            yield "                            ";
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "maxRecipeCategories", [], "any", false, false, false, 172))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 173
                yield "                                <span class=\"badge bg-light text-dark border px-3 py-2 rounded-pill\">
                                    <i class=\"fas fa-tag text-info me-1\"></i> 
                                    ";
                // line 175
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "maxRecipeCategories", [], "any", false, false, false, 175) >= 999999999)) {
                    // line 176
                    yield "                                        ♾️ Catégories de recettes illimitées
                                    ";
                } else {
                    // line 178
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "maxRecipeCategories", [], "any", false, false, false, 178)), "html", null, true);
                    yield " catégories de recettes
                                    ";
                }
                // line 180
                yield "                                </span>
                            ";
            }
            // line 182
            yield "                        </div>
                    ";
        }
        // line 184
        yield "
                    <!-- Fonctionnalités incluses -->
                    ";
        // line 186
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "features", [], "any", false, false, false, 186)) > 0)) {
            // line 187
            yield "                        <h6 class=\"fw-bold mb-3\"><i class=\"fas fa-star text-warning me-2\"></i>Fonctionnalités incluses</h6>
                        <div class=\"d-flex flex-wrap gap-2 mb-3\">
                            ";
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "features", [], "any", false, false, false, 189));
            foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                // line 190
                yield "                                <span class=\"badge bg-light text-dark border rounded-pill px-3 py-2\">
                                    <i class=\"fas fa-check-circle text-success me-1\"></i> ";
                // line 191
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["feature"], "html", null, true);
                yield "
                                </span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            yield "                        </div>
                    ";
        }
        // line 196
        yield "
                    <!-- Statut -->
                    <div class=\"mt-4 d-flex align-items-center gap-3\">
                        <span class=\"badge bg-";
        // line 199
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "isActive", [], "any", false, false, false, 199)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("success") : ("secondary"));
        yield " fs-6 p-3 rounded-pill\">
                            <i class=\"fas fa-";
        // line 200
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "isActive", [], "any", false, false, false, 200)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("check-circle") : ("times-circle"));
        yield " me-1\"></i>
                            ";
        // line 201
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "isActive", [], "any", false, false, false, 201)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Plan actif") : ("Plan inactif"));
        yield "
                        </span>
                        <span class=\"badge bg-info fs-6 p-3 rounded-pill\">
                            <i class=\"fas fa-chart-bar me-1\"></i>
                            ";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "subscriptions", [], "any", false, false, false, 205)), "html", null, true);
        yield " abonnement(s) souscrit(s)
                        </span>
                    </div>
                </div>

                <!-- Actions du footer -->
                <div class=\"card-footer bg-transparent border-0 p-4 d-flex justify-content-between\">
                    <a href=\"";
        // line 212
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_index");
        yield "\" class=\"btn btn-outline-secondary rounded-pill px-4\">
                        <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
                    </a>
                    <div class=\"d-flex gap-2\">
                        <button type=\"button\" class=\"btn btn-outline-";
        // line 216
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "isActive", [], "any", false, false, false, 216)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("success"));
        yield " rounded-pill px-4\" data-bs-toggle=\"modal\" data-bs-target=\"#toggleModal\">
                            <i class=\"fas fa-";
        // line 217
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "isActive", [], "any", false, false, false, 217)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("pause") : ("play"));
        yield " me-2\"></i>
                            ";
        // line 218
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "isActive", [], "any", false, false, false, 218)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
        yield "
                        </button>
                        <a href=\"";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "id", [], "any", false, false, false, 220)]), "html", null, true);
        yield "\" class=\"btn btn-outline-primary rounded-pill px-4\">
                            <i class=\"fas fa-edit me-2\"></i>Modifier
                        </a>
                        ";
        // line 223
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "subscriptions", [], "any", false, false, false, 223)) == 0)) {
            // line 224
            yield "                            <button type=\"button\" class=\"btn btn-outline-danger rounded-pill px-4\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                                <i class=\"fas fa-trash me-2\"></i>Supprimer
                            </button>
                        ";
        } else {
            // line 228
            yield "                            <button type=\"button\" class=\"btn btn-outline-danger rounded-pill px-4\" disabled title=\"Impossible de supprimer : des abonnements sont liés à ce plan\">
                                <i class=\"fas fa-trash me-2\"></i>Supprimer
                            </button>
                        ";
        }
        // line 232
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des abonnements -->
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-12\">
            <div class=\"card border-0 shadow-lg rounded-4\">
                <div class=\"card-header bg-gradient-secondary text-white py-3 d-flex justify-content-between align-items-center flex-wrap gap-3\">
                    <h5 class=\"mb-0 fw-bold\"><i class=\"fas fa-list-ul me-2\"></i>Liste des abonnements souscrits</h5>
                    <div class=\"d-flex gap-2 align-items-center\">
                        <span class=\"badge bg-white text-dark rounded-pill px-3\">";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "subscriptions", [], "any", false, false, false, 245)), "html", null, true);
        yield " abonnement(s)</span>
                        <button class=\"btn btn-light btn-sm rounded-pill px-3\" id=\"filterToggleBtn\">
                            <i class=\"fas fa-filter me-1\"></i>Filtres
                        </button>
                        <button class=\"btn btn-outline-light btn-sm rounded-pill px-3\" id=\"resetFiltersBtn\" style=\"display: none;\">
                            <i class=\"fas fa-undo-alt me-1\"></i>Réinitialiser
                        </button>
                    </div>
                </div>
                <div class=\"card-body p-4\">
                    <!-- Panneau de filtres (caché par défaut) -->
                    <div id=\"filterPanel\" class=\"row g-3 mb-4\" style=\"display: none;\">
                        <div class=\"col-md-4\">
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-transparent border-end-0\">
                                    <i class=\"fas fa-search\"></i>
                                </span>
                                <input type=\"text\" class=\"form-control border-start-0\" id=\"tableSearch\" placeholder=\"Rechercher par entreprise, email...\">
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-transparent\">
                                    <i class=\"fas fa-calendar-alt\"></i>
                                </span>
                                <input type=\"date\" class=\"form-control\" id=\"dateStartFilter\" placeholder=\"Date début\">
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-transparent\">
                                    <i class=\"fas fa-calendar-alt\"></i>
                                </span>
                                <input type=\"date\" class=\"form-control\" id=\"dateEndFilter\" placeholder=\"Date fin\">
                            </div>
                        </div>
                        <div class=\"col-md-2\">
                            <button class=\"btn btn-primary w-100\" id=\"applyFiltersBtn\">
                                <i class=\"fas fa-filter me-1\"></i>Appliquer
                            </button>
                        </div>
                    </div>

                    <!-- Tableau avec scroll -->
                    <div class=\"table-responsive\" style=\"max-height: 500px; overflow-y: auto;\">
                        <table class=\"table table-hover align-middle mb-0\" id=\"subscriptionsTable\">
                            <thead class=\"bg-light sticky-top\">
                                <tr>
                                    <th>Entreprise</th>
                                    <th>Période</th>
                                    <th>Statut</th>
                                    <th>Date début</th>
                                    <th>Date fin</th>
                                    <th class=\"text-end px-4\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 302
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "subscriptions", [], "any", false, false, false, 302));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
            // line 303
            yield "                                    <tr class=\"subscription-row\" data-start-date=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "startsAt", [], "any", false, false, false, 303)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "startsAt", [], "any", false, false, false, 303), "Y-m-d"), "html", null, true)) : (""));
            yield "\" data-end-date=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 303)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 303), "Y-m-d"), "html", null, true)) : (""));
            yield "\">
                                        <td class=\"company-cell\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"symbol symbol-40px me-2\">
                                                    ";
            // line 307
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "hmaService", [], "any", false, false, false, 307), "logo", [], "any", false, false, false, 307)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 308
                yield "                                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "hmaService", [], "any", false, false, false, 308), "logo", [], "any", false, false, false, 308))), "html", null, true);
                yield "\" alt=\"logo\" class=\"rounded-circle\" width=\"32\" height=\"32\">
                                                    ";
            } else {
                // line 310
                yield "                                                        <div class=\"bg-light rounded-circle d-flex align-items-center justify-content-center\" style=\"width: 32px; height: 32px;\">
                                                            <i class=\"fas fa-building text-muted\"></i>
                                                        </div>
                                                    ";
            }
            // line 314
            yield "                                                </div>
                                                <div>
                                                    <span class=\"fw-semibold\">";
            // line 316
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "hmaService", [], "any", false, false, false, 316), "companyName", [], "any", false, false, false, 316), "html", null, true);
            yield "</span>
                                                    <br><small class=\"text-muted\">";
            // line 317
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "hmaService", [], "any", false, false, false, 317), "email", [], "any", false, false, false, 317), "html", null, true);
            yield "</small>
                                                </div>
                                            </div>
                                        </div>
                                        <td class=\"text-center\">
                                            <span class=\"badge bg-info\">";
            // line 322
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "billingPeriod", [], "any", false, false, false, 322) == "monthly")) ? ("Mensuel") : ("Annuel"));
            yield "</span>
                                        </div>
                                        <td class=\"status-cell\">
                                            ";
            // line 325
            $context["statusClass"] = ["active" => "success", "pending" => "warning", "expired" => "danger", "cancelled" => "secondary"];
            // line 331
            yield "                                            ";
            $context["statusLabel"] = ["active" => "Actif", "pending" => "En attente", "expired" => "Expiré", "cancelled" => "Annulé"];
            // line 337
            yield "                                            <span class=\"badge bg-";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["statusClass"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 337), [], "array", true, true, false, 337) &&  !(null === (($_v0 = ($context["statusClass"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 337)] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["statusClass"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 337)] ?? null) : null), "html", null, true)) : ("secondary"));
            yield "\">
                                                ";
            // line 338
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["statusLabel"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 338), [], "array", true, true, false, 338) &&  !(null === (($_v2 = ($context["statusLabel"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 338)] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = ($context["statusLabel"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 338)] ?? null) : null), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 338), "html", null, true)));
            yield "
                                            </span>
                                        </div>
                                        <td class=\"text-center\">";
            // line 341
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "startsAt", [], "any", false, false, false, 341)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "startsAt", [], "any", false, false, false, 341), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</div>
                                        <td class=\"text-center\">";
            // line 342
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 342)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 342), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</div>
                                        <td class=\"text-end px-4\">
                                            <div class=\"d-flex gap-2 justify-content-end\">
                                                <a href=\"";
            // line 345
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "id", [], "any", false, false, false, 345)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary rounded-pill\" data-bs-toggle=\"tooltip\" title=\"Détails abonnement\">
                                                    <i class=\"fas fa-eye\"></i>
                                                </a>
                                                <a href=\"";
            // line 348
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "hmaService", [], "any", false, false, false, 348), "id", [], "any", false, false, false, 348)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info rounded-pill\" data-bs-toggle=\"tooltip\" title=\"Voir l'entreprise\">
                                                    <i class=\"fas fa-building\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 354
        if (!$context['_iterated']) {
            // line 355
            yield "                                    <tr>
                                        <td colspan=\"6\" class=\"text-center py-5\">
                                            <i class=\"fas fa-inbox display-4 text-muted\"></i>
                                            <p class=\"mt-3 fs-5\">Aucun abonnement n'est associé à ce plan pour le moment.</p>
                                        </div>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 362
        yield "                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    ";
        // line 367
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "subscriptions", [], "any", false, false, false, 367)) > 10)) {
            // line 368
            yield "                    <div class=\"d-flex justify-content-between align-items-center mt-4\">
                        <div>
                            <span class=\"text-muted\">Affichage de <span id=\"showingStart\">1</span> à <span id=\"showingEnd\">10</span> sur <span id=\"totalCount\">";
            // line 370
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "subscriptions", [], "any", false, false, false, 370)), "html", null, true);
            yield "</span> entrées</span>
                        </div>
                        <nav>
                            <ul class=\"pagination pagination-sm\" id=\"paginationControls\"></ul>
                        </nav>
                    </div>
                    ";
        }
        // line 377
        yield "                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmation activation/désactivation -->
<div class=\"modal fade\" id=\"toggleModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 rounded-4\">
            <div class=\"modal-header bg-";
        // line 387
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "isActive", [], "any", false, false, false, 387)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("success"));
        yield " text-white border-0\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-";
        // line 389
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "isActive", [], "any", false, false, false, 389)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("pause-circle") : ("play-circle"));
        yield " me-2\"></i>
                    ";
        // line 390
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "isActive", [], "any", false, false, false, 390)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
        yield " le plan
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body p-4\">
                <p class=\"mb-0\">
                    Êtes-vous sûr de vouloir ";
        // line 396
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "isActive", [], "any", false, false, false, 396)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("désactiver") : ("activer"));
        yield " le plan <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "displayName", [], "any", false, false, false, 396), "html", null, true);
        yield "</strong> ?
                    ";
        // line 397
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "isActive", [], "any", false, false, false, 397)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 398
            yield "                        <br><small class=\"text-muted\">Les entreprises avec ce plan ne pourront plus l'utiliser.</small>
                    ";
        } else {
            // line 400
            yield "                        <br><small class=\"text-muted\">Les entreprises pourront souscrire à ce plan.</small>
                    ";
        }
        // line 402
        yield "                </p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-secondary px-4 rounded-pill\" data-bs-dismiss=\"modal\">Annuler</button>
                <form action=\"";
        // line 406
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "id", [], "any", false, false, false, 406)]), "html", null, true);
        yield "\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 407
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle" . CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "id", [], "any", false, false, false, 407))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-";
        // line 408
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "isActive", [], "any", false, false, false, 408)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("success"));
        yield " px-4 rounded-pill\">
                        Confirmer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal de suppression -->
";
        // line 418
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "subscriptions", [], "any", false, false, false, 418)) == 0)) {
            // line 419
            yield "<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 rounded-4\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i>Supprimer le plan</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body p-4\">
                <p>Attention, cette action est irréversible. Voulez-vous vraiment supprimer le plan <strong>";
            // line 427
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "displayName", [], "any", false, false, false, 427), "html", null, true);
            yield "</strong> ?</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-secondary px-4 rounded-pill\" data-bs-dismiss=\"modal\">Annuler</button>
                <form action=\"";
            // line 431
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "id", [], "any", false, false, false, 431)]), "html", null, true);
            yield "\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 432
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "id", [], "any", false, false, false, 432))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn btn-danger px-4 rounded-pill\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        }
        // line 440
        yield "
<style>
.modern-header {
    min-height: 220px;
    position: relative;
    box-shadow: 0 25px 40px -12px rgba(0,0,0,0.4);
}
.floating-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 0;
}
.floating-bg .shape {
    position: absolute;
    background: rgba(255,255,255,0.15);
    border-radius: 50%;
    filter: blur(3px);
    pointer-events: none;
}
.shape-1 {
    width: 300px;
    height: 300px;
    top: -100px;
    right: -50px;
    animation: float 12s ease-in-out infinite;
}
.shape-2 {
    width: 200px;
    height: 200px;
    bottom: -50px;
    left: -20px;
    animation: float 15s ease-in-out infinite reverse;
}
.shape-3 {
    width: 150px;
    height: 150px;
    top: 30%;
    left: 20%;
    animation: float 10s ease-in-out infinite;
}
@keyframes float {
    0%,100%{ transform: translateY(0) rotate(0deg); }
    50%{ transform: translateY(-25px) rotate(5deg); }
}
.wave-bottom {
    position: absolute;
    bottom: -1px;
    left: 0;
    right: 0;
    line-height: 0;
    z-index: 1;
}
.wave-bottom svg {
    width: 100%;
    height: auto;
}
.icon-wrapper {
    backdrop-filter: blur(10px);
    transition: transform 0.3s ease, box-shadow 0.3s;
}
.icon-wrapper:hover {
    transform: scale(1.05) rotate(5deg);
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
}
.bg-gradient-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}
.bg-gradient-secondary {
    background: linear-gradient(135deg, #95a5a6 0%, #7f8c8d 100%);
}
.symbol-40px {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.sticky-top {
    top: 0;
    z-index: 10;
}
.backdrop-blur {
    backdrop-filter: blur(8px);
}
.badge.bg-light {
    color: #212529 !important;
    background-color: #f8f9fa !important;
    border: 1px solid #dee2e6;
}
.badge.bg-light i {
    font-size: 0.9em;
}
.description-box {
    background-color: rgba(13, 202, 240, 0.1);
    border-left: 4px solid #0dcaf0;
    color: #055160;
}
.description-box i {
    font-size: 1.2rem;
}
</style>

<!-- JavaScript pour la recherche, les filtres de date et la pagination -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterToggleBtn = document.getElementById('filterToggleBtn');
    const filterPanel = document.getElementById('filterPanel');
    const resetFiltersHeaderBtn = document.getElementById('resetFiltersBtn');
    const searchInput = document.getElementById('tableSearch');
    const dateStartFilter = document.getElementById('dateStartFilter');
    const dateEndFilter = document.getElementById('dateEndFilter');
    const applyFiltersBtn = document.getElementById('applyFiltersBtn');
    const table = document.getElementById('subscriptionsTable');
    const rows = table ? Array.from(table.querySelectorAll('tbody tr:not(.no-results)')) : [];
    const rowsPerPage = 10;
    let currentPage = 1;
    let filteredRows = rows;
    
    // Variables pour stocker les filtres actifs
    let activeSearchTerm = '';
    let activeDateStart = '';
    let activeDateEnd = '';

    // Toggle du panneau de filtres
    if (filterToggleBtn && filterPanel) {
        filterToggleBtn.addEventListener('click', function() {
            if (filterPanel.style.display === 'none' || filterPanel.style.display === '') {
                filterPanel.style.display = 'flex';
                filterToggleBtn.innerHTML = '<i class=\"fas fa-filter me-1\"></i>Masquer filtres';
            } else {
                filterPanel.style.display = 'none';
                filterToggleBtn.innerHTML = '<i class=\"fas fa-filter me-1\"></i>Filtres';
            }
        });
    }

    function filterTable() {
        filteredRows = rows.filter(row => {
            // Recherche texte
            const companyCell = row.querySelector('.company-cell')?.innerText.toLowerCase() || '';
            const statusCell = row.querySelector('.status-cell')?.innerText.toLowerCase() || '';
            const periodCell = row.cells[1]?.innerText.toLowerCase() || '';
            const matchesSearch = companyCell.includes(activeSearchTerm) || statusCell.includes(activeSearchTerm) || periodCell.includes(activeSearchTerm);
            
            // Filtre date début
            const rowStartDate = row.dataset.startDate || '';
            const matchesStartDate = !activeDateStart || (rowStartDate && rowStartDate >= activeDateStart);
            
            // Filtre date fin
            const rowEndDate = row.dataset.endDate || '';
            const matchesEndDate = !activeDateEnd || (rowEndDate && rowEndDate <= activeDateEnd);
            
            return matchesSearch && matchesStartDate && matchesEndDate;
        });
        
        currentPage = 1;
        updatePagination();
        displayRows();
        
        // Afficher/masquer le bouton réinitialiser
        if (activeSearchTerm || activeDateStart || activeDateEnd) {
            resetFiltersHeaderBtn.style.display = 'inline-block';
        } else {
            resetFiltersHeaderBtn.style.display = 'none';
        }
    }

    function applyFilters() {
        activeSearchTerm = searchInput.value.toLowerCase().trim();
        activeDateStart = dateStartFilter.value;
        activeDateEnd = dateEndFilter.value;
        filterTable();
        
        // Optionnel : fermer le panneau après application
        // filterPanel.style.display = 'none';
        // filterToggleBtn.innerHTML = '<i class=\"fas fa-filter me-1\"></i>Filtres';
    }

    function resetFilters() {
        searchInput.value = '';
        dateStartFilter.value = '';
        dateEndFilter.value = '';
        activeSearchTerm = '';
        activeDateStart = '';
        activeDateEnd = '';
        filterTable();
    }

    function displayRows() {
        if (!table) return;
        rows.forEach(row => row.style.display = 'none');
        const start = (currentPage - 1) * rowsPerPage;
        const end = Math.min(start + rowsPerPage, filteredRows.length);
        for (let i = start; i < end; i++) {
            filteredRows[i].style.display = '';
        }

        const showingStart = document.getElementById('showingStart');
        const showingEnd = document.getElementById('showingEnd');
        const totalCount = document.getElementById('totalCount');
        if (showingStart) showingStart.innerText = filteredRows.length ? start + 1 : 0;
        if (showingEnd) showingEnd.innerText = end;
        if (totalCount) totalCount.innerText = filteredRows.length;

        const noResultsRow = table.querySelector('tbody tr.no-results');
        if (filteredRows.length === 0) {
            if (!noResultsRow) {
                const tr = document.createElement('tr');
                tr.className = 'no-results';
                tr.innerHTML = '<td colspan=\"6\" class=\"text-center py-4\"><i class=\"fas fa-exclamation-circle me-2\"></i>Aucun résultat trouvé<\\/td>';
                table.querySelector('tbody').appendChild(tr);
            }
        } else if (noResultsRow) {
            noResultsRow.remove();
        }
    }

    function updatePagination() {
        const pageCount = Math.ceil(filteredRows.length / rowsPerPage);
        const pagination = document.getElementById('paginationControls');
        if (!pagination) return;
        pagination.innerHTML = '';

        if (pageCount <= 1) return;

        const prevLi = document.createElement('li');
        prevLi.className = `page-item \${currentPage === 1 ? 'disabled' : ''}`;
        prevLi.innerHTML = `<a class=\"page-link\" href=\"#\" data-page=\"\${currentPage - 1}\">Précédent</a>`;
        pagination.appendChild(prevLi);

        for (let i = 1; i <= pageCount; i++) {
            const li = document.createElement('li');
            li.className = `page-item \${i === currentPage ? 'active' : ''}`;
            li.innerHTML = `<a class=\"page-link\" href=\"#\" data-page=\"\${i}\">\${i}</a>`;
            pagination.appendChild(li);
        }

        const nextLi = document.createElement('li');
        nextLi.className = `page-item \${currentPage === pageCount ? 'disabled' : ''}`;
        nextLi.innerHTML = `<a class=\"page-link\" href=\"#\" data-page=\"\${currentPage + 1}\">Suivant</a>`;
        pagination.appendChild(nextLi);

        pagination.querySelectorAll('a.page-link').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const page = parseInt(e.target.dataset.page);
                if (isNaN(page) || page < 1 || page > pageCount) return;
                currentPage = page;
                displayRows();
                updatePagination();
            });
        });
    }

    if (applyFiltersBtn) applyFiltersBtn.addEventListener('click', applyFilters);
    if (resetFiltersHeaderBtn) resetFiltersHeaderBtn.addEventListener('click', resetFilters);

    // Initialisation
    if (rows.length > 0) {
        displayRows();
        updatePagination();
    }
    
    // Cacher le bouton réinitialiser au départ
    if (resetFiltersHeaderBtn) resetFiltersHeaderBtn.style.display = 'none';
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
        return "super_admin/subscription_plan/show.html.twig";
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
        return array (  798 => 440,  787 => 432,  783 => 431,  776 => 427,  766 => 419,  764 => 418,  751 => 408,  747 => 407,  743 => 406,  737 => 402,  733 => 400,  729 => 398,  727 => 397,  721 => 396,  712 => 390,  708 => 389,  703 => 387,  691 => 377,  681 => 370,  677 => 368,  675 => 367,  668 => 362,  656 => 355,  654 => 354,  643 => 348,  637 => 345,  631 => 342,  627 => 341,  621 => 338,  616 => 337,  613 => 331,  611 => 325,  605 => 322,  597 => 317,  593 => 316,  589 => 314,  583 => 310,  577 => 308,  575 => 307,  565 => 303,  560 => 302,  500 => 245,  485 => 232,  479 => 228,  473 => 224,  471 => 223,  465 => 220,  460 => 218,  456 => 217,  452 => 216,  445 => 212,  435 => 205,  428 => 201,  424 => 200,  420 => 199,  415 => 196,  411 => 194,  402 => 191,  399 => 190,  395 => 189,  391 => 187,  389 => 186,  385 => 184,  381 => 182,  377 => 180,  371 => 178,  367 => 176,  365 => 175,  361 => 173,  358 => 172,  354 => 170,  348 => 168,  344 => 166,  342 => 165,  338 => 163,  336 => 162,  332 => 160,  329 => 159,  327 => 158,  322 => 155,  316 => 152,  313 => 151,  310 => 150,  304 => 147,  301 => 146,  298 => 145,  292 => 142,  289 => 141,  286 => 140,  280 => 137,  277 => 136,  274 => 135,  268 => 132,  265 => 131,  263 => 130,  255 => 124,  249 => 121,  245 => 119,  243 => 118,  233 => 111,  224 => 105,  215 => 99,  202 => 89,  193 => 83,  184 => 77,  165 => 60,  159 => 59,  148 => 54,  144 => 53,  138 => 51,  133 => 50,  129 => 49,  110 => 33,  103 => 28,  97 => 27,  91 => 24,  71 => 6,  64 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "super_admin/subscription_plan/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\subscription_plan\\show.html.twig");
    }
}
