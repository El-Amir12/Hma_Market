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
class __TwigTemplate_dec786ae6060d62e99aebebe91c3afac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/subscription_plan/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/subscription_plan/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 3, $this->source); })()), "displayName", [], "any", false, false, false, 3), "html", null, true);
        yield " - Détails du plan";
        
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
                    <div class=\"d-flex align-items-center gap-4\">
                        <div class=\"icon-wrapper bg-white bg-opacity-20 backdrop-blur rounded-4 p-4\">
                            <i class=\"bi bi-tag text-white display-4\"></i>
                        </div>
                        <div>
                            <h1 class=\"display-4 fw-bold mb-2\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 23, $this->source); })()), "displayName", [], "any", false, false, false, 23), "html", null, true);
        yield "</h1>
                            <p class=\"text-white-50 mb-0 fs-5\">Détails du plan d'abonnement • 
                                <span class=\"badge bg-white text-dark rounded-pill px-3 py-2 ms-2\">
                                    ";
        // line 26
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 26, $this->source); })()), "isUnlimited", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Illimité";
        } else {
            yield "Limité";
        }
        // line 27
        yield "                                </span>
                            </p>
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
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "flashes", [], "any", false, false, false, 42));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 43
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 44
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show rounded-4 shadow-sm mb-4 border-0\" role=\"alert\">
                <div class=\"d-flex align-items-center\">
                    <i class=\"bi bi-";
                // line 46
                yield ((($context["label"] == "success")) ? ("check-circle-fill") : ("exclamation-triangle-fill"));
                yield " fs-4 me-3\"></i>
                    <span>";
                // line 47
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
            // line 52
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "
    <!-- Détails du plan -->
    <div class=\"row justify-content-center mb-5\">
        <div class=\"col-lg-10\">
            <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                <div class=\"card-header bg-gradient-primary text-white py-3 d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0 fw-bold\"><i class=\"bi bi-info-circle-fill me-2\"></i>Informations générales</h5>
                </div>
                <div class=\"card-body p-4\">
                    <!-- Informations générales -->
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <ul class=\"list-unstyled\">
                                <li class=\"mb-3 d-flex align-items-center\">
                                    <div class=\"bg-primary bg-opacity-10 p-2 rounded-3 me-3\">
                                        <i class=\"bi bi-tag-fill text-primary\"></i>
                                    </div>
                                    <div><strong>Nom technique :</strong> ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 70, $this->source); })()), "name", [], "any", false, false, false, 70), "html", null, true);
        yield "</div>
                                </li>
                                <li class=\"mb-3 d-flex align-items-center\">
                                    <div class=\"bg-success bg-opacity-10 p-2 rounded-3 me-3\">
                                        <i class=\"bi bi-calendar-check text-success\"></i>
                                    </div>
                                    <div><strong>Créé le :</strong> ";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 76, $this->source); })()), "createdAt", [], "any", false, false, false, 76), "d/m/Y H:i"), "html", null, true);
        yield "</div>
                                </li>
                                <li class=\"mb-3 d-flex align-items-center\">
                                    <div class=\"bg-warning bg-opacity-10 p-2 rounded-3 me-3\">
                                        <i class=\"bi bi-arrow-repeat text-warning\"></i>
                                    </div>
                                    <div><strong>Dernière mise à jour :</strong> ";
        // line 82
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 82, $this->source); })()), "updatedAt", [], "any", false, false, false, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 82, $this->source); })()), "updatedAt", [], "any", false, false, false, 82), "d/m/Y H:i"), "html", null, true)) : ("Jamais"));
        yield "</div>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-md-6\">
                            <ul class=\"list-unstyled\">
                                <li class=\"mb-3 d-flex align-items-center\">
                                    <div class=\"bg-success bg-opacity-10 p-2 rounded-3 me-3\">
                                        <i class=\"bi bi-currency-exchange text-success\"></i>
                                    </div>
                                    <div><strong>Prix mensuel :</strong> ";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 92, $this->source); })()), "priceMonthly", [], "any", false, false, false, 92), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
                                </li>
                                <li class=\"mb-3 d-flex align-items-center\">
                                    <div class=\"bg-warning bg-opacity-10 p-2 rounded-3 me-3\">
                                        <i class=\"bi bi-currency-exchange text-warning\"></i>
                                    </div>
                                    <div><strong>Prix annuel :</strong> ";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 98, $this->source); })()), "priceYearly", [], "any", false, false, false, 98), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
                                </li>
                                <li class=\"mb-3 d-flex align-items-center\">
                                    <div class=\"bg-info bg-opacity-10 p-2 rounded-3 me-3\">
                                        <i class=\"bi bi-bar-chart text-info\"></i>
                                    </div>
                                    <div><strong>Abonnements :</strong> ";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 104, $this->source); })()), "subscriptions", [], "any", false, false, false, 104)), "html", null, true);
        yield "</div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Description (déplacée ici, avant les limites) -->
                    ";
        // line 111
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 111, $this->source); })()), "description", [], "any", false, false, false, 111)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 112
            yield "                        <div class=\"description-box p-3 rounded-3 mt-4 mb-4\">
                            <i class=\"bi bi-quote me-2 text-info\"></i>
                            <em>";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 114, $this->source); })()), "description", [], "any", false, false, false, 114), "html", null, true);
            yield "</em>
                        </div>
                    ";
        }
        // line 117
        yield "
                    <hr class=\"my-4\">

                    <!-- Limites en badges -->
                    <h6 class=\"fw-bold mb-3\"><i class=\"bi bi-speedometer2 me-2\"></i>Limites du plan</h6>
                    <div class=\"d-flex flex-wrap gap-2 mb-4\">
                        ";
        // line 123
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 123, $this->source); })()), "maxUsersPerRole", [], "any", false, false, false, 123))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 124
            yield "                            <span class=\"badge bg-light text-dark border px-3 py-2 rounded-pill\">
                                <i class=\"bi bi-people-fill text-success me-1\"></i> ";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 125, $this->source); })()), "maxUsersPerRole", [], "any", false, false, false, 125), "html", null, true);
            yield " utilisateurs/rôle
                            </span>
                        ";
        }
        // line 128
        yield "                        ";
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 128, $this->source); })()), "maxProducts", [], "any", false, false, false, 128))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 129
            yield "                            <span class=\"badge bg-light text-dark border px-3 py-2 rounded-pill\">
                                <i class=\"bi bi-box-fill text-info me-1\"></i> ";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 130, $this->source); })()), "maxProducts", [], "any", false, false, false, 130), "html", null, true);
            yield " produits
                            </span>
                        ";
        }
        // line 133
        yield "                        ";
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 133, $this->source); })()), "maxOrdersPerMonth", [], "any", false, false, false, 133))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 134
            yield "                            <span class=\"badge bg-light text-dark border px-3 py-2 rounded-pill\">
                                <i class=\"bi bi-cart-fill text-warning me-1\"></i> ";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 135, $this->source); })()), "maxOrdersPerMonth", [], "any", false, false, false, 135), "html", null, true);
            yield " commandes/mois
                            </span>
                        ";
        }
        // line 138
        yield "                        ";
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 138, $this->source); })()), "maxCategories", [], "any", false, false, false, 138))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 139
            yield "                            <span class=\"badge bg-light text-dark border px-3 py-2 rounded-pill\">
                                <i class=\"bi bi-tags-fill text-primary me-1\"></i> ";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 140, $this->source); })()), "maxCategories", [], "any", false, false, false, 140), "html", null, true);
            yield " catégories
                            </span>
                        ";
        }
        // line 143
        yield "                        ";
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 143, $this->source); })()), "maxSuppliers", [], "any", false, false, false, 143))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 144
            yield "                            <span class=\"badge bg-light text-dark border px-3 py-2 rounded-pill\">
                                <i class=\"bi bi-truck-fill text-secondary me-1\"></i> ";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 145, $this->source); })()), "maxSuppliers", [], "any", false, false, false, 145), "html", null, true);
            yield " fournisseurs
                            </span>
                        ";
        }
        // line 148
        yield "
                        ";
        // line 150
        yield "                        ";
        if ((((((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 150, $this->source); })()), "maxUsersPerRole", [], "any", false, false, false, 150)) && (null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 150, $this->source); })()), "maxProducts", [], "any", false, false, false, 150))) && (null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 150, $this->source); })()), "maxOrdersPerMonth", [], "any", false, false, false, 150))) && (null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 150, $this->source); })()), "maxCategories", [], "any", false, false, false, 150))) && (null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 150, $this->source); })()), "maxSuppliers", [], "any", false, false, false, 150)))) {
            // line 151
            yield "                            <span class=\"badge bg-success text-white px-4 py-2 rounded-pill fs-6\">
                                <i class=\"bi bi-infinity me-1\"></i> Toutes les limites sont illimitées
                            </span>
                        ";
        }
        // line 155
        yield "                    </div>

                    <!-- Fonctionnalités améliorées pour meilleure lisibilité -->
                    ";
        // line 158
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 158, $this->source); })()), "features", [], "any", false, false, false, 158)) > 0)) {
            // line 159
            yield "                        <h6 class=\"fw-bold mb-3\"><i class=\"bi bi-star-fill text-warning me-2\"></i>Fonctionnalités incluses</h6>
                        <div class=\"d-flex flex-wrap gap-2 mb-3\">
                            ";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 161, $this->source); })()), "features", [], "any", false, false, false, 161));
            foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                // line 162
                yield "                                <span class=\"badge bg-light text-dark border rounded-pill px-3 py-2\">
                                    <i class=\"bi bi-check-circle-fill text-success me-1\"></i> ";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["feature"], "html", null, true);
                yield "
                                </span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            yield "                        </div>
                    ";
        }
        // line 168
        yield "
                    <!-- Statut -->
                    <div class=\"mt-4 d-flex align-items-center gap-3\">
                        <span class=\"badge bg-";
        // line 171
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 171, $this->source); })()), "isActive", [], "any", false, false, false, 171)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("success") : ("secondary"));
        yield " fs-6 p-3 rounded-pill\">
                            <i class=\"bi bi-";
        // line 172
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 172, $this->source); })()), "isActive", [], "any", false, false, false, 172)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("check-circle") : ("x-circle"));
        yield " me-1\"></i>
                            ";
        // line 173
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 173, $this->source); })()), "isActive", [], "any", false, false, false, 173)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Plan actif") : ("Plan inactif"));
        yield "
                        </span>
                        <span class=\"badge bg-info fs-6 p-3 rounded-pill\">
                            <i class=\"bi bi-bar-chart me-1\"></i>
                            ";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 177, $this->source); })()), "subscriptions", [], "any", false, false, false, 177)), "html", null, true);
        yield " abonnement(s) souscrit(s)
                        </span>
                    </div>
                </div>

                <!-- Actions du footer -->
                <div class=\"card-footer bg-transparent border-0 p-4 d-flex justify-content-between\">
                    <a href=\"";
        // line 184
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_index");
        yield "\" class=\"btn btn-outline-secondary rounded-pill px-4\">
                        <i class=\"bi bi-arrow-left me-2\"></i>Retour
                    </a>
                    <div class=\"d-flex gap-2\">
                        <button type=\"button\" class=\"btn btn-outline-";
        // line 188
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 188, $this->source); })()), "isActive", [], "any", false, false, false, 188)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("success"));
        yield " rounded-pill px-4\" data-bs-toggle=\"modal\" data-bs-target=\"#toggleModal\">
                            <i class=\"bi bi-";
        // line 189
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 189, $this->source); })()), "isActive", [], "any", false, false, false, 189)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("pause-fill") : ("play-fill"));
        yield " me-2\"></i>
                            ";
        // line 190
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 190, $this->source); })()), "isActive", [], "any", false, false, false, 190)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
        yield "
                        </button>
                        <a href=\"";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 192, $this->source); })()), "id", [], "any", false, false, false, 192)]), "html", null, true);
        yield "\" class=\"btn btn-outline-primary rounded-pill px-4\">
                            <i class=\"bi bi-pencil-square me-2\"></i>Modifier
                        </a>
                        ";
        // line 195
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 195, $this->source); })()), "subscriptions", [], "any", false, false, false, 195)) == 0)) {
            // line 196
            yield "                            <button type=\"button\" class=\"btn btn-outline-danger rounded-pill px-4\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                                <i class=\"bi bi-trash me-2\"></i>Supprimer
                            </button>
                        ";
        } else {
            // line 200
            yield "                            <button type=\"button\" class=\"btn btn-outline-danger rounded-pill px-4\" disabled title=\"Impossible de supprimer : des abonnements sont liés à ce plan\">
                                <i class=\"bi bi-trash me-2\"></i>Supprimer
                            </button>
                        ";
        }
        // line 204
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des abonnements avec recherche et pagination -->
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-12\">
            <div class=\"card border-0 shadow-lg rounded-4\">
                <div class=\"card-header bg-gradient-secondary text-white py-3 d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0 fw-bold\"><i class=\"bi bi-list-ul me-2\"></i>Liste des abonnements souscrits</h5>
                    <span class=\"badge bg-white text-dark rounded-pill px-3\">";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 216, $this->source); })()), "subscriptions", [], "any", false, false, false, 216)), "html", null, true);
        yield " abonnement(s)</span>
                </div>
                <div class=\"card-body p-4\">
                    <!-- Barre de recherche -->
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-transparent border-end-0\">
                                    <i class=\"bi bi-search\"></i>
                                </span>
                                <input type=\"text\" class=\"form-control border-start-0\" id=\"tableSearch\" placeholder=\"Rechercher par entreprise, email, statut...\">
                            </div>
                        </div>
                    </div>

                    <!-- Tableau avec scroll et recherche -->
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
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 245, $this->source); })()), "subscriptions", [], "any", false, false, false, 245));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
            // line 246
            yield "                                    <tr class=\"subscription-row\">
                                        <td class=\"company-cell\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"symbol symbol-40px me-2\">
                                                    ";
            // line 250
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "hmaService", [], "any", false, false, false, 250), "logo", [], "any", false, false, false, 250)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 251
                yield "                                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "hmaService", [], "any", false, false, false, 251), "logo", [], "any", false, false, false, 251))), "html", null, true);
                yield "\" alt=\"logo\" class=\"rounded-circle\" width=\"32\" height=\"32\">
                                                    ";
            } else {
                // line 253
                yield "                                                        <div class=\"bg-light rounded-circle d-flex align-items-center justify-content-center\" style=\"width: 32px; height: 32px;\">
                                                            <i class=\"bi bi-building text-muted\"></i>
                                                        </div>
                                                    ";
            }
            // line 257
            yield "                                                </div>
                                                <div>
                                                    <span class=\"fw-semibold\">";
            // line 259
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "hmaService", [], "any", false, false, false, 259), "companyName", [], "any", false, false, false, 259), "html", null, true);
            yield "</span>
                                                    <br><small class=\"text-muted\">";
            // line 260
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "hmaService", [], "any", false, false, false, 260), "email", [], "any", false, false, false, 260), "html", null, true);
            yield "</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class=\"badge bg-info\">";
            // line 265
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "billingPeriod", [], "any", false, false, false, 265) == "monthly")) ? ("Mensuel") : ("Annuel"));
            yield "</span>
                                        </td>
                                        <td class=\"status-cell\">
                                            ";
            // line 268
            $context["statusClass"] = ["active" => "success", "pending" => "warning", "expired" => "danger", "cancelled" => "secondary"];
            // line 274
            yield "                                            ";
            $context["statusLabel"] = ["active" => "Actif", "pending" => "En attente", "expired" => "Expiré", "cancelled" => "Annulé"];
            // line 280
            yield "                                            <span class=\"badge bg-";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["statusClass"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 280), [], "array", true, true, false, 280) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 280, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 280), [], "array", false, false, false, 280)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 280, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 280), [], "array", false, false, false, 280), "html", null, true)) : ("secondary"));
            yield "\">
                                                ";
            // line 281
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["statusLabel"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 281), [], "array", true, true, false, 281) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusLabel"]) || array_key_exists("statusLabel", $context) ? $context["statusLabel"] : (function () { throw new RuntimeError('Variable "statusLabel" does not exist.', 281, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 281), [], "array", false, false, false, 281)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusLabel"]) || array_key_exists("statusLabel", $context) ? $context["statusLabel"] : (function () { throw new RuntimeError('Variable "statusLabel" does not exist.', 281, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 281), [], "array", false, false, false, 281), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 281), "html", null, true)));
            yield "
                                            </span>
                                        </td>
                                        <td>";
            // line 284
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "startsAt", [], "any", false, false, false, 284), "d/m/Y"), "html", null, true);
            yield "</td>
                                        <td>";
            // line 285
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 285), "d/m/Y"), "html", null, true);
            yield "</td>
                                        <td class=\"text-end px-4\">
                                            <div class=\"d-flex gap-2 justify-content-end\">
                                                <a href=\"";
            // line 288
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "id", [], "any", false, false, false, 288)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary rounded-pill\" data-bs-toggle=\"tooltip\" title=\"Détails abonnement\">
                                                    <i class=\"bi bi-eye\"></i>
                                                </a>
                                                <a href=\"";
            // line 291
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "hmaService", [], "any", false, false, false, 291), "id", [], "any", false, false, false, 291)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info rounded-pill\" data-bs-toggle=\"tooltip\" title=\"Voir l'entreprise\">
                                                    <i class=\"bi bi-building\"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 297
        if (!$context['_iterated']) {
            // line 298
            yield "                                    <tr>
                                        <td colspan=\"6\" class=\"text-center py-5\">
                                            <i class=\"bi bi-inbox display-4 text-muted\"></i>
                                            <p class=\"mt-3 fs-5\">Aucun abonnement n'est associé à ce plan pour le moment.</p>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 305
        yield "                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination simple (JavaScript) -->
                    ";
        // line 310
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 310, $this->source); })()), "subscriptions", [], "any", false, false, false, 310)) > 10)) {
            // line 311
            yield "                    <div class=\"d-flex justify-content-between align-items-center mt-4\">
                        <div>
                            <span class=\"text-muted\">Affichage de <span id=\"showingStart\">1</span> à <span id=\"showingEnd\">10</span> sur <span id=\"totalCount\">";
            // line 313
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 313, $this->source); })()), "subscriptions", [], "any", false, false, false, 313)), "html", null, true);
            yield "</span> entrées</span>
                        </div>
                        <nav>
                            <ul class=\"pagination pagination-sm\" id=\"paginationControls\"></ul>
                        </nav>
                    </div>
                    ";
        }
        // line 320
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
        // line 330
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 330, $this->source); })()), "isActive", [], "any", false, false, false, 330)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("success"));
        yield " text-white border-0\">
                <h5 class=\"modal-title\">
                    <i class=\"bi bi-";
        // line 332
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 332, $this->source); })()), "isActive", [], "any", false, false, false, 332)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("pause-circle") : ("play-circle"));
        yield " me-2\"></i>
                    ";
        // line 333
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 333, $this->source); })()), "isActive", [], "any", false, false, false, 333)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
        yield " le plan
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body p-4\">
                <p class=\"mb-0\">
                    Êtes-vous sûr de vouloir ";
        // line 339
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 339, $this->source); })()), "isActive", [], "any", false, false, false, 339)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("désactiver") : ("activer"));
        yield " le plan <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 339, $this->source); })()), "displayName", [], "any", false, false, false, 339), "html", null, true);
        yield "</strong> ?
                    ";
        // line 340
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 340, $this->source); })()), "isActive", [], "any", false, false, false, 340)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 341
            yield "                        <br><small class=\"text-muted\">Les entreprises avec ce plan ne pourront plus l'utiliser.</small>
                    ";
        } else {
            // line 343
            yield "                        <br><small class=\"text-muted\">Les entreprises pourront souscrire à ce plan.</small>
                    ";
        }
        // line 345
        yield "                </p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-secondary px-4 rounded-pill\" data-bs-dismiss=\"modal\">Annuler</button>
                <form action=\"";
        // line 349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 349, $this->source); })()), "id", [], "any", false, false, false, 349)]), "html", null, true);
        yield "\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 350, $this->source); })()), "id", [], "any", false, false, false, 350))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-";
        // line 351
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 351, $this->source); })()), "isActive", [], "any", false, false, false, 351)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("success"));
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
        // line 361
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 361, $this->source); })()), "subscriptions", [], "any", false, false, false, 361)) == 0)) {
            // line 362
            yield "<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 rounded-4\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title\"><i class=\"bi bi-exclamation-triangle-fill me-2\"></i>Supprimer le plan</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body p-4\">
                <p>Attention, cette action est irréversible. Voulez-vous vraiment supprimer le plan <strong>";
            // line 370
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 370, $this->source); })()), "displayName", [], "any", false, false, false, 370), "html", null, true);
            yield "</strong> ?</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-secondary px-4 rounded-pill\" data-bs-dismiss=\"modal\">Annuler</button>
                <form action=\"";
            // line 374
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 374, $this->source); })()), "id", [], "any", false, false, false, 374)]), "html", null, true);
            yield "\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 375
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 375, $this->source); })()), "id", [], "any", false, false, false, 375))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn btn-danger px-4 rounded-pill\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        }
        // line 383
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
/* Amélioration contraste badges */
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

