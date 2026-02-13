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
class __TwigTemplate_281ec2135a1d9404de63fadbed9a9a10 extends Template
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
            --primary-color: #667eea;
            --secondary-color: #0463f1ff;
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
            color: #2153a3ff;
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
        
        /* Logo de l'entreprise - SIMPLIFIÉ */
        .company-logo {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            overflow: hidden;
            margin-right: 10px;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
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
        
        .sidebar {
            background: linear-gradient(180deg, var(--primary-color) 0%, var(--secondary-color) 100%);
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
            color: rgba(255,255,255,0.8);
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
        
        .btn-gradient {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(102, 126, 234, 0.4);
        }
        
        /* User Avatar - SIMPLIFIÉ */
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid var(--primary-color);
            transition: all 0.3s ease;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .user-avatar:hover {
            transform: scale(1.05);
            border-color: var(--secondary-color);
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
            padding: 10px 50px 10px 20px;
            border: 3px solid #dee2e6;
            transition: all 0.3s ease;
            width: 100%;
            background-color: #f8f9fa;
            font-size: 16px;
            height: 45px;
        }

        .universal-search-input:focus {
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.15);
            border-color: var(--primary-color);
            background-color: white;
            outline: none;
        }

        .universal-search-btn {
            position: absolute;
            right: 8px;
            top: 30%;
            transform: translateY(-50%);
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
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
            box-shadow: 0 3px 10px rgba(102, 126, 234, 0.3);
        }

        .universal-search-btn:hover {
            background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%);
            transform: translateY(-50%) scale(1.05);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .universal-search-clear {
            position: absolute;
            right: 50px;
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
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
        }

        .universal-search-clear:hover {
            background: rgba(239, 68, 68, 0.1);
            color: var(--danger-color);
            transform: translateY(-50%) rotate(90deg);
        }

        .universal-search-clear.show {
            display: flex;
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
                padding: 8px 45px 8px 15px;
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

        .universal-search-input:focus {
            animation: pulseBorder 2s infinite;
        }

        @keyframes pulseBorder {
            0% {
                border-color: var(--primary-color);
                box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.15);
            }
            50% {
                border-color: var(--secondary-color);
                box-shadow: 0 0 0 6px rgba(4, 99, 241, 0.1);
            }
            100% {
                border-color: var(--primary-color);
                box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.15);
            }
        }

        .universal-search-input {
            background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23667eea' class='bi bi-search' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'/%3E%3C/svg%3E\");
            background-position: 15px center;
            background-repeat: no-repeat;
            background-size: 18px;
            padding-left: 45px;
        }

        .universal-search-input:focus {
            background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%230463f1' class='bi bi-search' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'/%3E%3C/svg%3E\");
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
        }

        .bg-success {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%) !important;
        }

        .bg-info {
            background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%) !important;
        }

        .bg-warning {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%) !important;
        }

        .bg-danger {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%) !important;
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
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
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
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
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
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            transform: translateY(-3px);
        }
        
        .version-badge {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
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
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
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
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: var(--secondary-color);
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
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
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
    </style>
    
    ";
        // line 750
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 751
        yield "</head>
<body>
    ";
        // line 754
        yield "    ";
        yield from $this->load("components/_session_toast.html.twig", 754)->unwrap()->yield($context);
        // line 755
        yield "    
    ";
        // line 757
        yield "    ";
        yield from $this->load("components/_toast.html.twig", 757)->unwrap()->yield($context);
        // line 758
        yield "    
    <!-- Navigation principale - SIMPLIFIÉE -->
    <nav class=\"navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top\">
        <div class=\"container-fluid\">
            <!-- Bouton sidebar (mobile) -->
            <button class=\"navbar-toggler border-0\" type=\"button\" id=\"sidebarToggle\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            
            <!-- À GAUCHE : Logo et nom de l'entreprise - SIMPLIFIÉ -->
            <a class=\"navbar-brand d-flex align-items-center\" href=\"";
        // line 768
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                <div class=\"company-logo\" id=\"companyLogo\">
                    ";
        // line 770
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 770, $this->source); })()), "user", [], "any", false, false, false, 770)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 771
            yield "                        ";
            $context["user"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 771, $this->source); })()), "user", [], "any", false, false, false, 771);
            // line 772
            yield "                        ";
            $context["hmaService"] = null;
            // line 773
            yield "                        ";
            $context["logo"] = null;
            // line 774
            yield "                        ";
            $context["companyName"] = "HMA MARKET";
            // line 775
            yield "                        ";
            $context["initial"] = "H";
            // line 776
            yield "                        
                        ";
            // line 778
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "hmaServiceId", [], "any", true, true, false, 778) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 778, $this->source); })()), "hmaServiceId", [], "any", false, false, false, 778))) {
                // line 779
                yield "                            ";
                // line 780
                yield "                            ";
                $context["hmaService"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 780, $this->source); })()), "hmaServiceId", [], "any", false, false, false, 780);
                // line 781
                yield "                        ";
            }
            // line 782
            yield "                        
                        ";
            // line 783
            if ((($tmp = (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 783, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 784
                yield "                            ";
                $context["companyName"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 784, $this->source); })()), "companyName", [], "any", false, false, false, 784);
                // line 785
                yield "                            ";
                $context["initial"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 785, $this->source); })())));
                // line 786
                yield "                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 786, $this->source); })()), "logo", [], "any", false, false, false, 786)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 787
                    yield "                                ";
                    $context["logo"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 787, $this->source); })()), "logo", [], "any", false, false, false, 787)));
                    // line 788
                    yield "                            ";
                }
                // line 789
                yield "                        ";
            }
            // line 790
            yield "                        
                        ";
            // line 791
            if ((($tmp = (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 791, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 792
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 792, $this->source); })()), "html", null, true);
                yield "\" 
                                 alt=\"";
                // line 793
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 793, $this->source); })()), "html", null, true);
                yield "\"
                                 class=\"logo-img\"
                                 data-initial=\"";
                // line 795
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 795, $this->source); })()), "html", null, true);
                yield "\">
                        ";
            } else {
                // line 797
                yield "                            <div class=\"logo-fallback\">
                                ";
                // line 798
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 798, $this->source); })()), "html", null, true);
                yield "
                            </div>
                        ";
            }
            // line 801
            yield "                    ";
        } else {
            // line 802
            yield "                        <div class=\"logo-fallback\">H</div>
                    ";
        }
        // line 804
        yield "                </div>
                <div class=\"company-name\" id=\"companyName\">
                    ";
        // line 806
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 806, $this->source); })()), "user", [], "any", false, false, false, 806) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 806), "hmaServiceId", [], "any", true, true, false, 806)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 806, $this->source); })()), "user", [], "any", false, false, false, 806), "hmaServiceId", [], "any", false, false, false, 806))) {
            // line 807
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 807, $this->source); })()), "user", [], "any", false, false, false, 807), "hmaServiceId", [], "any", false, false, false, 807), "companyName", [], "any", false, false, false, 807), "html", null, true);
            yield "
                    ";
        } else {
            // line 809
            yield "                        HMA MARKET
                    ";
        }
        // line 811
        yield "                </div>
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
        // line 822
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 822, $this->source); })()), "request", [], "any", false, false, false, 822), "query", [], "any", false, false, false, 822), "get", ["search", ""], "method", false, false, false, 822), "html", null, true);
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
        // line 844
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 844, $this->source); })()), "request", [], "any", false, false, false, 844), "query", [], "any", false, false, false, 844), "get", ["search", ""], "method", false, false, false, 844), "html", null, true);
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
        // line 858
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 858, $this->source); })()), "user", [], "any", false, false, false, 858)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 859
            yield "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle d-flex align-items-center\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\">
                            <div class=\"user-avatar me-2\" id=\"userAvatar\">
                                ";
            // line 862
            $context["user"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 862, $this->source); })()), "user", [], "any", false, false, false, 862);
            // line 863
            yield "                                ";
            $context["userName"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", true, true, false, 863)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 863, $this->source); })()), "fullName", [], "any", false, false, false, 863), "Utilisateur")) : ("Utilisateur"));
            // line 864
            yield "                                ";
            $context["initial"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 864, $this->source); })())));
            // line 865
            yield "                                
                                ";
            // line 866
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 866, $this->source); })()), "photo", [], "any", false, false, false, 866)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 867
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 867, $this->source); })()), "photo", [], "any", false, false, false, 867))), "html", null, true);
                yield "\" 
                                         alt=\"";
                // line 868
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 868, $this->source); })()), "html", null, true);
                yield "\"
                                         class=\"avatar-img\"
                                         data-initial=\"";
                // line 870
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 870, $this->source); })()), "html", null, true);
                yield "\">
                                    <div class=\"avatar-initials\" style=\"display: none;\">
                                        ";
                // line 872
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 872, $this->source); })()), "html", null, true);
                yield "
                                    </div>
                                ";
            } else {
                // line 875
                yield "                                    <div class=\"avatar-initials\">
                                        ";
                // line 876
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 876, $this->source); })()), "html", null, true);
                yield "
                                    </div>
                                ";
            }
            // line 879
            yield "                            </div>
                            <div class=\"d-none d-md-block text-start\">
                                <div class=\"fw-medium\" id=\"userName\">
                                    ";
            // line 882
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 882), "fullName", [], "any", true, true, false, 882)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 882, $this->source); })()), "user", [], "any", false, false, false, 882), "fullName", [], "any", false, false, false, 882), "Utilisateur")) : ("Utilisateur")), "html", null, true);
            yield "
                                </div>
                                <small class=\"text-muted\">
                                    ";
            // line 885
            $context["user"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 885, $this->source); })()), "user", [], "any", false, false, false, 885);
            // line 886
            yield "                                    ";
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 886, $this->source); })()), "roles", [], "any", false, false, false, 886))) {
                // line 887
                yield "                                        <i class=\"bi bi-shield-check text-primary me-1\"></i>Administrateur
                                    ";
            } elseif (CoreExtension::inFilter("ROLE_MANAGER", CoreExtension::getAttribute($this->env, $this->source,             // line 888
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 888, $this->source); })()), "roles", [], "any", false, false, false, 888))) {
                // line 889
                yield "                                        <i class=\"bi bi-graph-up text-success me-1\"></i>Gestionnaire
                                    ";
            } elseif (CoreExtension::inFilter("ROLE_STOCK_MANAGER", CoreExtension::getAttribute($this->env, $this->source,             // line 890
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 890, $this->source); })()), "roles", [], "any", false, false, false, 890))) {
                // line 891
                yield "                                        <i class=\"bi bi-box-seam text-warning me-1\"></i>Responsable Stock
                                    ";
            } elseif (CoreExtension::inFilter("ROLE_CASHIER", CoreExtension::getAttribute($this->env, $this->source,             // line 892
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 892, $this->source); })()), "roles", [], "any", false, false, false, 892))) {
                // line 893
                yield "                                        <i class=\"bi bi-cash-coin text-info me-1\"></i>Caissier
                                    ";
            } else {
                // line 895
                yield "                                        <i class=\"bi bi-person me-1\"></i>Utilisateur
                                    ";
            }
            // line 897
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
            // line 908
            $context["user"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 908, $this->source); })()), "user", [], "any", false, false, false, 908);
            // line 909
            yield "                                            ";
            $context["userName"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", true, true, false, 909)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 909, $this->source); })()), "fullName", [], "any", false, false, false, 909), "Utilisateur")) : ("Utilisateur"));
            // line 910
            yield "                                            ";
            $context["initial"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 910, $this->source); })())));
            // line 911
            yield "                                            
                                            ";
            // line 912
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 912, $this->source); })()), "photo", [], "any", false, false, false, 912)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 913
                yield "                                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 913, $this->source); })()), "photo", [], "any", false, false, false, 913))), "html", null, true);
                yield "\" 
                                                     alt=\"";
                // line 914
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 914, $this->source); })()), "html", null, true);
                yield "\"
                                                     class=\"avatar-img\"
                                                     data-initial=\"";
                // line 916
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 916, $this->source); })()), "html", null, true);
                yield "\">
                                                <div class=\"avatar-initials\" style=\"display: none;\">
                                                    ";
                // line 918
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 918, $this->source); })()), "html", null, true);
                yield "
                                                </div>
                                            ";
            } else {
                // line 921
                yield "                                                <div class=\"avatar-initials\">
                                                    ";
                // line 922
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 922, $this->source); })()), "html", null, true);
                yield "
                                                </div>
                                            ";
            }
            // line 925
            yield "                                        </div>
                                        <div>
                                            <div class=\"fw-medium\">
                                                ";
            // line 928
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 928), "fullName", [], "any", true, true, false, 928)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 928, $this->source); })()), "user", [], "any", false, false, false, 928), "fullName", [], "any", false, false, false, 928), "Utilisateur")) : ("Utilisateur")), "html", null, true);
            yield "
                                            </div>
                                            <small class=\"text-muted\">
                                                ";
            // line 931
            $context["user"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 931, $this->source); })()), "user", [], "any", false, false, false, 931);
            // line 932
            yield "                                                ";
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 932, $this->source); })()), "roles", [], "any", false, false, false, 932))) {
                // line 933
                yield "                                                    Administrateur
                                                ";
            } elseif (CoreExtension::inFilter("ROLE_MANAGER", CoreExtension::getAttribute($this->env, $this->source,             // line 934
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 934, $this->source); })()), "roles", [], "any", false, false, false, 934))) {
                // line 935
                yield "                                                    Gestionnaire
                                                ";
            } elseif (CoreExtension::inFilter("ROLE_STOCK_MANAGER", CoreExtension::getAttribute($this->env, $this->source,             // line 936
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 936, $this->source); })()), "roles", [], "any", false, false, false, 936))) {
                // line 937
                yield "                                                    Responsable Stock
                                                ";
            } elseif (CoreExtension::inFilter("ROLE_CASHIER", CoreExtension::getAttribute($this->env, $this->source,             // line 938
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 938, $this->source); })()), "roles", [], "any", false, false, false, 938))) {
                // line 939
                yield "                                                    Caissier
                                                ";
            } else {
                // line 941
                yield "                                                    Utilisateur
                                                ";
            }
            // line 943
            yield "                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                            <li><hr class=\"dropdown-divider\"></li>
                            
                            <!-- Bouton \"Gérer l'entreprise\" -->
                            ";
            // line 952
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 952), "isHmaOwner", [], "any", true, true, false, 952) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 952, $this->source); })()), "user", [], "any", false, false, false, 952), "isHmaOwner", [], "any", false, false, false, 952)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 952, $this->source); })()), "user", [], "any", false, false, false, 952), "hmaServiceId", [], "any", false, false, false, 952))) {
                // line 953
                yield "                            <li>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"";
                // line 954
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_hmaservice_details");
                yield "\">
                                    <i class=\"bi bi-building me-2 text-info\"></i>
                                    <span>Gérer l'entreprise</span>
                                </a>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            ";
            }
            // line 961
            yield "                            
                            <!-- Liens standards -->
                            <li>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <i class=\"bi bi-person me-2 text-primary\"></i>
                                    <span>Mon profil</span>
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"";
            // line 970
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_change_password");
            yield "\">
                                    <i class=\"bi bi-shield-lock me-2 text-success\"></i>
                                    <span>Changer mot de passe</span>
                                </a>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li>
                                <a class=\"dropdown-item d-flex align-items-center text-danger\" href=\"";
            // line 977
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
        // line 985
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
        // line 998
        $context["currentRoute"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 998, $this->source); })()), "request", [], "any", false, false, false, 998), "get", ["_route"], "method", false, false, false, 998);
        // line 999
        yield "                    ";
        $context["menuItems"] = $this->env->getFunction('get_menu')->getCallable()();
        // line 1000
        yield "                    
                    ";
        // line 1001
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["menuItems"]) || array_key_exists("menuItems", $context) ? $context["menuItems"] : (function () { throw new RuntimeError('Variable "menuItems" does not exist.', 1001, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1002
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 1002) == "title")) {
                // line 1003
                yield "                            <div class=\"menu-title\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 1003), "html", null, true);
                yield "</div>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 1004
$context["item"], "type", [], "any", false, false, false, 1004) == "dropdown")) {
                // line 1005
                yield "                            ";
                $context["isActive"] = false;
                // line 1006
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 1006));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 1007
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "route", [], "any", false, false, false, 1007) && (CoreExtension::getAttribute($this->env, $this->source, $context["child"], "route", [], "any", false, false, false, 1007) == (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 1007, $this->source); })())))) {
                        // line 1008
                        yield "                                    ";
                        $context["isActive"] = true;
                        // line 1009
                        yield "                                ";
                    }
                    // line 1010
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1011
                yield "                            
                            <a href=\"#submenu";
                // line 1012
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 1012), "html", null, true);
                yield "\" 
                            class=\"nav-link has-arrow ";
                // line 1013
                if ((($tmp = (isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 1013, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "active";
                }
                yield "\" 
                            data-bs-toggle=\"collapse\"
                            aria-expanded=\"";
                // line 1015
                yield (((($tmp = (isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 1015, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                yield "\">
                                <i class=\"";
                // line 1016
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 1016), "html", null, true);
                yield "\"></i>
                                <span>";
                // line 1017
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 1017), "html", null, true);
                yield "</span>
                            </a>
                            <div class=\"sub-menu collapse ";
                // line 1019
                if ((($tmp = (isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 1019, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "show";
                }
                yield "\" id=\"submenu";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 1019), "html", null, true);
                yield "\">
                                ";
                // line 1020
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 1020));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 1021
                    yield "                                    ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "route", [], "any", false, false, false, 1021)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1022
                        yield "                                        <a href=\"";
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "route", [], "any", false, false, false, 1022));
                        yield "\" 
                                        class=\"nav-link ";
                        // line 1023
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "route", [], "any", false, false, false, 1023) == (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 1023, $this->source); })()))) {
                            yield "active";
                        }
                        yield "\">
                                            <i class=\"";
                        // line 1024
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "icon", [], "any", false, false, false, 1024), "html", null, true);
                        yield "\"></i>
                                            ";
                        // line 1025
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "label", [], "any", false, false, false, 1025), "html", null, true);
                        yield "
                                        </a>
                                    ";
                    } else {
                        // line 1028
                        yield "                                        <a href=\"#\" 
                                        class=\"nav-link\">
                                            <i class=\"";
                        // line 1030
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "icon", [], "any", false, false, false, 1030), "html", null, true);
                        yield "\"></i>
                                            ";
                        // line 1031
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "label", [], "any", false, false, false, 1031), "html", null, true);
                        yield "
                                        </a>
                                    ";
                    }
                    // line 1034
                    yield "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1035
                yield "                            </div>
                        ";
            } else {
                // line 1037
                yield "                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 1037)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1038
                    yield "                                <a href=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 1038));
                    yield "\" 
                                class=\"nav-link ";
                    // line 1039
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 1039) == (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 1039, $this->source); })()))) {
                        yield "active";
                    }
                    yield "\">
                                    <i class=\"";
                    // line 1040
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 1040), "html", null, true);
                    yield "\"></i>
                                    <span>";
                    // line 1041
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 1041), "html", null, true);
                    yield "</span>
                                </a>
                            ";
                } else {
                    // line 1044
                    yield "                                <a href=\"#\" 
                                class=\"nav-link\">
                                    <i class=\"";
                    // line 1046
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 1046), "html", null, true);
                    yield "\"></i>
                                    <span>";
                    // line 1047
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 1047), "html", null, true);
                    yield "</span>
                                </a>
                            ";
                }
                // line 1050
                yield "                        ";
            }
            // line 1051
            yield "                    ";
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
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1052
        yield "                </div>
            </div>
            
            <!-- Contenu principal -->
            <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4\">
                <!-- Messages flash -->
                ";
        // line 1058
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1058, $this->source); })()), "flashes", [], "any", false, false, false, 1058));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 1059
            yield "                    <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield " alert-dismissible fade show shadow-sm border-0\" role=\"alert\">
                        <div class=\"d-flex align-items-center\">
                            ";
            // line 1061
            if (($context["label"] == "success")) {
                // line 1062
                yield "                                <i class=\"bi bi-check-circle-fill me-2\"></i>
                            ";
            } elseif (((            // line 1063
$context["label"] == "error") || ($context["label"] == "danger"))) {
                // line 1064
                yield "                                <i class=\"bi bi-exclamation-circle-fill me-2\"></i>
                            ";
            } elseif ((            // line 1065
$context["label"] == "warning")) {
                // line 1066
                yield "                                <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                            ";
            } elseif ((            // line 1067
$context["label"] == "info")) {
                // line 1068
                yield "                                <i class=\"bi bi-info-circle-fill me-2\"></i>
                            ";
            }
            // line 1070
            yield "                            <div>
                                ";
            // line 1071
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 1072
                yield "                                    ";
                yield $context["message"];
                yield "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1074
            yield "                            </div>
                        </div>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1079
        yield "                
                <!-- Contenu de la page -->
                ";
        // line 1081
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 1082
        yield "            </main>
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
        // line 1115
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
        // line 1155
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
        // line 1364
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 1365
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

    // line 750
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

    // line 1081
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

    // line 1364
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
        return array (  1901 => 1364,  1879 => 1081,  1857 => 750,  1834 => 7,  1822 => 1365,  1820 => 1364,  1608 => 1155,  1565 => 1115,  1530 => 1082,  1528 => 1081,  1524 => 1079,  1514 => 1074,  1505 => 1072,  1501 => 1071,  1498 => 1070,  1494 => 1068,  1492 => 1067,  1489 => 1066,  1487 => 1065,  1484 => 1064,  1482 => 1063,  1479 => 1062,  1477 => 1061,  1471 => 1059,  1467 => 1058,  1459 => 1052,  1445 => 1051,  1442 => 1050,  1436 => 1047,  1432 => 1046,  1428 => 1044,  1422 => 1041,  1418 => 1040,  1412 => 1039,  1407 => 1038,  1404 => 1037,  1400 => 1035,  1394 => 1034,  1388 => 1031,  1384 => 1030,  1380 => 1028,  1374 => 1025,  1370 => 1024,  1364 => 1023,  1359 => 1022,  1356 => 1021,  1352 => 1020,  1344 => 1019,  1339 => 1017,  1335 => 1016,  1331 => 1015,  1324 => 1013,  1320 => 1012,  1317 => 1011,  1311 => 1010,  1308 => 1009,  1305 => 1008,  1302 => 1007,  1297 => 1006,  1294 => 1005,  1292 => 1004,  1287 => 1003,  1284 => 1002,  1267 => 1001,  1264 => 1000,  1261 => 999,  1259 => 998,  1244 => 985,  1233 => 977,  1223 => 970,  1212 => 961,  1202 => 954,  1199 => 953,  1197 => 952,  1186 => 943,  1182 => 941,  1178 => 939,  1176 => 938,  1173 => 937,  1171 => 936,  1168 => 935,  1166 => 934,  1163 => 933,  1160 => 932,  1158 => 931,  1152 => 928,  1147 => 925,  1141 => 922,  1138 => 921,  1132 => 918,  1127 => 916,  1122 => 914,  1117 => 913,  1115 => 912,  1112 => 911,  1109 => 910,  1106 => 909,  1104 => 908,  1091 => 897,  1087 => 895,  1083 => 893,  1081 => 892,  1078 => 891,  1076 => 890,  1073 => 889,  1071 => 888,  1068 => 887,  1065 => 886,  1063 => 885,  1057 => 882,  1052 => 879,  1046 => 876,  1043 => 875,  1037 => 872,  1032 => 870,  1027 => 868,  1022 => 867,  1020 => 866,  1017 => 865,  1014 => 864,  1011 => 863,  1009 => 862,  1004 => 859,  1002 => 858,  985 => 844,  960 => 822,  947 => 811,  943 => 809,  937 => 807,  935 => 806,  931 => 804,  927 => 802,  924 => 801,  918 => 798,  915 => 797,  910 => 795,  905 => 793,  900 => 792,  898 => 791,  895 => 790,  892 => 789,  889 => 788,  886 => 787,  883 => 786,  880 => 785,  877 => 784,  875 => 783,  872 => 782,  869 => 781,  866 => 780,  864 => 779,  861 => 778,  858 => 776,  855 => 775,  852 => 774,  849 => 773,  846 => 772,  843 => 771,  841 => 770,  836 => 768,  824 => 758,  821 => 757,  818 => 755,  815 => 754,  811 => 751,  809 => 750,  63 => 7,  59 => 6,  52 => 1,);
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
            --primary-color: #667eea;
            --secondary-color: #0463f1ff;
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
            color: #2153a3ff;
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
        
        /* Logo de l'entreprise - SIMPLIFIÉ */
        .company-logo {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            overflow: hidden;
            margin-right: 10px;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
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
        
        .sidebar {
            background: linear-gradient(180deg, var(--primary-color) 0%, var(--secondary-color) 100%);
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
            color: rgba(255,255,255,0.8);
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
        
        .btn-gradient {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(102, 126, 234, 0.4);
        }
        
        /* User Avatar - SIMPLIFIÉ */
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid var(--primary-color);
            transition: all 0.3s ease;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .user-avatar:hover {
            transform: scale(1.05);
            border-color: var(--secondary-color);
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
            padding: 10px 50px 10px 20px;
            border: 3px solid #dee2e6;
            transition: all 0.3s ease;
            width: 100%;
            background-color: #f8f9fa;
            font-size: 16px;
            height: 45px;
        }

        .universal-search-input:focus {
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.15);
            border-color: var(--primary-color);
            background-color: white;
            outline: none;
        }

        .universal-search-btn {
            position: absolute;
            right: 8px;
            top: 30%;
            transform: translateY(-50%);
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
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
            box-shadow: 0 3px 10px rgba(102, 126, 234, 0.3);
        }

        .universal-search-btn:hover {
            background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%);
            transform: translateY(-50%) scale(1.05);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .universal-search-clear {
            position: absolute;
            right: 50px;
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
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
        }

        .universal-search-clear:hover {
            background: rgba(239, 68, 68, 0.1);
            color: var(--danger-color);
            transform: translateY(-50%) rotate(90deg);
        }

        .universal-search-clear.show {
            display: flex;
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
                padding: 8px 45px 8px 15px;
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

        .universal-search-input:focus {
            animation: pulseBorder 2s infinite;
        }

        @keyframes pulseBorder {
            0% {
                border-color: var(--primary-color);
                box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.15);
            }
            50% {
                border-color: var(--secondary-color);
                box-shadow: 0 0 0 6px rgba(4, 99, 241, 0.1);
            }
            100% {
                border-color: var(--primary-color);
                box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.15);
            }
        }

        .universal-search-input {
            background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23667eea' class='bi bi-search' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'/%3E%3C/svg%3E\");
            background-position: 15px center;
            background-repeat: no-repeat;
            background-size: 18px;
            padding-left: 45px;
        }

        .universal-search-input:focus {
            background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%230463f1' class='bi bi-search' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'/%3E%3C/svg%3E\");
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
        }

        .bg-success {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%) !important;
        }

        .bg-info {
            background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%) !important;
        }

        .bg-warning {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%) !important;
        }

        .bg-danger {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%) !important;
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
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
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
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
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
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            transform: translateY(-3px);
        }
        
        .version-badge {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
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
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
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
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: var(--secondary-color);
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
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
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
            
            <!-- À GAUCHE : Logo et nom de l'entreprise - SIMPLIFIÉ -->
            <a class=\"navbar-brand d-flex align-items-center\" href=\"{{ path('app_dashboard') }}\">
                <div class=\"company-logo\" id=\"companyLogo\">
                    {% if app.user %}
                        {% set user = app.user %}
                        {% set hmaService = null %}
                        {% set logo = null %}
                        {% set companyName = 'HMA MARKET' %}
                        {% set initial = 'H' %}
                        
                        {# Déterminer l'entreprise #}
                        {% if user.hmaServiceId is defined and user.hmaServiceId %}
                            {# User avec entreprise #}
                            {% set hmaService = user.hmaServiceId %}
                        {% endif %}
                        
                        {% if hmaService %}
                            {% set companyName = hmaService.companyName %}
                            {% set initial = companyName|first|upper %}
                            {% if hmaService.logo %}
                                {% set logo = asset('uploads/logos/' ~ hmaService.logo) %}
                            {% endif %}
                        {% endif %}
                        
                        {% if logo %}
                            <img src=\"{{ logo }}\" 
                                 alt=\"{{ companyName }}\"
                                 class=\"logo-img\"
                                 data-initial=\"{{ initial }}\">
                        {% else %}
                            <div class=\"logo-fallback\">
                                {{ initial }}
                            </div>
                        {% endif %}
                    {% else %}
                        <div class=\"logo-fallback\">H</div>
                    {% endif %}
                </div>
                <div class=\"company-name\" id=\"companyName\">
                    {% if app.user and app.user.hmaServiceId is defined and app.user.hmaServiceId %}
                        {{ app.user.hmaServiceId.companyName }}
                    {% else %}
                        HMA MARKET
                    {% endif %}
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
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
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
                    
                    {% for item in menuItems %}
                        {% if item.type == 'title' %}
                            <div class=\"menu-title\">{{ item.label }}</div>
                        {% elseif item.type == 'dropdown' %}
                            {% set isActive = false %}
                            {% for child in item.children %}
                                {% if child.route and child.route == currentRoute %}
                                    {% set isActive = true %}
                                {% endif %}
                            {% endfor %}
                            
                            <a href=\"#submenu{{ loop.index }}\" 
                            class=\"nav-link has-arrow {% if isActive %}active{% endif %}\" 
                            data-bs-toggle=\"collapse\"
                            aria-expanded=\"{{ isActive ? 'true' : 'false' }}\">
                                <i class=\"{{ item.icon }}\"></i>
                                <span>{{ item.label }}</span>
                            </a>
                            <div class=\"sub-menu collapse {% if isActive %}show{% endif %}\" id=\"submenu{{ loop.index }}\">
                                {% for child in item.children %}
                                    {% if child.route %}
                                        <a href=\"{{ path(child.route) }}\" 
                                        class=\"nav-link {% if child.route == currentRoute %}active{% endif %}\">
                                            <i class=\"{{ child.icon }}\"></i>
                                            {{ child.label }}
                                        </a>
                                    {% else %}
                                        <a href=\"#\" 
                                        class=\"nav-link\">
                                            <i class=\"{{ child.icon }}\"></i>
                                            {{ child.label }}
                                        </a>
                                    {% endif %}
                                {% endfor %}
                            </div>
                        {% else %}
                            {% if item.route %}
                                <a href=\"{{ path(item.route) }}\" 
                                class=\"nav-link {% if item.route == currentRoute %}active{% endif %}\">
                                    <i class=\"{{ item.icon }}\"></i>
                                    <span>{{ item.label }}</span>
                                </a>
                            {% else %}
                                <a href=\"#\" 
                                class=\"nav-link\">
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
