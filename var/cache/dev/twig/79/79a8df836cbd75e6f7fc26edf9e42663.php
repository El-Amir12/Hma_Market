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
class __TwigTemplate_3f46f7d5de5d43e2955c214381136582 extends Template
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
    </style>
    
    ";
        // line 904
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 905
        yield "</head>
<body>
    ";
        // line 908
        yield "    ";
        yield from $this->load("components/_session_toast.html.twig", 908)->unwrap()->yield($context);
        // line 909
        yield "    
    ";
        // line 911
        yield "    ";
        yield from $this->load("components/_toast.html.twig", 911)->unwrap()->yield($context);
        // line 912
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
        // line 922
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                <div class=\"company-logo\" id=\"companyLogo\">
                    ";
        // line 924
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 924, $this->source); })()), "user", [], "any", false, false, false, 924) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 924, $this->source); })()), "user", [], "any", false, false, false, 924), "hasCompany", [], "any", false, false, false, 924))) {
            // line 925
            yield "                        ";
            // line 926
            yield "                        ";
            $context["companyName"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 926, $this->source); })()), "user", [], "any", false, false, false, 926), "companyDisplayName", [], "any", false, false, false, 926);
            // line 927
            yield "                        ";
            $context["initial"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 927, $this->source); })()), "user", [], "any", false, false, false, 927), "companyInitial", [], "any", false, false, false, 927);
            // line 928
            yield "                        ";
            $context["logo"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 928, $this->source); })()), "user", [], "any", false, false, false, 928), "companyLogo", [], "any", false, false, false, 928);
            // line 929
            yield "                        
                        ";
            // line 930
            if ((($tmp = (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 930, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 931
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 931, $this->source); })()))), "html", null, true);
                yield "\" 
                                alt=\"";
                // line 932
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 932, $this->source); })()), "html", null, true);
                yield "\"
                                class=\"logo-img\"
                                data-initial=\"";
                // line 934
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 934, $this->source); })()), "html", null, true);
                yield "\">
                        ";
            } else {
                // line 936
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/logos/logo.png"), "html", null, true);
                yield "\" 
                                alt=\"";
                // line 937
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 937, $this->source); })()), "html", null, true);
                yield "\"
                                class=\"logo-img\"
                                data-initial=\"";
                // line 939
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 939, $this->source); })()), "html", null, true);
                yield "\"
                                onerror=\"this.style.display='none'; this.nextElementSibling.style.display='flex';\">
                            <div class=\"logo-fallback\" style=\"display: none;\">
                                ";
                // line 942
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 942, $this->source); })()), "html", null, true);
                yield "
                            </div>
                        ";
            }
            // line 945
            yield "                    ";
        } else {
            // line 946
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
        // line 955
        yield "                </div>
                
                <div class=\"company-name\" id=\"companyName\">
                    ";
        // line 958
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 958, $this->source); })()), "user", [], "any", false, false, false, 958)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 958, $this->source); })()), "user", [], "any", false, false, false, 958), "companyDisplayName", [], "any", false, false, false, 958), "html", null, true)) : ("HMA MARKET"));
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
        // line 970
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 970, $this->source); })()), "request", [], "any", false, false, false, 970), "query", [], "any", false, false, false, 970), "get", ["search", ""], "method", false, false, false, 970), "html", null, true);
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
        // line 992
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 992, $this->source); })()), "request", [], "any", false, false, false, 992), "query", [], "any", false, false, false, 992), "get", ["search", ""], "method", false, false, false, 992), "html", null, true);
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
                    <!-- Utilisateur connecté -->
                    ";
        // line 1006
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1006, $this->source); })()), "user", [], "any", false, false, false, 1006)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1007
            yield "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle d-flex align-items-center\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\">
                            <div class=\"user-avatar me-2\" id=\"userAvatar\">
                                ";
            // line 1010
            $context["user"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1010, $this->source); })()), "user", [], "any", false, false, false, 1010);
            // line 1011
            yield "                                ";
            $context["userName"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", true, true, false, 1011)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1011, $this->source); })()), "fullName", [], "any", false, false, false, 1011), "Utilisateur")) : ("Utilisateur"));
            // line 1012
            yield "                                ";
            $context["initial"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 1012, $this->source); })())));
            // line 1013
            yield "                                
                                ";
            // line 1014
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1014, $this->source); })()), "photo", [], "any", false, false, false, 1014)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1015
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1015, $this->source); })()), "photo", [], "any", false, false, false, 1015))), "html", null, true);
                yield "\" 
                                         alt=\"";
                // line 1016
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 1016, $this->source); })()), "html", null, true);
                yield "\"
                                         class=\"avatar-img\"
                                         data-initial=\"";
                // line 1018
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 1018, $this->source); })()), "html", null, true);
                yield "\">
                                    <div class=\"avatar-initials\" style=\"display: none;\">
                                        ";
                // line 1020
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 1020, $this->source); })()), "html", null, true);
                yield "
                                    </div>
                                ";
            } else {
                // line 1023
                yield "                                    <div class=\"avatar-initials\">
                                        ";
                // line 1024
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 1024, $this->source); })()), "html", null, true);
                yield "
                                    </div>
                                ";
            }
            // line 1027
            yield "                            </div>
                            <div class=\"d-none d-md-block text-start\">
                                <div class=\"fw-medium\" id=\"userName\">
                                    ";
            // line 1030
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 1030), "fullName", [], "any", true, true, false, 1030)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1030, $this->source); })()), "user", [], "any", false, false, false, 1030), "fullName", [], "any", false, false, false, 1030), "Utilisateur")) : ("Utilisateur")), "html", null, true);
            yield "
                                </div>
                                <small class=\"text-muted\">
                                    ";
            // line 1033
            $context["user"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1033, $this->source); })()), "user", [], "any", false, false, false, 1033);
            // line 1034
            yield "                                    ";
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1034, $this->source); })()), "roles", [], "any", false, false, false, 1034))) {
                // line 1035
                yield "                                        <i class=\"bi bi-shield-check text-primary me-1\"></i>Administrateur
                                    ";
            } elseif (CoreExtension::inFilter("ROLE_MANAGER", CoreExtension::getAttribute($this->env, $this->source,             // line 1036
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1036, $this->source); })()), "roles", [], "any", false, false, false, 1036))) {
                // line 1037
                yield "                                        <i class=\"bi bi-graph-up text-success me-1\"></i>Gestionnaire
                                    ";
            } elseif (CoreExtension::inFilter("ROLE_STOCK_MANAGER", CoreExtension::getAttribute($this->env, $this->source,             // line 1038
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1038, $this->source); })()), "roles", [], "any", false, false, false, 1038))) {
                // line 1039
                yield "                                        <i class=\"bi bi-box-seam text-warning me-1\"></i>Responsable Stock
                                    ";
            } elseif (CoreExtension::inFilter("ROLE_CASHIER", CoreExtension::getAttribute($this->env, $this->source,             // line 1040
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1040, $this->source); })()), "roles", [], "any", false, false, false, 1040))) {
                // line 1041
                yield "                                        <i class=\"bi bi-cash-coin text-info me-1\"></i>Caissier
                                    ";
            } elseif (CoreExtension::inFilter("ROLE_SUPER_ADMIN", CoreExtension::getAttribute($this->env, $this->source,             // line 1042
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1042, $this->source); })()), "roles", [], "any", false, false, false, 1042))) {
                // line 1043
                yield "                                        <i class=\"bi bi-shield-check text-danger me-1\"></i>Super Administrateur
                                    ";
            } else {
                // line 1045
                yield "                                        <i class=\"bi bi-person me-1\"></i>Utilisateur
                                    ";
            }
            // line 1047
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
            // line 1058
            $context["user"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1058, $this->source); })()), "user", [], "any", false, false, false, 1058);
            // line 1059
            yield "                                            ";
            $context["userName"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", true, true, false, 1059)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1059, $this->source); })()), "fullName", [], "any", false, false, false, 1059), "Utilisateur")) : ("Utilisateur"));
            // line 1060
            yield "                                            ";
            $context["initial"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 1060, $this->source); })())));
            // line 1061
            yield "                                            
                                            ";
            // line 1062
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1062, $this->source); })()), "photo", [], "any", false, false, false, 1062)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1063
                yield "                                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1063, $this->source); })()), "photo", [], "any", false, false, false, 1063))), "html", null, true);
                yield "\" 
                                                     alt=\"";
                // line 1064
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 1064, $this->source); })()), "html", null, true);
                yield "\"
                                                     class=\"avatar-img\"
                                                     data-initial=\"";
                // line 1066
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 1066, $this->source); })()), "html", null, true);
                yield "\">
                                                <div class=\"avatar-initials\" style=\"display: none;\">
                                                    ";
                // line 1068
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 1068, $this->source); })()), "html", null, true);
                yield "
                                                </div>
                                            ";
            } else {
                // line 1071
                yield "                                                <div class=\"avatar-initials\">
                                                    ";
                // line 1072
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 1072, $this->source); })()), "html", null, true);
                yield "
                                                </div>
                                            ";
            }
            // line 1075
            yield "                                        </div>
                                        <div>
                                            <div class=\"fw-medium\">
                                                ";
            // line 1078
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 1078), "fullName", [], "any", true, true, false, 1078)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1078, $this->source); })()), "user", [], "any", false, false, false, 1078), "fullName", [], "any", false, false, false, 1078), "Utilisateur")) : ("Utilisateur")), "html", null, true);
            yield "
                                            </div>
                                            <small class=\"text-muted\">
                                                ";
            // line 1081
            $context["user"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1081, $this->source); })()), "user", [], "any", false, false, false, 1081);
            // line 1082
            yield "                                                ";
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1082, $this->source); })()), "roles", [], "any", false, false, false, 1082))) {
                // line 1083
                yield "                                                    Administrateur
                                                ";
            } elseif (CoreExtension::inFilter("ROLE_MANAGER", CoreExtension::getAttribute($this->env, $this->source,             // line 1084
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1084, $this->source); })()), "roles", [], "any", false, false, false, 1084))) {
                // line 1085
                yield "                                                    Gestionnaire
                                                ";
            } elseif (CoreExtension::inFilter("ROLE_STOCK_MANAGER", CoreExtension::getAttribute($this->env, $this->source,             // line 1086
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1086, $this->source); })()), "roles", [], "any", false, false, false, 1086))) {
                // line 1087
                yield "                                                    Responsable Stock
                                                ";
            } elseif (CoreExtension::inFilter("ROLE_CASHIER", CoreExtension::getAttribute($this->env, $this->source,             // line 1088
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1088, $this->source); })()), "roles", [], "any", false, false, false, 1088))) {
                // line 1089
                yield "                                                    Caissier
                                                ";
            } elseif (CoreExtension::inFilter("ROLE_SUPER_ADMIN", CoreExtension::getAttribute($this->env, $this->source,             // line 1090
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1090, $this->source); })()), "roles", [], "any", false, false, false, 1090))) {
                // line 1091
                yield "                                                    Super Administrateur    
                                                ";
            } else {
                // line 1093
                yield "                                                    Utilisateur
                                                ";
            }
            // line 1095
            yield "                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                            <li><hr class=\"dropdown-divider\"></li>
                            
                            <!-- Bouton \"Gérer l'entreprise\" -->
                            ";
            // line 1104
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 1104), "isHmaOwner", [], "any", true, true, false, 1104) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1104, $this->source); })()), "user", [], "any", false, false, false, 1104), "isHmaOwner", [], "any", false, false, false, 1104)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1104, $this->source); })()), "user", [], "any", false, false, false, 1104), "hmaServiceId", [], "any", false, false, false, 1104))) {
                // line 1105
                yield "                            <li>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"";
                // line 1106
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_hmaservice_details");
                yield "\">
                                    <i class=\"bi bi-building me-2 text-info\"></i>
                                    <span>Gérer l'entreprise</span>
                                </a>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            ";
            }
            // line 1113
            yield "                            
                            <!-- Liens standards -->
                            <li>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"";
            // line 1116
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show");
            yield "\">
                                    <i class=\"bi bi-person me-2 text-primary\"></i>
                                    <span>Mon profil</span>
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"";
            // line 1122
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_change_password");
            yield "\">
                                    <i class=\"bi bi-shield-lock me-2 text-success\"></i>
                                    <span>Changer mot de passe</span>
                                </a>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li>
                                <a class=\"dropdown-item d-flex align-items-center text-danger\" href=\"";
            // line 1129
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
        // line 1137
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
        // line 1150
        $context["currentRoute"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1150, $this->source); })()), "request", [], "any", false, false, false, 1150), "get", ["_route"], "method", false, false, false, 1150);
        // line 1151
        yield "                ";
        $context["menuItems"] = $this->env->getFunction('get_menu')->getCallable()();
        // line 1152
        yield "                ";
        $context["counter"] = 0;
        // line 1153
        yield "                
                ";
        // line 1154
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["menuItems"]) || array_key_exists("menuItems", $context) ? $context["menuItems"] : (function () { throw new RuntimeError('Variable "menuItems" does not exist.', 1154, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1155
            yield "                    ";
            // line 1156
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 1156) == "section")) {
                // line 1157
                yield "                        <div class=\"menu-title\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 1157), "html", null, true);
                yield "</div>
                    
                    ";
                // line 1160
                yield "                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 1160) == "dropdown")) {
                // line 1161
                yield "                        ";
                $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 1161, $this->source); })()) + 1);
                // line 1162
                yield "                        ";
                $context["isActive"] = false;
                // line 1163
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 1163));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 1164
                    yield "                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "route", [], "any", true, true, false, 1164) && (CoreExtension::getAttribute($this->env, $this->source, $context["child"], "route", [], "any", false, false, false, 1164) == (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 1164, $this->source); })())))) {
                        // line 1165
                        yield "                                ";
                        $context["isActive"] = true;
                        // line 1166
                        yield "                            ";
                    }
                    // line 1167
                    yield "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1168
                yield "                        
                        <a href=\"#submenu";
                // line 1169
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 1169, $this->source); })()), "html", null, true);
                yield "\" 
                           class=\"nav-link has-arrow ";
                // line 1170
                if ((($tmp = (isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 1170, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "active";
                }
                yield "\" 
                           data-bs-toggle=\"collapse\"
                           aria-expanded=\"";
                // line 1172
                yield (((($tmp = (isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 1172, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                yield "\">
                            <i class=\"";
                // line 1173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 1173), "html", null, true);
                yield "\"></i>
                            <span>";
                // line 1174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 1174), "html", null, true);
                yield "</span>
                            ";
                // line 1175
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "coming_soon", [], "any", true, true, false, 1175) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "coming_soon", [], "any", false, false, false, 1175))) {
                    // line 1176
                    yield "                                <span class=\"badge bg-warning ms-auto\">Bientôt</span>
                            ";
                }
                // line 1178
                yield "                        </a>
                        <div class=\"sub-menu collapse ";
                // line 1179
                if ((($tmp = (isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 1179, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "show";
                }
                yield "\" id=\"submenu";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 1179, $this->source); })()), "html", null, true);
                yield "\">
                            ";
                // line 1180
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 1180));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 1181
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "type", [], "any", true, true, false, 1181) && (CoreExtension::getAttribute($this->env, $this->source, $context["child"], "type", [], "any", false, false, false, 1181) == "divider"))) {
                        // line 1182
                        yield "                                    <hr class=\"dropdown-divider\">
                                ";
                    } elseif (CoreExtension::getAttribute($this->env, $this->source,                     // line 1183
$context["child"], "route", [], "any", true, true, false, 1183)) {
                        // line 1184
                        yield "                                    <a href=\"";
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "route", [], "any", false, false, false, 1184));
                        yield "\" 
                                       class=\"nav-link ";
                        // line 1185
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "route", [], "any", false, false, false, 1185) == (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 1185, $this->source); })()))) {
                            yield "active";
                        }
                        yield "\">
                                        <i class=\"";
                        // line 1186
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "icon", [], "any", false, false, false, 1186), "html", null, true);
                        yield "\"></i>
                                        ";
                        // line 1187
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "label", [], "any", false, false, false, 1187), "html", null, true);
                        yield "
                                        ";
                        // line 1188
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "coming_soon", [], "any", true, true, false, 1188) && CoreExtension::getAttribute($this->env, $this->source, $context["child"], "coming_soon", [], "any", false, false, false, 1188))) {
                            // line 1189
                            yield "                                            <span class=\"badge bg-warning ms-auto\">Bientôt</span>
                                        ";
                        }
                        // line 1191
                        yield "                                    </a>
                                ";
                    } else {
                        // line 1193
                        yield "                                    <a href=\"#\" class=\"nav-link disabled\">
                                        <i class=\"";
                        // line 1194
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "icon", [], "any", false, false, false, 1194), "html", null, true);
                        yield "\"></i>
                                        ";
                        // line 1195
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "label", [], "any", false, false, false, 1195), "html", null, true);
                        yield "
                                    </a>
                                ";
                    }
                    // line 1198
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1199
                yield "                        </div>
                    
                    ";
                // line 1202
                yield "                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 1202) == "link")) {
                // line 1203
                yield "                        ";
                $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 1203, $this->source); })()) + 1);
                // line 1204
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", true, true, false, 1204)) {
                    // line 1205
                    yield "                            <a href=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 1205));
                    yield "\" 
                               class=\"nav-link ";
                    // line 1206
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 1206) == (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 1206, $this->source); })()))) {
                        yield "active";
                    }
                    yield "\">
                                <i class=\"";
                    // line 1207
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 1207), "html", null, true);
                    yield "\"></i>
                                <span>";
                    // line 1208
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 1208), "html", null, true);
                    yield "</span>
                                ";
                    // line 1209
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "badge", [], "any", true, true, false, 1209)) {
                        // line 1210
                        yield "                                    <span class=\"badge bg-danger ms-auto\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "badge", [], "any", false, false, false, 1210), "html", null, true);
                        yield "</span>
                                ";
                    }
                    // line 1212
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "coming_soon", [], "any", true, true, false, 1212) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "coming_soon", [], "any", false, false, false, 1212))) {
                        // line 1213
                        yield "                                    <span class=\"badge bg-warning ms-auto\">Bientôt</span>
                                ";
                    }
                    // line 1215
                    yield "                            </a>
                        ";
                } else {
                    // line 1217
                    yield "                            <a href=\"#\" class=\"nav-link disabled\">
                                <i class=\"";
                    // line 1218
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 1218), "html", null, true);
                    yield "\"></i>
                                <span>";
                    // line 1219
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 1219), "html", null, true);
                    yield "</span>
                            </a>
                        ";
                }
                // line 1222
                yield "                    
                    ";
                // line 1224
                yield "                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 1224) == "title")) {
                // line 1225
                yield "                        <div class=\"menu-title\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 1225), "html", null, true);
                yield "</div>
                    
                    ";
            } else {
                // line 1228
                yield "                        ";
                $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 1228, $this->source); })()) + 1);
                // line 1229
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", true, true, false, 1229)) {
                    // line 1230
                    yield "                            <a href=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 1230));
                    yield "\" 
                               class=\"nav-link ";
                    // line 1231
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 1231) == (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 1231, $this->source); })()))) {
                        yield "active";
                    }
                    yield "\">
                                <i class=\"";
                    // line 1232
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 1232), "html", null, true);
                    yield "\"></i>
                                <span>";
                    // line 1233
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 1233), "html", null, true);
                    yield "</span>
                            </a>
                        ";
                } else {
                    // line 1236
                    yield "                            <a href=\"#\" class=\"nav-link disabled\">
                                <i class=\"";
                    // line 1237
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 1237), "html", null, true);
                    yield "\"></i>
                                <span>";
                    // line 1238
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 1238), "html", null, true);
                    yield "</span>
                            </a>
                        ";
                }
                // line 1241
                yield "                    ";
            }
            // line 1242
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1243
        yield "            </div>
        </div>
        
        <!-- Contenu principal -->
        <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4\">
            <!-- Messages flash -->
            ";
        // line 1249
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1249, $this->source); })()), "flashes", [], "any", false, false, false, 1249));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 1250
            yield "                <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield " alert-dismissible fade show shadow-sm border-0\" role=\"alert\">
                    <div class=\"d-flex align-items-center\">
                        ";
            // line 1252
            if (($context["label"] == "success")) {
                // line 1253
                yield "                            <i class=\"bi bi-check-circle-fill me-2\"></i>
                        ";
            } elseif (((            // line 1254
$context["label"] == "error") || ($context["label"] == "danger"))) {
                // line 1255
                yield "                            <i class=\"bi bi-exclamation-circle-fill me-2\"></i>
                        ";
            } elseif ((            // line 1256
$context["label"] == "warning")) {
                // line 1257
                yield "                            <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                        ";
            } elseif ((            // line 1258
$context["label"] == "info")) {
                // line 1259
                yield "                            <i class=\"bi bi-info-circle-fill me-2\"></i>
                        ";
            }
            // line 1261
            yield "                        <div>
                            ";
            // line 1262
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 1263
                yield "                                ";
                yield $context["message"];
                yield "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1265
            yield "                        </div>
                    </div>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1270
        yield "            
            <!-- Contenu de la page -->
            ";
        // line 1272
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 1273
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
        // line 1306
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
        // line 1346
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
    <!-- CDN JavaScript -->
    <script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js\"></script>
    
    <!-- Custom JS SIMPLIFIÉ -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle sidebar sur mobile
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
            
            // Fermer le sidebar quand on clique sur un lien (mobile)
            if (window.innerWidth < 768) {
                const sidebarLinks = sidebar.querySelectorAll('.nav-link');
                sidebarLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        sidebar.classList.remove('show');
                        sidebarBackdrop.classList.remove('show');
                        document.body.style.overflow = '';
                    });
                });
            }
            
            // Gestion des alertes flash
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                setTimeout(() => {
                    const bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                }, 5000);
            });
            
            // Gestion des erreurs d'images SIMPLIFIÉE
            document.querySelectorAll('img').forEach(img => {
                img.addEventListener('error', function() {
                    const parent = this.parentElement;
                    const initial = this.getAttribute('data-initial') || 'H';
                    
                    // Créer un élément pour les initiales
                    const fallback = document.createElement('div');
                    if (parent.classList.contains('company-logo')) {
                        fallback.className = 'logo-fallback';
                    } else if (parent.classList.contains('user-avatar')) {
                        fallback.className = 'avatar-initials';
                    }
                    fallback.textContent = initial;
                    
                    // Remplacer l'image
                    this.style.display = 'none';
                    parent.appendChild(fallback);
                });
            });
            
            // Gestion de la recherche universelle
            function setupUniversalSearch(searchInputId, searchClearId, searchFormId, searchHintId) {
                const searchInput = document.getElementById(searchInputId);
                const searchClear = document.getElementById(searchClearId);
                const searchForm = document.getElementById(searchFormId);
                const searchHint = document.getElementById(searchHintId);
                
                if (!searchInput || !searchClear || !searchForm) return;
                
                function toggleClearButton() {
                    if (searchInput.value.trim() !== '') {
                        searchClear.classList.add('show');
                    } else {
                        searchClear.classList.remove('show');
                    }
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
                    if (searchHint) {
                        searchHint.textContent = hint;
                    }
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
            
            // Configurer les deux barres de recherche
            setupUniversalSearch('universalSearchInput', 'universalSearchClear', 'universalSearchForm', 'searchHint');
            setupUniversalSearch('universalSearchInputMobile', 'universalSearchClearMobile', 'universalSearchFormMobile', 'searchHintMobile');
            
            // Synchroniser les deux champs de recherche
            const desktopInput = document.getElementById('universalSearchInput');
            const mobileInput = document.getElementById('universalSearchInputMobile');
            
            if (desktopInput && mobileInput) {
                desktopInput.addEventListener('input', function() {
                    mobileInput.value = this.value;
                    const mobileClear = document.getElementById('universalSearchClearMobile');
                    if (mobileClear) {
                        mobileClear.classList.toggle('show', this.value.trim() !== '');
                    }
                });
                
                mobileInput.addEventListener('input', function() {
                    desktopInput.value = this.value;
                    const desktopClear = document.getElementById('universalSearchClear');
                    if (desktopClear) {
                        desktopClear.classList.toggle('show', this.value.trim() !== '');
                    }
                });
            }
        });
        
        // Fermer automatiquement les alertes après 5 secondes
        window.addEventListener('load', function() {
            setTimeout(function() {
                const alerts = document.querySelectorAll('.alert');
                alerts.forEach(alert => {
                    const bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                });
            }, 5000);
        });
    </script>
    
    
    ";
        // line 1555
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 1556
        yield "</body>
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

    // line 904
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

    // line 1272
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

    // line 1555
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
        return array (  2124 => 1555,  2102 => 1272,  2080 => 904,  2057 => 7,  2045 => 1556,  2043 => 1555,  1831 => 1346,  1788 => 1306,  1753 => 1273,  1751 => 1272,  1747 => 1270,  1737 => 1265,  1728 => 1263,  1724 => 1262,  1721 => 1261,  1717 => 1259,  1715 => 1258,  1712 => 1257,  1710 => 1256,  1707 => 1255,  1705 => 1254,  1702 => 1253,  1700 => 1252,  1694 => 1250,  1690 => 1249,  1682 => 1243,  1676 => 1242,  1673 => 1241,  1667 => 1238,  1663 => 1237,  1660 => 1236,  1654 => 1233,  1650 => 1232,  1644 => 1231,  1639 => 1230,  1636 => 1229,  1633 => 1228,  1626 => 1225,  1623 => 1224,  1620 => 1222,  1614 => 1219,  1610 => 1218,  1607 => 1217,  1603 => 1215,  1599 => 1213,  1596 => 1212,  1590 => 1210,  1588 => 1209,  1584 => 1208,  1580 => 1207,  1574 => 1206,  1569 => 1205,  1566 => 1204,  1563 => 1203,  1560 => 1202,  1556 => 1199,  1550 => 1198,  1544 => 1195,  1540 => 1194,  1537 => 1193,  1533 => 1191,  1529 => 1189,  1527 => 1188,  1523 => 1187,  1519 => 1186,  1513 => 1185,  1508 => 1184,  1506 => 1183,  1503 => 1182,  1500 => 1181,  1496 => 1180,  1488 => 1179,  1485 => 1178,  1481 => 1176,  1479 => 1175,  1475 => 1174,  1471 => 1173,  1467 => 1172,  1460 => 1170,  1456 => 1169,  1453 => 1168,  1447 => 1167,  1444 => 1166,  1441 => 1165,  1438 => 1164,  1433 => 1163,  1430 => 1162,  1427 => 1161,  1424 => 1160,  1418 => 1157,  1415 => 1156,  1413 => 1155,  1409 => 1154,  1406 => 1153,  1403 => 1152,  1400 => 1151,  1398 => 1150,  1383 => 1137,  1372 => 1129,  1362 => 1122,  1353 => 1116,  1348 => 1113,  1338 => 1106,  1335 => 1105,  1333 => 1104,  1322 => 1095,  1318 => 1093,  1314 => 1091,  1312 => 1090,  1309 => 1089,  1307 => 1088,  1304 => 1087,  1302 => 1086,  1299 => 1085,  1297 => 1084,  1294 => 1083,  1291 => 1082,  1289 => 1081,  1283 => 1078,  1278 => 1075,  1272 => 1072,  1269 => 1071,  1263 => 1068,  1258 => 1066,  1253 => 1064,  1248 => 1063,  1246 => 1062,  1243 => 1061,  1240 => 1060,  1237 => 1059,  1235 => 1058,  1222 => 1047,  1218 => 1045,  1214 => 1043,  1212 => 1042,  1209 => 1041,  1207 => 1040,  1204 => 1039,  1202 => 1038,  1199 => 1037,  1197 => 1036,  1194 => 1035,  1191 => 1034,  1189 => 1033,  1183 => 1030,  1178 => 1027,  1172 => 1024,  1169 => 1023,  1163 => 1020,  1158 => 1018,  1153 => 1016,  1148 => 1015,  1146 => 1014,  1143 => 1013,  1140 => 1012,  1137 => 1011,  1135 => 1010,  1130 => 1007,  1128 => 1006,  1111 => 992,  1086 => 970,  1071 => 958,  1066 => 955,  1053 => 946,  1050 => 945,  1044 => 942,  1038 => 939,  1033 => 937,  1028 => 936,  1023 => 934,  1018 => 932,  1013 => 931,  1011 => 930,  1008 => 929,  1005 => 928,  1002 => 927,  999 => 926,  997 => 925,  995 => 924,  990 => 922,  978 => 912,  975 => 911,  972 => 909,  969 => 908,  965 => 905,  963 => 904,  63 => 7,  59 => 6,  52 => 1,);
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
                                    <a href=\"{{ path(child.route) }}\" 
                                       class=\"nav-link {% if child.route == currentRoute %}active{% endif %}\">
                                        <i class=\"{{ child.icon }}\"></i>
                                        {{ child.label }}
                                        {% if child.coming_soon is defined and child.coming_soon %}
                                            <span class=\"badge bg-warning ms-auto\">Bientôt</span>
                                        {% endif %}
                                    </a>
                                {% else %}
                                    <a href=\"#\" class=\"nav-link disabled\">
                                        <i class=\"{{ child.icon }}\"></i>
                                        {{ child.label }}
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
    <!-- CDN JavaScript -->
    <script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js\"></script>
    
    <!-- Custom JS SIMPLIFIÉ -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle sidebar sur mobile
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
            
            // Fermer le sidebar quand on clique sur un lien (mobile)
            if (window.innerWidth < 768) {
                const sidebarLinks = sidebar.querySelectorAll('.nav-link');
                sidebarLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        sidebar.classList.remove('show');
                        sidebarBackdrop.classList.remove('show');
                        document.body.style.overflow = '';
                    });
                });
            }
            
            // Gestion des alertes flash
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                setTimeout(() => {
                    const bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                }, 5000);
            });
            
            // Gestion des erreurs d'images SIMPLIFIÉE
            document.querySelectorAll('img').forEach(img => {
                img.addEventListener('error', function() {
                    const parent = this.parentElement;
                    const initial = this.getAttribute('data-initial') || 'H';
                    
                    // Créer un élément pour les initiales
                    const fallback = document.createElement('div');
                    if (parent.classList.contains('company-logo')) {
                        fallback.className = 'logo-fallback';
                    } else if (parent.classList.contains('user-avatar')) {
                        fallback.className = 'avatar-initials';
                    }
                    fallback.textContent = initial;
                    
                    // Remplacer l'image
                    this.style.display = 'none';
                    parent.appendChild(fallback);
                });
            });
            
            // Gestion de la recherche universelle
            function setupUniversalSearch(searchInputId, searchClearId, searchFormId, searchHintId) {
                const searchInput = document.getElementById(searchInputId);
                const searchClear = document.getElementById(searchClearId);
                const searchForm = document.getElementById(searchFormId);
                const searchHint = document.getElementById(searchHintId);
                
                if (!searchInput || !searchClear || !searchForm) return;
                
                function toggleClearButton() {
                    if (searchInput.value.trim() !== '') {
                        searchClear.classList.add('show');
                    } else {
                        searchClear.classList.remove('show');
                    }
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
                    if (searchHint) {
                        searchHint.textContent = hint;
                    }
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
            
            // Configurer les deux barres de recherche
            setupUniversalSearch('universalSearchInput', 'universalSearchClear', 'universalSearchForm', 'searchHint');
            setupUniversalSearch('universalSearchInputMobile', 'universalSearchClearMobile', 'universalSearchFormMobile', 'searchHintMobile');
            
            // Synchroniser les deux champs de recherche
            const desktopInput = document.getElementById('universalSearchInput');
            const mobileInput = document.getElementById('universalSearchInputMobile');
            
            if (desktopInput && mobileInput) {
                desktopInput.addEventListener('input', function() {
                    mobileInput.value = this.value;
                    const mobileClear = document.getElementById('universalSearchClearMobile');
                    if (mobileClear) {
                        mobileClear.classList.toggle('show', this.value.trim() !== '');
                    }
                });
                
                mobileInput.addEventListener('input', function() {
                    desktopInput.value = this.value;
                    const desktopClear = document.getElementById('universalSearchClear');
                    if (desktopClear) {
                        desktopClear.classList.toggle('show', this.value.trim() !== '');
                    }
                });
            }
        });
        
        // Fermer automatiquement les alertes après 5 secondes
        window.addEventListener('load', function() {
            setTimeout(function() {
                const alerts = document.querySelectorAll('.alert');
                alerts.forEach(alert => {
                    const bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                });
            }, 5000);
        });
    </script>
    
    
    {% block javascripts %}{% endblock %}
</body>
</html>", "base.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\base.html.twig");
    }
}
