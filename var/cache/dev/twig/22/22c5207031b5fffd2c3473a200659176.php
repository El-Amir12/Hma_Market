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

/* marketplace/pharmacy/_pharmacy_detail.html.twig */
class __TwigTemplate_a68b722f069b176b25f9ae61aad4e752 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/pharmacy/_pharmacy_detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/pharmacy/_pharmacy_detail.html.twig"));

        // line 2
        yield "
<style>
    .pharmacy-detail-card {
        background: white;
        border-radius: 16px;
        padding: 2rem;
        border: 1px solid var(--gray-200);
        box-shadow: 0 2px 10px rgba(0,0,0,0.04);
    }

    .pharmacy-detail-card .pharmacy-icon {
        width: 64px;
        height: 64px;
        border-radius: 14px;
        background: var(--primary-light);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        color: var(--primary-color);
        flex-shrink: 0;
    }

    .pharmacy-detail-card .pharmacy-name {
        font-weight: 700;
        font-size: 1.4rem;
        color: var(--dark-color);
    }

    .pharmacy-detail-card .detail-row {
        display: flex;
        gap: 1rem;
        padding: 0.5rem 0;
        border-bottom: 1px solid var(--gray-100);
    }

    .pharmacy-detail-card .detail-row:last-child { border-bottom: none; }

    .pharmacy-detail-card .detail-label {
        font-weight: 600;
        color: var(--gray-500);
        min-width: 120px;
    }

    .pharmacy-detail-card .detail-value { color: var(--dark-color); }

    .pharmacy-detail-card .map-container {
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid var(--gray-200);
        height: 300px;
        background: #f8fafc;
    }

    .btn-back {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1.2rem;
        border-radius: 50px;
        border: 2px solid var(--gray-200);
        color: var(--gray-500);
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        background: white;
        cursor: pointer;
    }

    .btn-back:hover {
        border-color: var(--primary-color);
        color: var(--primary-color);
        transform: translateX(-4px);
        text-decoration: none;
    }

    @media (max-width: 768px) {
        .pharmacy-detail-card { padding: 1rem; }
        .pharmacy-detail-card .detail-row { flex-direction: column; gap: 0.2rem; }
        .pharmacy-detail-card .detail-label { min-width: auto; }
        .pharmacy-detail-card .map-container { height: 200px; }
    }
</style>

