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

/* base.html.twig */
class __TwigTemplate_d872803d161513f89ecadcd40b4f3425 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"csrf-token\" content=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("global"), "html", null, true);
        yield "\">
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    
    <!-- CDN Bootstrap 5 -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Bootstrap Icons -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <!-- TomSelect CDN (pour l'autocomplete) -->
    <link href=\"https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css\" rel=\"stylesheet\">
    
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #0463f1; /* Bleu pur UNIFORME */
            --dark-color: #1f2937;
            --light-color: #f9fafb;
            --success-color: #10b981;
            --info-color: #0ea5e9;
            --warning-color: #f59e0b;
            --danger-color: #ef4444;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f7fb;
            color: #333333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        h1 {
            font-family: 'Inter', sans-serif;
            text-align: center;
            padding: 20px 0;
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--dark-color);
        }
        
        .navbar-brand:hover {
            color: var(--primary-color);
        }
        
        /* Logo de l'entreprise */
        .company-logo {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            overflow: hidden;
            margin-right: 10px;
            background: var(--primary-color); /* Bleu pur */
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        
        .company-logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .company-logo .logo-fallback {
            color: white;
            font-weight: 700;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }
        
        .company-name {
            font-weight: 600;
            font-size: 18px;
            color: var(--dark-color);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
        }
        
        /* SIDEBAR - Bleu pur UNIFORME */
        .sidebar {
            background: var(--primary-color); /* Bleu pur */
            color: white;
            min-height: calc(100vh - 73px);
            box-shadow: 0 0 30px rgba(0,0,0,0.1);
            padding: 0;
            position: sticky;
            top: 73px;
            height: 100%;
        }
        
        .sidebar-content {
            padding: 20px;
            height: 100%;
        }
        
        .sidebar .nav-link {
            color: rgba(255,255,255,0.9);
            padding: 12px 15px;
            margin: 5px 0;
            border-radius: 8px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        
        .sidebar .nav-link::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 3px;
            background: white;
            transform: scaleY(0);
            transition: transform 0.3s ease;
            border-radius: 0 3px 3px 0;
        }
        
        .sidebar .nav-link:hover {
            background: rgba(255,255,255,0.15);
            color: white;
            transform: translateX(5px);
        }
        
        .sidebar .nav-link:hover::before {
            transform: scaleY(1);
        }
        
        .sidebar .nav-link.active {
            background: rgba(255,255,255,0.25);
            color: white;
            font-weight: 500;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        
        .sidebar .nav-link.active::before {
            transform: scaleY(1);
        }
        
        .sidebar .nav-link i {
            width: 24px;
            text-align: center;
            margin-right: 10px;
            font-size: 16px;
        }
        
        /* Titres de menu */
        .menu-title {
            color: rgba(255,255,255,0.6);
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 15px 15px 5px;
            margin-top: 15px;
            display: block;
        }
        
        /* Menus déroulants */
        .has-arrow {
            position: relative;
        }
        
        .has-arrow::after {
            content: \"\\f078\";
            font-family: \"Font Awesome 5 Free\";
            font-weight: 900;
            position: absolute;
            right: 15px;
            transition: transform 0.3s ease;
            font-size: 12px;
        }
        
        .has-arrow[aria-expanded=\"true\"]::after {
            transform: rotate(180deg);
        }
        
        /* Sous-menus */
        .sub-menu {
            background: rgba(255,255,255,0.05);
            border-radius: 8px;
            margin: 5px 0 5px 15px;
            padding-left: 0;
            list-style: none;
            border-left: 2px solid rgba(255,255,255,0.1);
        }
        
        .sub-menu .nav-link {
            padding: 10px 15px 10px 40px;
            font-size: 13.5px;
            margin: 2px 0;
        }
        
        .sub-menu .nav-link i {
            font-size: 12px;
            width: 15px;
        }
        
        .sub-menu .nav-link:hover {
            transform: translateX(3px);
        }
        
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        
        .card:hover {
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }
        
        /* Bouton gradient - UNIFORME */
        .btn-gradient {
            background: var(--primary-color); /* Bleu pur */
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-gradient:hover {
            background: #0355d0; /* Bleu plus foncé au survol */
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(4, 99, 241, 0.4);
        }
        
        /* User Avatar */
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid var(--primary-color);
            transition: all 0.3s ease;
            background: var(--primary-color); /* Bleu pur */
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .user-avatar:hover {
            transform: scale(1.05);
            border-color: #0355d0;
        }
        
        .user-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .user-avatar .avatar-initials {
            color: white;
            font-weight: 600;
            font-size: 16px;
        }
        
        /* Barre de recherche universelle */
        .universal-search-container {
            flex-grow: 1;
            max-width: 700px;
            margin: 0 30px;
        }

        .universal-search {
            position: relative;
            width: 100%;
        }

        .universal-search-input {
            border-radius: 25px;
            padding: 10px 50px 10px 45px;
            border: 2px solid #dee2e6;
            transition: all 0.3s ease;
            width: 100%;
            background-color: #f8f9fa;
            font-size: 16px;
            height: 45px;
        }

        .universal-search-input:focus {
            box-shadow: 0 0 0 4px rgba(4, 99, 241, 0.15);
            border-color: var(--primary-color);
            background-color: white;
            outline: none;
        }

        .universal-search-btn {
            position: absolute;
            right: 5px;
            top: 30%;
            transform: translateY(-50%);
            background: var(--primary-color); /* Bleu pur */
            border: none;
            color: white;
            cursor: pointer;
            padding: 8px 12px;
            border-radius: 50%;
            transition: all 0.3s ease;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 3px 10px rgba(4, 99, 241, 0.3);
        }

        .universal-search-btn:hover {
            background: #0355d0; /* Bleu plus foncé */
            transform: translateY(-50%) scale(1.05);
            box-shadow: 0 5px 15px rgba(4, 99, 241, 0.4);
        }

        .universal-search-clear {
            position: absolute;
            right: 45px;
            top: 30%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.05);
            border: none;
            color: #6c757d;
            cursor: pointer;
            padding: 6px;
            border-radius: 50%;
            display: none;
            width: 28px;
            height: 28px;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
        }

        .universal-search-clear.show {
            display: flex;
        }

        .universal-search-clear:hover {
            background: rgba(239, 68, 68, 0.1);
            color: var(--danger-color);
            transform: translateY(-50%) rotate(90deg);
        }

        .search-hint {
            font-size: 13px;
            color: var(--primary-color);
            margin-top: 8px;
            text-align: left;
            opacity: 0.8;
            padding-left: 10px;
            font-weight: 500;
        }

        .universal-search-input::placeholder {
            color: #6c757d;
            opacity: 0.8;
            font-size: 15px;
        }

        .universal-search-input {
            background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%230463f1' class='bi bi-search' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'/%3E%3C/svg%3E\");
            background-position: 15px center;
            background-repeat: no-repeat;
            background-size: 18px;
        }

        @keyframes searchExpand {
            0% { transform: scale(1); }
            100% { transform: scale(1.02); }
        }

        .universal-search:focus-within .universal-search-input {
            animation: searchExpand 0.3s ease forwards;
        }

        @media (min-width: 1400px) {
            .universal-search-container {
                max-width: 700px;
                margin: 0 40px;
            }
        }

        @media (max-width: 992px) {
            .universal-search-container {
                max-width: 400px;
                margin: 0 15px;
            }
            
            .universal-search-input {
                height: 40px;
                font-size: 15px;
                padding: 8px 45px 8px 40px;
            }
            
            .universal-search-btn {
                width: 32px;
                height: 32px;
                padding: 6px;
            }
            
            .universal-search-clear {
                right: 45px;
                width: 26px;
                height: 26px;
            }
        }

        @media (max-width: 768px) {
            .universal-search-container {
                max-width: 100%;
                margin: 10px 0;
            }
            
            .universal-search-input {
                border-radius: 20px;
                height: 42px;
            }
        }

        @keyframes pulseBorder {
            0% {
                border-color: var(--primary-color);
                box-shadow: 0 0 0 4px rgba(4, 99, 241, 0.15);
            }
            50% {
                border-color: #0355d0;
                box-shadow: 0 0 0 6px rgba(4, 99, 241, 0.1);
            }
            100% {
                border-color: var(--primary-color);
                box-shadow: 0 0 0 4px rgba(4, 99, 241, 0.15);
            }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                top: 0;
                left: -280px;
                width: 280px;
                height: 100vh;
                transition: left 0.3s ease;
                z-index: 1040;
                box-shadow: 5px 0 30px rgba(0,0,0,0.2);
            }
            
            .sidebar.show {
                left: 0;
            }
            
            .sidebar-backdrop {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0,0,0,0.5);
                z-index: 1039;
                display: none;
                backdrop-filter: blur(2px);
            }
            
            .sidebar-backdrop.show {
                display: block;
            }
            
            main {
                padding-top: 20px !important;
            }
            
            .universal-search-container {
                max-width: 100%;
                margin: 10px 0;
                order: 3;
                width: 100%;
            }
            
            .navbar-collapse {
                flex-direction: column;
            }
        }
        
        @media (max-width: 992px) {
            .universal-search-container {
                max-width: 300px;
            }
        }

        .card-animate {
            transition: all 0.3s ease;
            border: none;
            overflow: hidden;
        }

        .card-animate:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;
        }

        .bg-primary {
            background: var(--primary-color) !important; /* Bleu pur */
        }

        .bg-success {
            background: var(--success-color) !important;
        }

        .bg-info {
            background: var(--info-color) !important;
        }

        .bg-warning {
            background: var(--warning-color) !important;
        }

        .bg-danger {
            background: var(--danger-color) !important;
        }

        .bg-secondary {
            background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%) !important;
        }

        .avatar-sm {
            width: 50px;
            height: 50px;
        }

        .avatar-title {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }

        .bg-soft-light {
            background-color: rgba(255, 255, 255, 0.2) !important;
        }
        
        main {
            min-height: calc(100vh - 180px);
            padding-top: 30px;
        }
        
        /* FOOTER */
        .footer {
            background: linear-gradient(135deg, #1f2937 0%, #111827 100%);
            color: #f9fafb;
            margin-top: auto;
            padding: 2px 0;
            position: relative;
            overflow: hidden;
        }
        
        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--primary-color); /* Bleu pur */
        }
        
        .footer-content {
            transition: all 0.3s ease;
        }
        
        .footer:hover .footer-content {
            transform: translateY(-5px);
        }
        
        .footer-logo {
            font-weight: 700;
            font-size: 20px;
            color: var(--primary-color); /* Bleu pur */
            margin-bottom: 10px;
        }
        
        .footer-text {
            color: #9ca3af;
            transition: color 0.3s ease;
        }
        
        .footer-link {
            color: #d1d5db;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
            padding: 5px 0;
            display: inline-block;
        }
        
        .footer-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-color); /* Bleu pur */
            transition: width 0.3s ease;
        }
        
        .footer-link:hover {
            color: white;
            transform: translateX(5px);
        }
        
        .footer-link:hover::after {
            width: 100%;
        }
        
        .footer-divider {
            border-color: #374151;
            margin: 25px 0;
            opacity: 0.5;
        }
        
        .footer-icon {
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: #d1d5db;
            transition: all 0.3s ease;
            margin: 0 5px;
        }
        
        .footer-icon:hover {
            background: var(--primary-color); /* Bleu pur */
            color: white;
            transform: translateY(-3px);
        }
        
        .version-badge {
            background: var(--primary-color); /* Bleu pur */
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
            display: inline-block;
            transition: all 0.3s ease;
        }
        
        .version-badge:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(4, 99, 241, 0.3);
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        main > * {
            animation: fadeIn 0.5s ease-out;
        }
        
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--primary-color); /* Bleu pur */
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #0355d0; /* Bleu plus foncé */
        }

        .badge-status-draft { background-color: #6c757d; }
        .badge-status-confirmed { background-color: #0d6efd; }
        .badge-status-received { background-color: #198754; }
        .badge-status-cancelled { background-color: #dc3545; }

        @keyframes cartPulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .cart-animation {
            animation: cartPulse 0.3s ease-in-out;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(4, 99, 241, 0.25);
        }

        @media (max-width: 768px) {
            .table-responsive {
                font-size: 0.9rem;
            }
            
            .btn-group-sm .btn {
                padding: 0.25rem 0.5rem;
                font-size: 0.875rem;
            }
        }

        /* Ajouter dans votre bloc stylesheets */
        .subscription-widget-container {
            margin-top: 0.5rem;
        }

        .subscription-widget-container .card {
            border-radius: var(--border-radius-lg);
            overflow: hidden;
            transition: var(--transition-smooth);
        }

        .subscription-widget-container .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(52, 152, 219, 0.2);
        }

        /* Classes d'opacité */
        .bg-opacity-10 {
            --bs-bg-opacity: 0.1;
        }
        .bg-opacity-20 {
            --bs-bg-opacity: 0.2;
        }
        .border-opacity-20 {
            --bs-border-opacity: 0.2;
        }

        /* Texte blanc avec opacité */
        .text-white-50 {
            color: rgba(255, 255, 255, 0.7) !important;
        }

        /* Espacement des lettres */
        .tracking-wider {
            letter-spacing: 0.05em;
        }

        /* Ajustement pour mobile */
        @media (max-width: 768px) {
            .subscription-widget-container {
                margin-top: 1rem;
            }
        }

        /* Ajouter à la fin de votre bloc stylesheets */

        /* Structure de la page */
        .container-fluid.flex-grow-1 {
            padding-left: 0;
            padding-right: 0;
        }

        .row {
            margin-left: 0;
            margin-right: 0;
        }

        /* Sidebar */
        .sidebar {
            padding-left: 0;
            padding-right: 0;
            transition: all 0.3s ease;
        }

        .sidebar-content {
            padding: 1rem 0.5rem;
            height: 100%;
            overflow-y: auto;
        }

        /* Ajustement pour mobile */
        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                left: -280px;
                top: 0;
                width: 280px;
                height: 100vh;
                z-index: 1040;
                transition: left 0.3s ease;
                box-shadow: none;
            }
            
            .sidebar.show {
                left: 0;
                box-shadow: 5px 0 30px rgba(0,0,0,0.2);
            }
            
            .sidebar-backdrop {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0,0,0,0.5);
                z-index: 1039;
                backdrop-filter: blur(3px);
            }
            
            .sidebar-backdrop.show {
                display: block;
            }
            
            main {
                margin-left: 0 !important;
                width: 100% !important;
                padding: 1rem !important;
            }
        }

        /* Animation pour les sous-menus */
        .sub-menu {
            transition: all 0.3s ease-in-out;
            overflow: hidden;
        }

        .sub-menu.collapse:not(.show) {
            display: none;
        }

        .sub-menu.collapsing {
            display: block;
            height: 0;
            overflow: hidden;
            transition: height 0.3s ease-in-out;
        }

        /* Style pour les badges */
        .badge.bg-warning {
            background: #f59e0b !important;
            color: #000;
            font-size: 0.7rem;
            padding: 3px 6px;
            border-radius: 4px;
            margin-left: 8px;
            font-weight: 500;
        }

        .badge.bg-danger {
            background: #ef4444 !important;
            color: white;
            font-size: 0.7rem;
            padding: 3px 6px;
            border-radius: 4px;
            margin-left: 8px;
            font-weight: 500;
        }

        /* Style pour les liens désactivés */
        .nav-link.disabled {
            opacity: 0.5;
            pointer-events: none;
            cursor: default;
        }

        /* Dropdown divider */
        .dropdown-divider {
            border-top-color: rgba(255,255,255,0.1);
            margin: 0.5rem 0;
        }
        
        /* Animation pulse pour le bouton Upgrade */
        @keyframes upgradePulse {
            0% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(4, 99, 241, 0.7);
            }
            70% {
                transform: scale(1.05);
                box-shadow: 0 0 0 10px rgba(4, 99, 241, 0);
            }
            100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(4, 99, 241, 0);
            }
        }

        /* Bouton Upgrade moderne avec bords arrondis */
        .btn-upgrade {
            background: linear-gradient(135deg, #0463f1, #0355d0);
            border: none;
            color: white;
            font-weight: 600;
            padding: 0.2rem 1.2rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 50px; /* Rend le bouton très arrondi (style pilule) */
            white-space: nowrap;
            box-shadow: 0 4px 10px rgba(4, 99, 241, 0.3);
            transition: all 0.3s ease;
            animation: upgradePulse 2s infinite;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            cursor: pointer;
        }

        .btn-upgrade:hover {
            background: linear-gradient(135deg, #0355d0, #0245a8);
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(4, 99, 241, 0.5);
            color: white;
            animation: none; /* Arrête l'animation au survol */
        }

        .btn-upgrade:focus {
            outline: none;
            box-shadow: 0 0 0 0.25rem rgba(4, 99, 241, 0.5);
        }

        .btn-upgrade i {
            margin-right: 6px;
            font-size: 1rem;
        }

        /* Animation pulse (identique à votre précédente) */
        @keyframes upgradePulse {
            0% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(4, 99, 241, 0.7);
            }
            70% {
                transform: scale(1.05);
                box-shadow: 0 0 0 10px rgba(4, 99, 241, 0);
            }
            100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(4, 99, 241, 0);
            }
        }

        /* ==================== MODAL LOADING EFFECTS UNIVERSELLES ==================== */

        /* Animation d'entrée pour tous les modals */
        .modal.fade .modal-dialog {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transform: scale(0.95);
            opacity: 0;
        }

        .modal.fade.show .modal-dialog {
            transform: scale(1);
            opacity: 1;
        }

        /* Overlay avec fond animé */
        .modal-backdrop {
            transition: opacity 0.3s ease;
        }

        .modal-backdrop.fade {
            opacity: 0;
        }

        .modal-backdrop.fade.show {
            opacity: 0.7;
        }

        /* Spinner de chargement intégré - visible automatiquement */
        .modal-loading {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.95);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1060;
            border-radius: 12px;
            backdrop-filter: blur(4px);
            transition: all 0.3s ease;
        }

        .modal-loading .spinner-container {
            text-align: center;
        }

        .modal-loading .spinner-border {
            width: 3rem;
            height: 3rem;
            border-width: 0.25rem;
            color: var(--primary-color);
        }

        .modal-loading .loading-text {
            margin-top: 1rem;
            color: var(--primary-color);
            font-weight: 500;
        }

        /* Animation d'entrée du contenu */
        .modal-content {
            animation: modalSlideIn 0.3s ease-out;
            overflow: hidden;
        }

        @keyframes modalSlideIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Effet de pulse pour les boutons */
        .modal-footer .btn {
            position: relative;
            overflow: hidden;
            transition: all 0.2s ease;
        }

        .modal-footer .btn:active {
            transform: scale(0.96);
        }

        /* Scroll personnalisé */
        .modal-body {
            max-height: calc(100vh - 200px);
            overflow-y: auto;
            scrollbar-width: thin;
        }

        .modal-body::-webkit-scrollbar {
            width: 6px;
        }

        .modal-body::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .modal-body::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 10px;
        }

        /* Responsive */
        @media (max-width: 576px) {
            .modal-dialog {
                margin: 1rem;
            }
            
            .modal-content {
                border-radius: 16px;
            }
            
            .modal-footer {
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .modal-footer .btn {
                width: 100%;
                margin: 0;
            }
        }
    </style>

        ";
        // line 1107
        yield "    ";
        $context["primaryColor"] = "#0463f1";
        // line 1108
        yield "    ";
        $context["secondaryColor"] = "#8b5cf6";
        // line 1109
        yield "    
    ";
        // line 1110
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1110, $this->source); })()), "user", [], "any", false, false, false, 1110) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1110, $this->source); })()), "user", [], "any", false, false, false, 1110), "hmaServiceId", [], "any", false, false, false, 1110))) {
            // line 1111
            yield "        ";
            // line 1112
            yield "        ";
            $context["companyId"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1112, $this->source); })()), "user", [], "any", false, false, false, 1112), "hmaServiceId", [], "any", false, false, false, 1112), "getId", [], "method", false, false, false, 1112);
            // line 1113
            yield "        
        ";
            // line 1115
            yield "        ";
            $context["companyColors"] = $this->extensions['App\Twig\CompanyExtension']->getCompanyColors((isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 1115, $this->source); })()));
            // line 1116
            yield "        ";
            $context["primaryColor"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["companyColors"]) || array_key_exists("companyColors", $context) ? $context["companyColors"] : (function () { throw new RuntimeError('Variable "companyColors" does not exist.', 1116, $this->source); })()), "primary", [], "any", false, false, false, 1116);
            // line 1117
            yield "        ";
            $context["secondaryColor"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["companyColors"]) || array_key_exists("companyColors", $context) ? $context["companyColors"] : (function () { throw new RuntimeError('Variable "companyColors" does not exist.', 1117, $this->source); })()), "secondary", [], "any", false, false, false, 1117);
            // line 1118
            yield "        
        ";
            // line 1120
            yield "        <!-- DEBUG COULEURS: Company ID=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["companyId"]) || array_key_exists("companyId", $context) ? $context["companyId"] : (function () { throw new RuntimeError('Variable "companyId" does not exist.', 1120, $this->source); })()), "html", null, true);
            yield ", Primary=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["primaryColor"]) || array_key_exists("primaryColor", $context) ? $context["primaryColor"] : (function () { throw new RuntimeError('Variable "primaryColor" does not exist.', 1120, $this->source); })()), "html", null, true);
            yield ", Secondary=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["secondaryColor"]) || array_key_exists("secondaryColor", $context) ? $context["secondaryColor"] : (function () { throw new RuntimeError('Variable "secondaryColor" does not exist.', 1120, $this->source); })()), "html", null, true);
            yield " -->
    ";
        }
        // line 1122
        yield "    
    ";
        // line 1124
        yield "    <style>
        :root {
            --primary-color: ";
        // line 1126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["primaryColor"]) || array_key_exists("primaryColor", $context) ? $context["primaryColor"] : (function () { throw new RuntimeError('Variable "primaryColor" does not exist.', 1126, $this->source); })()), "html", null, true);
        yield ";
            --primary-dark: ";
        // line 1127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\ColorExtension']->colorDarken((isset($context["primaryColor"]) || array_key_exists("primaryColor", $context) ? $context["primaryColor"] : (function () { throw new RuntimeError('Variable "primaryColor" does not exist.', 1127, $this->source); })()), 15), "html", null, true);
        yield ";
            --secondary-color: ";
        // line 1128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["secondaryColor"]) || array_key_exists("secondaryColor", $context) ? $context["secondaryColor"] : (function () { throw new RuntimeError('Variable "secondaryColor" does not exist.', 1128, $this->source); })()), "html", null, true);
        yield ";
        }
        
        /* Application des couleurs dynamiques */
        .sidebar,
        .btn-gradient,
        .universal-search-btn,
        .version-badge,
        .modal-header.bg-primary,
        .company-logo {
            background: var(--primary-color) !important;
        }
        
        .btn-primary {
            background: var(--primary-color) !important;
            border-color: var(--primary-color) !important;
        }
        
        .btn-primary:hover,
        .btn-gradient:hover,
        .universal-search-btn:hover {
            background: var(--primary-dark) !important;
            border-color: var(--primary-dark) !important;
        }
        
        .navbar-brand:hover,
        .footer-logo,
        .chart-title i {
            color: var(--primary-color) !important;
        }
        
        .footer::before,
        .progress-bar-custom.bg-primary {
            background: var(--primary-color) !important;
        }
        
        .footer-link::after {
            background: var(--primary-color) !important;
        }
        
        .sidebar .nav-link.active {
            background: rgba(255, 255, 255, 0.25) !important;
        }
        
        .btn-outline-primary {
            border-color: var(--primary-color) !important;
            color: var(--primary-color) !important;
        }
        
        .btn-outline-primary:hover {
            background: var(--primary-color) !important;
            color: white !important;
        }
        
        .text-primary {
            color: var(--primary-color) !important;
        }
        
        .badge.bg-primary {
            background: var(--primary-color) !important;
        }
        
        .pagination .page-item.active .page-link {
            background: var(--primary-color) !important;
            border-color: var(--primary-color) !important;
        }
        
        a:not(.btn):not(.nav-link):not(.dropdown-item):not(.footer-link) {
            color: var(--primary-color) !important;
        }
        
        a:not(.btn):not(.nav-link):not(.dropdown-item):not(.footer-link):hover {
            color: var(--primary-dark) !important;
        }
        
        .form-control:focus {
            border-color: var(--primary-color) !important;
            box-shadow: 0 0 0 0.25rem color-mix(in srgb, var(--primary-color) 25%, transparent) !important;
        }
        
        .universal-search-input:focus {
            border-color: var(--primary-color) !important;
            box-shadow: 0 0 0 4px color-mix(in srgb, var(--primary-color) 15%, transparent) !important;
        }
        
        .universal-search-input {
            background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='";
        // line 1214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace((isset($context["primaryColor"]) || array_key_exists("primaryColor", $context) ? $context["primaryColor"] : (function () { throw new RuntimeError('Variable "primaryColor" does not exist.', 1214, $this->source); })()), ["#" => "%23"]), "html", null, true);
        yield "' class='bi bi-search' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'/%3E%3C/svg%3E\") !important;
        }
        
        .universal-search-btn {
            box-shadow: 0 3px 10px color-mix(in srgb, var(--primary-color) 30%, transparent) !important;
        }
        
        .btn-upgrade {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)) !important;
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--primary-color) !important;
        }
        
        .modal-footer .btn:active {
            transform: scale(0.96);
        }
        
        .modal-body {
            max-height: calc(100vh - 200px);
            overflow-y: auto;
            scrollbar-width: thin;
        }
        
        .modal-body::-webkit-scrollbar {
            width: 6px;
        }
        
        .modal-body::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        .modal-body::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 10px;
        }
        
        @media (max-width: 576px) {
            .modal-dialog {
                margin: 1rem;
            }
            
            .modal-content {
                border-radius: 16px;
            }
            
            .modal-footer {
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .modal-footer .btn {
                width: 100%;
                margin: 0;
            }
        }
    </style>

    ";
        // line 1274
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 1275
        yield "</head>
<body>
    ";
        // line 1278
        yield "    ";
        yield from $this->load("components/_session_toast.html.twig", 1278)->unwrap()->yield($context);
        // line 1279
        yield "    
    ";
        // line 1281
        yield "    ";
        yield from $this->load("components/_toast.html.twig", 1281)->unwrap()->yield($context);
        // line 1282
        yield "    
    <!-- Navigation principale - SIMPLIFIÉE -->
    <nav class=\"navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top\">
        <div class=\"container-fluid\">
            <!-- Bouton sidebar (mobile) -->
            <button class=\"navbar-toggler border-0\" type=\"button\" id=\"sidebarToggle\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            
            <!-- À GAUCHE : Logo et nom de l'entreprise - VERSION SÉCURISÉE -->
            <a class=\"navbar-brand d-flex align-items-center\" href=\"";
        // line 1292
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                <div class=\"company-logo\" id=\"companyLogo\">
                    ";
        // line 1294
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1294, $this->source); })()), "user", [], "any", false, false, false, 1294) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1294, $this->source); })()), "user", [], "any", false, false, false, 1294), "hasCompany", [], "any", false, false, false, 1294))) {
            // line 1295
            yield "                        ";
            // line 1296
            yield "                        ";
            $context["companyName"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1296, $this->source); })()), "user", [], "any", false, false, false, 1296), "companyDisplayName", [], "any", false, false, false, 1296);
            // line 1297
            yield "                        ";
            $context["initial"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1297, $this->source); })()), "user", [], "any", false, false, false, 1297), "companyInitial", [], "any", false, false, false, 1297);
            // line 1298
            yield "                        ";
            $context["logo"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1298, $this->source); })()), "user", [], "any", false, false, false, 1298), "companyLogo", [], "any", false, false, false, 1298);
            // line 1299
            yield "                        
                        ";
            // line 1300
            if ((($tmp = (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 1300, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1301
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 1301, $this->source); })()))), "html", null, true);
                yield "\" 
                                alt=\"";
                // line 1302
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 1302, $this->source); })()), "html", null, true);
                yield "\"
                                class=\"logo-img\"
                                data-initial=\"";
                // line 1304
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 1304, $this->source); })()), "html", null, true);
                yield "\">
                        ";
            } else {
                // line 1306
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/logos/logo.png"), "html", null, true);
                yield "\" 
                                alt=\"";
                // line 1307
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 1307, $this->source); })()), "html", null, true);
                yield "\"
                                class=\"logo-img\"
                                data-initial=\"";
                // line 1309
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 1309, $this->source); })()), "html", null, true);
                yield "\"
                                onerror=\"this.style.display='none'; this.nextElementSibling.style.display='flex';\">
                            <div class=\"logo-fallback\" style=\"display: none;\">
                                ";
                // line 1312
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 1312, $this->source); })()), "html", null, true);
                yield "
                            </div>
                        ";
            }
            // line 1315
            yield "                    ";
        } else {
            // line 1316
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/logos/logo.png"), "html", null, true);
            yield "\" 
                            alt=\"HMA MARKET\"
                            class=\"logo-img\"
                            data-initial=\"H\"
                            onerror=\"this.style.display='none'; this.nextElementSibling.style.display='flex';\">
                        <div class=\"logo-fallback\" style=\"display: none;\">
                            H
                        </div>
                    ";
        }
        // line 1325
        yield "                </div>
                
                <div class=\"company-name\" id=\"companyName\">
                    ";
        // line 1328
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1328, $this->source); })()), "user", [], "any", false, false, false, 1328)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1328, $this->source); })()), "user", [], "any", false, false, false, 1328), "companyDisplayName", [], "any", false, false, false, 1328), "html", null, true)) : ("HMA MARKET"));
        yield "
                </div>
            </a>
            
            <!-- Barre de recherche universelle -->
            <div class=\"universal-search-container d-none d-md-flex\">
                <form id=\"universalSearchForm\" method=\"get\" class=\"universal-search\">
                    <input type=\"text\" 
                           id=\"universalSearchInput\"
                           class=\"form-control universal-search-input\" 
                           name=\"search\" 
                           placeholder=\"Rechercher...\" 
                           value=\"";
        // line 1340
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1340, $this->source); })()), "request", [], "any", false, false, false, 1340), "query", [], "any", false, false, false, 1340), "get", ["search", ""], "method", false, false, false, 1340), "html", null, true);
        yield "\"
                           autocomplete=\"off\">
                    <button type=\"button\" id=\"universalSearchClear\" class=\"universal-search-clear\">
                        <i class=\"fas fa-times\"></i>
                    </button>
                    <button type=\"submit\" class=\"universal-search-btn\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                    <div class=\"search-hint\" id=\"searchHint\"></div>
                </form>
            </div>
            
            <!-- À DROITE : Informations utilisateur -->
            <div class=\"collapse navbar-collapse\" id=\"navbarContent\">
                <!-- Barre de recherche mobile -->
                <div class=\"universal-search-container d-md-none\">
                    <form id=\"universalSearchFormMobile\" method=\"get\" class=\"universal-search\">
                        <input type=\"text\" 
                               id=\"universalSearchInputMobile\"
                               class=\"form-control universal-search-input\" 
                               name=\"search\" 
                               placeholder=\"Rechercher...\" 
                               value=\"";
        // line 1362
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1362, $this->source); })()), "request", [], "any", false, false, false, 1362), "query", [], "any", false, false, false, 1362), "get", ["search", ""], "method", false, false, false, 1362), "html", null, true);
        yield "\"
                               autocomplete=\"off\">
                        <button type=\"button\" id=\"universalSearchClearMobile\" class=\"universal-search-clear\">
                            <i class=\"fas fa-times\"></i>
                        </button>
                        <button type=\"submit\" class=\"universal-search-btn\">
                            <i class=\"fas fa-search\"></i>
                        </button>
                        <div class=\"search-hint\" id=\"searchHintMobile\"></div>
                    </form>
                </div>

                <ul class=\"navbar-nav ms-auto\">

                    <!-- Bouton Upgrade (visible pour admin/manager si l'entreprise n'a pas déjà le plan premium) -->
                    ";
        // line 1377
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1377, $this->source); })()), "user", [], "any", false, false, false, 1377) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1377, $this->source); })()), "user", [], "any", false, false, false, 1377), "hmaServiceId", [], "any", false, false, false, 1377))) {
            // line 1378
            yield "                        ";
            $context["service"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1378, $this->source); })()), "user", [], "any", false, false, false, 1378), "hmaServiceId", [], "any", false, false, false, 1378);
            // line 1379
            yield "                        ";
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 1379, $this->source); })()), "currentPlan", [], "any", false, false, false, 1379) != "premium"))) {
                // line 1380
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
                yield "\" class=\"btn-upgrade me-3 ms-3\" style=\"color: white !important;\">
                                <i class=\"bi bi-arrow-up-circle me-1\"></i>Upgrade
                            </a>
                        ";
            }
            // line 1384
            yield "                    ";
        }
        // line 1385
        yield "
                    <!-- Utilisateur connecté -->
                    ";
        // line 1387
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1387, $this->source); })()), "user", [], "any", false, false, false, 1387)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1388
            yield "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle d-flex align-items-center\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\">
                            <div class=\"user-avatar me-2\" id=\"userAvatar\">
                                ";
            // line 1391
            $context["user"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1391, $this->source); })()), "user", [], "any", false, false, false, 1391);
            // line 1392
            yield "                                ";
            $context["userName"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", true, true, false, 1392)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1392, $this->source); })()), "fullName", [], "any", false, false, false, 1392), "Utilisateur")) : ("Utilisateur"));
            // line 1393
            yield "                                ";
            $context["initial"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 1393, $this->source); })())));
            // line 1394
            yield "                                
                                ";
            // line 1395
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1395, $this->source); })()), "photo", [], "any", false, false, false, 1395)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1396
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1396, $this->source); })()), "photo", [], "any", false, false, false, 1396))), "html", null, true);
                yield "\" 
                                         alt=\"";
                // line 1397
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 1397, $this->source); })()), "html", null, true);
                yield "\"
                                         class=\"avatar-img\"
                                         data-initial=\"";
                // line 1399
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 1399, $this->source); })()), "html", null, true);
                yield "\">
                                    <div class=\"avatar-initials\" style=\"display: none;\">
                                        ";
                // line 1401
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 1401, $this->source); })()), "html", null, true);
                yield "
                                    </div>
                                ";
            } else {
                // line 1404
                yield "                                    <div class=\"avatar-initials\">
                                        ";
                // line 1405
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 1405, $this->source); })()), "html", null, true);
                yield "
                                    </div>
                                ";
            }
            // line 1408
            yield "                            </div>
                            <div class=\"d-none d-md-block text-start\">
                                <div class=\"fw-medium\" id=\"userName\">
                                    ";
            // line 1411
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 1411), "fullName", [], "any", true, true, false, 1411)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1411, $this->source); })()), "user", [], "any", false, false, false, 1411), "fullName", [], "any", false, false, false, 1411), "Utilisateur")) : ("Utilisateur")), "html", null, true);
            yield "
                                </div>
                                <small class=\"text-muted\">
                                    ";
            // line 1414
            $context["user"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1414, $this->source); })()), "user", [], "any", false, false, false, 1414);
            // line 1415
            yield "                                    ";
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1415, $this->source); })()), "roles", [], "any", false, false, false, 1415))) {
                // line 1416
                yield "                                        <i class=\"bi bi-shield-check text-primary me-1\"></i>Administrateur
                                    ";
            } elseif (CoreExtension::inFilter("ROLE_MANAGER", CoreExtension::getAttribute($this->env, $this->source,             // line 1417
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1417, $this->source); })()), "roles", [], "any", false, false, false, 1417))) {
                // line 1418
                yield "                                        <i class=\"bi bi-graph-up text-success me-1\"></i>Gestionnaire
                                    ";
            } elseif (CoreExtension::inFilter("ROLE_STOCK_MANAGER", CoreExtension::getAttribute($this->env, $this->source,             // line 1419
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1419, $this->source); })()), "roles", [], "any", false, false, false, 1419))) {
                // line 1420
                yield "                                        <i class=\"bi bi-box-seam text-warning me-1\"></i>Responsable Stock
                                    ";
            } elseif (CoreExtension::inFilter("ROLE_CASHIER", CoreExtension::getAttribute($this->env, $this->source,             // line 1421
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1421, $this->source); })()), "roles", [], "any", false, false, false, 1421))) {
                // line 1422
                yield "                                        <i class=\"bi bi-cash-coin text-info me-1\"></i>Caissier
                                    ";
            } elseif (CoreExtension::inFilter("ROLE_SUPER_ADMIN", CoreExtension::getAttribute($this->env, $this->source,             // line 1423
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1423, $this->source); })()), "roles", [], "any", false, false, false, 1423))) {
                // line 1424
                yield "                                        <i class=\"bi bi-shield-check text-danger me-1\"></i>Super Administrateur
                                    ";
            } else {
                // line 1426
                yield "                                        <i class=\"bi bi-person me-1\"></i>Utilisateur
                                    ";
            }
            // line 1428
            yield "                                </small>
                            </div>
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-end shadow-lg border-0\">
                            <li><h6 class=\"dropdown-header bg-light fw-bold\">Mon compte</h6></li>
                            
                            <!-- Photo et informations du profil -->
                            <li>
                                <div class=\"px-3 py-2\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"user-avatar me-3\">
                                            ";
            // line 1439
            $context["user"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1439, $this->source); })()), "user", [], "any", false, false, false, 1439);
            // line 1440
            yield "                                            ";
            $context["userName"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", true, true, false, 1440)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1440, $this->source); })()), "fullName", [], "any", false, false, false, 1440), "Utilisateur")) : ("Utilisateur"));
            // line 1441
            yield "                                            ";
            $context["initial"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 1441, $this->source); })())));
            // line 1442
            yield "                                            
                                            ";
            // line 1443
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1443, $this->source); })()), "photo", [], "any", false, false, false, 1443)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1444
                yield "                                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1444, $this->source); })()), "photo", [], "any", false, false, false, 1444))), "html", null, true);
                yield "\" 
                                                     alt=\"";
                // line 1445
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 1445, $this->source); })()), "html", null, true);
                yield "\"
                                                     class=\"avatar-img\"
                                                     data-initial=\"";
                // line 1447
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 1447, $this->source); })()), "html", null, true);
                yield "\">
                                                <div class=\"avatar-initials\" style=\"display: none;\">
                                                    ";
                // line 1449
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 1449, $this->source); })()), "html", null, true);
                yield "
                                                </div>
                                            ";
            } else {
                // line 1452
                yield "                                                <div class=\"avatar-initials\">
                                                    ";
                // line 1453
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 1453, $this->source); })()), "html", null, true);
                yield "
                                                </div>
                                            ";
            }
            // line 1456
            yield "                                        </div>
                                        <div>
                                            <div class=\"fw-medium\">
                                                ";
            // line 1459
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 1459), "fullName", [], "any", true, true, false, 1459)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1459, $this->source); })()), "user", [], "any", false, false, false, 1459), "fullName", [], "any", false, false, false, 1459), "Utilisateur")) : ("Utilisateur")), "html", null, true);
            yield "
                                            </div>
                                            <small class=\"text-muted\">
                                                ";
            // line 1462
            $context["user"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1462, $this->source); })()), "user", [], "any", false, false, false, 1462);
            // line 1463
            yield "                                                ";
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1463, $this->source); })()), "roles", [], "any", false, false, false, 1463))) {
                // line 1464
                yield "                                                    Administrateur
                                                ";
            } elseif (CoreExtension::inFilter("ROLE_MANAGER", CoreExtension::getAttribute($this->env, $this->source,             // line 1465
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1465, $this->source); })()), "roles", [], "any", false, false, false, 1465))) {
                // line 1466
                yield "                                                    Gestionnaire
                                                ";
            } elseif (CoreExtension::inFilter("ROLE_STOCK_MANAGER", CoreExtension::getAttribute($this->env, $this->source,             // line 1467
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1467, $this->source); })()), "roles", [], "any", false, false, false, 1467))) {
                // line 1468
                yield "                                                    Responsable Stock
                                                ";
            } elseif (CoreExtension::inFilter("ROLE_CASHIER", CoreExtension::getAttribute($this->env, $this->source,             // line 1469
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1469, $this->source); })()), "roles", [], "any", false, false, false, 1469))) {
                // line 1470
                yield "                                                    Caissier
                                                ";
            } elseif (CoreExtension::inFilter("ROLE_SUPER_ADMIN", CoreExtension::getAttribute($this->env, $this->source,             // line 1471
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1471, $this->source); })()), "roles", [], "any", false, false, false, 1471))) {
                // line 1472
                yield "                                                    Super Administrateur    
                                                ";
            } else {
                // line 1474
                yield "                                                    Utilisateur
                                                ";
            }
            // line 1476
            yield "                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                            <li><hr class=\"dropdown-divider\"></li>
                            
                            <!-- Bouton \"Gérer l'entreprise\" -->
                            ";
            // line 1485
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 1485), "isHmaOwner", [], "any", true, true, false, 1485) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1485, $this->source); })()), "user", [], "any", false, false, false, 1485), "isHmaOwner", [], "any", false, false, false, 1485)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1485, $this->source); })()), "user", [], "any", false, false, false, 1485), "hmaServiceId", [], "any", false, false, false, 1485))) {
                // line 1486
                yield "                            <li>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"";
                // line 1487
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_hmaservice_details");
                yield "\">
                                    <i class=\"bi bi-building me-2 text-info\"></i>
                                    <span>Gérer l'entreprise</span>
                                </a>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            ";
            }
            // line 1494
            yield "                            
                            <!-- Liens standards -->
                            <li>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"";
            // line 1497
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show");
            yield "\">
                                    <i class=\"bi bi-person me-2 text-primary\"></i>
                                    <span>Mon profil</span>
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"";
            // line 1503
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_change_password");
            yield "\">
                                    <i class=\"bi bi-shield-lock me-2 text-success\"></i>
                                    <span>Changer mot de passe</span>
                                </a>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li>
                                <a class=\"dropdown-item d-flex align-items-center text-danger\" href=\"";
            // line 1510
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                    <i class=\"bi bi-box-arrow-right me-2\"></i>
                                    <span>Déconnexion</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    ";
        }
        // line 1518
        yield "                </ul>
            </div>
        </div>
    </nav>
    
    <div class=\"container-fluid flex-grow-1\">
    <div class=\"row\">
        <!-- Backdrop pour mobile -->
        <div class=\"sidebar-backdrop\" id=\"sidebarBackdrop\"></div>
        
        <!-- Sidebar -->
        <div class=\"col-md-3 col-lg-2 d-md-block sidebar\" id=\"sidebarMenu\">
            <div class=\"sidebar-content\">
                ";
        // line 1531
        $context["currentRoute"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1531, $this->source); })()), "request", [], "any", false, false, false, 1531), "get", ["_route"], "method", false, false, false, 1531);
        // line 1532
        yield "                ";
        $context["menuItems"] = $this->extensions['App\Twig\MenuExtension']->getMenu();
        // line 1533
        yield "                ";
        $context["counter"] = 0;
        // line 1534
        yield "                
                ";
        // line 1535
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["menuItems"]) || array_key_exists("menuItems", $context) ? $context["menuItems"] : (function () { throw new RuntimeError('Variable "menuItems" does not exist.', 1535, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1536
            yield "                    ";
            // line 1537
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 1537) == "section")) {
                // line 1538
                yield "                        <div class=\"menu-title\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 1538), "html", null, true);
                yield "</div>
                    
                    ";
                // line 1541
                yield "                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 1541) == "dropdown")) {
                // line 1542
                yield "                        ";
                $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 1542, $this->source); })()) + 1);
                // line 1543
                yield "                        ";
                $context["isActive"] = false;
                // line 1544
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 1544));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 1545
                    yield "                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "route", [], "any", true, true, false, 1545) && (CoreExtension::getAttribute($this->env, $this->source, $context["child"], "route", [], "any", false, false, false, 1545) == (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 1545, $this->source); })())))) {
                        // line 1546
                        yield "                                ";
                        $context["isActive"] = true;
                        // line 1547
                        yield "                            ";
                    }
                    // line 1548
                    yield "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1549
                yield "                        
                        <a href=\"#submenu";
                // line 1550
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 1550, $this->source); })()), "html", null, true);
                yield "\" 
                           class=\"nav-link has-arrow ";
                // line 1551
                if ((($tmp = (isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 1551, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "active";
                }
                yield "\" 
                           data-bs-toggle=\"collapse\"
                           aria-expanded=\"";
                // line 1553
                yield (((($tmp = (isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 1553, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                yield "\">
                            <i class=\"";
                // line 1554
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 1554), "html", null, true);
                yield "\"></i>
                            <span>";
                // line 1555
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 1555), "html", null, true);
                yield "</span>
                            ";
                // line 1556
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "coming_soon", [], "any", true, true, false, 1556) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "coming_soon", [], "any", false, false, false, 1556))) {
                    // line 1557
                    yield "                                <span class=\"badge bg-warning ms-auto\">Bientôt</span>
                            ";
                }
                // line 1559
                yield "                        </a>
                        <div class=\"sub-menu collapse ";
                // line 1560
                if ((($tmp = (isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 1560, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "show";
                }
                yield "\" id=\"submenu";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 1560, $this->source); })()), "html", null, true);
                yield "\">
                            ";
                // line 1561
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 1561));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 1562
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "type", [], "any", true, true, false, 1562) && (CoreExtension::getAttribute($this->env, $this->source, $context["child"], "type", [], "any", false, false, false, 1562) == "divider"))) {
                        // line 1563
                        yield "                                    <hr class=\"dropdown-divider\">
                                ";
                    } elseif (CoreExtension::getAttribute($this->env, $this->source,                     // line 1564
$context["child"], "route", [], "any", true, true, false, 1564)) {
                        // line 1565
                        yield "                                    ";
                        // line 1566
                        yield "                                    ";
                        $context["route_params"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "params", [], "any", true, true, false, 1566)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "params", [], "any", false, false, false, 1566), [])) : ([]));
                        // line 1567
                        yield "                                    
                                    ";
                        // line 1569
                        yield "                                    ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "route", [], "any", false, false, false, 1569) == "app_admin_stock_batch_index") &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["route_params"] ?? null), "productId", [], "any", true, true, false, 1569))) {
                            // line 1570
                            yield "                                        ";
                            $context["route_params"] = Twig\Extension\CoreExtension::merge((isset($context["route_params"]) || array_key_exists("route_params", $context) ? $context["route_params"] : (function () { throw new RuntimeError('Variable "route_params" does not exist.', 1570, $this->source); })()), ["productId" => 0]);
                            // line 1571
                            yield "                                    ";
                        }
                        // line 1572
                        yield "                                    
                                    ";
                        // line 1574
                        yield "                                    ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "coming_soon", [], "any", true, true, false, 1574) && CoreExtension::getAttribute($this->env, $this->source, $context["child"], "coming_soon", [], "any", false, false, false, 1574))) {
                            // line 1575
                            yield "                                        <a href=\"#\" class=\"nav-link disabled\" onclick=\"return false;\">
                                            <i class=\"";
                            // line 1576
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "icon", [], "any", false, false, false, 1576), "html", null, true);
                            yield " me-2\"></i>
                                            ";
                            // line 1577
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "label", [], "any", false, false, false, 1577), "html", null, true);
                            yield "
                                            <span class=\"badge bg-warning ms-2\">Bientôt</span>
                                        </a>
                                    ";
                        } else {
                            // line 1581
                            yield "                                        <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "route", [], "any", false, false, false, 1581), (isset($context["route_params"]) || array_key_exists("route_params", $context) ? $context["route_params"] : (function () { throw new RuntimeError('Variable "route_params" does not exist.', 1581, $this->source); })())), "html", null, true);
                            yield "\" 
                                        class=\"nav-link ";
                            // line 1582
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "route", [], "any", false, false, false, 1582) == (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 1582, $this->source); })()))) {
                                yield "active";
                            }
                            yield "\">
                                            <i class=\"";
                            // line 1583
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "icon", [], "any", false, false, false, 1583), "html", null, true);
                            yield " me-2\"></i>
                                            ";
                            // line 1584
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "label", [], "any", false, false, false, 1584), "html", null, true);
                            yield "
                                            ";
                            // line 1585
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "badge", [], "any", true, true, false, 1585) && CoreExtension::getAttribute($this->env, $this->source, $context["child"], "badge", [], "any", false, false, false, 1585))) {
                                // line 1586
                                yield "                                                <span class=\"badge bg-info ms-2\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "badge", [], "any", false, false, false, 1586), "html", null, true);
                                yield "</span>
                                            ";
                            }
                            // line 1588
                            yield "                                        </a>
                                    ";
                        }
                        // line 1590
                        yield "                                ";
                    } else {
                        // line 1591
                        yield "                                    <a href=\"#\" class=\"nav-link disabled\" onclick=\"return false;\">
                                        <i class=\"";
                        // line 1592
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "icon", [], "any", true, true, false, 1592)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "icon", [], "any", false, false, false, 1592), "fas fa-ban")) : ("fas fa-ban")), "html", null, true);
                        yield " me-2\"></i>
                                        ";
                        // line 1593
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "label", [], "any", true, true, false, 1593)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "label", [], "any", false, false, false, 1593), "Lien indisponible")) : ("Lien indisponible")), "html", null, true);
                        yield "
                                    </a>
                                ";
                    }
                    // line 1596
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1597
                yield "                        </div>
                    
                    ";
                // line 1600
                yield "                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 1600) == "link")) {
                // line 1601
                yield "                        ";
                $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 1601, $this->source); })()) + 1);
                // line 1602
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", true, true, false, 1602)) {
                    // line 1603
                    yield "                            <a href=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 1603));
                    yield "\" 
                               class=\"nav-link ";
                    // line 1604
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 1604) == (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 1604, $this->source); })()))) {
                        yield "active";
                    }
                    yield "\">
                                <i class=\"";
                    // line 1605
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 1605), "html", null, true);
                    yield "\"></i>
                                <span>";
                    // line 1606
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 1606), "html", null, true);
                    yield "</span>
                                ";
                    // line 1607
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "badge", [], "any", true, true, false, 1607)) {
                        // line 1608
                        yield "                                    <span class=\"badge bg-danger ms-auto\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "badge", [], "any", false, false, false, 1608), "html", null, true);
                        yield "</span>
                                ";
                    }
                    // line 1610
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "coming_soon", [], "any", true, true, false, 1610) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "coming_soon", [], "any", false, false, false, 1610))) {
                        // line 1611
                        yield "                                    <span class=\"badge bg-warning ms-auto\">Bientôt</span>
                                ";
                    }
                    // line 1613
                    yield "                            </a>
                        ";
                } else {
                    // line 1615
                    yield "                            <a href=\"#\" class=\"nav-link disabled\">
                                <i class=\"";
                    // line 1616
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 1616), "html", null, true);
                    yield "\"></i>
                                <span>";
                    // line 1617
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 1617), "html", null, true);
                    yield "</span>
                            </a>
                        ";
                }
                // line 1620
                yield "                    
                    ";
                // line 1622
                yield "                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 1622) == "title")) {
                // line 1623
                yield "                        <div class=\"menu-title\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 1623), "html", null, true);
                yield "</div>
                    
                    ";
            } else {
                // line 1626
                yield "                        ";
                $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 1626, $this->source); })()) + 1);
                // line 1627
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", true, true, false, 1627)) {
                    // line 1628
                    yield "                            <a href=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 1628));
                    yield "\" 
                               class=\"nav-link ";
                    // line 1629
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 1629) == (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 1629, $this->source); })()))) {
                        yield "active";
                    }
                    yield "\">
                                <i class=\"";
                    // line 1630
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 1630), "html", null, true);
                    yield "\"></i>
                                <span>";
                    // line 1631
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 1631), "html", null, true);
                    yield "</span>
                            </a>
                        ";
                } else {
                    // line 1634
                    yield "                            <a href=\"#\" class=\"nav-link disabled\">
                                <i class=\"";
                    // line 1635
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 1635), "html", null, true);
                    yield "\"></i>
                                <span>";
                    // line 1636
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 1636), "html", null, true);
                    yield "</span>
                            </a>
                        ";
                }
                // line 1639
                yield "                    ";
            }
            // line 1640
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1641
        yield "            </div>
        </div>
        
        <!-- Contenu principal -->
        <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4\">
            <!-- Messages flash -->
            ";
        // line 1647
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1647, $this->source); })()), "flashes", [], "any", false, false, false, 1647));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 1648
            yield "                <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield " alert-dismissible fade show shadow-sm border-0\" role=\"alert\">
                    <div class=\"d-flex align-items-center\">
                        ";
            // line 1650
            if (($context["label"] == "success")) {
                // line 1651
                yield "                            <i class=\"bi bi-check-circle-fill me-2\"></i>
                        ";
            } elseif (((            // line 1652
$context["label"] == "error") || ($context["label"] == "danger"))) {
                // line 1653
                yield "                            <i class=\"bi bi-exclamation-circle-fill me-2\"></i>
                        ";
            } elseif ((            // line 1654
$context["label"] == "warning")) {
                // line 1655
                yield "                            <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                        ";
            } elseif ((            // line 1656
$context["label"] == "info")) {
                // line 1657
                yield "                            <i class=\"bi bi-info-circle-fill me-2\"></i>
                        ";
            }
            // line 1659
            yield "                        <div>
                            ";
            // line 1660
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 1661
                yield "                                ";
                yield $context["message"];
                yield "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1663
            yield "                        </div>
                    </div>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1668
        yield "            
            <!-- Contenu de la page -->
            ";
        // line 1670
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 1671
        yield "        </main>
    </div>
