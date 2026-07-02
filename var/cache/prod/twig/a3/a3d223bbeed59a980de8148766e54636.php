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

/* home/index.html.twig */
class __TwigTemplate_47cd8cd7a99e7fed879c601ab4bbaab1 extends Template
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
        return "base-auth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base-auth.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "HMA Market - Solution de gestion d'entreprise tout-en-un";
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
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\"/>
    <style>
        :root {
            --primary: #0463f1;
            --primary-dark: #0355d0;
            --secondary: #667eea;
            --dark: #1f2937;
            --light: #f9fafb;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --gradient-primary: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            --gradient-success: linear-gradient(135deg, #10b981 0%, #059669 100%);
            --gradient-warning: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            --gradient-danger: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--dark);
            overflow-x: hidden;
        }

        /* Navbar */
        .navbar {
            backdrop-filter: blur(10px);
            background-color: rgba(255,255,255,0.9);
            box-shadow: 0 2px 20px rgba(0,0,0,0.05);
        }

        .navbar-brand img {
            height: 40px;
            width: auto;
        }

        .btn-gradient {
            background: var(--gradient-primary);
            border: none;
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(4,99,241,0.3);
            color: white;
        }

        .btn-outline-gradient {
            border: 2px solid var(--primary);
            color: var(--primary);
            background: transparent;
            border-radius: 50px;
            font-weight: 600;
            padding: 0.5rem 1.5rem;
            transition: all 0.3s ease;
        }

        .btn-outline-gradient:hover {
            background: var(--gradient-primary);
            border-color: transparent;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(4,99,241,0.2);
        }

        /* Hero Section */
        .hero {
            padding-top: 120px;
            padding-bottom: 80px;
            background: linear-gradient(135deg, #f5f7fa 0%, #e9ecf5 100%);
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: var(--gradient-primary);
            opacity: 0.05;
            border-radius: 50%;
        }

        .hero::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -5%;
            width: 400px;
            height: 400px;
            background: var(--gradient-success);
            opacity: 0.05;
            border-radius: 50%;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: #4b5563;
            margin-bottom: 2rem;
        }

        .hero-image {
            border-radius: 20px;
            box-shadow: 0 30px 60px rgba(0,0,0,0.1);
            transform: perspective(1000px) rotateY(-5deg);
            transition: all 0.5s ease;
        }

        .hero-image:hover {
            transform: perspective(1000px) rotateY(0deg);
        }

        /* Section titles */
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--dark);
        }

        .section-subtitle {
            color: #6b7280;
            font-size: 1.1rem;
            margin-bottom: 3rem;
        }

        /* Feature cards */
        .feature-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            height: 100%;
            transition: all 0.3s ease;
            border: 1px solid #e5e7eb;
            box-shadow: 0 5px 20px rgba(0,0,0,0.02);
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--gradient-primary);
            transform: scaleX(0);
            transition: transform 0.3s ease;
            transform-origin: left;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.05);
            border-color: transparent;
        }

        .feature-card:hover::before {
            transform: scaleX(1);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            background: rgba(4,99,241,0.1);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            color: var(--primary);
            font-size: 2rem;
        }

        /* Pricing cards */
        .pricing-card {
            background: white;
            border-radius: 30px;
            padding: 2.5rem;
            height: 100%;
            transition: all 0.3s ease;
            border: 2px solid #e5e7eb;
            position: relative;
        }

        .pricing-card.popular {
            border-color: var(--primary);
            transform: scale(1.05);
            box-shadow: 0 20px 40px rgba(4,99,241,0.1);
            z-index: 2;
        }

        .pricing-card.popular::before {
            content: '🌟 Populaire';
            position: absolute;
            top: -12px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--gradient-primary);
            color: white;
            padding: 4px 20px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .price {
            font-size: 3rem;
            font-weight: 700;
            color: var(--dark);
            margin: 1.5rem 0;
        }

        .price-period {
            font-size: 1rem;
            color: #6b7280;
            font-weight: normal;
        }

        .feature-list {
            list-style: none;
            padding: 0;
            margin: 2rem 0;
        }

        .feature-list li {
            margin-bottom: 0.75rem;
            display: flex;
            align-items: center;
        }

        .feature-list i {
            margin-right: 0.5rem;
            color: var(--success);
        }

        /* Testimonial card */
        .testimonial-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            border: 1px solid #e5e7eb;
            position: relative;
        }

        .testimonial-card::before {
            content: '\"';
            position: absolute;
            top: 10px;
            left: 20px;
            font-size: 5rem;
            color: rgba(4,99,241,0.1);
            font-family: serif;
        }

        .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--gradient-primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 1.2rem;
        }

        /* CTA Section */
        .cta-section {
            background: var(--gradient-primary);
            color: white;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: -30%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
        }

        .cta-section::after {
            content: '';
            position: absolute;
            bottom: -20%;
            left: -5%;
            width: 300px;
            height: 300px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
        }

        .cta-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .cta-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-bottom: 2rem;
        }

        /* Stats */
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Marketplace Section */
        .marketplace-feature-icon {
            width: 60px;
            height: 60px;
            background: rgba(4,99,241,0.08);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 1.5rem;
            flex-shrink: 0;
        }

        .marketplace-feature-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            padding: 0.75rem;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .marketplace-feature-item:hover {
            background: #f8fafc;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            .section-title {
                font-size: 2rem;
            }
            .pricing-card.popular {
                transform: none;
            }
        }
    </style>
