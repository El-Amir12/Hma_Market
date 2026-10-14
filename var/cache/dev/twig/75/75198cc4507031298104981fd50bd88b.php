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

/* marketplace/auth/register.html.twig */
class __TwigTemplate_9607516adfe7968324e95d400ed7f5f3 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base_marketplace.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/auth/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/auth/register.html.twig"));

        $this->parent = $this->load("base_marketplace.html.twig", 2);
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

        yield "Inscription client - HMA Market";
        
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
    .register-container {
        padding: 2rem 0;
    }

    .register-card {
        border: none;
        border-radius: 24px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.08);
        overflow: hidden;
    }

    .register-card .card-header {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        color: white;
        padding: 2rem;
        text-align: center;
        border: none;
    }

    .register-card .card-header .icon-wrapper {
        width: 80px;
        height: 80px;
        background: rgba(255,255,255,0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
        font-size: 2.5rem;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255,255,255,0.3);
    }

    .register-card .card-header h3 {
        font-weight: 800;
        margin-bottom: 0.25rem;
    }

    .register-card .card-header p {
        opacity: 0.9;
        font-size: 1rem;
        margin-bottom: 0;
    }

    .register-card .card-body {
        padding: 2.5rem;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group .form-label {
        font-weight: 600;
        color: var(--dark-color);
        margin-bottom: 0.5rem;
        font-size: 0.9rem;
    }

    .form-group .form-label .required {
        color: #ef4444;
        margin-left: 0.25rem;
    }

    .form-group .form-control,
    .form-group .form-select {
        border-radius: 12px;
        padding: 0.75rem 1rem;
        border: 2px solid #e5e7eb;
        transition: all 0.3s ease;
        font-size: 0.95rem;
    }

    .form-group .form-control:focus,
    .form-group .form-select:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 4px rgba(4, 99, 241, 0.1);
    }

    .form-group .form-control.is-invalid,
    .form-group .form-select.is-invalid {
        border-color: #ef4444;
    }

    .form-group .form-text {
        color: #94a3b8;
        font-size: 0.8rem;
        margin-top: 0.25rem;
    }

    .terms-check {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        margin-top: 0.5rem;
    }

    .terms-check .form-check-input {
        margin-top: 0.15rem;
        width: 1.2rem;
        height: 1.2rem;
        border-radius: 4px;
        border: 2px solid #e5e7eb;
        cursor: pointer;
        flex-shrink: 0;
    }

    .terms-check .form-check-input:checked {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }

    .terms-check .form-check-label {
        font-size: 0.9rem;
        color: #64748b;
    }

    .terms-check .form-check-label a {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 600;
    }

    .terms-check .form-check-label a:hover {
        text-decoration: underline;
    }

    .btn-register {
        width: 100%;
        padding: 0.9rem;
        border-radius: 50px;
        font-weight: 700;
        font-size: 1.1rem;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        border: none;
        color: white;
        transition: all 0.3s ease;
        cursor: pointer;
        margin-top: 0.5rem;
    }

    .btn-register:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(4, 99, 241, 0.3);
    }

    .btn-register:disabled {
        opacity: 0.7;
        cursor: not-allowed;
        transform: none;
    }

    .divider {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin: 1.5rem 0;
    }

    .divider::before,
    .divider::after {
        content: '';
        flex: 1;
        height: 1px;
        background: #e5e7eb;
    }

    .divider span {
        color: #94a3b8;
        font-size: 0.85rem;
        font-weight: 500;
    }

    .login-link {
        text-align: center;
        margin-top: 1rem;
        color: #64748b;
    }

    .login-link a {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 600;
    }

    .login-link a:hover {
        text-decoration: underline;
    }

    .alert-custom {
        border-radius: 12px;
        padding: 1rem 1.25rem;
        margin-bottom: 1.5rem;
        border: none;
    }

    .alert-custom.alert-info {
        background: #eff6ff;
        color: #1e40af;
        border-left: 4px solid var(--primary-color);
    }

    .alert-custom.alert-success {
        background: #f0fdf4;
        color: #166534;
        border-left: 4px solid #10b981;
    }

    .alert-custom.alert-danger {
        background: #fef2f2;
        color: #991b1b;
        border-left: 4px solid #ef4444;
    }

    .alert-custom.alert-warning {
        background: #fffbeb;
        color: #92400e;
        border-left: 4px solid #f59e0b;
    }

    .alert-custom i {
        margin-right: 0.75rem;
    }

    /* ✅ Info box pour expliquer le processus */
    .info-box {
        background: #f0f4ff;
        border-radius: 12px;
        padding: 1.25rem;
        margin-bottom: 1.5rem;
        border-left: 4px solid var(--primary-color);
    }

    .info-box i {
        color: var(--primary-color);
        margin-right: 0.75rem;
    }

    .info-box h6 {
        font-weight: 700;
        margin-bottom: 0.25rem;
        color: var(--dark-color);
    }

    .info-box p {
        color: #4b5563;
        font-size: 0.9rem;
        margin-bottom: 0;
    }

    /* ✅ Styles pour les champs mot de passe */
    .password-field-wrapper {
        position: relative;
    }

    .password-field-wrapper .form-control {
        padding-right: 3rem;
    }

    .password-toggle {
        position: absolute;
        right: 1rem;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        color: #94a3b8;
        cursor: pointer;
        font-size: 1rem;
        padding: 0.25rem;
        transition: color 0.2s;
    }

    .password-toggle:hover {
        color: var(--primary-color);
    }

    .password-strength {
        margin-top: 0.5rem;
        font-size: 0.8rem;
    }

    .password-strength .bar {
        display: flex;
        gap: 4px;
        margin-bottom: 0.25rem;
    }

    .password-strength .bar-item {
        flex: 1;
        height: 4px;
        background: #e5e7eb;
        border-radius: 2px;
        transition: background 0.3s;
    }

    .password-strength .bar-item.active.weak { background: #ef4444; }
    .password-strength .bar-item.active.medium { background: #f59e0b; }
    .password-strength .bar-item.active.strong { background: #10b981; }

    @media (max-width: 768px) {
        .register-card .card-body {
            padding: 1.5rem;
        }
        .register-card .card-header {
            padding: 1.5rem;
        }
        .register-card .card-header .icon-wrapper {
            width: 60px;
            height: 60px;
            font-size: 2rem;
        }
        .register-container {
            padding: 1rem 0;
        }
    }

    @media (max-width: 480px) {
        .register-card .card-body {
            padding: 1rem;
        }
        .form-group .form-control,
        .form-group .form-select {
            font-size: 0.85rem;
            padding: 0.6rem 0.8rem;
        }
        .btn-register {
            font-size: 0.95rem;
            padding: 0.75rem;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 343
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

        // line 344
        yield "<div class=\"register-container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-10 col-lg-8 col-xl-7\">
            <div class=\"register-card card\">
                <!-- Header -->
                <div class=\"card-header\">
                    <div class=\"icon-wrapper\">
                        <i class=\"fas fa-user-plus\"></i>
                    </div>
                    <h3>Créer un compte client</h3>
                    <p>Rejoignez HMA Market et commencez vos achats</p>
                </div>

                <!-- Body -->
                <div class=\"card-body\">
                    ";
        // line 360
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 360, $this->source); })()), "flashes", [], "any", false, false, false, 360));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 361
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 362
                yield "                            <div class=\"alert-custom alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                                <i class=\"fas fa-";
                // line 363
                if (($context["label"] == "success")) {
                    yield "check-circle";
                } elseif (($context["label"] == "danger")) {
                    yield "exclamation-circle";
                } elseif (($context["label"] == "warning")) {
                    yield "exclamation-triangle";
                } else {
                    yield "info-circle";
                }
                yield "\"></i>
                                ";
                // line 364
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 368
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 369
        yield "
                    ";
        // line 371
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 371, $this->source); })()), "user", [], "any", false, false, false, 371) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 371, $this->source); })()), "user", [], "any", false, false, false, 371), "roles", [], "any", false, false, false, 371)))) {
            // line 372
            yield "                        <div class=\"alert-custom alert-info\">
                            <i class=\"fas fa-info-circle\"></i>
                            <strong>Information :</strong> La Marketplace est indépendante de Hma Market.
                            Vous êtes connecté en tant qu'administrateur. Créez un compte client séparé pour passer des commandes.
                        </div>
                    ";
        }
        // line 378
        yield "
                    ";
        // line 380
        yield "                    <div class=\"info-box\">
                        <div class=\"d-flex align-items-start\">
                            <i class=\"fas fa-info-circle fa-lg mt-1\"></i>
                            <div>
                                <h6>Comment ça fonctionne ?</h6>
                                <p>
                                    Après votre inscription, vous recevrez un email de vérification. 
                                    Cliquez sur le lien pour activer votre compte, puis connectez-vous 
                                    avec votre email et le mot de passe que vous avez choisi.
                                </p>
                            </div>
                        </div>
                    </div>

                    ";
        // line 395
        yield "                    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 395, $this->source); })()), 'form_start', ["attr" => ["id" => "registerForm", "novalidate" => "novalidate"]]);
        yield "

                    <div class=\"row\">
                        ";
        // line 399
        yield "                        <div class=\"col-12 form-group\">
                            ";
        // line 400
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 400, $this->source); })()), "full_name", [], "any", false, false, false, 400), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom complet *"]);
        yield "
                            ";
        // line 401
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 401, $this->source); })()), "full_name", [], "any", false, false, false, 401), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre nom complet", "autocomplete" => "name"]]);
        // line 407
        yield "
                            ";
        // line 408
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 408, $this->source); })()), "full_name", [], "any", false, false, false, 408), 'errors');
        yield "
                        </div>

                        ";
        // line 412
        yield "                        <div class=\"col-12 form-group\">
                            ";
        // line 413
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 413, $this->source); })()), "email", [], "any", false, false, false, 413), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email *"]);
        yield "
                            ";
        // line 414
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 414, $this->source); })()), "email", [], "any", false, false, false, 414), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "votre@email.com", "autocomplete" => "email"]]);
        // line 420
        yield "
                            <div class=\"form-text\">Nous ne partagerons jamais votre email.</div>
                            ";
        // line 422
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 422, $this->source); })()), "email", [], "any", false, false, false, 422), 'errors');
        yield "
                        </div>

                        ";
        // line 426
        yield "                        <div class=\"col-md-6 form-group\">
                            ";
        // line 427
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 427, $this->source); })()), "phone", [], "any", false, false, false, 427), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Téléphone"]);
        yield "
                            ";
        // line 428
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 428, $this->source); })()), "phone", [], "any", false, false, false, 428), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "+229 01 56 13 92 00"]]);
        // line 433
        yield "
                            ";
        // line 434
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 434, $this->source); })()), "phone", [], "any", false, false, false, 434), 'errors');
        yield "
                        </div>

                        ";
        // line 438
        yield "                        <div class=\"col-md-6 form-group\">
                            ";
        // line 439
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 439, $this->source); })()), "city", [], "any", false, false, false, 439), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Ville"]);
        yield "
                            ";
        // line 440
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 440, $this->source); })()), "city", [], "any", false, false, false, 440), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre ville"]]);
        // line 445
        yield "
                            ";
        // line 446
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 446, $this->source); })()), "city", [], "any", false, false, false, 446), 'errors');
        yield "
                        </div>

                        ";
        // line 450
        yield "                        <div class=\"col-12 form-group\">
                            ";
        // line 451
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 451, $this->source); })()), "address", [], "any", false, false, false, 451), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Adresse"]);
        yield "
                            ";
        // line 452
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 452, $this->source); })()), "address", [], "any", false, false, false, 452), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre adresse complète"]]);
        // line 457
        yield "
                            ";
        // line 458
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 458, $this->source); })()), "address", [], "any", false, false, false, 458), 'errors');
        yield "
                        </div>

                        ";
        // line 462
        yield "                        <div class=\"col-12 form-group\">
                            ";
        // line 463
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 463, $this->source); })()), "country", [], "any", false, false, false, 463), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Pays"]);
        yield "
                            ";
        // line 464
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 464, $this->source); })()), "country", [], "any", false, false, false, 464), 'widget', ["attr" => ["class" => "form-select select2-country", "data-placeholder" => "Sélectionnez votre pays"]]);
        // line 469
        yield "
                            ";
        // line 470
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 470, $this->source); })()), "country", [], "any", false, false, false, 470), 'errors');
        yield "
                        </div>

                        ";
        // line 474
        yield "                        <div class=\"col-md-6 form-group\">
                            ";
        // line 475
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 475, $this->source); })()), "plainPassword", [], "any", false, false, false, 475), "first", [], "any", false, false, false, 475), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Mot de passe *"]);
        yield "
                            <div class=\"password-field-wrapper\">
                                ";
        // line 477
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 477, $this->source); })()), "plainPassword", [], "any", false, false, false, 477), "first", [], "any", false, false, false, 477), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Minimum 8 caractères", "autocomplete" => "new-password", "id" => "plainPassword_first"]]);
        // line 484
        yield "
                                <button type=\"button\" class=\"password-toggle\" onclick=\"togglePassword('plainPassword_first', this)\">
                                    <i class=\"fas fa-eye\"></i>
                                </button>
                            </div>
                            <div class=\"password-strength\" id=\"passwordStrength\">
                                <div class=\"bar\">
                                    <div class=\"bar-item\" id=\"bar1\"></div>
                                    <div class=\"bar-item\" id=\"bar2\"></div>
                                    <div class=\"bar-item\" id=\"bar3\"></div>
                                    <div class=\"bar-item\" id=\"bar4\"></div>
                                </div>
                                <div class=\"text-muted\" id=\"strengthText\">Force du mot de passe</div>
                            </div>
                            ";
        // line 498
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 498, $this->source); })()), "plainPassword", [], "any", false, false, false, 498), "first", [], "any", false, false, false, 498), 'errors');
        yield "
                        </div>

                        ";
        // line 502
        yield "                        <div class=\"col-md-6 form-group\">
                            ";
        // line 503
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 503, $this->source); })()), "plainPassword", [], "any", false, false, false, 503), "second", [], "any", false, false, false, 503), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Confirmer le mot de passe *"]);
        yield "
                            <div class=\"password-field-wrapper\">
                                ";
        // line 505
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 505, $this->source); })()), "plainPassword", [], "any", false, false, false, 505), "second", [], "any", false, false, false, 505), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Répétez le mot de passe", "autocomplete" => "new-password", "id" => "plainPassword_second"]]);
        // line 512
        yield "
                                <button type=\"button\" class=\"password-toggle\" onclick=\"togglePassword('plainPassword_second', this)\">
                                    <i class=\"fas fa-eye\"></i>
                                </button>
                            </div>
                            ";
        // line 517
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 517, $this->source); })()), "plainPassword", [], "any", false, false, false, 517), "second", [], "any", false, false, false, 517), 'errors');
        yield "
                        </div>

                        ";
        // line 521
        yield "                        <div class=\"col-12 form-group\">
                            <div class=\"terms-check\">
                                ";
        // line 523
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 523, $this->source); })()), "terms", [], "any", false, false, false, 523), 'widget', ["attr" => ["class" => "form-check-input", "id" => "terms"]]);
        // line 528
        yield "
                                <label class=\"form-check-label\" for=\"terms\">
                                    J'accepte les 
                                    <a href=\"#\" onclick=\"alert('Conditions générales disponibles bientôt')\">conditions générales</a>
                                    et la 
                                    <a href=\"#\" onclick=\"alert('Politique de confidentialité disponible bientôt')\">politique de confidentialité</a>
                                    *
                                </label>
                            </div>
                            ";
        // line 537
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 537, $this->source); })()), "terms", [], "any", false, false, false, 537), 'errors');
        yield "
                        </div>

                        ";
        // line 541
        yield "                        <div class=\"col-12 form-group mt-2\">
                            <button type=\"submit\" class=\"btn-register\" id=\"registerBtn\">
                                <i class=\"fas fa-user-plus me-2\"></i>S'inscrire
                            </button>
                        </div>
                    </div>

                    ";
        // line 548
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 548, $this->source); })()), 'form_end');
        yield "

                    ";
        // line 551
        yield "                    <div class=\"divider\">
                        <span>ou</span>
                    </div>

                    ";
        // line 556
        yield "                    <div class=\"login-link\">
                        Vous avez déjà un compte client ?
                        <a href=\"";
        // line 558
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_login");
        yield "\">Connectez-vous</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 567
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 568
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ==================== SELECT2 PAYS ====================
    if (typeof \$ !== 'undefined' && \$.fn.select2) {
        \$('.select2-country').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '🌍 Sélectionnez votre pays',
            allowClear: true,
            width: '100%'
        });
    }

    // ==================== FORM VALIDATION ====================
    const form = document.getElementById('registerForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            const terms = document.getElementById('terms');
            const password = document.getElementById('plainPassword_first');
            const passwordConfirm = document.getElementById('plainPassword_second');

            let valid = true;

            // Vérifier les conditions générales
            if (!terms.checked) {
                e.preventDefault();
                terms.classList.add('is-invalid');
                terms.scrollIntoView({ behavior: 'smooth', block: 'center' });
                valid = false;
            } else {
                terms.classList.remove('is-invalid');
            }

            // Vérifier la force du mot de passe
            if (password && password.value.length < 8) {
                e.preventDefault();
                password.classList.add('is-invalid');
                valid = false;
            }

            // Vérifier que les mots de passe correspondent
            if (password && passwordConfirm && password.value !== passwordConfirm.value) {
                e.preventDefault();
                passwordConfirm.classList.add('is-invalid');
                valid = false;
            }

            // Désactiver le bouton si tout est valide pour éviter double soumission
            if (valid) {
                const btn = document.getElementById('registerBtn');
                btn.disabled = true;
                btn.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i>Inscription...';
            }
        });
    }

    // ==================== PASSWORD STRENGTH ====================
    const passwordInput = document.getElementById('plainPassword_first');
    if (passwordInput) {
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;

            // Critères
            if (password.length >= 8) strength++;
            if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength++;
            if (/\\d/.test(password)) strength++;
            if (/[^a-zA-Z\\d]/.test(password)) strength++;

            // Mettre à jour les barres
            const bars = [
                document.getElementById('bar1'),
                document.getElementById('bar2'),
                document.getElementById('bar3'),
                document.getElementById('bar4')
            ];

            const strengthText = document.getElementById('strengthText');
            let strengthLevel = '';
            let activeClass = '';

            if (strength <= 1) {
                strengthLevel = 'Faible';
                activeClass = 'weak';
            } else if (strength === 2) {
                strengthLevel = 'Moyen';
                activeClass = 'medium';
            } else if (strength >= 3) {
                strengthLevel = 'Fort';
                activeClass = 'strong';
            }

            bars.forEach((bar, index) => {
                bar.classList.remove('active', 'weak', 'medium', 'strong');
                if (index < strength) {
                    bar.classList.add('active', activeClass);
                }
            });

            if (password.length > 0) {
                strengthText.textContent = 'Force : ' + strengthLevel;
                strengthText.className = 'text-' + (activeClass === 'strong' ? 'success' : (activeClass === 'medium' ? 'warning' : 'danger'));
            } else {
                strengthText.textContent = 'Force du mot de passe';
                strengthText.className = 'text-muted';
            }
        });
    }
});

