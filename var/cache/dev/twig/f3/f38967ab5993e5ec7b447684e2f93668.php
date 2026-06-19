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
class __TwigTemplate_cde380ce65538b07f2c38d85b90708fc extends Template
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["plans"]) || array_key_exists("plans", $context) ? $context["plans"] : (function () { throw new RuntimeError('Variable "plans" does not exist.', 49, $this->source); })()));
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["bgClass"]) || array_key_exists("bgClass", $context) ? $context["bgClass"] : (function () { throw new RuntimeError('Variable "bgClass" does not exist.', 64, $this->source); })()), "html", null, true);
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
            if (((null === (isset($context["maxUsers"]) || array_key_exists("maxUsers", $context) ? $context["maxUsers"] : (function () { throw new RuntimeError('Variable "maxUsers" does not exist.', 89, $this->source); })())) || ((isset($context["maxUsers"]) || array_key_exists("maxUsers", $context) ? $context["maxUsers"] : (function () { throw new RuntimeError('Variable "maxUsers" does not exist.', 89, $this->source); })()) >= 999999999))) {
                // line 90
                yield "                                            ♾️ Illimité
                                        ";
            } else {
                // line 92
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["maxUsers"]) || array_key_exists("maxUsers", $context) ? $context["maxUsers"] : (function () { throw new RuntimeError('Variable "maxUsers" does not exist.', 92, $this->source); })())), "html", null, true);
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
            if (((null === (isset($context["maxProducts"]) || array_key_exists("maxProducts", $context) ? $context["maxProducts"] : (function () { throw new RuntimeError('Variable "maxProducts" does not exist.', 101, $this->source); })())) || ((isset($context["maxProducts"]) || array_key_exists("maxProducts", $context) ? $context["maxProducts"] : (function () { throw new RuntimeError('Variable "maxProducts" does not exist.', 101, $this->source); })()) >= 999999999))) {
                // line 102
                yield "                                            ♾️ Illimité
                                        ";
            } else {
                // line 104
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["maxProducts"]) || array_key_exists("maxProducts", $context) ? $context["maxProducts"] : (function () { throw new RuntimeError('Variable "maxProducts" does not exist.', 104, $this->source); })())), "html", null, true);
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
            if (((null === (isset($context["maxOrders"]) || array_key_exists("maxOrders", $context) ? $context["maxOrders"] : (function () { throw new RuntimeError('Variable "maxOrders" does not exist.', 113, $this->source); })())) || ((isset($context["maxOrders"]) || array_key_exists("maxOrders", $context) ? $context["maxOrders"] : (function () { throw new RuntimeError('Variable "maxOrders" does not exist.', 113, $this->source); })()) >= 999999999))) {
                // line 114
                yield "                                            ♾️ Illimité
                                        ";
            } else {
                // line 116
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["maxOrders"]) || array_key_exists("maxOrders", $context) ? $context["maxOrders"] : (function () { throw new RuntimeError('Variable "maxOrders" does not exist.', 116, $this->source); })())), "html", null, true);
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
            if (((null === (isset($context["maxCategories"]) || array_key_exists("maxCategories", $context) ? $context["maxCategories"] : (function () { throw new RuntimeError('Variable "maxCategories" does not exist.', 125, $this->source); })())) || ((isset($context["maxCategories"]) || array_key_exists("maxCategories", $context) ? $context["maxCategories"] : (function () { throw new RuntimeError('Variable "maxCategories" does not exist.', 125, $this->source); })()) >= 999999999))) {
                // line 126
                yield "                                            ♾️ Illimité
                                        ";
            } else {
                // line 128
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["maxCategories"]) || array_key_exists("maxCategories", $context) ? $context["maxCategories"] : (function () { throw new RuntimeError('Variable "maxCategories" does not exist.', 128, $this->source); })())), "html", null, true);
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
            if (((null === (isset($context["maxSuppliers"]) || array_key_exists("maxSuppliers", $context) ? $context["maxSuppliers"] : (function () { throw new RuntimeError('Variable "maxSuppliers" does not exist.', 137, $this->source); })())) || ((isset($context["maxSuppliers"]) || array_key_exists("maxSuppliers", $context) ? $context["maxSuppliers"] : (function () { throw new RuntimeError('Variable "maxSuppliers" does not exist.', 137, $this->source); })()) >= 999999999))) {
                // line 138
                yield "                                            ♾️ Illimité
                                        ";
            } else {
                // line 140
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["maxSuppliers"]) || array_key_exists("maxSuppliers", $context) ? $context["maxSuppliers"] : (function () { throw new RuntimeError('Variable "maxSuppliers" does not exist.', 140, $this->source); })())), "html", null, true);
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
            if (((null === (isset($context["maxRecipes"]) || array_key_exists("maxRecipes", $context) ? $context["maxRecipes"] : (function () { throw new RuntimeError('Variable "maxRecipes" does not exist.', 159, $this->source); })())) || ((isset($context["maxRecipes"]) || array_key_exists("maxRecipes", $context) ? $context["maxRecipes"] : (function () { throw new RuntimeError('Variable "maxRecipes" does not exist.', 159, $this->source); })()) >= 999999999))) {
                // line 160
                yield "                                            ♾️ Illimité
                                        ";
            } else {
                // line 162
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["maxRecipes"]) || array_key_exists("maxRecipes", $context) ? $context["maxRecipes"] : (function () { throw new RuntimeError('Variable "maxRecipes" does not exist.', 162, $this->source); })())), "html", null, true);
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
            if (((null === (isset($context["maxRecipeCategories"]) || array_key_exists("maxRecipeCategories", $context) ? $context["maxRecipeCategories"] : (function () { throw new RuntimeError('Variable "maxRecipeCategories" does not exist.', 173, $this->source); })())) || ((isset($context["maxRecipeCategories"]) || array_key_exists("maxRecipeCategories", $context) ? $context["maxRecipeCategories"] : (function () { throw new RuntimeError('Variable "maxRecipeCategories" does not exist.', 173, $this->source); })()) >= 999999999))) {
                // line 174
                yield "                                            ♾️ Illimité
                                        ";
            } else {
                // line 176
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["maxRecipeCategories"]) || array_key_exists("maxRecipeCategories", $context) ? $context["maxRecipeCategories"] : (function () { throw new RuntimeError('Variable "maxRecipeCategories" does not exist.', 176, $this->source); })())), "html", null, true);
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
        return array (  641 => 290,  632 => 287,  626 => 283,  621 => 282,  610 => 274,  606 => 273,  599 => 269,  585 => 259,  583 => 258,  572 => 250,  568 => 249,  564 => 248,  558 => 244,  554 => 242,  550 => 240,  548 => 239,  542 => 238,  533 => 232,  529 => 231,  524 => 229,  518 => 226,  510 => 220,  502 => 215,  499 => 214,  497 => 213,  492 => 211,  488 => 210,  484 => 209,  480 => 208,  474 => 205,  468 => 202,  460 => 197,  455 => 195,  451 => 194,  447 => 193,  442 => 190,  436 => 187,  432 => 185,  430 => 184,  422 => 178,  416 => 176,  412 => 174,  409 => 173,  407 => 172,  397 => 164,  391 => 162,  387 => 160,  384 => 159,  382 => 158,  364 => 142,  358 => 140,  354 => 138,  351 => 137,  349 => 136,  341 => 130,  335 => 128,  331 => 126,  328 => 125,  326 => 124,  318 => 118,  312 => 116,  308 => 114,  305 => 113,  303 => 112,  295 => 106,  289 => 104,  285 => 102,  282 => 101,  280 => 100,  272 => 94,  266 => 92,  262 => 90,  259 => 89,  257 => 88,  241 => 75,  237 => 74,  229 => 68,  223 => 67,  218 => 65,  214 => 64,  211 => 63,  208 => 62,  205 => 61,  202 => 60,  199 => 59,  196 => 58,  193 => 57,  190 => 56,  187 => 55,  184 => 54,  182 => 53,  177 => 50,  172 => 49,  162 => 42,  157 => 39,  151 => 38,  141 => 34,  136 => 33,  131 => 32,  127 => 31,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
            <div class=\"alert alert-{{ label }} alert-dismissible fade show rounded-4 shadow-sm mb-4\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
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
                    {% set bgClass = 'bg-gradient-secondary' %}
                    {% if plan.name|lower == 'freemium' %}
                        {% set bgClass = 'bg-gradient-freemium' %}
                    {% elseif plan.name|lower == 'basic' %}
                        {% set bgClass = 'bg-gradient-basic' %}
                    {% elseif plan.name|lower == 'premium' %}
                        {% set bgClass = 'bg-gradient-premium' %}
                    {% elseif plan.name|lower == 'trial' %}
                        {% set bgClass = 'bg-gradient-trial' %}
                    {% endif %}
                    
                    <div class=\"card-header {{ bgClass }} text-white py-3 d-flex justify-content-between align-items-center\">
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
                                        {% set maxUsers = plan.maxUsersPerRole %}
                                        {% if maxUsers is null or maxUsers >= 999999999 %}
                                            ♾️ Illimité
                                        {% else %}
                                            {{ maxUsers|number_format }}
                                        {% endif %}
                                    </span>
                                </div>
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"bi bi-box-fill text-info me-3 fs-5\"></i>
                                    <span>
                                        <strong>Produits :</strong> 
                                        {% set maxProducts = plan.maxProducts %}
                                        {% if maxProducts is null or maxProducts >= 999999999 %}
                                            ♾️ Illimité
                                        {% else %}
                                            {{ maxProducts|number_format }}
                                        {% endif %}
                                    </span>
                                </div>
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"bi bi-cart-fill text-warning me-3 fs-5\"></i>
                                    <span>
                                        <strong>Commandes/mois :</strong> 
                                        {% set maxOrders = plan.maxOrdersPerMonth %}
                                        {% if maxOrders is null or maxOrders >= 999999999 %}
                                            ♾️ Illimité
                                        {% else %}
                                            {{ maxOrders|number_format }}
                                        {% endif %}
                                    </span>
                                </div>
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"bi bi-tags-fill text-primary me-3 fs-5\"></i>
                                    <span>
                                        <strong>Catégories :</strong> 
                                        {% set maxCategories = plan.maxCategories %}
                                        {% if maxCategories is null or maxCategories >= 999999999 %}
                                            ♾️ Illimité
                                        {% else %}
                                            {{ maxCategories|number_format }}
                                        {% endif %}
                                    </span>
                                </div>
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"bi bi-truck text-secondary me-3 fs-5\"></i>
                                    <span>
                                        <strong>Fournisseurs :</strong> 
                                        {% set maxSuppliers = plan.maxSuppliers %}
                                        {% if maxSuppliers is null or maxSuppliers >= 999999999 %}
                                            ♾️ Illimité
                                        {% else %}
                                            {{ maxSuppliers|number_format }}
                                        {% endif %}
                                    </span>
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
                                        {% set maxRecipes = plan.maxRecipes %}
                                        {% if maxRecipes is null or maxRecipes >= 999999999 %}
                                            ♾️ Illimité
                                        {% else %}
                                            {{ maxRecipes|number_format }}
                                        {% endif %}
                                    </span>
                                </div>
                                
                                <!-- Catégories de recettes -->
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"bi bi-tag-fill text-info me-3 fs-5\"></i>
                                    <span>
                                        <strong>Catégories de recettes :</strong> 
                                        {% set maxRecipeCategories = plan.maxRecipeCategories %}
                                        {% if maxRecipeCategories is null or maxRecipeCategories >= 999999999 %}
                                            ♾️ Illimité
                                        {% else %}
                                            {{ maxRecipeCategories|number_format }}
                                        {% endif %}
                                    </span>
                                </div>
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
                            <a href=\"{{ path('app_super_admin_subscription_plan_show', {'id': plan.id}) }}\" class=\"btn btn-sm btn-outline-primary rounded-pill px-3\" title=\"Détails\">
                                <i class=\"bi bi-eye\"></i>
                            </a>
                            <a href=\"{{ path('app_super_admin_subscription_plan_edit', {'id': plan.id}) }}\" class=\"btn btn-sm btn-outline-warning rounded-pill px-3\" title=\"Modifier\">
                                <i class=\"bi bi-pencil\"></i>
                            </a>
                            <button type=\"button\" class=\"btn btn-sm btn-outline-{{ plan.isActive ? 'danger' : 'success' }} rounded-pill px-3\" 
                                    data-bs-toggle=\"modal\" data-bs-target=\"#toggleModal{{ plan.id }}\" 
                                    title=\"{{ plan.isActive ? 'Désactiver' : 'Activer' }}\">
                                <i class=\"bi bi-{{ plan.isActive ? 'pause-fill' : 'play-fill' }}\"></i>
                            </button>
                            {% if plan.subscriptions|length == 0 %}
                                <button type=\"button\" class=\"btn btn-sm btn-outline-danger rounded-pill px-3\" 
                                        data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ plan.id }}\" 
                                        title=\"Supprimer\">
                                    <i class=\"bi bi-trash\"></i>
                                </button>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Toggle -->
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

            <!-- Modal Delete -->
            {% if plan.subscriptions|length == 0 %}
            <div class=\"modal fade\" id=\"deleteModal{{ plan.id }}\" tabindex=\"-1\">
                <div class=\"modal-dialog modal-dialog-centered\">
                    <div class=\"modal-content border-0 rounded-4\">
                        <div class=\"modal-header bg-danger text-white border-0\">
                            <h5 class=\"modal-title\">
                                <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>Supprimer le plan
                            </h5>
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
{% endblock %}", "super_admin/subscription_plan/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\subscription_plan\\index.html.twig");
    }
}
