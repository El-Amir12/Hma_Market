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

/* marketplace/pharmacy/search.html.twig */
class __TwigTemplate_fa53c4010e5fac6141701c2a2946b4ce extends Template
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
        $this->parent = $this->load("base_marketplace.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Pharmacies - HMA Market";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" />
<style>
    :root {
        --primary-color: #0463f1;
        --primary-light: #e8f0fe;
        --dark-color: #1e293b;
        --gray-500: #64748b;
        --gray-300: #cbd5e1;
        --gray-200: #e5e7eb;
        --gray-100: #f1f5f9;
    }

    body {
        background: #f8fafc;
    }

    .page-header {
        background: linear-gradient(135deg, #0463f1 0%, #667eea 100%);
        border-radius: 20px;
        padding: 2rem 3rem;
        margin-bottom: 2rem;
        color: white;
        box-shadow: 0 4px 20px rgba(4, 99, 241, 0.3);
    }

    .page-header h1 {
        font-weight: 800;
        font-size: 2rem;
    }

    .page-header p {
        opacity: 0.9;
        margin-bottom: 0;
    }

    .search-card {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 2px 10px rgba(0,0,0,0.06);
        border: 1px solid #e5e7eb;
    }

    .mode-tabs {
        display: flex;
        gap: 1rem;
        margin-bottom: 1.5rem;
    }

    .mode-tab {
        padding: 0.7rem 2rem;
        border-radius: 50px;
        border: 2px solid #e5e7eb;
        background: white;
        color: #64748b;
        font-weight: 600;
        transition: all 0.3s ease;
        cursor: pointer;
        text-decoration: none;
        flex: 1;
        text-align: center;
    }

    .mode-tab.active {
        background: var(--primary-color);
        color: white;
        border-color: var(--primary-color);
        box-shadow: 0 4px 15px rgba(4, 99, 241, 0.3);
    }

    .mode-tab:hover:not(.active) {
        border-color: var(--primary-color);
        color: var(--primary-color);
        transform: translateY(-2px);
    }

    .mode-tab i {
        margin-right: 0.5rem;
    }

    /* ============================================================ */
    /* STYLES SELECT2 - Version complète et fiable                   */
    /* ============================================================ */
    
    /* Conteneur principal */
    .select2-container {
        display: block !important;
        width: 100% !important;
        z-index: 1050 !important;
    }

    /* Sélection unique */
    .select2-container--default .select2-selection--single {
        display: block !important;
        height: 48px !important;
        padding: 0 !important;
        border: 2px solid #e5e7eb !important;
        border-radius: 12px !important;
        background-color: white !important;
        background-clip: padding-box !important;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out !important;
    }

    .select2-container--default .select2-selection--single:hover {
        border-color: var(--primary-color) !important;
    }

    .select2-container--default.select2-container--open .select2-selection--single {
        border-color: var(--primary-color) !important;
        box-shadow: 0 0 0 3px rgba(4, 99, 241, 0.08) !important;
    }

    /* Texte rendu */
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        display: block !important;
        line-height: 44px !important;
        padding-left: 1rem !important;
        padding-right: 2.5rem !important;
        color: #1e293b !important;
        font-size: 1rem !important;
        overflow: hidden !important;
        text-overflow: ellipsis !important;
        white-space: nowrap !important;
    }

    /* Placeholder */
    .select2-container--default .select2-selection--single .select2-selection__placeholder {
        color: #94a3b8 !important;
    }

    /* Flèche */
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        display: block !important;
        height: 44px !important;
        width: 2.5rem !important;
        position: absolute !important;
        right: 0 !important;
        top: 0 !important;
        bottom: 0 !important;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow b {
        border-color: #64748b transparent transparent transparent !important;
        border-style: solid !important;
        border-width: 5px 4px 0 4px !important;
        height: 0 !important;
        left: 50% !important;
        margin-left: -4px !important;
        margin-top: -2px !important;
        position: absolute !important;
        top: 50% !important;
        width: 0 !important;
    }

    .select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
        border-color: transparent transparent #64748b transparent !important;
        border-width: 0 4px 5px 4px !important;
    }

    /* Dropdown */
    .select2-dropdown {
        display: block !important;
        border: 2px solid #e5e7eb !important;
        border-radius: 12px !important;
        background-color: white !important;
        overflow: hidden !important;
        z-index: 1060 !important;
        margin-top: 4px !important;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1) !important;
    }

    /* Options */
    .select2-results__option {
        display: block !important;
        padding: 0.6rem 1rem !important;
        color: #1e293b !important;
        font-size: 0.95rem !important;
        transition: background-color 0.15s ease !important;
    }

    .select2-results__option--highlighted {
        background-color: var(--primary-color) !important;
        color: white !important;
    }

    .select2-results__option[aria-selected=\"true\"] {
        background-color: var(--primary-light) !important;
        color: var(--primary-color) !important;
    }

    .select2-results__option .text-muted {
        color: #94a3b8 !important;
        font-size: 0.8rem !important;
    }

    .select2-results__option--highlighted .text-muted {
        color: rgba(255,255,255,0.8) !important;
    }

    /* Recherche dans la dropdown */
    .select2-search--dropdown {
        padding: 0.5rem !important;
    }

    .select2-search--dropdown .select2-search__field {
        border: 2px solid #e5e7eb !important;
        border-radius: 8px !important;
        padding: 0.5rem 1rem !important;
        font-size: 0.95rem !important;
        height: 40px !important;
    }

    .select2-search--dropdown .select2-search__field:focus {
        border-color: var(--primary-color) !important;
        box-shadow: 0 0 0 3px rgba(4, 99, 241, 0.08) !important;
        outline: none !important;
    }

    /* États désactivés */
    .select2-container--default .select2-selection--single[aria-disabled=\"true\"] {
        background-color: #f1f5f9 !important;
        opacity: 0.6 !important;
        cursor: not-allowed !important;
    }

    /* Effacement */
    .select2-container--default .select2-selection--single .select2-selection__clear {
        display: none !important;
    }

    /* Forcer l'affichage des selects originaux */
    select.form-select {
        display: block !important;
        width: 100% !important;
        visibility: visible !important;
        opacity: 1 !important;
    }

    /* Styles spécifiques pour les conteneurs de filtres */
    .filter-item .select2-container--default .select2-selection--single {
        height: 48px !important;
        border-radius: 12px !important;
        border: 2px solid var(--gray-200) !important;
    }

    .filter-item .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: 44px !important;
    }

    .filter-item .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 44px !important;
    }

    /* Styles pour les produits */
    .product-select-container .select2-container--default .select2-selection--single {
        height: 52px !important;
        border-radius: 12px !important;
        border: 2px solid var(--gray-200) !important;
    }

    .product-select-container .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: 48px !important;
        font-size: 1rem !important;
    }

    .product-select-container .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 48px !important;
    }

    /* Options des produits dans Select2 */
    .product-info {
        display: flex !important;
        justify-content: space-between !important;
        align-items: center !important;
        width: 100% !important;
        padding: 2px 0 !important;
    }

    .product-info .product-name {
        font-weight: 500 !important;
    }

    .product-info .product-price {
        color: var(--primary-color) !important;
        font-weight: 600 !important;
        font-size: 0.9rem !important;
    }

    .product-info .product-stock {
        font-size: 0.7rem !important;
        padding: 0.1rem 0.5rem !important;
        border-radius: 50px !important;
        margin-left: 0.5rem !important;
    }

    .product-info .product-stock.in-stock {
        background: #dcfce7 !important;
        color: #16a34a !important;
    }

    .product-info .product-stock.out-of-stock {
        background: #fee2e2 !important;
        color: #dc2626 !important;
    }

    .product-info .product-meta {
        font-size: 0.75rem !important;
        color: var(--gray-500) !important;
        margin-left: 0.5rem !important;
    }

    .product-info .prescription-badge {
        font-size: 0.65rem !important;
        padding: 0.1rem 0.5rem !important;
        border-radius: 50px !important;
        background: #fef3c7 !important;
        color: #92400e !important;
        margin-left: 0.5rem !important;
    }

    /* Autres styles */
    .filter-actions {
        display: flex;
        gap: 0.75rem;
        align-items: flex-end;
        margin-top: 0.5rem;
    }

    .filter-actions .btn {
        border-radius: 12px;
        padding: 0.6rem 1.5rem;
        font-weight: 600;
        height: 48px;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .filter-actions .btn-primary {
        background: var(--primary-color);
        border: 2px solid var(--primary-color);
        color: white;
    }

    .filter-actions .btn-primary:hover {
        background: #0355d4;
        border-color: #0355d4;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(4, 99, 241, 0.3);
    }

    .filter-actions .btn-outline-secondary {
        background: white;
        border: 2px solid var(--gray-200);
        color: var(--gray-500);
    }

    .filter-actions .btn-outline-secondary:hover {
        border-color: var(--primary-color);
        color: var(--primary-color);
        transform: translateY(-2px);
    }

    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        background: white;
        border-radius: 20px;
        border: 2px dashed #e5e7eb;
    }

    .empty-state i {
        font-size: 4rem;
        color: #cbd5e1;
        margin-bottom: 1rem;
    }

    .empty-state h4 {
        color: var(--dark-color);
        font-weight: 700;
    }

    .empty-state .text-muted {
        color: var(--gray-500);
    }

    .pharmacy-selected-info {
        background: var(--primary-light);
        border-radius: 12px;
        padding: 1rem 1.5rem;
        border-left: 4px solid var(--primary-color);
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 1rem;
        margin-bottom: 1.5rem;
    }

    .pharmacy-selected-info .pharmacy-name {
        font-weight: 600;
        color: var(--dark-color);
    }

    .pharmacy-selected-info .pharmacy-name i {
        color: var(--primary-color);
    }

    .guard-badge {
        background: #dcfce7;
        color: #16a34a;
        padding: 0.2rem 0.8rem;
        border-radius: 50px;
        font-size: 0.7rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .page-header { padding: 1.5rem; }
        .page-header h1 { font-size: 1.5rem; }
        .mode-tab { padding: 0.5rem 1rem; font-size: 0.85rem; }
        .search-card { padding: 1rem; }
        .mode-tabs { flex-direction: column; }
        .filter-actions { flex-direction: column; width: 100%; }
        .filter-actions .btn { width: 100%; justify-content: center; }
        
        .select2-container--default .select2-selection--single {
            height: 48px !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 44px !important;
            font-size: 0.95rem !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 44px !important;
        }
    }
