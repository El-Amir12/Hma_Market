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

/* subscription/plans.html.twig */
class __TwigTemplate_648efb931d95ba49ad765e2a0c63f299 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subscription/plans.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subscription/plans.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Choisissez votre abonnement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .plan-card {
        border: none;
        border-radius: 24px;
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.4s;
        overflow: hidden;
        background: linear-gradient(145deg, #ffffff 0%, #f8fafc 100%);
        box-shadow: 0 20px 35px -8px rgba(0, 0, 0, 0.1);
        height: 100%;
        position: relative;
    }
    .plan-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 50px -12px rgba(37, 99, 235, 0.25);
    }
    .plan-card.basic {
        background: linear-gradient(145deg, #ffffff, #f0f9ff);
    }
    .plan-card.premium {
        background: linear-gradient(145deg, #ffffff, #f5f3ff);
        border: 2px solid #818cf8;
    }
    .plan-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background: linear-gradient(135deg, #3b82f6, #2563eb);
        color: white;
        font-weight: 600;
        font-size: 0.85rem;
        padding: 0.4rem 1.2rem;
        border-radius: 50px;
        display: inline-block;
        box-shadow: 0 4px 10px rgba(59, 130, 246, 0.3);
    }
    .plan-badge.premium {
        background: linear-gradient(135deg, #8b5cf6, #6d28d9);
    }
    .plan-icon {
        font-size: 3rem;
        margin-bottom: 1rem;
        display: inline-block;
        background: linear-gradient(135deg, #3b82f6, #2563eb);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    .plan-price {
        font-size: 3.2rem;
        font-weight: 800;
        color: #1e293b;
        line-height: 1.2;
        letter-spacing: -0.02em;
    }
    .plan-price small {
        font-size: 1rem;
        font-weight: 500;
        color: #64748b;
    }
    .feature-list {
        list-style: none;
        padding: 0;
        margin: 2rem 0;
    }
    .feature-list li {
        padding: 0.6rem 0;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        color: #334155;
        font-size: 0.95rem;
    }
    .feature-list i {
        color: #10b981;
        font-size: 1.25rem;
        flex-shrink: 0;
    }
    .btn-plan {
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        border: none;
        color: white;
        font-weight: 700;
        padding: 1rem;
        border-radius: 50px;
        width: 100%;
        transition: all 0.3s;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 0.95rem;
    }
    .btn-plan:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px -5px #3b82f6;
    }
    .btn-plan.premium {
        background: linear-gradient(135deg, #8b5cf6, #6d28d9);
    }
    .btn-plan.premium:hover {
        box-shadow: 0 10px 25px -5px #8b5cf6;
    }
    /* Bloc informations entreprise */
    .company-info {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 24px;
        padding: 2rem;
        margin-bottom: 3rem;
        box-shadow: 0 20px 35px -8px rgba(102, 126, 234, 0.4);
    }
    .subscription-number {
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        border-radius: 50px;
        padding: 0.75rem 1.5rem;
        font-family: monospace;
        font-size: 1.2rem;
        letter-spacing: 2px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        cursor: pointer;
        transition: all 0.3s;
        display: inline-block;
    }
    .subscription-number:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: scale(1.02);
    }
    .copy-feedback {
        position: absolute;
        background: #10b981;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 50px;
        font-size: 0.9rem;
        animation: fadeOut 2s forwards;
    }
    @keyframes fadeOut {
        0% { opacity: 1; transform: translateY(0); }
        70% { opacity: 1; transform: translateY(0); }
        100% { opacity: 0; transform: translateY(-20px); }
    }
    /* Modal */
    .modal-content {
        border-radius: 24px;
        border: none;
        box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.3);
    }
    .modal-header {
        border-bottom: 1px solid #e2e8f0;
        padding: 1.5rem 2rem;
        background: linear-gradient(135deg, #f8fafc, #ffffff);
    }
    .modal-body {
        padding: 2rem;
    }
    .modal-footer {
        border-top: 1px solid #e2e8f0;
        padding: 1.5rem 2rem;
        background: #f8fafc;
    }
    .form-control {
        border-radius: 12px;
        padding: 0.75rem 1rem;
        border: 2px solid #e2e8f0;
        transition: border-color 0.2s;
    }
    .form-control:focus {
        border-color: #3b82f6;
        box-shadow: none;
    }
    .radio-card {
        border: 2px solid #e2e8f0;
        border-radius: 12px;
        padding: 1rem;
        transition: all 0.2s;
        cursor: pointer;
    }
    .radio-card:hover {
        border-color: #3b82f6;
        background: #f0f9ff;
    }
    .radio-card input:checked + label {
        border-color: #3b82f6;
        background: #eff6ff;
    }
    .badge-save {
        background: #10b981;
        color: white;
        font-size: 0.7rem;
        padding: 0.3rem 0.8rem;
        border-radius: 50px;
        margin-left: 0.5rem;
    }
    @media (max-width: 768px) {
        .plan-price {
            font-size: 2.5rem;
        }
        .plan-icon {
            font-size: 2.5rem;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 211
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

        // line 212
        yield "<div class=\"container py-5\">
    ";
        // line 214
        yield "    ";
        $context["company"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 214, $this->source); })()), "user", [], "any", false, false, false, 214), "hmaService", [], "any", false, false, false, 214);
        // line 215
        yield "    ";
        if ((($tmp = (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 215, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 216
            yield "        <div class=\"company-info position-relative\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-8\">
                    <h2 class=\"h4 mb-2\">";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 219, $this->source); })()), "companyName", [], "any", false, false, false, 219), "html", null, true);
            yield "</h2>
                    <p class=\"mb-0 opacity-75\">
                        <i class=\"bi bi-envelope me-2\"></i>";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 221, $this->source); })()), "email", [], "any", false, false, false, 221), "html", null, true);
            yield "
                        ";
            // line 222
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 222, $this->source); })()), "phone", [], "any", false, false, false, 222)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 223
                yield "                            <i class=\"bi bi-telephone ms-3 me-2\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 223, $this->source); })()), "phone", [], "any", false, false, false, 223), "html", null, true);
                yield "
                        ";
            }
            // line 225
            yield "                    </p>
                </div>
                <div class=\"col-md-4 text-md-end mt-3 mt-md-0\">
                    <div class=\"d-inline-block position-relative\">
                        ";
            // line 230
            yield "                        <span class=\"subscription-number\" id=\"subscriptionNumberSpan\" onclick=\"copySubscriptionNumber()\">
                            <i class=\"bi bi-hash me-2\"></i>";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 231, $this->source); })()), "subscriptionNumber", [], "any", false, false, false, 231), "html", null, true);
            yield "
                        </span>
                        <div id=\"copyFeedback\" class=\"copy-feedback d-none\">Copié !</div>
                    </div>
                    <p class=\"text-white-50 small mt-2 mb-0\">
                        <i class=\"bi bi-info-circle me-1\"></i>
                        Cliquez sur votre numéro d'abonnement pour le copier
                    </p>
                </div>
            </div>
        </div>
    ";
        }
        // line 243
        yield "
    ";
        // line 245
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 245, $this->source); })()), "request", [], "any", false, false, false, 245), "query", [], "any", false, false, false, 245), "get", ["upgrade"], "method", false, false, false, 245)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 246
            yield "        <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
            <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
            <strong>Votre plan actuel ne vous permet pas d'ajouter plus d'éléments.</strong> 
            Choisissez un plan supérieur pour bénéficier de limites plus élevées et de fonctionnalités avancées.
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        // line 253
        yield "
    ";
        // line 255
        yield "    ";
        if ((array_key_exists("has_active_subscription", $context) && (isset($context["has_active_subscription"]) || array_key_exists("has_active_subscription", $context) ? $context["has_active_subscription"] : (function () { throw new RuntimeError('Variable "has_active_subscription" does not exist.', 255, $this->source); })()))) {
            // line 256
            yield "        <div class=\"alert alert-info alert-dismissible fade show\" role=\"alert\">
            <i class=\"bi bi-info-circle-fill me-2\"></i>
            Vous avez déjà un abonnement actif. En souscrivant un nouveau, l'ancien sera automatiquement remplacé.
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        // line 262
        yield "
    <div class=\"text-center mb-5\">
        <h1 class=\"display-4 fw-bold\" style=\"color: #1e293b;\">Choisissez votre abonnement</h1>
        <p class=\"lead text-muted\">Des formules adaptées à la taille de votre entreprise</p>
    </div>

    <div class=\"row g-4 justify-content-center\">
        ";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["plans"]) || array_key_exists("plans", $context) ? $context["plans"] : (function () { throw new RuntimeError('Variable "plans" does not exist.', 269, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 270
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 270) != "freemium")) {
                yield " ";
                // line 271
                yield "            <div class=\"col-lg-5 col-md-6\">
                <div class=\"card plan-card ";
                // line 272
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 272) == "basic")) ? ("basic") : ("premium"));
                yield "\">
                    <div class=\"card-body p-4 p-xl-5\">
                        <div class=\"text-center\">
                            <div class=\"plan-icon\">
                                <i class=\"bi ";
                // line 276
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 276) == "basic")) ? ("bi-rocket") : ("bi-stars"));
                yield "\"></i>
                            </div>
                            <span class=\"plan-badge ";
                // line 278
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 278) == "premium")) ? ("premium") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "displayName", [], "any", false, false, false, 278), "html", null, true);
                yield "</span>
                            
                            <div class=\"plan-price mt-3\">
                                ";
                // line 281
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "priceMonthly", [], "any", false, false, false, 281), 0, ",", " "), "html", null, true);
                yield " <small>FCFA/mois</small>
                            </div>
                            <p class=\"text-muted mt-3\">";
                // line 283
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "description", [], "any", false, false, false, 283), "html", null, true);
                yield "</p>
                        </div>

                        <ul class=\"feature-list\">
                            ";
                // line 287
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "features", [], "any", false, false, false, 287));
                foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                    // line 288
                    yield "                                <li><i class=\"bi bi-check-circle-fill\"></i> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["feature"], "html", null, true);
                    yield "</li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 290
                yield "                        </ul>

                        <button class=\"btn-plan w-100 ";
                // line 292
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 292) == "premium")) ? ("premium") : (""));
                yield "\" 
                                data-plan-id=\"";
                // line 293
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 293), "html", null, true);
                yield "\" 
                                data-plan-name=\"";
                // line 294
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "displayName", [], "any", false, false, false, 294), "html", null, true);
                yield "\"
                                data-monthly-price=\"";
                // line 295
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "priceMonthly", [], "any", false, false, false, 295), 0, ",", " "), "html", null, true);
                yield "\"
                                data-yearly-price=\"";
                // line 296
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "priceYearly", [], "any", false, false, false, 296), 0, ",", " "), "html", null, true);
                yield "\">
                            Choisir ";
                // line 297
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "displayName", [], "any", false, false, false, 297), "html", null, true);
                yield "
                        </button>
                    </div>
                </div>
            </div>
            ";
            }
            // line 303
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['plan'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 304
        yield "    </div>
</div>

<!-- Modal -->
<div class=\"modal fade\" id=\"billingModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <form method=\"post\" action=\"";
        // line 311
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_checkout");
        yield "\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title fw-bold\">Finaliser votre abonnement</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body\">
                    <input type=\"hidden\" name=\"plan\" id=\"selectedPlanId\" value=\"\">
                    
                    <div class=\"mb-4\">
                        <label for=\"subscriptionNumberInput\" class=\"form-label fw-semibold\">Numéro d'abonnement</label>
                        <div class=\"input-group\">
                            ";
        // line 323
        yield "                            <input type=\"text\" class=\"form-control\" id=\"subscriptionNumberInput\" name=\"subscription_number\" 
                                   required placeholder=\"Ex: AB12345678\" 
                                   pattern=\"[A-Z0-9]{10}\" title=\"10 caractères alphanumériques majuscules\"
                                   value=\"";
        // line 326
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 326), "hmaService", [], "any", false, true, false, 326), "subscriptionNumber", [], "any", true, true, false, 326) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 326, $this->source); })()), "user", [], "any", false, false, false, 326), "hmaService", [], "any", false, false, false, 326), "subscriptionNumber", [], "any", false, false, false, 326)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 326, $this->source); })()), "user", [], "any", false, false, false, 326), "hmaService", [], "any", false, false, false, 326), "subscriptionNumber", [], "any", false, false, false, 326), "html", null, true)) : (""));
        yield "\">
                            <button class=\"btn btn-outline-secondary\" type=\"button\" onclick=\"copyInputToClipboard('subscriptionNumberInput')\">
                                <i class=\"bi bi-files\"></i>
                            </button>
                        </div>
                        <div class=\"form-text\">Ce numéro unique vous a été fourni à la création de votre compte.</div>
                    </div>
                    
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-semibold\">Période de facturation</label>
                        
                        <div class=\"radio-card mb-2\" onclick=\"document.getElementById('monthly').click();\">
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"billing_period\" id=\"monthly\" value=\"monthly\" checked>
                                <label class=\"form-check-label w-100\" for=\"monthly\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <span class=\"fw-semibold\">Mensuel</span>
                                        <span class=\"fw-bold text-primary\" id=\"monthlyPrice\"></span>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class=\"radio-card\" onclick=\"document.getElementById('yearly').click();\">
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"billing_period\" id=\"yearly\" value=\"yearly\">
                                <label class=\"form-check-label w-100\" for=\"yearly\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <span>
                                            <span class=\"fw-semibold\">Annuel</span>
                                            <span class=\"badge-save\">Économisez 20%</span>
                                        </span>
                                        <span class=\"fw-bold text-primary\" id=\"yearlyPrice\"></span>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-light px-4 py-2\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-primary px-5 py-2\" style=\"border-radius: 50px;\">Payer maintenant</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = new bootstrap.Modal(document.getElementById('billingModal'));
    const selectButtons = document.querySelectorAll('.btn-plan');
    
    selectButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const planId = this.dataset.planId;
            const monthlyPrice = this.dataset.monthlyPrice;
            const yearlyPrice = this.dataset.yearlyPrice;
            
            document.getElementById('selectedPlanId').value = planId;
            document.getElementById('monthlyPrice').textContent = monthlyPrice + ' FCFA';
            document.getElementById('yearlyPrice').textContent = yearlyPrice + ' FCFA';
            
            modal.show();
        });
    });

    // Gestion de la classe active pour les radio cards
    const radios = document.querySelectorAll('input[name=\"billing_period\"]');
    radios.forEach(radio => {
        radio.addEventListener('change', function() {
            document.querySelectorAll('.radio-card').forEach(card => {
                card.classList.remove('border-primary', 'bg-light');
            });
            if (this.checked) {
                this.closest('.radio-card').classList.add('border-primary', 'bg-light');
            }
        });
    });
    // Activer par défaut la première
    if (radios.length > 0 && radios[0].checked) {
        radios[0].closest('.radio-card').classList.add('border-primary', 'bg-light');
    }
});

