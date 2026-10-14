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
class __TwigTemplate_9bcb466dece59ed3633f8bca6eccac15 extends Template
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
        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "companyName", [], "any", false, false, false, 4), "html", null, true);
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
        yield from [];
    }

    // line 943
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "companyName", [], "any", false, false, false, 955), 0, 20), "html", null, true);
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "companyName", [], "any", false, false, false, 955)) > 20)) {
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "logo", [], "any", false, false, false, 964)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 965
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "logo", [], "any", false, false, false, 965))), "html", null, true);
            yield "\" 
                         alt=\"";
            // line 966
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "companyName", [], "any", false, false, false, 966), "html", null, true);
            yield "\" 
                         class=\"company-logo-large\">
                ";
        } else {
            // line 969
            yield "                    <div class=\"company-initials-large mx-auto mx-md-0\">
                        ";
            // line 970
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "companyName", [], "any", false, false, false, 970))), "html", null, true);
            yield "
                    </div>
                ";
        }
        // line 973
        yield "            </div>
            <div class=\"col-12 col-md text-center text-md-start\">
                <h1 class=\"display-4 mb-1 mb-md-2 fw-bold\">";
        // line 975
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "companyName", [], "any", false, false, false, 975), "html", null, true);
        yield "</h1>
                <div class=\"d-flex gap-1 gap-md-2 flex-wrap justify-content-center justify-content-md-start\">
                    <span class=\"badge badge-custom bg-white text-dark\">
                        <i class=\"bi bi-hash me-1\"></i>
                        #";
        // line 979
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "subscriptionNumber", [], "any", false, false, false, 979), "html", null, true);
        yield "
                    </span>
                    <span class=\"badge badge-custom bg-white text-dark\">
                        <i class=\"bi bi-tag me-1\"></i>
                        ";
        // line 983
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "companyType", [], "any", false, false, false, 983)), "html", null, true);
        yield "
                    </span>
                    
                    <!-- BADGE STATUT -->
                    ";
        // line 987
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "hmaActive", [], "any", false, false, false, 987)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "currentPlan", [], "any", false, false, false, 1000) == "trial")) {
            // line 1001
            yield "                        <span class=\"badge plan-trial plan-badge\">
                            <i class=\"bi bi-hourglass-split me-1\"></i>
                            ";
            // line 1003
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "currentPlanLabel", [], "any", false, false, false, 1003), "html", null, true);
            yield "
                        </span>
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 1005
($context["hma_service"] ?? null), "currentPlan", [], "any", false, false, false, 1005) == "freemium")) {
            // line 1006
            yield "                        <span class=\"badge plan-freemium plan-badge\">
                            <i class=\"bi bi-gift me-1\"></i>
                            ";
            // line 1008
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "currentPlanLabel", [], "any", false, false, false, 1008), "html", null, true);
            yield "
                        </span>
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 1010
($context["hma_service"] ?? null), "currentPlan", [], "any", false, false, false, 1010) == "basic")) {
            // line 1011
            yield "                        <span class=\"badge plan-basic plan-badge\">
                            <i class=\"bi bi-rocket me-1\"></i>
                            ";
            // line 1013
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "currentPlanLabel", [], "any", false, false, false, 1013), "html", null, true);
            yield "
                        </span>
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 1015
($context["hma_service"] ?? null), "currentPlan", [], "any", false, false, false, 1015) == "premium")) {
            // line 1016
            yield "                        <span class=\"badge plan-premium plan-badge\">
                            <i class=\"bi bi-stars me-1\"></i>
                            ";
            // line 1018
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "currentPlanLabel", [], "any", false, false, false, 1018), "html", null, true);
            yield "
                        </span>
                    ";
        } else {
            // line 1021
            yield "                        <span class=\"badge bg-secondary plan-badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "currentPlanLabel", [], "any", false, false, false, 1021), "html", null, true);
            yield "</span>
                    ";
        }
        // line 1023
        yield "                    
                    <!-- BADGE ABONNEMENT ACTIF -->
                    ";
        // line 1025
        if ((($tmp = ($context["has_active_subscription"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "users", [], "any", false, false, false, 1040));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 1041
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "loginAt", [], "any", false, false, false, 1041) && ((null === ($context["lastLogin"] ?? null)) || (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "loginAt", [], "any", false, false, false, 1041) > ($context["lastLogin"] ?? null))))) {
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
        if ((($tmp = ($context["lastLogin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1054
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["lastLogin"] ?? null), "d/m/Y H:i"), "html", null, true);
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
        if ((($tmp = ($context["online"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "text-success";
        } else {
            yield "text-secondary";
        }
        yield "\" style=\"font-size: 0.6rem;\"></i>
                        ";
        // line 1061
        yield (((($tmp = ($context["online"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("En ligne") : ("Hors ligne"));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "id", [], "any", false, false, false, 1074)]), "html", null, true);
        yield "\" 
                       class=\"btn btn-action btn-edit\"
                       title=\"Modifier cette entreprise\">
                        <i class=\"bi bi-pencil me-1\"></i>
                        Modifier
                    </a>
                    
                    <a href=\"";
        // line 1081
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_subscriptions", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "id", [], "any", false, false, false, 1081)]), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_products"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_orders"] ?? null), "html", null, true);
        yield "</div>
                <div class=\"stat-mini-label\">Commandes</div>
                ";
        // line 1110
        if ((array_key_exists("orders_evolution", $context) && (($context["orders_evolution"] ?? null) != 0))) {
            // line 1111
            yield "                    <span class=\"evolution-badge ";
            yield (((($context["orders_evolution"] ?? null) > 0)) ? ("evolution-up") : ("evolution-down"));
            yield " mt-1\">
                        <i class=\"bi bi-arrow-";
            // line 1112
            yield (((($context["orders_evolution"] ?? null) > 0)) ? ("up") : ("down"));
            yield "\"></i>
                        ";
            // line 1113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(abs(($context["orders_evolution"] ?? null)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_categories"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_suppliers"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "email", [], "any", false, false, false, 1155), "html", null, true);
        yield "\" class=\"text-decoration-none text-dark fw-bold small\">
                                ";
        // line 1156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "email", [], "any", false, false, false, 1156), 0, 25), "html", null, true);
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "email", [], "any", false, false, false, 1156)) > 25)) {
            yield "...";
        }
        // line 1157
        yield "                            </a>
                        </div>
                    </div>
                    
                    ";
        // line 1161
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "phone", [], "any", false, false, false, 1161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1162
            yield "                        <div class=\"d-flex align-items-center mb-2 mb-md-3\">
                            <div class=\"bg-success bg-opacity-10 p-2 rounded-circle me-2 me-md-3\">
                                <i class=\"bi bi-telephone text-success\"></i>
                            </div>
                            <div>
                                <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">Téléphone</small>
                                <a href=\"tel:";
            // line 1168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "phone", [], "any", false, false, false, 1168), "html", null, true);
            yield "\" class=\"text-decoration-none text-dark fw-bold small\">
                                    ";
            // line 1169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "phone", [], "any", false, false, false, 1169), "html", null, true);
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "address", [], "any", false, false, false, 1175)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "address", [], "any", false, false, false, 1183), 0, 30), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "address", [], "any", false, false, false, 1183)) > 30)) {
                yield "...";
            }
            yield "<br>
                                    ";
            // line 1184
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "city", [], "any", false, false, false, 1184)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "city", [], "any", false, false, false, 1184), "html", null, true);
                yield ", ";
            }
            // line 1185
            yield "                                    ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "country", [], "any", true, true, false, 1185) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "country", [], "any", false, false, false, 1185)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "country", [], "any", false, false, false, 1185), "html", null, true)) : ("Sénégal"));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["created_at"] ?? null), "d/m/Y"), "html", null, true);
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
        yield (((($tmp = ($context["activated_at"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["activated_at"] ?? null), "d/m/Y"), "html", null, true)) : ("-"));
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
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "subscriptionStartAt", [], "any", false, false, false, 1233)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "subscriptionStartAt", [], "any", false, false, false, 1233), "d/m/Y"), "html", null, true)) : ("-"));
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"bg-light p-2 p-md-3 rounded-3 text-center\">
                                <small class=\"text-muted d-block mb-1\" style=\"font-size:0.5rem;\">Fin abonnement</small>
                                <div class=\"fw-bold counter-number ";
        // line 1240
        yield (((($context["subscription_ends_at"] ?? null) && (($context["subscription_ends_at"] ?? null) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) ? ("text-danger") : (""));
        yield "\" 
                                     data-tooltip=\"Fin de l'abonnement\" style=\"font-size:0.7rem;\">
                                    <i class=\"bi bi-stop-circle me-1 ";
        // line 1242
        yield (((($context["subscription_ends_at"] ?? null) && (($context["subscription_ends_at"] ?? null) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) ? ("text-danger") : ("text-warning"));
        yield "\"></i>
                                    ";
        // line 1243
        yield (((($tmp = ($context["subscription_ends_at"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["subscription_ends_at"] ?? null), "d/m/Y"), "html", null, true)) : ("-"));
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Alerte essai -->
                    ";
        // line 1250
        if ((($tmp = ($context["trial_ends_at"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["trial_ends_at"] ?? null), "d/m/Y"), "html", null, true);
            yield "
                                        (";
            // line 1260
            yield $this->env->getRuntime('Knp\Bundle\TimeBundle\DateTimeFormatter')->formatDiff(($context["trial_ends_at"] ?? null));
            yield ")
                                    </small>
                                </div>
                                <div class=\"ms-auto\">
                                    <span class=\"badge bg-dark\" style=\"font-size:0.55rem;\">
                                        ";
            // line 1265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["trial_ends_at"] ?? null), "d/m/Y"), "html", null, true);
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
        if (((array_key_exists("days_until_expiration", $context) &&  !(null === ($context["days_until_expiration"] ?? null))) && (($context["days_until_expiration"] ?? null) <= 30))) {
            // line 1274
            yield "                        <div class=\"alert alert-warning mt-2 py-1 px-2\" style=\"font-size:0.65rem;\">
                            <i class=\"bi bi-exclamation-triangle me-2\"></i>
                            <strong>Attention :</strong> Abonnement expire dans ";
            // line 1276
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["days_until_expiration"] ?? null), "html", null, true);
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "latitude", [], "any", false, false, false, 1292) && CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "longitude", [], "any", false, false, false, 1292))) {
            // line 1293
            yield "                        <div id=\"map\"></div>
                        <div class=\"d-flex justify-content-between mt-2 mt-md-3\">
                            <small class=\"text-muted\" style=\"font-size:0.55rem;\">
                                <i class=\"bi bi-geo-alt me-1\"></i>
                                Lat: ";
            // line 1297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "latitude", [], "any", false, false, false, 1297), 0, 8), "html", null, true);
            yield "
                            </small>
                            <small class=\"text-muted\" style=\"font-size:0.55rem;\">
                                <i class=\"bi bi-geo-alt me-1\"></i>
                                Long: ";
            // line 1301
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "longitude", [], "any", false, false, false, 1301), 0, 8), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "productCount", [], "any", false, false, false, 1337), "html", null, true);
        yield "</strong>
                                <small class=\"text-muted\" style=\"font-size:0.5rem;\">/ ";
        // line 1338
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["usage_stats"] ?? null), "products", [], "any", false, false, false, 1338), "limit", [], "any", false, false, false, 1338) == Twig\Extension\CoreExtension::constant("PHP_INT_MAX"))) ? ("∞") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["usage_stats"] ?? null), "products", [], "any", false, false, false, 1338), "limit", [], "any", false, false, false, 1338), "html", null, true)));
        yield "</small>
                            </span>
                        </div>
                        <div class=\"progress usage-progress\">
                            <div class=\"progress-bar bg-primary\" 
                                 style=\"width: ";
        // line 1343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["usage_stats"] ?? null), "products", [], "any", false, false, false, 1343), "percentage", [], "any", false, false, false, 1343), "html", null, true);
        yield "%\">
                            </div>
                        </div>
                        <small class=\"text-muted mt-1 d-block\" style=\"font-size:0.5rem;\">
                            <i class=\"bi bi-arrow-right me-1\"></i>
                            ";
        // line 1348
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["usage_stats"] ?? null), "products", [], "any", false, false, false, 1348), "remaining", [], "any", false, false, false, 1348) == Twig\Extension\CoreExtension::constant("PHP_INT_MAX"))) ? ("Illimité") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["usage_stats"] ?? null), "products", [], "any", false, false, false, 1348), "remaining", [], "any", false, false, false, 1348) . " restants"), "html", null, true)));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "categoryCount", [], "any", false, false, false, 1360), "html", null, true);
        yield "</strong>
                                <small class=\"text-muted\" style=\"font-size:0.5rem;\">/ ";
        // line 1361
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["usage_stats"] ?? null), "categories", [], "any", false, false, false, 1361), "limit", [], "any", false, false, false, 1361) == Twig\Extension\CoreExtension::constant("PHP_INT_MAX"))) ? ("∞") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["usage_stats"] ?? null), "categories", [], "any", false, false, false, 1361), "limit", [], "any", false, false, false, 1361), "html", null, true)));
        yield "</small>
                            </span>
                        </div>
                        <div class=\"progress usage-progress\">
                            <div class=\"progress-bar bg-success\" 
                                 style=\"width: ";
        // line 1366
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "categoryCount", [], "any", false, false, false, 1366) / CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["usage_stats"] ?? null), "categories", [], "any", false, false, false, 1366), "limit", [], "any", false, false, false, 1366)) * 100)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "supplierCount", [], "any", false, false, false, 1379), "html", null, true);
        yield "</strong>
                                <small class=\"text-muted\" style=\"font-size:0.5rem;\">/ ";
        // line 1380
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["usage_stats"] ?? null), "suppliers", [], "any", false, false, false, 1380), "limit", [], "any", false, false, false, 1380) == Twig\Extension\CoreExtension::constant("PHP_INT_MAX"))) ? ("∞") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["usage_stats"] ?? null), "suppliers", [], "any", false, false, false, 1380), "limit", [], "any", false, false, false, 1380), "html", null, true)));
        yield "</small>
                            </span>
                        </div>
                        <div class=\"progress usage-progress\">
                            <div class=\"progress-bar bg-warning\" 
                                 style=\"width: ";
        // line 1385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "supplierCount", [], "any", false, false, false, 1385) / CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["usage_stats"] ?? null), "suppliers", [], "any", false, false, false, 1385), "limit", [], "any", false, false, false, 1385)) * 100)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_users_count"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active_users_count"] ?? null), "html", null, true);
        yield " actifs
                            </span>
                            <span class=\"text-warning\">
                                <i class=\"bi bi-person-exclamation\"></i>
                                ";
        // line 1411
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["out_of_quota_count"] ?? null), "html", null, true);
        yield " hors quota
                            </span>
                            <span class=\"text-muted\">
                                <i class=\"bi bi-person-x\"></i>
                                ";
        // line 1415
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inactive_by_admin_count"] ?? null), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["usage_stats"] ?? null), "features", [], "any", false, false, false, 1434));
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
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["usage_stats"] ?? null), "features", [], "any", false, false, false, 1467))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "currentPlan", [], "any", false, false, false, 1476) == "trial")) {
                // line 1477
                yield "                                        <span class=\"badge plan-trial plan-badge p-1 p-md-2\" style=\"font-size:0.55rem;\">
                                            <i class=\"bi bi-hourglass-split me-1\"></i>
                                            ";
                // line 1479
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "currentPlanLabel", [], "any", false, false, false, 1479), "html", null, true);
                yield "
                                        </span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 1481
