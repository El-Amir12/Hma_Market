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
class __TwigTemplate_0c2ceeed054e63dcbbf9715d7d9e0588 extends Template
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
        yield "<div class=\"container-fluid px-2 px-sm-3 px-md-4 py-3 py-md-4 bg-light min-vh-100\">
    <!-- En-tête moderne avec dégradé -->
    <div class=\"row mb-4 mb-md-5\">
        <div class=\"col-12\">
            <div class=\"modern-header position-relative overflow-hidden rounded-4 rounded-md-5 shadow-lg p-3 p-sm-4 p-md-5 text-white\" 
                style=\"background: linear-gradient(145deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);\">
                <div class=\"floating-bg\">
                    <div class=\"shape shape-1\"></div>
                    <div class=\"shape shape-2\"></div>
                    <div class=\"shape shape-3\"></div>
                </div>
                <div class=\"position-relative z-1\">
                    <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3\">
                        <div class=\"d-flex align-items-center gap-3 gap-md-4 w-100 w-md-auto\">
                            <div class=\"icon-wrapper bg-white bg-opacity-20 backdrop-blur rounded-3 rounded-md-4 p-3 p-md-4 flex-shrink-0\">
                                <i class=\"fas fa-tag text-white display-6 display-md-4\"></i>
                            </div>
                            <div class=\"flex-grow-1\">
                                <h1 class=\"h3 h-md-2 h-lg-1 display-md-4 fw-bold mb-1 mb-md-2 text-break\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 24, $this->source); })()), "displayName", [], "any", false, false, false, 24), "html", null, true);
        yield "</h1>
                                <p class=\"text-white-50 mb-0 fs-6 fs-md-5\">
                                    Détails du plan d'abonnement
                                    <span class=\"badge bg-white text-dark rounded-pill px-2 px-md-3 py-1 py-md-2 ms-1 ms-md-2 d-inline-block mt-1 mt-md-0\">
                                        ";
        // line 28
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 28, $this->source); })()), "isUnlimited", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Illimité";
        } else {
            yield "Limité";
        }
        // line 29
        yield "                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class=\"w-100 w-md-auto\">
                            <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_index");
        yield "\" class=\"btn btn-light rounded-pill px-3 px-md-4 py-2 py-md-2 shadow-sm w-100 w-md-auto d-flex align-items-center justify-content-center\" style=\"cursor: pointer; position: relative; z-index: 100;\">
                                <i class=\"fas fa-arrow-left me-2\"></i>
                                <span class=\"d-none d-sm-inline\">Retour à la liste</span>
                                <span class=\"d-inline d-sm-none\">Retour</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"wave-bottom d-none d-sm-block\">
                    <svg viewBox=\"0 0 1440 120\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"none\">
                        <path d=\"M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z\" fill=\"white\" fill-opacity=\"0.2\"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Messages flash -->
    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "flashes", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 53
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 54
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show rounded-3 rounded-md-4 shadow-sm mb-3 mb-md-4 border-0\" role=\"alert\">
                <div class=\"d-flex align-items-center gap-2 gap-md-3\">
                    <i class=\"fas fa-";
                // line 56
                yield ((($context["label"] == "success")) ? ("check-circle") : ("exclamation-triangle"));
                yield " fs-5 fs-md-4 flex-shrink-0\"></i>
                    <span class=\"small small-md\">";
                // line 57
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
            // line 62
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "
    <!-- Détails du plan -->
    <div class=\"row mb-4 mb-md-5\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-lg rounded-3 rounded-md-4 overflow-hidden\">
                <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3 d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2\">
                    <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\">
                        <i class=\"fas fa-info-circle me-2\"></i>Informations générales
                    </h5>
                    <span class=\"badge bg-white text-dark rounded-pill px-3 py-1 fs-7 fs-md-6\">
                        ID: #";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73), "html", null, true);
        yield "
                    </span>
                </div>
                <div class=\"card-body p-3 p-md-4\">
                    <!-- Informations générales en version responsive -->
                    <div class=\"row g-3 g-md-4\">
                        <div class=\"col-12 col-md-6\">
                            <ul class=\"list-unstyled mb-0\">
                                <li class=\"mb-2 mb-md-3 d-flex align-items-center\">
                                    <div class=\"bg-primary bg-opacity-10 p-2 rounded-2 rounded-md-3 me-2 me-md-3 flex-shrink-0\">
                                        <i class=\"fas fa-tag text-white\"></i>
                                    </div>
                                    <div class=\"small small-md\"><strong>Nom :</strong> ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 85, $this->source); })()), "name", [], "any", false, false, false, 85), "html", null, true);
        yield "</div>
                                </li>
                                <li class=\"mb-2 mb-md-3 d-flex align-items-center\">
                                    <div class=\"bg-success bg-opacity-10 p-2 rounded-2 rounded-md-3 me-2 me-md-3 flex-shrink-0\">
                                        <i class=\"fas fa-calendar-check text-white\"></i>
                                    </div>
                                    <div class=\"small small-md\"><strong>Créé le :</strong> ";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 91, $this->source); })()), "createdAt", [], "any", false, false, false, 91), "d/m/Y H:i"), "html", null, true);
        yield "</div>
                                </li>
                                <li class=\"mb-2 mb-md-3 d-flex align-items-center\">
                                    <div class=\"bg-warning bg-opacity-10 p-2 rounded-2 rounded-md-3 me-2 me-md-3 flex-shrink-0\">
                                        <i class=\"fas fa-sync-alt text-white\"></i>
                                    </div>
                                    <div class=\"small small-md\"><strong>Mis à jour :</strong> ";
        // line 97
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 97, $this->source); })()), "updatedAt", [], "any", false, false, false, 97)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 97, $this->source); })()), "updatedAt", [], "any", false, false, false, 97), "d/m/Y H:i"), "html", null, true)) : ("Jamais"));
        yield "</div>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-12 col-md-6\">
                            <ul class=\"list-unstyled mb-0\">
                                <li class=\"mb-2 mb-md-3 d-flex align-items-center\">
                                    <div class=\"bg-success bg-opacity-10 p-2 rounded-2 rounded-md-3 me-2 me-md-3 flex-shrink-0\">
                                        <i class=\"fas fa-money-bill-wave text-white\"></i>
                                    </div>
                                    <div class=\"small small-md\"><strong>Mensuel :</strong> ";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 107, $this->source); })()), "priceMonthly", [], "any", false, false, false, 107), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
                                </li>
                                <li class=\"mb-2 mb-md-3 d-flex align-items-center\">
                                    <div class=\"bg-warning bg-opacity-10 p-2 rounded-2 rounded-md-3 me-2 me-md-3 flex-shrink-0\">
                                        <i class=\"fas fa-money-bill-wave text-white\"></i>
                                    </div>
                                    <div class=\"small small-md\"><strong>Annuel :</strong> ";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 113, $this->source); })()), "priceYearly", [], "any", false, false, false, 113), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
                                </li>
                                <li class=\"mb-2 mb-md-3 d-flex align-items-center\">
                                    <div class=\"bg-info bg-opacity-10 p-2 rounded-2 rounded-md-3 me-2 me-md-3 flex-shrink-0\">
                                        <i class=\"fas fa-chart-bar text-white\"></i>
                                    </div>
                                    <div class=\"small small-md\"><strong>Abonnements :</strong> ";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 119, $this->source); })()), "subscriptions", [], "any", false, false, false, 119)), "html", null, true);
        yield "</div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Description -->
                    ";
        // line 126
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 126, $this->source); })()), "description", [], "any", false, false, false, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 127
            yield "                        <div class=\"description-box p-2 p-md-3 rounded-3 mt-3 mt-md-4 mb-3 mb-md-4\">
                            <i class=\"fas fa-quote-left me-2 text-info\"></i>
                            <em class=\"small small-md\">";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 129, $this->source); })()), "description", [], "any", false, false, false, 129), "html", null, true);
            yield "</em>
                        </div>
                    ";
        }
        // line 132
        yield "
                    <hr class=\"my-3 my-md-4\">

                    <!-- Limites Commerce -->
                    <h6 class=\"fw-bold mb-2 mb-md-3 fs-6 fs-md-5\">
                        <i class=\"fas fa-store me-2 text-primary\"></i>Limites Commerce
                    </h6>
                    <div class=\"d-flex flex-wrap gap-1 gap-md-2 mb-3 mb-md-4\">
                        ";
        // line 140
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 140, $this->source); })()), "maxUsersPerRole", [], "any", false, false, false, 140))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 141
            yield "                            <span class=\"badge bg-light text-dark border px-2 px-md-3 py-1 py-md-2 rounded-pill fs-7 fs-md-6\">
                                <i class=\"fas fa-users text-success me-1\"></i> ";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 142, $this->source); })()), "maxUsersPerRole", [], "any", false, false, false, 142), "html", null, true);
            yield " utilisateurs/rôle
                            </span>
                        ";
        }
        // line 145
        yield "                        ";
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 145, $this->source); })()), "maxProducts", [], "any", false, false, false, 145))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 146
            yield "                            <span class=\"badge bg-light text-dark border px-2 px-md-3 py-1 py-md-2 rounded-pill fs-7 fs-md-6\">
                                <i class=\"fas fa-box text-info me-1\"></i> ";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 147, $this->source); })()), "maxProducts", [], "any", false, false, false, 147)), "html", null, true);
            yield " produits
                            </span>
                        ";
        }
        // line 150
        yield "                        ";
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 150, $this->source); })()), "maxOrdersPerMonth", [], "any", false, false, false, 150))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 151
            yield "                            <span class=\"badge bg-light text-dark border px-2 px-md-3 py-1 py-md-2 rounded-pill fs-7 fs-md-6\">
                                <i class=\"fas fa-shopping-cart text-warning me-1\"></i> ";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 152, $this->source); })()), "maxOrdersPerMonth", [], "any", false, false, false, 152)), "html", null, true);
            yield " commandes/mois
                            </span>
                        ";
        }
        // line 155
        yield "                        ";
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 155, $this->source); })()), "maxCategories", [], "any", false, false, false, 155))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 156
            yield "                            <span class=\"badge bg-light text-dark border px-2 px-md-3 py-1 py-md-2 rounded-pill fs-7 fs-md-6\">
                                <i class=\"fas fa-tags text-primary me-1\"></i> ";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 157, $this->source); })()), "maxCategories", [], "any", false, false, false, 157)), "html", null, true);
            yield " catégories
                            </span>
                        ";
        }
        // line 160
        yield "                        ";
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 160, $this->source); })()), "maxSuppliers", [], "any", false, false, false, 160))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 161
            yield "                            <span class=\"badge bg-light text-dark border px-2 px-md-3 py-1 py-md-2 rounded-pill fs-7 fs-md-6\">
                                <i class=\"fas fa-truck text-secondary me-1\"></i> ";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 162, $this->source); })()), "maxSuppliers", [], "any", false, false, false, 162)), "html", null, true);
            yield " fournisseurs
                            </span>
                        ";
        }
        // line 165
        yield "                    </div>

                    <!-- Limites Restaurant -->
                    ";
        // line 168
        $context["hasRestaurantLimits"] = ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 168, $this->source); })()), "maxRecipes", [], "any", false, false, false, 168)) ||  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 168, $this->source); })()), "maxRecipeCategories", [], "any", false, false, false, 168)));
        // line 169
        yield "                    ";
        if ((($tmp = (isset($context["hasRestaurantLimits"]) || array_key_exists("hasRestaurantLimits", $context) ? $context["hasRestaurantLimits"] : (function () { throw new RuntimeError('Variable "hasRestaurantLimits" does not exist.', 169, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 170
            yield "                        <h6 class=\"fw-bold mb-2 mb-md-3 mt-3 mt-md-4 fs-6 fs-md-5\">
                            <i class=\"fas fa-utensils me-2 text-success\"></i>Limites Restaurant
                        </h6>
                        <div class=\"d-flex flex-wrap gap-1 gap-md-2 mb-3 mb-md-4\">
                            ";
            // line 174
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 174, $this->source); })()), "maxRecipes", [], "any", false, false, false, 174))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 175
                yield "                                <span class=\"badge bg-light text-dark border px-2 px-md-3 py-1 py-md-2 rounded-pill fs-7 fs-md-6\">
                                    <i class=\"fas fa-book text-success me-1\"></i> 
                                    ";
                // line 177
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 177, $this->source); })()), "maxRecipes", [], "any", false, false, false, 177) >= 999999999)) {
                    // line 178
                    yield "                                        ♾️ Recettes illimitées
                                    ";
                } else {
                    // line 180
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 180, $this->source); })()), "maxRecipes", [], "any", false, false, false, 180)), "html", null, true);
                    yield " recettes
                                    ";
                }
                // line 182
                yield "                                </span>
                            ";
            }
            // line 184
            yield "                            ";
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 184, $this->source); })()), "maxRecipeCategories", [], "any", false, false, false, 184))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 185
                yield "                                <span class=\"badge bg-light text-dark border px-2 px-md-3 py-1 py-md-2 rounded-pill fs-7 fs-md-6\">
                                    <i class=\"fas fa-tag text-info me-1\"></i> 
                                    ";
                // line 187
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 187, $this->source); })()), "maxRecipeCategories", [], "any", false, false, false, 187) >= 999999999)) {
                    // line 188
                    yield "                                        ♾️ Catégories illimitées
                                    ";
                } else {
                    // line 190
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 190, $this->source); })()), "maxRecipeCategories", [], "any", false, false, false, 190)), "html", null, true);
                    yield " catégories
                                    ";
                }
                // line 192
                yield "                                </span>
                            ";
            }
            // line 194
            yield "                        </div>
                    ";
        }
        // line 196
        yield "
                    <!-- Fonctionnalités incluses -->
                    ";
        // line 198
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 198, $this->source); })()), "features", [], "any", false, false, false, 198)) > 0)) {
            // line 199
            yield "                        <h6 class=\"fw-bold mb-2 mb-md-3 fs-6 fs-md-5\">
                            <i class=\"fas fa-star text-warning me-2\"></i>Fonctionnalités incluses
                        </h6>
                        <div class=\"d-flex flex-wrap gap-1 gap-md-2 mb-3 mb-md-4\">
                            ";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 203, $this->source); })()), "features", [], "any", false, false, false, 203));
            foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                // line 204
                yield "                                <span class=\"badge bg-light text-dark border rounded-pill px-2 px-md-3 py-1 py-md-2 fs-7 fs-md-6\">
                                    <i class=\"fas fa-check-circle text-success me-1\"></i> ";
                // line 205
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["feature"], "html", null, true);
                yield "
                                </span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            yield "                        </div>
                    ";
        }
        // line 210
        yield "
                    <!-- Statut - Version responsive -->
                    <div class=\"mt-3 mt-md-4 d-flex flex-wrap align-items-center gap-2 gap-md-3\">
                        <span class=\"badge bg-";
        // line 213
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 213, $this->source); })()), "isActive", [], "any", false, false, false, 213)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("success") : ("secondary"));
        yield " fs-7 fs-md-6 p-2 p-md-3 rounded-pill\">
                            <i class=\"fas fa-";
        // line 214
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 214, $this->source); })()), "isActive", [], "any", false, false, false, 214)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("check-circle") : ("times-circle"));
        yield " me-1\"></i>
                            ";
        // line 215
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 215, $this->source); })()), "isActive", [], "any", false, false, false, 215)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Plan actif") : ("Plan inactif"));
        yield "
                        </span>
                        <span class=\"badge bg-info fs-7 fs-md-6 p-2 p-md-3 rounded-pill\">
                            <i class=\"fas fa-chart-bar me-1\"></i>
                            ";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 219, $this->source); })()), "subscriptions", [], "any", false, false, false, 219)), "html", null, true);
        yield " abonnement(s)
                        </span>
                    </div>
                </div>

                <!-- Actions du footer - Version responsive -->
                <div class=\"card-footer bg-transparent border-0 p-3 p-md-4 d-flex flex-column flex-sm-row justify-content-between align-items-stretch align-items-sm-center gap-2 gap-sm-3\">
                    <a href=\"";
        // line 226
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_index");
        yield "\" class=\"btn btn-outline-secondary rounded-pill px-3 px-md-4 py-2 text-center w-100 w-sm-auto order-2 order-sm-1\">
                        <i class=\"fas fa-arrow-left me-2\"></i>Retour
                    </a>
                    <div class=\"d-flex flex-wrap gap-2 justify-content-center justify-content-sm-end w-100 w-sm-auto order-1 order-sm-2\">
                        <button type=\"button\" class=\"btn btn-outline-";
        // line 230
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 230, $this->source); })()), "isActive", [], "any", false, false, false, 230)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("success"));
        yield " rounded-pill px-3 px-md-4 py-2 flex-grow-1 flex-sm-grow-0\" data-bs-toggle=\"modal\" data-bs-target=\"#toggleModal\">
                            <i class=\"fas fa-";
        // line 231
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 231, $this->source); })()), "isActive", [], "any", false, false, false, 231)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("pause") : ("play"));
        yield " me-1 me-md-2\"></i>
                            <span class=\"d-none d-sm-inline\">";
        // line 232
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 232, $this->source); })()), "isActive", [], "any", false, false, false, 232)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
        yield "</span>
                            <span class=\"d-inline d-sm-none\">";
        // line 233
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 233, $this->source); })()), "isActive", [], "any", false, false, false, 233)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désact.") : ("Activer"));
        yield "</span>
                        </button>
                        <a href=\"";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 235, $this->source); })()), "id", [], "any", false, false, false, 235)]), "html", null, true);
        yield "\" class=\"btn btn-outline-primary rounded-pill px-3 px-md-4 py-2 flex-grow-1 flex-sm-grow-0\">
                            <i class=\"fas fa-edit me-1 me-md-2\"></i>
                            <span class=\"d-none d-sm-inline\">Modifier</span>
                            <span class=\"d-inline d-sm-none\">Modif.</span>
                        </a>
                        ";
        // line 240
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 240, $this->source); })()), "subscriptions", [], "any", false, false, false, 240)) == 0)) {
            // line 241
            yield "                            <button type=\"button\" class=\"btn btn-outline-danger rounded-pill px-3 px-md-4 py-2 flex-grow-1 flex-sm-grow-0\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                                <i class=\"fas fa-trash me-1 me-md-2\"></i>
                                <span class=\"d-none d-sm-inline\">Supprimer</span>
                                <span class=\"d-inline d-sm-none\">Suppr.</span>
                            </button>
                        ";
        } else {
            // line 247
            yield "                            <button type=\"button\" class=\"btn btn-outline-danger rounded-pill px-3 px-md-4 py-2 flex-grow-1 flex-sm-grow-0\" disabled title=\"Impossible de supprimer : des abonnements sont liés à ce plan\">
                                <i class=\"fas fa-trash me-1 me-md-2\"></i>
                                <span class=\"d-none d-sm-inline\">Supprimer</span>
                                <span class=\"d-inline d-sm-none\">Suppr.</span>
                            </button>
                        ";
        }
        // line 253
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des abonnements -->
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-12\">
            <div class=\"card border-0 shadow-lg rounded-3 rounded-md-4\">
                <div class=\"card-header bg-gradient-secondary text-white py-2 py-md-3 d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2\">
                    <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\">
                        <i class=\"fas fa-list-ul me-2\"></i>Liste des abonnements
                    </h5>
                    <div class=\"d-flex flex-wrap gap-2 align-items-center w-100 w-sm-auto\">
                        <span class=\"badge bg-white text-dark rounded-pill px-3 py-1 fs-7 fs-md-6\">
                            ";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 269, $this->source); })()), "subscriptions", [], "any", false, false, false, 269)), "html", null, true);
        yield " abonnement(s)
                        </span>
                        <button class=\"btn btn-light btn-sm rounded-pill px-3 flex-grow-1 flex-sm-grow-0\" id=\"filterToggleBtn\">
                            <i class=\"fas fa-filter me-1\"></i>
                            <span class=\"d-none d-sm-inline\">Filtres</span>
                            <span class=\"d-inline d-sm-none\">Filtres</span>
                        </button>
                        <button class=\"btn btn-outline-light btn-sm rounded-pill px-3 flex-grow-1 flex-sm-grow-0\" id=\"resetFiltersBtn\" style=\"display: none;\">
                            <i class=\"fas fa-undo-alt me-1\"></i>
                            <span class=\"d-none d-sm-inline\">Réinitialiser</span>
                            <span class=\"d-inline d-sm-none\">Reset</span>
                        </button>
                    </div>
                </div>
                <div class=\"card-body p-2 p-sm-3 p-md-4\">
                    <!-- Panneau de filtres -->
                    <div id=\"filterPanel\" class=\"row g-2 g-md-3 mb-3 mb-md-4\" style=\"display: none;\">
                        <div class=\"col-12 col-md-5\">
                            <div class=\"input-group input-group-sm\">
                                <span class=\"input-group-text bg-transparent border-end-0\">
                                    <i class=\"fas fa-search\"></i>
                                </span>
                                <input type=\"text\" class=\"form-control border-start-0\" id=\"tableSearch\" placeholder=\"Rechercher...\">
                            </div>
                        </div>
                        <div class=\"col-6 col-md-3\">
                            <input type=\"date\" class=\"form-control form-control-sm\" id=\"dateStartFilter\" placeholder=\"Date début\">
                        </div>
                        <div class=\"col-6 col-md-3\">
                            <input type=\"date\" class=\"form-control form-control-sm\" id=\"dateEndFilter\" placeholder=\"Date fin\">
                        </div>
                        <div class=\"col-12 col-md-1\">
                            <button class=\"btn btn-primary btn-sm w-100\" id=\"applyFiltersBtn\">
                                <i class=\"fas fa-filter me-1\"></i>
                                <span class=\"d-none d-sm-inline\">Appliquer</span>
                                <span class=\"d-inline d-sm-none\">OK</span>
                            </button>
                        </div>
                    </div>

                    <!-- Version Desktop - Tableau -->
                    <div class=\"d-none d-md-block\">
                        <div class=\"table-responsive\" style=\"max-height: 500px; overflow-y: auto;\">
                            <table class=\"table table-hover align-middle mb-0\" id=\"subscriptionsTable\">
                                <thead class=\"bg-light sticky-top\">
                                    <tr>
                                        <th class=\"py-2 px-3\">Entreprise</th>
                                        <th class=\"py-2 px-3\">Période</th>
                                        <th class=\"py-2 px-3\">Statut</th>
                                        <th class=\"py-2 px-3\">Début</th>
                                        <th class=\"py-2 px-3\">Fin</th>
                                        <th class=\"py-2 px-3 text-center\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 324
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 324, $this->source); })()), "subscriptions", [], "any", false, false, false, 324));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
            // line 325
            yield "                                        <tr class=\"subscription-row\" data-start-date=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "startsAt", [], "any", false, false, false, 325)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "startsAt", [], "any", false, false, false, 325), "Y-m-d"), "html", null, true)) : (""));
            yield "\" data-end-date=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 325)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 325), "Y-m-d"), "html", null, true)) : (""));
            yield "\">
                                            <td>
                                                <div class=\"d-flex align-items-center gap-2\">
                                                    <div class=\"symbol-40px flex-shrink-0\">
                                                        ";
            // line 329
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "hmaService", [], "any", false, false, false, 329), "logo", [], "any", false, false, false, 329)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 330
                yield "                                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "hmaService", [], "any", false, false, false, 330), "logo", [], "any", false, false, false, 330))), "html", null, true);
                yield "\" alt=\"logo\" class=\"rounded-circle\" width=\"32\" height=\"32\">
                                                        ";
            } else {
                // line 332
                yield "                                                            <div class=\"bg-light rounded-circle d-flex align-items-center justify-content-center\" style=\"width: 32px; height: 32px;\">
                                                                <i class=\"fas fa-building text-muted\"></i>
                                                            </div>
                                                        ";
            }
            // line 336
            yield "                                                    </div>
                                                    <div>
                                                        <span class=\"fw-semibold small\">";
            // line 338
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "hmaService", [], "any", false, false, false, 338), "companyName", [], "any", false, false, false, 338), "html", null, true);
            yield "</span>
                                                        <br><small class=\"text-muted\">";
            // line 339
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "hmaService", [], "any", false, false, false, 339), "email", [], "any", false, false, false, 339), "html", null, true);
            yield "</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class=\"badge bg-info\">";
            // line 344
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "billingPeriod", [], "any", false, false, false, 344) == "monthly")) ? ("Mensuel") : ("Annuel"));
            yield "</span>
                                            </td>
                                            <td class=\"status-cell\">
                                                ";
            // line 347
            $context["statusClass"] = ["active" => "success", "pending" => "warning", "expired" => "danger", "cancelled" => "secondary"];
            // line 353
            yield "                                                ";
            $context["statusLabel"] = ["active" => "Actif", "pending" => "En attente", "expired" => "Expiré", "cancelled" => "Annulé"];
            // line 359
            yield "                                                <span class=\"badge bg-";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["statusClass"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 359), [], "array", true, true, false, 359) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 359, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 359), [], "array", false, false, false, 359)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 359, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 359), [], "array", false, false, false, 359), "html", null, true)) : ("secondary"));
            yield "\">
                                                    ";
            // line 360
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["statusLabel"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 360), [], "array", true, true, false, 360) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusLabel"]) || array_key_exists("statusLabel", $context) ? $context["statusLabel"] : (function () { throw new RuntimeError('Variable "statusLabel" does not exist.', 360, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 360), [], "array", false, false, false, 360)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusLabel"]) || array_key_exists("statusLabel", $context) ? $context["statusLabel"] : (function () { throw new RuntimeError('Variable "statusLabel" does not exist.', 360, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 360), [], "array", false, false, false, 360), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 360), "html", null, true)));
            yield "
                                                </span>
                                            </td>
                                            <td class=\"text-center\">";
            // line 363
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "startsAt", [], "any", false, false, false, 363)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "startsAt", [], "any", false, false, false, 363), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</td>
                                            <td class=\"text-center\">";
            // line 364
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 364)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 364), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</td>
                                            <td>
                                                <div class=\"d-flex gap-1 justify-content-center\">
                                                    <a href=\"";
            // line 367
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "id", [], "any", false, false, false, 367)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary rounded-pill\" data-bs-toggle=\"tooltip\" title=\"Détails\">
                                                        <i class=\"fas fa-eye\"></i>
                                                    </a>
                                                    <a href=\"";
            // line 370
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "hmaService", [], "any", false, false, false, 370), "id", [], "any", false, false, false, 370)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info rounded-pill\" data-bs-toggle=\"tooltip\" title=\"Voir entreprise\">
                                                        <i class=\"fas fa-building\"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        // line 376
        if (!$context['_iterated']) {
            // line 377
            yield "                                        <tr>
                                            <td colspan=\"6\" class=\"text-center py-5\">
                                                <i class=\"fas fa-inbox display-4 text-muted\"></i>
                                                <p class=\"mt-3 fs-5\">Aucun abonnement associé</p>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 384
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Version Mobile - Cards -->
                    <div class=\"d-block d-md-none\">
                        ";
        // line 391
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 391, $this->source); })()), "subscriptions", [], "any", false, false, false, 391));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
            // line 392
            yield "                            <div class=\"card border-0 border-bottom rounded-0 subscription-row\" data-start-date=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "startsAt", [], "any", false, false, false, 392)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "startsAt", [], "any", false, false, false, 392), "Y-m-d"), "html", null, true)) : (""));
            yield "\" data-end-date=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 392)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 392), "Y-m-d"), "html", null, true)) : (""));
            yield "\">
                                <div class=\"card-body p-3\">
                                    <div class=\"d-flex align-items-center gap-2 mb-2\">
                                        <div class=\"flex-shrink-0\">
                                            ";
            // line 396
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "hmaService", [], "any", false, false, false, 396), "logo", [], "any", false, false, false, 396)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 397
                yield "                                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "hmaService", [], "any", false, false, false, 397), "logo", [], "any", false, false, false, 397))), "html", null, true);
                yield "\" alt=\"logo\" class=\"rounded-circle\" width=\"40\" height=\"40\">
                                            ";
            } else {
                // line 399
                yield "                                                <div class=\"bg-light rounded-circle d-flex align-items-center justify-content-center\" style=\"width: 40px; height: 40px;\">
                                                    <i class=\"fas fa-building text-muted\"></i>
                                                </div>
                                            ";
            }
            // line 403
            yield "                                        </div>
                                        <div class=\"flex-grow-1\">
                                            <div class=\"fw-semibold\">";
            // line 405
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "hmaService", [], "any", false, false, false, 405), "companyName", [], "any", false, false, false, 405), "html", null, true);
            yield "</div>
                                            <small class=\"text-muted\">";
            // line 406
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "hmaService", [], "any", false, false, false, 406), "email", [], "any", false, false, false, 406), "html", null, true);
            yield "</small>
                                        </div>
                                        <div>
                                            ";
            // line 409
            $context["statusClass"] = ["active" => "success", "pending" => "warning", "expired" => "danger", "cancelled" => "secondary"];
            // line 415
            yield "                                            ";
            $context["statusLabel"] = ["active" => "Actif", "pending" => "En attente", "expired" => "Expiré", "cancelled" => "Annulé"];
            // line 421
            yield "                                            <span class=\"badge bg-";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["statusClass"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 421), [], "array", true, true, false, 421) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 421, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 421), [], "array", false, false, false, 421)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 421, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 421), [], "array", false, false, false, 421), "html", null, true)) : ("secondary"));
            yield "\">
                                                ";
            // line 422
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["statusLabel"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 422), [], "array", true, true, false, 422) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusLabel"]) || array_key_exists("statusLabel", $context) ? $context["statusLabel"] : (function () { throw new RuntimeError('Variable "statusLabel" does not exist.', 422, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 422), [], "array", false, false, false, 422)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusLabel"]) || array_key_exists("statusLabel", $context) ? $context["statusLabel"] : (function () { throw new RuntimeError('Variable "statusLabel" does not exist.', 422, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 422), [], "array", false, false, false, 422), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 422), "html", null, true)));
            yield "
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"row g-1 small\">
                                        <div class=\"col-6\">
                                            <span class=\"text-muted\">Période :</span>
                                            <div><span class=\"badge bg-info\">";
            // line 429
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "billingPeriod", [], "any", false, false, false, 429) == "monthly")) ? ("Mensuel") : ("Annuel"));
            yield "</span></div>
                                        </div>
                                        <div class=\"col-6 text-end\">
                                            <span class=\"text-muted\">Actions :</span>
                                            <div class=\"d-flex gap-1 justify-content-end mt-1\">
                                                <a href=\"";
            // line 434
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "id", [], "any", false, false, false, 434)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary rounded-pill\">
                                                    <i class=\"fas fa-eye\"></i>
                                                </a>
                                                <a href=\"";
            // line 437
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "hmaService", [], "any", false, false, false, 437), "id", [], "any", false, false, false, 437)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info rounded-pill\">
                                                    <i class=\"fas fa-building\"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <span class=\"text-muted\">Début :</span>
                                            <div>";
            // line 444
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "startsAt", [], "any", false, false, false, 444)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "startsAt", [], "any", false, false, false, 444), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</div>
                                        </div>
                                        <div class=\"col-6 text-end\">
                                            <span class=\"text-muted\">Fin :</span>
                                            <div>";
            // line 448
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 448)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 448), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        // line 453
        if (!$context['_iterated']) {
            // line 454
            yield "                            <div class=\"text-center py-5\">
                                <i class=\"fas fa-inbox display-4 text-muted\"></i>
                                <p class=\"mt-3\">Aucun abonnement associé</p>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 459
        yield "                    </div>

                    <!-- Pagination -->
                    ";
        // line 462
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 462, $this->source); })()), "subscriptions", [], "any", false, false, false, 462)) > 10)) {
            // line 463
            yield "                    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2 mt-3 mt-md-4\">
                        <div>
                            <span class=\"text-muted small\">Affichage de <span id=\"showingStart\">1</span> à <span id=\"showingEnd\">10</span> sur <span id=\"totalCount\">";
            // line 465
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 465, $this->source); })()), "subscriptions", [], "any", false, false, false, 465)), "html", null, true);
            yield "</span></span>
                        </div>
                        <nav>
                            <ul class=\"pagination pagination-sm\" id=\"paginationControls\"></ul>
                        </nav>
                    </div>
                    ";
        }
        // line 472
        yield "                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmation activation/désactivation -->
