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

/* company/settings/index.html.twig */
class __TwigTemplate_f9810e8ea74eece7c86dabf0b2d8a0d8 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Paramètres entreprise - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyName", [], "any", false, false, false, 5), "html", null, true);
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    :root {
        --primary-color: ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("primaryColor", $context)) ? (Twig\Extension\CoreExtension::default(($context["primaryColor"] ?? null), "#0463f1")) : ("#0463f1")), "html", null, true);
        yield ";
        --secondary-color: ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("secondaryColor", $context)) ? (Twig\Extension\CoreExtension::default(($context["secondaryColor"] ?? null), "#8b5cf6")) : ("#8b5cf6")), "html", null, true);
        yield ";
    }
    
    .settings-container {
        max-width: 1400px;
        margin: 0 auto;
    }
    
    .settings-hero {
        background: linear-gradient(135deg, var(--primary-color), color-mix(in srgb, var(--primary-color) 85%, black));
        border-radius: 24px;
        padding: 2rem 2.5rem;
        margin-bottom: 2rem;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 40px color-mix(in srgb, var(--primary-color) 30%, transparent);
    }
    
    .settings-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -30%;
        width: 80%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        animation: heroPulse 6s ease-in-out infinite;
    }
    
    @keyframes heroPulse {
        0%, 100% { transform: scale(1) rotate(0deg); opacity: 0.5; }
        50% { transform: scale(1.1) rotate(5deg); opacity: 0.8; }
    }
    
    .settings-hero h1 {
        color: white;
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        position: relative;
    }
    
    .settings-hero p {
        color: rgba(255,255,255,0.9);
        margin-bottom: 0;
        position: relative;
    }
    
    .info-badge {
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(10px);
        color: white;
        padding: 0.5rem 1.2rem;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 500;
        border: 1px solid rgba(255,255,255,0.2);
        position: relative;
    }
    
    .settings-tabs {
        display: flex;
        gap: 0.5rem;
        margin-bottom: 2rem;
        flex-wrap: wrap;
        background: white;
        border-radius: 16px;
        padding: 0.5rem;
        box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        border: 1px solid #f1f5f9;
    }
    
    .settings-tab {
        padding: 0.7rem 1.5rem;
        border: none;
        background: transparent;
        font-weight: 600;
        color: #64748b;
        border-radius: 12px;
        transition: all 0.3s ease;
        cursor: pointer;
        font-size: 0.9rem;
    }
    
    .settings-tab i {
        margin-right: 0.5rem;
    }
    
    .settings-tab:hover {
        background: #f1f5f9;
        color: var(--primary-color);
    }
    
    .settings-tab.active {
        background: var(--primary-color);
        color: white;
        box-shadow: 0 4px 12px color-mix(in srgb, var(--primary-color) 40%, transparent);
    }
    
    .settings-section {
        background: white;
        border-radius: 24px;
        padding: 1.5rem 2rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        border: 1px solid #f1f5f9;
        animation: fadeInUp 0.5s ease;
    }
    
    .settings-section:hover {
        box-shadow: 0 8px 30px rgba(0,0,0,0.08);
    }
    
    .section-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1.5rem;
        padding-bottom: 1rem;
        border-bottom: 2px solid #f1f5f9;
    }
    
    .section-icon {
        width: 48px;
        height: 48px;
        background: var(--primary-color);
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
        flex-shrink: 0;
        transition: transform 0.3s ease;
    }
    
    .section-icon:hover {
        transform: scale(1.05) rotate(-5deg);
    }
    
    .section-title h3 {
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 0.2rem;
        color: #1e293b;
    }
    
    .section-title p {
        color: #64748b;
        font-size: 0.85rem;
        margin-bottom: 0;
    }
    
    .logo-preview {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        background: #f8fafc;
        border-radius: 16px;
        padding: 1rem 1.5rem;
        margin-top: 1rem;
        border: 2px dashed #e5e7eb;
        transition: all 0.3s ease;
    }
    
    .logo-preview:hover {
        border-color: var(--primary-color);
        background: color-mix(in srgb, var(--primary-color) 5%, #f8fafc);
    }
    
    .logo-preview-img {
        width: 80px;
        height: 80px;
        border-radius: 16px;
        object-fit: cover;
        background: white;
        border: 2px solid #e5e7eb;
        transition: all 0.3s ease;
        flex-shrink: 0;
    }
    
    .logo-preview-img:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    .color-palette-group {
        background: #f8fafc;
        border-radius: 16px;
        padding: 1rem 1.5rem;
        border: 2px solid #e5e7eb;
        transition: all 0.3s ease;
    }
    
    .color-palette-group:hover {
        border-color: var(--primary-color);
    }
    
    .color-palette-label {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 0.75rem;
        font-weight: 600;
        color: #1e293b;
    }
    
    .color-palette-label i {
        font-size: 1.2rem;
    }
    
    .color-palette {
        display: flex;
        flex-wrap: wrap;
        gap: 0.75rem;
        align-items: center;
    }
    
    .color-swatch {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        border: 3px solid transparent;
        cursor: pointer;
        transition: all 0.2s ease;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        position: relative;
    }
    
    .color-swatch:hover {
        transform: scale(1.15);
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }
    
    .color-swatch.active {
        border-color: white;
        box-shadow: 0 0 0 2px var(--primary-color), 0 4px 12px rgba(0,0,0,0.25);
        transform: scale(1.1);
    }
    
    .color-swatch.active::after {
        content: '\\f00c';
        font-family: \"Font Awesome 6 Free\";
        font-weight: 900;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 14px;
        text-shadow: 0 1px 3px rgba(0,0,0,0.5);
    }
    
    .color-hex-display {
        font-family: 'Courier New', monospace;
        font-size: 0.85rem;
        font-weight: 600;
        color: #1e293b;
        background: white;
        padding: 0.3rem 0.8rem;
        border-radius: 8px;
        border: 1px solid #e5e7eb;
        min-width: 80px;
        text-align: center;
        margin-left: 0.5rem;
    }
    
    .color-picker-custom {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin-left: 0.5rem;
    }
    
    .color-picker-custom input[type=\"color\"] {
        width: 36px;
        height: 36px;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        padding: 0;
        background: none;
        border: 2px solid #e5e7eb;
        transition: all 0.2s;
    }
    
    .color-picker-custom input[type=\"color\"]:hover {
        transform: scale(1.1);
    }
    
    .color-picker-custom input[type=\"color\"]::-webkit-color-swatch-wrapper {
        padding: 2px;
    }
    
    .color-picker-custom input[type=\"color\"]::-webkit-color-swatch {
        border-radius: 50%;
        border: none;
    }
    
    .color-preview-demo {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
        align-items: center;
        margin-top: 1rem;
        padding: 1rem;
        background: #f8fafc;
        border-radius: 16px;
        border: 1px solid #e5e7eb;
    }
    
    .color-preview-demo .demo-btn {
        padding: 0.5rem 1.5rem;
        border-radius: 12px;
        border: none;
        font-weight: 600;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .color-preview-demo .demo-btn-primary {
        background: var(--primary-color);
        color: white;
    }
    
    .color-preview-demo .demo-btn-primary:hover {
        background: color-mix(in srgb, var(--primary-color) 85%, black);
        transform: translateY(-2px);
    }
    
    .color-preview-demo .demo-btn-secondary {
        background: var(--secondary-color);
        color: white;
    }
    
    .color-preview-demo .demo-btn-secondary:hover {
        filter: brightness(0.85);
        transform: translateY(-2px);
    }
    
    .color-preview-demo .demo-badge {
        padding: 0.3rem 0.8rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 600;
        color: white;
        background: var(--primary-color);
    }
    
    .ticket-preview {
        background: white;
        border-radius: 16px;
        padding: 1.2rem;
        max-width: 320px;
        margin-top: 1rem;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        border: 2px solid #e5e7eb;
        transition: all 0.3s ease;
    }
    
    .ticket-preview:hover {
        border-color: var(--primary-color);
        box-shadow: 0 8px 30px rgba(0,0,0,0.12);
    }
    
    .ticket-header {
        text-align: center;
        border-bottom: 2px dashed #e5e7eb;
        padding-bottom: 0.5rem;
        margin-bottom: 0.5rem;
        font-size: 0.85rem;
    }
    
    .ticket-header strong {
        color: var(--primary-color);
    }
    
    .ticket-items {
        font-size: 0.75rem;
        padding: 0.3rem 0;
    }
    
    .ticket-total {
        border-top: 2px dashed #e5e7eb;
        padding-top: 0.5rem;
        margin-top: 0.5rem;
        font-weight: 700;
        font-size: 0.9rem;
        display: flex;
        justify-content: space-between;
    }
    
    .ticket-footer {
        text-align: center;
        border-top: 2px dashed #e5e7eb;
        padding-top: 0.5rem;
        margin-top: 0.5rem;
        font-size: 0.7rem;
        color: #64748b;
    }
    
    .form-group {
        margin-bottom: 1.25rem;
    }
    
    .form-label {
        font-weight: 600;
        font-size: 0.875rem;
        margin-bottom: 0.4rem;
        color: #1e293b;
    }
    
    .form-label .required {
        color: #ef4444;
        margin-left: 0.25rem;
    }
    
    .form-control, .form-select {
        border-radius: 12px;
        border: 2px solid #e5e7eb;
        padding: 0.625rem 1rem;
        transition: all 0.3s ease;
        font-size: 0.9rem;
    }
    
    .form-control:focus, .form-select:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 4px color-mix(in srgb, var(--primary-color) 20%, transparent);
        outline: none;
    }
    
    .form-control:hover, .form-select:hover {
        border-color: var(--primary-color);
    }
    
    .form-control[readonly] {
        background: #f1f5f9;
        cursor: not-allowed;
        opacity: 0.7;
    }
    
    .text-muted {
        color: #94a3b8 !important;
        font-size: 0.75rem;
        margin-top: 0.25rem;
    }
    
    /* ✅ STYLES POUR LA VISIBILITÉ ET GARDE - SIMPLIFIÉ */
    .pharmacy-fields-wrapper {
        background: #f8fafc;
        border-radius: 16px;
        padding: 1.25rem 1.5rem;
        border: 2px solid #e5e7eb;
        transition: all 0.3s ease;
        margin-top: 0.5rem;
    }
    
    .pharmacy-fields-wrapper:hover {
        border-color: var(--primary-color);
    }
    
    .pharmacy-fields-title {
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    
    .pharmacy-fields-title i {
        color: var(--primary-color);
        font-size: 1.2rem;
    }
    
    .pharmacy-fields-title .badge-pharmacy {
        background: var(--primary-color);
        color: white;
        font-size: 0.65rem;
        padding: 0.2rem 0.8rem;
        border-radius: 50px;
        font-weight: 600;
    }
    
    .pharmacy-field-row {
        display: flex;
        align-items: center;
        gap: 1rem;
        flex-wrap: wrap;
        padding: 0.75rem 0;
        border-bottom: 1px solid #e5e7eb;
    }
    
    .pharmacy-field-row:last-child {
        border-bottom: none;
    }
    
    .pharmacy-field-label {
        min-width: 140px;
        font-weight: 500;
        color: #475569;
        font-size: 0.9rem;
    }
    
    /* ✅ TOGGLE SWITCH SIMPLIFIÉ ET FONCTIONNEL */
    .toggle-container-simple {
        display: flex;
        align-items: center;
        gap: 1rem;
    }
    
    .toggle-simple {
        position: relative;
        width: 52px;
        height: 28px;
        flex-shrink: 0;
        cursor: pointer;
    }
    
    .toggle-simple input {
        opacity: 0;
        width: 0;
        height: 0;
        position: absolute;
    }
    
    .toggle-simple .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: #cbd5e1;
        transition: 0.3s;
        border-radius: 34px;
    }
    
    .toggle-simple .slider::before {
        content: \"\";
        position: absolute;
        height: 20px;
        width: 20px;
        left: 4px;
        bottom: 4px;
        background: white;
        transition: 0.3s;
        border-radius: 50%;
        box-shadow: 0 2px 4px rgba(0,0,0,0.2);
    }
    
    .toggle-simple input:checked + .slider {
        background: var(--primary-color);
    }
    
    .toggle-simple input:checked + .slider::before {
        transform: translateX(24px);
    }
    
    .toggle-status-simple {
        font-size: 0.9rem;
        font-weight: 500;
    }
    
    .toggle-status-simple .visible {
        color: #22c55e;
    }
    
    .toggle-status-simple .hidden {
        color: #94a3b8;
    }
    
    .guard-periods-compact {
        flex: 1;
        min-width: 200px;
    }
    
    .guard-periods-compact .period-item {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: white;
        padding: 0.25rem 0.8rem;
        border-radius: 20px;
        border: 1px solid #e5e7eb;
        margin: 0.2rem 0.3rem 0.2rem 0;
        font-size: 0.8rem;
    }
    
    .guard-periods-compact .period-item .day {
        font-weight: 600;
        color: #1e293b;
    }
    
    .guard-periods-compact .period-item .time {
        color: #475569;
        font-family: monospace;
        font-size: 0.75rem;
    }
    
    .guard-periods-compact .empty {
        color: #94a3b8;
        font-size: 0.85rem;
        font-style: italic;
    }
    
    .btn-guard-edit {
        background: var(--primary-color);
        color: white;
        border: none;
        padding: 0.25rem 1rem;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 500;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        cursor: pointer;
        white-space: nowrap;
    }
    
    .btn-guard-edit:hover {
        background: color-mix(in srgb, var(--primary-color) 85%, black);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px color-mix(in srgb, var(--primary-color) 40%, transparent);
        color: white;
    }
    
    .action-buttons {
        position: sticky;
        bottom: 1.5rem;
        background: white;
        padding: 1rem 1.5rem;
        border-radius: 60px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.12);
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 100;
        margin-top: 2rem;
        border: 1px solid #f1f5f9;
        backdrop-filter: blur(10px);
    }
    
    .action-buttons .btn {
        border-radius: 50px;
        padding: 0.6rem 1.8rem;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .action-buttons .btn:hover {
        transform: translateY(-2px);
    }
    
    .btn-primary {
        background: var(--primary-color);
        border-color: var(--primary-color);
        color: white;
    }
    
    .btn-primary:hover {
        background: color-mix(in srgb, var(--primary-color) 85%, black);
        border-color: color-mix(in srgb, var(--primary-color) 85%, black);
        box-shadow: 0 8px 25px color-mix(in srgb, var(--primary-color) 40%, transparent);
    }
    
    .btn-outline-secondary {
        border-color: #e5e7eb;
        color: #64748b;
    }
    
    .btn-outline-secondary:hover {
        background: #f1f5f9;
        border-color: #cbd5e1;
    }
    
    .btn-secondary {
        background: #f1f5f9;
        border-color: #e5e7eb;
        color: #475569;
    }
    
    .btn-secondary:hover {
        background: #e5e7eb;
    }
    
    .modal-content {
        border-radius: 24px;
        border: none;
        overflow: hidden;
    }
    
    .modal-header {
        border-bottom: none;
        padding: 1.5rem 2rem;
    }
    
    .modal-body {
        padding: 1.5rem 2rem;
    }
    
    .modal-footer {
        border-top: none;
        padding: 1rem 2rem 1.5rem;
    }
    
    .modal-header .btn-close {
        filter: brightness(0) invert(1);
        opacity: 0.7;
    }
    
    .modal-header .btn-close:hover {
        opacity: 1;
    }
    
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @media (max-width: 992px) {
        .settings-hero { padding: 1.5rem; }
        .settings-hero h1 { font-size: 1.5rem; }
        .settings-section { padding: 1.25rem; }
        .settings-tab { padding: 0.5rem 1rem; font-size: 0.8rem; }
        .action-buttons {
            flex-direction: column;
            gap: 1rem;
            border-radius: 24px;
            padding: 1rem;
        }
        .action-buttons .btn { width: 100%; justify-content: center; }
        .action-buttons div { width: 100%; display: flex; flex-direction: column; gap: 0.5rem; }
        .color-palette { gap: 0.5rem; }
        .color-swatch { width: 30px; height: 30px; }
        .logo-preview { flex-direction: column; text-align: center; }
        .pharmacy-field-row { flex-direction: column; align-items: flex-start; gap: 0.5rem; }
        .pharmacy-field-label { min-width: auto; }
        .guard-periods-compact { width: 100%; }
    }
    
    @media (max-width: 576px) {
        .settings-hero { padding: 1rem; }
        .settings-hero h1 { font-size: 1.2rem; }
        .settings-section { padding: 1rem; }
        .settings-tabs { flex-direction: column; }
        .settings-tab { width: 100%; text-align: center; }
        .color-palette { justify-content: center; }
        .color-palette-label { flex-direction: column; align-items: flex-start; }
        .ticket-preview { max-width: 100%; }
        .color-picker-custom input[type=\"color\"] { width: 30px; height: 30px; }
        .color-hex-display { font-size: 0.75rem; padding: 0.2rem 0.5rem; min-width: 60px; }
        .pharmacy-fields-wrapper { padding: 0.75rem 1rem; }
        .btn-guard-edit { font-size: 0.7rem; padding: 0.2rem 0.8rem; }
    }
</style>
";
        yield from [];
    }

    // line 773
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 774
        yield "<div class=\"container-fluid settings-container py-4\">
    
    <div class=\"settings-hero\">
        <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-3\">
            <div>
                <h1>
                    <i class=\"fas fa-sliders-h me-2\"></i>
                    Paramètres entreprise
                </h1>
                <p>Personnalisez l'identité visuelle et les documents de votre entreprise</p>
            </div>
            <div class=\"info-badge\">
                <i class=\"fas fa-shield-alt me-1\"></i>
                Propriétaire uniquement
            </div>
        </div>
    </div>
    
    <div class=\"settings-tabs\" id=\"settingsTabs\">
        <button class=\"settings-tab active\" data-section=\"general\">
            <i class=\"fas fa-building\"></i> Général
        </button>
        <button class=\"settings-tab\" data-section=\"branding\">
            <i class=\"fas fa-palette\"></i> Apparence
        </button>
        <button class=\"settings-tab\" data-section=\"contact\">
            <i class=\"fas fa-address-card\"></i> Contact
        </button>
        <button class=\"settings-tab\" data-section=\"receipt\">
            <i class=\"fas fa-receipt\"></i> Ticket
        </button>
        <button class=\"settings-tab\" data-section=\"taxes\">
            <i class=\"fas fa-percent\"></i> Taxes
        </button>
    </div>
    
    ";
        // line 810
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["id" => "companySettingsForm", "class" => "settings-form"]]);
        yield "
    
    <input type=\"hidden\" name=\"primary_color\" id=\"primary_color\" value=\"";
        // line 812
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("primaryColor", $context)) ? (Twig\Extension\CoreExtension::default(($context["primaryColor"] ?? null), "#0463f1")) : ("#0463f1")), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"secondary_color\" id=\"secondary_color\" value=\"";
        // line 813
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("secondaryColor", $context)) ? (Twig\Extension\CoreExtension::default(($context["secondaryColor"] ?? null), "#8b5cf6")) : ("#8b5cf6")), "html", null, true);
        yield "\">
    
    <!-- Section Général -->
    <div id=\"section-general\" class=\"settings-section\">
        <div class=\"section-header\">
            <div class=\"section-icon\">
                <i class=\"fas fa-building\"></i>
            </div>
            <div class=\"section-title\">
                <h3>Informations générales</h3>
                <p>Identité et description de votre entreprise</p>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    ";
        // line 830
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "companyName", [], "any", false, false, false, 830), 'label', ["label" => "Nom de l'entreprise"]);
        yield "
                    ";
        // line 831
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "companyName", [], "any", false, false, false, 831), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Restaurant Le Gourmet"]]);
        yield "
                    <small class=\"text-muted\">Apparaît dans le header, les factures et les tickets</small>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    ";
        // line 837
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "slogan", [], "any", false, false, false, 837), 'label', ["label" => "Slogan"]);
        yield "
                    ";
        // line 838
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "slogan", [], "any", false, false, false, 838), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: La qualité fait la différence"]]);
        yield "
                    <small class=\"text-muted\">Optionnel - Apparaît sous le nom</small>
                </div>
            </div>
            
            <!-- ✅ CHAMPS PHARMACIE SIMPLIFIÉS -->
            ";
        // line 844
        $context["companyType"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "type", [], "any", true, true, false, 844)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "type", [], "any", false, false, false, 844), "")) : (""));
        // line 845
        yield "            ";
        if ((($context["companyType"] ?? null) == "pharmacy")) {
            // line 846
            yield "            <div class=\"col-12\">
                <div class=\"pharmacy-fields-wrapper\">
                    <div class=\"pharmacy-fields-title\">
                        <i class=\"fas fa-hospital\"></i>
                        Paramètres pharmacie
                        <span class=\"badge-pharmacy\">Pharmacie</span>
                    </div>
                    
                    <!-- Ligne 1: Visibilité - avec toggle SIMPLE -->
                    <div class=\"pharmacy-field-row\">
                        <div class=\"pharmacy-field-label\">
                            <i class=\"fas fa-eye me-1\"></i> Visibilité
                        </div>
                        <div class=\"toggle-container-simple\">
                            <label class=\"toggle-simple\">
                                <input type=\"checkbox\" id=\"company_public\" name=\"company_public\" 
                                       ";
            // line 862
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyPublic", [], "any", false, false, false, 862)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "checked";
            }
            yield ">
                                <span class=\"slider\"></span>
                            </label>
                            <span class=\"toggle-status-simple\" id=\"visibilityStatus\">
                                <span class=\"";
            // line 866
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyPublic", [], "any", false, false, false, 866)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "visible";
            } else {
                yield "hidden";
            }
            yield "\" id=\"visibilityText\">
                                    ";
            // line 867
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyPublic", [], "any", false, false, false, 867)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 868
                yield "                                        <i class=\"fas fa-eye me-1\"></i> Visible
                                    ";
            } else {
                // line 870
                yield "                                        <i class=\"fas fa-eye-slash me-1\"></i> Masquée
                                    ";
            }
            // line 872
            yield "                                </span>
                            </span>
                        </div>
                        <small class=\"text-muted\" id=\"visibilityHelp\">
                            ";
            // line 876
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyPublic", [], "any", false, false, false, 876)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 877
                yield "                                Produits visibles sur le marketplace
                            ";
            } else {
                // line 879
                yield "                                Produits masqués sur le marketplace
                            ";
            }
            // line 881
            yield "                        </small>
                    </div>
                    
                    <!-- Ligne 2: Périodes de garde -->
                    <div class=\"pharmacy-field-row\">
                        <div class=\"pharmacy-field-label\">
                            <i class=\"fas fa-clock me-1\"></i> Périodes de garde
                        </div>
                        <div class=\"guard-periods-compact\" id=\"guardPeriodsDisplay\">
                            ";
            // line 890
            $context["guardPeriods"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "guardPeriods", [], "any", true, true, false, 890)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "guardPeriods", [], "any", false, false, false, 890), [])) : ([]));
            // line 891
            yield "                            ";
            if (Twig\Extension\CoreExtension::testEmpty(($context["guardPeriods"] ?? null))) {
                // line 892
                yield "                                <span class=\"empty\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Aucune période configurée
                                </span>
                            ";
            } else {
                // line 897
                yield "                                ";
                $context["daysMap"] = ["monday" => "Lun", "tuesday" => "Mar", "wednesday" => "Mer", "thursday" => "Jeu", "friday" => "Ven", "saturday" => "Sam", "sunday" => "Dim"];
                // line 906
                yield "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["guardPeriods"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                    // line 907
                    yield "                                    <span class=\"period-item\">
                                        <span class=\"day\">";
                    // line 908
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["daysMap"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 908), [], "array", true, true, false, 908)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["daysMap"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 908)] ?? null) : null), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 908), 0, 3))) : (Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 908), 0, 3))), "html", null, true);
                    yield "</span>
                                        <span class=\"time\">";
                    // line 909
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["period"], "start", [], "any", false, false, false, 909), "html", null, true);
                    yield " - ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["period"], "end", [], "any", false, false, false, 909), "html", null, true);
                    yield "</span>
                                    </span>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['period'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 912
                yield "                            ";
            }
            // line 913
            yield "                        </div>
                        <button type=\"button\" class=\"btn-guard-edit\" data-bs-toggle=\"modal\" data-bs-target=\"#guardPeriodsModal\">
                            <i class=\"fas fa-edit\"></i>
                            Modifier
                        </button>
                    </div>
                </div>
            </div>
            ";
        }
        // line 922
        yield "            
            <div class=\"col-12\">
                <div class=\"form-group\">
                    ";
        // line 925
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 925), 'label', ["label" => "Description"]);
        yield "
                    ";
        // line 926
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 926), 'widget', ["attr" => ["class" => "form-control", "rows" => 3, "placeholder" => "Présentez votre activité..."]]);
        yield "
                </div>
            </div>
        </div>
        
        <div class=\"logo-preview\">
            ";
        // line 932
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "logo", [], "any", false, false, false, 932)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 933
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "logo", [], "any", false, false, false, 933))), "html", null, true);
            yield "\" class=\"logo-preview-img\" alt=\"Logo\">
            ";
        } else {
            // line 935
            yield "                <div class=\"logo-preview-img d-flex align-items-center justify-content-center bg-light\">
                    <i class=\"fas fa-store fa-2x text-muted\"></i>
                </div>
            ";
        }
        // line 939
        yield "            <div class=\"flex-grow-1\">
                ";
        // line 940
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "logoFile", [], "any", false, false, false, 940), 'label', ["label" => "Logo de l'entreprise"]);
        yield "
                ";
        // line 941
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "logoFile", [], "any", false, false, false, 941), 'widget', ["attr" => ["class" => "form-control", "accept" => "image/*"]]);
        yield "
                <small class=\"text-muted\">Format recommandé: PNG ou JPG, 200x200px</small>
            </div>
        </div>
    </div>
    
    <!-- Section Apparence -->
    <div id=\"section-branding\" class=\"settings-section\" style=\"display: none;\">
        <div class=\"section-header\">
            <div class=\"section-icon\">
                <i class=\"fas fa-palette\"></i>
            </div>
            <div class=\"section-title\">
                <h3>Apparence & Personnalisation</h3>
                <p>Choisissez les couleurs de votre interface</p>
            </div>
        </div>
        
        <div class=\"row g-4\">
            <div class=\"col-md-6\">
                <div class=\"color-palette-group\">
                    <div class=\"color-palette-label\">
                        <i class=\"fas fa-circle\" style=\"color: var(--primary-color);\"></i>
                        Couleur principale
                        <span class=\"color-hex-display\" id=\"primaryColorHexDisplay\">";
        // line 965
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("primaryColor", $context)) ? (Twig\Extension\CoreExtension::default(($context["primaryColor"] ?? null), "#0463f1")) : ("#0463f1")), "html", null, true);
        yield "</span>
                        <div class=\"color-picker-custom\">
                            <input type=\"color\" id=\"primaryColorPickerCustom\" value=\"";
        // line 967
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("primaryColor", $context)) ? (Twig\Extension\CoreExtension::default(($context["primaryColor"] ?? null), "#0463f1")) : ("#0463f1")), "html", null, true);
        yield "\">
                        </div>
                    </div>
                    <div class=\"color-palette\" id=\"primaryPalette\">
                        ";
        // line 971
        $context["primaryColors"] = ["#0463f1", "#dc2626", "#16a34a", "#ea580c", "#8b5cf6", "#db2777", "#0891b2", "#4f46e5", "#ca8a04", "#6b7280"];
        // line 972
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["primaryColors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 973
            yield "                            <div class=\"color-swatch ";
            if (($context["color"] == ((array_key_exists("primaryColor", $context)) ? (Twig\Extension\CoreExtension::default(($context["primaryColor"] ?? null), "#0463f1")) : ("#0463f1")))) {
                yield "active";
            }
            yield "\" 
                                 style=\"background: ";
            // line 974
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["color"], "html", null, true);
            yield ";\" 
                                 data-color=\"";
            // line 975
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["color"], "html", null, true);
            yield "\"
                                 data-target=\"primary\"></div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['color'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 978
        yield "                    </div>
                </div>
            </div>
            
            <div class=\"col-md-6\">
                <div class=\"color-palette-group\">
                    <div class=\"color-palette-label\">
                        <i class=\"fas fa-circle\" style=\"color: var(--secondary-color);\"></i>
                        Couleur secondaire
                        <span class=\"color-hex-display\" id=\"secondaryColorHexDisplay\">";
        // line 987
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("secondaryColor", $context)) ? (Twig\Extension\CoreExtension::default(($context["secondaryColor"] ?? null), "#8b5cf6")) : ("#8b5cf6")), "html", null, true);
        yield "</span>
                        <div class=\"color-picker-custom\">
                            <input type=\"color\" id=\"secondaryColorPickerCustom\" value=\"";
        // line 989
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("secondaryColor", $context)) ? (Twig\Extension\CoreExtension::default(($context["secondaryColor"] ?? null), "#8b5cf6")) : ("#8b5cf6")), "html", null, true);
        yield "\">
                        </div>
                    </div>
                    <div class=\"color-palette\" id=\"secondaryPalette\">
                        ";
        // line 993
        $context["secondaryColors"] = ["#8b5cf6", "#3b82f6", "#06b6d4", "#22c55e", "#eab308", "#f97316", "#ef4444", "#ec4899", "#14b8a6", "#64748b"];
        // line 994
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["secondaryColors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 995
            yield "                            <div class=\"color-swatch ";
            if (($context["color"] == ((array_key_exists("secondaryColor", $context)) ? (Twig\Extension\CoreExtension::default(($context["secondaryColor"] ?? null), "#8b5cf6")) : ("#8b5cf6")))) {
                yield "active";
            }
            yield "\" 
                                 style=\"background: ";
            // line 996
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["color"], "html", null, true);
            yield ";\" 
                                 data-color=\"";
            // line 997
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["color"], "html", null, true);
            yield "\"
                                 data-target=\"secondary\"></div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['color'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1000
        yield "                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"color-preview-demo\">
            <span class=\"fw-bold me-2\">Aperçu :</span>
            <button class=\"demo-btn demo-btn-primary\">
                <i class=\"fas fa-check me-1\"></i> Bouton principal
            </button>
            <button class=\"demo-btn demo-btn-secondary\">
                <i class=\"fas fa-check me-1\"></i> Bouton secondaire
            </button>
            <span class=\"demo-badge\">
                <i class=\"fas fa-tag me-1\"></i> Badge
            </span>
        </div>
    </div>
    
    <!-- Section Contact -->
    <div id=\"section-contact\" class=\"settings-section\" style=\"display: none;\">
        <div class=\"section-header\">
            <div class=\"section-icon\">
                <i class=\"fas fa-address-card\"></i>
            </div>
            <div class=\"section-title\">
                <h3>Coordonnées</h3>
                <p>Informations de contact et localisation</p>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    ";
        // line 1034
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 1034), 'label', ["label" => "Email"]);
        yield "
                    ";
        // line 1035
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 1035), 'widget', ["attr" => ["class" => "form-control", "readonly" => "readonly", "disabled" => "disabled"]]);
        yield "
                    <small class=\"text-muted\">L'email ne peut pas être modifié. Contactez le support en cas de besoin.</small>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    ";
        // line 1041
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 1041), 'label', ["label" => "Téléphone"]);
        yield "
                    ";
        // line 1042
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 1042), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>
            </div>
            <div class=\"col-12\">
                <div class=\"form-group\">
                    ";
        // line 1047
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 1047), 'label', ["label" => "Adresse"]);
        yield "
                    ";
        // line 1048
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 1048), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    ";
        // line 1053
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", false, false, false, 1053), 'label', ["label" => "Ville"]);
        yield "
                    ";
        // line 1054
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", false, false, false, 1054), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    ";
        // line 1059
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "country", [], "any", false, false, false, 1059), 'label', ["label" => "Pays"]);
        yield "
                    ";
        // line 1060
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "country", [], "any", false, false, false, 1060), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    ";
        // line 1065
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "website", [], "any", false, false, false, 1065), 'label', ["label" => "Site web"]);
        yield "
                    ";
        // line 1066
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "website", [], "any", false, false, false, 1066), 'widget', ["attr" => ["class" => "form-control", "type" => "url"]]);
        yield "
                </div>
            </div>
        </div>
    </div>
    
    <!-- Section Ticket -->
    <div id=\"section-receipt\" class=\"settings-section\" style=\"display: none;\">
        <div class=\"section-header\">
            <div class=\"section-icon\">
                <i class=\"fas fa-receipt\"></i>
            </div>
            <div class=\"section-title\">
                <h3>Ticket de caisse</h3>
                <p>Personnalisez l'apparence de vos tickets</p>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    ";
        // line 1087
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "receiptHeader", [], "any", false, false, false, 1087), 'label', ["label" => "En-tête du ticket"]);
        yield "
                    ";
        // line 1088
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "receiptHeader", [], "any", false, false, false, 1088), 'widget', ["attr" => ["class" => "form-control", "rows" => 3, "placeholder" => "Merci de votre visite !
Bonne journée"]]);
        yield "
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    ";
        // line 1093
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "receiptFooter", [], "any", false, false, false, 1093), 'label', ["label" => "Pied de page"]);
        yield "
                    ";
        // line 1094
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "receiptFooter", [], "any", false, false, false, 1094), 'widget', ["attr" => ["class" => "form-control", "rows" => 3, "placeholder" => "Suivez-nous sur Instagram
@votrepage"]]);
        yield "
                </div>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"mt-2\">
                    <span class=\"fw-bold small text-muted\">
                        <i class=\"fas fa-eye me-1\"></i> Aperçu du ticket
                    </span>
                </div>
                <div class=\"ticket-preview\">
                    <div class=\"ticket-header\">
                        <strong>";
        // line 1108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyName", [], "any", false, false, false, 1108), "html", null, true);
        yield "</strong>
                        ";
        // line 1109
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "slogan", [], "any", false, false, false, 1109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1110
            yield "                            <br><small>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "slogan", [], "any", false, false, false, 1110), "html", null, true);
            yield "</small>
                        ";
        }
        // line 1112
        yield "                        <br><small class=\"text-muted\">";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "address", [], "any", false, false, false, 1112)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "address", [], "any", false, false, false, 1112) . " - "), "html", null, true)) : (""));
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "city", [], "any", false, false, false, 1112), "html", null, true);
        yield "</small>
                        <br><small>Tél: ";
        // line 1113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "phone", [], "any", false, false, false, 1113), "html", null, true);
        yield "</small>
                    </div>
                    <div class=\"ticket-items\">
                        <div class=\"d-flex justify-content-between\">
                            <span>Article 1</span>
                            <span>1 x 500 FCFA</span>
                        </div>
                        <div class=\"d-flex justify-content-between\">
                            <span>Article 2</span>
                            <span>2 x 1000 FCFA</span>
                        </div>
                    </div>
                    <div class=\"ticket-total\">
                        <span>TOTAL</span>
                        <span>2500 FCFA</span>
                    </div>
                    <div class=\"ticket-footer\" id=\"ticketPreviewFooter\">
                        ";
        // line 1130
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "receiptHeader", [], "any", false, false, false, 1130), "vars", [], "any", false, false, false, 1130), "value", [], "any", false, false, false, 1130)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "receiptHeader", [], "any", false, false, false, 1130), "vars", [], "any", false, false, false, 1130), "value", [], "any", false, false, false, 1130), "html", null, true)) : ("Merci de votre visite !"));
        yield "
                        <br>
                        ";
        // line 1132
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "receiptFooter", [], "any", false, false, false, 1132), "vars", [], "any", false, false, false, 1132), "value", [], "any", false, false, false, 1132)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "receiptFooter", [], "any", false, false, false, 1132), "vars", [], "any", false, false, false, 1132), "value", [], "any", false, false, false, 1132), "html", null, true)) : ("À bientôt !"));
        yield "
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"alert alert-info mt-3 border-0\" style=\"background: #e0f2fe; color: #0284c7;\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Ces messages apparaîtront sur tous les tickets de caisse imprimés.
                </div>
                <div class=\"alert alert-warning border-0 mt-2\" style=\"background: #fef3c7; color: #92400e;\">
                    <i class=\"fas fa-lightbulb me-2\"></i>
                    Astuce : Utilisez <strong>\\n</strong> pour faire des retours à la ligne.
                </div>
            </div>
        </div>
    </div>
    
    <!-- Section Taxes -->
    <div id=\"section-taxes\" class=\"settings-section\" style=\"display: none;\">
        <div class=\"section-header\">
            <div class=\"section-icon\">
                <i class=\"fas fa-percent\"></i>
            </div>
            <div class=\"section-title\">
                <h3>Taxes et devises</h3>
                <p>Configuration fiscale de votre entreprise</p>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    ";
        // line 1164
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "defaultTaxRate", [], "any", false, false, false, 1164), 'label', ["label" => "Taux de TVA par défaut (%)"]);
        yield "
                    ";
        // line 1165
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "defaultTaxRate", [], "any", false, false, false, 1165), 'widget', ["attr" => ["class" => "form-control", "step" => "0.1"]]);
        yield "
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"alert alert-secondary border-0 d-flex align-items-center\" style=\"background: #f1f5f9;\">
                    <div>
                        <i class=\"fas fa-exchange-alt fa-2x me-3 text-primary\"></i>
                    </div>
                    <div>
                        <strong>Devise actuelle :</strong> 
                        ";
        // line 1175
        $context["country"] = CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "country", [], "any", false, false, false, 1175);
        // line 1176
        yield "                        ";
        $context["currency"] = (((CoreExtension::getAttribute($this->env, $this->source, ["CM" => "XAF", "CI" => "XOF", "SN" => "XOF", "FR" => "EUR", "US" => "USD", "BJ" => "FCFA", "TG" => "XOF", "ML" => "XOF", "BF" => "XOF", "NE" => "XOF", "GA" => "XAF", "CG" => "XAF", "CD" => "CDF", "MA" => "MAD", "TN" => "TND", "DZ" => "DZD"],         // line 1181
($context["country"] ?? null), [], "array", true, true, false, 1177) &&  !(null === (($_v1 = ["CM" => "XAF", "CI" => "XOF", "SN" => "XOF", "FR" => "EUR", "US" => "USD", "BJ" => "FCFA", "TG" => "XOF", "ML" => "XOF", "BF" => "XOF", "NE" => "XOF", "GA" => "XAF", "CG" => "XAF", "CD" => "CDF", "MA" => "MAD", "TN" => "TND", "DZ" => "DZD"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["country"] ?? null)] ?? null) : null)))) ? ((($_v2 = ["CM" => "XAF", "CI" => "XOF", "SN" => "XOF", "FR" => "EUR", "US" => "USD", "BJ" => "FCFA", "TG" => "XOF", "ML" => "XOF", "BF" => "XOF", "NE" => "XOF", "GA" => "XAF", "CG" => "XAF", "CD" => "CDF", "MA" => "MAD", "TN" => "TND", "DZ" => "DZD"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[($context["country"] ?? null)] ?? null) : null)) : ("FCFA"));
        // line 1182
        yield "                        <span class=\"fw-bold text-primary\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currency"] ?? null), "html", null, true);
        yield "</span>
                        <span class=\"text-muted ms-2\">(Basée sur le pays sélectionné)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"action-buttons\">
        <a href=\"";
        // line 1191
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-2\"></i> Annuler
        </a>
        <div class=\"d-flex gap-2\">
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"resetForm()\">
                <i class=\"fas fa-undo me-2\"></i> Réinitialiser
            </button>
            <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"fas fa-save me-2\"></i> Enregistrer
            </button>
        </div>
    </div>
    
    ";
        // line 1204
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
</div>