";
        yield from [];
    }

    // line 395
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 396
        yield "    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\">
        <div class=\"container\">
            <a class=\"navbar-brand d-flex align-items-center\" href=\"";
        // line 399
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                <img src=\"";
        // line 400
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/logos/logo.png"), "html", null, true);
        yield "\" alt=\"HMA Market\" height=\"40\" class=\"me-2\">
                <span class=\"fw-bold fs-4\" style=\"color: var(--primary);\">HMA SERVICE</span>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ms-auto align-items-center\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#home\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#features\">Fonctionnalités</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#pricing\">Tarifs</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#about\">À propos</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#contact\">Contact</a>
                    </li>
                    
                    ";
        // line 425
        yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 426
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_home");
        yield "\" 
                        target=\"_blank\"
                        style=\"color: var(--primary); font-weight: 600; position: relative;\">
                            <i class=\"bi bi-shop me-1\"></i>Marketplace
                            <span class=\"badge bg-danger ms-1\" style=\"font-size: 0.55rem; vertical-align: middle; animation: pulse 2s infinite;\">
                                🆕
                            </span>
                        </a>
                    </li>
                    
                    <li class=\"nav-item ms-2\">
                        <a href=\"";
        // line 437
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn btn-outline-gradient\">Connexion</a>
                    </li>
                    <li class=\"nav-item ms-2\">
                        <a href=\"";
        // line 440
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn btn-gradient\">Inscription</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id=\"home\" class=\"hero\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6 animate__animated animate__fadeInLeft\">
                    <h1 class=\"hero-title\">Gérez votre entreprise avec simplicité et efficacité</h1>
                    <p class=\"hero-subtitle\">HMA Market est la solution tout-en-un pour gérer vos stocks, ventes, achats et finances. Boostez votre productivité avec notre plateforme intuitive et puissante.</p>
                    <div class=\"d-flex flex-wrap gap-3\">
                        <a href=\"#pricing\" class=\"btn btn-gradient btn-lg\">
                            <i class=\"bi bi-rocket-takeoff me-2\"></i>Commencer gratuitement
                        </a>
                        <a href=\"#features\" class=\"btn btn-outline-gradient btn-lg\">
                            <i class=\"bi bi-play-circle me-2\"></i>Voir la démo
                        </a>
                    </div>
                    <div class=\"row mt-5\">
                        <div class=\"col-4 text-center\">
                            <div class=\"stat-number\">500+</div>
                            <p class=\"text-muted\">Entreprises</p>
                        </div>
                        <div class=\"col-4 text-center\">
                            <div class=\"stat-number\">99.9%</div>
                            <p class=\"text-muted\">Disponibilité</p>
                        </div>
                        <div class=\"col-4 text-center\">
                            <div class=\"stat-number\">24/7</div>
                            <p class=\"text-muted\">Support</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 animate__animated animate__fadeInRight\">
                    <img src=\"https://cdn.dribbble.com/users/642793/screenshots/15624822/media/78dd7daf7b4722f980ee60d341abeb35.png?compress=1&resize=800x600\" 
                         alt=\"Dashboard HMA Market\" 
                         class=\"img-fluid hero-image\">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id=\"features\" class=\"py-5 bg-white\">
        <div class=\"container\">
            <div class=\"text-center\">
                <h2 class=\"section-title\">Fonctionnalités principales</h2>
                <p class=\"section-subtitle\">Tout ce dont vous avez besoin pour gérer votre entreprise au quotidien</p>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"feature-card\">
                        <div class=\"feature-icon\">
                            <i class=\"bi bi-box-seam\"></i>
                        </div>
                        <h4>Gestion des Stocks</h4>
                        <p class=\"text-muted\">Suivez vos stocks en temps réel, gérez les inventaires et recevez des alertes pour les stocks faibles.</p>
                        <ul class=\"list-unstyled\">
                            <li><i class=\"bi bi-check-circle-fill text-success me-2\"></i>Suivi en temps réel</li>
                            <li><i class=\"bi bi-check-circle-fill text-success me-2\"></i>Alertes automatiques</li>
                            <li><i class=\"bi bi-check-circle-fill text-success me-2\"></i>Gestion des lots</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"feature-card\">
                        <div class=\"feature-icon\">
                            <i class=\"bi bi-cash-coin\"></i>
                        </div>
                        <h4>Point de Vente</h4>
                        <p class=\"text-muted\">Système de caisse complet avec gestion des ventes, reçus et transactions.</p>
                        <ul class=\"list-unstyled\">
                            <li><i class=\"bi bi-check-circle-fill text-success me-2\"></i>Interface intuitive</li>
                            <li><i class=\"bi bi-check-circle-fill text-success me-2\"></i>Reçus personnalisés</li>
                            <li><i class=\"bi bi-check-circle-fill text-success me-2\"></i>Rapports détaillés</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"feature-card\">
                        <div class=\"feature-icon\">
                            <i class=\"bi bi-graph-up\"></i>
                        </div>
                        <h4>Analytique & Rapports</h4>
                        <p class=\"text-muted\">Tableaux de bord personnalisés et rapports détaillés pour prendre des décisions éclairées.</p>
                        <ul class=\"list-unstyled\">
                            <li><i class=\"bi bi-check-circle-fill text-success me-2\"></i>Tableaux de bord</li>
                            <li><i class=\"bi bi-check-circle-fill text-success me-2\"></i>Export PDF/Excel</li>
                            <li><i class=\"bi bi-check-circle-fill text-success me-2\"></i>Indicateurs clés</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"feature-card\">
                        <div class=\"feature-icon\">
                            <i class=\"bi bi-people\"></i>
                        </div>
                        <h4>Gestion d'Équipe</h4>
                        <p class=\"text-muted\">Gérez les rôles et permissions de votre équipe avec contrôle d'accès granulaire.</p>
                        <ul class=\"list-unstyled\">
                            <li><i class=\"bi bi-check-circle-fill text-success me-2\"></i>Rôles personnalisés</li>
                            <li><i class=\"bi bi-check-circle-fill text-success me-2\"></i>Permissions fines</li>
                            <li><i class=\"bi bi-check-circle-fill text-success me-2\"></i>Suivi des activités</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"feature-card\">
                        <div class=\"feature-icon\">
                            <i class=\"bi bi-credit-card\"></i>
                        </div>
                        <h4>Facturation & Paiements</h4>
                        <p class=\"text-muted\">Gérez les factures, les paiements et suivez votre trésorerie facilement.</p>
                        <ul class=\"list-unstyled\">
                            <li><i class=\"bi bi-check-circle-fill text-success me-2\"></i>Factures automatiques</li>
                            <li><i class=\"bi bi-check-circle-fill text-success me-2\"></i>Suivi des paiements</li>
                            <li><i class=\"bi bi-check-circle-fill text-success me-2\"></i>Rapports financiers</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"feature-card\">
                        <div class=\"feature-icon\">
                            <i class=\"bi bi-phone\"></i>
                        </div>
                        <h4>Application Mobile</h4>
                        <p class=\"text-muted\">Accédez à votre entreprise depuis n'importe où avec notre application mobile.</p>
                        <ul class=\"list-unstyled\">
                            <li><i class=\"bi bi-check-circle-fill text-success me-2\"></i>iOS & Android</li>
                            <li><i class=\"bi bi-check-circle-fill text-success me-2\"></i>Notifications push</li>
                            <li><i class=\"bi bi-check-circle-fill text-success me-2\"></i>Synchronisation en temps réel</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Marketplace Section -->
    <section id=\"marketplace\" class=\"py-5 bg-light\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6\">
                    <div class=\"mb-4\">
                        <span class=\"badge bg-primary mb-3\" style=\"font-size: 0.8rem; padding: 0.5rem 1rem;\">
                            <i class=\"bi bi-star-fill me-1\"></i> NOUVEAU
                        </span>
                        <h2 class=\"section-title\" style=\"font-size: 2.2rem;\">🛒 Marketplace</h2>
                        <p class=\"section-subtitle\">Trouvez les produits de santé dont vous avez besoin près de chez vous</p>
                    </div>
                    
                    <div class=\"marketplace-feature-item\">
                        <div class=\"marketplace-feature-icon\">
                            <i class=\"bi bi-geo-alt\"></i>
                        </div>
                        <div>
                            <h6 class=\"fw-bold mb-1\">Recherche par localisation</h6>
                            <p class=\"text-muted small mb-0\">Trouvez une pharmacie près de chez vous en sélectionnant votre pays et ville</p>
                        </div>
                    </div>
                    
                    <div class=\"marketplace-feature-item\">
                        <div class=\"marketplace-feature-icon\">
                            <i class=\"bi bi-clock\"></i>
                        </div>
                        <div>
                            <h6 class=\"fw-bold mb-1\">Pharmacies de garde</h6>
                            <p class=\"text-muted small mb-0\">Consultez les pharmacies ouvertes et leurs horaires de garde</p>
                        </div>
                    </div>
                    
                    <div class=\"marketplace-feature-item\">
                        <div class=\"marketplace-feature-icon\">
                            <i class=\"bi bi-box-seam\"></i>
                        </div>
                        <div>
                            <h6 class=\"fw-bold mb-1\">Disponibilité des produits</h6>
                            <p class=\"text-muted small mb-0\">Vérifiez en temps réel la disponibilité des produits dans les pharmacies</p>
                        </div>
                    </div>
                    
                    <div class=\"mt-4\">
                        <a href=\"";
        // line 626
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_home");
        yield "\" class=\"btn btn-gradient btn-lg\">
                            <i class=\"bi bi-arrow-right me-2\"></i>Découvrir la Marketplace
                        </a>
                        <a href=\"";
        // line 629
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search");
        yield "\" class=\"btn btn-outline-gradient btn-lg ms-2\">
                            <i class=\"bi bi-search me-2\"></i>Rechercher
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"text-center p-4\">
                        <div class=\"bg-white rounded-4 shadow-lg p-5\">
                            <i class=\"bi bi-shop display-1 text-primary opacity-25\"></i>
                            <div class=\"mt-4\">
                                <div class=\"d-flex justify-content-center gap-4\">
                                    <div class=\"text-center\">
                                        <div class=\"h4 fw-bold text-primary\">100+</div>
                                        <small class=\"text-muted\">Pharmacies</small>
                                    </div>
                                    <div class=\"text-center\">
                                        <div class=\"h4 fw-bold text-primary\">500+</div>
                                        <small class=\"text-muted\">Produits</small>
                                    </div>
                                    <div class=\"text-center\">
                                        <div class=\"h4 fw-bold text-primary\">24/7</div>
                                        <small class=\"text-muted\">Disponible</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"mt-4 pt-3 border-top\">
                                <div class=\"d-flex justify-content-center gap-3\">
                                    <span class=\"badge bg-light text-dark px-3 py-2\">
                                        <i class=\"bi bi-check-circle-fill text-success me-1\"></i> Médicaments
                                    </span>
                                    <span class=\"badge bg-light text-dark px-3 py-2\">
                                        <i class=\"bi bi-check-circle-fill text-success me-1\"></i> Parapharmacie
                                    </span>
                                    <span class=\"badge bg-light text-dark px-3 py-2\">
                                        <i class=\"bi bi-check-circle-fill text-success me-1\"></i> Urgences
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id=\"pricing\" class=\"py-5 bg-white\">
        <div class=\"container\">
            <div class=\"text-center\">
                <h2 class=\"section-title\">Choisissez votre plan</h2>
                <p class=\"section-subtitle\">Des tarifs adaptés à toutes les tailles d'entreprises</p>
            </div>
            <div class=\"row g-4 align-items-center\">
                <div class=\"col-lg-4\">
                    <div class=\"pricing-card\">
                        <h4 class=\"text-center\">Starter</h4>
                        <p class=\"text-center text-muted\">Pour les petites structures</p>
                        <div class=\"price text-center\">
                            0 <small class=\"price-period\">FCFA/mois</small>
                        </div>
                        <ul class=\"feature-list\">
                            <li><i class=\"bi bi-check-circle-fill\"></i>Jusqu'à 3 utilisateurs</li>
                            <li><i class=\"bi bi-check-circle-fill\"></i>100 produits max</li>
                            <li><i class=\"bi bi-check-circle-fill\"></i>Gestion des stocks de base</li>
                            <li><i class=\"bi bi-check-circle-fill\"></i>Support par email</li>
                            <li class=\"text-muted\"><i class=\"bi bi-x-circle-fill text-danger me-2\"></i>Rapports avancés</li>
                            <li class=\"text-muted\"><i class=\"bi bi-x-circle-fill text-danger me-2\"></i>API d'intégration</li>
                        </ul>
                        <a href=\"";
        // line 697
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn btn-outline-gradient w-100\">Commencer</a>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"pricing-card popular\">
                        <h4 class=\"text-center\">Pro</h4>
                        <p class=\"text-center text-muted\">Pour les entreprises en croissance</p>
                        <div class=\"price text-center\">
                            25,000 <small class=\"price-period\">FCFA/mois</small>
                        </div>
                        <ul class=\"feature-list\">
                            <li><i class=\"bi bi-check-circle-fill\"></i>Jusqu'à 10 utilisateurs</li>
                            <li><i class=\"bi bi-check-circle-fill\"></i>Produits illimités</li>
                            <li><i class=\"bi bi-check-circle-fill\"></i>Gestion complète des stocks</li>
                            <li><i class=\"bi bi-check-circle-fill\"></i>Rapports avancés</li>
                            <li><i class=\"bi bi-check-circle-fill\"></i>Support prioritaire</li>
                            <li><i class=\"bi bi-check-circle-fill\"></i>API d'intégration</li>
                        </ul>
                        <a href=\"";
        // line 715
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn btn-gradient w-100\">Choisir Pro</a>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"pricing-card\">
                        <h4 class=\"text-center\">Enterprise</h4>
                        <p class=\"text-center text-muted\">Solution sur mesure</p>
                        <div class=\"price text-center\">
                            Sur devis
                        </div>
                        <ul class=\"feature-list\">
                            <li><i class=\"bi bi-check-circle-fill\"></i>Utilisateurs illimités</li>
                            <li><i class=\"bi bi-check-circle-fill\"></i>Toutes les fonctionnalités Pro</li>
                            <li><i class=\"bi bi-check-circle-fill\"></i>Intégrations personnalisées</li>
                            <li><i class=\"bi bi-check-circle-fill\"></i>Support 24/7 dédié</li>
                            <li><i class=\"bi bi-check-circle-fill\"></i>Formation de l'équipe</li>
                            <li><i class=\"bi bi-check-circle-fill\"></i>Déploiement sur mesure</li>
                        </ul>
                        <a href=\"#contact\" class=\"btn btn-outline-gradient w-100\">Nous contacter</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id=\"about\" class=\"py-5 bg-light\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6 mb-4 mb-lg-0\">
                    <h2 class=\"section-title\">À propos de HMA Service</h2>
                    <p class=\"section-subtitle\">Notre mission, notre vision</p>
                    <div class=\"feature-card p-4\">
                        <h4>Notre mission</h4>
                        <p class=\"text-muted\">Nous aidons les entreprises africaines à digitaliser leurs opérations et à accroître leur productivité grâce à des solutions logicielles accessibles et adaptées.</p>
                        <p class=\"text-muted\">Fondée en 2023, HMA Service s'engage à fournir des outils de gestion d'entreprise performants à des prix abordables.</p>
                        <div class=\"row mt-4\">
                            <div class=\"col-6\">
                                <div class=\"stat-number\">100%</div>
                                <p class=\"text-muted\">Satisfaction client</p>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"stat-number\">500+</div>
                                <p class=\"text-muted\">Clients actifs</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"testimonial-card\">
                        <p class=\"mb-4\">\"HMA Service a transformé la façon dont nous gérons notre entreprise. L'interface est intuitive et le support est exceptionnel.\"</p>
                        <div class=\"d-flex align-items-center\">
                            <div class=\"user-avatar me-3\">AK</div>
                            <div>
                                <h6 class=\"mb-0\">Amiral Kouassi</h6>
                                <small class=\"text-muted\">CEO, Tech Solutions Inc.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact & CTA Section -->
    <section id=\"contact\" class=\"cta-section\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8 text-center\">
                    <h2 class=\"cta-title\">Prêt à transformer votre entreprise ?</h2>
                    <p class=\"cta-subtitle\">Inscrivez-vous maintenant et profitez de 14 jours d'essai gratuit</p>
                    <div class=\"card bg-white shadow-lg border-0\">
                        <div class=\"card-body p-5\">
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-4 mb-md-0\">
                                    <h4>Contactez-nous</h4>
                                    <p class=\"text-muted mb-3\"><i class=\"bi bi-envelope me-2 text-primary\"></i>contact@hmamarket.com</p>
                                    <p class=\"text-muted mb-3\"><i class=\"bi bi-phone me-2 text-primary\"></i>+229 01 56 13 92 00</p>
                                    <p class=\"text-muted\"><i class=\"bi bi-geo-alt me-2 text-primary\"></i>Cotonou, Bénin</p>
                                </div>
                                <div class=\"col-md-6\">
                                    <form id=\"contactForm\">
                                        <div class=\"mb-3\">
                                            <input type=\"text\" class=\"form-control form-control-lg\" placeholder=\"Votre nom\" required>
                                        </div>
                                        <div class=\"mb-3\">
                                            <input type=\"email\" class=\"form-control form-control-lg\" placeholder=\"Votre email\" required>
                                        </div>
                                        <div class=\"mb-3\">
                                            <textarea class=\"form-control form-control-lg\" rows=\"3\" placeholder=\"Votre message\" required></textarea>
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-gradient w-100 btn-lg\">
                                            <i class=\"bi bi-send me-2\"></i>Envoyer
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class=\"bg-dark text-white py-4\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <p class=\"mb-0\">&copy; ";
        // line 824
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " HMA Service. Tous droits réservés.</p>
                </div>
                <div class=\"col-md-6 text-md-end\">
                    <a href=\"#\" class=\"text-white me-3\"><i class=\"bi bi-facebook\"></i></a>
                    <a href=\"#\" class=\"text-white me-3\"><i class=\"bi bi-twitter\"></i></a>
                    <a href=\"#\" class=\"text-white me-3\"><i class=\"bi bi-linkedin\"></i></a>
                    <a href=\"#\" class=\"text-white\"><i class=\"bi bi-instagram\"></i></a>
                </div>
            </div>
        </div>
    </footer>
";
        yield from [];
    }

    // line 837
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 838
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^=\"#\"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Contact form submission (demo)
            const contactForm = document.getElementById('contactForm');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    alert('Merci pour votre message ! Nous vous répondrons dans les plus brefs délais.');
                    contactForm.reset();
                });
            }

            // Animation on scroll (using IntersectionObserver)
            const observerOptions = {
                threshold: 0.1
            };
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                        observer.unobserve(entry.target); // une seule fois
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.feature-card, .pricing-card, .testimonial-card, .marketplace-feature-item').forEach(card => {
                observer.observe(card);
            });
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
        return "home/index.html.twig";
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
        return array (  954 => 838,  947 => 837,  930 => 824,  818 => 715,  797 => 697,  726 => 629,  720 => 626,  531 => 440,  525 => 437,  511 => 426,  508 => 425,  481 => 400,  477 => 399,  472 => 396,  465 => 395,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "home/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\home\\index.html.twig");
    }
}
