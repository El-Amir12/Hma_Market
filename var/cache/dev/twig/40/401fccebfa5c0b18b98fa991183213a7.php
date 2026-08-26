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

/* admin/user/new.html.twig */
class __TwigTemplate_264c4d94cc03288aca7353b386392d6a extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/new.html.twig"));

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

        yield "Nouvel utilisateur - HMA Market";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<div class=\"container-fluid px-2 px-md-4\">
    <!-- Header avec effet visuel -->
    <div class=\"row mb-3 mb-md-5\">
        <div class=\"col-12\">
            <div class=\"modern-header position-relative overflow-hidden rounded-3 rounded-md-4 shadow-lg\">
                <div class=\"floating-shapes\">
                    <div class=\"shape shape-1\"></div>
                    <div class=\"shape shape-2\"></div>
                    <div class=\"shape shape-3\"></div>
                </div>
                
                <div class=\"position-relative p-3 p-md-5\" style=\"z-index: 2;\">
                    <div class=\"d-flex align-items-center gap-3 gap-md-4\">
                        <div class=\"icon-wrapper bg-white bg-opacity-20 rounded-3 rounded-md-4 p-3 p-md-4\">
                            <i class=\"bi bi-person-plus-fill text-white display-6 display-md-4\"></i>
                        </div>
                        <div>
                            <h1 class=\"h3 h-md-1 display-md-5 fw-bold text-white mb-1 mb-md-2\">Nouvel utilisateur</h1>
                            <p class=\"text-white-50 mb-0 fs-6 fs-md-5\">
                                <i class=\"bi bi-building me-2\"></i>
                                ";
        // line 27
        if ((($tmp = (isset($context["is_super_admin"]) || array_key_exists("is_super_admin", $context) ? $context["is_super_admin"] : (function () { throw new RuntimeError('Variable "is_super_admin" does not exist.', 27, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "                                    Super Administrateur
                                ";
        } else {
            // line 30
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "companyDisplayName", [], "any", false, false, false, 30)), "truncate", [25, "..."], "method", false, false, false, 30), "html", null, true);
            yield "
                                ";
        }
        // line 32
        yield "                            </p>
                        </div>
                    </div>
                </div>
                
                <div class=\"wave-decoration d-none d-md-block\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 120\" preserveAspectRatio=\"none\">
                        <path fill=\"#ffffff\" fill-opacity=\"1\" d=\"M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,120L1360,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z\"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulaire -->
    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-lg-10\">
            <div class=\"card border-0 shadow-lg overflow-hidden\">
                <div class=\"card-header bg-white py-2 py-md-4 border-0\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"step-indicator me-2 me-md-3\">
                            <span class=\"step-number\">1</span>
                        </div>
                        <div>
                            <h4 class=\"mb-0 mb-sm-1 fw-bold fs-5 fs-md-4\">Informations du nouvel utilisateur</h4>
                            <p class=\"text-muted mb-0 small d-none d-sm-block\">Remplissez les informations ci-dessous pour créer un compte</p>
                        </div>
                    </div>
                </div>

                ";
        // line 62
        yield from $this->load("admin/user/_form.html.twig", 62)->unwrap()->yield(CoreExtension::merge($context, ["edited_user" =>         // line 63
(isset($context["target_user"]) || array_key_exists("target_user", $context) ? $context["target_user"] : (function () { throw new RuntimeError('Variable "target_user" does not exist.', 63, $this->source); })()), "button_label" => "Créer l'utilisateur", "is_new" => true, "can_edit_email" =>         // line 66
(isset($context["can_edit_email"]) || array_key_exists("can_edit_email", $context) ? $context["can_edit_email"] : (function () { throw new RuntimeError('Variable "can_edit_email" does not exist.', 66, $this->source); })()), "can_edit_role" =>         // line 67
(isset($context["can_edit_role"]) || array_key_exists("can_edit_role", $context) ? $context["can_edit_role"] : (function () { throw new RuntimeError('Variable "can_edit_role" does not exist.', 67, $this->source); })()), "is_self" =>         // line 68
(isset($context["is_self"]) || array_key_exists("is_self", $context) ? $context["is_self"] : (function () { throw new RuntimeError('Variable "is_self" does not exist.', 68, $this->source); })())]));
        // line 70
        yield "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 76
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

        // line 77
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
:root {
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --shadow-sm: 0 2px 8px rgba(0,0,0,0.06);
    --shadow-md: 0 4px 20px rgba(0,0,0,0.08);
    --radius-sm: 10px;
    --radius-md: 16px;
}

.step-indicator {
    width: 40px;
    height: 40px;
    background: var(--primary-gradient);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    flex-shrink: 0;
}

@media (min-width: 768px) {
    .step-indicator {
        width: 50px;
        height: 50px;
        border-radius: 15px;
    }
}

.step-number {
    color: white;
    font-size: 1.2rem;
    font-weight: bold;
    line-height: 1;
}

@media (min-width: 768px) {
    .step-number {
        font-size: 1.5rem;
    }
}

.modern-header {
    background: var(--primary-gradient);
    position: relative;
    min-height: 130px;
}

@media (min-width: 768px) {
    .modern-header {
        min-height: 180px;
    }
}

.floating-shapes {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 1;
}

.shape {
    position: absolute;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
}

.shape-1 {
    width: 150px;
    height: 150px;
    top: -80px;
    right: -30px;
    animation: float 8s ease-in-out infinite;
}

@media (min-width: 768px) {
    .shape-1 {
        width: 250px;
        height: 250px;
        top: -120px;
        right: -50px;
    }
}

.shape-2 {
    width: 100px;
    height: 100px;
    bottom: -50px;
    left: -20px;
    animation: float 12s ease-in-out infinite reverse;
}

@media (min-width: 768px) {
    .shape-2 {
        width: 180px;
        height: 180px;
        bottom: -70px;
        left: -30px;
    }
}

.shape-3 {
    width: 80px;
    height: 80px;
    top: 30%;
    left: 15%;
    animation: float 10s ease-in-out infinite;
}

@media (min-width: 768px) {
    .shape-3 {
        width: 130px;
        height: 130px;
        left: 20%;
    }
}

@keyframes float {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-15px) rotate(10deg); }
}