($context["hma_service"] ?? null), "currentPlan", [], "any", false, false, false, 1481) == "freemium")) {
                // line 1482
                yield "                                        <span class=\"badge plan-freemium plan-badge p-1 p-md-2\" style=\"font-size:0.55rem;\">
                                            <i class=\"bi bi-gift me-1\"></i>
                                            ";
                // line 1484
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "currentPlanLabel", [], "any", false, false, false, 1484), "html", null, true);
                yield "
                                        </span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 1486
($context["hma_service"] ?? null), "currentPlan", [], "any", false, false, false, 1486) == "basic")) {
                // line 1487
                yield "                                        <span class=\"badge plan-basic plan-badge p-1 p-md-2\" style=\"font-size:0.55rem;\">
                                            <i class=\"bi bi-rocket me-1\"></i>
                                            ";
                // line 1489
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "currentPlanLabel", [], "any", false, false, false, 1489), "html", null, true);
                yield "
                                        </span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 1491
($context["hma_service"] ?? null), "currentPlan", [], "any", false, false, false, 1491) == "premium")) {
                // line 1492
                yield "                                        <span class=\"badge plan-premium plan-badge p-1 p-md-2\" style=\"font-size:0.55rem;\">
                                            <i class=\"bi bi-stars me-1\"></i>
                                            ";
                // line 1494
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "currentPlanLabel", [], "any", false, false, false, 1494), "html", null, true);
                yield "
                                        </span>
                                    ";
            } else {
                // line 1497
                yield "                                        <span class=\"badge bg-secondary plan-badge p-1 p-md-2\" style=\"font-size:0.55rem;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "currentPlanLabel", [], "any", false, false, false, 1497), "html", null, true);
                yield "</span>
                                    ";
            }
            // line 1499
            yield "                                </div>
                                ";
            // line 1500
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["usage_stats"] ?? null), "trial_days_remaining", [], "any", false, false, false, 1500) > 0)) {
                // line 1501
                yield "                                    <div class=\"text-warning small\" style=\"font-size:0.55rem;\">
                                        <i class=\"bi bi-hourglass-split me-1\"></i>
                                        ";
                // line 1503
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["usage_stats"] ?? null), "trial_days_remaining", [], "any", false, false, false, 1503), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active_users_count"] ?? null), "html", null, true);
        yield "
                        </span>
                        <span class=\"badge bg-warning text-dark\" style=\"font-size:0.5rem;\">
                            <i class=\"bi bi-person-exclamation me-1\"></i>
                            Hors quota: ";
        // line 1530
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["out_of_quota_count"] ?? null), "html", null, true);
        yield "
                        </span>
                        <span class=\"badge bg-secondary\" style=\"font-size:0.5rem;\">
                            <i class=\"bi bi-person-x me-1\"></i>
                            Désactivés: ";
        // line 1534
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inactive_by_admin_count"] ?? null), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"row g-2 g-md-3\">
                        ";
        // line 1540
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["users_by_role_with_status"] ?? null));
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
            $context["inactive_percent"] = ((100 - ($context["active_percent"] ?? null)) - ($context["quota_percent"] ?? null));
            // line 1580
            yield "                                            
                                            <div class=\"progress-bar bg-success\" 
                                                 style=\"width: ";
            // line 1582
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active_percent"] ?? null), "html", null, true);
            yield "%; border-radius: 4px 0 0 4px;\"
                                                 title=\"Actifs: ";
            // line 1583
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "active", [], "any", false, false, false, 1583), "html", null, true);
            yield "\"></div>
                                            <div class=\"progress-bar bg-warning\" 
                                                 style=\"width: ";
            // line 1585
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quota_percent"] ?? null), "html", null, true);
            yield "%;\"
                                                 title=\"Hors quota: ";
            // line 1586
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "quota", [], "any", false, false, false, 1586), "html", null, true);
            yield "\"></div>
                                            <div class=\"progress-bar bg-secondary\" 
                                                 style=\"width: ";
            // line 1588
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inactive_percent"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_subscriptions", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "id", [], "any", false, false, false, 1630)]), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["subscriptions"] ?? null), 0, 5));
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
            if ((($tmp = ($context["plan"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1663
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "name", [], "any", false, false, false, 1663) == "trial")) {
                    // line 1664
                    yield "                                            <span class=\"badge plan-trial plan-badge p-1\" style=\"font-size:0.45rem;\">
                                                <i class=\"bi bi-hourglass-split me-1\"></i>
                                                ";
                    // line 1666
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "displayName", [], "any", false, false, false, 1666), 0, 8), "html", null, true);
                    yield "
                                            </span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 1668
