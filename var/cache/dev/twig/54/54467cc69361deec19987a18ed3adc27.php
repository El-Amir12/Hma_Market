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
class __TwigTemplate_63eff18ebd59a82976957d88856d7fb4 extends Template
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

    .pharmacy-detail-card .detail-row:last-child {
        border-bottom: none;
    }

    .pharmacy-detail-card .detail-label {
        font-weight: 600;
        color: var(--gray-500);
        min-width: 120px;
    }

    .pharmacy-detail-card .detail-value {
        color: var(--dark-color);
    }

    .pharmacy-detail-card .map-container {
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid var(--gray-200);
        height: 300px;
        background: #f8fafc;
    }

    .pharmacy-detail-card .map-container .leaflet-container {
        height: 100%;
        width: 100%;
    }

    .pharmacy-detail-card .map-placeholder {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        min-height: 300px;
        background: #f8fafc;
        border-radius: 12px;
        flex-direction: column;
        padding: 1rem;
        text-align: center;
    }

    .pharmacy-detail-card .map-placeholder i {
        font-size: 3rem;
        color: #cbd5e1;
        margin-bottom: 1rem;
    }

    .pharmacy-detail-card .map-placeholder p {
        color: var(--gray-500);
        margin-bottom: 0.25rem;
    }

    .pharmacy-detail-card .map-placeholder small {
        color: var(--gray-400);
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
        .pharmacy-detail-card .map-placeholder { min-height: 200px; }
    }
</style>

<div class=\"pharmacy-detail-card\">
    <div class=\"d-flex align-items-center gap-3 mb-4\">
        <div class=\"pharmacy-icon\">
            <i class=\"fas fa-hospital\"></i>
        </div>
        <div>
            <div class=\"pharmacy-name\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 130, $this->source); })()), "companyName", [], "any", false, false, false, 130), "html", null, true);
        yield "</div>
            <span class=\"guard-badge\">
                <i class=\"fas fa-clock\"></i> Garde 24/7
            </span>
        </div>
    </div>

    <div class=\"row g-4\">
        <div class=\"col-md-6\">
            <div class=\"detail-row\">
                <span class=\"detail-label\">
                    <i class=\"fas fa-map-marker-alt me-2\"></i>Adresse
                </span>
                <span class=\"detail-value\">";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 143, $this->source); })()), "address", [], "any", false, false, false, 143), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 143, $this->source); })()), "city", [], "any", false, false, false, 143), "html", null, true);
        yield "</span>
            </div>
            <div class=\"detail-row\">
                <span class=\"detail-label\">
                    <i class=\"fas fa-phone me-2\"></i>Téléphone
                </span>
                <span class=\"detail-value\">";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 149, $this->source); })()), "phone", [], "any", false, false, false, 149), "html", null, true);
        yield "</span>
            </div>
            <div class=\"detail-row\">
                <span class=\"detail-label\">
                    <i class=\"fas fa-globe me-2\"></i>Pays
                </span>
                <span class=\"detail-value\">";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 155, $this->source); })()), "country", [], "any", false, false, false, 155), "html", null, true);
        yield "</span>
            </div>
            <div class=\"detail-row\">
                <span class=\"detail-label\">
                    <i class=\"fas fa-envelope me-2\"></i>Email
                </span>
                <span class=\"detail-value\">";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 161, $this->source); })()), "email", [], "any", false, false, false, 161), "html", null, true);
        yield "</span>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"map-container\" id=\"pharmacyMap\">
                <div class=\"map-placeholder\">
                    <i class=\"fas fa-map-marked-alt\"></i>
                    <p>Chargement de la carte...</p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"mt-4\">
        <a href=\"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>         // line 177