@media (min-width: 768px) {
    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(10deg); }
    }
}

.icon-wrapper {
    transition: transform 0.3s ease;
}

.icon-wrapper:hover {
    transform: scale(1.05) rotate(5deg);
}

.wave-decoration {
    position: absolute;
    bottom: -1px;
    left: 0;
    right: 0;
    line-height: 0;
    z-index: 2;
}

.wave-decoration svg {
    width: 100%;
    height: 30px;
}

@media (min-width: 768px) {
    .wave-decoration svg {
        height: 50px;
    }
}

.text-white-50 {
    color: rgba(255, 255, 255, 0.8) !important;
}

/* Badges */
.badge {
    font-weight: 500;
}

@media (max-width: 576px) {
    .badge {
        font-size: 0.65rem !important;
        padding: 0.2rem 0.5rem !important;
    }
}

/* Card responsive */
@media (max-width: 576px) {
    .card-header {
        padding: 0.75rem !important;
    }
    .card-body {
        padding: 0.5rem !important;
    }
}

/* Modal responsive */
@media (max-width: 576px) {
    .modal-dialog {
        margin: 0.5rem;
    }
    .modal-body {
        padding: 1rem !important;
    }
    .modal-footer {
        padding: 0.75rem !important;
    }
}

/* Photo in modal */
@media (max-width: 576px) {
    .modal-body img {
        width: 60px !important;
        height: 60px !important;
    }
}