($context["plan"] ?? null), "name", [], "any", false, false, false, 1668) == "freemium")) {
                    // line 1669
                    yield "                                            <span class=\"badge plan-freemium plan-badge p-1\" style=\"font-size:0.45rem;\">
                                                <i class=\"bi bi-gift me-1\"></i>
                                                ";
                    // line 1671
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "displayName", [], "any", false, false, false, 1671), 0, 8), "html", null, true);
                    yield "
                                            </span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 1673
($context["plan"] ?? null), "name", [], "any", false, false, false, 1673) == "basic")) {
                    // line 1674
                    yield "                                            <span class=\"badge plan-basic plan-badge p-1\" style=\"font-size:0.45rem;\">
                                                <i class=\"bi bi-rocket me-1\"></i>
                                                ";
                    // line 1676
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "displayName", [], "any", false, false, false, 1676), 0, 8), "html", null, true);
                    yield "
                                            </span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 1678
($context["plan"] ?? null), "name", [], "any", false, false, false, 1678) == "premium")) {
                    // line 1679
                    yield "                                            <span class=\"badge plan-premium plan-badge p-1\" style=\"font-size:0.45rem;\">
                                                <i class=\"bi bi-stars me-1\"></i>
                                                ";
                    // line 1681
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "displayName", [], "any", false, false, false, 1681), 0, 8), "html", null, true);
                    yield "
                                            </span>
                                        ";
                } else {
                    // line 1684
                    yield "                                            <span class=\"badge bg-secondary plan-badge p-1\" style=\"font-size:0.45rem;\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "displayName", [], "any", false, false, false, 1684), 0, 8), "html", null, true);
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
            if ((($tmp = ($context["plan"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1692
                yield "                                        ";
                $context["amount"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "billingPeriod", [], "any", false, false, false, 1692) == "yearly")) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "priceYearly", [], "any", false, false, false, 1692)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "priceMonthly", [], "any", false, false, false, 1692)));
                // line 1693
                yield "                                        <div class=\"fw-bold text-dark\" style=\"font-size:0.6rem;\">
                                            ";
                // line 1694
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["amount"] ?? null), 0, ",", " "), "html", null, true);
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "latitude", [], "any", false, false, false, 1748) && CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "longitude", [], "any", false, false, false, 1748))) {
            // line 1749
            yield "    ";
            yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        }
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "latitude", [], "any", false, false, false, 1755), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "longitude", [], "any", false, false, false, 1755), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "latitude", [], "any", false, false, false, 1771), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "longitude", [], "any", false, false, false, 1771), "html", null, true);
        yield "], { icon: customIcon })
                    .addTo(map)
                    .bindPopup(`
                        <div style=\"text-align: center; padding: 5px;\">
                            <strong style=\"color: #667eea; font-size: 12px;\">";
        // line 1775
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "companyName", [], "any", false, false, false, 1775), 0, 20), "html", null, true);
        yield "</strong><br>
                            <small style=\"font-size: 10px;\">";
        // line 1776
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "address", [], "any", false, false, false, 1776)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_service"] ?? null), "address", [], "any", false, false, false, 1776), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), "Adresse non renseignée", 0, 30), "html", null, true)));
        yield "</small>
                        </div>
                    `)
                    .openPopup();
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
        return array (  2460 => 1776,  2456 => 1775,  2447 => 1771,  2426 => 1755,  2417 => 1750,  2404 => 1749,  2402 => 1748,  2392 => 1740,  2379 => 1732,  2377 => 1731,  2371 => 1729,  2367 => 1727,  2360 => 1723,  2356 => 1722,  2352 => 1720,  2350 => 1719,  2346 => 1717,  2340 => 1715,  2334 => 1711,  2332 => 1710,  2327 => 1707,  2325 => 1706,  2320 => 1703,  2318 => 1702,  2314 => 1700,  2310 => 1698,  2303 => 1694,  2300 => 1693,  2297 => 1692,  2295 => 1691,  2291 => 1689,  2287 => 1687,  2284 => 1686,  2278 => 1684,  2272 => 1681,  2268 => 1679,  2266 => 1678,  2261 => 1676,  2257 => 1674,  2255 => 1673,  2250 => 1671,  2246 => 1669,  2244 => 1668,  2239 => 1666,  2235 => 1664,  2232 => 1663,  2230 => 1662,  2222 => 1657,  2218 => 1656,  2211 => 1651,  2208 => 1650,  2203 => 1649,  2181 => 1630,  2166 => 1617,  2155 => 1611,  2153 => 1610,  2141 => 1603,  2134 => 1599,  2127 => 1595,  2118 => 1589,  2114 => 1588,  2109 => 1586,  2105 => 1585,  2100 => 1583,  2096 => 1582,  2092 => 1580,  2089 => 1579,  2086 => 1578,  2084 => 1577,  2075 => 1572,  2069 => 1569,  2065 => 1567,  2059 => 1564,  2055 => 1562,  2053 => 1561,  2048 => 1559,  2044 => 1557,  2042 => 1556,  2037 => 1554,  2033 => 1552,  2031 => 1551,  2026 => 1549,  2022 => 1547,  2020 => 1546,  2013 => 1541,  2008 => 1540,  1999 => 1534,  1992 => 1530,  1985 => 1526,  1966 => 1509,  1961 => 1506,  1955 => 1503,  1951 => 1501,  1949 => 1500,  1946 => 1499,  1940 => 1497,  1934 => 1494,  1930 => 1492,  1928 => 1491,  1923 => 1489,  1919 => 1487,  1917 => 1486,  1912 => 1484,  1908 => 1482,  1906 => 1481,  1901 => 1479,  1897 => 1477,  1895 => 1476,  1885 => 1468,  1883 => 1467,  1879 => 1465,  1869 => 1460,  1867 => 1459,  1862 => 1458,  1856 => 1456,  1852 => 1454,  1850 => 1453,  1847 => 1452,  1845 => 1451,  1842 => 1450,  1840 => 1449,  1837 => 1448,  1835 => 1447,  1832 => 1446,  1830 => 1445,  1827 => 1444,  1825 => 1443,  1822 => 1442,  1820 => 1441,  1817 => 1440,  1815 => 1439,  1812 => 1438,  1810 => 1437,  1806 => 1435,  1801 => 1434,  1779 => 1415,  1772 => 1411,  1765 => 1407,  1753 => 1398,  1737 => 1385,  1729 => 1380,  1725 => 1379,  1709 => 1366,  1701 => 1361,  1697 => 1360,  1682 => 1348,  1674 => 1343,  1666 => 1338,  1662 => 1337,  1636 => 1313,  1626 => 1305,  1619 => 1301,  1612 => 1297,  1606 => 1293,  1604 => 1292,  1589 => 1279,  1583 => 1276,  1579 => 1274,  1577 => 1273,  1573 => 1271,  1564 => 1265,  1556 => 1260,  1552 => 1259,  1542 => 1251,  1540 => 1250,  1530 => 1243,  1526 => 1242,  1521 => 1240,  1511 => 1233,  1494 => 1219,  1482 => 1210,  1460 => 1190,  1451 => 1185,  1446 => 1184,  1439 => 1183,  1430 => 1176,  1428 => 1175,  1425 => 1174,  1417 => 1169,  1413 => 1168,  1405 => 1162,  1403 => 1161,  1397 => 1157,  1392 => 1156,  1388 => 1155,  1362 => 1132,  1350 => 1123,  1341 => 1116,  1335 => 1113,  1331 => 1112,  1326 => 1111,  1324 => 1110,  1319 => 1108,  1307 => 1099,  1286 => 1081,  1276 => 1074,  1266 => 1067,  1257 => 1061,  1249 => 1060,  1245 => 1058,  1241 => 1056,  1235 => 1054,  1233 => 1053,  1226 => 1048,  1220 => 1047,  1217 => 1046,  1214 => 1045,  1211 => 1044,  1208 => 1043,  1205 => 1042,  1202 => 1041,  1197 => 1040,  1194 => 1039,  1192 => 1038,  1188 => 1036,  1181 => 1031,  1174 => 1026,  1172 => 1025,  1168 => 1023,  1162 => 1021,  1156 => 1018,  1152 => 1016,  1150 => 1015,  1145 => 1013,  1141 => 1011,  1139 => 1010,  1134 => 1008,  1130 => 1006,  1128 => 1005,  1123 => 1003,  1119 => 1001,  1117 => 1000,  1113 => 998,  1106 => 993,  1099 => 988,  1097 => 987,  1090 => 983,  1083 => 979,  1076 => 975,  1072 => 973,  1066 => 970,  1063 => 969,  1057 => 966,  1052 => 965,  1050 => 964,  1040 => 956,  1035 => 955,  1026 => 949,  1019 => 944,  1012 => 943,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "super_admin/hma_service/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\hma_service\\show.html.twig");
    }
}