</style>
";
        yield from [];
    }

    // line 454
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 455
        yield "<div class=\"page-header\">
    <div class=\"row align-items-center\">
        <div class=\"col-md-8\">
            <h1><i class=\"fas fa-hospital me-3\"></i>Pharmacies</h1>
            <p>Trouvez une pharmacie de garde ou recherchez un produit.</p>
        </div>
        <div class=\"col-md-4 text-end d-none d-md-block\">
            <i class=\"fas fa-search-location\" style=\"font-size: 3.5rem; opacity: 0.3;\"></i>
        </div>
    </div>
</div>

<div class=\"mode-tabs\">
    <a href=\"";
        // line 468
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy"]);
        yield "\" 
       class=\"mode-tab ";
        // line 469
        yield (((($context["mode"] ?? null) == "pharmacy")) ? ("active") : (""));
        yield "\" 
       data-mode=\"pharmacy\">
        <i class=\"fas fa-clock\"></i> Pharmacies de garde
    </a>
    <a href=\"";
        // line 473
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product"]);
        yield "\" 
       class=\"mode-tab ";
        // line 474
        yield (((($context["mode"] ?? null) == "product")) ? ("active") : (""));
        yield "\" 
       data-mode=\"product\">
        <i class=\"fas fa-box\"></i> Rechercher un produit
    </a>
