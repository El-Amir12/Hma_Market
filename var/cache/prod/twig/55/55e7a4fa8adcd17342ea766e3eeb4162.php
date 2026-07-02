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
class __TwigTemplate_ac3f21621f052c36efa618d8ccad296f extends Template
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
        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        return array (  90 => 17,  82 => 24,  78 => 23,  71 => 18,  69 => 17,  60 => 11,  52 => 6,  48 => 5,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/main.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\partials\\main.html.twig");
    }
}
