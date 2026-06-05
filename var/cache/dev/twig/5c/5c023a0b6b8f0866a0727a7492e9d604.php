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

/* partials/main.html.twig */
class __TwigTemplate_df9742c6d5c2f59663617b603fcc5e31 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/main.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/main.html.twig"));

        // line 2
        yield "<!doctype html>
<html lang=\"fr\" data-layout=\"vertical\" data-sidebar=\"light\" data-sidebar-size=\"lg\">
<head>
    ";
        // line 5
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Dashboard"]);
        yield "
    ";
        // line 6
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/head-css.html.twig");
        yield "
</head>
<body>
    <!-- Begin page -->
    <div id=\"layout-wrapper\">
        ";
        // line 11
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/menu.html.twig");
        yield "
        
        <div class=\"main-content\">
            <div class=\"page-content\">
                <div class=\"container-fluid\">
                    <!-- ICI S'AFFICHERA LE CONTENU SPÉCIFIQUE À CHAQUE PAGE -->
                    ";
        // line 17
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 18
        yield "                </div>
            </div>
        </div>
    </div>
    
    ";
        // line 23
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/footer.html.twig");
        yield "
    ";
        // line 24
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/vendor-scripts.html.twig");
        yield "
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/main.html.twig";
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
        return array (  102 => 17,  88 => 24,  84 => 23,  77 => 18,  75 => 17,  66 => 11,  58 => 6,  54 => 5,  49 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/partials/main.html.twig #}
<!doctype html>
<html lang=\"fr\" data-layout=\"vertical\" data-sidebar=\"light\" data-sidebar-size=\"lg\">
<head>
    {{ include('partials/title-meta.html.twig', {title: 'Dashboard'}) }}
    {{ include('partials/head-css.html.twig') }}
</head>
<body>
    <!-- Begin page -->
    <div id=\"layout-wrapper\">
        {{ include('partials/menu.html.twig') }}
        
        <div class=\"main-content\">
            <div class=\"page-content\">
                <div class=\"container-fluid\">
                    <!-- ICI S'AFFICHERA LE CONTENU SPÉCIFIQUE À CHAQUE PAGE -->
                    {% block content %}{% endblock %}
                </div>
            </div>
        </div>
    </div>
    
    {{ include('partials/footer.html.twig') }}
    {{ include('partials/vendor-scripts.html.twig') }}
</body>
</html>", "partials/main.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\partials\\main.html.twig");
    }
}
