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

/* base-auth.html.twig */
class __TwigTemplate_c2b460c5aab2c68191e7e779eec09a4a extends Template
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
            'auth_header' => [$this, 'block_auth_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-auth.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-auth.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        
        <!-- Bootstrap 5 CSS -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
        <!-- Google Fonts -->
        <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
        
        ";
        // line 15
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 16
        yield "        
        <style>
            :root {
                --primary-color: #667eea;
                --secondary-color: #0463f1;
                --gradient-primary: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
            }
            
            body {
                font-family: 'Poppins', sans-serif;
                background: linear-gradient(135deg, #e4e6f0ff 0%, #eff2f7ff 100%);
                min-height: 100vh;
                display: flex;
                align-items: center;
                padding: 20px;
            }
            
            .auth-container {
                max-width: 500px;
                margin: 0 auto;
                width: 100%;
            }
            
            .auth-card {
                border-radius: 20px;
                overflow: hidden;
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
                border: none;
            }
            
            .auth-header {
                background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
                padding: 2.5rem 2rem;
                text-align: center;
                color: white;
            }
            
            .auth-header h1 {
                font-weight: 600;
                margin-bottom: 0.5rem;
                font-size: 2.2rem;
            }
            
            .auth-header p {
                opacity: 0.9;
                font-size: 1.1rem;
                margin-bottom: 0;
            }
            
            .auth-body {
                padding: 2.5rem;
                background-color: white;
            }
            
            .btn-primary {
                background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
                border: none;
                border-radius: 10px;
                padding: 0.75rem 1.5rem;
                font-weight: 500;
                transition: all 0.3s ease;
            }
            
            .btn-primary:hover {
                transform: translateY(-2px);
                box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
            }
            
            .form-control {
                border: 2px solid #e0e0e0;
                border-radius: 10px;
                padding: 0.75rem 1rem;
                font-size: 1rem;
            }
            
            .form-control:focus {
                border-color: var(--primary-color);
                box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
            }
            
            .auth-footer {
                text-align: center;
                margin-top: 2rem;
                padding-top: 1.5rem;
                border-top: 1px solid #e0e0e0;
                color: #6c757d;
                font-size: 0.9rem;
            }
            
            .back-to-home {
                display: inline-flex;
                align-items: center;
                color: var(--primary-color);
                text-decoration: none;
                font-weight: 500;
                margin-top: 1rem;
            }
            
            .back-to-home:hover {
                color: var(--secondary-color);
                text-decoration: underline;
            }
            
            @media (max-width: 576px) {
                body {
                    padding: 15px;
                }
                
                .auth-body {
                    padding: 2rem;
                }
                
                .auth-header {
                    padding: 2rem 1.5rem;
                }
            }
        </style>
    </head>
    
    <body>
        <div class=\"auth-container\">
            <div class=\"auth-card\">
                ";
        // line 138
        yield from $this->unwrap()->yieldBlock('auth_header', $context, $blocks);
        // line 144
        yield "                
                <div class=\"auth-body\">
                    ";
        // line 146
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 147
        yield "                </div>
            </div>
            
            ";
        // line 150
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 158
        yield "        </div>
        
        <!-- Bootstrap JS Bundle -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
        
        ";
        // line 163
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 164
        yield "    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "HMA Market";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 15
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

    // line 138
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_auth_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "auth_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "auth_header"));

        // line 139
        yield "                <div class=\"auth-header\">
                    <h1><i class=\"fas fa-store me-2\"></i>HMA Market</h1>
                    <p>Votre plateforme de gestion commerciale</p>
                </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 146
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

    // line 150
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 151
        yield "            <div class=\"auth-footer\">
                <p>&copy; ";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " HMA Market. Tous droits réservés.</p>
                <a href=\"";
        // line 153
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"back-to-home\">
                    <i class=\"fas fa-arrow-left me-2\"></i> Retour à l'accueil
                </a>
            </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 163
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
        return "base-auth.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  366 => 163,  350 => 153,  346 => 152,  343 => 151,  330 => 150,  308 => 146,  293 => 139,  280 => 138,  258 => 15,  235 => 6,  223 => 164,  221 => 163,  214 => 158,  212 => 150,  207 => 147,  205 => 146,  201 => 144,  199 => 138,  75 => 16,  73 => 15,  61 => 6,  54 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>{% block title %}HMA Market{% endblock %}</title>
        
        <!-- Bootstrap 5 CSS -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
        <!-- Google Fonts -->
        <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
        
        {% block stylesheets %}{% endblock %}
        
        <style>
            :root {
                --primary-color: #667eea;
                --secondary-color: #0463f1;
                --gradient-primary: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
            }
            
            body {
                font-family: 'Poppins', sans-serif;
                background: linear-gradient(135deg, #e4e6f0ff 0%, #eff2f7ff 100%);
                min-height: 100vh;
                display: flex;
                align-items: center;
                padding: 20px;
            }
            
            .auth-container {
                max-width: 500px;
                margin: 0 auto;
                width: 100%;
            }
            
            .auth-card {
                border-radius: 20px;
                overflow: hidden;
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
                border: none;
            }
            
            .auth-header {
                background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
                padding: 2.5rem 2rem;
                text-align: center;
                color: white;
            }
            
            .auth-header h1 {
                font-weight: 600;
                margin-bottom: 0.5rem;
                font-size: 2.2rem;
            }
            
            .auth-header p {
                opacity: 0.9;
                font-size: 1.1rem;
                margin-bottom: 0;
            }
            
            .auth-body {
                padding: 2.5rem;
                background-color: white;
            }
            
            .btn-primary {
                background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
                border: none;
                border-radius: 10px;
                padding: 0.75rem 1.5rem;
                font-weight: 500;
                transition: all 0.3s ease;
            }
            
            .btn-primary:hover {
                transform: translateY(-2px);
                box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
            }
            
            .form-control {
                border: 2px solid #e0e0e0;
                border-radius: 10px;
                padding: 0.75rem 1rem;
                font-size: 1rem;
            }
            
            .form-control:focus {
                border-color: var(--primary-color);
                box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
            }
            
            .auth-footer {
                text-align: center;
                margin-top: 2rem;
                padding-top: 1.5rem;
                border-top: 1px solid #e0e0e0;
                color: #6c757d;
                font-size: 0.9rem;
            }
            
            .back-to-home {
                display: inline-flex;
                align-items: center;
                color: var(--primary-color);
                text-decoration: none;
                font-weight: 500;
                margin-top: 1rem;
            }
            
            .back-to-home:hover {
                color: var(--secondary-color);
                text-decoration: underline;
            }
            
            @media (max-width: 576px) {
                body {
                    padding: 15px;
                }
                
                .auth-body {
                    padding: 2rem;
                }
                
                .auth-header {
                    padding: 2rem 1.5rem;
                }
            }
        </style>
    </head>
    
    <body>
        <div class=\"auth-container\">
            <div class=\"auth-card\">
                {% block auth_header %}
                <div class=\"auth-header\">
                    <h1><i class=\"fas fa-store me-2\"></i>HMA Market</h1>
                    <p>Votre plateforme de gestion commerciale</p>
                </div>
                {% endblock %}
                
                <div class=\"auth-body\">
                    {% block body %}{% endblock %}
                </div>
            </div>
            
            {% block footer %}
            <div class=\"auth-footer\">
                <p>&copy; {{ \"now\"|date(\"Y\") }} HMA Market. Tous droits réservés.</p>
                <a href=\"{{ path('app_home') }}\" class=\"back-to-home\">
                    <i class=\"fas fa-arrow-left me-2\"></i> Retour à l'accueil
                </a>
            </div>
            {% endblock %}
        </div>
        
        <!-- Bootstrap JS Bundle -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
        
        {% block javascripts %}{% endblock %}
    </body>
</html>", "base-auth.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\base-auth.html.twig");
    }
}