<div class=\"modal fade\" id=\"toggleModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content border-0 rounded-4\">
            <div class=\"modal-header bg-";
        // line 482
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 482, $this->source); })()), "isActive", [], "any", false, false, false, 482)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("success"));
        yield " text-white border-0 py-3\">
                <h5 class=\"modal-title fs-6\">
                    <i class=\"fas fa-";
        // line 484
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 484, $this->source); })()), "isActive", [], "any", false, false, false, 484)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("pause-circle") : ("play-circle"));
        yield " me-2\"></i>
                    ";
        // line 485
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 485, $this->source); })()), "isActive", [], "any", false, false, false, 485)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
        yield " le plan
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body p-3 p-md-4\">
                <p class=\"mb-0 small\">
                    Êtes-vous sûr de vouloir ";
        // line 491
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 491, $this->source); })()), "isActive", [], "any", false, false, false, 491)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("désactiver") : ("activer"));
        yield " le plan <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 491, $this->source); })()), "displayName", [], "any", false, false, false, 491), "html", null, true);
        yield "</strong> ?
                    ";
        // line 492
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 492, $this->source); })()), "isActive", [], "any", false, false, false, 492)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 493
            yield "                        <br><small class=\"text-muted\">Les entreprises avec ce plan ne pourront plus l'utiliser.</small>
                    ";
        } else {
            // line 495
            yield "                        <br><small class=\"text-muted\">Les entreprises pourront souscrire à ce plan.</small>
                    ";
        }
        // line 497
        yield "                </p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center gap-2 py-3\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm rounded-pill px-4\" data-bs-dismiss=\"modal\">Annuler</button>
                <form action=\"";
        // line 501
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 501, $this->source); })()), "id", [], "any", false, false, false, 501)]), "html", null, true);
        yield "\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 502
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 502, $this->source); })()), "id", [], "any", false, false, false, 502))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-";
        // line 503
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 503, $this->source); })()), "isActive", [], "any", false, false, false, 503)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("success"));
        yield " btn-sm rounded-pill px-4\">
                        Confirmer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal de suppression -->
