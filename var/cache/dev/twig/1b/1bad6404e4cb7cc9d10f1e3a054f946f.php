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
class __TwigTemplate_845e3582906a29e20cc33c5219f90076 extends Template
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
    .plan-card.freemium {
        background: linear-gradient(145deg, #f8fafc, #f1f5f9);
        opacity: 0.95;
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
    .plan-badge.freemium {
        background: linear-gradient(135deg, #6b7280, #4b5563);
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
        margin: 1rem 0;
    }
    .feature-list li {
        padding: 0.5rem 0;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        color: #334155;
        font-size: 0.9rem;
    }
    .feature-list i {
        color: #10b981;
        font-size: 1.1rem;
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
    .btn-plan.disabled {
        background: linear-gradient(135deg, #9ca3af, #6b7280);
        cursor: not-allowed;
        opacity: 0.6;
    }
    .btn-plan.disabled:hover {
        transform: none;
        box-shadow: none;
    }
    /* Section limites spécifiques */
    .limits-section {
        background: #f1f5f9;
        border-radius: 16px;
        padding: 1rem;
        margin: 1rem 0;
    }
    .limits-section.unlimited {
        background: linear-gradient(135deg, #fef3c7, #fde68a);
    }
    .limits-title {
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 700;
        color: #64748b;
        margin-bottom: 0.75rem;
    }
    .limit-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.5rem 0;
        border-bottom: 1px solid #e2e8f0;
    }
    .limit-item:last-child {
        border-bottom: none;
    }
    .limit-icon {
        width: 32px;
        text-align: center;
    }
    .limit-text {
        flex: 1;
        font-size: 0.9rem;
        color: #334155;
    }
    .limit-value {
        font-weight: 700;
        color: #1e293b;
    }
    .separator {
        display: flex;
        align-items: center;
        text-align: center;
        margin: 1.5rem 0;
    }
    .separator::before,
    .separator::after {
        content: '';
        flex: 1;
        border-bottom: 2px solid #e2e8f0;
    }
    .separator span {
        padding: 0 1rem;
        color: #64748b;
        font-size: 0.8rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
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
    /* Badge restaurant */
    .restaurant-badge {
        background: linear-gradient(135deg, #10b981, #059669);
        font-size: 0.7rem;
        padding: 0.2rem 0.8rem;
        border-radius: 50px;
        color: white;
        display: inline-block;
        margin-left: 0.5rem;
    }
    /* Message freemium */
    .freemium-message {
        background: #fef3c7;
        border-radius: 12px;
        padding: 0.75rem;
        margin-top: 1rem;
        text-align: center;
        font-size: 0.85rem;
        color: #92400e;
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

    // line 308
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

        // line 309
        yield "<div class=\"container py-5\">
    ";
        // line 311
        yield "    ";
        $context["company"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 311, $this->source); })()), "user", [], "any", false, false, false, 311), "hmaService", [], "any", false, false, false, 311);
        // line 312
        yield "    ";
        if ((($tmp = (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 312, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 313
            yield "        <div class=\"company-info position-relative\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-8\">
                    <h2 class=\"h4 mb-2\">";
            // line 316
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 316, $this->source); })()), "companyName", [], "any", false, false, false, 316), "html", null, true);
            yield "</h2>
                    <p class=\"mb-0 opacity-75\">
                        <i class=\"bi bi-envelope me-2\"></i>";
            // line 318
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 318, $this->source); })()), "email", [], "any", false, false, false, 318), "html", null, true);
            yield "
                        ";
            // line 319
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 319, $this->source); })()), "phone", [], "any", false, false, false, 319)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 320
                yield "                            <i class=\"bi bi-telephone ms-3 me-2\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 320, $this->source); })()), "phone", [], "any", false, false, false, 320), "html", null, true);
                yield "
                        ";
            }
            // line 322
            yield "                    </p>
                </div>
                <div class=\"col-md-4 text-md-end mt-3 mt-md-0\">
                    <div class=\"d-inline-block position-relative\">
                        <span class=\"subscription-number\" id=\"subscriptionNumberSpan\" onclick=\"copySubscriptionNumber()\">
                            <i class=\"bi bi-hash me-2\"></i>";
            // line 327
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 327, $this->source); })()), "subscriptionNumber", [], "any", false, false, false, 327), "html", null, true);
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
        // line 339
        yield "
    ";
        // line 341
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 341, $this->source); })()), "request", [], "any", false, false, false, 341), "query", [], "any", false, false, false, 341), "get", ["upgrade"], "method", false, false, false, 341)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 342
            yield "        <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
            <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
            <strong>Votre plan actuel ne vous permet pas d'ajouter plus d'éléments.</strong> 
            Choisissez un plan supérieur pour bénéficier de limites plus élevées et de fonctionnalités avancées.
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        // line 349
        yield "
    ";
        // line 351
        yield "    ";
        if ((array_key_exists("has_active_subscription", $context) && (isset($context["has_active_subscription"]) || array_key_exists("has_active_subscription", $context) ? $context["has_active_subscription"] : (function () { throw new RuntimeError('Variable "has_active_subscription" does not exist.', 351, $this->source); })()))) {
            // line 352
            yield "        <div class=\"alert alert-info alert-dismissible fade show\" role=\"alert\">
            <i class=\"bi bi-info-circle-fill me-2\"></i>
            Vous avez déjà un abonnement actif. En souscrivant un nouveau, l'ancien sera automatiquement remplacé.
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        // line 358
        yield "
    <div class=\"text-center mb-5\">
        <h1 class=\"display-4 fw-bold\" style=\"color: #1e293b;\">Choisissez votre abonnement</h1>
        <p class=\"lead text-muted\">Des formules adaptées à la taille de votre entreprise</p>
    </div>

    <div class=\"row g-4 justify-content-center\">
        ";
        // line 365
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["plans"]) || array_key_exists("plans", $context) ? $context["plans"] : (function () { throw new RuntimeError('Variable "plans" does not exist.', 365, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 366
            yield "            <div class=\"col-lg-4 col-md-6\">
                <div class=\"card plan-card ";
            // line 367
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 367) == "basic")) ? ("basic") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 367) == "premium")) ? ("premium") : ("freemium"))));
            yield "\">
                    <div class=\"card-body p-4 p-xl-5\">
                        <div class=\"text-center\">
                            <div class=\"plan-icon\">
                                ";
            // line 371
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 371) == "basic")) {
                // line 372
                yield "                                    <i class=\"bi bi-rocket\"></i>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 373
$context["plan"], "name", [], "any", false, false, false, 373) == "premium")) {
                // line 374
                yield "                                    <i class=\"bi bi-stars\"></i>
                                ";
            } else {
                // line 376
                yield "                                    <i class=\"bi bi-gift\"></i>
                                ";
            }
            // line 378
            yield "                            </div>
                            <span class=\"plan-badge ";
            // line 379
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 379) == "premium")) ? ("premium") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 379) == "freemium")) ? ("freemium") : (""))));
            yield "\">
                                ";
            // line 380
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "displayName", [], "any", false, false, false, 380), "html", null, true);
            yield "
                            </span>
                            
                            <div class=\"plan-price mt-3\">
                                ";
            // line 384
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 384) == "freemium")) {
                // line 385
                yield "                                    GRATUIT
                                ";
            } else {
                // line 387
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "priceMonthly", [], "any", false, false, false, 387), 0, ",", " "), "html", null, true);
                yield " <small>FCFA/mois</small>
                                ";
            }
            // line 389
            yield "                            </div>
                            <p class=\"text-muted mt-3\">";
            // line 390
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "description", [], "any", false, false, false, 390), "html", null, true);
            yield "</p>
                        </div>

                        <!-- Séparateur avant les fonctionnalités -->
                        <div class=\"separator\">
                            <span>Fonctionnalités incluses</span>
                        </div>

                        <!-- Section des fonctionnalités générales -->
                        <ul class=\"feature-list\">
                            ";
            // line 400
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "features", [], "any", false, false, false, 400), 0, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                // line 401
                yield "                                <li><i class=\"bi bi-check-circle-fill\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["feature"], "html", null, true);
                yield "</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 403
            yield "                            ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "features", [], "any", false, false, false, 403)) > 5)) {
                // line 404
                yield "                                <li><i class=\"bi bi-plus-circle-fill text-primary\"></i> +";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "features", [], "any", false, false, false, 404)) - 5), "html", null, true);
                yield " autres fonctionnalités</li>
                            ";
            }
            // line 406
            yield "                        </ul>

                        <!-- Séparateur avant les limites -->
                        <div class=\"separator\">
                            <span>Limites du plan</span>
                        </div>

                        <!-- Section des limites spécifiques pour les restaurants (UNIQUEMENT POUR LES RESTAURANTS) -->
                        ";
            // line 414
            $context["companyType"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 414), "hmaService", [], "any", false, true, false, 414), "companyType", [], "any", true, true, false, 414) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 414, $this->source); })()), "user", [], "any", false, false, false, 414), "hmaService", [], "any", false, false, false, 414), "companyType", [], "any", false, false, false, 414)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 414, $this->source); })()), "user", [], "any", false, false, false, 414), "hmaService", [], "any", false, false, false, 414), "companyType", [], "any", false, false, false, 414)) : ("commerce"));
            // line 415
            yield "                        ";
            if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 415, $this->source); })()) == "restaurant")) {
                // line 416
                yield "                        <div class=\"limits-section\">
                            <div class=\"limits-title\">
                                <i class=\"bi bi-egg-fried me-1\"></i> Limites Restaurant
                            </div>
                            
                            <!-- Limite Recettes -->
                            <div class=\"limit-item\">
                                <div class=\"limit-icon\">
                                    <i class=\"bi bi-book-fill text-success\"></i>
                                </div>
                                <div class=\"limit-text\">
                                    <strong>Recettes</strong>
                                </div>
                                <div class=\"limit-value\">
                                    ";
                // line 430
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxRecipes", [], "any", false, false, false, 430)) || (CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxRecipes", [], "any", false, false, false, 430) >= 999999999))) {
                    // line 431
                    yield "                                        ♾️ Illimité
                                    ";
                } else {
                    // line 433
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxRecipes", [], "any", false, false, false, 433)), "html", null, true);
                    yield "
                                    ";
                }
                // line 435
                yield "                                </div>
                            </div>
                            
                            <!-- Limite Catégories de recettes -->
                            <div class=\"limit-item\">
                                <div class=\"limit-icon\">
                                    <i class=\"bi bi-tag-fill text-info\"></i>
                                </div>
                                <div class=\"limit-text\">
                                    <strong>Catégories de recettes</strong>
                                </div>
                                <div class=\"limit-value\">
                                    ";
                // line 447
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxRecipeCategories", [], "any", false, false, false, 447)) || (CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxRecipeCategories", [], "any", false, false, false, 447) >= 999999999))) {
                    // line 448
                    yield "                                        ♾️ Illimité
                                    ";
                } else {
                    // line 450
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxRecipeCategories", [], "any", false, false, false, 450)), "html", null, true);
                    yield "
                                    ";
                }
                // line 452
                yield "                                </div>
                            </div>
                        </div>
                        ";
            }
            // line 456
            yield "
                        <!-- Section des limites commerce -->
                        ";
            // line 458
            $context["isPremiumUnlimited"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 458) == "premium") && ((null === CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxProducts", [], "any", false, false, false, 458)) || (CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxProducts", [], "any", false, false, false, 458) >= 999999999)));
            // line 459
            yield "                        <div class=\"limits-section ";
            yield (((($tmp = (isset($context["isPremiumUnlimited"]) || array_key_exists("isPremiumUnlimited", $context) ? $context["isPremiumUnlimited"] : (function () { throw new RuntimeError('Variable "isPremiumUnlimited" does not exist.', 459, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("unlimited") : (""));
            yield "\">
                            <div class=\"limits-title\">
                                <i class=\"bi bi-shop me-1\"></i> Limites Commerce
                                ";
            // line 462
            if ((($tmp = (isset($context["isPremiumUnlimited"]) || array_key_exists("isPremiumUnlimited", $context) ? $context["isPremiumUnlimited"] : (function () { throw new RuntimeError('Variable "isPremiumUnlimited" does not exist.', 462, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 463
                yield "                                    <span class=\"badge bg-warning text-dark ms-2\">Illimité ✨</span>
                                ";
            }
            // line 465
            yield "                            </div>
                            
                            <div class=\"limit-item\">
                                <div class=\"limit-icon\"><i class=\"bi bi-box-fill text-info\"></i></div>
                                <div class=\"limit-text\"><strong>Produits</strong></div>
                                <div class=\"limit-value\">
                                    ";
            // line 471
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxProducts", [], "any", false, false, false, 471)) || (CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxProducts", [], "any", false, false, false, 471) >= 999999999))) {
                // line 472
                yield "                                        ♾️ Illimité
                                    ";
            } else {
                // line 474
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxProducts", [], "any", false, false, false, 474)), "html", null, true);
                yield "
                                    ";
            }
            // line 476
            yield "                                </div>
                            </div>
                            
                            <div class=\"limit-item\">
                                <div class=\"limit-icon\"><i class=\"bi bi-cart-fill text-warning\"></i></div>
                                <div class=\"limit-text\"><strong>Commandes / mois</strong></div>
                                <div class=\"limit-value\">
                                    ";
            // line 483
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxOrdersPerMonth", [], "any", false, false, false, 483)) || (CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxOrdersPerMonth", [], "any", false, false, false, 483) >= 999999999))) {
                // line 484
                yield "                                        ♾️ Illimité
                                    ";
            } else {
                // line 486
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxOrdersPerMonth", [], "any", false, false, false, 486)), "html", null, true);
                yield "
                                    ";
            }
            // line 488
            yield "                                </div>
                            </div>
                            
                            <div class=\"limit-item\">
                                <div class=\"limit-icon\"><i class=\"bi bi-tags-fill text-primary\"></i></div>
                                <div class=\"limit-text\"><strong>Catégories</strong></div>
                                <div class=\"limit-value\">
                                    ";
            // line 495
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxCategories", [], "any", false, false, false, 495)) || (CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxCategories", [], "any", false, false, false, 495) >= 999999999))) {
                // line 496
                yield "                                        ♾️ Illimité
                                    ";
            } else {
                // line 498
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxCategories", [], "any", false, false, false, 498)), "html", null, true);
                yield "
                                    ";
            }
            // line 500
            yield "                                </div>
                            </div>
                            
                            <div class=\"limit-item\">
                                <div class=\"limit-icon\"><i class=\"bi bi-truck text-secondary\"></i></div>
                                <div class=\"limit-text\"><strong>Fournisseurs</strong></div>
                                <div class=\"limit-value\">
                                    ";
            // line 507
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxSuppliers", [], "any", false, false, false, 507)) || (CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxSuppliers", [], "any", false, false, false, 507) >= 999999999))) {
                // line 508
                yield "                                        ♾️ Illimité
                                    ";
            } else {
                // line 510
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxSuppliers", [], "any", false, false, false, 510)), "html", null, true);
                yield "
                                    ";
            }
            // line 512
            yield "                                </div>
                            </div>
                            
                            <div class=\"limit-item\">
                                <div class=\"limit-icon\"><i class=\"bi bi-people-fill text-success\"></i></div>
                                <div class=\"limit-text\"><strong>Utilisateurs / rôle</strong></div>
                                <div class=\"limit-value\">
                                    ";
            // line 519
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxUsersPerRole", [], "any", false, false, false, 519)) || (CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxUsersPerRole", [], "any", false, false, false, 519) >= 999999999))) {
                // line 520
                yield "                                        ♾️ Illimité
                                    ";
            } else {
                // line 522
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "maxUsersPerRole", [], "any", false, false, false, 522)), "html", null, true);
                yield "
                                    ";
            }
            // line 524
            yield "                                </div>
                            </div>

                            ";
            // line 528
            yield "                            ";
            if ((($tmp = (isset($context["isPremiumUnlimited"]) || array_key_exists("isPremiumUnlimited", $context) ? $context["isPremiumUnlimited"] : (function () { throw new RuntimeError('Variable "isPremiumUnlimited" does not exist.', 528, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 529
                yield "                            <div class=\"mt-2 pt-2 text-center\">
                                <small class=\"text-warning-dark\">
                                    <i class=\"bi bi-infinity me-1\"></i>
                                    Toutes les limites sont illimitées avec le plan Premium !
                                </small>
                            </div>
                            ";
            }
            // line 536
            yield "                        </div>

                        ";
            // line 538
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 538) == "freemium")) {
                // line 539
                yield "                            <div class=\"freemium-message\">
                                <i class=\"bi bi-info-circle me-2\"></i>
                                Plan gratuit - Pas de paiement requis
                            </div>
                            <button class=\"btn-plan disabled w-100 mt-3\" disabled>
                                <i class=\"bi bi-lock me-2\"></i>Plan actuel
                            </button>
                        ";
            } else {
                // line 547
                yield "                            <button class=\"btn-plan w-100 ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 547) == "premium")) ? ("premium") : (""));
                yield "\" 
                                    data-plan-id=\"";
                // line 548
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 548), "html", null, true);
                yield "\" 
                                    data-plan-name=\"";
                // line 549
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "displayName", [], "any", false, false, false, 549), "html", null, true);
                yield "\"
                                    data-monthly-price=\"";
                // line 550
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "priceMonthly", [], "any", false, false, false, 550), 0, ",", " "), "html", null, true);
                yield "\"
                                    data-yearly-price=\"";
                // line 551
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "priceYearly", [], "any", false, false, false, 551), 0, ",", " "), "html", null, true);
                yield "\">
                                Choisir ";
                // line 552
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "displayName", [], "any", false, false, false, 552), "html", null, true);
                yield "
                            </button>
                        ";
            }
            // line 555
            yield "                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['plan'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 559
        yield "    </div>