</div>

";
        // line 481
        yield Twig\Extension\CoreExtension::include($this->env, $context, "marketplace/pharmacy/_filters.html.twig", ["mode" =>         // line 482
($context["mode"] ?? null), "selectedCountry" =>         // line 483
($context["selectedCountry"] ?? null), "selectedCity" =>         // line 484
($context["selectedCity"] ?? null), "selectedPharmacy" =>         // line 485
($context["selectedPharmacy"] ?? null), "pharmacies" =>         // line 486
($context["pharmacies"] ?? null), "searchPharmacy" => ((        // line 487
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))]);
        // line 488
        yield "

";
        // line 491
        yield "<div id=\"resultsContainer\" class=\"mt-4\">
    ";
        // line 492
        if ((($context["mode"] ?? null) == "pharmacy")) {
            // line 493
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "marketplace/pharmacy/_pharmacy_mode.html.twig", ["selectedPharmacyData" =>             // line 494
($context["selectedPharmacyData"] ?? null), "selectedCountry" =>             // line 495
($context["selectedCountry"] ?? null), "selectedCity" =>             // line 496
($context["selectedCity"] ?? null), "pharmacies" =>             // line 497
($context["pharmacies"] ?? null), "searchPharmacy" => ((            // line 498
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : ("")), "currentPage" =>             // line 499
($context["currentPage"] ?? null), "totalPages" =>             // line 500
($context["totalPages"] ?? null), "totalPharmacies" =>             // line 501
($context["totalPharmacies"] ?? null)]);
            // line 502
            yield "
    ";
        } else {
            // line 504
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "marketplace/pharmacy/_product_mode.html.twig", ["selectedPharmacyData" =>             // line 505
($context["selectedPharmacyData"] ?? null), "selectedCountry" =>             // line 506
($context["selectedCountry"] ?? null), "selectedCity" =>             // line 507
($context["selectedCity"] ?? null), "selectedPharmacy" =>             // line 508
($context["selectedPharmacy"] ?? null), "categories" =>             // line 509
($context["categories"] ?? null), "products" =>             // line 510
($context["products"] ?? null), "forms" =>             // line 511
($context["forms"] ?? null), "selectedCategory" =>             // line 512
($context["selectedCategory"] ?? null), "selectedForm" =>             // line 513
($context["selectedForm"] ?? null), "selectedDosage" =>             // line 514
($context["selectedDosage"] ?? null), "prescriptionRequired" =>             // line 515
($context["prescriptionRequired"] ?? null), "filterApplied" =>             // line 516
($context["filterApplied"] ?? null)]);
            // line 517
            yield "
    ";
        }
        // line 519
        yield "</div>
