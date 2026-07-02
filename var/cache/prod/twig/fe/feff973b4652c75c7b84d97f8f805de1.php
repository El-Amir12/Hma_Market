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
class __TwigTemplate_5622a67d192e533c9b41995655cb5cb6 extends Template
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
        yield "Plans d'abonnement";
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 32
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 33
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show rounded-4 shadow-sm mb-4\">
                ";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "
    <!-- Bouton nouveau plan -->
    <div class=\"d-flex justify-content-end mb-4\">
        <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_new");
        yield "\" class=\"btn btn-primary btn-lg rounded-pill px-4 shadow-sm\">
            <i class=\"bi bi-plus-circle me-2\"></i>Nouveau plan
        </a>
    </div>

    <!-- Grille des plans -->
    <div class=\"row g-4\">
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["plans"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 50
            yield "            <div class=\"col-xl-4 col-lg-6\">
                <div class=\"card h-100 border-0 shadow-lg hover-lift rounded-4 overflow-hidden d-flex flex-column\">
                    <!-- En-tête avec nom et badge illimité/limité -->
                    ";
            // line 53
            $context["bgClass"] = "bg-gradient-secondary";
            // line 54
            yield "                    ";
            if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 54)) == "freemium")) {
                // line 55
                yield "                        ";
                $context["bgClass"] = "bg-gradient-freemium";
                // line 56
                yield "                    ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 56)) == "basic")) {
                // line 57
                yield "                        ";
                $context["bgClass"] = "bg-gradient-basic";
                // line 58
                yield "                    ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 58)) == "premium")) {
                // line 59
                yield "                        ";
                $context["bgClass"] = "bg-gradient-premium";
                // line 60
                yield "                    ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 60)) == "trial")) {
                // line 61
                yield "                        ";
                $context["bgClass"] = "bg-gradient-trial";
                // line 62
                yield "                    ";
            }
            // line 63
            yield "                    
                    <div class=\"card-header ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["bgClass"] ?? null), "html", null, true);
            yield " text-white py-3 d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0 fw-bold\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "displayName", [], "any", false, false, false, 65), "html", null, true);
            yield "</h5>
                        <span class=\"badge bg-white text-dark rounded-pill px-3 py-2\">
                            ";
            // line 67
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isUnlimited", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Illimité";
            } else {
                yield "Limité";
            }
            // line 68
            yield "                        </span>
                    </div>

                    <div class=\"card-body p-4 d-flex flex-column flex-grow-1\">
                        <!-- Prix -->
                        <div class=\"text-center mb-4\">
                            <h2 class=\"display-6 fw-bold text-primary mb-0\">";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "priceMonthly", [], "any", false, false, false, 74), 0, ",", " "), "html", null, true);
            yield " FCFA</h2>
                            <p class=\"text-muted\">/mois • <small>";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "priceYearly", [], "any", false, false, false, 75), 0, ",", " "), "html", null, true);
            yield " FCFA/an</small></p>
                        </div>

                        <!-- Section Commerce -->
                        <div class=\"mb-3\">
                            <h6 class=\"fw-bold text-primary mb-2\">
                                <i class=\"bi bi-shop me-2\"></i>Commerce
                            </h6>
                            <div class=\"mb-2\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"bi bi-people-fill text-success me-3 fs-5\"></i>
                                    <span>
                                        <strong>Utilisateurs/rôle :</strong> 
                                        ";
            // line 88
            $context["maxUsers"] = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxUsersPerRole", [], "any", false, false, false, 88);
            // line 89
            yield "                                        ";
            if (((null === ($context["maxUsers"] ?? null)) || (($context["maxUsers"] ?? null) >= 999999999))) {
                // line 90
                yield "                                            ♾️ Illimité
                                        ";
            } else {
                // line 92
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["maxUsers"] ?? null)), "html", null, true);
                yield "
                                        ";
            }
            // line 94
            yield "                                    </span>
                                </div>
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"bi bi-box-fill text-info me-3 fs-5\"></i>
                                    <span>
                                        <strong>Produits :</strong> 
                                        ";
            // line 100
            $context["maxProducts"] = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxProducts", [], "any", false, false, false, 100);
            // line 101
            yield "                                        ";
            if (((null === ($context["maxProducts"] ?? null)) || (($context["maxProducts"] ?? null) >= 999999999))) {
                // line 102
                yield "                                            ♾️ Illimité
                                        ";
            } else {
                // line 104
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["maxProducts"] ?? null)), "html", null, true);
                yield "
                                        ";
            }
            // line 106
            yield "                                    </span>
                                </div>
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"bi bi-cart-fill text-warning me-3 fs-5\"></i>
                                    <span>
                                        <strong>Commandes/mois :</strong> 
                                        ";
            // line 112
            $context["maxOrders"] = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxOrdersPerMonth", [], "any", false, false, false, 112);
            // line 113
            yield "                                        ";
            if (((null === ($context["maxOrders"] ?? null)) || (($context["maxOrders"] ?? null) >= 999999999))) {
                // line 114
                yield "                                            ♾️ Illimité
                                        ";
            } else {
                // line 116
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["maxOrders"] ?? null)), "html", null, true);
                yield "
                                        ";
            }
            // line 118
            yield "                                    </span>
                                </div>
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"bi bi-tags-fill text-primary me-3 fs-5\"></i>
                                    <span>
                                        <strong>Catégories :</strong> 
                                        ";
            // line 124
            $context["maxCategories"] = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxCategories", [], "any", false, false, false, 124);
            // line 125
            yield "                                        ";
            if (((null === ($context["maxCategories"] ?? null)) || (($context["maxCategories"] ?? null) >= 999999999))) {
                // line 126
                yield "                                            ♾️ Illimité
                                        ";
            } else {
                // line 128
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["maxCategories"] ?? null)), "html", null, true);
                yield "
                                        ";
            }
            // line 130
            yield "                                    </span>
                                </div>
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"bi bi-truck text-secondary me-3 fs-5\"></i>
                                    <span>
                                        <strong>Fournisseurs :</strong> 
                                        ";
            // line 136
            $context["maxSuppliers"] = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxSuppliers", [], "any", false, false, false, 136);
            // line 137
            yield "                                        ";
            if (((null === ($context["maxSuppliers"] ?? null)) || (($context["maxSuppliers"] ?? null) >= 999999999))) {
                // line 138
                yield "                                            ♾️ Illimité
                                        ";
            } else {
                // line 140
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["maxSuppliers"] ?? null)), "html", null, true);
                yield "
                                        ";
            }
            // line 142
            yield "                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Section Restaurant (Recettes) -->
                        <div class=\"mb-3 pt-2 border-top\">
                            <h6 class=\"fw-bold text-success mb-2\">
                                <i class=\"bi bi-egg-fried me-2\"></i>Restaurant
                            </h6>
                            <div class=\"mb-2\">
                                <!-- Recettes -->
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"bi bi-book-fill text-success me-3 fs-5\"></i>
                                    <span>
                                        <strong>Recettes :</strong> 
                                        ";
            // line 158
            $context["maxRecipes"] = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxRecipes", [], "any", false, false, false, 158);
            // line 159
            yield "                                        ";
            if (((null === ($context["maxRecipes"] ?? null)) || (($context["maxRecipes"] ?? null) >= 999999999))) {
                // line 160
                yield "                                            ♾️ Illimité
                                        ";
            } else {
                // line 162
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["maxRecipes"] ?? null)), "html", null, true);
                yield "
                                        ";
            }
            // line 164
            yield "                                    </span>
                                </div>
                                
                                <!-- Catégories de recettes -->
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"bi bi-tag-fill text-info me-3 fs-5\"></i>
                                    <span>
                                        <strong>Catégories de recettes :</strong> 
                                        ";
            // line 172
            $context["maxRecipeCategories"] = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxRecipeCategories", [], "any", false, false, false, 172);
            // line 173
            yield "                                        ";
            if (((null === ($context["maxRecipeCategories"] ?? null)) || (($context["maxRecipeCategories"] ?? null) >= 999999999))) {
                // line 174
                yield "                                            ♾️ Illimité
                                        ";
            } else {
                // line 176
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["maxRecipeCategories"] ?? null)), "html", null, true);
                yield "
                                        ";
            }
            // line 178
            yield "                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Nombre de fonctionnalités -->
                        ";
            // line 184
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "features", [], "any", false, false, false, 184)) > 0)) {
                // line 185
                yield "                            <div class=\"d-flex align-items-center mb-3\">
                                <i class=\"bi bi-star-fill text-warning me-3 fs-5\"></i>
                                <span><strong>Fonctionnalités :</strong> ";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "features", [], "any", false, false, false, 187)), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            // line 190
            yield "
                        <!-- Statut actif/inactif et nombre d'abonnements -->
                        <div class=\"d-flex justify-content-between align-items-center mt-auto mb-3\">
                            <span class=\"badge bg-";
            // line 193
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 193)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("success") : ("secondary"));
            yield " fs-6 p-2\">
                                <i class=\"bi bi-";
            // line 194
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 194)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("check-circle") : ("x-circle"));
            yield " me-1\"></i>
                                ";
            // line 195
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 195)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                            </span>
                            <small class=\"text-muted\">";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "subscriptions", [], "any", false, false, false, 197)), "html", null, true);
            yield " abonnement(s)</small>
                        </div>

                        <!-- Actions centrées -->
                        <div class=\"d-flex gap-2 justify-content-center mt-2\">
                            <a href=\"";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 202)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary rounded-pill px-3\" title=\"Détails\">
                                <i class=\"bi bi-eye\"></i>
                            </a>
                            <a href=\"";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 205)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-warning rounded-pill px-3\" title=\"Modifier\">
                                <i class=\"bi bi-pencil\"></i>
                            </a>
                            <button type=\"button\" class=\"btn btn-sm btn-outline-";
            // line 208
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 208)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("danger") : ("success"));
            yield " rounded-pill px-3\" 
                                    data-bs-toggle=\"modal\" data-bs-target=\"#toggleModal";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 209), "html", null, true);
            yield "\" 
                                    title=\"";
            // line 210
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 210)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "\">
                                <i class=\"bi bi-";
            // line 211
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 211)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("pause-fill") : ("play-fill"));
            yield "\"></i>
                            </button>
                            ";
            // line 213
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "subscriptions", [], "any", false, false, false, 213)) == 0)) {
                // line 214
                yield "                                <button type=\"button\" class=\"btn btn-sm btn-outline-danger rounded-pill px-3\" 
                                        data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
                // line 215
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 215), "html", null, true);
                yield "\" 
                                        title=\"Supprimer\">
                                    <i class=\"bi bi-trash\"></i>
                                </button>
                            ";
            }
            // line 220
            yield "                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Toggle -->
            <div class=\"modal fade\" id=\"toggleModal";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 226), "html", null, true);
            yield "\" tabindex=\"-1\">
                <div class=\"modal-dialog modal-dialog-centered\">
                    <div class=\"modal-content border-0 rounded-4\">
                        <div class=\"modal-header bg-";
            // line 229
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 229)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("success"));
            yield " text-white border-0\">
                            <h5 class=\"modal-title\">
                                <i class=\"bi bi-";
            // line 231
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 231)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("pause-circle") : ("play-circle"));
            yield " me-2\"></i>
                                ";
            // line 232
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 232)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield " le plan
                            </h5>
                            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                        </div>
                        <div class=\"modal-body p-4\">
                            <p class=\"mb-0\">
                                Êtes-vous sûr de vouloir ";
            // line 238
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 238)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("désactiver") : ("activer"));
            yield " le plan <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "displayName", [], "any", false, false, false, 238), "html", null, true);
            yield "</strong> ?
                                ";
            // line 239
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 239)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 240
                yield "                                    <br><small class=\"text-muted\">Les entreprises avec ce plan ne pourront plus l'utiliser.</small>
                                ";
            } else {
                // line 242
                yield "                                    <br><small class=\"text-muted\">Les entreprises pourront souscrire à ce plan.</small>
                                ";
            }
            // line 244
            yield "                            </p>
                        </div>
                        <div class=\"modal-footer border-0 justify-content-center\">
                            <button type=\"button\" class=\"btn btn-secondary px-4 rounded-pill\" data-bs-dismiss=\"modal\">Annuler</button>
                            <form action=\"";
            // line 248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 248)]), "html", null, true);
            yield "\" method=\"post\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle" . CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 249))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-";
            // line 250
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "isActive", [], "any", false, false, false, 250)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("success"));
            yield " px-4 rounded-pill\">Confirmer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Delete -->
            ";
            // line 258
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "subscriptions", [], "any", false, false, false, 258)) == 0)) {
                // line 259
                yield "            <div class=\"modal fade\" id=\"deleteModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 259), "html", null, true);
                yield "\" tabindex=\"-1\">
                <div class=\"modal-dialog modal-dialog-centered\">
                    <div class=\"modal-content border-0 rounded-4\">
                        <div class=\"modal-header bg-danger text-white border-0\">
                            <h5 class=\"modal-title\">
                                <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>Supprimer le plan
                            </h5>
                            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                        </div>
                        <div class=\"modal-body p-4\">
                            <p>Attention, cette action est irréversible. Voulez-vous vraiment supprimer le plan <strong>";
                // line 269
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "displayName", [], "any", false, false, false, 269), "html", null, true);
                yield "</strong> ?</p>
                        </div>
                        <div class=\"modal-footer border-0 justify-content-center\">
                            <button type=\"button\" class=\"btn btn-secondary px-4 rounded-pill\" data-bs-dismiss=\"modal\">Annuler</button>
                            <form action=\"";
                // line 273
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 273)]), "html", null, true);
                yield "\" method=\"post\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 274
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 274))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"btn btn-danger px-4 rounded-pill\">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            // line 282
            yield "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 283
            yield "            <!-- Aucun plan trouvé -->
            <div class=\"col-12 text-center py-5\">
                <i class=\"bi bi-tags display-1 text-muted\"></i>
                <p class=\"mt-3 fs-4\">Aucun plan d'abonnement.</p>
                <a href=\"";
            // line 287
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_new");
            yield "\" class=\"btn btn-primary btn-lg rounded-pill px-5\">Créer le premier</a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['plan'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 290
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
.bg-gradient-trial    { background: linear-gradient(135deg, #10b981, #059669); }
.bg-gradient-secondary{ background: linear-gradient(135deg, #9ca3af, #6b7280); }

/* Animation des boutons */
.btn {
    transition: all 0.2s ease;
}
.btn:hover {
    transform: translateY(-2px);
}
</style>
";
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
        return array (  611 => 290,  602 => 287,  596 => 283,  591 => 282,  580 => 274,  576 => 273,  569 => 269,  555 => 259,  553 => 258,  542 => 250,  538 => 249,  534 => 248,  528 => 244,  524 => 242,  520 => 240,  518 => 239,  512 => 238,  503 => 232,  499 => 231,  494 => 229,  488 => 226,  480 => 220,  472 => 215,  469 => 214,  467 => 213,  462 => 211,  458 => 210,  454 => 209,  450 => 208,  444 => 205,  438 => 202,  430 => 197,  425 => 195,  421 => 194,  417 => 193,  412 => 190,  406 => 187,  402 => 185,  400 => 184,  392 => 178,  386 => 176,  382 => 174,  379 => 173,  377 => 172,  367 => 164,  361 => 162,  357 => 160,  354 => 159,  352 => 158,  334 => 142,  328 => 140,  324 => 138,  321 => 137,  319 => 136,  311 => 130,  305 => 128,  301 => 126,  298 => 125,  296 => 124,  288 => 118,  282 => 116,  278 => 114,  275 => 113,  273 => 112,  265 => 106,  259 => 104,  255 => 102,  252 => 101,  250 => 100,  242 => 94,  236 => 92,  232 => 90,  229 => 89,  227 => 88,  211 => 75,  207 => 74,  199 => 68,  193 => 67,  188 => 65,  184 => 64,  181 => 63,  178 => 62,  175 => 61,  172 => 60,  169 => 59,  166 => 58,  163 => 57,  160 => 56,  157 => 55,  154 => 54,  152 => 53,  147 => 50,  142 => 49,  132 => 42,  127 => 39,  121 => 38,  111 => 34,  106 => 33,  101 => 32,  97 => 31,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "super_admin/subscription_plan/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\subscription_plan\\index.html.twig");
    }
}