<div class=\"pharmacy-detail-card\">
    <div class=\"d-flex align-items-center gap-3 mb-4\">
        <div class=\"pharmacy-icon\">
            <i class=\"fas fa-shield-alt\" style=\"color: var(--success-color);\"></i>
        </div>
        <div>
            <div class=\"pharmacy-name\">";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 92, $this->source); })()), "companyName", [], "any", false, false, false, 92), "html", null, true);
        yield "</div>
            <span class=\"guard-badge active\" style=\"background: #dcfce7; color: #16a34a; animation: pulse-guard 2s infinite;\">
                <i class=\"fas fa-clock\"></i> En garde maintenant
            </span>
        </div>
    </div>

    <div class=\"row g-4\">
        <div class=\"col-md-6\">
            <div class=\"detail-row\">
                <span class=\"detail-label\"><i class=\"fas fa-map-marker-alt me-2\"></i>Adresse</span>
                <span class=\"detail-value\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 103, $this->source); })()), "address", [], "any", false, false, false, 103), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 103, $this->source); })()), "city", [], "any", false, false, false, 103), "html", null, true);
        yield "</span>
            </div>
            <div class=\"detail-row\">
                <span class=\"detail-label\"><i class=\"fas fa-phone me-2\"></i>Téléphone</span>
                <span class=\"detail-value\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 107, $this->source); })()), "phone", [], "any", false, false, false, 107), "html", null, true);
        yield "</span>
            </div>
            <div class=\"detail-row\">
                <span class=\"detail-label\"><i class=\"fas fa-globe me-2\"></i>Pays</span>
                <span class=\"detail-value\">";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 111, $this->source); })()), "country", [], "any", false, false, false, 111), "html", null, true);
        yield "</span>
            </div>
            <div class=\"detail-row\">
                <span class=\"detail-label\"><i class=\"fas fa-envelope me-2\"></i>Email</span>
                <span class=\"detail-value\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 115, $this->source); })()), "email", [], "any", false, false, false, 115), "html", null, true);
        yield "</span>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"map-container\" id=\"pharmacyMap\">
                <div class=\"text-center py-5\">
                    <i class=\"fas fa-map-marked-alt fa-3x text-muted mb-3\"></i>
                    <p>Chargement de la carte...</p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"mt-4\">
        <a href=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>         // line 131
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 131, $this->source); })()), "city" =>         // line 132
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 132, $this->source); })()), "search_pharmacy" => ((        // line 133
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 133, $this->source); })()), "")) : (""))]), "html", null, true);
        // line 134
        yield "\" class=\"btn-back\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketplace/pharmacy/_pharmacy_detail.html.twig";
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
        return array (  199 => 134,  197 => 133,  196 => 132,  195 => 131,  194 => 129,  177 => 115,  170 => 111,  163 => 107,  154 => 103,  140 => 92,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/marketplace/pharmacy/_pharmacy_detail.html.twig #}

<style>
    .pharmacy-detail-card {
        background: white;
        border-radius: 16px;
        padding: 2rem;
        border: 1px solid var(--gray-200);
        box-shadow: 0 2px 10px rgba(0,0,0,0.04);
    }

    .pharmacy-detail-card .pharmacy-icon {
        width: 64px;
        height: 64px;
        border-radius: 14px;
        background: var(--primary-light);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        color: var(--primary-color);
        flex-shrink: 0;
    }

    .pharmacy-detail-card .pharmacy-name {
        font-weight: 700;
        font-size: 1.4rem;
        color: var(--dark-color);
    }

    .pharmacy-detail-card .detail-row {
        display: flex;
        gap: 1rem;
        padding: 0.5rem 0;
        border-bottom: 1px solid var(--gray-100);
    }

    .pharmacy-detail-card .detail-row:last-child { border-bottom: none; }

    .pharmacy-detail-card .detail-label {
        font-weight: 600;
        color: var(--gray-500);
        min-width: 120px;
    }

    .pharmacy-detail-card .detail-value { color: var(--dark-color); }

    .pharmacy-detail-card .map-container {
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid var(--gray-200);
        height: 300px;
        background: #f8fafc;
    }

    .btn-back {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1.2rem;
        border-radius: 50px;
        border: 2px solid var(--gray-200);
        color: var(--gray-500);
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        background: white;
        cursor: pointer;
    }

    .btn-back:hover {
        border-color: var(--primary-color);
        color: var(--primary-color);
        transform: translateX(-4px);
        text-decoration: none;
    }

    @media (max-width: 768px) {
        .pharmacy-detail-card { padding: 1rem; }
        .pharmacy-detail-card .detail-row { flex-direction: column; gap: 0.2rem; }
        .pharmacy-detail-card .detail-label { min-width: auto; }
        .pharmacy-detail-card .map-container { height: 200px; }
    }
</style>

<div class=\"pharmacy-detail-card\">
    <div class=\"d-flex align-items-center gap-3 mb-4\">
        <div class=\"pharmacy-icon\">
            <i class=\"fas fa-shield-alt\" style=\"color: var(--success-color);\"></i>
        </div>
        <div>
            <div class=\"pharmacy-name\">{{ selectedPharmacyData.companyName }}</div>
            <span class=\"guard-badge active\" style=\"background: #dcfce7; color: #16a34a; animation: pulse-guard 2s infinite;\">
                <i class=\"fas fa-clock\"></i> En garde maintenant
            </span>
        </div>
    </div>

    <div class=\"row g-4\">
        <div class=\"col-md-6\">
            <div class=\"detail-row\">
                <span class=\"detail-label\"><i class=\"fas fa-map-marker-alt me-2\"></i>Adresse</span>
                <span class=\"detail-value\">{{ selectedPharmacyData.address }}, {{ selectedPharmacyData.city }}</span>
            </div>
            <div class=\"detail-row\">
                <span class=\"detail-label\"><i class=\"fas fa-phone me-2\"></i>Téléphone</span>
                <span class=\"detail-value\">{{ selectedPharmacyData.phone }}</span>
            </div>
            <div class=\"detail-row\">
                <span class=\"detail-label\"><i class=\"fas fa-globe me-2\"></i>Pays</span>
                <span class=\"detail-value\">{{ selectedPharmacyData.country }}</span>
            </div>
            <div class=\"detail-row\">
                <span class=\"detail-label\"><i class=\"fas fa-envelope me-2\"></i>Email</span>
                <span class=\"detail-value\">{{ selectedPharmacyData.email }}</span>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"map-container\" id=\"pharmacyMap\">
                <div class=\"text-center py-5\">
                    <i class=\"fas fa-map-marked-alt fa-3x text-muted mb-3\"></i>
                    <p>Chargement de la carte...</p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"mt-4\">
        <a href=\"{{ path('marketplace_pharmacy_search', {
            mode: 'pharmacy', 
            country: selectedCountry, 
            city: selectedCity,
            search_pharmacy: searchPharmacy|default('')
        }) }}\" class=\"btn-back\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
    </div>
</div>", "marketplace/pharmacy/_pharmacy_detail.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\pharmacy\\_pharmacy_detail.html.twig");
    }
}