";
        yield from [];
    }

    // line 522
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 523
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

<script>
\$(document).ready(function() {
    let currentMode = '";
        // line 531
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mode"] ?? null), "html", null, true);
        yield "';
    let selectedCountry = '";
        // line 532
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedCountry"] ?? null), "html", null, true);
        yield "';
    let selectedCity = '";
        // line 533
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedCity"] ?? null), "html", null, true);
        yield "';
    let selectedPharmacy = '";
        // line 534
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedPharmacy"] ?? null), "html", null, true);
        yield "';

    console.log('=== VÉRIFICATION DES LIBRAIRIES ===');
    console.log('✅ jQuery chargé:', typeof jQuery !== 'undefined');
    console.log('✅ Select2 disponible:', typeof jQuery.fn.select2 !== 'undefined');
    console.log('✅ Bootstrap disponible:', typeof bootstrap !== 'undefined');

    console.log('=== INITIALISATION ===');
    console.log('Mode:', currentMode);
    console.log('Pays:', selectedCountry);
    console.log('Ville:', selectedCity);
    console.log('Pharmacie:', selectedPharmacy);

    // ============================================================ //
    // 1. INITIALISATION DE SELECT2 POUR TOUS LES SELECTS           //
    // ============================================================ //
    function initSelect2(selector, options) {
        const \$select = \$(selector);
        if (!\$select.length) {
            console.warn('⚠️ Selecteur non trouvé:', selector);
            return;
        }
        
        // Détruire l'instance existante
        if (\$select.data('select2')) {
            \$select.select2('destroy');
            console.log('🔄 Select2 détruit pour:', selector);
        }
        
        // Options par défaut
        const defaultOptions = {
            theme: 'default',
            width: '100%',
            placeholder: '-- Sélectionnez --',
            allowClear: true,
            language: 'fr'
        };
        
        // Fusionner les options
        const finalOptions = \$.extend({}, defaultOptions, options || {});
        
        // Initialiser Select2
        \$select.select2(finalOptions);
        
        // Forcer l'affichage du conteneur
        setTimeout(function() {
            const container = \$select.next('.select2-container');
            if (container.length) {
                container.css({
                    'display': 'block',
                    'width': '100%'
                });
            }
        }, 50);
        
        console.log('✅ Select2 initialisé pour:', selector);
        return \$select;
    }

    // ============================================================ //
    // 2. CHARGER LES PAYS                                          //
    // ============================================================ //
    function loadCountries() {
        \$.ajax({
            url: '/marketplace/pharmacies/api/countries',
            method: 'GET',
            success: function(data) {
                const select = \$('#countrySelect');
                select.empty().append('<option value=\"\">-- Sélectionnez un pays --</option>');
                data.forEach(function(country) {
                    const selected = selectedCountry === country.code ? 'selected' : '';
                    select.append(`<option value=\"\${country.code}\" \${selected}>\${country.name}</option>`);
                });
                
                // Réinitialiser Select2
                initSelect2('#countrySelect');
                
                // Si un pays est sélectionné, charger les villes
                if (selectedCountry) {
                    select.val(selectedCountry).trigger('change');
                }
                
                console.log('✅ Pays chargés:', data.length);
            },
            error: function() {
                console.error('❌ Erreur lors du chargement des pays');
            }
        });
    }

    // ============================================================ //
    // 3. CHARGER LES VILLES                                        //
    // ============================================================ //
    function loadCities(country) {
        const select = \$('#citySelect');
        select.prop('disabled', true).empty().append('<option value=\"\">Chargement...</option>');

        \$.ajax({
            url: `/marketplace/pharmacies/api/cities?country=\${country}`,
            method: 'GET',
            success: function(data) {
                select.empty().append('<option value=\"\">-- Sélectionnez une ville --</option>');
                if (Array.isArray(data) && data.length > 0) {
                    data.forEach(function(city) {
                        const selected = selectedCity === city ? 'selected' : '';
                        select.append(`<option value=\"\${city}\" \${selected}>\${city}</option>`);
                    });
                    select.prop('disabled', false);
                    console.log('✅ Villes chargées:', data.length);
                } else {
                    select.append('<option value=\"\">Aucune ville trouvée</option>');
                }
                
                // Réinitialiser Select2
                initSelect2('#citySelect');
                
                // Si une ville est sélectionnée et on est en mode product, charger les pharmacies
                if (selectedCity && currentMode === 'product') {
                    select.val(selectedCity).trigger('change');
                }
            },
            error: function() {
                select.empty().append('<option value=\"\">Erreur de chargement</option>');
                initSelect2('#citySelect');
            }
        });
    }

    // ============================================================ //
    // 4. CHARGER LES PHARMACIES                                    //
    // ============================================================ //
    function loadPharmacies(city) {
        const select = \$('#pharmacySelect');
        const pharmacySelector = \$('#pharmacySelector');
        
        if (currentMode === 'product' && city) {
            pharmacySelector.addClass('visible').show();
            select.prop('disabled', true).empty().append('<option value=\"\">Chargement...</option>');

            \$.ajax({
                url: `/marketplace/pharmacies/api/pharmacies?city=\${city}`,
                method: 'GET',
                success: function(data) {
                    select.empty().append('<option value=\"\">-- Sélectionnez une pharmacie --</option>');
                    if (Array.isArray(data) && data.length > 0) {
                        data.forEach(function(pharmacy) {
                            const selected = selectedPharmacy == pharmacy.id ? 'selected' : '';
                            select.append(`<option value=\"\${pharmacy.id}\" \${selected}>\${pharmacy.name}</option>`);
                        });
                        select.prop('disabled', false);
                        console.log('✅ Pharmacies chargées:', data.length);
                    } else {
                        select.append('<option value=\"\">Aucune pharmacie trouvée</option>');
                    }
                    
                    // Réinitialiser Select2
                    initSelect2('#pharmacySelect');
                },
                error: function() {
                    select.empty().append('<option value=\"\">Erreur de chargement</option>');
                    initSelect2('#pharmacySelect');
                }
            });
        } else {
            pharmacySelector.removeClass('visible').hide();
        }
    }

    // ============================================================ //
    // 5. APPLIQUER LES FILTRES                                     //
    // ============================================================ //
    function applyFilters() {
        const country = \$('#countrySelect').val();
        const city = \$('#citySelect').val();
        const pharmacy = \$('#pharmacySelect').val();
        
        let params = {
            mode: currentMode,
            country: country || '',
            city: city || '',
            pharmacy: pharmacy || ''
        };
        
        const searchPharmacy = \$('#searchPharmacyInput').val();
        if (searchPharmacy) {
            params.search_pharmacy = searchPharmacy;
        }
        
        redirectTo(params);
    }

    // ============================================================ //
    // 6. EFFACER LES FILTRES                                       //
    // ============================================================ //
    function clearFilters() {
        \$('#countrySelect').val('').trigger('change');
        \$('#citySelect').val('').prop('disabled', true).trigger('change');
        \$('#pharmacySelect').val('').prop('disabled', true).trigger('change');
        \$('#searchPharmacyInput').val('');
        \$('#pharmacySelector').removeClass('visible').hide();
        
        // Réinitialiser les Select2
        initSelect2('#countrySelect');
        initSelect2('#citySelect');
        initSelect2('#pharmacySelect');
        
        redirectTo({
            mode: currentMode,
            country: '',
            city: '',
            pharmacy: ''
        });
    }

    // ============================================================ //
    // 7. REDIRECTION                                               //
    // ============================================================ //
    function redirectTo(params) {
        const url = new URL(window.location.href);
        Object.keys(params).forEach(key => {
            if (params[key] && params[key] !== '') {
                url.searchParams.set(key, params[key]);
            } else {
                url.searchParams.delete(key);
            }
        });
        window.location.href = url.toString();
    }

    // ============================================================ //
    // 8. ÉVÉNEMENTS                                                //
    // ============================================================ //
    \$('#countrySelect').on('change', function() {
        const country = this.value;
        if (country) {
            loadCities(country);
        } else {
            \$('#citySelect').empty().append('<option value=\"\">-- Sélectionnez une ville --</option>').prop('disabled', true);
            \$('#pharmacySelect').empty().append('<option value=\"\">-- Sélectionnez une pharmacie --</option>').prop('disabled', true);
            \$('#pharmacySelector').removeClass('visible').hide();
            initSelect2('#citySelect');
            initSelect2('#pharmacySelect');
        }
    });

    \$('#citySelect').on('change', function() {
        const city = this.value;
        if (city && currentMode === 'product') {
            loadPharmacies(city);
        } else {
            \$('#pharmacySelect').empty().append('<option value=\"\">-- Sélectionnez une pharmacie --</option>').prop('disabled', true);
            \$('#pharmacySelector').removeClass('visible').hide();
            initSelect2('#pharmacySelect');
        }
    });

    \$('#applyFiltersBtn').on('click', function(e) {
        e.preventDefault();
        applyFilters();
    });

    \$('#clearFiltersBtn').on('click', function(e) {
        e.preventDefault();
        clearFilters();
    });

    \$('#searchPharmacyInput').on('keypress', function(e) {
        if (e.which === 13) {
            e.preventDefault();
            applyFilters();
        }
    });

    // ============================================================ //
    // 9. INITIALISATION                                            //
    // ============================================================ //
    
    // Initialiser les Select2
    initSelect2('#countrySelect');
    initSelect2('#citySelect');
    initSelect2('#pharmacySelect');
    
    // Charger les pays
    loadCountries();

    // Si en mode product et une ville est sélectionnée, charger les pharmacies
    if (currentMode === 'product' && selectedCity) {
        \$('#pharmacySelector').addClass('visible').show();
        if (!selectedPharmacy) {
            loadPharmacies(selectedCity);
        } else {
            // Si une pharmacie est déjà sélectionnée
            setTimeout(function() {
                initSelect2('#pharmacySelect');
            }, 500);
        }
    } else {
        \$('#pharmacySelector').removeClass('visible').hide();
    }
});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketplace/pharmacy/search.html.twig";
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
        return array (  656 => 534,  652 => 533,  648 => 532,  644 => 531,  633 => 523,  626 => 522,  620 => 519,  616 => 517,  614 => 516,  613 => 515,  612 => 514,  611 => 513,  610 => 512,  609 => 511,  608 => 510,  607 => 509,  606 => 508,  605 => 507,  604 => 506,  603 => 505,  601 => 504,  597 => 502,  595 => 501,  594 => 500,  593 => 499,  592 => 498,  591 => 497,  590 => 496,  589 => 495,  588 => 494,  586 => 493,  584 => 492,  581 => 491,  577 => 488,  575 => 487,  574 => 486,  573 => 485,  572 => 484,  571 => 483,  570 => 482,  569 => 481,  560 => 474,  556 => 473,  549 => 469,  545 => 468,  530 => 455,  523 => 454,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketplace/pharmacy/search.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\pharmacy\\search.html.twig");
    }
}