";
        // line 513
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 513, $this->source); })()), "subscriptions", [], "any", false, false, false, 513)) == 0)) {
            // line 514
            yield "<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content border-0 rounded-4\">
            <div class=\"modal-header bg-danger text-white border-0 py-3\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-exclamation-triangle me-2\"></i>Supprimer le plan</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body p-3 p-md-4\">
                <p class=\"mb-0 small\">Attention, cette action est irréversible. Voulez-vous vraiment supprimer le plan <strong>";
            // line 522
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 522, $this->source); })()), "displayName", [], "any", false, false, false, 522), "html", null, true);
            yield "</strong> ?</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center gap-2 py-3\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm rounded-pill px-4\" data-bs-dismiss=\"modal\">Annuler</button>
                <form action=\"";
            // line 526
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_subscription_plan_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 526, $this->source); })()), "id", [], "any", false, false, false, 526)]), "html", null, true);
            yield "\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 527
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 527, $this->source); })()), "id", [], "any", false, false, false, 527))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm rounded-pill px-4\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        }
        // line 535
        yield "
<style>
.modern-header {
    min-height: 160px;
    position: relative;
    box-shadow: 0 25px 40px -12px rgba(0,0,0,0.4);
}
@media (min-width: 768px) {
    .modern-header {
        min-height: 220px;
    }
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
    width: 150px;
    height: 150px;
    top: -50px;
    right: -30px;
    animation: float 12s ease-in-out infinite;
}
.shape-2 {
    width: 100px;
    height: 100px;
    bottom: -30px;
    left: -20px;
    animation: float 15s ease-in-out infinite reverse;
}
.shape-3 {
    width: 80px;
    height: 80px;
    top: 30%;
    left: 20%;
    animation: float 10s ease-in-out infinite;
}
@media (min-width: 768px) {
    .shape-1 {
        width: 300px;
        height: 300px;
        top: -100px;
        right: -50px;
    }
    .shape-2 {
        width: 200px;
        height: 200px;
        bottom: -50px;
        left: -20px;
    }
    .shape-3 {
        width: 150px;
        height: 150px;
    }
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
.fs-7 {
    font-size: 0.8rem !important;
}
@media (max-width: 576px) {
    .container-fluid {
        padding-left: 8px !important;
        padding-right: 8px !important;
    }
    .card-body {
        padding: 12px !important;
    }
    .badge {
        font-size: 0.7rem !important;
    }
    .btn-sm {
        font-size: 0.7rem;
        padding: 0.2rem 0.5rem;
    }
    .btn {
        font-size: 0.75rem;
    }
    .modal-dialog {
        margin: 0.5rem;
    }
    .modal-content {
        border-radius: 12px !important;
    }
    .pagination .page-link {
        padding: 0.2rem 0.5rem;
        font-size: 0.7rem;
    }
    .pagination .page-item:not(.active):not(.prev):not(.next) .page-link {
        display: none;
    }
    .pagination .page-item.active .page-link,
    .pagination .page-item.prev .page-link,
    .pagination .page-item.next .page-link {
        display: block;
    }
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
    const rows = document.querySelectorAll('.subscription-row');
    const rowsPerPage = 10;
    let currentPage = 1;
    let filteredRows = Array.from(rows);
    
    let activeSearchTerm = '';
    let activeDateStart = '';
    let activeDateEnd = '';

    // Toggle du panneau de filtres
    if (filterToggleBtn && filterPanel) {
        filterToggleBtn.addEventListener('click', function() {
            if (filterPanel.style.display === 'none' || filterPanel.style.display === '') {
                filterPanel.style.display = 'flex';
                filterToggleBtn.innerHTML = '<i class=\"fas fa-filter me-1\"></i> <span class=\"d-none d-sm-inline\">Masquer filtres</span><span class=\"d-inline d-sm-none\">Masquer</span>';
            } else {
                filterPanel.style.display = 'none';
                filterToggleBtn.innerHTML = '<i class=\"fas fa-filter me-1\"></i> <span class=\"d-none d-sm-inline\">Filtres</span><span class=\"d-inline d-sm-none\">Filtres</span>';
            }
        });
    }

    function filterTable() {
        filteredRows = Array.from(rows).filter(row => {
            const companyCell = row.querySelector('.fw-semibold')?.innerText.toLowerCase() || '';
            const statusCell = row.querySelector('.status-cell')?.innerText.toLowerCase() || '';
            const periodCell = row.querySelector('.badge.bg-info')?.innerText.toLowerCase() || '';
            const matchesSearch = companyCell.includes(activeSearchTerm) || statusCell.includes(activeSearchTerm) || periodCell.includes(activeSearchTerm);
            
            const rowStartDate = row.dataset.startDate || '';
            const matchesStartDate = !activeDateStart || (rowStartDate && rowStartDate >= activeDateStart);
            
            const rowEndDate = row.dataset.endDate || '';
            const matchesEndDate = !activeDateEnd || (rowEndDate && rowEndDate <= activeDateEnd);
            
            return matchesSearch && matchesStartDate && matchesEndDate;
        });
        
        currentPage = 1;
        updatePagination();
        displayRows();
        
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

        const noResultsRow = document.querySelector('.no-results-row');
        if (filteredRows.length === 0) {
            if (!noResultsRow) {
                const tr = document.createElement('tr');
                tr.className = 'no-results-row';
                tr.innerHTML = '<td colspan=\"6\" class=\"text-center py-4\"><i class=\"fas fa-exclamation-circle me-2\"></i>Aucun résultat trouvé</td>';
                const tbody = document.querySelector('#subscriptionsTable tbody');
                if (tbody) tbody.appendChild(tr);
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
    
    if (resetFiltersHeaderBtn) resetFiltersHeaderBtn.style.display = 'none';
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
        return array (  979 => 535,  968 => 527,  964 => 526,  957 => 522,  947 => 514,  945 => 513,  932 => 503,  928 => 502,  924 => 501,  918 => 497,  914 => 495,  910 => 493,  908 => 492,  902 => 491,  893 => 485,  889 => 484,  884 => 482,  872 => 472,  862 => 465,  858 => 463,  856 => 462,  851 => 459,  841 => 454,  839 => 453,  829 => 448,  822 => 444,  812 => 437,  806 => 434,  798 => 429,  788 => 422,  783 => 421,  780 => 415,  778 => 409,  772 => 406,  768 => 405,  764 => 403,  758 => 399,  752 => 397,  750 => 396,  740 => 392,  735 => 391,  726 => 384,  714 => 377,  712 => 376,  701 => 370,  695 => 367,  689 => 364,  685 => 363,  679 => 360,  674 => 359,  671 => 353,  669 => 347,  663 => 344,  655 => 339,  651 => 338,  647 => 336,  641 => 332,  635 => 330,  633 => 329,  623 => 325,  618 => 324,  560 => 269,  542 => 253,  534 => 247,  526 => 241,  524 => 240,  516 => 235,  511 => 233,  507 => 232,  503 => 231,  499 => 230,  492 => 226,  482 => 219,  475 => 215,  471 => 214,  467 => 213,  462 => 210,  458 => 208,  449 => 205,  446 => 204,  442 => 203,  436 => 199,  434 => 198,  430 => 196,  426 => 194,  422 => 192,  416 => 190,  412 => 188,  410 => 187,  406 => 185,  403 => 184,  399 => 182,  393 => 180,  389 => 178,  387 => 177,  383 => 175,  381 => 174,  375 => 170,  372 => 169,  370 => 168,  365 => 165,  359 => 162,  356 => 161,  353 => 160,  347 => 157,  344 => 156,  341 => 155,  335 => 152,  332 => 151,  329 => 150,  323 => 147,  320 => 146,  317 => 145,  311 => 142,  308 => 141,  306 => 140,  296 => 132,  290 => 129,  286 => 127,  284 => 126,  274 => 119,  265 => 113,  256 => 107,  243 => 97,  234 => 91,  225 => 85,  210 => 73,  198 => 63,  192 => 62,  181 => 57,  177 => 56,  171 => 54,  166 => 53,  162 => 52,  141 => 34,  134 => 29,  128 => 28,  121 => 24,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ plan.displayName }} - Détails du plan{% endblock %}

{% block body %}
<div class=\"container-fluid px-2 px-sm-3 px-md-4 py-3 py-md-4 bg-light min-vh-100\">
    <!-- En-tête moderne avec dégradé -->
    <div class=\"row mb-4 mb-md-5\">
        <div class=\"col-12\">
            <div class=\"modern-header position-relative overflow-hidden rounded-4 rounded-md-5 shadow-lg p-3 p-sm-4 p-md-5 text-white\" 
                style=\"background: linear-gradient(145deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);\">
                <div class=\"floating-bg\">
                    <div class=\"shape shape-1\"></div>
                    <div class=\"shape shape-2\"></div>
                    <div class=\"shape shape-3\"></div>
                </div>
                <div class=\"position-relative z-1\">
                    <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3\">
                        <div class=\"d-flex align-items-center gap-3 gap-md-4 w-100 w-md-auto\">
                            <div class=\"icon-wrapper bg-white bg-opacity-20 backdrop-blur rounded-3 rounded-md-4 p-3 p-md-4 flex-shrink-0\">
                                <i class=\"fas fa-tag text-white display-6 display-md-4\"></i>
                            </div>
                            <div class=\"flex-grow-1\">
                                <h1 class=\"h3 h-md-2 h-lg-1 display-md-4 fw-bold mb-1 mb-md-2 text-break\">{{ plan.displayName }}</h1>
                                <p class=\"text-white-50 mb-0 fs-6 fs-md-5\">
                                    Détails du plan d'abonnement
                                    <span class=\"badge bg-white text-dark rounded-pill px-2 px-md-3 py-1 py-md-2 ms-1 ms-md-2 d-inline-block mt-1 mt-md-0\">
                                        {% if plan.isUnlimited %}Illimité{% else %}Limité{% endif %}
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class=\"w-100 w-md-auto\">
                            <a href=\"{{ path('app_super_admin_subscription_plan_index') }}\" class=\"btn btn-light rounded-pill px-3 px-md-4 py-2 py-md-2 shadow-sm w-100 w-md-auto d-flex align-items-center justify-content-center\" style=\"cursor: pointer; position: relative; z-index: 100;\">
                                <i class=\"fas fa-arrow-left me-2\"></i>
                                <span class=\"d-none d-sm-inline\">Retour à la liste</span>
                                <span class=\"d-inline d-sm-none\">Retour</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"wave-bottom d-none d-sm-block\">
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
            <div class=\"alert alert-{{ label }} alert-dismissible fade show rounded-3 rounded-md-4 shadow-sm mb-3 mb-md-4 border-0\" role=\"alert\">
                <div class=\"d-flex align-items-center gap-2 gap-md-3\">
                    <i class=\"fas fa-{{ label == 'success' ? 'check-circle' : 'exclamation-triangle' }} fs-5 fs-md-4 flex-shrink-0\"></i>
                    <span class=\"small small-md\">{{ message }}</span>
                </div>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        {% endfor %}
    {% endfor %}

    <!-- Détails du plan -->
    <div class=\"row mb-4 mb-md-5\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-lg rounded-3 rounded-md-4 overflow-hidden\">
                <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3 d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2\">
                    <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\">
                        <i class=\"fas fa-info-circle me-2\"></i>Informations générales
                    </h5>
                    <span class=\"badge bg-white text-dark rounded-pill px-3 py-1 fs-7 fs-md-6\">
                        ID: #{{ plan.id }}
                    </span>
                </div>
                <div class=\"card-body p-3 p-md-4\">
                    <!-- Informations générales en version responsive -->
                    <div class=\"row g-3 g-md-4\">
                        <div class=\"col-12 col-md-6\">
                            <ul class=\"list-unstyled mb-0\">
                                <li class=\"mb-2 mb-md-3 d-flex align-items-center\">
                                    <div class=\"bg-primary bg-opacity-10 p-2 rounded-2 rounded-md-3 me-2 me-md-3 flex-shrink-0\">
                                        <i class=\"fas fa-tag text-white\"></i>
                                    </div>
                                    <div class=\"small small-md\"><strong>Nom :</strong> {{ plan.name }}</div>
                                </li>
                                <li class=\"mb-2 mb-md-3 d-flex align-items-center\">
                                    <div class=\"bg-success bg-opacity-10 p-2 rounded-2 rounded-md-3 me-2 me-md-3 flex-shrink-0\">
                                        <i class=\"fas fa-calendar-check text-white\"></i>
                                    </div>
                                    <div class=\"small small-md\"><strong>Créé le :</strong> {{ plan.createdAt|date('d/m/Y H:i') }}</div>
                                </li>
                                <li class=\"mb-2 mb-md-3 d-flex align-items-center\">
                                    <div class=\"bg-warning bg-opacity-10 p-2 rounded-2 rounded-md-3 me-2 me-md-3 flex-shrink-0\">
                                        <i class=\"fas fa-sync-alt text-white\"></i>
                                    </div>
                                    <div class=\"small small-md\"><strong>Mis à jour :</strong> {{ plan.updatedAt ? plan.updatedAt|date('d/m/Y H:i') : 'Jamais' }}</div>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-12 col-md-6\">
                            <ul class=\"list-unstyled mb-0\">
                                <li class=\"mb-2 mb-md-3 d-flex align-items-center\">
                                    <div class=\"bg-success bg-opacity-10 p-2 rounded-2 rounded-md-3 me-2 me-md-3 flex-shrink-0\">
                                        <i class=\"fas fa-money-bill-wave text-white\"></i>
                                    </div>
                                    <div class=\"small small-md\"><strong>Mensuel :</strong> {{ plan.priceMonthly|number_format(0, ',', ' ') }} FCFA</div>
                                </li>
                                <li class=\"mb-2 mb-md-3 d-flex align-items-center\">
                                    <div class=\"bg-warning bg-opacity-10 p-2 rounded-2 rounded-md-3 me-2 me-md-3 flex-shrink-0\">
                                        <i class=\"fas fa-money-bill-wave text-white\"></i>
                                    </div>
                                    <div class=\"small small-md\"><strong>Annuel :</strong> {{ plan.priceYearly|number_format(0, ',', ' ') }} FCFA</div>
                                </li>
                                <li class=\"mb-2 mb-md-3 d-flex align-items-center\">
                                    <div class=\"bg-info bg-opacity-10 p-2 rounded-2 rounded-md-3 me-2 me-md-3 flex-shrink-0\">
                                        <i class=\"fas fa-chart-bar text-white\"></i>
                                    </div>
                                    <div class=\"small small-md\"><strong>Abonnements :</strong> {{ plan.subscriptions|length }}</div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Description -->
                    {% if plan.description %}
                        <div class=\"description-box p-2 p-md-3 rounded-3 mt-3 mt-md-4 mb-3 mb-md-4\">
                            <i class=\"fas fa-quote-left me-2 text-info\"></i>
                            <em class=\"small small-md\">{{ plan.description }}</em>
                        </div>
                    {% endif %}

                    <hr class=\"my-3 my-md-4\">

                    <!-- Limites Commerce -->
                    <h6 class=\"fw-bold mb-2 mb-md-3 fs-6 fs-md-5\">
                        <i class=\"fas fa-store me-2 text-primary\"></i>Limites Commerce
                    </h6>
                    <div class=\"d-flex flex-wrap gap-1 gap-md-2 mb-3 mb-md-4\">
                        {% if plan.maxUsersPerRole is not null %}
                            <span class=\"badge bg-light text-dark border px-2 px-md-3 py-1 py-md-2 rounded-pill fs-7 fs-md-6\">
                                <i class=\"fas fa-users text-success me-1\"></i> {{ plan.maxUsersPerRole }} utilisateurs/rôle
                            </span>
                        {% endif %}
                        {% if plan.maxProducts is not null %}
                            <span class=\"badge bg-light text-dark border px-2 px-md-3 py-1 py-md-2 rounded-pill fs-7 fs-md-6\">
                                <i class=\"fas fa-box text-info me-1\"></i> {{ plan.maxProducts|number_format }} produits
                            </span>
                        {% endif %}
                        {% if plan.maxOrdersPerMonth is not null %}
                            <span class=\"badge bg-light text-dark border px-2 px-md-3 py-1 py-md-2 rounded-pill fs-7 fs-md-6\">
                                <i class=\"fas fa-shopping-cart text-warning me-1\"></i> {{ plan.maxOrdersPerMonth|number_format }} commandes/mois
                            </span>
                        {% endif %}
                        {% if plan.maxCategories is not null %}
                            <span class=\"badge bg-light text-dark border px-2 px-md-3 py-1 py-md-2 rounded-pill fs-7 fs-md-6\">
                                <i class=\"fas fa-tags text-primary me-1\"></i> {{ plan.maxCategories|number_format }} catégories
                            </span>
                        {% endif %}
                        {% if plan.maxSuppliers is not null %}
                            <span class=\"badge bg-light text-dark border px-2 px-md-3 py-1 py-md-2 rounded-pill fs-7 fs-md-6\">
                                <i class=\"fas fa-truck text-secondary me-1\"></i> {{ plan.maxSuppliers|number_format }} fournisseurs
                            </span>
                        {% endif %}
                    </div>

                    <!-- Limites Restaurant -->
                    {% set hasRestaurantLimits = plan.maxRecipes is not null or plan.maxRecipeCategories is not null %}
                    {% if hasRestaurantLimits %}
                        <h6 class=\"fw-bold mb-2 mb-md-3 mt-3 mt-md-4 fs-6 fs-md-5\">
                            <i class=\"fas fa-utensils me-2 text-success\"></i>Limites Restaurant
                        </h6>
                        <div class=\"d-flex flex-wrap gap-1 gap-md-2 mb-3 mb-md-4\">
                            {% if plan.maxRecipes is not null %}
                                <span class=\"badge bg-light text-dark border px-2 px-md-3 py-1 py-md-2 rounded-pill fs-7 fs-md-6\">
                                    <i class=\"fas fa-book text-success me-1\"></i> 
                                    {% if plan.maxRecipes >= 999999999 %}
                                        ♾️ Recettes illimitées
                                    {% else %}
                                        {{ plan.maxRecipes|number_format }} recettes
                                    {% endif %}
                                </span>
                            {% endif %}
                            {% if plan.maxRecipeCategories is not null %}
                                <span class=\"badge bg-light text-dark border px-2 px-md-3 py-1 py-md-2 rounded-pill fs-7 fs-md-6\">
                                    <i class=\"fas fa-tag text-info me-1\"></i> 
                                    {% if plan.maxRecipeCategories >= 999999999 %}
                                        ♾️ Catégories illimitées
                                    {% else %}
                                        {{ plan.maxRecipeCategories|number_format }} catégories
                                    {% endif %}
                                </span>
                            {% endif %}
                        </div>
                    {% endif %}

                    <!-- Fonctionnalités incluses -->
                    {% if plan.features|length > 0 %}
                        <h6 class=\"fw-bold mb-2 mb-md-3 fs-6 fs-md-5\">
                            <i class=\"fas fa-star text-warning me-2\"></i>Fonctionnalités incluses
                        </h6>
                        <div class=\"d-flex flex-wrap gap-1 gap-md-2 mb-3 mb-md-4\">
                            {% for feature in plan.features %}
                                <span class=\"badge bg-light text-dark border rounded-pill px-2 px-md-3 py-1 py-md-2 fs-7 fs-md-6\">
                                    <i class=\"fas fa-check-circle text-success me-1\"></i> {{ feature }}
                                </span>
                            {% endfor %}
                        </div>
                    {% endif %}

                    <!-- Statut - Version responsive -->
                    <div class=\"mt-3 mt-md-4 d-flex flex-wrap align-items-center gap-2 gap-md-3\">
                        <span class=\"badge bg-{{ plan.isActive ? 'success' : 'secondary' }} fs-7 fs-md-6 p-2 p-md-3 rounded-pill\">
                            <i class=\"fas fa-{{ plan.isActive ? 'check-circle' : 'times-circle' }} me-1\"></i>
                            {{ plan.isActive ? 'Plan actif' : 'Plan inactif' }}
                        </span>
                        <span class=\"badge bg-info fs-7 fs-md-6 p-2 p-md-3 rounded-pill\">
                            <i class=\"fas fa-chart-bar me-1\"></i>
                            {{ plan.subscriptions|length }} abonnement(s)
                        </span>
                    </div>
                </div>

                <!-- Actions du footer - Version responsive -->
                <div class=\"card-footer bg-transparent border-0 p-3 p-md-4 d-flex flex-column flex-sm-row justify-content-between align-items-stretch align-items-sm-center gap-2 gap-sm-3\">
                    <a href=\"{{ path('app_super_admin_subscription_plan_index') }}\" class=\"btn btn-outline-secondary rounded-pill px-3 px-md-4 py-2 text-center w-100 w-sm-auto order-2 order-sm-1\">
                        <i class=\"fas fa-arrow-left me-2\"></i>Retour
                    </a>
                    <div class=\"d-flex flex-wrap gap-2 justify-content-center justify-content-sm-end w-100 w-sm-auto order-1 order-sm-2\">
                        <button type=\"button\" class=\"btn btn-outline-{{ plan.isActive ? 'warning' : 'success' }} rounded-pill px-3 px-md-4 py-2 flex-grow-1 flex-sm-grow-0\" data-bs-toggle=\"modal\" data-bs-target=\"#toggleModal\">
                            <i class=\"fas fa-{{ plan.isActive ? 'pause' : 'play' }} me-1 me-md-2\"></i>
                            <span class=\"d-none d-sm-inline\">{{ plan.isActive ? 'Désactiver' : 'Activer' }}</span>
                            <span class=\"d-inline d-sm-none\">{{ plan.isActive ? 'Désact.' : 'Activer' }}</span>
                        </button>
                        <a href=\"{{ path('app_super_admin_subscription_plan_edit', {'id': plan.id}) }}\" class=\"btn btn-outline-primary rounded-pill px-3 px-md-4 py-2 flex-grow-1 flex-sm-grow-0\">
                            <i class=\"fas fa-edit me-1 me-md-2\"></i>
                            <span class=\"d-none d-sm-inline\">Modifier</span>
                            <span class=\"d-inline d-sm-none\">Modif.</span>
                        </a>
                        {% if plan.subscriptions|length == 0 %}
                            <button type=\"button\" class=\"btn btn-outline-danger rounded-pill px-3 px-md-4 py-2 flex-grow-1 flex-sm-grow-0\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                                <i class=\"fas fa-trash me-1 me-md-2\"></i>
                                <span class=\"d-none d-sm-inline\">Supprimer</span>
                                <span class=\"d-inline d-sm-none\">Suppr.</span>
                            </button>
                        {% else %}
                            <button type=\"button\" class=\"btn btn-outline-danger rounded-pill px-3 px-md-4 py-2 flex-grow-1 flex-sm-grow-0\" disabled title=\"Impossible de supprimer : des abonnements sont liés à ce plan\">
                                <i class=\"fas fa-trash me-1 me-md-2\"></i>
                                <span class=\"d-none d-sm-inline\">Supprimer</span>
                                <span class=\"d-inline d-sm-none\">Suppr.</span>
                            </button>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des abonnements -->
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-12\">
            <div class=\"card border-0 shadow-lg rounded-3 rounded-md-4\">
                <div class=\"card-header bg-gradient-secondary text-white py-2 py-md-3 d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2\">
                    <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\">
                        <i class=\"fas fa-list-ul me-2\"></i>Liste des abonnements
                    </h5>
                    <div class=\"d-flex flex-wrap gap-2 align-items-center w-100 w-sm-auto\">
                        <span class=\"badge bg-white text-dark rounded-pill px-3 py-1 fs-7 fs-md-6\">
                            {{ plan.subscriptions|length }} abonnement(s)
                        </span>
                        <button class=\"btn btn-light btn-sm rounded-pill px-3 flex-grow-1 flex-sm-grow-0\" id=\"filterToggleBtn\">
                            <i class=\"fas fa-filter me-1\"></i>
                            <span class=\"d-none d-sm-inline\">Filtres</span>
                            <span class=\"d-inline d-sm-none\">Filtres</span>
                        </button>
                        <button class=\"btn btn-outline-light btn-sm rounded-pill px-3 flex-grow-1 flex-sm-grow-0\" id=\"resetFiltersBtn\" style=\"display: none;\">
                            <i class=\"fas fa-undo-alt me-1\"></i>
                            <span class=\"d-none d-sm-inline\">Réinitialiser</span>
                            <span class=\"d-inline d-sm-none\">Reset</span>
                        </button>
                    </div>
                </div>
                <div class=\"card-body p-2 p-sm-3 p-md-4\">
                    <!-- Panneau de filtres -->
                    <div id=\"filterPanel\" class=\"row g-2 g-md-3 mb-3 mb-md-4\" style=\"display: none;\">
                        <div class=\"col-12 col-md-5\">
                            <div class=\"input-group input-group-sm\">
                                <span class=\"input-group-text bg-transparent border-end-0\">
                                    <i class=\"fas fa-search\"></i>
                                </span>
                                <input type=\"text\" class=\"form-control border-start-0\" id=\"tableSearch\" placeholder=\"Rechercher...\">
                            </div>
                        </div>
                        <div class=\"col-6 col-md-3\">
                            <input type=\"date\" class=\"form-control form-control-sm\" id=\"dateStartFilter\" placeholder=\"Date début\">
                        </div>
                        <div class=\"col-6 col-md-3\">
                            <input type=\"date\" class=\"form-control form-control-sm\" id=\"dateEndFilter\" placeholder=\"Date fin\">
                        </div>
                        <div class=\"col-12 col-md-1\">
                            <button class=\"btn btn-primary btn-sm w-100\" id=\"applyFiltersBtn\">
                                <i class=\"fas fa-filter me-1\"></i>
                                <span class=\"d-none d-sm-inline\">Appliquer</span>
                                <span class=\"d-inline d-sm-none\">OK</span>
                            </button>
                        </div>
                    </div>

                    <!-- Version Desktop - Tableau -->
                    <div class=\"d-none d-md-block\">
                        <div class=\"table-responsive\" style=\"max-height: 500px; overflow-y: auto;\">
                            <table class=\"table table-hover align-middle mb-0\" id=\"subscriptionsTable\">
                                <thead class=\"bg-light sticky-top\">
                                    <tr>
                                        <th class=\"py-2 px-3\">Entreprise</th>
                                        <th class=\"py-2 px-3\">Période</th>
                                        <th class=\"py-2 px-3\">Statut</th>
                                        <th class=\"py-2 px-3\">Début</th>
                                        <th class=\"py-2 px-3\">Fin</th>
                                        <th class=\"py-2 px-3 text-center\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for subscription in plan.subscriptions %}
                                        <tr class=\"subscription-row\" data-start-date=\"{{ subscription.startsAt ? subscription.startsAt|date('Y-m-d') : '' }}\" data-end-date=\"{{ subscription.endsAt ? subscription.endsAt|date('Y-m-d') : '' }}\">
                                            <td>
                                                <div class=\"d-flex align-items-center gap-2\">
                                                    <div class=\"symbol-40px flex-shrink-0\">
                                                        {% if subscription.hmaService.logo %}
                                                            <img src=\"{{ asset('uploads/logos/' ~ subscription.hmaService.logo) }}\" alt=\"logo\" class=\"rounded-circle\" width=\"32\" height=\"32\">
                                                        {% else %}
                                                            <div class=\"bg-light rounded-circle d-flex align-items-center justify-content-center\" style=\"width: 32px; height: 32px;\">
                                                                <i class=\"fas fa-building text-muted\"></i>
                                                            </div>
                                                        {% endif %}
                                                    </div>
                                                    <div>
                                                        <span class=\"fw-semibold small\">{{ subscription.hmaService.companyName }}</span>
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
                                            <td class=\"text-center\">{{ subscription.startsAt ? subscription.startsAt|date('d/m/Y') : '-' }}</td>
                                            <td class=\"text-center\">{{ subscription.endsAt ? subscription.endsAt|date('d/m/Y') : '-' }}</td>
                                            <td>
                                                <div class=\"d-flex gap-1 justify-content-center\">
                                                    <a href=\"{{ path('super_admin_subscription_show', {'id': subscription.id}) }}\" class=\"btn btn-sm btn-outline-primary rounded-pill\" data-bs-toggle=\"tooltip\" title=\"Détails\">
                                                        <i class=\"fas fa-eye\"></i>
                                                    </a>
                                                    <a href=\"{{ path('app_super_admin_hma_service_show', {'id': subscription.hmaService.id}) }}\" class=\"btn btn-sm btn-outline-info rounded-pill\" data-bs-toggle=\"tooltip\" title=\"Voir entreprise\">
                                                        <i class=\"fas fa-building\"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"6\" class=\"text-center py-5\">
                                                <i class=\"fas fa-inbox display-4 text-muted\"></i>
                                                <p class=\"mt-3 fs-5\">Aucun abonnement associé</p>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Version Mobile - Cards -->
                    <div class=\"d-block d-md-none\">
                        {% for subscription in plan.subscriptions %}
                            <div class=\"card border-0 border-bottom rounded-0 subscription-row\" data-start-date=\"{{ subscription.startsAt ? subscription.startsAt|date('Y-m-d') : '' }}\" data-end-date=\"{{ subscription.endsAt ? subscription.endsAt|date('Y-m-d') : '' }}\">
                                <div class=\"card-body p-3\">
                                    <div class=\"d-flex align-items-center gap-2 mb-2\">
                                        <div class=\"flex-shrink-0\">
                                            {% if subscription.hmaService.logo %}
                                                <img src=\"{{ asset('uploads/logos/' ~ subscription.hmaService.logo) }}\" alt=\"logo\" class=\"rounded-circle\" width=\"40\" height=\"40\">
                                            {% else %}
                                                <div class=\"bg-light rounded-circle d-flex align-items-center justify-content-center\" style=\"width: 40px; height: 40px;\">
                                                    <i class=\"fas fa-building text-muted\"></i>
                                                </div>
                                            {% endif %}
                                        </div>
                                        <div class=\"flex-grow-1\">
                                            <div class=\"fw-semibold\">{{ subscription.hmaService.companyName }}</div>
                                            <small class=\"text-muted\">{{ subscription.hmaService.email }}</small>
                                        </div>
                                        <div>
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
                                        </div>
                                    </div>
                                    <div class=\"row g-1 small\">
                                        <div class=\"col-6\">
                                            <span class=\"text-muted\">Période :</span>
                                            <div><span class=\"badge bg-info\">{{ subscription.billingPeriod == 'monthly' ? 'Mensuel' : 'Annuel' }}</span></div>
                                        </div>
                                        <div class=\"col-6 text-end\">
                                            <span class=\"text-muted\">Actions :</span>
                                            <div class=\"d-flex gap-1 justify-content-end mt-1\">
                                                <a href=\"{{ path('super_admin_subscription_show', {'id': subscription.id}) }}\" class=\"btn btn-sm btn-outline-primary rounded-pill\">
                                                    <i class=\"fas fa-eye\"></i>
                                                </a>
                                                <a href=\"{{ path('app_super_admin_hma_service_show', {'id': subscription.hmaService.id}) }}\" class=\"btn btn-sm btn-outline-info rounded-pill\">
                                                    <i class=\"fas fa-building\"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <span class=\"text-muted\">Début :</span>
                                            <div>{{ subscription.startsAt ? subscription.startsAt|date('d/m/Y') : '-' }}</div>
                                        </div>
                                        <div class=\"col-6 text-end\">
                                            <span class=\"text-muted\">Fin :</span>
                                            <div>{{ subscription.endsAt ? subscription.endsAt|date('d/m/Y') : '-' }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% else %}
                            <div class=\"text-center py-5\">
                                <i class=\"fas fa-inbox display-4 text-muted\"></i>
                                <p class=\"mt-3\">Aucun abonnement associé</p>
                            </div>
                        {% endfor %}
                    </div>

                    <!-- Pagination -->
                    {% if plan.subscriptions|length > 10 %}
                    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2 mt-3 mt-md-4\">
                        <div>
                            <span class=\"text-muted small\">Affichage de <span id=\"showingStart\">1</span> à <span id=\"showingEnd\">10</span> sur <span id=\"totalCount\">{{ plan.subscriptions|length }}</span></span>
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
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content border-0 rounded-4\">
            <div class=\"modal-header bg-{{ plan.isActive ? 'warning' : 'success' }} text-white border-0 py-3\">
                <h5 class=\"modal-title fs-6\">
                    <i class=\"fas fa-{{ plan.isActive ? 'pause-circle' : 'play-circle' }} me-2\"></i>
                    {{ plan.isActive ? 'Désactiver' : 'Activer' }} le plan
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body p-3 p-md-4\">
                <p class=\"mb-0 small\">
                    Êtes-vous sûr de vouloir {{ plan.isActive ? 'désactiver' : 'activer' }} le plan <strong>{{ plan.displayName }}</strong> ?
                    {% if plan.isActive %}
                        <br><small class=\"text-muted\">Les entreprises avec ce plan ne pourront plus l'utiliser.</small>
                    {% else %}
                        <br><small class=\"text-muted\">Les entreprises pourront souscrire à ce plan.</small>
                    {% endif %}
                </p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center gap-2 py-3\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm rounded-pill px-4\" data-bs-dismiss=\"modal\">Annuler</button>
                <form action=\"{{ path('app_super_admin_subscription_plan_toggle', {'id': plan.id}) }}\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle' ~ plan.id) }}\">
                    <button type=\"submit\" class=\"btn btn-{{ plan.isActive ? 'warning' : 'success' }} btn-sm rounded-pill px-4\">
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
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content border-0 rounded-4\">
            <div class=\"modal-header bg-danger text-white border-0 py-3\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-exclamation-triangle me-2\"></i>Supprimer le plan</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body p-3 p-md-4\">
                <p class=\"mb-0 small\">Attention, cette action est irréversible. Voulez-vous vraiment supprimer le plan <strong>{{ plan.displayName }}</strong> ?</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center gap-2 py-3\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm rounded-pill px-4\" data-bs-dismiss=\"modal\">Annuler</button>
                <form action=\"{{ path('app_super_admin_subscription_plan_delete', {'id': plan.id}) }}\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ plan.id) }}\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm rounded-pill px-4\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endif %}

<style>
.modern-header {
    min-height: 160px;
    position: relative;
    box-shadow: 0 25px 40px -12px rgba(0,0,0,0.4);
}
@media (min-width: 768px) {
    .modern-header {
        min-height: 220px;
    }
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
    width: 150px;
    height: 150px;
    top: -50px;
    right: -30px;
    animation: float 12s ease-in-out infinite;
}
.shape-2 {
    width: 100px;
    height: 100px;
    bottom: -30px;
    left: -20px;
    animation: float 15s ease-in-out infinite reverse;
}
.shape-3 {
    width: 80px;
    height: 80px;
    top: 30%;
    left: 20%;
    animation: float 10s ease-in-out infinite;
}
@media (min-width: 768px) {
    .shape-1 {
        width: 300px;
        height: 300px;
        top: -100px;
        right: -50px;
    }
    .shape-2 {
        width: 200px;
        height: 200px;
        bottom: -50px;
        left: -20px;
    }
    .shape-3 {
        width: 150px;
        height: 150px;
    }
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
.fs-7 {
    font-size: 0.8rem !important;
}
@media (max-width: 576px) {
    .container-fluid {
        padding-left: 8px !important;
        padding-right: 8px !important;
    }
    .card-body {
        padding: 12px !important;
    }
    .badge {
        font-size: 0.7rem !important;
    }
    .btn-sm {
        font-size: 0.7rem;
        padding: 0.2rem 0.5rem;
    }
    .btn {
        font-size: 0.75rem;
    }
    .modal-dialog {
        margin: 0.5rem;
    }
    .modal-content {
        border-radius: 12px !important;
    }
    .pagination .page-link {
        padding: 0.2rem 0.5rem;
        font-size: 0.7rem;
    }
    .pagination .page-item:not(.active):not(.prev):not(.next) .page-link {
        display: none;
    }
    .pagination .page-item.active .page-link,
    .pagination .page-item.prev .page-link,
    .pagination .page-item.next .page-link {
        display: block;
    }
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
    const rows = document.querySelectorAll('.subscription-row');
    const rowsPerPage = 10;
    let currentPage = 1;
    let filteredRows = Array.from(rows);
    
    let activeSearchTerm = '';
    let activeDateStart = '';
    let activeDateEnd = '';

    // Toggle du panneau de filtres
    if (filterToggleBtn && filterPanel) {
        filterToggleBtn.addEventListener('click', function() {
            if (filterPanel.style.display === 'none' || filterPanel.style.display === '') {
                filterPanel.style.display = 'flex';
                filterToggleBtn.innerHTML = '<i class=\"fas fa-filter me-1\"></i> <span class=\"d-none d-sm-inline\">Masquer filtres</span><span class=\"d-inline d-sm-none\">Masquer</span>';
            } else {
                filterPanel.style.display = 'none';
                filterToggleBtn.innerHTML = '<i class=\"fas fa-filter me-1\"></i> <span class=\"d-none d-sm-inline\">Filtres</span><span class=\"d-inline d-sm-none\">Filtres</span>';
            }
        });
    }

    function filterTable() {
        filteredRows = Array.from(rows).filter(row => {
            const companyCell = row.querySelector('.fw-semibold')?.innerText.toLowerCase() || '';
            const statusCell = row.querySelector('.status-cell')?.innerText.toLowerCase() || '';
            const periodCell = row.querySelector('.badge.bg-info')?.innerText.toLowerCase() || '';
            const matchesSearch = companyCell.includes(activeSearchTerm) || statusCell.includes(activeSearchTerm) || periodCell.includes(activeSearchTerm);
            
            const rowStartDate = row.dataset.startDate || '';
            const matchesStartDate = !activeDateStart || (rowStartDate && rowStartDate >= activeDateStart);
            
            const rowEndDate = row.dataset.endDate || '';
            const matchesEndDate = !activeDateEnd || (rowEndDate && rowEndDate <= activeDateEnd);
            
            return matchesSearch && matchesStartDate && matchesEndDate;
        });
        
        currentPage = 1;
        updatePagination();
        displayRows();
        
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

        const noResultsRow = document.querySelector('.no-results-row');
        if (filteredRows.length === 0) {
            if (!noResultsRow) {
                const tr = document.createElement('tr');
                tr.className = 'no-results-row';
                tr.innerHTML = '<td colspan=\"6\" class=\"text-center py-4\"><i class=\"fas fa-exclamation-circle me-2\"></i>Aucun résultat trouvé</td>';
                const tbody = document.querySelector('#subscriptionsTable tbody');
                if (tbody) tbody.appendChild(tr);
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
    
    if (resetFiltersHeaderBtn) resetFiltersHeaderBtn.style.display = 'none';
});
</script>
{% endblock %}", "super_admin/subscription_plan/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\subscription_plan\\show.html.twig");
    }
}
