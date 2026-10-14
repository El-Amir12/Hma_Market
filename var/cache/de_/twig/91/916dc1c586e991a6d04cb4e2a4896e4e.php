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

/* super_admin/hma_service/show.html.twig */
class __TwigTemplate_bae6077e7ccf60a5ae59197c8ddbae37 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/hma_service/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/hma_service/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 4, $this->source); })()), "companyName", [], "any", false, false, false, 4), "html", null, true);
        
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
    /* Variables de couleurs */
    :root {
        --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        --success-gradient: linear-gradient(135deg, #28a745 0%, #218838 100%);
        --warning-gradient: linear-gradient(135deg, #ffc107 0%, #e0a800 100%);
        --danger-gradient: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        --info-gradient: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
        --purple-gradient: linear-gradient(135deg, #9c27b0 0%, #7b1fa2 100%);
        --dark-gradient: linear-gradient(135deg, #343a40 0%, #23272b 100%);
    }

    /* En-tête entreprise amélioré */
    .company-header {
        background: var(--primary-gradient);
        color: white;
        padding: 1.5rem;
        border-radius: 1.5rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 15px 30px rgba(102, 126, 234, 0.3);
        position: relative;
        overflow: hidden;
    }

    @media (min-width: 768px) {
        .company-header {
            padding: 2.5rem;
            margin-bottom: 2rem;
        }
    }

    .company-header::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        animation: rotate 20s linear infinite;
    }

    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .company-logo-large {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 16px;
        border: 4px solid white;
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        transition: transform 0.3s;
    }

    @media (min-width: 768px) {
        .company-logo-large {
            width: 120px;
            height: 120px;
            border-radius: 20px;
        }
    }

    .company-logo-large:hover {
        transform: scale(1.05);
    }

    .company-initials-large {
        width: 80px;
        height: 80px;
        border-radius: 16px;
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(5px);
        border: 4px solid white;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 2.5rem;
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        transition: transform 0.3s;
    }

    @media (min-width: 768px) {
        .company-initials-large {
            width: 120px;
            height: 120px;
            border-radius: 20px;
            font-size: 3.5rem;
        }
    }

    .company-initials-large:hover {
        transform: scale(1.05);
    }

    /* Badges améliorés */
    .badge-custom {
        padding: 0.3rem 0.6rem;
        font-size: 0.7rem;
        border-radius: 50px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        transition: all 0.3s;
    }

    @media (min-width: 768px) {
        .badge-custom {
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }
    }

    .badge-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    }

    /* STYLES POUR LES RÔLES */
    .role-badge {
        font-size: 0.65rem;
        padding: 0.2rem 0.4rem;
        margin-right: 2px;
        display: inline-block;
        font-weight: 500;
        border-radius: 50px;
    }

    @media (min-width: 768px) {
        .role-badge {
            font-size: 0.8rem;
            padding: 0.3rem 0.6rem;
        }
    }

    .role-badge.role-admin {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        color: white;
    }
    .role-badge.role-manager {
        background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
        color: white;
    }
    .role-badge.role-stock {
        background: linear-gradient(135deg, #ffc107 0%, #ffca2c 100%);
        color: #212529;
    }
    .role-badge.role-cashier {
        background: linear-gradient(135deg, #198754 0%, #157347 100%);
        color: white;
    }
    .role-badge.role-user {
        background: linear-gradient(135deg, #6c757d 0%, #5c636a 100%);
        color: white;
    }

    /* STYLES POUR LES PLANS */
    .plan-badge {
        font-size: 0.65rem;
        padding: 0.3rem 0.6rem;
        font-weight: 500;
        border-radius: 50px;
    }

    @media (min-width: 768px) {
        .plan-badge {
            font-size: 0.85rem;
            padding: 0.5rem 1rem;
        }
    }

    .plan-trial {
        background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
        color: white;
    }
    .plan-freemium {
        background: linear-gradient(135deg, #6c757d 0%, #5c636a 100%);
        color: white;
    }
    .plan-basic {
        background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
        color: white;
    }
    .plan-premium {
        background: linear-gradient(135deg, #9c27b0 0%, #7b1fa2 100%);
        color: white;
    }

    /* STYLES POUR LE STATUT */
    .status-badge {
        font-size: 0.65rem;
        padding: 0.3rem 0.6rem;
        font-weight: 500;
        border-radius: 50px;
    }

    @media (min-width: 768px) {
        .status-badge {
            font-size: 0.85rem;
            padding: 0.5rem 1rem;
        }
    }

    .status-active {
        background: linear-gradient(135deg, #28a745 0%, #218838 100%);
        color: white;
    }

    .status-inactive {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        color: white;
    }

    .status-trial {
        background: linear-gradient(135deg, #ffc107 0%, #e0a800 100%);
        color: #212529;
    }

    /* Cartes d'information améliorées */
    .info-card {
        transition: all 0.3s;
        height: 100%;
        border: none;
        border-radius: 1rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        overflow: hidden;
    }

    .info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }

    .info-card .card-body {
        padding: 1rem;
    }

    @media (min-width: 768px) {
        .info-card .card-body {
            padding: 1.5rem;
        }
    }

    .info-card .card-title {
        color: #495057;
        font-weight: 600;
        margin-bottom: 0.8rem;
        font-size: 0.9rem;
    }

    @media (min-width: 768px) {
        .info-card .card-title {
            font-size: 1.1rem;
            margin-bottom: 1.2rem;
        }
    }

    .info-card hr {
        margin: 0.75rem 0;
        opacity: 0.1;
    }

    /* Alertes améliorées */
    .alert-trial {
        background: var(--warning-gradient);
        color: #212529;
        border: none;
        border-radius: 0.5rem;
        padding: 0.5rem 0.75rem;
        margin-top: 0.75rem;
        box-shadow: 0 5px 10px rgba(255, 193, 7, 0.3);
        animation: pulse 2s infinite;
        font-size: 0.75rem;
    }

    @media (min-width: 768px) {
        .alert-trial {
            padding: 0.75rem 1rem;
            font-size: 0.9rem;
        }
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.01); }
        100% { transform: scale(1); }
    }

    /* Barres de progression améliorées */
    .usage-progress {
        height: 6px;
        border-radius: 4px;
        background-color: #e9ecef;
        overflow: hidden;
        margin: 0.3rem 0;
    }

    @media (min-width: 768px) {
        .usage-progress {
            height: 8px;
            margin: 0.5rem 0;
        }
    }

    .progress-bar {
        position: relative;
        overflow: hidden;
    }

    .progress-bar::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        animation: shimmer 2s infinite;
    }

    @keyframes shimmer {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }

    /* Badges de fonctionnalités améliorés */
    .feature-badge {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        color: #495057;
        padding: 0.3rem 0.6rem;
        border-radius: 50px;
        font-size: 0.7rem;
        transition: all 0.3s;
        box-shadow: 0 2px 5px rgba(0,0,0,0.02);
    }

    @media (min-width: 768px) {
        .feature-badge {
            padding: 0.6rem 1.2rem;
            font-size: 0.9rem;
        }
    }

    .feature-badge:hover {
        background: var(--primary-gradient);
        color: white;
        border-color: transparent;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }

    .feature-badge:hover i {
        color: white !important;
    }

    /* Cartes de rôles améliorées */
    .role-card {
        border: none;
        border-radius: 1rem;
        background: white;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s;
        overflow: hidden;
        height: 100%;
    }

    .role-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }

    .role-card .card-body {
        padding: 0.75rem;
    }

    @media (min-width: 768px) {
        .role-card .card-body {
            padding: 1.5rem;
        }
    }

    .role-count {
        font-size: 1.3rem;
        font-weight: bold;
        color: #212529;
        margin: 0.25rem 0;
    }

    @media (min-width: 768px) {
        .role-count {
            font-size: 2rem;
            margin: 0.5rem 0;
        }
    }

    /* Statuts des rôles */
    .role-status-active {
        color: #28a745;
        font-weight: 600;
    }

    .role-status-warning {
        color: #ffc107;
        font-weight: 600;
    }

    .role-status-inactive {
        color: #dc3545;
        font-weight: 600;
    }

    /* Tableau des abonnements amélioré */
    .subscriptions-table {
        border-collapse: separate;
        border-spacing: 0 0.5rem;
    }

    .subscriptions-table tbody tr {
        background: white;
        box-shadow: 0 2px 5px rgba(0,0,0,0.02);
        transition: all 0.3s;
    }

    .subscriptions-table tbody tr:hover {
        background: #f8f9fa;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transform: translateY(-2px);
    }

    .subscriptions-table td {
        padding: 0.5rem 0.5rem;
        vertical-align: middle;
        border: none;
        font-size: 0.7rem;
    }

    @media (min-width: 768px) {
        .subscriptions-table td {
            padding: 1rem;
            font-size: 0.9rem;
        }
    }

    /* Icônes animées */
    .animated-icon {
        transition: all 0.3s;
    }

    .animated-icon:hover {
        transform: rotate(360deg) scale(1.2);
    }

    /* Compteurs animés */
    .counter-number {
        font-size: 1rem;
        font-weight: 600;
        color: #212529;
        transition: all 0.3s;
    }

    @media (min-width: 768px) {
        .counter-number {
            font-size: 1.2rem;
        }
    }

    .counter-number:hover {
        color: var(--primary-gradient);
        transform: scale(1.1);
    }

    /* Boutons améliorés */
    .btn-action {
        padding: 0.4rem 0.8rem;
        border-radius: 50px;
        font-weight: 500;
        transition: all 0.3s;
        border: none;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        font-size: 0.7rem;
    }

    @media (min-width: 768px) {
        .btn-action {
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
        }
    }

    .btn-action:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    }

    .btn-back {
        background: rgba(255,255,255,0.2);
        color: white;
        border: 1px solid rgba(255,255,255,0.3);
        backdrop-filter: blur(5px);
    }

    .btn-back:hover {
        background: rgba(255,255,255,0.3);
        color: white;
        border-color: rgba(255,255,255,0.5);
        transform: translateX(-3px);
    }

    .btn-back i {
        transition: transform 0.3s;
    }

    .btn-back:hover i {
        transform: translateX(-3px);
    }

    .btn-edit {
        background: white;
        color: #667eea;
    }

    .btn-edit:hover {
        background: var(--primary-gradient);
        color: white;
    }

    .btn-history {
        background: var(--info-gradient);
        color: white;
    }

    /* Carte Leaflet améliorée */
    #map {
        border-radius: 0.5rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: all 0.3s;
        height: 150px;
    }

    @media (min-width: 768px) {
        #map {
            height: 180px;
        }
    }

    #map:hover {
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }

    /* Animations d'entrée */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animated-card {
        animation: fadeInUp 0.6s ease-out forwards;
        opacity: 0;
    }

    .animated-card:nth-child(1) { animation-delay: 0.1s; }
    .animated-card:nth-child(2) { animation-delay: 0.2s; }
    .animated-card:nth-child(3) { animation-delay: 0.3s; }
    .animated-card:nth-child(4) { animation-delay: 0.4s; }
    .animated-card:nth-child(5) { animation-delay: 0.5s; }

    /* Mini cartes de statistiques */
    .stat-mini-card {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border-radius: 1rem;
        padding: 0.75rem;
        text-align: center;
        transition: all 0.3s;
    }

    @media (min-width: 768px) {
        .stat-mini-card {
            padding: 1rem;
        }
    }

    .stat-mini-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .stat-mini-icon {
        font-size: 1.5rem;
        margin-bottom: 0.25rem;
    }

    @media (min-width: 768px) {
        .stat-mini-icon {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }
    }

    .stat-mini-value {
        font-size: 1.1rem;
        font-weight: bold;
        color: #212529;
    }

    @media (min-width: 768px) {
        .stat-mini-value {
            font-size: 1.5rem;
        }
    }

    .stat-mini-label {
        font-size: 0.65rem;
        color: #6c757d;
    }

    @media (min-width: 768px) {
        .stat-mini-label {
            font-size: 0.85rem;
        }
    }

    /* Badge d'évolution */
    .evolution-badge {
        padding: 0.15rem 0.3rem;
        border-radius: 50px;
        font-size: 0.55rem;
        font-weight: 600;
        display: inline-block;
        margin-top: 0.25rem;
    }

    @media (min-width: 768px) {
        .evolution-badge {
            padding: 0.25rem 0.5rem;
            font-size: 0.75rem;
        }
    }

    .evolution-up {
        background: #d4edda;
        color: #155724;
    }

    .evolution-down {
        background: #f8d7da;
        color: #721c24;
    }

    .evolution-stable {
        background: #e2e3e5;
        color: #383d41;
    }

    /* Barre de progression personnalisée */
    .progress {
        background-color: #e9ecef;
        border-radius: 4px;
        overflow: hidden;
    }

    .progress-bar {
        transition: width 0.6s ease;
    }

    /* ========================================
       RESPONSIVE - MOBILE
    ======================================== */
    
    /* Mobile (< 576px) */
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 6px !important;
            padding-right: 6px !important;
        }
        
        .breadcrumb {
            font-size: 0.6rem !important;
        }
        .breadcrumb-item a {
            font-size: 0.6rem !important;
        }
        
        .display-4 {
            font-size: 1.5rem !important;
        }
        .h1, .h3, .h4, .h5 {
            font-size: 0.9rem !important;
        }
        .text-muted {
            font-size: 0.65rem !important;
        }
        
        .company-header {
            padding: 0.75rem !important;
            border-radius: 1rem !important;
        }
        .company-header .row {
            gap: 0.5rem !important;
        }
        .company-header .col-auto {
            text-align: center !important;
            width: 100% !important;
        }
        .company-header .col {
            width: 100% !important;
            text-align: center !important;
        }
        .company-header .col-auto:last-child {
            width: 100% !important;
        }
        .company-header .d-flex.gap-2 {
            justify-content: center !important;
            flex-wrap: wrap !important;
        }
        
        .badge-custom {
            font-size: 0.55rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .status-badge, .plan-badge {
            font-size: 0.55rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .role-badge {
            font-size: 0.5rem !important;
            padding: 0.1rem 0.3rem !important;
        }
        
        .btn-action {
            font-size: 0.55rem !important;
            padding: 0.2rem 0.4rem !important;
        }
        .btn-action i {
            font-size: 0.55rem !important;
        }
        
        .stat-mini-card {
            padding: 0.5rem !important;
        }
        .stat-mini-value {
            font-size: 0.9rem !important;
        }
        .stat-mini-icon {
            font-size: 1.2rem !important;
        }
        .stat-mini-label {
            font-size: 0.55rem !important;
        }
        
        .info-card .card-body {
            padding: 0.5rem !important;
        }
        .info-card .card-title {
            font-size: 0.75rem !important;
        }
        .info-card .d-flex.align-items-center {
            gap: 0.5rem !important;
        }
        .info-card .bg-opacity-10.p-2.rounded-circle {
            width: 28px !important;
            height: 28px !important;
            padding: 0.2rem !important;
        }
        .info-card .bg-opacity-10.p-2.rounded-circle i {
            font-size: 0.8rem !important;
        }
        
        .role-card .card-body {
            padding: 0.5rem !important;
        }
        .role-count {
            font-size: 1rem !important;
        }
        
        .feature-badge {
            font-size: 0.55rem !important;
            padding: 0.2rem 0.4rem !important;
        }
        
        .subscriptions-table td {
            padding: 0.3rem 0.3rem !important;
            font-size: 0.6rem !important;
        }
        
        .alert-trial {
            font-size: 0.65rem !important;
            padding: 0.4rem 0.6rem !important;
        }
        
        .progress {
            height: 4px !important;
        }
        .usage-progress {
            height: 4px !important;
        }
        
        .counter-number {
            font-size: 0.8rem !important;
        }
        
        .evolution-badge {
            font-size: 0.45rem !important;
            padding: 0.1rem 0.2rem !important;
        }
        
        #map {
            height: 120px !important;
        }
        
        .mt-3, .mt-4 {
            margin-top: 0.5rem !important;
        }
        .mb-3, .mb-4 {
            margin-bottom: 0.5rem !important;
        }
        .row.g-3, .row.g-4 {
            --bs-gutter-y: 0.5rem !important;
            --bs-gutter-x: 0.5rem !important;
        }
        
        .card-header {
            padding: 0.4rem 0.6rem !important;
        }
        .card-header h5 {
            font-size: 0.75rem !important;
        }
        .card-header .badge {
            font-size: 0.5rem !important;
            padding: 0.1rem 0.3rem !important;
        }
        .card-body {
            padding: 0.4rem 0.6rem !important;
        }
        
        .d-flex.gap-3 {
            gap: 0.25rem !important;
        }
        .d-flex.gap-4 {
            gap: 0.5rem !important;
        }
        
        .table-responsive {
            font-size: 0.6rem !important;
        }
        
        /* Désactiver hover sur mobile */
        .stat-mini-card:hover {
            transform: none !important;
        }
        .info-card:hover {
            transform: none !important;
        }
        .role-card:hover {
            transform: none !important;
        }
        .feature-badge:hover {
            transform: none !important;
        }
        .btn-action:hover {
            transform: none !important;
        }
        .badge-custom:hover {
            transform: none !important;
        }
        .company-logo-large:hover {
            transform: none !important;
        }
        .company-initials-large:hover {
            transform: none !important;
        }
        .counter-number:hover {
            transform: none !important;
        }
    }

    /* Tablette */
    @media (min-width: 577px) and (max-width: 768px) {
        .company-header {
            padding: 1.5rem !important;
        }
        .display-4 {
            font-size: 2rem !important;
        }
        
        .btn-action {
            font-size: 0.75rem !important;
            padding: 0.3rem 0.6rem !important;
        }
        
        .stat-mini-card {
            padding: 0.75rem !important;
        }
        .stat-mini-value {
            font-size: 1.1rem !important;
        }
        
        .info-card .card-body {
            padding: 1rem !important;
        }
        
        .role-card .card-body {
            padding: 1rem !important;
        }
        
        .feature-badge {
            font-size: 0.75rem !important;
            padding: 0.3rem 0.6rem !important;
        }
        
        .subscriptions-table td {
            padding: 0.5rem 0.5rem !important;
            font-size: 0.75rem !important;
        }
        
        #map {
            height: 150px !important;
        }
        
        .row.g-3, .row.g-4 {
            --bs-gutter-y: 0.75rem !important;
            --bs-gutter-x: 0.75rem !important;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 943
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

        // line 944
        yield "<div class=\"container-fluid px-2 px-md-4 py-2 py-md-4\">
    <!-- En-tête avec navigation -->
    <nav aria-label=\"breadcrumb\" class=\"mb-3 mb-md-4\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item small\">
                <a href=\"";
        // line 949
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_index");
        yield "\" class=\"text-decoration-none\">
                    <i class=\"bi bi-building me-1\"></i>
                    Entreprises
                </a>
            </li>
            <li class=\"breadcrumb-item active small\" aria-current=\"page\">
                ";
        // line 955
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 955, $this->source); })()), "companyName", [], "any", false, false, false, 955), 0, 20), "html", null, true);
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 955, $this->source); })()), "companyName", [], "any", false, false, false, 955)) > 20)) {
            yield "...";
        }
        // line 956
        yield "            </li>
        </ol>
    </nav>

    <!-- Header entreprise amélioré -->
    <div class=\"company-header animated-card\">
        <div class=\"row align-items-center\">
            <div class=\"col-12 col-md-auto text-center text-md-start\">
                ";
        // line 964
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 964, $this->source); })()), "logo", [], "any", false, false, false, 964)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 965
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 965, $this->source); })()), "logo", [], "any", false, false, false, 965))), "html", null, true);
            yield "\" 
                         alt=\"";
            // line 966
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 966, $this->source); })()), "companyName", [], "any", false, false, false, 966), "html", null, true);
            yield "\" 
                         class=\"company-logo-large\">
                ";
        } else {
            // line 969
            yield "                    <div class=\"company-initials-large mx-auto mx-md-0\">
                        ";
            // line 970
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 970, $this->source); })()), "companyName", [], "any", false, false, false, 970))), "html", null, true);
            yield "
                    </div>
                ";
        }
        // line 973
        yield "            </div>
            <div class=\"col-12 col-md text-center text-md-start\">
                <h1 class=\"display-4 mb-1 mb-md-2 fw-bold\">";
        // line 975
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 975, $this->source); })()), "companyName", [], "any", false, false, false, 975), "html", null, true);
        yield "</h1>
                <div class=\"d-flex gap-1 gap-md-2 flex-wrap justify-content-center justify-content-md-start\">
                    <span class=\"badge badge-custom bg-white text-dark\">
                        <i class=\"bi bi-hash me-1\"></i>
                        #";
        // line 979
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 979, $this->source); })()), "subscriptionNumber", [], "any", false, false, false, 979), "html", null, true);
        yield "
                    </span>
                    <span class=\"badge badge-custom bg-white text-dark\">
                        <i class=\"bi bi-tag me-1\"></i>
                        ";
        // line 983
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 983, $this->source); })()), "companyType", [], "any", false, false, false, 983)), "html", null, true);
        yield "
                    </span>
                    
                    <!-- BADGE STATUT -->
                    ";
        // line 987
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 987, $this->source); })()), "hmaActive", [], "any", false, false, false, 987)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 988
            yield "                        <span class=\"badge status-active status-badge\">
                            <i class=\"bi bi-check-circle me-1\"></i>
                            Active
                        </span>
                    ";
        } else {
            // line 993
            yield "                        <span class=\"badge status-inactive status-badge\">
                            <i class=\"bi bi-x-circle me-1\"></i>
                            Désactivée
                        </span>
                    ";
        }
        // line 998
        yield "                    
                    <!-- BADGE PLAN -->
                    ";
        // line 1000
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1000, $this->source); })()), "currentPlan", [], "any", false, false, false, 1000) == "trial")) {
            // line 1001
            yield "                        <span class=\"badge plan-trial plan-badge\">
                            <i class=\"bi bi-hourglass-split me-1\"></i>
                            ";
            // line 1003
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1003, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 1003), "html", null, true);
            yield "
                        </span>
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 1005
(isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1005, $this->source); })()), "currentPlan", [], "any", false, false, false, 1005) == "freemium")) {
            // line 1006
            yield "                        <span class=\"badge plan-freemium plan-badge\">
                            <i class=\"bi bi-gift me-1\"></i>
                            ";
            // line 1008
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1008, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 1008), "html", null, true);
            yield "
                        </span>
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 1010
(isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1010, $this->source); })()), "currentPlan", [], "any", false, false, false, 1010) == "basic")) {
            // line 1011
            yield "                        <span class=\"badge plan-basic plan-badge\">
                            <i class=\"bi bi-rocket me-1\"></i>
                            ";
            // line 1013
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1013, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 1013), "html", null, true);
            yield "
                        </span>
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 1015
(isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1015, $this->source); })()), "currentPlan", [], "any", false, false, false, 1015) == "premium")) {
            // line 1016
            yield "                        <span class=\"badge plan-premium plan-badge\">
                            <i class=\"bi bi-stars me-1\"></i>
                            ";
            // line 1018
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1018, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 1018), "html", null, true);
            yield "
                        </span>
                    ";
        } else {
            // line 1021
            yield "                        <span class=\"badge bg-secondary plan-badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1021, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 1021), "html", null, true);
            yield "</span>
                    ";
        }
        // line 1023
        yield "                    
                    <!-- BADGE ABONNEMENT ACTIF -->
                    ";
        // line 1025
        if ((($tmp = (isset($context["has_active_subscription"]) || array_key_exists("has_active_subscription", $context) ? $context["has_active_subscription"] : (function () { throw new RuntimeError('Variable "has_active_subscription" does not exist.', 1025, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1026
            yield "                        <span class=\"badge status-active status-badge\">
                            <i class=\"bi bi-check-circle me-1\"></i>
                            Abonnement actif
                        </span>
                    ";
        } else {
            // line 1031
            yield "                        <span class=\"badge status-trial status-badge\">
                            <i class=\"bi bi-exclamation-triangle me-1\"></i>
                            Sans abonnement actif
                        </span>
                    ";
        }
        // line 1036
        yield "                </div>
                <!-- Informations de connexion de l'entreprise -->
                ";
        // line 1038
        $context["lastLogin"] = null;
        // line 1039
        yield "                ";
        $context["online"] = false;
        // line 1040
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1040, $this->source); })()), "users", [], "any", false, false, false, 1040));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 1041
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "loginAt", [], "any", false, false, false, 1041) && ((null === (isset($context["lastLogin"]) || array_key_exists("lastLogin", $context) ? $context["lastLogin"] : (function () { throw new RuntimeError('Variable "lastLogin" does not exist.', 1041, $this->source); })())) || (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "loginAt", [], "any", false, false, false, 1041) > (isset($context["lastLogin"]) || array_key_exists("lastLogin", $context) ? $context["lastLogin"] : (function () { throw new RuntimeError('Variable "lastLogin" does not exist.', 1041, $this->source); })()))))) {
                // line 1042
                yield "                        ";
                $context["lastLogin"] = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "loginAt", [], "any", false, false, false, 1042);
                // line 1043
                yield "                    ";
            }
            // line 1044
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "online", [], "any", false, false, false, 1044)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1045
                yield "                        ";
                $context["online"] = true;
                // line 1046
                yield "                    ";
            }
            // line 1047
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1048
        yield "
                <div class=\"mt-2 mt-md-3 d-flex flex-column flex-md-row align-items-center gap-1 gap-md-3 text-white-50\">
                    <div class=\"small\" style=\"font-size:0.7rem;\">
                        <i class=\"bi bi-clock-history me-1\"></i>
                        Dernière connexion : 
                        ";
        // line 1053
        if ((($tmp = (isset($context["lastLogin"]) || array_key_exists("lastLogin", $context) ? $context["lastLogin"] : (function () { throw new RuntimeError('Variable "lastLogin" does not exist.', 1053, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1054
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["lastLogin"]) || array_key_exists("lastLogin", $context) ? $context["lastLogin"] : (function () { throw new RuntimeError('Variable "lastLogin" does not exist.', 1054, $this->source); })()), "d/m/Y H:i"), "html", null, true);
            yield "
                        ";
        } else {
            // line 1056
            yield "                            Jamais
                        ";
        }
        // line 1058
        yield "                    </div>
                    <div class=\"small\" style=\"font-size:0.7rem;\">
                        <i class=\"bi bi-circle-fill me-1 ";
        // line 1060
        if ((($tmp = (isset($context["online"]) || array_key_exists("online", $context) ? $context["online"] : (function () { throw new RuntimeError('Variable "online" does not exist.', 1060, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "text-success";
        } else {
            yield "text-secondary";
        }
        yield "\" style=\"font-size: 0.6rem;\"></i>
                        ";
        // line 1061
        yield (((($tmp = (isset($context["online"]) || array_key_exists("online", $context) ? $context["online"] : (function () { throw new RuntimeError('Variable "online" does not exist.', 1061, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("En ligne") : ("Hors ligne"));
        yield "
                    </div>
                </div>
            </div>
            <div class=\"col-12 col-md-auto text-center text-md-end\">
                <div class=\"d-flex flex-wrap gap-1 gap-md-2 justify-content-center justify-content-md-end\">
                    <a href=\"";
        // line 1067
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_index");
        yield "\" 
                       class=\"btn btn-action btn-back\"
                       title=\"Retour à la liste des entreprises\">
                        <i class=\"bi bi-arrow-left me-1\"></i>
                        Retour
                    </a>
                    
                    <a href=\"";
        // line 1074
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1074, $this->source); })()), "id", [], "any", false, false, false, 1074)]), "html", null, true);
        yield "\" 
                       class=\"btn btn-action btn-edit\"
                       title=\"Modifier cette entreprise\">
                        <i class=\"bi bi-pencil me-1\"></i>
                        Modifier
                    </a>
                    
                    <a href=\"";
        // line 1081
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_subscriptions", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1081, $this->source); })()), "id", [], "any", false, false, false, 1081)]), "html", null, true);
        yield "\" 
                       class=\"btn btn-action btn-history\"
                       title=\"Voir l'historique des abonnements\">
                        <i class=\"bi bi-clock-history me-1\"></i>
                        Historique
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mini statistiques rapides -->
    <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
        <div class=\"col-6 col-md-3\">
            <div class=\"stat-mini-card\">
                <div class=\"stat-mini-icon text-primary\">
                    <i class=\"bi bi-box\"></i>
                </div>
                <div class=\"stat-mini-value\">";
        // line 1099
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_products"]) || array_key_exists("total_products", $context) ? $context["total_products"] : (function () { throw new RuntimeError('Variable "total_products" does not exist.', 1099, $this->source); })()), "html", null, true);
        yield "</div>
                <div class=\"stat-mini-label\">Produits</div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"stat-mini-card\">
                <div class=\"stat-mini-icon text-success\">
                    <i class=\"bi bi-cart\"></i>
                </div>
                <div class=\"stat-mini-value\">";
        // line 1108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_orders"]) || array_key_exists("total_orders", $context) ? $context["total_orders"] : (function () { throw new RuntimeError('Variable "total_orders" does not exist.', 1108, $this->source); })()), "html", null, true);
        yield "</div>
                <div class=\"stat-mini-label\">Commandes</div>
                ";
        // line 1110
        if ((array_key_exists("orders_evolution", $context) && ((isset($context["orders_evolution"]) || array_key_exists("orders_evolution", $context) ? $context["orders_evolution"] : (function () { throw new RuntimeError('Variable "orders_evolution" does not exist.', 1110, $this->source); })()) != 0))) {
            // line 1111
            yield "                    <span class=\"evolution-badge ";
            yield ((((isset($context["orders_evolution"]) || array_key_exists("orders_evolution", $context) ? $context["orders_evolution"] : (function () { throw new RuntimeError('Variable "orders_evolution" does not exist.', 1111, $this->source); })()) > 0)) ? ("evolution-up") : ("evolution-down"));
            yield " mt-1\">
                        <i class=\"bi bi-arrow-";
            // line 1112
            yield ((((isset($context["orders_evolution"]) || array_key_exists("orders_evolution", $context) ? $context["orders_evolution"] : (function () { throw new RuntimeError('Variable "orders_evolution" does not exist.', 1112, $this->source); })()) > 0)) ? ("up") : ("down"));
            yield "\"></i>
                        ";
            // line 1113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(abs((isset($context["orders_evolution"]) || array_key_exists("orders_evolution", $context) ? $context["orders_evolution"] : (function () { throw new RuntimeError('Variable "orders_evolution" does not exist.', 1113, $this->source); })())), "html", null, true);
            yield "%
                    </span>
                ";
        }
        // line 1116
        yield "            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"stat-mini-card\">
                <div class=\"stat-mini-icon text-info\">
                    <i class=\"bi bi-tags\"></i>
                </div>
                <div class=\"stat-mini-value\">";
        // line 1123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_categories"]) || array_key_exists("total_categories", $context) ? $context["total_categories"] : (function () { throw new RuntimeError('Variable "total_categories" does not exist.', 1123, $this->source); })()), "html", null, true);
        yield "</div>
                <div class=\"stat-mini-label\">Catégories</div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"stat-mini-card\">
                <div class=\"stat-mini-icon text-warning\">
                    <i class=\"bi bi-truck\"></i>
                </div>
                <div class=\"stat-mini-value\">";
        // line 1132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_suppliers"]) || array_key_exists("total_suppliers", $context) ? $context["total_suppliers"] : (function () { throw new RuntimeError('Variable "total_suppliers" does not exist.', 1132, $this->source); })()), "html", null, true);
        yield "</div>
                <div class=\"stat-mini-label\">Fournisseurs</div>
            </div>
        </div>
    </div>

    <!-- Cartes d'information améliorées -->
    <div class=\"row g-2 g-md-4 mb-3 mb-md-4\">
        <!-- Contact -->
        <div class=\"col-12 col-md-4\">
            <div class=\"card info-card animated-card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"bi bi-envelope me-2 text-primary animated-icon\"></i>
                        Contact
                    </h5>
                    <hr>
                    <div class=\"d-flex align-items-center mb-2 mb-md-3\">
                        <div class=\"bg-primary bg-opacity-10 p-2 rounded-circle me-2 me-md-3\">
                            <i class=\"bi bi-envelope text-primary\"></i>
                        </div>
                        <div>
                            <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">Email</small>
                            <a href=\"mailto:";
        // line 1155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1155, $this->source); })()), "email", [], "any", false, false, false, 1155), "html", null, true);
        yield "\" class=\"text-decoration-none text-dark fw-bold small\">
                                ";
        // line 1156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1156, $this->source); })()), "email", [], "any", false, false, false, 1156), 0, 25), "html", null, true);
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1156, $this->source); })()), "email", [], "any", false, false, false, 1156)) > 25)) {
            yield "...";
        }
        // line 1157
        yield "                            </a>
                        </div>
                    </div>
                    
                    ";
        // line 1161
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1161, $this->source); })()), "phone", [], "any", false, false, false, 1161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1162
            yield "                        <div class=\"d-flex align-items-center mb-2 mb-md-3\">
                            <div class=\"bg-success bg-opacity-10 p-2 rounded-circle me-2 me-md-3\">
                                <i class=\"bi bi-telephone text-success\"></i>
                            </div>
                            <div>
                                <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">Téléphone</small>
                                <a href=\"tel:";
            // line 1168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1168, $this->source); })()), "phone", [], "any", false, false, false, 1168), "html", null, true);
            yield "\" class=\"text-decoration-none text-dark fw-bold small\">
                                    ";
            // line 1169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1169, $this->source); })()), "phone", [], "any", false, false, false, 1169), "html", null, true);
            yield "
                                </a>
                            </div>
                        </div>
                    ";
        }
        // line 1174
        yield "                    
                    ";
        // line 1175
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1175, $this->source); })()), "address", [], "any", false, false, false, 1175)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1176
            yield "                        <div class=\"d-flex align-items-center\">
                            <div class=\"bg-info bg-opacity-10 p-2 rounded-circle me-2 me-md-3\">
                                <i class=\"bi bi-geo-alt text-info\"></i>
                            </div>
                            <div>
                                <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">Adresse</small>
                                <span class=\"text-dark small\">
                                    ";
            // line 1183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1183, $this->source); })()), "address", [], "any", false, false, false, 1183), 0, 30), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1183, $this->source); })()), "address", [], "any", false, false, false, 1183)) > 30)) {
                yield "...";
            }
            yield "<br>
                                    ";
            // line 1184
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1184, $this->source); })()), "city", [], "any", false, false, false, 1184)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1184, $this->source); })()), "city", [], "any", false, false, false, 1184), "html", null, true);
                yield ", ";
            }
            // line 1185
            yield "                                    ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "country", [], "any", true, true, false, 1185) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1185, $this->source); })()), "country", [], "any", false, false, false, 1185)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1185, $this->source); })()), "country", [], "any", false, false, false, 1185), "html", null, true)) : ("Sénégal"));
            yield "
                                </span>
                            </div>
                        </div>
                    ";
        }
        // line 1190
        yield "                </div>
            </div>
        </div>

        <!-- Dates clés améliorées -->
        <div class=\"col-12 col-md-4\">
            <div class=\"card info-card animated-card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"bi bi-calendar me-2 text-primary animated-icon\"></i>
                        Dates clés
                    </h5>
                    <hr>
                    
                    <div class=\"row g-2 g-md-3\">
                        <div class=\"col-6\">
                            <div class=\"bg-light p-2 p-md-3 rounded-3 text-center\">
                                <small class=\"text-muted d-block mb-1\" style=\"font-size:0.5rem;\">Création</small>
                                <div class=\"fw-bold counter-number\" data-tooltip=\"Date de création\" style=\"font-size:0.7rem;\">
                                    <i class=\"bi bi-calendar-plus me-1 text-primary\"></i>
                                    ";
        // line 1210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["created_at"]) || array_key_exists("created_at", $context) ? $context["created_at"] : (function () { throw new RuntimeError('Variable "created_at" does not exist.', 1210, $this->source); })()), "d/m/Y"), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"bg-light p-2 p-md-3 rounded-3 text-center\">
                                <small class=\"text-muted d-block mb-1\" style=\"font-size:0.5rem;\">Activation</small>
                                <div class=\"fw-bold counter-number\" data-tooltip=\"Date d'activation\" style=\"font-size:0.7rem;\">
                                    <i class=\"bi bi-calendar-check me-1 text-success\"></i>
                                    ";
        // line 1219
        yield (((($tmp = (isset($context["activated_at"]) || array_key_exists("activated_at", $context) ? $context["activated_at"] : (function () { throw new RuntimeError('Variable "activated_at" does not exist.', 1219, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["activated_at"]) || array_key_exists("activated_at", $context) ? $context["activated_at"] : (function () { throw new RuntimeError('Variable "activated_at" does not exist.', 1219, $this->source); })()), "d/m/Y"), "html", null, true)) : ("-"));
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr class=\"my-2 my-md-3\">
                    
                    <div class=\"row g-2 g-md-3\">
                        <div class=\"col-6\">
                            <div class=\"bg-light p-2 p-md-3 rounded-3 text-center\">
                                <small class=\"text-muted d-block mb-1\" style=\"font-size:0.5rem;\">Début abonnement</small>
                                <div class=\"fw-bold counter-number\" data-tooltip=\"Début de l'abonnement\" style=\"font-size:0.7rem;\">
                                    <i class=\"bi bi-play-circle me-1 text-info\"></i>
                                    ";
        // line 1233
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1233, $this->source); })()), "subscriptionStartAt", [], "any", false, false, false, 1233)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1233, $this->source); })()), "subscriptionStartAt", [], "any", false, false, false, 1233), "d/m/Y"), "html", null, true)) : ("-"));
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"bg-light p-2 p-md-3 rounded-3 text-center\">
                                <small class=\"text-muted d-block mb-1\" style=\"font-size:0.5rem;\">Fin abonnement</small>
                                <div class=\"fw-bold counter-number ";
        // line 1240
        yield ((((isset($context["subscription_ends_at"]) || array_key_exists("subscription_ends_at", $context) ? $context["subscription_ends_at"] : (function () { throw new RuntimeError('Variable "subscription_ends_at" does not exist.', 1240, $this->source); })()) && ((isset($context["subscription_ends_at"]) || array_key_exists("subscription_ends_at", $context) ? $context["subscription_ends_at"] : (function () { throw new RuntimeError('Variable "subscription_ends_at" does not exist.', 1240, $this->source); })()) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) ? ("text-danger") : (""));
        yield "\" 
                                     data-tooltip=\"Fin de l'abonnement\" style=\"font-size:0.7rem;\">
                                    <i class=\"bi bi-stop-circle me-1 ";
        // line 1242
        yield ((((isset($context["subscription_ends_at"]) || array_key_exists("subscription_ends_at", $context) ? $context["subscription_ends_at"] : (function () { throw new RuntimeError('Variable "subscription_ends_at" does not exist.', 1242, $this->source); })()) && ((isset($context["subscription_ends_at"]) || array_key_exists("subscription_ends_at", $context) ? $context["subscription_ends_at"] : (function () { throw new RuntimeError('Variable "subscription_ends_at" does not exist.', 1242, $this->source); })()) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) ? ("text-danger") : ("text-warning"));
        yield "\"></i>
                                    ";
        // line 1243
        yield (((($tmp = (isset($context["subscription_ends_at"]) || array_key_exists("subscription_ends_at", $context) ? $context["subscription_ends_at"] : (function () { throw new RuntimeError('Variable "subscription_ends_at" does not exist.', 1243, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["subscription_ends_at"]) || array_key_exists("subscription_ends_at", $context) ? $context["subscription_ends_at"] : (function () { throw new RuntimeError('Variable "subscription_ends_at" does not exist.', 1243, $this->source); })()), "d/m/Y"), "html", null, true)) : ("-"));
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Alerte essai -->
                    ";
        // line 1250
        if ((($tmp = (isset($context["trial_ends_at"]) || array_key_exists("trial_ends_at", $context) ? $context["trial_ends_at"] : (function () { throw new RuntimeError('Variable "trial_ends_at" does not exist.', 1250, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1251
            yield "                        <div class=\"alert-trial mt-2 mt-md-3\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"me-2 me-md-3\">
                                    <i class=\"bi bi-hourglass-split fs-5\"></i>
                                </div>
                                <div>
                                    <strong class=\"small\">Période d'essai</strong><br>
                                    <small style=\"font-size:0.6rem;\">
                                        Expire le ";
            // line 1259
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["trial_ends_at"]) || array_key_exists("trial_ends_at", $context) ? $context["trial_ends_at"] : (function () { throw new RuntimeError('Variable "trial_ends_at" does not exist.', 1259, $this->source); })()), "d/m/Y"), "html", null, true);
            yield "
                                        (";
            // line 1260
            yield $this->env->getRuntime('Knp\Bundle\TimeBundle\DateTimeFormatter')->formatDiff((isset($context["trial_ends_at"]) || array_key_exists("trial_ends_at", $context) ? $context["trial_ends_at"] : (function () { throw new RuntimeError('Variable "trial_ends_at" does not exist.', 1260, $this->source); })()));
            yield ")
                                    </small>
                                </div>
                                <div class=\"ms-auto\">
                                    <span class=\"badge bg-dark\" style=\"font-size:0.55rem;\">
                                        ";
            // line 1265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["trial_ends_at"]) || array_key_exists("trial_ends_at", $context) ? $context["trial_ends_at"] : (function () { throw new RuntimeError('Variable "trial_ends_at" does not exist.', 1265, $this->source); })()), "d/m/Y"), "html", null, true);
            yield "
                                    </span>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 1271
        yield "
                    <!-- Alerte expiration abonnement -->
                    ";
        // line 1273
        if (((array_key_exists("days_until_expiration", $context) &&  !(null === (isset($context["days_until_expiration"]) || array_key_exists("days_until_expiration", $context) ? $context["days_until_expiration"] : (function () { throw new RuntimeError('Variable "days_until_expiration" does not exist.', 1273, $this->source); })()))) && ((isset($context["days_until_expiration"]) || array_key_exists("days_until_expiration", $context) ? $context["days_until_expiration"] : (function () { throw new RuntimeError('Variable "days_until_expiration" does not exist.', 1273, $this->source); })()) <= 30))) {
            // line 1274
            yield "                        <div class=\"alert alert-warning mt-2 py-1 px-2\" style=\"font-size:0.65rem;\">
                            <i class=\"bi bi-exclamation-triangle me-2\"></i>
                            <strong>Attention :</strong> Abonnement expire dans ";
            // line 1276
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["days_until_expiration"]) || array_key_exists("days_until_expiration", $context) ? $context["days_until_expiration"] : (function () { throw new RuntimeError('Variable "days_until_expiration" does not exist.', 1276, $this->source); })()), "html", null, true);
            yield " jours
                        </div>
                    ";
        }
        // line 1279
        yield "                </div>
            </div>
        </div>

        <!-- Localisation -->
        <div class=\"col-12 col-md-4\">
            <div class=\"card info-card animated-card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"bi bi-geo me-2 text-primary animated-icon\"></i>
                        Localisation
                    </h5>
                    <hr>
                    ";
        // line 1292
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1292, $this->source); })()), "latitude", [], "any", false, false, false, 1292) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1292, $this->source); })()), "longitude", [], "any", false, false, false, 1292))) {
            // line 1293
            yield "                        <div id=\"map\"></div>
                        <div class=\"d-flex justify-content-between mt-2 mt-md-3\">
                            <small class=\"text-muted\" style=\"font-size:0.55rem;\">
                                <i class=\"bi bi-geo-alt me-1\"></i>
                                Lat: ";
            // line 1297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1297, $this->source); })()), "latitude", [], "any", false, false, false, 1297), 0, 8), "html", null, true);
            yield "
                            </small>
                            <small class=\"text-muted\" style=\"font-size:0.55rem;\">
                                <i class=\"bi bi-geo-alt me-1\"></i>
                                Long: ";
            // line 1301
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1301, $this->source); })()), "longitude", [], "any", false, false, false, 1301), 0, 8), "html", null, true);
            yield "
                            </small>
                        </div>
                    ";
        } else {
            // line 1305
            yield "                        <div class=\"text-center py-3 py-md-4\">
                            <div class=\"mb-2 mb-md-3\">
                                <i class=\"bi bi-geo-alt fs-1 text-muted\"></i>
                            </div>
                            <h6 class=\"text-muted small\">Aucune localisation</h6>
                            <p class=\"text-muted small\" style=\"font-size:0.6rem;\">Cette entreprise n'a pas renseigné de coordonnées GPS.</p>
                        </div>
                    ";
        }
        // line 1313
        yield "                </div>
            </div>
        </div>
    </div>

    <!-- Statistiques d'utilisation améliorées -->
    <div class=\"row g-2 g-md-4 mb-3 mb-md-4\">
        <div class=\"col-12 col-md-6\">
            <div class=\"card animated-card\">
                <div class=\"card-header bg-white border-0 pt-3 pt-md-4\">
                    <h5 class=\"mb-0 fs-6 fs-md-5\">
                        <i class=\"bi bi-bar-chart me-2 text-primary\"></i>
                        Utilisation des ressources
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <!-- Produits -->
                    <div class=\"mb-2 mb-md-4\">
                        <div class=\"d-flex justify-content-between align-items-center mb-1\">
                            <span class=\"fw-semibold small\">
                                <i class=\"bi bi-box me-2 text-primary\"></i>
                                Produits
                            </span>
                            <span class=\"counter-number\" style=\"font-size:0.7rem;\">
                                <strong>";
        // line 1337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1337, $this->source); })()), "productCount", [], "any", false, false, false, 1337), "html", null, true);
        yield "</strong>
                                <small class=\"text-muted\" style=\"font-size:0.5rem;\">/ ";
        // line 1338
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 1338, $this->source); })()), "products", [], "any", false, false, false, 1338), "limit", [], "any", false, false, false, 1338) == Twig\Extension\CoreExtension::constant("PHP_INT_MAX"))) ? ("∞") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 1338, $this->source); })()), "products", [], "any", false, false, false, 1338), "limit", [], "any", false, false, false, 1338), "html", null, true)));
        yield "</small>
                            </span>
                        </div>
                        <div class=\"progress usage-progress\">
                            <div class=\"progress-bar bg-primary\" 
                                 style=\"width: ";
        // line 1343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 1343, $this->source); })()), "products", [], "any", false, false, false, 1343), "percentage", [], "any", false, false, false, 1343), "html", null, true);
        yield "%\">
                            </div>
                        </div>
                        <small class=\"text-muted mt-1 d-block\" style=\"font-size:0.5rem;\">
                            <i class=\"bi bi-arrow-right me-1\"></i>
                            ";
        // line 1348
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 1348, $this->source); })()), "products", [], "any", false, false, false, 1348), "remaining", [], "any", false, false, false, 1348) == Twig\Extension\CoreExtension::constant("PHP_INT_MAX"))) ? ("Illimité") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 1348, $this->source); })()), "products", [], "any", false, false, false, 1348), "remaining", [], "any", false, false, false, 1348) . " restants"), "html", null, true)));
        yield "
                        </small>
                    </div>

                    <!-- Catégories -->
                    <div class=\"mb-2 mb-md-4\">
                        <div class=\"d-flex justify-content-between align-items-center mb-1\">
                            <span class=\"fw-semibold small\">
                                <i class=\"bi bi-tags me-2 text-success\"></i>
                                Catégories
                            </span>
                            <span class=\"counter-number\" style=\"font-size:0.7rem;\">
                                <strong>";
        // line 1360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1360, $this->source); })()), "categoryCount", [], "any", false, false, false, 1360), "html", null, true);
        yield "</strong>
                                <small class=\"text-muted\" style=\"font-size:0.5rem;\">/ ";
        // line 1361
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 1361, $this->source); })()), "categories", [], "any", false, false, false, 1361), "limit", [], "any", false, false, false, 1361) == Twig\Extension\CoreExtension::constant("PHP_INT_MAX"))) ? ("∞") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 1361, $this->source); })()), "categories", [], "any", false, false, false, 1361), "limit", [], "any", false, false, false, 1361), "html", null, true)));
        yield "</small>
                            </span>
                        </div>
                        <div class=\"progress usage-progress\">
                            <div class=\"progress-bar bg-success\" 
                                 style=\"width: ";
        // line 1366
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1366, $this->source); })()), "categoryCount", [], "any", false, false, false, 1366) / CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 1366, $this->source); })()), "categories", [], "any", false, false, false, 1366), "limit", [], "any", false, false, false, 1366)) * 100)), "html", null, true);
        yield "%\">
                            </div>
                        </div>
                    </div>

                    <!-- Fournisseurs -->
                    <div class=\"mb-2 mb-md-4\">
                        <div class=\"d-flex justify-content-between align-items-center mb-1\">
                            <span class=\"fw-semibold small\">
                                <i class=\"bi bi-truck me-2 text-warning\"></i>
                                Fournisseurs
                            </span>
                            <span class=\"counter-number\" style=\"font-size:0.7rem;\">
                                <strong>";
        // line 1379
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1379, $this->source); })()), "supplierCount", [], "any", false, false, false, 1379), "html", null, true);
        yield "</strong>
                                <small class=\"text-muted\" style=\"font-size:0.5rem;\">/ ";
        // line 1380
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 1380, $this->source); })()), "suppliers", [], "any", false, false, false, 1380), "limit", [], "any", false, false, false, 1380) == Twig\Extension\CoreExtension::constant("PHP_INT_MAX"))) ? ("∞") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 1380, $this->source); })()), "suppliers", [], "any", false, false, false, 1380), "limit", [], "any", false, false, false, 1380), "html", null, true)));
        yield "</small>
                            </span>
                        </div>
                        <div class=\"progress usage-progress\">
                            <div class=\"progress-bar bg-warning\" 
                                 style=\"width: ";
        // line 1385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1385, $this->source); })()), "supplierCount", [], "any", false, false, false, 1385) / CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 1385, $this->source); })()), "suppliers", [], "any", false, false, false, 1385), "limit", [], "any", false, false, false, 1385)) * 100)), "html", null, true);
        yield "%\">
                            </div>
                        </div>
                    </div>

                    <!-- Utilisateurs -->
                    <div class=\"mt-2 mt-md-4 pt-2 border-top\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <span class=\"fw-semibold small\">
                                <i class=\"bi bi-people me-2 text-info\"></i>
                                Utilisateurs
                            </span>
                            <span class=\"counter-number\" style=\"font-size:0.7rem;\">
                                <strong>";
        // line 1398
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_users_count"]) || array_key_exists("total_users_count", $context) ? $context["total_users_count"] : (function () { throw new RuntimeError('Variable "total_users_count" does not exist.', 1398, $this->source); })()), "html", null, true);
        yield "</strong>
                                <small class=\"text-muted\" style=\"font-size:0.5rem;\">total</small>
                            </span>
                        </div>
                        
                        <!-- Répartition des utilisateurs -->
                        <div class=\"d-flex justify-content-between mt-1 small\" style=\"font-size:0.5rem;\">
                            <span class=\"text-success\">
                                <i class=\"bi bi-person-check\"></i>
                                ";
        // line 1407
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active_users_count"]) || array_key_exists("active_users_count", $context) ? $context["active_users_count"] : (function () { throw new RuntimeError('Variable "active_users_count" does not exist.', 1407, $this->source); })()), "html", null, true);
        yield " actifs
                            </span>
                            <span class=\"text-warning\">
                                <i class=\"bi bi-person-exclamation\"></i>
                                ";
        // line 1411
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["out_of_quota_count"]) || array_key_exists("out_of_quota_count", $context) ? $context["out_of_quota_count"] : (function () { throw new RuntimeError('Variable "out_of_quota_count" does not exist.', 1411, $this->source); })()), "html", null, true);
        yield " hors quota
                            </span>
                            <span class=\"text-muted\">
                                <i class=\"bi bi-person-x\"></i>
                                ";
        // line 1415
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactive_by_admin_count"]) || array_key_exists("inactive_by_admin_count", $context) ? $context["inactive_by_admin_count"] : (function () { throw new RuntimeError('Variable "inactive_by_admin_count" does not exist.', 1415, $this->source); })()), "html", null, true);
        yield " désactivés
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fonctionnalités disponibles -->
        <div class=\"col-12 col-md-6\">
            <div class=\"card animated-card h-100\">
                <div class=\"card-header bg-white border-0 pt-3 pt-md-4\">
                    <h5 class=\"mb-0 fs-6 fs-md-5\">
                        <i class=\"bi bi-stars me-2 text-primary\"></i>
                        Fonctionnalités disponibles
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex flex-wrap gap-1 gap-md-2\">
                        ";
        // line 1434
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 1434, $this->source); })()), "features", [], "any", false, false, false, 1434));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 1435
            yield "                            <span class=\"feature-badge\">
                                <i class=\"bi bi-check-circle-fill text-success me-1\"></i>
                                ";
            // line 1437
            if (($context["feature"] == "all")) {
                // line 1438
                yield "                                    Toutes
                                ";
            } elseif ((            // line 1439
$context["feature"] == "basic_inventory")) {
                // line 1440
                yield "                                    Inventaire basique
                                ";
            } elseif ((            // line 1441
$context["feature"] == "basic_reports")) {
                // line 1442
                yield "                                    Rapports basiques
                                ";
            } elseif ((            // line 1443
$context["feature"] == "advanced_inventory")) {
                // line 1444
                yield "                                    Inventaire avancé
                                ";
            } elseif ((            // line 1445
$context["feature"] == "reports")) {
                // line 1446
                yield "                                    Rapports avancés
                                ";
            } elseif ((            // line 1447
$context["feature"] == "api_access")) {
                // line 1448
                yield "                                    Accès API
                                ";
            } elseif ((            // line 1449
$context["feature"] == "priority_support")) {
                // line 1450
                yield "                                    Support prioritaire
                                ";
            } elseif ((            // line 1451
$context["feature"] == "custom_domain")) {
                // line 1452
                yield "                                    Domaine personnalisé
                                ";
            } elseif ((            // line 1453
$context["feature"] == "white_label")) {
                // line 1454
                yield "                                    White Label
                                ";
            } else {
                // line 1456
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["feature"], ["_" => " "])), 0, 15), "html", null, true);
                yield "
                                ";
            }
            // line 1458
            yield "                            </span>
                        ";
            $context['_iterated'] = true;
        }
        // line 1459
        if (!$context['_iterated']) {
            // line 1460
            yield "                            <div class=\"text-center py-3 py-md-4 w-100\">
                                <i class=\"bi bi-exclamation-circle fs-1 text-muted mb-2\"></i>
                                <p class=\"text-muted mb-0 small\">Aucune fonctionnalité disponible</p>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1465
        yield "                    </div>

                    ";
        // line 1467
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 1467, $this->source); })()), "features", [], "any", false, false, false, 1467))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1468
            yield "                        <div class=\"mt-2 mt-md-4 p-2 p-md-3 bg-light rounded-3\">
                            <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-center gap-2\">
                                <div>
                                    <small class=\"text-muted d-block mb-1\" style=\"font-size:0.5rem;\">
                                        <i class=\"bi bi-info-circle me-1\"></i>
                                        Plan actuel
                                    </small>
                                    <!-- BADGE PLAN -->
                                    ";
            // line 1476
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1476, $this->source); })()), "currentPlan", [], "any", false, false, false, 1476) == "trial")) {
                // line 1477
                yield "                                        <span class=\"badge plan-trial plan-badge p-1 p-md-2\" style=\"font-size:0.55rem;\">
                                            <i class=\"bi bi-hourglass-split me-1\"></i>
                                            ";
                // line 1479
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1479, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 1479), "html", null, true);
                yield "
                                        </span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 1481
(isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1481, $this->source); })()), "currentPlan", [], "any", false, false, false, 1481) == "freemium")) {
                // line 1482
                yield "                                        <span class=\"badge plan-freemium plan-badge p-1 p-md-2\" style=\"font-size:0.55rem;\">
                                            <i class=\"bi bi-gift me-1\"></i>
                                            ";
                // line 1484
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1484, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 1484), "html", null, true);
                yield "
                                        </span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 1486
(isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1486, $this->source); })()), "currentPlan", [], "any", false, false, false, 1486) == "basic")) {
                // line 1487
                yield "                                        <span class=\"badge plan-basic plan-badge p-1 p-md-2\" style=\"font-size:0.55rem;\">
                                            <i class=\"bi bi-rocket me-1\"></i>
                                            ";
                // line 1489
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1489, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 1489), "html", null, true);
                yield "
                                        </span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 1491
(isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1491, $this->source); })()), "currentPlan", [], "any", false, false, false, 1491) == "premium")) {
                // line 1492
                yield "                                        <span class=\"badge plan-premium plan-badge p-1 p-md-2\" style=\"font-size:0.55rem;\">
                                            <i class=\"bi bi-stars me-1\"></i>
                                            ";
                // line 1494
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1494, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 1494), "html", null, true);
                yield "
                                        </span>
                                    ";
            } else {
                // line 1497
                yield "                                        <span class=\"badge bg-secondary plan-badge p-1 p-md-2\" style=\"font-size:0.55rem;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1497, $this->source); })()), "currentPlanLabel", [], "any", false, false, false, 1497), "html", null, true);
                yield "</span>
                                    ";
            }
            // line 1499
            yield "                                </div>
                                ";
            // line 1500
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 1500, $this->source); })()), "trial_days_remaining", [], "any", false, false, false, 1500) > 0)) {
                // line 1501
                yield "                                    <div class=\"text-warning small\" style=\"font-size:0.55rem;\">
                                        <i class=\"bi bi-hourglass-split me-1\"></i>
                                        ";
                // line 1503
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usage_stats"]) || array_key_exists("usage_stats", $context) ? $context["usage_stats"] : (function () { throw new RuntimeError('Variable "usage_stats" does not exist.', 1503, $this->source); })()), "trial_days_remaining", [], "any", false, false, false, 1503), "html", null, true);
                yield " jours restants
                                    </div>
                                ";
            }
            // line 1506
            yield "                            </div>
                        </div>
                    ";
        }
        // line 1509
        yield "                </div>
            </div>
        </div>
    </div>

    <!-- Statistiques par rôle améliorées avec statut -->
    <div class=\"row g-2 g-md-4 mb-3 mb-md-4\">
        <div class=\"col-12\">
            <div class=\"card animated-card\">
                <div class=\"card-header bg-white d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center py-2 py-md-3 gap-2\">
                    <h5 class=\"mb-0 fs-6 fs-md-5\">
                        <i class=\"bi bi-people me-2 text-primary\"></i>
                        Utilisateurs par rôle
                    </h5>
                    <div class=\"d-flex gap-1 gap-md-2 flex-wrap\">
                        <span class=\"badge bg-success\" style=\"font-size:0.5rem;\">
                            <i class=\"bi bi-person-check me-1\"></i>
                            Actifs: ";
        // line 1526
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active_users_count"]) || array_key_exists("active_users_count", $context) ? $context["active_users_count"] : (function () { throw new RuntimeError('Variable "active_users_count" does not exist.', 1526, $this->source); })()), "html", null, true);
        yield "
                        </span>
                        <span class=\"badge bg-warning text-dark\" style=\"font-size:0.5rem;\">
                            <i class=\"bi bi-person-exclamation me-1\"></i>
                            Hors quota: ";
        // line 1530
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["out_of_quota_count"]) || array_key_exists("out_of_quota_count", $context) ? $context["out_of_quota_count"] : (function () { throw new RuntimeError('Variable "out_of_quota_count" does not exist.', 1530, $this->source); })()), "html", null, true);
        yield "
                        </span>
                        <span class=\"badge bg-secondary\" style=\"font-size:0.5rem;\">
                            <i class=\"bi bi-person-x me-1\"></i>
                            Désactivés: ";
        // line 1534
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactive_by_admin_count"]) || array_key_exists("inactive_by_admin_count", $context) ? $context["inactive_by_admin_count"] : (function () { throw new RuntimeError('Variable "inactive_by_admin_count" does not exist.', 1534, $this->source); })()), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"row g-2 g-md-3\">
                        ";
        // line 1540
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users_by_role_with_status"]) || array_key_exists("users_by_role_with_status", $context) ? $context["users_by_role_with_status"] : (function () { throw new RuntimeError('Variable "users_by_role_with_status" does not exist.', 1540, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["role"] => $context["data"]) {
            // line 1541
            yield "                            <div class=\"col-6 col-md-3 mb-2 mb-md-3\">
                                <div class=\"role-card\">
                                    <div class=\"card-body\">
                                        <div class=\"d-flex flex-wrap justify-content-between align-items-start mb-2 gap-1\">
                                            <!-- BADGE RÔLE -->
                                            ";
            // line 1546
            if (($context["role"] == "ROLE_ADMIN")) {
                // line 1547
                yield "                                                <span class=\"role-badge role-admin\" style=\"font-size:0.5rem;\">
                                                    <i class=\"bi bi-shield-check me-1\"></i>
                                                    ";
                // line 1549
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["data"], "label", [], "any", false, false, false, 1549), 0, 8), "html", null, true);
                yield "
                                                </span>
                                            ";
            } elseif ((            // line 1551
$context["role"] == "ROLE_MANAGER")) {
                // line 1552
                yield "                                                <span class=\"role-badge role-manager\" style=\"font-size:0.5rem;\">
                                                    <i class=\"bi bi-graph-up me-1\"></i>
                                                    ";
                // line 1554
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["data"], "label", [], "any", false, false, false, 1554), 0, 8), "html", null, true);
                yield "
                                                </span>
                                            ";
            } elseif ((            // line 1556
$context["role"] == "ROLE_STOCK_MANAGER")) {
                // line 1557
                yield "                                                <span class=\"role-badge role-stock\" style=\"font-size:0.5rem;\">
                                                    <i class=\"bi bi-box-seam me-1\"></i>
                                                    ";
                // line 1559
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["data"], "label", [], "any", false, false, false, 1559), 0, 8), "html", null, true);
                yield "
                                                </span>
                                            ";
            } elseif ((            // line 1561
$context["role"] == "ROLE_CASHIER")) {
                // line 1562
                yield "                                                <span class=\"role-badge role-cashier\" style=\"font-size:0.5rem;\">
                                                    <i class=\"bi bi-cash-coin me-1\"></i>
                                                    ";
                // line 1564
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["data"], "label", [], "any", false, false, false, 1564), 0, 8), "html", null, true);
                yield "
                                                </span>
                                            ";
            } else {
                // line 1567
                yield "                                                <span class=\"role-badge role-user\" style=\"font-size:0.5rem;\">
                                                    <i class=\"bi bi-person me-1\"></i>
                                                    ";
                // line 1569
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["data"], "label", [], "any", false, false, false, 1569), 0, 8), "html", null, true);
                yield "
                                                </span>
                                            ";
            }
            // line 1572
            yield "                                            <span class=\"badge bg-secondary\" style=\"font-size:0.4rem;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 1572), "html", null, true);
            yield "</span>
                                        </div>
                                        
                                        <!-- Barre de progression du statut -->
                                        <div class=\"progress mb-2\" style=\"height: 4px; background-color: #e9ecef;\">
                                            ";
            // line 1577
            $context["active_percent"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 1577) > 0)) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "active", [], "any", false, false, false, 1577) / CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 1577)) * 100))) : (0));
            // line 1578
            yield "                                            ";
            $context["quota_percent"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 1578) > 0)) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "quota", [], "any", false, false, false, 1578) / CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 1578)) * 100))) : (0));
            // line 1579
            yield "                                            ";
            $context["inactive_percent"] = ((100 - (isset($context["active_percent"]) || array_key_exists("active_percent", $context) ? $context["active_percent"] : (function () { throw new RuntimeError('Variable "active_percent" does not exist.', 1579, $this->source); })())) - (isset($context["quota_percent"]) || array_key_exists("quota_percent", $context) ? $context["quota_percent"] : (function () { throw new RuntimeError('Variable "quota_percent" does not exist.', 1579, $this->source); })()));
            // line 1580
            yield "                                            
                                            <div class=\"progress-bar bg-success\" 
                                                 style=\"width: ";
            // line 1582
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active_percent"]) || array_key_exists("active_percent", $context) ? $context["active_percent"] : (function () { throw new RuntimeError('Variable "active_percent" does not exist.', 1582, $this->source); })()), "html", null, true);
            yield "%; border-radius: 4px 0 0 4px;\"
                                                 title=\"Actifs: ";
            // line 1583
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "active", [], "any", false, false, false, 1583), "html", null, true);
            yield "\"></div>
                                            <div class=\"progress-bar bg-warning\" 
                                                 style=\"width: ";
            // line 1585
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota_percent"]) || array_key_exists("quota_percent", $context) ? $context["quota_percent"] : (function () { throw new RuntimeError('Variable "quota_percent" does not exist.', 1585, $this->source); })()), "html", null, true);
            yield "%;\"
                                                 title=\"Hors quota: ";
            // line 1586
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "quota", [], "any", false, false, false, 1586), "html", null, true);
            yield "\"></div>
                                            <div class=\"progress-bar bg-secondary\" 
                                                 style=\"width: ";
            // line 1588
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactive_percent"]) || array_key_exists("inactive_percent", $context) ? $context["inactive_percent"] : (function () { throw new RuntimeError('Variable "inactive_percent" does not exist.', 1588, $this->source); })()), "html", null, true);
            yield "%; border-radius: 0 4px 4px 0;\"
                                                 title=\"Désactivés: ";
            // line 1589
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "inactive", [], "any", false, false, false, 1589), "html", null, true);
            yield "\"></div>
                                        </div>
                                        
                                        <!-- Détails des statuts -->
                                        <div class=\"d-flex justify-content-between text-center\">
                                            <div>
                                                <span class=\"fw-bold text-success\" style=\"font-size:0.55rem;\">";
            // line 1595
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "active", [], "any", false, false, false, 1595), "html", null, true);
            yield "</span>
                                                <div><small class=\"text-muted\" style=\"font-size:0.4rem;\">Actifs</small></div>
                                            </div>
                                            <div>
                                                <span class=\"fw-bold text-warning\" style=\"font-size:0.55rem;\">";
            // line 1599
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "quota", [], "any", false, false, false, 1599), "html", null, true);
            yield "</span>
                                                <div><small class=\"text-muted\" style=\"font-size:0.4rem;\">Quota</small></div>
                                            </div>
                                            <div>
                                                <span class=\"fw-bold text-secondary\" style=\"font-size:0.55rem;\">";
            // line 1603
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "inactive", [], "any", false, false, false, 1603), "html", null, true);
            yield "</span>
                                                <div><small class=\"text-muted\" style=\"font-size:0.4rem;\">Inactifs</small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        // line 1610
        if (!$context['_iterated']) {
            // line 1611
            yield "                            <div class=\"col-12 text-center py-3 py-md-5\">
                                <i class=\"bi bi-people fs-1 text-muted d-block mb-2\"></i>
                                <h5 class=\"text-muted small\">Aucun utilisateur</h5>
                                <p class=\"text-muted small\" style=\"font-size:0.6rem;\">Cette entreprise n'a pas encore d'utilisateurs.</p>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['role'], $context['data'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1617
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Derniers abonnements -->
    <div class=\"card animated-card\">
        <div class=\"card-header bg-white d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center py-2 py-md-3 gap-2\">
            <h5 class=\"mb-0 fs-6 fs-md-5\">
                <i class=\"bi bi-clock-history me-2 text-primary\"></i>
                Derniers abonnements
            </h5>
            <a href=\"";
        // line 1630
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_subscriptions", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1630, $this->source); })()), "id", [], "any", false, false, false, 1630)]), "html", null, true);
        yield "\" 
               class=\"btn btn-sm btn-outline-primary\" style=\"font-size:0.6rem; padding:0.15rem 0.4rem;\">
                Voir tout l'historique
                <i class=\"bi bi-arrow-right ms-1\"></i>
            </a>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table subscriptions-table mb-0\">
                    <thead>
                        <tr>
                            <th class=\"border-0 bg-light py-2 px-2 px-md-4\" style=\"font-size:0.6rem;\">Date</th>
                            <th class=\"border-0 bg-light py-2 px-2 px-md-4\" style=\"font-size:0.6rem;\">Plan</th>
                            <th class=\"border-0 bg-light py-2 px-2 px-md-4\" style=\"font-size:0.6rem;\">Montant</th>
                            <th class=\"border-0 bg-light py-2 px-2 px-md-4\" style=\"font-size:0.6rem;\">Statut</th>
                            <th class=\"border-0 bg-light py-2 px-2 px-md-4\" style=\"font-size:0.6rem;\">Date fin</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 1649
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 1649, $this->source); })()), 0, 5));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
            // line 1650
            yield "                            ";
            $context["plan"] = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "subscriptionPlan", [], "any", false, false, false, 1650);
            // line 1651
            yield "                            <tr>
                                <td class=\"px-2 px-md-4\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"bi bi-calendar3 me-1 me-md-2 text-muted\" style=\"font-size:0.5rem;\"></i>
                                        <div>
                                            <div style=\"font-size:0.6rem;\">";
            // line 1656
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "createdAt", [], "any", false, false, false, 1656), "d/m/Y"), "html", null, true);
            yield "</div>
                                            <small class=\"text-muted\" style=\"font-size:0.4rem;\">";
            // line 1657
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "createdAt", [], "any", false, false, false, 1657), "H:i"), "html", null, true);
            yield "</small>
                                        </div>
                                    </div>
                                </td>
                                <td class=\"px-2 px-md-4\">
                                    ";
            // line 1662
            if ((($tmp = (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1662, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1663
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1663, $this->source); })()), "name", [], "any", false, false, false, 1663) == "trial")) {
                    // line 1664
                    yield "                                            <span class=\"badge plan-trial plan-badge p-1\" style=\"font-size:0.45rem;\">
                                                <i class=\"bi bi-hourglass-split me-1\"></i>
                                                ";
                    // line 1666
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1666, $this->source); })()), "displayName", [], "any", false, false, false, 1666), 0, 8), "html", null, true);
                    yield "
                                            </span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 1668
(isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1668, $this->source); })()), "name", [], "any", false, false, false, 1668) == "freemium")) {
                    // line 1669
                    yield "                                            <span class=\"badge plan-freemium plan-badge p-1\" style=\"font-size:0.45rem;\">
                                                <i class=\"bi bi-gift me-1\"></i>
                                                ";
                    // line 1671
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1671, $this->source); })()), "displayName", [], "any", false, false, false, 1671), 0, 8), "html", null, true);
                    yield "
                                            </span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 1673
(isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1673, $this->source); })()), "name", [], "any", false, false, false, 1673) == "basic")) {
                    // line 1674
                    yield "                                            <span class=\"badge plan-basic plan-badge p-1\" style=\"font-size:0.45rem;\">
                                                <i class=\"bi bi-rocket me-1\"></i>
                                                ";
                    // line 1676
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1676, $this->source); })()), "displayName", [], "any", false, false, false, 1676), 0, 8), "html", null, true);
                    yield "
                                            </span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 1678
(isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1678, $this->source); })()), "name", [], "any", false, false, false, 1678) == "premium")) {
                    // line 1679
                    yield "                                            <span class=\"badge plan-premium plan-badge p-1\" style=\"font-size:0.45rem;\">
                                                <i class=\"bi bi-stars me-1\"></i>
                                                ";
                    // line 1681
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1681, $this->source); })()), "displayName", [], "any", false, false, false, 1681), 0, 8), "html", null, true);
                    yield "
                                            </span>
                                        ";
                } else {
                    // line 1684
                    yield "                                            <span class=\"badge bg-secondary plan-badge p-1\" style=\"font-size:0.45rem;\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1684, $this->source); })()), "displayName", [], "any", false, false, false, 1684), 0, 8), "html", null, true);
                    yield "</span>
                                        ";
                }
                // line 1686
                yield "                                    ";
            } else {
                // line 1687
                yield "                                        <span class=\"badge bg-secondary plan-badge p-1\" style=\"font-size:0.45rem;\">Inconnu</span>
                                    ";
            }
            // line 1689
            yield "                                </td>
                                <td class=\"px-2 px-md-4\">
                                    ";
            // line 1691
            if ((($tmp = (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1691, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1692
                yield "                                        ";
                $context["amount"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "billingPeriod", [], "any", false, false, false, 1692) == "yearly")) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1692, $this->source); })()), "priceYearly", [], "any", false, false, false, 1692)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 1692, $this->source); })()), "priceMonthly", [], "any", false, false, false, 1692)));
                // line 1693
                yield "                                        <div class=\"fw-bold text-dark\" style=\"font-size:0.6rem;\">
                                            ";
                // line 1694
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 1694, $this->source); })()), 0, ",", " "), "html", null, true);
                yield "
                                            <small class=\"text-muted\" style=\"font-size:0.4rem;\">FCFA</small>
                                        </div>
                                    ";
            } else {
                // line 1698
                yield "                                        <span class=\"text-muted\" style=\"font-size:0.5rem;\">-</span>
                                    ";
            }
            // line 1700
            yield "                                </td>
                                <td class=\"px-2 px-md-4\">
                                    ";
            // line 1702
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 1702) == "active")) {
                // line 1703
                yield "                                        <span class=\"status-badge status-active\" style=\"font-size:0.45rem; padding:0.1rem 0.3rem;\">
                                            <i class=\"bi bi-check-circle\"></i> Actif
                                        </span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 1706
$context["subscription"], "status", [], "any", false, false, false, 1706) == "pending")) {
                // line 1707
                yield "                                        <span class=\"status-badge status-trial\" style=\"font-size:0.45rem; padding:0.1rem 0.3rem;\">
                                            <i class=\"bi bi-hourglass\"></i> En attente
                                        </span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 1710
$context["subscription"], "status", [], "any", false, false, false, 1710) == "expired")) {
                // line 1711
                yield "                                        <span class=\"status-badge status-inactive\" style=\"font-size:0.45rem; padding:0.1rem 0.3rem;\">
                                            <i class=\"bi bi-x-circle\"></i> Expiré
                                        </span>
                                    ";
            } else {
                // line 1715
                yield "                                        <span class=\"badge bg-secondary\" style=\"font-size:0.4rem;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 1715)), 0, 6), "html", null, true);
                yield "</span>
                                    ";
            }
            // line 1717
            yield "                                </td>
                                <td class=\"px-2 px-md-4\">
                                    ";
            // line 1719
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 1719)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1720
                yield "                                        <div class=\"d-flex align-items-center\">
                                            <i class=\"bi bi-calendar-x me-1 text-muted\" style=\"font-size:0.4rem;\"></i>
                                            <span class=\"";
                // line 1722
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 1722) < $this->extensions['Twig\Extension\CoreExtension']->convertDate())) ? ("text-danger fw-bold") : (""));
                yield "\" style=\"font-size:0.55rem;\">
                                                ";
                // line 1723
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "endsAt", [], "any", false, false, false, 1723), "d/m/Y"), "html", null, true);
                yield "
                                            </span>
                                        </div>
                                    ";
            } else {
                // line 1727
                yield "                                        <span class=\"text-muted\" style=\"font-size:0.5rem;\">-</span>
                                    ";
            }
            // line 1729
            yield "                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 1731
        if (!$context['_iterated']) {
            // line 1732
            yield "                            <tr>
                                <td colspan=\"5\" class=\"text-center py-3 py-md-5\">
                                    <i class=\"bi bi-clock-history fs-1 text-muted d-block mb-2\"></i>
                                    <h5 class=\"text-muted small\">Aucun abonnement</h5>
                                    <p class=\"text-muted small\" style=\"font-size:0.6rem;\">Cette entreprise n'a pas encore d'historique d'abonnements.</p>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1740
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Carte Leaflet -->
";
        // line 1748
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1748, $this->source); })()), "latitude", [], "any", false, false, false, 1748) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1748, $this->source); })()), "longitude", [], "any", false, false, false, 1748))) {
            // line 1749
            yield "    ";
            yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

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

        // line 1750
        yield "        ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
        <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" />
        <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const map = L.map('map').setView([";
        // line 1755
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1755, $this->source); })()), "latitude", [], "any", false, false, false, 1755), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1755, $this->source); })()), "longitude", [], "any", false, false, false, 1755), "html", null, true);
        yield "], 15);
                
                L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
                    attribution: '©OpenStreetMap, ©CartoDB',
                    subdomains: 'abcd',
                    maxZoom: 19
                }).addTo(map);
                
                const customIcon = L.divIcon({
                    className: 'custom-marker',
                    html: '<div style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); width: 30px; height: 30px; border-radius: 50%; border: 3px solid white; box-shadow: 0 5px 15px rgba(0,0,0,0.3); display: flex; align-items: center; justify-content: center;\"><i class=\"bi bi-building\" style=\"color: white; font-size: 14px;\"></i></div>',
                    iconSize: [30, 30],
                    iconAnchor: [15, 15],
                    popupAnchor: [0, -15]
                });
                
                L.marker([";
        // line 1771
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1771, $this->source); })()), "latitude", [], "any", false, false, false, 1771), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1771, $this->source); })()), "longitude", [], "any", false, false, false, 1771), "html", null, true);
        yield "], { icon: customIcon })
                    .addTo(map)
                    .bindPopup(`
                        <div style=\"text-align: center; padding: 5px;\">
                            <strong style=\"color: #667eea; font-size: 12px;\">";
        // line 1775
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1775, $this->source); })()), "companyName", [], "any", false, false, false, 1775), 0, 20), "html", null, true);
        yield "</strong><br>
                            <small style=\"font-size: 10px;\">";
        // line 1776
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1776, $this->source); })()), "address", [], "any", false, false, false, 1776)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_service"]) || array_key_exists("hma_service", $context) ? $context["hma_service"] : (function () { throw new RuntimeError('Variable "hma_service" does not exist.', 1776, $this->source); })()), "address", [], "any", false, false, false, 1776), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), "Adresse non renseignée", 0, 30), "html", null, true)));
        yield "</small>
                        </div>
                    `)
                    .openPopup();
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
        return "super_admin/hma_service/show.html.twig";
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
        return array (  2514 => 1776,  2510 => 1775,  2501 => 1771,  2480 => 1755,  2471 => 1750,  2446 => 1749,  2444 => 1748,  2434 => 1740,  2421 => 1732,  2419 => 1731,  2413 => 1729,  2409 => 1727,  2402 => 1723,  2398 => 1722,  2394 => 1720,  2392 => 1719,  2388 => 1717,  2382 => 1715,  2376 => 1711,  2374 => 1710,  2369 => 1707,  2367 => 1706,  2362 => 1703,  2360 => 1702,  2356 => 1700,  2352 => 1698,  2345 => 1694,  2342 => 1693,  2339 => 1692,  2337 => 1691,  2333 => 1689,  2329 => 1687,  2326 => 1686,  2320 => 1684,  2314 => 1681,  2310 => 1679,  2308 => 1678,  2303 => 1676,  2299 => 1674,  2297 => 1673,  2292 => 1671,  2288 => 1669,  2286 => 1668,  2281 => 1666,  2277 => 1664,  2274 => 1663,  2272 => 1662,  2264 => 1657,  2260 => 1656,  2253 => 1651,  2250 => 1650,  2245 => 1649,  2223 => 1630,  2208 => 1617,  2197 => 1611,  2195 => 1610,  2183 => 1603,  2176 => 1599,  2169 => 1595,  2160 => 1589,  2156 => 1588,  2151 => 1586,  2147 => 1585,  2142 => 1583,  2138 => 1582,  2134 => 1580,  2131 => 1579,  2128 => 1578,  2126 => 1577,  2117 => 1572,  2111 => 1569,  2107 => 1567,  2101 => 1564,  2097 => 1562,  2095 => 1561,  2090 => 1559,  2086 => 1557,  2084 => 1556,  2079 => 1554,  2075 => 1552,  2073 => 1551,  2068 => 1549,  2064 => 1547,  2062 => 1546,  2055 => 1541,  2050 => 1540,  2041 => 1534,  2034 => 1530,  2027 => 1526,  2008 => 1509,  2003 => 1506,  1997 => 1503,  1993 => 1501,  1991 => 1500,  1988 => 1499,  1982 => 1497,  1976 => 1494,  1972 => 1492,  1970 => 1491,  1965 => 1489,  1961 => 1487,  1959 => 1486,  1954 => 1484,  1950 => 1482,  1948 => 1481,  1943 => 1479,  1939 => 1477,  1937 => 1476,  1927 => 1468,  1925 => 1467,  1921 => 1465,  1911 => 1460,  1909 => 1459,  1904 => 1458,  1898 => 1456,  1894 => 1454,  1892 => 1453,  1889 => 1452,  1887 => 1451,  1884 => 1450,  1882 => 1449,  1879 => 1448,  1877 => 1447,  1874 => 1446,  1872 => 1445,  1869 => 1444,  1867 => 1443,  1864 => 1442,  1862 => 1441,  1859 => 1440,  1857 => 1439,  1854 => 1438,  1852 => 1437,  1848 => 1435,  1843 => 1434,  1821 => 1415,  1814 => 1411,  1807 => 1407,  1795 => 1398,  1779 => 1385,  1771 => 1380,  1767 => 1379,  1751 => 1366,  1743 => 1361,  1739 => 1360,  1724 => 1348,  1716 => 1343,  1708 => 1338,  1704 => 1337,  1678 => 1313,  1668 => 1305,  1661 => 1301,  1654 => 1297,  1648 => 1293,  1646 => 1292,  1631 => 1279,  1625 => 1276,  1621 => 1274,  1619 => 1273,  1615 => 1271,  1606 => 1265,  1598 => 1260,  1594 => 1259,  1584 => 1251,  1582 => 1250,  1572 => 1243,  1568 => 1242,  1563 => 1240,  1553 => 1233,  1536 => 1219,  1524 => 1210,  1502 => 1190,  1493 => 1185,  1488 => 1184,  1481 => 1183,  1472 => 1176,  1470 => 1175,  1467 => 1174,  1459 => 1169,  1455 => 1168,  1447 => 1162,  1445 => 1161,  1439 => 1157,  1434 => 1156,  1430 => 1155,  1404 => 1132,  1392 => 1123,  1383 => 1116,  1377 => 1113,  1373 => 1112,  1368 => 1111,  1366 => 1110,  1361 => 1108,  1349 => 1099,  1328 => 1081,  1318 => 1074,  1308 => 1067,  1299 => 1061,  1291 => 1060,  1287 => 1058,  1283 => 1056,  1277 => 1054,  1275 => 1053,  1268 => 1048,  1262 => 1047,  1259 => 1046,  1256 => 1045,  1253 => 1044,  1250 => 1043,  1247 => 1042,  1244 => 1041,  1239 => 1040,  1236 => 1039,  1234 => 1038,  1230 => 1036,  1223 => 1031,  1216 => 1026,  1214 => 1025,  1210 => 1023,  1204 => 1021,  1198 => 1018,  1194 => 1016,  1192 => 1015,  1187 => 1013,  1183 => 1011,  1181 => 1010,  1176 => 1008,  1172 => 1006,  1170 => 1005,  1165 => 1003,  1161 => 1001,  1159 => 1000,  1155 => 998,  1148 => 993,  1141 => 988,  1139 => 987,  1132 => 983,  1125 => 979,  1118 => 975,  1114 => 973,  1108 => 970,  1105 => 969,  1099 => 966,  1094 => 965,  1092 => 964,  1082 => 956,  1077 => 955,  1068 => 949,  1061 => 944,  1048 => 943,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/super_admin/hma_service/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}{{ hma_service.companyName }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    /* Variables de couleurs */
    :root {
        --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        --success-gradient: linear-gradient(135deg, #28a745 0%, #218838 100%);
        --warning-gradient: linear-gradient(135deg, #ffc107 0%, #e0a800 100%);
        --danger-gradient: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        --info-gradient: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
        --purple-gradient: linear-gradient(135deg, #9c27b0 0%, #7b1fa2 100%);
        --dark-gradient: linear-gradient(135deg, #343a40 0%, #23272b 100%);
    }

    /* En-tête entreprise amélioré */
    .company-header {
        background: var(--primary-gradient);
        color: white;
        padding: 1.5rem;
        border-radius: 1.5rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 15px 30px rgba(102, 126, 234, 0.3);
        position: relative;
        overflow: hidden;
    }

    @media (min-width: 768px) {
        .company-header {
            padding: 2.5rem;
            margin-bottom: 2rem;
        }
    }

    .company-header::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        animation: rotate 20s linear infinite;
    }

    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .company-logo-large {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 16px;
        border: 4px solid white;
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        transition: transform 0.3s;
    }

    @media (min-width: 768px) {
        .company-logo-large {
            width: 120px;
            height: 120px;
            border-radius: 20px;
        }
    }

    .company-logo-large:hover {
        transform: scale(1.05);
    }

    .company-initials-large {
        width: 80px;
        height: 80px;
        border-radius: 16px;
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(5px);
        border: 4px solid white;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 2.5rem;
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        transition: transform 0.3s;
    }

    @media (min-width: 768px) {
        .company-initials-large {
            width: 120px;
            height: 120px;
            border-radius: 20px;
            font-size: 3.5rem;
        }
    }

    .company-initials-large:hover {
        transform: scale(1.05);
    }

    /* Badges améliorés */
    .badge-custom {
        padding: 0.3rem 0.6rem;
        font-size: 0.7rem;
        border-radius: 50px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        transition: all 0.3s;
    }

    @media (min-width: 768px) {
        .badge-custom {
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }
    }

    .badge-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    }

    /* STYLES POUR LES RÔLES */
    .role-badge {
        font-size: 0.65rem;
        padding: 0.2rem 0.4rem;
        margin-right: 2px;
        display: inline-block;
        font-weight: 500;
        border-radius: 50px;
    }

    @media (min-width: 768px) {
        .role-badge {
            font-size: 0.8rem;
            padding: 0.3rem 0.6rem;
        }
    }

    .role-badge.role-admin {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        color: white;
    }
    .role-badge.role-manager {
        background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
        color: white;
    }
    .role-badge.role-stock {
        background: linear-gradient(135deg, #ffc107 0%, #ffca2c 100%);
        color: #212529;
    }
    .role-badge.role-cashier {
        background: linear-gradient(135deg, #198754 0%, #157347 100%);
        color: white;
    }
    .role-badge.role-user {
        background: linear-gradient(135deg, #6c757d 0%, #5c636a 100%);
        color: white;
    }

    /* STYLES POUR LES PLANS */
    .plan-badge {
        font-size: 0.65rem;
        padding: 0.3rem 0.6rem;
        font-weight: 500;
        border-radius: 50px;
    }

    @media (min-width: 768px) {
        .plan-badge {
            font-size: 0.85rem;
            padding: 0.5rem 1rem;
        }
    }

    .plan-trial {
        background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
        color: white;
    }
    .plan-freemium {
        background: linear-gradient(135deg, #6c757d 0%, #5c636a 100%);
        color: white;
    }
    .plan-basic {
        background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
        color: white;
    }
    .plan-premium {
        background: linear-gradient(135deg, #9c27b0 0%, #7b1fa2 100%);
        color: white;
    }

    /* STYLES POUR LE STATUT */
    .status-badge {
        font-size: 0.65rem;
        padding: 0.3rem 0.6rem;
        font-weight: 500;
        border-radius: 50px;
    }

    @media (min-width: 768px) {
        .status-badge {
            font-size: 0.85rem;
            padding: 0.5rem 1rem;
        }
    }

    .status-active {
        background: linear-gradient(135deg, #28a745 0%, #218838 100%);
        color: white;
    }

    .status-inactive {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        color: white;
    }

    .status-trial {
        background: linear-gradient(135deg, #ffc107 0%, #e0a800 100%);
        color: #212529;
    }

    /* Cartes d'information améliorées */
    .info-card {
        transition: all 0.3s;
        height: 100%;
        border: none;
        border-radius: 1rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        overflow: hidden;
    }

    .info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }

    .info-card .card-body {
        padding: 1rem;
    }

    @media (min-width: 768px) {
        .info-card .card-body {
            padding: 1.5rem;
        }
    }

    .info-card .card-title {
        color: #495057;
        font-weight: 600;
        margin-bottom: 0.8rem;
        font-size: 0.9rem;
    }

    @media (min-width: 768px) {
        .info-card .card-title {
            font-size: 1.1rem;
            margin-bottom: 1.2rem;
        }
    }

    .info-card hr {
        margin: 0.75rem 0;
        opacity: 0.1;
    }

    /* Alertes améliorées */
    .alert-trial {
        background: var(--warning-gradient);
        color: #212529;
        border: none;
        border-radius: 0.5rem;
        padding: 0.5rem 0.75rem;
        margin-top: 0.75rem;
        box-shadow: 0 5px 10px rgba(255, 193, 7, 0.3);
        animation: pulse 2s infinite;
        font-size: 0.75rem;
    }

    @media (min-width: 768px) {
        .alert-trial {
            padding: 0.75rem 1rem;
            font-size: 0.9rem;
        }
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.01); }
        100% { transform: scale(1); }
    }

    /* Barres de progression améliorées */
    .usage-progress {
        height: 6px;
        border-radius: 4px;
        background-color: #e9ecef;
        overflow: hidden;
        margin: 0.3rem 0;
    }

    @media (min-width: 768px) {
        .usage-progress {
            height: 8px;
            margin: 0.5rem 0;
        }
    }

    .progress-bar {
        position: relative;
        overflow: hidden;
    }

    .progress-bar::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        animation: shimmer 2s infinite;
    }

    @keyframes shimmer {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }

    /* Badges de fonctionnalités améliorés */
    .feature-badge {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        color: #495057;
        padding: 0.3rem 0.6rem;
        border-radius: 50px;
        font-size: 0.7rem;
        transition: all 0.3s;
        box-shadow: 0 2px 5px rgba(0,0,0,0.02);
    }

    @media (min-width: 768px) {
        .feature-badge {
            padding: 0.6rem 1.2rem;
            font-size: 0.9rem;
        }
    }

    .feature-badge:hover {
        background: var(--primary-gradient);
        color: white;
        border-color: transparent;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }

    .feature-badge:hover i {
        color: white !important;
    }

    /* Cartes de rôles améliorées */
    .role-card {
        border: none;
        border-radius: 1rem;
        background: white;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s;
        overflow: hidden;
        height: 100%;
    }

    .role-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }

    .role-card .card-body {
        padding: 0.75rem;
    }

    @media (min-width: 768px) {
        .role-card .card-body {
            padding: 1.5rem;
        }
    }

    .role-count {
        font-size: 1.3rem;
        font-weight: bold;
        color: #212529;
        margin: 0.25rem 0;
    }

    @media (min-width: 768px) {
        .role-count {
            font-size: 2rem;
            margin: 0.5rem 0;
        }
    }

    /* Statuts des rôles */
    .role-status-active {
        color: #28a745;
        font-weight: 600;
    }

    .role-status-warning {
        color: #ffc107;
        font-weight: 600;
    }

    .role-status-inactive {
        color: #dc3545;
        font-weight: 600;
    }

    /* Tableau des abonnements amélioré */
    .subscriptions-table {
        border-collapse: separate;
        border-spacing: 0 0.5rem;
    }

    .subscriptions-table tbody tr {
        background: white;
        box-shadow: 0 2px 5px rgba(0,0,0,0.02);
        transition: all 0.3s;
    }

    .subscriptions-table tbody tr:hover {
        background: #f8f9fa;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transform: translateY(-2px);
    }

    .subscriptions-table td {
        padding: 0.5rem 0.5rem;
        vertical-align: middle;
        border: none;
        font-size: 0.7rem;
    }

    @media (min-width: 768px) {
        .subscriptions-table td {
            padding: 1rem;
            font-size: 0.9rem;
        }
    }

    /* Icônes animées */
    .animated-icon {
        transition: all 0.3s;
    }

    .animated-icon:hover {
        transform: rotate(360deg) scale(1.2);
    }

    /* Compteurs animés */
    .counter-number {
        font-size: 1rem;
        font-weight: 600;
        color: #212529;
        transition: all 0.3s;
    }

    @media (min-width: 768px) {
        .counter-number {
            font-size: 1.2rem;
        }
    }

    .counter-number:hover {
        color: var(--primary-gradient);
        transform: scale(1.1);
    }

    /* Boutons améliorés */
    .btn-action {
        padding: 0.4rem 0.8rem;
        border-radius: 50px;
        font-weight: 500;
        transition: all 0.3s;
        border: none;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        font-size: 0.7rem;
    }

    @media (min-width: 768px) {
        .btn-action {
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
        }
    }

    .btn-action:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    }

    .btn-back {
        background: rgba(255,255,255,0.2);
        color: white;
        border: 1px solid rgba(255,255,255,0.3);
        backdrop-filter: blur(5px);
    }

    .btn-back:hover {
        background: rgba(255,255,255,0.3);
        color: white;
        border-color: rgba(255,255,255,0.5);
        transform: translateX(-3px);
    }

    .btn-back i {
        transition: transform 0.3s;
    }

    .btn-back:hover i {
        transform: translateX(-3px);
    }

    .btn-edit {
        background: white;
        color: #667eea;
    }

    .btn-edit:hover {
        background: var(--primary-gradient);
        color: white;
    }

    .btn-history {
        background: var(--info-gradient);
        color: white;
    }

    /* Carte Leaflet améliorée */
    #map {
        border-radius: 0.5rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: all 0.3s;
        height: 150px;
    }

    @media (min-width: 768px) {
        #map {
            height: 180px;
        }
    }

    #map:hover {
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }

    /* Animations d'entrée */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animated-card {
        animation: fadeInUp 0.6s ease-out forwards;
        opacity: 0;
    }

    .animated-card:nth-child(1) { animation-delay: 0.1s; }
    .animated-card:nth-child(2) { animation-delay: 0.2s; }
    .animated-card:nth-child(3) { animation-delay: 0.3s; }
    .animated-card:nth-child(4) { animation-delay: 0.4s; }
    .animated-card:nth-child(5) { animation-delay: 0.5s; }

    /* Mini cartes de statistiques */
    .stat-mini-card {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border-radius: 1rem;
        padding: 0.75rem;
        text-align: center;
        transition: all 0.3s;
    }

    @media (min-width: 768px) {
        .stat-mini-card {
            padding: 1rem;
        }
    }

    .stat-mini-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .stat-mini-icon {
        font-size: 1.5rem;
        margin-bottom: 0.25rem;
    }

    @media (min-width: 768px) {
        .stat-mini-icon {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }
    }

    .stat-mini-value {
        font-size: 1.1rem;
        font-weight: bold;
        color: #212529;
    }

    @media (min-width: 768px) {
        .stat-mini-value {
            font-size: 1.5rem;
        }
    }

    .stat-mini-label {
        font-size: 0.65rem;
        color: #6c757d;
    }

    @media (min-width: 768px) {
        .stat-mini-label {
            font-size: 0.85rem;
        }
    }

    /* Badge d'évolution */
    .evolution-badge {
        padding: 0.15rem 0.3rem;
        border-radius: 50px;
        font-size: 0.55rem;
        font-weight: 600;
        display: inline-block;
        margin-top: 0.25rem;
    }

    @media (min-width: 768px) {
        .evolution-badge {
            padding: 0.25rem 0.5rem;
            font-size: 0.75rem;
        }
    }

    .evolution-up {
        background: #d4edda;
        color: #155724;
    }

    .evolution-down {
        background: #f8d7da;
        color: #721c24;
    }

    .evolution-stable {
        background: #e2e3e5;
        color: #383d41;
    }

    /* Barre de progression personnalisée */
    .progress {
        background-color: #e9ecef;
        border-radius: 4px;
        overflow: hidden;
    }

    .progress-bar {
        transition: width 0.6s ease;
    }

    /* ========================================
       RESPONSIVE - MOBILE
    ======================================== */
    
    /* Mobile (< 576px) */
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 6px !important;
            padding-right: 6px !important;
        }
        
        .breadcrumb {
            font-size: 0.6rem !important;
        }
        .breadcrumb-item a {
            font-size: 0.6rem !important;
        }
        
        .display-4 {
            font-size: 1.5rem !important;
        }
        .h1, .h3, .h4, .h5 {
            font-size: 0.9rem !important;
        }
        .text-muted {
            font-size: 0.65rem !important;
        }
        
        .company-header {
            padding: 0.75rem !important;
            border-radius: 1rem !important;
        }
        .company-header .row {
            gap: 0.5rem !important;
        }
        .company-header .col-auto {
            text-align: center !important;
            width: 100% !important;
        }
        .company-header .col {
            width: 100% !important;
            text-align: center !important;
        }
        .company-header .col-auto:last-child {
            width: 100% !important;
        }
        .company-header .d-flex.gap-2 {
            justify-content: center !important;
            flex-wrap: wrap !important;
        }
        
        .badge-custom {
            font-size: 0.55rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .status-badge, .plan-badge {
            font-size: 0.55rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .role-badge {
            font-size: 0.5rem !important;
            padding: 0.1rem 0.3rem !important;
        }
        
        .btn-action {
            font-size: 0.55rem !important;
            padding: 0.2rem 0.4rem !important;
        }
        .btn-action i {
            font-size: 0.55rem !important;
        }
        
        .stat-mini-card {
            padding: 0.5rem !important;
        }
        .stat-mini-value {
            font-size: 0.9rem !important;
        }
        .stat-mini-icon {
            font-size: 1.2rem !important;
        }
        .stat-mini-label {
            font-size: 0.55rem !important;
        }
        
        .info-card .card-body {
            padding: 0.5rem !important;
        }
        .info-card .card-title {
            font-size: 0.75rem !important;
        }
        .info-card .d-flex.align-items-center {
            gap: 0.5rem !important;
        }
        .info-card .bg-opacity-10.p-2.rounded-circle {
            width: 28px !important;
            height: 28px !important;
            padding: 0.2rem !important;
        }
        .info-card .bg-opacity-10.p-2.rounded-circle i {
            font-size: 0.8rem !important;
        }
        
        .role-card .card-body {
            padding: 0.5rem !important;
        }
        .role-count {
            font-size: 1rem !important;
        }
        
        .feature-badge {
            font-size: 0.55rem !important;
            padding: 0.2rem 0.4rem !important;
        }
        
        .subscriptions-table td {
            padding: 0.3rem 0.3rem !important;
            font-size: 0.6rem !important;
        }
        
        .alert-trial {
            font-size: 0.65rem !important;
            padding: 0.4rem 0.6rem !important;
        }
        
        .progress {
            height: 4px !important;
        }
        .usage-progress {
            height: 4px !important;
        }
        
        .counter-number {
            font-size: 0.8rem !important;
        }
        
        .evolution-badge {
            font-size: 0.45rem !important;
            padding: 0.1rem 0.2rem !important;
        }
        
        #map {
            height: 120px !important;
        }
        
        .mt-3, .mt-4 {
            margin-top: 0.5rem !important;
        }
        .mb-3, .mb-4 {
            margin-bottom: 0.5rem !important;
        }
        .row.g-3, .row.g-4 {
            --bs-gutter-y: 0.5rem !important;
            --bs-gutter-x: 0.5rem !important;
        }
        
        .card-header {
            padding: 0.4rem 0.6rem !important;
        }
        .card-header h5 {
            font-size: 0.75rem !important;
        }
        .card-header .badge {
            font-size: 0.5rem !important;
            padding: 0.1rem 0.3rem !important;
        }
        .card-body {
            padding: 0.4rem 0.6rem !important;
        }
        
        .d-flex.gap-3 {
            gap: 0.25rem !important;
        }
        .d-flex.gap-4 {
            gap: 0.5rem !important;
        }
        
        .table-responsive {
            font-size: 0.6rem !important;
        }
        
        /* Désactiver hover sur mobile */
        .stat-mini-card:hover {
            transform: none !important;
        }
        .info-card:hover {
            transform: none !important;
        }
        .role-card:hover {
            transform: none !important;
        }
        .feature-badge:hover {
            transform: none !important;
        }
        .btn-action:hover {
            transform: none !important;
        }
        .badge-custom:hover {
            transform: none !important;
        }
        .company-logo-large:hover {
            transform: none !important;
        }
        .company-initials-large:hover {
            transform: none !important;
        }
        .counter-number:hover {
            transform: none !important;
        }
    }

    /* Tablette */
    @media (min-width: 577px) and (max-width: 768px) {
        .company-header {
            padding: 1.5rem !important;
        }
        .display-4 {
            font-size: 2rem !important;
        }
        
        .btn-action {
            font-size: 0.75rem !important;
            padding: 0.3rem 0.6rem !important;
        }
        
        .stat-mini-card {
            padding: 0.75rem !important;
        }
        .stat-mini-value {
            font-size: 1.1rem !important;
        }
        
        .info-card .card-body {
            padding: 1rem !important;
        }
        
        .role-card .card-body {
            padding: 1rem !important;
        }
        
        .feature-badge {
            font-size: 0.75rem !important;
            padding: 0.3rem 0.6rem !important;
        }
        
        .subscriptions-table td {
            padding: 0.5rem 0.5rem !important;
            font-size: 0.75rem !important;
        }
        
        #map {
            height: 150px !important;
        }
        
        .row.g-3, .row.g-4 {
            --bs-gutter-y: 0.75rem !important;
            --bs-gutter-x: 0.75rem !important;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-2 px-md-4 py-2 py-md-4\">
    <!-- En-tête avec navigation -->
    <nav aria-label=\"breadcrumb\" class=\"mb-3 mb-md-4\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item small\">
                <a href=\"{{ path('app_super_admin_hma_service_index') }}\" class=\"text-decoration-none\">
                    <i class=\"bi bi-building me-1\"></i>
                    Entreprises
                </a>
            </li>
            <li class=\"breadcrumb-item active small\" aria-current=\"page\">
                {{ hma_service.companyName|slice(0, 20) }}{% if hma_service.companyName|length > 20 %}...{% endif %}
            </li>
        </ol>
    </nav>

    <!-- Header entreprise amélioré -->
    <div class=\"company-header animated-card\">
        <div class=\"row align-items-center\">
            <div class=\"col-12 col-md-auto text-center text-md-start\">
                {% if hma_service.logo %}
                    <img src=\"{{ asset('uploads/logos/' ~ hma_service.logo) }}\" 
                         alt=\"{{ hma_service.companyName }}\" 
                         class=\"company-logo-large\">
                {% else %}
                    <div class=\"company-initials-large mx-auto mx-md-0\">
                        {{ hma_service.companyName|first|upper }}
                    </div>
                {% endif %}
            </div>
            <div class=\"col-12 col-md text-center text-md-start\">
                <h1 class=\"display-4 mb-1 mb-md-2 fw-bold\">{{ hma_service.companyName }}</h1>
                <div class=\"d-flex gap-1 gap-md-2 flex-wrap justify-content-center justify-content-md-start\">
                    <span class=\"badge badge-custom bg-white text-dark\">
                        <i class=\"bi bi-hash me-1\"></i>
                        #{{ hma_service.subscriptionNumber }}
                    </span>
                    <span class=\"badge badge-custom bg-white text-dark\">
                        <i class=\"bi bi-tag me-1\"></i>
                        {{ hma_service.companyType|capitalize }}
                    </span>
                    
                    <!-- BADGE STATUT -->
                    {% if hma_service.hmaActive %}
                        <span class=\"badge status-active status-badge\">
                            <i class=\"bi bi-check-circle me-1\"></i>
                            Active
                        </span>
                    {% else %}
                        <span class=\"badge status-inactive status-badge\">
                            <i class=\"bi bi-x-circle me-1\"></i>
                            Désactivée
                        </span>
                    {% endif %}
                    
                    <!-- BADGE PLAN -->
                    {% if hma_service.currentPlan == 'trial' %}
                        <span class=\"badge plan-trial plan-badge\">
                            <i class=\"bi bi-hourglass-split me-1\"></i>
                            {{ hma_service.currentPlanLabel }}
                        </span>
                    {% elseif hma_service.currentPlan == 'freemium' %}
                        <span class=\"badge plan-freemium plan-badge\">
                            <i class=\"bi bi-gift me-1\"></i>
                            {{ hma_service.currentPlanLabel }}
                        </span>
                    {% elseif hma_service.currentPlan == 'basic' %}
                        <span class=\"badge plan-basic plan-badge\">
                            <i class=\"bi bi-rocket me-1\"></i>
                            {{ hma_service.currentPlanLabel }}
                        </span>
                    {% elseif hma_service.currentPlan == 'premium' %}
                        <span class=\"badge plan-premium plan-badge\">
                            <i class=\"bi bi-stars me-1\"></i>
                            {{ hma_service.currentPlanLabel }}
                        </span>
                    {% else %}
                        <span class=\"badge bg-secondary plan-badge\">{{ hma_service.currentPlanLabel }}</span>
                    {% endif %}
                    
                    <!-- BADGE ABONNEMENT ACTIF -->
                    {% if has_active_subscription %}
                        <span class=\"badge status-active status-badge\">
                            <i class=\"bi bi-check-circle me-1\"></i>
                            Abonnement actif
                        </span>
                    {% else %}
                        <span class=\"badge status-trial status-badge\">
                            <i class=\"bi bi-exclamation-triangle me-1\"></i>
                            Sans abonnement actif
                        </span>
                    {% endif %}
                </div>
                <!-- Informations de connexion de l'entreprise -->
                {% set lastLogin = null %}
                {% set online = false %}
                {% for user in hma_service.users %}
                    {% if user.loginAt and (lastLogin is null or user.loginAt > lastLogin) %}
                        {% set lastLogin = user.loginAt %}
                    {% endif %}
                    {% if user.online %}
                        {% set online = true %}
                    {% endif %}
                {% endfor %}

                <div class=\"mt-2 mt-md-3 d-flex flex-column flex-md-row align-items-center gap-1 gap-md-3 text-white-50\">
                    <div class=\"small\" style=\"font-size:0.7rem;\">
                        <i class=\"bi bi-clock-history me-1\"></i>
                        Dernière connexion : 
                        {% if lastLogin %}
                            {{ lastLogin|date('d/m/Y H:i') }}
                        {% else %}
                            Jamais
                        {% endif %}
                    </div>
                    <div class=\"small\" style=\"font-size:0.7rem;\">
                        <i class=\"bi bi-circle-fill me-1 {% if online %}text-success{% else %}text-secondary{% endif %}\" style=\"font-size: 0.6rem;\"></i>
                        {{ online ? 'En ligne' : 'Hors ligne' }}
                    </div>
                </div>
            </div>
            <div class=\"col-12 col-md-auto text-center text-md-end\">
                <div class=\"d-flex flex-wrap gap-1 gap-md-2 justify-content-center justify-content-md-end\">
                    <a href=\"{{ path('app_super_admin_hma_service_index') }}\" 
                       class=\"btn btn-action btn-back\"
                       title=\"Retour à la liste des entreprises\">
                        <i class=\"bi bi-arrow-left me-1\"></i>
                        Retour
                    </a>
                    
                    <a href=\"{{ path('app_super_admin_hma_service_edit', {'id': hma_service.id}) }}\" 
                       class=\"btn btn-action btn-edit\"
                       title=\"Modifier cette entreprise\">
                        <i class=\"bi bi-pencil me-1\"></i>
                        Modifier
                    </a>
                    
                    <a href=\"{{ path('app_super_admin_hma_service_subscriptions', {'id': hma_service.id}) }}\" 
                       class=\"btn btn-action btn-history\"
                       title=\"Voir l'historique des abonnements\">
                        <i class=\"bi bi-clock-history me-1\"></i>
                        Historique
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mini statistiques rapides -->
    <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
        <div class=\"col-6 col-md-3\">
            <div class=\"stat-mini-card\">
                <div class=\"stat-mini-icon text-primary\">
                    <i class=\"bi bi-box\"></i>
                </div>
                <div class=\"stat-mini-value\">{{ total_products }}</div>
                <div class=\"stat-mini-label\">Produits</div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"stat-mini-card\">
                <div class=\"stat-mini-icon text-success\">
                    <i class=\"bi bi-cart\"></i>
                </div>
                <div class=\"stat-mini-value\">{{ total_orders }}</div>
                <div class=\"stat-mini-label\">Commandes</div>
                {% if orders_evolution is defined and orders_evolution != 0 %}
                    <span class=\"evolution-badge {{ orders_evolution > 0 ? 'evolution-up' : 'evolution-down' }} mt-1\">
                        <i class=\"bi bi-arrow-{{ orders_evolution > 0 ? 'up' : 'down' }}\"></i>
                        {{ orders_evolution|abs }}%
                    </span>
                {% endif %}
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"stat-mini-card\">
                <div class=\"stat-mini-icon text-info\">
                    <i class=\"bi bi-tags\"></i>
                </div>
                <div class=\"stat-mini-value\">{{ total_categories }}</div>
                <div class=\"stat-mini-label\">Catégories</div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"stat-mini-card\">
                <div class=\"stat-mini-icon text-warning\">
                    <i class=\"bi bi-truck\"></i>
                </div>
                <div class=\"stat-mini-value\">{{ total_suppliers }}</div>
                <div class=\"stat-mini-label\">Fournisseurs</div>
            </div>
        </div>
    </div>

    <!-- Cartes d'information améliorées -->
    <div class=\"row g-2 g-md-4 mb-3 mb-md-4\">
        <!-- Contact -->
        <div class=\"col-12 col-md-4\">
            <div class=\"card info-card animated-card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"bi bi-envelope me-2 text-primary animated-icon\"></i>
                        Contact
                    </h5>
                    <hr>
                    <div class=\"d-flex align-items-center mb-2 mb-md-3\">
                        <div class=\"bg-primary bg-opacity-10 p-2 rounded-circle me-2 me-md-3\">
                            <i class=\"bi bi-envelope text-primary\"></i>
                        </div>
                        <div>
                            <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">Email</small>
                            <a href=\"mailto:{{ hma_service.email }}\" class=\"text-decoration-none text-dark fw-bold small\">
                                {{ hma_service.email|slice(0, 25) }}{% if hma_service.email|length > 25 %}...{% endif %}
                            </a>
                        </div>
                    </div>
                    
                    {% if hma_service.phone %}
                        <div class=\"d-flex align-items-center mb-2 mb-md-3\">
                            <div class=\"bg-success bg-opacity-10 p-2 rounded-circle me-2 me-md-3\">
                                <i class=\"bi bi-telephone text-success\"></i>
                            </div>
                            <div>
                                <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">Téléphone</small>
                                <a href=\"tel:{{ hma_service.phone }}\" class=\"text-decoration-none text-dark fw-bold small\">
                                    {{ hma_service.phone }}
                                </a>
                            </div>
                        </div>
                    {% endif %}
                    
                    {% if hma_service.address %}
                        <div class=\"d-flex align-items-center\">
                            <div class=\"bg-info bg-opacity-10 p-2 rounded-circle me-2 me-md-3\">
                                <i class=\"bi bi-geo-alt text-info\"></i>
                            </div>
                            <div>
                                <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">Adresse</small>
                                <span class=\"text-dark small\">
                                    {{ hma_service.address|slice(0, 30) }}{% if hma_service.address|length > 30 %}...{% endif %}<br>
                                    {% if hma_service.city %}{{ hma_service.city }}, {% endif %}
                                    {{ hma_service.country ?? 'Sénégal' }}
                                </span>
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>

        <!-- Dates clés améliorées -->
        <div class=\"col-12 col-md-4\">
            <div class=\"card info-card animated-card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"bi bi-calendar me-2 text-primary animated-icon\"></i>
                        Dates clés
                    </h5>
                    <hr>
                    
                    <div class=\"row g-2 g-md-3\">
                        <div class=\"col-6\">
                            <div class=\"bg-light p-2 p-md-3 rounded-3 text-center\">
                                <small class=\"text-muted d-block mb-1\" style=\"font-size:0.5rem;\">Création</small>
                                <div class=\"fw-bold counter-number\" data-tooltip=\"Date de création\" style=\"font-size:0.7rem;\">
                                    <i class=\"bi bi-calendar-plus me-1 text-primary\"></i>
                                    {{ created_at|date('d/m/Y') }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"bg-light p-2 p-md-3 rounded-3 text-center\">
                                <small class=\"text-muted d-block mb-1\" style=\"font-size:0.5rem;\">Activation</small>
                                <div class=\"fw-bold counter-number\" data-tooltip=\"Date d'activation\" style=\"font-size:0.7rem;\">
                                    <i class=\"bi bi-calendar-check me-1 text-success\"></i>
                                    {{ activated_at ? activated_at|date('d/m/Y') : '-' }}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr class=\"my-2 my-md-3\">
                    
                    <div class=\"row g-2 g-md-3\">
                        <div class=\"col-6\">
                            <div class=\"bg-light p-2 p-md-3 rounded-3 text-center\">
                                <small class=\"text-muted d-block mb-1\" style=\"font-size:0.5rem;\">Début abonnement</small>
                                <div class=\"fw-bold counter-number\" data-tooltip=\"Début de l'abonnement\" style=\"font-size:0.7rem;\">
                                    <i class=\"bi bi-play-circle me-1 text-info\"></i>
                                    {{ hma_service.subscriptionStartAt ? hma_service.subscriptionStartAt|date('d/m/Y') : '-' }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"bg-light p-2 p-md-3 rounded-3 text-center\">
                                <small class=\"text-muted d-block mb-1\" style=\"font-size:0.5rem;\">Fin abonnement</small>
                                <div class=\"fw-bold counter-number {{ subscription_ends_at and subscription_ends_at < date() ? 'text-danger' : '' }}\" 
                                     data-tooltip=\"Fin de l'abonnement\" style=\"font-size:0.7rem;\">
                                    <i class=\"bi bi-stop-circle me-1 {{ subscription_ends_at and subscription_ends_at < date() ? 'text-danger' : 'text-warning' }}\"></i>
                                    {{ subscription_ends_at ? subscription_ends_at|date('d/m/Y') : '-' }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Alerte essai -->
                    {% if trial_ends_at %}
                        <div class=\"alert-trial mt-2 mt-md-3\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"me-2 me-md-3\">
                                    <i class=\"bi bi-hourglass-split fs-5\"></i>
                                </div>
                                <div>
                                    <strong class=\"small\">Période d'essai</strong><br>
                                    <small style=\"font-size:0.6rem;\">
                                        Expire le {{ trial_ends_at|date('d/m/Y') }}
                                        ({{ trial_ends_at|time_diff }})
                                    </small>
                                </div>
                                <div class=\"ms-auto\">
                                    <span class=\"badge bg-dark\" style=\"font-size:0.55rem;\">
                                        {{ trial_ends_at|date('d/m/Y') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    {% endif %}

                    <!-- Alerte expiration abonnement -->
                    {% if days_until_expiration is defined and days_until_expiration is not null and days_until_expiration <= 30 %}
                        <div class=\"alert alert-warning mt-2 py-1 px-2\" style=\"font-size:0.65rem;\">
                            <i class=\"bi bi-exclamation-triangle me-2\"></i>
                            <strong>Attention :</strong> Abonnement expire dans {{ days_until_expiration }} jours
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>

        <!-- Localisation -->
        <div class=\"col-12 col-md-4\">
            <div class=\"card info-card animated-card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"bi bi-geo me-2 text-primary animated-icon\"></i>
                        Localisation
                    </h5>
                    <hr>
                    {% if hma_service.latitude and hma_service.longitude %}
                        <div id=\"map\"></div>
                        <div class=\"d-flex justify-content-between mt-2 mt-md-3\">
                            <small class=\"text-muted\" style=\"font-size:0.55rem;\">
                                <i class=\"bi bi-geo-alt me-1\"></i>
                                Lat: {{ hma_service.latitude|slice(0, 8) }}
                            </small>
                            <small class=\"text-muted\" style=\"font-size:0.55rem;\">
                                <i class=\"bi bi-geo-alt me-1\"></i>
                                Long: {{ hma_service.longitude|slice(0, 8) }}
                            </small>
                        </div>
                    {% else %}
                        <div class=\"text-center py-3 py-md-4\">
                            <div class=\"mb-2 mb-md-3\">
                                <i class=\"bi bi-geo-alt fs-1 text-muted\"></i>
                            </div>
                            <h6 class=\"text-muted small\">Aucune localisation</h6>
                            <p class=\"text-muted small\" style=\"font-size:0.6rem;\">Cette entreprise n'a pas renseigné de coordonnées GPS.</p>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

    <!-- Statistiques d'utilisation améliorées -->
    <div class=\"row g-2 g-md-4 mb-3 mb-md-4\">
        <div class=\"col-12 col-md-6\">
            <div class=\"card animated-card\">
                <div class=\"card-header bg-white border-0 pt-3 pt-md-4\">
                    <h5 class=\"mb-0 fs-6 fs-md-5\">
                        <i class=\"bi bi-bar-chart me-2 text-primary\"></i>
                        Utilisation des ressources
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <!-- Produits -->
                    <div class=\"mb-2 mb-md-4\">
                        <div class=\"d-flex justify-content-between align-items-center mb-1\">
                            <span class=\"fw-semibold small\">
                                <i class=\"bi bi-box me-2 text-primary\"></i>
                                Produits
                            </span>
                            <span class=\"counter-number\" style=\"font-size:0.7rem;\">
                                <strong>{{ hma_service.productCount }}</strong>
                                <small class=\"text-muted\" style=\"font-size:0.5rem;\">/ {{ usage_stats.products.limit == constant('PHP_INT_MAX') ? '∞' : usage_stats.products.limit }}</small>
                            </span>
                        </div>
                        <div class=\"progress usage-progress\">
                            <div class=\"progress-bar bg-primary\" 
                                 style=\"width: {{ usage_stats.products.percentage }}%\">
                            </div>
                        </div>
                        <small class=\"text-muted mt-1 d-block\" style=\"font-size:0.5rem;\">
                            <i class=\"bi bi-arrow-right me-1\"></i>
                            {{ usage_stats.products.remaining == constant('PHP_INT_MAX') ? 'Illimité' : usage_stats.products.remaining ~ ' restants' }}
                        </small>
                    </div>

                    <!-- Catégories -->
                    <div class=\"mb-2 mb-md-4\">
                        <div class=\"d-flex justify-content-between align-items-center mb-1\">
                            <span class=\"fw-semibold small\">
                                <i class=\"bi bi-tags me-2 text-success\"></i>
                                Catégories
                            </span>
                            <span class=\"counter-number\" style=\"font-size:0.7rem;\">
                                <strong>{{ hma_service.categoryCount }}</strong>
                                <small class=\"text-muted\" style=\"font-size:0.5rem;\">/ {{ usage_stats.categories.limit == constant('PHP_INT_MAX') ? '∞' : usage_stats.categories.limit }}</small>
                            </span>
                        </div>
                        <div class=\"progress usage-progress\">
                            <div class=\"progress-bar bg-success\" 
                                 style=\"width: {{ (hma_service.categoryCount / usage_stats.categories.limit * 100)|round }}%\">
                            </div>
                        </div>
                    </div>

                    <!-- Fournisseurs -->
                    <div class=\"mb-2 mb-md-4\">
                        <div class=\"d-flex justify-content-between align-items-center mb-1\">
                            <span class=\"fw-semibold small\">
                                <i class=\"bi bi-truck me-2 text-warning\"></i>
                                Fournisseurs
                            </span>
                            <span class=\"counter-number\" style=\"font-size:0.7rem;\">
                                <strong>{{ hma_service.supplierCount }}</strong>
                                <small class=\"text-muted\" style=\"font-size:0.5rem;\">/ {{ usage_stats.suppliers.limit == constant('PHP_INT_MAX') ? '∞' : usage_stats.suppliers.limit }}</small>
                            </span>
                        </div>
                        <div class=\"progress usage-progress\">
                            <div class=\"progress-bar bg-warning\" 
                                 style=\"width: {{ (hma_service.supplierCount / usage_stats.suppliers.limit * 100)|round }}%\">
                            </div>
                        </div>
                    </div>

                    <!-- Utilisateurs -->
                    <div class=\"mt-2 mt-md-4 pt-2 border-top\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <span class=\"fw-semibold small\">
                                <i class=\"bi bi-people me-2 text-info\"></i>
                                Utilisateurs
                            </span>
                            <span class=\"counter-number\" style=\"font-size:0.7rem;\">
                                <strong>{{ total_users_count }}</strong>
                                <small class=\"text-muted\" style=\"font-size:0.5rem;\">total</small>
                            </span>
                        </div>
                        
                        <!-- Répartition des utilisateurs -->
                        <div class=\"d-flex justify-content-between mt-1 small\" style=\"font-size:0.5rem;\">
                            <span class=\"text-success\">
                                <i class=\"bi bi-person-check\"></i>
                                {{ active_users_count }} actifs
                            </span>
                            <span class=\"text-warning\">
                                <i class=\"bi bi-person-exclamation\"></i>
                                {{ out_of_quota_count }} hors quota
                            </span>
                            <span class=\"text-muted\">
                                <i class=\"bi bi-person-x\"></i>
                                {{ inactive_by_admin_count }} désactivés
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fonctionnalités disponibles -->
        <div class=\"col-12 col-md-6\">
            <div class=\"card animated-card h-100\">
                <div class=\"card-header bg-white border-0 pt-3 pt-md-4\">
                    <h5 class=\"mb-0 fs-6 fs-md-5\">
                        <i class=\"bi bi-stars me-2 text-primary\"></i>
                        Fonctionnalités disponibles
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex flex-wrap gap-1 gap-md-2\">
                        {% for feature in usage_stats.features %}
                            <span class=\"feature-badge\">
                                <i class=\"bi bi-check-circle-fill text-success me-1\"></i>
                                {% if feature == 'all' %}
                                    Toutes
                                {% elseif feature == 'basic_inventory' %}
                                    Inventaire basique
                                {% elseif feature == 'basic_reports' %}
                                    Rapports basiques
                                {% elseif feature == 'advanced_inventory' %}
                                    Inventaire avancé
                                {% elseif feature == 'reports' %}
                                    Rapports avancés
                                {% elseif feature == 'api_access' %}
                                    Accès API
                                {% elseif feature == 'priority_support' %}
                                    Support prioritaire
                                {% elseif feature == 'custom_domain' %}
                                    Domaine personnalisé
                                {% elseif feature == 'white_label' %}
                                    White Label
                                {% else %}
                                    {{ feature|replace({'_': ' '})|title|slice(0, 15) }}
                                {% endif %}
                            </span>
                        {% else %}
                            <div class=\"text-center py-3 py-md-4 w-100\">
                                <i class=\"bi bi-exclamation-circle fs-1 text-muted mb-2\"></i>
                                <p class=\"text-muted mb-0 small\">Aucune fonctionnalité disponible</p>
                            </div>
                        {% endfor %}
                    </div>

                    {% if usage_stats.features is not empty %}
                        <div class=\"mt-2 mt-md-4 p-2 p-md-3 bg-light rounded-3\">
                            <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-center gap-2\">
                                <div>
                                    <small class=\"text-muted d-block mb-1\" style=\"font-size:0.5rem;\">
                                        <i class=\"bi bi-info-circle me-1\"></i>
                                        Plan actuel
                                    </small>
                                    <!-- BADGE PLAN -->
                                    {% if hma_service.currentPlan == 'trial' %}
                                        <span class=\"badge plan-trial plan-badge p-1 p-md-2\" style=\"font-size:0.55rem;\">
                                            <i class=\"bi bi-hourglass-split me-1\"></i>
                                            {{ hma_service.currentPlanLabel }}
                                        </span>
                                    {% elseif hma_service.currentPlan == 'freemium' %}
                                        <span class=\"badge plan-freemium plan-badge p-1 p-md-2\" style=\"font-size:0.55rem;\">
                                            <i class=\"bi bi-gift me-1\"></i>
                                            {{ hma_service.currentPlanLabel }}
                                        </span>
                                    {% elseif hma_service.currentPlan == 'basic' %}
                                        <span class=\"badge plan-basic plan-badge p-1 p-md-2\" style=\"font-size:0.55rem;\">
                                            <i class=\"bi bi-rocket me-1\"></i>
                                            {{ hma_service.currentPlanLabel }}
                                        </span>
                                    {% elseif hma_service.currentPlan == 'premium' %}
                                        <span class=\"badge plan-premium plan-badge p-1 p-md-2\" style=\"font-size:0.55rem;\">
                                            <i class=\"bi bi-stars me-1\"></i>
                                            {{ hma_service.currentPlanLabel }}
                                        </span>
                                    {% else %}
                                        <span class=\"badge bg-secondary plan-badge p-1 p-md-2\" style=\"font-size:0.55rem;\">{{ hma_service.currentPlanLabel }}</span>
                                    {% endif %}
                                </div>
                                {% if usage_stats.trial_days_remaining > 0 %}
                                    <div class=\"text-warning small\" style=\"font-size:0.55rem;\">
                                        <i class=\"bi bi-hourglass-split me-1\"></i>
                                        {{ usage_stats.trial_days_remaining }} jours restants
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

    <!-- Statistiques par rôle améliorées avec statut -->
    <div class=\"row g-2 g-md-4 mb-3 mb-md-4\">
        <div class=\"col-12\">
            <div class=\"card animated-card\">
                <div class=\"card-header bg-white d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center py-2 py-md-3 gap-2\">
                    <h5 class=\"mb-0 fs-6 fs-md-5\">
                        <i class=\"bi bi-people me-2 text-primary\"></i>
                        Utilisateurs par rôle
                    </h5>
                    <div class=\"d-flex gap-1 gap-md-2 flex-wrap\">
                        <span class=\"badge bg-success\" style=\"font-size:0.5rem;\">
                            <i class=\"bi bi-person-check me-1\"></i>
                            Actifs: {{ active_users_count }}
                        </span>
                        <span class=\"badge bg-warning text-dark\" style=\"font-size:0.5rem;\">
                            <i class=\"bi bi-person-exclamation me-1\"></i>
                            Hors quota: {{ out_of_quota_count }}
                        </span>
                        <span class=\"badge bg-secondary\" style=\"font-size:0.5rem;\">
                            <i class=\"bi bi-person-x me-1\"></i>
                            Désactivés: {{ inactive_by_admin_count }}
                        </span>
                    </div>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"row g-2 g-md-3\">
                        {% for role, data in users_by_role_with_status %}
                            <div class=\"col-6 col-md-3 mb-2 mb-md-3\">
                                <div class=\"role-card\">
                                    <div class=\"card-body\">
                                        <div class=\"d-flex flex-wrap justify-content-between align-items-start mb-2 gap-1\">
                                            <!-- BADGE RÔLE -->
                                            {% if role == 'ROLE_ADMIN' %}
                                                <span class=\"role-badge role-admin\" style=\"font-size:0.5rem;\">
                                                    <i class=\"bi bi-shield-check me-1\"></i>
                                                    {{ data.label|slice(0, 8) }}
                                                </span>
                                            {% elseif role == 'ROLE_MANAGER' %}
                                                <span class=\"role-badge role-manager\" style=\"font-size:0.5rem;\">
                                                    <i class=\"bi bi-graph-up me-1\"></i>
                                                    {{ data.label|slice(0, 8) }}
                                                </span>
                                            {% elseif role == 'ROLE_STOCK_MANAGER' %}
                                                <span class=\"role-badge role-stock\" style=\"font-size:0.5rem;\">
                                                    <i class=\"bi bi-box-seam me-1\"></i>
                                                    {{ data.label|slice(0, 8) }}
                                                </span>
                                            {% elseif role == 'ROLE_CASHIER' %}
                                                <span class=\"role-badge role-cashier\" style=\"font-size:0.5rem;\">
                                                    <i class=\"bi bi-cash-coin me-1\"></i>
                                                    {{ data.label|slice(0, 8) }}
                                                </span>
                                            {% else %}
                                                <span class=\"role-badge role-user\" style=\"font-size:0.5rem;\">
                                                    <i class=\"bi bi-person me-1\"></i>
                                                    {{ data.label|slice(0, 8) }}
                                                </span>
                                            {% endif %}
                                            <span class=\"badge bg-secondary\" style=\"font-size:0.4rem;\">{{ data.total }}</span>
                                        </div>
                                        
                                        <!-- Barre de progression du statut -->
                                        <div class=\"progress mb-2\" style=\"height: 4px; background-color: #e9ecef;\">
                                            {% set active_percent = data.total > 0 ? (data.active / data.total * 100)|round : 0 %}
                                            {% set quota_percent = data.total > 0 ? (data.quota / data.total * 100)|round : 0 %}
                                            {% set inactive_percent = 100 - active_percent - quota_percent %}
                                            
                                            <div class=\"progress-bar bg-success\" 
                                                 style=\"width: {{ active_percent }}%; border-radius: 4px 0 0 4px;\"
                                                 title=\"Actifs: {{ data.active }}\"></div>
                                            <div class=\"progress-bar bg-warning\" 
                                                 style=\"width: {{ quota_percent }}%;\"
                                                 title=\"Hors quota: {{ data.quota }}\"></div>
                                            <div class=\"progress-bar bg-secondary\" 
                                                 style=\"width: {{ inactive_percent }}%; border-radius: 0 4px 4px 0;\"
                                                 title=\"Désactivés: {{ data.inactive }}\"></div>
                                        </div>
                                        
                                        <!-- Détails des statuts -->
                                        <div class=\"d-flex justify-content-between text-center\">
                                            <div>
                                                <span class=\"fw-bold text-success\" style=\"font-size:0.55rem;\">{{ data.active }}</span>
                                                <div><small class=\"text-muted\" style=\"font-size:0.4rem;\">Actifs</small></div>
                                            </div>
                                            <div>
                                                <span class=\"fw-bold text-warning\" style=\"font-size:0.55rem;\">{{ data.quota }}</span>
                                                <div><small class=\"text-muted\" style=\"font-size:0.4rem;\">Quota</small></div>
                                            </div>
                                            <div>
                                                <span class=\"fw-bold text-secondary\" style=\"font-size:0.55rem;\">{{ data.inactive }}</span>
                                                <div><small class=\"text-muted\" style=\"font-size:0.4rem;\">Inactifs</small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% else %}
                            <div class=\"col-12 text-center py-3 py-md-5\">
                                <i class=\"bi bi-people fs-1 text-muted d-block mb-2\"></i>
                                <h5 class=\"text-muted small\">Aucun utilisateur</h5>
                                <p class=\"text-muted small\" style=\"font-size:0.6rem;\">Cette entreprise n'a pas encore d'utilisateurs.</p>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Derniers abonnements -->
    <div class=\"card animated-card\">
        <div class=\"card-header bg-white d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center py-2 py-md-3 gap-2\">
            <h5 class=\"mb-0 fs-6 fs-md-5\">
                <i class=\"bi bi-clock-history me-2 text-primary\"></i>
                Derniers abonnements
            </h5>
            <a href=\"{{ path('app_super_admin_hma_service_subscriptions', {'id': hma_service.id}) }}\" 
               class=\"btn btn-sm btn-outline-primary\" style=\"font-size:0.6rem; padding:0.15rem 0.4rem;\">
                Voir tout l'historique
                <i class=\"bi bi-arrow-right ms-1\"></i>
            </a>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table subscriptions-table mb-0\">
                    <thead>
                        <tr>
                            <th class=\"border-0 bg-light py-2 px-2 px-md-4\" style=\"font-size:0.6rem;\">Date</th>
                            <th class=\"border-0 bg-light py-2 px-2 px-md-4\" style=\"font-size:0.6rem;\">Plan</th>
                            <th class=\"border-0 bg-light py-2 px-2 px-md-4\" style=\"font-size:0.6rem;\">Montant</th>
                            <th class=\"border-0 bg-light py-2 px-2 px-md-4\" style=\"font-size:0.6rem;\">Statut</th>
                            <th class=\"border-0 bg-light py-2 px-2 px-md-4\" style=\"font-size:0.6rem;\">Date fin</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for subscription in subscriptions|slice(0, 5) %}
                            {% set plan = subscription.subscriptionPlan %}
                            <tr>
                                <td class=\"px-2 px-md-4\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"bi bi-calendar3 me-1 me-md-2 text-muted\" style=\"font-size:0.5rem;\"></i>
                                        <div>
                                            <div style=\"font-size:0.6rem;\">{{ subscription.createdAt|date('d/m/Y') }}</div>
                                            <small class=\"text-muted\" style=\"font-size:0.4rem;\">{{ subscription.createdAt|date('H:i') }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td class=\"px-2 px-md-4\">
                                    {% if plan %}
                                        {% if plan.name == 'trial' %}
                                            <span class=\"badge plan-trial plan-badge p-1\" style=\"font-size:0.45rem;\">
                                                <i class=\"bi bi-hourglass-split me-1\"></i>
                                                {{ plan.displayName|slice(0, 8) }}
                                            </span>
                                        {% elseif plan.name == 'freemium' %}
                                            <span class=\"badge plan-freemium plan-badge p-1\" style=\"font-size:0.45rem;\">
                                                <i class=\"bi bi-gift me-1\"></i>
                                                {{ plan.displayName|slice(0, 8) }}
                                            </span>
                                        {% elseif plan.name == 'basic' %}
                                            <span class=\"badge plan-basic plan-badge p-1\" style=\"font-size:0.45rem;\">
                                                <i class=\"bi bi-rocket me-1\"></i>
                                                {{ plan.displayName|slice(0, 8) }}
                                            </span>
                                        {% elseif plan.name == 'premium' %}
                                            <span class=\"badge plan-premium plan-badge p-1\" style=\"font-size:0.45rem;\">
                                                <i class=\"bi bi-stars me-1\"></i>
                                                {{ plan.displayName|slice(0, 8) }}
                                            </span>
                                        {% else %}
                                            <span class=\"badge bg-secondary plan-badge p-1\" style=\"font-size:0.45rem;\">{{ plan.displayName|slice(0, 8) }}</span>
                                        {% endif %}
                                    {% else %}
                                        <span class=\"badge bg-secondary plan-badge p-1\" style=\"font-size:0.45rem;\">Inconnu</span>
                                    {% endif %}
                                </td>
                                <td class=\"px-2 px-md-4\">
                                    {% if plan %}
                                        {% set amount = (subscription.billingPeriod == 'yearly') ? plan.priceYearly : plan.priceMonthly %}
                                        <div class=\"fw-bold text-dark\" style=\"font-size:0.6rem;\">
                                            {{ amount|number_format(0, ',', ' ') }}
                                            <small class=\"text-muted\" style=\"font-size:0.4rem;\">FCFA</small>
                                        </div>
                                    {% else %}
                                        <span class=\"text-muted\" style=\"font-size:0.5rem;\">-</span>
                                    {% endif %}
                                </td>
                                <td class=\"px-2 px-md-4\">
                                    {% if subscription.status == 'active' %}
                                        <span class=\"status-badge status-active\" style=\"font-size:0.45rem; padding:0.1rem 0.3rem;\">
                                            <i class=\"bi bi-check-circle\"></i> Actif
                                        </span>
                                    {% elseif subscription.status == 'pending' %}
                                        <span class=\"status-badge status-trial\" style=\"font-size:0.45rem; padding:0.1rem 0.3rem;\">
                                            <i class=\"bi bi-hourglass\"></i> En attente
                                        </span>
                                    {% elseif subscription.status == 'expired' %}
                                        <span class=\"status-badge status-inactive\" style=\"font-size:0.45rem; padding:0.1rem 0.3rem;\">
                                            <i class=\"bi bi-x-circle\"></i> Expiré
                                        </span>
                                    {% else %}
                                        <span class=\"badge bg-secondary\" style=\"font-size:0.4rem;\">{{ subscription.status|capitalize|slice(0, 6) }}</span>
                                    {% endif %}
                                </td>
                                <td class=\"px-2 px-md-4\">
                                    {% if subscription.endsAt %}
                                        <div class=\"d-flex align-items-center\">
                                            <i class=\"bi bi-calendar-x me-1 text-muted\" style=\"font-size:0.4rem;\"></i>
                                            <span class=\"{{ subscription.endsAt < date() ? 'text-danger fw-bold' : '' }}\" style=\"font-size:0.55rem;\">
                                                {{ subscription.endsAt|date('d/m/Y') }}
                                            </span>
                                        </div>
                                    {% else %}
                                        <span class=\"text-muted\" style=\"font-size:0.5rem;\">-</span>
                                    {% endif %}
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"5\" class=\"text-center py-3 py-md-5\">
                                    <i class=\"bi bi-clock-history fs-1 text-muted d-block mb-2\"></i>
                                    <h5 class=\"text-muted small\">Aucun abonnement</h5>
                                    <p class=\"text-muted small\" style=\"font-size:0.6rem;\">Cette entreprise n'a pas encore d'historique d'abonnements.</p>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Carte Leaflet -->
{% if hma_service.latitude and hma_service.longitude %}
    {% block javascripts %}
        {{ parent() }}
        <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" />
        <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const map = L.map('map').setView([{{ hma_service.latitude }}, {{ hma_service.longitude }}], 15);
                
                L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
                    attribution: '©OpenStreetMap, ©CartoDB',
                    subdomains: 'abcd',
                    maxZoom: 19
                }).addTo(map);
                
                const customIcon = L.divIcon({
                    className: 'custom-marker',
                    html: '<div style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); width: 30px; height: 30px; border-radius: 50%; border: 3px solid white; box-shadow: 0 5px 15px rgba(0,0,0,0.3); display: flex; align-items: center; justify-content: center;\"><i class=\"bi bi-building\" style=\"color: white; font-size: 14px;\"></i></div>',
                    iconSize: [30, 30],
                    iconAnchor: [15, 15],
                    popupAnchor: [0, -15]
                });
                
                L.marker([{{ hma_service.latitude }}, {{ hma_service.longitude }}], { icon: customIcon })
                    .addTo(map)
                    .bindPopup(`
                        <div style=\"text-align: center; padding: 5px;\">
                            <strong style=\"color: #667eea; font-size: 12px;\">{{ hma_service.companyName|slice(0, 20) }}</strong><br>
                            <small style=\"font-size: 10px;\">{{ hma_service.address ?: 'Adresse non renseignée'|slice(0, 30) }}</small>
                        </div>
                    `)
                    .openPopup();
            });
        </script>
    {% endblock %}
{% endif %}
{% endblock %}", "super_admin/hma_service/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\hma_service\\show.html.twig");
    }
}