<!-- JavaScript pour la recherche et la pagination -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('tableSearch');
    const table = document.getElementById('subscriptionsTable');
    const rows = table ? Array.from(table.querySelectorAll('tbody tr:not(.no-results)')) : [];
    const rowsPerPage = 10;
    let currentPage = 1;
    let filteredRows = rows;

    function filterTable() {
        const searchTerm = searchInput.value.toLowerCase().trim();
        filteredRows = rows.filter(row => {
            const companyCell = row.querySelector('.company-cell')?.innerText.toLowerCase() || '';
            const statusCell = row.querySelector('.status-cell')?.innerText.toLowerCase() || '';
            const periodCell = row.cells[1]?.innerText.toLowerCase() || '';
            return companyCell.includes(searchTerm) || statusCell.includes(searchTerm) || periodCell.includes(searchTerm);
        });
        currentPage = 1;
        updatePagination();
        displayRows();
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
                tr.innerHTML = '<td colspan=\"6\" class=\"text-center py-4\"><i class=\"bi bi-exclamation-circle me-2\"></i>Aucun résultat trouvé</td>';
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

    if (searchInput) {
        searchInput.addEventListener('input', filterTable);
    }

    if (rows.length > 0) {
        displayRows();
        updatePagination();
    }
});
</script>
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
        return array (  735 => 383,  724 => 375,  720 => 374,  713 => 370,  703 => 362,  701 => 361,  688 => 351,  684 => 350,  680 => 349,  674 => 345,  670 => 343,  666 => 341,  664 => 340,  658 => 339,  649 => 333,  645 => 332,  640 => 330,  628 => 320,  618 => 313,  614 => 311,  612 => 310,  605 => 305,  593 => 298,  591 => 297,  580 => 291,  574 => 288,  568 => 285,  564 => 284,  558 => 281,  553 => 280,  550 => 274,  548 => 268,  542 => 265,  534 => 260,  530 => 259,  526 => 257,  520 => 253,  514 => 251,  512 => 250,  506 => 246,  501 => 245,  469 => 216,  455 => 204,  449 => 200,  443 => 196,  441 => 195,  435 => 192,  430 => 190,  426 => 189,  422 => 188,  415 => 184,  405 => 177,  398 => 173,  394 => 172,  390 => 171,  385 => 168,  381 => 166,  372 => 163,  369 => 162,  365 => 161,  361 => 159,  359 => 158,  354 => 155,  348 => 151,  345 => 150,  342 => 148,  336 => 145,  333 => 144,  330 => 143,  324 => 140,  321 => 139,  318 => 138,  312 => 135,  309 => 134,  306 => 133,  300 => 130,  297 => 129,  294 => 128,  288 => 125,  285 => 124,  283 => 123,  275 => 117,  269 => 114,  265 => 112,  263 => 111,  253 => 104,  244 => 98,  235 => 92,  222 => 82,  213 => 76,  204 => 70,  185 => 53,  179 => 52,  168 => 47,  164 => 46,  158 => 44,  153 => 43,  149 => 42,  132 => 27,  126 => 26,  120 => 23,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ plan.displayName }} - Détails du plan{% endblock %}