(isset($context["selectedCountry"]) || array_key_exists("selectedCountry", $context) ? $context["selectedCountry"] : (function () { throw new RuntimeError('Variable "selectedCountry" does not exist.', 177, $this->source); })()), "city" =>         // line 178
(isset($context["selectedCity"]) || array_key_exists("selectedCity", $context) ? $context["selectedCity"] : (function () { throw new RuntimeError('Variable "selectedCity" does not exist.', 178, $this->source); })()), "search_pharmacy" => ((        // line 179
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchPharmacy"]) || array_key_exists("searchPharmacy", $context) ? $context["searchPharmacy"] : (function () { throw new RuntimeError('Variable "searchPharmacy" does not exist.', 179, $this->source); })()), "")) : (""))]), "html", null, true);
        // line 180
        yield "\" class=\"btn-back\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mapContainer = document.getElementById('pharmacyMap');
    if (!mapContainer) return;
    
    // ✅ Récupérer les coordonnées depuis la base de données
    const lat = parseFloat('";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["selectedPharmacyData"] ?? null), "latitude", [], "any", true, true, false, 192)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 192, $this->source); })()), "latitude", [], "any", false, false, false, 192), "")) : ("")), "html", null, true);
        yield "');
    const lng = parseFloat('";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["selectedPharmacyData"] ?? null), "longitude", [], "any", true, true, false, 193)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 193, $this->source); })()), "longitude", [], "any", false, false, false, 193), "")) : ("")), "html", null, true);
        yield "');
    
    // ✅ Construire l'adresse complète
    const address = '";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["selectedPharmacyData"] ?? null), "address", [], "any", true, true, false, 196)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 196, $this->source); })()), "address", [], "any", false, false, false, 196), "")) : ("")), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["selectedPharmacyData"] ?? null), "city", [], "any", true, true, false, 196)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 196, $this->source); })()), "city", [], "any", false, false, false, 196), "")) : ("")), "html", null, true);
        yield "';
    const country = '";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["selectedPharmacyData"] ?? null), "country", [], "any", true, true, false, 197)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 197, $this->source); })()), "country", [], "any", false, false, false, 197), "")) : ("")), "html", null, true);
        yield "';
    const fullAddress = [address, country].filter(Boolean).join(', ');
    const companyName = '";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["selectedPharmacyData"] ?? null), "companyName", [], "any", true, true, false, 199)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPharmacyData"]) || array_key_exists("selectedPharmacyData", $context) ? $context["selectedPharmacyData"] : (function () { throw new RuntimeError('Variable "selectedPharmacyData" does not exist.', 199, $this->source); })()), "companyName", [], "any", false, false, false, 199), "Pharmacie")) : ("Pharmacie")), "html", null, true);
        yield "';
    
    // ✅ Vérifier que les coordonnées sont valides
    if (!isNaN(lat) && !isNaN(lng) && lat !== 0 && lng !== 0) {
        console.log('✅ Coordonnées trouvées:', lat, lng);
        
        // Vérifier que Leaflet est chargé
        if (typeof L === 'undefined') {
            console.error('❌ Leaflet non chargé');
            mapContainer.innerHTML = `
                <div class=\"map-placeholder\">
                    <i class=\"fas fa-exclamation-triangle\" style=\"color: #dc2626;\"></i>
                    <p>Erreur de chargement de la carte</p>
                    <small>Veuillez réessayer</small>
                </div>
            `;
            return;
        }
        
        try {
            const map = L.map('pharmacyMap').setView([lat, lng], 16);
            
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a>'
            }).addTo(map);
            
            // ✅ Marqueur avec adresse complète
            const popupContent = `
                <strong>\${companyName}</strong><br>
                \${fullAddress}
            `;
            
            L.marker([lat, lng])
                .addTo(map)
                .bindPopup(popupContent)
                .openPopup();
            
            // ✅ Redimensionner la carte après chargement
            setTimeout(() => {
                map.invalidateSize();
            }, 300);
            
            console.log('✅ Carte initialisée avec succès');
            
        } catch (error) {
            console.error('❌ Erreur lors de l\\'initialisation de la carte:', error);
            mapContainer.innerHTML = `
                <div class=\"map-placeholder\">
                    <i class=\"fas fa-exclamation-triangle\" style=\"color: #dc2626;\"></i>
                    <p>Erreur lors du chargement de la carte</p>
                    <small>\${error.message}</small>
                </div>
            `;
        }
        
    } else {
        // ✅ Si pas de coordonnées, afficher un message avec l'adresse
        console.log('ℹ️ Aucune coordonnée trouvée, affichage de l\\'adresse');
        mapContainer.innerHTML = `
            <div class=\"map-placeholder\">
                <i class=\"fas fa-map-marked-alt\"></i>
                <p><strong>\${companyName}</strong></p>
                <p>\${fullAddress || 'Adresse non disponible'}</p>
                <small class=\"text-muted\">
                    <i class=\"fas fa-info-circle me-1\"></i>
                    Coordonnées GPS non disponibles
                </small>
                <a href=\"https://www.openstreetmap.org/search?query=\${encodeURIComponent(fullAddress)}\" 
                   target=\"_blank\" 
                   class=\"btn btn-outline-primary btn-sm mt-3\"
                   style=\"border-radius: 50px;\">
                    <i class=\"fas fa-external-link-alt me-1\"></i>
                    Voir sur OpenStreetMap
                </a>
            </div>
        `;
    }
});
</script>";
        
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
        return array (  280 => 199,  275 => 197,  269 => 196,  263 => 193,  259 => 192,  245 => 180,  243 => 179,  242 => 178,  241 => 177,  240 => 175,  223 => 161,  214 => 155,  205 => 149,  194 => 143,  178 => 130,  48 => 2,);
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

    .pharmacy-detail-card .detail-row:last-child {
        border-bottom: none;
    }

    .pharmacy-detail-card .detail-label {
        font-weight: 600;
        color: var(--gray-500);
        min-width: 120px;
    }

    .pharmacy-detail-card .detail-value {
        color: var(--dark-color);
    }

    .pharmacy-detail-card .map-container {
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid var(--gray-200);
        height: 300px;
        background: #f8fafc;
    }

    .pharmacy-detail-card .map-container .leaflet-container {
        height: 100%;
        width: 100%;
    }

    .pharmacy-detail-card .map-placeholder {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        min-height: 300px;
        background: #f8fafc;
        border-radius: 12px;
        flex-direction: column;
        padding: 1rem;
        text-align: center;
    }

    .pharmacy-detail-card .map-placeholder i {
        font-size: 3rem;
        color: #cbd5e1;
        margin-bottom: 1rem;
    }

    .pharmacy-detail-card .map-placeholder p {
        color: var(--gray-500);
        margin-bottom: 0.25rem;
    }

    .pharmacy-detail-card .map-placeholder small {
        color: var(--gray-400);
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
        .pharmacy-detail-card .map-placeholder { min-height: 200px; }
    }
</style>

<div class=\"pharmacy-detail-card\">
    <div class=\"d-flex align-items-center gap-3 mb-4\">
        <div class=\"pharmacy-icon\">
            <i class=\"fas fa-hospital\"></i>
        </div>
        <div>
            <div class=\"pharmacy-name\">{{ selectedPharmacyData.companyName }}</div>
            <span class=\"guard-badge\">
                <i class=\"fas fa-clock\"></i> Garde 24/7
            </span>
        </div>
    </div>

    <div class=\"row g-4\">
        <div class=\"col-md-6\">
            <div class=\"detail-row\">
                <span class=\"detail-label\">
                    <i class=\"fas fa-map-marker-alt me-2\"></i>Adresse
                </span>
                <span class=\"detail-value\">{{ selectedPharmacyData.address }}, {{ selectedPharmacyData.city }}</span>
            </div>
            <div class=\"detail-row\">
                <span class=\"detail-label\">
                    <i class=\"fas fa-phone me-2\"></i>Téléphone
                </span>
                <span class=\"detail-value\">{{ selectedPharmacyData.phone }}</span>
            </div>
            <div class=\"detail-row\">
                <span class=\"detail-label\">
                    <i class=\"fas fa-globe me-2\"></i>Pays
                </span>
                <span class=\"detail-value\">{{ selectedPharmacyData.country }}</span>
            </div>
            <div class=\"detail-row\">
                <span class=\"detail-label\">
                    <i class=\"fas fa-envelope me-2\"></i>Email
                </span>
                <span class=\"detail-value\">{{ selectedPharmacyData.email }}</span>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"map-container\" id=\"pharmacyMap\">
                <div class=\"map-placeholder\">
                    <i class=\"fas fa-map-marked-alt\"></i>
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
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mapContainer = document.getElementById('pharmacyMap');
    if (!mapContainer) return;
    
    // ✅ Récupérer les coordonnées depuis la base de données
    const lat = parseFloat('{{ selectedPharmacyData.latitude|default('') }}');
    const lng = parseFloat('{{ selectedPharmacyData.longitude|default('') }}');
    
    // ✅ Construire l'adresse complète
    const address = '{{ selectedPharmacyData.address|default('') }}, {{ selectedPharmacyData.city|default('') }}';
    const country = '{{ selectedPharmacyData.country|default('') }}';
    const fullAddress = [address, country].filter(Boolean).join(', ');
    const companyName = '{{ selectedPharmacyData.companyName|default('Pharmacie') }}';
    
    // ✅ Vérifier que les coordonnées sont valides
    if (!isNaN(lat) && !isNaN(lng) && lat !== 0 && lng !== 0) {
        console.log('✅ Coordonnées trouvées:', lat, lng);
        
        // Vérifier que Leaflet est chargé
        if (typeof L === 'undefined') {
            console.error('❌ Leaflet non chargé');
            mapContainer.innerHTML = `
                <div class=\"map-placeholder\">
                    <i class=\"fas fa-exclamation-triangle\" style=\"color: #dc2626;\"></i>
                    <p>Erreur de chargement de la carte</p>
                    <small>Veuillez réessayer</small>
                </div>
            `;
            return;
        }
        
        try {
            const map = L.map('pharmacyMap').setView([lat, lng], 16);
            
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a>'
            }).addTo(map);
            
            // ✅ Marqueur avec adresse complète
            const popupContent = `
                <strong>\${companyName}</strong><br>
                \${fullAddress}
            `;
            
            L.marker([lat, lng])
                .addTo(map)
                .bindPopup(popupContent)
                .openPopup();
            
            // ✅ Redimensionner la carte après chargement
            setTimeout(() => {
                map.invalidateSize();
            }, 300);
            
            console.log('✅ Carte initialisée avec succès');
            
        } catch (error) {
            console.error('❌ Erreur lors de l\\'initialisation de la carte:', error);
            mapContainer.innerHTML = `
                <div class=\"map-placeholder\">
                    <i class=\"fas fa-exclamation-triangle\" style=\"color: #dc2626;\"></i>
                    <p>Erreur lors du chargement de la carte</p>
                    <small>\${error.message}</small>
                </div>
            `;
        }
        
    } else {
        // ✅ Si pas de coordonnées, afficher un message avec l'adresse
        console.log('ℹ️ Aucune coordonnée trouvée, affichage de l\\'adresse');
        mapContainer.innerHTML = `
            <div class=\"map-placeholder\">
                <i class=\"fas fa-map-marked-alt\"></i>
                <p><strong>\${companyName}</strong></p>
                <p>\${fullAddress || 'Adresse non disponible'}</p>
                <small class=\"text-muted\">
                    <i class=\"fas fa-info-circle me-1\"></i>
                    Coordonnées GPS non disponibles
                </small>
                <a href=\"https://www.openstreetmap.org/search?query=\${encodeURIComponent(fullAddress)}\" 
                   target=\"_blank\" 
                   class=\"btn btn-outline-primary btn-sm mt-3\"
                   style=\"border-radius: 50px;\">
                    <i class=\"fas fa-external-link-alt me-1\"></i>
                    Voir sur OpenStreetMap
                </a>
            </div>
        `;
    }
});
</script>", "marketplace/pharmacy/_pharmacy_detail.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\pharmacy\\_pharmacy_detail.html.twig");
    }
}