// ==================== TOGGLE PASSWORD VISIBILITY ====================
function togglePassword(inputId, button) {
    const input = document.getElementById(inputId);
    const icon = button.querySelector('i');

    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        input.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
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
        return "marketplace/auth/register.html.twig";
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
        return array (  804 => 568,  791 => 567,  772 => 558,  768 => 556,  762 => 551,  757 => 548,  748 => 541,  742 => 537,  731 => 528,  729 => 523,  725 => 521,  719 => 517,  712 => 512,  710 => 505,  705 => 503,  702 => 502,  696 => 498,  680 => 484,  678 => 477,  673 => 475,  670 => 474,  664 => 470,  661 => 469,  659 => 464,  655 => 463,  652 => 462,  646 => 458,  643 => 457,  641 => 452,  637 => 451,  634 => 450,  628 => 446,  625 => 445,  623 => 440,  619 => 439,  616 => 438,  610 => 434,  607 => 433,  605 => 428,  601 => 427,  598 => 426,  592 => 422,  588 => 420,  586 => 414,  582 => 413,  579 => 412,  573 => 408,  570 => 407,  568 => 401,  564 => 400,  561 => 399,  554 => 395,  538 => 380,  535 => 378,  527 => 372,  524 => 371,  521 => 369,  515 => 368,  505 => 364,  493 => 363,  488 => 362,  483 => 361,  478 => 360,  461 => 344,  448 => 343,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/marketplace/auth/register.html.twig #}
{% extends 'base_marketplace.html.twig' %}

{% block title %}Inscription client - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .register-container {
        padding: 2rem 0;
    }

    .register-card {
        border: none;
        border-radius: 24px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.08);
        overflow: hidden;
    }

    .register-card .card-header {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        color: white;
        padding: 2rem;
        text-align: center;
        border: none;
    }

    .register-card .card-header .icon-wrapper {
        width: 80px;
        height: 80px;
        background: rgba(255,255,255,0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
        font-size: 2.5rem;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255,255,255,0.3);
    }

    .register-card .card-header h3 {
        font-weight: 800;
        margin-bottom: 0.25rem;
    }

    .register-card .card-header p {
        opacity: 0.9;
        font-size: 1rem;
        margin-bottom: 0;
    }

    .register-card .card-body {
        padding: 2.5rem;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group .form-label {
        font-weight: 600;
        color: var(--dark-color);
        margin-bottom: 0.5rem;
        font-size: 0.9rem;
    }

    .form-group .form-label .required {
        color: #ef4444;
        margin-left: 0.25rem;
    }

    .form-group .form-control,
    .form-group .form-select {
        border-radius: 12px;
        padding: 0.75rem 1rem;
        border: 2px solid #e5e7eb;
        transition: all 0.3s ease;
        font-size: 0.95rem;
    }

    .form-group .form-control:focus,
    .form-group .form-select:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 4px rgba(4, 99, 241, 0.1);
    }

    .form-group .form-control.is-invalid,
    .form-group .form-select.is-invalid {
        border-color: #ef4444;
    }

    .form-group .form-text {
        color: #94a3b8;
        font-size: 0.8rem;
        margin-top: 0.25rem;
    }

    .terms-check {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        margin-top: 0.5rem;
    }

    .terms-check .form-check-input {
        margin-top: 0.15rem;
        width: 1.2rem;
        height: 1.2rem;
        border-radius: 4px;
        border: 2px solid #e5e7eb;
        cursor: pointer;
        flex-shrink: 0;
    }

    .terms-check .form-check-input:checked {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }

    .terms-check .form-check-label {
        font-size: 0.9rem;
        color: #64748b;
    }

    .terms-check .form-check-label a {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 600;
    }

    .terms-check .form-check-label a:hover {
        text-decoration: underline;
    }

    .btn-register {
        width: 100%;
        padding: 0.9rem;
        border-radius: 50px;
        font-weight: 700;
        font-size: 1.1rem;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        border: none;
        color: white;
        transition: all 0.3s ease;
        cursor: pointer;
        margin-top: 0.5rem;
    }

    .btn-register:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(4, 99, 241, 0.3);
    }

    .btn-register:disabled {
        opacity: 0.7;
        cursor: not-allowed;
        transform: none;
    }

    .divider {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin: 1.5rem 0;
    }

    .divider::before,
    .divider::after {
        content: '';
        flex: 1;
        height: 1px;
        background: #e5e7eb;
    }

    .divider span {
        color: #94a3b8;
        font-size: 0.85rem;
        font-weight: 500;
    }

    .login-link {
        text-align: center;
        margin-top: 1rem;
        color: #64748b;
    }

    .login-link a {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 600;
    }

    .login-link a:hover {
        text-decoration: underline;
    }

    .alert-custom {
        border-radius: 12px;
        padding: 1rem 1.25rem;
        margin-bottom: 1.5rem;
        border: none;
    }

    .alert-custom.alert-info {
        background: #eff6ff;
        color: #1e40af;
        border-left: 4px solid var(--primary-color);
    }

    .alert-custom.alert-success {
        background: #f0fdf4;
        color: #166534;
        border-left: 4px solid #10b981;
    }

    .alert-custom.alert-danger {
        background: #fef2f2;
        color: #991b1b;
        border-left: 4px solid #ef4444;
    }

    .alert-custom.alert-warning {
        background: #fffbeb;
        color: #92400e;
        border-left: 4px solid #f59e0b;
    }

    .alert-custom i {
        margin-right: 0.75rem;
    }

    /* ✅ Info box pour expliquer le processus */
    .info-box {
        background: #f0f4ff;
        border-radius: 12px;
        padding: 1.25rem;
        margin-bottom: 1.5rem;
        border-left: 4px solid var(--primary-color);
    }

    .info-box i {
        color: var(--primary-color);
        margin-right: 0.75rem;
    }

    .info-box h6 {
        font-weight: 700;
        margin-bottom: 0.25rem;
        color: var(--dark-color);
    }

    .info-box p {
        color: #4b5563;
        font-size: 0.9rem;
        margin-bottom: 0;
    }

    /* ✅ Styles pour les champs mot de passe */
    .password-field-wrapper {
        position: relative;
    }

    .password-field-wrapper .form-control {
        padding-right: 3rem;
    }

    .password-toggle {
        position: absolute;
        right: 1rem;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        color: #94a3b8;
        cursor: pointer;
        font-size: 1rem;
        padding: 0.25rem;
        transition: color 0.2s;
    }

    .password-toggle:hover {
        color: var(--primary-color);
    }

    .password-strength {
        margin-top: 0.5rem;
        font-size: 0.8rem;
    }

    .password-strength .bar {
        display: flex;
        gap: 4px;
        margin-bottom: 0.25rem;
    }

    .password-strength .bar-item {
        flex: 1;
        height: 4px;
        background: #e5e7eb;
        border-radius: 2px;
        transition: background 0.3s;
    }

    .password-strength .bar-item.active.weak { background: #ef4444; }
    .password-strength .bar-item.active.medium { background: #f59e0b; }
    .password-strength .bar-item.active.strong { background: #10b981; }

    @media (max-width: 768px) {
        .register-card .card-body {
            padding: 1.5rem;
        }
        .register-card .card-header {
            padding: 1.5rem;
        }
        .register-card .card-header .icon-wrapper {
            width: 60px;
            height: 60px;
            font-size: 2rem;
        }
        .register-container {
            padding: 1rem 0;
        }
    }

    @media (max-width: 480px) {
        .register-card .card-body {
            padding: 1rem;
        }
        .form-group .form-control,
        .form-group .form-select {
            font-size: 0.85rem;
            padding: 0.6rem 0.8rem;
        }
        .btn-register {
            font-size: 0.95rem;
            padding: 0.75rem;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"register-container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-10 col-lg-8 col-xl-7\">
            <div class=\"register-card card\">
                <!-- Header -->
                <div class=\"card-header\">
                    <div class=\"icon-wrapper\">
                        <i class=\"fas fa-user-plus\"></i>
                    </div>
                    <h3>Créer un compte client</h3>
                    <p>Rejoignez HMA Market et commencez vos achats</p>
                </div>

                <!-- Body -->
                <div class=\"card-body\">
                    {# Flash messages #}
                    {% for label, messages in app.flashes %}
                        {% for message in messages %}
                            <div class=\"alert-custom alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                                <i class=\"fas fa-{% if label == 'success' %}check-circle{% elseif label == 'danger' %}exclamation-circle{% elseif label == 'warning' %}exclamation-triangle{% else %}info-circle{% endif %}\"></i>
                                {{ message }}
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        {% endfor %}
                    {% endfor %}

                    {# Information pour les admins #}
                    {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
                        <div class=\"alert-custom alert-info\">
                            <i class=\"fas fa-info-circle\"></i>
                            <strong>Information :</strong> La Marketplace est indépendante de Hma Market.
                            Vous êtes connecté en tant qu'administrateur. Créez un compte client séparé pour passer des commandes.
                        </div>
                    {% endif %}

                    {# ✅ Info box - Explication du processus mis à jour #}
                    <div class=\"info-box\">
                        <div class=\"d-flex align-items-start\">
                            <i class=\"fas fa-info-circle fa-lg mt-1\"></i>
                            <div>
                                <h6>Comment ça fonctionne ?</h6>
                                <p>
                                    Après votre inscription, vous recevrez un email de vérification. 
                                    Cliquez sur le lien pour activer votre compte, puis connectez-vous 
                                    avec votre email et le mot de passe que vous avez choisi.
                                </p>
                            </div>
                        </div>
                    </div>

                    {# Formulaire #}
                    {{ form_start(registrationForm, {'attr': {'id': 'registerForm', 'novalidate': 'novalidate'}}) }}

                    <div class=\"row\">
                        {# Nom complet #}
                        <div class=\"col-12 form-group\">
                            {{ form_label(registrationForm.full_name, 'Nom complet *', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(registrationForm.full_name, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'Votre nom complet',
                                    'autocomplete': 'name'
                                }
                            }) }}
                            {{ form_errors(registrationForm.full_name) }}
                        </div>

                        {# Email #}
                        <div class=\"col-12 form-group\">
                            {{ form_label(registrationForm.email, 'Email *', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(registrationForm.email, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'votre@email.com',
                                    'autocomplete': 'email'
                                }
                            }) }}
                            <div class=\"form-text\">Nous ne partagerons jamais votre email.</div>
                            {{ form_errors(registrationForm.email) }}
                        </div>

                        {# Téléphone #}
                        <div class=\"col-md-6 form-group\">
                            {{ form_label(registrationForm.phone, 'Téléphone', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(registrationForm.phone, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': '+229 01 56 13 92 00'
                                }
                            }) }}
                            {{ form_errors(registrationForm.phone) }}
                        </div>

                        {# Ville #}
                        <div class=\"col-md-6 form-group\">
                            {{ form_label(registrationForm.city, 'Ville', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(registrationForm.city, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'Votre ville'
                                }
                            }) }}
                            {{ form_errors(registrationForm.city) }}
                        </div>

                        {# Adresse #}
                        <div class=\"col-12 form-group\">
                            {{ form_label(registrationForm.address, 'Adresse', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(registrationForm.address, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'Votre adresse complète'
                                }
                            }) }}
                            {{ form_errors(registrationForm.address) }}
                        </div>

                        {# Pays - Avec tous les pays #}
                        <div class=\"col-12 form-group\">
                            {{ form_label(registrationForm.country, 'Pays', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(registrationForm.country, {
                                'attr': {
                                    'class': 'form-select select2-country',
                                    'data-placeholder': 'Sélectionnez votre pays'
                                }
                            }) }}
                            {{ form_errors(registrationForm.country) }}
                        </div>

                        {# ✅ NOUVEAU : Champ mot de passe #}
                        <div class=\"col-md-6 form-group\">
                            {{ form_label(registrationForm.plainPassword.first, 'Mot de passe *', {'label_attr': {'class': 'form-label'}}) }}
                            <div class=\"password-field-wrapper\">
                                {{ form_widget(registrationForm.plainPassword.first, {
                                    'attr': {
                                        'class': 'form-control',
                                        'placeholder': 'Minimum 8 caractères',
                                        'autocomplete': 'new-password',
                                        'id': 'plainPassword_first'
                                    }
                                }) }}
                                <button type=\"button\" class=\"password-toggle\" onclick=\"togglePassword('plainPassword_first', this)\">
                                    <i class=\"fas fa-eye\"></i>
                                </button>
                            </div>
                            <div class=\"password-strength\" id=\"passwordStrength\">
                                <div class=\"bar\">
                                    <div class=\"bar-item\" id=\"bar1\"></div>
                                    <div class=\"bar-item\" id=\"bar2\"></div>
                                    <div class=\"bar-item\" id=\"bar3\"></div>
                                    <div class=\"bar-item\" id=\"bar4\"></div>
                                </div>
                                <div class=\"text-muted\" id=\"strengthText\">Force du mot de passe</div>
                            </div>
                            {{ form_errors(registrationForm.plainPassword.first) }}
                        </div>

                        {# ✅ NOUVEAU : Confirmation mot de passe #}
                        <div class=\"col-md-6 form-group\">
                            {{ form_label(registrationForm.plainPassword.second, 'Confirmer le mot de passe *', {'label_attr': {'class': 'form-label'}}) }}
                            <div class=\"password-field-wrapper\">
                                {{ form_widget(registrationForm.plainPassword.second, {
                                    'attr': {
                                        'class': 'form-control',
                                        'placeholder': 'Répétez le mot de passe',
                                        'autocomplete': 'new-password',
                                        'id': 'plainPassword_second'
                                    }
                                }) }}
                                <button type=\"button\" class=\"password-toggle\" onclick=\"togglePassword('plainPassword_second', this)\">
                                    <i class=\"fas fa-eye\"></i>
                                </button>
                            </div>
                            {{ form_errors(registrationForm.plainPassword.second) }}
                        </div>

                        {# Conditions #}
                        <div class=\"col-12 form-group\">
                            <div class=\"terms-check\">
                                {{ form_widget(registrationForm.terms, {
                                    'attr': {
                                        'class': 'form-check-input',
                                        'id': 'terms'
                                    }
                                }) }}
                                <label class=\"form-check-label\" for=\"terms\">
                                    J'accepte les 
                                    <a href=\"#\" onclick=\"alert('Conditions générales disponibles bientôt')\">conditions générales</a>
                                    et la 
                                    <a href=\"#\" onclick=\"alert('Politique de confidentialité disponible bientôt')\">politique de confidentialité</a>
                                    *
                                </label>
                            </div>
                            {{ form_errors(registrationForm.terms) }}
                        </div>

                        {# Bouton d'inscription #}
                        <div class=\"col-12 form-group mt-2\">
                            <button type=\"submit\" class=\"btn-register\" id=\"registerBtn\">
                                <i class=\"fas fa-user-plus me-2\"></i>S'inscrire
                            </button>
                        </div>
                    </div>

                    {{ form_end(registrationForm) }}

                    {# Divider #}
                    <div class=\"divider\">
                        <span>ou</span>
                    </div>

                    {# Lien de connexion #}
                    <div class=\"login-link\">
                        Vous avez déjà un compte client ?
                        <a href=\"{{ path('marketplace_login') }}\">Connectez-vous</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ==================== SELECT2 PAYS ====================
    if (typeof \$ !== 'undefined' && \$.fn.select2) {
        \$('.select2-country').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '🌍 Sélectionnez votre pays',
            allowClear: true,
            width: '100%'
        });
    }

    // ==================== FORM VALIDATION ====================
    const form = document.getElementById('registerForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            const terms = document.getElementById('terms');
            const password = document.getElementById('plainPassword_first');
            const passwordConfirm = document.getElementById('plainPassword_second');

            let valid = true;

            // Vérifier les conditions générales
            if (!terms.checked) {
                e.preventDefault();
                terms.classList.add('is-invalid');
                terms.scrollIntoView({ behavior: 'smooth', block: 'center' });
                valid = false;
            } else {
                terms.classList.remove('is-invalid');
            }

            // Vérifier la force du mot de passe
            if (password && password.value.length < 8) {
                e.preventDefault();
                password.classList.add('is-invalid');
                valid = false;
            }

            // Vérifier que les mots de passe correspondent
            if (password && passwordConfirm && password.value !== passwordConfirm.value) {
                e.preventDefault();
                passwordConfirm.classList.add('is-invalid');
                valid = false;
            }

            // Désactiver le bouton si tout est valide pour éviter double soumission
            if (valid) {
                const btn = document.getElementById('registerBtn');
                btn.disabled = true;
                btn.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i>Inscription...';
            }
        });
    }

    // ==================== PASSWORD STRENGTH ====================
    const passwordInput = document.getElementById('plainPassword_first');
    if (passwordInput) {
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;

            // Critères
            if (password.length >= 8) strength++;
            if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength++;
            if (/\\d/.test(password)) strength++;
            if (/[^a-zA-Z\\d]/.test(password)) strength++;

            // Mettre à jour les barres
            const bars = [
                document.getElementById('bar1'),
                document.getElementById('bar2'),
                document.getElementById('bar3'),
                document.getElementById('bar4')
            ];

            const strengthText = document.getElementById('strengthText');
            let strengthLevel = '';
            let activeClass = '';

            if (strength <= 1) {
                strengthLevel = 'Faible';
                activeClass = 'weak';
            } else if (strength === 2) {
                strengthLevel = 'Moyen';
                activeClass = 'medium';
            } else if (strength >= 3) {
                strengthLevel = 'Fort';
                activeClass = 'strong';
            }

            bars.forEach((bar, index) => {
                bar.classList.remove('active', 'weak', 'medium', 'strong');
                if (index < strength) {
                    bar.classList.add('active', activeClass);
                }
            });

            if (password.length > 0) {
                strengthText.textContent = 'Force : ' + strengthLevel;
                strengthText.className = 'text-' + (activeClass === 'strong' ? 'success' : (activeClass === 'medium' ? 'warning' : 'danger'));
            } else {
                strengthText.textContent = 'Force du mot de passe';
                strengthText.className = 'text-muted';
            }
        });
    }
});

// ==================== TOGGLE PASSWORD VISIBILITY ====================
function togglePassword(inputId, button) {
    const input = document.getElementById(inputId);
    const icon = button.querySelector('i');

    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        input.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
}
</script>
{% endblock %}", "marketplace/auth/register.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\auth\\register.html.twig");
    }
}