<!-- ✅ MODAL PÉRIODES DE GARDE -->
<div class=\"modal fade\" id=\"guardPeriodsModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background: var(--primary-color); color: white;\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-clock-history me-2\"></i>
                    Modifier les périodes de garde
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form method=\"post\" action=\"";
        // line 1218
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_company_settings_guard_periods");
        yield "\">
                <div class=\"modal-body\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 1220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("guard_periods"), "html", null, true);
        yield "\">
                    
                    <p class=\"text-muted mb-3\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Définissez les jours et horaires de garde pour votre pharmacie.
                    </p>
                    
                    <div id=\"guardPeriodsContainer\">
                        ";
        // line 1228
        $context["guardPeriods"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "guardPeriods", [], "any", true, true, false, 1228)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "guardPeriods", [], "any", false, false, false, 1228), [])) : ([]));
        // line 1229
        yield "                        
                        ";
        // line 1230
        if (Twig\Extension\CoreExtension::testEmpty(($context["guardPeriods"] ?? null))) {
            // line 1231
            yield "                            <div class=\"text-center text-muted py-3\">
                                <i class=\"fas fa-clock fs-3 d-block mb-2\"></i>
                                Aucune période de garde configurée
                            </div>
                            <div class=\"guard-period-row d-flex gap-2 align-items-center mb-2\">
                                <select name=\"guard_periods[0][day]\" class=\"form-select\" style=\"flex: 1;\">
                                    <option value=\"\">Choisir un jour</option>
                                    <option value=\"monday\">Lundi</option>
                                    <option value=\"tuesday\">Mardi</option>
                                    <option value=\"wednesday\">Mercredi</option>
                                    <option value=\"thursday\">Jeudi</option>
                                    <option value=\"friday\">Vendredi</option>
                                    <option value=\"saturday\">Samedi</option>
                                    <option value=\"sunday\">Dimanche</option>
                                </select>
                                <input type=\"time\" name=\"guard_periods[0][start]\" class=\"form-control\" style=\"width: 120px;\" placeholder=\"Début\">
                                <input type=\"time\" name=\"guard_periods[0][end]\" class=\"form-control\" style=\"width: 120px;\" placeholder=\"Fin\">
                                <button type=\"button\" class=\"btn btn-danger remove-guard-period\" disabled>
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </div>
                        ";
        } else {
            // line 1253
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["guardPeriods"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                // line 1254
                yield "                                <div class=\"guard-period-row d-flex gap-2 align-items-center mb-2\">
                                    <select name=\"guard_periods[";
                // line 1255
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 1255), "html", null, true);
                yield "][day]\" class=\"form-select\" style=\"flex: 1;\">
                                        <option value=\"\">Choisir un jour</option>
                                        <option value=\"monday\" ";
                // line 1257
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 1257) == "monday")) {
                    yield "selected";
                }
                yield ">Lundi</option>
                                        <option value=\"tuesday\" ";
                // line 1258
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 1258) == "tuesday")) {
                    yield "selected";
                }
                yield ">Mardi</option>
                                        <option value=\"wednesday\" ";
                // line 1259
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 1259) == "wednesday")) {
                    yield "selected";
                }
                yield ">Mercredi</option>
                                        <option value=\"thursday\" ";
                // line 1260
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 1260) == "thursday")) {
                    yield "selected";
                }
                yield ">Jeudi</option>
                                        <option value=\"friday\" ";
                // line 1261
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 1261) == "friday")) {
                    yield "selected";
                }
                yield ">Vendredi</option>
                                        <option value=\"saturday\" ";
                // line 1262
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 1262) == "saturday")) {
                    yield "selected";
                }
                yield ">Samedi</option>
                                        <option value=\"sunday\" ";
                // line 1263
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "day", [], "any", false, false, false, 1263) == "sunday")) {
                    yield "selected";
                }
                yield ">Dimanche</option>
                                    </select>
                                    <input type=\"time\" name=\"guard_periods[";
                // line 1265
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 1265), "html", null, true);
                yield "][start]\" class=\"form-control\" style=\"width: 120px;\" value=\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "start", [], "any", true, true, false, 1265) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["period"], "start", [], "any", false, false, false, 1265)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["period"], "start", [], "any", false, false, false, 1265), "html", null, true)) : (""));
                yield "\">
                                    <input type=\"time\" name=\"guard_periods[";
                // line 1266
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 1266), "html", null, true);
                yield "][end]\" class=\"form-control\" style=\"width: 120px;\" value=\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["period"], "end", [], "any", true, true, false, 1266) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["period"], "end", [], "any", false, false, false, 1266)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["period"], "end", [], "any", false, false, false, 1266), "html", null, true)) : (""));
                yield "\">
                                    <button type=\"button\" class=\"btn btn-danger remove-guard-period\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                </div>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['period'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1272
            yield "                        ";
        }
        // line 1273
        yield "                    </div>
                    
                    <button type=\"button\" class=\"btn btn-outline-primary btn-sm mt-2\" id=\"addGuardPeriod\">
                        <i class=\"fas fa-plus-circle me-1\"></i>
                        Ajouter une période
                    </button>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn\" style=\"background: var(--primary-color); color: white;\">
                        <i class=\"fas fa-save me-2\"></i>
                        Enregistrer les périodes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 1293
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1294
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ==================== GESTION DES ONGLETS ====================
    const tabs = document.querySelectorAll('.settings-tab');
    const sections = {
        general: document.getElementById('section-general'),
        branding: document.getElementById('section-branding'),
        contact: document.getElementById('section-contact'),
        receipt: document.getElementById('section-receipt'),
        taxes: document.getElementById('section-taxes')
    };
    
    function showSection(sectionId) {
        Object.values(sections).forEach(section => {
            if (section) section.style.display = 'none';
        });
        if (sections[sectionId]) sections[sectionId].style.display = 'block';
        tabs.forEach(tab => {
            tab.classList.toggle('active', tab.dataset.section === sectionId);
        });
    }
    
    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            showSection(tab.dataset.section);
        });
    });
    
    // ==================== TOGGLE VISIBILITÉ SIMPLIFIÉ ====================
    const visibilityToggle = document.getElementById('company_public');
    const visibilityText = document.getElementById('visibilityText');
    const visibilityHelp = document.getElementById('visibilityHelp');
    
    function updateVisibility() {
        if (!visibilityToggle) return;
        
        if (visibilityToggle.checked) {
            if (visibilityText) {
                visibilityText.innerHTML = '<i class=\"fas fa-eye me-1\"></i> Visible';
                visibilityText.className = 'visible';
            }
            if (visibilityHelp) {
                visibilityHelp.textContent = 'Produits visibles sur le marketplace';
            }
        } else {
            if (visibilityText) {
                visibilityText.innerHTML = '<i class=\"fas fa-eye-slash me-1\"></i> Masquée';
                visibilityText.className = 'hidden';
            }
            if (visibilityHelp) {
                visibilityHelp.textContent = 'Produits masqués sur le marketplace';
            }
        }
    }
    
    if (visibilityToggle) {
        visibilityToggle.addEventListener('change', updateVisibility);
        updateVisibility();
    }
    
    // ==================== PALETTE DE COULEURS ====================
    const primaryHexDisplay = document.getElementById('primaryColorHexDisplay');
    const secondaryHexDisplay = document.getElementById('secondaryColorHexDisplay');
    const primaryPickerCustom = document.getElementById('primaryColorPickerCustom');
    const secondaryPickerCustom = document.getElementById('secondaryColorPickerCustom');
    
    const hiddenPrimary = document.getElementById('primary_color');
    const hiddenSecondary = document.getElementById('secondary_color');
    
    function updatePrimaryColor(color) {
        if (hiddenPrimary) hiddenPrimary.value = color;
        if (primaryPickerCustom) primaryPickerCustom.value = color;
        if (primaryHexDisplay) primaryHexDisplay.textContent = color;
        document.documentElement.style.setProperty('--primary-color', color);
        
        document.querySelectorAll('.demo-btn-primary').forEach(btn => {
            btn.style.background = color;
        });
        document.querySelectorAll('.demo-badge').forEach(badge => {
            badge.style.background = color;
        });
        document.querySelectorAll('.section-icon').forEach(icon => {
            icon.style.background = color;
        });
        document.querySelectorAll('#primaryPalette .color-swatch').forEach(sw => {
            sw.classList.toggle('active', sw.dataset.color === color);
        });
        document.querySelectorAll('#guardPeriodsModal .modal-header').forEach(header => {
            header.style.background = color;
        });
        document.querySelectorAll('.settings-hero').forEach(hero => {
            hero.style.background = `linear-gradient(135deg, \${color}, color-mix(in srgb, \${color} 85%, black))`;
        });
        document.querySelectorAll('.badge-pharmacy').forEach(badge => {
            badge.style.background = color;
        });
        document.querySelectorAll('.btn-guard-edit').forEach(btn => {
            btn.style.background = color;
        });
        document.querySelectorAll('.btn-primary').forEach(btn => {
            btn.style.background = color;
            btn.style.borderColor = color;
        });
        document.querySelectorAll('.toggle-simple input:checked + .slider').forEach(el => {
            el.style.background = color;
        });
    }
    
    function updateSecondaryColor(color) {
        if (hiddenSecondary) hiddenSecondary.value = color;
        if (secondaryPickerCustom) secondaryPickerCustom.value = color;
        if (secondaryHexDisplay) secondaryHexDisplay.textContent = color;
        document.documentElement.style.setProperty('--secondary-color', color);
        document.querySelectorAll('.demo-btn-secondary').forEach(btn => {
            btn.style.background = color;
        });
        document.querySelectorAll('#secondaryPalette .color-swatch').forEach(sw => {
            sw.classList.toggle('active', sw.dataset.color === color);
        });
    }
    
    document.querySelectorAll('.color-swatch').forEach(swatch => {
        swatch.addEventListener('click', function() {
            const color = this.dataset.color;
            const target = this.dataset.target;
            if (target === 'primary') {
                updatePrimaryColor(color);
            } else {
                updateSecondaryColor(color);
            }
        });
    });
    
    if (primaryPickerCustom) {
        primaryPickerCustom.addEventListener('input', function() {
            updatePrimaryColor(this.value);
        });
    }
    
    if (secondaryPickerCustom) {
        secondaryPickerCustom.addEventListener('input', function() {
            updateSecondaryColor(this.value);
        });
    }
    
    // ==================== APERÇU DU TICKET ====================
    const receiptHeaderInput = document.querySelector('#";
        // line 1441
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "receiptHeader", [], "any", false, false, false, 1441), "vars", [], "any", false, false, false, 1441), "id", [], "any", false, false, false, 1441), "html", null, true);
        yield "');
    const receiptFooterInput = document.querySelector('#";
        // line 1442
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "receiptFooter", [], "any", false, false, false, 1442), "vars", [], "any", false, false, false, 1442), "id", [], "any", false, false, false, 1442), "html", null, true);
        yield "');
    const ticketFooter = document.getElementById('ticketPreviewFooter');
    
    function updateTicketPreview() {
        if (ticketFooter) {
            const headerText = receiptHeaderInput?.value || 'Merci de votre visite !';
            const footerText = receiptFooterInput?.value || 'À bientôt !';
            ticketFooter.innerHTML = headerText.replace(/\\n/g, '<br>') + '<br>' + footerText.replace(/\\n/g, '<br>');
        }
    }
    
    if (receiptHeaderInput) receiptHeaderInput.addEventListener('input', updateTicketPreview);
    if (receiptFooterInput) receiptFooterInput.addEventListener('input', updateTicketPreview);
    
    // ==================== PÉRIODES DE GARDE ====================
    const container = document.getElementById('guardPeriodsContainer');
    const addBtn = document.getElementById('addGuardPeriod');
    
    if (container && addBtn) {
        let periodIndex = container.querySelectorAll('.guard-period-row').length || 0;
        
        function resetRow(row) {
            row.querySelectorAll('select, input').forEach(el => el.value = '');
        }
        
        function createRow(index) {
            const row = document.createElement('div');
            row.className = 'guard-period-row d-flex gap-2 align-items-center mb-2';
            row.innerHTML = `
                <select name=\"guard_periods[\${index}][day]\" class=\"form-select\" style=\"flex: 1;\">
                    <option value=\"\">Choisir un jour</option>
                    <option value=\"monday\">Lundi</option>
                    <option value=\"tuesday\">Mardi</option>
                    <option value=\"wednesday\">Mercredi</option>
                    <option value=\"thursday\">Jeudi</option>
                    <option value=\"friday\">Vendredi</option>
                    <option value=\"saturday\">Samedi</option>
                    <option value=\"sunday\">Dimanche</option>
                </select>
                <input type=\"time\" name=\"guard_periods[\${index}][start]\" class=\"form-control\" style=\"width: 120px;\" placeholder=\"Début\">
                <input type=\"time\" name=\"guard_periods[\${index}][end]\" class=\"form-control\" style=\"width: 120px;\" placeholder=\"Fin\">
                <button type=\"button\" class=\"btn btn-danger remove-guard-period\">
                    <i class=\"fas fa-trash\"></i>
                </button>
            `;
            return row;
        }
        
        addBtn.addEventListener('click', function() {
            const row = createRow(periodIndex);
            container.appendChild(row);
            const removeBtn = row.querySelector('.remove-guard-period');
            removeBtn.addEventListener('click', function() {
                const rows = container.querySelectorAll('.guard-period-row');
                if (rows.length > 1) {
                    row.remove();
                } else {
                    resetRow(row);
                }
            });
            periodIndex++;
        });
        
        container.addEventListener('click', function(e) {
            const removeBtn = e.target.closest('.remove-guard-period');
            if (removeBtn) {
                const row = removeBtn.closest('.guard-period-row');
                const rows = container.querySelectorAll('.guard-period-row');
                if (rows.length > 1) {
                    row.remove();
                } else {
                    resetRow(row);
                }
            }
        });
    }
    
    // ==================== RÉINITIALISATION ====================
    window.resetForm = function() {
        if (confirm('Êtes-vous sûr de vouloir réinitialiser tous les paramètres ?')) {
            document.getElementById('companySettingsForm').reset();
            setTimeout(() => {
                updatePrimaryColor('#0463f1');
                updateSecondaryColor('#8b5cf6');
                updateTicketPreview();
                if (visibilityToggle) {
                    visibilityToggle.checked = ";
        // line 1528
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyPublic", [], "any", false, false, false, 1528)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ";
                    updateVisibility();
                }
                showNotification('Formulaire réinitialisé', 'info');
            }, 100);
        }
    };
    
    // ==================== NOTIFICATION ====================
    function showNotification(message, type) {
        const notification = document.createElement('div');
        const bgColor = type === 'success' ? 'success' : (type === 'error' ? 'danger' : 'info');
        const icon = type === 'success' ? 'check-circle' : (type === 'error' ? 'exclamation-circle' : 'info-circle');
        notification.className = `position-fixed bottom-0 end-0 p-3 m-3 bg-\${bgColor} text-white rounded shadow`;
        notification.style.zIndex = '9999';
        notification.innerHTML = `<i class=\"fas fa-\${icon} me-2\"></i>\${message}`;
        document.body.appendChild(notification);
        setTimeout(() => notification.remove(), 3000);
    }
    
    ";
        // line 1548
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 1548));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 1549
            yield "        showNotification('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash"], "html", null, true);
            yield "', 'success');
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1551
        yield "});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "company/settings/index.html.twig";
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
        return array (  1995 => 1551,  1986 => 1549,  1982 => 1548,  1959 => 1528,  1870 => 1442,  1866 => 1441,  1716 => 1294,  1709 => 1293,  1686 => 1273,  1683 => 1272,  1661 => 1266,  1655 => 1265,  1648 => 1263,  1642 => 1262,  1636 => 1261,  1630 => 1260,  1624 => 1259,  1618 => 1258,  1612 => 1257,  1607 => 1255,  1604 => 1254,  1586 => 1253,  1562 => 1231,  1560 => 1230,  1557 => 1229,  1555 => 1228,  1544 => 1220,  1539 => 1218,  1522 => 1204,  1506 => 1191,  1493 => 1182,  1491 => 1181,  1489 => 1176,  1487 => 1175,  1474 => 1165,  1470 => 1164,  1435 => 1132,  1430 => 1130,  1410 => 1113,  1404 => 1112,  1398 => 1110,  1396 => 1109,  1392 => 1108,  1374 => 1094,  1370 => 1093,  1361 => 1088,  1357 => 1087,  1333 => 1066,  1329 => 1065,  1321 => 1060,  1317 => 1059,  1309 => 1054,  1305 => 1053,  1297 => 1048,  1293 => 1047,  1285 => 1042,  1281 => 1041,  1272 => 1035,  1268 => 1034,  1232 => 1000,  1223 => 997,  1219 => 996,  1212 => 995,  1207 => 994,  1205 => 993,  1198 => 989,  1193 => 987,  1182 => 978,  1173 => 975,  1169 => 974,  1162 => 973,  1157 => 972,  1155 => 971,  1148 => 967,  1143 => 965,  1116 => 941,  1112 => 940,  1109 => 939,  1103 => 935,  1097 => 933,  1095 => 932,  1086 => 926,  1082 => 925,  1077 => 922,  1066 => 913,  1063 => 912,  1052 => 909,  1048 => 908,  1045 => 907,  1040 => 906,  1037 => 897,  1030 => 892,  1027 => 891,  1025 => 890,  1014 => 881,  1010 => 879,  1006 => 877,  1004 => 876,  998 => 872,  994 => 870,  990 => 868,  988 => 867,  980 => 866,  971 => 862,  953 => 846,  950 => 845,  948 => 844,  939 => 838,  935 => 837,  926 => 831,  922 => 830,  902 => 813,  898 => 812,  893 => 810,  855 => 774,  848 => 773,  83 => 12,  79 => 11,  73 => 8,  66 => 7,  54 => 5,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "company/settings/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\company\\settings\\index.html.twig");
    }
}