</div>

<!-- Modal -->
<div class=\"modal fade\" id=\"billingModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <form method=\"post\" action=\"";
        // line 566
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
                            <input type=\"text\" class=\"form-control\" id=\"subscriptionNumberInput\" name=\"subscription_number\" 
                                   required placeholder=\"Ex: AB12345678\" 
                                   pattern=\"[A-Z0-9]{10}\" title=\"10 caractères alphanumériques majuscules\"
                                   value=\"";
        // line 580
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 580), "hmaService", [], "any", false, true, false, 580), "subscriptionNumber", [], "any", true, true, false, 580) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 580, $this->source); })()), "user", [], "any", false, false, false, 580), "hmaService", [], "any", false, false, false, 580), "subscriptionNumber", [], "any", false, false, false, 580)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 580, $this->source); })()), "user", [], "any", false, false, false, 580), "hmaService", [], "any", false, false, false, 580), "subscriptionNumber", [], "any", false, false, false, 580), "html", null, true)) : (""));
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
    const selectButtons = document.querySelectorAll('.btn-plan:not(.disabled)');
    
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
    input.setSelectionRange(0, 99999);
    document.execCommand('copy');
    
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
        return array (  902 => 580,  885 => 566,  876 => 559,  867 => 555,  861 => 552,  857 => 551,  853 => 550,  849 => 549,  845 => 548,  840 => 547,  830 => 539,  828 => 538,  824 => 536,  815 => 529,  812 => 528,  807 => 524,  801 => 522,  797 => 520,  795 => 519,  786 => 512,  780 => 510,  776 => 508,  774 => 507,  765 => 500,  759 => 498,  755 => 496,  753 => 495,  744 => 488,  738 => 486,  734 => 484,  732 => 483,  723 => 476,  717 => 474,  713 => 472,  711 => 471,  703 => 465,  699 => 463,  697 => 462,  690 => 459,  688 => 458,  684 => 456,  678 => 452,  672 => 450,  668 => 448,  666 => 447,  652 => 435,  646 => 433,  642 => 431,  640 => 430,  624 => 416,  621 => 415,  619 => 414,  609 => 406,  603 => 404,  600 => 403,  591 => 401,  587 => 400,  574 => 390,  571 => 389,  565 => 387,  561 => 385,  559 => 384,  552 => 380,  548 => 379,  545 => 378,  541 => 376,  537 => 374,  535 => 373,  532 => 372,  530 => 371,  523 => 367,  520 => 366,  516 => 365,  507 => 358,  499 => 352,  496 => 351,  493 => 349,  484 => 342,  481 => 341,  478 => 339,  463 => 327,  456 => 322,  450 => 320,  448 => 319,  444 => 318,  439 => 316,  434 => 313,  431 => 312,  428 => 311,  425 => 309,  412 => 308,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
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
    .plan-card.freemium {
        background: linear-gradient(145deg, #f8fafc, #f1f5f9);
        opacity: 0.95;
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
    .plan-badge.freemium {
        background: linear-gradient(135deg, #6b7280, #4b5563);
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
        margin: 1rem 0;
    }
    .feature-list li {
        padding: 0.5rem 0;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        color: #334155;
        font-size: 0.9rem;
    }
    .feature-list i {
        color: #10b981;
        font-size: 1.1rem;
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
    .btn-plan.disabled {
        background: linear-gradient(135deg, #9ca3af, #6b7280);
        cursor: not-allowed;
        opacity: 0.6;
    }
    .btn-plan.disabled:hover {
        transform: none;
        box-shadow: none;
    }
    /* Section limites spécifiques */
    .limits-section {
        background: #f1f5f9;
        border-radius: 16px;
        padding: 1rem;
        margin: 1rem 0;
    }
    .limits-section.unlimited {
        background: linear-gradient(135deg, #fef3c7, #fde68a);
    }
    .limits-title {
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 700;
        color: #64748b;
        margin-bottom: 0.75rem;
    }
    .limit-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.5rem 0;
        border-bottom: 1px solid #e2e8f0;
    }
    .limit-item:last-child {
        border-bottom: none;
    }
    .limit-icon {
        width: 32px;
        text-align: center;
    }
    .limit-text {
        flex: 1;
        font-size: 0.9rem;
        color: #334155;
    }
    .limit-value {
        font-weight: 700;
        color: #1e293b;
    }
    .separator {
        display: flex;
        align-items: center;
        text-align: center;
        margin: 1.5rem 0;
    }
    .separator::before,
    .separator::after {
        content: '';
        flex: 1;
        border-bottom: 2px solid #e2e8f0;
    }
    .separator span {
        padding: 0 1rem;
        color: #64748b;
        font-size: 0.8rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
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
    /* Badge restaurant */
    .restaurant-badge {
        background: linear-gradient(135deg, #10b981, #059669);
        font-size: 0.7rem;
        padding: 0.2rem 0.8rem;
        border-radius: 50px;
        color: white;
        display: inline-block;
        margin-left: 0.5rem;
    }
    /* Message freemium */
    .freemium-message {
        background: #fef3c7;
        border-radius: 12px;
        padding: 0.75rem;
        margin-top: 1rem;
        text-align: center;
        font-size: 0.85rem;
        color: #92400e;
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
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"card plan-card {{ plan.name == 'basic' ? 'basic' : (plan.name == 'premium' ? 'premium' : 'freemium') }}\">
                    <div class=\"card-body p-4 p-xl-5\">
                        <div class=\"text-center\">
                            <div class=\"plan-icon\">
                                {% if plan.name == 'basic' %}
                                    <i class=\"bi bi-rocket\"></i>
                                {% elseif plan.name == 'premium' %}
                                    <i class=\"bi bi-stars\"></i>
                                {% else %}
                                    <i class=\"bi bi-gift\"></i>
                                {% endif %}
                            </div>
                            <span class=\"plan-badge {{ plan.name == 'premium' ? 'premium' : (plan.name == 'freemium' ? 'freemium' : '') }}\">
                                {{ plan.displayName }}
                            </span>
                            
                            <div class=\"plan-price mt-3\">
                                {% if plan.name == 'freemium' %}
                                    GRATUIT
                                {% else %}
                                    {{ plan.priceMonthly|number_format(0, ',', ' ') }} <small>FCFA/mois</small>
                                {% endif %}
                            </div>
                            <p class=\"text-muted mt-3\">{{ plan.description }}</p>
                        </div>

                        <!-- Séparateur avant les fonctionnalités -->
                        <div class=\"separator\">
                            <span>Fonctionnalités incluses</span>
                        </div>

                        <!-- Section des fonctionnalités générales -->
                        <ul class=\"feature-list\">
                            {% for feature in plan.features|slice(0, 5) %}
                                <li><i class=\"bi bi-check-circle-fill\"></i> {{ feature }}</li>
                            {% endfor %}
                            {% if plan.features|length > 5 %}
                                <li><i class=\"bi bi-plus-circle-fill text-primary\"></i> +{{ plan.features|length - 5 }} autres fonctionnalités</li>
                            {% endif %}
                        </ul>

                        <!-- Séparateur avant les limites -->
                        <div class=\"separator\">
                            <span>Limites du plan</span>
                        </div>

                        <!-- Section des limites spécifiques pour les restaurants (UNIQUEMENT POUR LES RESTAURANTS) -->
                        {% set companyType = app.user.hmaService.companyType ?? 'commerce' %}
                        {% if companyType == 'restaurant' %}
                        <div class=\"limits-section\">
                            <div class=\"limits-title\">
                                <i class=\"bi bi-egg-fried me-1\"></i> Limites Restaurant
                            </div>
                            
                            <!-- Limite Recettes -->
                            <div class=\"limit-item\">
                                <div class=\"limit-icon\">
                                    <i class=\"bi bi-book-fill text-success\"></i>
                                </div>
                                <div class=\"limit-text\">
                                    <strong>Recettes</strong>
                                </div>
                                <div class=\"limit-value\">
                                    {% if plan.maxRecipes is null or plan.maxRecipes >= 999999999 %}
                                        ♾️ Illimité
                                    {% else %}
                                        {{ plan.maxRecipes|number_format }}
                                    {% endif %}
                                </div>
                            </div>
                            
                            <!-- Limite Catégories de recettes -->
                            <div class=\"limit-item\">
                                <div class=\"limit-icon\">
                                    <i class=\"bi bi-tag-fill text-info\"></i>
                                </div>
                                <div class=\"limit-text\">
                                    <strong>Catégories de recettes</strong>
                                </div>
                                <div class=\"limit-value\">
                                    {% if plan.maxRecipeCategories is null or plan.maxRecipeCategories >= 999999999 %}
                                        ♾️ Illimité
                                    {% else %}
                                        {{ plan.maxRecipeCategories|number_format }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        {% endif %}

                        <!-- Section des limites commerce -->
                        {% set isPremiumUnlimited = plan.name == 'premium' and (plan.maxProducts is null or plan.maxProducts >= 999999999) %}
                        <div class=\"limits-section {{ isPremiumUnlimited ? 'unlimited' : '' }}\">
                            <div class=\"limits-title\">
                                <i class=\"bi bi-shop me-1\"></i> Limites Commerce
                                {% if isPremiumUnlimited %}
                                    <span class=\"badge bg-warning text-dark ms-2\">Illimité ✨</span>
                                {% endif %}
                            </div>
                            
                            <div class=\"limit-item\">
                                <div class=\"limit-icon\"><i class=\"bi bi-box-fill text-info\"></i></div>
                                <div class=\"limit-text\"><strong>Produits</strong></div>
                                <div class=\"limit-value\">
                                    {% if plan.maxProducts is null or plan.maxProducts >= 999999999 %}
                                        ♾️ Illimité
                                    {% else %}
                                        {{ plan.maxProducts|number_format }}
                                    {% endif %}
                                </div>
                            </div>
                            
                            <div class=\"limit-item\">
                                <div class=\"limit-icon\"><i class=\"bi bi-cart-fill text-warning\"></i></div>
                                <div class=\"limit-text\"><strong>Commandes / mois</strong></div>
                                <div class=\"limit-value\">
                                    {% if plan.maxOrdersPerMonth is null or plan.maxOrdersPerMonth >= 999999999 %}
                                        ♾️ Illimité
                                    {% else %}
                                        {{ plan.maxOrdersPerMonth|number_format }}
                                    {% endif %}
                                </div>
                            </div>
                            
                            <div class=\"limit-item\">
                                <div class=\"limit-icon\"><i class=\"bi bi-tags-fill text-primary\"></i></div>
                                <div class=\"limit-text\"><strong>Catégories</strong></div>
                                <div class=\"limit-value\">
                                    {% if plan.maxCategories is null or plan.maxCategories >= 999999999 %}
                                        ♾️ Illimité
                                    {% else %}
                                        {{ plan.maxCategories|number_format }}
                                    {% endif %}
                                </div>
                            </div>
                            
                            <div class=\"limit-item\">
                                <div class=\"limit-icon\"><i class=\"bi bi-truck text-secondary\"></i></div>
                                <div class=\"limit-text\"><strong>Fournisseurs</strong></div>
                                <div class=\"limit-value\">
                                    {% if plan.maxSuppliers is null or plan.maxSuppliers >= 999999999 %}
                                        ♾️ Illimité
                                    {% else %}
                                        {{ plan.maxSuppliers|number_format }}
                                    {% endif %}
                                </div>
                            </div>
                            
                            <div class=\"limit-item\">
                                <div class=\"limit-icon\"><i class=\"bi bi-people-fill text-success\"></i></div>
                                <div class=\"limit-text\"><strong>Utilisateurs / rôle</strong></div>
                                <div class=\"limit-value\">
                                    {% if plan.maxUsersPerRole is null or plan.maxUsersPerRole >= 999999999 %}
                                        ♾️ Illimité
                                    {% else %}
                                        {{ plan.maxUsersPerRole|number_format }}
                                    {% endif %}
                                </div>
                            </div>

                            {# Message spécial pour Premium illimité #}
                            {% if isPremiumUnlimited %}
                            <div class=\"mt-2 pt-2 text-center\">
                                <small class=\"text-warning-dark\">
                                    <i class=\"bi bi-infinity me-1\"></i>
                                    Toutes les limites sont illimitées avec le plan Premium !
                                </small>
                            </div>
                            {% endif %}
                        </div>

                        {% if plan.name == 'freemium' %}
                            <div class=\"freemium-message\">
                                <i class=\"bi bi-info-circle me-2\"></i>
                                Plan gratuit - Pas de paiement requis
                            </div>
                            <button class=\"btn-plan disabled w-100 mt-3\" disabled>
                                <i class=\"bi bi-lock me-2\"></i>Plan actuel
                            </button>
                        {% else %}
                            <button class=\"btn-plan w-100 {{ plan.name == 'premium' ? 'premium' : '' }}\" 
                                    data-plan-id=\"{{ plan.id }}\" 
                                    data-plan-name=\"{{ plan.displayName }}\"
                                    data-monthly-price=\"{{ plan.priceMonthly|number_format(0, ',', ' ') }}\"
                                    data-yearly-price=\"{{ plan.priceYearly|number_format(0, ',', ' ') }}\">
                                Choisir {{ plan.displayName }}
                            </button>
                        {% endif %}
                    </div>
                </div>
            </div>
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
    const selectButtons = document.querySelectorAll('.btn-plan:not(.disabled)');
    
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
    input.setSelectionRange(0, 99999);
    document.execCommand('copy');
    
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