</div>
    
    <!-- Footer amélioré -->
    <footer class=\"footer\">
        <div class=\"container-fluid\">
            <div class=\"footer-content\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-4 mb-4 mb-lg-0\">
                        <div class=\"footer-logo\">HMA MARKET</div>
                        <p class=\"footer-text mb-3\">
                            Système de gestion intégré pour une optimisation complète de votre entreprise.
                        </p>
                        <div class=\"mt-3\">
                            <a href=\"#\" class=\"footer-icon me-2\">
                                <i class=\"fab fa-facebook-f\"></i>
                            </a>
                            <a href=\"#\" class=\"footer-icon me-2\">
                                <i class=\"fab fa-twitter\"></i>
                            </a>
                            <a href=\"#\" class=\"footer-icon me-2\">
                                <i class=\"fab fa-linkedin-in\"></i>
                            </a>
                            <a href=\"#\" class=\"footer-icon\">
                                <i class=\"fab fa-instagram\"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class=\"col-lg-4 mb-4 mb-lg-0 text-center\">
                        <ul class=\"list-unstyled mb-0\">
                            <li class=\"mb-2\">
                                <a href=\"";
        // line 1704
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"footer-link\">
                                    <i class=\"bi bi-house-door me-1\"></i>Accueil
                                </a>
                            </li>
                            <li class=\"mb-2\">
                                <a href=\"#\" class=\"footer-link\">
                                    <i class=\"bi bi-info-circle me-1\"></i>À propos
                                </a>
                            </li>
                            <li class=\"mb-2\">
                                <a href=\"#\" class=\"footer-link\">
                                    <i class=\"bi bi-envelope me-1\"></i>Contact
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"footer-link\">
                                    <i class=\"bi bi-shield-check me-1\"></i>Confidentialité
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class=\"col-lg-4 text-lg-end\">
                        <p class=\"footer-text mb-2\">
                            <i class=\"bi bi-telephone me-2\"></i>+229 01 56 13 92 00
                        </p>
                        <p class=\"footer-text mb-3\">
                            <i class=\"bi bi-envelope me-2\"></i>contact@hmamarket.com
                        </p>
                        <span class=\"version-badge\">
                            <i class=\"bi bi-tag me-1\"></i>Version 1.0.0
                        </span>
                    </div>
                </div>
                
                <hr class=\"footer-divider\">
                
                <div class=\"row align-items-center\">
                    <div class=\"col-md-6\">
                        <span class=\"footer-text\">
                            <i class=\"bi bi-copyright me-1\"></i>";
        // line 1744
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " HMA Market. Tous droits réservés.
                        </span>
                    </div>
                    <div class=\"col-md-6 text-md-end\">
                        <span class=\"footer-text\">
                            Développé avec <i class=\"bi bi-heart-fill text-danger mx-1\"></i> par l'équipe technique Amiral Amir.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
   <!-- Bootstrap 5 JS -->
    <script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>

    <script>
    // ==================== SCRIPT PRINCIPAL UNIFIÉ ====================
    document.addEventListener('DOMContentLoaded', function() {
        
        // ---------- SIDEBAR MOBILE ----------
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebarMenu');
        const sidebarBackdrop = document.getElementById('sidebarBackdrop');
        
        if (sidebarToggle) {
            sidebarToggle.addEventListener('click', function() {
                sidebar.classList.toggle('show');
                sidebarBackdrop.classList.toggle('show');
                document.body.style.overflow = sidebar.classList.contains('show') ? 'hidden' : '';
            });
        }
        
        if (sidebarBackdrop) {
            sidebarBackdrop.addEventListener('click', function() {
                sidebar.classList.remove('show');
                sidebarBackdrop.classList.remove('show');
                document.body.style.overflow = '';
            });
        }
        
        if (window.innerWidth < 768) {
            const sidebarLinks = sidebar?.querySelectorAll('.nav-link') || [];
            sidebarLinks.forEach(link => {
                link.addEventListener('click', function() {
                    sidebar.classList.remove('show');
                    sidebarBackdrop?.classList.remove('show');
                    document.body.style.overflow = '';
                });
            });
        }
        
        // ---------- ALERTES FLASH ----------
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
            setTimeout(() => {
                const bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
                bsAlert.close();
            }, 5000);
        });
        
        // ---------- GESTION DES ERREURS D'IMAGES ----------
        document.querySelectorAll('img:not(.product-img)').forEach(img => {
            img.addEventListener('error', function() {
                const parent = this.parentElement;
                const initial = this.getAttribute('data-initial') || 'H';
                
                const fallback = document.createElement('div');
                if (parent?.classList.contains('company-logo')) {
                    fallback.className = 'logo-fallback';
                } else if (parent?.classList.contains('user-avatar')) {
                    fallback.className = 'avatar-initials';
                }
                fallback.textContent = initial;
                
                this.style.display = 'none';
                parent?.appendChild(fallback);
            });
        });
        
        // ---------- RECHERCHE UNIVERSELLE ----------
        function setupUniversalSearch(searchInputId, searchClearId, searchFormId, searchHintId) {
            const searchInput = document.getElementById(searchInputId);
            const searchClear = document.getElementById(searchClearId);
            const searchForm = document.getElementById(searchFormId);
            const searchHint = document.getElementById(searchHintId);
            
            if (!searchInput || !searchClear || !searchForm) return;
            
            function toggleClearButton() {
                searchClear.classList.toggle('show', searchInput.value.trim() !== '');
            }
            
            function updateSearchPlaceholder() {
                const currentRoute = window.location.pathname;
                let placeholder = 'Rechercher...';
                let hint = 'Appuyez sur Entrée pour rechercher';
                
                if (currentRoute.includes('/admin/user')) {
                    placeholder = 'Rechercher un utilisateur...';
                    hint = 'Recherche par nom, email ou téléphone';
                } else if (currentRoute.includes('/admin/product')) {
                    placeholder = 'Rechercher un produit...';
                    hint = 'Recherche par nom, référence ou catégorie';
                } else if (currentRoute.includes('/admin/category')) {
                    placeholder = 'Rechercher une catégorie...';
                    hint = 'Recherche par nom ou description';
                } else if (currentRoute.includes('/admin/order')) {
                    placeholder = 'Rechercher une commande...';
                    hint = 'Recherche par numéro, client ou statut';
                } else if (currentRoute.includes('/admin/stock')) {
                    placeholder = 'Rechercher un mouvement de stock...';
                    hint = 'Recherche par produit ou type';
                } else if (currentRoute.includes('/admin/purchase')) {
                    placeholder = 'Rechercher un achat...';
                    hint = 'Recherche par fournisseur ou référence';
                }
                
                searchInput.placeholder = placeholder;
                if (searchHint) searchHint.textContent = hint;
            }
            
            searchInput.addEventListener('input', toggleClearButton);
            
            searchClear.addEventListener('click', function() {
                searchInput.value = '';
                searchInput.focus();
                toggleClearButton();
                
                if (searchInput.value === '') {
                    const url = new URL(window.location);
                    url.searchParams.delete('search');
                    url.searchParams.delete('page');
                    window.location.href = url.toString();
                }
            });
            
            searchForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const searchTerm = searchInput.value.trim();
                const currentUrl = new URL(window.location);
                
                if (searchTerm) {
                    currentUrl.searchParams.set('search', searchTerm);
                    currentUrl.searchParams.set('page', '1');
                } else {
                    currentUrl.searchParams.delete('search');
                    currentUrl.searchParams.delete('page');
                }
                window.location.href = currentUrl.toString();
            });
            
            updateSearchPlaceholder();
            toggleClearButton();
        }
        
        setupUniversalSearch('universalSearchInput', 'universalSearchClear', 'universalSearchForm', 'searchHint');
        setupUniversalSearch('universalSearchInputMobile', 'universalSearchClearMobile', 'universalSearchFormMobile', 'searchHintMobile');
        
        // Synchronisation des champs de recherche
        const desktopInput = document.getElementById('universalSearchInput');
        const mobileInput = document.getElementById('universalSearchInputMobile');
        
        if (desktopInput && mobileInput) {
            desktopInput.addEventListener('input', function() {
                mobileInput.value = this.value;
                const mobileClear = document.getElementById('universalSearchClearMobile');
                if (mobileClear) mobileClear.classList.toggle('show', this.value.trim() !== '');
            });
            
            mobileInput.addEventListener('input', function() {
                desktopInput.value = this.value;
                const desktopClear = document.getElementById('universalSearchClear');
                if (desktopClear) desktopClear.classList.toggle('show', this.value.trim() !== '');
            });
        }
        
        // ---------- GESTION UNIVERSELLE DES MODALS ----------
        function addLoadingIndicator(modalElement) {
            if (modalElement.querySelector('.modal-loading')) return;
            
            const loadingDiv = document.createElement('div');
            loadingDiv.className = 'modal-loading';
            loadingDiv.style.display = 'none';
            loadingDiv.innerHTML = `
                <div class=\"spinner-container\">
                    <div class=\"spinner-border\" role=\"status\">
                        <span class=\"visually-hidden\">Chargement...</span>
                    </div>
                    <div class=\"loading-text\">Chargement en cours...</div>
                </div>
            `;
            
            const modalContent = modalElement.querySelector('.modal-content');
            if (modalContent) {
                modalContent.style.position = 'relative';
                modalContent.appendChild(loadingDiv);
            }
        }
        
        function setModalLoading(modalElement, isLoading) {
            const loadingDiv = modalElement.querySelector('.modal-loading');
            if (loadingDiv) loadingDiv.style.display = isLoading ? 'flex' : 'none';
        }
        
        function initModal(modal) {
            // Éviter les doubles initialisations
            if (modal.hasAttribute('data-modal-initialized')) return;
            modal.setAttribute('data-modal-initialized', 'true');
            
            addLoadingIndicator(modal);
            
            modal.addEventListener('show.bs.modal', function() {
                setModalLoading(this, false);
            });
            
            const form = modal.querySelector('form');
            if (form) {
                form.addEventListener('submit', () => setModalLoading(modal, true));
            }
            
            const actionBtns = modal.querySelectorAll('.btn-primary, .btn-danger, .btn-success, .btn-warning');
            actionBtns.forEach(btn => {
                if (!btn.hasAttribute('data-bs-dismiss') && btn.type !== 'button') {
                    btn.addEventListener('click', () => setModalLoading(modal, true));
                }
            });
        }
        
        // Initialiser tous les modals existants
        document.querySelectorAll('.modal').forEach(modal => initModal(modal));
        
        // Observer les nouveaux modals
        const modalObserver = new MutationObserver(mutations => {
            mutations.forEach(mutation => {
                mutation.addedNodes.forEach(node => {
                    if (node.nodeType === 1) {
                        if (node.classList?.contains('modal')) initModal(node);
                        node.querySelectorAll?.('.modal').forEach(modal => initModal(modal));
                    }
                });
            });
        });
        modalObserver.observe(document.body, { childList: true, subtree: true });
        
        // ---------- FONCTIONS GLOBALES ----------
        window.showModalWithLoading = function(modalId, loadContentCallback) {
            const modal = document.getElementById(modalId);
            if (!modal) return;
            
            const bsModal = bootstrap.Modal.getOrCreateInstance(modal);
            
            modal.addEventListener('show.bs.modal', async function onShow() {
                modal.removeEventListener('show.bs.modal', onShow);
                setModalLoading(modal, true);
                try {
                    if (loadContentCallback) await loadContentCallback(modal);
                } finally {
                    setModalLoading(modal, false);
                }
            }, { once: true });
            
            bsModal.show();
        };
        
        window.showConfirmModal = function(options) {
            const {
                title = 'Confirmation',
                message = 'Êtes-vous sûr de vouloir effectuer cette action ?',
                type = 'info',
                confirmText = 'Confirmer',
                cancelText = 'Annuler',
                onConfirm = null,
                onCancel = null
            } = options;
            
            const modalId = 'dynamic-confirm-modal-' + Date.now();
            const modalHtml = `
                <div class=\"modal fade modal-confirm\" id=\"\${modalId}\" tabindex=\"-1\">
                    <div class=\"modal-dialog modal-dialog-centered\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header \${type === 'danger' ? 'bg-danger text-white' : (type === 'success' ? 'bg-success text-white' : (type === 'warning' ? 'bg-warning text-dark' : 'bg-primary text-white'))}\">
                                <h5 class=\"modal-title\">
                                    <i class=\"fas \${type === 'danger' ? 'fa-exclamation-triangle' : (type === 'success' ? 'fa-check-circle' : (type === 'warning' ? 'fa-exclamation-triangle' : 'fa-info-circle'))} me-2\"></i>
                                    \${title}
                                </h5>
                                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                            </div>
                            <div class=\"modal-body text-center py-4\">
                                <div class=\"confirm-icon \${type} mb-3\">
                                    <i class=\"fas \${type === 'danger' ? 'fa-times-circle' : (type === 'success' ? 'fa-check-circle' : (type === 'warning' ? 'fa-exclamation-triangle' : 'fa-question-circle'))} fa-3x\"></i>
                                </div>
                                <p class=\"mb-0 fs-5\">\${message}</p>
                            </div>
                            <div class=\"modal-footer justify-content-center\">
                                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">\${cancelText}</button>
                                <button type=\"button\" class=\"btn btn-\${type === 'danger' ? 'danger' : (type === 'success' ? 'success' : 'primary')}\" id=\"confirm-action-\${modalId}\">\${confirmText}</button>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            
            document.body.insertAdjacentHTML('beforeend', modalHtml);
            const modalElement = document.getElementById(modalId);
            
            initModal(modalElement);
            const modal = new bootstrap.Modal(modalElement);
            
            document.getElementById(`confirm-action-\${modalId}`).addEventListener('click', async function() {
                if (onConfirm) {
                    setModalLoading(modalElement, true);
                    try {
                        await onConfirm();
                    } finally {
                        setModalLoading(modalElement, false);
                        modal.hide();
                    }
                } else {
                    modal.hide();
                }
            });
            
            modalElement.addEventListener('hidden.bs.modal', () => setTimeout(() => modalElement.remove(), 300));
            if (onCancel) modalElement.addEventListener('hidden.bs.modal', onCancel, { once: true });
            
            modal.show();
        };
        
        window.setModalLoadingState = function(modalId, isLoading) {
            const modal = document.getElementById(modalId);
            if (modal) setModalLoading(modal, isLoading);
        };
    });

    // Fermeture automatique des alertes au chargement
    window.addEventListener('load', function() {
        setTimeout(() => {
            document.querySelectorAll('.alert').forEach(alert => {
                const bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
                bsAlert.close();
            });
        }, 5000);
    });
    </script>

    ";
        // line 2093
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 2094
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        yield "

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
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

        yield "HMA Market - Système de Gestion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1274
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1670
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 2093
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  2744 => 2093,  2722 => 1670,  2700 => 1274,  2677 => 7,  2661 => 2094,  2659 => 2093,  2307 => 1744,  2264 => 1704,  2229 => 1671,  2227 => 1670,  2223 => 1668,  2213 => 1663,  2204 => 1661,  2200 => 1660,  2197 => 1659,  2193 => 1657,  2191 => 1656,  2188 => 1655,  2186 => 1654,  2183 => 1653,  2181 => 1652,  2178 => 1651,  2176 => 1650,  2170 => 1648,  2166 => 1647,  2158 => 1641,  2152 => 1640,  2149 => 1639,  2143 => 1636,  2139 => 1635,  2136 => 1634,  2130 => 1631,  2126 => 1630,  2120 => 1629,  2115 => 1628,  2112 => 1627,  2109 => 1626,  2102 => 1623,  2099 => 1622,  2096 => 1620,  2090 => 1617,  2086 => 1616,  2083 => 1615,  2079 => 1613,  2075 => 1611,  2072 => 1610,  2066 => 1608,  2064 => 1607,  2060 => 1606,  2056 => 1605,  2050 => 1604,  2045 => 1603,  2042 => 1602,  2039 => 1601,  2036 => 1600,  2032 => 1597,  2026 => 1596,  2020 => 1593,  2016 => 1592,  2013 => 1591,  2010 => 1590,  2006 => 1588,  2000 => 1586,  1998 => 1585,  1994 => 1584,  1990 => 1583,  1984 => 1582,  1979 => 1581,  1972 => 1577,  1968 => 1576,  1965 => 1575,  1962 => 1574,  1959 => 1572,  1956 => 1571,  1953 => 1570,  1950 => 1569,  1947 => 1567,  1944 => 1566,  1942 => 1565,  1940 => 1564,  1937 => 1563,  1934 => 1562,  1930 => 1561,  1922 => 1560,  1919 => 1559,  1915 => 1557,  1913 => 1556,  1909 => 1555,  1905 => 1554,  1901 => 1553,  1894 => 1551,  1890 => 1550,  1887 => 1549,  1881 => 1548,  1878 => 1547,  1875 => 1546,  1872 => 1545,  1867 => 1544,  1864 => 1543,  1861 => 1542,  1858 => 1541,  1852 => 1538,  1849 => 1537,  1847 => 1536,  1843 => 1535,  1840 => 1534,  1837 => 1533,  1834 => 1532,  1832 => 1531,  1817 => 1518,  1806 => 1510,  1796 => 1503,  1787 => 1497,  1782 => 1494,  1772 => 1487,  1769 => 1486,  1767 => 1485,  1756 => 1476,  1752 => 1474,  1748 => 1472,  1746 => 1471,  1743 => 1470,  1741 => 1469,  1738 => 1468,  1736 => 1467,  1733 => 1466,  1731 => 1465,  1728 => 1464,  1725 => 1463,  1723 => 1462,  1717 => 1459,  1712 => 1456,  1706 => 1453,  1703 => 1452,  1697 => 1449,  1692 => 1447,  1687 => 1445,  1682 => 1444,  1680 => 1443,  1677 => 1442,  1674 => 1441,  1671 => 1440,  1669 => 1439,  1656 => 1428,  1652 => 1426,  1648 => 1424,  1646 => 1423,  1643 => 1422,  1641 => 1421,  1638 => 1420,  1636 => 1419,  1633 => 1418,  1631 => 1417,  1628 => 1416,  1625 => 1415,  1623 => 1414,  1617 => 1411,  1612 => 1408,  1606 => 1405,  1603 => 1404,  1597 => 1401,  1592 => 1399,  1587 => 1397,  1582 => 1396,  1580 => 1395,  1577 => 1394,  1574 => 1393,  1571 => 1392,  1569 => 1391,  1564 => 1388,  1562 => 1387,  1558 => 1385,  1555 => 1384,  1547 => 1380,  1544 => 1379,  1541 => 1378,  1539 => 1377,  1521 => 1362,  1496 => 1340,  1481 => 1328,  1476 => 1325,  1463 => 1316,  1460 => 1315,  1454 => 1312,  1448 => 1309,  1443 => 1307,  1438 => 1306,  1433 => 1304,  1428 => 1302,  1423 => 1301,  1421 => 1300,  1418 => 1299,  1415 => 1298,  1412 => 1297,  1409 => 1296,  1407 => 1295,  1405 => 1294,  1400 => 1292,  1388 => 1282,  1385 => 1281,  1382 => 1279,  1379 => 1278,  1375 => 1275,  1373 => 1274,  1310 => 1214,  1221 => 1128,  1217 => 1127,  1213 => 1126,  1209 => 1124,  1206 => 1122,  1196 => 1120,  1193 => 1118,  1190 => 1117,  1187 => 1116,  1184 => 1115,  1181 => 1113,  1178 => 1112,  1176 => 1111,  1174 => 1110,  1171 => 1109,  1168 => 1108,  1165 => 1107,  63 => 7,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"csrf-token\" content=\"{{ csrf_token('global') }}\">
    <title>{% block title %}HMA Market - Système de Gestion{% endblock %}</title>
    
    <!-- CDN Bootstrap 5 -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Bootstrap Icons -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <!-- TomSelect CDN (pour l'autocomplete) -->
    <link href=\"https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css\" rel=\"stylesheet\">
    
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #0463f1; /* Bleu pur UNIFORME */
            --dark-color: #1f2937;
            --light-color: #f9fafb;
            --success-color: #10b981;
            --info-color: #0ea5e9;
            --warning-color: #f59e0b;
            --danger-color: #ef4444;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f7fb;
            color: #333333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        h1 {
            font-family: 'Inter', sans-serif;
            text-align: center;
            padding: 20px 0;
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--dark-color);
        }
        
        .navbar-brand:hover {
            color: var(--primary-color);
        }
        
        /* Logo de l'entreprise */
        .company-logo {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            overflow: hidden;
            margin-right: 10px;
            background: var(--primary-color); /* Bleu pur */
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        
        .company-logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .company-logo .logo-fallback {
            color: white;
            font-weight: 700;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }
        
        .company-name {
            font-weight: 600;
            font-size: 18px;
            color: var(--dark-color);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
        }
        
        /* SIDEBAR - Bleu pur UNIFORME */
        .sidebar {
            background: var(--primary-color); /* Bleu pur */
            color: white;
            min-height: calc(100vh - 73px);
            box-shadow: 0 0 30px rgba(0,0,0,0.1);
            padding: 0;
            position: sticky;
            top: 73px;
            height: 100%;
        }
        
        .sidebar-content {
            padding: 20px;
            height: 100%;
        }
        
        .sidebar .nav-link {
            color: rgba(255,255,255,0.9);
            padding: 12px 15px;
            margin: 5px 0;
            border-radius: 8px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        
        .sidebar .nav-link::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 3px;
            background: white;
            transform: scaleY(0);
            transition: transform 0.3s ease;
            border-radius: 0 3px 3px 0;
        }
        
        .sidebar .nav-link:hover {
            background: rgba(255,255,255,0.15);
            color: white;
            transform: translateX(5px);
        }
        
        .sidebar .nav-link:hover::before {
            transform: scaleY(1);
        }
        
        .sidebar .nav-link.active {
            background: rgba(255,255,255,0.25);
            color: white;
            font-weight: 500;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        
        .sidebar .nav-link.active::before {
            transform: scaleY(1);
        }
        
        .sidebar .nav-link i {
            width: 24px;
            text-align: center;
            margin-right: 10px;
            font-size: 16px;
        }
        
        /* Titres de menu */
        .menu-title {
            color: rgba(255,255,255,0.6);
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 15px 15px 5px;
            margin-top: 15px;
            display: block;
        }
        
        /* Menus déroulants */
        .has-arrow {
            position: relative;
        }
        
        .has-arrow::after {
            content: \"\\f078\";
            font-family: \"Font Awesome 5 Free\";
            font-weight: 900;
            position: absolute;
            right: 15px;
            transition: transform 0.3s ease;
            font-size: 12px;
        }
        
        .has-arrow[aria-expanded=\"true\"]::after {
            transform: rotate(180deg);
        }
        
        /* Sous-menus */
        .sub-menu {
            background: rgba(255,255,255,0.05);
            border-radius: 8px;
            margin: 5px 0 5px 15px;
            padding-left: 0;
            list-style: none;
            border-left: 2px solid rgba(255,255,255,0.1);
        }
        
        .sub-menu .nav-link {
            padding: 10px 15px 10px 40px;
            font-size: 13.5px;
            margin: 2px 0;
        }
        
        .sub-menu .nav-link i {
            font-size: 12px;
            width: 15px;
        }
        
        .sub-menu .nav-link:hover {
            transform: translateX(3px);
        }
        
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        
        .card:hover {
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }
        
        /* Bouton gradient - UNIFORME */
        .btn-gradient {
            background: var(--primary-color); /* Bleu pur */
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-gradient:hover {
            background: #0355d0; /* Bleu plus foncé au survol */
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(4, 99, 241, 0.4);
        }
        
        /* User Avatar */
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid var(--primary-color);
            transition: all 0.3s ease;
            background: var(--primary-color); /* Bleu pur */
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .user-avatar:hover {
            transform: scale(1.05);
            border-color: #0355d0;
        }
        
        .user-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .user-avatar .avatar-initials {
            color: white;
            font-weight: 600;
            font-size: 16px;
        }
        
        /* Barre de recherche universelle */
        .universal-search-container {
            flex-grow: 1;
            max-width: 700px;
            margin: 0 30px;
        }

        .universal-search {
            position: relative;
            width: 100%;
        }

        .universal-search-input {
            border-radius: 25px;
            padding: 10px 50px 10px 45px;
            border: 2px solid #dee2e6;
            transition: all 0.3s ease;
            width: 100%;
            background-color: #f8f9fa;
            font-size: 16px;
            height: 45px;
        }

        .universal-search-input:focus {
            box-shadow: 0 0 0 4px rgba(4, 99, 241, 0.15);
            border-color: var(--primary-color);
            background-color: white;
            outline: none;
        }

        .universal-search-btn {
            position: absolute;
            right: 5px;
            top: 30%;
            transform: translateY(-50%);
            background: var(--primary-color); /* Bleu pur */
            border: none;
            color: white;
            cursor: pointer;
            padding: 8px 12px;
            border-radius: 50%;
            transition: all 0.3s ease;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 3px 10px rgba(4, 99, 241, 0.3);
        }

        .universal-search-btn:hover {
            background: #0355d0; /* Bleu plus foncé */
            transform: translateY(-50%) scale(1.05);
            box-shadow: 0 5px 15px rgba(4, 99, 241, 0.4);
        }

        .universal-search-clear {
            position: absolute;
            right: 45px;
            top: 30%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.05);
            border: none;
            color: #6c757d;
            cursor: pointer;
            padding: 6px;
            border-radius: 50%;
            display: none;
            width: 28px;
            height: 28px;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
        }

        .universal-search-clear.show {
            display: flex;
        }

        .universal-search-clear:hover {
            background: rgba(239, 68, 68, 0.1);
            color: var(--danger-color);
            transform: translateY(-50%) rotate(90deg);
        }

        .search-hint {
            font-size: 13px;
            color: var(--primary-color);
            margin-top: 8px;
            text-align: left;
            opacity: 0.8;
            padding-left: 10px;
            font-weight: 500;
        }

        .universal-search-input::placeholder {
            color: #6c757d;
            opacity: 0.8;
            font-size: 15px;
        }

        .universal-search-input {
            background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%230463f1' class='bi bi-search' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'/%3E%3C/svg%3E\");
            background-position: 15px center;
            background-repeat: no-repeat;
            background-size: 18px;
        }

        @keyframes searchExpand {
            0% { transform: scale(1); }
            100% { transform: scale(1.02); }
        }

        .universal-search:focus-within .universal-search-input {
            animation: searchExpand 0.3s ease forwards;
        }

        @media (min-width: 1400px) {
            .universal-search-container {
                max-width: 700px;
                margin: 0 40px;
            }
        }

        @media (max-width: 992px) {
            .universal-search-container {
                max-width: 400px;
                margin: 0 15px;
            }
            
            .universal-search-input {
                height: 40px;
                font-size: 15px;
                padding: 8px 45px 8px 40px;
            }
            
            .universal-search-btn {
                width: 32px;
                height: 32px;
                padding: 6px;
            }
            
            .universal-search-clear {
                right: 45px;
                width: 26px;
                height: 26px;
            }
        }

        @media (max-width: 768px) {
            .universal-search-container {
                max-width: 100%;
                margin: 10px 0;
            }
            
            .universal-search-input {
                border-radius: 20px;
                height: 42px;
            }
        }

        @keyframes pulseBorder {
            0% {
                border-color: var(--primary-color);
                box-shadow: 0 0 0 4px rgba(4, 99, 241, 0.15);
            }
            50% {
                border-color: #0355d0;
                box-shadow: 0 0 0 6px rgba(4, 99, 241, 0.1);
            }
            100% {
                border-color: var(--primary-color);
                box-shadow: 0 0 0 4px rgba(4, 99, 241, 0.15);
            }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                top: 0;
                left: -280px;
                width: 280px;
                height: 100vh;
                transition: left 0.3s ease;
                z-index: 1040;
                box-shadow: 5px 0 30px rgba(0,0,0,0.2);
            }
            
            .sidebar.show {
                left: 0;
            }
            
            .sidebar-backdrop {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0,0,0,0.5);
                z-index: 1039;
                display: none;
                backdrop-filter: blur(2px);
            }
            
            .sidebar-backdrop.show {
                display: block;
            }
            
            main {
                padding-top: 20px !important;
            }
            
            .universal-search-container {
                max-width: 100%;
                margin: 10px 0;
                order: 3;
                width: 100%;
            }
            
            .navbar-collapse {
                flex-direction: column;
            }
        }
        
        @media (max-width: 992px) {
            .universal-search-container {
                max-width: 300px;
            }
        }

        .card-animate {
            transition: all 0.3s ease;
            border: none;
            overflow: hidden;
        }

        .card-animate:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;
        }

        .bg-primary {
            background: var(--primary-color) !important; /* Bleu pur */
        }

        .bg-success {
            background: var(--success-color) !important;
        }

        .bg-info {
            background: var(--info-color) !important;
        }

        .bg-warning {
            background: var(--warning-color) !important;
        }

        .bg-danger {
            background: var(--danger-color) !important;
        }

        .bg-secondary {
            background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%) !important;
        }

        .avatar-sm {
            width: 50px;
            height: 50px;
        }

        .avatar-title {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }

        .bg-soft-light {
            background-color: rgba(255, 255, 255, 0.2) !important;
        }
        
        main {
            min-height: calc(100vh - 180px);
            padding-top: 30px;
        }
        
        /* FOOTER */
        .footer {
            background: linear-gradient(135deg, #1f2937 0%, #111827 100%);
            color: #f9fafb;
            margin-top: auto;
            padding: 2px 0;
            position: relative;
            overflow: hidden;
        }
        
        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--primary-color); /* Bleu pur */
        }
        
        .footer-content {
            transition: all 0.3s ease;
        }
        
        .footer:hover .footer-content {
            transform: translateY(-5px);
        }
        
        .footer-logo {
            font-weight: 700;
            font-size: 20px;
            color: var(--primary-color); /* Bleu pur */
            margin-bottom: 10px;
        }
        
        .footer-text {
            color: #9ca3af;
            transition: color 0.3s ease;
        }
        
        .footer-link {
            color: #d1d5db;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
            padding: 5px 0;
            display: inline-block;
        }
        
        .footer-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-color); /* Bleu pur */
            transition: width 0.3s ease;
        }
        
        .footer-link:hover {
            color: white;
            transform: translateX(5px);
        }
        
        .footer-link:hover::after {
            width: 100%;
        }
        
        .footer-divider {
            border-color: #374151;
            margin: 25px 0;
            opacity: 0.5;
        }
        
        .footer-icon {
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: #d1d5db;
            transition: all 0.3s ease;
            margin: 0 5px;
        }
        
        .footer-icon:hover {
            background: var(--primary-color); /* Bleu pur */
            color: white;
            transform: translateY(-3px);
        }
        
        .version-badge {
            background: var(--primary-color); /* Bleu pur */
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
            display: inline-block;
            transition: all 0.3s ease;
        }
        
        .version-badge:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(4, 99, 241, 0.3);
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        main > * {
            animation: fadeIn 0.5s ease-out;
        }
        
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--primary-color); /* Bleu pur */
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #0355d0; /* Bleu plus foncé */
        }

        .badge-status-draft { background-color: #6c757d; }
        .badge-status-confirmed { background-color: #0d6efd; }
        .badge-status-received { background-color: #198754; }
        .badge-status-cancelled { background-color: #dc3545; }

        @keyframes cartPulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .cart-animation {
            animation: cartPulse 0.3s ease-in-out;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(4, 99, 241, 0.25);
        }

        @media (max-width: 768px) {
            .table-responsive {
                font-size: 0.9rem;
            }
            
            .btn-group-sm .btn {
                padding: 0.25rem 0.5rem;
                font-size: 0.875rem;
            }
        }

        /* Ajouter dans votre bloc stylesheets */
        .subscription-widget-container {
            margin-top: 0.5rem;
        }

        .subscription-widget-container .card {
            border-radius: var(--border-radius-lg);
            overflow: hidden;
            transition: var(--transition-smooth);
        }

        .subscription-widget-container .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(52, 152, 219, 0.2);
        }

        /* Classes d'opacité */
        .bg-opacity-10 {
            --bs-bg-opacity: 0.1;
        }
        .bg-opacity-20 {
            --bs-bg-opacity: 0.2;
        }
        .border-opacity-20 {
            --bs-border-opacity: 0.2;
        }

        /* Texte blanc avec opacité */
        .text-white-50 {
            color: rgba(255, 255, 255, 0.7) !important;
        }

        /* Espacement des lettres */
        .tracking-wider {
            letter-spacing: 0.05em;
        }

        /* Ajustement pour mobile */
        @media (max-width: 768px) {
            .subscription-widget-container {
                margin-top: 1rem;
            }
        }

        /* Ajouter à la fin de votre bloc stylesheets */

        /* Structure de la page */
        .container-fluid.flex-grow-1 {
            padding-left: 0;
            padding-right: 0;
        }

        .row {
            margin-left: 0;
            margin-right: 0;
        }

        /* Sidebar */
        .sidebar {
            padding-left: 0;
            padding-right: 0;
            transition: all 0.3s ease;
        }

        .sidebar-content {
            padding: 1rem 0.5rem;
            height: 100%;
            overflow-y: auto;
        }

        /* Ajustement pour mobile */
        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                left: -280px;
                top: 0;
                width: 280px;
                height: 100vh;
                z-index: 1040;
                transition: left 0.3s ease;
                box-shadow: none;
            }
            
            .sidebar.show {
                left: 0;
                box-shadow: 5px 0 30px rgba(0,0,0,0.2);
            }
            
            .sidebar-backdrop {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0,0,0,0.5);
                z-index: 1039;
                backdrop-filter: blur(3px);
            }
            
            .sidebar-backdrop.show {
                display: block;
            }
            
            main {
                margin-left: 0 !important;
                width: 100% !important;
                padding: 1rem !important;
            }
        }

        /* Animation pour les sous-menus */
        .sub-menu {
            transition: all 0.3s ease-in-out;
            overflow: hidden;
        }

        .sub-menu.collapse:not(.show) {
            display: none;
        }

        .sub-menu.collapsing {
            display: block;
            height: 0;
            overflow: hidden;
            transition: height 0.3s ease-in-out;
        }

        /* Style pour les badges */
        .badge.bg-warning {
            background: #f59e0b !important;
            color: #000;
            font-size: 0.7rem;
            padding: 3px 6px;
            border-radius: 4px;
            margin-left: 8px;
            font-weight: 500;
        }

        .badge.bg-danger {
            background: #ef4444 !important;
            color: white;
            font-size: 0.7rem;
            padding: 3px 6px;
            border-radius: 4px;
            margin-left: 8px;
            font-weight: 500;
        }

        /* Style pour les liens désactivés */
        .nav-link.disabled {
            opacity: 0.5;
            pointer-events: none;
            cursor: default;
        }

        /* Dropdown divider */
        .dropdown-divider {
            border-top-color: rgba(255,255,255,0.1);
            margin: 0.5rem 0;
        }
        
        /* Animation pulse pour le bouton Upgrade */
        @keyframes upgradePulse {
            0% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(4, 99, 241, 0.7);
            }
            70% {
                transform: scale(1.05);
                box-shadow: 0 0 0 10px rgba(4, 99, 241, 0);
            }
            100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(4, 99, 241, 0);
            }
        }

        /* Bouton Upgrade moderne avec bords arrondis */
        .btn-upgrade {
            background: linear-gradient(135deg, #0463f1, #0355d0);
            border: none;
            color: white;
            font-weight: 600;
            padding: 0.2rem 1.2rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 50px; /* Rend le bouton très arrondi (style pilule) */
            white-space: nowrap;
            box-shadow: 0 4px 10px rgba(4, 99, 241, 0.3);
            transition: all 0.3s ease;
            animation: upgradePulse 2s infinite;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            cursor: pointer;
        }

        .btn-upgrade:hover {
            background: linear-gradient(135deg, #0355d0, #0245a8);
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(4, 99, 241, 0.5);
            color: white;
            animation: none; /* Arrête l'animation au survol */
        }

        .btn-upgrade:focus {
            outline: none;
            box-shadow: 0 0 0 0.25rem rgba(4, 99, 241, 0.5);
        }

        .btn-upgrade i {
            margin-right: 6px;
            font-size: 1rem;
        }

        /* Animation pulse (identique à votre précédente) */
        @keyframes upgradePulse {
            0% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(4, 99, 241, 0.7);
            }
            70% {
                transform: scale(1.05);
                box-shadow: 0 0 0 10px rgba(4, 99, 241, 0);
            }
            100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(4, 99, 241, 0);
            }
        }

        /* ==================== MODAL LOADING EFFECTS UNIVERSELLES ==================== */

        /* Animation d'entrée pour tous les modals */
        .modal.fade .modal-dialog {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transform: scale(0.95);
            opacity: 0;
        }

        .modal.fade.show .modal-dialog {
            transform: scale(1);
            opacity: 1;
        }

        /* Overlay avec fond animé */
        .modal-backdrop {
            transition: opacity 0.3s ease;
        }

        .modal-backdrop.fade {
            opacity: 0;
        }

        .modal-backdrop.fade.show {
            opacity: 0.7;
        }

        /* Spinner de chargement intégré - visible automatiquement */
        .modal-loading {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.95);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1060;
            border-radius: 12px;
            backdrop-filter: blur(4px);
            transition: all 0.3s ease;
        }

        .modal-loading .spinner-container {
            text-align: center;
        }

        .modal-loading .spinner-border {
            width: 3rem;
            height: 3rem;
            border-width: 0.25rem;
            color: var(--primary-color);
        }

        .modal-loading .loading-text {
            margin-top: 1rem;
            color: var(--primary-color);
            font-weight: 500;
        }

        /* Animation d'entrée du contenu */
        .modal-content {
            animation: modalSlideIn 0.3s ease-out;
            overflow: hidden;
        }

        @keyframes modalSlideIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Effet de pulse pour les boutons */
        .modal-footer .btn {
            position: relative;
            overflow: hidden;
            transition: all 0.2s ease;
        }

        .modal-footer .btn:active {
            transform: scale(0.96);
        }

        /* Scroll personnalisé */
        .modal-body {
            max-height: calc(100vh - 200px);
            overflow-y: auto;
            scrollbar-width: thin;
        }

        .modal-body::-webkit-scrollbar {
            width: 6px;
        }

        .modal-body::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .modal-body::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 10px;
        }

        /* Responsive */
        @media (max-width: 576px) {
            .modal-dialog {
                margin: 1rem;
            }
            
            .modal-content {
                border-radius: 16px;
            }
            
            .modal-footer {
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .modal-footer .btn {
                width: 100%;
                margin: 0;
            }
        }
    </style>

        {# ✅ STYLES DYNAMIQUES - AVEC EXTENSION TWIG #}
    {% set primaryColor = '#0463f1' %}
    {% set secondaryColor = '#8b5cf6' %}
    
    {% if app.user and app.user.hmaServiceId %}
        {# Récupération de l'ID de l'entreprise #}
        {% set companyId = app.user.hmaServiceId.getId() %}
        
        {# ✅ Utilisation de l'extension Twig pour recharger depuis la base #}
        {% set companyColors = get_company_colors(companyId) %}
        {% set primaryColor = companyColors.primary %}
        {% set secondaryColor = companyColors.secondary %}
        
        {# DEBUG: Afficher les couleurs dans le code HTML #}
        <!-- DEBUG COULEURS: Company ID={{ companyId }}, Primary={{ primaryColor }}, Secondary={{ secondaryColor }} -->
    {% endif %}
    
    {# ✅ APPLICATION DES COULEURS #}
    <style>
        :root {
            --primary-color: {{ primaryColor }};
            --primary-dark: {{ primaryColor|color_darken(15) }};
            --secondary-color: {{ secondaryColor }};
        }
        
        /* Application des couleurs dynamiques */
        .sidebar,
        .btn-gradient,
        .universal-search-btn,
        .version-badge,
        .modal-header.bg-primary,
        .company-logo {
            background: var(--primary-color) !important;
        }
        
        .btn-primary {
            background: var(--primary-color) !important;
            border-color: var(--primary-color) !important;
        }
        
        .btn-primary:hover,
        .btn-gradient:hover,
        .universal-search-btn:hover {
            background: var(--primary-dark) !important;
            border-color: var(--primary-dark) !important;
        }
        
        .navbar-brand:hover,
        .footer-logo,
        .chart-title i {
            color: var(--primary-color) !important;
        }
        
        .footer::before,
        .progress-bar-custom.bg-primary {
            background: var(--primary-color) !important;
        }
        
        .footer-link::after {
            background: var(--primary-color) !important;
        }
        
        .sidebar .nav-link.active {
            background: rgba(255, 255, 255, 0.25) !important;
        }
        
        .btn-outline-primary {
            border-color: var(--primary-color) !important;
            color: var(--primary-color) !important;
        }
        
        .btn-outline-primary:hover {
            background: var(--primary-color) !important;
            color: white !important;
        }
        
        .text-primary {
            color: var(--primary-color) !important;
        }
        
        .badge.bg-primary {
            background: var(--primary-color) !important;
        }
        
        .pagination .page-item.active .page-link {
            background: var(--primary-color) !important;
            border-color: var(--primary-color) !important;
        }
        
        a:not(.btn):not(.nav-link):not(.dropdown-item):not(.footer-link) {
            color: var(--primary-color) !important;
        }
        
        a:not(.btn):not(.nav-link):not(.dropdown-item):not(.footer-link):hover {
            color: var(--primary-dark) !important;
        }
        
        .form-control:focus {
            border-color: var(--primary-color) !important;
            box-shadow: 0 0 0 0.25rem color-mix(in srgb, var(--primary-color) 25%, transparent) !important;
        }
        
        .universal-search-input:focus {
            border-color: var(--primary-color) !important;
            box-shadow: 0 0 0 4px color-mix(in srgb, var(--primary-color) 15%, transparent) !important;
        }
        
        .universal-search-input {
            background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='{{ primaryColor|replace({'#': '%23'}) }}' class='bi bi-search' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'/%3E%3C/svg%3E\") !important;
        }
        
        .universal-search-btn {
            box-shadow: 0 3px 10px color-mix(in srgb, var(--primary-color) 30%, transparent) !important;
        }
        
        .btn-upgrade {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)) !important;
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--primary-color) !important;
        }
        
        .modal-footer .btn:active {
            transform: scale(0.96);
        }
        
        .modal-body {
            max-height: calc(100vh - 200px);
            overflow-y: auto;
            scrollbar-width: thin;
        }
        
        .modal-body::-webkit-scrollbar {
            width: 6px;
        }
        
        .modal-body::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        .modal-body::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 10px;
        }
        
        @media (max-width: 576px) {
            .modal-dialog {
                margin: 1rem;
            }
            
            .modal-content {
                border-radius: 16px;
            }
            
            .modal-footer {
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .modal-footer .btn {
                width: 100%;
                margin: 0;
            }
        }
    </style>

    {% block stylesheets %}{% endblock %}
</head>
<body>
    {# ✅ TOAST POUR LES MESSAGES DE SESSION #}
    {% include 'components/_session_toast.html.twig' %}
    
    {# ✅ VOS FLASHBAGS CLASSIQUES #}
    {% include 'components/_toast.html.twig' %}
    
    <!-- Navigation principale - SIMPLIFIÉE -->
    <nav class=\"navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top\">
        <div class=\"container-fluid\">
            <!-- Bouton sidebar (mobile) -->
            <button class=\"navbar-toggler border-0\" type=\"button\" id=\"sidebarToggle\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            
            <!-- À GAUCHE : Logo et nom de l'entreprise - VERSION SÉCURISÉE -->
            <a class=\"navbar-brand d-flex align-items-center\" href=\"{{ path('app_dashboard') }}\">
                <div class=\"company-logo\" id=\"companyLogo\">
                    {% if app.user and app.user.hasCompany %}
                        {# Utilisation des méthodes sécurisées #}
                        {% set companyName = app.user.companyDisplayName %}
                        {% set initial = app.user.companyInitial %}
                        {% set logo = app.user.companyLogo %}
                        
                        {% if logo %}
                            <img src=\"{{ asset('uploads/logos/' ~ logo) }}\" 
                                alt=\"{{ companyName }}\"
                                class=\"logo-img\"
                                data-initial=\"{{ initial }}\">
                        {% else %}
                            <img src=\"{{ asset('uploads/logos/logo.png') }}\" 
                                alt=\"{{ companyName }}\"
                                class=\"logo-img\"
                                data-initial=\"{{ initial }}\"
                                onerror=\"this.style.display='none'; this.nextElementSibling.style.display='flex';\">
                            <div class=\"logo-fallback\" style=\"display: none;\">
                                {{ initial }}
                            </div>
                        {% endif %}
                    {% else %}
                        <img src=\"{{ asset('uploads/logos/logo.png') }}\" 
                            alt=\"HMA MARKET\"
                            class=\"logo-img\"
                            data-initial=\"H\"
                            onerror=\"this.style.display='none'; this.nextElementSibling.style.display='flex';\">
                        <div class=\"logo-fallback\" style=\"display: none;\">
                            H
                        </div>
                    {% endif %}
                </div>
                
                <div class=\"company-name\" id=\"companyName\">
                    {{ app.user ? app.user.companyDisplayName : 'HMA MARKET' }}
                </div>
            </a>
            
            <!-- Barre de recherche universelle -->
            <div class=\"universal-search-container d-none d-md-flex\">
                <form id=\"universalSearchForm\" method=\"get\" class=\"universal-search\">
                    <input type=\"text\" 
                           id=\"universalSearchInput\"
                           class=\"form-control universal-search-input\" 
                           name=\"search\" 
                           placeholder=\"Rechercher...\" 
                           value=\"{{ app.request.query.get('search', '') }}\"
                           autocomplete=\"off\">
                    <button type=\"button\" id=\"universalSearchClear\" class=\"universal-search-clear\">
                        <i class=\"fas fa-times\"></i>
                    </button>
                    <button type=\"submit\" class=\"universal-search-btn\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                    <div class=\"search-hint\" id=\"searchHint\"></div>
                </form>
            </div>
            
            <!-- À DROITE : Informations utilisateur -->
            <div class=\"collapse navbar-collapse\" id=\"navbarContent\">
                <!-- Barre de recherche mobile -->
                <div class=\"universal-search-container d-md-none\">
                    <form id=\"universalSearchFormMobile\" method=\"get\" class=\"universal-search\">
                        <input type=\"text\" 
                               id=\"universalSearchInputMobile\"
                               class=\"form-control universal-search-input\" 
                               name=\"search\" 
                               placeholder=\"Rechercher...\" 
                               value=\"{{ app.request.query.get('search', '') }}\"
                               autocomplete=\"off\">
                        <button type=\"button\" id=\"universalSearchClearMobile\" class=\"universal-search-clear\">
                            <i class=\"fas fa-times\"></i>
                        </button>
                        <button type=\"submit\" class=\"universal-search-btn\">
                            <i class=\"fas fa-search\"></i>
                        </button>
                        <div class=\"search-hint\" id=\"searchHintMobile\"></div>
                    </form>
                </div>

                <ul class=\"navbar-nav ms-auto\">

                    <!-- Bouton Upgrade (visible pour admin/manager si l'entreprise n'a pas déjà le plan premium) -->
                    {% if app.user and app.user.hmaServiceId %}
                        {% set service = app.user.hmaServiceId %}
                        {% if (is_granted('ROLE_ADMIN') or is_granted('ROLE_MANAGER')) and service.currentPlan != 'premium' %}
                            <a href=\"{{ path('app_subscription_plans') }}\" class=\"btn-upgrade me-3 ms-3\" style=\"color: white !important;\">
                                <i class=\"bi bi-arrow-up-circle me-1\"></i>Upgrade
                            </a>
                        {% endif %}
                    {% endif %}

                    <!-- Utilisateur connecté -->
                    {% if app.user %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle d-flex align-items-center\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\">
                            <div class=\"user-avatar me-2\" id=\"userAvatar\">
                                {% set user = app.user %}
                                {% set userName = user.fullName|default('Utilisateur') %}
                                {% set initial = userName|first|upper %}
                                
                                {% if user.photo %}
                                    <img src=\"{{ asset('uploads/users/' ~ user.photo) }}\" 
                                         alt=\"{{ userName }}\"
                                         class=\"avatar-img\"
                                         data-initial=\"{{ initial }}\">
                                    <div class=\"avatar-initials\" style=\"display: none;\">
                                        {{ initial }}
                                    </div>
                                {% else %}
                                    <div class=\"avatar-initials\">
                                        {{ initial }}
                                    </div>
                                {% endif %}
                            </div>
                            <div class=\"d-none d-md-block text-start\">
                                <div class=\"fw-medium\" id=\"userName\">
                                    {{ app.user.fullName|default('Utilisateur') }}
                                </div>
                                <small class=\"text-muted\">
                                    {% set user = app.user %}
                                    {% if 'ROLE_ADMIN' in user.roles %}
                                        <i class=\"bi bi-shield-check text-primary me-1\"></i>Administrateur
                                    {% elseif 'ROLE_MANAGER' in user.roles %}
                                        <i class=\"bi bi-graph-up text-success me-1\"></i>Gestionnaire
                                    {% elseif 'ROLE_STOCK_MANAGER' in user.roles %}
                                        <i class=\"bi bi-box-seam text-warning me-1\"></i>Responsable Stock
                                    {% elseif 'ROLE_CASHIER' in user.roles %}
                                        <i class=\"bi bi-cash-coin text-info me-1\"></i>Caissier
                                    {% elseif 'ROLE_SUPER_ADMIN' in user.roles %}
                                        <i class=\"bi bi-shield-check text-danger me-1\"></i>Super Administrateur
                                    {% else %}
                                        <i class=\"bi bi-person me-1\"></i>Utilisateur
                                    {% endif %}
                                </small>
                            </div>
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-end shadow-lg border-0\">
                            <li><h6 class=\"dropdown-header bg-light fw-bold\">Mon compte</h6></li>
                            
                            <!-- Photo et informations du profil -->
                            <li>
                                <div class=\"px-3 py-2\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"user-avatar me-3\">
                                            {% set user = app.user %}
                                            {% set userName = user.fullName|default('Utilisateur') %}
                                            {% set initial = userName|first|upper %}
                                            
                                            {% if user.photo %}
                                                <img src=\"{{ asset('uploads/users/' ~ user.photo) }}\" 
                                                     alt=\"{{ userName }}\"
                                                     class=\"avatar-img\"
                                                     data-initial=\"{{ initial }}\">
                                                <div class=\"avatar-initials\" style=\"display: none;\">
                                                    {{ initial }}
                                                </div>
                                            {% else %}
                                                <div class=\"avatar-initials\">
                                                    {{ initial }}
                                                </div>
                                            {% endif %}
                                        </div>
                                        <div>
                                            <div class=\"fw-medium\">
                                                {{ app.user.fullName|default('Utilisateur') }}
                                            </div>
                                            <small class=\"text-muted\">
                                                {% set user = app.user %}
                                                {% if 'ROLE_ADMIN' in user.roles %}
                                                    Administrateur
                                                {% elseif 'ROLE_MANAGER' in user.roles %}
                                                    Gestionnaire
                                                {% elseif 'ROLE_STOCK_MANAGER' in user.roles %}
                                                    Responsable Stock
                                                {% elseif 'ROLE_CASHIER' in user.roles %}
                                                    Caissier
                                                {% elseif 'ROLE_SUPER_ADMIN' in user.roles %}
                                                    Super Administrateur    
                                                {% else %}
                                                    Utilisateur
                                                {% endif %}
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                            <li><hr class=\"dropdown-divider\"></li>
                            
                            <!-- Bouton \"Gérer l'entreprise\" -->
                            {% if app.user.isHmaOwner is defined and app.user.isHmaOwner and app.user.hmaServiceId %}
                            <li>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('app_dashboard_hmaservice_details') }}\">
                                    <i class=\"bi bi-building me-2 text-info\"></i>
                                    <span>Gérer l'entreprise</span>
                                </a>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            {% endif %}
                            
                            <!-- Liens standards -->
                            <li>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('app_profile_show') }}\">
                                    <i class=\"bi bi-person me-2 text-primary\"></i>
                                    <span>Mon profil</span>
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('app_change_password') }}\">
                                    <i class=\"bi bi-shield-lock me-2 text-success\"></i>
                                    <span>Changer mot de passe</span>
                                </a>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li>
                                <a class=\"dropdown-item d-flex align-items-center text-danger\" href=\"{{ path('app_logout') }}\">
                                    <i class=\"bi bi-box-arrow-right me-2\"></i>
                                    <span>Déconnexion</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {% endif %}
                </ul>
            </div>
        </div>
    </nav>
    
    <div class=\"container-fluid flex-grow-1\">
    <div class=\"row\">
        <!-- Backdrop pour mobile -->
        <div class=\"sidebar-backdrop\" id=\"sidebarBackdrop\"></div>
        
        <!-- Sidebar -->
        <div class=\"col-md-3 col-lg-2 d-md-block sidebar\" id=\"sidebarMenu\">
            <div class=\"sidebar-content\">
                {% set currentRoute = app.request.get('_route') %}
                {% set menuItems = get_menu() %}
                {% set counter = 0 %}
                
                {% for item in menuItems %}
                    {# SECTION (TITRE) #}
                    {% if item.type == 'section' %}
                        <div class=\"menu-title\">{{ item.label }}</div>
                    
                    {# DROPDOWN #}
                    {% elseif item.type == 'dropdown' %}
                        {% set counter = counter + 1 %}
                        {% set isActive = false %}
                        {% for child in item.children %}
                            {% if child.route is defined and child.route == currentRoute %}
                                {% set isActive = true %}
                            {% endif %}
                        {% endfor %}
                        
                        <a href=\"#submenu{{ counter }}\" 
                           class=\"nav-link has-arrow {% if isActive %}active{% endif %}\" 
                           data-bs-toggle=\"collapse\"
                           aria-expanded=\"{{ isActive ? 'true' : 'false' }}\">
                            <i class=\"{{ item.icon }}\"></i>
                            <span>{{ item.label }}</span>
                            {% if item.coming_soon is defined and item.coming_soon %}
                                <span class=\"badge bg-warning ms-auto\">Bientôt</span>
                            {% endif %}
                        </a>
                        <div class=\"sub-menu collapse {% if isActive %}show{% endif %}\" id=\"submenu{{ counter }}\">
                            {% for child in item.children %}
                                {% if child.type is defined and child.type == 'divider' %}
                                    <hr class=\"dropdown-divider\">
                                {% elseif child.route is defined %}
                                    {# Gestion sécurisée des paramètres de route #}
                                    {% set route_params = child.params|default({}) %}
                                    
                                    {# Pour la route des lots, on ajoute un productId par défaut si absent #}
                                    {% if child.route == 'app_admin_stock_batch_index' and route_params.productId is not defined %}
                                        {% set route_params = route_params|merge({'productId': 0}) %}
                                    {% endif %}
                                    
                                    {# Si la route est en développement, lien désactivé #}
                                    {% if child.coming_soon is defined and child.coming_soon %}
                                        <a href=\"#\" class=\"nav-link disabled\" onclick=\"return false;\">
                                            <i class=\"{{ child.icon }} me-2\"></i>
                                            {{ child.label }}
                                            <span class=\"badge bg-warning ms-2\">Bientôt</span>
                                        </a>
                                    {% else %}
                                        <a href=\"{{ path(child.route, route_params) }}\" 
                                        class=\"nav-link {% if child.route == currentRoute %}active{% endif %}\">
                                            <i class=\"{{ child.icon }} me-2\"></i>
                                            {{ child.label }}
                                            {% if child.badge is defined and child.badge %}
                                                <span class=\"badge bg-info ms-2\">{{ child.badge }}</span>
                                            {% endif %}
                                        </a>
                                    {% endif %}
                                {% else %}
                                    <a href=\"#\" class=\"nav-link disabled\" onclick=\"return false;\">
                                        <i class=\"{{ child.icon|default('fas fa-ban') }} me-2\"></i>
                                        {{ child.label|default('Lien indisponible') }}
                                    </a>
                                {% endif %}
                            {% endfor %}
                        </div>
                    
                    {# LIEN SIMPLE #}
                    {% elseif item.type == 'link' %}
                        {% set counter = counter + 1 %}
                        {% if item.route is defined %}
                            <a href=\"{{ path(item.route) }}\" 
                               class=\"nav-link {% if item.route == currentRoute %}active{% endif %}\">
                                <i class=\"{{ item.icon }}\"></i>
                                <span>{{ item.label }}</span>
                                {% if item.badge is defined %}
                                    <span class=\"badge bg-danger ms-auto\">{{ item.badge }}</span>
                                {% endif %}
                                {% if item.coming_soon is defined and item.coming_soon %}
                                    <span class=\"badge bg-warning ms-auto\">Bientôt</span>
                                {% endif %}
                            </a>
                        {% else %}
                            <a href=\"#\" class=\"nav-link disabled\">
                                <i class=\"{{ item.icon }}\"></i>
                                <span>{{ item.label }}</span>
                            </a>
                        {% endif %}
                    
                    {# FALLBACK #}
                    {% elseif item.type == 'title' %}
                        <div class=\"menu-title\">{{ item.label }}</div>
                    
                    {% else %}
                        {% set counter = counter + 1 %}
                        {% if item.route is defined %}
                            <a href=\"{{ path(item.route) }}\" 
                               class=\"nav-link {% if item.route == currentRoute %}active{% endif %}\">
                                <i class=\"{{ item.icon }}\"></i>
                                <span>{{ item.label }}</span>
                            </a>
                        {% else %}
                            <a href=\"#\" class=\"nav-link disabled\">
                                <i class=\"{{ item.icon }}\"></i>
                                <span>{{ item.label }}</span>
                            </a>
                        {% endif %}
                    {% endif %}
                {% endfor %}
            </div>
        </div>
        
        <!-- Contenu principal -->
        <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4\">
            <!-- Messages flash -->
            {% for label, messages in app.flashes %}
                <div class=\"alert alert-{{ label }} alert-dismissible fade show shadow-sm border-0\" role=\"alert\">
                    <div class=\"d-flex align-items-center\">
                        {% if label == 'success' %}
                            <i class=\"bi bi-check-circle-fill me-2\"></i>
                        {% elseif label == 'error' or label == 'danger' %}
                            <i class=\"bi bi-exclamation-circle-fill me-2\"></i>
                        {% elseif label == 'warning' %}
                            <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                        {% elseif label == 'info' %}
                            <i class=\"bi bi-info-circle-fill me-2\"></i>
                        {% endif %}
                        <div>
                            {% for message in messages %}
                                {{ message|raw }}
                            {% endfor %}
                        </div>
                    </div>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}
            
            <!-- Contenu de la page -->
            {% block body %}{% endblock %}
        </main>
    </div>
</div>
    
    <!-- Footer amélioré -->
    <footer class=\"footer\">
        <div class=\"container-fluid\">
            <div class=\"footer-content\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-4 mb-4 mb-lg-0\">
                        <div class=\"footer-logo\">HMA MARKET</div>
                        <p class=\"footer-text mb-3\">
                            Système de gestion intégré pour une optimisation complète de votre entreprise.
                        </p>
                        <div class=\"mt-3\">
                            <a href=\"#\" class=\"footer-icon me-2\">
                                <i class=\"fab fa-facebook-f\"></i>
                            </a>
                            <a href=\"#\" class=\"footer-icon me-2\">
                                <i class=\"fab fa-twitter\"></i>
                            </a>
                            <a href=\"#\" class=\"footer-icon me-2\">
                                <i class=\"fab fa-linkedin-in\"></i>
                            </a>
                            <a href=\"#\" class=\"footer-icon\">
                                <i class=\"fab fa-instagram\"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class=\"col-lg-4 mb-4 mb-lg-0 text-center\">
                        <ul class=\"list-unstyled mb-0\">
                            <li class=\"mb-2\">
                                <a href=\"{{ path('app_home') }}\" class=\"footer-link\">
                                    <i class=\"bi bi-house-door me-1\"></i>Accueil
                                </a>
                            </li>
                            <li class=\"mb-2\">
                                <a href=\"#\" class=\"footer-link\">
                                    <i class=\"bi bi-info-circle me-1\"></i>À propos
                                </a>
                            </li>
                            <li class=\"mb-2\">
                                <a href=\"#\" class=\"footer-link\">
                                    <i class=\"bi bi-envelope me-1\"></i>Contact
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"footer-link\">
                                    <i class=\"bi bi-shield-check me-1\"></i>Confidentialité
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class=\"col-lg-4 text-lg-end\">
                        <p class=\"footer-text mb-2\">
                            <i class=\"bi bi-telephone me-2\"></i>+229 01 56 13 92 00
                        </p>
                        <p class=\"footer-text mb-3\">
                            <i class=\"bi bi-envelope me-2\"></i>contact@hmamarket.com
                        </p>
                        <span class=\"version-badge\">
                            <i class=\"bi bi-tag me-1\"></i>Version 1.0.0
                        </span>
                    </div>
                </div>
                
                <hr class=\"footer-divider\">
                
                <div class=\"row align-items-center\">
                    <div class=\"col-md-6\">
                        <span class=\"footer-text\">
                            <i class=\"bi bi-copyright me-1\"></i>{{ \"now\"|date(\"Y\") }} HMA Market. Tous droits réservés.
                        </span>
                    </div>
                    <div class=\"col-md-6 text-md-end\">
                        <span class=\"footer-text\">
                            Développé avec <i class=\"bi bi-heart-fill text-danger mx-1\"></i> par l'équipe technique Amiral Amir.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
   <!-- Bootstrap 5 JS -->
    <script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>

    <script>
    // ==================== SCRIPT PRINCIPAL UNIFIÉ ====================
    document.addEventListener('DOMContentLoaded', function() {
        
        // ---------- SIDEBAR MOBILE ----------
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebarMenu');
        const sidebarBackdrop = document.getElementById('sidebarBackdrop');
        
        if (sidebarToggle) {
            sidebarToggle.addEventListener('click', function() {
                sidebar.classList.toggle('show');
                sidebarBackdrop.classList.toggle('show');
                document.body.style.overflow = sidebar.classList.contains('show') ? 'hidden' : '';
            });
        }
        
        if (sidebarBackdrop) {
            sidebarBackdrop.addEventListener('click', function() {
                sidebar.classList.remove('show');
                sidebarBackdrop.classList.remove('show');
                document.body.style.overflow = '';
            });
        }
        
        if (window.innerWidth < 768) {
            const sidebarLinks = sidebar?.querySelectorAll('.nav-link') || [];
            sidebarLinks.forEach(link => {
                link.addEventListener('click', function() {
                    sidebar.classList.remove('show');
                    sidebarBackdrop?.classList.remove('show');
                    document.body.style.overflow = '';
                });
            });
        }
        
        // ---------- ALERTES FLASH ----------
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
            setTimeout(() => {
                const bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
                bsAlert.close();
            }, 5000);
        });
        
        // ---------- GESTION DES ERREURS D'IMAGES ----------
        document.querySelectorAll('img:not(.product-img)').forEach(img => {
            img.addEventListener('error', function() {
                const parent = this.parentElement;
                const initial = this.getAttribute('data-initial') || 'H';
                
                const fallback = document.createElement('div');
                if (parent?.classList.contains('company-logo')) {
                    fallback.className = 'logo-fallback';
                } else if (parent?.classList.contains('user-avatar')) {
                    fallback.className = 'avatar-initials';
                }
                fallback.textContent = initial;
                
                this.style.display = 'none';
                parent?.appendChild(fallback);
            });
        });
        
        // ---------- RECHERCHE UNIVERSELLE ----------
        function setupUniversalSearch(searchInputId, searchClearId, searchFormId, searchHintId) {
            const searchInput = document.getElementById(searchInputId);
            const searchClear = document.getElementById(searchClearId);
            const searchForm = document.getElementById(searchFormId);
            const searchHint = document.getElementById(searchHintId);
            
            if (!searchInput || !searchClear || !searchForm) return;
            
            function toggleClearButton() {
                searchClear.classList.toggle('show', searchInput.value.trim() !== '');
            }
            
            function updateSearchPlaceholder() {
                const currentRoute = window.location.pathname;
                let placeholder = 'Rechercher...';
                let hint = 'Appuyez sur Entrée pour rechercher';
                
                if (currentRoute.includes('/admin/user')) {
                    placeholder = 'Rechercher un utilisateur...';
                    hint = 'Recherche par nom, email ou téléphone';
                } else if (currentRoute.includes('/admin/product')) {
                    placeholder = 'Rechercher un produit...';
                    hint = 'Recherche par nom, référence ou catégorie';
                } else if (currentRoute.includes('/admin/category')) {
                    placeholder = 'Rechercher une catégorie...';
                    hint = 'Recherche par nom ou description';
                } else if (currentRoute.includes('/admin/order')) {
                    placeholder = 'Rechercher une commande...';
                    hint = 'Recherche par numéro, client ou statut';
                } else if (currentRoute.includes('/admin/stock')) {
                    placeholder = 'Rechercher un mouvement de stock...';
                    hint = 'Recherche par produit ou type';
                } else if (currentRoute.includes('/admin/purchase')) {
                    placeholder = 'Rechercher un achat...';
                    hint = 'Recherche par fournisseur ou référence';
                }
                
                searchInput.placeholder = placeholder;
                if (searchHint) searchHint.textContent = hint;
            }
            
            searchInput.addEventListener('input', toggleClearButton);
            
            searchClear.addEventListener('click', function() {
                searchInput.value = '';
                searchInput.focus();
                toggleClearButton();
                
                if (searchInput.value === '') {
                    const url = new URL(window.location);
                    url.searchParams.delete('search');
                    url.searchParams.delete('page');
                    window.location.href = url.toString();
                }
            });
            
            searchForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const searchTerm = searchInput.value.trim();
                const currentUrl = new URL(window.location);
                
                if (searchTerm) {
                    currentUrl.searchParams.set('search', searchTerm);
                    currentUrl.searchParams.set('page', '1');
                } else {
                    currentUrl.searchParams.delete('search');
                    currentUrl.searchParams.delete('page');
                }
                window.location.href = currentUrl.toString();
            });
            
            updateSearchPlaceholder();
            toggleClearButton();
        }
        
        setupUniversalSearch('universalSearchInput', 'universalSearchClear', 'universalSearchForm', 'searchHint');
        setupUniversalSearch('universalSearchInputMobile', 'universalSearchClearMobile', 'universalSearchFormMobile', 'searchHintMobile');
        
        // Synchronisation des champs de recherche
        const desktopInput = document.getElementById('universalSearchInput');
        const mobileInput = document.getElementById('universalSearchInputMobile');
        
        if (desktopInput && mobileInput) {
            desktopInput.addEventListener('input', function() {
                mobileInput.value = this.value;
                const mobileClear = document.getElementById('universalSearchClearMobile');
                if (mobileClear) mobileClear.classList.toggle('show', this.value.trim() !== '');
            });
            
            mobileInput.addEventListener('input', function() {
                desktopInput.value = this.value;
                const desktopClear = document.getElementById('universalSearchClear');
                if (desktopClear) desktopClear.classList.toggle('show', this.value.trim() !== '');
            });
        }
        
        // ---------- GESTION UNIVERSELLE DES MODALS ----------
        function addLoadingIndicator(modalElement) {
            if (modalElement.querySelector('.modal-loading')) return;
            
            const loadingDiv = document.createElement('div');
            loadingDiv.className = 'modal-loading';
            loadingDiv.style.display = 'none';
            loadingDiv.innerHTML = `
                <div class=\"spinner-container\">
                    <div class=\"spinner-border\" role=\"status\">
                        <span class=\"visually-hidden\">Chargement...</span>
                    </div>
                    <div class=\"loading-text\">Chargement en cours...</div>
                </div>
            `;
            
            const modalContent = modalElement.querySelector('.modal-content');
            if (modalContent) {
                modalContent.style.position = 'relative';
                modalContent.appendChild(loadingDiv);
            }
        }
        
        function setModalLoading(modalElement, isLoading) {
            const loadingDiv = modalElement.querySelector('.modal-loading');
            if (loadingDiv) loadingDiv.style.display = isLoading ? 'flex' : 'none';
        }
        
        function initModal(modal) {
            // Éviter les doubles initialisations
            if (modal.hasAttribute('data-modal-initialized')) return;
            modal.setAttribute('data-modal-initialized', 'true');
            
            addLoadingIndicator(modal);
            
            modal.addEventListener('show.bs.modal', function() {
                setModalLoading(this, false);
            });
            
            const form = modal.querySelector('form');
            if (form) {
                form.addEventListener('submit', () => setModalLoading(modal, true));
            }
            
            const actionBtns = modal.querySelectorAll('.btn-primary, .btn-danger, .btn-success, .btn-warning');
            actionBtns.forEach(btn => {
                if (!btn.hasAttribute('data-bs-dismiss') && btn.type !== 'button') {
                    btn.addEventListener('click', () => setModalLoading(modal, true));
                }
            });
        }
        
        // Initialiser tous les modals existants
        document.querySelectorAll('.modal').forEach(modal => initModal(modal));
        
        // Observer les nouveaux modals
        const modalObserver = new MutationObserver(mutations => {
            mutations.forEach(mutation => {
                mutation.addedNodes.forEach(node => {
                    if (node.nodeType === 1) {
                        if (node.classList?.contains('modal')) initModal(node);
                        node.querySelectorAll?.('.modal').forEach(modal => initModal(modal));
                    }
                });
            });
        });
        modalObserver.observe(document.body, { childList: true, subtree: true });
        
        // ---------- FONCTIONS GLOBALES ----------
        window.showModalWithLoading = function(modalId, loadContentCallback) {
            const modal = document.getElementById(modalId);
            if (!modal) return;
            
            const bsModal = bootstrap.Modal.getOrCreateInstance(modal);
            
            modal.addEventListener('show.bs.modal', async function onShow() {
                modal.removeEventListener('show.bs.modal', onShow);
                setModalLoading(modal, true);
                try {
                    if (loadContentCallback) await loadContentCallback(modal);
                } finally {
                    setModalLoading(modal, false);
                }
            }, { once: true });
            
            bsModal.show();
        };
        
        window.showConfirmModal = function(options) {
            const {
                title = 'Confirmation',
                message = 'Êtes-vous sûr de vouloir effectuer cette action ?',
                type = 'info',
                confirmText = 'Confirmer',
                cancelText = 'Annuler',
                onConfirm = null,
                onCancel = null
            } = options;
            
            const modalId = 'dynamic-confirm-modal-' + Date.now();
            const modalHtml = `
                <div class=\"modal fade modal-confirm\" id=\"\${modalId}\" tabindex=\"-1\">
                    <div class=\"modal-dialog modal-dialog-centered\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header \${type === 'danger' ? 'bg-danger text-white' : (type === 'success' ? 'bg-success text-white' : (type === 'warning' ? 'bg-warning text-dark' : 'bg-primary text-white'))}\">
                                <h5 class=\"modal-title\">
                                    <i class=\"fas \${type === 'danger' ? 'fa-exclamation-triangle' : (type === 'success' ? 'fa-check-circle' : (type === 'warning' ? 'fa-exclamation-triangle' : 'fa-info-circle'))} me-2\"></i>
                                    \${title}
                                </h5>
                                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                            </div>
                            <div class=\"modal-body text-center py-4\">
                                <div class=\"confirm-icon \${type} mb-3\">
                                    <i class=\"fas \${type === 'danger' ? 'fa-times-circle' : (type === 'success' ? 'fa-check-circle' : (type === 'warning' ? 'fa-exclamation-triangle' : 'fa-question-circle'))} fa-3x\"></i>
                                </div>
                                <p class=\"mb-0 fs-5\">\${message}</p>
                            </div>
                            <div class=\"modal-footer justify-content-center\">
                                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">\${cancelText}</button>
                                <button type=\"button\" class=\"btn btn-\${type === 'danger' ? 'danger' : (type === 'success' ? 'success' : 'primary')}\" id=\"confirm-action-\${modalId}\">\${confirmText}</button>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            
            document.body.insertAdjacentHTML('beforeend', modalHtml);
            const modalElement = document.getElementById(modalId);
            
            initModal(modalElement);
            const modal = new bootstrap.Modal(modalElement);
            
            document.getElementById(`confirm-action-\${modalId}`).addEventListener('click', async function() {
                if (onConfirm) {
                    setModalLoading(modalElement, true);
                    try {
                        await onConfirm();
                    } finally {
                        setModalLoading(modalElement, false);
                        modal.hide();
                    }
                } else {
                    modal.hide();
                }
            });
            
            modalElement.addEventListener('hidden.bs.modal', () => setTimeout(() => modalElement.remove(), 300));
            if (onCancel) modalElement.addEventListener('hidden.bs.modal', onCancel, { once: true });
            
            modal.show();
        };
        
        window.setModalLoadingState = function(modalId, isLoading) {
            const modal = document.getElementById(modalId);
            if (modal) setModalLoading(modal, isLoading);
        };
    });

    // Fermeture automatique des alertes au chargement
    window.addEventListener('load', function() {
        setTimeout(() => {
            document.querySelectorAll('.alert').forEach(alert => {
                const bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
                bsAlert.close();
            });
        }, 5000);
    });
    </script>

    {% block javascripts %}{% endblock %}
    {{ encore_entry_script_tags('app') }}

</body>
</html>", "base.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\base.html.twig");
    }
}