// Fonction pour copier le numéro d'abonnement depuis le bloc d'information (span)
function copySubscriptionNumber() {
    const span = document.getElementById('subscriptionNumberSpan');
    // Le texte du span inclut le numéro (l'icône est un élément <i> sans texte)
    const num = span.innerText.trim();
    navigator.clipboard.writeText(num).then(() => {
        const feedback = document.getElementById('copyFeedback');
        feedback.classList.remove('d-none');
        setTimeout(() => {
            feedback.classList.add('d-none');
        }, 2000);
    }).catch(err => {
        console.error('Erreur de copie : ', err);
    });
}

// Fonction pour copier depuis le champ de saisie (input)
function copyInputToClipboard(inputId) {
    const input = document.getElementById(inputId);
    input.select();
    input.setSelectionRange(0, 99999); // Pour mobile
    document.execCommand('copy');
    
    // Feedback optionnel sur le bouton
    const btn = event.target.closest('button');
    const originalHtml = btn.innerHTML;
    btn.innerHTML = '<i class=\"bi bi-check\"></i>';
    setTimeout(() => {
        btn.innerHTML = originalHtml;
    }, 1000);
}
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
        return "subscription/plans.html.twig";
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
        return array (  544 => 326,  539 => 323,  525 => 311,  516 => 304,  510 => 303,  501 => 297,  497 => 296,  493 => 295,  489 => 294,  485 => 293,  481 => 292,  477 => 290,  468 => 288,  464 => 287,  457 => 283,  452 => 281,  444 => 278,  439 => 276,  432 => 272,  429 => 271,  425 => 270,  421 => 269,  412 => 262,  404 => 256,  401 => 255,  398 => 253,  389 => 246,  386 => 245,  383 => 243,  368 => 231,  365 => 230,  359 => 225,  353 => 223,  351 => 222,  347 => 221,  342 => 219,  337 => 216,  334 => 215,  331 => 214,  328 => 212,  315 => 211,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/subscription/plans.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Choisissez votre abonnement{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .plan-card {
        border: none;
        border-radius: 24px;
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.4s;
        overflow: hidden;
        background: linear-gradient(145deg, #ffffff 0%, #f8fafc 100%);
        box-shadow: 0 20px 35px -8px rgba(0, 0, 0, 0.1);
        height: 100%;
        position: relative;
    }
    .plan-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 50px -12px rgba(37, 99, 235, 0.25);
    }
    .plan-card.basic {
        background: linear-gradient(145deg, #ffffff, #f0f9ff);
    }
    .plan-card.premium {
        background: linear-gradient(145deg, #ffffff, #f5f3ff);
        border: 2px solid #818cf8;
    }
    .plan-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background: linear-gradient(135deg, #3b82f6, #2563eb);
        color: white;
        font-weight: 600;
        font-size: 0.85rem;
        padding: 0.4rem 1.2rem;
        border-radius: 50px;
        display: inline-block;
        box-shadow: 0 4px 10px rgba(59, 130, 246, 0.3);
    }
    .plan-badge.premium {
        background: linear-gradient(135deg, #8b5cf6, #6d28d9);
    }
    .plan-icon {
        font-size: 3rem;
        margin-bottom: 1rem;
        display: inline-block;
        background: linear-gradient(135deg, #3b82f6, #2563eb);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    .plan-price {
        font-size: 3.2rem;
        font-weight: 800;
        color: #1e293b;
        line-height: 1.2;
        letter-spacing: -0.02em;
    }
    .plan-price small {
        font-size: 1rem;
        font-weight: 500;
        color: #64748b;
    }
    .feature-list {
        list-style: none;
        padding: 0;
        margin: 2rem 0;
    }
    .feature-list li {
        padding: 0.6rem 0;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        color: #334155;
        font-size: 0.95rem;
    }
    .feature-list i {
        color: #10b981;
        font-size: 1.25rem;
        flex-shrink: 0;
    }
    .btn-plan {
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        border: none;
        color: white;
        font-weight: 700;
        padding: 1rem;
        border-radius: 50px;
        width: 100%;
        transition: all 0.3s;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 0.95rem;
    }
    .btn-plan:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px -5px #3b82f6;
    }
    .btn-plan.premium {
        background: linear-gradient(135deg, #8b5cf6, #6d28d9);
    }
    .btn-plan.premium:hover {
        box-shadow: 0 10px 25px -5px #8b5cf6;
    }
    /* Bloc informations entreprise */
    .company-info {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 24px;
        padding: 2rem;
        margin-bottom: 3rem;
        box-shadow: 0 20px 35px -8px rgba(102, 126, 234, 0.4);
    }
    .subscription-number {
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        border-radius: 50px;
        padding: 0.75rem 1.5rem;
        font-family: monospace;
        font-size: 1.2rem;
        letter-spacing: 2px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        cursor: pointer;
        transition: all 0.3s;
        display: inline-block;
    }
    .subscription-number:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: scale(1.02);
    }
    .copy-feedback {
        position: absolute;
        background: #10b981;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 50px;
        font-size: 0.9rem;
        animation: fadeOut 2s forwards;
    }
    @keyframes fadeOut {
        0% { opacity: 1; transform: translateY(0); }
        70% { opacity: 1; transform: translateY(0); }
        100% { opacity: 0; transform: translateY(-20px); }
    }
    /* Modal */
    .modal-content {
        border-radius: 24px;
        border: none;
        box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.3);
    }
    .modal-header {
        border-bottom: 1px solid #e2e8f0;
        padding: 1.5rem 2rem;
        background: linear-gradient(135deg, #f8fafc, #ffffff);
    }
    .modal-body {
        padding: 2rem;
    }
    .modal-footer {
        border-top: 1px solid #e2e8f0;
        padding: 1.5rem 2rem;
        background: #f8fafc;
    }
    .form-control {
        border-radius: 12px;
        padding: 0.75rem 1rem;
        border: 2px solid #e2e8f0;
        transition: border-color 0.2s;
    }
    .form-control:focus {
        border-color: #3b82f6;
        box-shadow: none;
    }
    .radio-card {
        border: 2px solid #e2e8f0;
        border-radius: 12px;
        padding: 1rem;
        transition: all 0.2s;
        cursor: pointer;
    }
    .radio-card:hover {
        border-color: #3b82f6;
        background: #f0f9ff;
    }
    .radio-card input:checked + label {
        border-color: #3b82f6;
        background: #eff6ff;
    }
    .badge-save {
        background: #10b981;
        color: white;
        font-size: 0.7rem;
        padding: 0.3rem 0.8rem;
        border-radius: 50px;
        margin-left: 0.5rem;
    }
    @media (max-width: 768px) {
        .plan-price {
            font-size: 2.5rem;
        }
        .plan-icon {
            font-size: 2.5rem;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container py-5\">
    {# Informations de l'entreprise #}
    {% set company = app.user.hmaService %}
    {% if company %}
        <div class=\"company-info position-relative\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-8\">
                    <h2 class=\"h4 mb-2\">{{ company.companyName }}</h2>
                    <p class=\"mb-0 opacity-75\">
                        <i class=\"bi bi-envelope me-2\"></i>{{ company.email }}
                        {% if company.phone %}
                            <i class=\"bi bi-telephone ms-3 me-2\"></i>{{ company.phone }}
                        {% endif %}
                    </p>
                </div>
                <div class=\"col-md-4 text-md-end mt-3 mt-md-0\">
                    <div class=\"d-inline-block position-relative\">
                        {# ID unique pour le span #}
                        <span class=\"subscription-number\" id=\"subscriptionNumberSpan\" onclick=\"copySubscriptionNumber()\">
                            <i class=\"bi bi-hash me-2\"></i>{{ company.subscriptionNumber }}
                        </span>
                        <div id=\"copyFeedback\" class=\"copy-feedback d-none\">Copié !</div>
                    </div>
                    <p class=\"text-white-50 small mt-2 mb-0\">
                        <i class=\"bi bi-info-circle me-1\"></i>
                        Cliquez sur votre numéro d'abonnement pour le copier
                    </p>
                </div>
            </div>
        </div>
    {% endif %}

    {# Message d'upgrade si présent #}
    {% if app.request.query.get('upgrade') %}
        <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
            <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
            <strong>Votre plan actuel ne vous permet pas d'ajouter plus d'éléments.</strong> 
            Choisissez un plan supérieur pour bénéficier de limites plus élevées et de fonctionnalités avancées.
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endif %}

    {# Avertissement si abonnement actif existe #}
    {% if has_active_subscription is defined and has_active_subscription %}
        <div class=\"alert alert-info alert-dismissible fade show\" role=\"alert\">
            <i class=\"bi bi-info-circle-fill me-2\"></i>
            Vous avez déjà un abonnement actif. En souscrivant un nouveau, l'ancien sera automatiquement remplacé.
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endif %}

    <div class=\"text-center mb-5\">
        <h1 class=\"display-4 fw-bold\" style=\"color: #1e293b;\">Choisissez votre abonnement</h1>
        <p class=\"lead text-muted\">Des formules adaptées à la taille de votre entreprise</p>
    </div>

    <div class=\"row g-4 justify-content-center\">
        {% for plan in plans %}
            {% if plan.name != 'freemium' %} {# Exclure le plan freemium #}
            <div class=\"col-lg-5 col-md-6\">
                <div class=\"card plan-card {{ plan.name == 'basic' ? 'basic' : 'premium' }}\">
                    <div class=\"card-body p-4 p-xl-5\">
                        <div class=\"text-center\">
                            <div class=\"plan-icon\">
                                <i class=\"bi {{ plan.name == 'basic' ? 'bi-rocket' : 'bi-stars' }}\"></i>
                            </div>
                            <span class=\"plan-badge {{ plan.name == 'premium' ? 'premium' : '' }}\">{{ plan.displayName }}</span>
                            
                            <div class=\"plan-price mt-3\">
                                {{ plan.priceMonthly|number_format(0, ',', ' ') }} <small>FCFA/mois</small>
                            </div>
                            <p class=\"text-muted mt-3\">{{ plan.description }}</p>
                        </div>

                        <ul class=\"feature-list\">
                            {% for feature in plan.features %}
                                <li><i class=\"bi bi-check-circle-fill\"></i> {{ feature }}</li>
                            {% endfor %}
                        </ul>

                        <button class=\"btn-plan w-100 {{ plan.name == 'premium' ? 'premium' : '' }}\" 
                                data-plan-id=\"{{ plan.id }}\" 
                                data-plan-name=\"{{ plan.displayName }}\"
                                data-monthly-price=\"{{ plan.priceMonthly|number_format(0, ',', ' ') }}\"
                                data-yearly-price=\"{{ plan.priceYearly|number_format(0, ',', ' ') }}\">
                            Choisir {{ plan.displayName }}
                        </button>
                    </div>
                </div>
            </div>
            {% endif %}
        {% endfor %}
    </div>
</div>

<!-- Modal -->
<div class=\"modal fade\" id=\"billingModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <form method=\"post\" action=\"{{ path('app_subscription_checkout') }}\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title fw-bold\">Finaliser votre abonnement</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body\">
                    <input type=\"hidden\" name=\"plan\" id=\"selectedPlanId\" value=\"\">
                    
                    <div class=\"mb-4\">
                        <label for=\"subscriptionNumberInput\" class=\"form-label fw-semibold\">Numéro d'abonnement</label>
                        <div class=\"input-group\">
                            {# ID unique pour l'input #}
                            <input type=\"text\" class=\"form-control\" id=\"subscriptionNumberInput\" name=\"subscription_number\" 
                                   required placeholder=\"Ex: AB12345678\" 
                                   pattern=\"[A-Z0-9]{10}\" title=\"10 caractères alphanumériques majuscules\"
                                   value=\"{{ app.user.hmaService.subscriptionNumber ?? '' }}\">
                            <button class=\"btn btn-outline-secondary\" type=\"button\" onclick=\"copyInputToClipboard('subscriptionNumberInput')\">
                                <i class=\"bi bi-files\"></i>
                            </button>
                        </div>
                        <div class=\"form-text\">Ce numéro unique vous a été fourni à la création de votre compte.</div>
                    </div>
                    
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-semibold\">Période de facturation</label>
                        
                        <div class=\"radio-card mb-2\" onclick=\"document.getElementById('monthly').click();\">
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"billing_period\" id=\"monthly\" value=\"monthly\" checked>
                                <label class=\"form-check-label w-100\" for=\"monthly\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <span class=\"fw-semibold\">Mensuel</span>
                                        <span class=\"fw-bold text-primary\" id=\"monthlyPrice\"></span>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class=\"radio-card\" onclick=\"document.getElementById('yearly').click();\">
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"billing_period\" id=\"yearly\" value=\"yearly\">
                                <label class=\"form-check-label w-100\" for=\"yearly\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <span>
                                            <span class=\"fw-semibold\">Annuel</span>
                                            <span class=\"badge-save\">Économisez 20%</span>
                                        </span>
                                        <span class=\"fw-bold text-primary\" id=\"yearlyPrice\"></span>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-light px-4 py-2\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-primary px-5 py-2\" style=\"border-radius: 50px;\">Payer maintenant</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = new bootstrap.Modal(document.getElementById('billingModal'));
    const selectButtons = document.querySelectorAll('.btn-plan');
    
    selectButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const planId = this.dataset.planId;
            const monthlyPrice = this.dataset.monthlyPrice;
            const yearlyPrice = this.dataset.yearlyPrice;
            
            document.getElementById('selectedPlanId').value = planId;
            document.getElementById('monthlyPrice').textContent = monthlyPrice + ' FCFA';
            document.getElementById('yearlyPrice').textContent = yearlyPrice + ' FCFA';
            
            modal.show();
        });
    });

    // Gestion de la classe active pour les radio cards
    const radios = document.querySelectorAll('input[name=\"billing_period\"]');
    radios.forEach(radio => {
        radio.addEventListener('change', function() {
            document.querySelectorAll('.radio-card').forEach(card => {
                card.classList.remove('border-primary', 'bg-light');
            });
            if (this.checked) {
                this.closest('.radio-card').classList.add('border-primary', 'bg-light');
            }
        });
    });
    // Activer par défaut la première
    if (radios.length > 0 && radios[0].checked) {
        radios[0].closest('.radio-card').classList.add('border-primary', 'bg-light');
    }
});

// Fonction pour copier le numéro d'abonnement depuis le bloc d'information (span)
function copySubscriptionNumber() {
    const span = document.getElementById('subscriptionNumberSpan');
    // Le texte du span inclut le numéro (l'icône est un élément <i> sans texte)
    const num = span.innerText.trim();
    navigator.clipboard.writeText(num).then(() => {
        const feedback = document.getElementById('copyFeedback');
        feedback.classList.remove('d-none');
        setTimeout(() => {
            feedback.classList.add('d-none');
        }, 2000);
    }).catch(err => {
        console.error('Erreur de copie : ', err);
    });
}

// Fonction pour copier depuis le champ de saisie (input)
function copyInputToClipboard(inputId) {
    const input = document.getElementById(inputId);
    input.select();
    input.setSelectionRange(0, 99999); // Pour mobile
    document.execCommand('copy');
    
    // Feedback optionnel sur le bouton
    const btn = event.target.closest('button');
    const originalHtml = btn.innerHTML;
    btn.innerHTML = '<i class=\"bi bi-check\"></i>';
    setTimeout(() => {
        btn.innerHTML = originalHtml;
    }, 1000);
}
</script>
{% endblock %}", "subscription/plans.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\subscription\\plans.html.twig");
    }
}