/* Container padding */
@media (max-width: 576px) {
    .container-fluid {
        padding-left: 8px !important;
        padding-right: 8px !important;
    }
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
        return "admin/user/new.html.twig";
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
        return array (  201 => 77,  188 => 76,  173 => 70,  171 => 68,  170 => 67,  169 => 66,  168 => 63,  167 => 62,  135 => 32,  129 => 30,  125 => 28,  123 => 27,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/user/new.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Nouvel utilisateur - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid px-2 px-md-4\">
    <!-- Header avec effet visuel -->
    <div class=\"row mb-3 mb-md-5\">
        <div class=\"col-12\">
            <div class=\"modern-header position-relative overflow-hidden rounded-3 rounded-md-4 shadow-lg\">
                <div class=\"floating-shapes\">
                    <div class=\"shape shape-1\"></div>
                    <div class=\"shape shape-2\"></div>
                    <div class=\"shape shape-3\"></div>
                </div>
                
                <div class=\"position-relative p-3 p-md-5\" style=\"z-index: 2;\">
                    <div class=\"d-flex align-items-center gap-3 gap-md-4\">
                        <div class=\"icon-wrapper bg-white bg-opacity-20 rounded-3 rounded-md-4 p-3 p-md-4\">
                            <i class=\"bi bi-person-plus-fill text-white display-6 display-md-4\"></i>
                        </div>
                        <div>
                            <h1 class=\"h3 h-md-1 display-md-5 fw-bold text-white mb-1 mb-md-2\">Nouvel utilisateur</h1>
                            <p class=\"text-white-50 mb-0 fs-6 fs-md-5\">
                                <i class=\"bi bi-building me-2\"></i>
                                {% if is_super_admin %}
                                    Super Administrateur
                                {% else %}
                                    {{ app.user.companyDisplayName|u.truncate(25, '...') }}
                                {% endif %}
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class=\"wave-decoration d-none d-md-block\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 120\" preserveAspectRatio=\"none\">
                        <path fill=\"#ffffff\" fill-opacity=\"1\" d=\"M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,120L1360,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z\"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulaire -->
    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-lg-10\">
            <div class=\"card border-0 shadow-lg overflow-hidden\">
                <div class=\"card-header bg-white py-2 py-md-4 border-0\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"step-indicator me-2 me-md-3\">
                            <span class=\"step-number\">1</span>
                        </div>
                        <div>
                            <h4 class=\"mb-0 mb-sm-1 fw-bold fs-5 fs-md-4\">Informations du nouvel utilisateur</h4>
                            <p class=\"text-muted mb-0 small d-none d-sm-block\">Remplissez les informations ci-dessous pour créer un compte</p>
                        </div>
                    </div>
                </div>

                {% include 'admin/user/_form.html.twig' with {
                    'edited_user': target_user, 
                    'button_label': 'Créer l\\'utilisateur',
                    'is_new': true,
                    'can_edit_email': can_edit_email,
                    'can_edit_role': can_edit_role,
                    'is_self': is_self
                } %}
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
:root {
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --shadow-sm: 0 2px 8px rgba(0,0,0,0.06);
    --shadow-md: 0 4px 20px rgba(0,0,0,0.08);
    --radius-sm: 10px;
    --radius-md: 16px;
}

.step-indicator {
    width: 40px;
    height: 40px;
    background: var(--primary-gradient);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    flex-shrink: 0;
}

@media (min-width: 768px) {
    .step-indicator {
        width: 50px;
        height: 50px;
        border-radius: 15px;
    }
}

.step-number {
    color: white;
    font-size: 1.2rem;
    font-weight: bold;
    line-height: 1;
}

@media (min-width: 768px) {
    .step-number {
        font-size: 1.5rem;
    }
}

.modern-header {
    background: var(--primary-gradient);
    position: relative;
    min-height: 130px;
}

@media (min-width: 768px) {
    .modern-header {
        min-height: 180px;
    }
}

.floating-shapes {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 1;
}

.shape {
    position: absolute;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
}

.shape-1 {
    width: 150px;
    height: 150px;
    top: -80px;
    right: -30px;
    animation: float 8s ease-in-out infinite;
}

@media (min-width: 768px) {
    .shape-1 {
        width: 250px;
        height: 250px;
        top: -120px;
        right: -50px;
    }
}

.shape-2 {
    width: 100px;
    height: 100px;
    bottom: -50px;
    left: -20px;
    animation: float 12s ease-in-out infinite reverse;
}

@media (min-width: 768px) {
    .shape-2 {
        width: 180px;
        height: 180px;
        bottom: -70px;
        left: -30px;
    }
}

.shape-3 {
    width: 80px;
    height: 80px;
    top: 30%;
    left: 15%;
    animation: float 10s ease-in-out infinite;
}

@media (min-width: 768px) {
    .shape-3 {
        width: 130px;
        height: 130px;
        left: 20%;
    }
}

@keyframes float {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-15px) rotate(10deg); }
}

@media (min-width: 768px) {
    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(10deg); }
    }
}

.icon-wrapper {
    transition: transform 0.3s ease;
}

.icon-wrapper:hover {
    transform: scale(1.05) rotate(5deg);
}

.wave-decoration {
    position: absolute;
    bottom: -1px;
    left: 0;
    right: 0;
    line-height: 0;
    z-index: 2;
}

.wave-decoration svg {
    width: 100%;
    height: 30px;
}

@media (min-width: 768px) {
    .wave-decoration svg {
        height: 50px;
    }
}

.text-white-50 {
    color: rgba(255, 255, 255, 0.8) !important;
}

/* Badges */
.badge {
    font-weight: 500;
}

@media (max-width: 576px) {
    .badge {
        font-size: 0.65rem !important;
        padding: 0.2rem 0.5rem !important;
    }
}

/* Card responsive */
@media (max-width: 576px) {
    .card-header {
        padding: 0.75rem !important;
    }
    .card-body {
        padding: 0.5rem !important;
    }
}

/* Modal responsive */
@media (max-width: 576px) {
    .modal-dialog {
        margin: 0.5rem;
    }
    .modal-body {
        padding: 1rem !important;
    }
    .modal-footer {
        padding: 0.75rem !important;
    }
}

/* Photo in modal */
@media (max-width: 576px) {
    .modal-body img {
        width: 60px !important;
        height: 60px !important;
    }
}

/* Container padding */
@media (max-width: 576px) {
    .container-fluid {
        padding-left: 8px !important;
        padding-right: 8px !important;
    }
}
</style>
{% endblock %}", "admin/user/new.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\user\\new.html.twig");
    }
}
