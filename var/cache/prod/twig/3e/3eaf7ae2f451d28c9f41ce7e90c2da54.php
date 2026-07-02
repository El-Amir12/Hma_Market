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

/* first_login/info.html.twig */
class __TwigTemplate_24ae2333582f45e7193565be2c194bea extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base-auth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base-auth.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Activation réussie - HMA Market";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .activation-section {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.08) 0%, rgba(4, 99, 241, 0.04) 100%);
            min-height: 100vh;
            padding: 100px 0 50px;
        }
        
        .activation-card {
            border-radius: 20px;
            border: 2px solid var(--primary-color);
            box-shadow: 0 20px 60px rgba(102, 126, 234, 0.2);
            background: white;
        }
        
        .subscription-badge {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            margin: 2rem 0;
        }
        
        .subscription-number {
            font-family: 'Courier New', monospace;
            font-size: 2.5rem;
            font-weight: bold;
            letter-spacing: 2px;
        }
        
        .next-steps {
            background: #f9fafb;
            border-radius: 15px;
            padding: 1.5rem;
        }
        
        .step-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
        }
        
        .step-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .step-number {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 1rem;
        }
    </style>
";
        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 73
        yield "<div class=\"activation-section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"activation-card p-5\">
                    <div class=\"text-center mb-4\">
                        <div class=\"mb-4\">
                            <i class=\"bi bi-check-circle-fill text-success display-1\"></i>
                        </div>
                        
                        <h1 class=\"fw-bold mb-3\">Félicitations !</h1>
                        <p class=\"lead text-muted\">
                            Votre compte entreprise a été activé avec succès.
                        </p>
                    </div>
                    
                    ";
        // line 89
        if ((($tmp = ($context["subscription_number"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 90
            yield "                    <div class=\"subscription-badge\">
                        <h6 class=\"mb-3 opacity-75\">VOTRE NUMÉRO D'ABONNEMENT</h6>
                        <div class=\"subscription-number\">
                            ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscription_number"] ?? null), "html", null, true);
            yield "
                        </div>
                        <p class=\"mt-3 mb-0 small opacity-75\">
                            Ce numéro est unique et vous identifie dans notre système.
                        </p>
                    </div>
                    ";
        }
        // line 100
        yield "                    
                    <div class=\"alert alert-info mb-4\">
                        <i class=\"bi bi-info-circle me-2\"></i>
                        <strong>Important :</strong> Pour des raisons de sécurité, un compte utilisateur propriétaire a été créé pour vous.
                        Vous devez maintenant vous déconnecter et vous reconnecter avec vos nouveaux identifiants.
                    </div>
                    
                    <div class=\"next-steps mb-5\">
                        <h4 class=\"mb-4\">Prochaines étapes :</h4>
                        
                        <div class=\"step-card d-flex align-items-center\">
                            <div class=\"step-number\">1</div>
                            <div>
                                <h6 class=\"mb-1\">Déconnexion</h6>
                                <p class=\"mb-0 text-muted small\">
                                    Cliquez sur le bouton \"Se déconnecter\" ci-dessous
                                </p>
                            </div>
                        </div>
                        
                        <div class=\"step-card d-flex align-items-center\">
                            <div class=\"step-number\">2</div>
                            <div>
                                <h6 class=\"mb-1\">Reconnexion</h6>
                                <p class=\"mb-0 text-muted small\">
                                    Utilisez le même email avec le mot de passe envoyé
                                </p>
                            </div>
                        </div>
                        
                        <div class=\"step-card d-flex align-items-center\">
                            <div class=\"step-number\">3</div>
                            <div>
                                <h6 class=\"mb-1\">Configuration</h6>
                                <p class=\"mb-0 text-muted small\">
                                    Configurez votre compte et ajoutez vos premiers produits
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"d-grid gap-3\">
                        <a href=\"";
        // line 142
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_first_login_complete");
        yield "\" class=\"btn btn-primary btn-lg\">
                            <i class=\"bi bi-box-arrow-right me-2\"></i>Se déconnecter et continuer
                        </a>
                        
                        <button type=\"button\" class=\"btn btn-outline-primary btn-lg\" onclick=\"copySubscriptionNumber()\">
                            <i class=\"bi bi-clipboard me-2\"></i>Copier le numéro d'abonnement
                        </button>
                    </div>
                    
                    <div class=\"text-center mt-4\">
                        <p class=\"text-muted small\">
                            <i class=\"bi bi-envelope me-1\"></i>
                            Les identifiants de connexion ont été envoyés à votre adresse email.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function copySubscriptionNumber() {
        const subscriptionNumber = \"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscription_number"] ?? null), "html", null, true);
        yield "\";
        navigator.clipboard.writeText(subscriptionNumber).then(() => {
            alert('Numéro d\\'abonnement copié dans le presse-papier !');
        });
    }
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "first_login/info.html.twig";
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
        return array (  254 => 165,  228 => 142,  184 => 100,  174 => 93,  169 => 90,  167 => 89,  149 => 73,  142 => 72,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "first_login/info.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\first_login\\info.html.twig");
    }
}
