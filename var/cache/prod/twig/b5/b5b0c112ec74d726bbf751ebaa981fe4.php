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

/* customer/auth/profile/index.hmtl.twig */
class __TwigTemplate_b43c45a50ad72e4f8703453123f3ec8b extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base_customer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base_customer.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Mon profil - HMA Market";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<div class=\"row\">
    <div class=\"col-md-4\">
        <div class=\"card border-0 shadow-sm rounded-4\">
            <div class=\"card-body text-center p-4\">
                <div class=\"mb-3\">
                    ";
        // line 12
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "photo", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/customers/" . CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "photo", [], "any", false, false, false, 13))), "html", null, true);
            yield "\" 
                             alt=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", [], "any", false, false, false, 14), "html", null, true);
            yield "\" 
                             class=\"rounded-circle\" 
                             style=\"width: 120px; height: 120px; object-fit: cover;\">
                    ";
        } else {
            // line 18
            yield "                        <div class=\"rounded-circle bg-primary d-flex align-items-center justify-content-center mx-auto\"
                             style=\"width: 120px; height: 120px; font-size: 3rem; color: white;\">
                            ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "initials", [], "any", false, false, false, 20), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 23
        yield "                </div>
                <h4 class=\"fw-bold\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", [], "any", false, false, false, 24), "html", null, true);
        yield "</h4>
                <p class=\"text-muted\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "email", [], "any", false, false, false, 25), "html", null, true);
        yield "</p>
                <div class=\"d-flex gap-2 justify-content-center\">
                    <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer_profile_edit");
        yield "\" class=\"btn btn-outline-primary btn-sm\">
                        <i class=\"fas fa-edit me-1\"></i>Modifier
                    </a>
                    <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer_change_password");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                        <i class=\"fas fa-key me-1\"></i>Mot de passe
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-md-8\">
        <div class=\"card border-0 shadow-sm rounded-4\">
            <div class=\"card-body p-4\">
                <h5 class=\"fw-bold mb-4\">Informations personnelles</h5>
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"text-muted small\">Nom complet</label>
                        <p class=\"fw-semibold\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", [], "any", false, false, false, 44), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"text-muted small\">Email</label>
                        <p class=\"fw-semibold\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "email", [], "any", false, false, false, 48), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"text-muted small\">Téléphone</label>
                        <p class=\"fw-semibold\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "phone", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "phone", [], "any", false, false, false, 52), "Non renseigné")) : ("Non renseigné")), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"text-muted small\">Ville</label>
                        <p class=\"fw-semibold\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "city", [], "any", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "city", [], "any", false, false, false, 56), "Non renseignée")) : ("Non renseignée")), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"col-12 mb-3\">
                        <label class=\"text-muted small\">Adresse</label>
                        <p class=\"fw-semibold\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "address", [], "any", true, true, false, 60)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "address", [], "any", false, false, false, 60), "Non renseignée")) : ("Non renseignée")), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"col-md-6\">
                        <label class=\"text-muted small\">Pays</label>
                        <p class=\"fw-semibold\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "country", [], "any", true, true, false, 64)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "country", [], "any", false, false, false, 64), "Non renseigné")) : ("Non renseigné")), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"col-md-6\">
                        <label class=\"text-muted small\">Membre depuis</label>
                        <p class=\"fw-semibold\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "createdAt", [], "any", false, false, false, 68), "d/m/Y"), "html", null, true);
        yield "</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "customer/auth/profile/index.hmtl.twig";
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
        return array (  178 => 68,  171 => 64,  164 => 60,  157 => 56,  150 => 52,  143 => 48,  136 => 44,  119 => 30,  113 => 27,  108 => 25,  104 => 24,  101 => 23,  95 => 20,  91 => 18,  84 => 14,  79 => 13,  77 => 12,  70 => 7,  63 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "customer/auth/profile/index.hmtl.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\customer\\auth\\profile\\index.hmtl.twig");
    }
}