{% block body %}
<div class=\"container-fluid px-4 py-4 bg-light min-vh-100\">
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
                    <div class=\"d-flex align-items-center gap-4\">
                        <div class=\"icon-wrapper bg-white bg-opacity-20 backdrop-blur rounded-4 p-4\">
                            <i class=\"bi bi-tag text-white display-4\"></i>
                        </div>
                        <div>
                            <h1 class=\"display-4 fw-bold mb-2\">{{ plan.displayName }}</h1>
                            <p class=\"text-white-50 mb-0 fs-5\">Détails du plan d'abonnement • 
                                <span class=\"badge bg-white text-dark rounded-pill px-3 py-2 ms-2\">
                                    {% if plan.isUnlimited %}Illimité{% else %}Limité{% endif %}
                                </span>
                            </p>
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
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }} alert-dismissible fade show rounded-4 shadow-sm mb-4 border-0\" role=\"alert\">
                <div class=\"d-flex align-items-center\">
                    <i class=\"bi bi-{{ label == 'success' ? 'check-circle-fill' : 'exclamation-triangle-fill' }} fs-4 me-3\"></i>
                    <span>{{ message }}</span>
                </div>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        {% endfor %}
    {% endfor %}

    <!-- Détails du plan -->
    <div class=\"row justify-content-center mb-5\">
        <div class=\"col-lg-10\">
            <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                <div class=\"card-header bg-gradient-primary text-white py-3 d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0 fw-bold\"><i class=\"bi bi-info-circle-fill me-2\"></i>Informations générales</h5>
                </div>
                <div class=\"card-body p-4\">
                    <!-- Informations générales -->
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <ul class=\"list-unstyled\">
                                <li class=\"mb-3 d-flex align-items-center\">
                                    <div class=\"bg-primary bg-opacity-10 p-2 rounded-3 me-3\">
                                        <i class=\"bi bi-tag-fill text-primary\"></i>
                                    </div>
                                    <div><strong>Nom technique :</strong> {{ plan.name }}</div>
                                </li>
                                <li class=\"mb-3 d-flex align-items-center\">
                                    <div class=\"bg-success bg-opacity-10 p-2 rounded-3 me-3\">
                                        <i class=\"bi bi-calendar-check text-success\"></i>
                                    </div>
                                    <div><strong>Créé le :</strong> {{ plan.createdAt|date('d/m/Y H:i') }}</div>
                                </li>
                                <li class=\"mb-3 d-flex align-items-center\">
                                    <div class=\"bg-warning bg-opacity-10 p-2 rounded-3 me-3\">
                                        <i class=\"bi bi-arrow-repeat text-warning\"></i>
                                    </div>
                                    <div><strong>Dernière mise à jour :</strong> {{ plan.updatedAt ? plan.updatedAt|date('d/m/Y H:i') : 'Jamais' }}</div>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-md-6\">
                            <ul class=\"list-unstyled\">
                                <li class=\"mb-3 d-flex align-items-center\">
                                    <div class=\"bg-success bg-opacity-10 p-2 rounded-3 me-3\">
                                        <i class=\"bi bi-currency-exchange text-success\"></i>
                                    </div>
                                    <div><strong>Prix mensuel :</strong> {{ plan.priceMonthly|number_format(0, ',', ' ') }} FCFA</div>
                                </li>
                                <li class=\"mb-3 d-flex align-items-center\">
                                    <div class=\"bg-warning bg-opacity-10 p-2 rounded-3 me-3\">
                                        <i class=\"bi bi-currency-exchange text-warning\"></i>
                                    </div>
                                    <div><strong>Prix annuel :</strong> {{ plan.priceYearly|number_format(0, ',', ' ') }} FCFA</div>
                                </li>
                                <li class=\"mb-3 d-flex align-items-center\">
                                    <div class=\"bg-info bg-opacity-10 p-2 rounded-3 me-3\">
                                        <i class=\"bi bi-bar-chart text-info\"></i>
                                    </div>
                                    <div><strong>Abonnements :</strong> {{ plan.subscriptions|length }}</div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Description (déplacée ici, avant les limites) -->
                    {% if plan.description %}
                        <div class=\"description-box p-3 rounded-3 mt-4 mb-4\">
                            <i class=\"bi bi-quote me-2 text-info\"></i>
                            <em>{{ plan.description }}</em>
                        </div>
                    {% endif %}

                    <hr class=\"my-4\">

                    <!-- Limites en badges -->
                    <h6 class=\"fw-bold mb-3\"><i class=\"bi bi-speedometer2 me-2\"></i>Limites du plan</h6>
                    <div class=\"d-flex flex-wrap gap-2 mb-4\">
                        {% if plan.maxUsersPerRole is not null %}
                            <span class=\"badge bg-light text-dark border px-3 py-2 rounded-pill\">
                                <i class=\"bi bi-people-fill text-success me-1\"></i> {{ plan.maxUsersPerRole }} utilisateurs/rôle
                            </span>
                        {% endif %}
                        {% if plan.maxProducts is not null %}
                            <span class=\"badge bg-light text-dark border px-3 py-2 rounded-pill\">
                                <i class=\"bi bi-box-fill text-info me-1\"></i> {{ plan.maxProducts }} produits
                            </span>
                        {% endif %}
                        {% if plan.maxOrdersPerMonth is not null %}
                            <span class=\"badge bg-light text-dark border px-3 py-2 rounded-pill\">
                                <i class=\"bi bi-cart-fill text-warning me-1\"></i> {{ plan.maxOrdersPerMonth }} commandes/mois
                            </span>
                        {% endif %}
                        {% if plan.maxCategories is not null %}
                            <span class=\"badge bg-light text-dark border px-3 py-2 rounded-pill\">
                                <i class=\"bi bi-tags-fill text-primary me-1\"></i> {{ plan.maxCategories }} catégories
                            </span>
                        {% endif %}
                        {% if plan.maxSuppliers is not null %}
                            <span class=\"badge bg-light text-dark border px-3 py-2 rounded-pill\">
                                <i class=\"bi bi-truck-fill text-secondary me-1\"></i> {{ plan.maxSuppliers }} fournisseurs
                            </span>
                        {% endif %}

                        {# Si aucune limite n'est définie (plan illimité) #}
                        {% if plan.maxUsersPerRole is null and plan.maxProducts is null and plan.maxOrdersPerMonth is null and plan.maxCategories is null and plan.maxSuppliers is null %}
                            <span class=\"badge bg-success text-white px-4 py-2 rounded-pill fs-6\">
                                <i class=\"bi bi-infinity me-1\"></i> Toutes les limites sont illimitées
                            </span>
                        {% endif %}
                    </div>

                    <!-- Fonctionnalités améliorées pour meilleure lisibilité -->
                    {% if plan.features|length > 0 %}
                        <h6 class=\"fw-bold mb-3\"><i class=\"bi bi-star-fill text-warning me-2\"></i>Fonctionnalités incluses</h6>
                        <div class=\"d-flex flex-wrap gap-2 mb-3\">
                            {% for feature in plan.features %}
                                <span class=\"badge bg-light text-dark border rounded-pill px-3 py-2\">
                                    <i class=\"bi bi-check-circle-fill text-success me-1\"></i> {{ feature }}
                                </span>
                            {% endfor %}
                        </div>
                    {% endif %}

                    <!-- Statut -->
                    <div class=\"mt-4 d-flex align-items-center gap-3\">
                        <span class=\"badge bg-{{ plan.isActive ? 'success' : 'secondary' }} fs-6 p-3 rounded-pill\">
                            <i class=\"bi bi-{{ plan.isActive ? 'check-circle' : 'x-circle' }} me-1\"></i>
                            {{ plan.isActive ? 'Plan actif' : 'Plan inactif' }}
                        </span>
                        <span class=\"badge bg-info fs-6 p-3 rounded-pill\">
                            <i class=\"bi bi-bar-chart me-1\"></i>
                            {{ plan.subscriptions|length }} abonnement(s) souscrit(s)
                        </span>
                    </div>
                </div>

                <!-- Actions du footer -->
                <div class=\"card-footer bg-transparent border-0 p-4 d-flex justify-content-between\">
                    <a href=\"{{ path('app_super_admin_subscription_plan_index') }}\" class=\"btn btn-outline-secondary rounded-pill px-4\">
                        <i class=\"bi bi-arrow-left me-2\"></i>Retour
                    </a>
                    <div class=\"d-flex gap-2\">
                        <button type=\"button\" class=\"btn btn-outline-{{ plan.isActive ? 'warning' : 'success' }} rounded-pill px-4\" data-bs-toggle=\"modal\" data-bs-target=\"#toggleModal\">
                            <i class=\"bi bi-{{ plan.isActive ? 'pause-fill' : 'play-fill' }} me-2\"></i>
                            {{ plan.isActive ? 'Désactiver' : 'Activer' }}
                        </button>
                        <a href=\"{{ path('app_super_admin_subscription_plan_edit', {'id': plan.id}) }}\" class=\"btn btn-outline-primary rounded-pill px-4\">
                            <i class=\"bi bi-pencil-square me-2\"></i>Modifier
                        </a>
                        {% if plan.subscriptions|length == 0 %}
                            <button type=\"button\" class=\"btn btn-outline-danger rounded-pill px-4\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                                <i class=\"bi bi-trash me-2\"></i>Supprimer
                            </button>
                        {% else %}
                            <button type=\"button\" class=\"btn btn-outline-danger rounded-pill px-4\" disabled title=\"Impossible de supprimer : des abonnements sont liés à ce plan\">
                                <i class=\"bi bi-trash me-2\"></i>Supprimer
                            </button>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des abonnements avec recherche et pagination -->
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-12\">
            <div class=\"card border-0 shadow-lg rounded-4\">
                <div class=\"card-header bg-gradient-secondary text-white py-3 d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0 fw-bold\"><i class=\"bi bi-list-ul me-2\"></i>Liste des abonnements souscrits</h5>
                    <span class=\"badge bg-white text-dark rounded-pill px-3\">{{ plan.subscriptions|length }} abonnement(s)</span>
                </div>
                <div class=\"card-body p-4\">
                    <!-- Barre de recherche -->
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-transparent border-end-0\">
                                    <i class=\"bi bi-search\"></i>
                                </span>
                                <input type=\"text\" class=\"form-control border-start-0\" id=\"tableSearch\" placeholder=\"Rechercher par entreprise, email, statut...\">
                            </div>
                        </div>
                    </div>

                    <!-- Tableau avec scroll et recherche -->
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
                                {% for subscription in plan.subscriptions %}
                                    <tr class=\"subscription-row\">
                                        <td class=\"company-cell\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"symbol symbol-40px me-2\">
                                                    {% if subscription.hmaService.logo %}
                                                        <img src=\"{{ asset('uploads/logos/' ~ subscription.hmaService.logo) }}\" alt=\"logo\" class=\"rounded-circle\" width=\"32\" height=\"32\">
                                                    {% else %}
                                                        <div class=\"bg-light rounded-circle d-flex align-items-center justify-content-center\" style=\"width: 32px; height: 32px;\">
                                                            <i class=\"bi bi-building text-muted\"></i>
                                                        </div>
                                                    {% endif %}
                                                </div>
                                                <div>
                                                    <span class=\"fw-semibold\">{{ subscription.hmaService.companyName }}</span>
                                                    <br><small class=\"text-muted\">{{ subscription.hmaService.email }}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class=\"badge bg-info\">{{ subscription.billingPeriod == 'monthly' ? 'Mensuel' : 'Annuel' }}</span>
                                        </td>
                                        <td class=\"status-cell\">
                                            {% set statusClass = {
                                                'active': 'success',
                                                'pending': 'warning',
                                                'expired': 'danger',
                                                'cancelled': 'secondary'
                                            } %}
                                            {% set statusLabel = {
                                                'active': 'Actif',
                                                'pending': 'En attente',
                                                'expired': 'Expiré',
                                                'cancelled': 'Annulé'
                                            } %}
                                            <span class=\"badge bg-{{ statusClass[subscription.status] ?? 'secondary' }}\">
                                                {{ statusLabel[subscription.status] ?? subscription.status }}
                                            </span>
                                        </td>
                                        <td>{{ subscription.startsAt|date('d/m/Y') }}</td>
                                        <td>{{ subscription.endsAt|date('d/m/Y') }}</td>
                                        <td class=\"text-end px-4\">
                                            <div class=\"d-flex gap-2 justify-content-end\">
                                                <a href=\"{{ path('app_super_admin_subscription_show', {'id': subscription.id}) }}\" class=\"btn btn-sm btn-outline-primary rounded-pill\" data-bs-toggle=\"tooltip\" title=\"Détails abonnement\">
                                                    <i class=\"bi bi-eye\"></i>
                                                </a>
                                                <a href=\"{{ path('app_super_admin_hma_service_show', {'id': subscription.hmaService.id}) }}\" class=\"btn btn-sm btn-outline-info rounded-pill\" data-bs-toggle=\"tooltip\" title=\"Voir l'entreprise\">
                                                    <i class=\"bi bi-building\"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"6\" class=\"text-center py-5\">
                                            <i class=\"bi bi-inbox display-4 text-muted\"></i>
                                            <p class=\"mt-3 fs-5\">Aucun abonnement n'est associé à ce plan pour le moment.</p>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination simple (JavaScript) -->
                    {% if plan.subscriptions|length > 10 %}
                    <div class=\"d-flex justify-content-between align-items-center mt-4\">
                        <div>
                            <span class=\"text-muted\">Affichage de <span id=\"showingStart\">1</span> à <span id=\"showingEnd\">10</span> sur <span id=\"totalCount\">{{ plan.subscriptions|length }}</span> entrées</span>
                        </div>
                        <nav>
                            <ul class=\"pagination pagination-sm\" id=\"paginationControls\"></ul>
                        </nav>
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmation activation/désactivation -->
<div class=\"modal fade\" id=\"toggleModal\" tabindex=\"-1\">
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
                    <button type=\"submit\" class=\"btn btn-{{ plan.isActive ? 'warning' : 'success' }} px-4 rounded-pill\">
                        Confirmer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal de suppression -->
{% if plan.subscriptions|length == 0 %}
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
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
/* Amélioration contraste badges */
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

<!-- JavaScript pour la recherche et la pagination -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('tableSearch');
    const table = document.getElementById('subscriptionsTable');
    const rows = table ? Array.from(table.querySelectorAll('tbody tr:not(.no-results)')) : [];
    const rowsPerPage = 10;
    let currentPage = 1;
    let filteredRows = rows;

    function filterTable() {
        const searchTerm = searchInput.value.toLowerCase().trim();
        filteredRows = rows.filter(row => {
            const companyCell = row.querySelector('.company-cell')?.innerText.toLowerCase() || '';
            const statusCell = row.querySelector('.status-cell')?.innerText.toLowerCase() || '';
            const periodCell = row.cells[1]?.innerText.toLowerCase() || '';
            return companyCell.includes(searchTerm) || statusCell.includes(searchTerm) || periodCell.includes(searchTerm);
        });
        currentPage = 1;
        updatePagination();
        displayRows();
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
                tr.innerHTML = '<td colspan=\"6\" class=\"text-center py-4\"><i class=\"bi bi-exclamation-circle me-2\"></i>Aucun résultat trouvé</td>';
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

    if (searchInput) {
        searchInput.addEventListener('input', filterTable);
    }

    if (rows.length > 0) {
        displayRows();
        updatePagination();
    }
});
</script>
{% endblock %}", "super_admin/subscription_plan/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\subscription_plan\\show.html.twig");
    }
}
